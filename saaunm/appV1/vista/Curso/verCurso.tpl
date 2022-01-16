<div class='pagina'>
<div class="btn-group" role="group" aria-label="...">
<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde"></div>
<div class='line-title-con'>
		<h4>Consultar Curso</h4>
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
	<label class="control-label">Periodo</label>
	<div class="">
		<select id='idPeriodo' name='idPeriodo' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaPeriodo selected=$idPeriodo}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Programa de Estudio</label>
	<div class="">
		<select id='idProgEstudio' name='idProgEstudio' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaProgEstudio selected=$idProgEstudio}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Estado</label>
	<div class="">
		<select id='idEdoRegistro' name='idEdoRegistro' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaEdoRegistro selected=$idEdoRegistro}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Docente</label>
	<div class="">
		<select id='idEmpleado' name='idEmpleado' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaEmpleado selected=$idEmpleado}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Pensum</label>
	<div class="">
		<select id='idPensum' name='idPensum' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaPensum selected=$idPensum}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Asignatura</label>
	<div class="">
		<select id='idAsignatura' name='idAsignatura' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaAsignatura selected=$idAsignatura}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Código</label>
	<div class="">
		{$codCurso}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nombre</label>
	<div class="">
		{$nomCurso}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Cupo Máximo</label>
	<div class="">
		{$cupMaxCurso}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha de Inicio</label>
	<div class="">
		{$fecIniCurso}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha de Culminación</label>
	<div class="">
		{$fecFinCurso}	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idCurso' name='idCurso' value='{$idCurso}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
