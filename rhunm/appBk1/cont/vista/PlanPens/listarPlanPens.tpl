<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}PlanPens.js'></script>-->
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
        <script>xajax_llenarGridPlanPens('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxPlanPens' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridPlanPens = new dhtmlXGridObject('boxPlanPens');
                gridPlanPens.setDelimiter('|');
                gridPlanPens.setHeader('|Imp|Ver|Editar|Año|Mes|Dni|Apellidos y nombres|Planilla|Contrasena|FecCreacion');
                gridPlanPens.enableColumnAutoSize(true);
                gridPlanPens.setInitWidths('25|60|60|50|50|50|80|*|80|120|110');
                gridPlanPens.setColAlign('center|center|center|center|right|right|right|left|center|center|center');
//              gridPlanPens.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPlanPens.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridPlanPens.setColSorting('str|str|str|str|int|int|int|int|str|str|str');
                gridPlanPens.setImagePath('../../rec/img/grid/');
                gridPlanPens.enableMultiselect(false);
                gridPlanPens.enableLightMouseNavigation(true);
                gridPlanPens.init();
//			   gridPlanPens.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='PlanPensid' name='PlanPensid' value='{$PlanPensid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>
	</form>
</div>
