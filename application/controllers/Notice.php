<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Notice (NoticeController)
 * Notice Class to control all Notice related operations.
 * @author : Rimon
 * @version : 1.0
 * @since : 12 january 2019
 */
class Notice extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('notice_model');
        $this->isLoggedIn();
        $this->load->library('form_validation');
        $this->load->library('upload');
    }
    /**
     * This function is used to load the add notice form
     */
    function uploadNotice()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $data['upload_error']=$this->upload->display_errors();
            $this->global['pageTitle'] = 'CUELSA : Upload Notice';

            $this->loadViews("uploadNotice", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to upload new notice to the system
     */
    function uploadNewNotice()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $config['upload_path']   = './uploads/notice/';
            $config['allowed_types'] = 'pdf';
            $config['max_size']      = '204800';
            $this->upload->initialize($config);

            $this->form_validation->set_rules('notice_title','Notice Title','trim|required|max_length[1000]');

            if(($this->form_validation->run() && $this->upload->do_upload()) == FALSE)
            {
                $this->uploadNotice();
            }
            else
            {
                $noticeInfo=$this->input->post();
                $data=$this->upload->data();
                $notice_path=base_url("uploads/notice/".$data['raw_name'].$data['file_ext']);
                $noticeInfo['notice_path']=$notice_path;
                $noticeInfo['file_name']=$data['raw_name'].$data['file_ext'];
                $noticeInfo['uploaded_on']=date('Y-m-d H:i:s');
//                echo ("<pre>");
//                print_r($data);
//                echo ("<pre>");
//                print_r($noticeInfo);
//                exit;
                $result = $this->notice_model->uploadNewNotice($noticeInfo);
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Notice Uploaded successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Notice Upload failed');
                }
                redirect('notice/noticeListing');
            }
        }
    }

    /**
     * This function is used to load the news list
     */
    function noticeListing()
    {
        $searchText = $this->security->xss_clean($this->input->post('searchText'));
        $data['searchText'] = $searchText;

        $this->load->library('pagination');

        $count = $this->notice_model->noticeListingCount($searchText);

        $returns = $this->paginationCompress("notice/noticeListing/", $count, 10, 3);

        $data['noticeRecords'] = $this->notice_model->noticeListing($searchText, $returns["page"], $returns["segment"]);

        $this->global['pageTitle'] = 'CUELSA : Notice Listing';

        $this->loadViews("allNotice", $this->global, $data, NULL);

    }
    /**
     * This function is used download notice
     * @param number $noticeId : Optional : This is notice id
     */
    function downloadNotice($noticeId = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            if($noticeId == null)
            {
                redirect('notice/noticeListing');
            }
            $this->load->helper('download');
            $data['noticeInfo'] = $this->notice_model->getNoticeInfo($noticeId);
            //file path
            $file = 'uploads/notice/'.$data['noticeInfo']->file_name;
            //download file from directory
            force_download($file, NULL);
        }
    }

    /**
     * This function is used to delete the news using newsId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteNotice($noticeId = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            if($noticeId == null)
            {
                redirect('notice/noticeListing');
            }

            $data['noticeInfo'] = $this->notice_model->getNoticeInfo($noticeId);
            if (!empty($data['noticeInfo']->file_name)) {
                $path = './uploads/notice/';
                @unlink($path . $data['noticeInfo']->file_name);
            }
            $result = $this->notice_model->deleteNotice($noticeId);

            if($result > 0)
            {
                $this->session->set_flashdata('success', 'Notice Deleted successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Notice Deleted failed');
            }
            redirect('notice/noticeListing');
        }
    }

}

?>