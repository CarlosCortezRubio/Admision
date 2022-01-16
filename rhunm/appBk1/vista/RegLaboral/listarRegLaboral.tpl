<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}RegLaboral.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Régimen laboral</h4>
		</div>	
		<a id='ancla' href='#'></a>
		<input type='hidden' id='opcion' name='opcion'  value='' readonly>
		<div id='errores'>
			{if $error != ''}<div id='msg-error' class='msg-red'>{$error}</div>{/if}
			{if $exito != ''}<div id='msg-exito' class='msg-green'>{$exito}</div>{/if}
			{if $info  != ''}<div id='msg-info' class='msg-blue'>{$info}</div>{/if}
		</div>
			<br>
		<fieldset>
        <script>xajax_llenarGridRegLaboral('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxRegLaboral' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridRegLaboral = new dhtmlXGridObject('boxRegLaboral');
                gridRegLaboral.setDelimiter('|');
                gridRegLaboral.setHeader('|Imp|Ver|Editar|Id|Cod|Nombre');
                gridRegLaboral.enableColumnAutoSize(true);
                gridRegLaboral.setInitWidths('25|60|60|60|92|93|*');
                gridRegLaboral.setColAlign('center|center|center|center|right|left|left');
//              gridRegLaboral.attachEvent('onRowDblClicked',eliminarCondicion);
                gridRegLaboral.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridRegLaboral.setColSorting('str|str|str|str|int|str|str');
                gridRegLaboral.setImagePath('../../rec/img/grid/');
                gridRegLaboral.enableMultiselect(false);
                gridRegLaboral.enableLightMouseNavigation(true);
                gridRegLaboral.init();
//			   gridRegLaboral.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='RegLaboralid' name='RegLaboralid' value='{$RegLaboralid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
