<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}planc9.js'></script>-->
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
        <script>xajax_llenarGridPlanc9('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxPlanc9' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridPlanc9 = new dhtmlXGridObject('boxPlanc9');
                gridPlanc9.setDelimiter('|');
                gridPlanc9.setHeader('|Imp|Ver|Editar|NumPlanC9|Ape1PlanC9|Ape2PlanC9|Nom1PlanC9|NacPlanC9|DniPlanC9|FecIngPlanC9|EraDocPlanC9|IncDespPlanC9|GdoAcadPlanC9|MencPlanC9|UnivMayGPlanC9|PaisPlanC9|PreGPlanC9|MaePlanC9|DocPlanC9|SedesClasesPlanC9|CatDocPlanC9|DedDocPlanC9|ClasesPlanC9|OtrasActPlanC9|TotHorSemPlanC9|RzaInvPlanC9|EnDinaPlanC9|PerAcadPlanC9|ComPlanC9');
                gridPlanc9.enableColumnAutoSize(true);
                gridPlanc9.setInitWidths('25|60|60|60|99|100|100|100|99|99|102|102|103|103|100|104|100|100|99|99|107|102|102|102|104|105|102|102|103|99');
                gridPlanc9.setColAlign('center|center|center|center|right|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left');
//              gridPlanc9.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPlanc9.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridPlanc9.setColSorting('str|str|str|str|int|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str');
                gridPlanc9.setImagePath('../../rec/img/grid/');
                gridPlanc9.enableMultiselect(false);
                gridPlanc9.enableLightMouseNavigation(true);
                gridPlanc9.init();
//			   gridPlanc9.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='planc9id' name='planc9id' value='{$planc9id}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
