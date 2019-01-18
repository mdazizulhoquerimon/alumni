<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Member_model (User Model)
 * User model class to get to handle user related data
 * @author : Md Azizul Hoque Rimon
 * @version : 1.0
 * @since : 10 January 2019
 */
class Member_model extends CI_Model
{
    /**
     * General Member Functionality Start
     */
    function getBatchNo($userId)
    {
        $this->db->select('batchNo');
        $this->db->from('tbl_users');
        $this->db->where('isDeleted', 0);
        $this->db->where('roleId !=', 1);
        $this->db->where('userId', $userId);
        $query = $this->db->get();
        return $query->row();
    }
    /**
     * This function is used to get the member listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function memberListingCount($searchText = '')
    {
        $this->db->select();
        $this->db->from('registeredalumni');
        if(!empty($searchText)) {
            $likeCriteria = "(registeredalumni.email  LIKE '%".$searchText."%'
                            OR  registeredalumni.fullname  LIKE '%".$searchText."%'
                            OR  registeredalumni.batch  LIKE '%".$searchText."%'
                            OR  registeredalumni.studentid  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('registeredalumni.isverified', 1);
        $query = $this->db->get();
        return $query->num_rows();
    }

    /**
     * This function is used to get the member listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function memberListing($searchText = '', $batchNo = '', $page, $segment)
    {
        $this->db->select();
        $this->db->from('registeredalumni');
        if(!empty($searchText)) {
            $likeCriteria = "(registeredalumni.email  LIKE '%".$searchText."%'
                            OR  registeredalumni.fullname  LIKE '%".$searchText."%'
                            OR  registeredalumni.batch  LIKE '%".$searchText."%'
                            OR  registeredalumni.studentid  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        if(!empty($batchNo)) {
            $this->db->where('registeredalumni.batch',$batchNo );
        }
        $this->db->where('registeredalumni.isverified', 1);
        $this->db->order_by('registeredalumni.id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

    /**
     * This function is used to verify the member information
     * @param number $memberId : This is member id
     * @return boolean $result : TRUE / FALSE
     */
    function verifyUser($memberId, $memberInfo)
    {
        $this->db->where('id', $memberId);
        $this->db->update('registeredalumni', $memberInfo);

        return $this->db->affected_rows();
    }

    /**
     * General Member Functionality End
     * Executive Member Functionality Start
     */
    /**
     * This function is used to get the member designation information
     * @return array $result : This is result of the query
     */
    function getUserDesignation()
    {
        $this->db->from('executive_designation');
        $query = $this->db->get();

        return $query->result();
    }
    /**
     * This function is used to add new executive member to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewExecutiveMember($exMemInfo)
    {
        $this->db->trans_start();
        $this->db->insert('executive_members', $exMemInfo);

        $insert_id = $this->db->insert_id();

        $this->db->trans_complete();

        return $insert_id;
    }
    /**
     * This function is used to get the executive member listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function executiveMemberListingCount($searchText = '')
    {
        $this->db->select('ExMemTbl.ex_mem_id, ExMemTbl.name, ExMemTbl.batchNo, ExMemTbl.mobile, ExMemTbl.active_year, ExMemTbl.image_path, ExMemTbl.createdDtm, Designation.designation');
        $this->db->from('executive_members as ExMemTbl');
        $this->db->join('executive_designation as Designation', 'Designation.designation_id = ExMemTbl.designation_id','left');
        if(!empty($searchText)) {
            $likeCriteria = "( ExMemTbl.name  LIKE '%".$searchText."%'
                            OR  ExMemTbl.batchNo  LIKE '%".$searchText."%'
                            OR  ExMemTbl.mobile  LIKE '%".$searchText."%'
                            OR  ExMemTbl.active_year  LIKE '%".$searchText."%'
                            OR  Designation.designation  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();

        return $query->num_rows();
    }
    /**
     * This function is used to get the executive member listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function executiveMemberListing($searchText = '', $page, $segment)
    {
        $this->db->select('ExMemTbl.ex_mem_id, ExMemTbl.name, ExMemTbl.batchNo, ExMemTbl.mobile, ExMemTbl.active_year, ExMemTbl.image_path, ExMemTbl.createdDtm, Designation.designation');
        $this->db->from('executive_members as ExMemTbl');
        $this->db->join('executive_designation as Designation', 'Designation.designation_id = ExMemTbl.designation_id');
        if(!empty($searchText)) {
            $likeCriteria = "( ExMemTbl.name  LIKE '%".$searchText."%'
                            OR  ExMemTbl.batchNo  LIKE '%".$searchText."%'
                            OR  ExMemTbl.mobile  LIKE '%".$searchText."%'
                            OR  ExMemTbl.active_year  LIKE '%".$searchText."%'
                            OR  Designation.designation  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }

        $this->db->order_by('Designation.designation_id', 'asc');
        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }
    /**
     * This function used to get news information by id
     * @param number $newsId : This is news id
     * @return array $result : This is news information
     */
    function getExMemInfo($exMemId)
    {
        $this->db->select();
        $this->db->from('executive_members');
        $this->db->where('ex_mem_id', $exMemId);
        $query = $this->db->get();

        return $query->row();
    }
    /**
     * This function is used to update the executive member information
     * @param array $exMemInfo : This is executive member updated information
     * @param number $exMemId : This is Executive Member id
     */
    function updateExecutiveMember($exMemInfo, $exMemId)
    {
        $this->db->where('ex_mem_id', $exMemId);
        $this->db->update('executive_members', $exMemInfo);

        return TRUE;
    }
    /**
     * This function is used to delete the executive member information
     * @param number $exMemId : This is mem id
     * @return boolean $result : TRUE / FALSE
     */
    function deleteExecutiveMember($exMemId)
    {
        $this->db->where('ex_mem_id', $exMemId);
        $this->db->delete('executive_members');

        return $this->db->affected_rows();
    }
    /**
     * This function is used to get all the executive member
     * @return array $result : This is result
     */
    function getAllExecutiveMember()
    {
        $this->db->select('ExMemTbl.ex_mem_id, ExMemTbl.name, ExMemTbl.batchNo, ExMemTbl.mobile, ExMemTbl.active_year, ExMemTbl.image_path, ExMemTbl.createdDtm, Designation.designation');
        $this->db->from('executive_members as ExMemTbl');
        $this->db->join('executive_designation as Designation', 'Designation.designation_id = ExMemTbl.designation_id');

        $this->db->order_by('Designation.designation_id', 'asc');
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }
}
?>