<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_test extends CI_Controller {

     public function __construct(){
          parent::__construct();

          // Load Model
          $this->load->model('test_model');
          $this->load->model('projects');
          $this->load->model('cubes');
          $this->load->model('prices');
          $this->load->model('schemas');

     }


  
     public function index(){
          $cubes = $this->test_model->getCubes();

          $data['cubes'] = $cubes;
          $products = $this->test_model->getProducts();

          $data['products'] = $products;

          $data['projects_list'] = $this->projects->getProjectsList();
          $data['cubes_dropdown'] = $this->cubes->getCubesDetailsDropDown();
          

          if ($this->session->userdata('projectnumber')){

               $indexNumber = $this->session->userdata('projectnumber');
               $data['price_list'] = $this->prices->getAPriceList($indexNumber);
               $data['schema_details'] = $this->schemas->getASchema($indexNumber);

          }

          $this->load->view('templates/header', $data);
          $this->load->view('view_page_test');
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