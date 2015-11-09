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
				$rc->where('cancelacion_id',null)->get();
				foreach ( $rc as $row ) {
					$nombre = $row->nombre_cliente;
					$boton = '<a data-toggle="modal" class="btn btn-danger" href="#ventanaModal" >Cancelar Reserva</a>';
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
<?php $this->load->view('componentes/form_modal');?>
</div>
<input type="button" name="imprimir" value="Imprimir" onclick="window.print();">
<script>
//VARIABLES GLOBALES
var id_reserva;
var nombre;
var apellido;

//FUNCIONES
$(document).ready(function() {
	$('#example').DataTable();

	$('#myID').on('click', '.btn-danger', function(event) {
		event.preventDefault();
		var linea = $(this).parent().parent();
		var idReserva = linea.children(":first");
		id_reserva=idReserva.html();
		console.log(id_reserva + " es la reserva");
		nombre = idReserva.next();
		console.log(nombre.text());
		apellido =nombre.next();
		console.log(apellido.text());	
	});

	$('#ventanaModal').on('show.bs.modal',function(event){
		var modal=$(this);
		modal.find('.modal-footer>#aceptar').text("Aceptar");//Inicializo el nombre al botón
		modal.find('.modal-footer>#cancelar').text("Cancelar");//Inicializo el nombre al botón
		modal.find('.modal-footer>#aceptar').show();
		modal.find('.modal-footer>#cancelar').show();
		modal.find('.modal-title').text("Confirmar cancelación de reserva");
		modal.find('.modal-body').html("<h3>¿Esta seguro de que desea cancelar la reserva de "+nombre.text() +" "+apellido.text()+" ?</h3>");
	});	

	$('#aceptar').on('click',function(event){	
	    	$.post('<?php echo base_url();?>index.php/ControladorReserva/cancelar_reserva/', 
	    			{id_reserva:id_reserva}, 
	    			function(resultado) {
		    			if(resultado=="si"){
		    			var modal=$('#ventanaModal');
		    			modal.find('.modal-title').text("Mensaje de Información");
	    				modal.find('.modal-body').text("La cancelación ha sido exitosa");
		    			modal.find('.modal-footer').show();
		    			modal.find('.modal-footer>#aceptar').hide();
 		    			modal.find('.modal-footer>#cancelar').text("Aceptar");//cambio el nombre al botón aceptar para que al "Aceptar" 
 		    			//se cierre la ventana modal
//  		    			window.location.reload(true);
		    			}
		    			else{
						modal.find('.modal-title').text("Mensaje de Información");
						modal.find('.modal-body').text("Ha ocurrido un error durante la cancelación");
						modal.find('.modal-footer').show();
						modal.find('.modal-footer>#aceptar').hide();
 						modal.find('.modal-footer>#cancelar').text("Aceptar");//cambio el nombre al botón aceptar para que al "Aceptar" 
 						//se cierre la ventana modal
						}
			});	
	});
});


</script>

 

