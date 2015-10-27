<?php

class Reserva extends CI_Model{
	
	private $cod_reserva;
	private $fecha_resrva;
	private $precio_reserva;
	public $dni_cliente;
	public $nombre_cliente;
	public $apellido_cliente;
	public $email_cliente;
	public $telefono_cliente;
	public $direccion;

	
	
	public function pagarReserva($metodoDePago){
		
	}
	
	
	public function cancelarReserva($motivo){}
	
	
	public function getReservaPagada(){}
	
	
	public function getReservaCancelada(){}
	
	
	
	
	
	
}