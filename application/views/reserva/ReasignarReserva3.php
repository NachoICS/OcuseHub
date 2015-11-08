<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<br> </br>
			<h3 class="text-info">
	<?php  echo form_open("ControladorReservaComercial/reasignarVuelo", array ('class'=> 'form-horizontal', 'id'=>'formPrincipal' ))?>
		
		<b>Esta seguro de reasignar su reserva al vuelo <?php echo $idvuelo?></b>
			</h3>
			<button type="submit" class="btn btn-info btn-lg">
				<b>Reasignar Reserva</b>
			</button>
			
			<input type="hidden" value=<?php echo $res->id?>
							class="form-control" name="IdReserva" id="IdReserva">
					
			<input type="hidden" value=<?php echo $idvuelo?>
							class="form-control" name="IdVuelo" id="IdVuelo">
			

			
<?php echo form_close();?>
					
</div>
	</div>
</div>

