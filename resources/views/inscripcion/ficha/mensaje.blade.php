@extends('layouts.app')

@section('content')
{{-- {{dd(session()->has('message'))}} --}}
   @if ($message)
      @if ($message == 'solicitud_generada')
         <div class="container justify-content-center align-items-center">
            <div class="card card-primary card-outline elevation-2">
               <div class="card-body">
                  <p>Ya existe una solicitud con pago pendiente para este documento de identidad y correo electr&oacute;nico.<br>
                     Detalle para realizar el pago:</p>
                  <div class="embed-responsive embed-responsive-16by9"> 
                     <iframe id="enlacePago" class="embed-responsive-item" src="{{$link}}" allowfullscreen></iframe>
                  </div>
               </div>
            </div>
         </div>
      @else
         <div class="container d-flex justify-content-center align-items-center" style="height:300px;">
            <div class="card card-primary card-outline text-center mx-auto elevation-2">
               <div class="card-body">
                  <h5>
                     @if ($message == 'solicitud_no_pagada')
                        No existe una solicitud de inscripci&oacute;n pagada con este documento de identidad. Deber&aacute;s registrarte y/o pagar el decho de inscripci&oacute;n.

                     @elseif ($message == 'solicitud_no_exists')
                        No existe una solicitud de inscripci&oacute;n con este documento de identidad. Deber&aacute;s registrarte.

                    @endif
                  </h5>
               </div>
            </div>
         </div>
      @endif
   @endif   
@endsection