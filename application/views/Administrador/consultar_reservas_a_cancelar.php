<br/>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<table id="example" class="table table-striped table-bordered"
			cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Código de Reserva</th>
					<th>Nombre Cliente</th>
					<th>Apellido Cliente</th>
					<th></th>
				</tr>
			</thead>

			<tbody id="myID">
				<?php
				$rc = new reserva_comercial ();
				$rc->get ();
				foreach ( $rc as $row ) {
					$nombre = $row->nombre_cliente;
					$boton = '<a data-toggle="modal" class="btn btn-danger" href="#ventanaModal" onclick="javascript:cancelarReserva();" >Cancelar Reserva</a>';
					echo '<tr>';
					echo '<td>' . $row->id . '</td>';
					echo '<td>' . $row->nombre_cliente . '</td>';
					echo '<td>' . $row->apellido_cliente . '</td>';
					echo '<td>' . $boton . '</td>';
					echo '</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
</div>
<?php $this->load->view('form_modal');?>

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

</div>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

 function cancelarReserva(){
	$('#myID').on('click', '.btn-danger', function(event) {
		event.preventDefault();
		var linea = $(this).parent().parent();
		var id = linea.children(":first");
		console.log(id.text());
		var nombre = id.next();
		console.log(nombre.text());
		var apellido =nombre.next();
		console.log(apellido.text());
		$('#ventanaModal').on('show.bs.modal',function(event){
			var modal=$(this);
			modal.find('.modal-title').text("Motivo de la cancelación");
 			modal.find('.modal-body').load('http://localhost/OcuseHub/index.php/Principal/cancelar');
			})
	});
 }

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