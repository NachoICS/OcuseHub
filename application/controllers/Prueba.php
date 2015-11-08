<?php 

defined('BASEPATH') OR exit ('No direct script acces allowed');

class Prueba extends CI_Controller{

	public function index(){
     $provi = new provincia();

     $provi->nombre_provincia = $this->input->post('Rio Negro');
   if ($c->save ()) {
     	echo "Se guardo";
     } else {
     	echo "No se Guardo";
     }
     
		
	}
}

?>