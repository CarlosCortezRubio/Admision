<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}SegSalud.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
		<div class='line-title'>
			<h4>Listar Seguro Salud</h4>
		</div>	
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
        <script>xajax_llenarGridSegSalud('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxSegSalud' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridSegSalud = new dhtmlXGridObject('boxSegSalud');
                gridSegSalud.setDelimiter('|');
                gridSegSalud.setHeader('|Imp|Ver|Editar|Id|Nombre');
                gridSegSalud.enableColumnAutoSize(true);
                gridSegSalud.setInitWidths('25|60|60|60|92|*');
                gridSegSalud.setColAlign('center|center|center|center|right|left');
//              gridSegSalud.attachEvent('onRowDblClicked',eliminarCondicion);
                gridSegSalud.setColTypes('ro|ro|ro|ro|ro|ro');
                gridSegSalud.setColSorting('str|str|str|str|int|str');
                gridSegSalud.setImagePath('../../rec/img/grid/');
                gridSegSalud.enableMultiselect(false);
                gridSegSalud.enableLightMouseNavigation(true);
                gridSegSalud.init();
//			   gridSegSalud.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='SegSaludid' name='SegSaludid' value='{$SegSaludid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
