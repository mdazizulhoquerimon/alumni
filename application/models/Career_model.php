<?php
/**
 * Created by PhpStorm.
 * User: Rimon
 * Date: 26-Jan-19
 * Time: 11:57 PM
 */

class Career_model Extends CI_Model
{
    /**
     * This function is used to add new circular to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewCircular($careerInfo)
    {
        $this->db->trans_start();
        $this->db->insert('career', $careerInfo);

        $insert_id = $this->db->insert_id();

        $this->db->trans_complete();

        return $insert_id;
    }
    /**
     * This function is used to get the circular listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function circularListingCount($searchText = '')
    {
        $this->db->select();
        $this->db->from('career');
        if(!empty($searchText)) {
            $likeCriteria = "(career.career_title  LIKE '%".$searchText."%'
                            OR  career.company_name  LIKE '%".$searchText."%'
                            OR  career.location  LIKE '%".$searchText."%'
                            OR  career.education_requirement  LIKE '%".$searchText."%'
                            OR  career.experience  LIKE '%".$searchText."%'
                            OR  career.deadline_date  LIKE '%".$searchText."%'
                            OR  career.job_link  LIKE '%".$searchText."%'
                            OR  career.job_description  LIKE '%".$searchText."%'
                            OR  career.createdDtm  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        return $query->num_rows();
    }
    /**
     * This function is used to get the circular listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function circularListing($searchText = '', $page, $segment)
    {
        $this->db->select();
        $this->db->from('career');
        if(!empty($searchText)) {
            $likeCriteria = "(career.career_title  LIKE '%".$searchText."%'
                            OR  career.company_name  LIKE '%".$searchText."%'
                            OR  career.location  LIKE '%".$searchText."%'
                            OR  career.education_requirement  LIKE '%".$searchText."%'
                            OR  career.experience  LIKE '%".$searchText."%'
                            OR  career.deadline_date  LIKE '%".$searchText."%'
                            OR  career.job_link  LIKE '%".$searchText."%'
                            OR  career.job_description  LIKE '%".$searchText."%'
                            OR  career.createdDtm  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->order_by('career.deadline_date', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }
    /**
     * This function used to get circular information by id
     * @param number $circularId : This is circular id
     * @return array $result : This is event information
     */
    function getCircularInfo($circularId)
    {
        $this->db->select();
        $this->db->from('career');
        $this->db->where('career_id', $circularId);
        $query = $this->db->get();

        return $query->row();
    }
    /**
     * This function is used to update the circular information
     * @param array $circularInfo : This is circular updated information
     * @param number $circularId : This is circular id
     */
    function updateCircular($circularInfo, $circularId)
    {
        $this->db->where('career_id', $circularId);
        $this->db->update('career', $circularInfo);

        return TRUE;
    }
    /**
     * This function is used to delete the circular information
     * @param number $circularId : This is circular id
     * @return boolean $result : TRUE / FALSE
     */
    function deleteCircular($circularId)
    {
        $this->db->where('career_id', $circularId);
        $this->db->delete('career');

        return $this->db->affected_rows();
    }

}