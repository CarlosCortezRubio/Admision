<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}PrelaAsig.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<div class='line-title'>
			<h4>
			Listar PrelaAsig
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
        <script>xajax_llenarGridPrelaAsig('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxPrelaAsig' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridPrelaAsig = new dhtmlXGridObject('boxPrelaAsig');
                gridPrelaAsig.setDelimiter('|');
                gridPrelaAsig.setHeader('|Imp|Ver|Editar|IdPenAsig|IdAsignatura|Id');
                gridPrelaAsig.enableColumnAutoSize(true);
                gridPrelaAsig.setInitWidths('25|60|60|60|99|102|92');
                gridPrelaAsig.setColAlign('center|center|center|center|right|right|right');
//              gridPrelaAsig.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPrelaAsig.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridPrelaAsig.setColSorting('str|str|str|str|int|int|int');
                gridPrelaAsig.setImagePath('../../rec/img/grid/');
                gridPrelaAsig.enableMultiselect(false);
                gridPrelaAsig.enableLightMouseNavigation(true);
                gridPrelaAsig.init();
//			   gridPrelaAsig.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='PrelaAsigid' name='PrelaAsigid' value='{$PrelaAsigid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
