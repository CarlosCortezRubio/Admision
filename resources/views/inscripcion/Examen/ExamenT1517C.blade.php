<div id='title'>
    <hr width="100%" size="5" noshade>
    <h2>Conservatorio Nacional de Música</h2>
    <h2>Admisión 2022</h2>
    <h4>Sección de Estudios Preparatorios</h4>
    <h4>Programa Escolar de 12 a 14 años</h4>
    <h5>Examen de Teoría Musical</h5>
    <hr width="100%" size="5" noshade>
</div>
<form action="{{ route('evaluar', ['id_postulante' => $id_postulante]) }}" id="formevaluar" method="post">
    @csrf
    <h5>1. Clasificación y calificación de intervalos simples:</h5>
    <h5>Marque la opción que considere correcta.</h5>
    <div class="row">
        <div class="col-1"></div>
        <div class="col"><img src=" {{ asset('imagen/ExamenT1517C/P1A.png') }}" alt=""
                style="height:100%; width:100%;"></div>
        <div class="col-1"></div>
    </div>
    <br>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta1'>
            <h3><label><br>
                    a)
                </label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col-6'>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta1 form-check-input" value="A" id="0101" name="respuesta1">
                        <label class="respuesta1 form-check-label justify-content-center" for="0101">9A</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta1 form-check-input" value="B" id="0102" name="respuesta1">
                        <label class="respuesta1 form-check-label justify-content-center" for="0102">9d</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta1 form-check-input" value="C" id="0103" name="respuesta1">
                        <label class="respuesta1 form-check-label justify-content-center" for="0103">9m</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta1 form-check-input" value="D" id="0104" name="respuesta1">
                        <label class="respuesta1 form-check-label justify-content-center" for="0104">9M</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta2'>
            <h3><label><br>
                    b)
                </label></h3>
        </div>
        <div class='col'>
            <div class="row">
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta2 form-check-input" value="A" id="0201" name="respuesta2">
                        <label class="respuesta2 form-check-label justify-content-center" for="0201">11A</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta2 form-check-input" value="B" id="0202" name="respuesta2">
                        <label class="respuesta2 form-check-label justify-content-center" for="0202">12d</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta2 form-check-input" value="C" id="0203" name="respuesta2">
                        <label class="respuesta2 form-check-label justify-content-center" for="0203">12A</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta2 form-check-input" value="D" id="0204" name="respuesta2">
                        <label class="respuesta2 form-check-label justify-content-center" for="0204">12J</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta3'>
            <h3><label><br>c)</label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta3 form-check-input" value="A" id="0301" name="respuesta3">
                        <label class="respuesta3 form-check-label justify-content-center" for="0301">4d</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta3 form-check-input" value="B" id="0302" name="respuesta3">
                        <label class="respuesta3 form-check-label justify-content-center" for="0302">4A</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta3 form-check-input" value="C" id="0303" name="respuesta3">
                        <label class="respuesta3 form-check-label justify-content-center" for="0303">4J</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta3 form-check-input" value="D" id="0304" name="respuesta3">
                        <label class="respuesta3 form-check-label justify-content-center" for="0304">3A</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta4'>
            <h3><label><br>d)</label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta4 form-check-input" value="A" id="0401" name="respuesta4">
                        <label class="respuesta4 form-check-label justify-content-center" for="0401">9m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta4 form-check-input" value="B" id="0402" name="respuesta4">
                        <label class="respuesta4 form-check-label justify-content-center" for="0402">8J</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta4 form-check-input" value="C" id="0403" name="respuesta4">
                        <label class="respuesta4 form-check-label justify-content-center" for="0403">8A</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta4 form-check-input" value="D" id="0404" name="respuesta4">
                        <label class="respuesta4 form-check-label justify-content-center" for="0404">8d</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col"><img src=" {{ asset('imagen/ExamenT1517C/P1B.png') }}" alt=""
                style="height:100%; width:100%;"></div>
        <div class="col-1"></div>
    </div>
    <br>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta5'>
            <h3><label><br>
                    e)
                </label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col-6'>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta5 form-check-input" value="A" id="0501" name="respuesta5">
                        <label class="respuesta5 form-check-label justify-content-center" for="0501">11J</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta5 form-check-input" value="B" id="0502" name="respuesta5">
                        <label class="respuesta5 form-check-label justify-content-center" for="0502">11d</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta5 form-check-input" value="C" id="0503" name="respuesta5">
                        <label class="respuesta5 form-check-label justify-content-center" for="0503">11A</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta5 form-check-input" value="D" id="0504" name="respuesta5">
                        <label class="respuesta5 form-check-label justify-content-center" for="0504">10A</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta6'>
            <h3><label><br>
                    f)
                </label></h3>
        </div>
        <div class='col'>
            <div class="row">
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta6 form-check-input" value="A" id="0601" name="respuesta6">
                        <label class="respuesta6 form-check-label justify-content-center" for="0601">5A</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta6 form-check-input" value="B" id="0602" name="respuesta6">
                        <label class="respuesta6 form-check-label justify-content-center" for="0602">7m</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta6 form-check-input" value="C" id="0603" name="respuesta6">
                        <label class="respuesta6 form-check-label justify-content-center" for="0603">6m</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta6 form-check-input" value="D" id="0604" name="respuesta6">
                        <label class="respuesta6 form-check-label justify-content-center" for="0604">6M</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta7'>
            <h3><label><br>g)</label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta7 form-check-input" value="A" id="0701" name="respuesta7">
                        <label class="respuesta7 form-check-label justify-content-center" for="0701">10M</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta7 form-check-input" value="B" id="0702" name="respuesta7">
                        <label class="respuesta7 form-check-label justify-content-center" for="0702">9m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta7 form-check-input" value="C" id="0703" name="respuesta7">
                        <label class="respuesta7 form-check-label justify-content-center" for="0703">10m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta7 form-check-input" value="D" id="0704" name="respuesta7">
                        <label class="respuesta7 form-check-label justify-content-center" for="0704">9M</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta8'>
            <h3><label><br>h)</label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta8 form-check-input" value="A" id="0801" name="respuesta8">
                        <label class="respuesta8 form-check-label justify-content-center" for="0801">7m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta8 form-check-input" value="B" id="0802" name="respuesta8">
                        <label class="respuesta4 form-check-label justify-content-center" for="0802">7M</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta8 form-check-input" value="C" id="0803" name="respuesta8">
                        <label class="respuesta8 form-check-label justify-content-center" for="0803">8d</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta8 form-check-input" value="D" id="0804" name="respuesta8">
                        <label class="respuesta8 form-check-label justify-content-center" for="0804">7A</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <br>
    <hr width="100%" size="5" noshade>
    <h5>2. Escalas: Marque la opción que considere correcta.</h5>
    <h5>Preguntas:</h5>
    <div class="row">
        <div class="col-1"></div>
        <div class="col"><img src=" {{ asset('imagen/ExamenT1517C/P2A.png') }}" alt=""
                style="height:100%; width:100%;"></div>
        <div class="col-1"></div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta9'>
            <h3><label><br>a)</label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta9 form-check-input" value="A" id="0901" name="respuesta9">
                        <label class="respuesta9 form-check-label justify-content-center" for="0901">Mayor</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta9 form-check-input" value="B" id="0902" name="respuesta9">
                        <label class="respuesta9 form-check-label justify-content-center" for="0902">Menor antigua o natural</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta9 form-check-input" value="C" id="0903" name="respuesta9">
                        <label class="respuesta9 form-check-label justify-content-center" for="0903">Menor armónica</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta7 form-check-input" value="D" id="0904" name="respuesta9">
                        <label class="respuesta9 form-check-label justify-content-center" for="0904">Menor melódica ascendente</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta10'>
            <h3><label><br>b)</label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta10 form-check-input" value="A" id="1001"
                            name="respuesta10">
                        <label class="respuesta10 form-check-label justify-content-center" for="1001">Mayor</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta10 form-check-input" value="B" id="1002"
                            name="respuesta10">
                        <label class="respuesta10 form-check-label justify-content-center" for="1002">Menor antigua o natural</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta10 form-check-input" value="C" id="1003"
                            name="respuesta10">
                        <label class="respuesta10 form-check-label justify-content-center" for="1003">Menor armónica</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta10 form-check-input" value="D" id="1004"
                            name="respuesta10">
                        <label class="respuesta10 form-check-label justify-content-center" for="1004">Menor melódica ascendente</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col"><img src=" {{ asset('imagen/ExamenT1517C/P2B.png') }}" alt=""
                style="height:100%; width:100%;"></div>
        <div class="col-1"></div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta11'>
            <h3><label><br>c)</label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta11 form-check-input" value="A" id="1101"
                            name="respuesta11">
                        <label class="respuesta11 form-check-label justify-content-center" for="1101">Mayor</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta11 form-check-input" value="B" id="1102"
                            name="respuesta11">
                        <label class="respuesta11 form-check-label justify-content-center" for="1102">Menor antigua o natural</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta11 form-check-input" value="C" id="1103"
                            name="respuesta11">
                        <label class="respuesta11 form-check-label justify-content-center" for="1103">Menor armónica</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta11 form-check-input" value="D" id="1104"
                            name="respuesta11">
                        <label class="respuesta11 form-check-label justify-content-center" for="1104">Menor melódica ascendente</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta12'>
            <h3><label><br>d)</label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta12 form-check-input" value="A" id="1201"
                            name="respuesta12">
                        <label class="respuesta12 form-check-label justify-content-center" for="1201">Mayor</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta12 form-check-input" value="B" id="1202"
                            name="respuesta12">
                        <label class="respuesta12 form-check-label justify-content-center" for="1202">Menor antigua o natural</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta12 form-check-input" value="C" id="1203"
                            name="respuesta12">
                        <label class="respuesta12 form-check-label justify-content-center" for="1203">Menor armónica</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta12 form-check-input" value="D" id="1204"
                            name="respuesta12">
                        <label class="respuesta12 form-check-label justify-content-center" for="1204">Menor melódica ascendente</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <hr width="100%" size="5" noshade>
    <h5>3. Organización rítmica: Marque la opción que considere correcta.</h5>
    <h5>Pregunta A:</h5>
    <label class="respuesta13 form-check-label justify-content-center" for="1303"> <img
            src=" {{ asset('imagen/ExamenT1517C/P3A.png') }}" alt="" style="height:100%; width:100%;"></label>

    <br>
    <br>
    <div class="form-group">
        <div class='pregunta' id='pregunta13'>
            <h3><label>Opciones de respuesta: </label></h3>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="respuesta13 form-check-input" value="A" id="1301" name="respuesta13">
                    <label class="respuesta13 form-check-label justify-content-center" for="1301"> <img
                            src=" {{ asset('imagen/ExamenT1517C/P3AA.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="respuesta13 form-check-input" value="B" id="1302" name="respuesta13">
                    <label class="respuesta13 form-check-label justify-content-center" for="1302"> <img
                            src=" {{ asset('imagen/ExamenT1517C/P3AB.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="form-check-input respuesta13" value="C" id="1303" name="respuesta13">
                    <label class="respuesta13 form-check-label justify-content-center" for="1303"> <img
                            src=" {{ asset('imagen/ExamenT1517C/P3AC.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="form-check-input respuesta13" value="D" id="1304" name="respuesta13">
                    <label class="respuesta13 form-check-label justify-content-center" for="1304"> <img
                            src=" {{ asset('imagen/ExamenT1517C/P3AD.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
    <h5>Pregunta B:</h5>
    <label class="respuesta14 form-check-label justify-content-center" for="1401"> <img
            src=" {{ asset('imagen/ExamenT1517C/P3B.png') }}" alt="" style="height:100%; width:100%;"></label>

    <br>
    <br>
    <div class="form-group">
        <div class='pregunta' id='pregunta14'>
            <h3><label>Opciones de respuesta: </label></h3>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="respuesta14 form-check-input" value="A" id="1401" name="respuesta14">
                    <label class="respuesta14 form-check-label justify-content-center" for="1401"> <img
                            src=" {{ asset('imagen/ExamenT1517C/P3BA.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="respuesta14 form-check-input" value="B" id="1402" name="respuesta14">
                    <label class="respuesta14 form-check-label justify-content-center" for="1402"> <img
                            src=" {{ asset('imagen/ExamenT1517C/P3BB.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="form-check-input respuesta14" value="C" id="1403" name="respuesta14">
                    <label class="respuesta14 form-check-label justify-content-center" for="1403"> <img
                            src=" {{ asset('imagen/ExamenT1517C/P3BC.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="form-check-input respuesta14" value="D" id="1404" name="respuesta14">
                    <label class="respuesta14 form-check-label justify-content-center" for="1404"> <img
                            src=" {{ asset('imagen/ExamenT1517C/P3BD.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
    <hr width="100%" size="5" noshade>
    <h5>4. Triadas: Marque la opción que considere correcta.</h5>
    <label class="respuesta15 form-check-label justify-content-center" for="1501"> <img
            src=" {{ asset('imagen/ExamenT1517C/P4A.png') }}" alt="" style="height:100%; width:100%;"></label>

    <br>
    <br>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta15'>
            <h3><label><br>
                    a)
                </label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col-6'>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta15 form-check-input" value="A" id="1501"
                            name="respuesta15">
                        <label class="respuesta15 form-check-label justify-content-center" for="1501">Mayor</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta15 form-check-input" value="B" id="1502"
                            name="respuesta15">
                        <label class="respuesta15 form-check-label justify-content-center" for="1502">Menor</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta15 form-check-input" value="C" id="1503"
                            name="respuesta15">
                        <label class="respuesta15 form-check-label justify-content-center" for="1503">Séptima de dominante</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta15 form-check-input" value="D" id="1504"
                            name="respuesta15">
                        <label class="respuesta15 form-check-label justify-content-center"
                            for="1504">Ninguna de las anteriores</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta16'>
            <h3><label><br>
                    b)
                </label></h3>
        </div>
        <div class='col'>
            <div class="row">
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta16 form-check-input" value="A" id="1601"
                            name="respuesta16">
                        <label class="respuesta16 form-check-label justify-content-center" for="1601">Mayor</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta16 form-check-input" value="B" id="1602"
                            name="respuesta16">
                        <label class="respuesta16 form-check-label justify-content-center" for="1602">Menor</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta16 form-check-input" value="C" id="1603"
                            name="respuesta16">
                        <label class="respuesta16 form-check-label justify-content-center" for="1603">Séptima de dominante</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta16 form-check-input" value="D" id="1604"
                            name="respuesta16">
                        <label class="respuesta16 form-check-label justify-content-center"
                            for="1604">Ninguna de las anteriores</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta17'>
            <h3><label><br>c)</label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta17 form-check-input" value="A" id="1701"
                            name="respuesta17">
                        <label class="respuesta17 form-check-label justify-content-center" for="1701">Mayor</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta17 form-check-input" value="B" id="1702"
                            name="respuesta17">
                        <label class="respuesta17 form-check-label justify-content-center" for="1702">Menor</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta17 form-check-input" value="C" id="1703"
                            name="respuesta17">
                        <label class="respuesta17 form-check-label justify-content-center" for="1703">Séptima de dominante</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta17 form-check-input" value="D" id="1704"
                            name="respuesta17">
                        <label class="respuesta17 form-check-label justify-content-center"
                            for="1704">Ninguna de las anteriores</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <label class="respuesta18 form-check-label justify-content-center" for="1801"> <img
            src=" {{ asset('imagen/ExamenT1517C/P4B.png') }}" alt="" style="height:100%; width:100%;"></label>

    <br>
    <br>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta18'>
            <h3><label><br>
                    d)
                </label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col-6'>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta18 form-check-input" value="A" id="1801"
                            name="respuesta18">
                        <label class="respuesta18 form-check-label justify-content-center" for="1801">Mayor</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta18 form-check-input" value="B" id="1802"
                            name="respuesta18">
                        <label class="respuesta18 form-check-label justify-content-center" for="1802">Menor</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta18 form-check-input" value="C" id="1803"
                            name="respuesta18">
                        <label class="respuesta18 form-check-label justify-content-center" for="1803">Séptima de dominante</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta18 form-check-input" value="D" id="1804"
                            name="respuesta18">
                        <label class="respuesta18 form-check-label justify-content-center"
                            for="1804">Ninguna de las anteriores</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta19'>
            <h3><label><br>
                    e)
                </label></h3>
        </div>
        <div class='col'>
            <div class="row">
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta19 form-check-input" value="A" id="1901"
                            name="respuesta19">
                        <label class="respuesta19 form-check-label justify-content-center" for="1901">Mayor</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta19 form-check-input" value="B" id="1902"
                            name="respuesta19">
                        <label class="respuesta19 form-check-label justify-content-center" for="1902">Menor</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta2 form-check-input" value="C" id="1903" name="respuesta19">
                        <label class="respuesta19 form-check-label justify-content-center" for="1903">Séptima de dominante</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta19 form-check-input" value="D" id="1904"
                            name="respuesta19">
                        <label class="respuesta19 form-check-label justify-content-center"
                            for="1904">Ninguna de las anteriores</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta20'>
            <h3><label><br>f)</label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta20 form-check-input" value="A" id="2001"
                            name="respuesta20">
                        <label class="respuesta20 form-check-label justify-content-center" for="2001">Mayor</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta20 form-check-input" value="B" id="2002"
                            name="respuesta20">
                        <label class="respuesta20 form-check-label justify-content-center" for="2002">Menor</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta20 form-check-input" value="C" id="2003"
                            name="respuesta20">
                        <label class="respuesta20 form-check-label justify-content-center" for="2003">Séptima de dominante</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta20 form-check-input" value="D" id="2004"
                            name="respuesta20">
                        <label class="respuesta20 form-check-label justify-content-center"
                            for="2004">Ninguna de las anteriores</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
</form>
