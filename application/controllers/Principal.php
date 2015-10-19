

<?php 

defined('BASEPATH') OR exit ('No direct script acces allowed');

class Principal extends CI_Controller{

	public function index(){
		
		
      
        $this->load-> view('templates/Header');
		$this->load->view('Principal');
		$this->load-> view('templates/Footer');
     


	}
}

?>