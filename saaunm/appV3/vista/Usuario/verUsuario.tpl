<div class='pagina'>
<div class="btn-group" role="group" aria-label="...">
<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde"></div>
<div class='line-title-con'>
		<h4>Consultar Usuario</h4>
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
	<label class="control-label">IDUSUARIO Usuario</label>
	<div class="">
		{$IDUSUARIO}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IDROL Usuario</label>
	<div class="">
		{$IDROL}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Edo_idEdoRegistro Usuario</label>
	<div class="">
		{$Edo_idEdoRegistro}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">IdPersona Usuario</label>
	<div class="">
		{$idPersona}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">CUENTAUSUARIO Usuario</label>
	<div class="">
		{$CUENTAUSUARIO}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">CONTRASENAUSUARIO Usuario</label>
	<div class="">
		{$CONTRASENAUSUARIO}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">FECCREACION Usuario</label>
	<div class="">
		{$FECCREACION}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">PREGSECRETA Usuario</label>
	<div class="">
		{$PREGSECRETA}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">RESPPREGSECRETA Usuario</label>
	<div class="">
		{$RESPPREGSECRETA}
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idUsuario' name='idUsuario' value='{$idUsuario}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
