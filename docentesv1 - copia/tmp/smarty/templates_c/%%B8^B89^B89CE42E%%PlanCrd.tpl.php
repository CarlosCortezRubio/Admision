<?php /* Smarty version 2.6.30, created on 2021-05-12 20:27:12
         compiled from C:%5Cxampp%5Chtdocs%5Cplanilla/app/vista/PlanCrd/PlanCrd.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:\\xampp\\htdocs\\planilla/app/vista/PlanCrd/PlanCrd.tpl', 75, false),)), $this); ?>
<?php echo '
<script type="text/javascript">
validar(\'ape1PlanCrd\',\'ape1PlanCrd\',REQUERIDO);
validar(\'ape2PlanCrd\',\'ape2PlanCrd\',REQUERIDO);
validar(\'nom1PlanCrd\',\'nom1PlanCrd\',REQUERIDO);
validar(\'nacPlanCrd\',\'nacPlanCrd\',REQUERIDO);
validar(\'dniPlanCrd\',\'dniPlanCrd\',REQUERIDO);
validar(\'fecIngPlanCrd\',\'fecIngPlanCrd\',REQUERIDO);
validar(\'eraDocPlanCrd\',\'eraDocPlanCrd\',REQUERIDO);
validar(\'incDespPlanCrd\',\'incDespPlanCrd\',REQUERIDO);
validar(\'gdoAcadPlanCrd\',\'gdoAcadPlanCrd\',REQUERIDO);
validar(\'mencPlanCrd\',\'mencPlanCrd\',REQUERIDO);
validar(\'univMayGPlanCrd\',\'univMayGPlanCrd\',REQUERIDO);
validar(\'paisPlanCrd\',\'paisPlanCrd\',REQUERIDO);
validar(\'preGPlanCrd\',\'preGPlanCrd\',REQUERIDO);
validar(\'maePlanCrd\',\'maePlanCrd\',REQUERIDO);
validar(\'docPlanCrd\',\'docPlanCrd\',REQUERIDO);
validar(\'sedesClasesPlanCrd\',\'sedesClasesPlanCrd\',REQUERIDO);
validar(\'catDocPlanCrd\',\'catDocPlanCrd\',REQUERIDO);
validar(\'dedDocPlanCrd\',\'dedDocPlanCrd\',REQUERIDO);
validar(\'clasesPlanCrd\',\'clasesPlanCrd\',REQUERIDO);
validar(\'otrasActPlanCrd\',\'otrasActPlanCrd\',REQUERIDO);
validar(\'totHorSemPlanCrd\',\'totHorSemPlanCrd\',REQUERIDO);
validar(\'rzaInvPlanCrd\',\'rzaInvPlanCrd\',REQUERIDO);
validar(\'enDinaPlanCrd\',\'enDinaPlanCrd\',REQUERIDO);
validar(\'perAcadPlanCrd\',\'perAcadPlanCrd\',REQUERIDO);
validar(\'comPlanCrd\',\'comPlanCrd\',REQUERIDO);
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
<div class="form-group col-lg-4">
	<label class="control-label">APELLIDO PATERNO</label>
	<div class="">
		<input id='ape1PlanCrd' name='ape1PlanCrd' value='<?php echo $this->_tpl_vars['ape1PlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label"> APELLIDO MATERNO</label>
	<div class="">
		<input id='ape2PlanCrd' name='ape2PlanCrd' value='<?php echo $this->_tpl_vars['ape2PlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">NOMBRES</label>
	<div class="">
		<input id='nom1PlanCrd' name='nom1PlanCrd' value='<?php echo $this->_tpl_vars['nom1PlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">NACIONALIDAD (País )</label>
	<div class="">
		<input id='nacPlanCrd' name='nacPlanCrd' value='<?php echo $this->_tpl_vars['nacPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">TIPO DE DOCUMENTO</label>
	<div class="">
		<select id='tipoDoc' name='tipoDoc' class='form-control input-sm'>
			<option value=''>-Seleccione-</option>
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaDni'],'selected' => $this->_tpl_vars['dniPlanCrd']), $this);?>

		</select>		
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">N° DE DNI / CARNET DE EXTRANJERÍA</label>
	<div class="">
		<input id='dniPlanCrd' name='dniPlanCrd' value='<?php echo $this->_tpl_vars['dniPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FECHA DE INGRESO COMO DOCENTE EN LA UNIVERSIDAD</label>
	<div class="">
		<input id='fecIngPlanCrd' name='fecIngPlanCrd' value='<?php echo $this->_tpl_vars['fecIngPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">¿ERA DOCENTE UNIVERSITARIO A LA ENTRADA EN VIGENCIA DE LA LEY 30220, LU?</label>
	<div class="">
		<select id='eraDocPlanCrd' name='eraDocPlanCrd' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaEraDocPlanCrd'],'selected' => $this->_tpl_vars['eraDocPlanCrd']), $this);?>

</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">¿EL DOCENTE FUE INCORPORADO DESPUÉS DE LA OBTENCIÓN DE LA LICENCIA DE FUNCIONAMIENTO INSTUCIONAL?</label>
	<div class="">
		<select id='incDespPlanCrd' name='incDespPlanCrd' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaIncDespPlanCrd'],'selected' => $this->_tpl_vars['incDespPlanCrd']), $this);?>

</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">MAYOR GRADO ACADÉMICO DEL DOCENTE</label>
	<div class="">
<!-- 		<input id='gdoAcadPlanCrd' name='gdoAcadPlanCrd' value='<?php echo $this->_tpl_vars['gdoAcadPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' /> -->
		<select id='gdoAcadPlanCrd' name='gdoAcadPlanCrd' class='form-control input-sm'>
			<option value=''>-Seleccione-</option>
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaGrado'],'selected' => $this->_tpl_vars['gdoAcadPlanCrd']), $this);?>

		</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">MENCIÓN DEL MAYOR GRADO DOCENTE</label>
	<div class="">
		<input id='mencPlanCrd' name='mencPlanCrd' value='<?php echo $this->_tpl_vars['mencPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">UNIVERSIDAD QUE OTORGÓ EL MAYOR GRADO DOCENTE</label>
	<div class="">
		<input id='univMayGPlanCrd' name='univMayGPlanCrd' value='<?php echo $this->_tpl_vars['univMayGPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">PAÍS / UNIVERSIDAD QUE OTORGÓ EL MAYOR GRADO DEL DOCENTE</label>
	<div class="">
		<input id='paisPlanCrd' name='paisPlanCrd' value='<?php echo $this->_tpl_vars['paisPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">PREGRADO</label>
	<div class="">
		<select id='preGPlanCrd' name='preGPlanCrd' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaPreGPlanCrd'],'selected' => $this->_tpl_vars['preGPlanCrd']), $this);?>

</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">MAESTRÍA</label>
	<div class="">
		<select id='maePlanCrd' name='maePlanCrd' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaMaePlanCrd'],'selected' => $this->_tpl_vars['maePlanCrd']), $this);?>

</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">DOCTORADO</label>
	<div class="">
		<select id='docPlanCrd' name='docPlanCrd' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaDocPlanCrd'],'selected' => $this->_tpl_vars['docPlanCrd']), $this);?>

</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">CÓDIGO(S) DE SEDE Y  FILIAL(ES) EN LA(S) QUE DICTA CLASES</label>
	<div class="">
		<input id='sedesClasesPlanCrd' name='sedesClasesPlanCrd' value='<?php echo $this->_tpl_vars['sedesClasesPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">CATEGORÍA DOCENTE</label>
	<div class="">
<!-- 		<input id='catDocPlanCrd' name='catDocPlanCrd' value='<?php echo $this->_tpl_vars['catDocPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' /> -->
		<select id='catDocPlanCrd' name='catDocPlanCrd' class='form-control input-sm'>
			<option value=''>-Seleccione-</option>
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaCat'],'selected' => $this->_tpl_vars['catDocPlanCrd']), $this);?>

		</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">RÉGIMEN DE DEDICACIÓN</label>
	<div class="">
<!-- 		<input id='dedDocPlanCrd' name='dedDocPlanCrd' value='<?php echo $this->_tpl_vars['dedDocPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' /> -->
		<select id='dedDocPlanCrd' name='dedDocPlanCrd' class='form-control input-sm'>
			<option value=''>-Seleccione-</option>
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaDed'],'selected' => $this->_tpl_vars['dedDocPlanCrd']), $this);?>

		</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">CLASES</label>
	<div class="">
		<input id='clasesPlanCrd' name='clasesPlanCrd' value='<?php echo $this->_tpl_vars['clasesPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">OTRAS ACTIVIDADES</label>
	<div class="">
		<input id='otrasActPlanCrd' name='otrasActPlanCrd' value='<?php echo $this->_tpl_vars['otrasActPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">TOTAL HORAS SEMANALES</label>
	<div class="">
		<input id='totHorSemPlanCrd' name='totHorSemPlanCrd' value='<?php echo $this->_tpl_vars['totHorSemPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">DOCENTE REALIZA INVESTIGACIÓN</label>
	<div class="">
		<select id='rzaInvPlanCrd' name='rzaInvPlanCrd' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaRzaInvPlanCrd'],'selected' => $this->_tpl_vars['rzaInvPlanCrd']), $this);?>

</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">DOCENTE REGISTRADO EN DINA</label>
	<div class="">
		<select id='enDinaPlanCrd' name='enDinaPlanCrd' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaEnDinaPlanCrd'],'selected' => $this->_tpl_vars['enDinaPlanCrd']), $this);?>

</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">CODIGO ORCID</label>
	<div class="">
		<select id='enDinaPlanCrd' name='enDinaPlanCrd' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaEnDinaPlanCrd'],'selected' => $this->_tpl_vars['enDinaPlanCrd']), $this);?>

</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">PERIODO ACADÉMICO</label>
	<div class="">
		<input id='perAcadPlanCrd' name='perAcadPlanCrd' value='<?php echo $this->_tpl_vars['perAcadPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">MODALIDAD(PRESENCIAL / VIRTUAL)</label>
	<div class="">
		<input id='perAcadPlanCrd' name='perAcadPlanCrd' value='<?php echo $this->_tpl_vars['perAcadPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">CV ACTUALIZADO</label>
	<div class="">
<!-- 		<input id='perAcadPlanCrd' name='perAcadPlanCrd' value='<?php echo $this->_tpl_vars['perAcadPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' /> -->
		<input type="button" id='ape1PlanCrd' name='ape1PlanCrd' value='Subir CV' maxlength='64' class='form-control btn btn-success' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FOTO</label>
	<div class="">
		<input type="button" id='ape1PlanCrd' name='ape1PlanCrd' value='Subir Foto' maxlength='64' class='form-control btn btn-success' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">COMENTARIOS</label>
	<div class="">
		<textarea id='comPlanCrd' name='comPlanCrd' class='form-control input-sm'><?php echo $this->_tpl_vars['comPlanCrd']; ?>
</textarea>
<!-- 		<input id='comPlanCrd' name='comPlanCrd' value='<?php echo $this->_tpl_vars['comPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' /> -->
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='idPlanCrd' name='idPlanCrd' value='<?php echo $this->_tpl_vars['idPlanCrd']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>