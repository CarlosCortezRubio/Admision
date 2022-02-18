<div id='title'>
    <h2>Universidad Nacional de Música</h2>
    <h4>Sección de Estudios Superiores</h4>
    <h5>Admisión 2022</h5>
    <h5>Prueba de audioperceptiva</h5>
</div>
<hr width="100%" size="5" noshade>
<form action="{{ route('evaluar', ['id_postulante' => $id_postulante,'cod_examen' => session('examen')]) }}" id="formevaluar" method="post">
    @csrf
    <h5>1. Dictado a dos voces. </h5>
    <h5>Tonalidad: Do menor</h5>
    <div class='centrar-content col'>
        <div id="reproductor1" class="centrar-content ">
            <audio>
                <source src="{{ asset('audio/ExamenSPAA/P1.mp3') }}" type="audio/mp3">
            </audio>
            <a href="javascript:reproducir('#reproductor1');"><i class="fa fa-play-circle"
                    style="color:greenyellow;font-size: 33px;" aria-hidden="true"></i></a>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class='pregunta' id='pregunta1'>
            <h5><label>Marque la opción que considere corresponde al fragmento escuchado</label></h5>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check  col">
                    <input  type="radio" class="respuesta1 form-check-input" value="A" id="0101"
                        name="respuesta1">
                    <label class="respuesta1 form-check-label justify-content-center" for="0101"> <img
                            src="{{ asset('imagen/ExamenSPAA/1-1.png') }}" alt="" style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta1 form-check-input" value="B" id="0102"
                        name="respuesta1">
                    <label class="respuesta1 form-check-label justify-content-center" for="0102"> <img
                            src="{{ asset('imagen/ExamenSPAA/1-2.png') }}" alt="" style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta1 form-check-input" value="C" id="0103"
                        name="respuesta1">
                    <label class="respuesta1 form-check-label justify-content-center" for="0103"> <img
                            src="{{ asset('imagen/ExamenSPAA/1-3.png') }}" alt="" style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta1 form-check-input" value="D" id="0104"
                        name="respuesta1">
                    <label class="respuesta1 form-check-label justify-content-center" for="0104"> <img
                            src="{{ asset('imagen/ExamenSPAA/1-4.png') }}" alt="" style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
    <hr width="100%" size="5" noshade>
    <h5>2. Reconocimiento de progresión armónica</h5>
    <h5>Tonalidad:(falto especificar en el pdf)</h5>
    <div class='centrar-content col'>
        <div id="reproductor2" class="centrar-content ">
            <audio>
                <source src="{{ asset('audio/ExamenSPAA/P2.mp3') }}" type="audio/mp3">
            </audio>
            <a href="javascript:reproducir('#reproductor2');"><i class="fa fa-play-circle"
                    style="color:greenyellow;font-size: 33px;" aria-hidden="true"></i></a>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class='pregunta' id='pregunta2'>
            <h5><label>Marque la opción que considere corresponde a la progresión armónica escuchada. </label></h5>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta2 form-check-input" value="A" id="0201" value="1"
                        name="respuesta2">
                    <label class="respuesta2 form-check-label justify-content-center" for="0201">I - VII6 - I6 - IV - II6 - V7</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta2 form-check-input" value="B" id="0202" value="2"
                        name="respuesta2">
                    <label class="respuesta2 form-check-label justify-content-center" for="0202">I - V6/4 - I6 - VI - II - V7</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta2" value="C" id="0203" value="3"
                        name="respuesta2">
                    <label class="respuesta2 form-check-label justify-content-center" for="0203">I - VII6 - VI - I6/4 - II6 - V7</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta2" value="D" id="0204" value="4"
                        name="respuesta2">
                    <label class="respuesta2 form-check-label justify-content-center" for="0204">I - V6/4 - I6 - IV6 - II - V7</label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
    <hr width="100%" size="5" noshade>
    <h5>3. Dictado a dos voces</h5>
    <h5>Tonalidad: Re mayor </h5>
    <div class='centrar-content col'>
        <div id="reproductor3" class="centrar-content ">
            <audio>
                <source src="{{ asset('audio/ExamenSPAA/P3.mp3') }}" type="audio/mp3">
            </audio>
            <a href="javascript:reproducir('#reproductor3');"><i class="fa fa-play-circle"
                    style="color:greenyellow;font-size: 33px;" aria-hidden="true"></i></a>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class='pregunta' id='pregunta3'>
            <h5><label>3. Marque la opción que considere corresponde al fragmento escuchado </label></h5>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col'>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input" value="A" id="0301"
                                name="respuesta3">
                            <label class="respuesta3 form-check-label justify-content-center" for="0301"> <img
                                    src="{{ asset('imagen/ExamenSPAA/3-1.png') }}" alt="" style="height:100%; width:100%;"></label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input" value="B" id="0302"
                                name="respuesta3">
                            <label class="respuesta3 form-check-label justify-content-center" for="0302"> <img
                                    src="{{ asset('imagen/ExamenSPAA/3-2.png') }}" alt="" style="height:100%; width:100%;"></label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input" value="C" id="0303"
                                name="respuesta3">
                            <label class="respuesta3 form-check-label justify-content-center" for="0303"> <img
                                    src="{{ asset('imagen/ExamenSPAA/3-3.png') }}" alt="" style="height:100%; width:100%;"></label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input" value="D" id="0304"
                                name="respuesta3">
                            <label class="respuesta3 form-check-label justify-content-center" for="0304"> <img
                                    src="{{ asset('imagen/ExamenSPAA/3-4.png') }}" alt="" style="height:100%; width:100%;"></label>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <hr width="100%" size="5" noshade>
    <h5>4. Reconocimiento de progresión armónica. </h5>
    <h5>Tonalidad: (falto especificar en el pdf)</h5>
    <div class='centrar-content col'>
        <div id="reproductor4" class="centrar-content ">
            <audio>
                <source src="{{ asset('audio/ExamenSPAA/P4.mp3') }}" type="audio/mp3">
            </audio>
            <a href="javascript:reproducir('#reproductor4');"><i class="fa fa-play-circle"
                    style="color:greenyellow;font-size: 33px;" aria-hidden="true"></i></a>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class='pregunta' id='pregunta4'>
            <h5><label>Marque la opción que considere corresponde a la progresión armónica escuchada.</label></h5>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta4 form-check-input" value="A" id="0401" value="1"
                        name="respuesta4">
                    <label class="respuesta4 form-check-label justify-content-center" for="0401">I - VII6 - I6 - IV - II6 - V7</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta4 form-check-input" value="B" id="0402" value="2"
                        name="respuesta4">
                    <label class="respuesta4 form-check-label justify-content-center" for="0402">I - V6/4 - I6 - VI - II - V7</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta4" value="C" id="0403" value="3"
                        name="respuesta4">
                    <label class="respuesta4 form-check-label justify-content-center" for="0403">I - VII6 - VI - I6/4 - II6 - V7</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta4" value="D" id="0404" value="4"
                        name="respuesta4">
                    <label class="respuesta4 form-check-label justify-content-center" for="0404">I - V6/4 - I6 - IV6 - II - V7</label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
</form>
<div class="modal fade" id="audioreprod" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="text-align: center">
                <h4>Los audios mostrados en este examen se reproducirán solamente una vez.</h4>
            </div>
            <div class="modal-footer centrar-content">
                <button type="submit" class="btn btn-success" form="formularioupd">Aceptar</button>
            </div>
        </div>
    </div>
</div>
