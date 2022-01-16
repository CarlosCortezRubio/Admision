<?php /* Smarty version 2.6.30, created on 2021-11-01 17:31:51
         compiled from C:%5Claragon%5Cwww%5Crhunm/app/vista/Departamento/Departamento.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:\\laragon\\www\\rhunm/app/vista/Departamento/Departamento.tpl', 28, false),)), $this); ?>
<?php echo '
<script type="text/javascript">
validar(\'idPais\',\'idPais\',REQUERIDO);
validar(\'nomDepartamento\',\'nomDepartamento\',REQUERIDO);
</script>
'; ?>

<div class='pagina'>
	<form name='form' id='form' method='post' action='<?php echo $this->_tpl_vars['valorForm']; ?>
'>
		<div class='line-title'>
			<h4><?php if ($this->_tpl_vars['opt'] == 'g'): ?> Agregar <?php elseif ($this->_tpl_vars['opt'] == 'm' || $this->_tpl_vars['opt'] == 'mr'): ?> Modificar <?php endif; ?> Departamento</h4>
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
<div class="form-group col-lg-4">
	<label class="control-label">País Departamento</label>
	<div class="">
		<select id='idPais' name='idPais' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaPais'],'selected' => $this->_tpl_vars['idPais']), $this);?>

</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Departamento</label>
	<div class="">
		<input id='nomDepartamento' name='nomDepartamento' value='<?php echo $this->_tpl_vars['nomDepartamento']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='idDepartamento' name='idDepartamento' value='<?php echo $this->_tpl_vars['idDepartamento']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>