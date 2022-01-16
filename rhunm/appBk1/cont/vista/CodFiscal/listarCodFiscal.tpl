{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Código Fiscal</h4>
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
        <script>xajax_llenarGridCodFiscal('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxCodigoFiscal' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridCodFiscal = new dhtmlXGridObject('boxCodigoFiscal');
                gridCodFiscal.setDelimiter('|');
                gridCodFiscal.setHeader('|Imp|Ver|Editar|Id|Código Fiscal|Nombre Código Fiscal');
                gridCodFiscal.enableColumnAutoSize(true);
                gridCodFiscal.setInitWidths('25|60|60|60|92|112|*');
                gridCodFiscal.setColAlign('center|center|center|center|left|left|left');
//              gridCodFiscal.attachEvent('onRowDblClicked',eliminarCondicion);
                gridCodFiscal.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridCodFiscal.setColSorting('str|str|str|int|str|str');
                gridCodFiscal.setImagePath('../../rec/img/grid/');
                gridCodFiscal.enableMultiselect(false);
                gridCodFiscal.enableLightMouseNavigation(true);
                gridCodFiscal.init();
//			   gridCodFiscal.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idCodFiscal' name='idCodFiscal' value='{$idCodFiscal}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
