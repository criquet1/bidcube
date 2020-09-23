<?php ?>

<div class="container">
	<div class="row">


		<div class="table-responsive-md">
			<br /> <br />
			<h4>this is the right schema page</h4>





<?php




			$submit = array(
				'class' 		=> 'btn btn-info button',
				'onclick'		=> 'ajouterLigne();'
			);

			$form_attributes = array(
				'name'			=> 'cube_schema_form',
				//'onsubmit'		=> 'return(validate());',
				'autocomplete'	=>	'off'
			);

			echo validation_errors();

			echo form_open(site_url(''), $form_attributes);

			echo  '<table border="1"><tr>';

      		

      		// première colonne
     		echo "<td colspan='7'><select id='sel_cube'>";
          	echo "<option value='Choisir un cube'>Choisir un cube</option>";
          	foreach($cubes as $cube){
               	echo "<option value='".$cube['cubespec']."' >".$cube['cubespec']."</option>";
          	}
     		echo '</select><br/>&#160;';

			echo '	<b>Spacing : </b>
					<span style="font-weight: bold;" id="sspacing"></span><br/>&#160;
					<b>Total holes : </b>
					<span style="font-weight: bold;" id="sholes"></span><br/>&#160;
				</td>';

			echo '</tr><tr><td>&#160; </td>';



			echo '<td>';

			$data = array(
	            'name'			=> 'nb_holes0',
	            'id'       	 	=> 'nb_holes0',
	            'class'			=> 'form-control-sm',
	            'placeholder' 	=> 'nb of holes'
	          );

        	echo form_input($data);
        	echo '<br><b>Out of </b><span id="total">0</span> = <span class="bold" id="span0">0</span> left';
			echo '</td>';





	    	echo '<td colspan="2">';



    		echo '<div>';
     		echo '<select id="sel_product0" class="increment" name="product0">';
          	echo "<option value='Choose a product'>Choose a product</option>";
          	foreach($price_list as $price){
               	echo "<option value='".$price['product_code']."' >".$price['name']. ' ' . $price['spec'] . "</option>";
          	}
     		echo '</select>';

			$quantity = array(
				'name'			=> 'qty0',
				'id'			=> 'laquantite',
				'class'			=> 'increment'
			);
     		echo form_input($quantity);
     		echo '<span id="price0">price</span>' . ' / <span id="perunit0">unit</span>';

			echo '</div>';





			echo '<button type="button" class="more">Add another...</button>';
			echo '</td>';




			echo  '</tr></table>';









			echo form_submit('submit', 'Submit', $submit);
			echo form_close();



?>






<?php
			if(isset($schema_details)){
?>

				<table id="tableau" class="table w-auto">
					<tr>

			    	<!--	<th style="text-align:center">spacing</th>
			    		<th style="text-align:center">Number of holes</th> -->

<?php 

					$size = 0;

						echo '<tr>
								<th class="a">Cubes</th>
								<th class="a">Spacing</th>
								<th class="a">Holes</th>
								<th class="a">Hole filling</th>
								<th class="a">Quantity for<br />1 hole</th>
								<th class="a">Cost</th>
							</tr>';

					$the_cube = 'A';
					$the_spacing = -1;
					$the_number_of_holes = 0;

					foreach($schema_details as $row):

						if($row['Cube'] != $the_cube && $row['Spacing'] != $the_spacing){

							echo '<tr><td></td></tr>';
							echo '<tr>';
								// echo '<td style="font-weight: bold;">' . $row['Cube'] . '</td>';
								echo '<td>' . $row['Cube'] . '</td>';
								echo '<td>' . $row['Spacing'] . '</td>';
								echo '<td>';
									$numberOFholes = $row['Holes'];
									$totalHoles = $numberOFholes * $numberOFholes;
								echo $numberOFholes . ' X ' . $numberOFholes . ' = ' . $totalHoles;
							echo '</td>';
							echo '/<tr>';

						}



							if ($the_number_of_holes != $row['Number of holes']){
								echo '<tr>';
								echo '<td colspan="2">&#160;-</td>';					
								echo '<td>';
									echo $row['Number of holes'] . ' out of ' . $totalHoles;
								echo '</td>';
							}
							else{
								echo '<td colspan="3">&#160;-</td>';
							}

							echo '<td>';
								echo $row['Filling'] . '</td>';


							echo '<td>';
								echo $row['Quantity'];
							echo '</td>';



							echo '<td>';
								echo $row['Quantity'] * $row['Unit price'] * $row['Number of holes'];
							echo '</td>';


						echo '</tr>';

						$the_cube = $row['Cube'];
						$the_spacing = $row['Spacing'];
						$the_number_of_holes = $row['Number of holes'];
					endforeach;
			}

/*			echo '<tr>';
				// echo '<td style="font-weight: bold;">' . $row['Cube'] . '</td>';
				echo '<td>' . $row['Cube'] . '</td>';

				echo '<td></td>';


				echo '<td>';
				echo '</td>';


				echo '<td>';
				echo '</td>';



				echo '<td>';
				echo '</td>';


			echo '</tr>';
*/

			echo '</table>';


?>







<?php

// echo '<pre>' . print_r($price_list, true) . '</pre>';
 ?>

		</div>
	</div>
</div>


