<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schema extends CI_Controller {

     public function __construct(){
     parent::__construct();

          // Load Model
          $this->load->model('test_model');
          $this->load->model('projects');
          $this->load->model('cubes');
          $this->load->model('prices');
          $this->load->model('schemas');

     }

	public function index()
	{	
		$data['projects_list'] = $this->projects->getProjectsList();
		$data['cubes_dropdown'] = $this->cubes->getCubesDetailsDropDown();
		$data['cubes'] = $this->cubes->getCubesDetails();

		if ($this->session->userdata('projectnumber')){

			$indexNumber = $this->session->userdata('projectnumber');
			$data['price_list'] = $this->prices->getAPriceList($indexNumber);
			$data['schema_details'] = $this->schemas->getASchema($indexNumber);

		}

		//$this->load->model('price_lists');
		//$data['projects_list'] = $this->price_lists->getProjectsList();

		$this->load->view('templates/header', $data);
		$this->load->view('view_schema');
		$this->load->view('templates/footer');
	}

	public function cubeDetails(){
          // POST data
          $postData = $this->input->post();

          // get data
          $data = $this->test_model->getCubeDetails($postData);

          echo json_encode($data);
     }

	public function productDetails(){
          // POST data
          $postData = $this->input->post();

          // get data
          $data = $this->test_model->getProductDetails($postData);

          echo json_encode($data);
     }
}