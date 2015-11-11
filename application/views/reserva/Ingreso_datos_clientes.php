<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
		<?php 
		session_start();
// 	echo 'La canidad de pasajeros son'.$_SESSION['cant_pasajeros'];
// 	echo 'es el vuelo nro'.$idVuelo;
		?>
					<button type="button" class="btn btn-info btn-lg active ">
						<b>VOLVER ATR&AacuteS.</b>
					</button>
					<br></br>
				
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title">
								<b> COMPLET&Aacute LOS DATOS DE TU RESERVA</b>
							</h3>
						</div>
						
						
						<?php 
						
						//echo $cant_pasajeros;
						$i=1;
						echo form_open("ControladorReservaComercial/realizarReserva", array ('class'=> 'form-horizontal', 'id'=>'formPrincipal' ));
						?>
			
						<input type="hidden" value=<?php echo $_SESSION['cant_pasajeros']?>
													class="form-control" name="cant_pasajeros" id="cant_pasajeros">
											
						<?php 
						while ( $i<= $_SESSION['cant_pasajeros']) {
						?>

						
						<p>
						<div class="form-group">
						<div class="panel-body">
						
						
						<b><h3>PASAJERO N°: <?php echo ''.$i;?></h3></b> 
						
						</br>		
								
						<label class="control-label" for= "txtNombre<?php echo$i;?>" required=”required”><b>Nombre : </b> 
								</label>
						<input type="text"class="form-control" name="txtNombre<?php echo$i;?>" id="txtNombre<?php echo$i;?>" required="required"/>
						
						<label class="control-label" for= "txtApellido<?php echo$i;?>" required=”required”><b>Apellido : </b> 
								</label>
						<input type="text"class="form-control" name="txtApellido<?php echo$i;?>" id="txtApellido<?php echo$i;?>" required="required"/>
						
						<label class="control-label" for= "txtCorreo<?php echo$i;?>" required=”required”><b>Correo Electronico:</b> 
								</label>
						<input type="text"class="form-control" name="txtCorreo<?php echo$i;?>" id="txtCorreo<?php echo$i;?>" required="required"/>
									
						<label class="control-label" for= "txtTelefono<?php echo$i;?>" required=”required”><b>Telefono:</b> 
								</label>
						<input type="text"class="form-control" name="txtTelefono<?php echo$i;?>" id="txtTelefono<?php echo$i;?>" required="required"/>
						
						<label class="control-label" for= "txtDni<?php echo$i;?>" required=”required”><b>Dni:</b> 
								</label>
						<input type="text"class="form-control" name="txtDni<?php echo$i;?>" id="txtDni<?php echo$i;?>" required="required"/>
						
						<label class="control-label" for= "txtDireccion<?php echo$i;?>" required=”required”><b>Direccion:</b> 
								</label>
						<input type="text"class="form-control" name="txtDireccion<?php echo$i;?>" id="txtDireccion<?php echo$i;?>" required="required"/>
						</br>
						
						<hr>
						</div>
						</div>							
						</p>
						
						<?php 
						$i++;
						}
						?>
						<button type="submit" class="btn btn-info btn-lg active btn-block">
						<b>RESERVAR</b>
						<?php 
						echo form_close();?>
						
<!-- 						<div class="panel-footer"> -->
<!-- 							<p><b>Nombre del pasajero: <input type="text" name="nombrePasajero"> </b>  </p> -->
<!-- 						<p><b>Apellido del pasajero:</b>  <input type="text" name="nombrePasajero"> </p> -->
<!-- 						<p><b>Correo electr&oacutenico del pasajero: </b><input type="text" name="nombrePasajero"></p> -->
<!-- 						<p><b>Tel&eacutefono:</b>   <input type="text" name="nombrePasajero"></p> -->
<!-- 						<p><b>DNI:</b>   <input type="text" name="nombrePasajero"></p> -->
<!-- 						<p><b> Direcci&oacuten:</b>  <input type="text" name="nombrePasajero"> </p> -->
				
<!-- 						</div> -->
<!-- 							<div class="panel-body"> -->
<!-- 						<p><b>Nombre del pasajero: <input type="text" name="nombrePasajero"> </b>  </p> -->
<!-- 						<p><b>Apellido del pasajero:</b>  <input type="text" name="nombrePasajero"> </p> -->
<!-- 						<p><b>Correo electr&oacutenico del pasajero: </b><input type="text" name="nombrePasajero"></p> -->
<!-- 						<p><b>Tel&eacutefono: </b>   <input type="text" name="nombrePasajero"></p> -->
<!-- 						<p><b>DNI:</b>   <input type="text" name="nombrePasajero"></p> -->
<!-- 						<p><b> Direcci&oacuten:</b>  <input type="text" name="nombrePasajero"> </p> -->
				
<!-- 						</div> -->
					</div> 
					
					</button> 
					
					
					
				
				</div>
				<div class="col-md-6">
				
				</div>
			</div>
		</div>
	</div>
</div>