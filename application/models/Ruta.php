<?php

class Ruta extends DataMapper{
	
	var $table = 'ruta';

	
	var $validation = array(
			'id' => array(
					'label' => 'ID',
					'rules' => array()
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