<?php /* Smarty version 2.6.30, created on 2021-11-01 21:57:41
         compiled from C:%5Claragon%5Cwww%5Crhunm/app/vista/NumMagist/listarNumMagist.tpl */ ?>
<!-- <script type='text/javascript' src='<?php echo $this->_tpl_vars['PATH_JS_XAJAX']; ?>
NumMagist.js'></script>-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../app/comun/libGrid.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class='pagina'>
	<form name='form' id='form' method='post' action='<?php echo $this->_tpl_vars['valorForm']; ?>
'>
		<div class='line-title'>
			<h4>Listar Número Magisterio</h4>
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
        <script>xajax_llenarGridNumMagist('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxNumMagist' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridNumMagist = new dhtmlXGridObject('boxNumMagist');
                gridNumMagist.setDelimiter('|');
                gridNumMagist.setHeader('|Imp|Ver|Editar|Id|Cod|Nombre');
                gridNumMagist.enableColumnAutoSize(true);
                gridNumMagist.setInitWidths('25|60|60|60|92|93|*');
                gridNumMagist.setColAlign('center|center|center|center|right|left|left');
//              gridNumMagist.attachEvent('onRowDblClicked',eliminarCondicion);
                gridNumMagist.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridNumMagist.setColSorting('str|str|str|str|int|str|str');
                gridNumMagist.setImagePath('../../rec/img/grid/');
                gridNumMagist.enableMultiselect(false);
                gridNumMagist.enableLightMouseNavigation(true);
                gridNumMagist.init();
//			   gridNumMagist.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='NumMagistid' name='NumMagistid' value='<?php echo $this->_tpl_vars['NumMagistid']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>