<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function login()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$this->form_validation->set_rules('email','Email','required');
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
			$this->form_validation->set_rules('fullname','Full Name','required');
			$this->form_validation->set_rules('batch','Batch Name','required');
			$this->form_validation->set_rules('studentid','Student Id','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required|min_length[6]');
			$this->form_validation->set_rules('password2','Confirm Password','required|min_length[6]|matches[password]');

			if($this->form_validation->run() == TRUE)
			{
				$data = $this->input->post();
				$temppassword = $data['password'];
				$data['password'] = md5($temppassword);
				$data['idcreatedate'] = date('Y-m-d');
				unset($data['password2']);
				//echo "<br><br><br><br><br><br><br><br><br><br><br>found";
				//print_r($data);
				$this->db->insert('registeredalumni',$data);
				$this->session->set_flashdata('success','Your account has been registered. Please verify your email to LOG IN now');
				redirect('users/register','refresh');
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

}
