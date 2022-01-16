{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina' style="width:95%">
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Viudez</h4>
		</div>	
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
					<label class="control-label"><span class='label-red'>*</span> Año</label>
					<div class="input-group mb-3">
					<select id='idAnio' name='idAnio' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaAnio selected=$idAnio}
					</select>
					</div>
				</div>
				<div class="form-group col-md-3">
					<label class="control-label"><span class='label-red'>*</span> Mes</label>
					<div class="input-group mb-3">
					<select id='idMes' name='idMes' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaMes selected=$idMes}
					</select>
					  	<div class="input-group-append">
					    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridPlanillaPensionado(3+':'+xajax.$('idAnio').value+':'+xajax.$('idMes').value+':',0);">Buscar</button>
					  	</div>				
					</div>
				</div>
				<div class="form-group col-md-3">
					<label class="control-label"><span class='label-red'>*</span> DNI del Pensionado</label>
					<div class="input-group mb-3">
						<input type='text' class="form-control input-sm" id='dniPensionado' name='opt' value=''/>
					  	<div class="input-group-append">
					    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridPlanillaPensionado(1+':'+xajax.$('idAnio').value+':'+xajax.$('idMes').value+':'+xajax.$('dniPensionado').value,0);">Buscar</button>
					  	</div>
					</div>
				</div>
				<div class="form-group col-md-4">
					<label class="control-label"><span class='label-red'>*</span> Nombre del Pensionado</label>
					<div class="input-group mb-3">
						<input type='text' class="form-control input-sm" id='nomPensionado' name='opt' value=''/>
					  	<div class="input-group-append">
			<!-- 		    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridPlanillaPensionadosNom(xajax.$('nomPensionado').value,0);">Buscar</button> -->
							<button type="button" class="btn btn-primary" onclick="xajax_llenarGridPlanillaPensionado(2+':'+xajax.$('idAnio').value+':'+xajax.$('idMes').value+':'+xajax.$('nomPensionado').value,0);">Buscar</button>
					  	</div>
					</div>
				</div>
			</div>			
		<fieldset>
        <script>xajax_llenarGridPlanillaPensionado(3+':'+xajax.$('idAnio').value+':'+xajax.$('idMes').value+':',0);</script>
<center>
<div id='cantReg' name='cantReg'></div>
<div id='paginacion'></div>
<div id='boxPlanillaPensionado' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridPlanillaPensionado = new dhtmlXGridObject('boxPlanillaPensionado');
                gridPlanillaPensionado.setDelimiter('|');
                gridPlanillaPensionado.setHeader('|Imp|Ver|Editar|Año|Mes|Dni|Apellidos y nombres|Planilla|Contrasena|FecCreacion|T imp|T haber|T desc.|T liquido');
                gridPlanillaPensionado.enableColumnAutoSize(true);
                gridPlanillaPensionado.setInitWidths('25|60|60|50|40|40|70|*|80|110|110|70|70|70|70');
                gridPlanillaPensionado.setColAlign('center|center|center|center|center|center|right|left|center|center|center|center|center|center|center');
//              gridPlanillaPensionado.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPlanillaPensionado.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridPlanillaPensionado.setColSorting('str|str|str|str|int|int|int|int|str|str|str|int|int|int|int');
                gridPlanillaPensionado.setImagePath('../../rec/img/grid/');
                gridPlanillaPensionado.enableMultiselect(false);
                gridPlanillaPensionado.enableLightMouseNavigation(true);
                gridPlanillaPensionado.init();
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='tipPlanilla' name='tipPlanilla' value='{$tipPlanilla}' readonly/>
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='planillaPensionadoid' name='planillaPensionadoid' value='{$planillaPensionadoid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>