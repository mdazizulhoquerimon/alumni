<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function login()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$this->form_validation->set_rules('email','Email','required|trim|valid_email');
			$this->form_validation->set_rules('password','Password','required|min_length[6]');

			if($this->form_validation->run() == TRUE)
			{
				$data = $this->input->post();
				$email = $data['email'];
				$password = md5($data['password']);

				$this->load->model('Auth');

				if($this->Auth->loginfunc($email, $password))
				{
					$this->session->set_flashdata("success", "You are now logged in");

					$_SESSION['user_logged'] = TRUE;
					$_SESSION['email'] = $email;
					
					redirect('users/profile', 'refresh');
				}
				else
				{
					$this->session->set_flashdata("error", "No such email/password found");
					redirect("users/login", 'refresh');
				}
			}
			// else
			// {
			// 	//$this->session->set_flashdata("error", "No such email/password found");
			// 	redirect("users/login", 'refresh');
			// }
		}

		$this->load->view('public/userlogin');
	}

	public function register()
	{
		//if(isset($_POST['registerbtn']))
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$this->load->model('Auth');
			$this->form_validation->set_rules('fullname','Full Name','required');
			$this->form_validation->set_rules('batch','Batch Name','required');
			$this->form_validation->set_rules('studentid','Student Id','required|is_unique[registeredalumni.studentid]', array(
																			'required'      => 'You have not provided %s.',
																			'is_unique'     => 'This %s already exists. Please try with another one'));
			$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[registeredalumni.email]', array(
																			'required'      => 'You have not provided %s.',
																			'is_unique'     => 'This %s already exists. Please try with another one'));
			$this->form_validation->set_rules('password','Password','required|min_length[6]');
			$this->form_validation->set_rules('password2','Confirm Password','required|min_length[6]|matches[password]');

			if($this->form_validation->run() == TRUE)
			{
				$data = $this->input->post();
				$temppassword = $data['password'];
				$verificationkey = md5(rand());
				$data['verificationkey'] = $verificationkey;
				$data['password'] = md5($temppassword);
				$data['idcreatedate'] = date('Y-m-d');
				$data['isverified'] = 0;
				unset($data['password2']);
				$emailaddr = $data['email'];
				//echo "<br><br><br><br><br><br><br><br><br><br><br>found";
				//print_r($data);
				$id = $this->Auth->registeruser($data);
				if($id > 0)
				{
					if($this->sendemail($verificationkey,$emailaddr))
					{
						$this->session->set_flashdata('success','Your account has been registered. Please verify your email to LOG IN now');
						redirect('users/register','refresh');
					}
					else
					{
						$this->session->set_flashdata("error", "An error occurred. Please try again");
						redirect('users/register','refresh');
					}
				}
				else
				{
					$this->session->set_flashdata("error", "An error occurred. Please try again");
					redirect('users/register','refresh');
				}
				
			}
		}

		
		$this->load->view('public/register-page');
	}

	public function logout()
	{
		$_SESSION['user_logged'] = FALSE;
		$_SESSION['email'] = '';
		$this->session->set_flashdata('success','Your have been logged out successfully');
		redirect('users/login','refresh');
	}

	public function profile()
	{
		if($_SESSION['user_logged'] == TRUE && $_SESSION['email'] != "")
		{
			$this->load->view('public/header_profile');
			$this->load->view('public/profile');
			$this->load->view('public/footer_profile');
		}
		else
		{
			$this->session->set_flashdata("error", "You have to login first to view this page");
			redirect('users/login','refresh');
		}
		
	}

	public function paymentinfo()
	{
		$this->load->view('public/header_profile');
		$this->load->view('public/payment_info');
		$this->load->view('public/footer_profile');
	}

	public function editprofile()
	{
		$this->load->view('public/header_profile');
		$this->load->view('public/edit_profile');
		$this->load->view('public/footer_profile');
	}

	public function sendemail($verificationkey,$emailaddr)
	{
		//Load email library
		$this->load->library('email');
		//$this->load->library('encrypt');

		//SMTP & mail configuration
		$config = array(
			'protocol'  => 'smtp',
			'smtp_host' => 'in-v3.mailjet.com',
			'smtp_port' => 587,
			'smtp_user' => 'a08541261509eac47932f82efdf46e2f',
			'smtp_pass' => '763cd3e5676038ecf10b7501acb0bd66',
			'mailtype'  => 'html',
			'charset'   => 'utf-8'
		);
		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");

		//Email content
		$htmlContent = '<h1>Please verify your email addressr</h1>';
		$htmlContent .= '<h2>From CUELSA</h2>';
		$htmlContent .= '<p>This email has sent from CUELSA website. You have been registered as a user.</p>';
		$htmlContent .= '<p>Please click this <a href="localhost/alumni/users/verifyemail/'.$verificationkey.'">link</a>.</p>';
		$htmlContent .= '<br><br><p>After you click this link, your account will be activated.</p>';
		$htmlContent .= '<br><br><p>If you did not intend to receive this mail, please ignore and delete this mail.</p>';
		$htmlContent .= '<br><br><p>Thank you<br>CUELSA</p>';

		$this->email->to($emailaddr);
		$this->email->from('u1403097@student.cuet.ac.bd','CUELSA');
		$this->email->subject('CUELSA Account Verification');
		$this->email->message($htmlContent);

		//Send email
		if($this->email->send()) return TRUE;
		else return FALSE;
	}

	public function verifyemail()
	{
		if($this->uri->segment(3))
		{
			$verificationkey = $this->uri->segment(3);
			$this->load->model('Auth');
			if($this->Auth->verify_email($verificationkey) == TRUE)
			{
				$this->session->set_flashdata("success", "Your Email has been successfully verified. Please LOGIN now to the Dashboard.");
				redirect('users/login','refresh');
			}
			else
			{
				$this->session->set_flashdata("error", "Invalid Activation Link. Please try again.");
				redirect('users/login', 'refresh');
			}
		}
	}

}
