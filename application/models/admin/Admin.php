<?php

class Admin extends CI_Model{

		function validate(){

			// Login & sessions : 4e étape
			// étape précédente était dans le dossier controllers/admin, fichier login.php


			// le code suivant fonctionne, mais...
			// on va prendre les fonctions de CI
			// (CI fait le trimage contre les injections de code entre autres fonctions de sécurité)
			// $username = $_POST['username'];

			// username: admin et password: Number11 qu'on encrypte au format md5
			$arr['username'] = $this->input->post('username');
			$arr['password'] = md5($this->input->post('password'));

			// s'assurer que la table est créée
			// pour obtenir un code encrypté
			/* <?php echo md5('qqchoseIciAEncrypter') ?> */

			// s'assurer que l'autoload de la base de données est correctement indiqué
			// dans le config/autoload.php sinon faut faire $this->load->librairy('database');

			return $this->db->get_where('users', $arr)->row(); // row pour 1 seule ligne, result pour plusieurs lignes

		}

		function getName($username){

			// Retourne le nom de l'usagé inscrit dans la bd dans la colonne "name"
			$query = $this->db->get_where('users', array('username' => $username));

			$row = $query->row();

			if (isset($row)){  
			    return $row->name;
			}
		}

}