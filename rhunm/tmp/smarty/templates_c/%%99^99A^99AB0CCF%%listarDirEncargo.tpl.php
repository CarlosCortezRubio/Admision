<?php /* Smarty version 2.6.30, created on 2021-11-01 22:40:34
         compiled from C:%5Claragon%5Cwww%5Crhunm/app/vista/DirEncargo/listarDirEncargo.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../app/comun/libGrid.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class='pagina'>
	<form name='form' id='form' method='post' action='<?php echo $this->_tpl_vars['valorForm']; ?>
'>
		<div class='line-title'>
			<h4>Listar Dir. Encargo</h4>
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
        <script>xajax_llenarGridDirEncargo('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxCodigoFiscal' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridDirEncargo = new dhtmlXGridObject('boxCodigoFiscal');
                gridDirEncargo.setDelimiter('|');
                gridDirEncargo.setHeader('|Imp|Ver|Editar|Id|Código Dir. Encargo|Nombre Dir. Encargo');
                gridDirEncargo.enableColumnAutoSize(true);
                gridDirEncargo.setInitWidths('25|60|60|60|92|112|*');
                gridDirEncargo.setColAlign('center|center|center|center|left|left|left');
//              gridDirEncargo.attachEvent('onRowDblClicked',eliminarCondicion);
                gridDirEncargo.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridDirEncargo.setColSorting('str|str|str|int|str|str');
                gridDirEncargo.setImagePath('../../rec/img/grid/');
                gridDirEncargo.enableMultiselect(false);
                gridDirEncargo.enableLightMouseNavigation(true);
                gridDirEncargo.init();
//			   gridDirEncargo.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='idDirEncargo' name='idDirEncargo' value='<?php echo $this->_tpl_vars['idDirEncargo']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>