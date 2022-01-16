<?php /* Smarty version 2.6.30, created on 2021-11-22 14:29:26
         compiled from C:%5Claragon%5Cwww%5Crhunm/app/vista/planillaPensionado/planillaPensionado.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:\\laragon\\www\\rhunm/app/vista/planillaPensionado/planillaPensionado.tpl', 60, false),array('modifier', 'date_format', 'C:\\laragon\\www\\rhunm/app/vista/planillaPensionado/planillaPensionado.tpl', 183, false),)), $this); ?>
<?php echo '
<script type="text/javascript">
//validar(\'idEmpleado\',\'idEmpleado planillaPensionado\',REQUERIDO);
validar(\'idPeriodo\',\'IdPeriodo planillaPensionado\',REQUERIDO);
validar(\'fecplanillaPensionado\',\'Fec planillaPensionado\',REQUERIDO);
validar(\'totImpplanillaPensionado\',\'Total imponible\',REQUERIDO);
validar(\'totHabplanillaPensionado\',\'Total haber\',REQUERIDO);
validar(\'totDescplanillaPensionado\',\'Total descuentos\',REQUERIDO);
validar(\'totLiqplanillaPensionado\',\'Total liquido\',REQUERIDO);

//validar(\'dniPersona\',\'DNI\',REQUERIDO);
validar(\'apellidos_y_nombresPersona\',\'Apellidos y Nombres\',REQUERIDO);
</script>
'; ?>

<div class='pagina container'>

	<form name='form' id='form' method='post' action='<?php echo $this->_tpl_vars['valorForm']; ?>
'>
		<div class='line-title'>
			<h4><?php if ($this->_tpl_vars['opt'] == 'g'): ?> Agregar <?php elseif ($this->_tpl_vars['opt'] == 'm' || $this->_tpl_vars['opt'] == 'mr'): ?> Modificar <?php endif; ?> Planilla</h4>
			<div class="form-group col-lg-12" style="position:fixed;z-index: 2000;top: 188px;left: 250px;">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
				  <li class="nav-item">
				    <a class="nav-link active" data-toggle="tab" href="#home">DATOS PERSONALES/ADICIONALES</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" data-toggle="tab" href="#menu1" onclick="totalizar();">INGRESOS</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" data-toggle="tab" href="#menu2" onclick="totalizar();">DESCUENTOS</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" data-toggle="tab" href="#menu3" onclick="totalizar();">TOTALES</a>
				  </li>
				</ul>
			</div>						
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
		<!-- ********************************************************************************************************** -->
 		<div class='container-fluid'>
 			<div class="row contenidoVer" style="width:100%;padding-top:35px;">
				<p class='p-black'>Los campos marcados con <span class='label-red'>*</span> son obligatorios</p>
				<div class="form-group col-lg-12">
					<!-- Tab panes -->
					<div class="tab-content">
					  	<div class="tab-pane container active row" id="home">
						  	<div class="row">
								<div class="form-group col-lg-3">
									<label class="control-label">Año </label>
									<div class="">
										<select id='anio' name='anio' class='form-control input-sm' disabled>
											<option value=''>-Seleccione-</option>
											<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaAnio'],'selected' => $this->_tpl_vars['anio']), $this);?>

										</select>
									</div>
								</div>
								<div class="form-group col-lg-2">
									<label class="control-label">Mes</label>
									<div class="">
										<select id='mes' name='mes' class='form-control input-sm' disabled>
											<option value=''>-Seleccione-</option>
											<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaMes'],'selected' => $this->_tpl_vars['mes']), $this);?>

										</select>
									</div>
								</div>	
								<div class="form-group col-lg-3">
									<label class="control-label"> Nombre del Periodo</label>
									<div class="input-group mb-3">
										<?php echo $this->_tpl_vars['nomPeriodo']; ?>

									</div>		
								</div>			
								<div class="form-group col-lg-3">
									<label class="control-label"><span class='label-red'>*</span> DNI del Personal</label>
									<div class="input-group mb-3">
										<input type='text' class="form-control input-sm" id='docPersona' name='docPersona' value='<?php echo $this->_tpl_vars['docPersona']; ?>
'/>
										<?php if ($this->_tpl_vars['opt'] == 'g'): ?>
									  	<div class="input-group-append">
									    	<button type="button" class="btn btn-primary" onclick="xajax_buscarDocente(xajax.$('docPersona').value);">Buscar</button>
									  	</div>
									  	<?php endif; ?>
									</div>		
								</div>											
<!-- 								<div class="form-group col-lg-2"> -->
<!-- 									<label class="control-label">Dni </label> -->
<!-- 									<div class=""> -->
<!-- 										<input id='dniPersona' name='dniPersona' value='<?php echo $this->_tpl_vars['dniPersona']; ?>
' maxlength='64' class='form-control input-sm' /> -->
<!-- 									</div> -->
<!-- 								</div> -->
								<div class="form-group col-lg-5">
									<label class="control-label">Apellidos y nombres </label>
									<div class="">
										<input id='apellidos_y_nombresPersona' name='apellidos_y_nombresPersona' value='<?php echo $this->_tpl_vars['apellidos_y_nombresPersona']; ?>
' maxlength='64' class='form-control input-sm' readonly/>
									</div>
								</div>
								<div class="form-group col-lg-3">
									<label class="control-label">Fecha de nacimiento</label>
									<div class="">
										<input id='fecNacPersona' name='fecNacPersona' value='<?php echo $this->_tpl_vars['fecNacPersona']; ?>
' maxlength='64' class='form-control input-sm' readonly />
									</div>
								</div>			  	
								<div class="form-group col-lg-2">
									<label class="control-label">Género</label>
									<div class="">
										<select id='idGenero' name='idGenero' class='form-control input-sm'>
											<option value=''>-Seleccione-</option>
											<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaGenero'],'selected' => $this->_tpl_vars['idGenero']), $this);?>

										</select>
									</div>
								</div>
								<div class="form-group col-lg-2">
									<label class="control-label">Código modular </label>
									<div class="">
										<input id='codModularPersona' name='codModularPersona' value='<?php echo $this->_tpl_vars['codModularPersona']; ?>
' maxlength='64' class='form-control input-sm' readonly />
									</div>
								</div>
								<div class="form-group col-lg-5">
									<label class="control-label">Planilla </label>
									<div class="">
										<select id='mes' name='mes' class='form-control input-sm' disabled>
											<option value=''>-Seleccione-</option>
											<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaMes'],'selected' => $this->_tpl_vars['mes']), $this);?>

										</select>
										<!-- <input id='planillaPersona' name='planillaPersona' value='<?php echo $this->_tpl_vars['planillaPersona']; ?>
' maxlength='64' class='form-control input-sm' readonly /> -->
									</div>
								</div>
								<div class="form-group col-lg-3">
									<label class="control-label">Tipo de regimen </label>
									<div class="">
										<input id='tipRegPersona' name='tipRegPersona' value='<?php echo $this->_tpl_vars['tipRegPersona']; ?>
' maxlength='64' class='form-control input-sm' readonly />
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Resolucion de pension definitiva </label>
									<div class="">
										<input id='resPenDefPersona' name='resPenDefPersona' value='<?php echo $this->_tpl_vars['resPenDefPersona']; ?>
' maxlength='64' class='form-control input-sm' readonly />
									</div>
								</div>
								<div class="form-group col-lg-5">
									<label class="control-label">A partir de </label>
									<div class="">
										<input id='fecRes' name='fecRes' value='<?php echo $this->_tpl_vars['fecRes']; ?>
' maxlength='64' class='form-control input-sm' readonly />
									</div>
								</div>
								<div class="form-group col-lg-3">
									<label class="control-label">Banco </label>
									<div class="">
										<select id='bancoPersona' name='bancoPersona' class='form-control input-sm' readonly>
											<option value=''>-Seleccione-</option>
											<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaBanco'],'selected' => $this->_tpl_vars['idBanco']), $this);?>

										</select>									
										<!-- <input id='bancoPersona' name='bancoPersona' value='<?php echo $this->_tpl_vars['bancoPersona']; ?>
' maxlength='64' class='form-control input-sm' /> -->
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Cuenta bancaria </label>
									<div class="">
										<input id='ctaBancoPersona' name='ctaBancoPersona' value='<?php echo $this->_tpl_vars['ctaBancoPersona']; ?>
' maxlength='64' class='form-control input-sm' readonly />
									</div>
								</div>
								<div class="form-group col-lg-3">
									<label class="control-label">Fuente de financiamiento </label>
									<div class="">
										<input id='fntFinancPersona' name='fntFinancPersona' value='<?php echo $this->_tpl_vars['fntFinancPersona']; ?>
' maxlength='64' class='form-control input-sm' readonly />
									</div>
								</div>
								<div class="form-group col-lg-2">
									<label class="control-label">Planilla2 </label>
									<div class="">
										<input id='planilla2Persona' name='planilla2Persona' value='<?php echo $this->_tpl_vars['planilla2Persona']; ?>
' maxlength='64' class='form-control input-sm' readonly />
									</div>
								</div>								
								<div class="form-group col-lg-3">
									<label class="control-label">Fecha de Registro de la planilla</label>
									<div class="">
										<div class="input-group input-group-sm">
											<input id='fecplanillaPensionado' name='fecplanillaPensionado' class='form-control input-sm' type='text' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['fecplanillaPensionado'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y") : smarty_modifier_date_format($_tmp, "%d/%m/%Y")); ?>
' maxlength='10'  >
										</div>
									</div>
								</div>
							</div>
						</div>
					<div class="tab-pane container fade" id="menu1">
						<div class="row">
	  
							<?php $_from = $this->_tpl_vars['tablaResultadoIng']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cid'] => $this->_tpl_vars['con']):
?>
								<?php if ($this->_tpl_vars['con']['idTipoConcepto'] == 1): ?>
								<div class="form-group col-lg-3">
									<label class="control-label"><?php echo $this->_tpl_vars['con']['etiConceptos']; ?>
 </label>
									<div class="">
										<input id='idConc_<?php echo $this->_tpl_vars['con']['idConceptos']; ?>
' name='idConc_<?php echo $this->_tpl_vars['con']['idConceptos']; ?>
' value='<?php echo $this->_tpl_vars['con']['mntConcPlanilla']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
									</div>
								</div>
								<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>

						</div>
					</div>
					<div class="tab-pane container fade" id="menu2">
						<div class="row">
							<div class="form-group col-lg-3">
								<label class="control-label">Ipss </label>
								<div class="">
									<input id='ipssPersona' name='ipssPersona' value='<?php echo $this->_tpl_vars['ipssPersona']; ?>
' maxlength='64' class='form-control input-sm valDescuentos' readonly/>
								</div>
							</div>
	  
							<?php $_from = $this->_tpl_vars['tablaResultadoDesc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cid'] => $this->_tpl_vars['con']):
?>
								<?php if ($this->_tpl_vars['con']['idTipoConcepto'] == 2): ?>
								<div class="form-group col-lg-3">
									<label class="control-label"><?php echo $this->_tpl_vars['con']['etiConceptos']; ?>
 </label>
									<div class="">
										<input id='idConc_<?php echo $this->_tpl_vars['con']['idConceptos']; ?>
' name='idConc_<?php echo $this->_tpl_vars['con']['idConceptos']; ?>
' value='<?php echo $this->_tpl_vars['con']['mntConcPlanilla']; ?>
' maxlength='64' class='form-control input-sm valDescuentos' />
									</div>
								</div>
								<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
						
							<!--
							<div class="form-group col-lg-3">
								<label class="control-label">Cafae </label>
								<div class="">
									<input id='cafaePersona' name='cafaePersona' value='<?php echo $this->_tpl_vars['cafaePersona']; ?>
' maxlength='64' class='form-control input-sm valDescuentos' />
								</div>
							</div>
							<div class="form-group col-lg-3">
								<label class="control-label">Prderrma </label>
								<div class="">
									<input id='prderrmaPersona' name='prderrmaPersona' value='<?php echo $this->_tpl_vars['prderrmaPersona']; ?>
' maxlength='64' class='form-control input-sm valDescuentos' />
								</div>
							</div>
							-->					  
						</div>
					</div>
				  	<div class="tab-pane container fade" id="menu3">
						<div class="row">
							<div class="form-group col-lg-3">
								<label class="control-label">Total imponible </label>
								<div class="">
									<div class="input-group input-group-sm">
							<input id='totImpplanillaPensionado' name='totImpplanillaPensionado' class='form-control input-sm' type='text' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['totImpplanillaPensionado'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y") : smarty_modifier_date_format($_tmp, "%d/%m/%Y")); ?>
' maxlength='10' readonly>
							</div>
								</div>
							</div>
							<div class="form-group col-lg-3">
								<label class="control-label">Total haber </label>
								<div class="">
									<div class="input-group input-group-sm">
							<input id='totHabplanillaPensionado' name='totHabplanillaPensionado' class='form-control input-sm' type='text' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['totHabplanillaPensionado'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y") : smarty_modifier_date_format($_tmp, "%d/%m/%Y")); ?>
' maxlength='10' readonly>
							</div>
								</div>
							</div>
							<div class="form-group col-lg-3">
								<label class="control-label">Total descuentos </label>
								<div class="">
									<div class="input-group input-group-sm">
							<input id='totDescplanillaPensionado' name='totDescplanillaPensionado' class='form-control input-sm' type='text' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['totDescplanillaPensionado'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y") : smarty_modifier_date_format($_tmp, "%d/%m/%Y")); ?>
' maxlength='10' readonly>
							</div>
								</div>
							</div>
							<div class="form-group col-lg-3">
								<label class="control-label">Total liquido </label>
								<div class="">
									<div class="input-group input-group-sm">
							<input id='totLiqplanillaPensionado' name='totLiqplanillaPensionado' class='form-control input-sm' type='text' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['totLiqplanillaPensionado'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y") : smarty_modifier_date_format($_tmp, "%d/%m/%Y")); ?>
' maxlength='10' readonly>
							</div>
						</div>				  
					</div>
				</div>
			</div>
		</div>		
		<!-- ********************************************************************************************************** -->
	</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='idplanillaPensionado' name='idplanillaPensionado' value='<?php echo $this->_tpl_vars['idplanillaPensionado']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

		<input type='hidden' id='idEmpleado' name='idEmpleado' value='<?php echo $this->_tpl_vars['idEmpleado']; ?>
' maxlength='64' class='form-control input-sm' readonly/>
		<input type='hidden' id='idPeriodo' name='idPeriodo' value='<?php echo $this->_tpl_vars['idPeriodo']; ?>
' maxlength='64' class='form-control input-sm' readonly/>
	</form>
</div>

<?php echo '
<script>
function preG(valor){
	jQuery(\'#preG\').val(valor);
	/*
	validar(\'dniPlanPens\',\'dniPlanPens\',REQUERIDO);
	validar(\'apellidos_y_nombresPlanPens\',\'apellidos_y_nombresPlanPens\',REQUERIDO);
	validar(\'fecha_de_nacimientoPlanPens\',\'fecha_de_nacimientoPlanPens\',REQUERIDO);
	validar(\'sexoPlanPens\',\'sexoPlanPens\',REQUERIDO);
	validar(\'codigo_modularPlanPens\',\'codigo_modularPlanPens\',REQUERIDO);
	*/	
}
function totalizar(){
	var sumIngreso = 0;
	var sumDescuentos = 0;
	jQuery(\'.valIngreso\').each(function(){
		if(!isNaN(parseFloat(jQuery(this).val()))){
			sumIngreso += parseFloat(jQuery(this).val());
		}
	});	
	
	jQuery(\'.valDescuentos\').each(function(){
		if(!isNaN(parseFloat(jQuery(this).val()))){
			sumDescuentos += parseFloat(jQuery(this).val());
		}
	});	
	//BF4 = parseFloat(jQuery(\'#escolaridadPlanPens\').val());
	
	//AC4 = parseFloat(jQuery(\'#ds21_92_pcmPlanPens\').val());
	//AF4 = parseFloat(jQuery(\'#igvPlanPens\').val());
	//R4 = parseFloat(jQuery(\'#aguinaldoPlanPens\').val());
	/*
	AC4 = parseFloat(noNulo(\'ds21_92_pcmPlanPens\'));
	AF4 = parseFloat(noNulo(\'igvPlanPens\'));
	R4 = parseFloat(noNulo(\'aguinaldoPlanPens\'));
	*/
	/*
	AC4 = parseFloat(noNulo(\'idConc_537\'));
	AF4 = parseFloat(noNulo(\'igvPlanPens\'));
	R4 = parseFloat(noNulo(\'aguinaldoPlanPens\'));
	*/
	
	AC4 = parseFloat(noNulo(\'idConc_18\'));
	AF4 = parseFloat(noNulo(\'idConc_22\'));
	R4 = parseFloat(noNulo(\'idConc_522\'));	
	
	//alert(sumIngreso  +\'-\'+ AC4 +\'-\'+ AF4 +\'-\'+ R4);
	totalImponible = sumIngreso  - AC4 - AF4 - R4;
	//alert(\'1\'+totalImponible)
	totalImponible = Math.round(totalImponible);
	//alert(\'2\'+totalImponible)
	totalHaber = sumIngreso;
	totalLiquido = totalHaber - sumDescuentos	
		
	// Asignando resultados
	/*
	jQuery(\'#total_imponiblePlanPens\').val(totalImponible.toFixed(2))
	jQuery(\'#total_haberPlanPens\').val(totalHaber.toFixed(2));
	jQuery(\'#total_descuentosPlanPens\').val(sumDescuentos.toFixed(2));
	jQuery(\'#total_liquidoPlanPens\').val(totalLiquido.toFixed(2));
	*/
	jQuery(\'#totImpplanillaPensionado\').val(totalImponible.toFixed(2))
	jQuery(\'#totHabplanillaPensionado\').val(totalHaber.toFixed(2));
	jQuery(\'#totDescplanillaPensionado\').val(sumDescuentos.toFixed(2));
	jQuery(\'#totLiqplanillaPensionado\').val(totalLiquido.toFixed(2));
	//alert("totalImponible = " + totalImponible + \' totalHaber \' + totalHaber + " Descuentos = " + sumDescuentos + \' totalLiquido = \'+totalLiquido);
	
	//alert(totalImponible)
	ipssPlanPens = (totalImponible*4)/100;
	jQuery(\'#ipssPersona\').val(ipssPlanPens.toFixed(2));
}
function noNulo(valor){
	tmp = jQuery(\'#\'+valor).val();
	//alert(\'1 \'+valor + \' = \'+ tmp)
	if(isNaN(tmp) || tmp == \'\' || tmp == null){
		tmp = 0;
		//alert(\'2 \'+valor + \' = \'+ tmp)
	}else{
		//alert(\'3 \'+valor + \' = \'+ tmp)
	}
	return tmp;
}
</script>
<style>
.nav-link {
    display: block;
    padding: 0.4rem 1rem;
}
</style>
'; ?>