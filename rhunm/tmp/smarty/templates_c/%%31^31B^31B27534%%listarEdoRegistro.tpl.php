<?php /* Smarty version 2.6.30, created on 2021-12-09 21:12:43
         compiled from C:%5Claragon%5Cwww%5Crhunm/app/vista/EdoRegistro/listarEdoRegistro.tpl */ ?>
<!-- <script type='text/javascript' src='<?php echo $this->_tpl_vars['PATH_JS_XAJAX']; ?>
EdoRegistro.js'></script>-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../app/comun/libGrid.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class='pagina'>
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
        <script>xajax_llenarGridEdoRegistro('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxEdoRegistro' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridEdoRegistro = new dhtmlXGridObject('boxEdoRegistro');
                gridEdoRegistro.setDelimiter('|');
                gridEdoRegistro.setHeader('|Imp|Ver|Editar|Id|Nom|Desc|Grupo');
                gridEdoRegistro.enableColumnAutoSize(true);
                gridEdoRegistro.setInitWidths('25|60|60|60|92|93|94|95');
                gridEdoRegistro.setColAlign('center|center|center|center|right|left|left|right');
//              gridEdoRegistro.attachEvent('onRowDblClicked',eliminarCondicion);
                gridEdoRegistro.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro');
                gridEdoRegistro.setColSorting('str|str|str|str|int|str|str|int');
                gridEdoRegistro.setImagePath('../../rec/img/grid/');
                gridEdoRegistro.enableMultiselect(false);
                gridEdoRegistro.enableLightMouseNavigation(true);
                gridEdoRegistro.init();
//			   gridEdoRegistro.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='EdoRegistroid' name='EdoRegistroid' value='<?php echo $this->_tpl_vars['EdoRegistroid']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>