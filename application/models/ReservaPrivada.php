<?php

class ReservaPrivada extends DataMapper{
	
	var $table='reserva_privada';
	
	var $has_one= array("cancelacion");
	var $has_one= array("pago");
	var $has_one= array("vuelo_privado");
	
	
	var $validation = array(
			'id' => array(
					'label' => 'ID',
					'rules' => array()
			),
			'cod_reserva' => array(
					'label' => 'CODIGO DE RESERVA PRIVADA',
					'rules' => array('required')
			),
				
				
			'fecha_reserva'=>array(
					'label'=>'FECHA_RESERVA'	,
					'rules'=>array('required')
						
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
			
			),
			'pago_id' => array (
					'label' => 'Id de pago',
					'rules' => array ()
						
			),
			'vuelo_privado_id' => array (
					'label' => 'Id de vuelo privado',
					'rules' => array ()
						
			)
			
			
			
			
			
			);
							
							
							
							
							
							
			
		
		function __construct($id = NULL)
		{
			parent::__construct($id);
		}
	
	
	
}