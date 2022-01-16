{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Dir. Encargo</h4>
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
        <script>xajax_llenarGridDirEncargo('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxCodigoFiscal' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridDirEncargo = new dhtmlXGridObject('boxCodigoFiscal');
                gridDirEncargo.setDelimiter('|');
                gridDirEncargo.setHeader('|Imp|Ver|Editar|Id|Código Dir. Encargo|Nombre Dir. Encargo');
                gridDirEncargo.enableColumnAutoSize(true);
                gridDirEncargo.setInitWidths('25|60|60|60|92|112|*');
                gridDirEncargo.setColAlign('center|center|center|center|left|left|left');
//              gridDirEncargo.attachEvent('onRowDblClicked',eliminarCondicion);
                gridDirEncargo.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridDirEncargo.setColSorting('str|str|str|int|str|str');
                gridDirEncargo.setImagePath('../../rec/img/grid/');
                gridDirEncargo.enableMultiselect(false);
                gridDirEncargo.enableLightMouseNavigation(true);
                gridDirEncargo.init();
//			   gridDirEncargo.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idDirEncargo' name='idDirEncargo' value='{$idDirEncargo}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
