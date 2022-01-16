<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}TipRegistro.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Tipo Registro</h4>
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
        <script>xajax_llenarGridTipRegistro('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxTipRegistro' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridTipRegistro = new dhtmlXGridObject('boxTipRegistro');
                gridTipRegistro.setDelimiter('|');
                gridTipRegistro.setHeader('|Imp|Ver|Editar|Id|Nombre');
                gridTipRegistro.enableColumnAutoSize(true);
                gridTipRegistro.setInitWidths('25|60|60|60|92|*');
                gridTipRegistro.setColAlign('center|center|center|center|right|left');
//              gridTipRegistro.attachEvent('onRowDblClicked',eliminarCondicion);
                gridTipRegistro.setColTypes('ro|ro|ro|ro|ro|ro');
                gridTipRegistro.setColSorting('str|str|str|str|int|str');
                gridTipRegistro.setImagePath('../../rec/img/grid/');
                gridTipRegistro.enableMultiselect(false);
                gridTipRegistro.enableLightMouseNavigation(true);
                gridTipRegistro.init();
//			   gridTipRegistro.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='TipRegistroid' name='TipRegistroid' value='{$TipRegistroid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
