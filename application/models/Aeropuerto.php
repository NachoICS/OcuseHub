<?php
class Aeropuerto extends DataMapper {
	var $table = 'aeropuerto';
	var $has_one = array (
			"ciudad" 
	);
	var $has_many = array (
			"aeropuerto_1" => array (
					'class' => 'distancia',
					'join_self_as' => 'aeropuerto 1' 
			),
			"aeropuerto_2" => array (
					'class' => 'distancia',
					'join_self_as' => 'aeropuerto 2' 
			) 
	);
	var $has_many = array (
			"punto_ruta",
			"reserva_comercial" 
	);
	var $validation = array (
			'id' => array (
					'label' => 'ID',
					'rules' => array () 
			),
			'cod_aeropuerto' => array (
					'label' => 'CODIGO AEROPUERTO',
					'rules' => array (
							'required' 
					) 
			),
			
			'fecha_fabricacion' => array (
					'label' => 'NOMBRE DE AEROPUERTO',
					'rules' => array (
							'required' 
					) 
			)
			,
			'fecha_adquisicion' => array (
					'label' => 'Id de ciudad',
					'rules' => array (
							'required' 
					) 
			),
			
			'obresvacion' => array (
					'label' => 'Id de ciudad',
					'rules' => array (
							'required' 
					) 
			),
			'disponible_privado' => array (
					'label' => 'Id de ciudad',
					'rules' => array (
							'required' 
					) 
			),
			'modelo_avion_id' => array (
					'label' => 'Id de modelo avion',
					'rules' => array (
							'required' 
					) 
			) 
	)
	;
	function __construct($id = NULL) {
		parent::__construct ( $id );
	}
}