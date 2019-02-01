<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class Common extends BaseController
{

    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
        $this->load->model('news_model');
        $this->load->model('event_model');
        $this->load->model('notice_model');
        $this->load->model('career_model');
        $this->load->model('photo_gallery_model');
    }
//................................................................................Home Page Functionality START..........................................................................................//
    public function index()
    {
        $this->load->view('public/header');
        $this->load->view('public/home');
        $this->load->view('public/footer');
    }
//................................................................................Home Page Functionality END...........................................................................................//

//................................................................................About Functionality START...........................................................................................//
    public function about_us()
    {
        $this->load->view('public/about_us');
    }
//................................................................................About Functionality END...........................................................................................//

//................................................................................General Member Functionality START...........................................................................................//
    public function general_member()
    {
        $this->load->view('public/general_member');
    }
//................................................................................General Member Functionality END...........................................................................................//

//................................................................................Executive Member Functionality START...........................................................................................//
    public function executive_member()
    {
        $data['allRecords'] = $this->member_model->getAllExecutiveMember();
//        echo ("<pre>");
//        print_r($data);
//        exit;
        $this->load->view('public/header');
        $this->load->view('public/executive_member', $data);
        $this->load->view('public/footer');
    }
//................................................................................Executive Member Functionality END...........................................................................................//

//................................................................................News Functionality START...........................................................................................//
    public function news()
    {
        $data['allRecords'] = $this->news_model->getAllNews();

        $this->load->view('public/header');
        $this->load->view('public/news', $data);
        $this->load->view('public/footer');
    }
    public function news_view()
    {
        $this->load->view('public/news_view');
    }

//...............................................................................News Functionality END...........................................................................................//

//................................................................................Event Functionality START...........................................................................................//
    public function events()
    {

        $searchText = $this->security->xss_clean($this->input->post('searchText'));
        $data['searchText'] = $searchText;
        $this->load->library('pagination');
        $count = $this->event_model->eventListingCount($searchText);
        $returns = $this->paginationCompress("common/events/", $count, 10, 3);

        $data['eventRecords'] = $this->event_model->eventListing($searchText, $returns["page"], $returns["segment"]);
        $data['latestRecords'] = $this->event_model->getLatestEvent();

//        echo("<pre>");
//        print_r($data);
//        exit;
        $this->load->view('public/header');
        $this->load->view('public/events',$data);
        $this->load->view('public/footer');

    }

    public function events_view()
    {
        $this->load->view('public/events_view');
    }

//................................................................................Event Functionality END...........................................................................................//

//................................................................................Career Functionality START...........................................................................................//
    public function career()
    {
        $this->load->view('public/header');
        $this->load->view('public/career_opportunity');
        $this->load->view('public/footer');
    }
//................................................................................Career Functionality END...........................................................................................//

//................................................................................Photo Gallery Functionality START...........................................................................................//

    /**
     * This function is used to load the folder list in Public Views
     */
    function folder_gallery()
    {
        $searchText = $this->security->xss_clean($this->input->post('searchText'));
        $data['searchText'] = $searchText;

        $this->load->library('pagination');

        $count = $this->photo_gallery_model->folderListingCount($searchText);

        $returns = $this->paginationCompress("photo_gallery/folder_gallery/", $count, 10, 3);

        $data['folderRecords'] = $this->photo_gallery_model->folderListing($searchText, $returns["page"], $returns["segment"]);

        $this->load->view('public/header');
        $this->load->view('public/folder_gallery', $data);
        $this->load->view('public/footer');

    }

    /**
     * This function is used to load the folder wise photo list in public views
     */
    function photo_gallery_public($folder_id = null)
    {
        $searchText = $this->security->xss_clean($this->input->post('searchText'));
        $data['searchText'] = $searchText;

        $this->load->library('pagination');

        $count = $this->photo_gallery_model->folderWiseListingCount($folder_id, $searchText);

        $returns = $this->paginationCompress("photo_gallery/photo_gallery_public/" . $folder_id . "/", $count, 12, 4);

        $data["folder_id"] = $folder_id;

        $data['photoRecords'] = $this->photo_gallery_model->folderWiseListing($folder_id, $searchText, $returns["page"], $returns["segment"]);

        $this->load->view('public/header');
        $this->load->view('public/gallery', $data);
        $this->load->view('public/footer');

    }
//................................................................................Photo Galleryt Functionality END................................................................................................//


}
