<div class='pagina'>
<div class="btn-group" role="group" aria-label="...">
<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde"></div>
<div class='line-title-con'>
		<h4>Consultar PenAsig</h4>
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
	<label class="control-label">IdPensum PenAsig</label>
	<div class="">
		{$idPensum}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdAsignatura PenAsig</label>
	<div class="">
		{$idAsignatura}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdCiclo PenAsig</label>
	<div class="">
		{$idCiclo}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Credito PenAsig</label>
	<div class="">
		{$creditoPenAsig}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IhSem PenAsig</label>
	<div class="">
		{$ihSemPenAsig}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IhTot PenAsig</label>
	<div class="">
		{$ihTotPenAsig}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">EvalParaCerrar PenAsig</label>
	<div class="">
		{$evalParaCerrarPenAsig}
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idPenAsig' name='idPenAsig' value='{$idPenAsig}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
