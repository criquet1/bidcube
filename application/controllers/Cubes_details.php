<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cubes_details extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
 
 		if(!$this->session->userdata('jules')){
 			redirect('admin');
 	}
       
      
	}


	public function index()
	{

		if($this->session->userdata('jules')){
     		// do something when exist
		}else{
    		// do something when doesn't exist
		}

		$this->load->model('projects');
		$data['projects_list'] = $this->projects->getProjectsList();
		$this->load->model('Cubes');
		$data['cubes_details'] = $this->Cubes->getCubesDetails();


		$this->load->view('templates/header', $data);
		$this->load->view('view_cubes_details');
		$this->load->view('templates/footer');
	}


}