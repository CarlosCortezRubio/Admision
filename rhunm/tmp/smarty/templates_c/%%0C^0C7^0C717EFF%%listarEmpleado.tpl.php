<?php /* Smarty version 2.6.30, created on 2021-12-10 14:10:46
         compiled from C:%5Claragon%5Cwww%5Crhunm/app/vista/Empleado/listarEmpleado.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:\\laragon\\www\\rhunm/app/vista/Empleado/listarEmpleado.tpl', 42, false),)), $this); ?>
<!-- <script type='text/javascript' src='<?php echo $this->_tpl_vars['PATH_JS_XAJAX']; ?>
Empleado.js'></script>-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../app/comun/libGrid.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class='pagina'>
	<form name='form' id='form' method='post' action='<?php echo $this->_tpl_vars['valorForm']; ?>
'>
		<div class='line-title'>
			<h4>Listar Empleado</h4>
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
				
				<div class="form-group col-md-3">
					<label class="control-label"><span class='label-red'>*</span> DNI del Empleado</label>
					<div class="input-group mb-3">
						<input type='text' class="form-control input-sm" id='dniPersona' name='opt' value=''/>
					  	<div class="input-group-append">
					    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridEmpleado(1+':'+xajax.$('dniPersona').value+':'+xajax.$('nomPersona').value+':'+xajax.$('idSituacion').value,0);">Buscar</button>
					  	</div>
					</div>
				</div>
				<div class="form-group col-md-4">
					<label class="control-label"><span class='label-red'>*</span> Nombre de Persona</label>
					<div class="input-group mb-3">
						<input type='text' class="form-control input-sm" id='nomPersona' name='opt' value=''/>
					  	<div class="input-group-append">
						<button type="button" class="btn btn-primary" onclick="xajax_llenarGridEmpleado(2+':'+xajax.$('dniPersona').value+':'+xajax.$('nomPersona').value+':'+xajax.$('idSituacion').value,0);">Buscar</button>
					  	</div>
					</div>
				</div>

                                <div class="form-group col-md-3">
					<label class="control-label"><span class='label-red'>*</span>Situación</label>
					<div class="input-group mb-3">
					<select id='idSituacion' name='idSituacion' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaSituacion'],'selected' => $this->_tpl_vars['idSituacion']), $this);?>

					</select>
					  	<div class="input-group-append">
					    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridEmpleado(3+':'+xajax.$('dniPersona').value+':'+xajax.$('nomPersona').value+':'+xajax.$('idSituacion').value,0);">Buscar</button>
					  	</div>				
					</div>
				</div>
			</div>		
		<fieldset>
        <script>xajax_llenarGridEmpleado('','');</script>
<center>
<div id='cantReg' name='cantReg'></div>
<div id='paginacion'></div>
<div id='boxEmpleado' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridEmpleado = new dhtmlXGridObject('boxEmpleado');
                gridEmpleado.setDelimiter('|');
                //gridEmpleado.setHeader('|Imp|Ver|Editar|Id|Documento|Primer Nombre|Segundo Nombre|Apellido Paterno|Apellido Materno|Fecha nac|Teléfono Cel.|);
                gridEmpleado.setHeader('|Imp|Ver|Editar|Id|Documento|Primer Nombre|Segundo Nombre|Apellido Paterno|Apellido Materno|Fecha Nac');
                gridEmpleado.enableColumnAutoSize(true);
                gridEmpleado.setInitWidths('25|60|60|60|60|99|101|130|*|*|150|');
                gridEmpleado.setColAlign('center|center|center|center|right|right|right|right|left|left|center|right');//            
                gridEmpleado.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridEmpleado.setColSorting('str|str|str|str|int|int|int|int|int|int|int');
                gridEmpleado.setImagePath('../../rec/img/grid/');
                gridEmpleado.enableMultiselect(false);
                gridEmpleado.enableLightMouseNavigation(true);
                gridEmpleado.init();
//			   gridEmpleado.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='Empleadoid' name='Empleadoid' value='<?php echo $this->_tpl_vars['Empleadoid']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>