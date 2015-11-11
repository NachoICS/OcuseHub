<?php

class Ruta extends DataMapper{
	
	var $table ='RUTA';
	
    var $has_many=array('ruta_ciudad');
    
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