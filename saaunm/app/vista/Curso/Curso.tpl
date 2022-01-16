{literal}
<script type="text/javascript">
validar('idPeriodo','Periodo',REQUERIDO);
validar('idProgEstudio','Programa de Estudio',REQUERIDO);
validar('idEdoRegistro','Estado',REQUERIDO);
validar('idEmpleado','Docente',REQUERIDO);
validar('idPensum','Pensum',REQUERIDO);
validar('idAsignatura','Asignatura',REQUERIDO);
validar('codCurso','Código',REQUERIDO);
validar('nomCurso','Nombre',REQUERIDO);
validar('cupMaxCurso','Cupo Máximo',REQUERIDO);
validar('fecIniCurso','Fecha de Inicio',REQUERIDO);
validar('fecFinCurso','Fecha de Culminación',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} Curso</h4>
		</div>
		<a id='ancla' href='#'></a>
		<input type='hidden' id='opcion' name='opcion'  value='' readonly>
		<div id='errores'>
			{if $error != ''}<div id='msg-error' class='msg-red'>{$error}</div>{/if}
			{if $exito != ''}<div id='msg-exito' class='msg-green'>{$exito}</div>{/if}
			{if $info  != ''}<div id='msg-info' class='msg-blue'>{$info}</div>{/if}
		</div>
		<fieldset>
		<p class='p-black'>Los campos marcados con <span class='label-red'>*</span> son obligatorios</p>
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
		<input id='codCurso' name='codCurso' value='{$codCurso}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nombre</label>
	<div class="">
		<input id='nomCurso' name='nomCurso' value='{$nomCurso}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Cupo Máximo</label>
	<div class="">
		<input id='cupMaxCurso' name='cupMaxCurso' value='{$cupMaxCurso}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha de Inicio</label>
	<div class="">
		<div class="input-group input-group-sm">
<input id='fecIniCurso' name='fecIniCurso' class='form-control input-sm' type='date' value='{$fecIniCurso}' >
</div>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha de Culminación</label>
	<div class="">
		<div class="input-group input-group-sm">
<input id='fecFinCurso' name='fecFinCurso' class='form-control input-sm' type='date' value='{$fecFinCurso}' >
</div>
	</div>
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
