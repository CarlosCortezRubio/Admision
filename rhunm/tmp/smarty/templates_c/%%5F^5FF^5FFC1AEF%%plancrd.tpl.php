<?php /* Smarty version 2.6.30, created on 2021-05-08 00:15:31
         compiled from C:%5Cxampp%5Chtdocs%5Cplanilla/app/vista/plancrd/plancrd.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:\\xampp\\htdocs\\planilla/app/vista/plancrd/plancrd.tpl', 94, false),)), $this); ?>
<?php echo '
<script type="text/javascript">
validar(\'idPlanCrd\',\'idPlanCrd\',REQUERIDO);
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
	<label class="control-label">IdPlanCrd plancrd</label>
	<div class="">
		<input id='idPlanCrd' name='idPlanCrd' value='<?php echo $this->_tpl_vars['idPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ape1PlanCrd plancrd</label>
	<div class="">
		<input id='ape1PlanCrd' name='ape1PlanCrd' value='<?php echo $this->_tpl_vars['ape1PlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ape2PlanCrd plancrd</label>
	<div class="">
		<input id='ape2PlanCrd' name='ape2PlanCrd' value='<?php echo $this->_tpl_vars['ape2PlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nom1PlanCrd plancrd</label>
	<div class="">
		<input id='nom1PlanCrd' name='nom1PlanCrd' value='<?php echo $this->_tpl_vars['nom1PlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">NacPlanCrd plancrd</label>
	<div class="">
		<input id='nacPlanCrd' name='nacPlanCrd' value='<?php echo $this->_tpl_vars['nacPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">DniPlanCrd plancrd</label>
	<div class="">
		<input id='dniPlanCrd' name='dniPlanCrd' value='<?php echo $this->_tpl_vars['dniPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FecIngPlanCrd plancrd</label>
	<div class="">
		<input id='fecIngPlanCrd' name='fecIngPlanCrd' value='<?php echo $this->_tpl_vars['fecIngPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">EraDocPlanCrd plancrd</label>
	<div class="">
		<select id='eraDocPlanCrd' name='eraDocPlanCrd' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaEraDocPlanCrd'],'selected' => $this->_tpl_vars['eraDocPlanCrd']), $this);?>

</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IncDespPlanCrd plancrd</label>
	<div class="">
		<input id='incDespPlanCrd' name='incDespPlanCrd' value='<?php echo $this->_tpl_vars['incDespPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">GdoAcadPlanCrd plancrd</label>
	<div class="">
		<input id='gdoAcadPlanCrd' name='gdoAcadPlanCrd' value='<?php echo $this->_tpl_vars['gdoAcadPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">MencPlanCrd plancrd</label>
	<div class="">
		<input id='mencPlanCrd' name='mencPlanCrd' value='<?php echo $this->_tpl_vars['mencPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">UnivMayGPlanCrd plancrd</label>
	<div class="">
		<input id='univMayGPlanCrd' name='univMayGPlanCrd' value='<?php echo $this->_tpl_vars['univMayGPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">PaisPlanCrd plancrd</label>
	<div class="">
		<input id='paisPlanCrd' name='paisPlanCrd' value='<?php echo $this->_tpl_vars['paisPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">PreGPlanCrd plancrd</label>
	<div class="">
		<input id='preGPlanCrd' name='preGPlanCrd' value='<?php echo $this->_tpl_vars['preGPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">MaePlanCrd plancrd</label>
	<div class="">
		<input id='maePlanCrd' name='maePlanCrd' value='<?php echo $this->_tpl_vars['maePlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">DocPlanCrd plancrd</label>
	<div class="">
		<input id='docPlanCrd' name='docPlanCrd' value='<?php echo $this->_tpl_vars['docPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">SedesClasesPlanCrd plancrd</label>
	<div class="">
		<input id='sedesClasesPlanCrd' name='sedesClasesPlanCrd' value='<?php echo $this->_tpl_vars['sedesClasesPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">CatDocPlanCrd plancrd</label>
	<div class="">
		<input id='catDocPlanCrd' name='catDocPlanCrd' value='<?php echo $this->_tpl_vars['catDocPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">DedDocPlanCrd plancrd</label>
	<div class="">
		<input id='dedDocPlanCrd' name='dedDocPlanCrd' value='<?php echo $this->_tpl_vars['dedDocPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">ClasesPlanCrd plancrd</label>
	<div class="">
		<input id='clasesPlanCrd' name='clasesPlanCrd' value='<?php echo $this->_tpl_vars['clasesPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">OtrasActPlanCrd plancrd</label>
	<div class="">
		<input id='otrasActPlanCrd' name='otrasActPlanCrd' value='<?php echo $this->_tpl_vars['otrasActPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">TotHorSemPlanCrd plancrd</label>
	<div class="">
		<input id='totHorSemPlanCrd' name='totHorSemPlanCrd' value='<?php echo $this->_tpl_vars['totHorSemPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">RzaInvPlanCrd plancrd</label>
	<div class="">
		<input id='rzaInvPlanCrd' name='rzaInvPlanCrd' value='<?php echo $this->_tpl_vars['rzaInvPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">EnDinaPlanCrd plancrd</label>
	<div class="">
		<input id='enDinaPlanCrd' name='enDinaPlanCrd' value='<?php echo $this->_tpl_vars['enDinaPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">PerAcadPlanCrd plancrd</label>
	<div class="">
		<input id='perAcadPlanCrd' name='perAcadPlanCrd' value='<?php echo $this->_tpl_vars['perAcadPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">ComPlanCrd plancrd</label>
	<div class="">
		<input id='comPlanCrd' name='comPlanCrd' value='<?php echo $this->_tpl_vars['comPlanCrd']; ?>
' maxlength='64' class='form-control input-sm' />
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='idplancrd' name='idplancrd' value='<?php echo $this->_tpl_vars['idplancrd']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>