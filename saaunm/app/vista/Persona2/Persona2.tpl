{literal}
<script type="text/javascript">
validar('idPersona','IdPersona Persona2',REQUERIDO);
validar('Edo_IDEDOCIVIL','Edo_IDEDOCIVIL Persona2',REQUERIDO);
validar('IDBANCO','IDBANCO Persona2',REQUERIDO);
validar('idEdoRegistro','IdEdoRegistro Persona2',REQUERIDO);
validar('idGenero','IdGenero Persona2',REQUERIDO);
validar('idEdoCivil','IdEdoCivil Persona2',REQUERIDO);
validar('idIdioma','IdIdioma Persona2',REQUERIDO);
validar('idDistritoNac','IdDistritoNac Persona2',REQUERIDO);
validar('idDistritoDir','IdDistritoDir Persona2',REQUERIDO);
validar('idTipoDoc','IdTipoDoc Persona2',REQUERIDO);
validar('idZona','IdZona Persona2',REQUERIDO);
validar('idVia','IdVia Persona2',REQUERIDO);
validar('dniPersona','DniPersona Persona2',REQUERIDO);
validar('nom1Persona','Nom1Persona Persona2',REQUERIDO);
validar('nom2Persona','Nom2Persona Persona2',REQUERIDO);
validar('ape1Persona','Ape1Persona Persona2',REQUERIDO);
validar('ape2Persona','Ape2Persona Persona2',REQUERIDO);
validar('numDepPersona','NumDepPersona Persona2',REQUERIDO);
validar('fecNacPersona','FecNacPersona Persona2',REQUERIDO);
validar('zonaDomPersona','ZonaDomPersona Persona2',REQUERIDO);
validar('desViaDomPersona','DesViaDomPersona Persona2',REQUERIDO);
validar('numViaDomPersona','NumViaDomPersona Persona2',REQUERIDO);
validar('intDomPersona','IntDomPersona Persona2',REQUERIDO);
validar('tel1DomPersona','Tel1DomPersona Persona2',REQUERIDO);
validar('tel2DomPersona','Tel2DomPersona Persona2',REQUERIDO);
validar('refDomPersona','RefDomPersona Persona2',REQUERIDO);
validar('emaDomPersona','EmaDomPersona Persona2',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} Persona2</h4>
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
	<label class="control-label">IdPersona Persona2</label>
	<div class="">
		<input id='idPersona' name='idPersona' value='{$idPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Edo_IDEDOCIVIL Persona2</label>
	<div class="">
		<input id='Edo_IDEDOCIVIL' name='Edo_IDEDOCIVIL' value='{$Edo_IDEDOCIVIL}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IDBANCO Persona2</label>
	<div class="">
		<input id='IDBANCO' name='IDBANCO' value='{$IDBANCO}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdEdoRegistro Persona2</label>
	<div class="">
		<input id='idEdoRegistro' name='idEdoRegistro' value='{$idEdoRegistro}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdGenero Persona2</label>
	<div class="">
		<input id='idGenero' name='idGenero' value='{$idGenero}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdEdoCivil Persona2</label>
	<div class="">
		<input id='idEdoCivil' name='idEdoCivil' value='{$idEdoCivil}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdIdioma Persona2</label>
	<div class="">
		<input id='idIdioma' name='idIdioma' value='{$idIdioma}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdDistritoNac Persona2</label>
	<div class="">
		<input id='idDistritoNac' name='idDistritoNac' value='{$idDistritoNac}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdDistritoDir Persona2</label>
	<div class="">
		<input id='idDistritoDir' name='idDistritoDir' value='{$idDistritoDir}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdTipoDoc Persona2</label>
	<div class="">
		<input id='idTipoDoc' name='idTipoDoc' value='{$idTipoDoc}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdZona Persona2</label>
	<div class="">
		<input id='idZona' name='idZona' value='{$idZona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdVia Persona2</label>
	<div class="">
		<input id='idVia' name='idVia' value='{$idVia}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">DniPersona Persona2</label>
	<div class="">
		<input id='dniPersona' name='dniPersona' value='{$dniPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nom1Persona Persona2</label>
	<div class="">
		<input id='nom1Persona' name='nom1Persona' value='{$nom1Persona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nom2Persona Persona2</label>
	<div class="">
		<input id='nom2Persona' name='nom2Persona' value='{$nom2Persona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ape1Persona Persona2</label>
	<div class="">
		<input id='ape1Persona' name='ape1Persona' value='{$ape1Persona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ape2Persona Persona2</label>
	<div class="">
		<input id='ape2Persona' name='ape2Persona' value='{$ape2Persona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">NumDepPersona Persona2</label>
	<div class="">
		<input id='numDepPersona' name='numDepPersona' value='{$numDepPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FecNacPersona Persona2</label>
	<div class="">
		<div class="input-group input-group-sm">
<input id='fecNacPersona' name='fecNacPersona' class='form-control input-sm' type='date' value='{$fecNacPersona}' >
</div>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">ZonaDomPersona Persona2</label>
	<div class="">
		<input id='zonaDomPersona' name='zonaDomPersona' value='{$zonaDomPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">DesViaDomPersona Persona2</label>
	<div class="">
		<input id='desViaDomPersona' name='desViaDomPersona' value='{$desViaDomPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">NumViaDomPersona Persona2</label>
	<div class="">
		<input id='numViaDomPersona' name='numViaDomPersona' value='{$numViaDomPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IntDomPersona Persona2</label>
	<div class="">
		<input id='intDomPersona' name='intDomPersona' value='{$intDomPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tel1DomPersona Persona2</label>
	<div class="">
		<input id='tel1DomPersona' name='tel1DomPersona' value='{$tel1DomPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tel2DomPersona Persona2</label>
	<div class="">
		<input id='tel2DomPersona' name='tel2DomPersona' value='{$tel2DomPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">RefDomPersona Persona2</label>
	<div class="">
		<input id='refDomPersona' name='refDomPersona' value='{$refDomPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">EmaDomPersona Persona2</label>
	<div class="">
		<input id='emaDomPersona' name='emaDomPersona' value='{$emaDomPersona}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idPersona2' name='idPersona2' value='{$idPersona2}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
