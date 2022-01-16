{literal}
<script type="text/javascript">
validar('IDROL','IDROL Rol',REQUERIDO);
validar('Edo_idEdoRegistro','Edo_idEdoRegistro Rol',REQUERIDO);
validar('NOMROL','NOMROL Rol',REQUERIDO);
validar('DESCROL','DESCROL Rol',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} Rol</h4>
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
	<label class="control-label">IDROL Rol</label>
	<div class="">
		<input id='IDROL' name='IDROL' value='{$IDROL}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Edo_idEdoRegistro Rol</label>
	<div class="">
		<input id='Edo_idEdoRegistro' name='Edo_idEdoRegistro' value='{$Edo_idEdoRegistro}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">NOMROL Rol</label>
	<div class="">
		<input id='NOMROL' name='NOMROL' value='{$NOMROL}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">DESCROL Rol</label>
	<div class="">
		<input id='DESCROL' name='DESCROL' value='{$DESCROL}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idRol' name='idRol' value='{$idRol}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
