<div class="container">
	<div class="row">



		<div class="col-sm-1">
		</div>

		<div class="col-sm-11">
			<br /> <br />
			this is price list page <br />

<?php



			$price_per = array (
				'name'			=> 'price_per',
				'type'			=> 'text',
				'placeholder'	=> 'Price per',
				'class'			=> 'form-control-sm',
				'id'			=> 'price_per',
				'value'			=> set_value('price_per'),
				'required'		=> 'required',
				'onchange'		=> 'uneFonctionJavaScript();'
			);

			$unit_price = array (
				'name'			=> 'unit_price',
				'type'			=> 'text',
				'placeholder'	=> 'Unit price',
				'class'			=> 'form-control-sm',
				'id'			=> 'unit_price',
				'value'			=> set_value('unit_price'),
				'required'		=> 'required',
				'onchange'		=> 'uneFonctionJavaScript();'
			);

			$submit = array(
				'class' 		=> 'btn btn-info button'
			);

			$form_attributes = array(
				'name'			=> 'price_list_form',
				//'onsubmit'		=> 'return(validate());',
				'autocomplete'	=>	'off'
			);

			echo validation_errors();

			echo form_open(site_url('validation/add_or_update_product_price'), $form_attributes);
	        echo form_dropdown('product_code', $products_list, set_value('product_code', '0'), 'class="form-control-sm"');
			echo form_input($price_per);
			echo form_input($unit_price);
			echo form_submit('submit', 'Submit', $submit);
			echo form_close();


?>
			
<?php
			if(isset($price_list)){
?>

				<table style="width:100%" border="1" cellpadding="5" cellspacing="2">
					<tr>
			    		<th>Product code</th>
			    		<th>Product name</th>
			    		<th style="text-align:center">Price per</th>
			    		<th style="text-align:center">Unit price</th>
			  		</tr>
<?php 


					foreach($price_list as $row):

						echo '<tr>';
							echo '<td>' . $row['Code'] . '</td>';
							echo '<td>' . $row['Name'] . '</td>';
							echo '<td align="center">' . $row['Price per'] . '</td>';
							echo '<td align="right">' . $row['Unit price'] . '</td>';
						echo '</tr>';

					endforeach;
				}



?>


			</table> 






		</div>
	</div>











	<?php //echo '<pre>' . print_r($price_list, true) . '</pre>'; ?>
</div>
