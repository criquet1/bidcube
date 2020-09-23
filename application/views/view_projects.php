<?php ?>

<div class="container">
	<div class="row">





		<div class="col-sm-1">
		</div>

		<div class="col-sm-6">
			<br /> <br />
			this is projects page <br />

			<?php

			$string = $_SERVER['REQUEST_URI'];

		echo '<pre>';

			print_r($projects_list);

		echo '</pre>';

		echo $_SERVER['REQUEST_URI'];

		$string = $_SERVER['REQUEST_URI'];

		echo '<br />';

		$newstring = substr($string, -10);

		 
		//Print out the last character.
		echo $newstring;

  ?>
		</div>







	</div>
</div>
