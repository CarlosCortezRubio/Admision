@extends('layouts.app')

@section('content')
    <div id="timer">
        <div class="jumbotron">
            <div class="">
                <div class="row">
                    <h5>Tiempo restante</h5>
                </div>
                <div class="row">
                    <h5 class="col" id="minutos">{{ session('minutos') }}</h5>
                    <h5 class="col">:</h5>
                    <h5 class="col" id="segundos">{{ session('segundos') }}</h5>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modalconfirmar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
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
    <div class="container-fluid centrar-content col-8 card card-primary card-outline elevation-2">
        <br>
        @switch(session('examen'))
            @case('ExamenT1214A')
                @include('inscripcion.Examen.ExamenT1214A')
            @break
            @case('ExamenT1214B')
                @include('inscripcion.Examen.ExamenT1214B')
            @break
            @case('ExamenT1517B')
                @include('inscripcion.Examen.ExamenT1517B')
            @break
            @case('ExamenT1517C')
                @include('inscripcion.Examen.ExamenT1517C')
            @break

            @case('ExamenA1517B')
                @include('inscripcion.Examen.ExamenA1517B')
            @break
            @case('ExamenA1517C')
                @include('inscripcion.Examen.ExamenA1517C')
            @break
            @case('ExamenA1214A')
                @include('inscripcion.Examen.ExamenA1214A')
            @break
            @case('ExamenA1214B')
                @include('inscripcion.Examen.ExamenA1214B')
            @break
            @case('ExamenSHMA')
                @include('inscripcion.Examen.ExamenSHMA')
            @break
            @case('ExamenSHMB')
                @include('inscripcion.Examen.ExamenSHMB')
            @break
            @case('ExamenSAAA')
                @include('inscripcion.Examen.ExamenSAAA')
            @break
            @case('ExamenSAAB')
                @include('inscripcion.Examen.ExamenSAAB')
            @break
            @case('ExamenSPAA')
                @include('inscripcion.Examen.ExamenSPAA')
            @break
            @case('ExamenSPAB')
                @include('inscripcion.Examen.ExamenSPAB')
            @break
            @case('ExamenSCGA')
                @include('inscripcion.Examen.ExamenSCGA')
            @break
            @case('ExamenSCGB')
                @include('inscripcion.Examen.ExamenSCGB')
            @break
            @case('ExamenSHPA')
                @include('inscripcion.Examen.ExamenSHPA')
            @break
            @case('ExamenSRMA')
                @include('inscripcion.Examen.ExamenSRMA')
            @break
            @case('ExamenSRMB')
                @include('inscripcion.Examen.ExamenSRMB')
            @break
            @case('ExamenSRVA')
                @include('inscripcion.Examen.ExamenSRVA')
            @break
            @case('ExamenSRVB')
                @include('inscripcion.Examen.ExamenSRVB')
            @break
            @case('ExamenPAA')
                @include('inscripcion.Examen.ExamenPAA')
            @break
            @case('ExamenPAB')
                @include('inscripcion.Examen.ExamenPAB')
            @break
            @case('ExamenPAC')
                @include('inscripcion.Examen.ExamenPAC')
            @break
            @case('ExamenPAD')
                @include('inscripcion.Examen.ExamenPAD')
            @break
            @case('ExamenPTA')
                @include('inscripcion.Examen.ExamenPTA')
            @break
            @case('ExamenPTB')
                @include('inscripcion.Examen.ExamenPTB')
            @break
            @case('ExamenPTC')
                @include('inscripcion.Examen.ExamenPTC')
            @break
            @case('ExamenPTD')
                @include('inscripcion.Examen.ExamenPTD')
            @break
            @default
                @include('inscripcion.Examen.mensaje')
                @break
        @endswitch
        <div class='centrar-content'>
            <button class="btn btn-success" data-toggle="modal" data-target="#modalconfirmar">Enviar</button>
        </div>
        <br>
        <br>
    </div>

    @endsection
    @section('scripts')
        <script>
            $(document).ready(function() {
                var minutos = {{ session('minutos') }};
                var segundos = {{ session('segundos') }};

                function timer() {
                    window.setTimeout(function() {
                        $.ajax({
                            type: "GET",
                            url: "{{ route('timer') }}",
                            data: {
                                'minutos': minutos,
                                'segundos': segundos
                            },
                            success: function(data) {
                                if (segundos == 0) {
                                    if (minutos <= 0) {
                                        document.getElementById("formevaluar").submit();
                                    } else {
                                        minutos = minutos - 1;
                                        segundos = 59;
                                    }
                                } else {
                                    segundos = segundos - 1;
                                }
                                $('#minutos').html(zfill(minutos, 2));
                                $("#segundos").html(zfill(segundos, 2));
                                timer();
                            }
                        });
                    }, 1000);
                }
                timer();
                cargaraudio();

                $("audio").each(function(index, element) {
                    $(element.getElementById).change(function() {
                        alert(element.ended);
                    });
                });
                $('#audioreprod').modal('toggle')
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
            $('body').on("contextmenu", function(e) {
                return false;
            });
            $('body').bind('cut copy paste', function(e) {
                e.preventDefault();
            });

            function cargaraudio() {
                $("audio").each(function(index, element) {
                    //var arr=element.currentSrc.split('/');
                    //var archivo=arr[arr.length-1];
                    //alert(typeof());
                    $.ajax({
                        type: "GET",
                        url: "{{ route('CargarAudio') }}",
                        data: {
                            "archivo": element.currentSrc
                        },
                        success: function(data) {
                            //alert(data);
                            if (data == 'N') {
                                $(element).prop("disabled", true);
                                $(element).prop("src", '');
                            }
                        }
                    });
                });
            }

            function reproducir(id) {

                if ($(id + " audio")[0].ended) {
                    cargaraudio()
                } else {
                    if (!$(id + " audio").prop("disabled")) {
                        if ($(id + " audio")[0].paused) {
                            $.ajax({
                                type: "GET",
                                url: "{{ route('InsertarAudio') }}",
                                data: {
                                    "archivo": $(id + " audio")[0].currentSrc
                                },
                                success: function(data) {
                                    $(id + " audio")[0].play();
                                    $(id + " a").html(
                                        '<i class="fa fa-pause-circle" style="color:greenyellow;font-size: 33px;" aria-hidden="true"></i>'
                                    );
                                }
                            });
                        } else {
                            $(id + " audio")[0].pause();
                            $(id + " a").html(
                                '<i class="fa fa-play-circle" style="color:greenyellow;font-size: 33px;" aria-hidden="true"></i>'
                            );
                        }
                    }
                }
            }
        </script>
    @endsection

    @section('styles')
        <style>
            .form-check {
                display: block;
                padding: 6px;
                padding-left: 30px;
                border-radius: 6px;
                border: solid #dde7e8;
            }

            .form-check:hover {
                background-color: rgb(241, 239, 250);
                border: solid rgb(114, 166, 245);
            }

            .titlecenter {
                text-align: center;
                font-weight: 700;
            }

            #title {
                text-align: center;
            }

            .text {
                padding: 50px;
            }


            #timer {
                width: 10%;
                height: 15%;
                border-width: 5px;
                border-style: solid;
                border-color: black;
                border-radius: 20px;
                background-color: #1072BA;

                right: 0px;
                position: fixed;
                text-align: center;


            }

            #timer .jumbotron {

                width: 100%;
                height: 100%;
                border-width: 5px;
                border-style: solid;
                border-color: black;
                border-radius: 20px;
                background-color: white;


            }

            #timer .jumbotron h5 {
                font-size: 1vw;
            }

        </style>
    @endsection
