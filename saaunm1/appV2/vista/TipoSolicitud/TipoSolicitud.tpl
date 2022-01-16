{literal}
<script type="text/javascript">
validar('solTipoSolicitud','Sol TipoSolicitud',REQUERIDO);
validar('fecIniTipoSolicitud','FecIni TipoSolicitud',REQUERIDO);
validar('fecFinTipoSolicitud','FecFin TipoSolicitud',REQUERIDO);
validar('segTipoSolicitud','Seg TipoSolicitud',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} TipoSolicitud</h4>
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
	<label class="control-label">Sol TipoSolicitud</label>
	<div class="">
		<input id='solTipoSolicitud' name='solTipoSolicitud' value='{$solTipoSolicitud}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FecIni TipoSolicitud</label>
	<div class="">
		<div class="input-group input-group-sm">
<input id='fecIniTipoSolicitud' name='fecIniTipoSolicitud' class='form-control input-sm' type='date' value='{$fecIniTipoSolicitud}' >
</div>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FecFin TipoSolicitud</label>
	<div class="">
		<div class="input-group input-group-sm">
<input id='fecFinTipoSolicitud' name='fecFinTipoSolicitud' class='form-control input-sm' type='date' value='{$fecFinTipoSolicitud}' >
</div>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Seg TipoSolicitud</label>
	<div class="">
		<input id='segTipoSolicitud' name='segTipoSolicitud' value='{$segTipoSolicitud}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idTipoSolicitud' name='idTipoSolicitud' value='{$idTipoSolicitud}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
