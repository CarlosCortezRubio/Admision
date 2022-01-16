<?php /* Smarty version 2.6.30, created on 2021-12-10 00:33:33
         compiled from verPersona.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'verPersona.tpl', 27, false),)), $this); ?>
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
	<label class="control-label">Género</label>
	<div class="">
		<select id='idGenero' name='idGenero' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaGenero'],'selected' => $this->_tpl_vars['idGenero']), $this);?>

</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Estado Civil</label>
	<div class="">
		<select id='idEdoCivil' name='idEdoCivil' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaEdoCivil'],'selected' => $this->_tpl_vars['idEdoCivil']), $this);?>

</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Idioma</label>
	<div class="">
		<select id='idIdioma' name='idIdioma' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaIdioma'],'selected' => $this->_tpl_vars['idIdioma']), $this);?>

</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Distrito Nacimiento</label>
	<div class="">
		<select id='idDistritoNac' name='idDistritoNac' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaDistrito'],'selected' => $this->_tpl_vars['idDistritoNac']), $this);?>

</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Distrito Direccion</label>
	<div class="">
		<select id='idDistritoDir' name='idDistritoDir' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaDistrito'],'selected' => $this->_tpl_vars['idDistritoDir']), $this);?>

</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tipo Documento</label>
	<div class="">
		<select id='idTipoDoc' name='idTipoDoc' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaTipoDoc'],'selected' => $this->_tpl_vars['idTipoDoc']), $this);?>

</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Zona</label>
	<div class="">
		<select id='idZona' name='idZona' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaZona'],'selected' => $this->_tpl_vars['idZona']), $this);?>

</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Via</label>
	<div class="">
		<select id='idVia' name='idVia' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaVia'],'selected' => $this->_tpl_vars['idVia']), $this);?>

</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Dni Persona</label>
	<div class="">
		<?php echo $this->_tpl_vars['dniPersona']; ?>

	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Primer Nombre</label>
	<div class="">
		<?php echo $this->_tpl_vars['nom1Persona']; ?>

	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Segundo Nombre</label>
	<div class="">
		<?php echo $this->_tpl_vars['nom2Persona']; ?>

	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Apellido Paterno </label>
	<div class="">
		<?php echo $this->_tpl_vars['ape1Persona']; ?>

	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Apellido Materno</label>
	<div class="">
		<?php echo $this->_tpl_vars['ape2Persona']; ?>

	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Número de Dependientes</label>
	<div class="">
		<?php echo $this->_tpl_vars['numDepPersona']; ?>

	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha Nacimiento</label>
	<div class="">
		<?php echo $this->_tpl_vars['fecNacPersona']; ?>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Zona </label>
	<div class="">
		<?php echo $this->_tpl_vars['zonaDomPersona']; ?>

	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Descripcion Via </label>
	<div class="">
		<?php echo $this->_tpl_vars['desViaDomPersona']; ?>

	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Número de via</label>
	<div class="">
		<?php echo $this->_tpl_vars['numViaDomPersona']; ?>

	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Interior </label>
	<div class="">
		<?php echo $this->_tpl_vars['intDomPersona']; ?>

	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Teléfono </label>
	<div class="">
		<?php echo $this->_tpl_vars['tel1DomPersona']; ?>

	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Otro Teléfono</label>
	<div class="">
		<?php echo $this->_tpl_vars['tel2DomPersona']; ?>

	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Refenrencia Domicilio</label>
	<div class="">
		<?php echo $this->_tpl_vars['refDomPersona']; ?>

	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Correo Electrónico Persona</label>
	<div class="">
		<?php echo $this->_tpl_vars['emaDomPersona']; ?>

	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='idPersona' name='idPersona' value='<?php echo $this->_tpl_vars['idPersona']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>