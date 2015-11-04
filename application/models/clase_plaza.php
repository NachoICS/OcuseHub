<?php
class clase_plaza extends DataMapper

{
	
	var $table='clase_plaza';
	var $has_many=array("plaza");
	
	var $validation = array(
			'id' => array(
					'label' => 'ID',
					'rules' => array()
			),
			'nombre_clase' => array(
					'label' => 'NOMBRE DE CLASE',
					'rules' => array('required')
			),
			'descripcion_clase' => array (
					'label' => 'DESCRIPCION DE CLASE',
					'rules' => array (
							'required'
					)
			)
	);
	
	
	
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
	
	
	
	
	





}