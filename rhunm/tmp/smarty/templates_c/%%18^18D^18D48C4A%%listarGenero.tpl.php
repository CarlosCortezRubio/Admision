<?php /* Smarty version 2.6.30, created on 2021-12-13 15:47:49
         compiled from C:%5Claragon%5Cwww%5Crhunm/app/vista/Genero/listarGenero.tpl */ ?>
<!-- <script type='text/javascript' src='<?php echo $this->_tpl_vars['PATH_JS_XAJAX']; ?>
Genero.js'></script>-->
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
        <script>xajax_llenarGridGenero('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxGenero' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridGenero = new dhtmlXGridObject('boxGenero');
                gridGenero.setDelimiter('|');
                gridGenero.setHeader('|Imp|Ver|Editar|Id|Nom|Desc');
                gridGenero.enableColumnAutoSize(true);
                gridGenero.setInitWidths('25|60|60|60|92|93|94');
                gridGenero.setColAlign('center|center|center|center|right|left|left');
//              gridGenero.attachEvent('onRowDblClicked',eliminarCondicion);
                gridGenero.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridGenero.setColSorting('str|str|str|str|int|str|str');
                gridGenero.setImagePath('../../rec/img/grid/');
                gridGenero.enableMultiselect(false);
                gridGenero.enableLightMouseNavigation(true);
                gridGenero.init();
//			   gridGenero.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='Generoid' name='Generoid' value='<?php echo $this->_tpl_vars['Generoid']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>