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
	<label class="control-label">NumPlanC9 planc9</label>
	<div class="">
		{$numPlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ape1PlanC9 planc9</label>
	<div class="">
		{$ape1PlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ape2PlanC9 planc9</label>
	<div class="">
		{$ape2PlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nom1PlanC9 planc9</label>
	<div class="">
		{$nom1PlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">NacPlanC9 planc9</label>
	<div class="">
		{$nacPlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">DniPlanC9 planc9</label>
	<div class="">
		{$dniPlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FecIngPlanC9 planc9</label>
	<div class="">
		{$fecIngPlanC9}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">EraDocPlanC9 planc9</label>
	<div class="">
		{$eraDocPlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IncDespPlanC9 planc9</label>
	<div class="">
		{$incDespPlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">GdoAcadPlanC9 planc9</label>
	<div class="">
		{$gdoAcadPlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">MencPlanC9 planc9</label>
	<div class="">
		{$mencPlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">UnivMayGPlanC9 planc9</label>
	<div class="">
		{$univMayGPlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">PaisPlanC9 planc9</label>
	<div class="">
		{$paisPlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">PreGPlanC9 planc9</label>
	<div class="">
		{$preGPlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">MaePlanC9 planc9</label>
	<div class="">
		{$maePlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">DocPlanC9 planc9</label>
	<div class="">
		{$docPlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">SedesClasesPlanC9 planc9</label>
	<div class="">
		{$sedesClasesPlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">CatDocPlanC9 planc9</label>
	<div class="">
		{$catDocPlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">DedDocPlanC9 planc9</label>
	<div class="">
		{$dedDocPlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">ClasesPlanC9 planc9</label>
	<div class="">
		{$clasesPlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">OtrasActPlanC9 planc9</label>
	<div class="">
		{$otrasActPlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">TotHorSemPlanC9 planc9</label>
	<div class="">
		{$totHorSemPlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">RzaInvPlanC9 planc9</label>
	<div class="">
		{$rzaInvPlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">EnDinaPlanC9 planc9</label>
	<div class="">
		{$enDinaPlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">PerAcadPlanC9 planc9</label>
	<div class="">
		{$perAcadPlanC9}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">ComPlanC9 planc9</label>
	<div class="">
		{$comPlanC9}
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idplanc9' name='idplanc9' value='{$idplanc9}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
