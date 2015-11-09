<br/>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<table id="example" class="table table-striped table-bordered"
			cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Código de vuelo</th>
					<th>Avion</th>
					<th>Ruta</th>
					<th>Fecha de partida:</th>
					<th></th>
				</tr>
			</thead>

			<tbody id="myID">
				<?php
				$vc = new Vuelo_comercial();
				$vc->get ();
				$vc->where('cancelacion_id',null)->get();
				foreach ( $vc as $row ) {
					$codigo_vuelo_comercial = $row->id;
					$boton = '<a data-toggle="modal" class="btn btn-danger" href="#ventanaModal" >Cancelar Vuelo</a>';
					echo '<tr>';
					echo '<td>' . $row->id . '</td>';
					echo  '<td>' . $row->avion->get()->matricula.'</td>';
					echo '<td>' . $row->ruta_id . '</td>';
					echo '<td>' . $row->fecha_partida . '</td>';
					
				
					echo '<td>' . $boton . '</td>';
					echo '</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
</div>
<?php $this->load->view('componentes/form_modal');?>
</div>
<input type="button" name="imprimir" value="Imprimir" onclick="window.print();">
<script>
//VARIABLES GLOBALES
var id_vuelo;


//FUNCIONES
$(document).ready(function() {
	$('#example').DataTable();

	$('#myID').on('click', '.btn-danger', function(event) {
		event.preventDefault();
		// padre del botón: td
		// padre del td: tr
		var linea = $(this).parent().parent();
		id_vuelo = linea.children(":first").html();
		console.log(id_vuelo + " es el vuelo");
	});

	$('#ventanaModal').on('show.bs.modal',function(event){
		var modal = $(this);
		modal.find('.modal-footer>#aceptar').text("Aceptar");//Inicializo el nombre al botón
		modal.find('.modal-footer>#cancelar').text("Cancelar");//Inicializo el nombre al botón
		modal.find('.modal-footer').hide();
		modal.find('.modal-title').text("Motivo de la cancelación");
		modal.find('.modal-body').load('http://localhost/OcuseHub/index.php/ControladorVuelo/cancelar');
	});	
	
});


</script>

 

