

<?php 

defined('BASEPATH') OR exit ('No direct script acces allowed');

class Sis extends CI_Controller{

	public function index(){
		
		
      
        $this->load-> view('templates/Header');
		$this->load->view('vuelo/VuelosPrivados');
		$this->load-> view('templates/Footer');
     


	}
}

?>