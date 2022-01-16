{literal}
<script type="text/javascript">
validar('idConceptos','IdConceptos ConcPlanilla',REQUERIDO);
validar('idplanillaPensionado','IdplanillaPensionado ConcPlanilla',REQUERIDO);
validar('mntConcPlanilla','Mnt ConcPlanilla',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} ConcPlanilla</h4>
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
	<label class="control-label">IdConceptos ConcPlanilla</label>
	<div class="">
		<input id='idConceptos' name='idConceptos' value='{$idConceptos}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdplanillaPensionado ConcPlanilla</label>
	<div class="">
		<input id='idplanillaPensionado' name='idplanillaPensionado' value='{$idplanillaPensionado}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Mnt ConcPlanilla</label>
	<div class="">
		<input id='mntConcPlanilla' name='mntConcPlanilla' value='{$mntConcPlanilla}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idConcPlanilla' name='idConcPlanilla' value='{$idConcPlanilla}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
