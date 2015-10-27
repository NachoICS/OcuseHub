<?php

class ControladorReserva extends CI_Controller{
	
	
	

	public function cancelarReserva(){
	
		$this->load-> view('templates/Header');
		$this->load->view('reserva/CancelarReserva');
		$this->load-> view('templates/Footer');
	
	
	}
	
	
	
	
	
	
}