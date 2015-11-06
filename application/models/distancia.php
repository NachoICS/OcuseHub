<?php
class distancia extends DataMapper {
	var $table = 'DISTANCIA';
	var $has_one = array (
			'aeropuerto_1' => array (
					'class' => 'aeropuerto',
					'join_other_as' => 'aeropuerto_1' 
			),
			'aeropuerto_2' => array (
					'class' => 'aeropuerto',
					'join_other_as' => 'aeropuerto_2' 
			) 
	);
	var $validation = array (
			'id' => array (
					'label' => 'ID',
					'rules' => array () 
			),
			'aeropuerto_1' => array (
					'label' => 'aeropuerto 1',
					'rules' => array (
							'required' 
					) 
			),
			'aeropuerto_2' => array (
					'label' => 'aeropuerto 2',
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
	function __construct($id = NULL) {
		parent::__construct ( $id );
	}
	
	// private $cod_aeropuerto;
	// private $kilometros;
}