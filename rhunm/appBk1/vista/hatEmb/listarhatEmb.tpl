<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}hatEmb.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Listar Hat Emb</h4>
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
        <script>xajax_llenarGridHatEmb('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxHatEmb' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridHatEmb = new dhtmlXGridObject('boxHatEmb');
                gridHatEmb.setDelimiter('|');
                gridHatEmb.setHeader('|Imp|Ver|Editar|Id|Cod|Nombre');
                gridHatEmb.enableColumnAutoSize(true);
                gridHatEmb.setInitWidths('25|60|60|60|92|93|*');
                gridHatEmb.setColAlign('center|center|center|center|right|left|left');
//              gridHatEmb.attachEvent('onRowDblClicked',eliminarCondicion);
                gridHatEmb.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridHatEmb.setColSorting('str|str|str|str|int|str|str');
                gridHatEmb.setImagePath('../../rec/img/grid/');
                gridHatEmb.enableMultiselect(false);
                gridHatEmb.enableLightMouseNavigation(true);
                gridHatEmb.init();
//			   gridHatEmb.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='hatEmbid' name='hatEmbid' value='{$hatEmbid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
