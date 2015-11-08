<?php


class cAdministrador extends CI_Controller{
	
	public function index(){

	}
	
	public function cancelar() {
		$this->load-> view('cancelar_reserva');
	}
	
	public function cancelar_reserva() {
		$this->load-> view('templates/Header');
		$this->load->view('Administrador/consultar_reservas_a_cancelar');
		$this->load-> view('templates/Footer');
	}
	
	public function  vistaReportes(){
		$this->load-> view('templates/Header');
		$this->load->view('administrador/Reportes');
		$this->load-> view('templates/Footer');
	}

	public function  vistaABM(){
		$this->load-> view('templates/Header');
		$this->load->view('administrador/ABM');
		$this->load-> view('templates/Footer');
	}
	
	public function vistaVuelosACAncelar(){
		$this->load->view('templates/Header');
		$this->load->view('Administrador/consultar_vuelos_cancelar');
		$this->load->view('templates/Footer');
		
	}
	
	public function  ingresarPago(){
		$this->load->view('templates/Header');
		$this->load->view('administrador/consultar_reservas_a_pagar');
		$this->load->view('templates/Footer');
	}
	
	
}