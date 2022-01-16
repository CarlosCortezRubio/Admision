{literal}
<script type="text/javascript">
validar('idPersona','IdPersona planillaPensionado',REQUERIDO);
validar('idPeriodo','IdPeriodo planillaPensionado',REQUERIDO);
validar('fecplanillaPensionado','Fec planillaPensionado',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} Planilla Pensionista</h4>
			<div class="form-group col-lg-12" style="position:fixed;z-index: 2000;top: 100px;left: 500px;">
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
			{if $error != ''}<div id='msg-error' class='msg-red'>{$error}</div>{/if}
			{if $exito != ''}<div id='msg-exito' class='msg-green'>{$exito}</div>{/if}
			{if $info  != ''}<div id='msg-info' class='msg-blue'>{$info}</div>{/if}
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
											{html_options options=$tablaAnio selected=$anio}
										</select>
									</div>
								</div>
								<div class="form-group col-lg-2">
									<label class="control-label">Mes</label>
									<div class="">
										<select id='mes' name='mes' class='form-control input-sm' disabled>
											<option value=''>-Seleccione-</option>
											{html_options options=$tablaMes selected=$mes}
										</select>
									</div>
								</div>	
								<div class="form-group col-lg-3">
									<label class="control-label"><span class='label-red'>*</span> DNI del Pensionado</label>
									<div class="input-group mb-3">
										<input type='text' class="form-control input-sm" id='dniPersona' name='dniPersona' value='{$dniPersona}'/>
									  	<div class="input-group-append">
									    	<button type="button" class="btn btn-primary" onclick="xajax_buscarDocente(xajax.$('dniPersona').value);">Buscar</button>
									  	</div>
									</div>		
								</div>							
<!-- 								<div class="form-group col-lg-2"> -->
<!-- 									<label class="control-label">Dni </label> -->
<!-- 									<div class=""> -->
<!-- 										<input id='dniPersona' name='dniPersona' value='{$dniPersona}' maxlength='64' class='form-control input-sm' /> -->
<!-- 									</div> -->
<!-- 								</div> -->
								<div class="form-group col-lg-5">
									<label class="control-label">Apellidos y nombres </label>
									<div class="">
										<input id='apellidos_y_nombresPersona' name='apellidos_y_nombresPersona' value='{$apellidos_y_nombresPersona}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-3">
									<label class="control-label">Fecha de nacimiento</label>
									<div class="">
										<input id='fecha_de_nacimientoPersona' name='fecha_de_nacimientoPersona' value='{$fecha_de_nacimientoPersona}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>			  	
								<div class="form-group col-lg-2">
									<label class="control-label">Género</label>
									<div class="">
										<select id='sexoPersona' name='sexoPersona' class='form-control input-sm'>
											<option value=''>-Seleccione-</option>
											{html_options options=$tablaGenero selected=$sexoPersona}
										</select>
									</div>
								</div>
								<!--

								<div class="form-group col-lg-2">
									<label class="control-label">Sexo </label>
									<div class="">
										<input id='sexoPersona' name='sexoPersona' value='{$sexoPersona}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>								
								-->
								<div class="form-group col-lg-2">
									<label class="control-label">Codigo modular </label>
									<div class="">
										<input id='codigo_modularPersona' name='codigo_modularPersona' value='{$codigo_modularPersona}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-5">
									<label class="control-label">Planilla </label>
									<div class="">
										<input id='planillaPersona' name='planillaPersona' value='{$planillaPersona}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-3">
									<label class="control-label">Tipo de regimen </label>
									<div class="">
										<input id='tipo_de_regimenPersona' name='tipo_de_regimenPersona' value='{$tipo_de_regimenPersona}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Resolucion de pension definitiva </label>
									<div class="">
										<input id='resolucion_de_pension_definitivaPersona' name='resolucion_de_pension_definitivaPersona' value='{$resolucion_de_pension_definitivaPersona}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-5">
									<label class="control-label">A partir de </label>
									<div class="">
										<input id='a_partir_dePersona' name='a_partir_dePersona' value='{$a_partir_dePersona}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-3">
									<label class="control-label">Banco </label>
									<div class="">
										<select id='bancoPersona' name='bancoPersona' class='form-control input-sm'>
											<option value=''>-Seleccione-</option>
											{html_options options=$tablaBanco selected=$bancoPersona}
										</select>									
										<!-- <input id='bancoPersona' name='bancoPersona' value='{$bancoPersona}' maxlength='64' class='form-control input-sm' /> -->
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Cuenta bancaria </label>
									<div class="">
										<input id='cuenta_bancariaPersona' name='cuenta_bancariaPersona' value='{$cuenta_bancariaPersona}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-3">
									<label class="control-label">Fuente de financiamiento </label>
									<div class="">
										<input id='fuente_de_financiamientoPersona' name='fuente_de_financiamientoPersona' value='{$fuente_de_financiamientoPersona}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-2">
									<label class="control-label">Planilla2 </label>
									<div class="">
										<input id='planilla2Persona' name='planilla2Persona' value='{$planilla2Persona}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>								
							</div>
						</div>
					<div class="tab-pane container fade" id="menu1">
						<div class="row">
	  
							{foreach key=cid item=con from=$tablaResultado}
								<div class="form-group col-lg-2">
									<label class="control-label">{$con.etiConceptos} </label>
									<div class="">
										<input id='idConc_{$con.idConceptos}' name='idConc_{$con.idConceptos}' value='{$p_del20530PlanPens}' maxlength='64' class='form-control input-sm valIngreso' />
									</div>
								</div>
							{/foreach}

						</div>
					</div>
					<div class="tab-pane container fade" id="menu2">
						<div class="row">
							<div class="form-group col-lg-3">
								<label class="control-label">Ipss </label>
								<div class="">
									<input id='ipssPersona' name='ipssPersona' value='{$ipssPersona}' maxlength='64' class='form-control input-sm valDescuentos' readonly/>
								</div>
							</div>
							<div class="form-group col-lg-3">
								<label class="control-label">Cafae </label>
								<div class="">
									<input id='cafaePersona' name='cafaePersona' value='{$cafaePersona}' maxlength='64' class='form-control input-sm valDescuentos' />
								</div>
							</div>
							<div class="form-group col-lg-3">
								<label class="control-label">Prderrma </label>
								<div class="">
									<input id='prderrmaPersona' name='prderrmaPersona' value='{$prderrmaPersona}' maxlength='64' class='form-control input-sm valDescuentos' />
								</div>
							</div>					  
						</div>
					</div>
				  	<div class="tab-pane container fade" id="menu3">
						<div class="row">
							<div class="form-group col-lg-3">
								<label class="control-label">Total imponible </label>
								<div class="">
									<input readonly id='total_imponiblePersona' name='total_imponiblePersona' value='{$total_imponiblePersona}' maxlength='64' class='form-control input-sm' />
								</div>
							</div>
							<div class="form-group col-lg-3">
								<label class="control-label">Total haber </label>
								<div class="">
									<input readonly id='total_haberPersona' name='total_haberPersona' value='{$total_haberPersona}' maxlength='64' class='form-control input-sm' />
								</div>
							</div>
							<div class="form-group col-lg-3">
								<label class="control-label">Total descuentos </label>
								<div class="">
									<input readonly id='total_descuentosPersona' name='total_descuentosPersona' value='{$total_descuentosPersona}' maxlength='64' class='form-control input-sm' />
								</div>
							</div>
							<div class="form-group col-lg-3">
								<label class="control-label">Total liquido </label>
								<div class="">
									<input readonly id='total_liquidoPersona' name='total_liquidoPersona' value='{$total_liquidoPersona}' maxlength='64' class='form-control input-sm' />
								</div>
							</div>	
						</div>				  
					</div>
				</div>
			</div>
		</div>		
		<!-- ********************************************************************************************************** -->
		<p class='p-black'>Los campos marcados con <span class='label-red'>*</span> son obligatorios</p>
 		<div class='container-fluid'>
 			<div class="row contenidoVer" style="width:100%">
				<div class="form-group col-lg-4">
					<label class="control-label">IdPersona planillaPensionado</label>
					<div class="">
						<input id='idPersona' name='idPersona' value='{$idPersona}' maxlength='64' class='form-control input-sm' />
					</div>
				</div>
				<div class="form-group col-lg-4">
					<label class="control-label">IdPeriodo planillaPensionado</label>
					<div class="">
						<input id='idPeriodo' name='idPeriodo' value='{$idPeriodo}' maxlength='64' class='form-control input-sm' />
					</div>
				</div>
				<div class="form-group col-lg-4">
					<label class="control-label">Fec planillaPensionado</label>
					<div class="">
						<div class="input-group input-group-sm">
							<input id='fecplanillaPensionado' name='fecplanillaPensionado' class='form-control input-sm' type='text' value='{$fecplanillaPensionado|date_format:"%d/%m/%Y"}' maxlength='10' ondblclick='this.value=""' >							
						</div>
					</div>
				</div>
			</div>
		</div>
		</fieldset>
		<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idplanillaPensionado' name='idplanillaPensionado' value='{$idplanillaPensionado}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
