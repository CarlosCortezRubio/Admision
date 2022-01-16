{literal}
<script type="text/javascript">
validar('IDUSUARIO','IDUSUARIO Usuario',REQUERIDO);
validar('IDPERSONA','IDPERSONA Usuario',REQUERIDO);
validar('IDROL','IDROL Usuario',REQUERIDO);
validar('IDEDOREGISTRO','IDEDOREGISTRO Usuario',REQUERIDO);
validar('CUENTAUSUARIO','CUENTAUSUARIO Usuario',REQUERIDO);
validar('CONTRASENAUSUARIO','CONTRASENAUSUARIO Usuario',REQUERIDO);
validar('FECCREACION','FECCREACION Usuario',REQUERIDO);
validar('PREGSECRETA','PREGSECRETA Usuario',REQUERIDO);
validar('RESPPREGSECRETA','RESPPREGSECRETA Usuario',REQUERIDO);
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
	<label class="control-label">IDUSUARIO Usuario</label>
	<div class="">
		<input id='IDUSUARIO' name='IDUSUARIO' value='{$IDUSUARIO}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IDPERSONA Usuario</label>
	<div class="">
		<input id='IDPERSONA' name='IDPERSONA' value='{$IDPERSONA}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IDROL Usuario</label>
	<div class="">
		<input id='IDROL' name='IDROL' value='{$IDROL}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IDEDOREGISTRO Usuario</label>
	<div class="">
		<input id='IDEDOREGISTRO' name='IDEDOREGISTRO' value='{$IDEDOREGISTRO}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">CUENTAUSUARIO Usuario</label>
	<div class="">
		<input id='CUENTAUSUARIO' name='CUENTAUSUARIO' value='{$CUENTAUSUARIO}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">CONTRASENAUSUARIO Usuario</label>
	<div class="">
		<input id='CONTRASENAUSUARIO' name='CONTRASENAUSUARIO' value='{$CONTRASENAUSUARIO}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FECCREACION Usuario</label>
	<div class="">
		<div class="input-group input-group-sm">
<input id='FECCREACION' name='FECCREACION' class='form-control input-sm' type='date' value='{$FECCREACION}' >
</div>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">PREGSECRETA Usuario</label>
	<div class="">
		<input id='PREGSECRETA' name='PREGSECRETA' value='{$PREGSECRETA}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">RESPPREGSECRETA Usuario</label>
	<div class="">
		<input id='RESPPREGSECRETA' name='RESPPREGSECRETA' value='{$RESPPREGSECRETA}' maxlength='64' class='form-control input-sm' />
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
