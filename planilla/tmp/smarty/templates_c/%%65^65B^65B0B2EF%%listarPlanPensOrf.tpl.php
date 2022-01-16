<?php /* Smarty version 2.6.30, created on 2021-10-11 20:05:24
         compiled from C:%5Claragon%5Cwww%5Cplanilla/app/vista/PlanPensOrf/listarPlanPensOrf.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:\\laragon\\www\\planilla/app/vista/PlanPensOrf/listarPlanPensOrf.tpl', 22, false),)), $this); ?>
<!-- <script type='text/javascript' src='<?php echo $this->_tpl_vars['PATH_JS_XAJAX']; ?>
PlanPens.js'></script>-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../app/comun/libGrid.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class='pagina' style="width:95%">
	<form name='form' id='form' method='post' action='<?php echo $this->_tpl_vars['valorForm']; ?>
'>
		<div class='line-title'>
			<h4>Listar Orfandad</h4>
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
		    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridPlanPens(3+':'+xajax.$('idAnio').value+':'+xajax.$('idMes').value+':',0);">Buscar</button>
		  	</div>				
		</div>
	</div>
	<div class="form-group col-md-3">
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
		<fieldset>
        <script>xajax_llenarGridPlanPens(3+':'+xajax.$('idAnio').value+':'+xajax.$('idMes').value+':',0);</script>
<center>
<div id='cantReg' name='cantReg'>****</div>
<div id='paginacion'></div>
<div id='boxPlanPens' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridPlanPens = new dhtmlXGridObject('boxPlanPens');
                gridPlanPens.setDelimiter('|');
                gridPlanPens.setHeader('|Imp|Ver|Editar|Año|Mes|Dni|Apellidos y nombres|Planilla|Contrasena|FecCreacion|T imp|T haber|T desc.|T liquido');
                gridPlanPens.enableColumnAutoSize(true);
                gridPlanPens.setInitWidths('25|60|60|50|40|40|70|*|80|110|110|70|70|70|70');
                gridPlanPens.setColAlign('center|center|center|center|center|center|right|left|center|center|center|center|center|center|center');
//              gridPlanPens.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPlanPens.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridPlanPens.setColSorting('str|str|str|str|int|int|int|int|str|str|str|int|int|int|int');
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