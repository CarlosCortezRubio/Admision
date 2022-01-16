<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Usuario.js'></script>-->
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
        <script>xajax_llenarGridUsuario('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxUsuario' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridUsuario = new dhtmlXGridObject('boxUsuario');
                gridUsuario.setDelimiter('|');
                gridUsuario.setHeader('|Imp|Ver|Editar|Id|IdRol|IdPersona|IdEdoRegistro|Cuenta|Contrasena|FecCreacion|PregSecreta|RespPregSecreta');
                gridUsuario.enableColumnAutoSize(true);
                gridUsuario.setInitWidths('25|60|60|60|92|95|99|103|96|100|101|101|105');
                gridUsuario.setColAlign('center|center|center|center|right|right|right|right|left|left|right|left|left');
//              gridUsuario.attachEvent('onRowDblClicked',eliminarCondicion);
                gridUsuario.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridUsuario.setColSorting('str|str|str|str|int|int|int|int|str|str|time|str|str');
                gridUsuario.setImagePath('../../rec/img/grid/');
                gridUsuario.enableMultiselect(false);
                gridUsuario.enableLightMouseNavigation(true);
                gridUsuario.init();
//			   gridUsuario.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Usuarioid' name='Usuarioid' value='{$Usuarioid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
