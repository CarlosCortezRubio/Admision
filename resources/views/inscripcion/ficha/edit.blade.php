@section('styles')
   <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-toggle.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">
@endsection

<div class="container">
   <div class="row">
      <div class="col-md-12">
         @include('partials.alert-data-error')
      </div>
   </div>

   <form method="POST" action="{{ url('inscripcion/ficha') }}" id="form-ficha" autocomplete="off" enctype="multipart/form-data">
      @csrf

      <h5><strong>Ficha de Inscripci&oacute;n:</strong></h5>
      <div class="row">
         <div class="col-md-9">
            <!-- Datos generales -->
            <div class="card card-primary card-outline elevation-2">
               <div class="card-header"><strong>Datos generales</strong></div>
               <div class="card-body">

                  {{--<div class="form-group row">
                     <label for="nume_expe_pos" class="col-lg-3 col-md-12 text-lg-right">N&ordm; Expediente:</label>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <input type="text" id="nume_expe_pos" class="form-control font-weight-bolder" value="{{ $new ? '' : $ficha->nume_expe_pos }}" readonly>
                     </div>
                  </div>--}}
                  
                  <div class="form-group row">
                     <label for="desc_tabl_det" class="col-lg-3 col-md-12 text-lg-right">Secci&oacute;n a la que postula:</label>
                     <div class="col-lg-9 col-md-12">
                        <input type="text" id="desc_secc_sec" class="form-control" value="{{ $seccion->desc_tabl_det ?? '' }}" readonly>
                        <input type="hidden" name="codi_secc_sec" value="{{ $seccion->codi_tabl_det ?? '' }}">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="desc_espe_esp" class="col-lg-3 col-md-12 text-lg-right">Especialidad a la que postula:</label>
                     <div class="col-lg-9 col-md-12">
                        <input type="text" id="desc_espe_esp" class="form-control" value="{{ $especialidad->desc_tabl_det ?? '' }}" readonly>
                        <input type="hidden" name="codi_espe_esp" value="{{ $especialidad->codi_tabl_det ?? '' }}">
                     </div>
                  </div>
               </div>
            </div>

            <!-- Datos personales -->
            <div class="card card-primary card-outline elevation-2">
               <div class="card-header"><strong>Datos personales</strong></div>
               <div class="card-body">

                  <div class="row">
                     <div class="col-sm-6 col-xs-12">
                        <div class="form-group row">
                           <label for="apel_pate_per" class="col-lg-6 col-md-12 text-lg-right">Apellido paterno:</label>
                           <div class="col-lg-6 col-md-12">
                              <input class="form-control text-uppercase" type="text" name="apel_pate_per" id="apel_pate_per" value="{{ $new ? old('apel_pate_per') : $ficha->apel_pate_per }}" required autocomplete="nope">
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-xs-12">
                        <div class="form-group row">
                           <label for="apel_mate_per" class="col-lg-6 col-md-12 text-lg-right">Apellido materno:</label>
                           <div class="col-lg-6 col-md-12">
                              <input class="form-control text-uppercase" type="text" name="apel_mate_per" id="apel_mate_per" value="{{ $new ? old('apel_mate_per') : $ficha->apel_mate_per }}" required autocomplete="nope">
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="form-group row">
                     <label for="nomb_pers_per" class="col-lg-3 col-md-12 text-lg-right">Nombres:</label>
                     <div class="col-lg-9 col-md-12">
                         <input class="form-control text-uppercase" type="text" name="nomb_pers_per" id="nomb_pers_per" value="{{ $new ? old('nomb_pers_per') : $ficha->nomb_pers_per }}" required autocomplete="nope">
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-sm-6 col-xs-12">
                        <div class="form-group row">
                           <label for="codi_pais_per" class="col-lg-6 col-md-12 text-lg-right">Pa&iacute;s de nacimiento:</label>
                           <div class="col-lg-6 col-md-12">
                              <select name="codi_pais_per" class="selectpicker form-control" id="codi_pais_per" data-live-search="true" required autocomplete="nope">
                                 <option value="">Seleccione...</option>
								 @if(isset($paises))
                                 @foreach ($paises as $pais)
                                    @if ($pais->codi_tabl_det==($new ? old('codi_pais_per') : $ficha->codi_pais_per))
                                       <option value="{{ $pais->codi_tabl_det }}" selected>{{ $pais->abre_tabl_det }}</option>
                                    @else
                                       <option value="{{ $pais->codi_tabl_det }}">{{ $pais->abre_tabl_det }}</option>
                                    @endif
                                 @endforeach
								 @endif
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-xs-12">
                        <div class="form-group row">
                           <label for="fech_naci_fmt" class="col-lg-6 col-md-12 text-lg-right">Fecha de nacimiento:</label>
                           <div class="col-lg-6 col-md-12">
								@if(isset($fnacimiento))
								<input type="text" class="form-control" id="fech_naci_fmt" value="{{ date('d/m/Y', strtotime($fnacimiento)) }}" readonly>
								<input type="hidden" name="fech_naci_per" value="{{ date('Y-m-d', strtotime($fnacimiento)) }}">
								<input type="hidden" name="edad_calc_pos" value="{{ $edad }}">
								@else
									<input type="text" class="form-control" id="fech_naci_fmt" value="" readonly>
									<input type="hidden" name="fech_naci_per" value="">
									<input type="hidden" name="edad_calc_pos" value="">
							  @endif
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="form-group row">
                     <label for="docu_iden_per" class="col-lg-3 col-md-12 text-lg-right">Documento de identidad:</label>
                     <div class="col-lg-3 col-md-6 col-sm-6">
						@if(isset($tdocumento))
							<input type="text" id="desc_tipo_doc" class="form-control" value="{{ $tdocumento->abre_tabl_det.'  '.$ndocumento }}" readonly>
						@else
							<input type="text" id="desc_tipo_doc" class="form-control" value="" readonly>
						@endif
                        <input type="hidden" name="tipo_docu_per" value="{{ $tdocumento->codi_tabl_det ?? ''}}">
                        <input type="hidden" name="nume_docu_per" value="{{ $ndocumento ?? '' }}">
                     </div>
                  </div>

                  <div class="form-group row">
                     <label for="luga_naci_per" class="col-lg-3 col-md-12 text-lg-right">Lugar de residencia:</label>
                     <div class="col-lg-9 col-md-12">
                        <div class="input-group">
                           <input type="text" id="luga_naci_per" class="form-control" value="{{ isset($ubigeoDom->codi_ubic_ubg) ? $ubigeoDom->codi_ubic_ubg.' - '.$ubigeoDom->nomb_depa_ubg.', '.$ubigeoDom->nomb_prov_ubg.', '.$ubigeoDom->nomb_dist_ubg : '' }}" readonly>
                           <div class="input-group-btn">
                              <button type="button" class="btn btn-primary" data-target="#modal-ubigeo" data-toggle="modal">
                                 <span class="fas fa-search"></span>
                              </button>
                           </div>
                        </div>
                        <input type="hidden" name="ubig_domi_per" id="ubig_domi_per" value="{{ $new ?: $ficha->ubig_domi_per }}">
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-sm-6 col-xs-12">
                        <div class="form-group row">
                           <label for="telf_fijo_per" class="col-lg-6 col-md-12 text-lg-right">Tel&eacute;fono fijo:</label>
                           <div class="col-lg-6 col-md-12">
                              <input class="form-control" type="text" name="telf_fijo_per" id="telf_fijo_per" value="{{ $new ? old('telf_fijo_per') : $ficha->telf_fijo_per }}" autocomplete="nope">
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-xs-12">
                        <div class="form-group row">
                           <label for="telf_celu_per" class="col-lg-6 col-md-12 text-lg-right">Tel&eacute;fono celular:</label>
                           <div class="col-lg-6 col-md-12">
                              <input class="form-control" type="text" name="telf_celu_per" id="telf_celu_per" value="{{ $new ? old('telf_celu_per') : $ficha->telf_celu_per }}" autocomplete="nope">
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="form-group row">
                     <label for="tipo_prep_pos" class="col-lg-3 col-md-12 text-lg-right">&#191;D&oacute;nde se prepar&oacute;&#63;:</label>
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <select class="custom-select" name="tipo_prep_pos" id="tipo_prep_pos" required autocomplete="nope">
                           <option value="">Seleccionar...</option>
                           <option value="C" {{ 'C'==($new ? old('tipo_prep_pos') : $ficha->tipo_prep_pos) ? 'selected' : '' }}>
                              Cursos de extensi&oacute;n
                           </option>
                           <option value="A" {{ 'A'==($new ? old('tipo_prep_pos') : $ficha->tipo_prep_pos) ? 'selected' : '' }}>
                              Academia
                           </option>
                           <option value="O" {{ 'O'==($new ? old('tipo_prep_pos') : $ficha->tipo_prep_pos) ? 'selected' : '' }}>
                              Otros
                           </option>
                        </select>
                     </div>
                  </div>

                  <div class="form-group row" id="docentes1div" @if (isset($ficha->tipo_prep_pos) && $ficha->tipo_prep_pos=='C') style="display:none;" @endif >
                     <label for="desc_prep_pos" class="col-lg-3 col-md-12 text-lg-right">Especialidad / Profesor:</label>
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <select  class="selectpicker form-control" name="codi_pers_per" id="codi_pers_per" data-live-search="true" autocomplete="nope">
                           @foreach ($docentes as $k => $doc)
                              <option value="{{ $doc->codi_pers_per }}">{{ $doc->nomb_comp_per }}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <select  class="selectpicker form-control" name="codi_espe_cex" id="codi_espe_cex" data-live-search="true" autocomplete="nope">
                           @foreach ($especialidades as $k => $espe)
                              <option value="{{ $espe->codi_espe_cex }}">{{ $espe->desc_tabl_det }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>

                  <div class="form-group row" id="docentes2div" @if (isset($ficha->tipo_prep_pos)) style="display:none;" @endif>
                     <label for="desc_prep_pos" class="col-lg-3 col-md-12 text-lg-right">Especialidad / Profesor:</label>
                     <div class="col-lg-9 col-md-12">
                        <input class="form-control text-uppercase" type="text" name="desc_prep_pos" id="desc_prep_pos" value="{{ $new ? old('desc_prep_pos') : $ficha->desc_prep_pos }}" autocomplete="nope">
                     </div>
                  </div>

                  <div class="form-group row">
                     <label for="tipo_prep_pos" class="col-lg-3 col-md-12 text-lg-right">Nivel de Estudio:</label>
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <select  class="custom-select" name="tipo_gra_esc" id="tipo_gra_esc" required autocomplete="nope">
                           <option value="">Seleccionar...</option>
                           <option value="P" {{ 'P'==($new ? old('tipo_gra_esc') : $ficha->tipo_gra_esc) ? 'selected' : '' }}>
                              PRIMARIA
                           </option>
                           <option value="S" {{ 'S'==($new ? old('tipo_gra_esc') : $ficha->tipo_gra_esc) ? 'selected' : '' }}>
                              SECUNDARIA
                           </option>
                        </select>
                     </div>
                  </div>
                  

                  <div id="grad" class="col-sm-6 col-xs-12">
                        <div class="form-group row">
                           <label for="telf_celu_per" class="col-lg-6 col-md-12 text-lg-right">Grado:</label>
                           <div class="col-lg-6 col-md-12">
                              <select id="seleccione_dis" class="form-control">
                                 <option class="disc" value="PRIMERO" >PRIMERO</option>
                                 <option class="disc" value="SEGUNDO" >SEGUNDO</option>
                                 <option class="disc" value="TERCERO" >TERCERO</option>
                                 <option class="disc" value="CUARTO" >CUARTO</option>
                                 <option class="disc" value="QUINTO" >QUINTO</option>
                                 <option class="disc" id="gra-sex" value="SEXTO" >SEXTO</option>
                              </select>
                           </div>
                        </div>
                  </div>

                  

                  <!-- 2021 -->
                  <!-- <div class="form-group row">
                     <label for="flag_corr_pos" class="col-lg-3 col-md-12 text-lg-right">&#191;Requiere correpetidor&#63;:</label>
                     <div class="col-lg-9 col-md-12">
                        <input type="checkbox" class="d-none" name="flag_corr_pos" id="flag_corr_pos" value="S" data-on="Sí" data-off="No" data-onstyle="success" data-offstyle="danger" {{ 'S'==($new ? old('flag_corr_pos') : $ficha->flag_corr_pos) ? 'checked' : '' }}>
                     </div>
                  </div>

                  <div class="form-group row {{ 'S'==($new ? old('flag_corr_pos') : $ficha->flag_corr_pos) ?: 'd-none' }}" id="divCorrepetidor">
                     <label for="nomb_corr_pos" class="col-lg-3 col-md-12 text-lg-right">Nombre del correpetidor:</label>
                     <div class="col-lg-9 col-md-12">
                        <input class="form-control text-uppercase" type="text" name="nomb_corr_pos" id="nomb_corr_pos" value="{{ $new ? old('nomb_corr_pos') : $ficha->nomb_corr_pos }}" autocomplete="nope">
                     </div>
                  </div> -->
                  <!-- 2021 -->

               </div>
            </div>

            <!-- Datos apoderado -->
            @if (isset($edad) && $edad < 18)
               <div class="card card-primary card-outline elevation-2">
                  <div class="card-header"><strong>Datos del padre o apoderado</strong></div>
                  <div class="card-body">

                     <div class="form-group row">
                        <label for="apel_nomb_apd" class="col-lg-3 col-md-12 text-lg-right">Nombres y apellidos:</label>
                        <div class="col-lg-9 col-md-12">
                           <input class="form-control text-uppercase" type="text" name="apel_nomb_apd" id="apel_nomb_apd" value="{{ $new ? old('apel_nomb_apd') : $ficha->apel_nomb_apd }}" autocomplete="nope">
                        </div>
                     </div>

                     <div class="row">
                        <div class="col-sm-6 col-xs-12">
                           <div class="form-group row">
                              <label for="nume_docu_apd" class="col-lg-6 col-md-12 text-lg-right">DNI:</label>
                              <div class="col-lg-6 col-md-12">
                                 <input class="form-control" type="text" name="nume_docu_apd" id="nume_docu_apd" value="{{ $new ? old('nume_docu_apd') : $ficha->nume_docu_apd }}" autocomplete="nope">
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                           <div class="form-group row">
                              <label for="telf_fijo_apd" class="col-lg-6 col-md-12 text-lg-right">Tel&eacute;fono:</label>
                              <div class="col-lg-6 col-md-12">
                                 <input class="form-control" type="text" name="telf_fijo_apd" id="telf_fijo_apd" value="{{ $new ? old('telf_fijo_apd') : $ficha->telf_fijo_apd }}" autocomplete="nope">
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            @endif
         </div>
   
         <!-- Fotos -->
         <div class="col-md-3 col-sm-12">
            <div class="row">
               <div class="col-md-12 col-sm-6 col-xs-12">
                  <div class="card card-primary card-outline elevation-2">
                     <div class="card-header"><strong>Foto del postulante</strong></div>
                     <div class="card-body">
                        <a tabindex="0" class="card-link" role="button" data-toggle="popover" data-trigger="focus" title="Características" data-content="La fotografía del postulante debe ser reciente, tamaño carnet, a colores y con fondo blanco." style="cursor:pointer; position:absolute;">
                           <strong>&#91;&#63;&#93;</strong>
                        </a>
                        <center>
                           @if ($new)
                              <img id="imgFoto1" src="{{ asset('img/sin-foto.png') }}" class="img-thumbnail" style="max-height:160px;">
                           @else
                              @if(empty($ficha->foto_post_per))
                                 <img id="imgFoto1" src="{{ asset('img/sin-foto.png') }}" class="img-thumbnail" style="max-height:160px;">
                              @else
                                 <img id="imgFoto1" src="{{ asset('images/persons/'.$ficha->foto_post_per) }}" class="img-thumbnail" style="max-height:160px;">
                              @endif
                           @endif

                           <label for="foto1" class="btn btn-primary m-0 mt-3 d-block" style="cursor:pointer;">
                              <i class="fas fa-upload pr-2"></i>Seleccionar...
                           </label>
                           <input id="foto1" type="file" name="foto_post_per" accept="image/*" style="display:none;" data-img="imgFoto1" class="form-control">
                           @if ($new)
                              <input type="hidden" name="arch_foto_per" value=".">
                           @else
                              <input type="hidden" name="arch_foto_per" value="{{ $ficha->foto_post_per ? $ficha->foto_post_per : '.' }}">
                           @endif
                        </center>
                     </div>
                  </div>
               </div>

               <div class="col-md-12 col-sm-6 col-xs-12">
                  <div class="card card-primary card-outline elevation-2">
                     <div class="card-header"><strong>Foto del documento de identidad</strong></div>
                     <div class="card-body">
                        <a tabindex="0" class="card-link" role="button" data-toggle="popover" data-trigger="focus" title="Características" data-content="La fotografía del documento de identidad del postulante debe ser de la parte frontal donde se aprecie sus datos y el número de documento." style="cursor:pointer; position:absolute;">
                           <strong>&#91;&#63;&#93;</strong>
                        </a>
                        <center>
                           @if ($new)
                              <img id="imgFoto2" src="{{ asset('img/sin-documento.png') }}" class="img-thumbnail" style="max-height:140px;">
                           @else
                              @if(empty($ficha->file_docu_pos))
                                 <img id="imgFoto2" src="{{ asset('img/sin-documento.png') }}" class="img-thumbnail" style="max-height:140px;">
                              @else
                                 <img id="imgFoto2" src="{{ asset('images/persons/'.$ficha->file_docu_pos) }}" class="img-thumbnail" style="max-height:140px;">
                              @endif
                           @endif

                           <label for="foto2" class="btn btn-primary m-0 mt-3 d-block" style="cursor:pointer;">
                              <i class="fas fa-upload pr-2"></i>Seleccionar...
                           </label>
                           <input id="foto2" type="file" name="file_docu_pos" accept="image/*" style="display:none;" data-img="imgFoto2">
                           @if ($new)
                              <input type="hidden" name="arch_docu_per" value=".">
                           @else
                              <input type="hidden" name="arch_docu_per" value="{{ $ficha->file_docu_pos ? $ficha->file_docu_pos : '.' }}">
                           @endif
                        </center>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>

         <!----------------------------------------------------------------------->
         <!--Se agregó el campo para colocar si el participante cuenta con discapacidad en el formulario de rellenar datos--->
                     <!----Discapacidad----->   
         <div class="card card-primary card-outline elevation-2" id="Discapacidad">
            <div class="card-header"><strong>Datos adicionales</strong></div>
            <div class="card-body">
               <div class="row">
                  <div class="col-sm-6 col-xs-12">
                     <div class="form-group row">
                        <label for="nume_docu_apd" class="col-lg-6 col-md-12 text-lg-right">Cuenta con alguna discapacidad:</label>
                        <div class="col-lg-6 col-md-12">
                           <input type="radio" name="cb-disc" id="si" value=""> <label for="si">Si</label><br>
                           <input type="radio" name="cb-disc" id="no" value=""> <label for="no">No</label><br>             
                        </div>
                     </div>
                  </div>
               </div>
               
                  <div id="selec_disc" class="form-group row">
                     <label for="apel_nomb_apd" class="col-lg-3 col-md-12 text-lg-right">Seleccione Discapacidad</label>
                     <div class="col-lg-9 col-md-12">
                        <select id="seleccione_dis" class="form-control">
                           <option class="disc" value="VIDENTE" >VIDENTE</option>
                           <option class="disc" value="AUTISTA" >AUTISTA</option>
                           <option class="disc" value="AUTISTA" >AUDITIVA</option>
                           <option class="disc" id="v_otros" value="OTROS" >OTROS</option>
                        </select>
                     </div>
                  </div>
            
                  <div id="descripcion" class="form-group row">
                     <label for="apel_nomb_apd" class="col-lg-3 col-md-12 text-lg-right">Describa</label>
                     <div class="col-lg-9 col-md-12">
                        <input class="form-control text-uppercase " type="text" name="disc_post_apd" id="disc_post_apd" value="" autocomplete="nope">
                     </div>
                  </div>
               
            </div>
         </div>

         <!----------------------------------------------------------------------->


	  <!-- 2021  -->
      <hr>
	  <!-- 2021  -->

       Detalle 
	  
      <!-- 2021  -->
      <h5><strong>Ficha de Repertorio:</strong></h5>
      <!-- 2021  -->
      <div class="row">
         <div class="col-12">
            <!-- 2021 -->
            @include('inscripcion.ficha.edit-repertory')                   
            <div class="card card-primary card-outline elevation-2">
               <div class="card-header"><strong>T&eacute;cnica: Escalas y estudios</strong></div>
               <div class="card-body">
                  <textarea class="form-control" rows="3" name="tecn_post_pos" autocomplete="nope">{{ $new ? old('tecn_post_pos') : $ficha->tecn_post_pos }}</textarea>
               </div>
            </div>     
            <!-- 2021 --> 

            <div class="card card-primary card-outline elevation-2">
               <div class="card-body">
                  <div class="custom-control custom-checkbox mb-1">
                     <input type="checkbox" class="custom-control-input" id="cbox1" name="checkbox1">
                     {{-- <label class="custom-control-label" for="cbox1">Declaro que todos los datos consignados en esta ficha se ajustan completamente a la verdad.</label> --}}
                     <label class="custom-control-label" for="cbox1">DECLARO BAJO JURAMENTO LA VERACIDAD DE LOS DATOS SEÑALADOS EN EL FORMULARIO DE INSCRIPCIÓN.<br>Asimismo, autorizo que toda comunicación propia del presente procedimiento, se notifique a mi correo electrónico (numeral 20.4, Art. 20, Ley 27444-TUO D.S. 006-2016JUS).</label>
                  </div>
                  {{-- <div class="custom-control custom-checkbox mb-1">
                     <input type="checkbox" class="custom-control-input" id="cbox2" name="checkbox2">
                     <label class="custom-control-label" for="cbox2">He le&iacute;do, entiendo y acepto las condiciones de tratamiento de datos personales.</label>
                  </div> --}}
               </div>
            </div>

            <div class="form-group d-flex justify-content-center">
               <button type="submit" class="btn btn-primary mr-2" name="submit" value="G">
                  <i class="fas fa-save pr-2"></i>Guardar sin enviar
               </button>

               <a href="" data-target="#modal-confirm" data-toggle="modal">
                  <button class="btn btn-success" data-toggle="tooltip" title="Enviar ficha" id="btnEnviar" disabled>
                     <i class="fas fa-share-square pr-2"></i>Enviar ficha
                  </button>
               </a>

               @include('inscripcion.ficha.partials.send')
            </div>
         </div>
      </div>
   </form>

   <!-- Busquedas -->
   @include('busquedas.ubigeo')
</div>

@section('scripts')
   
   <script src="{{ asset('js/bootstrap-toggle.min.js') }}"></script>
   <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
   <script src="{{ asset('js/datatables.min.js') }}"></script>
   <script src="{{ asset('js/ficha-registro.js') }}"></script>
   <script>
      $(document).ready(function() { 
            $("#docentesdiv").show();
            $("#selec_disc").hide();
            $("#descripcion").hide();
         
         $("#si").click(function(){          
            if($("#seleccione_dis").val()=="OTROS"){
               $("#descripcion").show();
            } else{
               $("#descripcion").hide();
            }
            $("#selec_disc").show(); 
            });

            $("#seleccione_dis").click(function(){ 
               if($("#seleccione_dis").val()=="OTROS"){
               $("#descripcion").show();
            } else {
               $("#descripcion").hide();
            }
            });

            $("#no").click(function(){ 
            $("#selec_disc").hide(); 
         }); 
         //------------------------------------------------------------------------------
         //Validar Docente - Especialidad
         //------------------------------------------------------------------------------

         $("#tipo_prep_pos").change(function(){
            $("#codi_pers_per").prop("selected", false);
            $("#codi_espe_cex").prop("selected", false);
            if($("#tipo_prep_pos").val()=="C"){
               $("#docentes2div").hide();
               $("#docentes1div").show();
            } else if($("#tipo_prep_pos").val()=="A" || $("#tipo_prep_pos").val()=="O"){
               $("#docentes1div").hide();
               $("#docentes2div").show();
            }else{
               $("#docentes2div").hide();
               $("#docentes1div").hide();
            }
            
         });

         //------------------------------------------------------------------------------
         //Validar seccion y grado
         //------------------------------------------------------------------------------
   
         $("#grad").hide();

         $("#tipo_gra_esc").change(function(){
            $("#grad").prop("selected", false);
            if($("#tipo_gra_esc").val()=="I" || $("#tipo_gra_esc").val()=="U"){
               $("#grad").hide();
            } else{
              if($("#tipo_gra_esc").val()=="S"){
               $("#gra-sex").hide();
              } else{
               $("#gra-sex").show();
              }
               $("#grad").show();
            }
         });
      }); 
   </script>
@endsection