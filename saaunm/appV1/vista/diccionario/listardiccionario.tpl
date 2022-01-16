<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}diccionario.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<div class='line-title'>
			<h4>
			Listar Diccionario
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
        <script>xajax_llenarGridDiccionario('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxDiccionario' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridDiccionario = new dhtmlXGridObject('boxDiccionario');
                gridDiccionario.setDelimiter('|');
                gridDiccionario.setHeader('|Imp|Ver|Editar|Id|Nombretabla|Nombremsgtabla|Generotabla|Nombrecampo|Nombrecortocampo|Descripcioncampo|Tipocampo|Tamcampo|Ordencampo|Precisioncampo|Dominio|Cjtovalores|Archivosec|Ncolumnas|Colenlace|Campoact|Sqlgrid|Camposbusqueda|Campoconsulta|Campovalido|Crearmetodo');
                gridDiccionario.enableColumnAutoSize(true);
                gridDiccionario.setInitWidths('25|60|60|60|92|101|104|101|101|106|106|99|98|100|104|97|101|100|99|99|98|97|104|103|101|101');
                gridDiccionario.setColAlign('center|center|center|center|right|left|left|right|left|left|left|left|right|right|right|left|left|left|right|left|right|left|left|right|right|right');
//              gridDiccionario.attachEvent('onRowDblClicked',eliminarCondicion);
                gridDiccionario.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridDiccionario.setColSorting('str|str|str|str|int|str|str|int|str|str|str|str|int|int|int|str|str|str|int|str|int|str|str|int|int|int');
                gridDiccionario.setImagePath('../../rec/img/grid/');
                gridDiccionario.enableMultiselect(false);
                gridDiccionario.enableLightMouseNavigation(true);
                gridDiccionario.init();
//			   gridDiccionario.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='diccionarioid' name='diccionarioid' value='{$diccionarioid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
