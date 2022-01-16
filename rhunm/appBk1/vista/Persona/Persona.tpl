{literal}
<script type="text/javascript">
validar('idGenero','Genero',REQUERIDO);
validar('idEdoCivil','Estado Civil',REQUERIDO);
validar('idIdioma','Idioma',REQUERIDO);
validar('idDistritoNac','Distrito Nacimiento',REQUERIDO);
validar('idDistritoDir','Distrito Acual',REQUERIDO);
validar('idTipoDoc','Tipo Documento',REQUERIDO);
validar('idZona','Zona',REQUERIDO);
validar('idVia','Via',REQUERIDO);
validar('dniPer','Nro Documento',REQUERIDO);
validar('nom1Per','Primer Nombre',REQUERIDO);
validar('nom2Persona','Segundo Nombre',REQUERIDO);
validar('ape1Pat','Apellido Paterno',REQUERIDO);
validar('ape2Persona','Apellido Materno',REQUERIDO);
validar('numDepPersona','Numero Dependientes',REQUERIDO);
validar('fecNacPersona','Fecha Nacimiento',REQUERIDO);
validar('zonaDomPersona','Zona Dom,',REQUERIDO);
validar('desViaDomPersona','Via',REQUERIDO);
validar('numViaDomPersona','Nro de Via',REQUERIDO);
validar('intDomPersona','Nro Dependientes',REQUERIDO);
validar('tel1DomPersona','Telefono ',REQUERIDO);
validar('refDomPersona','Referencia',REQUERIDO);
validar('emaDomPersona','Correo Electronico',REQUERIDO);
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} Persona</h4>		
			</div>
			{if $valorbtn == '1'} 
			
			<!--<input id="agregar" style="display:none" value="Registrar Persona" class="btn btn-primary mr-1" onclick="xajax_addPersona(xajax.getFormValues('form'))" type="button" >  -->
		
		 <input id="agregar" value="Registrar Persona" class="btn btn-primary mr-1" onclick="xajax_addPersona(xajax.$('idPersona').value,xajax.$('idGenero').value,xajax.$('idEdoCivil').value,xajax.$('idIdioma').value,xajax.$('idDistritoNac').value,xajax.$('idDistritoDir').value,xajax.$('idTipoDoc').value,xajax.$('idZona').value,xajax.$('idVia').value,xajax.$('dniPer').value,xajax.$('nom1Per').value,xajax.$('nom2Persona').value,xajax.$('ape1Pat').value,xajax.$('ape2Persona').value,xajax.$('numDepPersona').value,xajax.$('fecNacPersona').value,xajax.$('zonaDomPersona').value,xajax.$('desViaDomPersona').value,xajax.$('numViaDomPersona').value,xajax.$('intDomPersona').value,xajax.$('tel1DomPersona').value,xajax.$('tel2DomPersona').value,xajax.$('refDomPersona').value,xajax.$('emaDomPersona').value)" type="button" border='0px' align='top' > 
			{/if} 
			
			<nav>
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
			<a class="nav-item nav-link active" id="nav-datos_per-tab" data-toggle="tab" href="#nav-datos_per" role="tab" aria-controls="nav-home" aria-selected="true">Datos Personales</a>
				
				<a class="nav-item nav-link" id="nav-profile-2" data-toggle="tab" href="#nav-profile_sec2" role="tab" aria-controls="nav-profile" aria-selected="false">Nacimiento</a>
				<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Domicilio</a>
				<a class="nav-item nav-link" id="nav-contactt-tab" data-toggle="tab" href="#nav-contactt" role="tab" aria-controls="nav-contactt" aria-selected="false">Datos de Contacto</a>
	
			</div>
			</nav>
			{if $valorvalidate == '1' } 
			<input class="text-danger" id='validar' {if $desactivar == '1' }  type='hidden' {/if} disabled/>	
			{/if} 
			
			
	
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

			
				<div class="tab-content" id="nav-tabContent" style="width: 100%">
					  
					<div class="tab-pane fade show active" id="nav-datos_per" role="tabpanel" aria-labelledby="nav-datos_per-tab"style="width: 100%" >
						<div class="form-row">
						<div class="form-group col-lg-6">
							<label class="control-label">Tipo Documento</label>
							<div class="">
								<select id='idTipoDoc' name='idTipoDoc' class='form-control input-sm'>
							<option value=''>-Seleccione-</option>
							{html_options options=$tablaTipoDoc selected=$idTipoDoc}
						</select>
							</div>
						</div>
						<div class="form-group col-lg-6">
							<label class="control-label">Documento</label>
							<div class="">
								<input id='dniPer' name='dniPersona' value='{$dniPersona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>

						</div>
						<div class="form-row">
						<div class="form-group col-lg-6">
							<label class="control-label">Primer Nombre</label>
							<div class="">
								<input id='nom1Per' name='nom1Persona' value='{$nom1Persona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>
						<div class="form-group col-lg-6">
							<label class="control-label">Segundo Nombre</label>
							<div class="">
								<input id='nom2Persona' name='nom2Persona' value='{$nom2Persona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>
						</div>
						<div class="form-row">
						<div class="form-group col-lg-6">
							<label class="control-label">Primer Apellido</label>
							<div class="">
								<input id='ape1Pat' name='ape1Persona' value='{$ape1Persona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>
						<div class="form-group col-lg-6">
							<label class="control-label">Segundo Apellido</label>
							<div class="">
								<input id='ape2Persona' name='ape2Persona' value='{$ape2Persona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>		

						</div>
						</div>



						 
 					<div class="tab-pane fade" id="nav-profile_sec2" role="tabpanel" aria-labelledby="nav-profile-2">

							<div class="form-row">
						<div class="form-group col-lg-4">
							<label class="control-label">Género</label>
							<div class="">
								<select id='idGenero' name='idGenero' class='form-control input-sm'>
							<option value=''>-Seleccione-</option>
							{html_options options=$tablaGenero selected=$idGenero}
						</select>
							</div>
						</div>

						<div class="form-group col-lg-4">
							<label class="control-label">Fecha Nacimiento</label>
							<div class="">
								<div class="input-group input-group-sm">
								<input id='fecNacPersona' name='fecNacPersona' class='form-control input-sm' type='date' value='{$fecNacPersona}' >
								
								</div>
							</div>
						</div>
						<div class="form-group col-lg-4">
							<label class="control-label">Estado Civil</label>
							<div class="">
								<select id='idEdoCivil' name='idEdoCivil' class='form-control input-sm'>
									<option value=''>-Seleccione-</option>
									{html_options options=$tablaEdoCivil selected=$idEdoCivil}
								</select>
							</div>
						</div>
						

						</div>
						<div class="form-row">
						<div class="form-group col-lg-4">
							<label class="control-label">Idioma</label>
							<div class="">
								<select id='idIdioma' name='idIdioma' class='form-control input-sm'>
									<option value=''>-Seleccione-</option>
									{html_options options=$tablaIdioma selected=$idIdioma}
								</select>
							</div>
						</div>
						
						<div class="form-group col-lg-4">
							<label class="control-label">Número Dependientes</label>
							<div class="">
								<input id='numDepPersona' name='numDepPersona' value='{$numDepPersona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>
											
						
						</div>

						<div class='form-row'>
						<div class="form-group col-lg-4">
							<label class="control-label">Departamento </label>
							<div class="">
								<select id='idDepNac' name='idDepNac' class='form-control input-sm' onchange="comboPronvincia();">
									<option value=''>-Seleccione-</option>
									{html_options options=$tablaDepartNac selected=$idDepartamento}
								</select>
							</div>
						</div>

						<div class="form-group col-lg-4">
							<label class="control-label">Provincia </label>
							<div id='comboProvincia' class="">
								<select id='idProvinciaNac' name='idProvinciaNac' class='form-control input-sm' disabled>
									<option value=''>-Seleccione-</option>
								</select>
							</div>
						</div>	
							

							<div class="form-group col-lg-4">
							<label class="control-label">Distrito Nacimiento</label>
							<div id='comboDistrito' class="">
								<select id='idDistritoNac' name='idDistritoNac' class='form-control input-sm' disabled>
									<option value=''>-Seleccione-</option>
									
								</select>
							</div>
						</div>					
						
						</div>
						</div>


					  
					<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
  
						<div class="form-row">
						
						
						<div class="form-group col-lg-3">
							<label class="control-label"> Departameto</label>
							<div class="">
								<select id='idDepDir' name='idDepDir' class='form-control input-sm' onchange="comboDistritoDir();">
									<option value=''>-Seleccione-</option>
									{html_options options=$tablaDepDir selected=$idDepartamento}
								</select>
							</div>
						</div>
						<div class="form-group col-lg-3">
							<label class="control-label"> Provincia</label>
							<div id='comboProvinciaDir' class="">
								<select id='idProvinciaDir' name='idProvinciaDir' class='form-control input-sm' disabled>
									<option value=''>-Seleccione-</option>
									</select>
							</div>
						</div>
						<div class="form-group col-lg-3">
							<label class="control-label"> Distrito </label>
							<div id='comboDistritoDir' class="">
								<select id='idDistritoDir' name='idDistritoDir' class='form-control input-sm' disabled>
									<option value=''>-Seleccione-</option>
								</select>
							</div>
						</div>

						<div class="form-group col-lg-3">
							<label class="control-label">Tipo Zona</label>
							<div class="">
								<select id='idZona' name='idZona' class='form-control input-sm'>
									<option value=''>-Seleccione-</option>
									{html_options options=$tablaZona selected=$idZona}
								</select>
							</div>
						</div>
						</div>
						<div class="form-row">

						
						
						<div class="form-group col-lg-4">
							<label class="control-label">Zona</label>
							<div class="">
								<input id='zonaDomPersona' name='zonaDomPersona' value='{$zonaDomPersona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>
						

						<div class="form-group col-lg-4">
							<label class="control-label">Tipo Vía</label>
							<div class="">
								<select id='idVia' name='idVia' class='form-control input-sm'>
									<option value=''>-Seleccione-</option>
									{html_options options=$tablaVia selected=$idVia}
								</select>
							</div>
						</div>
						<div class="form-group col-lg-4">
							<label class="control-label">Vía</label>
							<div class="">
								<input id='desViaDomPersona' name='desViaDomPersona' value='{$desViaDomPersona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>
						</div>

						<div class="form-row">

						
						<div class="form-group col-lg-4">
							<label class="control-label">Nro Vía</label>
							<div class="">
								<input id='numViaDomPersona' typ='number' name='numViaDomPersona' value='{$numViaDomPersona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>
						<div class="form-group col-lg-4">
							<label class="control-label">Interior</label>
							<div class="">

								<input id='intDomPersona' type ='number' name='intDomPersona' value='{$intDomPersona}' maxlength='64' class='form-control input-sm' />
							</div>
						</div>
						<div class="form-group col-lg-4">
								<label class="control-label">Referencia</label>
								<div class="">
									<input id='refDomPersona' name='refDomPersona' value='{$refDomPersona}' maxlength='64' class='form-control input-sm' />
								</div>
							</div>

						</div>
						</div>

					
  					<div class="tab-pane fade" id="nav-contactt" role="tabpanel" aria-labelledby="nav-contactt-tab">

						<div class="form-row">
								<div class="form-group col-lg-6">
									<label class="control-label">Teléfono</label>
									<div class="">
										<input id='tel1DomPersona' type='tel' name='tel1DomPersona' value='{$tel1DomPersona}' maxlength='64' class='form-control input-sm' />
									</div>
								</div>
								<div class="form-group col-lg-6">
									<label class="control-label">Otro Teléfono</label>
									<div class="">
									<input id='tel2DomPersona' type='tel' name='tel2DomPersona' value='{$tel2DomPersona}' maxlength='64' class='form-control input-sm' />
										</div>
								</div>
								
								

							</div>
							<div class="form-row">
							
							<div class="form-group col-lg-8">
								<label class="control-label">Correo Electrónico</label>
								<div class="">
									<input type= 'email' id='emaDomPersona' name='emaDomPersona' value='{$emaDomPersona}' maxlength='64' class='form-control input-sm' />
								</div>
							</div>
			
							</div>
						</div>
			
											
						</div>				
					</div>
				</div>
		  		
		  			
 		
	</div>
			</fieldset>
		
			<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
			<input type='hidden' id='idPersona' name='idPersona' value='{$idPersona}' readonly/>
			<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>

{literal}
<script>

function comboPronvincia(){
  	id_combo2 = document.getElementById('idDepNac').value;
	
  	xajax_combo2(id_combo2);
}
function comboDistrito(){
  	id_combo2 = document.getElementById('idProvinciaNac').value;
	
  	xajax_combo3(id_combo2);
}
function comboDistritoDir(){
  	id_combo2 = document.getElementById('idDepDir').value;
	
  	xajax_comboListarProvinciaDir(id_combo2);
}

</script>
{/literal}
