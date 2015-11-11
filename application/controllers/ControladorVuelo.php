<?php

class ControladorVuelo extends CI_Controller {
	function cancelar_vuelo() {
 		$cancelacion = new Cancelacion();
 		$motivo = $this->input->post('motivo');
 		$this->load->helper('date');
 		$fechaHoraActual=date("Y-m-d H:i:s");
 		//$fechaHoraActual=time();
  		$idVuelo = $this->input->post('id_vuelo');
		$cancelacion->motivo = $motivo;
		$cancelacion->fecha_cancelacion=$fechaHoraActual;
		$vuelo_comercial = new Vuelo_comercial();
  		if ($cancelacion->save()) {
 			$vuelo_comercial->where('id', $idVuelo);
 			$vuelo_comercial->update('cancelacion_id', $cancelacion->id);
 			echo "si";
 		}
	 	else {
	 		$vuelo = $vuelo_comercial->where('id', $idVuelo)->get();
			echo $vuelo->fecha_partida;
	 		echo $vuelo->cancelacion_id;
	 	}
	}
	
	public function cancelar() {
		$this->load-> view('Administrador/cancelar_vuelo');
	}	
	
}
