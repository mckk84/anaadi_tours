<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour extends CI_Controller {

	public function index()
	{
		$data['page_title'] = 'Anaadi Tours and Travels | Home';
		$data['user'] = $this->session->userdata("Auth");
		$this->load->model('tours_model');

		$data['domestic_tours'] = $this->tours_model->getMenuByCategoryId(1);
		$data['international_tours'] = $this->tours_model->getMenuByCategoryId(2);

		$uri = $this->uri->segment(2);
		$data['tour'] = $this->tours_model->getTour($uri);
		if( count($data['tour']) == 0 )
		{
			redirect('/');
		}

		$tours_1 = $this->tours_model->getByTourCategoryType($data['tour']['tourcategory'], $data['tour']['type'], 5);
		$tours_2 = $this->tours_model->getByTourCategory($data['tour']['tourcategory'], 5);
		
		$data['related_tours'] = array_merge($tours_1, $tours_2);

        $this->load->view('layout/header', $data);
        $this->load->view('front/tour', $data);
        $this->load->view('layout/footer');
	}
}
