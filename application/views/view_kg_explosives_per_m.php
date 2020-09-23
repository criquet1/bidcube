<?php ?>

<div class="container">
	<div class="row">





		<div class="col-sm-1">
		</div>

		<div class="col-sm-10 text-center">
			<br /> <br />
			this is kg explosives / 1 m page <br />




<?php 

	$a = '0.60';
	$b = '0.80';
	$c = '0.82';
	$d = '0.85';
	$e = '0.90';
	$f = '0.95';
	$g = '1.00';
	$h = '1.05';
	$i = '1.10';
	$j = '1.15';
	$k = '1.20';
	$l = '1.30';
	$m = '1.35';
	$n = '1.40';

	$aa = 25;
	$bb = 32;
	$cc = 38;
	$dd = 45;

	$result = 0;

	if(isset($_POST['the_result'])){

		$result = intval($_POST['the_result']);
		echo 'le résultat = ' . $result;

	}


			$hole_diameter = array (
				'name'			=> 'hole_diameter',
				'type'			=> 'text',
				'placeholder'	=> 'Hole diameter',
				'class'			=> 'form-control-sm',
				'id'			=> 'hole_diameter',
				'value'			=> set_value('hole_diameter'),
				'required'		=> 'required',
				'onchange'		=> 'uneFonctionJavaScript();'
			);

			$explosive_density = array (
				'name'			=> 'explosive_density',
				'type'			=> 'text',
				'placeholder'	=> 'Explosive density',
				'class'			=> 'form-control-sm',
				'id'			=> 'explosive_density',
				'value'			=> set_value('explosive_density'),
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

			echo form_open(site_url('kg_explosives_table'), $form_attributes);
			echo '<br /> 3.14159 X ';
			echo form_input($hole_diameter);
			echo ' mm&#178; X ';
			echo form_input($explosive_density);
			echo ' g/cm&#179; &divide; 4000 = ';

			if(isset($_POST['hole_diameter']) && isset($_POST['explosive_density'])){

				$p_diam = intval($_POST['hole_diameter']);
				$explosive_density =  floatval($_POST['explosive_density']);
				$result =round((3.14159 * $p_diam * $p_diam * $explosive_density / 4000), 2, PHP_ROUND_HALF_EVEN);
				$this->session->set_userdata('the_result', $result);
				echo '<strong>' . $result . ' kg </strong>' ;

			}

			echo'<br />';
			echo form_submit('submit', 'Submit', $submit);
			echo form_close();


			if(!isset($_POST['hole_diameter'])){
				$hole_diameter = 0;
				$this->session->set_userdata('the_result', 0);
			}

			if(!isset($_POST['$explosive_density'])){
				$explosive_density = 0;
				$this->session->set_userdata('the_result', 0);
			}



?>




      <table class="table table-hover">
        <thead>
          <tr>
            <th rowspan="2">Hole<br/>diameter<br/>mm</th>
            <th style="text-align:center" colspan="14">Kg of explosives per meter of column for given density (g/cm&#179;)</th>
          </tr>
          <tr>
          	<th><?= $a; ?></th>
          	<th><?= $b; ?></th>
          	<th><?= $c; ?></th>
          	<th><?= $d; ?></th>
          	<th><?= $e; ?></th>
          	<th><?= $f; ?></th>
          	<th><?= $g; ?></th>
          	<th><?= $h; ?></th>
          	<th><?= $i; ?></th>
          	<th><?= $j; ?></th>
          	<th><?= $k; ?></th>
          	<th><?= $l; ?></th>
          	<th><?= $m; ?></th>
          	<th><?= $n; ?></th>
          </tr>
         </thead>
			<tbody>
           <tr>
          	<th><?= $aa; ?></th>
         	<td><?= $this->my_functions->kepm($aa, $a); ?></td>
          	<td><?= $this->my_functions->kepm($aa, $b); ?></td>
          	<td><?= $this->my_functions->kepm($aa, $c); ?></td>
          	<td><?= $this->my_functions->kepm($aa, $d); ?></td>
          	<td><?= $this->my_functions->kepm($aa, $e); ?></td>
          	<td><?= $this->my_functions->kepm($aa, $f); ?></td>
          	<td><?= $this->my_functions->kepm($aa, $g); ?></td>
          	<td><?= $this->my_functions->kepm($aa, $h); ?></td>
          	<td><?= $this->my_functions->kepm($aa, $i); ?></td>
          	<td><?= $this->my_functions->kepm($aa, $j); ?></td>
          	<td><?= $this->my_functions->kepm($aa, $k); ?></td>
          	<td><?= $this->my_functions->kepm($aa, $l); ?></td>
          	<td><?= $this->my_functions->kepm($aa, $m); ?></td>
          	<td><?= $this->my_functions->kepm($aa, $n); ?></td>
          </tr>
          <tr>
          	<th><?= $bb; ?></th>
         	<td><?= $this->my_functions->kepm($bb, $a); ?></td>
          	<td><?= $this->my_functions->kepm($bb, $b); ?></td>
          	<td><?= $this->my_functions->kepm($bb, $c); ?></td>
          	<td><?= $this->my_functions->kepm($bb, $d); ?></td>
          	<td><?= $this->my_functions->kepm($bb, $e); ?></td>
          	<td><?= $this->my_functions->kepm($bb, $f); ?></td>
          	<td><?= $this->my_functions->kepm($bb, $g); ?></td>
          	<td><?= $this->my_functions->kepm($bb, $h); ?></td>
          	<td><?= $this->my_functions->kepm($bb, $i); ?></td>
          	<td><?= $this->my_functions->kepm($bb, $j); ?></td>
          	<td><?= $this->my_functions->kepm($bb, $k); ?></td>
          	<td><?= $this->my_functions->kepm($bb, $l); ?></td>
          	<td><?= $this->my_functions->kepm($bb, $m); ?></td>
          	<td><?= $this->my_functions->kepm($bb, $n); ?></td>
          </tr>
          <tr>
          	<th><?= $cc; ?></th>
         	<td><?= $this->my_functions->kepm($cc, $a); ?></td>
          	<td><?= $this->my_functions->kepm($cc, $b); ?></td>
          	<td><?= $this->my_functions->kepm($cc, $c); ?></td>
          	<td><?= $this->my_functions->kepm($cc, $d); ?></td>
          	<td><?= $this->my_functions->kepm($cc, $e); ?></td>
          	<td><?= $this->my_functions->kepm($cc, $f); ?></td>
          	<td><?= $this->my_functions->kepm($cc, $g); ?></td>
          	<td><?= $this->my_functions->kepm($cc, $h); ?></td>
          	<td><?= $this->my_functions->kepm($cc, $i); ?></td>
          	<td><?= $this->my_functions->kepm($cc, $j); ?></td>
          	<td><?= $this->my_functions->kepm($cc, $k); ?></td>
          	<td><?= $this->my_functions->kepm($cc, $l); ?></td>
          	<td><?= $this->my_functions->kepm($cc, $m); ?></td>
          	<td><?= $this->my_functions->kepm($cc, $n); ?></td>
          </tr>
          <tr>
          	<th><?= $dd; ?></th>
         	<td><?= $this->my_functions->kepm($dd, $a); ?></td>
          	<td><?= $this->my_functions->kepm($dd, $b); ?></td>
          	<td><?= $this->my_functions->kepm($dd, $c); ?></td>
          	<td><?= $this->my_functions->kepm($dd, $d); ?></td>
          	<td><?= $this->my_functions->kepm($dd, $e); ?></td>
          	<td><?= $this->my_functions->kepm($dd, $f); ?></td>
          	<td><?= $this->my_functions->kepm($dd, $g); ?></td>
          	<td><?= $this->my_functions->kepm($dd, $h); ?></td>
          	<td><?= $this->my_functions->kepm($dd, $i); ?></td>
          	<td><?= $this->my_functions->kepm($dd, $j); ?></td>
          	<td><?= $this->my_functions->kepm($dd, $k); ?></td>
          	<td><?= $this->my_functions->kepm($dd, $l); ?></td>
          	<td><?= $this->my_functions->kepm($dd, $m); ?></td>
          	<td><?= $this->my_functions->kepm($dd, $n); ?></td>
          </tr>
        </tbody>
      </table>





		</div>
	</div>
</div>