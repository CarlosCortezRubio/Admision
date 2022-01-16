<div class='pagina'>
<div class="btn-group" role="group" aria-label="...">
<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde"></div>
<div class='line-title-con'>
		<h4>Consultar Log</h4>
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
	<label class="control-label">IDLOG log</label>
	<div class="">
		{$IDLOG}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IDUSUARIO log</label>
	<div class="">
		{$IDUSUARIO}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FECHALOG log</label>
	<div class="">
		{$FECHALOG}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IPLOG log</label>
	<div class="">
		{$IPLOG}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">ACCIONLOG log</label>
	<div class="">
		{$ACCIONLOG}
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idlog' name='idlog' value='{$idlog}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
