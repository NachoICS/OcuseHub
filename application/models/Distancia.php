<?php

class Distancia extends DataMapper {
	
	var $table='Distancia';
	var $has_many= array("aeropuerto");
	
	
	var $validation = array(
			'id' => array(
					'label' => 'ID',
					'rules' => array()
			),
			'aeropuerto_destino' => array(
					'label' => 'aeropuerto destino',
					'rules' => array('required')
			),
			'aeropuerto_llegada' => array (
					'label' => 'aeropuerto llegada',
					'rules' => array (
							'required'
					)
			),
			'kilometros' => array (
					'label' => 'kilometros',
					'rules' => array (
							'required'
					)
			)
	);
	
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
	
	private $cod_aeropuerto; 
	private $kilometros;

	
	
	
}