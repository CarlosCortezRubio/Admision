<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Nivel.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Nivel</h4>
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
        <script>xajax_llenarGridNivel('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxNivel' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridNivel = new dhtmlXGridObject('boxNivel');
                gridNivel.setDelimiter('|');
                gridNivel.setHeader('|Imp|Ver|Editar|Id|Cod|Nombre');
                gridNivel.enableColumnAutoSize(true);
                gridNivel.setInitWidths('25|60|60|60|92|93|*');
                gridNivel.setColAlign('center|center|center|center|right|left|left');
//              gridNivel.attachEvent('onRowDblClicked',eliminarCondicion);
                gridNivel.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridNivel.setColSorting('str|str|str|str|int|str|str');
                gridNivel.setImagePath('../../rec/img/grid/');
                gridNivel.enableMultiselect(false);
                gridNivel.enableLightMouseNavigation(true);
                gridNivel.init();
//			   gridNivel.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Nivelid' name='Nivelid' value='{$Nivelid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
