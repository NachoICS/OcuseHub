<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class cAltaVueloComercial extends CI_Controller {
	
	public function __construct() {
		parent::__construct ();
	}
	public function crearCliente() {
		$this->load->view ( 'includes/Header' );
		$this->load->view ( 'Botones' );
		$this->load->view ( 'VueloComercial' );
		$this->load->view ( 'includes/Footer' );
	}
	
	public function guardarVueloComercial() {
		$vc = new VueloComercial();
		$vc->cod_vuelo_comercial = $this->input->post ( 'numVueloComercial' );
		$vc->nombre = $this->input->post ( 'txtNombreCliente' );
		$c->apellido = $this->input->post ( 'txtApellidoCliente' );
		$c->email = $this->input->post ( 'txtEmailCliente' );
		$c->direccion = $this->input->post ( 'txtDireccionCliente' );
		$c->telefono = $this->input->post ( 'txtTelefonoCliente' );
		$c->clave_de_acceso = "1234";
		if ($c->save ()) {
			echo '<script type="text/javascript">';
			echo 	'alert("El vuelo comercial ha sido dado de alta");';
			echo '</script>';
		} else {
			echo '<script type="text/javascript">';
			echo 	'alert("El vuelo ya existe en el sistema");';
			echo '</script>';
	
		}
	}
	
	
	
}