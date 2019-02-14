<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Event (EventController)
 * User Class to control all user related operations.
 * @author : Rimon
 * @version : 1.0
 * @since : 20 january 2019
 */
class Event extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('event_model');
        $this->isLoggedIn();
        $this->load->library('form_validation');
        $this->load->helper('date');
        $this->load->library('upload');
        $this->load->library('image_lib');
    }
    /**
     * This function is used to load the add event form
     */
    function addEvent()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->global['pageTitle'] = 'CUELSA : Add Event';
            $this->loadViews("addEvent", $this->global, NULL, NULL);
        }
    }

    /**
     * This function is used to add new Event to the system
     */
    function addNewEvent()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->form_validation->set_rules('event_title','Event Title','trim|required|max_length[500]');
            $this->form_validation->set_rules('event_details','Event Details','trim|required');
            $this->form_validation->set_rules('event_type','Event Type','trim|required');
            $this->form_validation->set_rules('event_date','Event Date','trim|required');

            if($this->form_validation->run() == FALSE)
            {
                $this->addNews();
            }
            else
            {
                $eventInfo["event_title"] = $this->security->xss_clean($this->input->post('event_title'));
                $eventInfo["event_details"] = $this->security->xss_clean($this->input->post('event_details'));
                $eventInfo["event_type"] = $this->security->xss_clean($this->input->post('event_type'));
                $eventInfo["event_date"] = date('Y-m-d H:i:s',strtotime($this->security->xss_clean($this->input->post('event_date'))));
                $eventInfo["createdDtm"] = date('Y-m-d H:i:s');

                if ($_FILES['eventimage']['name'] !== '') {
                    $config_image = array();
                    $config_image['upload_path'] = './uploads/event_image/';
                    $config_image['allowed_types'] = 'jpeg|jpg|png|gif|JPG';
                    $config_image['max_size'] = '2048000';
                    $this->upload->initialize($config_image);
                    $this->upload->do_upload('eventimage');
                    $imgData = array('upload_data' => $this->upload->data());
                    $eventInfo["file_name"] = $imgData['upload_data']['file_name'];
                } else {
                    unset($eventInfo["file_name"]);
                }

                $result = $this->event_model->addNewEvent($eventInfo);
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Event created successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Event creation failed');
                }
                redirect('event/eventListing');
            }
        }
    }

    /**
     * This function is used to load the event list
     */
    function eventListing()
    {
        $searchText = $this->security->xss_clean($this->input->post('searchText'));
        $data['searchText'] = $searchText;

        $this->load->library('pagination');

        $count = $this->event_model->eventListingCount($searchText);

        $returns = $this->paginationCompress("event/eventListing/", $count, 10, 3);

        $data['eventRecords'] = $this->event_model->eventListing($searchText, $returns["page"], $returns["segment"]);

        $this->global['pageTitle'] = 'CUELSA : Event Listing';

        $this->loadViews("allEvents", $this->global, $data, NULL);

    }

    /**
     * This function is used load news edit information
     * @param number $newsId : Optional : This is news id
     */
    function editEvent($eventId = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            if($eventId == null)
            {
                redirect('event/eventListing');
            }
            $data['eventInfo'] = $this->event_model->getEventInfo($eventId);
            $this->global['pageTitle'] = 'CUELSA : Edit Event';
            $this->loadViews("editEvent", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to update Event to the system
     */
    function updateEvent()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $eventId=$this->input->post('event_id');
            $this->form_validation->set_rules('event_title','Event Title','trim|required|max_length[500]');
            $this->form_validation->set_rules('event_details','Event Details','trim|required');
            $this->form_validation->set_rules('event_type','Event Type','trim|required');
            $this->form_validation->set_rules('event_date','Event Date','trim|required');

            if( $this->form_validation->run() == FALSE)
            {
                $this->editEvent($eventId);
            }
            else
            {
                $eventInfo["event_title"] = $this->security->xss_clean($this->input->post('event_title'));
                $eventInfo["event_details"] = $this->security->xss_clean($this->input->post('event_details'));
                $eventInfo["event_type"] = $this->security->xss_clean($this->input->post('event_type'));
                $eventInfo["event_date"] = date('Y-m-d H:i:s',strtotime($this->security->xss_clean($this->input->post('event_date'))));

                if ($_FILES['eventimage']['name'] !== '') {

                    $config_image = array();
                    $config_image['upload_path'] = './uploads/event_image/';
                    $config_image['allowed_types'] = 'jpeg|jpg|png|gif';
                    $config_image['max_size'] = '100000000000000000';
                    $config_image['width'] = 470;
                    $config_image['height'] = 300;
                    $this->upload->initialize($config_image);
                    $this->upload->do_upload('eventimage');
                    $imgData = array('upload_data' => $this->upload->data());
                    $eventInfo["file_name"] = $imgData['upload_data']['file_name'];

//                    $config['image_library'] = 'gd2';
//                    $config['source_image'] = $imgData['upload_data']['full_path'];
//                    $config['new_image'] = './uploads/event_image/resized/';
//                    $config['create_thumb'] = TRUE;
//                    $config['maintain_ratio'] = TRUE;
//                    $config['width']         = 470;
//                    $config['height']       = 300;
//                    $this->load->library('image_lib', $config);
//                    $this->image_lib->resize();

                } else {
                    unset($eventInfo["file_name"]);
                }

                $result = $this->event_model->updateEvent($eventInfo,$eventId);
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Event  Updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Event Update failed');
                }
                redirect('event/eventListing/');
            }
        }
    }

    /**
     * This function is used to delete the event using $eventId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteEvent()
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $eventId = $this->input->post('eventId');

            $result = $this->event_model->deleteEvent($eventId);

            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }

}

?>