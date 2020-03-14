<!--
	@autor: Luis Zepeda
	@nota: Generar docuemntacion mediante algun API
	ejemplo:
		https://openapi-generator.tech/docs/installation
-->
<?php
	/**
	 * Bloquear el acceso directo a los archivos del Framework
	 */
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * Clase Home, hereda de CI_Controller, carga la vista principal
	 * home, localizada en views/home.php
	 */
	class Home extends CI_Controller {
		public function index(){
			$this->load->view('home');
		}
	}
?>