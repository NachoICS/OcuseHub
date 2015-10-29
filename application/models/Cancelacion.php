<?php

class Cancelacion extends DataMapper{
	
	var $table='cancelacion';
	
	var $validation = array(
			'id' => array(
					'label' => 'ID',
					'rules' => array()
			),
			'motivo' => array(
					'label' => 'MOTIVO',
					'rules' => array('required')
			),
			'fecha_cancelacion' => array (
					'label' => 'FECHA DE CANCELACION',
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