<?php 

	class Products extends CI_Model{

		// get the products list for an html drop down menu
		function getProductsListDropDown(){

			$query = $this->db->get('products');

			$result = $query->result_array();

			$newArray = array();
			$newArray['0'] = 'Choose a product';

			foreach($result as $r) {
				$newArray[$r['product_code']] = $r['product_code'] . ' =>> ' . $r['product_name'] . ' =>> ' . $r['product_specification'];
			}

			return $newArray;
		}


	}




 ?>