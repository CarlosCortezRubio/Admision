<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}planillaPensionado.js'></script>-->
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
        <script>xajax_llenarGridPlanillaPensionado('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxPlanillaPensionado' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridPlanillaPensionado = new dhtmlXGridObject('boxPlanillaPensionado');
                gridPlanillaPensionado.setDelimiter('|');
                gridPlanillaPensionado.setHeader('|Imp|Ver|Editar|Id|IdPersona|IdPeriodo|Fec');
                gridPlanillaPensionado.enableColumnAutoSize(true);
                gridPlanillaPensionado.setInitWidths('25|60|60|60|92|99|99|93');
                gridPlanillaPensionado.setColAlign('center|center|center|center|right|right|right|right');
//              gridPlanillaPensionado.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPlanillaPensionado.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro');
                gridPlanillaPensionado.setColSorting('str|str|str|str|int|int|int|int');
                gridPlanillaPensionado.setImagePath('../../rec/img/grid/');
                gridPlanillaPensionado.enableMultiselect(false);
                gridPlanillaPensionado.enableLightMouseNavigation(true);
                gridPlanillaPensionado.init();
//			   gridPlanillaPensionado.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='planillaPensionadoid' name='planillaPensionadoid' value='{$planillaPensionadoid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
