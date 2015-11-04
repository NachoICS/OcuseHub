<?php 

defined('BASEPATH') OR exit ('No direct script acces allowed');

class Cprovincia extends CI_Controller{

	public function index(){
		
        $this->load-> view('templates/Header');

        $pr= new Provincia();
        $pr->nombre_provincia="Buenos Aires";
        
        if($pr->save()){
        	echo "Se guardo";
        }
        else{
        	echo "No Se guardo";
        }
        
        
        
		$this->load-> view('templates/Footer');

	}
	

	
	
	
	
	
}

?>