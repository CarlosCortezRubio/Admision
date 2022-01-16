{include file="../../../app/comun/libGrid.tpl"}
{literal}
<script type="text/javascript">
validar('anioPeriodo','anioPeriodo',REQUERIDO);
validar('mesPeriodo','mesPeriodo',REQUERIDO);
validar('nomPeriodo','nomPeriodo',REQUERIDO);
validar('edoPeriodo','edoPeriodo',REQUERIDO);
validar('obsPeriodo','obsPeriodo',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Duplicar planilla</h4>
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
 			{if $band == ''}
<div class="form-group col-lg-4">
	<label class="control-label">Tipo de Planilla</label>
	<div class="">
		<select id='idTipoPlanilla' name='idTipoPlanilla' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaTipoPlanilla }
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Periodo a duplicar (Origen)</label>
	<div class="">
		<select id='idPeriodoOrigen' name='idPeriodoOrigen' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaPeriodo }
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Periodo activo (Destino)</label>
	<div class="">
		Nombre: <b>{$nomPeriodo}</b><br>
		Año: <b>{$anioPeriodo}</b><br>
		Mes: <b>{$mesPeriodo}</b><br>
</select>
	</div>
</div>
		</div>
<input type="button" onclick="xajax_duplicar(xajax.$('idTipoPlanilla').value,xajax.$('idPeriodoOrigen').value,xajax.$('idPeriodo').value,xajax.$('anioPeriodo').value,xajax.$('mesPeriodo').value);" value="Duplicar" class="btn btn-primary">
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idPeriodo' name='idPeriodo' value='{$idPeriodo}' readonly/>
		<input type='hidden' id='anioPeriodo' name='anioPeriodo' value='{$anioPeriodo}' readonly/>
		<input type='hidden' id='mesPeriodo' name='mesPeriodo' value='{$mesPeriodo}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>
{else}
No hay periodo abierto para poder hacer el duplicado, pulse &nbsp;<a href="{$URLSIST}base/Periodo"> Aquí </a>&nbsp; sí desea aperturar un periodo
{/if}
	</form>
</div>