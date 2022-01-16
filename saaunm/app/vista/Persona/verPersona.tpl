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
	<label class="control-label">Idioma</label>
	<div class="">
		<select id='idIdioma' name='idIdioma' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaIdioma selected=$idIdioma}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Distrito Nacimiento</label>
	<div class="">
		<select id='idDistritoNac' name='idDistritoNac' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaDistrito selected=$idDistritoNac}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Distrito Direccion</label>
	<div class="">
		<select id='idDistritoDir' name='idDistritoDir' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaDistrito selected=$idDistritoDir}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tipo Documento</label>
	<div class="">
		<select id='idTipoDoc' name='idTipoDoc' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaTipoDoc selected=$idTipoDoc}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Zona</label>
	<div class="">
		<select id='idZona' name='idZona' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaZona selected=$idZona}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Via</label>
	<div class="">
		<select id='idVia' name='idVia' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaVia selected=$idVia}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Dni Persona</label>
	<div class="">
		{$dniPersona}
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
	<label class="control-label">Apellido Paterno </label>
	<div class="">
		{$ape1Persona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Apellido Materno</label>
	<div class="">
		{$ape2Persona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Número de Dependientes</label>
	<div class="">
		{$numDepPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha Nacimiento</label>
	<div class="">
		{$fecNacPersona}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Zona </label>
	<div class="">
		{$zonaDomPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Descripcion Via </label>
	<div class="">
		{$desViaDomPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Número de via</label>
	<div class="">
		{$numViaDomPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Interior </label>
	<div class="">
		{$intDomPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Teléfono </label>
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
	<label class="control-label">Refenrencia Domicilio</label>
	<div class="">
		{$refDomPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Correo Electrónico Persona</label>
	<div class="">
		{$emaDomPersona}
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
