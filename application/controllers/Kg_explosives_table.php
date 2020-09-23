<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kg_explosives_table extends CI_Controller {


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

		$this->load->model('my_functions');


		$this->load->view('templates/header', $data);
		$this->load->view('view_kg_explosives_per_m.php');
		$this->load->view('templates/footer');
	}


}