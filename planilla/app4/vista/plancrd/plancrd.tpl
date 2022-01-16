{literal}
<script type="text/javascript">
validar('ape1PlanCrd','ape1PlanCrd',REQUERIDO);
validar('ape2PlanCrd','ape2PlanCrd',REQUERIDO);
validar('nom1PlanCrd','nom1PlanCrd',REQUERIDO);
validar('nacPlanCrd','nacPlanCrd',REQUERIDO);
validar('dniPlanCrd','dniPlanCrd',REQUERIDO);
validar('fecIngPlanCrd','fecIngPlanCrd',REQUERIDO);
validar('eraDocPlanCrd','eraDocPlanCrd',REQUERIDO);
validar('incDespPlanCrd','incDespPlanCrd',REQUERIDO);
validar('gdoAcadPlanCrd','gdoAcadPlanCrd',REQUERIDO);
validar('mencPlanCrd','mencPlanCrd',REQUERIDO);
validar('univMayGPlanCrd','univMayGPlanCrd',REQUERIDO);
validar('paisPlanCrd','paisPlanCrd',REQUERIDO);
validar('preGPlanCrd','preGPlanCrd',REQUERIDO);
validar('maePlanCrd','maePlanCrd',REQUERIDO);
validar('docPlanCrd','docPlanCrd',REQUERIDO);
validar('sedesClasesPlanCrd','sedesClasesPlanCrd',REQUERIDO);
validar('catDocPlanCrd','catDocPlanCrd',REQUERIDO);
validar('dedDocPlanCrd','dedDocPlanCrd',REQUERIDO);
validar('clasesPlanCrd','clasesPlanCrd',REQUERIDO);
validar('otrasActPlanCrd','otrasActPlanCrd',REQUERIDO);
validar('totHorSemPlanCrd','totHorSemPlanCrd',REQUERIDO);
validar('rzaInvPlanCrd','rzaInvPlanCrd',REQUERIDO);
validar('enDinaPlanCrd','enDinaPlanCrd',REQUERIDO);
validar('perAcadPlanCrd','perAcadPlanCrd',REQUERIDO);
validar('comPlanCrd','comPlanCrd',REQUERIDO);
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
	<label class="control-label">APELLIDO PATERNO</label>
	<div class="">
		<input id='ape1PlanCrd' name='ape1PlanCrd' value='{$ape1PlanCrd}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label"> APELLIDO MATERNO</label>
	<div class="">
		<input id='ape2PlanCrd' name='ape2PlanCrd' value='{$ape2PlanCrd}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">NOMBRES</label>
	<div class="">
		<input id='nom1PlanCrd' name='nom1PlanCrd' value='{$nom1PlanCrd}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">NACIONALIDAD (País )</label>
	<div class="">
		<input id='nacPlanCrd' name='nacPlanCrd' value='{$nacPlanCrd}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">TIPO DE DOCUMENTO</label>
	<div class="">
		<select id='tipoDoc' name='tipoDoc' class='form-control input-sm'>
			<option value=''>-Seleccione-</option>
			{html_options options=$tablaDni selected=$dniPlanCrd}
		</select>		
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">N° DE DNI / CARNET DE EXTRANJERÍA</label>
	<div class="">
		<input id='dniPlanCrd' name='dniPlanCrd' value='{$dniPlanCrd}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FECHA DE INGRESO COMO DOCENTE EN LA UNIVERSIDAD</label>
	<div class="">
		<input id='fecIngPlanCrd' name='fecIngPlanCrd' value='{$fecIngPlanCrd}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">¿ERA DOCENTE UNIVERSITARIO A LA ENTRADA EN VIGENCIA DE LA LEY 30220, LU?</label>
	<div class="">
		<select id='eraDocPlanCrd' name='eraDocPlanCrd' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaEraDocPlanCrd selected=$eraDocPlanCrd}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">¿EL DOCENTE FUE INCORPORADO DESPUÉS DE LA OBTENCIÓN DE LA LICENCIA DE FUNCIONAMIENTO INSTUCIONAL?</label>
	<div class="">
		<select id='incDespPlanCrd' name='incDespPlanCrd' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaIncDespPlanCrd selected=$incDespPlanCrd}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">MAYOR GRADO ACADÉMICO DEL DOCENTE</label>
	<div class="">
<!-- 		<input id='gdoAcadPlanCrd' name='gdoAcadPlanCrd' value='{$gdoAcadPlanCrd}' maxlength='64' class='form-control input-sm' /> -->
		<select id='gdoAcadPlanCrd' name='gdoAcadPlanCrd' class='form-control input-sm'>
			<option value=''>-Seleccione-</option>
			{html_options options=$tablaGrado selected=$gdoAcadPlanCrd}
		</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">MENCIÓN DEL MAYOR GRADO DOCENTE</label>
	<div class="">
		<input id='mencPlanCrd' name='mencPlanCrd' value='{$mencPlanCrd}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">UNIVERSIDAD QUE OTORGÓ EL MAYOR GRADO DOCENTE</label>
	<div class="">
		<input id='univMayGPlanCrd' name='univMayGPlanCrd' value='{$univMayGPlanCrd}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">PAÍS / UNIVERSIDAD QUE OTORGÓ EL MAYOR GRADO DEL DOCENTE</label>
	<div class="">
		<input id='paisPlanCrd' name='paisPlanCrd' value='{$paisPlanCrd}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">PREGRADO</label>
	<div class="">
		<select id='preGPlanCrd' name='preGPlanCrd' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaPreGPlanCrd selected=$preGPlanCrd}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">MAESTRÍA</label>
	<div class="">
		<select id='maePlanCrd' name='maePlanCrd' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaMaePlanCrd selected=$maePlanCrd}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">DOCTORADO</label>
	<div class="">
		<select id='docPlanCrd' name='docPlanCrd' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaDocPlanCrd selected=$docPlanCrd}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">CÓDIGO(S) DE SEDE Y  FILIAL(ES) EN LA(S) QUE DICTA CLASES</label>
	<div class="">
		<input id='sedesClasesPlanCrd' name='sedesClasesPlanCrd' value='{$sedesClasesPlanCrd}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">CATEGORÍA DOCENTE</label>
	<div class="">
<!-- 		<input id='catDocPlanCrd' name='catDocPlanCrd' value='{$catDocPlanCrd}' maxlength='64' class='form-control input-sm' /> -->
		<select id='catDocPlanCrd' name='catDocPlanCrd' class='form-control input-sm'>
			<option value=''>-Seleccione-</option>
			{html_options options=$tablaCat selected=$catDocPlanCrd}
		</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">RÉGIMEN DE DEDICACIÓN</label>
	<div class="">
<!-- 		<input id='dedDocPlanCrd' name='dedDocPlanCrd' value='{$dedDocPlanCrd}' maxlength='64' class='form-control input-sm' /> -->
		<select id='dedDocPlanCrd' name='dedDocPlanCrd' class='form-control input-sm'>
			<option value=''>-Seleccione-</option>
			{html_options options=$tablaDed selected=$dedDocPlanCrd}
		</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">CLASES</label>
	<div class="">
		<input id='clasesPlanCrd' name='clasesPlanCrd' value='{$clasesPlanCrd}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">OTRAS ACTIVIDADES</label>
	<div class="">
		<input id='otrasActPlanCrd' name='otrasActPlanCrd' value='{$otrasActPlanCrd}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">TOTAL HORAS SEMANALES</label>
	<div class="">
		<input id='totHorSemPlanCrd' name='totHorSemPlanCrd' value='{$totHorSemPlanCrd}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">DOCENTE REALIZA INVESTIGACIÓN</label>
	<div class="">
		<select id='rzaInvPlanCrd' name='rzaInvPlanCrd' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaRzaInvPlanCrd selected=$rzaInvPlanCrd}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">DOCENTE REGISTRADO EN DINA</label>
	<div class="">
		<select id='enDinaPlanCrd' name='enDinaPlanCrd' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaEnDinaPlanCrd selected=$enDinaPlanCrd}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">CODIGO ORCID</label>
	<div class="">
		<select id='enDinaPlanCrd' name='enDinaPlanCrd' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaEnDinaPlanCrd selected=$enDinaPlanCrd}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">PERIODO ACADÉMICO</label>
	<div class="">
		<input id='perAcadPlanCrd' name='perAcadPlanCrd' value='{$perAcadPlanCrd}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">MODALIDAD(PRESENCIAL / VIRTUAL)</label>
	<div class="">
		<input id='perAcadPlanCrd' name='perAcadPlanCrd' value='{$perAcadPlanCrd}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">CV ACTUALIZADO</label>
	<div class="">
<!-- 		<input id='perAcadPlanCrd' name='perAcadPlanCrd' value='{$perAcadPlanCrd}' maxlength='64' class='form-control input-sm' /> -->
		<input type="button" id='ape1PlanCrd' name='ape1PlanCrd' value='Subir CV' maxlength='64' class='form-control btn btn-success' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FOTO</label>
	<div class="">
		<input type="button" id='ape1PlanCrd' name='ape1PlanCrd' value='Subir Foto' maxlength='64' class='form-control btn btn-success' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">COMENTARIOS</label>
	<div class="">
		<textarea id='comPlanCrd' name='comPlanCrd' class='form-control input-sm'>{$comPlanCrd}</textarea>
<!-- 		<input id='comPlanCrd' name='comPlanCrd' value='{$comPlanCrd}' maxlength='64' class='form-control input-sm' /> -->
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idPlanCrd' name='idPlanCrd' value='{$idPlanCrd}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
