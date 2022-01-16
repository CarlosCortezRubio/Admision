<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Conceptos.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina' style="width:90%;">
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<input type='hidden' id='opcion' name='opcion'  value='' readonly>
		<div id='errores'>
			{if $error != ''}<div id='msg-error' class='msg-red'>{$error}</div>{/if}
			{if $exito != ''}<div id='msg-exito' class='msg-green'>{$exito}</div>{/if}
			{if $info  != ''}<div id='msg-info' class='msg-blue'>{$info}</div>{/if}
		</div>
			<br>
		<fieldset>
			<div class="row contenidoVer" style="width:100%">
				<div class="form-group col-md-2">
					<label class="control-label"><span class='label-red'>*</span> Tipo Concepto</label>
					<div class="input-group mb-3">
						<select id='idTipoConcepto' name='idTipoConcepto' class='form-control input-sm'>
							<option value=''>-Todos-</option>
							{html_options options=$tablaTipoConcepto selected=$idTipoConcepto}
						</select>
					</div>
				</div>
				<div class="form-group col-md-2">
					<label class="control-label"><span class='label-red'>*</span> Estado</label>
					<div class="input-group mb-3">
						<select id='idEdoRegistro' name='idEdoRegistro' class='form-control input-sm'>
							<option value=''>-Todos-</option>
							{html_options options=$tablaEdoRegistro selected=$idEdoRegistro}
						</select>
					</div>
				</div>
				<div class="form-group col-md-3">
					<label class="control-label"><span class='label-red'>*</span> Grupo Pensionados</label>
					<div class="input-group mb-3">
						<select id='grpConceptos' name='grpConceptos' class='form-control input-sm'>
							<option value=''>-Todos-</option>
							{html_options options=$tablaGrpConceptos selected=$grpConceptos}
						</select>
					  	<div class="input-group-append">
					    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridPlanPens(3+':'+xajax.$('idAnio').value+':'+xajax.$('idMes').value+':',0);">Buscar</button>
					  	</div>
					</div>
				</div>
				<div class="form-group col-md-2">
					<label class="control-label"><span class='label-red'>*</span> Código</label>
					<div class="input-group mb-3">
						<input id='codConceptos' name='codConceptos' type='text' class='form-control input-sm' value='{$codConceptos}' />
					  	<div class="input-group-append">
					    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridConceptos(4+':'+xajax.$('codConceptos').value,0);">Buscar</button>
					  	</div>			
					</div>
				</div>
				<div class="form-group col-md-3">
					<label class="control-label"><span class='label-red'>*</span> Concepto</label>
					<div class="input-group mb-3">
						<input id='nomConceptos' name='nomConceptos' type='text' class='form-control input-sm' value='{$nomConceptos}' />	
					  	<div class="input-group-append">
					    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridConceptos(5+':'+xajax.$('nomConceptos').value,0);">Buscar</button>
					  	</div>		
					</div>
				</div>
			</div>		
		
		

        <script>xajax_llenarGridConceptos(':'+'','');</script>
<center>
<div id='paginacion'></div>
<div id='boxConceptos' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridConceptos = new dhtmlXGridObject('boxConceptos');
                gridConceptos.setDelimiter('|');
                gridConceptos.setHeader('|Imp|Ver|Editar|Tp Conc|Edo|Cod|Concepto|Nom Corto|Afp|Snp|Ipss|Remunerado|Grupo');
                gridConceptos.enableColumnAutoSize(true);
                gridConceptos.setInitWidths('25|60|60|60|60|60|60|*|*|40|40|40|50|50');
                gridConceptos.setColAlign('center|center|center|center|right|right|right|left|left|center|center|center|center|center');
//              gridConceptos.attachEvent('onRowDblClicked',eliminarCondicion);
                gridConceptos.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridConceptos.setColSorting('str|str|str|str|int|int|int|str|str|str|str|str|int|int');
                gridConceptos.setImagePath('../../rec/img/grid/');
                gridConceptos.enableMultiselect(false);
                gridConceptos.enableLightMouseNavigation(true);
                gridConceptos.init();
//			   gridConceptos.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Conceptosid' name='Conceptosid' value='{$Conceptosid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
