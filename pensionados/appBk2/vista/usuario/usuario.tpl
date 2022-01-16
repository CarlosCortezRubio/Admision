{literal}
<script type="text/javascript">
validar('idPersona','IdPersona Usuario',REQUERIDO);
validar('idRol','IdRol Usuario',REQUERIDO);
validar('idEdoRegistro','IdEdoRegistro Usuario',REQUERIDO);
validar('cuentaUsuario','Cuenta Usuario',REQUERIDO);
validar('contrasenaUsuario','Contrasena Usuario',REQUERIDO);
validar('fecCreacion','FecCreacion Usuario',REQUERIDO);
validar('pregSecreta','PregSecreta Usuario',REQUERIDO);
validar('respPregSecreta','RespPregSecreta Usuario',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} Usuario</h4>
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
	<label class="control-label">IdPersona Usuario</label>
	<div class="">
		<input id='idPersona' name='idPersona' value='{$idPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdRol Usuario</label>
	<div class="">
		<input id='idRol' name='idRol' value='{$idRol}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdEdoRegistro Usuario</label>
	<div class="">
		<input id='idEdoRegistro' name='idEdoRegistro' value='{$idEdoRegistro}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Cuenta Usuario</label>
	<div class="">
		<input id='cuentaUsuario' name='cuentaUsuario' value='{$cuentaUsuario}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Contrasena Usuario</label>
	<div class="">
		<input id='contrasenaUsuario' name='contrasenaUsuario' value='{$contrasenaUsuario}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FecCreacion Usuario</label>
	<div class="">
		<div class="input-group input-group-sm">
<input id='fecCreacion' name='fecCreacion' class='form-control input-sm' type='text' value='{$fecCreacion|date_format:"%d/%m/%Y"}' maxlength='10' ondblclick='this.value=""' readonly>
<span class='input-group-addon'><img class='cursor' id='fecha' src='{$PUB_URL}img/iconos/calendario.gif' align='top'></span>
{literal}
<script type='text/javascript'>
Calendar.setup({inputField: 'fecCreacion', ifFormat : '%d/%m/%Y', button: 'fecha'});
</script>
{/literal}
</div>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">PregSecreta Usuario</label>
	<div class="">
		<input id='pregSecreta' name='pregSecreta' value='{$pregSecreta}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">RespPregSecreta Usuario</label>
	<div class="">
		<input id='respPregSecreta' name='respPregSecreta' value='{$respPregSecreta}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idUsuario' name='idUsuario' value='{$idUsuario}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
