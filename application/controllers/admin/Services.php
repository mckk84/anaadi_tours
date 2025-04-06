<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Services
 * Services class to control to authenticate user credentials and starts user's session.
 */
class Services extends CI_Controller
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
            $data['page_title'] = "Services";
            $data['records'] = array();

            $this->load->view('layout_admin/header', $data);
            $this->load->view('backend/services', $data);
            $this->load->view('layout_admin/footer');
        }
    }
    
}

?>