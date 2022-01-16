<div class='pagina'>
<div class="btn-group" role="group" aria-label="...">
<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde"></div>
<div class='line-title-con'>
		<h4>Ficha </h4>
	</div>
</div>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} </h4>
		</div>
		<a id='ancla' href='#'></a>
		<input type='hidden' id='opcion' name='opcion'  value='' readonly>
		<div id='errores'>
			{if $error != ''}<div id='msg-error' class='msg-red'>{$error}</div>{/if}
			{if $exito != ''}<div id='msg-exito' class='msg-green'>{$exito}</div>{/if}
			{if $info  != ''}<div id='msg-info' class='msg-blue'>{$info}</div>{/if}
		</div>
		<fieldset>
 		<div class='container-fluid'>
 			<div class="row contenidoVer" style="width:100%">
<div class="form-group col-lg-4">
	<label class="control-label">Dni PlanPens</label>
	<div class="">
		{$dniPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Apellidos_y_nombres PlanPens</label>
	<div class="">
		{$apellidos_y_nombresPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha_de_nacimiento PlanPens</label>
	<div class="">
		{$fecha_de_nacimientoPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Sexo PlanPens</label>
	<div class="">
		{$sexoPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Codigo_modular PlanPens</label>
	<div class="">
		{$codigo_modularPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Planilla PlanPens</label>
	<div class="">
		{$planillaPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tipo_de_regimen PlanPens</label>
	<div class="">
		{$tipo_de_regimenPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Resolucion_de_pension_definitiva PlanPens</label>
	<div class="">
		{$resolucion_de_pension_definitivaPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">A_partir_de PlanPens</label>
	<div class="">
		{$a_partir_dePlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Banco PlanPens</label>
	<div class="">
		{$bancoPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Cuenta_bancaria PlanPens</label>
	<div class="">
		{$cuenta_bancariaPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fuente_de_financiamiento PlanPens</label>
	<div class="">
		{$fuente_de_financiamientoPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Planilla2 PlanPens</label>
	<div class="">
		{$planilla2PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Total_imponible PlanPens</label>
	<div class="">
		{$total_imponiblePlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Total_haber PlanPens</label>
	<div class="">
		{$total_haberPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Total_descuentos PlanPens</label>
	<div class="">
		{$total_descuentosPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Total_liquido PlanPens</label>
	<div class="">
		{$total_liquidoPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Aguinaldo PlanPens</label>
	<div class="">
		{$aguinaldoPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Basica PlanPens</label>
	<div class="">
		{$basicaPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Bonif_personal PlanPens</label>
	<div class="">
		{$bonif_personalPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ael25671 PlanPens</label>
	<div class="">
		{$ael25671PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Aeds081 PlanPens</label>
	<div class="">
		{$aeds081PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tph PlanPens</label>
	<div class="">
		{$tphPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Bonif_familiar PlanPens</label>
	<div class="">
		{$bonif_familiarPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Du080_04 PlanPens</label>
	<div class="">
		{$du080_04PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Refrig_y_movi PlanPens</label>
	<div class="">
		{$refrig_y_moviPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Du90_96 PlanPens</label>
	<div class="">
		{$du90_96PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds19_94_pcm PlanPens</label>
	<div class="">
		{$ds19_94_pcmPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds21_92_pcm PlanPens</label>
	<div class="">
		{$ds21_92_pcmPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Bon_especial PlanPens</label>
	<div class="">
		{$bon_especialPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Reunificada PlanPens</label>
	<div class="">
		{$reunificadaPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Igv PlanPens</label>
	<div class="">
		{$igvPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Cargsimul PlanPens</label>
	<div class="">
		{$cargsimulPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Art18_dl_20530 PlanPens</label>
	<div class="">
		{$art18_dl_20530PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Du073_97 PlanPens</label>
	<div class="">
		{$du073_97PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Du011_99 PlanPens</label>
	<div class="">
		{$du011_99PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Du037_94 PlanPens</label>
	<div class="">
		{$du037_94PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds016 PlanPens</label>
	<div class="">
		{$ds016PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds017 PlanPens</label>
	<div class="">
		{$ds017PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds110_2006 PlanPens</label>
	<div class="">
		{$ds110_2006PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds039_2007 PlanPens</label>
	<div class="">
		{$ds039_2007PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds120_2008 PlanPens</label>
	<div class="">
		{$ds120_2008PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds014_2009 PlanPens</label>
	<div class="">
		{$ds014_2009PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds077_2010 PlanPens</label>
	<div class="">
		{$ds077_2010PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds031_2011 PlanPens</label>
	<div class="">
		{$ds031_2011PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds024_2012 PlanPens</label>
	<div class="">
		{$ds024_2012PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds004_2013 PlanPens</label>
	<div class="">
		{$ds004_2013PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds003_2014 PlanPens</label>
	<div class="">
		{$ds003_2014PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds002_2015 PlanPens</label>
	<div class="">
		{$ds002_2015PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds005_2016 PlanPens</label>
	<div class="">
		{$ds005_2016PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds020_2017 PlanPens</label>
	<div class="">
		{$ds020_2017PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds011_2018 PlanPens</label>
	<div class="">
		{$ds011_2018PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds009_2019 PlanPens</label>
	<div class="">
		{$ds009_2019PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds006_2020 PlanPens</label>
	<div class="">
		{$ds006_2020PlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ipss PlanPens</label>
	<div class="">
		{$ipssPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Cafae PlanPens</label>
	<div class="">
		{$cafaePlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Prderrma PlanPens</label>
	<div class="">
		{$prderrmaPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Escolaridad PlanPens</label>
	<div class="">
		{$escolaridadPlanPens}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Decreto_supermo_20_21 PlanPens</label>
	<div class="">
		{$decreto_supermo_20_21PlanPens}
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
