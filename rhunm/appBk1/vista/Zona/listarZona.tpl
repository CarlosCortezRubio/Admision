<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Zona.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Zona</h4>
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
        <script>xajax_llenarGridZona('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxZona' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridZona = new dhtmlXGridObject('boxZona');
                gridZona.setDelimiter('|');
                gridZona.setHeader('|Imp|Ver|Editar|Id|Nombre');
                gridZona.enableColumnAutoSize(true);
                gridZona.setInitWidths('25|60|60|60|92|*');
                gridZona.setColAlign('center|center|center|center|right|left');
//              gridZona.attachEvent('onRowDblClicked',eliminarCondicion);
                gridZona.setColTypes('ro|ro|ro|ro|ro|ro');
                gridZona.setColSorting('str|str|str|str|int|str');
                gridZona.setImagePath('../../rec/img/grid/');
                gridZona.enableMultiselect(false);
                gridZona.enableLightMouseNavigation(true);
                gridZona.init();
//			   gridZona.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Zonaid' name='Zonaid' value='{$Zonaid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
