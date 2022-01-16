<?php /* Smarty version 2.6.30, created on 2021-10-29 22:27:44
         compiled from C:%5Claragon%5Cwww%5Cplanilla/app/vista/Periodo/Duplicar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:\\laragon\\www\\planilla/app/vista/Periodo/Duplicar.tpl', 33, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../app/comun/libGrid.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script type="text/javascript">
validar(\'anioPeriodo\',\'anioPeriodo\',REQUERIDO);
validar(\'mesPeriodo\',\'mesPeriodo\',REQUERIDO);
validar(\'nomPeriodo\',\'nomPeriodo\',REQUERIDO);
validar(\'edoPeriodo\',\'edoPeriodo\',REQUERIDO);
validar(\'obsPeriodo\',\'obsPeriodo\',REQUERIDO);
</script>
'; ?>

<div class='pagina'>
	<form name='form' id='form' method='post' action='<?php echo $this->_tpl_vars['valorForm']; ?>
'>
		<div class='line-title'>
			<h4>Duplicar planilla</h4>
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
		<fieldset>
		<p class='p-black'>Los campos marcados con <span class='label-red'>*</span> son obligatorios</p>
 		<div class='container-fluid'>
 			<div class="row contenidoVer" style="width:100%">
 			<?php if ($this->_tpl_vars['band'] == ''): ?>
<div class="form-group col-lg-4">
	<label class="control-label">Tipo de Planilla</label>
	<div class="">
		<select id='idTipoPlanilla' name='idTipoPlanilla' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaTipoPlanilla']), $this);?>

</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Periodo a duplicar (Origen)</label>
	<div class="">
		<select id='idPeriodoOrigen' name='idPeriodoOrigen' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaPeriodo']), $this);?>

</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Periodo activo (Destino)</label>
	<div class="">
		Nombre: <b><?php echo $this->_tpl_vars['nomPeriodo']; ?>
</b><br>
		Año: <b><?php echo $this->_tpl_vars['anioPeriodo']; ?>
</b><br>
		Mes: <b><?php echo $this->_tpl_vars['mesPeriodo']; ?>
</b><br>
</select>
	</div>
</div>
		</div>
<input type="button" onclick="xajax_duplicar(xajax.$('idTipoPlanilla').value,xajax.$('idPeriodoOrigen').value,xajax.$('idPeriodo').value,xajax.$('anioPeriodo').value,xajax.$('mesPeriodo').value);" value="Duplicar" class="btn btn-primary">
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='idPeriodo' name='idPeriodo' value='<?php echo $this->_tpl_vars['idPeriodo']; ?>
' readonly/>
		<input type='hidden' id='anioPeriodo' name='anioPeriodo' value='<?php echo $this->_tpl_vars['anioPeriodo']; ?>
' readonly/>
		<input type='hidden' id='mesPeriodo' name='mesPeriodo' value='<?php echo $this->_tpl_vars['mesPeriodo']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>
<?php else: ?>
No hay periodo abierto para poder hacer el duplicado, pulse &nbsp;<a href="<?php echo $this->_tpl_vars['URLSIST']; ?>
base/Periodo"> Aquí </a>&nbsp; sí desea aperturar un periodo
<?php endif; ?>
	</form>
</div>