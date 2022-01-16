<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}RegionCargo.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Región cargo</h4>
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
        <script>xajax_llenarGridRegionCargo('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxRegionCargo' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridRegionCargo = new dhtmlXGridObject('boxRegionCargo');
                gridRegionCargo.setDelimiter('|');
                gridRegionCargo.setHeader('|Imp|Ver|Editar|Id|Cod|Nombre');
                gridRegionCargo.enableColumnAutoSize(true);
                gridRegionCargo.setInitWidths('25|60|60|60|92|93|*');
                gridRegionCargo.setColAlign('center|center|center|center|right|left|left');
//              gridRegionCargo.attachEvent('onRowDblClicked',eliminarCondicion);
                gridRegionCargo.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridRegionCargo.setColSorting('str|str|str|str|int|str|str');
                gridRegionCargo.setImagePath('../../rec/img/grid/');
                gridRegionCargo.enableMultiselect(false);
                gridRegionCargo.enableLightMouseNavigation(true);
                gridRegionCargo.init();
//			   gridRegionCargo.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='RegionCargoid' name='RegionCargoid' value='{$RegionCargoid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
