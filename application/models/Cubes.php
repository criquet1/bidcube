<?php 

	class Cubes extends CI_Model{

				// returns the price list of a project defined in parameter
		function getCubesDetails(){

			return $this->db->get('view_cubes')->result_array();
                                                 
		}

		function getCubesDetailsDropDown(){

			if (mysqli_more_results($this->db->conn_id)) {
	            mysqli_next_result($this->db->conn_id);
	        }

			$res = $this->db->get('view_cubes')->result_array();

			$newArray = array();
			$newArray['0'] = 'Choose a cube';

			foreach($res as $r) {
				$newArray[$r['key'] + 1] = $r['cube'] . ' => ' . $r['spacing'] . ' => ' . $r['holes'];
			}

			return $newArray;

		}

	}