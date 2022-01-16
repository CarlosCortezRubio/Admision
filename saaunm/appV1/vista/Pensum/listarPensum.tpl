<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Pensum.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<div class='line-title'>
			<h4>
			Listar Pensum
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
        <script>xajax_llenarGridPensum('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxPensum' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridPensum = new dhtmlXGridObject('boxPensum');
                gridPensum.setDelimiter('|');
                gridPensum.setHeader('|Imp|Ver|Editar|Id|Estado|Nombre');
                gridPensum.enableColumnAutoSize(true);
                gridPensum.setInitWidths('25|60|60|60|92|103|*');
                gridPensum.setColAlign('center|center|center|center|right|right|left');
//              gridPensum.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPensum.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridPensum.setColSorting('str|str|str|str|int|int|str');
                gridPensum.setImagePath('../../rec/img/grid/');
                gridPensum.enableMultiselect(false);
                gridPensum.enableLightMouseNavigation(true);
                gridPensum.init();
//			   gridPensum.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Pensumid' name='Pensumid' value='{$Pensumid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
