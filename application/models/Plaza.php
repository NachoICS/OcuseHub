<?php


class Plaza extends DataMapper{
	
	var $table = 'plaza';
	var $has_one = array("clase_plaza");
	var $has_one = array("modelo_avion");
	
	var $validation = array(
			'id' => array(
					'label' => 'ID',
					'rules' => array()
			),
			'codigo_plaza' => array(
					'label' => 'codigo de plaza',
					'rules' => array()
			),
			'observacion' => array(
					'label' => 'OBSERVACION',
					'rules' => array('required')
			),
			'clase_plaza_id' => array (
					'label' => 'Id de clase_plaza',
					'rules' => array (
							'required'
					)
			),
			'modelo_avion_id' => array (
					'label' => 'Id de modelo_avion',
					'rules' => array (
							'required'
					)
			)
	);
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
	
	
	
	
	
	
	
	
	
	
	private $cod_plaza;
	private $observacion;
	
	
}