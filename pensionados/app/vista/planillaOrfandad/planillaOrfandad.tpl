{literal}
<script type="text/javascript">
//validar('idPersona','IdPersona planillaPensionado',REQUERIDO);
validar('idPeriodo','IdPeriodo planillaPensionado',REQUERIDO);
validar('fecplanillaPensionado','Fec planillaPensionado',REQUERIDO);
validar('totImpplanillaPensionado','Total imponible',REQUERIDO);
validar('totHabplanillaPensionado','Total haber',REQUERIDO);
validar('totDescplanillaPensionado','Total descuentos',REQUERIDO);
validar('totLiqplanillaPensionado','Total liquido',REQUERIDO);

//validar('dniPersona','DNI',REQUERIDO);
validar('apellidos_y_nombresPersona','Apellidos y Nombres',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} Planilla Orfandad</h4>
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
									<label class="control-label"> Nombre del Periodo</label>
									<div class="input-group mb-3">
										{$nomPeriodo}
									</div>		
								</div>			
								<div class="form-group col-lg-3">
									<label class="control-label"><span class='label-red'>*</span> DNI del Pensionado</label>
									<div class="input-group mb-3">
										<input type='text' class="form-control input-sm" id='docPersona' name='docPersona' value='{$docPersona}'/>
										{if $opt == 'g'}
									  	<div class="input-group-append">
									    	<button type="button" class="btn btn-primary" onclick="xajax_buscarDocente(xajax.$('docPersona').value);">Buscar</button>
									  	</div>
									  	{/if}
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
										<input id='apellidos_y_nombresPersona' name='apellidos_y_nombresPersona' value='{$apellidos_y_nombresPersona}' maxlength='64' class='form-control input-sm' readonly/>
									</div>
								</div>
								<div class="form-group col-lg-3">
									<label class="control-label">Fecha de nacimiento</label>
									<div class="">
										<input id='fecNacPersona' name='fecNacPersona' value='{$fecNacPersona}' maxlength='64' class='form-control input-sm' readonly />
									</div>
								</div>			  	
								<div class="form-group col-lg-2">
									<label class="control-label">Género</label>
									<div class="">
										<select id='idGenero' name='idGenero' class='form-control input-sm'>
											<option value=''>-Seleccione-</option>
											{html_options options=$tablaGenero selected=$idGenero}
										</select>
									</div>
								</div>
								<div class="form-group col-lg-2">
									<label class="control-label">Código modular </label>
									<div class="">
										<input id='codModularPersona' name='codModularPersona' value='{$codModularPersona}' maxlength='64' class='form-control input-sm' readonly />
									</div>
								</div>
								<div class="form-group col-lg-5">
									<label class="control-label">Planilla </label>
									<div class="">
										<select id='mes' name='mes' class='form-control input-sm' disabled>
											<option value=''>-Seleccione-</option>
											{html_options options=$tablaMes selected=$mes}
										</select>
										<!-- <input id='planillaPersona' name='planillaPersona' value='{$planillaPersona}' maxlength='64' class='form-control input-sm' readonly /> -->
									</div>
								</div>
								<div class="form-group col-lg-3">
									<label class="control-label">Tipo de regimen </label>
									<div class="">
										<input id='tipRegPersona' name='tipRegPersona' value='{$tipRegPersona}' maxlength='64' class='form-control input-sm' readonly />
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Resolucion de pension definitiva </label>
									<div class="">
										<input id='resPenDefPersona' name='resPenDefPersona' value='{$resPenDefPersona}' maxlength='64' class='form-control input-sm' readonly />
									</div>
								</div>
								<div class="form-group col-lg-5">
									<label class="control-label">A partir de </label>
									<div class="">
										<input id='fecRes' name='fecRes' value='{$fecRes}' maxlength='64' class='form-control input-sm' readonly />
									</div>
								</div>
								<div class="form-group col-lg-3">
									<label class="control-label">Banco </label>
									<div class="">
										<input id='bancoPersona' name='bancoPersona' value='' class='form-control input-sm' readonly />
										<!-- <input id='bancoPersona' name='bancoPersona' value='{$bancoPersona}' maxlength='64' class='form-control input-sm' /> -->
									</div>
								</div>
								<div class="form-group col-lg-4">
									<label class="control-label">Cuenta bancaria </label>
									<div class="">
										<input id='ctaBancoPersona' name='ctaBancoPersona' value='{$ctaBancoPersona}' maxlength='64' class='form-control input-sm' readonly />
									</div>
								</div>
								<div class="form-group col-lg-3">
									<label class="control-label">Fuente de financiamiento </label>
									<div class="">
										<input id='fntFinancPersona' name='fntFinancPersona' value='{$fntFinancPersona}' maxlength='64' class='form-control input-sm' readonly />
									</div>
								</div>
								<div class="form-group col-lg-2">
									<label class="control-label">Planilla2 </label>
									<div class="">
										<input id='planilla2Persona' name='planilla2Persona' value='{$planilla2Persona}' maxlength='64' class='form-control input-sm' readonly />
									</div>
								</div>								
								<div class="form-group col-lg-3">
									<label class="control-label">Fecha de Registro de la planilla</label>
									<div class="">
										<div class="input-group input-group-sm">
											<input id='fecplanillaPensionado' name='fecplanillaPensionado' class='form-control input-sm' type='text' value='{$fecplanillaPensionado|date_format:"%d/%m/%Y"}' maxlength='10'  >
										</div>
									</div>
								</div>
							</div>
						</div>
					<div class="tab-pane container fade" id="menu1">
						<div class="row">
	  
							{foreach key=cid item=con from=$tablaResultadoIng}
								{if $con.idTipoConcepto <> 2}
								<div class="form-group col-lg-3">
									<label class="control-label">{$con.etiConceptos} </label>
									<div class="">
										<input id='idConc_{$con.idConceptos}' name='idConc_{$con.idConceptos}' value='{$con.mntConcPlanilla}' maxlength='64' class='form-control input-sm valIngreso' />
									</div>
								</div>
								{/if}
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
	  
							{foreach key=cid item=con from=$tablaResultadoDesc}
								{if $con.idTipoConcepto == 2}
								<div class="form-group col-lg-3">
									<label class="control-label">{$con.etiConceptos} </label>
									<div class="">
										<input id='idConc_{$con.idConceptos}' name='idConc_{$con.idConceptos}' value='{$con.mntConcPlanilla}' maxlength='64' class='form-control input-sm valDescuentos' />
									</div>
								</div>
								{/if}
							{/foreach}
						
							<!--
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
							-->					  
						</div>
					</div>
				  	<div class="tab-pane container fade" id="menu3">
						<div class="row">
							<div class="form-group col-lg-3">
								<label class="control-label">Total imponible </label>
								<div class="">
									<div class="input-group input-group-sm">
							<input id='totImpplanillaPensionado' name='totImpplanillaPensionado' class='form-control input-sm' type='text' value='{$totImpplanillaPensionado|date_format:"%d/%m/%Y"}' maxlength='10' readonly>
							</div>
								</div>
							</div>
							<div class="form-group col-lg-3">
								<label class="control-label">Total haber </label>
								<div class="">
									<div class="input-group input-group-sm">
							<input id='totHabplanillaPensionado' name='totHabplanillaPensionado' class='form-control input-sm' type='text' value='{$totHabplanillaPensionado|date_format:"%d/%m/%Y"}' maxlength='10' readonly>
							</div>
								</div>
							</div>
							<div class="form-group col-lg-3">
								<label class="control-label">Total descuentos </label>
								<div class="">
									<div class="input-group input-group-sm">
							<input id='totDescplanillaPensionado' name='totDescplanillaPensionado' class='form-control input-sm' type='text' value='{$totDescplanillaPensionado|date_format:"%d/%m/%Y"}' maxlength='10' readonly>
							</div>
								</div>
							</div>
							<div class="form-group col-lg-3">
								<label class="control-label">Total liquido </label>
								<div class="">
									<div class="input-group input-group-sm">
							<input id='totLiqplanillaPensionado' name='totLiqplanillaPensionado' class='form-control input-sm' type='text' value='{$totLiqplanillaPensionado|date_format:"%d/%m/%Y"}' maxlength='10' readonly>
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
		<input type='hidden' id='tipPlanilla' name='tipPlanilla' value='{$tipPlanilla}' readonly/>
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idplanillaPensionado' name='idplanillaPensionado' value='{$idplanillaPensionado}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

		<input type='hidden' id='idPersona' name='idPersona' value='{$idPersona}' maxlength='64' class='form-control input-sm' readonly/>
		<input type='hidden' id='idPeriodo' name='idPeriodo' value='{$idPeriodo}' maxlength='64' class='form-control input-sm' readonly/>
	</form>
</div>

{literal}
<script>
function preG(valor){
	jQuery('#preG').val(valor);
	/*
	validar('dniPlanPens','dniPlanPens',REQUERIDO);
	validar('apellidos_y_nombresPlanPens','apellidos_y_nombresPlanPens',REQUERIDO);
	validar('fecha_de_nacimientoPlanPens','fecha_de_nacimientoPlanPens',REQUERIDO);
	validar('sexoPlanPens','sexoPlanPens',REQUERIDO);
	validar('codigo_modularPlanPens','codigo_modularPlanPens',REQUERIDO);
	*/	
}
function totalizar(){
	var sumIngreso = 0;
	var sumDescuentos = 0;
	jQuery('.valIngreso').each(function(){
		if(!isNaN(parseFloat(jQuery(this).val()))){
			sumIngreso += parseFloat(jQuery(this).val());
		}
	});	
	
	jQuery('.valDescuentos').each(function(){
		if(!isNaN(parseFloat(jQuery(this).val()))){
			sumDescuentos += parseFloat(jQuery(this).val());
		}
	});	
	//BF4 = parseFloat(jQuery('#escolaridadPlanPens').val());
	
	//AC4 = parseFloat(jQuery('#ds21_92_pcmPlanPens').val());
	//AF4 = parseFloat(jQuery('#igvPlanPens').val());
	//R4 = parseFloat(jQuery('#aguinaldoPlanPens').val());
	/*
	AC4 = parseFloat(noNulo('ds21_92_pcmPlanPens'));
	AF4 = parseFloat(noNulo('igvPlanPens'));
	R4 = parseFloat(noNulo('aguinaldoPlanPens'));
	*/
	/*
	AC4 = parseFloat(noNulo('idConc_537'));
	AF4 = parseFloat(noNulo('igvPlanPens'));
	R4 = parseFloat(noNulo('aguinaldoPlanPens'));
	*/
	/*
	AC4 = parseFloat(noNulo('idConc_18'));
	AF4 = parseFloat(noNulo('idConc_22'));
	R4 = parseFloat(noNulo('idConc_522'));	
	*/

	/////////Agregado el 11/11/2021
	/*
	AC4 = parseFloat(noNulo('idConc_95'));
	AF4 = parseFloat(noNulo('idConc_66'));
	R4 = parseFloat(noNulo('idConc_72'));	
	*/

	/////////Agregado el 22/12/2021
	AC4 = parseFloat(noNulo('idConc_12'));
	AF4 = parseFloat(noNulo('idConc_15'));
	R4 = parseFloat(noNulo('idConc_1'));	
	

	//alert(sumIngreso  +'-'+ AC4 +'-'+ AF4 +'-'+ R4);
	totalImponible = sumIngreso  - AC4 - AF4 - R4;
	//alert('1'+totalImponible)
	totalImponible = Math.round(totalImponible);
	//alert('2'+totalImponible)
	totalHaber = sumIngreso;
	totalLiquido = totalHaber - sumDescuentos	
		
	// Asignando resultados
	/*
	jQuery('#total_imponiblePlanPens').val(totalImponible.toFixed(2))
	jQuery('#total_haberPlanPens').val(totalHaber.toFixed(2));
	jQuery('#total_descuentosPlanPens').val(sumDescuentos.toFixed(2));
	jQuery('#total_liquidoPlanPens').val(totalLiquido.toFixed(2));
	*/
	jQuery('#totImpplanillaPensionado').val(totalImponible.toFixed(2))
	jQuery('#totHabplanillaPensionado').val(totalHaber.toFixed(2));
	jQuery('#totDescplanillaPensionado').val(sumDescuentos.toFixed(2));
	jQuery('#totLiqplanillaPensionado').val(totalLiquido.toFixed(2));
	//alert("totalImponible = " + totalImponible + ' totalHaber ' + totalHaber + " Descuentos = " + sumDescuentos + ' totalLiquido = '+totalLiquido);
	
	//alert(totalImponible)
	ipssPlanPens = (totalImponible*4)/100;
	jQuery('#ipssPersona').val(ipssPlanPens.toFixed(2));
}
function noNulo(valor){
	tmp = jQuery('#'+valor).val();
	//alert('1 '+valor + ' = '+ tmp)
	if(isNaN(tmp) || tmp == '' || tmp == null){
		tmp = 0;
		//alert('2 '+valor + ' = '+ tmp)
	}else{
		//alert('3 '+valor + ' = '+ tmp)
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
{/literal}