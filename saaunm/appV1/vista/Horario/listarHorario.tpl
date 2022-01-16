<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Horario.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<div class='line-title'>
			<h4>
			Listar Horario
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
        <script>xajax_llenarGridHorario('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxHorario' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridHorario = new dhtmlXGridObject('boxHorario');
                gridHorario.setDelimiter('|');
                gridHorario.setHeader('|Imp|Ver|Editar|Id|IdDia|IdAula|IdCurso|HorIni|HorFin');
                gridHorario.enableColumnAutoSize(true);
                gridHorario.setInitWidths('25|60|60|60|92|95|96|97|96|96');
                gridHorario.setColAlign('center|center|center|center|right|right|right|right|left|left');
//              gridHorario.attachEvent('onRowDblClicked',eliminarCondicion);
                gridHorario.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridHorario.setColSorting('str|str|str|str|int|int|int|int|str|str');
                gridHorario.setImagePath('../../rec/img/grid/');
                gridHorario.enableMultiselect(false);
                gridHorario.enableLightMouseNavigation(true);
                gridHorario.init();
//			   gridHorario.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Horarioid' name='Horarioid' value='{$Horarioid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
