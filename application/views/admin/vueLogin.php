<!DOCTYPE html>
<html>
	<head>
		<title>Admin - login</title>

	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		
	</head>

	<body>

		<br /><br /><br />

			<!-- Login & sessions : 2e étape
				 l'étape précédente est dans le controleur nommé login.php
				 maintenant on crée un formulaire
				 l'étape suivante sera de crééer une function verify dans le controleur nommé login-->

		<div class="login col-md-4 mx-auto text-center">
		
		
			<h1>Login</h1>
			<br /><br />
			<?= validation_errors() ?>

			<?= form_open(site_url('admin/login')) ?>

				<?php 
				$dataUsername = array (
					'name'				=> 'username',
					'id'				=> 'username',
					'value'				=> set_value('username'),
					'placeholder'		=> 'Identifiant',
					'class'				=> 'form-control'
					);

				$dataPassword = array (
					'name'				=> 'password',
					'id'				=> 'password',	
					'placeholder'		=> 'Mot de passe',
					'class'				=> 'form-control'
					);
				$dataSubmit = array (
					'name'				=> 'submit',
					'id'				=> 'submit',
					'value'				=> 'Entrer',
					'class'				=> 'btn btn-primary'
					);

				?>
				<div class="form-group">
					<?= form_input($dataUsername) ?>
				</div>
				<br /><br />

				<div class="form-group">
					<?= form_input($dataPassword) ?>
				</div>
				<br /><br />

				<div class="form-group">
					<?= form_submit($dataSubmit) ?>
				</div>

			<?= form_close() ?>

			<?php echo md5('Admin') ?>
		</div>
	</body>
</html>