<div class='pagina'>
	<div class="btn-group" role="group" aria-label="...">
		<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde">
		</div>
		<div class='line-title-con'>
			<h4>Cursos Disponibles</h4>
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
					SPP007<br>
					STP107<br>
					STP407<br>
				</div>
			</div>
			<div class="form-group col-lg-7">
				<label class="control-label">Descripción</label>
				<div class="">
					Orquesta 7<br>
					Trompeta 7<br>
					Conjunto de trompeta 7<br>
				</div>
			</div>
			<div class="form-group col-lg-1">
				<label class="control-label">Creditos</label>
				<div class="">
					2<br>
					12<br>
					2<br>
				</div>
			</div>
			<div class="form-group col-lg-1">
				<label class="control-label">Costo</label>
				<div class="">
					S. 100<br>
					S. 600<br>
					S. 100<br>
				</div>
			</div>
			<div class="form-group col-lg-2">
				<label class="control-label">Seleccionar</label>
				<div class="text-center">
					<input type="checkbox" class="form-check-input"><br>
					<input type="checkbox" class="form-check-input"><br>
					<input type="checkbox" class="form-check-input"><br>
				</div>
			</div>
			<a href="pagar"><button type="button" class="btn btn-primary">Continuar</button></a>&nbsp;&nbsp;
			<button type="button" class="btn btn-primary">Cancelar</button>
		</div>
	</div>
	</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idCurso' name='idCurso' value='{$idCurso}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
