<?php

class Provincia extends DataMapper{
	
	var $table = 'provincia';
	var $has_many=("ciudad");
	
	var $validation = array(
			'id' => array(
					'label' => 'ID',
					'rules' => array()
			),
			'cod_provincia' => array(
					'label' => 'ID',
					'rules' => array('unique')
			),
				
			
			'nombre_provincia' => array(
					'label' => 'NOMBRE_PROVINCIA',
					'rules' => array('required','unique')
			)
	
);


	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}	
function post_model_init($from_cache=FALSE){}
	
}