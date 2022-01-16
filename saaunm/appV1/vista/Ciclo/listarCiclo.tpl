<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Ciclo.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<div class='line-title'>
			<h4>
			Listar Ciclo
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
        <script>xajax_llenarGridCiclo('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxCiclo' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridCiclo = new dhtmlXGridObject('boxCiclo');
                gridCiclo.setDelimiter('|');
                gridCiclo.setHeader('|Imp|Ver|Editar|Id|Estado|Nombre|Código');
                gridCiclo.enableColumnAutoSize(true);
                gridCiclo.setInitWidths('25|60|60|60|92|103|*|*');
                gridCiclo.setColAlign('center|center|center|center|right|right|left|left');
//              gridCiclo.attachEvent('onRowDblClicked',eliminarCondicion);
                gridCiclo.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro');
                gridCiclo.setColSorting('str|str|str|str|int|int|str|str');
                gridCiclo.setImagePath('../../rec/img/grid/');
                gridCiclo.enableMultiselect(false);
                gridCiclo.enableLightMouseNavigation(true);
                gridCiclo.init();
//			   gridCiclo.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Cicloid' name='Cicloid' value='{$Cicloid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
