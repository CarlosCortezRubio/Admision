<div class='pagina'>
<div class="btn-group" role="group" aria-label="...">
<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde"></div>
<div class='line-title-con'>
		<h4>Consultar Programa de Estudio</h4>
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
	<label class="control-label">Docente</label>
	<div class="">
		<select id='idEmpleado' name='idEmpleado' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaEmpleado selected=$idEmpleado}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Código</label>
	<div class="">
		{$codProgEstudio}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nombre</label>
	<div class="">
		{$nomProgEstudio}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">N° Res. autorización</label>
	<div class="">
		{$numResProgEstudio}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha Res. autorización</label>
	<div class="">
		{$fecResProgEstudio}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Aplica Preinscripción</label>
	<div class="">
		{$aplPreinscProgEstudio}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Aplica Grupo</label>
	<div class="">
		{$aplGrupoProgEstudio}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">N° Res. Revalidación</label>
	<div class="">
		{$numResRevProgEstudio}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Fecha Res. Revalidación</label>
	<div class="">
		{$fecResRevProgEstudio}	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idProgEstudio' name='idProgEstudio' value='{$idProgEstudio}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
