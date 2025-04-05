<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Domestictours extends CI_Controller {

	public function index()
	{
		$data['page_title'] = 'Anaadi Tours and Travels | Domestic Tours';
		$data['user'] = $this->session->userdata("Auth");
		
        $this->load->view('layout/header', $data);
        $this->load->view('front/domestictours', $data);
        $this->load->view('layout/footer');
	}
}
