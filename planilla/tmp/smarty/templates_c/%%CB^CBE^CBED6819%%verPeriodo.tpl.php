<?php /* Smarty version 2.6.30, created on 2021-10-29 22:27:11
         compiled from verPeriodo.tpl */ ?>
<div class='pagina'>
<div class="btn-group" role="group" aria-label="...">
<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde"></div>
<div class='line-title-con'>
		<h4>Ficha </h4>
	</div>
</div>
	<form name='form' id='form' method='post' action='<?php echo $this->_tpl_vars['valorForm']; ?>
'>
		<div class='line-title'>
			<h4><?php if ($this->_tpl_vars['opt'] == 'g'): ?> Agregar <?php elseif ($this->_tpl_vars['opt'] == 'm' || $this->_tpl_vars['opt'] == 'mr'): ?> Modificar <?php endif; ?> </h4>
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
 		<div class='container-fluid'>
 			<div class="row contenidoVer" style="width:100%">
<div class="form-group col-lg-4">
	<label class="control-label">Anio Periodo</label>
	<div class="">
		<?php echo $this->_tpl_vars['anioPeriodo']; ?>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Mes Periodo</label>
	<div class="">
		<?php echo $this->_tpl_vars['mesPeriodo']; ?>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nom Periodo</label>
	<div class="">
		<?php echo $this->_tpl_vars['nomPeriodo']; ?>

	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Edo Periodo</label>
	<div class="">
		<?php echo $this->_tpl_vars['edoPeriodo']; ?>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Obs Periodo</label>
	<div class="">
		<?php echo $this->_tpl_vars['obsPeriodo']; ?>

	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='idPeriodo' name='idPeriodo' value='<?php echo $this->_tpl_vars['idPeriodo']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>