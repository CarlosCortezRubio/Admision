<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}PalMagist.js'></script>-->
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
        <script>xajax_llenarGridPalMagist('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxPalMagist' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridPalMagist = new dhtmlXGridObject('boxPalMagist');
                gridPalMagist.setDelimiter('|');
                gridPalMagist.setHeader('|Imp|Ver|Editar|Id|Cod|Nom');
                gridPalMagist.enableColumnAutoSize(true);
                gridPalMagist.setInitWidths('25|60|60|60|92|93|93');
                gridPalMagist.setColAlign('center|center|center|center|right|left|left');
//              gridPalMagist.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPalMagist.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridPalMagist.setColSorting('str|str|str|str|int|str|str');
                gridPalMagist.setImagePath('../../rec/img/grid/');
                gridPalMagist.enableMultiselect(false);
                gridPalMagist.enableLightMouseNavigation(true);
                gridPalMagist.init();
//			   gridPalMagist.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='PalMagistid' name='PalMagistid' value='{$PalMagistid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
