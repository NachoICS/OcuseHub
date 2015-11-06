<?php
class ModeloAvion extends DataMapper {
	var $table = 'MODELO_AVION';
	var $has_many = array (
			'plaza' 
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
					'label' => 'descripcion',
					'rules' => array (
							'required' 
					) 
			) 
	);
	function __construct($id = NULL) {
		parent::__construct ( $id );
	}
// 	private $cod_modelo;
// 	private $nombre_modelo;
// 	private $descripcion_modelo;
// 	private $precio_alquiler;
// 	private $capacidad_total;
// 	public function getPrecioAlquiler() {
// 	}
// 	public function getCapacidadTotal() {
// 	}
}