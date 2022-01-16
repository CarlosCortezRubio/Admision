{literal}
<script type="text/javascript">
validar('idCurso','Curso',REQUERIDO);
validar('idEstudiante','Estudiante',REQUERIDO);
validar('notaEstCur','Calificación',REQUERIDO);
validar('inasistEstCur','Inasistencias',REQUERIDO);
validar('obsEstCur','Obsservaciones',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} Calificaciones</h4>
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
		<input id='notaEstCur' name='notaEstCur' value='{$notaEstCur}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Inasistencias</label>
	<div class="">
		<input id='inasistEstCur' name='inasistEstCur' value='{$inasistEstCur}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Obsservaciones</label>
	<div class="">
		<input id='obsEstCur' name='obsEstCur' value='{$obsEstCur}' maxlength='64' class='form-control input-sm' />
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
