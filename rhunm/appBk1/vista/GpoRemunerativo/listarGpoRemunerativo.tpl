<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}GpoRemunerativo.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Grupo Remunerativo</h4>
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
        <script>xajax_llenarGridGpoRemunerativo('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxGpoRemunerativo' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridGpoRemunerativo = new dhtmlXGridObject('boxGpoRemunerativo');
                gridGpoRemunerativo.setDelimiter('|');
                gridGpoRemunerativo.setHeader('|Imp|Ver|Editar|Id|Cod|Nombre');
                gridGpoRemunerativo.enableColumnAutoSize(true);
                gridGpoRemunerativo.setInitWidths('25|60|60|60|92|93|*');
                gridGpoRemunerativo.setColAlign('center|center|center|center|right|left|left');
//              gridGpoRemunerativo.attachEvent('onRowDblClicked',eliminarCondicion);
                gridGpoRemunerativo.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridGpoRemunerativo.setColSorting('str|str|str|str|int|str|str');
                gridGpoRemunerativo.setImagePath('../../rec/img/grid/');
                gridGpoRemunerativo.enableMultiselect(false);
                gridGpoRemunerativo.enableLightMouseNavigation(true);
                gridGpoRemunerativo.init();
//			   gridGpoRemunerativo.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='GpoRemunerativoid' name='GpoRemunerativoid' value='{$GpoRemunerativoid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
