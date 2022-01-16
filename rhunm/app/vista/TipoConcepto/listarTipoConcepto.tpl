<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}TipoConcepto.js'></script>-->
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
        <script>xajax_llenarGridTipoConcepto('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxTipoConcepto' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridTipoConcepto = new dhtmlXGridObject('boxTipoConcepto');
                gridTipoConcepto.setDelimiter('|');
                gridTipoConcepto.setHeader('|Imp|Ver|Editar|Id|IdEdoRegistro|Nom|Desc');
                gridTipoConcepto.enableColumnAutoSize(true);
                gridTipoConcepto.setInitWidths('25|60|60|60|92|103|93|94');
                gridTipoConcepto.setColAlign('center|center|center|center|right|right|left|left');
//              gridTipoConcepto.attachEvent('onRowDblClicked',eliminarCondicion);
                gridTipoConcepto.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro');
                gridTipoConcepto.setColSorting('str|str|str|str|int|int|str|str');
                gridTipoConcepto.setImagePath('../../rec/img/grid/');
                gridTipoConcepto.enableMultiselect(false);
                gridTipoConcepto.enableLightMouseNavigation(true);
                gridTipoConcepto.init();
//			   gridTipoConcepto.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='TipoConceptoid' name='TipoConceptoid' value='{$TipoConceptoid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
