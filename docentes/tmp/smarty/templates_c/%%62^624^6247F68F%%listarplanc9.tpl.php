<?php /* Smarty version 2.6.30, created on 2021-05-07 04:45:13
         compiled from C:%5Cxampp%5Chtdocs%5Cplanilla/app/vista/planc9/listarplanc9.tpl */ ?>
<!-- <script type='text/javascript' src='<?php echo $this->_tpl_vars['PATH_JS_XAJAX']; ?>
planc9.js'></script>-->
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
        <script>xajax_llenarGridPlanc9('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxPlanc9' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridPlanc9 = new dhtmlXGridObject('boxPlanc9');
                gridPlanc9.setDelimiter('|');
                gridPlanc9.setHeader('|Imp|Ver|Editar|NumPlanC9|Ape1PlanC9|Ape2PlanC9|Nom1PlanC9|NacPlanC9|DniPlanC9|FecIngPlanC9|EraDocPlanC9|IncDespPlanC9|GdoAcadPlanC9|MencPlanC9|UnivMayGPlanC9|PaisPlanC9|PreGPlanC9|MaePlanC9|DocPlanC9|SedesClasesPlanC9|CatDocPlanC9|DedDocPlanC9|ClasesPlanC9|OtrasActPlanC9|TotHorSemPlanC9|RzaInvPlanC9|EnDinaPlanC9|PerAcadPlanC9|ComPlanC9');
                gridPlanc9.enableColumnAutoSize(true);
                gridPlanc9.setInitWidths('25|60|60|60|99|100|100|100|99|99|102|102|103|103|100|104|100|100|99|99|107|102|102|102|104|105|102|102|103|99');
                gridPlanc9.setColAlign('center|center|center|center|right|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left');
//              gridPlanc9.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPlanc9.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridPlanc9.setColSorting('str|str|str|str|int|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str');
                gridPlanc9.setImagePath('../../rec/img/grid/');
                gridPlanc9.enableMultiselect(false);
                gridPlanc9.enableLightMouseNavigation(true);
                gridPlanc9.init();
//			   gridPlanc9.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='planc9id' name='planc9id' value='<?php echo $this->_tpl_vars['planc9id']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>