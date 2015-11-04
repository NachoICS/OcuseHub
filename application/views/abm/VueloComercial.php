<script src="../assets/jquery/jquery.js"></script>
<link href="../assets/css/bootstrap.min.css" rel="stylesheet"> 
<script src="../assets/js/bootstrap.min.js"></script>






<div class="container">
<div class="row">
<div class="col-xs-12"></div>
<div class="panel panel-info">
<!-- panel donde ira el form de alta de cliente -->

<div class="panel-heading">
<br>
<br>
<h3 class="panel-title"><b>CREAR VUELO COMERCIAL</b></h3>
</div>
<div class="panel-body">
<div class="col-md-6 col-md-offset-3">
				<?php echo form_open("index.php/Fachada_cliente/guardarCliente",array('class'=>'form-horizontal', 'id'=>'formCrearCliente'));?>

						<div class="form-group">
						<label class="control-label col-sm-3" for="numDniCliente">Codigo de vuelo:</label>
						<div class="col-sm-3">
							<input title="Codigo de vuelo comercial" type="number"
								class="form-control" name="numVueloComercial" id="numVueloComercial"
								required=”required”>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-xs-3" for="txtAvionAsignado"
							required=”required”> Avion:</label>
						<div class="col-xs-5">
						<select name = "avionAsignadoaVuelo"> 

		<option> </option>
		<option>  </option>
		<option> </option>

	</select>
						
<!-- 	* <input type="text" class="form-control" name="txtNombreCliente" -->
	<!-- // id="txtNombreCliente" required=”required” /> -->
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-xs-3" for="txtRutaVueloComercial">
							Ruta:</label>
						<div class="col-xs-5">
							<select name = "rutaAsignadoaVuelo"> 

		<option> </option>
		<option>  </option>
		<option> </option>

	</select>
						<!--  	<input type="text" class="form-control" name="txtRutaVueloComercial"
							id="txtApellidoCliente" required=”required”>
					-->
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-xs-3" for="txtFechaDePartida">Fecha de partida:</label>
						<div class="col-xs-5">
							<input type="date"  name="fecha"/>
								
						</div>
					</div>

			

					<button class="btn btn-info btn-lg active btn-block" type="submit" name="op">Crear</button>
					<?php  echo form_close();?>
				</div>
			</div>
			<!-- Panel Body -->
		</div>
		<!-- panel panel-default -->
	</div>
	<!-- fin de row principal-->
	<script
		src="https://raw.githubusercontent.com/igorescobar/jQuery-Mask-Plugin/master/src/jquery.mask.js"></script>

	<script type="text/javascript"> 


 	$("#txtTelefonoCliente").mask("(9999) 9999-999");


	$("#txtTelefonoCliente").on("blur", function() {
	    var last = $(this).val().substr( $(this).val().indexOf("-") + 1 );
	    
	    if( last.length == 3 ) {
 	        var move = $(this).val().substr( $(this).val().indexOf("-") - 1, 1 );
        var lastfour = move + last;
	        
 	        var first = $(this).val().substr( 0, 9 );
	        
 	        $(this).val( first + '-' + lastfour );
	    } 	});
    


 </script>
</div>