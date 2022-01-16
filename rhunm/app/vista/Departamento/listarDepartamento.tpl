<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Departamento.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Departamento</h4>
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
        <script>xajax_llenarGridDepartamento('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxDepartamento' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridDepartamento = new dhtmlXGridObject('boxDepartamento');
                gridDepartamento.setDelimiter('|');
                gridDepartamento.setHeader('|Imp|Ver|Editar|Id|Pais|Departamento');
                gridDepartamento.enableColumnAutoSize(true);
                gridDepartamento.setInitWidths('25|60|60|60|92|96|*');
                gridDepartamento.setColAlign('center|center|center|center|right|right|left');
//              gridDepartamento.attachEvent('onRowDblClicked',eliminarCondicion);
                gridDepartamento.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridDepartamento.setColSorting('str|str|str|str|int|int|str');
                gridDepartamento.setImagePath('../../rec/img/grid/');
                gridDepartamento.enableMultiselect(false);
                gridDepartamento.enableLightMouseNavigation(true);
                gridDepartamento.init();
//			   gridDepartamento.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Departamentoid' name='Departamentoid' value='{$Departamentoid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
