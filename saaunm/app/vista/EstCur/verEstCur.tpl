<div class='pagina'>
<div class="btn-group" role="group" aria-label="...">
<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde"></div>
<div class='line-title-con'>
		<h4>Consultar Calificaciones</h4>
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
	<label class="control-label">Curso</label>
	<div class="">
		<select id='idCurso' name='idCurso' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaCurso selected=$idCurso}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Estudiante</label>
	<div class="">
		<select id='idEstudiante' name='idEstudiante' class='form-control input-sm'>
	<option value=''>-Seleccione-</option>
	{html_options options=$tablaEstudiante selected=$idEstudiante}
</select>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Calificación</label>
	<div class="">
		{$notaEstCur}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Inasistencias</label>
	<div class="">
		{$inasistEstCur}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Obsservaciones</label>
	<div class="">
		{$obsEstCur}
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idEstCur' name='idEstCur' value='{$idEstCur}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
