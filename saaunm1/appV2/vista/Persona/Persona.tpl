{literal}
<script type="text/javascript">
validar('IDPERSONA','IDPERSONA Persona',REQUERIDO);
validar('IDGENERO','IDGENERO Persona',REQUERIDO);
validar('IDEDOCIVIL','IDEDOCIVIL Persona',REQUERIDO);
validar('IDEDOREGISTRO','IDEDOREGISTRO Persona',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} Persona</h4>
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
	<label class="control-label">IDPERSONA Persona</label>
	<div class="">
		<input id='IDPERSONA' name='IDPERSONA' value='{$IDPERSONA}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IDGENERO Persona</label>
	<div class="">
		<input id='IDGENERO' name='IDGENERO' value='{$IDGENERO}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IDEDOCIVIL Persona</label>
	<div class="">
		<input id='IDEDOCIVIL' name='IDEDOCIVIL' value='{$IDEDOCIVIL}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IDEDOREGISTRO Persona</label>
	<div class="">
		<input id='IDEDOREGISTRO' name='IDEDOREGISTRO' value='{$IDEDOREGISTRO}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idPersona' name='idPersona' value='{$idPersona}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
