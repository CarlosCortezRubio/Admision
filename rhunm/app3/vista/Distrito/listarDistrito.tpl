<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Distrito.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Distrito</h4>
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
        <script>xajax_llenarGridDistrito('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxDistrito' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridDistrito = new dhtmlXGridObject('boxDistrito');
                gridDistrito.setDelimiter('|');
                gridDistrito.setHeader('|Imp|Ver|Editar|Id|Provincia|Distrito');
                gridDistrito.enableColumnAutoSize(true);
                gridDistrito.setInitWidths('25|60|60|60|92|101|*');
                gridDistrito.setColAlign('center|center|center|center|right|right|left');
//              gridDistrito.attachEvent('onRowDblClicked',eliminarCondicion);
                gridDistrito.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridDistrito.setColSorting('str|str|str|str|int|int|str');
                gridDistrito.setImagePath('../../rec/img/grid/');
                gridDistrito.enableMultiselect(false);
                gridDistrito.enableLightMouseNavigation(true);
                gridDistrito.init();
//			   gridDistrito.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Distritoid' name='Distritoid' value='{$Distritoid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
