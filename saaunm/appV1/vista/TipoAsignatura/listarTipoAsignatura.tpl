<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}TipoAsignatura.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<div class='line-title'>
			<h4>
			Listar TipoAsignatura
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
        <script>xajax_llenarGridTipoAsignatura('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxTipoAsignatura' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridTipoAsignatura = new dhtmlXGridObject('boxTipoAsignatura');
                gridTipoAsignatura.setDelimiter('|');
                gridTipoAsignatura.setHeader('|Imp|Ver|Editar|Id|Nom');
                gridTipoAsignatura.enableColumnAutoSize(true);
                gridTipoAsignatura.setInitWidths('25|60|60|60|92|93');
                gridTipoAsignatura.setColAlign('center|center|center|center|right|left');
//              gridTipoAsignatura.attachEvent('onRowDblClicked',eliminarCondicion);
                gridTipoAsignatura.setColTypes('ro|ro|ro|ro|ro|ro');
                gridTipoAsignatura.setColSorting('str|str|str|str|int|str');
                gridTipoAsignatura.setImagePath('../../rec/img/grid/');
                gridTipoAsignatura.enableMultiselect(false);
                gridTipoAsignatura.enableLightMouseNavigation(true);
                gridTipoAsignatura.init();
//			   gridTipoAsignatura.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='TipoAsignaturaid' name='TipoAsignaturaid' value='{$TipoAsignaturaid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
