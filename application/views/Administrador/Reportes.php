<?php include 'templates/header.php'?>

<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/jquery/jquery.js"></script>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-info text-center">
				<b>BIENVENIDO AL APARTADO DE REPORTES</b>
			</h1>
				<div class="row">
				<div class="col-md-4">
				</div>
			<div class="row">
				<div class="col-md-4">
				<br>
				
			<p><b>En este apartado podrá consutar:</b></p>
<p>Datos Historicos de pasajeros, reservas y vuelos.</p>
<p>Estado de las reservas y poder generar listados con reservas próximas a vencer.</p>
<p>Estadísticas que reflejen por cada vuelo y tipo de plaza: el grado de ocupación, plazas vendidas.</p>
				
					<br>
						<a class="btn btn-info btn-block" role="button"
							href="<?php echo base_url(); ?>assets/reportePHP">
							<b>DATOS HISTORICOS DE RESERVAS Y PASAJEROS</b>
						</a>
					 
				
					<br>
					
							<a class="btn btn-info btn-block" role="button"
							href="<?php echo base_url(); ?>assets/reportePHP">
							<b>DATOS HISTORICOS DE VUELOS</b>
						</a>
					 
				
					<br>
					
						<a class="btn btn-info btn-block" role="button"
							href="<?php echo base_url(); ?>assets/reportePHP">
							<b>ESTADISTICA DE VUELOS</b>
						</a>
				
					<br>
					<a class="btn btn-info btn-block" role="button"
							href="<?php echo base_url(); ?>assets/reportePHP">
							<b>ESTADO DE RESERVAS</b>
						</a>
				
				
				</div>
				<div class="col-md-4">
			
				</div>
			</div>
		</div>
	</div>
</div>