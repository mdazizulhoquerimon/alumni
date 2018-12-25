<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('public/header');
		$this->load->view('public/home');
		$this->load->view('public/footer');
	}
}
