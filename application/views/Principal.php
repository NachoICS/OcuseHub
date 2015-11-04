<?php include 'templates/header.php'?>
<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/jquery/jquery.js"></script>


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
					<div class="input-group">
						<label class="control-label" for="origen">ORIGEN</label> 
						<select id="origen" name="origen" class="selectpicker">
							<?php
								$ciu = new Ciudad ();
								$ciu->order_by ( 'nombre_ciudad' );
								foreach ( $ciu->get () as $row ) {
									echo '<option value="nombre_ciudad">' . $row->nombre_ciudad . '</option>';
								}
							?>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label" for="id_destino">DESTINO</label> 
						<select id="destino" name="destino">
							<?php
								$ciu = new Ciudad ();
								$ciu->order_by ( 'nombre_ciudad' );
								foreach ( $ciu->get () as $row ) {
									echo '<option value="nombre_ciudad">' . $row->nombre_ciudad . '</option>';
								}
							?>		
						</select>
					</div>

					<p><span class="label label-info">FECHA</span> <input type="date" name="fecha"/></p>
					<div class="form-group">
						<label class="control-label" for="id_clase_plaza">CLASE DE PLAZA</label>
						<select id="nombre_clase" name="nombre_clase">
			
						<?php
							$cp = new clase_plaza();
					//		$cp->order_by ( 'nombre_clase' );
							foreach ( $cp->get () as $row ) {
								echo '<option value="nombre_clase">' . $row->nombre_clase . '</option>';
							}
						?>
						</select>
					</div>
					<p><span class="label label-info">CANTIDAD</span></p> 
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
					</div>
					<div class="panel-footer">
						<button type="button" class="btn btn-lg btn-info btn-block">
							<b>CONSULTAR</b>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'templates/Footer.php'?>

