<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}TipoPersona.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<input type='hidden' id='opcion' name='opcion'  value='' readonly>
		<div id='errores'>
			{if $error != ''}<div id='msg-error' class='msg-red'>{$error}</div>{/if}
			{if $exito != ''}<div id='msg-exito' class='msg-green'>{$exito}</div>{/if}
			{if $info  != ''}<div id='msg-info' class='msg-blue'>{$info}</div>{/if}
		</div>
			<br>
		<fieldset>
        <script>xajax_llenarGridTipoPersona('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxTipoPersona' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridTipoPersona = new dhtmlXGridObject('boxTipoPersona');
                gridTipoPersona.setDelimiter('|');
                gridTipoPersona.setHeader('|Imp|Ver|Editar|Id|IdEdoRegistro|Nom|Desc');
                gridTipoPersona.enableColumnAutoSize(true);
                gridTipoPersona.setInitWidths('25|60|60|60|92|103|93|94');
                gridTipoPersona.setColAlign('center|center|center|center|right|right|left|left');
//              gridTipoPersona.attachEvent('onRowDblClicked',eliminarCondicion);
                gridTipoPersona.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro');
                gridTipoPersona.setColSorting('str|str|str|str|int|int|str|str');
                gridTipoPersona.setImagePath('../../rec/img/grid/');
                gridTipoPersona.enableMultiselect(false);
                gridTipoPersona.enableLightMouseNavigation(true);
                gridTipoPersona.init();
//			   gridTipoPersona.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='TipoPersonaid' name='TipoPersonaid' value='{$TipoPersonaid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
