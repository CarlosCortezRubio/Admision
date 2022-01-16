<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}NEC.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar NEC</h4>
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
        <script>xajax_llenarGridNEC('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxNEC' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridNEC = new dhtmlXGridObject('boxNEC');
                gridNEC.setDelimiter('|');
                gridNEC.setHeader('|Imp|Ver|Editar|Id|Cod|Nombre');
                gridNEC.enableColumnAutoSize(true);
                gridNEC.setInitWidths('25|60|60|60|92|93|*');
                gridNEC.setColAlign('center|center|center|center|right|left|left');
//              gridNEC.attachEvent('onRowDblClicked',eliminarCondicion);
                gridNEC.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridNEC.setColSorting('str|str|str|str|int|str|str');
                gridNEC.setImagePath('../../rec/img/grid/');
                gridNEC.enableMultiselect(false);
                gridNEC.enableLightMouseNavigation(true);
                gridNEC.init();
//			   gridNEC.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='NECid' name='NECid' value='{$NECid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
