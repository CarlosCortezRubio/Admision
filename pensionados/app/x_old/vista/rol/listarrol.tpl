<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Rol.js'></script>-->
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
        <script>xajax_llenarGridRol('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxRol' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridRol = new dhtmlXGridObject('boxRol');
                gridRol.setDelimiter('|');
                gridRol.setHeader('|Imp|Ver|Editar|Id|IdEdoRegistro|Nom|Desc');
                gridRol.enableColumnAutoSize(true);
                gridRol.setInitWidths('25|60|60|60|92|103|93|94');
                gridRol.setColAlign('center|center|center|center|right|right|left|left');
//              gridRol.attachEvent('onRowDblClicked',eliminarCondicion);
                gridRol.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro');
                gridRol.setColSorting('str|str|str|str|int|int|str|str');
                gridRol.setImagePath('../../rec/img/grid/');
                gridRol.enableMultiselect(false);
                gridRol.enableLightMouseNavigation(true);
                gridRol.init();
//			   gridRol.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Rolid' name='Rolid' value='{$Rolid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
