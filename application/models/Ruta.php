<?php

class Ruta extends DataMapper{
	
	var $table ='ruta';
    var $has_many='punto_ruta';

	
	var $validation = array(
			'id' => array(
					'label' => 'ID',
					'rules' => array()
			),
			'codigo_ruta' => array(
					'label' => 'ID',
					'rules' => array('unique','required')
			)
			);
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
	
	
	
	
	
	
	
	
	
	private $cod_ruta;
	public $tiempo_estimado;
	
	
	public function getDistanciaRuta($aeropuertoSalida,$aeropuertoDestino){
		
		
	}
	
	
	
}