{literal}
<script type="text/javascript">
validar('IDEDOREGISTRO','Estado',REQUERIDO);
validar('nomPeriodo','Nombre',REQUERIDO);
validar('fecIniPeriodo','Fecha Inicio',REQUERIDO);
validar('fecFinPeriodo','Fecha Culminación',REQUERIDO);
validar('OrdPeriodo','Ordenamiento',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} Periodo</h4>
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
	<label class="control-label">Estado</label>
	<div class="">
		<select id='IDEDOREGISTRO' name='IDEDOREGISTRO' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaEdoRegistro selected=$IDEDOREGISTRO}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nombre</label>
	<div class="">
		<input id='nomPeriodo' name='nomPeriodo' value='{$nomPeriodo}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha Inicio</label>
	<div class="">
		<div class="input-group input-group-sm">
<input id='fecIniPeriodo' name='fecIniPeriodo' class='form-control input-sm' type='date' value='{$fecIniPeriodo}' >
</div>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha Culminación</label>
	<div class="">
		<div class="input-group input-group-sm">
<input id='fecFinPeriodo' name='fecFinPeriodo' class='form-control input-sm' type='date' value='{$fecFinPeriodo}' >
</div>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ordenamiento</label>
	<div class="">
		<input id='OrdPeriodo' name='OrdPeriodo' value='{$OrdPeriodo}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idPeriodo' name='idPeriodo' value='{$idPeriodo}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
