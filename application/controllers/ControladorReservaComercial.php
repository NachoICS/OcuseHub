<?php

class ControladorReservaComercial extends CI_Controller{

	
public function	solicitarReasignacion($codReserva,$nombre,$Apellido){}


public function reasignarReserva(){
	
	
	
		$this->load-> view('templates/Header');
		$this->load->view('reserva/ReasignarReserva1');
		$this->load-> view('templates/Footer');
	
	
	
}




public function realizarCheckIn(){
	
	$this->load-> view('templates/Header');
	$this->load->view('Administrador/consultar_reservas_check-in');
	$this->load-> view('templates/Footer');
	
}

public function seleccionarPlaza($idPlaza){}


public function realizarReserva($codVuelo,$vecDatosPasajeros){}
	
	
	
}