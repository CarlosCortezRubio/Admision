<?php /* Smarty version 2.6.30, created on 2021-11-22 19:56:39
         compiled from C:%5Claragon%5Cwww%5Crhunm/app/vista/Conceptos/listarConceptos.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:\\laragon\\www\\rhunm/app/vista/Conceptos/listarConceptos.tpl', 20, false),)), $this); ?>
<!-- <script type='text/javascript' src='<?php echo $this->_tpl_vars['PATH_JS_XAJAX']; ?>
Conceptos.js'></script>-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../app/comun/libGrid.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class='pagina' style="width:90%;">
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
			<div class="row contenidoVer" style="width:100%">
				<div class="form-group col-md-2">
					<label class="control-label"><span class='label-red'>*</span> Tipo Concepto</label>
					<div class="input-group mb-3">
						<select id='idTipoConcepto' name='idTipoConcepto' class='form-control input-sm'>
							<option value=''>-Todos-</option>
							<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaTipoConcepto'],'selected' => $this->_tpl_vars['idTipoConcepto']), $this);?>

						</select>
					</div>
				</div>
				<div class="form-group col-md-2">
					<label class="control-label"><span class='label-red'>*</span> Estado</label>
					<div class="input-group mb-3">
						<select id='idEdoRegistro' name='idEdoRegistro' class='form-control input-sm'>
							<option value=''>-Todos-</option>
							<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaEdoRegistro'],'selected' => $this->_tpl_vars['idEdoRegistro']), $this);?>

						</select>
					</div>
				</div>
				<div class="form-group col-md-3">
					<label class="control-label"><span class='label-red'>*</span> Grupo Pensionados</label>
					<div class="input-group mb-3">
						<select id='grpConceptos' name='grpConceptos' class='form-control input-sm'>
							<option value=''>-Todos-</option>
							<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaGrpConceptos'],'selected' => $this->_tpl_vars['grpConceptos']), $this);?>

						</select>
					  	<div class="input-group-append">
					    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridPlanPens(3+':'+xajax.$('idAnio').value+':'+xajax.$('idMes').value+':',0);">Buscar</button>
					  	</div>
					</div>
				</div>
				<div class="form-group col-md-2">
					<label class="control-label"><span class='label-red'>*</span> Código</label>
					<div class="input-group mb-3">
						<input id='codConceptos' name='codConceptos' type='text' class='form-control input-sm' value='<?php echo $this->_tpl_vars['codConceptos']; ?>
' />
					  	<div class="input-group-append">
					    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridConceptos(4+':'+xajax.$('codConceptos').value,0);">Buscar</button>
					  	</div>			
					</div>
				</div>
				<div class="form-group col-md-3">
					<label class="control-label"><span class='label-red'>*</span> Concepto</label>
					<div class="input-group mb-3">
						<input id='nomConceptos' name='nomConceptos' type='text' class='form-control input-sm' value='<?php echo $this->_tpl_vars['nomConceptos']; ?>
' />	
					  	<div class="input-group-append">
					    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridConceptos(5+':'+xajax.$('nomConceptos').value,0);">Buscar</button>
					  	</div>		
					</div>
				</div>
			</div>		
		
		

        <script>xajax_llenarGridConceptos(':'+'','');</script>
<center>
<div id='paginacion'></div>
<div id='boxConceptos' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridConceptos = new dhtmlXGridObject('boxConceptos');
                gridConceptos.setDelimiter('|');
                gridConceptos.setHeader('|Imp|Ver|Editar|Tp Conc|Edo|Cod|Concepto|Nom Corto|Afp|Snp|Ipss|Remunerado|Grupo');
                gridConceptos.enableColumnAutoSize(true);
                gridConceptos.setInitWidths('25|60|60|60|60|60|60|*|*|40|40|40|50|50');
                gridConceptos.setColAlign('center|center|center|center|right|right|right|left|left|center|center|center|center|center');
//              gridConceptos.attachEvent('onRowDblClicked',eliminarCondicion);
                gridConceptos.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridConceptos.setColSorting('str|str|str|str|int|int|int|str|str|str|str|str|int|int');
                gridConceptos.setImagePath('../../rec/img/grid/');
                gridConceptos.enableMultiselect(false);
                gridConceptos.enableLightMouseNavigation(true);
                gridConceptos.init();
//			   gridConceptos.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='Conceptosid' name='Conceptosid' value='<?php echo $this->_tpl_vars['Conceptosid']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>