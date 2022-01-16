<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}EdoCivil.js'></script>-->
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
        <script>xajax_llenarGridEdoCivil('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxEdoCivil' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridEdoCivil = new dhtmlXGridObject('boxEdoCivil');
                gridEdoCivil.setDelimiter('|');
                gridEdoCivil.setHeader('|Imp|Ver|Editar|IDEDOCIVIL|NOMEDOCIVIL');
                gridEdoCivil.enableColumnAutoSize(true);
                gridEdoCivil.setInitWidths('25|60|60|60|100|101');
                gridEdoCivil.setColAlign('center|center|center|center|right|left');
//              gridEdoCivil.attachEvent('onRowDblClicked',eliminarCondicion);
                gridEdoCivil.setColTypes('ro|ro|ro|ro|ro|ro');
                gridEdoCivil.setColSorting('str|str|str|str|int|str');
                gridEdoCivil.setImagePath('../../rec/img/grid/');
                gridEdoCivil.enableMultiselect(false);
                gridEdoCivil.enableLightMouseNavigation(true);
                gridEdoCivil.init();
//			   gridEdoCivil.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='EdoCivilid' name='EdoCivilid' value='{$EdoCivilid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
