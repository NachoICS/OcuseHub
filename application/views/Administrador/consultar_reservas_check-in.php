<br/>
<div class="row" >
<div class="col-md-8 col-md-offset-2">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Código de Reserva</th>
			<th>Nombre Cliente</th>
			<th>Apellido Cliente</th>
			<th></th>
		</tr>
	</thead>

<tbody>        
<?php
$rc = new reserva_comercial();
$pago = new Pago();
$rc->where('cancelacion_id', null);
$rc->where('pago_id >', 0);

$rc->where_related('vuelo_comercial', 'cancelacion_id', null)->get();



foreach ( $rc as $row ) {
	$nombre=$row->nombre_cliente;
	echo '<tr>';
	echo '<td>' . $row->id . '</td>';
	echo '<td>' . $row->nombre_cliente . '</td>';
	echo '<td>' . $row->apellido_cliente . '</td>';
	?>
	<td><a class="btn btn-info" onclick="javascript:pagarReserva('<?=$nombre ?>')">Realzar Check-in</a></td>
	<?php 
	echo '</tr>';
}

?>


	</tbody>
</table>
</div>
</div>


<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

function pagarReserva(nombre){
	confirm("Esta seguro que desea realizar el check-in de la reserva de "+ nombre +"?");
}

</script>