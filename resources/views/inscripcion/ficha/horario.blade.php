<div class='container'>
    <div class='row'>
        @if (!$horarios)
        <div class="container justify-content-center align-items-center">
            <div class="card card-primary card-outline elevation-2">
               <div class="card-body">
                  <p>No existe horario disponible para este periodo</p>
               </div>
            </div>
         </div>
        @else
        <div class="container">
            
        
            @foreach ($horarios as $k => $v)
                <div class="col card card-primary card-outline elevation-2">
                    <div id='title'>
                        <hr width="100%" size="5" noshade>
                        <h5 class="centrar-content">{{ $v->descripcion }}</h5>
                        <hr width="100%" size="5" noshade>
                    </div>
                    <div class='container'>
                        <div class='row'>
                            <div class='col'>
                                <div class="centrar-content container">
                                    <!-- <h6 cla>Nota</h6>-->
                                    <input type="text" value="{{ $v->nota }}" class="dial">
                                </div>
                            </div>
                            <div class='col'>
                                <div class="card-columns">
                                    <div class="card">
                                        <div class="card-body">
                                            <i class="fa fa-calendar" aria-hidden="true"> Fecha de resoluci&oacute;n:</i>
                                            <p class="card-text">{{ $v->fecha_resol }}</p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <i class="fa fa-laptop" aria-hidden="true"> Modalidad:</i>
                                            <p class="card-text">@if ($v->modalidad=='P') Presencial @elseif($v->modalidad=='V') Virtual @endif </p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <i class="fa fa-circle-o-notch" aria-hidden="true"> Tiempo de resoluci&oacute;n:</i>
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
                                                   @case('R')
                                                       Resuelto
                                                       @break
                                                   @default
                                                       Estado Indefinido
                                               @endswitch
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                       @if ($v->flag_jura=='N' && $v->fecha_comp<=Carbon\Carbon::now() && $v->estado=='P')
                       <form action="{{ route('BeginExamen') }}" method="POST">
                            <input type="text" class="d-none" name='id_examen' value="{{ $v->id_examen }}"> 
                            <div style="padding-bottom: 20px" class='centrar-content'>
                                <button type="submit" class="btn btn-success">Ingresar</button>
                            </div>
                        </form>
                       @endif
                        
                    </div>
                </div>
                <br>
            @endforeach
        </div>
        @endif
        <div class='col-1'></div>
    </div>
</div>
