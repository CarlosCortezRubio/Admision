<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Empleado.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<input type='hidden' id='opcion' name='opcion'  value='' readonly>
		<div id='errores'>
			{if $error != ''}<div id='msg-error' class='msg-red'>{$error}</div>{/if}
			{if $exito != ''}<div id='msg-exito' class='msg-green'>{$exito}</div>{/if}
			{if $info  != ''}<div id='msg-info' class='msg-blue'>{$info}</div>{/if}
		</div>
			<br>
                        <p class="h4"> Buscar Beneficiarios Por Empleado</p>
		
                        <div class="row contenidoVer" style="width:100%">
				
                               		
				<div class="form-group col-md-3">
					<label class="control-label"><span class='label-red'>*</span> DNI del Empleado</label>
					<div class="input-group mb-3">
						<input type='text' class="form-control input-sm" id='dniPersona' name='opt' value=''/>
					  	<div class="input-group-append">
					    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridBeneficiarioEmpleado(1+':'+xajax.$('dniPersona').value+':'+xajax.$('nomPersona').value,0);">Buscar</button>
					  	</div>
					</div>
				</div>
				<div class="form-group col-md-4">
					<label class="control-label"><span class='label-red'>*</span> Nombres del Empleado</label>
					<div class="input-group mb-3">
						<input type='text' class="form-control input-sm" id='nomPersona' name='opt' value=''/>
					  	<div class="input-group-append">
						<button type="button" class="btn btn-primary" onclick="xajax_llenarGridBeneficiarioEmpleado(2+':'+xajax.$('dniPersona').value+':'+xajax.$('nomPersona').value,0);">Buscar</button>
					  	</div>
					</div>
                                </div>
			</div>	
		<fieldset>
        <script>xajax_llenarGridBeneficiarioEmpleado('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxBeneficiarioEmp' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridBeneficiarioEmpleado= new dhtmlXGridObject('boxBeneficiarioEmp');
                gridBeneficiarioEmpleado.setDelimiter('|');
                gridBeneficiarioEmpleado.setHeader('|Imp|Ver|Editar|ID|Dni Beneficiario|Nombre del Beneficiario|Dni Empleado|Nombre del Empleado');
                gridBeneficiarioEmpleado.enableColumnAutoSize(true);
                gridBeneficiarioEmpleado.setInitWidths('30|60|60|60|60|100|*|100|*');
                gridBeneficiarioEmpleado.setColAlign('center|center|center|center|center|left|left|left|left');
//              gridBeneficiarioEmpleado.attachEvent('onRowDblClicked',eliminarCondicion);
                gridBeneficiarioEmpleado.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridBeneficiarioEmpleado.setColSorting('str|str|str|str|int|int|int|int');
                gridBeneficiarioEmpleado.setImagePath('../../rec/img/grid/');
                gridBeneficiarioEmpleado.enableMultiselect(false);
                gridBeneficiarioEmpleado.enableLightMouseNavigation(true);
                gridBeneficiarioEmpleado.init();
//	        gridBeneficiarioEmpleado.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idBeneficiarioEmpleado' name='idBeneficiarioEmpleado' value='{$idBeneficiario}' readonly/>
		<input type='hidden' id='estado' name='estado' value='1' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
