<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}plancrd.js'></script>-->
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
        <script>xajax_llenarGridPlancrd('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxPlancrd' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridPlancrd = new dhtmlXGridObject('boxPlancrd');
                gridPlancrd.setDelimiter('|');
                gridPlancrd.setHeader('|Editar|N°|Apellido Paterno|Apellido Materno|Nombres|Nacionalidad|N° Identificación');
                gridPlancrd.enableColumnAutoSize(true);
                gridPlancrd.setInitWidths('25|60|60|200|200|*|200|105|100|100|103|103|104|104|101|105|101|101|100|100|108|103|103|103|105|106|103|103|104|100');
                gridPlancrd.setColAlign('center|center|center|center|right|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left');
//              gridPlancrd.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPlancrd.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridPlancrd.setColSorting('str|str|str|str|int|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str');
                gridPlancrd.setImagePath('../../rec/img/grid/');
                gridPlancrd.enableMultiselect(false);
                gridPlancrd.enableLightMouseNavigation(true);
                gridPlancrd.init();
//			   gridPlancrd.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='plancrdid' name='plancrdid' value='{$plancrdid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
