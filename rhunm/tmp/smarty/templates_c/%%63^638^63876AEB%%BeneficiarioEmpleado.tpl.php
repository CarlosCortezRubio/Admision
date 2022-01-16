<?php /* Smarty version 2.6.30, created on 2021-11-03 21:31:37
         compiled from C:%5Claragon%5Cwww%5Crhunm/app/vista/BeneficiarioEmpleado/BeneficiarioEmpleado.tpl */ ?>
<?php echo '
<script type="text/javascript">

validar(\'dniBeneficiario\',\'DNI Beneficiario\',REQUERIDO);
validar(\'dniEmpleado\',\'DNI Empleado\',REQUERIDO);
</script>
'; ?>

<div class='pagina'>
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
		<p class='p-black'>Los campos marcados con <span class='label-red'>*</span> son obligatorios</p>
 		<div class='container-fluid'>
 			<div class="row contenidoVer" style="width:100%">
			 <div class="card">
  <div class="card-header text-primary" >
    EMPLEADO
  </div>
			 <div class="card-body">
			 <div class="form-row">


<div class="form-group col-lg-3">
	<label class="control-label"><span class='label-red'>*</span> DNI del Empleado</label>
		<div class="input-group mb-2">
		<input type="hidden" id='idEmpleado'  name='idEmpleado' value='<?php echo $this->_tpl_vars['idEmpleado']; ?>
' maxlength='64' class='form-control input-sm' />
		<input id='dniEmpleado' name='dniPersona' value='<?php echo $this->_tpl_vars['dniEmpleado']; ?>
' maxlength='64' class='form-control input-sm' />
			<div class="input-group-append">
			<input id="btnBemp" type="button" value="Buscar" onclick="xajax_buscarEmpleado(xajax.$('dniEmpleado').value)"  class="btn btn-primary"   /> 
			
			</div>
		</div>		
	</div>
<div class="form-group col-lg-4">
	<label class="control-label">Primer Nombre  </label>
	<div class="">
	<input id='nom1Empleado' name='nom1Empleado' value='<?php echo $this->_tpl_vars['nomEmpleado']; ?>
' maxlength='64' class='form-control input-sm' disabled />
		
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Apellido  Paterno</label>
	<div class="">
	<input id='ape1Empleado' name='ape1Persona' value='<?php echo $this->_tpl_vars['apeEmpleado']; ?>
' maxlength='64' class='form-control input-sm' disabled />
		
	</div>
</div>
</div>
</div>
<div class="card">
  <div class="card-header text-primary" >
    BENEFICIARIO
  </div>
   <div class="card-body">
<div class="form-row">


<div class="form-group col-lg-3">
	<label class="control-label"><span class='label-red'>*</span> DNI del Beneficiario</label>
		<div class="input-group mb-2">
		<input type="hidden" id='idBeneficiario'  name='idBeneficiario' value='<?php echo $this->_tpl_vars['idBeneficiario']; ?>
' maxlength='64' class='form-control input-sm' />
		<input id='dniBeneficiario' name='dniPersona' value='<?php echo $this->_tpl_vars['dniBeneficiario']; ?>
' maxlength='64' class='form-control input-sm' />
				<div class="input-group-append">
			<input id="btnBemp" type="button" value="Buscar" onclick="xajax_buscarB(xajax.$('dniBeneficiario').value)"  class="btn btn-primary"   /> 
			
			</div>
		</div>		
	</div>


<div class="form-group col-lg-4">
	<label class="control-label">Primer Nombre  </label>
	<div class="">
	<input id='nom1Beneficiario' name='nom1Persona' value='<?php echo $this->_tpl_vars['nomBeneficiario']; ?>
' maxlength='64' class='form-control input-sm' disabled />	
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Apellido  Paterno</label>
	<div class="">
	<input id='ape1Beneficiario' name='ape1Persona' value='<?php echo $this->_tpl_vars['apeBeneficiario']; ?>
' maxlength='64' class='form-control input-sm' disabled />
		
	</div>
</div>
</div>
</div>






	</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='idBeneficiarioEmpleado' name='idBeneficiarioEmpleado' value='<?php echo $this->_tpl_vars['idBeneficiarioEmpleado']; ?>
' readonly/>
		<input type='hidden' id='estado' name='estado' value='1' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>