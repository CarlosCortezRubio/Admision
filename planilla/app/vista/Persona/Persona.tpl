{literal}
<script type="text/javascript">
validar('idGenero','idGenero',REQUERIDO);
validar('idEdoCivil','idEdoCivil',REQUERIDO);
validar('idGradoInst','idGradoInst',REQUERIDO);
validar('nomPersona1','nomPersona1',REQUERIDO);
validar('nomPersona2','nomPersona2',REQUERIDO);
validar('apePersona1','apePersona1',REQUERIDO);
validar('apePersona2','apePersona2',REQUERIDO);
validar('cedPersona','cedPersona',REQUERIDO);
validar('nacPersona','nacPersona',REQUERIDO);
validar('rifPersona','rifPersona',REQUERIDO);
validar('fecNacPersona','fecNacPersona',REQUERIDO);
validar('movPersona','movPersona',REQUERIDO);
validar('telPersona','telPersona',REQUERIDO);
validar('emailPersona','emailPersona',REQUERIDO);
validar('fotPersona','fotPersona',REQUERIDO);
validar('fecIngAdmPub','fecIngAdmPub',REQUERIDO);
validar('dirPersona','dirPersona',REQUERIDO);
validar('numHijosPersona','numHijosPersona',REQUERIDO);
validar('numHijosCobranPersona','numHijosCobranPersona',REQUERIDO);
validar('numHijosEspPersona','numHijosEspPersona',REQUERIDO);
validar('fecFallecimientoPersona','fecFallecimientoPersona',REQUERIDO);
validar('idConyuguePersona','idConyuguePersona',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} </h4>
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
**********************************************************************************************************<br> 			
				<div class="container mt-3">
				  <h2>Toggleable Tabs</h2>
				  <br>
				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs">
				    <li class="nav-item">
				      <a class="nav-link active" data-toggle="tab" href="#datosBasicos">Datos básicos</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" data-toggle="tab" href="#datosContacto">Datos de contacto</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" data-toggle="tab" href="#datosEducacion">Datos de Educación</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" data-toggle="tab" href="#datosFam">Datos de familiares</a>
				    </li>
				  </ul>
				
				  <!-- Tab panes -->
				  <div class="tab-content">
				    <div id="datosBasicos" class="row "><br>
				      	<h3>Datos básicos</h3>
						<div class="form-group col-lg-4">
							<label class="control-label">Fotografía</label>
							<div class="">
								<input id='fotPersona' name='fotPersona' value='{$fotPersona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>      	
						<div class="form-group col-lg-4">
							<label class="control-label">Nacionalidad</label>
							<div class="">
								<input id='nacPersona' name='nacPersona' value='{$nacPersona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>
						<div class="form-group col-lg-4">
							<label class="control-label">N° Cédula</label>
							<div class="">
								<input id='cedPersona' name='cedPersona' value='{$cedPersona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>
						<div class="form-group col-lg-4">
							<label class="control-label">N° Rif</label>
							<div class="">
								<input id='rifPersona' name='rifPersona' value='{$rifPersona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>		
						<div class="form-group col-lg-4">
							<label class="control-label">Primer Nombre</label>
							<div class="">
								<input id='nomPersona1' name='nomPersona1' value='{$nomPersona1}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>
						<div class="form-group col-lg-4">
							<label class="control-label">Segundo Nombre</label>
							<div class="">
								<input id='nomPersona2' name='nomPersona2' value='{$nomPersona2}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>
						<div class="form-group col-lg-4">
							<label class="control-label">Primer Apellido</label>
							<div class="">
								<input id='apePersona1' name='apePersona1' value='{$apePersona1}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>
						<div class="form-group col-lg-4">
							<label class="control-label">Segundo Apellido</label>
							<div class="">
								<input id='apePersona2' name='apePersona2' value='{$apePersona2}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>
						<div class="form-group col-lg-4">
							<label class="control-label">Género</label>
							<select id='idGenero' name='idGenero' class='form-control input-sm'>
								<option value=''>-Seleccione-</option>
								{html_options options=$tablaGenero selected=$idGenero}
							</select>
						</div>
						<div class="form-group col-lg-4">
							<label class="control-label">Edo. Civil</label>
							<select id='idEdoCivil' name='idEdoCivil' class='form-control input-sm'>
								<option value=''>-Seleccione-</option>
								{html_options options=$tablaEdocivil selected=$idEdoCivil}
							</select>
						</div>		
						<div class="form-group col-lg-4">
							<label class="control-label">Fecha de Nacimiento</label>
							<div class="">
								<div class="input-group input-group-sm">
								<input id='fecNacPersona' name='fecNacPersona' class='form-control input-sm' type='text' value='{$fecNacPersona|date_format:"%d/%m/%Y"}' maxlength='10' ondblclick='this.value=""' readonly>
								<span class='input-group-addon'><img class='cursor' id='fecha' src='{$PUB_URL}img/iconos/calendario.gif' align='top'></span>
								{literal}
								<script type='text/javascript'>
								Calendar.setup({inputField: 'fecNacPersona', ifFormat : '%d/%m/%Y', button: 'fecha'});
								</script>
								{/literal}
								</div>
							</div>
						</div>
						<div class="form-group col-lg-4">
							<label class="control-label">Fecha Fallecimiento</label>
							<div class="">
								<div class="input-group input-group-sm">
								<input id='fecFallecimientoPersona' name='fecFallecimientoPersona' class='form-control input-sm' type='text' value='{$fecFallecimientoPersona|date_format:"%d/%m/%Y"}' maxlength='10' ondblclick='this.value=""' readonly>
								<span class='input-group-addon'><img class='cursor' id='fecha' src='{$PUB_URL}img/iconos/calendario.gif' align='top'></span>
								{literal}
								<script type='text/javascript'>
								Calendar.setup({inputField: 'fecFallecimientoPersona', ifFormat : '%d/%m/%Y', button: 'fecha'});
								</script>
								{/literal}
								</div>
							</div>
						</div>		
				    </div>
				    <div id="datosContacto" class="container tab-pane fade"><br>
				      <h3>Datos de contacto</h3>
						<div class="form-group col-lg-4">
							<label class="control-label">N° Celular</label>
							<div class="">
								<input id='movPersona' name='movPersona' value='{$movPersona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>
						<div class="form-group col-lg-4">
							<label class="control-label">N° Teléfono Fijo</label>
							<div class="">
								<input id='telPersona' name='telPersona' value='{$telPersona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>
						<div class="form-group col-lg-4">
							<label class="control-label">Correo electrónico</label>
							<div class="">
								<input id='emailPersona' name='emailPersona' value='{$emailPersona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>
						<div class="form-group col-lg-4">
							<label class="control-label">Dirección de habitación</label>
							<div class="">
								<input id='dirPersona' name='dirPersona' value='{$dirPersona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>
				    </div>
				    <div id="datosEducacion" class="container tab-pane fade"><br>
				      	<h3>Datos de formación y laborales</h3>
						<div class="form-group col-lg-4">
							<label class="control-label">Grado Instrucción</label>
							<select id='idGradoInst' name='idGradoInst' class='form-control input-sm'>
								<option value=''>-Seleccione-</option>
								{html_options options=$tablaGradoInst selected=$idGradoInst}
							</select>
						</div>
						<div class="form-group col-lg-4">
							<label class="control-label">FecIngAdmPub Persona</label>
							<div class="">
								<div class="input-group input-group-sm">
						<input id='fecIngAdmPub' name='fecIngAdmPub' class='form-control input-sm' type='text' value='{$fecIngAdmPub|date_format:"%d/%m/%Y"}' maxlength='10' ondblclick='this.value=""' readonly>
						<span class='input-group-addon'><img class='cursor' id='fecha' src='{$PUB_URL}img/iconos/calendario.gif' align='top'></span>
						{literal}
						<script type='text/javascript'>
						Calendar.setup({inputField: 'fecIngAdmPub', ifFormat : '%d/%m/%Y', button: 'fecha'});
						</script>
						{/literal}
						</div>
							</div>
						</div>
				    </div>
				    <div id="datosFam" class="container tab-pane fade"><br>
				      <h3>Datos familiares</h3>
						<div class="form-group col-lg-4">
							<label class="control-label">IdConyugue Persona</label>
							<div class="">
								<input id='idConyuguePersona' name='idConyuguePersona' value='{$idConyuguePersona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>      
						<div class="form-group col-lg-4">
							<label class="control-label">N° Hijos</label>
							<div class="">
								<input id='numHijosPersona' name='numHijosPersona' value='{$numHijosPersona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>
						<div class="form-group col-lg-4">
							<label class="control-label">N° Hijos que cobran</label>
							<div class="">
								<input id='numHijosCobranPersona' name='numHijosCobranPersona' value='{$numHijosCobranPersona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>
						<div class="form-group col-lg-4">
							<label class="control-label">N° Hijos especiales</label>
							<div class="">
								<input id='numHijosEspPersona' name='numHijosEspPersona' value='{$numHijosEspPersona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>
				    </div>
				  </div>
				</div>
**********************************************************************************************************<br> 			





		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idPersona' name='idPersona' value='{$idPersona}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
