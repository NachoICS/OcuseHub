<?php
class Cancelacion extends DataMapper {
	var $table = 'CANCELACION';
	var $has_one = array (
			'reserva_comercial',
			'vuelo_comercial' 
	);
	var $validation = array (
			'id' => array (
					'label' => 'ID',
					'rules' => array () 
			),
			'cod_cancelacion' => array (
					'label' => 'Codigo de cancelacion',
					'rules' => array (
							'unique' 
					) 
			),
			'motivo' => array (
					'label' => 'MOTIVO',
					'rules' => array (
							'required' 
					) 
			),
			'fecha_cancelacion' => array (
					'label' => 'FECHA DE CANCELACION',
					'rules' => array (
							'required' 
					) 
			) 
	);
	function __construct($id = NULL) {
		parent::__construct ( $id );
	}
}