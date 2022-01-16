<script type='text/javascript' src='{$PATH_JS_XAJAX}sesion.js'></script>
<script type='text/javascript' src='{$PATH_JS}tablasEmerg.js'></script>
<link rel="stylesheet" type="text/css" href="{$PATH_CSS}tablasEmerg.css" />
<div class='pagina'>
	<form name='form' id='form' method='post' action='actusuario.php'>
	<a id='ancla' href='#'></a>
	<div class='line-title'>
		<h2>{if $opt == 'i'} AGREGAR {elseif $opt == 'm' || $opt == 'mr'} MODIFICAR {/if} 
		<br>&nbsp;</h2>
	</div>
	<input type='hidden' id='opcion' name='opcion' value='' readonly>
	<div id='errores'>{if $error != ''}
		<div id='msg-error' class='msg-red'>{$error}</div>
	{/if} {if $exito != ''}
		<div id='msg-exito' class='msg-green'>{$exito}</div>
	{/if} {if $info != ''}
		<div id='msg-info' class='msg-blue'>{$info}</div>
	{/if}
	</div>
	<br>
	<legend> <span class='label-bold'>Datos del Usuario</span> </legend>

	<table width='100%' cellpadding='1' cellspacing='5'>
		<tr>
			<td width='250px' class='label-black'>Nombre usuario</td>
			<td width='400px' class='label-elemento'>
			{$nombrepersona}
			</td>
			<td></td>
		</tr>
		<tr>
			<td width='250px' class='label-black'>Apellido usuario</td>
			<td width='400px' class='label-elemento'>
			{$apellidopersona}
			</td>
			<td></td>
		</tr>
		<tr>
			<td width='250px' class='label-black'>Login usuario</td>
			<td width='400px' class='label-elemento'>
			{$nombreusuario}
			</td>
			<td></td>
		</tr>
		<tr>
			<td class="label-black">Clave</td>
			<td class="label-black">
				<div id="btnActClave" class="buttonBox"></div>
			</td>
			<td></td>
		</tr>
	</table>
	<input type='hidden' id='usuarioid' name='usuarioid' value='{$usuarioid}' />
	</form>
{literal}
	<script type="text/javascript">
	    if(document.getElementById('btnActClave') != null){
	    	vntActClave();
	    }
	</script>
{/literal}	
</div>