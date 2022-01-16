<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Via.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Vía</h4>
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
        <script>xajax_llenarGridVia('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxVia' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridVia = new dhtmlXGridObject('boxVia');
                gridVia.setDelimiter('|');
                gridVia.setHeader('|Imp|Ver|Editar|Id|Nombre');
                gridVia.enableColumnAutoSize(true);
                gridVia.setInitWidths('25|60|60|60|92|*');
                gridVia.setColAlign('center|center|center|center|right|left');
//              gridVia.attachEvent('onRowDblClicked',eliminarCondicion);
                gridVia.setColTypes('ro|ro|ro|ro|ro|ro');
                gridVia.setColSorting('str|str|str|str|int|str');
                gridVia.setImagePath('../../rec/img/grid/');
                gridVia.enableMultiselect(false);
                gridVia.enableLightMouseNavigation(true);
                gridVia.init();
//			   gridVia.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Viaid' name='Viaid' value='{$Viaid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
