{literal}
<script type="text/javascript">
validar('idCiclo','Ciclo',REQUERIDO);
validar('idPensum','Pensum',REQUERIDO);
validar('idPeriodo','Periodo',REQUERIDO);
validar('idProgEstudio','Programa de Estudio',REQUERIDO);
validar('idEmpleado','Docente',REQUERIDO);
validar('idSede','Sede',REQUERIDO);
validar('nomGrupo','Nombre',REQUERIDO);
validar('codGrupo','Código',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} Grupo</h4>
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
	<label class="control-label">Ciclo</label>
	<div class="">
		<select id='idCiclo' name='idCiclo' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaCiclo selected=$idCiclo}
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
	<label class="control-label">Docente</label>
	<div class="">
		<select id='idEmpleado' name='idEmpleado' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaEmpleado selected=$idEmpleado}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Sede</label>
	<div class="">
		<input id='idSede' name='idSede' value='{$idSede}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nombre</label>
	<div class="">
		<input id='nomGrupo' name='nomGrupo' value='{$nomGrupo}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Código</label>
	<div class="">
		<input id='codGrupo' name='codGrupo' value='{$codGrupo}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idGrupo' name='idGrupo' value='{$idGrupo}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
