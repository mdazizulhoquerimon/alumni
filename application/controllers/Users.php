<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function login()
	{
		$this->load->view('public/userlogin');
	}
	public function register()
	{
		$this->load->view('public/register-page');
	}
	public function profile()
	{
		$this->load->view('public/header_profile');
		$this->load->view('public/profile');
		$this->load->view('public/footer_profile');
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
