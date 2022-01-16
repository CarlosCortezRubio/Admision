{literal}
<script type="text/javascript">
validar('nomEdoRegistro','nomEdoRegistro',REQUERIDO);
validar('descEdoRegistro','descEdoRegistro',REQUERIDO);
validar('grupoEdoRegistro','grupoEdoRegistro',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} </h4>
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
	<label class="control-label">Nom EdoRegistro</label>
	<div class="">
		<input id='nomEdoRegistro' name='nomEdoRegistro' value='{$nomEdoRegistro}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Desc EdoRegistro</label>
	<div class="">
		<input id='descEdoRegistro' name='descEdoRegistro' value='{$descEdoRegistro}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Grupo EdoRegistro</label>
	<div class="">
		<input id='grupoEdoRegistro' name='grupoEdoRegistro' value='{$grupoEdoRegistro}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idEdoRegistro' name='idEdoRegistro' value='{$idEdoRegistro}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
