<?php


class cAdministrador extends CI_Controller{

	

	public function  vistaReportes(){



		//$this->load-> view('templates/header');
		$this->load->view('administrador/Reportes');
		$this->load-> view('templates/Footer');


	}
	

	public function  vistaABM(){
	
	
	
		//$this->load-> view('templates/header');
		$this->load->view('administrador/ABM');
		$this->load-> view('templates/Footer');
	
	
	
	
	
	}
}