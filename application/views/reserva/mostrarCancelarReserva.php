<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/jquery/jquery.js"></script>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-info">
			<b>DATOS DE LA RESERVA:</b>
			</h3>
			<div class="row">
				<div class="col-md-6">
					<dl>
					<br></br>
					
						<?php  echo form_open("ControladorReserva/CrearCancelacion", array ('class'=> 'form-horizontal', 'id'=>'formPrincipal' ))?>
				
						
						<dd>
							<b>C&oacutedigo de reserva: <?php echo $rc->id ?></b>
						</dd>
						
						<dd>
							<b>Apellido y nombre pasajero: <?php echo $rc-> nombre_cliente?></b>
						</dd>
						
						
						
					</dl> 
					<button type="submit"  class="btn btn-info" name="cancelar">
						<b>CANCELAR RESERVA</b>
					</button>
					
					<?php echo form_close();?>
					
				</div>
				<div class="col-md-6">
				</div>
			</div>
		</div>
	</div>
</div>