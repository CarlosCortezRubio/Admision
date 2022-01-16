{literal}
<script type="text/javascript">
validar('idEmpleado','Docente',REQUERIDO);
validar('codProgEstudio','Código',REQUERIDO);
validar('nomProgEstudio','Nombre',REQUERIDO);
validar('numResProgEstudio','N° Res. autorización',REQUERIDO);
validar('fecResProgEstudio','Fecha Res. autorización',REQUERIDO);
validar('aplPreinscProgEstudio','Aplica Preinscripción',REQUERIDO);
validar('aplGrupoProgEstudio','Aplica Grupo',REQUERIDO);
validar('numResRevProgEstudio','N° Res. Revalidación',REQUERIDO);
validar('fecResRevProgEstudio','Fecha Res. Revalidación',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} Programa de Estudio</h4>
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
	<label class="control-label">Docente</label>
	<div class="">
		<select id='idEmpleado' name='idEmpleado' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaEmpleado selected=$idEmpleado}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Código</label>
	<div class="">
		<input id='codProgEstudio' name='codProgEstudio' value='{$codProgEstudio}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nombre</label>
	<div class="">
		<input id='nomProgEstudio' name='nomProgEstudio' value='{$nomProgEstudio}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">N° Res. autorización</label>
	<div class="">
		<input id='numResProgEstudio' name='numResProgEstudio' value='{$numResProgEstudio}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha Res. autorización</label>
	<div class="">
		<div class="input-group input-group-sm">
<input id='fecResProgEstudio' name='fecResProgEstudio' class='form-control input-sm' type='date' value='{$fecResProgEstudio}' >
</div>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Aplica Preinscripción</label>
	<div class="">
		<input id='aplPreinscProgEstudio' name='aplPreinscProgEstudio' value='{$aplPreinscProgEstudio}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Aplica Grupo</label>
	<div class="">
		<input id='aplGrupoProgEstudio' name='aplGrupoProgEstudio' value='{$aplGrupoProgEstudio}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">N° Res. Revalidación</label>
	<div class="">
		<input id='numResRevProgEstudio' name='numResRevProgEstudio' value='{$numResRevProgEstudio}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha Res. Revalidación</label>
	<div class="">
		<div class="input-group input-group-sm">
<input id='fecResRevProgEstudio' name='fecResRevProgEstudio' class='form-control input-sm' type='date' value='{$fecResRevProgEstudio}' >
</div>
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idProgEstudio' name='idProgEstudio' value='{$idProgEstudio}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
