<?php
class ClaseDePlaza extends DataMapper

{
	
	
	var $table='clase_plaza';
	
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
	
	
	
	
	
	
	
	

private $cod_clase;
private $nombre_clase;
private $descripcion_clase;
private $precio_alquiler;
private $capacidad_total;





}