<?php


class Usuario extends CI_Controller{
	
	function login(){
		
		$this->load-> view('templates/Header');
		$this->load->view('login/Login');
		$this->load-> view('templates/Footer');
		
		
	}
	
	
}