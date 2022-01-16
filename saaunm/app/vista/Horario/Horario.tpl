{literal}
<script type="text/javascript">
validar('idDia','IdDia Horario',REQUERIDO);
validar('idAula','IdAula Horario',REQUERIDO);
validar('idCurso','IdCurso Horario',REQUERIDO);
validar('horIniHorario','HorIni Horario',REQUERIDO);
validar('horFinHorario','HorFin Horario',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} Horario</h4>
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
	<label class="control-label">IdDia Horario</label>
	<div class="">
		<input id='idDia' name='idDia' value='{$idDia}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdAula Horario</label>
	<div class="">
		<input id='idAula' name='idAula' value='{$idAula}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdCurso Horario</label>
	<div class="">
		<input id='idCurso' name='idCurso' value='{$idCurso}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">HorIni Horario</label>
	<div class="">
		<input id='horIniHorario' name='horIniHorario' value='{$horIniHorario}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">HorFin Horario</label>
	<div class="">
		<input id='horFinHorario' name='horFinHorario' value='{$horFinHorario}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idHorario' name='idHorario' value='{$idHorario}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
