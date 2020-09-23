<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_model extends CI_Model {
  
  function getCubes(){

    $this->db->select('cubespec');
    $records = $this->db->get('view_cubes');
    $cubes = $records->result_array();
    return $cubes;
  }

  function getCubeDetails($postData=array()){
 
    $response = array();
 
    if(isset($postData['cubespec']) ){
 
      // Select record
      $this->db->select('*');
      $this->db->where('cubespec', $postData['cubespec']);
      $records = $this->db->get('view_cubes');
      $response = $records->result_array();
 
    }
 
    return $response;
  }




  function getProducts(){

    $where = 1;

    $this->db->select('product_code');
    $records = $this->db->get_where('view_price_lists', array('project_key' => $where));

    $cubes = $records->result_array();
    return $cubes;
  }



  // suis rendue là
  function getProductDetails($postData=array()){
 
    $response = array();



    if(isset($postData['product_code'])){
   
      // Select record
      $this->db->select('*');
      $this->db->where('product_code', $postData['product_code']);
      $this->db->where('project_key', '1');
      $records = $this->db->get('view_price_lists');
      $response = $records->result_array();

    }
 
    return $response;
  }


}