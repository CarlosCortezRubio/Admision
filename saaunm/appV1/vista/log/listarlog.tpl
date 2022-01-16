<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}log.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<div class='line-title'>
			<h4>
			Listar Log
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
        <script>xajax_llenarGridLog('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxLog' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridLog = new dhtmlXGridObject('boxLog');
                gridLog.setDelimiter('|');
                gridLog.setHeader('|Imp|Ver|Editar|IDLOG|IDUSUARIO|FECHALOG|IPLOG|ACCIONLOG');
                gridLog.enableColumnAutoSize(true);
                gridLog.setInitWidths('25|60|60|60|95|99|98|95|99');
                gridLog.setColAlign('center|center|center|center|right|right|right|left|left');
//              gridLog.attachEvent('onRowDblClicked',eliminarCondicion);
                gridLog.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridLog.setColSorting('str|str|str|str|int|int|int|str|str');
                gridLog.setImagePath('../../rec/img/grid/');
                gridLog.enableMultiselect(false);
                gridLog.enableLightMouseNavigation(true);
                gridLog.init();
//			   gridLog.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='logid' name='logid' value='{$logid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
