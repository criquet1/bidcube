<?php 

	class Projects extends CI_Model{

		// get the projects list for an html drop down menu
		function getProjectsList(){

			$i = 0;

			$query = $this->db->get('projects');

			$result = $query->result_array();

			$theProjects = array();
			$theProjects[0] = 'Choose a project';

			foreach($result as $r) {
				$theProjects[$r['project_key']] = $r['project_number'] . ' ' . $r['project_name'];
			}

			return $theProjects;
		}





	}




 ?>