<div class='pagina'>
<div class="btn-group" role="group" aria-label="...">
<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde"></div>
<div class='line-title-con'>
		<h4>Consultar  Asignatura</h4>
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
	<label class="control-label">Tipo Asignatura</label>
	<div class="">
		<select id='idTipoAsignatura' name='idTipoAsignatura' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaTipoAsignatura selected=$idTipoAsignatura}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tipo Evaluación</label>
	<div class="">
		<select id='idTipoEvaluac' name='idTipoEvaluac' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaTipoEvaluac selected=$idTipoEvaluac}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Estado</label>
	<div class="">
		<select id='IDEDOREGISTRO' name='IDEDOREGISTRO' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaEdoRegistro selected=$IDEDOREGISTRO}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Código</label>
	<div class="">
		{$codAsignatura}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nombre</label>
	<div class="">
		{$nomAsignatura}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Práctica Laboral</label>
	<div class="">
		{$pracLabAsignatura}
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idAsignatura' name='idAsignatura' value='{$idAsignatura}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
