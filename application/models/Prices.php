<?php 

	class Prices extends CI_Model{


		// à revoir
		function add_or_update_a_price($ProjectKey, $productCode, $pricePer, $unitPrice){

			$stored_procedure = "CALL add_or_update_a_price_list (?, ?, ?, ?, @x) ";
			$query = $this->db->query($stored_procedure,array(
				'project_key' => $projectKey,
				'product_code' => $productCode,
				'price_per' => $pricePer,
				'unit_price' => $unitPrice
			));
			
		}

		// returns the price list of a project index defined in parameter
		function getAPriceList($index){

			if (mysqli_more_results($this->db->conn_id)) {
	            mysqli_next_result($this->db->conn_id);
	        }

			$stored_procedure = "CALL get_a_price_list (?) ";
			$query = $this->db->query($stored_procedure,array('p_project_key' => $index));
			$res = $query->result_array();

			return $res;
		}

		function getAPriceListDropDown($index){

			if (mysqli_more_results($this->db->conn_id)) {
	            mysqli_next_result($this->db->conn_id);
	        }

			$stored_procedure = "CALL get_a_price_list (?) ";
			$query = $this->db->query($stored_procedure,array('p_list_key' => $index));
			$res = $query->result_array();

			$thePriceList = array();
			$thePriceList['0'] = 'Choose a product';

			foreach($res as $r) {
				$thePriceList[$r['Code']] = $r['Code'] . ' =>> ' . $r['Name'] . ' =>> ' . $r['Spec'] . ' =>> ' . $r['Price per'];
			}

			return $thePriceList;


		}

		function getAPriceListDropDownShorter($index){

			if (mysqli_more_results($this->db->conn_id)) {
	            mysqli_next_result($this->db->conn_id);
	        }

			$stored_procedure = "CALL get_a_price_list (?) ";
			$query = $this->db->query($stored_procedure,array('p_list_key' => $index));
			$res = $query->result_array();

			$thePriceList = array();
			$thePriceList['0'] = 'Choose a product';

			foreach($res as $r) {
				$thePriceList[$r['product_code']] = $r['name'] . ' -> ' . $r['spec'] . ' -> ' . $r['price_per'];
			}

			return $thePriceList;


		}

		








	}

 ?>