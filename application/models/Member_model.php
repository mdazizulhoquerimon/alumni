<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : User_model (User Model)
 * User model class to get to handle user related data
 * @author : Md Azizul Hoque Rimon
 * @version : 1.0
 * @since : 10 January 2019
 */
class Member_model extends CI_Model
{
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
     * This function is used to verify the user information
     * @param number $userId : This is user id
     * @return boolean $result : TRUE / FALSE
     */
    function verifyUser($memberId, $memberInfo)
    {
        $this->db->where('id', $memberId);
        $this->db->update('registeredalumni', $memberInfo);

        return $this->db->affected_rows();
    }

}
?>