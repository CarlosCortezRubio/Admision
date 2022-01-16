<?php /* Smarty version 2.6.30, created on 2021-12-09 23:30:36
         compiled from C:%5Claragon%5Cwww%5Crhunm/app/vista/planilla/listarplanilla.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:\\laragon\\www\\rhunm/app/vista/planilla/listarplanilla.tpl', 22, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../app/comun/libGrid.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class='pagina' style="width:75%">
	<form name='form' id='form' method='post' action='<?php echo $this->_tpl_vars['valorForm']; ?>
'>
		<div class='line-title'>
			<h4>Listar Planilla</h4>
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
			<div class="row contenidoVer" style="width:100%"> 
							<div class="form-group col-md-2">
					<label class="control-label"><span class='label-red'>*</span> Año</label>
					<div class="input-group mb-3">
					<select id='idAnio' name='idAnio' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaAnio'],'selected' => $this->_tpl_vars['idAnio']), $this);?>

					</select>
					</div>
				</div>
				<div class="form-group col-md-3">
					<label class="control-label"><span class='label-red'>*</span> Mes</label>
					<div class="input-group mb-3">
					<select id='idMes' name='idMes' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaMes'],'selected' => $this->_tpl_vars['idMes']), $this);?>

					</select>
					  	<div class="input-group-append">
					    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridPlanillaPensionado(3+':'+xajax.$('idAnio').value+':'+xajax.$('idMes').value+':',0);">Buscar</button>
					  	</div>				
					</div>
				</div>
				<div class="form-group col-md-3">
					<label class="control-label"><span class='label-red'>*</span> DNI del Personal</label>
					<div class="input-group mb-3">
						<input type='text' class="form-control input-sm" id='dniPensionado' name='opt' value=''/>
					  	<div class="input-group-append">
					    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridPlanillaPensionado(1+':'+xajax.$('idAnio').value+':'+xajax.$('idMes').value+':'+xajax.$('dniPensionado').value,0);">Buscar</button>
					  	</div>
					</div>
				</div>
			
			</div>			
		<fieldset>
        <script>xajax_llenarGridPlanillaPensionado('','');</script>
<center>
<div id='cantReg' name='cantReg'></div>
<div id='paginacion'></div>
<div id='boxPlanillaPensionado' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridPlanillaPensionado = new dhtmlXGridObject('boxPlanillaPensionado');
                gridPlanillaPensionado.setDelimiter('|');			
                gridPlanillaPensionado.setHeader('|Editar|Id|Empleado|Nombre|Apellido|Periodo|Fec Planilla|T imp|T haber|T desc|T liquido');
                gridPlanillaPensionado.enableColumnAutoSize(true);
                gridPlanillaPensionado.setInitWidths('25|70|70|70|*|*|80|90|80|80|80|80');
                gridPlanillaPensionado.setColAlign('center|center|center|center|left|left|center|right|right|right|right|right');
//              gridPlanillaPensionado.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPlanillaPensionado.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridPlanillaPensionado.setColSorting('str|str|str|int|int|str|str|int|int|int|int|int');
                gridPlanillaPensionado.setImagePath('../../rec/img/grid/');
                gridPlanillaPensionado.enableMultiselect(false);
                gridPlanillaPensionado.enableLightMouseNavigation(true);
                gridPlanillaPensionado.init();
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='tipPlanilla' name='tipPlanilla' value='<?php echo $this->_tpl_vars['tipPlanilla']; ?>
' readonly/>
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='planillaPensionadoid' name='planillaPensionadoid' value='<?php echo $this->_tpl_vars['planillaPensionadoid']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>