<?php


class VueloPrivado extends DataMapper{
	
	
	var $table='vuelo_privado';
	
	var $has_one= array("avion");
	var $has_one= array("aeropuerto");
	var $has_one= array("cancelacion");
	
	
	
	var $validation = array(
			'id' => array(
					'label' => 'ID',
					'rules' => array()
			),
			'cod_vuelo_privado' => array(
					'label' => 'CODIGO DE VUELO PRIVADO',
					'rules' => array('required')
			),
	
	
			'avion_id'=>array(
					'label'=>'Id  de avion'	,
					'rules'=>array('required')
	
			),
		
			'fecha_partida'=>array(
					'label'=>'fecha_partida'	,
					'rules'=>array('required')
	
			),
			'aeropuerto_partida'=>array(
					'label'=>'Id  de aeropuerto'	,
					'rules'=>array('required')
			
			),
			'aeropuerto_llegada'=>array(
					'label'=>'Id  de aeropuerto'	,
					'rules'=>array('required')
			
			),
				
			'cancelacion_id' => array (
					'label' => 'Id de cliente',
					'rules' => array ()
	
			)
	
	
	
	
	);
	
	
	
	
	
	
	
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public static function calcular_precio_vuelo_privado($subida=Aeropuerto,$bajada=Aeropuerto,$modelo=ModeloAvion)
	{
	
	}
	

	
	
	public function crearVueloPrivado($id_Avion,$nombre_cliente,$apellido_cliente,$telefono_cliente,$dni_cliente,$ciudad_destino,$ciudad_origen,$fecha){
		
	}
	
	public function crearReservaPrivada($nombre_cliente,$apellido_cliente,$telefono_cliente,$dni_cliente,$aeropuerto_destino,$aeropuerto_origen,$fecha){
		
	}
	

	
}

