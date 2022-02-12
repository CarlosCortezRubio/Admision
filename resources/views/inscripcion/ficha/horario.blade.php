<div class='container'>
    <div class='row centrar-content'>
        @if ($horarios->count() == 0)
            <div class="container justify-content-center align-items-center">
                <div class="card card-primary card-outline elevation-2">
                    <div class="card-body" style="text-align: center;">
                        <p>Usted ya no tiene exámenes restantes por resolver. Cierre sesión</p>
                    </div>
                </div>
            </div>
        @else
            @foreach ($horarios as $k => $v)
                <div class="col-1"></div>
                <div class="col-5 card card-primary card-outline elevation-2">
                    <div id='title'>
                        <hr width="100%" size="5" noshade>
                        <h5 class="centrar-content">{{ $v->descripcion }}</h5>
                        <hr width="100%" size="5" noshade>
                    </div>
                    <div class='container'>
                       {{--@if ($v->codi_secc_sec=='05001')
                        <div class='row'>
                            <div class="centrar-content container">
                                <!-- <h6 cla>Nota</h6>-->
                                <input type="text" value="{{ $v->nota }}" class="dial">
                            </div>
                        </div>
                        @endif--}}
                        <div class='row'>
                            <div class="card-columns">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fa fa-calendar" aria-hidden="true"> Fecha de
                                            resoluci&oacute;n:</i>
                                        <p class="card-text">{{ $v->fecha_resol }}</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fa fa-laptop" aria-hidden="true"> Modalidad:</i>
                                        <p class="card-text">@if ($v->modalidad == 'P') Presencial @elseif($v->modalidad == 'V') Virtual @endif </p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fa fa-circle-o-notch" aria-hidden="true"> Tiempo de
                                            resoluci&oacute;n:</i>
                                        <p class="card-text">{{ $v->minutos }} min.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-columns">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fa fa-clock-o" aria-hidden="true"> Hora de Inicio:</i>
                                        <p class="card-text">{{ $v->hora_resol }}</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fa fa-clock-o" aria-hidden="true"> Estado:</i>
                                        <p class="card-text">
                                            @switch($v->estado)
                                                @case('P')
                                                    Pendiente
                                                @break
                                                @case('E')
                                                    Resuelto
                                                @break
                                                @default
                                                    Estado Indefinido
                                            @endswitch
                                        </p>
                                    </div>
                                </div>
                                @if ($v->modalidad == 'P')
                                    <div class="card">
                                        <div class="card-body">
                                            <i class="fa fa-clock-o" aria-hidden="true"> Aula:</i>
                                            <p class="card-text">{{ $v->aula }}</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        @if ($v->flag_jura == 'N' && $v->fecha_comp <= Carbon\Carbon::now() && $v->estado == 'P' && ($v->req_estado == 'E' || $v->req_estado == null || $v->req_estado == 'I'))
                            <form action="{{ route('BeginExamen') }}" method="POST">
                                @csrf
                                <input type="text" class="d-none" name='id_examen'
                                    value="{{ $v->id_examen }}">
                                <input type="text" class="d-none" name='id_postulante'
                                    value="{{ $v->id_postulante }}">
                                <input type="text" class="d-none" name='id_programacion_examen'
                                    value="{{ $v->id_programacion_examen }}">
                                <div style="padding-bottom: 20px" class='centrar-content'>
                                    <button type="submit" class="btn btn-success">Ingresar</button>
                                </div>
                            </form>
                        @else
                            @if ($v->flag_jura != 'S')
                                <div style="padding-bottom: 20px" class='centrar-content'>
                                    <button disabled class="btn btn-success">Ingresar</button>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
