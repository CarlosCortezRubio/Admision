<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}TipoDoc.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Tipo Documento</h4>
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
        <script>xajax_llenarGridTipoDoc('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxTipoDoc' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridTipoDoc = new dhtmlXGridObject('boxTipoDoc');
                gridTipoDoc.setDelimiter('|');
                gridTipoDoc.setHeader('|Imp|Ver|Editar|Id|Nombre');
                gridTipoDoc.enableColumnAutoSize(true);
                gridTipoDoc.setInitWidths('25|60|60|60|92|*');
                gridTipoDoc.setColAlign('center|center|center|center|right|left');
//              gridTipoDoc.attachEvent('onRowDblClicked',eliminarCondicion);
                gridTipoDoc.setColTypes('ro|ro|ro|ro|ro|ro');
                gridTipoDoc.setColSorting('str|str|str|str|int|str');
                gridTipoDoc.setImagePath('../../rec/img/grid/');
                gridTipoDoc.enableMultiselect(false);
                gridTipoDoc.enableLightMouseNavigation(true);
                gridTipoDoc.init();
//			   gridTipoDoc.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='TipoDocid' name='TipoDocid' value='{$TipoDocid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>