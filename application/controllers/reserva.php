

<?php 

defined('BASEPATH') OR exit ('No direct script acces allowed');

class reserva extends CI_Controller{

	public function pagar(){
		
		
      
        $this->load-> view('templates/Header');
		$this->load->view('reserva/PagarReserva');
		$this->load-> view('templates/Footer');


	}
}

?>