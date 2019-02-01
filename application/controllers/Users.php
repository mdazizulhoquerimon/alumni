<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('event_model');
	}
	
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
		}

		$this->load->view('public/userlogin');
	}

	public function register()
	{
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
		try 
		{
			if($_SESSION['user_logged'] == TRUE && $_SESSION['email'] != "")
			{
				$useremail = $_SESSION['email'];
				$this->load->model('ProfileModel');
				$fetched_user_data['fetched_user_data'] = $this->ProfileModel->get_user_data($useremail);
	
				$this->load->view('public/header_profile', $fetched_user_data);
				$this->load->view('public/profile', $fetched_user_data);
				$this->load->view('public/footer_profile');
				
			}
			else
			{
				$this->session->set_flashdata("error", "You have to login first to view this page");
				redirect('users/login','refresh');
			}
		}
		catch(Exception $e)
		{
			$this->session->set_flashdata("error", "You have to login first to view this page");
			redirect('users/login','refresh');
		}
		
		
	}

	public function paymentinfo()
	{
		if($_SESSION['user_logged'] == TRUE && $_SESSION['email'] != "")
		{
			$useremail = $_SESSION['email'];
			$this->load->model('ProfileModel');
			$this->load->model('PaymentModel');
			$user_data = array();
			$user_data = $this->ProfileModel->get_user_data($useremail);
			$verificationkey = $user_data['verificationkey'];
			//error_log(print_r($user_data, true));
			$paymentdata = array();
			$paymentdata = $this->PaymentModel->get_user_payment_data($verificationkey);
			//error_log(print_r($paymentdata, true));
			$fetched_user_data['fetched_user_data'] = array_merge($user_data, $paymentdata);
			//error_log(print_r($fetched_user_data['fetched_user_data'], true));
			$this->load->view('public/header_profile', $fetched_user_data);
			$this->load->view('public/payment_info', $fetched_user_data);
			$this->load->view('public/footer_profile');
			
		}
		else
		{
			$this->session->set_flashdata("error", "You have to login first to view this page");
			redirect('users/login','refresh');
		}
	}

	public function monthlypayment()
	{
		if($_SESSION['user_logged'] == TRUE && $_SESSION['email'] != "")
		{
			$useremail = $_SESSION['email'];
			$this->load->model('ProfileModel');
			$this->load->model('PaymentModel');
			$user_data = array();
			$user_data = $this->ProfileModel->get_user_data($useremail);
			$verificationkey = $user_data['verificationkey'];
			//error_log(print_r($user_data, true));
			$paymentdata = array();
			$paymentdata = $this->PaymentModel->get_user_payment_data($verificationkey);
			$monthname = $this->input->get('month');
			if($paymentdata[$monthname] == 'fa-check')
			{
				$paymentdata['isPaid'] = '1';
				$paymentdata['monthname'] = $monthname;
				$checkarray = array('verificationkey'=>$verificationkey, 'value_a'=>$monthname, 'order_status'=>'Processing');
				$this->load->database();
				$this->db->where($checkarray);
				$query = $this->db->get('payment_details');
				if($query->num_rows() > 0)
				{
					$row = $query->row_array();
				}
				$paymentdata = array_merge($paymentdata, $row);
				//error_log(print_r($paymentdata, true));
				$fetched_user_data['fetched_user_data'] = array_merge($user_data, $paymentdata);
				$this->load->view('public/header_profile', $fetched_user_data);
				$this->load->view('public/payment_details', $fetched_user_data);
				$this->load->view('public/footer_profile');
			}
			else if($paymentdata[$monthname] == 'fa-times')
			{
				$paymentdata['isPaid'] = '0';
				$paymentdata['monthname'] = $monthname;
				$fetched_user_data['fetched_user_data'] = array_merge($user_data, $paymentdata);
				$this->load->view('public/header_profile', $fetched_user_data);
				$this->load->view('public/payment_details', $fetched_user_data);
				$this->load->view('public/footer_profile');
			}			
		}
		else
		{
			$this->session->set_flashdata("error", "You have to login first to view this page");
			redirect('users/login','refresh');
		}
	}

	public function editcredentials()
	{
		if($_SESSION['user_logged'] == TRUE && $_SESSION['email'] != "")
		{
			$useremail = $_SESSION['email'];
			$this->load->model('ProfileModel');
			$fetched_user_data['fetched_user_data'] = $this->ProfileModel->get_user_data($useremail);
			
			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				$this->form_validation->set_rules('email','Email','required');
				$this->form_validation->set_rules('password','Password','required|min_length[6]');
				$this->form_validation->set_rules('password2','Confirm Password','required|min_length[6]|matches[password]');
		
				if($this->form_validation->run() == TRUE)
				{
					$data = $this->input->post();
					$data['password'] = md5($data['password']);
					unset($data['password2']);
					if($this->ProfileModel->edit_user_credentials($data,$useremail))
					{
						$this->session->set_flashdata('success','Your have successfully modified your user data');
						redirect('users/editcredentials','refresh');
					}
					else
					{
						$this->session->set_flashdata("error", "An error occurred. Please try again");
						redirect('users/editcredentials','refresh');
					}
					
				}
			}
			$this->load->view('public/header_profile', $fetched_user_data);
			$this->load->view('public/edit_credentials', $fetched_user_data);
			$this->load->view('public/footer_profile');
			
		}
		else
		{
			$this->session->set_flashdata("error", "You have to login first to view this page");
			redirect('users/login','refresh');
		}
	}

	public function editprofile()
	{
		if($_SESSION['user_logged'] == TRUE && $_SESSION['email'] != "")
		{
			$useremail = $_SESSION['email'];
			$this->load->model('ProfileModel');
			$fetched_user_data['fetched_user_data'] = $this->ProfileModel->get_user_data($useremail);
			//$fetched_user_data['lastname'] = $fullname[1];
			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				$this->form_validation->set_rules('firstname','First Name','required');
				$this->form_validation->set_rules('lastname','Last Name','required');
				$this->form_validation->set_rules('designation','Designation Name','required');
				$this->form_validation->set_rules('companyname','Company/Institution Name','required');
		
				if($this->form_validation->run() == TRUE)
				{
					$data = $this->input->post();
					if($_FILES['imagename']['name'] !== '')
					{
						$this->load->helper(array('form','file','url'));
						$config_image = array();
						$config_image['upload_path'] = './uploads/';
						$config_image['allowed_types'] = 'jpeg|jpg|png|gif';
						$config_image['max_size'] = '2048000';
						$this->load->library('upload', $config_image);
						$this->upload->do_upload('imagename');
						$imgData = array('upload_data' => $this->upload->data());
						$data['imagename'] = $imgData['upload_data']['file_name'];
					}
					else
					{
						unset($data['imagename']);
					}
					
					if($this->ProfileModel->edit_user_data($data,$useremail))
					{
						$this->session->set_flashdata('success','Your have successfully modified your user data');
						redirect('users/editprofile','refresh');
					}
					else
					{
						$this->session->set_flashdata("error", "An error occurred. Please try again");
						redirect('users/editprofile','refresh');
					}
					
				}
			}

			$this->load->view('public/header_profile', $fetched_user_data);
			$this->load->view('public/edit_profile', $fetched_user_data);
			$this->load->view('public/footer_profile');
			
		}
		else
		{
			$this->session->set_flashdata("error", "You have to login first to view this page");
			redirect('users/login','refresh');
		}
		
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
		$htmlContent = '<h1>Please verify your email address</h1>';
		$htmlContent .= '<h2>From CUELSA</h2>';
		$htmlContent .= '<p>This email has sent from CUELSA website. You have been registered as a user.</p>';
		$htmlContent .= '<p>Please click this <a href="'.base_url().'users/verifyemail/'.$verificationkey.'">link</a>.</p>';
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
				$batchname = $this->Auth->getbatchname($verificationkey);
				$generateduserid = $this->generateuserid($batchname);

				while($this->Auth->userid_exists($generateduserid))
				{
					$generateduserid = $this->generateuserid($batchname);
				}
				$this->Auth->push_userid($generateduserid, $verificationkey);
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

	public function generateuserid($batch)
	{
		$finalid = $batch."CUELSA";
		for ($x = 0; $x < 3; $x++)
		{
			$finalid .= mt_rand(0,9);
		}
		return $finalid;
	}

}
