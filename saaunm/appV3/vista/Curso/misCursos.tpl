<div class='pagina'>
	<div class="btn-group" role="group" aria-label="...">
		<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde">
		</div>
		<div class='line-title-con'>
			<h4>Mis Cursos</h4>
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
			<div class="form-group col-lg-1">
				<label class="control-label">Código</label>
				<div class="">
					SFM622<br>
					SFH312<br>
					SFH202<br>
					SFH311<br>
					SFM101<br>
				</div>
			</div>
			<div class="form-group col-lg-7">
				<label class="control-label">Descripción</label>
				<div class="">
					Repertorio Orquestal 2<br>
					Investigación 2<br>
					Comunicación<br>
					Investigación 1<br>
					Lenguaje musical 1<br>
				</div>
			</div>
			<div class="form-group col-lg-1">
				<label class="control-label">Creditos</label>
				<div class="">
					2<br>
					3<br>
					4<br>
					3<br>
					3<br>
				</div>
			</div>
			<div class="form-group col-lg-3">
				<label class="control-label">Estado</label>
				<div class="">
					Aprobada (20.00)<br>
					Aprobada (15.17)<br>
					Aprobada (17)<br>
					Aprobada (18)<br>
					Aprobada (13)<br>
				</div>
			</div>
			</div>
			<a href="../principal"><button type="button" class="btn btn-primary">Continuar</button>&nbsp;&nbsp;</a>
		</div>
		</div>
	</div>
	</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idCurso' name='idCurso' value='{$idCurso}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
