<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['page_title'] = 'Anaadi Tours and Travels | Contact';
		$data['user'] = $this->session->userdata("Auth");
		
        $this->load->view('layout/header', $data);
        $this->load->view('front/contact', $data);
        $this->load->view('layout/footer');
	}
}
