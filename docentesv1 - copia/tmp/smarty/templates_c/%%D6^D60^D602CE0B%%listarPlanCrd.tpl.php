<?php /* Smarty version 2.6.30, created on 2021-05-08 01:22:08
         compiled from C:%5Cxampp%5Chtdocs%5Cplanilla/app/vista/PlanCrd/listarPlanCrd.tpl */ ?>
<!-- <script type='text/javascript' src='<?php echo $this->_tpl_vars['PATH_JS_XAJAX']; ?>
PlanCrd.js'></script>-->
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
        <script>xajax_llenarGridPlanCrd('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxPlanCrd' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridPlanCrd = new dhtmlXGridObject('boxPlanCrd');
                gridPlanCrd.setDelimiter('|');
                gridPlanCrd.setHeader('|Editar|N°|Apellido Paterno|Apellido Materno|Nombres|Nacionalidad|Dn|Fec. Ingreso');
                gridPlanCrd.enableColumnAutoSize(true);
                gridPlanCrd.setInitWidths('25|60|60|150|150|*|150|100|100|100|103|103|104|104|101|105|101|101|100|100|108|103|103|103|105|106|103|103|104|100');
                gridPlanCrd.setColAlign('center|center|center|right|right|right|right|right|right|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left');
//              gridPlanCrd.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPlanCrd.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridPlanCrd.setColSorting('str|str|str|str|int|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str');
                gridPlanCrd.setImagePath('../../rec/img/grid/');
                gridPlanCrd.enableMultiselect(false);
                gridPlanCrd.enableLightMouseNavigation(true);
                gridPlanCrd.init();
//			   gridPlanCrd.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='PlanCrdid' name='PlanCrdid' value='<?php echo $this->_tpl_vars['PlanCrdid']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>