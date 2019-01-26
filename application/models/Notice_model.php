<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Notice_model (News Model)
 * Notice model class to get to handle notice related data
 * @author : Md Azizul Hoque Rimon
 * @version : 1.0
 * @since : 10 January 2019
 */
class Notice_model extends CI_Model
{
    /**
     * This function is used to upload new notice to system
     * @return number $insert_id : This is last inserted id
     */
    function uploadNewNotice($noticeInfo)
    {
        $this->db->trans_start();
        $this->db->insert('notice', $noticeInfo);

        $insert_id = $this->db->insert_id();

        $this->db->trans_complete();

        return $insert_id;
    }
    /**
     * This function is used to get the news listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function noticeListingCount($searchText = '')
    {
        $this->db->select();
        $this->db->from('notice');
        if(!empty($searchText)) {
            $likeCriteria = "(notice.notice_title  LIKE '%".$searchText."%'
                            OR  notice.file_name  LIKE '%".$searchText."%'
                            OR  notice.uploaded_on  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        return $query->num_rows();
    }

    /**
     * This function is used to get the notice listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function noticeListing($searchText = '', $page, $segment)
    {
        $this->db->select();
        $this->db->from('notice');
        if(!empty($searchText)) {
            $likeCriteria = "(notice.notice_title  LIKE '%".$searchText."%'
                            OR  notice.file_name  LIKE '%".$searchText."%'
                            OR  notice.uploaded_on  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->order_by('notice.uploaded_on', 'DESC');
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
    function getNoticeInfo($noticeId)
    {
        $this->db->select();
        $this->db->from('notice');
        $this->db->where('notice_id', $noticeId);
        $query = $this->db->get();

        return $query->row();
    }

    /**
     * This function is used to delete the notice information
     * @param number $noticeId : This is notice id
     * @return boolean $result : TRUE / FALSE
     */
    function deleteNotice($noticeId)
    {
        $this->db->where('notice_id', $noticeId);
        $this->db->delete('notice');

        return $this->db->affected_rows();
    }

}
?>