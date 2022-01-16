<?php /* Smarty version 2.6.30, created on 2021-06-14 01:58:53
         compiled from C:%5Cxampp%5Chtdocs%5Cplanilla/app/vista/Usuario/listarUsuario.tpl */ ?>
<!-- <script type='text/javascript' src='<?php echo $this->_tpl_vars['PATH_JS_XAJAX']; ?>
Usuario.js'></script>-->
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
        <script>xajax_llenarGridUsuario('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxUsuario' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridUsuario = new dhtmlXGridObject('boxUsuario');
                gridUsuario.setDelimiter('|');
                gridUsuario.setHeader('|Imp|Ver|Editar|Id|IdRol|IdPersona|IdEdoRegistro|Cuenta|Contrasena|FecCreacion|PregSecreta|RespPregSecreta');
                gridUsuario.enableColumnAutoSize(true);
                gridUsuario.setInitWidths('25|60|60|60|92|95|99|103|96|100|101|101|105');
                gridUsuario.setColAlign('center|center|center|center|right|right|right|right|left|left|right|left|left');
//              gridUsuario.attachEvent('onRowDblClicked',eliminarCondicion);
                gridUsuario.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridUsuario.setColSorting('str|str|str|str|int|int|int|int|str|str|time|str|str');
                gridUsuario.setImagePath('../../rec/img/grid/');
                gridUsuario.enableMultiselect(false);
                gridUsuario.enableLightMouseNavigation(true);
                gridUsuario.init();
//			   gridUsuario.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='Usuarioid' name='Usuarioid' value='<?php echo $this->_tpl_vars['Usuarioid']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>