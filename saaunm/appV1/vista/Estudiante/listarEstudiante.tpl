<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Estudiante.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<div class='line-title'>
			<h4>
			Listar Estudiante
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
        <script>xajax_llenarGridEstudiante('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxEstudiante' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridEstudiante = new dhtmlXGridObject('boxEstudiante');
                gridEstudiante.setDelimiter('|');
                gridEstudiante.setHeader('|Imp|Ver|Editar|Id|IdEdoRegistro');
                gridEstudiante.enableColumnAutoSize(true);
                gridEstudiante.setInitWidths('25|60|60|60|92|103');
                gridEstudiante.setColAlign('center|center|center|center|right|right');
//              gridEstudiante.attachEvent('onRowDblClicked',eliminarCondicion);
                gridEstudiante.setColTypes('ro|ro|ro|ro|ro|ro');
                gridEstudiante.setColSorting('str|str|str|str|int|int');
                gridEstudiante.setImagePath('../../rec/img/grid/');
                gridEstudiante.enableMultiselect(false);
                gridEstudiante.enableLightMouseNavigation(true);
                gridEstudiante.init();
//			   gridEstudiante.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Estudianteid' name='Estudianteid' value='{$Estudianteid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
