<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
		<br> </br>
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">
					 <h3><b> FUTUROS VUELOS DISPONIBLES:</b></h3>	
					</h3>
				</div>
				
				<?php 
				
				foreach ($posiblesvuelos as $row){
 				echo form_open("ControladorReservaComercial/confirmarReasignarReserva", array ('class'=> 'form-horizontal', 'id'=>'formPrincipal' ))?>
				
			
				<div class="panel-body">
					<h3><b>Vuelo <?php echo $row->id?>, Fecha Salida: <?php echo $row->fecha_partida?></b></h3>
					<div>
					<h3><p><b>Plaza:xxxx , Precio:$xxxxx ,Libres:x</b> </h3>
				
				
					<button type="submit" class="btn btn-info" name="REASIGNAR_RESERVA">
						<b>Reasginar Reserva</b>
					</button>
			 </p>
					</div>
				</div>
					<input type="hidden" value=<?php echo $row->id?>
							class="form-control" name="IdVuelo" id="IdVuelo">
					
					<input type="hidden" value=<?php echo $rc->id?>
							class="form-control" name="IdReserva" id="IdReserva">
					
				
				
				<?php echo form_close();}?>	
				
					
				
			</div> 
		<div class="col-md-6">
			
			<?php form_open("ControladorReservaComercial/reasignarReserva", array ('class'=> 'form-horizontal', 'id'=>'formPrincipal' ))?>
						
				<button type="submit" class="btn btn-info" name="VOLVER">
					<b>Cancelar</b>
				</button>
				<?php echo form_close();?>
		</div>
		</div>
		<div class="col-md-6">
		</div>
	</div>
</div>
