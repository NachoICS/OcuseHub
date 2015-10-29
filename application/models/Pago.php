<?php

class Pago extends DataMapper{
	
	var $table = 'pago';
	var $has_one = array("metodo_pago");
	
	var $validation = array(
			'id' => array(
					'label' => 'ID',
					'rules' => array()
			),
			'fecha_pago' => array(
					'label' => 'FECHA_PAGO',
					'rules' => array('required')
			),
			'metodo_pago_id' => array (
					'label' => 'Id de metodo_pago',
					'rules' => array (
							'required'
					)
			)
	);
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
	
	
	private $cod_pago;
	private $fecha_pago;
	public $monto_total;
	public  $nombre_cliente;
	public  $apellido_cliente;
	public  $direccion;
	public  $telefono_cliente;
	public  $mail_cliente;
	public  $dni_cliente;
	
	
	
	public function crearPago($codReserva,$nombre_cliente,$apellido_cliente,$direccion,$telefono_cliente,$mail_cliente,$dni_cliente){
		
		
		
	}
	
}