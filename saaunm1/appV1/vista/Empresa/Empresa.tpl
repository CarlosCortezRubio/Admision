{literal}
<script type="text/javascript">
validar('rucEmpresa','Ruc Empresa',REQUERIDO);
validar('telEmpresa','Tel Empresa',REQUERIDO);
validar('dirEmpresa','Dir Empresa',REQUERIDO);
validar('correoEmpresa','Correo Empresa',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} Empresa</h4>
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
	<label class="control-label">Ruc Empresa</label>
	<div class="">
		<input id='rucEmpresa' name='rucEmpresa' value='{$rucEmpresa}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tel Empresa</label>
	<div class="">
		<input id='telEmpresa' name='telEmpresa' value='{$telEmpresa}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Dir Empresa</label>
	<div class="">
		<input id='dirEmpresa' name='dirEmpresa' value='{$dirEmpresa}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Correo Empresa</label>
	<div class="">
		<input id='correoEmpresa' name='correoEmpresa' value='{$correoEmpresa}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idEmpresa' name='idEmpresa' value='{$idEmpresa}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
