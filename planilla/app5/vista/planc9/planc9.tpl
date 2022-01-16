{literal}
<script type="text/javascript">
validar('numPlanC9','numPlanC9',REQUERIDO);
validar('ape1PlanC9','ape1PlanC9',REQUERIDO);
validar('ape2PlanC9','ape2PlanC9',REQUERIDO);
validar('nom1PlanC9','nom1PlanC9',REQUERIDO);
validar('nacPlanC9','nacPlanC9',REQUERIDO);
validar('dniPlanC9','dniPlanC9',REQUERIDO);
validar('fecIngPlanC9','fecIngPlanC9',REQUERIDO);
validar('eraDocPlanC9','eraDocPlanC9',REQUERIDO);
validar('incDespPlanC9','incDespPlanC9',REQUERIDO);
validar('gdoAcadPlanC9','gdoAcadPlanC9',REQUERIDO);
validar('mencPlanC9','mencPlanC9',REQUERIDO);
validar('univMayGPlanC9','univMayGPlanC9',REQUERIDO);
validar('paisPlanC9','paisPlanC9',REQUERIDO);
validar('preGPlanC9','preGPlanC9',REQUERIDO);
validar('maePlanC9','maePlanC9',REQUERIDO);
validar('docPlanC9','docPlanC9',REQUERIDO);
validar('sedesClasesPlanC9','sedesClasesPlanC9',REQUERIDO);
validar('catDocPlanC9','catDocPlanC9',REQUERIDO);
validar('dedDocPlanC9','dedDocPlanC9',REQUERIDO);
validar('clasesPlanC9','clasesPlanC9',REQUERIDO);
validar('otrasActPlanC9','otrasActPlanC9',REQUERIDO);
validar('totHorSemPlanC9','totHorSemPlanC9',REQUERIDO);
validar('rzaInvPlanC9','rzaInvPlanC9',REQUERIDO);
validar('enDinaPlanC9','enDinaPlanC9',REQUERIDO);
validar('perAcadPlanC9','perAcadPlanC9',REQUERIDO);
validar('comPlanC9','comPlanC9',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
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
		<p class='p-black'>Los campos marcados con <span class='label-red'>*</span> son obligatorios</p>
 		<div class='container-fluid'>
 			<div class="row contenidoVer" style="width:100%">
<div class="form-group col-lg-4">
	<label class="control-label">NumPlanC9 planc9</label>
	<div class="">
		<input id='numPlanC9' name='numPlanC9' value='{$numPlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ape1PlanC9 planc9</label>
	<div class="">
		<input id='ape1PlanC9' name='ape1PlanC9' value='{$ape1PlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ape2PlanC9 planc9</label>
	<div class="">
		<input id='ape2PlanC9' name='ape2PlanC9' value='{$ape2PlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nom1PlanC9 planc9</label>
	<div class="">
		<input id='nom1PlanC9' name='nom1PlanC9' value='{$nom1PlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">NacPlanC9 planc9</label>
	<div class="">
		<input id='nacPlanC9' name='nacPlanC9' value='{$nacPlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">DniPlanC9 planc9</label>
	<div class="">
		<input id='dniPlanC9' name='dniPlanC9' value='{$dniPlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FecIngPlanC9 planc9</label>
	<div class="">
		<div class="input-group input-group-sm">
<input id='fecIngPlanC9' name='fecIngPlanC9' class='form-control input-sm' type='text' value='{$fecIngPlanC9|date_format:"%d/%m/%Y"}' maxlength='10' ondblclick='this.value=""' readonly>
<span class='input-group-addon'><img class='cursor' id='fecha' src='{$PUB_URL}img/iconos/calendario.gif' align='top'></span>
{literal}
<script type='text/javascript'>
Calendar.setup({inputField: 'fecIngPlanC9', ifFormat : '%d/%m/%Y', button: 'fecha'});
</script>
{/literal}
</div>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">EraDocPlanC9 planc9</label>
	<div class="">
		<input id='eraDocPlanC9' name='eraDocPlanC9' value='{$eraDocPlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IncDespPlanC9 planc9</label>
	<div class="">
		<input id='incDespPlanC9' name='incDespPlanC9' value='{$incDespPlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">GdoAcadPlanC9 planc9</label>
	<div class="">
		<input id='gdoAcadPlanC9' name='gdoAcadPlanC9' value='{$gdoAcadPlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">MencPlanC9 planc9</label>
	<div class="">
		<input id='mencPlanC9' name='mencPlanC9' value='{$mencPlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">UnivMayGPlanC9 planc9</label>
	<div class="">
		<input id='univMayGPlanC9' name='univMayGPlanC9' value='{$univMayGPlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">PaisPlanC9 planc9</label>
	<div class="">
		<input id='paisPlanC9' name='paisPlanC9' value='{$paisPlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">PreGPlanC9 planc9</label>
	<div class="">
		<input id='preGPlanC9' name='preGPlanC9' value='{$preGPlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">MaePlanC9 planc9</label>
	<div class="">
		<input id='maePlanC9' name='maePlanC9' value='{$maePlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">DocPlanC9 planc9</label>
	<div class="">
		<input id='docPlanC9' name='docPlanC9' value='{$docPlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">SedesClasesPlanC9 planc9</label>
	<div class="">
		<input id='sedesClasesPlanC9' name='sedesClasesPlanC9' value='{$sedesClasesPlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">CatDocPlanC9 planc9</label>
	<div class="">
		<input id='catDocPlanC9' name='catDocPlanC9' value='{$catDocPlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">DedDocPlanC9 planc9</label>
	<div class="">
		<input id='dedDocPlanC9' name='dedDocPlanC9' value='{$dedDocPlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">ClasesPlanC9 planc9</label>
	<div class="">
		<input id='clasesPlanC9' name='clasesPlanC9' value='{$clasesPlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">OtrasActPlanC9 planc9</label>
	<div class="">
		<input id='otrasActPlanC9' name='otrasActPlanC9' value='{$otrasActPlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">TotHorSemPlanC9 planc9</label>
	<div class="">
		<input id='totHorSemPlanC9' name='totHorSemPlanC9' value='{$totHorSemPlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">RzaInvPlanC9 planc9</label>
	<div class="">
		<input id='rzaInvPlanC9' name='rzaInvPlanC9' value='{$rzaInvPlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">EnDinaPlanC9 planc9</label>
	<div class="">
		<input id='enDinaPlanC9' name='enDinaPlanC9' value='{$enDinaPlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">PerAcadPlanC9 planc9</label>
	<div class="">
		<input id='perAcadPlanC9' name='perAcadPlanC9' value='{$perAcadPlanC9}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">ComPlanC9 planc9</label>
	<div class="">
		<input id='comPlanC9' name='comPlanC9' value='{$comPlanC9}' maxlength='64' class='form-control input-sm' />
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
