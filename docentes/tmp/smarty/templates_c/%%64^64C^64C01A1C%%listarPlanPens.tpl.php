<?php /* Smarty version 2.6.30, created on 2021-06-02 23:37:50
         compiled from C:%5Cxampp%5Chtdocs%5Cplanilla/app/vista/PlanPens/listarPlanPens.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:\\xampp\\htdocs\\planilla/app/vista/PlanPens/listarPlanPens.tpl', 20, false),)), $this); ?>
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
<!--		**********************************************************************************-->
<div class="row contenidoVer" style="width:100%">
	<div class="form-group col-md-2">
		<label class="control-label"><span class='label-red'>*</span> Mes</label>
		<div class="input-group mb-3">
		<select id='idMes' name='idMes' class='form-control input-sm'>
			<option value=''>-Seleccione-</option>
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaMes'],'selected' => $this->_tpl_vars['idMes']), $this);?>

		</select>
		</div>
	</div>
	<div class="form-group col-md-2">
		<label class="control-label"><span class='label-red'>*</span> Año</label>
		<div class="input-group mb-3">
		<select id='idAnio' name='idAnio' class='form-control input-sm'>
			<option value=''>-Seleccione-</option>
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaAnio'],'selected' => $this->_tpl_vars['idAnio']), $this);?>

		</select>
		</div>
	</div>
	<div class="form-group col-md-4">
		<label class="control-label"><span class='label-red'>*</span> DNI del Pensionado</label>
		<div class="input-group mb-3">
			<input type='text' class="form-control input-sm" id='dniPensionado' name='opt' value=''/>
		  	<div class="input-group-append">
		    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridPlanPens(1+':'+xajax.$('idMes').value+':'+xajax.$('idAnio').value+':'+xajax.$('dniPensionado').value,0);">Buscar</button>
		  	</div>
		</div>
	</div>
	<div class="form-group col-md-4">
		<label class="control-label"><span class='label-red'>*</span> Nombre del Pensionado</label>
		<div class="input-group mb-3">
			<input type='text' class="form-control input-sm" id='nomPensionado' name='opt' value=''/>
		  	<div class="input-group-append">
<!-- 		    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridPlanPensNom(xajax.$('nomPensionado').value,0);">Buscar</button> -->
				<button type="button" class="btn btn-primary" onclick="xajax_llenarGridPlanPens(2+':'+xajax.$('idMes').value+':'+xajax.$('idAnio').value+':'+xajax.$('nomPensionado').value,0);">Buscar</button>
		  	</div>
		</div>
	</div>
</div>
<!--		**********************************************************************************-->			
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
//                gridPlanPens.setHeader('|Imp|Ver|Editar|Dni|Apellidos_y_nombres|Fecha_de_nacimiento|Sexo|Codigo_modular|Planilla|Tipo_de_regimen|Resolucion_de_pension_definitiva|A_partir_de|Banco|Cuenta_bancaria|Fuente_de_financiamiento|Planilla2|Total_imponible|Total_haber|Total_descuentos|Total_liquido|Aguinaldo|Basica|Bonif_personal|Ael25671|Aeds081|Tph|Bonif_familiar|Du080_04|Refrig_y_movi|Du90_96|Ds19_94_pcm|Ds21_92_pcm|Bon_especial|Reunificada|Igv|Cargsimul|Art18_dl_20530|Du073_97|Du011_99|Du037_94|Ds016|Ds017|Ds110_2006|Ds039_2007|Ds120_2008|Ds014_2009|Ds077_2010|Ds031_2011|Ds024_2012|Ds004_2013|Ds003_2014|Ds002_2015|Ds005_2016|Ds020_2017|Ds011_2018|Ds009_2019|Ds006_2020|Ipss|Cafae|Prderrma|Escolaridad|Decreto_supermo_20_21');
                gridPlanPens.setHeader('|Imp|Ver|Editar|Año|Mes|Dni|Apellidos y nombres|Planilla|Tipo de regimen|Resolución de pensioón definitiva');
                gridPlanPens.enableColumnAutoSize(true);
                gridPlanPens.setInitWidths('25|60|80|60|60|50|100|*|100|110|110');
                gridPlanPens.setColAlign('center|center|center|center|center|right|left|left|left|left|left');
//              gridPlanPens.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPlanPens.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridPlanPens.setColSorting('str|str|str|str|int|str|str|str|str|str|str');
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