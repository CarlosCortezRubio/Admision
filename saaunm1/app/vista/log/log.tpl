{literal}
<script type="text/javascript">
validar('IDLOG','IDLOG log',REQUERIDO);
validar('IDUSUARIO','IDUSUARIO log',REQUERIDO);
validar('FECHALOG','FECHALOG log',REQUERIDO);
validar('IPLOG','IPLOG log',REQUERIDO);
validar('ACCIONLOG','ACCIONLOG log',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} Log</h4>
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
	<label class="control-label">IDLOG log</label>
	<div class="">
		<input id='IDLOG' name='IDLOG' value='{$IDLOG}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IDUSUARIO log</label>
	<div class="">
		<input id='IDUSUARIO' name='IDUSUARIO' value='{$IDUSUARIO}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FECHALOG log</label>
	<div class="">
		<div class="input-group input-group-sm">
<input id='FECHALOG' name='FECHALOG' class='form-control input-sm' type='date' value='{$FECHALOG}' >
</div>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IPLOG log</label>
	<div class="">
		<input id='IPLOG' name='IPLOG' value='{$IPLOG}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">ACCIONLOG log</label>
	<div class="">
		<input id='ACCIONLOG' name='ACCIONLOG' value='{$ACCIONLOG}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idlog' name='idlog' value='{$idlog}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
