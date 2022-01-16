{literal}
<script type="text/javascript">
validar('diccionarioid','Id diccionario',REQUERIDO);
validar('nombretabla','Nombretabla diccionario',REQUERIDO);
validar('nombremsgtabla','Nombremsgtabla diccionario',REQUERIDO);
validar('generotabla','Generotabla diccionario',REQUERIDO);
validar('nombrecampo','Nombrecampo diccionario',REQUERIDO);
validar('nombrecortocampo','Nombrecortocampo diccionario',REQUERIDO);
validar('descripcioncampo','Descripcioncampo diccionario',REQUERIDO);
validar('tipocampo','Tipocampo diccionario',REQUERIDO);
validar('tamcampo','Tamcampo diccionario',REQUERIDO);
validar('ordencampo','Ordencampo diccionario',REQUERIDO);
validar('precisioncampo','Precisioncampo diccionario',REQUERIDO);
validar('dominio','Dominio diccionario',REQUERIDO);
validar('cjtovalores','Cjtovalores diccionario',REQUERIDO);
validar('archivosec','Archivosec diccionario',REQUERIDO);
validar('ncolumnas','Ncolumnas diccionario',REQUERIDO);
validar('colenlace','Colenlace diccionario',REQUERIDO);
validar('campoact','Campoact diccionario',REQUERIDO);
validar('sqlgrid','Sqlgrid diccionario',REQUERIDO);
validar('camposbusqueda','Camposbusqueda diccionario',REQUERIDO);
validar('campoconsulta','Campoconsulta diccionario',REQUERIDO);
validar('campovalido','Campovalido diccionario',REQUERIDO);
validar('crearmetodo','Crearmetodo diccionario',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} Diccionario</h4>
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
	<label class="control-label">Id diccionario</label>
	<div class="">
		<input id='diccionarioid' name='diccionarioid' value='{$diccionarioid}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nombretabla diccionario</label>
	<div class="">
		<input id='nombretabla' name='nombretabla' value='{$nombretabla}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nombremsgtabla diccionario</label>
	<div class="">
		<input id='nombremsgtabla' name='nombremsgtabla' value='{$nombremsgtabla}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Generotabla diccionario</label>
	<div class="">
		<input id='generotabla' name='generotabla' value='{$generotabla}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nombrecampo diccionario</label>
	<div class="">
		<input id='nombrecampo' name='nombrecampo' value='{$nombrecampo}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Nombrecortocampo diccionario</label>
	<div class="">
		<input id='nombrecortocampo' name='nombrecortocampo' value='{$nombrecortocampo}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Descripcioncampo diccionario</label>
	<div class="">
		<input id='descripcioncampo' name='descripcioncampo' value='{$descripcioncampo}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tipocampo diccionario</label>
	<div class="">
		<input id='tipocampo' name='tipocampo' value='{$tipocampo}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tamcampo diccionario</label>
	<div class="">
		<input id='tamcampo' name='tamcampo' value='{$tamcampo}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ordencampo diccionario</label>
	<div class="">
		<input id='ordencampo' name='ordencampo' value='{$ordencampo}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Precisioncampo diccionario</label>
	<div class="">
		<input id='precisioncampo' name='precisioncampo' value='{$precisioncampo}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Dominio diccionario</label>
	<div class="">
		<input id='dominio' name='dominio' value='{$dominio}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Cjtovalores diccionario</label>
	<div class="">
		<input id='cjtovalores' name='cjtovalores' value='{$cjtovalores}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Archivosec diccionario</label>
	<div class="">
		<input id='archivosec' name='archivosec' value='{$archivosec}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ncolumnas diccionario</label>
	<div class="">
		<input id='ncolumnas' name='ncolumnas' value='{$ncolumnas}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Colenlace diccionario</label>
	<div class="">
		<input id='colenlace' name='colenlace' value='{$colenlace}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Campoact diccionario</label>
	<div class="">
		<input id='campoact' name='campoact' value='{$campoact}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Sqlgrid diccionario</label>
	<div class="">
		<input id='sqlgrid' name='sqlgrid' value='{$sqlgrid}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Camposbusqueda diccionario</label>
	<div class="">
		<input id='camposbusqueda' name='camposbusqueda' value='{$camposbusqueda}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Campoconsulta diccionario</label>
	<div class="">
		<input id='campoconsulta' name='campoconsulta' value='{$campoconsulta}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Campovalido diccionario</label>
	<div class="">
		<input id='campovalido' name='campovalido' value='{$campovalido}' maxlength='64' class='form-control input-sm' />
	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Crearmetodo diccionario</label>
	<div class="">
		<input id='crearmetodo' name='crearmetodo' value='{$crearmetodo}' maxlength='64' class='form-control input-sm' />
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
