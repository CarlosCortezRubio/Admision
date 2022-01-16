<?php /* Smarty version 2.6.30, created on 2021-11-01 17:02:57
         compiled from C:%5Claragon%5Cwww%5Crhunm/app/vista/Pais/listarPais.tpl */ ?>
<!-- <script type='text/javascript' src='<?php echo $this->_tpl_vars['PATH_JS_XAJAX']; ?>
Pais.js'></script>-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../app/comun/libGrid.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class='pagina'>
	<form name='form' id='form' method='post' action='<?php echo $this->_tpl_vars['valorForm']; ?>
'>
		<div class='line-title'>
			<h4>Listar País</h4>
		</div>	
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
        <script>xajax_llenarGridPais('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxPais' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridPais = new dhtmlXGridObject('boxPais');
                gridPais.setDelimiter('|');
                gridPais.setHeader('|Imp|Ver|Editar|Id|Nombre');
                gridPais.enableColumnAutoSize(true);
                gridPais.setInitWidths('25|60|60|60|92|*');
                gridPais.setColAlign('center|center|center|center|right|left');
//              gridPais.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPais.setColTypes('ro|ro|ro|ro|ro|ro');
                gridPais.setColSorting('str|str|str|str|int|str');
                gridPais.setImagePath('../../rec/img/grid/');
                gridPais.enableMultiselect(false);
                gridPais.enableLightMouseNavigation(true);
                gridPais.init();
//			   gridPais.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='Paisid' name='Paisid' value='<?php echo $this->_tpl_vars['Paisid']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>