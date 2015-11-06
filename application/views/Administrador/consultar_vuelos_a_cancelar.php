<br/>
<div class="row" >
<div class="col-md-8 col-md-offset-2">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Código de vuelo</th>
			<th>Avion</th>
			<th>Ruta</th>
			<th>Fecha de partida:</th>
			<th></th>
		</tr>
	</thead>

<tbody>        
<?php
$vc = new vuelo_comercial();
$vc->get ();
foreach ( $vc as $row ) {
	echo '<tr>';
	echo '<td>' . $row->id . '</td>';
	echo '<td>' . $row->avion->get()->matricula.'</td>';
	echo '<td>' . $row->ruta_id . '</td>';
	echo '<td>' . $row->fecha_partida . '</td>';
	echo '</tr>';
	
	?>
<td><a class="btn btn-info" onclick="javascript:cancelarVuelo('')">Cancelar Vuelo</a></td>
	<?php 
	echo '</tr>';
}

?>


	</tbody>
</table>
</div>
</div>
</div>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

function cancelarVuelo(){
	confirm("Esta seguro que desea cancelar el vuelo ?");
}

</script>