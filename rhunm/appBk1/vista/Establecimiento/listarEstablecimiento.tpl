<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Establecimiento.js'></script>-->
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
        <script>xajax_llenarGridEstablecimiento('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxEstablecimiento' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridEstablecimiento = new dhtmlXGridObject('boxEstablecimiento');
                gridEstablecimiento.setDelimiter('|');
                gridEstablecimiento.setHeader('|Imp|Ver|Editar|Id|Cod|Nom');
                gridEstablecimiento.enableColumnAutoSize(true);
                gridEstablecimiento.setInitWidths('25|60|60|60|92|93|93');
                gridEstablecimiento.setColAlign('center|center|center|center|right|left|left');
//              gridEstablecimiento.attachEvent('onRowDblClicked',eliminarCondicion);
                gridEstablecimiento.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridEstablecimiento.setColSorting('str|str|str|str|int|str|str');
                gridEstablecimiento.setImagePath('../../rec/img/grid/');
                gridEstablecimiento.enableMultiselect(false);
                gridEstablecimiento.enableLightMouseNavigation(true);
                gridEstablecimiento.init();
//			   gridEstablecimiento.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Establecimientoid' name='Establecimientoid' value='{$Establecimientoid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
