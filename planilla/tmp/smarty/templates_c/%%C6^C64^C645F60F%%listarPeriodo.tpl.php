<?php /* Smarty version 2.6.30, created on 2021-09-28 20:25:19
         compiled from C:%5Claragon%5Cwww%5Cplanilla/app/vista/Periodo/listarPeriodo.tpl */ ?>
<!-- <script type='text/javascript' src='<?php echo $this->_tpl_vars['PATH_JS_XAJAX']; ?>
Periodo.js'></script>-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../app/comun/libGrid.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class='pagina'>
		<div class='line-title'>
			<h4>Listar Periodo</h4>
		</div>
	<form name='form' id='form' method='post' action='<?php echo $this->_tpl_vars['valorForm']; ?>
'>
		<a id='ancla' href='#'></a>
		<input type='hidden' id='opcion' name='opcion'  value='' readonly>
		<div id='errores'>
			<?php if ($this->_tpl_vars['error'] != ''): ?><div id='msg-error' class='msg-red'><?php echo $this->_tpl_vars['error']; ?>
</div><?php endif; ?>
			<?php if ($this->_tpl_vars['exito'] != ''): ?><div id='msg-exito' class='msg-green'><?php echo $this->_tpl_vars['exito']; ?>
</div><?php endif; ?>
			<?php if ($this->_tpl_vars['info'] != ''): ?><div id='msg-info' class='msg-blue'><?php echo $this->_tpl_vars['info']; ?>
</div><?php endif; ?>
		</div>
			<br>
		<fieldset>
        <script>xajax_llenarGridPeriodo('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxPeriodo' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridPeriodo = new dhtmlXGridObject('boxPeriodo');
                gridPeriodo.setDelimiter('|');
                gridPeriodo.setHeader('|Ver|Editar|Id|Año|Mes|Nom|Edo|Obs');
                gridPeriodo.enableColumnAutoSize(true);
                gridPeriodo.setInitWidths('25|60|60|92|94|93|120|93|*');
                gridPeriodo.setColAlign('center|center|center|center|center|center|left|center|left');
//              gridPeriodo.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPeriodo.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridPeriodo.setColSorting('str|str|str|int|int|int|str|int|str');
                gridPeriodo.setImagePath('../../rec/img/grid/');
                gridPeriodo.enableMultiselect(false);
                gridPeriodo.enableLightMouseNavigation(true);
                gridPeriodo.init();
//			   gridPeriodo.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='Periodoid' name='Periodoid' value='<?php echo $this->_tpl_vars['Periodoid']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>