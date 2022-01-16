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
                          <div class="row contenidoVer" style="width:100%">
				
				<div class="form-group col-md-3">
					<label class="control-label"><span class='label-red'>*</span> DNI del Beneficiario</label>
					<div class="input-group mb-3">
						<input type='text' class="form-control input-sm" id='dniPersona' name='opt' value=''/>
					  	<div class="input-group-append">
					    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridBeneficiario(1+':'+xajax.$('dniPersona').value+':'+xajax.$('nomPersona').value,0);">Buscar</button>
					  	</div>
					</div>
				</div>
				<div class="form-group col-md-4">
					<label class="control-label"><span class='label-red'>*</span> Nombres del Beneficiario</label>
					<div class="input-group mb-3">
						<input type='text' class="form-control input-sm" id='nomPersona' name='opt' value=''/>
					  	<div class="input-group-append">
						<button type="button" class="btn btn-primary" onclick="xajax_llenarGridBeneficiario(2+':'+xajax.$('dniPersona').value+':'+xajax.$('nomPersona').value,0);">Buscar</button>
					  	</div>
					</div>
				</div>
			</div>		
		<fieldset>
        <script>xajax_llenarGridBeneficiario('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxBeneficiario' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridBeneficiario= new dhtmlXGridObject('boxBeneficiario');
                gridBeneficiario.setDelimiter('|');
                gridBeneficiario.setHeader('|Imp|Ver|Editar|ID|Parentesco|Nombre Completo|Fecha Inicio|Fecha Fin');
                gridBeneficiario.enableColumnAutoSize(true);
                gridBeneficiario.setInitWidths('30|80|80|80|80|100|*|100|100');
                gridBeneficiario.setColAlign('center|center|center|center|center|center|left|center|center|');
//              gridBeneficiario.attachEvent('onRowDblClicked',eliminarCondicion);
                gridBeneficiario.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|');
                gridBeneficiario.setColSorting('str|str|str|str|int|int|str|str|str|');
                gridBeneficiario.setImagePath('../../rec/img/grid/');
                gridBeneficiario.enableMultiselect(false);
                gridBeneficiario.enableLightMouseNavigation(true);
                gridBeneficiario.init();
//	        gridBeneficiario.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idBeneficiario' name='idBeneficiario' value='{$idBeneficiario}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
