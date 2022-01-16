<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}PlanPens.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina' style="width:95%">
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<input type='hidden' id='opcion' name='opcion'  value='' readonly>
		<div id='errores'>
			{if $error != ''}<div id='msg-error' class='msg-red'>{$error}</div>{/if}
			{if $exito != ''}<div id='msg-exito' class='msg-green'>{$exito}</div>{/if}
			{if $info  != ''}<div id='msg-info' class='msg-blue'>{$info}</div>{/if}
		</div>
			<br>
<div class="row contenidoVer" style="width:100%">
	<div class="form-group col-md-2">
		<label class="control-label"><span class='label-red'>*</span> Mes</label>
		<div class="input-group mb-3">
		<select id='idMes' name='idMes' class='form-control input-sm'>
			<option value=''>-Seleccione-</option>
			{html_options options=$tablaMes selected=$idMes}
		</select>
		</div>
	</div>
	<div class="form-group col-md-2">
		<label class="control-label"><span class='label-red'>*</span> Año</label>
		<div class="input-group mb-3">
		<select id='idAnio' name='idAnio' class='form-control input-sm'>
			<option value=''>-Seleccione-</option>
			{html_options options=$tablaAnio selected=$idAnio}
		</select>
		</div>
	</div>
</div>			
		<fieldset>
				<div class="form-group col-md-4 divIconosCent">
					<a href="{$URLSIST}base/reporte/pensConsolidado" target="_blank">
						<label class="control-label">PLANILLAS ( CONSOLIDADO POR CONCEPTOS )</label>
					</a>
				</div>		
				<div class="form-group col-md-4 divIconosCent">
						<label class="control-label">PLANILLAS DE PENSIONADOS </label><br>
					<a href="{$URLSIST}base/reporte/reporte1" target="_blank">PDF</a>
					<a href="{$URLSIST}base/reporte/reporte1Excel" target="_blank">Excel</a>
				</div>		
				<div class="form-group col-md-4 divIconosCent">
					<a href="{$URLSIST}base/reporte/listadoBoletas" target="_blank">
						<!-- <img src="{$PUB_URLSIST}img/home/ajustes.png" class="iconoDesktop"><br> -->
						<label class="control-label">Listado Boletas</label>
					</a>
				</div>		
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='PlanPensid' name='PlanPensid' value='{$PlanPensid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
