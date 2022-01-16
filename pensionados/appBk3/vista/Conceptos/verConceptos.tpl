<div class='pagina'>
<div class="btn-group" role="group" aria-label="...">
<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde"></div>
<div class='line-title-con'>
		<h4>Consultar Conceptos</h4>
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
		{$codConceptos}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Concepto</label>
	<div class="">
		{$nomConceptos}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nombre Corto</label>
	<div class="">
		{$etiConceptos}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Monto</label>
	<div class="">
		{$mntConceptos}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fórmula</label>
	<div class="">
		{$formConceptos}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Posición</label>
	<div class="">
		{$ordConceptos}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Afecta afp</label>
	<div class="">
		{$afecta_afp}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Afecta snp</label>
	<div class="">
		{$afecta_snp}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Afecta ipss</label>
	<div class="">
		{$afecta_ipss}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Remunerado</label>
	<div class="">
		{$es_remunera}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Grupo Pensionados</label>
	<div class="">
		{$grpConceptos}	</div>
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
