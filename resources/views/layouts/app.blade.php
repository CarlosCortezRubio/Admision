<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>Conservatorio Nacional de Música - Admisión</title>

      <!-- Fonts -->
      <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
      <!-- Styles -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/toastr.min.css') }}">

      @yield('styles')

      <style>
         body::after {
            content: "";
            background-image: url("{{ asset('img/background.png') }}");
            opacity:0.1;
            position:fixed;
            top:0;
            bottom:0;
            right:0;
            left:0;
            z-index:-1;
         }
      </style>

      <!-- Icon -->
      <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
      <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
   </head>
<body>
   <div id="app">
      <header>
         <nav class="navbar navbar-expand navbar-dark bg-primary shadow-sm">
            <div class="container">
               <a class="navbar-brand" href="http://www.unm.edu.pe/" target="_blank">
                  <img src="{{ asset('img/logo_cnm_white.png') }}" alt="Conservatorio Nacional de M&uacute;sica" style="height:42px;">
               </a>

               <ul class="navbar-nav mr-auto"></ul>

               <ul class="navbar-nav ml-auto">
                  @if ( !Route::is('register') )
                     @include('partials.guia')
                  @endif

                  @auth
                     @include('partials.user-panel')
                  @else
                     @if ( Route::is('register') )
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('login') }}" data-toggle="tooltip" title="Iniciar sesión">
                              <i class="fas fa-sign-in-alt"></i>
                              <span class="d-none d-md-inline-block pl-1">Iniciar sesi&oacute;n</span>
                           </a>
                        </li>
                     @else
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('register') }}" data-toggle="tooltip" title="Regístrese">
                              <i class="far fa-address-book"></i>
                              <span class="d-none d-md-inline-block pl-1">Reg&iacute;strese</span>
                           </a>
                        </li>
                     @endif
                  @endauth
               </ul>
            </div>
         </nav>
      </header>

      <main class="py-4">
         @if ($proceso)
			
		<!--<div class="container d-flex justify-content-center align-items-center" style="height:200px;">
               <div class="card card-primary card-outline text-center mx-auto elevation-2">
                  <div class="card-body">
                     <h5>
                        El proceso de admisi&oacute;n ha finalizado.
                        <br>Puede ingresar
                        <a href="http://www.unm.edu.pe/proceso-de-admision/" target="_blank">aqu&iacute;</a>
                        para conocer m&aacute;s sobre este proceso.
                     </h5>
                  </div>
               </div>
            </div>-->
            <div class="container px-2">
               <div class="mx-auto" style="height:40px;">
                  <hr>
                  <h4 class="text-center" style="position:relative; top:-40px;">
                     <span class="badge badge-secondary p-3" >Proceso de Admisión {{ $proceso->nume_proc_adm }}</span>
                  </h4>
               </div>
            </div>

            @yield('content')

         @else
            <div class="container d-flex justify-content-center align-items-center" style="height:200px;">
               <div class="card card-primary card-outline text-center mx-auto elevation-2">
                  <div class="card-body">
                     <h5>
                        El proceso de admisi&oacute;n ha finalizado.
                        <br>Puede ingresar
                        <a href="http://www.unm.edu.pe/proceso-de-admision/" target="_blank">aqu&iacute;</a>
                        para conocer m&aacute;s sobre este proceso.
                     </h5>
                  </div>
               </div>
            </div>
			@yield('content')
         @endif 
      </main>

      <footer class="text-center mt-2">
         <div class="container">
            <p>
               <strong>Copyright &copy; {{ date('Y') }} - <a href="http://www.unm.edu.pe/" target="_blank">Conservatorio Nacional de Música</a>.</strong> Todos los derechos reservados.
            </p>
            <br>
            {{--<p align="center" style="color:gray;"><small>Desarrollado por:</small><br>
               <a href="https://devcosol.pe" target="_blank">
                  <img src="{{ asset('img/devco.png') }}" style="width:110px;">
               </a>
            </p>--}}
         </div>
      </footer>
   </div>

   <!-- Scripts -->
   <script src="{{ asset('js/jquery.min.js') }}"></script>
   <script src="{{ asset('js/popper.min.js') }}"></script>
   <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('js/app.js') }}"></script>
   <script src="{{ asset('js/adminlte.min.js') }}"></script>
   <script src="{{ asset('js/toastr.min.js') }}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js"></script>
   <script>
      $(document).ready(function() {
        $('.dial').knob({
          'min':0,
          'max':100,
          'width':"100%",
          'height':"100%",
          'fgColor':"#66CC66",
          'angleOffset':-125,
          'angleArc':250,
          'rotation':'anticlockwise',
          'release':function(v) {$("p").text(v);},
          'readOnly':true
        });
      });
    </script>
   <!-- Funciones generales -->
   <script type="text/javascript">
      $(document).ready( function(){
         @if (session('success'))
            toastr.options = {
               "progressBar": true,
               "positionClass": "toast-bottom-right",
            }
            toastr.success("{{ session('success') }}");
         @endif
         @if (session('status'))
            toastr.options = {
               "progressBar": true,
               "positionClass": "toast-bottom-right",
            }
            toastr.success("{{ session('status') }}");
         @endif
		 @if (session('xpopup'))
			$('#msgView').modal('show');
		@endif
      });
   </script>

   @yield('scripts')
</body>
</html>
