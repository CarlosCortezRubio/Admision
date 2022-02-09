<div id='title'>
    <hr width="100%" size="5" noshade>
    <h2>Conservatorio Nacional de Música</h2>
    <h2>Admisión 2022</h2>
    <h4>Sección de Estudios Preparatorios</h4>
    <h4>Programa Post Escolar</h4>
    <h5>Examen de Teoría Musical</h5>
    <hr width="100%" size="5" noshade>
</div>
<form action="{{ route('evaluar', ['id_postulante' => $id_postulante]) }}" id="formevaluar" method="post">
    @csrf
    <h5>1. Clasificación y calificación de intervalos simples:</h5>
    <h5>Marque la opción que considere correcta.</h5>
    <div class="row">
        <div class="col-1"></div>
        <div class="col"><img src=" {{ asset('imagen/ExamenPTC/P1A.png') }}" alt=""
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
                        <label class="respuesta1 form-check-label justify-content-center" for="0101">5J</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta1 form-check-input" value="B" id="0102" name="respuesta1">
                        <label class="respuesta1 form-check-label justify-content-center" for="0102">5d</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta1 form-check-input" value="C" id="0103" name="respuesta1">
                        <label class="respuesta1 form-check-label justify-content-center" for="0103">4J</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta1 form-check-input" value="D" id="0104" name="respuesta1">
                        <label class="respuesta1 form-check-label justify-content-center" for="0104">5A</label>
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
                        <label class="respuesta2 form-check-label justify-content-center" for="0201">3m</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta2 form-check-input" value="B" id="0202" name="respuesta2">
                        <label class="respuesta2 form-check-label justify-content-center" for="0202">3d</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta2 form-check-input" value="C" id="0203" name="respuesta2">
                        <label class="respuesta2 form-check-label justify-content-center" for="0203">4J</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta2 form-check-input" value="D" id="0204" name="respuesta2">
                        <label class="respuesta2 form-check-label justify-content-center" for="0204">3M</label>
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
                        <label class="respuesta3 form-check-label justify-content-center" for="0301">2m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta3 form-check-input" value="B" id="0302" name="respuesta3">
                        <label class="respuesta3 form-check-label justify-content-center" for="0302">2M</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta3 form-check-input" value="C" id="0303" name="respuesta3">
                        <label class="respuesta3 form-check-label justify-content-center" for="0303">2d</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta3 form-check-input" value="D" id="0304" name="respuesta3">
                        <label class="respuesta3 form-check-label justify-content-center" for="0304">3m</label>
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
                        <label class="respuesta4 form-check-label justify-content-center" for="0401">6A</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta4 form-check-input" value="B" id="0402" name="respuesta4">
                        <label class="respuesta4 form-check-label justify-content-center" for="0402">6M</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta4 form-check-input" value="C" id="0403" name="respuesta4">
                        <label class="respuesta4 form-check-label justify-content-center" for="0403">6m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta4 form-check-input" value="D" id="0404" name="respuesta4">
                        <label class="respuesta4 form-check-label justify-content-center" for="0404">7m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col"><img src=" {{ asset('imagen/ExamenPTC/P1B.png') }}" alt=""
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
                        <label class="respuesta5 form-check-label justify-content-center" for="0501">6m</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta5 form-check-input" value="B" id="0502" name="respuesta5">
                        <label class="respuesta5 form-check-label justify-content-center" for="0502">5d</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta5 form-check-input" value="C" id="0503" name="respuesta5">
                        <label class="respuesta5 form-check-label justify-content-center" for="0503">5A</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta5 form-check-input" value="D" id="0504" name="respuesta5">
                        <label class="respuesta5 form-check-label justify-content-center" for="0504">6M</label>
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
                        <label class="respuesta6 form-check-label justify-content-center" for="0601">4J</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta6 form-check-input" value="B" id="0602" name="respuesta6">
                        <label class="respuesta6 form-check-label justify-content-center" for="0602">5J</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta6 form-check-input" value="C" id="0603" name="respuesta6">
                        <label class="respuesta6 form-check-label justify-content-center" for="0603">5d</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta6 form-check-input" value="D" id="0604" name="respuesta6">
                        <label class="respuesta6 form-check-label justify-content-center" for="0604">3M</label>
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
                        <label class="respuesta7 form-check-label justify-content-center" for="0701">3M</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta7 form-check-input" value="B" id="0702" name="respuesta7">
                        <label class="respuesta7 form-check-label justify-content-center" for="0702">4J</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta7 form-check-input" value="C" id="0703" name="respuesta7">
                        <label class="respuesta7 form-check-label justify-content-center" for="0703">3m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta7 form-check-input" value="D" id="0704" name="respuesta7">
                        <label class="respuesta7 form-check-label justify-content-center" for="0704">3A</label>
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
                        <label class="respuesta4 form-check-label justify-content-center" for="0802">6M</label>
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
                        <label class="respuesta8 form-check-label justify-content-center" for="0804">7M</label>
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
        <div class="col"><img src=" {{ asset('imagen/ExamenPTC/P2A.png') }}" alt=""
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
                        <label class="respuesta9 form-check-label justify-content-center" for="0901">La Mayor</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta9 form-check-input" value="B" id="0902" name="respuesta9">
                        <label class="respuesta9 form-check-label justify-content-center" for="0902">La Menor antigua o natural</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta9 form-check-input" value="C" id="0903" name="respuesta9">
                        <label class="respuesta9 form-check-label justify-content-center" for="0903">La Menor armónica</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta7 form-check-input" value="D" id="0904" name="respuesta9">
                        <label class="respuesta9 form-check-label justify-content-center" for="0904">La Menor melódica ascendente</label>
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
                        <label class="respuesta10 form-check-label justify-content-center" for="1001">Do Mayor</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta10 form-check-input" value="B" id="1002"
                            name="respuesta10">
                        <label class="respuesta10 form-check-label justify-content-center" for="1002">Do Menor antigua o natural</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta10 form-check-input" value="C" id="1003"
                            name="respuesta10">
                        <label class="respuesta10 form-check-label justify-content-center" for="1003">Do Menor armónica</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta10 form-check-input" value="D" id="1004"
                            name="respuesta10">
                        <label class="respuesta10 form-check-label justify-content-center" for="1004">Do Menor melódica ascendente</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col"><img src=" {{ asset('imagen/ExamenPTC/P2B.png') }}" alt=""
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
                        <label class="respuesta11 form-check-label justify-content-center" for="1101">Sol Mayor</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta11 form-check-input" value="B" id="1102"
                            name="respuesta11">
                        <label class="respuesta11 form-check-label justify-content-center" for="1102">Sol Menor antigua o natural</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta11 form-check-input" value="C" id="1103"
                            name="respuesta11">
                        <label class="respuesta11 form-check-label justify-content-center" for="1103">Sol Menor armónica</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta11 form-check-input" value="D" id="1104"
                            name="respuesta11">
                        <label class="respuesta11 form-check-label justify-content-center" for="1104">Sol Menor melódica ascendente</label>
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
                        <label class="respuesta12 form-check-label justify-content-center" for="1201">Si Mayor</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta12 form-check-input" value="B" id="1202"
                            name="respuesta12">
                        <label class="respuesta12 form-check-label justify-content-center" for="1202">Si Menor antigua o natural</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta12 form-check-input" value="C" id="1203"
                            name="respuesta12">
                        <label class="respuesta12 form-check-label justify-content-center" for="1203">Si Menor armónica</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta12 form-check-input" value="D" id="1204"
                            name="respuesta12">
                        <label class="respuesta12 form-check-label justify-content-center" for="1204">Si Menor melódica ascendente</label>
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
            src=" {{ asset('imagen/ExamenPTC/P3A.png') }}" alt="" style="height:100%; width:100%;"></label>

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
                            src=" {{ asset('imagen/ExamenPTC/P3AA.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="respuesta13 form-check-input" value="B" id="1302" name="respuesta13">
                    <label class="respuesta13 form-check-label justify-content-center" for="1302"> <img
                            src=" {{ asset('imagen/ExamenPTC/P3AB.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="form-check-input respuesta13" value="C" id="1303" name="respuesta13">
                    <label class="respuesta13 form-check-label justify-content-center" for="1303"> <img
                            src=" {{ asset('imagen/ExamenPTC/P3AC.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="form-check-input respuesta13" value="D" id="1304" name="respuesta13">
                    <label class="respuesta13 form-check-label justify-content-center" for="1304"> <img
                            src=" {{ asset('imagen/ExamenPTC/P3AD.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
    <h5>Pregunta B:</h5>
    <label class="respuesta14 form-check-label justify-content-center" for="1401"> <img
            src=" {{ asset('imagen/ExamenPTC/P3B.png') }}" alt="" style="height:100%; width:100%;"></label>

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
                            src=" {{ asset('imagen/ExamenPTC/P3BA.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="respuesta14 form-check-input" value="B" id="1402" name="respuesta14">
                    <label class="respuesta14 form-check-label justify-content-center" for="1402"> <img
                            src=" {{ asset('imagen/ExamenPTC/P3BB.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="form-check-input respuesta14" value="C" id="1403" name="respuesta14">
                    <label class="respuesta14 form-check-label justify-content-center" for="1403"> <img
                            src=" {{ asset('imagen/ExamenPTC/P3BC.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="form-check-input respuesta14" value="D" id="1404" name="respuesta14">
                    <label class="respuesta14 form-check-label justify-content-center" for="1404"> <img
                            src=" {{ asset('imagen/ExamenPTC/P3BD.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
    <hr width="100%" size="5" noshade>
    <h5>4. Triadas: Marque la opción que considere correcta.</h5>
    <label class="respuesta15 form-check-label justify-content-center" for="1501"> <img
            src=" {{ asset('imagen/ExamenPTC/P4A.png') }}" alt="" style="height:100%; width:100%;"></label>

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
                        <label class="respuesta15 form-check-label justify-content-center" for="1501">Solb mayor</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta15 form-check-input" value="B" id="1502"
                            name="respuesta15">
                        <label class="respuesta15 form-check-label justify-content-center" for="1502">Do menor</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta15 form-check-input" value="C" id="1503"
                            name="respuesta15">
                        <label class="respuesta15 form-check-label justify-content-center" for="1503">Solb aumentado</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta15 form-check-input" value="D" id="1504"
                            name="respuesta15">
                        <label class="respuesta15 form-check-label justify-content-center"
                            for="1504">Do disminuido</label>
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
                        <label class="respuesta16 form-check-label justify-content-center" for="1601">Re mayor</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta16 form-check-input" value="B" id="1602"
                            name="respuesta16">
                        <label class="respuesta16 form-check-label justify-content-center" for="1602">Re menor</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta16 form-check-input" value="C" id="1603"
                            name="respuesta16">
                        <label class="respuesta16 form-check-label justify-content-center" for="1603">Re aumentado</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta16 form-check-input" value="D" id="1604"
                            name="respuesta16">
                        <label class="respuesta16 form-check-label justify-content-center"
                            for="1604">Re disminuido</label>
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
                        <label class="respuesta17 form-check-label justify-content-center" for="1701">Reb mayor</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta17 form-check-input" value="B" id="1702"
                            name="respuesta17">
                        <label class="respuesta17 form-check-label justify-content-center" for="1702">Sol menor</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta17 form-check-input" value="C" id="1703"
                            name="respuesta17">
                        <label class="respuesta17 form-check-label justify-content-center" for="1703">Sol aumentado</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta17 form-check-input" value="D" id="1704"
                            name="respuesta17">
                        <label class="respuesta17 form-check-label justify-content-center"
                            for="1704">Sol disminuido</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <label class="respuesta18 form-check-label justify-content-center" for="1801"> <img
            src=" {{ asset('imagen/ExamenPTC/P4B.png') }}" alt="" style="height:100%; width:100%;"></label>

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
                        <label class="respuesta18 form-check-label justify-content-center" for="1801">Sol# mayor</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta18 form-check-input" value="B" id="1802"
                            name="respuesta18">
                        <label class="respuesta18 form-check-label justify-content-center" for="1802">Sol# menor</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta18 form-check-input" value="C" id="1803"
                            name="respuesta18">
                        <label class="respuesta18 form-check-label justify-content-center" for="1803">Sol# aumentado</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta18 form-check-input" value="D" id="1804"
                            name="respuesta18">
                        <label class="respuesta18 form-check-label justify-content-center"
                            for="1804">Sol# disminuido</label>
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
                        <label class="respuesta19 form-check-label justify-content-center" for="1901">La mayor</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta19 form-check-input" value="B" id="1902"
                            name="respuesta19">
                        <label class="respuesta19 form-check-label justify-content-center" for="1902">La menor</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta2 form-check-input" value="C" id="1903" name="respuesta19">
                        <label class="respuesta19 form-check-label justify-content-center" for="1903">La aumentado</label>
                    </div>
                </div>
                <div class='col-6'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta19 form-check-input" value="D" id="1904"
                            name="respuesta19">
                        <label class="respuesta19 form-check-label justify-content-center"
                            for="1904">La disminuido</label>
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
                        <label class="respuesta20 form-check-label justify-content-center" for="2001">Fa mayor</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta20 form-check-input" value="B" id="2002"
                            name="respuesta20">
                        <label class="respuesta20 form-check-label justify-content-center" for="2002">Fa menor</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta20 form-check-input" value="C" id="2003"
                            name="respuesta20">
                        <label class="respuesta20 form-check-label justify-content-center" for="2003">Fa aumentado</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-6'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta20 form-check-input" value="D" id="2004"
                            name="respuesta20">
                        <label class="respuesta20 form-check-label justify-content-center"
                            for="2004">Fa disminuido</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
</form>
