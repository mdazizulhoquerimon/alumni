<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Photo_gallery (Photo_gallery Model)
 * Photo_gallery model class to get to handle Photo_gallery related data
 * @author : Md Azizul Hoque Rimon
 * @version : 1.0
 * @since : 10 January 2019
 */
class Photo_gallery_model extends CI_Model
{
    /**
     * This function is used to create folder to system
     * @return number $insert_id : This is last inserted id
     */
    function createFolder($photoInfo)
    {
        $this->db->trans_start();
        $this->db->insert('photo_folder', $photoInfo);

        $insert_id = $this->db->insert_id();

        $this->db->trans_complete();

        return $insert_id;
    }
    /**
     * This function used to get folder information by id
     * @param number $folderId : This is folder id
     * @return array $result : This is news information
     */
    function getFolderInfo($folderId)
    {
        $this->db->select();
        $this->db->from('photo_folder');
        $this->db->where('folder_id', $folderId);
        $query = $this->db->get();

        return $query->row();
    }

    /*
    * Insert file data into the database
    * @param array the data for inserting into the table
    */
    public function insert($data = array()){
        $insert = $this->db->insert_batch('photo_gallery',$data);
        return $insert?true:false;
    }
    /**
     * This function is used to get the folder listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function folderListingCount($searchText = '')
    {
        $this->db->select();
        $this->db->from('photo_folder');
        if(!empty($searchText)) {
            $likeCriteria = "(photo_folder.folder_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        return $query->num_rows();
    }

    /**
     * This function is used to get the folder listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function folderListing($searchText = '', $page, $segment)
    {
        $this->db->select();
        $this->db->from('photo_folder');
        if(!empty($searchText)) {
            $likeCriteria = "(photo_folder.folder_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->order_by('photo_folder.createdDtm', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }
    /**
     * This function is used to get the folder listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function folderWiseListingCount($folder_id,$searchText = '')
    {
        $this->db->select();
        $this->db->from('photo_gallery');
        if(!empty($searchText)) {
            $likeCriteria = "(photo_gallery.file_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        if(!empty($folder_id)) {
            $this->db->where('folder_id', $folder_id);
        }
        $query = $this->db->get();
        return $query->num_rows();
    }

    /**
     * This function is used to get the folderWiseListing
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function folderWiseListing($folder_id,$searchText = '', $page, $segment)
    {
        $this->db->select();
        $this->db->from('photo_gallery');
        if(!empty($searchText)) {
            $likeCriteria = "(photo_gallery.file_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        if(!empty($folder_id)) {
            $this->db->where('folder_id', $folder_id);
        }
        $this->db->order_by('photo_gallery.uploaded_on', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    /**
     * This function is used to get the any column from any table
     * @return the colmnu name against id or anothe column
     */
    public function anyName($table,$col,$id,$name,$col2=null,$id2=null,$col3=null,$id3=null){
        if(!empty($col2)){
            $this->db->where($col2,$id2);
        }
        if(!empty($col3)){
            $this->db->where($col3,$id3);
        }
        $this->db->where($col,$id);
        $info=$this->db->get($table);
        foreach($info->result_array() as $val){
            return $val[$name];
        }
    }



    /**
     * This function used to get latest event information
     *
     * @return array $result : This is event information
     */
    function getLatestFolder()
    {
        $this->db->select();
        $this->db->from('photo_folder');
        $this->db->order_by('photo_folder.createdDtm', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();

        return $query->row();
    }
    /**
     * This function is used to getLatestFolderData
     * @return array $result : This is result
     */
    function getLatestFolderData($folder_id)
    {
        $this->db->select();
        $this->db->from('photo_gallery');
        if(!empty($folder_id)) {
            $this->db->where('folder_id', $folder_id);
        }
        $this->db->order_by('photo_gallery.uploaded_on', 'DESC');
        $this->db->limit(5);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
}