
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<h3 class="text-info">
<b>SE HA REASIGNADO UN VUELO A TU RESERVA</b>
</h3>
<br> </br>
<p>
<b>Tu reserva ha sido reasignada a un vuelo.</b>
</p>
<p>

<br> </br>
	
			<?php  echo form_open("ControladorReservaComercial/reasignarReserva", array ('class'=> 'form-horizontal', 'id'=>'formPrincipal' ))?>
				
						
					<p>	<button type="submit" class="btn btn-info" name="VOLVER">
					<b>VOLVER</b> </button>
					<button type="submit" class="btn btn-info" name="VOLVER" onclick="window.print();">
					<b>IMPRIMIR</b> </button>
		
				<input type="button"  class="btn btn-info"name="imprimir" value="IMPRIMIR" onclick="window.print();">
 						</p>
						
						<?php echo form_close();?>
		
		
		
		</div>
	</div>
</div>