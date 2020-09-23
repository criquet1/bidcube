<?php 

class My_functions extends CI_Model{

	function display_array(){
		$display = '<pre>' . print_r('the_array', true). '</pre>';
		echo '<br /><strong>Display : ' . $display;
	}

	// Kg_explosives_per_m_calculation

	function kepm($p_diam, $p_explosiv_density){

		$explosiv_density = floatval($p_explosiv_density);

		return round((3.14159 * $p_diam * $p_diam * $explosiv_density / 4000), 2, PHP_ROUND_HALF_EVEN);

	}





}

?>