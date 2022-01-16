<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}ProgEstudio.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<div class='line-title'>
			<h4>
			Listar Programa de Estudio
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
        <script>xajax_llenarGridProgEstudio('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxProgEstudio' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridProgEstudio = new dhtmlXGridObject('boxProgEstudio');
                gridProgEstudio.setDelimiter('|');
                gridProgEstudio.setHeader('|Imp|Ver|Editar|Id|Código|Nombre|Nombre Corto');
                gridProgEstudio.enableColumnAutoSize(true);
                gridProgEstudio.setInitWidths('25|60|60|60|92|*|*');
                gridProgEstudio.setColAlign('center|center|center|center|right|left|left|left|left|left|right|right|left|left');
//              gridProgEstudio.attachEvent('onRowDblClicked',eliminarCondicion);
                gridProgEstudio.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridProgEstudio.setColSorting('str|str|str|str|int|str|str|str|str|str|int|int|str|str');
                gridProgEstudio.setImagePath('../../rec/img/grid/');
                gridProgEstudio.enableMultiselect(false);
                gridProgEstudio.enableLightMouseNavigation(true);
                gridProgEstudio.init();
//			   gridProgEstudio.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='ProgEstudioid' name='ProgEstudioid' value='{$ProgEstudioid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
