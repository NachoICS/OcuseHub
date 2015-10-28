<?php

class ControladorPago extends CI_Controller{
	
	

	public function  comprarReserva(){
	
	
	
	
	
		$this->load-> view('templates/Header');
		$this->load->view('reserva/ComprarReserva');
		$this->load-> view('templates/Footer');
	
	
	
	
	}
	
	
	public function  pagarResereva(){
		
		
		
		
		
			$this->load-> view('templates/Header');
			$this->load->view('reserva/PagarReserva');
			$this->load-> view('templates/Footer');
		
		
		
		
	}
	
	
	
	
	
}