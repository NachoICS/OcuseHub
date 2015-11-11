<?php
class ruta_ciudad extends DataMapper {
	var $table = 'RUTA_CIUDAD';
	var $has_one = array (
			'ruta',
			'ciudad',
			'aeropuerto'
	);
	
	var $validation = array (
			'id' => array (
					'label' => 'ID',
					'rules' => array ()
			),
			'ruta_id' => array (
					'label' => 'CODIGO DE RUTA',
					'rules' => array (
							'required'
					)),
			'ciudad_id' => array (
					'label' => 'CODIGO DE CIUDAD',
					'rules' => array (
							'required'
					)),
			
			'orden_punto' => array (
					'label' => 'ORDEN DEL PUNTO',
					'rules' => array (
							'required'
					)),
			'aeropuerto_id' => array (
					'label' => 'CODIGO DE AEROPUERTO',
					'rules' => array (
							'required'
					)),
			'tiempo_estimado' => array (
					'label' => 'TIEMPO ESTIMADO DE LLEGADA DESDE EL PUNTO ANTERIOR',
					'rules' => array (
							'required'
					))
			
	);
					
	function __construct($id = NULL) {
		parent::__construct ( $id );
	}

	
}