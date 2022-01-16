<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}NumMagist.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Número Magisterio</h4>
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
        <script>xajax_llenarGridNumMagist('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxNumMagist' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridNumMagist = new dhtmlXGridObject('boxNumMagist');
                gridNumMagist.setDelimiter('|');
                gridNumMagist.setHeader('|Imp|Ver|Editar|Id|Cod|Nombre');
                gridNumMagist.enableColumnAutoSize(true);
                gridNumMagist.setInitWidths('25|60|60|60|92|93|*');
                gridNumMagist.setColAlign('center|center|center|center|right|left|left');
//              gridNumMagist.attachEvent('onRowDblClicked',eliminarCondicion);
                gridNumMagist.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridNumMagist.setColSorting('str|str|str|str|int|str|str');
                gridNumMagist.setImagePath('../../rec/img/grid/');
                gridNumMagist.enableMultiselect(false);
                gridNumMagist.enableLightMouseNavigation(true);
                gridNumMagist.init();
//			   gridNumMagist.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='NumMagistid' name='NumMagistid' value='{$NumMagistid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
