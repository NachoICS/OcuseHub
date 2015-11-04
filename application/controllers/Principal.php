<?php 
defined('BASEPATH') or exit ('No direct script acces allowed');

class Principal extends CI_Controller{
	
	public function _construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('Principal');
	}
}

