<?php /* Smarty version 2.6.30, created on 2021-04-07 04:49:57
         compiled from C:%5Cxampp%5Chtdocs%5CnominaGob/app/vista/PlanPens/listarPlanPens.tpl */ ?>
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
                gridPlanPens.setHeader('|Imp|Ver|Editar|Id|Dni|Apellidos_y_nombres|Fecha_de_nacimiento|Sexo|Codigo_modular|Planilla|Tipo_de_regimen|Resolucion_de_pension_definitiva|A_partir_de|Banco|Cuenta_bancaria|Fuente_de_financiamiento|Planilla2|Total_imponible|Total_haber|Total_descuentos|Total_liquido|Aguinaldo|Basica|Bonif_personal|Ael25671|Aeds081|Tph|Bonif_familiar|Du080_04|Refrig_y_movi|Du90_96|Ds19_94_pcm|Ds21_92_pcm|Bon_especial|Reunificada|Igv|Cargsimul|Art18_dl_20530|Du073_97|Du011_99|Du037_94|Ds016|Ds017|Ds110_2006|Ds039_2007|Ds120_2008|Ds014_2009|Ds077_2010|Ds031_2011|Ds024_2012|Ds004_2013|Ds003_2014|Ds002_2015|Ds005_2016|Ds020_2017|Ds011_2018|Ds009_2019|Ds006_2020|Ipss|Cafae|Prderrma|Escolaridad|Decreto_supermo_20_21');
                gridPlanPens.enableColumnAutoSize(true);
                gridPlanPens.setInitWidths('25|60|60|60|92|93|109|109|94|104|98|105|122|101|95|105|114|99|105|101|106|103|99|96|104|98|97|93|104|98|103|97|101|101|102|101|93|99|104|98|98|98|95|95|100|100|100|100|100|100|100|100|100|100|100|100|100|100|100|94|95|98|101|111');
                gridPlanPens.setColAlign('center|center|center|center|right|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left');
//              gridPlanPens.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPlanPens.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridPlanPens.setColSorting('str|str|str|str|int|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str');
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