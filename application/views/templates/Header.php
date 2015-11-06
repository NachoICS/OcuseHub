<!DOCTYPE html>
<html lang="sp">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php header ( 'Content-Type: text/html; charset=UTF-8' ); ?>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js"></script>
</head>

<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

			<ul class="nav nav-pills nav-justified">
				<li class="dropdown active"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown"> Clientes <b class="caret"></b>
				</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url(); ?>index.php/ControladorPago/comprarReserva">Pagar reserva</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/ControladorReservaComercial/ReasignarReserva">Reasignar
								reserva</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/ControladorReserva/cancelarReserva">Cancelar reserva</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/Sis">Vuelos Privados</a></li>
					</ul>
				</li>

				<li class="dropdown active"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown"> Administrativos <b class="caret"></b>
				</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url(); ?>index.php/cAdministrador/vistaReportes">Reportes.</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/ControladorCRUD">Altas bajas y modificaciones</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/ControladorReservaComercial/realizarCheckIn">Realizar
								check-in</a></li>
									<li><a href="<?php echo base_url(); ?>index.php/cAdministrador/vistaVuelosACAncelar">Cancelar vuelo</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/cAdministrador">Cancelar reserva</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/cAdministrador/vistaABM">Reprogramar vuelo</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/cAdministrador/ingresarPago">Ingresar pago</a></li>
				
					</ul>
				</li>

				<li class="dropdown active"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown"> Acerca de <b class="caret"></b>
				</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url(); ?>index.php/ControladorAlgunasVistas/QuienesSomos">Quiénes somos</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/ControladorAlgunasVistas/QueEsOcuse">Qué es Ocuse</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/ControladorAlgunasVistas/Politicas">Politicas de la
								empresa</a></li>
					</ul>
				</li>


				<li class="dropdown active"><a href="<?php echo base_url(); ?>index.php/Usuario/login"> Login </a></li>


				<li class="dropdown active"><a href="<?php echo base_url(); ?>index.php/Principal"> Principal </a></li>
			</ul>
		</div>
	</div>

