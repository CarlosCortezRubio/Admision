<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Persona.js'></script>-->
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
        <script>xajax_llenarGridPersona('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxPersona' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridPersona = new dhtmlXGridObject('boxPersona');
                gridPersona.setDelimiter('|');
                gridPersona.setHeader('|Imp|Ver|Editar|IDPERSONA|IDGENERO|IDEDOCIVIL|IDEDOREGISTRO');
                gridPersona.enableColumnAutoSize(true);
                gridPersona.setInitWidths('25|60|60|60|99|98|100|103');
                gridPersona.setColAlign('center|center|center|center|right|right|right|right');
//              gridPersona.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPersona.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro');
                gridPersona.setColSorting('str|str|str|str|int|int|int|int');
                gridPersona.setImagePath('../../rec/img/grid/');
                gridPersona.enableMultiselect(false);
                gridPersona.enableLightMouseNavigation(true);
                gridPersona.init();
//			   gridPersona.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Personaid' name='Personaid' value='{$Personaid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
