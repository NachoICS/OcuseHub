
<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
</script>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12"></div>
	</div>
	<h3 class="text-center text-primary">
		<b>Sistema gestor de ventas de pasajes aereos OCUSÉ.</b>
	</h3>
	<br></br>

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title text-center text-primary">
						<b>VUELOS</b>
					</h3>
				</div>
				<div class="panel-body">
				<?php  echo form_open("ControladorVueloComercial/consultarVuelosDisponibles", array ('class'=> 'form-horizontal', 'id'=>'formPrincipal' ))?>
					<div class="form-group">
						<label class="control-label" for="origen">CIUDAD ORIGEN</label> 
						<select id="origen" name="origen" class="selectpicker">
						<?php
							$ciu = new Ciudad ();
								$ciu->order_by ( 'nombre_ciudad' );
								foreach ( $ciu->get () as $row ) {
 								$provincia= new provincia();
 								$provincia->where('id',$row->provincia_id)->get();
 									echo '<option value="',$row->id,'">' . $row->nombre_ciudad.', '.$provincia->nombre_provincia.'</option>';
									
									//echo '<option value="nombre_ciudad">' .$row->provincia->nombre_provincia.'</option>';
				//					$row->provincia->nombre_provincia;
				//					$row->check_last_query();
				//					echo $ciu->check_last_query();
									//echo '<option value="nombre_ciudad">' . $row->nombre_ciudad.','.$row->provincia->nombre_provincia.'</option>';
								}
							?>		
						</select>
					</div>
						
					<div class="form-group">
						<label class="control-label" for="id_destino">CIUDAD DESTINO</label> 
						<select id="destino" name="destino">
							<?php
							$ciu = new Ciudad ();
								$ciu->order_by ( 'nombre_ciudad' );
								foreach ( $ciu->get () as $row ) {
									$provincia= new provincia();
									$provincia->where('id',$row->provincia_id)->get();
									echo '<option value="',$row->id,'">' . $row->nombre_ciudad.', '.$provincia->nombre_provincia.'</option>';
									
									
									
									//echo '<option value="nombre_ciudad">' . $row->nombre_ciudad .'</option>';
								}
							?>		
						</select>
					</div>
						

					<p><span class="label label-info">FECHA</span> <input type="date" name="fecha"  id="fecha"/></p>
			
					<p><span class="label label-info">CANTIDAD</span>
					<div class="form-group">
					<select id="cantidad" name="cantidad">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
					</select>
					</p> 
					</div>
					
					<div class="panel-footer">
						<button type="submit" class="btn btn-lg btn-info btn-block">
							<b>CONSULTAR</b>
						</button>
						<?php echo form_close();?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>









