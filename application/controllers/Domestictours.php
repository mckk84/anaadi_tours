<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Domestictours extends CI_Controller {

	public function index()
	{
		$data['page_title'] = 'Anaadi Tours and Travels | Domestic Tours';
		$data['user'] = $this->session->userdata("Auth");

		$this->load->model('tours_model');

		$data['domestic_tours'] = $this->tours_model->getMenuByCategoryId(1);
		$data['international_tours'] = $this->tours_model->getMenuByCategoryId(2);
		$data['recent_tours'] = $this->tours_model->getLatest(5);
		$tourcategory = $this->uri->segment(2);
		$tour_type = $this->uri->segment(3);

		if( $tourcategory == "" )
		{
			redirect('/');
		}
		elseif( $tourcategory != "" && $tour_type == "")
		{
			$data['tourcategory'] = $tourcategory;
			$data['tours'] = $this->tours_model->getByTourCategory($data['tourcategory']);
			
			$data['tour_types'] = $this->tours_model->getByTourTypesByCategory($data['tourcategory']);
		}
		else
		{
			$data['tourcategory'] = $tourcategory;
			$data['tour_type'] = urldecode($tour_type);
			$data['tours'] = $this->tours_model->getByTourCategoryType($data['tourcategory'], $data['tour_type']);
		}
		
        $this->load->view('layout/header', $data);
        $this->load->view('front/domestictours', $data);
        $this->load->view('layout/footer');
	}
}
