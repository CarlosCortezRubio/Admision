{literal}
<script type="text/javascript">
validar('ape1PlanCrd','ape1PlanCrd',REQUERIDO);
validar('ape2PlanCrd','ape2PlanCrd',REQUERIDO);
validar('nom1PlanCrd','nom1PlanCrd',REQUERIDO);
validar('nacPlanCrd','nacPlanCrd',REQUERIDO);
validar('dniPlanCrd','dniPlanCrd',REQUERIDO);
validar('fecIngPlanCrd','fecIngPlanCrd',REQUERIDO);
validar('eraDocPlanCrd','eraDocPlanCrd',REQUERIDO);
validar('incDespPlanCrd','incDespPlanCrd',REQUERIDO);
validar('gdoAcadPlanCrd','gdoAcadPlanCrd',REQUERIDO);
validar('mencPlanCrd','mencPlanCrd',REQUERIDO);
validar('univMayGPlanCrd','univMayGPlanCrd',REQUERIDO);
validar('paisPlanCrd','paisPlanCrd',REQUERIDO);
validar('preGPlanCrd','preGPlanCrd',REQUERIDO);
validar('maePlanCrd','maePlanCrd',REQUERIDO);
validar('docPlanCrd','docPlanCrd',REQUERIDO);
validar('sedesClasesPlanCrd','sedesClasesPlanCrd',REQUERIDO);
validar('catDocPlanCrd','catDocPlanCrd',REQUERIDO);
validar('dedDocPlanCrd','dedDocPlanCrd',REQUERIDO);
validar('clasesPlanCrd','clasesPlanCrd',REQUERIDO);
validar('otrasActPlanCrd','otrasActPlanCrd',REQUERIDO);
validar('totHorSemPlanCrd','totHorSemPlanCrd',REQUERIDO);
validar('rzaInvPlanCrd','rzaInvPlanCrd',REQUERIDO);
validar('enDinaPlanCrd','enDinaPlanCrd',REQUERIDO);
validar('perAcadPlanCrd','perAcadPlanCrd',REQUERIDO);
validar('comPlanCrd','comPlanCrd',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} </h4>		
<!--  				<div class="form-group col-lg-12" style="position:fixed;background-color: azure;"> -->
 				<div class="form-group col-lg-12 nav flex-column nav-pills me-3" style="position:fixed;z-index: 100000;top: 190px;left:10px;width:150px;display:block!important;">
					<!-- Nav tabs -->
					<ul class="nav" style="display:block!important;">
					  <li class="nav-item">
					    <a class="nav-link active" data-toggle="tab" href="#home">DATOS PERSONALES</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#menu1">G1</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#menu2">G2</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#menu3">G3</a>
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
		<p class='p-black'>Los campos marcados con <span class='label-red'>*</span> son obligatorios</p>
<!-- **************************************************************************		 -->
				<div class="form-group col-lg-12">
					<!-- Tab panes -->
					<div class="tab-content">
					  	<div class="tab-pane container active row" id="home">
						  	<div class="row">
								<div class="form-group col-lg-4">
									<label class="control-label">Apellido Paterno</label>
									<div class="">
										<input id='ape1PlanCrd' name='ape1PlanCrd' value='{$ape1PlanCrd}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Apellido Materno</label>
									<div class="">
										<input id='ape2PlanCrd' name='ape2PlanCrd' value='{$ape2PlanCrd}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Nombres</label>
									<div class="">
										<input id='nom1PlanCrd' name='nom1PlanCrd' value='{$nom1PlanCrd}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Nacionalidad (País )</label>
									<div class="">
										<input id='nacPlanCrd' name='nacPlanCrd' value='{$nacPlanCrd}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Tipo de Documento</label>
									<div class="">
										<select id='tipoDoc' name='tipoDoc' class='form-control input-sm'>
											<option value=''>-Seleccione-</option>
											{html_options options=$tablaDni selected=$dniPlanCrd}
										</select>		
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">N° de DNI / Carnet de Extranjería</label>
									<div class="">
										<input id='dniPlanCrd' name='dniPlanCrd' value='{$dniPlanCrd}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
					  		</div>
					  	</div>
					  	<div class="tab-pane container row" id="menu1">
						  	<div class="row">
								<div class="form-group col-lg-4">
									<label class="control-label">Fecha de Ingreso como Docente en la Universidad</label>
									<div class="">
										<input id='fecIngPlanCrd' name='fecIngPlanCrd' value='{$fecIngPlanCrd}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">¿Era Docente Universitario a la entrada en vigencia de la Ley 30220, LU?</label>
									<div class="">
										<select id='eraDocPlanCrd' name='eraDocPlanCrd' class='form-control input-sm'>
									<option value=''>-Seleccione-</option>
									{html_options options=$tablaEraDocPlanCrd selected=$eraDocPlanCrd}
								</select>
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">¿El Docente Fue Incorporado Después de La Obtención de La Licencia de Funcionamiento Instucional?</label>
									<div class="">
										<select id='incDespPlanCrd' name='incDespPlanCrd' class='form-control input-sm'>
									<option value=''>-Seleccione-</option>
									{html_options options=$tablaIncDespPlanCrd selected=$incDespPlanCrd}
								</select>
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Mayor Grado Académico Del Docente</label>
									<div class="">
								<!-- 		<input id='gdoAcadPlanCrd' name='gdoAcadPlanCrd' value='{$gdoAcadPlanCrd}' maxlength='64' class='form-control input-sm' /> -->
										<select id='gdoAcadPlanCrd' name='gdoAcadPlanCrd' class='form-control input-sm'>
											<option value=''>-Seleccione-</option>
											{html_options options=$tablaGrado selected=$gdoAcadPlanCrd}
										</select>
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Mención Del Mayor Grado Docente</label>
									<div class="">
										<input id='mencPlanCrd' name='mencPlanCrd' value='{$mencPlanCrd}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Universidad Que Otorgó El Mayor Grado Docente</label>
									<div class="">
										<input id='univMayGPlanCrd' name='univMayGPlanCrd' value='{$univMayGPlanCrd}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">País / Universidad Que Otorgó El Mayor Grado Del Docente</label>
									<div class="">
										<input id='paisPlanCrd' name='paisPlanCrd' value='{$paisPlanCrd}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
					  		</div>
					  	</div>
					  	<div class="tab-pane container row" id="menu2">
						  	<div class="row">
						  		<div class="form-group col-lg-12">
									<div class="card">
								  		<div class="card-header">
									    	Niveles de Programa de Estudio en Los Que Da Clases El Docente		
									  	</div>
									  	<div class="card-body">
									  		<div class="row">
												<div class="form-group col-lg-4">
													<label class="control-label">Pregrado</label>
													<div class="">
														<select id='preGPlanCrd' name='preGPlanCrd' class='form-control input-sm'>
															<option value=''>-Seleccione-</option>
															{html_options options=$tablaPreGPlanCrd selected=$preGPlanCrd}
														</select>
													</div>
												</div>
												<div class="form-group col-lg-4">
													<label class="control-label">Maestría</label>
													<div class="">
														<select id='maePlanCrd' name='maePlanCrd' class='form-control input-sm'>
															<option value=''>-Seleccione-</option>
															{html_options options=$tablaMaePlanCrd selected=$maePlanCrd}
														</select>
													</div>
												</div>
												<div class="form-group col-lg-4">
													<label class="control-label">Doctorado</label>
													<div class="">
														<select id='docPlanCrd' name='docPlanCrd' class='form-control input-sm'>
															<option value=''>-Seleccione-</option>
															{html_options options=$tablaDocPlanCrd selected=$docPlanCrd}
														</select>
													</div>									  	
									  			</div>
								  			</div>
										</div>		
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Código(s) de Sede y Filial(es) en la(s) que Dicta Clases</label>
									<div class="">
										<input id='sedesClasesPlanCrd' name='sedesClasesPlanCrd' value='{$sedesClasesPlanCrd}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Categoría Docente</label>
									<div class="">
								<!-- 		<input id='catDocPlanCrd' name='catDocPlanCrd' value='{$catDocPlanCrd}' maxlength='64' class='form-control input-sm' /> -->
										<select id='catDocPlanCrd' name='catDocPlanCrd' class='form-control input-sm'>
											<option value=''>-Seleccione-</option>
											{html_options options=$tablaCat selected=$catDocPlanCrd}
										</select>
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Régimen de Dedicación</label>
									<div class="">
								<!-- 		<input id='dedDocPlanCrd' name='dedDocPlanCrd' value='{$dedDocPlanCrd}' maxlength='64' class='form-control input-sm' /> -->
										<select id='dedDocPlanCrd' name='dedDocPlanCrd' class='form-control input-sm'>
											<option value=''>-Seleccione-</option>
											{html_options options=$tablaDed selected=$dedDocPlanCrd}
										</select>
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Clases</label>
									<div class="">
										<input id='clasesPlanCrd' name='clasesPlanCrd' value='{$clasesPlanCrd}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Otras Actividades</label>
									<div class="">
										<input id='otrasActPlanCrd' name='otrasActPlanCrd' value='{$otrasActPlanCrd}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Total Horas Semanales</label>
									<div class="">
										<input id='totHorSemPlanCrd' name='totHorSemPlanCrd' value='{$totHorSemPlanCrd}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Docente Realiza Investigación</label>
									<div class="">
										<select id='rzaInvPlanCrd' name='rzaInvPlanCrd' class='form-control input-sm'>
									<option value=''>-Seleccione-</option>
									{html_options options=$tablaRzaInvPlanCrd selected=$rzaInvPlanCrd}
								</select>
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Docente Registrado en Dina</label>
									<div class="">
										<select id='enDinaPlanCrd' name='enDinaPlanCrd' class='form-control input-sm'>
									<option value=''>-Seleccione-</option>
									{html_options options=$tablaEnDinaPlanCrd selected=$enDinaPlanCrd}
								</select>
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Código ORCID</label>
									<div class="">
										<select id='enDinaPlanCrd' name='enDinaPlanCrd' class='form-control input-sm'>
									<option value=''>-Seleccione-</option>
									{html_options options=$tablaEnDinaPlanCrd selected=$enDinaPlanCrd}
								</select>
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Periodo Académico</label>
									<div class="">
										<input id='perAcadPlanCrd' name='perAcadPlanCrd' value='{$perAcadPlanCrd}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Modalidad (Presencial / Virtual)</label>
									<div class="">
										<input id='perAcadPlanCrd' name='perAcadPlanCrd' value='{$perAcadPlanCrd}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
					  		</div>
					  	</div>
					  	<div class="tab-pane container row" id="menu3">
						  	<div class="row">
								<div class="form-group col-lg-4">
									<label class="control-label">Cv Actualizado</label>
									<div class="">
								<!-- 		<input id='perAcadPlanCrd' name='perAcadPlanCrd' value='{$perAcadPlanCrd}' maxlength='64' class='form-control input-sm' /> -->
										<input type="button" id='ape1PlanCrd' name='ape1PlanCrd' value='Subir CV' maxlength='64' class='form-control btn btn-success' />
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Foto</label>
									<div class="">
										<input type="button" id='ape1PlanCrd' name='ape1PlanCrd' value='Subir Foto' maxlength='64' class='form-control btn btn-success' />
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Comentarios</label>
									<div class="">
										<textarea id='comPlanCrd' name='comPlanCrd' class='form-control input-sm'>{$comPlanCrd}</textarea>
								<!-- 		<input id='comPlanCrd' name='comPlanCrd' value='{$comPlanCrd}' maxlength='64' class='form-control input-sm' /> -->
									</div>
								</div>
					  		</div>
					  	</div>
				  	</div>
			  	</div>
<!-- **************************************************************************		 -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idPlanCrd' name='idPlanCrd' value='{$idPlanCrd}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
