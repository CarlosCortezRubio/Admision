{literal}
<script type="text/javascript">
validar('IDBANCO','IDBANCO Banco',REQUERIDO);
validar('Edo_idEdoRegistro','Edo_idEdoRegistro Banco',REQUERIDO);
validar('NOMBANCO','NOMBANCO Banco',REQUERIDO);
validar('ETIBANCO','ETIBANCO Banco',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} Banco</h4>
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
	<label class="control-label">IDBANCO Banco</label>
	<div class="">
		<input id='IDBANCO' name='IDBANCO' value='{$IDBANCO}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Edo_idEdoRegistro Banco</label>
	<div class="">
		<input id='Edo_idEdoRegistro' name='Edo_idEdoRegistro' value='{$Edo_idEdoRegistro}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">NOMBANCO Banco</label>
	<div class="">
		<input id='NOMBANCO' name='NOMBANCO' value='{$NOMBANCO}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">ETIBANCO Banco</label>
	<div class="">
		<input id='ETIBANCO' name='ETIBANCO' value='{$ETIBANCO}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idBanco' name='idBanco' value='{$idBanco}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
