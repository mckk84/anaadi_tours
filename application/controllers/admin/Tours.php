<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Tours
 * Tours class to control to authenticate user credentials and starts user's session.
 */
class Tours extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
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
            $data['page_title'] = "Tours";
            $data['records'] = array();

            $this->load->view('layout_admin/header', $data);
            $this->load->view('backend/tours', $data);
            $this->load->view('layout_admin/footer');
        }
    }

    /**
     * Index Page for this controller.
     */
    public function addtour()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
            redirect('admin');
        }
        else
        {
            $data['user'] = $this->session->userdata();
            $data['page_title'] = "Add Tour";
            $this->load->model('category_model');
            $this->load->model('tourcategory_model');
            
            $this->load->view('layout_admin/header', $data);
            $this->load->view('backend/addtour', $data);
            $this->load->view('layout_admin/footer');
        }
    }
    
}

?>