<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Genero.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Género</h4>
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
        <script>xajax_llenarGridGenero('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxGenero' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridGenero = new dhtmlXGridObject('boxGenero');
                gridGenero.setDelimiter('|');
                gridGenero.setHeader('|Imp|Ver|Editar|Id|Nombre');
                gridGenero.enableColumnAutoSize(true);
                gridGenero.setInitWidths('25|60|60|60|92|*');
                gridGenero.setColAlign('center|center|center|center|right|left');
//              gridGenero.attachEvent('onRowDblClicked',eliminarCondicion);
                gridGenero.setColTypes('ro|ro|ro|ro|ro|ro');
                gridGenero.setColSorting('str|str|str|str|int|str');
                gridGenero.setImagePath('../../rec/img/grid/');
                gridGenero.enableMultiselect(false);
                gridGenero.enableLightMouseNavigation(true);
                gridGenero.init();
//			   gridGenero.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Generoid' name='Generoid' value='{$Generoid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
