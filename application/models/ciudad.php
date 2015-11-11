<?php
class Ciudad extends DataMapper {
	var $table = 'CIUDAD';
	var $has_one = array (
		'provincia' 
	);
	var $has_many = array (
			'aeropuerto' ,'ruta_ciudad'
	);
	var $validation = array (
			'id' => array (
					'label' => 'ID',
					'rules' => array () 
			),
			'nombre_ciudad' => array (
					'label' => 'NOMBRE_CIUDAD',
					'rules' => array (
							'required' 
					) 
			),
			'provincia_id' => array (
					'label' => 'Id de Provincia',
					'rules' => array (
							'required' 
					) 
			) 
	);
	function __construct($id = NULL) {
		parent::__construct ( $id );
	}
}