{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Código Regional</h4>
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
        <script>xajax_llenarGridCodRegional('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxCodigoRegional' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridCodRegional = new dhtmlXGridObject('boxCodigoRegional');
                gridCodRegional.setDelimiter('|');
                gridCodRegional.setHeader('|Imp|Ver|Editar|Id|Código Regional|Nombre Código Regional');
                gridCodRegional.enableColumnAutoSize(true);
                gridCodRegional.setInitWidths('25|60|60|60|62|112|*');
                gridCodRegional.setColAlign('center|center|center|center|left|left|left');
//              gridCodRegional.attachEvent('onRowDblClicked',eliminarCondicion);
                gridCodRegional.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridCodRegional.setColSorting('str|str|str|int|str|str');
                gridCodRegional.setImagePath('../../rec/img/grid/');
                gridCodRegional.enableMultiselect(false);
                gridCodRegional.enableLightMouseNavigation(true);
                gridCodRegional.init();
//			   gridCodRegional.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idCodRegional' name='idCodRegional' value='{$idCodRegional}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
