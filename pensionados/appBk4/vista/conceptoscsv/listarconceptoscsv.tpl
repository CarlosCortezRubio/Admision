<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}conceptoscsv.js'></script>-->
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
        <script>xajax_llenarGridConceptoscsv('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxConceptoscsv' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridConceptoscsv = new dhtmlXGridObject('boxConceptoscsv');
                gridConceptoscsv.setDelimiter('|');
                gridConceptoscsv.setHeader('|Imp|Ver|Editar|');
                gridConceptoscsv.enableColumnAutoSize(true);
                gridConceptoscsv.setInitWidths('25|60|60|60|');
                gridConceptoscsv.setColAlign('center|center|center|center|');
//              gridConceptoscsv.attachEvent('onRowDblClicked',eliminarCondicion);
                gridConceptoscsv.setColTypes('ro|ro|ro|ro|');
                gridConceptoscsv.setColSorting('str|str|str|str|');
                gridConceptoscsv.setImagePath('../../rec/img/grid/');
                gridConceptoscsv.enableMultiselect(false);
                gridConceptoscsv.enableLightMouseNavigation(true);
                gridConceptoscsv.init();
//			   gridConceptoscsv.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='conceptoscsvid' name='conceptoscsvid' value='{$conceptoscsvid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
