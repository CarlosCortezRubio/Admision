    <div id='title'>
        <hr width="100%" size="5" noshade>
        <h2>Universidad Nacional de Música</h2>
        <h3>Sección de Estudios Superiores</h3>
        <h4>Admisión 2022</h4>
        <h4>Examen de Análisis Armónico</h4>
        <h4>Prueba Tipo</h4>
    </div>
    <form action="{{ route('evaluar', ['id_postulante' => $id_postulante]) }}" id="formevaluar" method="post">
        @csrf
        <div class="form-group">
            <div class='pregunta' id='pregunta1'>
                <h5><label>¿A qué región tonal modula el siguiente fragmento?</label></h5>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col"><img src="{{ asset('imagen/ExamenSAAB/P1.png') }}" alt="" style="height:100%; width:100%;"></div>
                <div class="col-1"></div>
            </div>
            <div class='container'>
                <div class='row'>
                    <div class='col-1'></div>
                    <div class="form-check  col">
                        <input   type="radio" class="respuesta1 form-check-input" value="A" id="0101" name="respuesta1">
                        <label class="respuesta1 form-check-label" for="0101">a) Subdominante</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='row'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input  type="radio" class="respuesta1 form-check-input" value="B" id="0102" name="respuesta1">
                        <label class="respuesta1 form-check-label" for="0102">b) Relativa de la subdominante</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='row'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input  type="radio" class="respuesta1 form-check-input" value="C" id="0103" name="respuesta1">
                        <label class="respuesta1 form-check-label" for="0103">c) Dominante</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='row'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input  type="radio" class="respuesta1 form-check-input" value="D" id="0104" name="respuesta1">
                        <label class="respuesta1 form-check-label" for="0104">d) Relativa de la dominante</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='row'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input  type="radio" class="respuesta1 form-check-input" value="E" id="0105" name="respuesta1">
                        <label class="respuesta1 form-check-label" for="0105">e) Relativa</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>

        <hr width="100%" size="5" noshade>
        <h5>2. Cadencias:</h5>
        <div class="form-group">
            <div class='pregunta' id='pregunta2'>
                <h5><label>¿Qué tipo de cadencia observa en el siguiente fragmento?</label></h5>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col"><img src="{{ asset('imagen/ExamenSAAB/P2.png') }}" alt="" style="height:100%; width:100%;"></div>
                <div class="col-1"></div>
            </div>
            <div class='container'>
                <div class='row'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input  type="radio" class="respuesta2 form-check-input" value="A" id="0201" name="respuesta2">
                        <label class="form-check-label" for="0201">a) Imperfecta (Auténtica imperfecta)</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='row'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input  type="radio" class="respuesta2 form-check-input" value="B" id="0202" name="respuesta2">
                        <label class="form-check-label " for="0202">b) Semicadencia</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='row'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input  type="radio" class="form-check-input respuesta2" value="C" id="0203" name="respuesta2">
                        <label class="form-check-label" for="0203">c) Rota</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='row'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input  type="radio" class="form-check-input respuesta2" value="D" id="0204" name="respuesta2">
                        <label class="form-check-label" for="0204">d) Plagal</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='row'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input  type="radio" class="form-check-input respuesta2" value="E" id="0205" name="respuesta2">
                        <label class="form-check-label" for="0205">e) Perfecta (Auténtica perfecta)</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
        <hr width="100%" size="5" noshade>
        <h5>3. Tipos de acordes:</h5>
        <div class="form-group">
            <div class='pregunta' id='pregunta3'>
                <h5><label>¿Qué tipo de acorde se emplea en el 2do compás del siguiente fragmento?</label></h5>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col"><img src="{{ asset('imagen/ExamenSAAB/P3.png') }}" alt="" style="height:100%; width:100%;"></div>
                <div class="col-1"></div>
            </div>
            <div class='container'>
                <div class='row'>
                    <div class='col'>
                        <div class='row'>
                            <div class='col-1'></div>
                            <div class="form-check col">
                                <input  type="radio" class="respuesta3 form-check-input" value="A" id="0301" name="respuesta3">
                                <label class="respuesta3 form-check-label" for="0301">a) Menor (m)</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-1'></div>
                            <div class="form-check col">
                                <input  type="radio" class="respuesta3 form-check-input" value="B" id="0302" name="respuesta3">
                                <label class="respuesta3 form-check-label" for="0302">b) Disminuido (dis)</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-1'></div>
                            <div class="form-check col">
                                <input  type="radio" class="respuesta3 form-check-input" value="C" id="0303" name="respuesta3">
                                <label class="respuesta3 form-check-label" for="0303">c) Séptima de dominante (7)</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-1'></div>
                            <div class="form-check col">
                                <input  type="radio" class="respuesta3 form-check-input" value="D" id="0304" name="respuesta3">
                                <label class="respuesta3 form-check-label" for="0304">d) Mayor (M)</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-1'></div>
                            <div class="form-check col">
                                <input  type="radio" class="respuesta3 form-check-input" value="E" id="0305" name="respuesta3">
                                <label class="respuesta3 form-check-label" for="0305">e) Menor séptima (m7)</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr width="100%" size="5" noshade>
        <h5>4. Notas extrañas:</h5>
        <div class="form-group">
            <div class='pregunta' id='pregunta4'>
                <h5><label>¿Qué tipos de notas extrañas son los sonidos encerrados en círculo?</label></h5>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col"><img src="{{ asset('imagen/ExamenSAAB/P4.png') }}" alt="" style="height:100%; width:100%;"></div>
                <div class="col-1"></div>
            </div>
            <div class='container'>
                <div class='row'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input  type="radio" class="respuesta4 form-check-input" value="A" id="0401" name="respuesta4">
                        <label class="form-check-label" for="0401">a) Nota de paso y anticipación</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='row'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input  type="radio" class="respuesta4 form-check-input" value="B" id="0402" name="respuesta4">
                        <label class="form-check-label " for="0402">b) Cambiata y retardo</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='row'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input  type="radio" class="form-check-input respuesta4" value="C" id="0403" name="respuesta4">
                        <label class="form-check-label" for="0403">c) Nota de paso y retardo</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='row'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input  type="radio" class="form-check-input respuesta4" value="D" id="0404" name="respuesta4">
                        <label class="form-check-label" for="0404">d) Bordadura y anticipación</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='row'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input  type="radio" class="form-check-input respuesta4" value="E" id="0405" name="respuesta4">
                        <label class="form-check-label" for="0405">e) Apoyatura y retardo</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
    </form>