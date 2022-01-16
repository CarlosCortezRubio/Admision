<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}TipoPlanilla.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Tipo Planilla</h4>
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
        <script>xajax_llenarGridTipoPlanilla('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxTipoPlanilla' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridTipoPlanilla = new dhtmlXGridObject('boxTipoPlanilla');
                gridTipoPlanilla.setDelimiter('|');
                gridTipoPlanilla.setHeader('|Imp|Ver|Editar|Id|Nombre');
                gridTipoPlanilla.enableColumnAutoSize(true);
                gridTipoPlanilla.setInitWidths('25|60|60|60|92|*');
                gridTipoPlanilla.setColAlign('center|center|center|center|right|left');
//              gridTipoPlanilla.attachEvent('onRowDblClicked',eliminarCondicion);
                gridTipoPlanilla.setColTypes('ro|ro|ro|ro|ro|ro');
                gridTipoPlanilla.setColSorting('str|str|str|str|int|str');
                gridTipoPlanilla.setImagePath('../../rec/img/grid/');
                gridTipoPlanilla.enableMultiselect(false);
                gridTipoPlanilla.enableLightMouseNavigation(true);
                gridTipoPlanilla.init();
//			   gridTipoPlanilla.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='TipoPlanillaid' name='TipoPlanillaid' value='{$TipoPlanillaid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
