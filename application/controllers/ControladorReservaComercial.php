<?php

class ControladorReservaComercial extends CI_Controller{

	
public function	solicitarReasignacion($codReserva,$nombre,$Apellido){}


public function reasignarReserva(){
	
	
	
		$this->load-> view('templates/Header');
		$this->load->view('reserva/ReasignarReserva1');
		$this->load-> view('templates/Footer');
	
	
	
}




public function realizarCheckIn(){
	
	$this->load-> view('templates/Header');
	$this->load->view('Administrador/consultar_reservas_check-in');
	$this->load-> view('templates/Footer');
	
}



public function existeReserva($rc, $nombre, $apellido) {
	if ($rc->id !== null) { // si existe una reserva con ese id
		if ((($rc->nombre_cliente) == $nombre) and (($rc->apellido_cliente) == $apellido)) {
			return true;
		} else {
			echo '<script type="text/javascript">;
		 			alert("El numero de reserva esta asociada a otro Cliente")
		 			</script>';
			return false;
		}
	} else {
		echo '<script type="text/javascript">;
		 					alert("Nro de reserva incorrecto")
		 				</script>';
		return false;
	}

}



public function mostrarReasignarReserva(){
	$codigo = $this->input->post ( 'txtCodigoReserva' );
	$rc = new Reserva_comercial ();
	$rc->where ( 'id', $codigo )->get ();

	$nombre = $this->input->post ( 'txtNombrePasajero' );
	$apellido = $this->input->post ( 'txtApellidoPasajero' );

	$existeReserva= ControladorReservaComercial::existeReserva($rc, $nombre, $apellido);

	if ($existeReserva){

		$vuelo = new Vuelo_comercial();
		$vuelo->where ( 'id', $rc->vuelo_comercial_id )->get ();

		if ($vuelo->cancelacion_id!==null){
			// 			$aerodestino= new Aeropuerto();
			// 			$aerodestino= where('id',$rc->aeropuerto_llegada)->get();
				
			// 			$aerosalida = new Aeropuerto();
			// 			$aerosalida->where ( 'id', $rc->aeropuerto_partida)->get ();
				
			$posiblesvuelos=new vuelo_comercial();
			$posiblesvuelos-> where('ruta_id', $vuelo->ruta_id)->get();
				
				
			$posiblesvuelos->where('cancelacion_id', null)->get();
				
			$data = array (
					'posiblesvuelos' => $posiblesvuelos,
					'rc'=> $rc
			);
			$this->load-> view('templates/Header');
			$this->load->view ( 'reserva/ReasignarReserva2', $data );
			$this->load-> view('templates/Footer');

		}
		else{
			echo "su vuelo no se ha cancelado";
		}
	}else{
		echo ControladorReservaComercial::reasignarReserva();
	}
}


public function confirmarReasignarReserva(){
	$idvuelo=$this->input->post('IdVuelo');
	//echo $idVuelo;
	$idReserva=$this->input->post('IdReserva');
	$res= new Reserva_comercial();
	$res->where('id',$idReserva)->get(1);


	$data= array('idvuelo'=>$idvuelo,
			'res'=>$res
	);

	if ($res->vuelo_id !== $idvuelo){
		$this->load->view('templates/Header');
		$this->load->view ( 'reserva/ReasignarReserva3' , $data);
		$this->load->view('templates/Footer');
	}
}

public function reasignarVuelo(){
	$idVuelo=$this->input->post('IdVuelo');
	$vuelo= new vuelo_comercial();
	$vuelo->where('id',$idVuelo)->get(1);

	$idReserva=$this->input->post('IdReserva');
	$res= new Reserva_comercial();
	$res->where('id',$idReserva)->get(1);


	$res->vuelo_id=$idVuelo;
	$this->load->view('templates/Header');
	$this->load->view ( 'reserva/ReasignarReserva4' , $idVuelo);
	$this->load->view('templates/Footer');


}

public function  ingresar_datos_cliente(){
	//$this->input->post('destino');
	//$data= array('vuelosValidos'=>$vuelosValidos,
						//'cant_pasajeros'=>$cant_pasajeros
							//);
	$vueloElegido=$this->input->post('IdVuelo');
// 	$cant_pasajeros=$this->session->userdata('cant_pasajeros');
// 	session_start();
	
	$data=array('idVuelo'=>$vueloElegido);
	$this->load->view('templates/Header');
	$this->load->view ( 'reserva/Ingreso_datos_clientes',$data);
	$this->load->view('templates/Footer');
}


public function seleccionarPlaza($idPlaza){}


public function realizarReserva(){
	$cant_pasajeros=$this->input->post('cant_pasajeros');
	session_start();
	
	
	for ($i = 1; $i<=$_SESSION['cant_pasajeros']; $i++) {
	$reserva= new Reserva_comercial();
	$reserva->nombre_cliente=$this->input->post('txtNombre'.$i);
	$reserva->apellido_cliente=$this->input->post('txtApellido'.$i);
	$reserva->email_cliente=$this->input->post('txtCorreo'.$i);
	$reserva->telefono=$this->input->post('txtTelefono'.$i);
	$reserva->dni_cliente=$this->input->post('txtDni'.$i);
	$reserva->telefono=$this->input->post('txtTelefono'.$i);
	$reserva->telefono=$this->input->post('txtTelefono'.$i);
	
	
	
	}
}
	
	
	
}