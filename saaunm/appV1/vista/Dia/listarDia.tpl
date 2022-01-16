<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Dia.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<div class='line-title'>
			<h4>
			Listar Dia
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
        <script>xajax_llenarGridDia('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxDia' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridDia = new dhtmlXGridObject('boxDia');
                gridDia.setDelimiter('|');
                gridDia.setHeader('|Imp|Ver|Editar|Id|Nom|NomCorto|Letra');
                gridDia.enableColumnAutoSize(true);
                gridDia.setInitWidths('25|60|60|60|92|93|98|95');
                gridDia.setColAlign('center|center|center|center|right|left|left|left');
//              gridDia.attachEvent('onRowDblClicked',eliminarCondicion);
                gridDia.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro');
                gridDia.setColSorting('str|str|str|str|int|str|str|str');
                gridDia.setImagePath('../../rec/img/grid/');
                gridDia.enableMultiselect(false);
                gridDia.enableLightMouseNavigation(true);
                gridDia.init();
//			   gridDia.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Diaid' name='Diaid' value='{$Diaid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
