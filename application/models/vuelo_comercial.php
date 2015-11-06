<?php
class Vuelo_comercial extends DataMapper {
	var $table = 'VUELO_COMERCIAL';
	var $has_one = array (
			'avion',
			'ruta',
			'cancelacion' 
	);
	var $validation = array (
			'id' => array (
					'label' => 'ID',
					'rules' => array () 
			),
			
			
			'avion_id' => array (
					'label' => 'Id  de avion',
					'rules' => array (
							'required' 
					) 
			)
			,
			'ruta_id' => array (
					'label' => 'Id  de ruta',
					'rules' => array (
							'required' 
					) 
			)
			,
			'fecha_partida' => array (
					'label' => 'fecha_partida',
					'rules' => array (
							'required' 
					) 
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
	
	// public function calcular_precio_vuelo_comercial($subida=Aeropuerto,$bajada=Aeropuerto,$clase=ClaseDePlaza)
	// {
	
	// }
	
	// public function verificarPlazasDisponibles($cantidadPlazas){
	
	// }
	
	// public function modificarDatosVuelo($cod_vuelo,$aeropuerto_destino,$aeropuerto_origen,$fecha){
	
	// }
	
	// public function getPlazasCheckIn($clase){
	
	// }
	
	// public function crearReservaComercial($nombre_cliente,$apellido_cliente,$telefono_cliente,$dni_cliente,$mail_cliente,$direccion,$aeropuerto_destino,$aeropuerto_origen,$fecha){
	
	// }
}

