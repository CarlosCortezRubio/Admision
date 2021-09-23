@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-7">
           <form action="{{ url('inscripcion/pago/generarCredenciales') }}" method="POST">
              @csrf
              <div class="card">
                  <div class="card-body">
                     <h5 class="card-title">Pago por derecho de inscripci&oacute;n</h5>
                     <hr>
                     <p class="card-text">En esta secci&oacute;n se procesar&aacute; el pago de acuerdo a la plataforma seleccionada.</p>

                     <input type="hidden" name="tipodocu" value="{{ $tipodocu }}">
                     <input type="hidden" name="numedocu" value="{{ $numedocu }}">

                     <button type="submit" class="btn btn-primary btn-block">
                        <i class="fas fa-check pr-2"></i>Efectuar pago
                    </button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
@endsection
