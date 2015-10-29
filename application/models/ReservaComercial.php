<?php


class ReservaComercial extends DataMapper{
	
	
	
	var $table='reserva_comercial';
	
	var $has_one= array("vuelo_comercial");
	
	var $has_one= array("clase_plaza");
	var $has_one= array("plaza");
	var $has_one= array("pago");
	var $has_one= array("aeropuerto");
	var $has_one= array("cancelacion");
	
	
	var $validation = array(
			'id' => array(
					'label' => 'ID',
					'rules' => array()
			),
			'cod_reserva' => array(
					'label' => 'CODIGO DE RESERVA COMERCIAL',
					'rules' => array('required')
			),
	
	
			'vuelo_comercial_id'=>array(
					'label'=>'Id  de vuelo comercial'	,
					'rules'=>array('required')
	
			),
			'clase_plaza_id'=>array(
					'label'=>'Id  de clase de plaza'	,
					'rules'=>array('required')
			
			),
			'fecha_reserva'=>array(
					'label'=>'fecha_reserva'	,
					'rules'=>array('required')
						
			),
			'plaza_id'=>array(
					'label'=>'Id de plaza'	,
					'rules'=>array('required')
			
			),
			'pago_id' => array (
					'label' => 'Id de pago',
					'rules' => array ()
			
			),
			'aeropuerto_destino' => array (
					'label' => 'Id de aeropuerto',
					'rules' => array ()
						
			),
			'aeropuerto_llegada' => array (
					'label' => 'Id de aeropuerto',
					'rules' => array ()
						
			),
		
			'dni_cliente' => array (
					'label' => 'dni_cliente',
					'rules' => array ()
						
			),
			'nombre_cliente' => array (
					'label' => 'nombre_cliente',
					'rules' => array ()
	
			),
			'apellido_cliente' => array (
					'label' => 'apellido_cliente',
					'rules' => array ()
	
			),
			'email_cliente' => array (
					'label' => 'email_cliente',
					'rules' => array ()
						
			),
			'cancelacion_id' => array (
					'label' => 'Id de cliente',
					'rules' => array ()
						
			)
				
				
				
				
	);
		
		
		
		
		
		
		
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function getRealizoCheckIn(){
		
		
	}
	
	public function asignarPlaza($cod_plaza,$cod_modelo){
		
	}
	
	public function asignarReserva($cod_vuelo){
		
	}
	

	
	
	
}