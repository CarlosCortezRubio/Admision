<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Empresa.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<div class='line-title'>
			<h4>
			Listar Empresa
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
        <script>xajax_llenarGridEmpresa('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxEmpresa' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridEmpresa = new dhtmlXGridObject('boxEmpresa');
                gridEmpresa.setDelimiter('|');
                gridEmpresa.setHeader('|Imp|Ver|Editar|Id|IdEdoRegistro|Ruc|Tel|Dir|Correo');
                gridEmpresa.enableColumnAutoSize(true);
                gridEmpresa.setInitWidths('25|60|60|60|92|103|93|93|93|96');
                gridEmpresa.setColAlign('center|center|center|center|right|right|left|left|left|left');
//              gridEmpresa.attachEvent('onRowDblClicked',eliminarCondicion);
                gridEmpresa.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridEmpresa.setColSorting('str|str|str|str|int|int|str|str|str|str');
                gridEmpresa.setImagePath('../../rec/img/grid/');
                gridEmpresa.enableMultiselect(false);
                gridEmpresa.enableLightMouseNavigation(true);
                gridEmpresa.init();
//			   gridEmpresa.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Empresaid' name='Empresaid' value='{$Empresaid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
