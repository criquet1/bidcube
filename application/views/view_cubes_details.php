<div class="container">
	<div class="row">



		<div class="col-sm-1">
		</div>

		<div class="col-sm-11">
			<br /> <br />
			this is cubes details page <br />



<?php
			if(isset($cubes_details)){
?>

				<table style="width:50%" border="1" cellpadding="5" cellspacing="2">
					<tr>

			    	<!--	<th style="text-align:center">spacing</th>
			    		<th style="text-align:center">Number of holes</th> -->

<?php 

					$size = 0;

							echo '<tr>
								<th style="width: 80px; text-align: center;">Cube size</th>
								<th style="width: 40px; text-align: center;">Spacing</th>
								<th style="width: 40px; text-align: center;">Number of holes</th>
								</tr>';

					foreach($cubes_details as $row):
						if ($size != $row['width']){
							echo '<tr><td></td></tr>';
							echo '<tr>';
								echo '<td style="text-align: center; font-weight: bold;">' . $row['cube'] . '</td>';

						} else {
							echo '<tr>';
								echo '<td></td>';
						}
							
							echo '<td align="center">' . $row['spacing'] . ' m' . '</td>';
							echo '<td align="center">' . $row['holes'] . '</td>';
							echo '</tr>';
						
						$size = $row['width'];
					endforeach;
				}

?>

			</table> 
		</div>
	</div>


	<?php // echo '<pre>' . print_r($cubes_details, true) . '</pre>'; ?>
</div>			