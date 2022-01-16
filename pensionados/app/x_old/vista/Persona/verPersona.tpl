<div class='pagina'>
<div class="btn-group" role="group" aria-label="...">
<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde"></div>
<div class='line-title-con'>
		<h4>Consultar Persona</h4>
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
 		<div class='container-fluid'>
 			<div class="row contenidoVer" style="width:100%">
<div class="form-group col-lg-4">
	<label class="control-label">Género</label>
	<div class="">
		<select id='idGenero' name='idGenero' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaGenero selected=$idGenero}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Estado Civil</label>
	<div class="">
		<select id='idEdoCivil' name='idEdoCivil' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaEdoCivil selected=$idEdoCivil}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Banco</label>
	<div class="">
		<select id='idBanco' name='idBanco' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaBanco selected=$idBanco}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tipo</label>
	<div class="">
		<select id='idTipoPersona' name='idTipoPersona' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaTipoPersona selected=$idTipoPersona}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Estado</label>
	<div class="">
		<select id='idEdoRegistro' name='idEdoRegistro' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaEdoRegistro selected=$idEdoRegistro}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tipo Documento</label>
	<div class="">
		{$tipDocPersona}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Documento</label>
	<div class="">
		{$docPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Primer Nombre</label>
	<div class="">
		{$nom1Persona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Segundo Nombre</label>
	<div class="">
		{$nom2Persona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Primer Apellido</label>
	<div class="">
		{$ape1Persona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Segundo Apellido</label>
	<div class="">
		{$ape2Persona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha de Nacimiento</label>
	<div class="">
		{$fecNacPersona}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Teléfono</label>
	<div class="">
		{$tel1DomPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Otro Teléfono</label>
	<div class="">
		{$tel2DomPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Correo Electrónico</label>
	<div class="">
		{$emaDomPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Código Modular</label>
	<div class="">
		{$codModularPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Planilla</label>
	<div class="">
		{$planillaPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tipo de Registro</label>
	<div class="">
		{$tipRegPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Resolución</label>
	<div class="">
		{$resPenDefPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha Resolución</label>
	<div class="">
		{$fecRes}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Cuenta</label>
	<div class="">
		{$ctaBancoPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fuente de Financiamiento</label>
	<div class="">
		{$fntFinancPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Planilla2</label>
	<div class="">
		{$planilla2Persona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Beneficiario</label>
	<div class="">
		{$idBenefactorPersona}
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
