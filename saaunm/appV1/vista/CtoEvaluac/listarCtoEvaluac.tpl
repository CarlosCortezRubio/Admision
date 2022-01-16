<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}CtoEvaluac.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<div class='line-title'>
			<h4>
			Listar CtoEvaluac
			</h4>
		</div>
		<input type='hidden' id='opcion' name='opcion'  value='' readonly>
		<div id='errores'>
			{if $error != ''}<div id='msg-error' class='msg-red'>{$error}</div>{/if}
			{if $exito != ''}<div id='msg-exito' class='msg-green'>{$exito}</div>{/if}
			{if $info  != ''}<div id='msg-info' class='msg-blue'>{$info}</div>{/if}
		</div>
			<br>
		<fieldset>
        <script>xajax_llenarGridCtoEvaluac('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxCtoEvaluac' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridCtoEvaluac = new dhtmlXGridObject('boxCtoEvaluac');
                gridCtoEvaluac.setDelimiter('|');
                gridCtoEvaluac.setHeader('|Imp|Ver|Editar|Id|IdCurso|Nom|Desc|NumEva');
                gridCtoEvaluac.enableColumnAutoSize(true);
                gridCtoEvaluac.setInitWidths('25|60|60|60|92|97|93|94|96');
                gridCtoEvaluac.setColAlign('center|center|center|center|right|right|left|left|right');
//              gridCtoEvaluac.attachEvent('onRowDblClicked',eliminarCondicion);
                gridCtoEvaluac.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridCtoEvaluac.setColSorting('str|str|str|str|int|int|str|str|int');
                gridCtoEvaluac.setImagePath('../../rec/img/grid/');
                gridCtoEvaluac.enableMultiselect(false);
                gridCtoEvaluac.enableLightMouseNavigation(true);
                gridCtoEvaluac.init();
//			   gridCtoEvaluac.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='CtoEvaluacid' name='CtoEvaluacid' value='{$CtoEvaluacid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
