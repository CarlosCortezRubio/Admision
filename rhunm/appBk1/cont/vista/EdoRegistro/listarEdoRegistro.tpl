<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}EdoRegistro.js'></script>-->
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
        <script>xajax_llenarGridEdoRegistro('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxEdoRegistro' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridEdoRegistro = new dhtmlXGridObject('boxEdoRegistro');
                gridEdoRegistro.setDelimiter('|');
                gridEdoRegistro.setHeader('|Imp|Ver|Editar|Id|Nom|Desc|Grupo');
                gridEdoRegistro.enableColumnAutoSize(true);
                gridEdoRegistro.setInitWidths('25|60|60|60|92|93|94|95');
                gridEdoRegistro.setColAlign('center|center|center|center|right|left|left|right');
//              gridEdoRegistro.attachEvent('onRowDblClicked',eliminarCondicion);
                gridEdoRegistro.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro');
                gridEdoRegistro.setColSorting('str|str|str|str|int|str|str|int');
                gridEdoRegistro.setImagePath('../../rec/img/grid/');
                gridEdoRegistro.enableMultiselect(false);
                gridEdoRegistro.enableLightMouseNavigation(true);
                gridEdoRegistro.init();
//			   gridEdoRegistro.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='EdoRegistroid' name='EdoRegistroid' value='{$EdoRegistroid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
