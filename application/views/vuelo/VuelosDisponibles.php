 <br/>
<div class="row">
<div class="col-md-8 col-md-offset-2">
<table id="example" class="table table-striped table-bordered"
		cellspacing="0" width="100%">
		<thead>
		<tr>
		<th>Código de vuelo</th>
		<th>Fecha de partida</th>
		<th>Ruta</th>
		<th>Recorrido</th>
		<th>Plazas disponibles</th>
		<th></th>
		
		</tr>
		</thead>
		<tbody id="myID">
	
	




	
	<?php  
$i=0;
foreach ( $vuelosValidos as $row ) {
$i++;
echo form_open("ControladorReservaComercial/ingresar_datos_cliente", array ('class'=> 'form-horizontal', 'id'=>'formPrincipal' ));
$ruta= new ruta();
$ruta->get_by_id($row->id_ruta);
//$recorrido_origen->get_by_id($recorrido->id);
//	$boton = '<a data-toggle="modal" class="btn btn-danger" href="#ventanaModal" >Cancelar Vuelo</a>';

//	$boton = '<button type="submit" class="btn btn-lg btn-info "> -->
//						<b>SELECCIONAR</b> -->
//					</button>'; -->
	
		echo '<input type="hidden" value="'.$row->id.'" class="form-control" name="IdVuelo" id="IdVuelo">';
									
		

								
	//	<?php 
		
		echo '<tr>';
		echo '<td>' . $row->id . '</td>';
		echo  '<td>' . $row->fecha_partida.'</td>';
		echo '<td>' . $ruta->codigo_ruta. '</td>';
		echo '<td>' . 'recorrido'. '</td>';
		echo '<td>' . 'plazas'. '</td>';

		echo '<td>'.'<button type="submit" class="btn btn-info btn-default">
							<b>SELECCIONAR</b>
						</button>'.'</td>';
		echo '</tr>';
		
		echo form_close();	
	
	
}
//btn btn-lg btn-info 
?>

			</tbody>
		</table>
	</div>
</div>
</script>
