<?php 

defined('BASEPATH') OR exit ('No direct script acces allowed');

class Prueba extends CI_Controller{

	public function index(){
     $provi = new provincia();
     $provi->reinitialize_model();
		
		
	}
}

?>