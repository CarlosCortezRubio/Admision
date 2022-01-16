<div class='pagina'>
<div class="btn-group" role="group" aria-label="...">
<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde"></div>
<div class='line-title-con'>
		
	</div>
</div>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar  {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} </h4>
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
	<label class="control-label">IdPersona </label>
	<div class="">
		{$idPersona}
	</div>
</div>

<div class="form-group col-lg-4">
	<label class="control-label">Tipo Calculo Judicial</label>
	<div class="">
		{$idTipoCalcJud}
	</div>
</div>
		
		<div class="form-group col-lg-4">
	<label class="control-label">Modo Pago </label>
	<div class="">
		{$idModoPago}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Parentesco </label>
	<div class="">
		{$idParentesco}
	</div>	
</div>
<div class="form-group col-lg-4">
	<label class="control-label">CESSalud  </label>
	<div class="">
		{$CESSaludBeneficiario}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tipo Pensionista  </label>
	<div class="">
		{$tPensBeneficiario}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Plaza Beneficiario  </label>
	<div class="">
		{$plazaBeneficiario}
	</div>
</div>

<div class="form-group col-lg-4">
	<label class="control-label">Leyenda  </label>
	<div class="">
		{$leyendaBeneficiario}
	</div>
</div>

<div class="form-group col-lg-4">
	<label class="control-label">Cuenta de Deposito  </label>
	<div class="">
		{$ctaDepBeneficiario}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Regimen Judicial  </label>
	<div class="">
		{$regJudicialBeneficiario}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha Inicio  </label>
	<div class="">
		{$fecIniBeneficiario}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha Fin  </label>
	<div class="">
		{$fecFinBeneficiario}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Estado</label>
	<div class="">
		{$edoBeneficiario}
	</div>
</div>
		
		
		
		
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idBeneficiario' name='idBeneficiario' value='{$idBeneficiario}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
