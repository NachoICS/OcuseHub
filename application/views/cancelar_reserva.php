<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<?php  echo form_open("ControladorReserva/crearCancelacion", array ('class'=> 'form-horizontal', 'id'=>'formPrincipal' ))?>
			<div class="form-group">
				<label class="control-label" for="txtMotivoCancelacion"><b>Descripción del motivo:</b> </label> <input type="text" class="form-control" name="txtMotivioCancelacion" id="txtMotivoCancelacio" required="required">
			</div>
			<button type="submit" name="bus" class="btn btn-info btn-default pull-right">
				<b>Enviar</b>
			</button>
			<?php echo form_close();?>
		</div>
</div>