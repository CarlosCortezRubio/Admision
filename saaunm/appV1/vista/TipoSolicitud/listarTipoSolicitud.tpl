<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}TipoSolicitud.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<div class='line-title'>
			<h4>
			Listar TipoSolicitud
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
        <script>xajax_llenarGridTipoSolicitud('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxTipoSolicitud' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridTipoSolicitud = new dhtmlXGridObject('boxTipoSolicitud');
                gridTipoSolicitud.setDelimiter('|');
                gridTipoSolicitud.setHeader('|Imp|Ver|Editar|Id|Sol|FecIni|Seg');
                gridTipoSolicitud.enableColumnAutoSize(true);
                gridTipoSolicitud.setInitWidths('25|60|60|60|92|93|96|93');
                gridTipoSolicitud.setColAlign('center|center|center|center|right|left|left|left');
//              gridTipoSolicitud.attachEvent('onRowDblClicked',eliminarCondicion);
                gridTipoSolicitud.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro');
                gridTipoSolicitud.setColSorting('str|str|str|str|int|str|str|str');
                gridTipoSolicitud.setImagePath('../../rec/img/grid/');
                gridTipoSolicitud.enableMultiselect(false);
                gridTipoSolicitud.enableLightMouseNavigation(true);
                gridTipoSolicitud.init();
//			   gridTipoSolicitud.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='TipoSolicitudid' name='TipoSolicitudid' value='{$TipoSolicitudid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
