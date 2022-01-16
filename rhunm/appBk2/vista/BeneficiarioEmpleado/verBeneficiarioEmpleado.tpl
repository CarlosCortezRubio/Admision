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
		<fieldset><p class='p-black'>Los campos marcados con <span class='label-red'>*</span> son obligatorios</p>
 		<div class='container-fluid'>
 			<div class="row contenidoVer" style="width:100%">
			 <div class="card">
  <div class="card-header text-primary" >
    BENEFICIARIO
  </div>
			 <div class="card-body">
			 <div class="form-row">


<div class="form-group col-lg-3">
	<label class="control-label"><span class='label-red'>*</span> Dni Beneficiario</label>
		{$dniBeneficiario}
	</div>
<div class="form-group col-lg-4">
	<label class="control-label"> Nombre  del Beneficiario </label>
	<div class="">
	{$nomBeneficiario}
		
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Apellido  Beneficiario</label>
	<div class="">
	{$apeBeneficiario}
		
	</div>
</div>
</div>
</div>
<div class="card">
  <div class="card-header text-primary" >
    EMPLEADO
  </div>
   <div class="card-body">
	<div class="form-row">


<div class="form-group col-lg-3">
	<label class="control-label"><span class='label-red'>*</span> DNI del EMPLEADO</label>
		<div class="input-group mb-2">
		{$dniEmpleado}
				
	</div>
</div>

<div class="form-group col-lg-4">
	<label class="control-label"> Nombre empleado </label>
	<div class="">
	{$nomEmpleado}	
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Apellido  Paterno</label>
	<div class="">
	{$apeEmpleado}
		
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
