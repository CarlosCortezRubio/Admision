<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Asignatura.js'></script>-->
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
        <script>xajax_llenarGridAsignatura('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxAsignatura' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridAsignatura = new dhtmlXGridObject('boxAsignatura');
                gridAsignatura.setDelimiter('|');
                gridAsignatura.setHeader('|Imp|Ver|Editar|Id|IdTipo|IdTipoEvaluac|IDEDOREGISTRO|Cod|Nom|PracLab');
                gridAsignatura.enableColumnAutoSize(true);
                gridAsignatura.setInitWidths('25|60|60|60|92|96|103|103|93|93|97');
                gridAsignatura.setColAlign('center|center|center|center|right|right|right|right|left|left|right');
//              gridAsignatura.attachEvent('onRowDblClicked',eliminarCondicion);
                gridAsignatura.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridAsignatura.setColSorting('str|str|str|str|int|int|int|int|str|str|int');
                gridAsignatura.setImagePath('../../rec/img/grid/');
                gridAsignatura.enableMultiselect(false);
                gridAsignatura.enableLightMouseNavigation(true);
                gridAsignatura.init();
//			   gridAsignatura.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Asignaturaid' name='Asignaturaid' value='{$Asignaturaid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
