<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Aula.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<div class='line-title'>
			<h4>
			Listar Aula
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
        <script>xajax_llenarGridAula('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxAula' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridAula = new dhtmlXGridObject('boxAula');
                gridAula.setDelimiter('|');
                gridAula.setHeader('|Imp|Ver|Editar|Id|IdSede|Cod|Nom|Desc');
                gridAula.enableColumnAutoSize(true);
                gridAula.setInitWidths('25|60|60|60|92|96|93|93|94');
                gridAula.setColAlign('center|center|center|center|right|right|left|left|left');
//              gridAula.attachEvent('onRowDblClicked',eliminarCondicion);
                gridAula.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridAula.setColSorting('str|str|str|str|int|int|str|str|str');
                gridAula.setImagePath('../../rec/img/grid/');
                gridAula.enableMultiselect(false);
                gridAula.enableLightMouseNavigation(true);
                gridAula.init();
//			   gridAula.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Aulaid' name='Aulaid' value='{$Aulaid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
