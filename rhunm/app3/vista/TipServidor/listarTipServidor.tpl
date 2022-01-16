<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}TipServidor.js'></script>-->
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
        <script>xajax_llenarGridTipServidor('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxTipServidor' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridTipServidor = new dhtmlXGridObject('boxTipServidor');
                gridTipServidor.setDelimiter('|');
                gridTipServidor.setHeader('|Imp|Ver|Editar|Id|Cod|Nom');
                gridTipServidor.enableColumnAutoSize(true);
                gridTipServidor.setInitWidths('25|60|60|60|92|93|93');
                gridTipServidor.setColAlign('center|center|center|center|right|left|left');
//              gridTipServidor.attachEvent('onRowDblClicked',eliminarCondicion);
                gridTipServidor.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridTipServidor.setColSorting('str|str|str|str|int|str|str');
                gridTipServidor.setImagePath('../../rec/img/grid/');
                gridTipServidor.enableMultiselect(false);
                gridTipServidor.enableLightMouseNavigation(true);
                gridTipServidor.init();
//			   gridTipServidor.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='TipServidorid' name='TipServidorid' value='{$TipServidorid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
