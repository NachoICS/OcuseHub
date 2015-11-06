<?php
class Clase_plaza extends DataMapper 

{
	var $table = 'CLASE_PLAZA';
	var $has_many = array (
			"plaza" 
	);
	var $validation = array (
			'id' => array (
					'label' => 'ID',
					'rules' => array () 
			),
			'nombre_clase' => array (
					'label' => 'NOMBRE DE CLASE',
					'rules' => array (
							'required' 
					) 
			),
			'descripcion_clase' => array (
					'label' => 'DESCRIPCION DE CLASE',
					'rules' => array (
							'required' 
					) 
			) 
	);
	function __construct($id = NULL) {
		parent::__construct ( $id );
	}
	function post_model_init($from_cache = FALSE) {
	}
}