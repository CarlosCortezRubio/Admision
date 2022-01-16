{literal}
<script type="text/javascript">
validar('idEstudiante','IdEstudiante EstCtoEvaluac',REQUERIDO);
validar('idCtoEvaluac','IdCtoEvaluac EstCtoEvaluac',REQUERIDO);
validar('notaEstCtoEvaluac','Nota EstCtoEvaluac',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} EstCtoEvaluac</h4>
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
	<label class="control-label">IdEstudiante EstCtoEvaluac</label>
	<div class="">
		<input id='idEstudiante' name='idEstudiante' value='{$idEstudiante}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdCtoEvaluac EstCtoEvaluac</label>
	<div class="">
		<input id='idCtoEvaluac' name='idCtoEvaluac' value='{$idCtoEvaluac}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nota EstCtoEvaluac</label>
	<div class="">
		<input id='notaEstCtoEvaluac' name='notaEstCtoEvaluac' value='{$notaEstCtoEvaluac}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idEstCtoEvaluac' name='idEstCtoEvaluac' value='{$idEstCtoEvaluac}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
