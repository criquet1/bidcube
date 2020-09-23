<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validation extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
 
 		if(!$this->session->userdata('jules')){
 			redirect('admin');
 	}
       
      
	}


	public function index()
	{

		$this->load->model('projects');
		$data['projects_list'] = $this->projects->getProjectsList();

		$this->load->view('templates/header', $data);
		$this->load->view('view_projects');
		$this->load->view('templates/footer');
	}



	public function add_or_update_product_price(){

		$this->load->library('form_validation');
		$this->load->model('projects');
		$this->load->model('price_lists');

		$this->form_validation->set_rules('product_code', 'Product code', 'required');
		$this->form_validation->set_rules('price_per', 'Price per', 'required');
		$this->form_validation->set_rules('unit_price', 'Unit price', 'required');


		if ($this->form_validation->run() == TRUE){

			$priceListKey = $this->session->userdata('projectnumber');
			$productCode = $this->input->post('product_code');
			$pricePer = $this->input->post('price_per');
			$unitPrice = $this->input->post('unit_price');

			
			
			$this->price_lists->add_or_update_a_price_list($priceListKey, $productCode, $pricePer, $unitPrice);
			redirect('price_list');
		}

		
		$data['projects_list'] = $this->projects->getProjectsList();

		$this->load->view('templates/header', $data);
		$this->load->view('view_price_list');
		$this->load->view('templates/footer');





	}



}