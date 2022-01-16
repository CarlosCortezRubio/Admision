<?php /* Smarty version 2.6.30, created on 2021-11-01 16:17:19
         compiled from C:%5Claragon%5Cwww%5Crhunm/app/vista/Beneficiario/Beneficiario.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:\\laragon\\www\\rhunm/app/vista/Beneficiario/Beneficiario.tpl', 154, false),)), $this); ?>
<?php echo '
<script type="text/javascript">

validar(\'idPers\',\'Persona\',REQUERIDO);
validar(\'dniPers\',\'Dni\',REQUERIDO);
validar(\'nom1Person\',\'Dni\',REQUERIDO);
validar(\'idTipoCalcJud\',\'Tipo Calculo Judicial\',REQUERIDO);
validar(\'idParentesco\',\'Parentesco\',REQUERIDO);
validar(\'idModoPago\',\'Modo Pago\',REQUERIDO);
validar(\'CESSaludBeneficiario\',\'CESSalud\',REQUERIDO);
validar(\'leyendaBeneficiario\',\'Leyenda\',REQUERIDO);
validar(\'ctaDepBeneficiario\',\'Cuenta de Desposito\',REQUERIDO);
validar(\'regJudicialBeneficiario\',\'regJudicialBeneficiario\',REQUERIDO);
validar(\'fecIniBeneficiario\',\'Fecha Inicio\',REQUERIDO);
validar(\'fecFinBeneficiario\',\'Fecha Termino\',REQUERIDO);
validar(\'edoBeneficiario\',\'Estado\',REQUERIDO);
validar(\'idEmpleado\',\'Empleado\',REQUERIDO);
</script>
'; ?>

<div class='pagina'>
	<form name='form' id='form' method='post' action='<?php echo $this->_tpl_vars['valorForm']; ?>
'>
		<div class='line-title'>
			<h4><?php if ($this->_tpl_vars['opt'] == 'g'): ?> Agregar <?php elseif ($this->_tpl_vars['opt'] == 'm' || $this->_tpl_vars['opt'] == 'mr'): ?> Modificar <?php endif; ?> </h4>
		</div>

		
		<nav>
		<div class="nav nav-tabs" id="nav-tab" role="tablist">
			<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Seccion 1 </a>
			<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Seccion 2</a>
		<!--	<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false" type="hidden">Seccion 3</a> -->
			
		</div>
		</nav>
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

			 	<div class="tab-content" id="nav-tabContent" style="width:100%">
 		<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" style="width:100%">




<div class="form-row">


	<div class="form-group col-lg-3" <?php if ($this->_tpl_vars['ocultar'] == 10): ?> style="display: none" <?php endif; ?>>
	<label class="control-label"><span class='label-red'>*</span> DNI del Empleado</label>
		<div class="input-group mb-2">
			<input id='dniEmpleado' name='dniPersona' value='<?php echo $this->_tpl_vars['dniEmpleado']; ?>
' maxlength='64' class='form-control input-sm' />
			<div class="input-group-append">
			<button id="btnBemp"   onclick="xajax_buscarEmp(xajax.$('dniEmpleado').value)"  class="btn btn-primary"  > Buscar</button>
			
	
			</div>
		</div>		
	</div>
<div class="form-group col-lg-3" <?php if ($this->_tpl_vars['ocultar'] == 10): ?> style="display: none" <?php endif; ?>>
	<label class="control-label">Nombre Empleado  </label>
	<div class="">
	<input id='nom1Empleado' name='nom1Persona' value='<?php echo $this->_tpl_vars['nom1Empleado']; ?>
' maxlength='64' class='form-control input-sm' disabled />
	
	</div>
</div>

<div class="form-group col-lg-3" <?php if ($this->_tpl_vars['ocultar'] == 10): ?> style="display: none" <?php endif; ?>>
	<label class="control-label">Apellido  Empleado</label>
	<div class="">
		<input id='ape1Empleado' name='ape1Persona' value='<?php echo $this->_tpl_vars['ape1Empleado']; ?>
' maxlength='64' class='form-control input-sm mr-1' disabled />
	
	</div>
	</div>



</div>


<div class="form-row">


<div class="form-group col-lg-3">
	<label class="control-label"><span class='label-red'>*</span> DNI de La Persona</label>
		<div class="input-group mb-2">
			<input type="hidden" id='idPers'  name='idPersona' value='<?php echo $this->_tpl_vars['idPersona']; ?>
' maxlength='64' class='form-control input-sm' />
		<input id='dniPers' name='dniPersona' value='<?php echo $this->_tpl_vars['dniPersona']; ?>
' maxlength='64' class='form-control input-sm' />
		
			<div class="input-group-append">
			<input value="Buscar" onclick="xajax_searchPersona(xajax.$('dniPers').value)"  class="btn btn-primary" type="button" >
	
			</div>
		</div>		
	</div>

<div class="form-group col-lg-3">
	<label class="control-label">Primer Nombre </label>
	<div class="">
	<input id='nom1Person' name='nom1Persona' value='<?php echo $this->_tpl_vars['nom1Persona']; ?>
' maxlength='64' class='form-control input-sm' disabled />
		
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">Apellido Paterno </label>
	<div class="">
	<input id='ape1Person' name='ape1Persona' value='<?php echo $this->_tpl_vars['ape1Persona']; ?>
' maxlength='64' class='form-control input-sm' disabled />
		
	</div>
</div>
	<div class="form-group col-lg-2">
	<label class="control-label" ></label>
	<div class="">
		
		<!-- <input type='hidden' id="agrePersona" value="Agregar Persona" class="btn btn-primary mr-1" type="button"   > -->
		<!--<button id="btnAgrePersona" name="btnAgrePersona" type="button" class="btn btn-primary">Agregar Persona</button>-->
	
	</div>
	</div>
	<div>
	<?php echo '

	<script>
	jQuery(\'#btnAgrePersona\').on(\'click\',function(){
	jQuery(\'.modal-body\').load(\''; ?>
<?php echo $this->_tpl_vars['URLSIST']; ?>
base/Persona/addPersona<?php echo '\',function(){
			jQuery(\'#tituloModal\').html(\'Agregar Persona\');	
			jQuery(\'#modalEmergentes\').modal({show:true});
			
		});
	});
	//jQuery(\'#btnAgrePersona\').on(\'click\',function(){
	//	vntConsultar(\'Persona/addPersona/addPersona\', \'Agrgear Persona\');
//	});
	</script>
	'; ?>

	</div>
</div>



<div class="form-row">
<div class="form-group col-lg-4">
	<label class="control-label">Tipo Calculo Judicial </label>
	<div class="">
	<select id='idTipoCalcJud' name='idTipoCalcJud' class='form-control input-sm'>
				<option value=''>-Seleccione-</option>
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaTipoCalcJud'],'selected' => $this->_tpl_vars['idTipoCalcJud']), $this);?>

			</select>
	</div>
</div>


<div class="form-group col-lg-4">
	<label class="control-label">Modo de Pago </label>
	<div class="">
	<select id='idModoPago' name='idModoPago' class='form-control input-sm'>
				<option value=''>-Seleccione-</option>
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaModoPago'],'selected' => $this->_tpl_vars['idModoPago']), $this);?>

			</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Parentesco </label>
	<div class="">
	<select id='idParentesco' name='idParentesco' class='form-control input-sm'>
				<option value=''>-Seleccione-</option>
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaParentesco'],'selected' => $this->_tpl_vars['idParentesco']), $this);?>

			</select>
	</div>
</div>

</div>

</div>


<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

<div class="form-row">
	<div class="form-group col-lg-4">
		<label class="control-label">CESSalud</label>
				<div class="">
					<input id='CESSaludBeneficiario' name='CESSaludBeneficiario' value='<?php echo $this->_tpl_vars['CESSaludBeneficiario']; ?>
' maxlength='32' class='form-control input-sm' />
				</div>
	</div>

	<div class="form-group col-lg-4">
		<label class="control-label">Tipo Pensionista</label>
				<div class="">
					<input id='tPensBeneficiario' name='tPensBeneficiario' value='<?php echo $this->_tpl_vars['tPensBeneficiario']; ?>
' maxlength='32' class='form-control input-sm' />
				</div>
	</div>

<div class="form-group col-lg-4">
		<label class="control-label">Plaza</label>
				<div class="">
					<input id='plazaBeneficiario' name='plazaBeneficiario' value='<?php echo $this->_tpl_vars['plazaBeneficiario']; ?>
' maxlength='32' class='form-control input-sm' />
				</div>

</div>

</div>

<div class="form-row">
<div class="form-group col-lg-4">
		<label class="control-label">Leyenda</label>
				<div class="">
					<input id='leyendaBeneficiario' name='leyendaBeneficiario' value='<?php echo $this->_tpl_vars['leyendaBeneficiario']; ?>
' maxlength='32' class='form-control input-sm' />
				</div>

</div>
<div class="form-group col-lg-4">
		<label class="control-label">Cuenta de Deposito</label>
				<div class="">
					<input id='ctaDepBeneficiario' name='ctaDepBeneficiario' value='<?php echo $this->_tpl_vars['ctaDepBeneficiario']; ?>
' maxlength='32' class='form-control input-sm' />
				</div>

</div>
<div class="form-group col-lg-4">
		<label class="control-label">Reg. Judicial</label>
				<div class="">
					<input id='regJudicialBeneficiario' name='regJudicialBeneficiario' value='<?php echo $this->_tpl_vars['regJudicialBeneficiario']; ?>
' type='number' class='form-control input-sm' />
				</div>

</div>
</div>
<div class="form-row">
<div class="form-group col-lg-4">
	<label class="control-label">Fecha de Inicio </label>
	<div class="">
		<div class="input-group input-group-sm">	
			<input id='fecIniBeneficiario' name='Fecha Inicio' class='form-control input-sm' type='date' value='<?php echo $this->_tpl_vars['fecIniBeneficiario']; ?>
'   >

		</div>
	</div>
</div>

	<div class="form-group col-lg-4">
	<label class="control-label">Fecha Termmino </label>
	<div class="">
		<div class="input-group input-group-sm">	
			<input id='fecFinBeneficiario' name='fecFinBeneficiario' class='form-control input-sm' type='date' value='<?php echo $this->_tpl_vars['fecFinBeneficiario']; ?>
'   >

		</div>
	</div>
</div>
<div class="form-group col-lg-4">
		<label class="control-label">Estado</label>
				<div class="">
					<input id='edoBeneficiario' name='edoBeneficiario' value='<?php echo $this->_tpl_vars['edoBeneficiario']; ?>
' type='number' class='form-control input-sm' />
				</div>

</div>
</div>
</div>
<!--
 <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
  
  
</div>-->

	</div>
</div>
<input type="hidden" id='idEmpleado'  name='idEmpleado' value='<?php echo $this->_tpl_vars['idEmpleado']; ?>
' maxlength='64' class='form-control input-sm' />
		
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='idBeneficiario' name='idBeneficiario' value='<?php echo $this->_tpl_vars['idBeneficiario']; ?>
' readonly/>
		
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>