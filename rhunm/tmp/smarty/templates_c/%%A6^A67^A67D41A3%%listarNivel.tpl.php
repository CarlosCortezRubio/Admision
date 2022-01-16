<?php /* Smarty version 2.6.30, created on 2021-11-01 19:19:51
         compiled from C:%5Claragon%5Cwww%5Crhunm/app/vista/Nivel/listarNivel.tpl */ ?>
<!-- <script type='text/javascript' src='<?php echo $this->_tpl_vars['PATH_JS_XAJAX']; ?>
Nivel.js'></script>-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../app/comun/libGrid.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class='pagina'>
	<form name='form' id='form' method='post' action='<?php echo $this->_tpl_vars['valorForm']; ?>
'>
		<div class='line-title'>
			<h4>Listar Nivel</h4>
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
        <script>xajax_llenarGridNivel('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxNivel' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridNivel = new dhtmlXGridObject('boxNivel');
                gridNivel.setDelimiter('|');
                gridNivel.setHeader('|Imp|Ver|Editar|Id|Cod|Nombre');
                gridNivel.enableColumnAutoSize(true);
                gridNivel.setInitWidths('25|60|60|60|92|93|*');
                gridNivel.setColAlign('center|center|center|center|right|left|left');
//              gridNivel.attachEvent('onRowDblClicked',eliminarCondicion);
                gridNivel.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridNivel.setColSorting('str|str|str|str|int|str|str');
                gridNivel.setImagePath('../../rec/img/grid/');
                gridNivel.enableMultiselect(false);
                gridNivel.enableLightMouseNavigation(true);
                gridNivel.init();
//			   gridNivel.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='Nivelid' name='Nivelid' value='<?php echo $this->_tpl_vars['Nivelid']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>