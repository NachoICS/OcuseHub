<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-info">
				<b>REASIGNAR RESERVA</b>
			</h3>
			
				<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
				<div class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title">
								<b>INGRESA LOS SIGUENTE DATOS</b>
							</h3>
						</div>
						<div class="panel-body">
						
						<?php  echo form_open("ControladorReserva/buscarReserva", array ('class'=> 'form-horizontal', 'id'=>'formPrincipal' ))?>
				
						
							<p>
								<div class="form-group">
								<label class="control-label" for= "txtCodigoReserva"><b>C&oacutedigo de tu reserva:</b> 
								</label>
								<input type="text"	class="form-control" name="txtCodigoReserva" id="txtCodigoReserva" required="required">
								</div>							
							</p>
							<p>
								<div class="form-group">
								<label class="control-label" for= "txtNombrePasajero"><b>Nombre del Pasajero:</b> 
								 
								</label>
								<input type="text"	class="form-control" name="txtNombrePasajero" id="txtNombrePasajero" required="required">
								
								</div>							
							</p>
							<p>
								<div class="form-group">
								<label class="control-label" for= "txtNombrePasajero"><b>Apellido del Pasajero:</b> 
								
								</label>
								<input type="text"	class="form-control" name="txtApellidoPasajero" id="txtApellidoPasajero" required="required">
								
								</div>	
							</p>
							<p></p>
							<button type="submit" name="bus" class="btn btn-info btn-default">
								<b>Buscar</b>
							</button>
							
							<?php echo form_close();?>


						</div>

					</div>
				
				
				
				
				
				</div>
				<div class="col-md-4">
				</div>
			</div>

					</div>
			
						
		</div>
	</div>
