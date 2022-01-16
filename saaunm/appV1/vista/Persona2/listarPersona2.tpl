<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Persona2.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<div class='line-title'>
			<h4>
			Listar Persona2
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
        <script>xajax_llenarGridPersona2('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxPersona2' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridPersona2 = new dhtmlXGridObject('boxPersona2');
                gridPersona2.setDelimiter('|');
                gridPersona2.setHeader('|Imp|Ver|Editar|IdPersona|Edo_IDEDOCIVIL|IDBANCO|IdEdoRegistro|IdGenero|IdEdoCivil|IdIdioma|IdDistritoNac|IdDistritoDir|IdTipoDoc|IdZona|IdVia|DniPersona|Nom1Persona|Nom2Persona|Ape1Persona|Ape2Persona|NumDepPersona|FecNacPersona|ZonaDomPersona|DesViaDomPersona|NumViaDomPersona|IntDomPersona|Tel1DomPersona|Tel2DomPersona|RefDomPersona|EmaDomPersona');
                gridPersona2.enableColumnAutoSize(true);
                gridPersona2.setInitWidths('25|60|60|60|99|104|97|103|98|100|98|103|103|99|96|95|100|101|101|101|101|103|103|104|106|106|103|104|104|103|103');
                gridPersona2.setColAlign('center|center|center|center|right|right|right|right|right|right|right|right|right|right|right|right|left|left|left|left|left|right|right|left|left|left|left|left|left|left|left');
//              gridPersona2.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPersona2.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridPersona2.setColSorting('str|str|str|str|int|int|int|int|int|int|int|int|int|int|int|int|str|str|str|str|str|int|int|str|str|str|str|str|str|str|str');
                gridPersona2.setImagePath('../../rec/img/grid/');
                gridPersona2.enableMultiselect(false);
                gridPersona2.enableLightMouseNavigation(true);
                gridPersona2.init();
//			   gridPersona2.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Persona2id' name='Persona2id' value='{$Persona2id}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
