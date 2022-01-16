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
	<label class="control-label">Ape1PlanCrd plancrd</label>
	<div class="">
		{$ape1PlanCrd}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ape2PlanCrd plancrd</label>
	<div class="">
		{$ape2PlanCrd}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nom1PlanCrd plancrd</label>
	<div class="">
		{$nom1PlanCrd}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">NacPlanCrd plancrd</label>
	<div class="">
		{$nacPlanCrd}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">DniPlanCrd plancrd</label>
	<div class="">
		{$dniPlanCrd}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FecIngPlanCrd plancrd</label>
	<div class="">
		{$fecIngPlanCrd}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">EraDocPlanCrd plancrd</label>
	<div class="">
		{$eraDocPlanCrd}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IncDespPlanCrd plancrd</label>
	<div class="">
		{$incDespPlanCrd}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">GdoAcadPlanCrd plancrd</label>
	<div class="">
		{$gdoAcadPlanCrd}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">MencPlanCrd plancrd</label>
	<div class="">
		{$mencPlanCrd}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">UnivMayGPlanCrd plancrd</label>
	<div class="">
		{$univMayGPlanCrd}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">PaisPlanCrd plancrd</label>
	<div class="">
		{$paisPlanCrd}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">PreGPlanCrd plancrd</label>
	<div class="">
		{$preGPlanCrd}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">MaePlanCrd plancrd</label>
	<div class="">
		{$maePlanCrd}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">DocPlanCrd plancrd</label>
	<div class="">
		{$docPlanCrd}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">SedesClasesPlanCrd plancrd</label>
	<div class="">
		{$sedesClasesPlanCrd}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">CatDocPlanCrd plancrd</label>
	<div class="">
		{$catDocPlanCrd}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">DedDocPlanCrd plancrd</label>
	<div class="">
		{$dedDocPlanCrd}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">ClasesPlanCrd plancrd</label>
	<div class="">
		{$clasesPlanCrd}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">OtrasActPlanCrd plancrd</label>
	<div class="">
		{$otrasActPlanCrd}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">TotHorSemPlanCrd plancrd</label>
	<div class="">
		{$totHorSemPlanCrd}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">RzaInvPlanCrd plancrd</label>
	<div class="">
		{$rzaInvPlanCrd}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">EnDinaPlanCrd plancrd</label>
	<div class="">
		{$enDinaPlanCrd}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">PerAcadPlanCrd plancrd</label>
	<div class="">
		{$perAcadPlanCrd}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">ComPlanCrd plancrd</label>
	<div class="">
		{$comPlanCrd}
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idPlanCrd' name='idPlanCrd' value='{$idPlanCrd}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
