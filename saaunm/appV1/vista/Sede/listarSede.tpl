<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Sede.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<div class='line-title'>
			<h4>
			Listar Sede
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
        <script>xajax_llenarGridSede('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxSede' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridSede = new dhtmlXGridObject('boxSede');
                gridSede.setDelimiter('|');
                gridSede.setHeader('|Imp|Ver|Editar|Id|Nom');
                gridSede.enableColumnAutoSize(true);
                gridSede.setInitWidths('25|60|60|60|92|93');
                gridSede.setColAlign('center|center|center|center|right|left');
//              gridSede.attachEvent('onRowDblClicked',eliminarCondicion);
                gridSede.setColTypes('ro|ro|ro|ro|ro|ro');
                gridSede.setColSorting('str|str|str|str|int|str');
                gridSede.setImagePath('../../rec/img/grid/');
                gridSede.enableMultiselect(false);
                gridSede.enableLightMouseNavigation(true);
                gridSede.init();
//			   gridSede.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Sedeid' name='Sedeid' value='{$Sedeid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
