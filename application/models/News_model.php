<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : News_model (News Model)
 * User model class to get to handle user related data
 * @author : Md Azizul Hoque Rimon
 * @version : 1.0
 * @since : 10 January 2019
 */
class News_model extends CI_Model
{
    /**
     * This function is used to add new news to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewNews($newsInfo)
    {
        $this->db->trans_start();
        $this->db->insert('news', $newsInfo);

        $insert_id = $this->db->insert_id();

        $this->db->trans_complete();

        return $insert_id;
    }

    /**
     * This function is used to get the news listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function newsListingCount($searchText = '')
    {
        $this->db->select();
        $this->db->from('news');
        if(!empty($searchText)) {
            $likeCriteria = "(news.news_title  LIKE '%".$searchText."%'
                            OR  news.news_details  LIKE '%".$searchText."%'
                            OR  news.published_on  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        return $query->num_rows();
    }

    /**
     * This function is used to get the news listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function newsListing($searchText = '', $page, $segment)
    {
        $this->db->select();
        $this->db->from('news');
        if(!empty($searchText)) {
            $likeCriteria = "(news.news_title  LIKE '%".$searchText."%'
                            OR  news.news_details  LIKE '%".$searchText."%'
                            OR  news.published_on  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->order_by('news.id', 'DESC');
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
    function getNewsInfo($newsId)
    {
        $this->db->select();
        $this->db->from('news');
        $this->db->where('id', $newsId);
        $query = $this->db->get();

        return $query->row();
    }

    /**
     * This function is used to delete the news information
     * @param number $newsId : This is news id
     * @return boolean $result : TRUE / FALSE
     */
    function deleteNews($newsId)
    {
        $this->db->where('id', $newsId);
        $this->db->delete('news');

        return $this->db->affected_rows();
    }
    /**
     * This function is used to update the news information
     * @param array $newsInfo : This is news updated information
     * @param number $newsId : This is news id
     */
    function updateNews($newsInfo, $newsId)
    {
        $this->db->where('id', $newsId);
        $this->db->update('news', $newsInfo);

        return TRUE;
    }

    /**
     * This function is used to get the news listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function getAllNews()
    {
        $this->db->select();
        $this->db->from('news');
        $this->db->order_by('news.published_on', 'asc');
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }


}
?>