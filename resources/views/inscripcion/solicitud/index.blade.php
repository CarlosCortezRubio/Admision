@extends('layouts.app')

@section('content')
   @if (session()->has('message'))
      @include('inscripcion.solicitud.mensaje')

   @else
	    @php
			$bloqueoManualInscripcion = false;
		@endphp
	  @if($bloqueoManualInscripcion == false)
      <div class="container">
         <div class="row">
            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
               @include('inscripcion.solicitud.guia')
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">

               <div class="card card-primary card-outline elevation-2">
                  <div class="card-header">
                     <strong>Registro del postulante</strong>
                  </div>
                  <div class="card-body">
                     <form method="POST" action="{{ url('inscripcion/solicitud') }}">
                        @csrf

                        <div class="form-group selectWithIcon">
                           <select name="tipo_docu_sol" class="custom-select @error('tipo_docu_sol') is-invalid @enderror" autofocus required>
                              <option value="">Tipo de documento de identidad</option>
                              @foreach ($tDocumentos as $tdata)
                                 <option value="{{$tdata->codi_tabl_det}}">{{$tdata->abre_tabl_det}}</option>
                              @endforeach
                           </select>

                           @error('tipo_docu_sol')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror

                           <i class="fas fa-tag fa-lg" aria-hidden="true"></i>
                        </div>

                        <div class="form-group inputWithIcon">
                           <input type="text" name="nume_docu_sol" class="form-control @error('nume_docu_sol') is-invalid @enderror" placeholder="Número de documento de identidad" required>

                           @error('nume_docu_sol')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror

                           <i class="fas fa-id-card fa-lg" aria-hidden="true"></i>
                        </div>

                        <div class="form-group inputWithIcon">
                           <input type="email" name="mail_soli_sol" class="form-control @error('mail_soli_sol') is-invalid @enderror" value="{{ old('mail_soli_sol') }}" required placeholder="Correo electrónico">

                           @error('mail_soli_sol')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror

                           <i class="fas fa-envelope fa-lg" aria-hidden="true"></i>
                        </div>

                        <div class="form-group float-right">
                           <a href="{{ route('login') }}" class="card-link">
                              <strong>&#191;Ya te encuentras registrado&#63;</strong>
                           </a>
                        </div>

                        <div class="form-group">
                           <button type="submit" class="btn btn-primary btn-block">
                              <i class="fas fa-share-square pr-2"></i>Registrarme
                           </button>
                        </div>

                        <p class="text-justify text-blue mb-0">
                           <i class="fas fa-info-circle"></i>
                           <small>Recibir&aacute;s un enlace en el correo electr&oacute;nico proporcionado, desde el cual podr&aacute;s realizar el pago por derecho de inscripci&oacute;n.</small>
                        </p>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
	  @endif
   @endif
@endsection

@section('scripts')
   {{-- <scriptsrc="https://www.google.com/recaptcha/api.js?render=config('app.captcha_key') }}"></script>
   <script>
      grecaptcha.ready(function() {
          grecaptcha.execute("{{ config('app.captcha_key') }}", {action: '/'}).then(function(token) {

          });
      });
   </script> --}}
   <script type="text/javascript">
      function setGuia(){
         var seccion = $('#guiaSeccion').val();

         if (seccion == '05001'){
            $('#guiaVideo').prop('src', "{{ config('app.url_guia.superior.video') }}");
            $('#guiaPDF').prop('href', "{{ config('app.url_guia.superior.pdf') }}");

         } else if (seccion == '05002'){
            $('#guiaVideo').prop('src', "{{ config('app.url_guia.post_escolar.video') }}");
            $('#guiaPDF').prop('href', "{{ config('app.url_guia.post_escolar.pdf') }}");

         } else if (seccion == '05003'){
            $('#guiaVideo').prop('src', "{{ config('app.url_guia.escolar.video') }}");
            $('#guiaPDF').prop('href', "{{ config('app.url_guia.escolar.pdf') }}");
         }
      }

      $(document).ready(function(){
         $('#guiaSeccion').change(function() {
            setGuia();
         });
      });
   </script>
@endsection