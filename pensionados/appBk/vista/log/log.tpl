{literal}
<script type="text/javascript">
validar('idUsuario','IdUsuario log',REQUERIDO);
validar('fechalog','Fecha log',REQUERIDO);
validar('iplog','Ip log',REQUERIDO);
validar('accionlog','Accion log',REQUERIDO);
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
	<label class="control-label">IdUsuario log</label>
	<div class="">
		<input id='idUsuario' name='idUsuario' value='{$idUsuario}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha log</label>
	<div class="">
		<div class="input-group input-group-sm">
<input id='fechalog' name='fechalog' class='form-control input-sm' type='text' value='{$fechalog|date_format:"%d/%m/%Y"}' maxlength='10' ondblclick='this.value=""' readonly>
<span class='input-group-addon'><img class='cursor' id='fecha' src='{$PUB_URL}img/iconos/calendario.gif' align='top'></span>
{literal}
<script type='text/javascript'>
Calendar.setup({inputField: 'fechalog', ifFormat : '%d/%m/%Y', button: 'fecha'});
</script>
{/literal}
</div>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ip log</label>
	<div class="">
		<input id='iplog' name='iplog' value='{$iplog}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Accion log</label>
	<div class="">
		<input id='accionlog' name='accionlog' value='{$accionlog}' maxlength='64' class='form-control input-sm' />
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
