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
		<fieldset>
        <script>xajax_llenarGridEmpleado('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxEmpleado' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridEmpleado = new dhtmlXGridObject('boxEmpleado');
                gridEmpleado.setDelimiter('|');
                gridEmpleado.setHeader('|Imp|Ver|Editar|Id|IdPersona');
                gridEmpleado.enableColumnAutoSize(true);
                gridEmpleado.setInitWidths('25|60|60|60|92|99');
                gridEmpleado.setColAlign('center|center|center|center|right|right');
//              gridEmpleado.attachEvent('onRowDblClicked',eliminarCondicion);
                gridEmpleado.setColTypes('ro|ro|ro|ro|ro|ro');
                gridEmpleado.setColSorting('str|str|str|str|int|int');
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
