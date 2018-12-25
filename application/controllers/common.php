<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common extends CI_Controller {

	public function about_us()
	{
		$this->load->view('public/about_us');
	}

	public function general_member()
	{
		$this->load->view('public/general_member');
	}

	public function news()
	{
		$this->load->view('public/news');
	}

	public function news_view()
	{
		$this->load->view('public/news_view');
	}

	public function events()
	{
		$this->load->view('public/events');
	}

	public function events_view()
	{
		$this->load->view('public/events_view');
	}

	public function gallery()
	{
		$this->load->view('public/gallery');
	}


}
