<?php


class Usuario extends CI_Controller{
	
	function login(){
		$this->load->view('login/Login');
		$this->load-> view('templates/Footer');
	}
	
	
}