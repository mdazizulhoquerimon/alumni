<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Photo_gallery (Photo_galleryController)
 * Photo_gallery Class to control all Photo_gallery related operations.
 * @author : Rimon
 * @version : 1.0
 * @since : 12 january 2019
 */
class Photo_gallery extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('photo_gallery_model');
        $this->isLoggedIn();
        $this->load->library('form_validation');
        $this->load->library('upload');
    }
//................................................................................Admin Part Functionality START...........................................................................................................//

    /**
     * This function is used to load the Upload Phpto form
     */
    function uploadPhoto()
    {

        $data['upload_error'] = $this->upload->display_errors();
        $this->global['pageTitle'] = 'CUELSA : Upload Photo';

        $this->loadViews("uploadPhoto", $this->global, $data, NULL);

    }

    /**
     * This function is used to upload new photos to the system
     */
    function createFolder()
    {

        $this->form_validation->set_rules('folder_name', 'Folder Name', 'trim|required|max_length[1000]');

        if ($this->form_validation->run() == FALSE) {
            $this->uploadPhoto();
        } else {
            $folder_name = $this->security->xss_clean($this->input->post('folder_name'));
            if (!is_dir('uploads/photogallery/' . $folder_name)) {
                mkdir('./uploads/photogallery/' . $folder_name, 0777, TRUE);
                $folder_path = base_url("uploads/photogallery/" . $folder_name);
                $photoInfo['folder_path'] = $folder_path;
                $photoInfo['folder_name'] = $folder_name;
                $photoInfo['createdDtm'] = date("Y-m-d H:i:s");
                $result = $this->photo_gallery_model->createFolder($photoInfo);
                if ($result > 0) {
                    $this->session->set_flashdata('success', 'Folder created successfully');
                    $this->session->set_flashdata('last_insert_id', $result);
                    $data['folderInfo'] = $this->photo_gallery_model->getFolderInfo($result);
                    $folder_name = $data['folderInfo']->folder_name;
                    $this->session->set_flashdata('folder_name', $folder_name);
                } else {
                    $this->session->set_flashdata('error', 'Folder creation failed');
                }
            } else {
                $this->session->set_flashdata('error', 'Folder Already Exists');
            }
            redirect('photo_gallery/uploadPhoto');
        }
    }


    function uploadMultiplePhotos()
    {
        // If file upload form submitted
        $folder_id = $this->input->post('folder_id');
        $data['folderInfo'] = $this->photo_gallery_model->getFolderInfo($folder_id);
        $folder_name = $data['folderInfo']->folder_name;

        if ($this->input->post('fileSubmit') && !empty($_FILES['files']['name']) && !empty($folder_id)) {
            $filesCount = count($_FILES['files']['name']);
            for ($i = 0; $i < $filesCount; $i++) {
                $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['files']['size'][$i];

                // File upload configuration
                $config['upload_path'] = './uploads/photogallery/' .$folder_name. '/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';

                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                // Upload file to server
                if ($this->upload->do_upload('file')) {
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['folder_id'] = $folder_id;
                    $image_path=base_url("uploads/photogallery/".$folder_name. "/" .$fileData['raw_name'].$fileData['file_ext']);
                    $uploadData[$i]['image_path'] = $image_path;
                }
            }
            if (!empty($uploadData)) {
                // Insert files data into the database
                $result = $this->photo_gallery_model->insert($uploadData);
                if ($result > 0) {
                    $this->session->set_flashdata('success', 'Image Uploaded successfully');
                } else {
                    $this->session->set_flashdata('error', 'Image Upload failed');
                }
            }
        }
        else{
            $this->session->set_flashdata('error', 'You Did Not Create Folder');
        }
        redirect('photo_gallery/folderListing');
    }

    /**
     * This function is used to load the folder list
     */
    function folderListing()
    {
        $searchText = $this->security->xss_clean($this->input->post('searchText'));
        $data['searchText'] = $searchText;

        $this->load->library('pagination');

        $count = $this->photo_gallery_model->folderListingCount($searchText);

        $returns = $this->paginationCompress("photo_gallery/folderListing/", $count, 10, 3);

        $data['folderRecords'] = $this->photo_gallery_model->folderListing($searchText, $returns["page"], $returns["segment"]);

        $this->global['pageTitle'] = 'CUELSA : Photo Gallery';

        $this->loadViews("allPhotoFolder", $this->global,$data, NULL);

    }

    /**
     * This function is used to load the folder wise photo list
     */
    function folderWiseListing($folder_id = null)
    {
        $searchText = $this->security->xss_clean($this->input->post('searchText'));
        $data['searchText'] = $searchText;

        $this->load->library('pagination');

        $count = $this->photo_gallery_model->folderWiseListingCount($folder_id,$searchText);

        $returns = $this->paginationCompress("photo_gallery/folderWiseListing/".$folder_id."/", $count, 18, 4);

        $data["folder_id"] = $folder_id;

        $data['photoRecords'] = $this->photo_gallery_model->folderWiseListing($folder_id,$searchText, $returns["page"], $returns["segment"]);

        $this->global['pageTitle'] = 'CUELSA : Photo Gallery';

        $this->loadViews("allPhotoFolderWise", $this->global,$data, NULL);

    }
//................................................................................Admin Part Functionality END...........................................................................................................//
}