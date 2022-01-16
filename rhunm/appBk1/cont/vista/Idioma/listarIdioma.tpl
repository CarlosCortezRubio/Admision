<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Idioma.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Idioma</h4>
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
        <script>xajax_llenarGridIdioma('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxIdioma' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridIdioma = new dhtmlXGridObject('boxIdioma');
                gridIdioma.setDelimiter('|');
                gridIdioma.setHeader('|Imp|Ver|Editar|Id|Nombre');
                gridIdioma.enableColumnAutoSize(true);
                gridIdioma.setInitWidths('25|60|60|60|92|*');
                gridIdioma.setColAlign('center|center|center|center|right|left');
//              gridIdioma.attachEvent('onRowDblClicked',eliminarCondicion);
                gridIdioma.setColTypes('ro|ro|ro|ro|ro|ro');
                gridIdioma.setColSorting('str|str|str|str|int|str');
                gridIdioma.setImagePath('../../rec/img/grid/');
                gridIdioma.enableMultiselect(false);
                gridIdioma.enableLightMouseNavigation(true);
                gridIdioma.init();
//			   gridIdioma.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Idiomaid' name='Idiomaid' value='{$Idiomaid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
