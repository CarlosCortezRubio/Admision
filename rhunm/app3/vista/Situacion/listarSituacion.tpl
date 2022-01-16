<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Situacion.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Situación</h4>
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
        <script>xajax_llenarGridSituacion('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxSituacion' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridSituacion = new dhtmlXGridObject('boxSituacion');
                gridSituacion.setDelimiter('|');
                gridSituacion.setHeader('|Imp|Ver|Editar|Id|Cod|Nombre');
                gridSituacion.enableColumnAutoSize(true);
                gridSituacion.setInitWidths('25|60|60|60|92|93|*');
                gridSituacion.setColAlign('center|center|center|center|right|left|left');
//              gridSituacion.attachEvent('onRowDblClicked',eliminarCondicion);
                gridSituacion.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridSituacion.setColSorting('str|str|str|str|int|str|str');
                gridSituacion.setImagePath('../../rec/img/grid/');
                gridSituacion.enableMultiselect(false);
                gridSituacion.enableLightMouseNavigation(true);
                gridSituacion.init();
//			   gridSituacion.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Situacionid' name='Situacionid' value='{$Situacionid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
