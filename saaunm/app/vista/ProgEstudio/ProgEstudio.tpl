{literal}
<script type="text/javascript">
validar('codProgEstudio','Código',REQUERIDO);
validar('nomProgEstudio','Nombre',REQUERIDO);
validar('nomCortoProgEstudio','Nombre Corto',REQUERIDO);
validar('numResAutoProgEstudio','N° Res. Autorización',REQUERIDO);
validar('fecResAutoProgEstudio','F. Res. Autorización',REQUERIDO);
validar('preInscProgEstudio','Aplica para Preinscripciones',REQUERIDO);
validar('gpoProgEstudio','Aplica para Grupos',REQUERIDO);
validar('numResRevaProgEstudio','N° Res. Revalidación',REQUERIDO);
validar('fecResRevaProgEstudio','F. Res. Revalidación',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} Programa de Estudio</h4>
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
	<label class="control-label">Código</label>
	<div class="">
		<input id='codProgEstudio' name='codProgEstudio' value='{$codProgEstudio}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nombre</label>
	<div class="">
		<input id='nomProgEstudio' name='nomProgEstudio' value='{$nomProgEstudio}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nombre Corto</label>
	<div class="">
		<input id='nomCortoProgEstudio' name='nomCortoProgEstudio' value='{$nomCortoProgEstudio}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">N° Res. Autorización</label>
	<div class="">
		<input id='numResAutoProgEstudio' name='numResAutoProgEstudio' value='{$numResAutoProgEstudio}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">F. Res. Autorización</label>
	<div class="">
		<div class="input-group input-group-sm">
<input id='fecResAutoProgEstudio' name='fecResAutoProgEstudio' class='form-control input-sm' type='date' value='{$fecResAutoProgEstudio}' >
</div>
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Aplica para Preinscripciones</label>
	<div class="">
		<input id='preInscProgEstudio' name='preInscProgEstudio' value='{$preInscProgEstudio}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Aplica para Grupos</label>
	<div class="">
		<input id='gpoProgEstudio' name='gpoProgEstudio' value='{$gpoProgEstudio}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">N° Res. Revalidación</label>
	<div class="">
		<input id='numResRevaProgEstudio' name='numResRevaProgEstudio' value='{$numResRevaProgEstudio}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">F. Res. Revalidación</label>
	<div class="">
		<div class="input-group input-group-sm">
<input id='fecResRevaProgEstudio' name='fecResRevaProgEstudio' class='form-control input-sm' type='date' value='{$fecResRevaProgEstudio}' >
</div>
	</div>
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
