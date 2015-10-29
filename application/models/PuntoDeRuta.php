<?php


class PuntoDeRuta extends DataMapper{
	
	
	var $table = 'punto_ruta';
	var $has_one = array("aeropuerto");
	var $has_one = array("ruta");
	
	var $validation = array(
			'id' => array(
					'label' => 'ID',
					'rules' => array()
			),
			'observacion' => array(
					'label' => 'OBSERVACION',
					'rules' => array('required')
			),
			'clase_plaza_id' => array (
					'label' => 'Id de clase_plaza',
					'rules' => array (
							'required'
					)
			),
			'modelo_avion_id' => array (
					'label' => 'Id de modelo_avion',
					'rules' => array (
							'required'
					)
			)
	);
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
	
	
	
	private $punto;
	private $tiempo_viaje;
	
	public function getDistanciaRuta($aeropuertoSalida,$aeropertoDestino){
		
	}
	
	
	
	
}