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
				<th>Informacion fecha de cancelación:</th>
			<th></th>
				
				</tr>
			</thead>

			<tbody id="myID">
				<?php
$vc = new vuelo_comercial();
$vc->get ();
foreach ( $vc as $row ) {
	echo '<tr>';
	echo '<td>' . $row->id . '</td>';
	echo '<td>' . $row->avion->get()->matricula.'</td>';
	echo '<td>' . $row->ruta_id . '</td>';
	echo '<td>' . $row->fecha_partida . '</td>';
	echo '<td>' . $row->cancelacion->get()->fecha_cancelacion. '</td>';
	?>
		<td><a class="btn btn-danger" onclick="javascript:pagarReserva('')">Cancelar Vuelo</a></td>
		<?php 
		echo '</tr>';
	}
	
	?>

			</tbody>
		</table>
	</div>
</div>
<?php $this->load->view('form_modal');?>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );


</script>

<!-- <div id="confirmar" class="modal fade" tabindex="-1" role="dialog"> -->
<!-- 	<div class="modal-dialog"> -->
<!-- 		<div class="modal-content"> -->
<!-- 			<div class="modal-header"> -->
<!-- 				<button type="button" class="close" data-dismiss="modal">x</button> -->
<!-- 				<h4>Confirmar Cancelación</h4> -->
<!-- 			</div> -->
<!-- 			<div class="modal-body"> -->
<!-- 				<h3>¿Esta seguro de que desea cancelar la reserva?</h3> -->
<!-- 			</div> -->
<!-- 			<div class="modal-footer"> -->
<!-- 				<button class="btn btn-primary">Confirmar</button> -->
<!-- 				<a href="#" class="btn btn-danger" data-dismiss="modal">Cancelar</a> -->
<!-- 			</div> -->
<!-- 		</div> -->
<!-- 	</div> -->
<!-- </div> -->




// 	$.confirm({
// 	    text: "Are you sure you want to delete that comment?",
// 	    title: nombre,
// 	    confirm: function(button) {
// 	        delete();
// 	    },
// 	    cancel: function(button) {
// 	        // nothing to do
// 	    },
// 	    confirmButton: "Yes I am",
// 	    cancelButton: "No",
// 	    post: true,
// 	    confirmButtonClass: "btn-danger",
// 	    cancelButtonClass: "btn-default",
// 	    dialogClass: "modal-dialog modal-lg" // Bootstrap classes for large modal
// 	});
// }
</script>