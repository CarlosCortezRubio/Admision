<div class='pagina'>
<div class="btn-group" role="group" aria-label="...">
<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde"></div>
<div class='line-title-con'>
		
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
	<label class="control-label">ID </label>
	<div class="">
		{$idPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Situación</label>
	<div class="">
		{$idSituacion}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tipo de Registro</label>
	<div class="">
		{$idTipRegistro}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Seguro de Salud</label>
	<div class="">
		{$idSegSalud}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tipo Planilla</label>
	<div class="">
		{$idTipoPlanilla}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Codigo Fiscal</label>
	<div class="">
		{$idCodFiscal}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Afp </label>
	<div class="">
		{$idAfp}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Codigo Regional </label>
	<div class="">
		{$idCodRegional}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Universidad Ejecutora </label>
	<div class="">
		{$idUniEjecutora}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">NEC</label>
	<div class="">
		{$idNEC}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nivel</label>
	<div class="">
		{$idNivel}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Establecimiento</label>
	<div class="">
		{$idEstablecimiento}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Regimen Laboral</label>
	<div class="">
		{$idRegLaboral}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdTipServidor Empleado</label>
	<div class="">
		{$idTipServidor}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Numero Magisterial</label>
	<div class="">
		{$idNumMagist}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Grupo Remunerativo</label>
	<div class="">
		{$idGpoRemunerativo}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">HAT </label>
	<div class="">
		{$idhatEmb}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Cargo Origen</label>
	<div class="">
		{$idCargoOrigen}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nivel Origen</label>
	<div class="">
		{$idNivelOrigen}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Pal.Magisterial </label>
	<div class="">
		{$idPalMagist}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Dir. Encaro</label>
	<div class="">
		{$idDirEncargo}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Codigo Modular</label>
	<div class="">
		{$codModular}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha Ingreso</label>
	<div class="">
		{$fecIngAdmPubEmpleado}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha Ing.Med </label>
	<div class="">
		{$fecIngMedEmpleado}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha Cese</label>
	<div class="">
		{$fecCeseEmpleado}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Inf. Comp </label>
	<div class="">
		{$infCompEmpleado}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha Hab. </label>
	<div class="">
		{$fecHabEmpleado}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha Deceso </label>
	<div class="">
		{$fecDesEmpleado}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha Fallecimiento </label>
	<div class="">
		{$fecFallEmpleado}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Val Por </label>
	<div class="">
		{$valPorEmpleado}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FecVal Empleado</label>
	<div class="">
		{$fecValEmpleado}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Documento de Referencia</label>
	<div class="">
		{$docRefEmpleado}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Número de Seguro de Salud</label>
	<div class="">
		{$numSegSaludEmpleado}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">EVida Empleado</label>
	<div class="">
		{$eVidaEmpleado}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">CUSPP Empleado</label>
	<div class="">
		{$CUSPPEmpleado}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha Afiliación Pensionista</label>
	<div class="">
		{$fecAfiPenEmpleado}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha dev Pen.</label>
	<div class="">
		{$fecDevPenEmpleado}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Plaza </label>
	<div class="">
		{$plazaEmpleado}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tipo Plaza</label>
	<div class="">
		{$tipPlazaEmpleado}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">AsigInser Empleado</label>
	<div class="">
		{$asigInserEmpleado}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Dias Trabajados</label>
	<div class="">
		{$diasTrabEmpleado}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Número de Dependientes</label>
	<div class="">
		{$numDepEmpleado}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Número de decimas</label>
	<div class="">
		{$numDecEmpleado}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Licencia En Días</label>
	<div class="">
		{$licDiasEmpleado}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tipo de Servicio</label>
	<div class="">
		{$tipServEmpleado}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha Inicial de Licencia</label>
	<div class="">
		{$fecIniLicEmpleado}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Inasistencias</label>
	<div class="">
		{$insasitEmpleado}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Permisos</label>
	<div class="">
		{$permisosEmpleado}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Huelgas </label>
	<div class="">
		{$huelgasEmpleado}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Leyenda Mensual </label>
	<div class="">
		{$leyMenEmpleado}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Leyenda Permanente</label>
	<div class="">
		{$leyPerEmpleado}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Cadena Presupuestal</label>
	<div class="">
		{$cadPresupEmpleado}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Cta Empleado</label>
	<div class="">
		{$ctaEmpleado}
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idEmpleado' name='idEmpleado' value='{$idEmpleado}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
