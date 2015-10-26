<script src="../assets/jquery/jquery.js"></script>
<link href="../assets/css/bootstrap.min.css" rel="stylesheet"> 
<script src="../assets/js/bootstrap.min.js"></script>

<?php 

defined('BASEPATH') OR exit ('No direct script acces allowed');

class reserva extends CI_Controller{


	public function pagar(){
	
	
	
		$this->load-> view('templates/Header');
		$this->load->view('reserva/PagarReserva');
		$this->load-> view('templates/Footer');
	
	
	}
	
	public function comprar(){
	
		$this->load-> view('templates/Header');
		$this->load->view('reserva/ComprarReserva');
		$this->load-> view('templates/Footer');
	
	
	}
	
	
	
}

?>