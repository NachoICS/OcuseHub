<?php
class Provincia extends DataMapper {
	var $table = 'PROVINCIA';
	var $has_many = array('ciudad');
	var $validation = array (
			'id' => array (
					'label' => 'ID',
					'rules' => array () 
			),
			'nombre_provincia' => array (
					'label' => 'NOMBRE_PROVINCIA',
					'rules' => array (
							'required',
							'unique' 
					) 
			) 
	);
	function __construct($id = NULL) {
		parent::__construct ( $id );
	}
	function post_model_init($from_cache = FALSE) {
	}
}