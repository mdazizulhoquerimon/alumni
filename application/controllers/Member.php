<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
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
    }

    /**
     * This function is used to load the member list and also batch wise member listing
     */
    function memberListing()
    {
        $batchNo = '';

        $searchText = $this->security->xss_clean($this->input->post('searchText'));
        $data['searchText'] = $searchText;

        $this->load->library('pagination');

        $count = $this->member_model->memberListingCount($searchText);

        $returns = $this->paginationCompress("memberListing/", $count, 10);

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

}

?>