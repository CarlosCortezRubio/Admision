@extends('layouts.app')

@section('content')
<div class="jumbotron col-md-4 ">
    <div class="row">
        <h1 class="col" id="minutos">{{ session('minutos')}}</h1>
        <h1 class="col">:</h1>
        <h1 class="col" id="segundos">{{ session('segundos')}}</h1>
    </div>
</div>
<div class="modal fade" id="modalconfirmar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title">Eliminar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <p>¿Desea grabar las respuesta de este examen?</p>
            </div>
            <div class="modal-footer centrar-content">
                <button type="submit" class="btn btn-success" form="formevaluar">Aceptar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
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
            function timer(){
                window.setTimeout(function() {
                    $.ajax({
                        type: "GET",
                        url: "{{ route('timer') }}",
                        data: {'minutos':minutos,'segundos':segundos}, 
                        success: function(data){
                            if (segundos==0){
                                if (minutos<=0){
                                    document.getElementById("formevaluar").submit();
                                }else{
                                    minutos=minutos-1;
                                    segundos=59;
                                }
                            }else{
                                segundos=segundos-1;
                            }
                            $('#minutos').html(zfill(minutos,2));
                            $("#segundos").html(zfill(segundos,2));
                            timer();
                        }
                    });
                }, 1000);
            }   
            timer();
            cargaraudio();
           
            $("audio").each(function (index, element) {
                $(element.getElementById).change(function(){
                    alert(element.ended);
                });
            });
        });
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
        $('body').on("contextmenu",function(e){
            return false;
        });
        $('body').bind('cut copy paste', function(e){
            e.preventDefault();
        });
        function cargaraudio(){
            $("audio").each(function (index, element) {
                //var arr=element.currentSrc.split('/');
                //var archivo=arr[arr.length-1];
                //alert(typeof());
                $.ajax({
                    type: "GET",
                    url: "{{ route('CargarAudio') }}",
                    data: {"archivo":element.currentSrc}, 
                    success: function(data){
                        //alert(data);
                        if (data=='S') {
                            $(element.getElementById).prop("disabled", true);
                            $(element.getElementById).prop("src", '');
                        }
                    }
                });
            });
        }
        function reproducir(id){
           
             if ($(id+" audio")[0].ended) {
                cargaraudio()
            } else {
                if($(id+" audio")[0].paused){
                    $.ajax({
                        type: "GET",
                        url: "{{ route('InsertarAudio') }}",
                        data: {"archivo":$(id+" audio")[0].currentSrc}, 
                        success: function(data){
                            $(id+" audio")[0].play();
                            $(id+" a").html('<i class="fa fa-pause-circle" style="color:greenyellow;font-size: 33px;" aria-hidden="true"></i>');
                        }
                    });
                }else{
                    $(id+" audio")[0].pause();
                    $(id+" a").html('<i class="fa fa-play-circle" style="color:greenyellow;font-size: 33px;" aria-hidden="true"></i>');
                }
            }
        }
        
    </script>
@endsection