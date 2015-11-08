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
			'motivo' => array (
					'label' => 'MOTIVO',
					'rules' => array (
					) 
			),
			'fecha_cancelacion' => array (
					'label' => 'FECHA DE CANCELACION',
					'rules' => array (
					) 
			) 
	);
	function __construct($id = NULL) {
		parent::__construct ( $id );
	}
}