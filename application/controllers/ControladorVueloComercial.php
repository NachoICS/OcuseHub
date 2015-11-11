<?php


class ControladorVueloComercial extends CI_Controller{
	
	
	
	public function consultarVuelosDisponibles(){
		
		$vuelos = new Vuelo_comercial();
		$c_origen = $this->input->post('origen');
		//echo $c_origen;
		$c_destino = $this->input->post('destino');
		//echo $c_destino;
		$cant_pasajeros=$this->input->post('cantidad');
		$fecha=$this->input->post('fecha');
		
		
// 		$aeropuertoOrigen=new aeropuerto();
// 		$aeropuertoDestino=new aeropuerto();
// 		$aeropuertoOrigen->where('ciudad_id',$c_origen)->get(1);
// 		//echo $aeropuertoOrigen->nombre_aeropuerto;
// 		$aeropuertoDestino->where('ciudad_id',$c_destino)->get(1);
		//echo $aeropuertoDestino->nombre_aeropuerto;
		
		//$aeropuertosBuscado=array($aeropuertoOrigen->id, $aeropuertoDestino->id);
// 		echo $aeropuertosBuscado[0];
// 		echo $aeropuertosBuscado[1];

		
		$i=0;
		$rutas=new Ruta();
		foreach ( $rutas->get () as $r ) {
			$recorrido=new ruta_ciudad();
			$recorrido=$r->ruta_ciudad->get();
			//echo 'todos los recorridos'.$recorrido->count() .'toos los recorridos';
			$recorrido=$recorrido->where('ciudad_id =',$c_origen);
			$recorrido->or_where('ciudad_id =',$c_destino)->get();
			//$recorrido=$recorrido->get();
			//echo 'todos los recorridos filtrados'.$recorrido->count() .'toos los recorridos filtrados';
			//echo $recorrido->check_last_query();
			//echo $recorrido->result_count();
	
			if ($recorrido->result_count()==2){
				//echo 'Aerp origen'.$aeropuertoOrigen->id;
				
			$recorrido->where('ciudad_id', $c_origen)->get();
			//$recorrido_origen=$recorrido->id;
			
			$recorrido_origen=new ruta_ciudad();
			$recorrido_origen->get_by_id($recorrido->id);
			
				$recorrido->where('ciudad_id', $c_destino)->get();
				//$recorrido_Destino=$recorrido->id;
			
				$recorrido_Destino=new ruta_ciudad();
				$recorrido_Destino->get_by_id($recorrido->id);
					
		//		echo'-estoy imprimieno esto' .$recorrido_origen;
		//		echo $recorrido_Destino;
				
				
			//	echo $origen->nombre_aeropuerto;
				
				if ($recorrido_origen->orden_punto < $recorrido_Destino->orden_punto){
					$i++;
					$rutasValidas[$i]=$r->id;
				}
			}
			
		}
		
		$vuelosValidos= new Vuelo_comercial();
		$vuelosValidos->where_in('ruta_id',$rutasValidas)->get();
		//echo 'cantidad vuelos validos '. $vuelosValidos->result_count();
		//echo $vuelosValidos;
		
		
		
//		$rutas->where_related('ruta_aeropuerto','aeropuerto_id',$c_origen)->get();
		
		
//		$rutas->id;
		//$rc->where_related('vuelo_comercial', 'cancelacion_id', null)->get();
		
		
		$data= array('vuelosValidos'=>$vuelosValidos,
						'cant_pasajeros'=>$cant_pasajeros
							);
		session_start();
		$_SESSION['cant_pasajeros']=$cant_pasajeros;
		$this->load-> view('templates/Header');
		$this->load->view('vuelo/VuelosDisponibles',$data);
		$this->load-> view('templates/Footer');
	}
		
		
		
		
		
		
	}
	
	
	
