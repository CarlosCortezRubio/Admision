<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Curso.js'></script>-->
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
        <script>xajax_llenarGridCurso('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxCurso' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridCurso = new dhtmlXGridObject('boxCurso');
                gridCurso.setDelimiter('|');
                gridCurso.setHeader('|Imp|Ver|Editar|Id|IdEmpleado|IdSede|IdProgEstudio|IdPensum|IdAsignatura|IdPeriodo|Cod|Nom|CupMax|FecIni|FecFin');
                gridCurso.enableColumnAutoSize(true);
                gridCurso.setInitWidths('25|60|60|60|92|100|96|103|98|102|99|93|93|96|96|96');
                gridCurso.setColAlign('center|center|center|center|right|right|right|right|right|right|right|left|left|right|right|right');
//              gridCurso.attachEvent('onRowDblClicked',eliminarCondicion);
                gridCurso.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridCurso.setColSorting('str|str|str|str|int|int|int|int|int|int|int|str|str|int|int|int');
                gridCurso.setImagePath('../../rec/img/grid/');
                gridCurso.enableMultiselect(false);
                gridCurso.enableLightMouseNavigation(true);
                gridCurso.init();
//			   gridCurso.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Cursoid' name='Cursoid' value='{$Cursoid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
