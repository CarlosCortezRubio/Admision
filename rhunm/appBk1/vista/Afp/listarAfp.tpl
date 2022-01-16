{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Afp</h4>
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
        <script>xajax_llenarGridAfp('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxCodigoFiscal' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridAfp = new dhtmlXGridObject('boxCodigoFiscal');
                gridAfp.setDelimiter('|');
                gridAfp.setHeader('|Imp|Ver|Editar|Id|Código AFP|Nombre AFP ');
                gridAfp.enableColumnAutoSize(true);
                gridAfp.setInitWidths('25|60|60|60|92|112|*');
                gridAfp.setColAlign('center|center|center|center|left|left|left');
//              gridAfp.attachEvent('onRowDblClicked',eliminarCondicion);
                gridAfp.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridAfp.setColSorting('str|str|str|int|str|str');
                gridAfp.setImagePath('../../rec/img/grid/');
                gridAfp.enableMultiselect(false);
                gridAfp.enableLightMouseNavigation(true);
                gridAfp.init();
//			   gridAfp.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idAfp' name='idAfp' value='{$idAfp}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
