<div class='pagina'>
<div class="btn-group" role="group" aria-label="...">
<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde"></div>
<div class='line-title-con'>
		<h4>Consultar Banco</h4>
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
	<label class="control-label">IDBANCO Banco</label>
	<div class="">
		{$IDBANCO}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Edo_idEdoRegistro Banco</label>
	<div class="">
		{$Edo_idEdoRegistro}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">NOMBANCO Banco</label>
	<div class="">
		{$NOMBANCO}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">ETIBANCO Banco</label>
	<div class="">
		{$ETIBANCO}
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idBanco' name='idBanco' value='{$idBanco}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
