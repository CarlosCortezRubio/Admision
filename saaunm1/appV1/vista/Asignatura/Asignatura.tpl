{literal}
<script type="text/javascript">
validar('idTipoAsignatura','Tipo Asignatura',REQUERIDO);
validar('idTipoEvaluac','Tipo Evaluación',REQUERIDO);
validar('IDEDOREGISTRO','Estado',REQUERIDO);
validar('codAsignatura','Código',REQUERIDO);
validar('nomAsignatura','Nombre',REQUERIDO);
validar('pracLabAsignatura','Práctica Laboral',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if}  Asignatura</h4>
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
		<input id='IDEDOREGISTRO' name='IDEDOREGISTRO' value='{$IDEDOREGISTRO}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Código</label>
	<div class="">
		<input id='codAsignatura' name='codAsignatura' value='{$codAsignatura}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nombre</label>
	<div class="">
		<input id='nomAsignatura' name='nomAsignatura' value='{$nomAsignatura}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Práctica Laboral</label>
	<div class="">
		<input id='pracLabAsignatura' name='pracLabAsignatura' value='{$pracLabAsignatura}' maxlength='64' class='form-control input-sm' />
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
