<form id="formCancelarVuelo" class="form-horizontal" role="form">
	<div class="form-group">
		<label class="control-label" for="txtMotivoCancelacion"><b>Descripción del motivo:</b> </label> 
		<input class="form-control" type="text"name="txtMotivoCancelacion" id="txtMotivoCancelacion" required="required"/>
	</div>
	<div class="form-group">
	<button class="form-control" type="submit" class="btn btn-info"><b>Enviar</b></button>
	</div>
</form>

<script>

$(document).ready(function(){ 
	$('#formCancelarVuelo').submit(function(event) {
		event.preventDefault();
 		var motivo= $('#txtMotivoCancelacion').val();
		console.log(motivo);
		var modal = $('#ventanaModal');
 	 	$.post('<?php echo base_url(); ?>index.php/ControladorVuelo/cancelar_vuelo/',
 	 	 	 	{id_vuelo: id_vuelo, motivo: motivo}, 
				function(resultado) {
					if (resultado == "si") {
						var cancelar=modal.find('.modal-footer > #cancelar');
						modal.find('.modal-title').text("Mensaje de Información");
						modal.find('.modal-body').text("La cancelación del vuelo ha sido exitosa");
						modal.find('.modal-footer').show();
						modal.find('.modal-footer > #aceptar').hide();
						cancelar.text("Aceptar");//cambio el nombre al botón aceptar para que al "Aceptar" 
			 			//se cierre la ventana modal
			 			cancelar.click(function(event) {
			 				window.location.reload(true);
				 		});
					} else {
						console.log(resultado);
						modal.find('.modal-title').text("Mensaje de Información");
						modal.find('.modal-body').text("Ha ocurrido un error durante la cancelación del vuelo");
						modal.find('.modal-footer').show();
						modal.find('.modal-footer>#aceptar').hide();
						modal.find('.modal-footer>#cancelar').text("Aceptar");//cambio el nombre al botón aceptar para que al "Aceptar" 
						//se cierre la ventana modal
					}
				});	
			
 		});	
			

});

</script>