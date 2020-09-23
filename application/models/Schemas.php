<?php 

	class Schemas extends CI_Model{


		// à revoir
		function add_or_update_a_schema(){


			
		}

		// returns the price list of a project defined in parameter
		function getASchema($index){

			if (mysqli_more_results($this->db->conn_id)) {
	            mysqli_next_result($this->db->conn_id);
	        }

			$stored_procedure = "CALL get_a_project_schema (?) ";
			$query = $this->db->query($stored_procedure,array('p_schema_key' => $index));

			$res = $query->result_array();

			$data = array();
			$i = 0;

			foreach ($res as $row):                                                     
            	$data[$i]['project_key'] = $row['Project key'];
            	$data[$i]['Project number'] = $row['Project number'];
            	$data[$i]['Project name'] = $row['Project name'];
            	$data[$i]['Cube'] = $row['Cube'];
            	$data[$i]['Spacing'] = $row['Spacing'];
            	$data[$i]['Holes'] = $row['Holes'];
            	$data[$i]['Filling'] = $row['Hole filling'];
            	$data[$i]['Quantity'] = $row['Quantity'];
            	$data[$i]['Number of holes'] = $row['Number of holes'];
            	$data[$i]['Unit price'] = $row['Unit price'];
            	$i++;
            endforeach;

			return $data; 

		}

	}

 ?>