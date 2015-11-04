<?php include 'templates/header.php'?>
<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/jquery/jquery.js"></script>




<div class="container-fluid">
	<div class="row">
		<div class="col-md-12"></div>
	</div>
	<h3 class="text-center text-primary">
		<b>Sistema gestor de ventas de pasajes aereos OCUS&Eacute.</b>
	</h3>
	<br></br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title text-center text-primary">
						<b>VUELOS</b>
					</h3>
				</div>
				<div class="panel-body">
				<form class="form" >  </form>
					<div class="input-group">
						<span class="input-group-addon">ORIGEN</span> <input type="text"
							class="form-control" placeholder="" />
					</div>		
					<div class="input-group">
						<span class="input-group-addon">DESTINO</span> <input type="text"
							class="form-control" placeholder="" />
					</div>
					<div class="input-group">
					<span class="label label-info">FECHA</span> <input type="date"name="fecha" />
					</div>
					
					<div class="input-group">
						<span class="label label-info">PLAZA</span> <select name="energia">
							<option></option>
							<option>Primera</option>
							<option>Bussiness</option>
							<option>Turista</option>
						</select>
					</div>

					<p>
						<span class="label label-info">CANTIDAD</span> <select
							name="energia">

							<option>01</option>
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
		<div class="col-md-4"></div>
	</div>

</div>
</div>
</div>