<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}ConcPlanilla.js'></script>-->
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
        <script>xajax_llenarGridConcPlanilla('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxConcPlanilla' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridConcPlanilla = new dhtmlXGridObject('boxConcPlanilla');
                gridConcPlanilla.setDelimiter('|');
                gridConcPlanilla.setHeader('|Imp|Ver|Editar|Id|IdConceptos|IdplanillaPensionado|Mnt');
                gridConcPlanilla.enableColumnAutoSize(true);
                gridConcPlanilla.setInitWidths('25|60|60|60|92|101|110|93');
                gridConcPlanilla.setColAlign('center|center|center|center|right|right|right|right');
//              gridConcPlanilla.attachEvent('onRowDblClicked',eliminarCondicion);
                gridConcPlanilla.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro');
                gridConcPlanilla.setColSorting('str|str|str|str|int|int|int|int');
                gridConcPlanilla.setImagePath('../../rec/img/grid/');
                gridConcPlanilla.enableMultiselect(false);
                gridConcPlanilla.enableLightMouseNavigation(true);
                gridConcPlanilla.init();
//			   gridConcPlanilla.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='ConcPlanillaid' name='ConcPlanillaid' value='{$ConcPlanillaid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
