<?php

class PrecioKilometraje extends DataMapper{
	
	
	
	var $table = 'precio_kilometraje';

	
	var $validation = array(
			'id' => array(
					'label' => 'ID',
					'rules' => array()
			),
			
			'campo_de_integridad' => array(
					'label' => 'CAMPO_DE_INTEGRIDAD',
					'rules' => array('required')
			),
			'precio_km_comercial' => array (
					'label' => 'PRECIO_KM_COMERCIAL',
					'rules' => array (
							'required'
					)
			),
			'precio_km_privado' => array (
					'label' => 'PRECIO_KM_PRIVADO',
					'rules' => array (
							'required'
					)
			)
	);
	
	
	
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
	
	
	
	
	
	
	public static $precio_km_comercial;
	public static $precio_km_privado;
	
	
	
	
}