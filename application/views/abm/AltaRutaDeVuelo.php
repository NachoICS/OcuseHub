<script src="../assets/jquery/jquery.js"></script>
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<script src="../assets/js/bootstrap.min.js"></script>

<div class="container">
	<div class="row">
		<div class="col-xs-12"></div>
		<div class="panel panel-info">
			<!-- panel donde ira el form de alta de cliente -->

			<div class="panel-heading">
				<br> <br>
				<h3 class="panel-title">
					<b>ALTA DE RUTA DE VUELO</b>
				</h3>
			</div>
			<div class="panel-body">
				<div class="col-md-6 col-md-offset-3">
				<?php echo form_open("Controlador_ruta_de_vuelo/guardar_ruta",array('class'=>'form-horizontal', 'id'=>''));?>

						<div class="form-group">
						<label class="control-label col-sm-3" for="codigoDeRuta">Codigo de
							ruta:</label>
						<div class="col-sm-3">
							<input title="Codigo de ruta" type="number" class="form-control"
								name="codigoDeRuta" id="codigoDeRuta" required=”required”>
						</div>
					</div>

					<button class="btn btn-info btn-lg active btn-block" type="submit"
						name="op">Crear</button>
					<?php  echo form_close();?>
				</div>
			</div>
			<!-- Panel Body -->
		</div>
		<!-- panel panel-default -->
	</div>
	<!-- fin de row principal-->

</div>