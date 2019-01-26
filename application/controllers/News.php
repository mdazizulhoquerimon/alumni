<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : News (NewsController)
 * News Class to control all News related operations.
 * @author : Rimon
 * @version : 1.0
 * @since : 12 january 2019
 */
class News extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->isLoggedIn();
        $this->load->library('form_validation');
        $this->load->library('upload');
    }
    /**
     * This function is used to load the add news form
     */
    function addNews()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $data['upload_error']=$this->upload->display_errors();
            $this->global['pageTitle'] = 'CUELSA : Add News';

            $this->loadViews("addNews", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to add new News to the system
     */
    function addNewNews()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $config['upload_path']   = './uploads/news_image/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '204800';
            $config['max_width']     = 768;
            $config['max_height']    = 415;
            $this->upload->initialize($config);

            $this->form_validation->set_rules('news_title','News Title','trim|required|max_length[500]');
            $this->form_validation->set_rules('news_details','News Details','trim|required');

            if(($this->form_validation->run() && $this->upload->do_upload()) == FALSE)
            {
                $this->addNews();
            }
            else
            {
                $newsInfo=$this->input->post();
                $data=$this->upload->data();
                $image_path=base_url("uploads/news_image/".$data['raw_name'].$data['file_ext']);
                $newsInfo['image_path']=$image_path;
                $newsInfo['file_name']=$data['raw_name'].$data['file_ext'];
                $newsInfo['published_on']=date('Y-m-d H:i:s');
                $result = $this->news_model->addNewNews($newsInfo);
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New News created successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'News creation failed');
                }
                redirect('news/newsListing');
            }
        }
    }

    /**
     * This function is used to load the news list
     */
    function newsListing()
    {
        $searchText = $this->security->xss_clean($this->input->post('searchText'));
        $data['searchText'] = $searchText;

        $this->load->library('pagination');

        $count = $this->news_model->newsListingCount($searchText);

        $returns = $this->paginationCompress("news/newsListing/", $count, 5, 3);

        $data['newsRecords'] = $this->news_model->newsListing($searchText, $returns["page"], $returns["segment"]);

        $this->global['pageTitle'] = 'CUELSA : News Listing';

        $this->loadViews("allNews", $this->global, $data, NULL);

    }

    /**
     * This function is used load news edit information
     * @param number $newsId : Optional : This is news id
     */
    function editNews($newsId = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            if($newsId == null)
            {
                redirect('news/newsListing');
            }

            $data['newsInfo'] = $this->news_model->getNewsInfo($newsId);
            $data['upload_error']=$this->upload->display_errors();
            $this->global['pageTitle'] = 'CUELSA : Edit News';

            $this->loadViews("editNews", $this->global, $data, NULL);
        }
    }
    function editNewsWithImage($newsId = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            if($newsId == null)
            {
                redirect('news/newsListing');
            }

            $data['newsInfo'] = $this->news_model->getNewsInfo($newsId);
            $data['upload_error']=$this->upload->display_errors();
            $this->global['pageTitle'] = 'CUELSA : Edit News';

            $this->loadViews("editNewsWithImage", $this->global, $data, NULL);
        }
    }


    /**
     * This function is used to update News to the system
     */
    function updateNews()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $newsId=$this->input->post('id');
            $this->form_validation->set_rules('news_title','News Title','trim|required|max_length[500]');
            $this->form_validation->set_rules('news_details','News Details','trim|required');

            if( $this->form_validation->run() == FALSE)
            {
                $this->editNews($newsId);
            }
            else
            {
                $newsInfo=$this->input->post();

                $result = $this->news_model->updateNews($newsInfo,$newsId);
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'News  Updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'News Update failed');
                }
                redirect('news/newsListing/');
            }
        }
    }

    function updateNewsWithImage()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $newsId=$this->input->post('id');
            $config['upload_path']   = './uploads/news_image/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '204800';
            $config['max_width']     = 768;
            $config['max_height']    = 415;
            $this->upload->initialize($config);

            $this->form_validation->set_rules('news_title','News Title','trim|required|max_length[500]');
            $this->form_validation->set_rules('news_details','News Details','trim|required');

            if(($this->form_validation->run() && $this->upload->do_upload()) == FALSE)
            {
                $this->editNewsWithImage($newsId);
            }
            else
            {
                $newsInfo=$this->input->post();
                $data=$this->upload->data();
                $image_path=base_url("uploads/news_image/".$data['raw_name'].$data['file_ext']);
                $newsInfo['image_path']=$image_path;
                $newsInfo['file_name']=$data['raw_name'].$data['file_ext'];
                $newsInfo['published_on']=date('Y-m-d H:i:s');
                $result = $this->news_model->updateNews($newsInfo,$newsId);
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'News  Updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'News Update failed');
                }
                redirect('news/newsListing/');
            }
        }
    }

    /**
     * This function is used to delete the news using newsId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteNews($newsId = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            if($newsId == null)
            {
                redirect('news/newsListing');
            }

            $data['newsInfo'] = $this->news_model->getNewsInfo($newsId);
            if (!empty($data['newsInfo']->file_name)) {
                $path = './uploads/news_image/';
                @unlink($path . $data['newsInfo']->file_name);
            }
            $result = $this->news_model->deleteNews($newsId);

            if($result > 0)
            {
                $this->session->set_flashdata('success', 'News Deleted successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'News Deleted failed');
            }
            redirect('news/newsListing');
        }
    }

}
