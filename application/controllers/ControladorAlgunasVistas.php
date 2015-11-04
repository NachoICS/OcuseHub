<?php 
class  ControladorAlgunasVistas extends CI_Controller{

	function QuienesSomos(){
		$this->load->view('templates/Header');
		$this->load->view('AcercaDe/QuienesSomos');
		$this->load->view('templates/Footer');
	}
	
	
	function QueEsOcuse(){
		$this->load-> view('templates/Header');
		$this->load->view('AcercaDe/QueEsOcuse');
		$this->load-> view('templates/Footer');
	}
	
	function Politicas(){
		$this->load-> view('templates/Header');
		$this->load->view('AcercaDe/PoliticasDeLaEmpresa');
		$this->load-> view('templates/Footer');
	}
}