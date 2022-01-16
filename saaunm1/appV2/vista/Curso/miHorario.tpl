<div class='pagina'>
	<div class="btn-group" role="group" aria-label="...">
		<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde">
		</div>
		<div class='line-title-con'>
			<h4>Mi Horario</h4>
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
<table align="center" border="4" bordercolor="purple"
    cellpadding="10" cellspacing="20">
      <tr>
        <th bgcolor="">Hora</th>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Mi&eacute;rcoles</th>
		<th>Jueves</th>
		<th>Viernes</th>
	</tr>
	<tr>
		<td>8-10</td>
		<td align="center" colspan="3">Violín</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>10-12</td>
		<td>Guitarra</td>
		<td></td>
		<td>Recital</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>12-14</td>
		<td>Historia del arte</td>
		<td></td>
		<td></td>
		<td align="center" rowspan="2">Historia<br>de la<br>Música Peruana 1</td>
		<td></td>
	</tr>
	<tr>
		<td>15-17</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td></tr>
</table>
			</div>
			<button type="button" class="btn btn-primary">Continuar</button>&nbsp;&nbsp;
		</div>
	</div>
	</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idCurso' name='idCurso' value='{$idCurso}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
