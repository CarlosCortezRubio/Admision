<div class='pagina'>
<div class="btn-group" role="group" aria-label="...">
<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde"></div>
<div class='line-title-con'>
		<h4>Consultar Estudiante</h4>
	</div>
</div>
		<a id='ancla' href='#'></a>
		<input type='hidden' id='opcion' name='opcion'  value='' readonly>
		<div id='errores'>
			{if $error != ''}<div id='msg-error' class='msg-red'>{$error}</div>{/if}
			{if $exito != ''}<div id='msg-exito' class='msg-green'>{$exito}</div>{/if}
			{if $info  != ''}<div id='msg-info' class='msg-blue'>{$info}</div>{/if}
		</div>
		<fieldset>
 		<div class='container-fluid'>
 			<div class="row contenidoVer" style="width:100%">
<div class="form-group col-lg-4">
	<label class="control-label">IDPERSONA Estudiante</label>
	<div class="">
		{$IDPERSONA}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdPeriodo Estudiante</label>
	<div class="">
		{$idPeriodo}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdSede Estudiante</label>
	<div class="">
		{$idSede}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdProgEstudio Estudiante</label>
	<div class="">
		{$idProgEstudio}
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idEstudiante' name='idEstudiante' value='{$idEstudiante}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
