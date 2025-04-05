<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terms extends CI_Controller {

	public function index()
	{
		$data['page_title'] = 'Anaadi Tours and Travels | Terms of Service';
		$data['user'] = $this->session->userdata("Auth");
		
        $this->load->view('layout/header', $data);
        $this->load->view('front/terms', $data);
        $this->load->view('layout/footer');
	}
}
