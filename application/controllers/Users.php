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

}
