
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
				<?php  echo form_open("index.php/ControladorVueloComercial/consultarVuelosDisponibles", array ('class'=> 'form-horizontal', 'id'=>'formPrincipal' ))?>
					<div class="form-group">
						<label class="control-label" for="origen">CIUDAD ORIGEN</label> 
						<select id="origen" name="origen" class="selectpicker">
							<?php
								$ciu = new Ciudad ();
								$ciu->order_by ( 'nombre_ciudad' );
								foreach ( $ciu->get () as $row ) {
									echo '<option value="',$row->id,'">' . $row->nombre_ciudad.' ', ' . $row->provincia->get()->nombre_provincia .  </option>';
								}
							?>
						</select>
					</div>
						<div class="form-group">
						<label class="control-label" for="origen">PROVINCIA ORIGEN</label> 
						<select id="origen" name="origen" class="selectpicker">
							<?php
								$pro= new provincia ();
								$pro->order_by ( 'nombre_provincia' );
								foreach ( $pro->get () as $row ) {
									echo '<option value="nombre_provincia">' . $row->nombre_provincia .'</option>';
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
									echo '<option value="nombre_ciudad">' . $row->nombre_ciudad .'</option>';
								}
							?>		
						</select>
					</div>
							<div class="form-group">
						<label class="control-label" for="origen">PROVINCIA DESTINO</label> 
						<select id="origen" name="origen" class="selectpicker">
							<?php
								$pro= new provincia ();
								$pro->order_by ( 'nombre_provincia' );
								foreach ( $pro->get () as $row ) {
									echo '<option value="nombre_provincia">' . $row->nombre_provincia .'</option>';
								}
							?>
						</select>
					</div>

					<p><span class="label label-info">FECHA</span> <input type="date" name="fecha"/></p>
			
					<p><span class="label label-info">CANTIDAD</span>
					<div class="form-group">
					<select id="cantidad" name="cantidad">
						<option value="01">01</option>
						<option>02</option>
						<option>03</option>
						<option>04</option>
						<option>05</option>
						<option>06</option>
						<option>07</option>
						<option>08</option>
						<option>09</option>
					</select>
					</p> 
					</div>
					
					<div class="panel-footer">
						<button type="button" class="btn btn-lg btn-info btn-block">
							<b>CONSULTAR</b>
						</button>
						<?php echo form_close();?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


