@extends('layouts.app')

@section('styles')
   <link rel="stylesheet" type="text/css" href="{{ asset('css/daterangepicker.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-toggle.min.css') }}">
@endsection

@section('content')
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <div class="card card-primary card-outline elevation-2">
               <div class="card-body">
                  <h6 class="card-subtitle mb-2 text-muted">Marque las siguientes casillas:</h6>
                  <hr>
                  <div class="custom-control custom-checkbox mb-2">
                     <input type="checkbox" class="custom-control-input" id="cbox1" name="checkbox1" required>
                     <label class="custom-control-label" for="cbox1">Declaro haber le&iacute;do el instructivo.</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-2">
                     <input type="checkbox" class="custom-control-input" id="cbox2" name="checkbox2" required>
                     <label class="custom-control-label" for="cbox2">Declaro haber le&iacute;do el prospecto de admisi&oacute;n.</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-1">
                     <input type="checkbox" class="custom-control-input" id="cbox3" name="checkbox3" required>
                     <label class="custom-control-label" for="cbox3">Autorizo el tratamiento de los datos personales que he procedido a entregar o que entregar&eacute;.</label>
                  </div>
                </div>
            </div>
         </div>
      </div>

      <form action="{{ url('inscripcion/pago/enviarHaciaPlataforma') }}" method="POST">
         @csrf

         <div class="row justify-content-center">
            <div class="col-lg-9 col-md-9">
               @include('partials.alert-data-error')
            </div>

            <div class="col-lg-5 col-md-9">
               <div class="card card-primary card-outline elevation-2">
                  <div class="card-header">
                     <strong>Datos del postulante</strong>
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-6">
                           <div class="form-group">
                              <label for="documento" class="mb-1">Documento de identidad:</label>
                              <input type="text" id="documento" class="form-control" value="{{ $tipodocu->abre_tabl_det.'  '.$numedocu }}" readonly>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group">
                              <label class="mb-1" for="nacimiento">Fecha de nacimiento:</label>
                              <div class="input-group">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text">
                                       <i class="far fa-calendar-alt"></i>
                                    </span>
                                 </div>
                                 <input type="text" id="nacimiento" class="form-control" required autocomplete="nope">
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="s_seccion" class="mb-1">Secci&oacute;n a la que postula:</label>
                        <select name="codi_secc_sec" class="custom-select" id="s_seccion" required>
                           <option value="">Seleccione...</option>
                           @foreach ($secciones as $sec)
                              <option value="{{$sec->codi_secc_sec}}">{{$sec->desc_secc_sec}}</option>
                           @endforeach
                        </select>
                     </div>

                     <div class="form-group">
                        <label for="s_especialidad" class="mb-1">Especialidad a la que postula:</label>
                        <select name="codi_espe_esp" class="custom-select" id="s_especialidad" required>
                        </select>
                     </div>
					 
					 <!-- 2021 -->
                     <div class="form-group">
                        <label for="s_modalidad" class="mb-1">Modalidad:</label>
                        <select name="codi_moda_mod" class="custom-select" id="s_modalidad" required>
                           <option value="">Seleccione...</option>
                           <option value="O">EXAMEN ORDINARIO</option>
                           <!-- <option value="E">EXONERADO</option> -->
                        </select>
                     </div>
                     <!-- 2021 -->

                     <div class="form-group row mb-1">
                        <label class="col-12 mb-1" for="flag_estu_pos">Estudios escolares culminados:</label>
                        <div class="col-12">
                           <input type="checkbox" class="d-none" name="flag_estu_pos" id="flag_estu_pos" value="S" data-on="Sí" data-off="No" data-onstyle="success" data-offstyle="danger">
                        </div>
                     </div>
					 					
                     <input type="hidden" name="tipo_docu_sol" value="{{ $tipodocu->codi_tabl_det }}">
                     <input type="hidden" name="nume_docu_sol" value="{{ $numedocu }}">
                     <input type="hidden" name="fech_naci_pos" id="fech_naci_pos">
                     <input type="hidden" name="edad_calc_pos" id="edad_calc_pos">
                     <input type="hidden" name="edad_mini_adm" id="edad_mini_adm">
                     <input type="hidden" name="edad_maxi_adm" id="edad_maxi_adm">
                     <input type="hidden" name="requ_estu_adm" id="requ_estu_adm">
                     <input type="hidden" name="mnto_pago_ord" id="mnto_pago_ord" value="{{ $proceso->mnto_proc_adm }}">
					 <input type="hidden" name="mnto_pago_exo" id="mnto_pago_exo" value="{{ $proceso->mnto_exon_adm }}">
					 <input type="hidden" name="codi_proc_adm" id="codi_proc_adm" value="{{ $proceso->codi_proc_adm }}">
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-9">
               <div class="card card-primary card-outline elevation-2">
                  <div class="card-body">
                     <h5 class="card-title">Pago &uacute;nico por derecho de inscripci&oacute;n</h5>					 
                     <strong>Examen Ordinario S/ {{ $proceso->mnto_proc_adm }}</strong><br>
					 <strong>Exonerado S/ {{ $proceso->mnto_exon_adm }}</strong>
                     <hr>

{{--                      <h6 class="card-subtitle mb-2 text-muted">Seleccione la forma de pago:</h6>
                     <div class="custom-control custom-radio mb-2">
                        <input type="radio" class="custom-control-input" id="rbtn1" name="tipo_plat_sol" value="T">
                        <label class="custom-control-label" for="rbtn1">Tarjeta de cr&eacute;dito o d&eacute;bito</label>
                     </div>
                     <div class="custom-control custom-radio mb-3">
                        <input type="radio" class="custom-control-input" id="rbtn2" name="tipo_plat_sol" value="C">
                        <label class="custom-control-label" for="rbtn2">Generar c&oacute;digo de pago
                           <a target="_blank" title="¿Cómo funciona?" href="https://pagoefectivo.pe/pe">&#91;&#63;&#93;</a>
                        </label>
                     </div> --}}

                     <button type="submit" id="btnPagar" class="btn btn-primary btn-block" disabled>
                        <i class="fas fa-shopping-cart pr-2"></i>Continuar
                     </button>

                     <p class="text-justify text-blue mb-0 mt-2">
                        <i class="fas fa-info-circle"></i>
                        <small>Será redirigido hacía la plataforma de pagos en línea.</small>
                     </p>
                   </div>
               </div>

               <div class="form-group float-right">
                  <span id="siteseal">
                     <script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=5jCfrkark6j05q7wCmKRAAu5LFmKF8u9gohqx4oY5qtguI7L9i7JZ54BTj6Y"></script>
                  </span>
               </div>
            </div>
         </div>
      </form>
   </div>
@endsection

@section('scripts')
   <script src="{{ asset('js/moment.min.js') }}"></script>
   <script src="{{ asset('js/daterangepicker.js') }}"></script>
   <script src="{{ asset('js/bootstrap-toggle.min.js') }}"></script>

   <script type="text/javascript">
      // Activa botón Pagar
      function activePay() {
         if ($('#cbox1').prop('checked') &&
             $('#cbox2').prop('checked') &&
             $('#cbox3').prop('checked')) {

            $('#btnPagar').prop('disabled', false);
         } else {
            $('#btnPagar').prop('disabled', true);
         }
      }

      // Especialidades por sección
      function getEspecialidades() {
         var seccion = $('#s_seccion').val();

         if ($.trim(seccion)!='') {
            $.get("{{ url('/getEspecialidades') }}", {seccion: seccion}, function(especialidades) {
               $('#s_especialidad').empty();
               if(especialidades.length!=0){
                  $('#s_especialidad').append("<option value='' data-edad_mini='0' data-edad_maxi='0' data-flag_estu='N'>Seleccione...</option>");

                  $.each(especialidades, function(index, value){
                     $('#s_especialidad').append("<option value='" + value.codi_espe_esp + "' data-edad_mini='" + value.edad_mini_esp + "' data-edad_maxi='" + value.edad_maxi_esp + "' data-flag_estu='" + value.flag_estu_esp + "'>" + value.desc_espe_esp + "</option>");
                  });
               }
            });
         }
      }

      $(document).ready(function(){
         // Inicializa pluggins
         $('#flag_estu_pos').bootstrapToggle();

         // Carga lista de especialidades
         getEspecialidades();

         // Activa botón Pagar
         $('#cbox1, #cbox2, #cbox3').change(function(){
            activePay();
         });

         // Fecha de nacimiento
         $('#nacimiento').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            autoUpdateInput: false,
            minYear: moment().subtract(70, 'years'),
            maxDate: moment().format('DD/MM/YYYY'),
            locale: {
               format: 'DD/MM/YYYY'
            }
         }, function(start, end, label) {
            var fcalc = moment("");
            var edad = fcalc.diff(start, 'years');

            $('#nacimiento').val(start.format('DD/MM/YYYY'));
            $('#fech_naci_pos').val(start.format('YYYY-MM-DD'));
            $('#edad_calc_pos').val(edad);
         });

         // Filtrar especialidades
         $('#s_seccion').change(function() {
            getEspecialidades();
         });

         // Especialidad
         $('#s_especialidad').change(function() {
            $('#edad_mini_adm').val($('#s_especialidad option:selected').data('edad_mini'));
            $('#edad_maxi_adm').val($('#s_especialidad option:selected').data('edad_maxi'));
            $('#requ_estu_adm').val($('#s_especialidad option:selected').data('flag_estu'));
         });
      });
   </script>
@endsection