<?php
class MetodoDePago extends DataMapper {
	var $table = 'METODO_PAGO';
	var $has_many = array (
			'pago' 
	);
	var $validation = array (
			'id' => array (
					'label' => 'ID',
					'rules' => array () 
			),
			'nombre_metodo' => array (
					'label' => 'NOMBRE_METODO',
					'rules' => array (
							'required' 
					) 
			),
			'descripcion' => array (
					'label' => 'Descripcion',
					'rules' => array (
							'required' 
					) 
			) 
	);
	function __construct($id = NULL) {
		parent::__construct ( $id );
	}
	private $cod_metodo;
	private $nombre_metodo;
	private $descripcion;
}