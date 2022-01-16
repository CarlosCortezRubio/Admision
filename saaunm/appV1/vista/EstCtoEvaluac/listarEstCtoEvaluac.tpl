<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}EstCtoEvaluac.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<div class='line-title'>
			<h4>
			Listar EstCtoEvaluac
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
        <script>xajax_llenarGridEstCtoEvaluac('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxEstCtoEvaluac' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridEstCtoEvaluac = new dhtmlXGridObject('boxEstCtoEvaluac');
                gridEstCtoEvaluac.setDelimiter('|');
                gridEstCtoEvaluac.setHeader('|Imp|Ver|Editar|Id|IdEstudiante|IdCtoEvaluac|Nota');
                gridEstCtoEvaluac.enableColumnAutoSize(true);
                gridEstCtoEvaluac.setInitWidths('25|60|60|60|92|102|102|94');
                gridEstCtoEvaluac.setColAlign('center|center|center|center|right|right|right|right');
//              gridEstCtoEvaluac.attachEvent('onRowDblClicked',eliminarCondicion);
                gridEstCtoEvaluac.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro');
                gridEstCtoEvaluac.setColSorting('str|str|str|str|int|int|int|int');
                gridEstCtoEvaluac.setImagePath('../../rec/img/grid/');
                gridEstCtoEvaluac.enableMultiselect(false);
                gridEstCtoEvaluac.enableLightMouseNavigation(true);
                gridEstCtoEvaluac.init();
//			   gridEstCtoEvaluac.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='EstCtoEvaluacid' name='EstCtoEvaluacid' value='{$EstCtoEvaluacid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
