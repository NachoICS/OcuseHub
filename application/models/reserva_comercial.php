<?php
class Reserva_comercial extends DataMapper {
	var $table = 'RESERVA_COMERCIAL';
	var $has_one = array (
			'vuelo_comercial',
			'clase_plaza',
			'plaza',
			'pago',
			'aeropuerto',
			'cancelacion' 
	);
	var $validation = array (
			'id' => array (
					'label' => 'ID',
					'rules' => array () 
			),
			
			
			'vuelo_comercial_id' => array (
					'label' => 'Id  de vuelo comercial',
					'rules' => array (
							'required' 
					) 
			)
			,
			'clase_plaza_id' => array (
					'label' => 'Id  de clase de plaza',
					'rules' => array (
							'required' 
					) 
			)
			,
			'fecha_reserva' => array (
					'label' => 'fecha_reserva',
					'rules' => array (
							'required' 
					) 
			)
			,
			'plaza_id' => array (
					'label' => 'Id de plaza',
					'rules' => array (
							'required' 
					) 
			)
			,
			'pago_id' => array (
					'label' => 'Id de pago',
					'rules' => array () 
			)
			,
			'aeropuerto_destino' => array (
					'label' => 'Id de aeropuerto',
					'rules' => array () 
			)
			,
			'aeropuerto_llegada' => array (
					'label' => 'Id de aeropuerto',
					'rules' => array () 
			)
			,
			
			'dni_cliente' => array (
					'label' => 'dni_cliente',
					'rules' => array () 
			)
			,
			'nombre_cliente' => array (
					'label' => 'nombre_cliente',
					'rules' => array (
							'required',
							'unique' 
					) 
			)
			,
			'apellido_cliente' => array (
					'label' => 'apellido_cliente',
					'rules' => array (
							'required',
							'unique' 
					) 
			)
			,
			'email_cliente' => array (
					'label' => 'email_cliente',
					'rules' => array () 
			)
			,
			'cancelacion_id' => array (
					'label' => 'Id de cliente',
					'rules' => array () 
			)
			 
	)
	;
	function __construct($id = NULL) {
		parent::__construct ( $id );
	}
// 	public function getRealizoCheckIn() {
// 	}
// 	public function asignarPlaza($cod_plaza, $cod_modelo) {
// 	}
// 	public function asignarReserva($cod_vuelo) {
// 	}
}