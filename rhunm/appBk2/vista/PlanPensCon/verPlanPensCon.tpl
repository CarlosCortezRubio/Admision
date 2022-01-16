<div class='pagina'>
<div class="btn-group" role="group" aria-label="...">
<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde"></div>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>Consultar </h4>
		</div>
		<a id='ancla' href='#'></a>
		<input type='hidden' id='opcion' name='opcion'  value='' readonly>
		<fieldset>
		<p class='p-black'>Los campos marcados con <span class='label-red'>*</span> son obligatorios</p>
 		<div class='container-fluid'>
 			<div class="row contenidoVer" style="width:100%">
<div class="form-group col-lg-4">
	<label class="control-label">Dni </label>
	<div class="">
		<input id='dniPlanPens' name='dniPlanPens' value='{$dniPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Apellidos y nombres </label>
	<div class="">
		<input id='apellidos_y_nombresPlanPens' name='apellidos_y_nombresPlanPens' value='{$apellidos_y_nombresPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha de nacimiento </label>
	<div class="">
		<input id='fecha_de_nacimientoPlanPens' name='fecha_de_nacimientoPlanPens' value='{$fecha_de_nacimientoPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Sexo </label>
	<div class="">
		<input id='sexoPlanPens' name='sexoPlanPens' value='{$sexoPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Codigo modular </label>
	<div class="">
		<input id='codigo_modularPlanPens' name='codigo_modularPlanPens' value='{$codigo_modularPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Planilla </label>
	<div class="">
		<input id='planillaPlanPens' name='planillaPlanPens' value='{$planillaPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tipo de regimen </label>
	<div class="">
		<input id='tipo_de_regimenPlanPens' name='tipo_de_regimenPlanPens' value='{$tipo_de_regimenPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Resolucion de pension definitiva </label>
	<div class="">
		<input id='resolucion_de_pension_definitivaPlanPens' name='resolucion_de_pension_definitivaPlanPens' value='{$resolucion_de_pension_definitivaPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">A partir de </label>
	<div class="">
		<input id='a_partir_dePlanPens' name='a_partir_dePlanPens' value='{$a_partir_dePlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Banco </label>
	<div class="">
		<input id='bancoPlanPens' name='bancoPlanPens' value='{$bancoPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Cuenta bancaria </label>
	<div class="">
		<input id='cuenta_bancariaPlanPens' name='cuenta_bancariaPlanPens' value='{$cuenta_bancariaPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fuente de financiamiento </label>
	<div class="">
		<input id='fuente_de_financiamientoPlanPens' name='fuente_de_financiamientoPlanPens' value='{$fuente_de_financiamientoPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Planilla2 </label>
	<div class="">
		<input id='planilla2PlanPens' name='planilla2PlanPens' value='{$planilla2PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Total imponible </label>
	<div class="">
		<input id='total_imponiblePlanPens' name='total_imponiblePlanPens' value='{$total_imponiblePlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Total haber </label>
	<div class="">
		<input id='total_haberPlanPens' name='total_haberPlanPens' value='{$total_haberPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Total descuentos </label>
	<div class="">
		<input id='total_descuentosPlanPens' name='total_descuentosPlanPens' value='{$total_descuentosPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Total liquido </label>
	<div class="">
		<input id='total_liquidoPlanPens' name='total_liquidoPlanPens' value='{$total_liquidoPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Aguinaldo </label>
	<div class="">
		<input id='aguinaldoPlanPens' name='aguinaldoPlanPens' value='{$aguinaldoPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Basica </label>
	<div class="">
		<input id='basicaPlanPens' name='basicaPlanPens' value='{$basicaPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Bonif personal </label>
	<div class="">
		<input id='bonif_personalPlanPens' name='bonif_personalPlanPens' value='{$bonif_personalPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ael25671 </label>
	<div class="">
		<input id='ael25671PlanPens' name='ael25671PlanPens' value='{$ael25671PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Aeds081 </label>
	<div class="">
		<input id='aeds081PlanPens' name='aeds081PlanPens' value='{$aeds081PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tph </label>
	<div class="">
		<input id='tphPlanPens' name='tphPlanPens' value='{$tphPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Bonif familiar </label>
	<div class="">
		<input id='bonif_familiarPlanPens' name='bonif_familiarPlanPens' value='{$bonif_familiarPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Du080 04 </label>
	<div class="">
		<input id='du080_04PlanPens' name='du080_04PlanPens' value='{$du080_04PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Refrig y movi </label>
	<div class="">
		<input id='refrig_y_moviPlanPens' name='refrig_y_moviPlanPens' value='{$refrig_y_moviPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Du90 96 </label>
	<div class="">
		<input id='du90_96PlanPens' name='du90_96PlanPens' value='{$du90_96PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds19 94 pcm </label>
	<div class="">
		<input id='ds19_94_pcmPlanPens' name='ds19_94_pcmPlanPens' value='{$ds19_94_pcmPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds21 92 pcm </label>
	<div class="">
		<input id='ds21_92_pcmPlanPens' name='ds21_92_pcmPlanPens' value='{$ds21_92_pcmPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Bon especial </label>
	<div class="">
		<input id='bon_especialPlanPens' name='bon_especialPlanPens' value='{$bon_especialPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Reunificada </label>
	<div class="">
		<input id='reunificadaPlanPens' name='reunificadaPlanPens' value='{$reunificadaPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Igv </label>
	<div class="">
		<input id='igvPlanPens' name='igvPlanPens' value='{$igvPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Cargsimul </label>
	<div class="">
		<input id='cargsimulPlanPens' name='cargsimulPlanPens' value='{$cargsimulPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Art18 dl 20530 </label>
	<div class="">
		<input id='art18_dl_20530PlanPens' name='art18_dl_20530PlanPens' value='{$art18_dl_20530PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Du073 97 </label>
	<div class="">
		<input id='du073_97PlanPens' name='du073_97PlanPens' value='{$du073_97PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Du011 99 </label>
	<div class="">
		<input id='du011_99PlanPens' name='du011_99PlanPens' value='{$du011_99PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Du037 94 </label>
	<div class="">
		<input id='du037_94PlanPens' name='du037_94PlanPens' value='{$du037_94PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds016 </label>
	<div class="">
		<input id='ds016PlanPens' name='ds016PlanPens' value='{$ds016PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds017 </label>
	<div class="">
		<input id='ds017PlanPens' name='ds017PlanPens' value='{$ds017PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds110 2006 </label>
	<div class="">
		<input id='ds110_2006PlanPens' name='ds110_2006PlanPens' value='{$ds110_2006PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds039 2007 </label>
	<div class="">
		<input id='ds039_2007PlanPens' name='ds039_2007PlanPens' value='{$ds039_2007PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds120 2008 </label>
	<div class="">
		<input id='ds120_2008PlanPens' name='ds120_2008PlanPens' value='{$ds120_2008PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds014 2009 </label>
	<div class="">
		<input id='ds014_2009PlanPens' name='ds014_2009PlanPens' value='{$ds014_2009PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds077 2010 </label>
	<div class="">
		<input id='ds077_2010PlanPens' name='ds077_2010PlanPens' value='{$ds077_2010PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds031 2011 </label>
	<div class="">
		<input id='ds031_2011PlanPens' name='ds031_2011PlanPens' value='{$ds031_2011PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds024 2012 </label>
	<div class="">
		<input id='ds024_2012PlanPens' name='ds024_2012PlanPens' value='{$ds024_2012PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds004 2013 </label>
	<div class="">
		<input id='ds004_2013PlanPens' name='ds004_2013PlanPens' value='{$ds004_2013PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds003 2014 </label>
	<div class="">
		<input id='ds003_2014PlanPens' name='ds003_2014PlanPens' value='{$ds003_2014PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds002 2015 </label>
	<div class="">
		<input id='ds002_2015PlanPens' name='ds002_2015PlanPens' value='{$ds002_2015PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds005 2016 </label>
	<div class="">
		<input id='ds005_2016PlanPens' name='ds005_2016PlanPens' value='{$ds005_2016PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds020 2017 </label>
	<div class="">
		<input id='ds020_2017PlanPens' name='ds020_2017PlanPens' value='{$ds020_2017PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds011 2018 </label>
	<div class="">
		<input id='ds011_2018PlanPens' name='ds011_2018PlanPens' value='{$ds011_2018PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds009 2019 </label>
	<div class="">
		<input id='ds009_2019PlanPens' name='ds009_2019PlanPens' value='{$ds009_2019PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds006 2020 </label>
	<div class="">
		<input id='ds006_2020PlanPens' name='ds006_2020PlanPens' value='{$ds006_2020PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ipss </label>
	<div class="">
		<input id='ipssPlanPens' name='ipssPlanPens' value='{$ipssPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Cafae </label>
	<div class="">
		<input id='cafaePlanPens' name='cafaePlanPens' value='{$cafaePlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Prderrma </label>
	<div class="">
		<input id='prderrmaPlanPens' name='prderrmaPlanPens' value='{$prderrmaPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Escolaridad </label>
	<div class="">
		<input id='escolaridadPlanPens' name='escolaridadPlanPens' value='{$escolaridadPlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Decreto supermo 20 21 </label>
	<div class="">
		<input id='decreto_supermo_20_21PlanPens' name='decreto_supermo_20_21PlanPens' value='{$decreto_supermo_20_21PlanPens}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idPlanPens' name='idPlanPens' value='{$idPlanPens}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>