<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}TipoEvaluac.js'></script>-->
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
        <script>xajax_llenarGridTipoEvaluac('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxTipoEvaluac' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridTipoEvaluac = new dhtmlXGridObject('boxTipoEvaluac');
                gridTipoEvaluac.setDelimiter('|');
                gridTipoEvaluac.setHeader('|Imp|Ver|Editar|Id|Nom');
                gridTipoEvaluac.enableColumnAutoSize(true);
                gridTipoEvaluac.setInitWidths('25|60|60|60|92|93');
                gridTipoEvaluac.setColAlign('center|center|center|center|right|left');
//              gridTipoEvaluac.attachEvent('onRowDblClicked',eliminarCondicion);
                gridTipoEvaluac.setColTypes('ro|ro|ro|ro|ro|ro');
                gridTipoEvaluac.setColSorting('str|str|str|str|int|str');
                gridTipoEvaluac.setImagePath('../../rec/img/grid/');
                gridTipoEvaluac.enableMultiselect(false);
                gridTipoEvaluac.enableLightMouseNavigation(true);
                gridTipoEvaluac.init();
//			   gridTipoEvaluac.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='TipoEvaluacid' name='TipoEvaluacid' value='{$TipoEvaluacid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
