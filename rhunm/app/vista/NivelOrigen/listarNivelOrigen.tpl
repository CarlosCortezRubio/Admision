<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}NivelOrigen.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Nivel Origen</h4>
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
        <script>xajax_llenarGridNivelOrigen('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxNivelOrigen' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridNivelOrigen = new dhtmlXGridObject('boxNivelOrigen');
                gridNivelOrigen.setDelimiter('|');
                gridNivelOrigen.setHeader('|Imp|Ver|Editar|Id|Cod|Nombre');
                gridNivelOrigen.enableColumnAutoSize(true);
                gridNivelOrigen.setInitWidths('25|60|60|60|92|93|*');
                gridNivelOrigen.setColAlign('center|center|center|center|right|left|left');
//              gridNivelOrigen.attachEvent('onRowDblClicked',eliminarCondicion);
                gridNivelOrigen.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridNivelOrigen.setColSorting('str|str|str|str|int|str|str');
                gridNivelOrigen.setImagePath('../../rec/img/grid/');
                gridNivelOrigen.enableMultiselect(false);
                gridNivelOrigen.enableLightMouseNavigation(true);
                gridNivelOrigen.init();
//			   gridNivelOrigen.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='NivelOrigenid' name='NivelOrigenid' value='{$NivelOrigenid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
