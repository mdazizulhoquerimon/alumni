<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Event_model (event Model)
 * User model class to get to handle event related data
 * @author : Md Azizul Hoque Rimon
 * @version : 1.0
 * @since : 10 January 2019
 */
class Event_model extends CI_Model
{
    /**
     * This function is used to add new event to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewEvent($eventInfo)
    {
        $this->db->trans_start();
        $this->db->insert('event', $eventInfo);

        $insert_id = $this->db->insert_id();

        $this->db->trans_complete();

        return $insert_id;
    }
    /**
     * This function is used to get the event listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function eventListingCount($searchText = '')
    {
        $this->db->select();
        $this->db->from('event');
        if(!empty($searchText)) {
            $likeCriteria = "(event.event_title  LIKE '%".$searchText."%'
                            OR  event.event_details  LIKE '%".$searchText."%'
                            OR  event.event_type  LIKE '%".$searchText."%'
                            OR  event.event_date  LIKE '%".$searchText."%'
                            OR  event.createdDtm  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        return $query->num_rows();
    }

    /**
     * This function is used to get the Event listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function eventListing($searchText = '', $page, $segment)
    {
        $this->db->select();
        $this->db->from('event');
        if(!empty($searchText)) {
            $likeCriteria = "(event.event_title  LIKE '%".$searchText."%'
                            OR  event.event_details  LIKE '%".$searchText."%'
                            OR  event.event_type  LIKE '%".$searchText."%'
                            OR  event.event_date  LIKE '%".$searchText."%'
                            OR  event.createdDtm  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->order_by('event.event_date', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }
    /**
     * This function used to get event information by id
     * @param number $eventId : This is event id
     * @return array $result : This is event information
     */
    function getEventInfo($eventId)
    {
        $this->db->select();
        $this->db->from('event');
        $this->db->where('event_id', $eventId);
        $query = $this->db->get();

        return $query->row();
    }
    /**
     * This function is used to update the event information
     * @param array $eventInfo : This is event updated information
     * @param number $eventId : This is event id
     */
    function updateEvent($eventInfo, $eventId)
    {
        $this->db->where('event_id', $eventId);
        $this->db->update('event', $eventInfo);

        return TRUE;
    }
    /**
     * This function is used to delete the event information
     * @param number $eventId : This is event id
     * @return boolean $result : TRUE / FALSE
     */
    function deleteEvent($eventId)
    {
        $this->db->where('event_id', $eventId);
        $this->db->delete('event');

        return $this->db->affected_rows();
    }

}
?>