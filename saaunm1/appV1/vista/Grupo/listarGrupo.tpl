<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Grupo.js'></script>-->
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
        <script>xajax_llenarGridGrupo('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxGrupo' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridGrupo = new dhtmlXGridObject('boxGrupo');
                gridGrupo.setDelimiter('|');
                gridGrupo.setHeader('|Imp|Ver|Editar|Id|IdCiclo|IdPensum|IdPeriodo|IdProgEstudio|IdEmpleado|IdSede|Nom|Cod');
                gridGrupo.enableColumnAutoSize(true);
                gridGrupo.setInitWidths('25|60|60|60|92|97|98|99|103|100|96|93|93');
                gridGrupo.setColAlign('center|center|center|center|right|right|right|right|right|right|right|left|left');
//              gridGrupo.attachEvent('onRowDblClicked',eliminarCondicion);
                gridGrupo.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridGrupo.setColSorting('str|str|str|str|int|int|int|int|int|int|int|str|str');
                gridGrupo.setImagePath('../../rec/img/grid/');
                gridGrupo.enableMultiselect(false);
                gridGrupo.enableLightMouseNavigation(true);
                gridGrupo.init();
//			   gridGrupo.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Grupoid' name='Grupoid' value='{$Grupoid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
