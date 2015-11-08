<?php

class ControladorVuelo extends CI_Controller {
	function cancelar_vuelo() {
 		$cancelacion = new Cancelacion();
 		$cancelacion->motivo = "Fue cancelado";
		//$motivo->$this->input->post('motivo');
 		$idVuelo = $this->input->post('id_vuelo');
		
		if ($cancelacion->save()){
			$vuelo_comercial = new Vuelo_comercial();
			$vuelo_comercial->where('id', $idVuelo);
			$vuelo_comercial->update('cancelacion_id', $cancelacion->id);
			echo "si";
		}
		else {
			echo "no";
		}
	}
	
	public function cancelar() {
		$this->load-> view('Administrador/cancelar_vuelo');
	}
	
	
	
}
