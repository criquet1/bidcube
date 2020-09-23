<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price_list extends CI_Controller {

	public function index()
	{	

		$this->load->library('table');
		$this->load->model('projects');
		$this->load->model('prices');
		$this->load->model('products');
		
		$data['projects_list'] = $this->projects->getProjectsList();
		$data['products_list'] = $this->products->getProductsListDropDown();

		if ($this->session->userdata('projectnumber')){

			$indexNumber = $this->session->userdata('projectnumber');
			$data['price_list'] = $this->prices->getAPriceList($indexNumber);

		}
		


		//$this->load->model('price_lists');
		//$data['projects_list'] = $this->price_lists->getProjectsList();



		$this->load->view('templates/header', $data);
		$this->load->view('view_price_list');
		$this->load->view('templates/footer');
	}
}