<!--
	@empresa: MiniSAP
	@proyecto: MiniSAP
	@autores: {
		luis: "Luis Zepeda (zepedagonzalezluis@gmail.com)",
	}
    @nombre_archivo: Home.php
    @fecha_creacion: 15-03-2020
    @descripcion: Controlador de la vista home.php y componente Vendedor.vue
    @metodos: 1
	@relacion_archivos: {
		nombre.ext, nombre.ext
	}
    Modificaciones: {
		dd/mm/aaaa: Descripción.
	}
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