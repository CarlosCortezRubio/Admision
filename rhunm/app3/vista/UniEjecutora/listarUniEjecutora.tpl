<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}UniEjecutora.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Unidad Ejecutora</h4>
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
        <script>xajax_llenarGridUniEjecutora('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxUniEjecutora' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridUniEjecutora = new dhtmlXGridObject('boxUniEjecutora');
                gridUniEjecutora.setDelimiter('|');
                gridUniEjecutora.setHeader('|Imp|Ver|Editar|Id|Cod|Nombre');
                gridUniEjecutora.enableColumnAutoSize(true);
                gridUniEjecutora.setInitWidths('25|60|60|60|92|93|*');
                gridUniEjecutora.setColAlign('center|center|center|center|right|left|left');
//              gridUniEjecutora.attachEvent('onRowDblClicked',eliminarCondicion);
                gridUniEjecutora.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridUniEjecutora.setColSorting('str|str|str|str|int|str|str');
                gridUniEjecutora.setImagePath('../../rec/img/grid/');
                gridUniEjecutora.enableMultiselect(false);
                gridUniEjecutora.enableLightMouseNavigation(true);
                gridUniEjecutora.init();
//			   gridUniEjecutora.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='UniEjecutoraid' name='UniEjecutoraid' value='{$UniEjecutoraid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
