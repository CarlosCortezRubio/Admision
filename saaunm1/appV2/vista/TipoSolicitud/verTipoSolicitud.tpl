<div class='pagina'>
<div class="btn-group" role="group" aria-label="...">
<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde"></div>
<div class='line-title-con'>
		<h4>Consultar TipoSolicitud</h4>
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
	<label class="control-label">Sol TipoSolicitud</label>
	<div class="">
		{$solTipoSolicitud}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FecIni TipoSolicitud</label>
	<div class="">
		{$fecIniTipoSolicitud}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FecFin TipoSolicitud</label>
	<div class="">
		{$fecFinTipoSolicitud}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Seg TipoSolicitud</label>
	<div class="">
		{$segTipoSolicitud}
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idTipoSolicitud' name='idTipoSolicitud' value='{$idTipoSolicitud}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>