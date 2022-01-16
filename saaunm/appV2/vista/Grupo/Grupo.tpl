{literal}
<script type="text/javascript">
validar('idCiclo','IdCiclo Grupo',REQUERIDO);
validar('idPensum','IdPensum Grupo',REQUERIDO);
validar('idPeriodo','IdPeriodo Grupo',REQUERIDO);
validar('idProgEstudio','IdProgEstudio Grupo',REQUERIDO);
validar('idEmpleado','IdEmpleado Grupo',REQUERIDO);
validar('idSede','IdSede Grupo',REQUERIDO);
validar('nomGrupo','Nom Grupo',REQUERIDO);
validar('codGrupo','Cod Grupo',REQUERIDO);
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
	<label class="control-label">IdCiclo Grupo</label>
	<div class="">
		<input id='idCiclo' name='idCiclo' value='{$idCiclo}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdPensum Grupo</label>
	<div class="">
		<input id='idPensum' name='idPensum' value='{$idPensum}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdPeriodo Grupo</label>
	<div class="">
		<input id='idPeriodo' name='idPeriodo' value='{$idPeriodo}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdProgEstudio Grupo</label>
	<div class="">
		<input id='idProgEstudio' name='idProgEstudio' value='{$idProgEstudio}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdEmpleado Grupo</label>
	<div class="">
		<input id='idEmpleado' name='idEmpleado' value='{$idEmpleado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdSede Grupo</label>
	<div class="">
		<input id='idSede' name='idSede' value='{$idSede}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nom Grupo</label>
	<div class="">
		<input id='nomGrupo' name='nomGrupo' value='{$nomGrupo}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Cod Grupo</label>
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
