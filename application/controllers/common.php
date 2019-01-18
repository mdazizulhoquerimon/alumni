<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class Common extends BaseController {

    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
        $this->load->model('news_model');
    }

	public function about_us()
	{
		$this->load->view('public/about_us');
	}

	public function general_member()
	{
		$this->load->view('public/general_member');
	}

	public function executive_member()
	{
        $data['allRecords'] = $this->member_model->getAllExecutiveMember();
//        echo ("<pre>");
//        print_r($data);
//        exit;

		$this->load->view('public/executive_member',$data);
	}
	
	public function news()
	{
        $data['allRecords'] = $this->news_model->getAllNews();
		$this->load->view('public/news',$data);
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
