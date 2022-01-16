<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}PenAsig.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<div class='line-title'>
			<h4>
			Listar PenAsig
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
        <script>xajax_llenarGridPenAsig('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxPenAsig' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridPenAsig = new dhtmlXGridObject('boxPenAsig');
                gridPenAsig.setDelimiter('|');
                gridPenAsig.setHeader('|Imp|Ver|Editar|Id|IdPensum|IdAsignatura|IdCiclo|Credito|IhSem|IhTot|EvalParaCerrar');
                gridPenAsig.enableColumnAutoSize(true);
                gridPenAsig.setInitWidths('25|60|60|60|92|98|102|97|97|95|95|104');
                gridPenAsig.setColAlign('center|center|center|center|right|right|right|right|right|right|right|right');
//              gridPenAsig.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPenAsig.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridPenAsig.setColSorting('str|str|str|str|int|int|int|int|int|int|int|int');
                gridPenAsig.setImagePath('../../rec/img/grid/');
                gridPenAsig.enableMultiselect(false);
                gridPenAsig.enableLightMouseNavigation(true);
                gridPenAsig.init();
//			   gridPenAsig.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='PenAsigid' name='PenAsigid' value='{$PenAsigid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
