<?php /* Smarty version 2.6.30, created on 2021-07-07 05:36:28
         compiled from C:%5Cxampp%5Chtdocs%5Crhunm/app/vista/PlanPens/PlanPens.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:\\xampp\\htdocs\\rhunm/app/vista/PlanPens/PlanPens.tpl', 117, false),)), $this); ?>
<?php echo '
<script type="text/javascript">
validar(\'dniPlanPens\',\'dniPlanPens\',REQUERIDO);
validar(\'apellidos_y_nombresPlanPens\',\'apellidos_y_nombresPlanPens\',REQUERIDO);
validar(\'fecha_de_nacimientoPlanPens\',\'fecha_de_nacimientoPlanPens\',REQUERIDO);
validar(\'sexoPlanPens\',\'sexoPlanPens\',REQUERIDO);
validar(\'codigo_modularPlanPens\',\'codigo_modularPlanPens\',REQUERIDO);
validar(\'planillaPlanPens\',\'planillaPlanPens\',REQUERIDO);
validar(\'tipo_de_regimenPlanPens\',\'tipo_de_regimenPlanPens\',REQUERIDO);
validar(\'resolucion_de_pension_definitivaPlanPens\',\'resolucion_de_pension_definitivaPlanPens\',REQUERIDO);
validar(\'a_partir_dePlanPens\',\'a_partir_dePlanPens\',REQUERIDO);
validar(\'bancoPlanPens\',\'bancoPlanPens\',REQUERIDO);
validar(\'cuenta_bancariaPlanPens\',\'cuenta_bancariaPlanPens\',REQUERIDO);
validar(\'fuente_de_financiamientoPlanPens\',\'fuente_de_financiamientoPlanPens\',REQUERIDO);
validar(\'planilla2PlanPens\',\'planilla2PlanPens\',REQUERIDO);
validar(\'total_imponiblePlanPens\',\'total_imponiblePlanPens\',REQUERIDO);
validar(\'total_haberPlanPens\',\'total_haberPlanPens\',REQUERIDO);
validar(\'total_descuentosPlanPens\',\'total_descuentosPlanPens\',REQUERIDO);
validar(\'total_liquidoPlanPens\',\'total_liquidoPlanPens\',REQUERIDO);
validar(\'aguinaldoPlanPens\',\'aguinaldoPlanPens\',REQUERIDO);
validar(\'basicaPlanPens\',\'basicaPlanPens\',REQUERIDO);
validar(\'bonif_personalPlanPens\',\'bonif_personalPlanPens\',REQUERIDO);
validar(\'ael25671PlanPens\',\'ael25671PlanPens\',REQUERIDO);
validar(\'aeds081PlanPens\',\'aeds081PlanPens\',REQUERIDO);
validar(\'tphPlanPens\',\'tphPlanPens\',REQUERIDO);
validar(\'bonif_familiarPlanPens\',\'bonif_familiarPlanPens\',REQUERIDO);
validar(\'du080_04PlanPens\',\'du080_04PlanPens\',REQUERIDO);
validar(\'refrig_y_moviPlanPens\',\'refrig_y_moviPlanPens\',REQUERIDO);
validar(\'du90_96PlanPens\',\'du90_96PlanPens\',REQUERIDO);
validar(\'ds19_94_pcmPlanPens\',\'ds19_94_pcmPlanPens\',REQUERIDO);
validar(\'ds21_92_pcmPlanPens\',\'ds21_92_pcmPlanPens\',REQUERIDO);
validar(\'bon_especialPlanPens\',\'bon_especialPlanPens\',REQUERIDO);
validar(\'reunificadaPlanPens\',\'reunificadaPlanPens\',REQUERIDO);
validar(\'igvPlanPens\',\'igvPlanPens\',REQUERIDO);
validar(\'cargsimulPlanPens\',\'cargsimulPlanPens\',REQUERIDO);
validar(\'art18_dl_20530PlanPens\',\'art18_dl_20530PlanPens\',REQUERIDO);
validar(\'du073_97PlanPens\',\'du073_97PlanPens\',REQUERIDO);
validar(\'du011_99PlanPens\',\'du011_99PlanPens\',REQUERIDO);
validar(\'du037_94PlanPens\',\'du037_94PlanPens\',REQUERIDO);
validar(\'ds016PlanPens\',\'ds016PlanPens\',REQUERIDO);
validar(\'ds017PlanPens\',\'ds017PlanPens\',REQUERIDO);
validar(\'ds110_2006PlanPens\',\'ds110_2006PlanPens\',REQUERIDO);
validar(\'ds039_2007PlanPens\',\'ds039_2007PlanPens\',REQUERIDO);
validar(\'ds120_2008PlanPens\',\'ds120_2008PlanPens\',REQUERIDO);
validar(\'ds014_2009PlanPens\',\'ds014_2009PlanPens\',REQUERIDO);
validar(\'ds077_2010PlanPens\',\'ds077_2010PlanPens\',REQUERIDO);
validar(\'ds031_2011PlanPens\',\'ds031_2011PlanPens\',REQUERIDO);
validar(\'ds024_2012PlanPens\',\'ds024_2012PlanPens\',REQUERIDO);
validar(\'ds004_2013PlanPens\',\'ds004_2013PlanPens\',REQUERIDO);
validar(\'ds003_2014PlanPens\',\'ds003_2014PlanPens\',REQUERIDO);
validar(\'ds002_2015PlanPens\',\'ds002_2015PlanPens\',REQUERIDO);
validar(\'ds005_2016PlanPens\',\'ds005_2016PlanPens\',REQUERIDO);
validar(\'ds020_2017PlanPens\',\'ds020_2017PlanPens\',REQUERIDO);
validar(\'ds011_2018PlanPens\',\'ds011_2018PlanPens\',REQUERIDO);
validar(\'ds009_2019PlanPens\',\'ds009_2019PlanPens\',REQUERIDO);
validar(\'ds006_2020PlanPens\',\'ds006_2020PlanPens\',REQUERIDO);
validar(\'ipssPlanPens\',\'ipssPlanPens\',REQUERIDO);
validar(\'cafaePlanPens\',\'cafaePlanPens\',REQUERIDO);
validar(\'prderrmaPlanPens\',\'prderrmaPlanPens\',REQUERIDO);
validar(\'escolaridadPlanPens\',\'escolaridadPlanPens\',REQUERIDO);
validar(\'decreto_supermo_20_21PlanPens\',\'decreto_supermo_20_21PlanPens\',REQUERIDO);
</script>
'; ?>

<div class='pagina'>
	<form name='form' id='form' method='post' action='<?php echo $this->_tpl_vars['valorForm']; ?>
'>
		<div class='line-title'>
			<h4><?php if ($this->_tpl_vars['opt'] == 'g'): ?> Agregar <?php elseif ($this->_tpl_vars['opt'] == 'm' || $this->_tpl_vars['opt'] == 'mr'): ?> Modificar <?php endif; ?> </h4>		
<!--  				<div class="form-group col-lg-12" style="position:fixed;background-color: azure;"> -->
 				<div class="form-group col-lg-12" style="position:fixed;z-index: 100000;top: 100px;">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs">
					  <li class="nav-item">
					    <a class="nav-link active" data-toggle="tab" href="#home">Datos generales</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#menu1">Datos laborales</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#menu2">Otros datos</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#menu3" ">Haberes</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#menu4" ">Descuentos</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#menu5" ">Dependiente</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#menu6" ">Boletas</a>
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
 		<div class='container-fluid'>
 			<div class="row contenidoVer" style="width:100%;padding-top:35px;">
		<p class='p-black'>Los campos marcados con <span class='label-red'>*</span> son obligatorios</p>
				<div class="form-group col-lg-12">
					<!-- Tab panes -->
					<div class="tab-content">
					  	<div class="tab-pane container active row" id="home">
						  	<div class="row">
								<div class="form-group col-lg-3">
									<label class="control-label">Codigo modular</label>
									<div class="">
										<select id='anio' name='anio' class='form-control input-sm'>
											<option value=''>-Seleccione-</option>
											<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaAnio'],'selected' => $this->_tpl_vars['anio']), $this);?>

										</select>
									</div>
								</div>
								<div class="form-group col-lg-2">
									<label class="control-label">Nro Cargo</label>
									<div class="">
										<select id='mes' name='mes' class='form-control input-sm'>
											<option value=''>-Seleccione-</option>
											<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaMes'],'selected' => $this->_tpl_vars['mes']), $this);?>

										</select>
									</div>
								</div>
								<div class="form-group col-lg-2">
									<label class="control-label">Apellido Paterno</label>
									<div class="">
										<input id='dniPlanPens' name='dniPlanPens' value='<?php echo $this->_tpl_vars['dniPlanPens']; ?>
' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-5">
									<label class="control-label">Apellido Materno</label>
									<div class="">
										<input id='apellidos_y_nombresPlanPens' name='apellidos_y_nombresPlanPens' value='<?php echo $this->_tpl_vars['apellidos_y_nombresPlanPens']; ?>
' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-3">
									<label class="control-label">Nombres</label>
									<div class="">
										<input id='fecha_de_nacimientoPlanPens' name='fecha_de_nacimientoPlanPens' value='<?php echo $this->_tpl_vars['fecha_de_nacimientoPlanPens']; ?>
' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-2">
									<label class="control-label">T_Planilla</label>
									<div class="">
										<input id='sexoPlanPens' name='sexoPlanPens' value='<?php echo $this->_tpl_vars['sexoPlanPens']; ?>
' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-2">
									<label class="control-label">Situación</label>
									<div class="">
										<input id='codigo_modularPlanPens' name='codigo_modularPlanPens' value='<?php echo $this->_tpl_vars['codigo_modularPlanPens']; ?>
' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-5">
									<label class="control-label">Fecha de Nacimiento</label>
									<div class="">
										<input id='planillaPlanPens' name='planillaPlanPens' value='<?php echo $this->_tpl_vars['planillaPlanPens']; ?>
' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-3">
									<label class="control-label">Sexo</label>
									<div class="">
										<input id='tipo_de_regimenPlanPens' name='tipo_de_regimenPlanPens' value='<?php echo $this->_tpl_vars['tipo_de_regimenPlanPens']; ?>
' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Nacionalidad</label>
									<div class="">
										<input id='resolucion_de_pension_definitivaPlanPens' name='resolucion_de_pension_definitivaPlanPens' value='<?php echo $this->_tpl_vars['resolucion_de_pension_definitivaPlanPens']; ?>
' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-5">
									<label class="control-label">Tipo de documento</label>
									<div class="">
										<input id='a_partir_dePlanPens' name='a_partir_dePlanPens' value='<?php echo $this->_tpl_vars['a_partir_dePlanPens']; ?>
' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-3">
									<label class="control-label">Número de documento </label>
									<div class="">
										<input id='bancoPlanPens' name='bancoPlanPens' value='<?php echo $this->_tpl_vars['bancoPlanPens']; ?>
' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Fecha de Ingreso</label>
									<div class="">
										<input id='cuenta_bancariaPlanPens' name='cuenta_bancariaPlanPens' value='<?php echo $this->_tpl_vars['cuenta_bancariaPlanPens']; ?>
' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-3">
									<label class="control-label">Fecha de término</label>
									<div class="">
										<input id='fuente_de_financiamientoPlanPens' name='fuente_de_financiamientoPlanPens' value='<?php echo $this->_tpl_vars['fuente_de_financiamientoPlanPens']; ?>
' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-2">
									<label class="control-label">Doc. Referencia</label>
									<div class="">
										<input id='planilla2PlanPens' name='planilla2PlanPens' value='<?php echo $this->_tpl_vars['planilla2PlanPens']; ?>
' maxlength='64' class='form-control input-sm' />
									</div>
								</div>								
								<div class="form-group col-lg-2">
									<label class="control-label">Seg. Salud</label>
									<div class="">
										<input id='planilla2PlanPens' name='planilla2PlanPens' value='<?php echo $this->_tpl_vars['planilla2PlanPens']; ?>
' maxlength='64' class='form-control input-sm' />
									</div>
								</div>								
								<div class="form-group col-lg-2">
									<label class="control-label">Nro S_Salud</label>
									<div class="">
										<input id='planilla2PlanPens' name='planilla2PlanPens' value='<?php echo $this->_tpl_vars['planilla2PlanPens']; ?>
' maxlength='64' class='form-control input-sm' />
									</div>
								</div>								
								<div class="form-group col-lg-2">
									<label class="control-label">E. Vida</label>
									<div class="">
										<input id='planilla2PlanPens' name='planilla2PlanPens' value='<?php echo $this->_tpl_vars['planilla2PlanPens']; ?>
' maxlength='64' class='form-control input-sm' />
									</div>
								</div>								
							</div>
						</div>
					  <div class="tab-pane container fade" id="menu1">
						  <div class="row">
							<div class="form-group col-lg-2">
								<label class="control-label">C_Regional</label>
								<div class="">
									<input id='basicaPlanPens' name='basicaPlanPens' value='<?php echo $this->_tpl_vars['basicaPlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">U_Ejecutora</label>
								<div class="">
									<input id='bonif_personalPlanPens' name='bonif_personalPlanPens' value='<?php echo $this->_tpl_vars['bonif_personalPlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' onclick="totalizar();"/>
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">N.E.C</label>
								<div class="">
									<input id='ael25671PlanPens' name='ael25671PlanPens' value='<?php echo $this->_tpl_vars['ael25671PlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">Nivel</label>
								<div class="">
									<input id='aeds081PlanPens' name='aeds081PlanPens' value='<?php echo $this->_tpl_vars['aeds081PlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">Establecimiento</label>
								<div class="">
									<input id='tphPlanPens' name='tphPlanPens' value='<?php echo $this->_tpl_vars['tphPlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">Plaza</label>
								<div class="">
									<input id='bonif_familiarPlanPens' name='bonif_familiarPlanPens' value='<?php echo $this->_tpl_vars['bonif_familiarPlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">Tipo Plaza</label>
								<div class="">
									<input id='du080_04PlanPens' name='du080_04PlanPens' value='<?php echo $this->_tpl_vars['du080_04PlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">Reg. Laboral</label>
								<div class="">
									<input id='refrig_y_moviPlanPens' name='refrig_y_moviPlanPens' value='<?php echo $this->_tpl_vars['refrig_y_moviPlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">T_Servidor</label>
								<div class="">
									<input id='du90_96PlanPens' name='du90_96PlanPens' value='<?php echo $this->_tpl_vars['du90_96PlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">N_Magist.</label>
								<div class="">
									<input id='ds19_94_pcmPlanPens' name='ds19_94_pcmPlanPens' value='<?php echo $this->_tpl_vars['ds19_94_pcmPlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">G_Remune</label>
								<div class="">
									<input id='ds21_92_pcmPlanPens' name='ds21_92_pcmPlanPens' value='<?php echo $this->_tpl_vars['ds21_92_pcmPlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">J. Laboral (horas)</label>
								<div class="">
									<input id='bon_especialPlanPens' name='bon_especialPlanPens' value='<?php echo $this->_tpl_vars['bon_especialPlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">HA T Emb.</label>
								<div class="">
									<input id='reunificadaPlanPens' name='reunificadaPlanPens' value='<?php echo $this->_tpl_vars['reunificadaPlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">Días trabajados</label>
								<div class="">
									<input id='igvPlanPens' name='igvPlanPens' value='<?php echo $this->_tpl_vars['igvPlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">Lic. En Días</label>
								<div class="">
									<input id='cargsimulPlanPens' name='cargsimulPlanPens' value='<?php echo $this->_tpl_vars['cargsimulPlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">Nro Dependiente</label>
								<div class="">
									<input id='art18_dl_20530PlanPens' name='art18_dl_20530PlanPens' value='<?php echo $this->_tpl_vars['art18_dl_20530PlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">T_Servicio</label>
								<div class="">
									<input id='du073_97PlanPens' name='du073_97PlanPens' value='<?php echo $this->_tpl_vars['du073_97PlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">N° Décimas</label>
								<div class="">
									<input id='du011_99PlanPens' name='du011_99PlanPens' value='<?php echo $this->_tpl_vars['du011_99PlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">F. Ini Licen</label>
								<div class="">
									<input id='du037_94PlanPens' name='du037_94PlanPens' value='<?php echo $this->_tpl_vars['du037_94PlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">Cargo/Orig</label>
								<div class="">
									<input id='ds016PlanPens' name='ds016PlanPens' value='<?php echo $this->_tpl_vars['ds016PlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">Nivel Origen</label>
								<div class="">
									<input id='ds017PlanPens' name='ds017PlanPens' value='<?php echo $this->_tpl_vars['ds017PlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">Dire Encarg.</label>
								<div class="">
									<input id='ds110_2006PlanPens' name='ds110_2006PlanPens' value='<?php echo $this->_tpl_vars['ds110_2006PlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">Pal. Magist</label>
								<div class="">
									<input id='ds039_2007PlanPens' name='ds039_2007PlanPens' value='<?php echo $this->_tpl_vars['ds039_2007PlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">Inasistencia en días y horas dd:hh</label>
								<div class="">
									<input id='ds120_2008PlanPens' name='ds120_2008PlanPens' value='<?php echo $this->_tpl_vars['ds120_2008PlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">Tardanza en horas y minutos hh:mm</label>
								<div class="">
									<input id='ds014_2009PlanPens' name='ds014_2009PlanPens' value='<?php echo $this->_tpl_vars['ds014_2009PlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">Permiso en días hh:mm</label>
								<div class="">
									<input id='ds077_2010PlanPens' name='ds077_2010PlanPens' value='<?php echo $this->_tpl_vars['ds077_2010PlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
							<div class="form-group col-lg-2">
								<label class="control-label">Huelgas o Paralizaciones en días (1-29)</label>
								<div class="">
									<input id='ds031_2011PlanPens' name='ds031_2011PlanPens' value='<?php echo $this->_tpl_vars['ds031_2011PlanPens']; ?>
' maxlength='64' class='form-control input-sm valIngreso' />
								</div>
							</div>
						  </div>
					  </div>
					  <div class="tab-pane container fade" id="menu2">
						  <div class="row">
							<div class="form-group col-lg-3">
								<label class="control-label">Leyenda Mensual</label>
								<div class="">
									<input id='ipssPlanPens' name='ipssPlanPens' value='<?php echo $this->_tpl_vars['ipssPlanPens']; ?>
' maxlength='64' class='form-control input-sm valDescuentos' readonly/>
								</div>
							</div>
							<div class="form-group col-lg-3">
								<label class="control-label">Cadena Presupuestal</label>
								<div class="">
									<input id='cafaePlanPens' name='cafaePlanPens' value='<?php echo $this->_tpl_vars['cafaePlanPens']; ?>
' maxlength='64' class='form-control input-sm valDescuentos' />
								</div>
							</div>
							<div class="form-group col-lg-3">
								<label class="control-label">Leyenda Permanente</label>
								<div class="">
									<input id='prderrmaPlanPens' name='prderrmaPlanPens' value='<?php echo $this->_tpl_vars['prderrmaPlanPens']; ?>
' maxlength='64' class='form-control input-sm valDescuentos' />
								</div>
							</div>					  
							<div class="form-group col-lg-3">
								<label class="control-label">Régimen Laboral Origen</label>
								<div class="">
									<input id='prderrmaPlanPens' name='prderrmaPlanPens' value='<?php echo $this->_tpl_vars['prderrmaPlanPens']; ?>
' maxlength='64' class='form-control input-sm valDescuentos' />
								</div>
							</div>					  
							<div class="form-group col-lg-3">
								<label class="control-label">Modo Pago</label>
								<div class="">
									<input id='prderrmaPlanPens' name='prderrmaPlanPens' value='<?php echo $this->_tpl_vars['prderrmaPlanPens']; ?>
' maxlength='64' class='form-control input-sm valDescuentos' />
								</div>
							</div>		
							<div class="form-group col-lg-3">
								<label class="control-label">Cuenta</label>
								<div class="">
									<input id='prderrmaPlanPens' name='prderrmaPlanPens' value='<?php echo $this->_tpl_vars['prderrmaPlanPens']; ?>
' maxlength='64' class='form-control input-sm valDescuentos' />
								</div>
							</div>					  
						  </div>
					  </div>
					  <div class="tab-pane container fade" id="menu3">
						<div class="row">
						Por definir
						</div>				  
					  </div>
					  <div class="tab-pane container fade" id="menu4">
						<div class="row">
						Por definir
						</div>				  
					  </div>
					  <div class="tab-pane container fade" id="menu3">
						<div class="row">
						Por definir
						</div>				  
					  </div>
					  <div class="tab-pane container fade" id="menu3">
						<div class="row">
						Por definir
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
		<input type='hidden' id='idPlanPens' name='idPlanPens' value='<?php echo $this->_tpl_vars['idPlanPens']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>