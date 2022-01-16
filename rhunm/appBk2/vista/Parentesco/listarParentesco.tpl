<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Parentesco.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Parentesco</h4>
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
        <script>xajax_llenarGridParentesco('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxParentesco' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridParentesco = new dhtmlXGridObject('boxParentesco');
                gridParentesco.setDelimiter('|');
                gridParentesco.setHeader('|Imp|Ver|Editar|Id|Cod|Nombre');
                gridParentesco.enableColumnAutoSize(true);
                gridParentesco.setInitWidths('25|60|60|60|92|93|*');
                gridParentesco.setColAlign('center|center|center|center|right|left|left');
//              gridParentesco.attachEvent('onRowDblClicked',eliminarCondicion);
                gridParentesco.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridParentesco.setColSorting('str|str|str|str|int|str|str');
                gridParentesco.setImagePath('../../rec/img/grid/');
                gridParentesco.enableMultiselect(false);
                gridParentesco.enableLightMouseNavigation(true);
                gridParentesco.init();
//			   gridParentesco.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Parentescoid' name='Parentescoid' value='{$Parentescoid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
