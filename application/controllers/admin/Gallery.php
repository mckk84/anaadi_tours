<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Gallery
 * Gallery class to control to authenticate user credentials and starts user's session.
 */
class Gallery extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('gallery_model');
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
            redirect('admin');
        }
        else
        {
            $data['user'] = $this->session->userdata();
            $data['page_title'] = "Gallery";
            $data['records'] = $this->gallery_model->getAll();

            $this->load->view('layout_admin/header', $data);
            $this->load->view('backend/gallery', $data);
            $this->load->view('layout_admin/footer');
        }
    }

    public function getRecord()
    {
        $response = array("error" => 0, "error_message" => "", "success_message" => "");
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        if( $id )
        {
            $record = $this->gallery_model->getById($id);
            $response['error'] = 0;
            $response['error_message'] = "";
            $response['success_message'] = "Success";
            $response['record'] = $record;
            die(json_encode($response));
        }
        else
        {
            $response['error'] = 1;
            $response['error_message'] = "Invalid Request";
            die(json_encode($response));
        }
    }

    public function save_record()
    {
        $response = array("error" => 0, "error_message" => "", "success_message" => "");
        
        $image = "";
        $image_type = "";
        $target_folder = IMAGE_UPLOAD_PATH."gallery/";

        $slider_image = $_FILES['image']; // Get the uploaded file
        if ( $slider_image && $slider_image['name']) 
        {
            $image = trim($slider_image['name']);
            $imageFileType = strtolower(pathinfo($image,PATHINFO_EXTENSION));
            
            $result = getNewImage1($target_folder, 'gallery', $imageFileType);
            $new_image_name = $result[0];
            $target_file = $result[1];
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) 
            {
                $response["error"] = 1;
                $response["error_message"] = "Image format invalid. Upload jpg/jpeg/png.";
                die(json_encode($response));
            }

            $fileinfo = @getimagesize($_FILES["image"]["tmp_name"]);
            $width = $fileinfo[0];
            $height = $fileinfo[1];
            
            if ($width < "800" || $height < "500") {
                $response["error"] = 1;
                $response["error_message"] = "Image dimension should be greater or equal to 800X500";
                die(json_encode($response));
            }

            // Check file size
            if ( $slider_image["size"] > 2000000 || $slider_image["error"] == 1) 
            {
                $response["error"] = 1;
                $response["error_message"] = "Image size too large. Upload size less than 2MB.";
                die(json_encode($response));
            }

            // upload file
            if (move_uploaded_file($slider_image["tmp_name"], $target_file)) 
            {
                // upload suuccess 
                $image = $new_image_name;
            } else {
                $response["error"] = 1;
                $response["error_message"] = "Image upload failed";
                die(json_encode($response));
            }
        } 
        else 
        {
            if( $id == "" )
            {
                $response["error"] = 1;
                $response["error_message"] = "Please upload Image";
                die(json_encode($response));
            }
            else
            {
                $srecord = $this->gallery_model->getById($id);
                $image = $srecord['image'];
            }
        }
        
        $user = $this->session->userdata();
                
        $recordInfo = array(
                'image' => $image,
                'created_by' => $user['userId']
            );

        $result = $this->gallery_model->addNew($recordInfo);
        if($result > 0)
        {
            $response["error"] = 0;
            $response["error_message"] = "";
            $response["success_message"] = "Record added successfully";
        } 
        else 
        {
            $response["error"] = 1;
            $response["error_message"] = "Record add failed.";
        }                
        die(json_encode($response));        
    }

    public function deleteRecord()
    {
        $record_id = intval($this->uri->segment(4));
        $response = array("error" => 0, "error_message" => "", "success_message" => "");
        $user = $this->session->userdata();

        if( $user['user_type'] !== "Admin" )
        {
            $response["error"] = 1;
            $response["error_message"] = "Your have no permission.";   
            die(json_encode($response));
        }
        if( $record_id == 0 )
        {   
            $response["error"] = 1;
            $response["error_message"] = "Invalid Request";
            die(json_encode($response));
        }
        
        $data['record'] = $this->gallery_model->getById($record_id);
        if( count($data['record']) == 0 )
        {   
            $response["error"] = 1;
            $response["error_message"] = "Record not found";
        }
        else
        {
            $this->gallery_model->deleteRecord($record_id);
            $response["error"] = 0;
            $response["error_message"] = "";
            $response["success_message"] = "Record deleted successfully";
        }
        
        die(json_encode($response));
    }
    
}

?>