<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Controlador_ruta_de_vuelo extends CI_Controller{                                                                                                                                                                                                                                                                                                                                        

	function index() {
		
	}
	function crear_ruta_vuelo(){
		
		$this->load->view('templates/Header');
		$this->load->view('Abm/AltaRutaDeVuelo');
		$this->load->view('templates/Footer');

	}
	
	
function guardar_ruta(){
	$r= new Ruta();
	$r->codigo_ruta=$this->input->post('codigoDeRuta');
	if ($r->save ()) {
		echo '<script type="text/javascript">';
		echo 	'alert("La ruta  ha sido dado de alta");';
		echo '</script>';
	} else {
		echo '<script type="text/javascript">';
		echo 	'alert("La ruta ya existe en el sistema");';
		echo '</script>';
	}
}	
	
	
	
}