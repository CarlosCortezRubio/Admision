{literal}
<script type="text/javascript">
validar('idGenero','Género',REQUERIDO);
validar('idEdoCivil','Estado Civil',REQUERIDO);
validar('idBanco','Banco',REQUERIDO);
validar('idTipoPersona','Tipo',REQUERIDO);
validar('idEdoRegistro','Estado',REQUERIDO);
validar('tipDocPersona','Tipo Documento',REQUERIDO);
validar('docPersona','Documento',REQUERIDO);
validar('nom1Persona','Primer Nombre',REQUERIDO);
validar('nom2Persona','Segundo Nombre',REQUERIDO);
validar('ape1Persona','Primer Apellido',REQUERIDO);
validar('ape2Persona','Segundo Apellido',REQUERIDO);
validar('fecNacPersona','Fecha de Nacimiento',REQUERIDO);
validar('tel1DomPersona','Teléfono',REQUERIDO);
//validar('tel2DomPersona','Otro Teléfono',REQUERIDO);
validar('emaDomPersona','Correo Electrónico',REQUERIDO);
validar('codModularPersona','Código Modular',REQUERIDO);
//validar('planillaPersona','Planilla',REQUERIDO);
//validar('tipRegPersona','Tipo de Registro',REQUERIDO);
validar('resPenDefPersona','Resolución',REQUERIDO);
validar('fecRes','Fecha Resolución',REQUERIDO);
validar('ctaBancoPersona','Cuenta',REQUERIDO);
validar('fntFinancPersona','Fuente de Financiamiento',REQUERIDO);
validar('planilla2Persona','Planilla2',REQUERIDO);
//validar('idBenefactorPersona','Beneficiario',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} Persona</h4>
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
<div class="form-group col-lg-3">
	<label class="control-label">Tipo de Persona</label>
	<div class="">
		<select id='idTipoPersona' name='idTipoPersona' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaTipoPersona selected=$idTipoPersona}
</select>
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">Tipo Documento</label>
	<div class="">
		<select id='tipDocPersona' name='tipDocPersona' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaTipDocPersona selected=$tipDocPersona}
</select>
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">Documento</label>
	<div class="">
		<input id='docPersona' name='docPersona' value='{$docPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">Primer Nombre</label>
	<div class="">
		<input id='nom1Persona' name='nom1Persona' value='{$nom1Persona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">Estado de la Persona</label>
	<div class="">
		<select id='idEdoRegistro' name='idEdoRegistro' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaEdoRegistro selected=$idEdoRegistro}
</select>
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">Segundo Nombre</label>
	<div class="">
		<input id='nom2Persona' name='nom2Persona' value='{$nom2Persona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">Primer Apellido</label>
	<div class="">
		<input id='ape1Persona' name='ape1Persona' value='{$ape1Persona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">Segundo Apellido</label>
	<div class="">
		<input id='ape2Persona' name='ape2Persona' value='{$ape2Persona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">Fecha de Nacimiento</label>
	<div class="">
		<div class="input-group input-group-sm">
			<input id='fecNacPersona' name='fecNacPersona' class='form-control input-sm' type='date' value='{$fecNacPersona}' >
	</div>
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">Género</label>
	<div class="">
		<select id='idGenero' name='idGenero' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaGenero selected=$idGenero}
</select>
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">Estado Civil</label>
	<div class="">
		<select id='idEdoCivil' name='idEdoCivil' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaEdoCivil selected=$idEdoCivil}
</select>
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">Teléfono</label>
	<div class="">
		<input id='tel1DomPersona' name='tel1DomPersona' value='{$tel1DomPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">Otro Teléfono</label>
	<div class="">
		<input id='tel2DomPersona' name='tel2DomPersona' value='{$tel2DomPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">Correo Electrónico</label>
	<div class="">
		<input id='emaDomPersona' name='emaDomPersona' value='{$emaDomPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">Código Modular</label>
	<div class="">
		<input id='codModularPersona' name='codModularPersona' value='{$codModularPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<!--
<div class="form-group col-lg-3">
	<label class="control-label">Planilla</label>
	<div class="">
		<input id='planillaPersona' name='planillaPersona' value='{$planillaPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">Tipo de Registro</label>
	<div class="">
		<input id='tipRegPersona' name='tipRegPersona' value='{$tipRegPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
-->
<div class="form-group col-lg-3">
	<label class="control-label">Resolución</label>
	<div class="">
		<input id='resPenDefPersona' name='resPenDefPersona' value='{$resPenDefPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">Fecha Resolución</label>
	<div class="">
		<div class="input-group input-group-sm">
			<input id='fecRes' name='fecRes' class='form-control input-sm' type='date' value='{$fecRes}' >
		</div>
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">Fuente de Financiamiento</label>
	<div class="">
		<input id='fntFinancPersona' name='fntFinancPersona' value='{$fntFinancPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">Planilla2</label>
	<div class="">
		<input id='planilla2Persona' name='planilla2Persona' value='{$planilla2Persona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">Beneficiario</label>
	<div class="">
		<input id='idBenefactorPersona' name='idBenefactorPersona' value='{$idBenefactorPersona}' maxlength='64' class='form-control input-sm' readonly/>
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">Banco</label>
	<div class="">
		<select id='idBanco' name='idBanco' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaBanco selected=$idBanco}
</select>
	</div>
</div>
<div class="form-group col-lg-3">
	<label class="control-label">N° de Cuenta</label>
	<div class="">
		<input id='ctaBancoPersona' name='ctaBancoPersona' value='{$ctaBancoPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idPersona' name='idPersona' value='{$idPersona}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

		<input type='hidden' id='planillaPersona' name='planillaPersona' value='{$planillaPersona}' maxlength='64' class='form-control input-sm' />
		<input type='hidden' id='tipRegPersona' name='tipRegPersona' value='{$tipRegPersona}' maxlength='64' class='form-control input-sm' />		

	</form>
</div>
