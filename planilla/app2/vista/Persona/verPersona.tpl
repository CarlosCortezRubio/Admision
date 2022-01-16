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
	<label class="control-label">IdGenero Persona</label>
	<div class="">
		{$idGenero}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdEdoCivil Persona</label>
	<div class="">
		{$idEdoCivil}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdGradoInst Persona</label>
	<div class="">
		{$idGradoInst}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nom1 Persona</label>
	<div class="">
		{$nomPersona1}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nom2 Persona</label>
	<div class="">
		{$nomPersona2}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ape1 Persona</label>
	<div class="">
		{$apePersona1}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ape2 Persona</label>
	<div class="">
		{$apePersona2}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ced Persona</label>
	<div class="">
		{$cedPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nac Persona</label>
	<div class="">
		{$nacPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Rif Persona</label>
	<div class="">
		{$rifPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FecNac Persona</label>
	<div class="">
		{$fecNacPersona}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Mov Persona</label>
	<div class="">
		{$movPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tel Persona</label>
	<div class="">
		{$telPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Email Persona</label>
	<div class="">
		{$emailPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fot Persona</label>
	<div class="">
		{$fotPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FecIngAdmPub Persona</label>
	<div class="">
		{$fecIngAdmPub}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Dir Persona</label>
	<div class="">
		{$dirPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">NumHijos Persona</label>
	<div class="">
		{$numHijosPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">NumHijosCobran Persona</label>
	<div class="">
		{$numHijosCobranPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">NumHijosEsp Persona</label>
	<div class="">
		{$numHijosEspPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FecFallecimiento Persona</label>
	<div class="">
		{$fecFallecimientoPersona}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdConyugue Persona</label>
	<div class="">
		{$idConyuguePersona}
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idPersona' name='idPersona' value='{$idPersona}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
