<?php

class ControladorReserva extends CI_Controller{
	


	public function cancelarReserva(){
	
 		$this->load-> view('templates/Header');
 		$this->load->view('reserva/CancelarReserva');
 		$this->load-> view('templates/Footer');
	
		
		
	
	}
	

	public function buscarReserva(){
		$codigo=$this->input->post('txtCodigoReserva');
		$nombre=$this->input->post('txtNombrePasajero');
		$apellido=$this->input->post('txtApellidoPasajero');
		$rc = new Reserva_comercial();
		$rc-> where('id', $codigo)->get();
		$rc->where('nombre_cliente',$nombre)->get();
		$rc->where('apellido_cliente',$apellido)->get();
	
// 		return $rc;
		$data= array('rc'=> $rc);
		
		
		$this->load->view('reserva/mostrarPagarReserva',$data);
		
		
	}

/*	public function mostrarPagarReserva(){
		$id = $this->input->post('txtCodigoReserva');
		$this->load->view('includes/Header');
		$data= array('rc'=> $rc);
		if ($id) {
			$data = array (
					'data_pedido' => $this->buscarReserva($id)
			);
		} else {
			$data = array (
					'data_pedido' => array()
			);
		}
	$this->load->view('reserva/mostrarPagarReserva',$data);
		$this->load->view('includes/Footer');
		}
	*/	
		
		
	
	
	/*public function  buscarReserva($codigo,$nombre,$apellido){
		$rc=new Reserva_comercial();
		$rc->where('id', $codigo_reserva,'nombre_cliente',$nombre,'apellido_cliente',$apellido)->get();

		return $rc;
		
	}
	*/

	public function mostrarCancelarReserva1(){
		$codigo=$this->input->post('txtCodigoReserva');
		$rc = new Reserva_comercial();
		$rc-> where('id', $codigo)->get();
		// 		return $rc;
		$data= array('rc'=> $rc);
		
		
		$this->load->view('reserva/mostrarCancelarReserva',$data);
	}

	
	public function crearCancelacion() {
		
		$can= new Cancelacion();
		$motivo=$this->input->post('txtMotivoCancelacion');
		$can->motivo=$motivo;
		
		$idReserva=$this->input->post('id');
		$res= new Reserva_comercial();
		$res->where('id',$idReserva)->get(1);
		
			
		//if ($res->cancelacion_id=null){
		
		if ($can->save($res)){
			echo'<script type="text/javascript">;
		 					alert("Se ha Creado una cancelacion")
		 				</script>';
		
		
			$this->load->view('reserva/CancelarReserva2');
		
		
		}	else{
			echo '<script type="text/javascript">
		 					alert("No se ha Creado una cancelacion")
		 				</scrit>';
			echo "todo mal";
		}
		
		
		
		
		
		/*
		$can= new Cancelacion();
		$can->motivo=$this->input->post('malo');
		
		if ($can->save()){
			echo '<script type="text/javascript">';
			echo 'alert("Creado una cancelacion")';
			echo '</scrit>';
			
		}	else{
			echo '<script type="text/javascript">';
			echo 'alert("No se ha Creado una cancelacion")';
			echo '</scrit>';
			
		}
		
		$this->load->view('CrearCancelacion',$can);
		*/
	}
		
	function cancelar_reserva(){
		$can= new Cancelacion();
		$can->motivo = "Fue cancelado";
		$idReserva = $this->input->post('id_reserva');
		$res= new Reserva_comercial();
		$res->where('id',$idReserva)->get();
		if ($can->save()){
			$res->cancelacion_id = $res->id;
			$res->save();
			echo "si";
		}
		else {
			echo "no";
		}
		
	
	}
}
