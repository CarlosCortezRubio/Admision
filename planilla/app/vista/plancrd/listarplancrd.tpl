<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}PlanCrd.js'></script>-->
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
        <script>xajax_llenarGridPlanCrd('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxPlanCrd' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridPlanCrd = new dhtmlXGridObject('boxPlanCrd');
                gridPlanCrd.setDelimiter('|');
                gridPlanCrd.setHeader('|Editar|N°|Apellido Paterno|Apellido Materno|Nombres|Nacionalidad|Dn|Fec. Ingreso');
                gridPlanCrd.enableColumnAutoSize(true);
                gridPlanCrd.setInitWidths('25|60|60|150|150|*|150|100|100|100|103|103|104|104|101|105|101|101|100|100|108|103|103|103|105|106|103|103|104|100');
                gridPlanCrd.setColAlign('center|center|center|right|right|right|right|right|right|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left');
//              gridPlanCrd.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPlanCrd.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridPlanCrd.setColSorting('str|str|str|str|int|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str');
                gridPlanCrd.setImagePath('../../rec/img/grid/');
                gridPlanCrd.enableMultiselect(false);
                gridPlanCrd.enableLightMouseNavigation(true);
                gridPlanCrd.init();
//			   gridPlanCrd.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='PlanCrdid' name='PlanCrdid' value='{$PlanCrdid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
