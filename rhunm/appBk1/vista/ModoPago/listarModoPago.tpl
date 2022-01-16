<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}ModoPago.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Modo de Pago</h4>
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
        <script>xajax_llenarGridModoPago('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxModoPago' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridModoPago = new dhtmlXGridObject('boxModoPago');
                gridModoPago.setDelimiter('|');
                gridModoPago.setHeader('|Imp|Ver|Editar|Id|Código|Nombres');
                gridModoPago.enableColumnAutoSize(true);
                gridModoPago.setInitWidths('25|60|60|60|92|93|*');
                gridModoPago.setColAlign('center|center|center|center|right|left|left');
//              gridModoPago.attachEvent('onRowDblClicked',eliminarCondicion);
                gridModoPago.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridModoPago.setColSorting('str|str|str|str|int|str|str');
                gridModoPago.setImagePath('../../rec/img/grid/');
                gridModoPago.enableMultiselect(false);
                gridModoPago.enableLightMouseNavigation(true);
                gridModoPago.init();
//			   gridModoPago.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='ModoPagoid' name='ModoPagoid' value='{$ModoPagoid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
