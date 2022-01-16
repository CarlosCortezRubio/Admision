<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Empleado.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Empleado</h4>
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
				
				<div class="form-group col-md-3">
					<label class="control-label"><span class='label-red'>*</span> DNI del Empleado</label>
					<div class="input-group mb-3">
						<input type='text' class="form-control input-sm" id='dniPersona' name='opt' value=''/>
					  	<div class="input-group-append">
					    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridEmpleado(1+':'+xajax.$('dniPersona').value+':'+xajax.$('nomPersona').value+':'+xajax.$('idSituacion').value,0);">Buscar</button>
					  	</div>
					</div>
				</div>
				<div class="form-group col-md-4">
					<label class="control-label"><span class='label-red'>*</span> Nombre de Persona</label>
					<div class="input-group mb-3">
						<input type='text' class="form-control input-sm" id='nomPersona' name='opt' value=''/>
					  	<div class="input-group-append">
						<button type="button" class="btn btn-primary" onclick="xajax_llenarGridEmpleado(2+':'+xajax.$('dniPersona').value+':'+xajax.$('nomPersona').value+':'+xajax.$('idSituacion').value,0);">Buscar</button>
					  	</div>
					</div>
				</div>

                                <div class="form-group col-md-3">
					<label class="control-label"><span class='label-red'>*</span>Situación</label>
					<div class="input-group mb-3">
					<select id='idSituacion' name='idSituacion' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaSituacion selected=$idSituacion}
					</select>
					  	<div class="input-group-append">
					    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridEmpleado(3+':'+xajax.$('dniPersona').value+':'+xajax.$('nomPersona').value+':'+xajax.$('idSituacion').value,0);">Buscar</button>
					  	</div>				
					</div>
				</div>
			</div>		
		<fieldset>
        <script>xajax_llenarGridEmpleado('','');</script>
<center>
<div id='cantReg' name='cantReg'></div>
<div id='paginacion'></div>
<div id='boxEmpleado' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridEmpleado = new dhtmlXGridObject('boxEmpleado');
                gridEmpleado.setDelimiter('|');
                //gridEmpleado.setHeader('|Imp|Ver|Editar|Id|Documento|Primer Nombre|Segundo Nombre|Apellido Paterno|Apellido Materno|Fecha nac|Teléfono Cel.|);
                gridEmpleado.setHeader('|Imp|Ver|Editar|Id|Documento|Primer Nombre|Segundo Nombre|Apellido Paterno|Apellido Materno|Fecha Nac');
                gridEmpleado.enableColumnAutoSize(true);
                gridEmpleado.setInitWidths('25|60|60|60|60|99|101|130|*|*|150|');
                gridEmpleado.setColAlign('center|center|center|center|right|right|right|right|left|left|center|right');//            
                gridEmpleado.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridEmpleado.setColSorting('str|str|str|str|int|int|int|int|int|int|int');
                gridEmpleado.setImagePath('../../rec/img/grid/');
                gridEmpleado.enableMultiselect(false);
                gridEmpleado.enableLightMouseNavigation(true);
                gridEmpleado.init();
//			   gridEmpleado.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Empleadoid' name='Empleadoid' value='{$Empleadoid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
