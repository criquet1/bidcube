<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
	{
		function __construct(){

			parent::__construct();

			if ($this->session->userdata('jules')){

				redirect('project');
			}
		}

		function index()
		{

			$this->load->library('form_validation');
			$config = array(
			        array(
			                'field' => 'username',
			                'label' => 'l\'identifiant',
			                'rules' => 'trim|required',
			                'errors' => array('required' => 'L\'identifiant est requis.')
			        ),
			        array(
			                'field' => 'password',
			                'label' => 'le mot de passe',
			                'rules' => 'trim|required',
			                'errors' => array('required' => 'Le mot de passe est requis.')
			        )
				);

			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() == FALSE){
				$this->load->view('admin/vueLogin');

			} else {
				$this->verify();
			}

			// https://www.youtube.com/watch?v=8tgZHNBp070&list=PLeS3J3RlFi_Y51TJspNd09h8eaYXeMGYS&index=4&t=0s
			// Login & sessions : 1ere étape
			// dans un dossier nommé admin (dans le dossier controllers), créer un controleur nommé login
			// 2e étape sera de créer une vue nommé login... dans un dossier nommé admin dans views
			// au final on aura 2 dossiers nommés admin et 2 fichiers nommés login.php,
			// l'un dans views, l'autre dans controllers
			// $this->load->view('admin/vueLogin');
		}

		function verify()
		{
			// Login & sessions : 3e étape
			// étape précédente était dans le dossier views/admin, fichier login.php
			// dans ce controleur on crée une fonction verify

			// username: admin et password: Number11
			$this->load->model('admin/admin');
			$check = $this->admin->validate();


			// il faut maintenant créer un nouveau model pour communiquer avec la bd
			// le nom de fichier du model s'inspire du nom de la table de la bd
			// donc l'étape suivante est dans model, fichier Admin.php



			// Login & sessions : 5e étape
			// le précédent est dans model, fichier Admin.php
			// reste à réagir selon que le username et le password sont bons
			// si c'est bon :
			if ($check){

				$this->session->set_userdata('jules', '1');
				$name = $this->admin->getName($this->input->post('username'));
  
                // établissement des variables de session utiles à plusieurs rapports

				$this->session->set_userdata(array(
					'name'				=> $name,
					'username'			=> $this->input->post('username')
					));

				redirect('project');

			// si c'est pas bon, on retourne l'usager à la page de login
			} else {

				redirect('admin');
			}


		}
	}
