<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Provincia.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Provincia</h4>
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
        <script>xajax_llenarGridProvincia('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxProvincia' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridProvincia = new dhtmlXGridObject('boxProvincia');
                gridProvincia.setDelimiter('|');
                gridProvincia.setHeader('|Imp|Ver|Editar|Id|Departamento|Provincia');
                gridProvincia.enableColumnAutoSize(true);
                gridProvincia.setInitWidths('25|60|60|60|92|104|*');
                gridProvincia.setColAlign('center|center|center|center|right|right|left');
//              gridProvincia.attachEvent('onRowDblClicked',eliminarCondicion);
                gridProvincia.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridProvincia.setColSorting('str|str|str|str|int|int|str');
                gridProvincia.setImagePath('../../rec/img/grid/');
                gridProvincia.enableMultiselect(false);
                gridProvincia.enableLightMouseNavigation(true);
                gridProvincia.init();
//			   gridProvincia.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Provinciaid' name='Provinciaid' value='{$Provinciaid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
