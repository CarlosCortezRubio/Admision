<div class='pagina'>
<div class="btn-group" role="group" aria-label="...">
<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde"></div>
<div class='line-title-con'>
		<h4>Consultar Diccionario</h4>
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
	<label class="control-label">Id diccionario</label>
	<div class="">
		{$diccionarioid}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nombretabla diccionario</label>
	<div class="">
		{$nombretabla}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nombremsgtabla diccionario</label>
	<div class="">
		{$nombremsgtabla}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Generotabla diccionario</label>
	<div class="">
		{$generotabla}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nombrecampo diccionario</label>
	<div class="">
		{$nombrecampo}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nombrecortocampo diccionario</label>
	<div class="">
		{$nombrecortocampo}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Descripcioncampo diccionario</label>
	<div class="">
		{$descripcioncampo}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tipocampo diccionario</label>
	<div class="">
		{$tipocampo}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tamcampo diccionario</label>
	<div class="">
		{$tamcampo}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ordencampo diccionario</label>
	<div class="">
		{$ordencampo}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Precisioncampo diccionario</label>
	<div class="">
		{$precisioncampo}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Dominio diccionario</label>
	<div class="">
		{$dominio}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Cjtovalores diccionario</label>
	<div class="">
		{$cjtovalores}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Archivosec diccionario</label>
	<div class="">
		{$archivosec}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ncolumnas diccionario</label>
	<div class="">
		{$ncolumnas}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Colenlace diccionario</label>
	<div class="">
		{$colenlace}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Campoact diccionario</label>
	<div class="">
		{$campoact}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Sqlgrid diccionario</label>
	<div class="">
		{$sqlgrid}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Camposbusqueda diccionario</label>
	<div class="">
		{$camposbusqueda}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Campoconsulta diccionario</label>
	<div class="">
		{$campoconsulta}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Campovalido diccionario</label>
	<div class="">
		{$campovalido}
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Crearmetodo diccionario</label>
	<div class="">
		{$crearmetodo}
	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='iddiccionario' name='iddiccionario' value='{$iddiccionario}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
