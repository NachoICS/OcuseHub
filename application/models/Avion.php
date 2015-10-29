<?php

class Avion extends DataMapper{
	
	var $table = 'avion';
	var $has_one=array("modeloAvion");
	
	
	
	var $validation = array(
			'id' => array(
					'label' => 'ID',
					'rules' => array()
			),
			'matricula' => array(
					'label' => 'MATRICULA AVION',
					'rules' => array('required')
			),
				
				
			'fecha_fabricacion'=>array(
					'label'=>'NOMBRE DE AEROPUERTO'	,
					'rules'=>array('required')
						
			),
			'ciudad_id' => array (
					'label' => 'Id de ciudad',
					'rules' => array (
							'required'
					)
			)
	);
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
	
	
	
	
	
	
	
	
	private $matricula;
	private $fecha;
    private $fecha_adquisicion;
	private $observacion;
	private $disponible_privado;
	
	
public function  getCapacidadTotal(){
	
	
	
}	
	
public function  getPlazas(){
	
}
	
}