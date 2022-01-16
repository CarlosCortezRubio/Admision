<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Pais.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar País</h4>
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
        <script>xajax_llenarGridPais('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxPais' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridPais = new dhtmlXGridObject('boxPais');
                gridPais.setDelimiter('|');
                gridPais.setHeader('|Imp|Ver|Editar|Id|Nombre');
                gridPais.enableColumnAutoSize(true);
                gridPais.setInitWidths('25|60|60|60|92|*');
                gridPais.setColAlign('center|center|center|center|right|left');
//              gridPais.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPais.setColTypes('ro|ro|ro|ro|ro|ro');
                gridPais.setColSorting('str|str|str|str|int|str');
                gridPais.setImagePath('../../rec/img/grid/');
                gridPais.enableMultiselect(false);
                gridPais.enableLightMouseNavigation(true);
                gridPais.init();
//			   gridPais.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Paisid' name='Paisid' value='{$Paisid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
