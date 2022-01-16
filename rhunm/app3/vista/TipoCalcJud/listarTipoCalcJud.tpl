<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}TipoCalcJud.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Tipo Cálculo Judicial</h4>
		</div>	
		<a id='ancla' href='#'></a>
		<input type='hidden' id='opcion' name='opcion'  value='' readonly>
		<div id='errores'>
			{if $error != ''}<div id='msg-error' class='msg-red'>{$error}</div>{/if}
			{if $exito != ''}<div id='msg-exito' class='msg-green'>{$exito}</div>{/if}
			{if $info  != ''}<div id='msg-info' class='msg-blue'>{$info}</div>{/if}
		</div>
			<br>
		<fieldset>
        <script>xajax_llenarGridTipoCalcJud('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxTipoCalcJud' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridTipoCalcJud = new dhtmlXGridObject('boxTipoCalcJud');
                gridTipoCalcJud.setDelimiter('|');
                gridTipoCalcJud.setHeader('|Imp|Ver|Editar|Id|Cod|Nombre');
                gridTipoCalcJud.enableColumnAutoSize(true);
                gridTipoCalcJud.setInitWidths('25|60|60|60|92|93|*');
                gridTipoCalcJud.setColAlign('center|center|center|center|right|left|left');
//              gridTipoCalcJud.attachEvent('onRowDblClicked',eliminarCondicion);
                gridTipoCalcJud.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridTipoCalcJud.setColSorting('str|str|str|str|int|str|str');
                gridTipoCalcJud.setImagePath('../../rec/img/grid/');
                gridTipoCalcJud.enableMultiselect(false);
                gridTipoCalcJud.enableLightMouseNavigation(true);
                gridTipoCalcJud.init();
//			   gridTipoCalcJud.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='TipoCalcJudid' name='TipoCalcJudid' value='{$TipoCalcJudid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
