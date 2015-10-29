<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class ControladorCiudad extends CI_Controller {
	
	public function __construct() {
		parent::__construct ();
	}
	
	public function index() {
		$this->load->view ( 'templates/Header' );

		$this->load->model('Ciudad');

		$this->load->view ( 'templates/Footer' );
	}
	
	public function guardarCiudad() {
		$ciudad = new Ciudad();
		$ciudad->nombre_ciudad = $this->input->post('Comodoro');
		
		
		if ($c->save ()) {
			echo "Se guardo";
		} else {
			echo "No se Guardo";
		}
	}
}