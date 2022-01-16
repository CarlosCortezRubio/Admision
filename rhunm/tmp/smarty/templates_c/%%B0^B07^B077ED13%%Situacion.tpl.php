<?php /* Smarty version 2.6.30, created on 2022-01-10 21:42:52
         compiled from C:%5Claragon%5Cwww%5Crhunm/app/vista/Situacion/Situacion.tpl */ ?>
<?php echo '
<script type="text/javascript">
validar(\'codSituacion\',\'codSituacion\',REQUERIDO);
validar(\'nomSituacion\',\'nomSituacion\',REQUERIDO);
</script>
'; ?>

<div class='pagina'>
	<form name='form' id='form' method='post' action='<?php echo $this->_tpl_vars['valorForm']; ?>
'>
		<div class='line-title'>
			<h4><?php if ($this->_tpl_vars['opt'] == 'g'): ?> Agregar <?php elseif ($this->_tpl_vars['opt'] == 'm' || $this->_tpl_vars['opt'] == 'mr'): ?> Modificar <?php endif; ?> Situación</h4>
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
	<label class="control-label">Código</label>
	<div class="">
		<input id='codSituacion' name='codSituacion' value='<?php echo $this->_tpl_vars['codSituacion']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nombre</label>
	<div class="">
		<input id='nomSituacion' name='nomSituacion' value='<?php echo $this->_tpl_vars['nomSituacion']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='idSituacion' name='idSituacion' value='<?php echo $this->_tpl_vars['idSituacion']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>