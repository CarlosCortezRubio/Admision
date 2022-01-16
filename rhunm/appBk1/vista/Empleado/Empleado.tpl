{literal}
<script type="text/javascript">
validar('idPersona','Persona',REQUERIDO);
validar('dniPersona','Dni',REQUERIDO);
validar('idSituacion','Situación.',REQUERIDO);
validar('idTipRegistro','Ingrese Tipo Registro',REQUERIDO);
validar('idSegSalud','Seguro Salud',REQUERIDO);
validar('idTipoPlanilla','Tipo Planilla',REQUERIDO);
validar('idCodFiscal','Código Fiscal',REQUERIDO);
validar('idAfp','idAfp',REQUERIDO);
validar('idCodRegional','Código',REQUERIDO);
validar('idUniEjecutora','Universidad Ejecutora',REQUERIDO);
validar('idNEC','NEC',REQUERIDO);
validar('idNivel','Niel',REQUERIDO);
validar('idEstablecimiento','Establecimiento',REQUERIDO);
validar('idRegLaboral','Régimen Laboral',REQUERIDO);
validar('idTipServidor','Tipo Servidor ',REQUERIDO);
validar('idNumMagist','Nivel Magisterial',REQUERIDO);
validar('idGpoRemunerativo','Grupo Remunerativo',REQUERIDO);
validar('idhatEmb','HA. T . Empleado',REQUERIDO);
validar('idCargoOrigen','Cargo Origen',REQUERIDO);
validar('idNivelOrigen','Nivel Origen',REQUERIDO);
validar('idPalMagist','Pal. Magisterial',REQUERIDO);
validar('idDirEncargo','Direct. Encargo',REQUERIDO);
validar('codModular','Código Modular',REQUERIDO);
validar('fecIngAdmPubEmpleado','Fecha ',REQUERIDO);
validar('fecIngMedEmpleado','fecIngMedEmpleado',REQUERIDO);
validar('fecCeseEmpleado','fecCeseEmpleado',REQUERIDO);
validar('infCompEmpleado','infCompEmpleado',REQUERIDO);
validar('fecHabEmpleado','fecHabEmpleado',REQUERIDO);
validar('fecDesEmpleado','fecDesEmpleado',REQUERIDO);
validar('fecFallEmpleado','Fecha de Fallecimiento',REQUERIDO);
validar('valPorEmpleado','valPorEmpleado',REQUERIDO);
validar('fecValEmpleado','fecValEmpleado',REQUERIDO);
validar('docRefEmpleado','Documento de Referencia',REQUERIDO);
validar('numSegSaludEmpleado','Número de Seguro de Salud',REQUERIDO);
validar('eVidaEmpleado','E. Vida',REQUERIDO);
validar('CUSPPEmpleado','CUSPP',REQUERIDO);
validar('fecAfiPenEmpleado','Fecha de Afilacion Pen.',REQUERIDO);
validar('fecDevPenEmpleado','Fecha Vencimiento Afi.',REQUERIDO);
validar('plazaEmpleado','Plaza',REQUERIDO);
validar('tipPlazaEmpleado','Tipo Plaza',REQUERIDO);
validar('asigInserEmpleado','asigInserEmpleado',REQUERIDO);
validar('diasTrabEmpleado','Días Trabajados',REQUERIDO);
validar('numDepEmpleado','Número de Dependientes',REQUERIDO);
validar('numDecEmpleado','Número de Dependientes',REQUERIDO);
validar('licDiasEmpleado','Licencia en Dias',REQUERIDO);
validar('tipServEmpleado','Tipo de Servicio',REQUERIDO);
validar('fecIniLicEmpleado','Fecha Inicial de Licencia',REQUERIDO);
validar('insasitEmpleado','Inasistencias',REQUERIDO);
validar('permisosEmpleado','Permisos',REQUERIDO);
validar('huelgasEmpleado','Huelgas',REQUERIDO);
validar('leyMenEmpleado','Leyenda Mensual',REQUERIDO);
validar('leyPerEmpleado','Leyenda Permanente',REQUERIDO);
validar('cadPresupEmpleado','Cadena Presupuestal',REQUERIDO);
validar('ctaEmpleado','Cuenta',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} </h4>
		</div>
		<nav>
		<div class="nav nav-tabs" id="nav-tab" role="tablist">
			 <a class="nav-item nav-link active" id="nav-secone-tab" data-toggle="tab" href="#nav-sec-one" role="tab" aria-controls="nav-home" aria-selected="true">Seccion 1</a>
   			<a class="nav-item nav-link" id="nav-sectwo-tab" data-toggle="tab" href="#nav-sec-two" role="tab" aria-controls="nav-profile" aria-selected="false">Seccion 2</a>
			<a class="nav-item nav-link" id="nav-secthree-tab" data-toggle="tab" href="#nav-sec-three" role="tab" aria-controls="nav-contact" aria-selected="false">Seccion 3</a>
			<a class="nav-item nav-link" id="nav-secfour-tab" data-toggle="tab" href="#nav-sec-four" role="tab" aria-controls="nav-contactt" aria-selected="false">Seccion 4</a>
 
		</div>
		</nav>
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

			<div class="tab-content" id="nav-tabContent" style="width: 100%">
 		<div class="tab-pane fade show active" id="nav-sec-one" role="tabpanel" aria-labelledby="nav-secone-tab">
			
		<div class="form-row" >		
			<div class="form-group col-lg-3">
		<label class="control-label">Código Modular</label>
		<div class="">
			<input id='codModular' name='codModular' value='{$codModular}' maxlength='64' class='form-control input-sm' readonly/>
		</div>
	</div>

	<div class="form-group col-lg-3">
			<label class="control-label"><span class='label-red'>*</span> DNI de Persona</label>
			<div class="input-group mb-3">
					<input type="hidden" id='idPersona'  name='idPersona' value='{$idPersona}' maxlength='64' class='form-control input-sm' />
					<input id='dniPersona' name='dniPersona' value='{$dniPersona}' maxlength='64' class='form-control input-sm' />
				<!-- 	<input {if $idPersona != ''}disabled value='No se puede Editar' {/if}id='dniPersona' name='dniPersona' value='{$dniPersona}' maxlength='64' class='form-control input-sm' /> -->
						<div class="input-group-append">
						<input value="Buscar" onclick="xajax_buscarPersona(xajax.$('dniPersona').value)"  class="btn btn-primary" type="button"   >
						</div>
			</div>		
	</div>

		<div class="form-group col-lg-3">
		<label class="control-label">Primer Nombre</label>
		<div class="">
		
		<input id='nom1Persona' name='nom1Persona' value='{$nom1Persona}' maxlength='64' class='form-control input-sm' disabled />

		</div>
				</div>

			<div class="form-group col-lg-3">
			<label class="control-label">Apellido Paterno</label>
			<div class="">
			<input id='ape1Persona' name='ape1Persona' value='{$ape1Persona}' maxlength='64' class='form-control input-sm' disabled />
				
			</div>
		</div>
		
		<div class="form-group col-lg-2">
	<label class="control-label" type="hidden"></label>
	<div class="">
		
	<!--	<input type='hidden' id="addPersona" value="Agregar Persona" class="btn btn-primary mr-1" type="button" border='0px' align='top'   > -->
	
	</div>
	</div>
	{literal}
	<script>
	jQuery('#addPersona').on('click',function(){
	//jQuery('.modal-body').load('{/literal}{$URLSIST}app/cont/Persona/addPersona{literal}',function(){
	jQuery('.modal-body').load('{/literal}{$URLSIST}base/Persona/addPersona{literal}',function(){
			jQuery('#tituloModal').html('Agrear Persona');
			jQuery('#modalEmergentes').modal({show:true});
		});
	});
	</script>
	{/literal}


		

		</div>

<div class="form-row">
		<div class="form-group col-lg-3">
			<label class="control-label">Situacion Empleado</label>
			<div class="">
					<select id='idSituacion' name='idSituacion' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaSituacion selected=$idSituacion}
					</select>
			</div>
		</div>
		<div class="form-group col-lg-3">
			<label class="control-label">Tipo Registro </label>
			<div class="">
					<select id='idTipRegistro' name='idTipRegistro' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaTipRegistro selected=$idTipRegistro}
					</select>
			</div>
		</div>

		<div class="form-group col-lg-3">
			<label class="control-label">Seguro de Salud </label>
			<div class="">
			<select id='idSegSalud' name='idSegSalud' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaSegSalud selected=$idSegSalud}
					</select>
			</div>
		</div>

		

		<div class="form-group col-lg-3">
			<label class="control-label">Tipo Planilla </label>
			<div class="">
				<select id='idTipoPlanilla' name='idTipoPlanilla' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaTipoPlanilla selected=$idTipoPlanilla}
					</select>
			</div>
		</div>

		</div>

		<div class ="form-row">
		<div class="form-group col-lg-4">
			<label class="control-label">Código Fiscal</label>
			<div class="">
			<select id='idCodFiscal' name='idCodFiscal' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaCodFiscal selected=$idCodFiscal}
					</select>
			</div>
		</div>

		<div class="form-group col-lg-4">
			<label class="control-label">Seleccionar Afp</label>
			<div class="">
			<select id='idAfp' name='idAfp' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaAfp selected=$idAfp}
					</select>
			</div>
		</div>

		<div class="form-group col-lg-4">
			<label class="control-label">Código Regional</label>
			<div class="">
			<select id='idCodRegional' name='idCodRegional' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaCodRegional selected=$idCodRegional}
					</select>
			</div>
		</div>

		</div>

		<div class="form-row">

		<div class="form-group col-lg-4">
			<label class="control-label">Universidad Ejecutora </label>
			<div class="">
			<select id='idUniEjecutora' name='idUniEjecutora' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaUniEjecutora selected=$idUniEjecutora}
					</select>
			</div>
		</div>

		<div class="form-group col-lg-4">
			<label class="control-label">NEC </label>
			<div class="">
			<select id='idNEC' name='idNEC' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaNEC selected=$idNEC}
					</select>
			</div>
		</div>


		<div class="form-group col-lg-4">
			<label class="control-label">Nivel </label>
			<div class="">
			<select id='idNivel' name='idNivel' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaNivel selected=$idNivel}
					</select>
			</div>
		</div>

		</div>


		<div class="form-row">

		<div class="form-group col-lg-4">
			<label class="control-label">Establecimiento</label>
			<div class="">
			<select id='idEstablecimiento' name='idEstablecimiento' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaEstablecimiento selected=$idEstablecimiento}
					</select>
		</div>
		</div>

		<div class="form-group col-lg-4">
			<label class="control-label">Régimen Laboral </label>
			<div class="">
			<select id='idRegLaboral' name='idRegLaboral' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaRegLaboral selected=$idRegLaboral}
					</select>
				</div>
		</div>

		<div class="form-group col-lg-4">
			<label class="control-label">Tipo de Servidor </label>
			<div class="">
			<select id='idTipServidor' name='idTipServidor' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaTipServidor selected=$idTipServidor}
					</select>
			</div>
		</div>

</div>

<div class="form-row">

		<div class="form-group col-lg-4">
			<label class="control-label">Nivel Magisterial </label>
			<div class="">
			<select id='idNumMagist' name='idNumMagist' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaNumMagist selected=$idNumMagist}
					</select>
			</div>
		</div>

		<div class="form-group col-lg-4">
			<label class="control-label">Grupo Remunerativo </label>
			<div class="">
			<select id='idGpoRemunerativo' name='idGpoRemunerativo' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaGpoRemunerativo selected=$idGpoRemunerativo}
					</select>
			</div>
		</div>


		<div class="form-group col-lg-4">
			<label class="control-label">HA. T. Empleado</label>
			<div class="">
			<select id='idhatEmb' name='idhatEmb' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaHatEmb selected=$idhatEmb}
					</select>
			</div>
		</div>

	</div>


			<div class="form-row">
		<div class="form-group col-lg-4">
			<label class="control-label">Cargo de Origen</label>
			<div class="">
			<select id='idCargoOrigen' name='idCargoOrigen' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaCargoOrigen selected=$idCargoOrigen}
					</select>
			</div>
		</div>


		<div class="form-group col-lg-4">
			<label class="control-label">Nivel de Origen </label>
			<div class="">
			<select id='idNivelOrigen' name='idNivelOrigen' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaNivelOrigen selected=$idNivelOrigen}
					</select>
			</div>
		</div>


		<div class="form-group col-lg-4">
			<label class="control-label">Pal. Magisterial</label>
			<div class="">
			<select id='idPalMagist' name='idPalMagist' class='form-control input-sm'>
						<option value=''>-Seleccione-</option>
						{html_options options=$tablaPalMagist selected=$idPalMagist}
					</select>
			</div>
		</div>
		</div>

			

</div>
<div class="tab-pane fade" id="nav-sec-two" role="tabpanel" aria-labelledby="nav-sectwo-tab">
					
	<div class="form-row">
	<div class="form-group col-lg-4">
				<label class="control-label">Direct. Encargo </label>
				<div class="">
				<select id='idDirEncargo' name='idDirEncargo' class='form-control input-sm'>
							<option value=''>-Seleccione-</option>
							{html_options options=$tablaDirEncargo selected=$idDirEncargo}
						</select>

			</div>
			</div>


<div class="form-group col-lg-4">
	<label class="control-label">fecIngAdmPubEmpleado  </label>
	<div class="">
		<div class="input-group input-group-sm">
		<input id='fecIngAdmPubEmpleado' name='fecIngAdmPubEmpleado' class='form-control input-sm' type='date' value='{$fecIngAdmPubEmpleado}'   >

		</div>
	</div>
</div>

</div>

<div class="form-row">

<div class="form-group col-lg-4">
	<label class="control-label">FecIngMed Empleado</label>
	<div class="">
		<div class="input-group input-group-sm">
		<input id='fecIngMedEmpleado' name='fecIngMedEmpleado' class='form-control input-sm' type='date' value='{$fecIngMedEmpleado}' >

	</div>
	</div>
</div>


<div class="form-group col-lg-4">
	<label class="control-label">Fecha de Cese </label>
	<div class="">
		<div class="input-group input-group-sm">
<input id='fecCeseEmpleado' name='fecCeseEmpleado' class='form-control input-sm' type='date' value='{$fecCeseEmpleado}' >

</div>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">InfComp Empleado</label>
	<div class="">
		<input id='infCompEmpleado' name='infCompEmpleado' value='{$infCompEmpleado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>

</div>

<div class="form-row">

<div class="form-group col-lg-4">
	<label class="control-label">FecHab Empleado</label>
	<div class="">
		<div class="input-group input-group-sm">
		<input id='fecHabEmpleado' name='fecHabEmpleado' class='form-control input-sm' type='date' value='{$fecHabEmpleado}' maxlength='10' >

		</div>

	</div>

</div>

<div class="form-group col-lg-4">
	<label class="control-label">Fecha de Des. Empleado</label>
	<div class="">
		<div class="input-group input-group-sm">
<input id='fecDesEmpleado' name='fecDesEmpleado' class='form-control input-sm' type='date' value='{$fecDesEmpleado}' >

</div>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha de Fallecimiento </label>
	<div class="">
		<div class="input-group input-group-sm">
	<input id='fecFallEmpleado' name='fecFallEmpleado' class='form-control input-sm' type='date' value='{$fecFallEmpleado}' >

	</div>
	</div>
</div>


</div>

<div class="form-row">

<div class="form-group col-lg-4">
	<label class="control-label">ValPor Empleado</label>
	<div class="">
		<input id='valPorEmpleado' type='number' name='valPorEmpleado' value='{$valPorEmpleado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>

<div class="form-group col-lg-4">
	<label class="control-label">FecVal Empleado</label>
	<div class="">
		<div class="input-group input-group-sm">
<input id='fecValEmpleado' name='fecValEmpleado' class='form-control input-sm' type='date' value='{$fecValEmpleado}' >

</div>
	</div>
</div>

<div class="form-group col-lg-4">
	<label class="control-label">Documento de Referencia</label>
	<div class="">
		<input id='docRefEmpleado' name='docRefEmpleado' value='{$docRefEmpleado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>

</div>


<div class="form-row">

<div class="form-group col-lg-4">
	<label class="control-label">Número de Seguro de Salud </label>
	<div class="">
		<input id='numSegSaludEmpleado' name='numSegSaludEmpleado' value='{$numSegSaludEmpleado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>

<div class="form-group col-lg-4">
	<label class="control-label">E.Vida</label>
	<div class="">
		<input id='eVidaEmpleado' name='eVidaEmpleado' value='{$eVidaEmpleado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>

<div class="form-group col-lg-4">
	<label class="control-label">CUSPP</label>
	<div class="">
		<input id='CUSPPEmpleado' name='CUSPPEmpleado' value='{$CUSPPEmpleado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>

</div>
</div>


 <div class="tab-pane fade" id="nav-sec-three" role="tabpanel" aria-labelledby="nav-secthree-tab">
			
  <div class="form-row">

<div class="form-group col-lg-4">
	<label class="control-label">Fecha de Afilación Pen. </label>
	<div class="">
		<div class="input-group input-group-sm">
<input id='fecAfiPenEmpleado' name='fecAfiPenEmpleado' class='form-control input-sm' type='date' value='{$fecAfiPenEmpleado}' >

</div>

</div>
</div>

<div class="form-group col-lg-4">
	<label class="control-label">Fecha de Vencimiento Afi. </label>
	<div class="">
		<div class="input-group input-group-sm">
		<input id='fecDevPenEmpleado' name='fecDevPenEmpleado' class='form-control input-sm' type='date' value='{$fecDevPenEmpleado}' >

	</div>
	</div>
</div>

<div class="form-group col-lg-4">
	<label class="control-label">Plaza </label>
	<div class="">
		<input id='plazaEmpleado' name='plazaEmpleado' value='{$plazaEmpleado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>

</div>
<div class="form-row">

<div class="form-group col-lg-4">
	<label class="control-label">Tipo de plaza</label>
	<div class="">
		<input id='tipPlazaEmpleado' name='tipPlazaEmpleado' value='{$tipPlazaEmpleado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">AsigInser Empleado</label>
	<div class="">
		<input id='asigInserEmpleado' type='number' name='asigInserEmpleado' value='{$asigInserEmpleado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Dias Trabajados </label>
	<div class="">
		<input id='diasTrabEmpleado' type = 'number' name='diasTrabEmpleado' value='{$diasTrabEmpleado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>

</div>

<div class="form-row">
<div class="form-group col-lg-4">
	<label class="control-label">Número de Dependientes </label>
	<div class="">
		<input id='numDepEmpleado' type='number' name='numDepEmpleado' value='{$numDepEmpleado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Número de Decimas </label>
	<div class="">
		<input id='numDecEmpleado' type='number' name='numDecEmpleado' value='{$numDecEmpleado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Licencia en Dias</label>
	<div class="">
		<input id='licDiasEmpleado' type='number' name='licDiasEmpleado' value='{$licDiasEmpleado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>

</div>

<div class="form-row">

<div class="form-group col-lg-4">
	<label class="control-label">Tipo Servicio </label>
	<div class="">
		<input id='tipServEmpleado' type='number' name='tipServEmpleado' value='{$tipServEmpleado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha Inicial de Licencia </label>
	<div class="">
		<div class="input-group input-group-sm">
<input id='fecIniLicEmpleado' name='fecIniLicEmpleado' class='form-control input-sm' type='date' value='{$fecIniLicEmpleado}' >

</div>
	</div>
</div>


<div class="form-group col-lg-4">
	<label class="control-label">Inasistencias </label>
	<div class="">
		<input id='insasitEmpleado' name='insasitEmpleado' value='{$insasitEmpleado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>

</div>
<div class="form-row">

<div class="form-group col-lg-4">
	<label class="control-label">Permisos </label>
	<div class="">
		<input id='permisosEmpleado' name='permisosEmpleado' value='{$permisosEmpleado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>


<div class="form-group col-lg-4">
	<label class="control-label">Huelgas Empleado</label>
	<div class="">
		<input id='huelgasEmpleado' type='number' name='huelgasEmpleado' value='{$huelgasEmpleado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
</div>
</div>

<div class="tab-pane fade" id="nav-sec-four" role="tabpanel" aria-labelledby="nav-secfour-tab">

<div class="form-row">
<div class="form-group col-lg-4">
	<label class="control-label">Leyenda Mensual</label>
	<div class="">
		<input id='leyMenEmpleado' name='leyMenEmpleado' value='{$leyMenEmpleado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>


<div class="form-group col-lg-4">
	<label class="control-label">Leyenda Permanente</label>
	<div class="">
		<input id='leyPerEmpleado' name='leyPerEmpleado' value='{$leyPerEmpleado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Cadena Presupuestal</label>
	<div class="">
		<input id='cadPresupEmpleado' name='cadPresupEmpleado' value='{$cadPresupEmpleado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
</div>
<div class="form-row">

	<div class="form-group col-lg-12">
		<label class="control-label">Cuenta </label>
		<div class="">
			<input id='ctaEmpleado' name='ctaEmpleado' value='{$ctaEmpleado}' maxlength='64' class='form-control input-sm' />
		</div>
	</div>
</div>
</div>
		</div>
</div>
</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idEmpleado' name='idEmpleado' value='{$idEmpleado}' readonly/>
		<input type='hidden' id='idEmpleado' name='idEmpleado' value='{$idEmpleado}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>
		<input type='hidden' id='preG' name='preG' value='1' readonly/>

	</form>
</div>
{literal}
<script>
var a=document.getElementById('idEmpleado').value;

function preG(valor){
	jQuery('#preG').val(valor);
	
	}

</script>
<style>
.nav-link {
    display: block;
    padding: 0.4rem 1rem;
}
</style>
{/literal}