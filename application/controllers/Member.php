<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Member (MemberController)
 * User Class to control all user related operations.
 * @author : Rimon
 * @version : 1.0
 * @since : 12 january 2019
 */
class Member extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
        $this->isLoggedIn();
        $this->load->library('form_validation');
        $this->load->library('upload');
    }
    /**
     * General Member Functionality Start
     * This function is used to load the member list and also batch wise member listing
     */
    function memberListing()
    {
        $batchNo = '';

        $searchText = $this->security->xss_clean($this->input->post('searchText'));
        $data['searchText'] = $searchText;

        $this->load->library('pagination');

        $count = $this->member_model->memberListingCount($searchText);

        $returns = $this->paginationCompress("member/memberListing/", $count, 10, 3);


        $data["batchNo"] = $this->member_model->getBatchNo($this->vendorId);

        if ($data["batchNo"]) {
            $batchNo = $data["batchNo"]->batchNo;
            $data['memberRecords'] = $this->member_model->memberListing($searchText, $batchNo, $returns["page"], $returns["segment"]);
        } else {
            $data['memberRecords'] = $this->member_model->memberListing($searchText, $batchNo, $returns["page"], $returns["segment"]);
        }

        $this->global['pageTitle'] = 'CUELSA : Member Listing';
        $this->loadViews("allMember", $this->global, $data, NULL);

    }

    /**
     * This function is used to verify the user using userId
     * @return boolean $result : TRUE / FALSE
     */
    function verifyMember()
    {
        $memberid = $this->input->post('memberid');
        $memberInfo = array('isAdminVerified' => 1);

        $result = $this->member_model->verifyUser($memberid, $memberInfo);

        if ($result > 0) {
            echo(json_encode(array('status' => TRUE)));
        } else {
            echo(json_encode(array('status' => FALSE)));
        }
    }

    function unverifyMember()
    {
        $memberid = $this->input->post('memberid');
        $memberInfo = array('isAdminVerified' => 0);

        $result = $this->member_model->verifyUser($memberid, $memberInfo);

        if ($result > 0) {
            echo(json_encode(array('status' => TRUE)));
        } else {
            echo(json_encode(array('status' => FALSE)));
        }
    }
    /**
     * General Member Functionality End
     * Executive Member Functionality Start
     */
    /**
     * This function is used to load the add executive member form
     */
    function addExecutiveMember()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $data['designation'] = $this->member_model->getUserDesignation();
            $data['upload_error']=$this->upload->display_errors();

            $this->global['pageTitle'] = 'CUELSA : Add New Executive Member';

            $this->loadViews("addExecutiveMember", $this->global, $data, NULL);
        }
    }
    /**
     * This function is used to add new Executive member to the system
     */
    function addNewExecutiveMember()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $config['upload_path']   = './uploads/executive_member_image/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '204800';
            $config['max_width']     = 300;
            $config['max_height']    = 300;
            $this->upload->initialize($config);

            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('mobile','Mobile Number','trim|required|numeric|min_length[11]');
            $this->form_validation->set_rules('batchNo','Batch No','required');
            $this->form_validation->set_rules('designation','Designation','required');
            $this->form_validation->set_rules('active_year','Active Year','required');

            if(($this->form_validation->run()&& $this->upload->do_upload()) == FALSE)
            {
                $this->addExecutiveMember();
            }
            else
            {
                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
                $mobile = $this->security->xss_clean($this->input->post('mobile'));
                $batchNo = $this->input->post('batchNo');
                $designation = $this->input->post('designation');
                $active_year = $this->input->post('active_year');

                $data=$this->upload->data();
                $image_path=base_url("uploads/executive_member_image/".$data['raw_name'].$data['file_ext']);

                $exMemInfo = array('name'=> $name, 'mobile'=>$mobile, 'batchNo'=>$batchNo, 'designation_id'=>$designation,
                     'image_path'=>$image_path, 'active_year'=>$active_year, 'createdDtm'=>date('Y-m-d H:i:s'));

                $result = $this->member_model->addNewExecutiveMember($exMemInfo);

                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Executive Member created successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Executive Member creation failed');
                }

                redirect('member/executiveMemberListing');
            }
        }
    }
    /**
     * This function is used load executive member edit information
     * @param number $exMemId : Optional : This is executive member id
     */
    function editExecutiveMember($exMemId = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            if($exMemId == null)
            {
                redirect('member/executiveMemberListing');
            }
            $data['designation'] = $this->member_model->getUserDesignation();
            $data['exMemInfo'] = $this->member_model->getExMemInfo($exMemId);
            $data['upload_error']=$this->upload->display_errors();
            $this->global['pageTitle'] = 'CUELSA : Edit Executive Member';

            $this->loadViews("editExecutiveMember", $this->global, $data, NULL);
        }
    }

    function editExecutiveMemberWithImage($exMemId = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            if($exMemId == null)
            {
                redirect('member/executiveMemberListing');
            }
            $data['designation'] = $this->member_model->getUserDesignation();
            $data['exMemInfo'] = $this->member_model->getExMemInfo($exMemId);
            $data['upload_error']=$this->upload->display_errors();
            $this->global['pageTitle'] = 'CUELSA : Edit Executive Member';

            $this->loadViews("editExecutiveMemberWithImage", $this->global, $data, NULL);
        }
    }
    /**
     * This function is used to update with out image Executive member to the system
     */
    function updateExecutiveMember()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $exMemId=$this->input->post('ex_mem_id');

            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('mobile','Mobile Number','trim|required|numeric|min_length[11]');
            $this->form_validation->set_rules('batchNo','Batch No','required');
            $this->form_validation->set_rules('designation','Designation','required');
            $this->form_validation->set_rules('active_year','Active Year','required');

            if(($this->form_validation->run()) == FALSE)
            {
                $this->editExecutiveMember($exMemId);
            }
            else
            {
                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
                $mobile = $this->security->xss_clean($this->input->post('mobile'));
                $batchNo = $this->input->post('batchNo');
                $designation = $this->input->post('designation');
                $active_year = $this->input->post('active_year');

                $exMemInfo = array('name'=> $name, 'mobile'=>$mobile, 'batchNo'=>$batchNo, 'designation_id'=>$designation,
                    'active_year'=>$active_year, 'createdDtm'=>date('Y-m-d H:i:s'));

                $result = $this->member_model->updateExecutiveMember($exMemInfo,$exMemId);

                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Executive Member Updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Executive Member Update failed');
                }

                redirect('member/executiveMemberListing');
            }
        }
    }
    /**
     * This function is used to update with image Executive member to the system
     */
    function updateExecutiveMemberWithImage()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $exMemId=$this->input->post('ex_mem_id');
            $config['upload_path']   = './uploads/executive_member_image/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '204800';
            $config['max_width']     = 300;
            $config['max_height']    = 300;
            $this->upload->initialize($config);

            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('mobile','Mobile Number','trim|required|numeric|min_length[11]');
            $this->form_validation->set_rules('batchNo','Batch No','required');
            $this->form_validation->set_rules('designation','Designation','required');
            $this->form_validation->set_rules('active_year','Active Year','required');

            if(($this->form_validation->run()&& $this->upload->do_upload()) == FALSE)
            {
                $this->editExecutiveMemberWithImage($exMemId);
            }
            else
            {
                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
                $mobile = $this->security->xss_clean($this->input->post('mobile'));
                $batchNo = $this->input->post('batchNo');
                $designation = $this->input->post('designation');
                $active_year = $this->input->post('active_year');

                $data=$this->upload->data();
                $image_path=base_url("uploads/executive_member_image/".$data['raw_name'].$data['file_ext']);

                $exMemInfo = array('name'=> $name, 'mobile'=>$mobile, 'batchNo'=>$batchNo, 'designation_id'=>$designation,
                    'image_path'=>$image_path, 'active_year'=>$active_year, 'createdDtm'=>date('Y-m-d H:i:s'));


                $result = $this->member_model->updateExecutiveMember($exMemInfo,$exMemId);

                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Executive Member Updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Executive Member Update failed');
                }

                redirect('member/executiveMemberListing');
            }
        }
    }
    /**
     * This function is used to load the Executive member list
     */
    function executiveMemberListing()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->member_model->executiveMemberListingCount($searchText);

            $returns = $this->paginationCompress ( "member/executiveMemberListing/", $count, 10,3 );

            $data['exMemRecords'] = $this->member_model->executiveMemberListing($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'CUELSA : Executive Member Listing';

            $this->loadViews("allExecutiveMember", $this->global, $data, NULL);
        }
    }
    /**
     * This function is used to delete the executive member using exMemId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteExecutivemember()
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $exMemId = $this->input->post('exMemId');

            $result = $this->member_model->deleteExecutiveMember($exMemId);

            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }

}

?>