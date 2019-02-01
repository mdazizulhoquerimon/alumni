<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Career (CareerController)
 * Career Class to control all Career related operations.
 * @author : Rimon
 * @version : 1.0
 * @since : 12 january 2019
 */
class Career extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('career_model');
        $this->isLoggedIn();
        $this->load->library('form_validation');

    }

    /**
     * This function is used to load the add circular form
     */
    function addCircular()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->global['pageTitle'] = 'CUELSA : Add Circular';
            $this->loadViews("addCircular", $this->global, NULL, NULL);
        }
    }

    /**
     * This function is used to add new circular to the system
     */
    function addNewCircular()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->form_validation->set_rules('career_title','Career Title','required');
            $this->form_validation->set_rules('company_name','Company Name','required');
            $this->form_validation->set_rules('location','Location','required');
            $this->form_validation->set_rules('education_requirement','Education Rquirement','required');
            $this->form_validation->set_rules('experience','Experience','required');
            $this->form_validation->set_rules('deadline_date','Deadline Date','required');
            $this->form_validation->set_rules('job_link','Job Link','required');

            if($this->form_validation->run() == FALSE)
            {
                $this->addCircular();
            }
            else
            {
                $careerInfo["career_title"] = $this->security->xss_clean($this->input->post('career_title'));
                $careerInfo["company_name"] = $this->security->xss_clean($this->input->post('company_name'));
                $careerInfo["location"] = $this->security->xss_clean($this->input->post('location'));
                $careerInfo["education_requirement"] = $this->security->xss_clean($this->input->post('education_requirement'));
                $careerInfo["experience"] = $this->security->xss_clean($this->input->post('experience'));
                $careerInfo["deadline_date"] = date('Y-m-d',strtotime($this->security->xss_clean($this->input->post('deadline_date'))));
                $careerInfo["job_link"] = $this->security->xss_clean($this->input->post('job_link'));
                $careerInfo["job_description"] = $this->security->xss_clean($this->input->post('job_description'));
                $careerInfo["createdDtm"] = date('Y-m-d H:i:s');

                $result = $this->career_model->addNewCircular($careerInfo);

                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Circular created successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Circular creation failed');
                }

                redirect('/career/circularListing');
            }
        }
    }

    /**
     * This function is used to load the circular list
     */
    function circularListing()
    {
        $searchText = $this->security->xss_clean($this->input->post('searchText'));
        $data['searchText'] = $searchText;

        $this->load->library('pagination');

        $count = $this->career_model->circularListingCount($searchText);

        $returns = $this->paginationCompress("career/circularListing/", $count, 10, 3);

        $data['cicularRecords'] = $this->career_model->circularListing($searchText, $returns["page"], $returns["segment"]);

        $this->global['pageTitle'] = 'CUELSA : Circular Listing';

        $this->loadViews("allCircular", $this->global, $data, NULL);

    }
    /**
     * This function is used load circular edit information
     * @param number $circularId : Optional : This is circular id
     */
    function editCircular($circularId = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            if($circularId == null)
            {
                redirect('career/circularListing');
            }
            $data['circularInfo'] = $this->career_model->getCircularInfo($circularId);
            $this->global['pageTitle'] = 'CUELSA : Edit Circular';
            $this->loadViews("editCircular", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to update circular to the system
     */
    function updateCircular()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $circularId=$this->input->post('circular_id');

            $this->form_validation->set_rules('career_title','Career Title','required');
            $this->form_validation->set_rules('company_name','Company Name','required');
            $this->form_validation->set_rules('location','Location','required');
            $this->form_validation->set_rules('education_requirement','Education Rquirement','required');
            $this->form_validation->set_rules('experience','Experience','required');
            $this->form_validation->set_rules('deadline_date','Deadline Date','required');
            $this->form_validation->set_rules('job_link','Job Link','required');

            if( $this->form_validation->run() == FALSE)
            {
                $this->editCircular($circularId);
            }
            else
            {
                $careerInfo["career_title"] = $this->security->xss_clean($this->input->post('career_title'));
                $careerInfo["company_name"] = $this->security->xss_clean($this->input->post('company_name'));
                $careerInfo["location"] = $this->security->xss_clean($this->input->post('location'));
                $careerInfo["education_requirement"] = $this->security->xss_clean($this->input->post('education_requirement'));
                $careerInfo["experience"] = $this->security->xss_clean($this->input->post('experience'));
                $careerInfo["deadline_date"] = date('Y-m-d',strtotime($this->security->xss_clean($this->input->post('deadline_date'))));
                $careerInfo["job_link"] = $this->security->xss_clean($this->input->post('job_link'));
                $careerInfo["job_description"] = $this->security->xss_clean($this->input->post('job_description'));

                $result = $this->career_model->updateCircular($careerInfo,$circularId);
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Circular  Updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Circular Update failed');
                }
                redirect('career/circularListing/');
            }
        }
    }
    /**
     * This function is used to delete the circular using circularId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteCircular($circularId = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            if($circularId == null)
            {
                redirect('career/circularListing/');
            }
            $result = $this->career_model->deleteCircular($circularId);

            if($result > 0)
            {
                $this->session->set_flashdata('success', 'Circular Deleted successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Circular Deleted failed');
            }
            redirect('career/circularListing/');
        }
    }
}