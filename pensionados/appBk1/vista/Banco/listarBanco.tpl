<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Banco.js'></script>-->
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
        <script>xajax_llenarGridBanco('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxBanco' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script> 
                gridBanco = new dhtmlXGridObject('boxBanco');
                gridBanco.setDelimiter('|');
                gridBanco.setHeader('|Imp|Ver|Editar|Nom|Eti|IdEdoRegistro');
                gridBanco.enableColumnAutoSize(true);
                gridBanco.setInitWidths('25|60|60|60|*|*|93');
                gridBanco.setColAlign('center|center|center|center|left|left|center');
//              gridBanco.attachEvent('onRowDblClicked',eliminarCondicion);
                gridBanco.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridBanco.setColSorting('str|str|str|str|int|int|str');
                gridBanco.setImagePath('../../rec/img/grid/');
                gridBanco.enableMultiselect(false);
                gridBanco.enableLightMouseNavigation(true);
                gridBanco.init();
//			   gridBanco.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Bancoid' name='Bancoid' value='{$Bancoid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
