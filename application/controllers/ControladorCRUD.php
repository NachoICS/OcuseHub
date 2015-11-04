<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ControladorCRUD extends CI_Controller {

	/*private $crud; */

	function __construct()
	{
		parent::__construct();

		/* Standard Libraries of codeigniter are required */
		$this->load->database();
		$this->load->helper('url');
		/* ------------------ */
        $this->load->library('grocery_CRUD');
    /*    $crud= &$this->grocery_crud; */
	}

	public function index()
	{
		$this->load-> view('templates/Header');
		$this->load->view('administrador/ABM');
		$this->load-> view('templates/Footer');
	}

	/*
	public function crudProvincia()
	{
		$this->grocery_crud->set_table('provincia');
		$output = $this->grocery_crud->render();

		$this->_example_output($output);	


	}

		public function crudCiudad()
	{
		$this->grocery_crud->set_table('ciudad');
		$this->grocery_crud->set_relation('provincia_id','provincia','nombre_provincia');
		$this->grocery_crud->display_as('provincia_id','Provincia');
		$output = $this->grocery_crud->render();

		$this->_example_output($output);	

		  
	}

		public function crudReservaComercial()
	{
		$this->grocery_crud->set_table('reserva_comercial');
		$output = $this->grocery_crud->render();
		$this->_example_output($output);	

		  
	}
	*/

		public function crudVueloComercial()
	{
		$this->grocery_crud->set_table('vuelo_comercial');
		$this->grocery_crud->set_relation('avion_id','avion','matricula');
		$this->grocery_crud->set_relation('ruta_id','ruta','codigo_ruta');
		$this->grocery_crud->columns('id','avion_id','ruta_id','fecha_partida', 'cancelacion_id'); 
		$this->grocery_crud->display_as('id','Código de vuelo');
		$this->grocery_crud->display_as('avion_id','Avion asignado');
		$this->grocery_crud->display_as('fecha_partida','Fecha de partida');
		$this->grocery_crud->display_as('ruta_id','Ruta asignada');
		$this->grocery_crud->display_as('cancelacion_id','Código de cancelación');
		$this->grocery_crud->unset_delete();

		if ( $this->grocery_crud->getState() !== 'list') 
		{$this->grocery_crud->field_type('cancelacion_id', 'hidden');}

		$output = $this->grocery_crud->render();

		$this->_crud_output($output);	

		  
	}

		public function crudRuta()
	{
		$this->grocery_crud->set_table('ruta');
		$this->grocery_crud->unset_delete();
		$output = $this->grocery_crud->render();
		$this->_crud_output($output);	

		  
	}

		public function crudPuntoRuta()
	{
		$this->grocery_crud->set_table('punto_ruta');
		$this->grocery_crud->set_relation('ruta_id','ruta','codigo_ruta');
		$this->grocery_crud->set_relation('aeropuerto_id','aeropuerto','nombre_aeropuerto');
		$this->grocery_crud->display_as('ruta_id','Ruta');
		$this->grocery_crud->display_as('orden_punto','Punto de la ruta');
		$this->grocery_crud->display_as('aeropuerto_id','Aeropuerto de parada');
		$this->grocery_crud->display_as('tiempo_estimado','Tiempo de llegada desde punto anterior');
		$output = $this->grocery_crud->render();
		$this->_crud_output($output);	

		  
	}

	function _crud_output($output = null)

	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/crud.php',$output);  
	}
}
