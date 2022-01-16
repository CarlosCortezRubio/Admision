{literal}
<script type="text/javascript">
validar('idTipoConcepto','Tipo Concepto',REQUERIDO);
validar('idEdoRegistro','Estado',REQUERIDO);
validar('codConceptos','Código',REQUERIDO);
validar('nomConceptos','Concepto',REQUERIDO);
validar('etiConceptos','Nombre Corto',REQUERIDO);
//validar('mntConceptos','Monto',REQUERIDO);
//validar('formConceptos','Fórmula',REQUERIDO);
//validar('ordConceptos','Posición',REQUERIDO);
validar('afecta_afp','Afecta afp',REQUERIDO);
validar('afecta_snp','Afecta snp',REQUERIDO);
validar('afecta_ipss','Afecta ipss',REQUERIDO);
validar('es_remunera','Remunerado',REQUERIDO);
validar('grpConceptos','Grupo Pensionados',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} Conceptos</h4>
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
	<label class="control-label">Tipo Concepto</label>
	<div class="">
		<select id='idTipoConcepto' name='idTipoConcepto' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaTipoConcepto selected=$idTipoConcepto}
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
	<label class="control-label">Código</label>
	<div class="">
		<input id='codConceptos' name='codConceptos' value='{$codConceptos}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Concepto</label>
	<div class="">
		<input id='nomConceptos' name='nomConceptos' value='{$nomConceptos}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nombre Corto</label>
	<div class="">
		<input id='etiConceptos' name='etiConceptos' value='{$etiConceptos}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Monto</label>
	<div class="">
		<input id='mntConceptos' name='mntConceptos' value='{$mntConceptos}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fórmula</label>
	<div class="">
		<input id='formConceptos' name='formConceptos' value='{$formConceptos}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Posición</label>
	<div class="">
		<input id='ordConceptos' name='ordConceptos' value='{$ordConceptos}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Afecta afp</label>
	<div class="">
		<input id='afecta_afp' name='afecta_afp' value='{$afecta_afp}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Afecta snp</label>
	<div class="">
		<input id='afecta_snp' name='afecta_snp' value='{$afecta_snp}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Afecta ipss</label>
	<div class="">
		<input id='afecta_ipss' name='afecta_ipss' value='{$afecta_ipss}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Remunerado</label>
	<div class="">
		<input id='es_remunera' name='es_remunera' value='{$es_remunera}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Grupo Pensionados</label>
	<div class="">
		<select id='grpConceptos' name='grpConceptos' class='form-control input-sm'>
			<option value=''>-Seleccione-</option>
			{html_options options=$tablaGrpConceptos selected=$grpConceptos}
		</select>
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idConceptos' name='idConceptos' value='{$idConceptos}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
