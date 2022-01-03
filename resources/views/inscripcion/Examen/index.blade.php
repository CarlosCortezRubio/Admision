@extends('layouts.app')

@section('content')
<div class="jumbotron col-md-4 ">
    <div class="row">
        <h1 class="col" id="minutos">{{ session('minutos')}}</h1>
        <h1 class="col">:</h1>
        <h1 class="col" id="segundos">{{ session('segundos')}}0</h1>
    </div>
</div>
   @switch(session('examen'))
       @case('ExamenSHM')
           @include('inscripcion.Examen.ExamenSHM')
           @break
       @default
            @include('inscripcion.Examen.mensaje')
            @break
   @endswitch

@endsection
@section('scripts')
    <script>
        $(document).ready( function() {
            var minutos={{ session('minutos') }};
            var segundos={{ session('segundos') }};
            window.setTimeout(function() {
                $.ajax({
                    type: "GET",
                    url: {{ route('timer') }},
                    data: {'minutos':zfill(minutos,2),'segundos':zfill(segundos,2)}, 
                    success: function(data){
                        if (segundos==0){
                            if (minutos<=0){

                            }else{
                                minutos=minutos-1;
                                segundos=59;
                            }
                        }else{
                            segundos=segundos-1;
                        }
                        $('#minutos').html(zfill(minutos,2));
                        $("#segundos").html(zfill(segundos,2));
                    }
                });
            }, 10000);
        });
    </script>
    <script>
        function zfill(number, width) {
            var numberOutput = Math.abs(number); /* Valor absoluto del número */
            var length = number.toString().length; /* Largo del número */ 
            var zero = "0"; /* String de cero */  
            
            if (width <= length) {
                if (number < 0) {
                     return ("-" + numberOutput.toString()); 
                } else {
                     return numberOutput.toString(); 
                }
            } else {
                if (number < 0) {
                    return ("-" + (zero.repeat(width - length)) + numberOutput.toString()); 
                } else {
                    return ((zero.repeat(width - length)) + numberOutput.toString()); 
                }
            }
        }
        /*$('body').on("contextmenu",function(e){
            return false;
        });*/
        $('body').bind('cut copy paste', function(e){
            e.preventDefault();
        });
    </script>
@endsection