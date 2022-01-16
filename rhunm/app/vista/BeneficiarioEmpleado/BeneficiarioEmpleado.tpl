{literal}
<script type="text/javascript">

validar('dniBeneficiario','DNI Beneficiario',REQUERIDO);
validar('dniEmpleado','DNI Empleado',REQUERIDO);
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
			 <div class="card">
  <div class="card-header text-primary" >
    EMPLEADO
  </div>
			 <div class="card-body">
			 <div class="form-row">


<div class="form-group col-lg-3">
	<label class="control-label"><span class='label-red'>*</span> DNI del Empleado</label>
		<div class="input-group mb-2">
		<input type="hidden" id='idEmpleado'  name='idEmpleado' value='{$idEmpleado}' maxlength='64' class='form-control input-sm' />
		<input id='dniEmpleado' name='dniPersona' value='{$dniEmpleado}' maxlength='64' class='form-control input-sm' />
			<div class="input-group-append">
			<input id="btnBemp" type="button" value="Buscar" onclick="xajax_buscarEmpleado(xajax.$('dniEmpleado').value)"  class="btn btn-primary"   /> 
			
			</div>
		</div>		
	</div>
<div class="form-group col-lg-4">
	<label class="control-label">Primer Nombre  </label>
	<div class="">
	<input id='nom1Empleado' name='nom1Empleado' value='{$nomEmpleado}' maxlength='64' class='form-control input-sm' disabled />
		
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Apellido  Paterno</label>
	<div class="">
	<input id='ape1Empleado' name='ape1Persona' value='{$apeEmpleado}' maxlength='64' class='form-control input-sm' disabled />
		
	</div>
</div>
</div>
</div>
<div class="card">
  <div class="card-header text-primary" >
    BENEFICIARIO
  </div>
   <div class="card-body">
<div class="form-row">


<div class="form-group col-lg-3">
	<label class="control-label"><span class='label-red'>*</span> DNI del Beneficiario</label>
		<div class="input-group mb-2">
		<input type="hidden" id='idBeneficiario'  name='idBeneficiario' value='{$idBeneficiario}' maxlength='64' class='form-control input-sm' />
		<input id='dniBeneficiario' name='dniPersona' value='{$dniBeneficiario}' maxlength='64' class='form-control input-sm' />
				<div class="input-group-append">
			<input id="btnBemp" type="button" value="Buscar" onclick="xajax_buscarB(xajax.$('dniBeneficiario').value)"  class="btn btn-primary"   /> 
			
			</div>
		</div>		
	</div>


<div class="form-group col-lg-4">
	<label class="control-label">Primer Nombre  </label>
	<div class="">
	<input id='nom1Beneficiario' name='nom1Persona' value='{$nomBeneficiario}' maxlength='64' class='form-control input-sm' disabled />	
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Apellido  Paterno</label>
	<div class="">
	<input id='ape1Beneficiario' name='ape1Persona' value='{$apeBeneficiario}' maxlength='64' class='form-control input-sm' disabled />
		
	</div>
</div>
</div>
</div>






	</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idBeneficiarioEmpleado' name='idBeneficiarioEmpleado' value='{$idBeneficiarioEmpleado}' readonly/>
		<input type='hidden' id='estado' name='estado' value='1' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
