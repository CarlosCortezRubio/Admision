<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Periodo.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
		<div class='line-title'>
			<h4>Listar Periodo</h4>
		</div>
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
        <script>xajax_llenarGridPeriodo('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxPeriodo' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridPeriodo = new dhtmlXGridObject('boxPeriodo');
                gridPeriodo.setDelimiter('|');
                gridPeriodo.setHeader('|Ver|Editar|Id|Año|Mes|Nom|Edo|Obs');
                gridPeriodo.enableColumnAutoSize(true);
                gridPeriodo.setInitWidths('25|60|60|92|94|93|120|93|*');
                gridPeriodo.setColAlign('center|center|center|center|center|center|left|center|left');
//              gridPeriodo.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPeriodo.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridPeriodo.setColSorting('str|str|str|int|int|int|str|int|str');
                gridPeriodo.setImagePath('../../rec/img/grid/');
                gridPeriodo.enableMultiselect(false);
                gridPeriodo.enableLightMouseNavigation(true);
                gridPeriodo.init();
//			   gridPeriodo.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Periodoid' name='Periodoid' value='{$Periodoid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
