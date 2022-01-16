<?php /* Smarty version 2.6.30, created on 2021-06-14 13:56:43
         compiled from C:%5Cxampp%5Chtdocs%5Cplanilla/app/vista/PlanPens/listarPlanPens.tpl */ ?>
<!-- <script type='text/javascript' src='<?php echo $this->_tpl_vars['PATH_JS_XAJAX']; ?>
PlanPens.js'></script>-->
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
        <script>xajax_llenarGridPlanPens('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxPlanPens' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridPlanPens = new dhtmlXGridObject('boxPlanPens');
                gridPlanPens.setDelimiter('|');
                gridPlanPens.setHeader('|Imp|Ver|Editar|Año|Mes|Dni|Apellidos y nombres|Planilla|Contrasena|FecCreacion');
                gridPlanPens.enableColumnAutoSize(true);
                gridPlanPens.setInitWidths('25|60|60|50|50|50|80|*|80|120|110');
                gridPlanPens.setColAlign('center|center|center|center|right|right|right|left|center|center|center');
//              gridPlanPens.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPlanPens.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridPlanPens.setColSorting('str|str|str|str|int|int|int|int|str|str|str');
                gridPlanPens.setImagePath('../../rec/img/grid/');
                gridPlanPens.enableMultiselect(false);
                gridPlanPens.enableLightMouseNavigation(true);
                gridPlanPens.init();
//			   gridPlanPens.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='PlanPensid' name='PlanPensid' value='<?php echo $this->_tpl_vars['PlanPensid']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>