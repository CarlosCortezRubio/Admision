<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}EstCur.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<div class='line-title'>
			<h4>
			Listar Calificaciones
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
        <script>xajax_llenarGridEstCur('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxEstCur' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridEstCur = new dhtmlXGridObject('boxEstCur');
                gridEstCur.setDelimiter('|');
                gridEstCur.setHeader('|Imp|Ver|Editar|Id|IdCurso|IdEstudiante|Nota|Inasist|Obs');
                gridEstCur.enableColumnAutoSize(true);
                gridEstCur.setInitWidths('25|60|60|60|92|97|102|94|97|93');
                gridEstCur.setColAlign('center|center|center|center|right|right|right|right|right|left');
//              gridEstCur.attachEvent('onRowDblClicked',eliminarCondicion);
                gridEstCur.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridEstCur.setColSorting('str|str|str|str|int|int|int|int|int|str');
                gridEstCur.setImagePath('../../rec/img/grid/');
                gridEstCur.enableMultiselect(false);
                gridEstCur.enableLightMouseNavigation(true);
                gridEstCur.init();
//			   gridEstCur.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='EstCurid' name='EstCurid' value='{$EstCurid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
