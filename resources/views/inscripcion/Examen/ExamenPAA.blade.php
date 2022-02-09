<div id='title'>
    <hr width="100%" size="5" noshade>
    <h2>Conservatorio Nacional de Música</h2>
    <h2>Admisión 2022</h2>
    <h4>Sección de Estudios Preparatorios</h4>
    <h4>Programa Post Escolar</h4>
    <h5>Examen de Audioperceptiva</h5>
    <hr width="100%" size="5" noshade>
</div>
<form action="{{ route('evaluar', ['id_postulante' => $id_postulante]) }}" id="formevaluar" method="post">
    @csrf
    <h5>1. Intervalos melódicos:</h5>
    <h5>Marque la opción correcta por cada intervalo (Cdaa intervalo sonará tres veces)</h5>
    <div class='row centrar-content col'>
        <div id="reproductor1" class="centrar-content ">
            <audio>
                <source src="{{ asset('audio/ExamenPAA/P1.mp3') }}" type="audio/mp3">
            </audio>
            <a href="javascript:reproducir('#reproductor1');"><i class="fa fa-play-circle"
                    style="color:greenyellow;font-size: 33px;" aria-hidden="true"></i></a>
        </div>
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
                <div class='col'>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta1 form-check-input" value="A" id="0101" name="respuesta1">
                        <label class="respuesta1 form-check-label justify-content-center" for="0101">2m</label>
                    </div>
                </div>
                <div class='col'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta1 form-check-input" value="B" id="0102" name="respuesta1">
                        <label class="respuesta1 form-check-label justify-content-center" for="0102">2M</label>
                    </div>
                </div>
                <div class='col'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta1 form-check-input" value="C" id="0103" name="respuesta1">
                        <label class="respuesta1 form-check-label justify-content-center" for="0103">3m</label>
                    </div>
                </div>
                <div class='col'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta1 form-check-input" value="D" id="0104" name="respuesta1">
                        <label class="respuesta1 form-check-label justify-content-center" for="0104">3M</label>
                    </div>
                </div>
                <div class='col'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta1 form-check-input" value="E" id="0105" name="respuesta1">
                        <label class="respuesta1 form-check-label justify-content-center" for="0105">4J</label>
                    </div>
                </div>
                <div class='col'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta1 form-check-input" value="F" id="0106" name="respuesta1">
                        <label class="respuesta1 form-check-label justify-content-center" for="0106">5J</label>
                    </div>
                </div>
                <div class='col'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta1 form-check-input" value="G" id="0107" name="respuesta1">
                        <label class="respuesta1 form-check-label justify-content-center" for="0107">8J</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta2'>
            <h3><label><br>b)</label></h3>
        </div>
        <div class='col'>
            <div class="row">
                <div class='col'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta2 form-check-input" value="A" id="0201" name="respuesta2">
                        <label class="respuesta2 form-check-label justify-content-center" for="0201">2m</label>
                    </div>
                </div>
                <div class='col'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta2 form-check-input" value="B" id="0202" name="respuesta2">
                        <label class="respuesta2 form-check-label justify-content-center" for="0202">2M</label>
                    </div>
                </div>
                <div class='col'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta2 form-check-input" value="C" id="0203" name="respuesta2">
                        <label class="respuesta2 form-check-label justify-content-center" for="0203">3m</label>
                    </div>
                </div>
                <div class='col'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta2 form-check-input" value="D" id="0204" name="respuesta2">
                        <label class="respuesta2 form-check-label justify-content-center" for="0204">3M</label>
                    </div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta2 form-check-input" value="E" id="0205" name="respuesta2">
                        <label class="respuesta2 form-check-label justify-content-center" for="0205">4J</label>
                    </div>
                </div>
                <div class='col'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta2 form-check-input" value="F" id="0206" name="respuesta2">
                        <label class="respuesta2 form-check-label justify-content-center" for="0206">5J</label>
                    </div>
                </div>
                <div class='col'>
                    <div class="form-check col">
                        <input type="radio" class="respuesta2 form-check-input" value="G" id="0207" name="respuesta2">
                        <label class="respuesta2 form-check-label justify-content-center" for="0207">8J</label>
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
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta3 form-check-input" value="A" id="0301" name="respuesta3">
                        <label class="respuesta3 form-check-label justify-content-center" for="0301">2m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta3 form-check-input" value="B" id="0302" name="respuesta3">
                        <label class="respuesta3 form-check-label justify-content-center" for="0302">2M</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta3 form-check-input" value="C" id="0303" name="respuesta3">
                        <label class="respuesta3 form-check-label justify-content-center" for="0303">3m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta3 form-check-input" value="D" id="0304" name="respuesta3">
                        <label class="respuesta3 form-check-label justify-content-center" for="0304">3M</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta3 form-check-input" value="E" id="0305" name="respuesta3">
                        <label class="respuesta3 form-check-label justify-content-center" for="0305">4J</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta3 form-check-input" value="F" id="0306" name="respuesta3">
                        <label class="respuesta3 form-check-label justify-content-center" for="0306">5J</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta3 form-check-input" value="G" id="0307" name="respuesta3">
                        <label class="respuesta3 form-check-label justify-content-center" for="0307">8J</label>
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
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta4 form-check-input" value="A" id="0401" name="respuesta4">
                        <label class="respuesta4 form-check-label justify-content-center" for="0401">2m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta4 form-check-input" value="B" id="0402" name="respuesta4">
                        <label class="respuesta4 form-check-label justify-content-center" for="0402">2M</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta4 form-check-input" value="C" id="0403" name="respuesta4">
                        <label class="respuesta4 form-check-label justify-content-center" for="0403">3m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta4 form-check-input" value="D" id="0404" name="respuesta4">
                        <label class="respuesta4 form-check-label justify-content-center" for="0404">3M</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta4 form-check-input" value="E" id="0405" name="respuesta4">
                        <label class="respuesta4 form-check-label justify-content-center" for="0405">4J</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta4 form-check-input" value="F" id="0406" name="respuesta4">
                        <label class="respuesta4 form-check-label justify-content-center" for="0406">5J</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta4 form-check-input" value="G" id="0407" name="respuesta4">
                        <label class="respuesta4 form-check-label justify-content-center" for="0407">8J</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta5'>
            <h3><label><br>e)</label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta5 form-check-input" value="A" id="0501" name="respuesta5">
                        <label class="respuesta5 form-check-label justify-content-center" for="0501">2m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta5 form-check-input" value="B" id="0502" name="respuesta5">
                        <label class="respuesta5 form-check-label justify-content-center" for="0502">2M</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta5 form-check-input" value="C" id="0503" name="respuesta5">
                        <label class="respuesta5 form-check-label justify-content-center" for="0503">3m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta5 form-check-input" value="D" id="0504" name="respuesta5">
                        <label class="respuesta5 form-check-label justify-content-center" for="0504">3M</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta5 form-check-input" value="E" id="0505" name="respuesta5">
                        <label class="respuesta5 form-check-label justify-content-center" for="0505">4J</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta5 form-check-input" value="F" id="0506" name="respuesta5">
                        <label class="respuesta5 form-check-label justify-content-center" for="0506">5J</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta5 form-check-input" value="G" id="0507" name="respuesta5">
                        <label class="respuesta5 form-check-label justify-content-center" for="0507">8J</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta6'>
            <h3><label><br>f)</label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta6 form-check-input" value="A" id="0601" name="respuesta6">
                        <label class="respuesta6 form-check-label justify-content-center" for="0601">2m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta6 form-check-input" value="B" id="0602" name="respuesta6">
                        <label class="respuesta6 form-check-label justify-content-center" for="0602">2M</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta6 form-check-input" value="C" id="0603" name="respuesta6">
                        <label class="respuesta6 form-check-label justify-content-center" for="0603">3m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta6 form-check-input" value="D" id="0604" name="respuesta6">
                        <label class="respuesta6 form-check-label justify-content-center" for="0604">3M</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta6 form-check-input" value="E" id="0605" name="respuesta6">
                        <label class="respuesta6 form-check-label justify-content-center" for="0605">4J</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta6 form-check-input" value="F" id="0606" name="respuesta6">
                        <label class="respuesta6 form-check-label justify-content-center" for="0606">5J</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta6 form-check-input" value="G" id="0607" name="respuesta6">
                        <label class="respuesta6 form-check-label justify-content-center" for="0607">8J</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <br>
    <hr width="100%" size="5" noshade>
    <h5>2. Acordes:</h5>
    <h5>Marque la opción correcta por cada acorde (Cada acorde sonará tres veces)</h5>
    <div class='centrar-content col'>
        <div id="reproductor2" class="centrar-content ">
            <audio>
                <source src="{{ asset('audio/ExamenPAA/P2.mp3') }}" type="audio/mp3">
            </audio>
            <a href="javascript:reproducir('#reproductor2');"><i class="fa fa-play-circle"
                    style="color:greenyellow;font-size: 33px;" aria-hidden="true"></i></a>
        </div>
    </div>
    <br>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta7'>
            <h3><label><br>a)</label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col-4'>
                    <div class='col-1'></div>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta7 form-check-input" value="A" id="0701" name="respuesta7">
                        <label class="respuesta7 form-check-label justify-content-center" for="0701">M</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-4'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta7 form-check-input" value="B" id="0702" name="respuesta7">
                        <label class="respuesta7 form-check-label justify-content-center" for="0702">m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-4'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta7 form-check-input" value="C" id="0703" name="respuesta7">
                        <label class="respuesta7 form-check-label justify-content-center" for="0703">X</label>
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
            <h3><label><br>b)</label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col-4'>
                    <div class='col-1'></div>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta8 form-check-input" value="A" id="0801" name="respuesta8">
                        <label class="respuesta8 form-check-label justify-content-center" for="0801">M</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-4'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta8 form-check-input" value="B" id="0802" name="respuesta8">
                        <label class="respuesta8 form-check-label justify-content-center" for="0802">m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-4'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta8 form-check-input" value="C" id="0803" name="respuesta8">
                        <label class="respuesta8 form-check-label justify-content-center" for="0803">X</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta9'>
            <h3><label><br>c)</label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col-4'>
                    <div class='col-1'></div>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta9 form-check-input" value="A" id="0901" name="respuesta9">
                        <label class="respuesta9 form-check-label justify-content-center" for="0901">M</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-4'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta9 form-check-input" value="B" id="0902" name="respuesta9">
                        <label class="respuesta9 form-check-label justify-content-center" for="0902">m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-4'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta9 form-check-input" value="C" id="0903" name="respuesta9">
                        <label class="respuesta9 form-check-label justify-content-center" for="0903">X</label>
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
            <h3><label><br>d)</label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col-4'>
                    <div class='col-1'></div>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta10 form-check-input" value="A" id="1001"
                            name="respuesta10">
                        <label class="respuesta10 form-check-label justify-content-center" for="1001">M</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-4'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta10 form-check-input" value="B" id="1002"
                            name="respuesta10">
                        <label class="respuesta10 form-check-label justify-content-center" for="1002">m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-4'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta10 form-check-input" value="C" id="1003"
                            name="respuesta10">
                        <label class="respuesta10 form-check-label justify-content-center" for="1003">X</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class='col-1 pregunta centrar-content' id='pregunta11'>
            <h3><label><br>e)</label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col-4'>
                    <div class='col-1'></div>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta11 form-check-input" value="A" id="1101"
                            name="respuesta11">
                        <label class="respuesta11 form-check-label justify-content-center" for="1101">M</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-4'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta11 form-check-input" value="B" id="1102"
                            name="respuesta11">
                        <label class="respuesta11 form-check-label justify-content-center" for="1102">m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-4'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta11 form-check-input" value="C" id="1103"
                            name="respuesta11">
                        <label class="respuesta11 form-check-label justify-content-center" for="1103">X</label>
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
            <h3><label><br>f)</label></h3>
        </div>
        <div class="col">
            <div class='row'>
                <div class='col-4'>
                    <div class='col-1'></div>
                    <div class="form-check  col">
                        <input type="radio" class="respuesta12 form-check-input" value="A" id="1201"
                            name="respuesta12">
                        <label class="respuesta12 form-check-label justify-content-center" for="1201">M</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-4'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta12 form-check-input" value="B" id="1202"
                            name="respuesta12">
                        <label class="respuesta12 form-check-label justify-content-center" for="1202">m</label>
                    </div>
                    <div class='col-1'></div>
                </div>
                <div class='col-4'>
                    <div class='col-1'></div>
                    <div class="form-check col">
                        <input type="radio" class="respuesta12 form-check-input" value="C" id="1203"
                            name="respuesta12">
                        <label class="respuesta12 form-check-label justify-content-center" for="1203">X</label>
                    </div>
                    <div class='col-1'></div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <hr width="100%" size="5" noshade>
    <h5>3. Fragmentos rítmicos:</h5>
    <h5>Pregunta A: Escuche el siguiente fragmento rítmico y marque la opción correcta (El fragmento sonará tres
        veces).</h5>
    <div class='centrar-content col'>
        <div id="reproductor3" class="centrar-content ">
            <audio>
                <source src="{{ asset('audio/ExamenPAA/P3A.mp3') }}" type="audio/mp3">
            </audio>
            <a href="javascript:reproducir('#reproductor3');"><i class="fa fa-play-circle"
                    style="color:greenyellow;font-size: 33px;" aria-hidden="true"></i></a>
        </div>
    </div>
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
                            src="{{ asset('imagen/ExamenPAA/P3AA.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="respuesta13 form-check-input" value="B" id="1302" name="respuesta13">
                    <label class="respuesta13 form-check-label justify-content-center" for="1302"> <img
                            src="{{ asset('imagen/ExamenPAA/P3AB.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="form-check-input respuesta13" value="C" id="1303" name="respuesta13">
                    <label class="respuesta13 form-check-label justify-content-center" for="1303"> <img
                            src="{{ asset('imagen/ExamenPAA/P3AC.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="form-check-input respuesta13" value="D" id="1304" name="respuesta13">
                    <label class="respuesta13 form-check-label justify-content-center" for="1304"> <img
                            src="{{ asset('imagen/ExamenPAA/P3AD.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
    <h5>Pregunta B: Escuche el siguiente fragmento rítmico y marque la opción correcta (El fragmento sonará tres
        veces).</h5>
    <div class='centrar-content col'>
        <div id="reproductor4" class="centrar-content ">
            <audio>
                <source src="{{ asset('audio/ExamenPAA/P3B.mp3') }}" type="audio/mp3">
            </audio>
            <a href="javascript:reproducir('#reproductor4');"><i class="fa fa-play-circle"
                    style="color:greenyellow;font-size: 33px;" aria-hidden="true"></i></a>
        </div>
    </div>
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
                            src="{{ asset('imagen/ExamenPAA/P3BA.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="respuesta14 form-check-input" value="B" id="1402" name="respuesta14">
                    <label class="respuesta14 form-check-label justify-content-center" for="1402"> <img
                            src="{{ asset('imagen/ExamenPAA/P3BB.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="form-check-input respuesta14" value="C" id="1403" name="respuesta14">
                    <label class="respuesta14 form-check-label justify-content-center" for="1403"> <img
                            src="{{ asset('imagen/ExamenPAA/P3BC.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="form-check-input respuesta14" value="D" id="1404" name="respuesta14">
                    <label class="respuesta14 form-check-label justify-content-center" for="1404"> <img
                            src="{{ asset('imagen/ExamenPAA/P3BD.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
    <hr width="100%" size="5" noshade>
    <h5>4. Fragmentos melódicos:</h5>
    <h5>Pregunta A: Escuche el siguiente fragmento melódico y marque la opción correcta (El fragmento sonará tres
        veces).</h5>
    <div class='centrar-content col'>
        <div id="reproductor5" class="centrar-content ">
            <audio>
                <source src="{{ asset('audio/ExamenPAA/P4A.mp3') }}" type="audio/mp3">
            </audio>
            <a href="javascript:reproducir('#reproductor5');"><i class="fa fa-play-circle"
                    style="color:greenyellow;font-size: 33px;" aria-hidden="true"></i></a>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class='pregunta' id='pregunta15'>
            <h3><label>Opciones de respuesta: </label></h3>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="respuesta15 form-check-input" value="A" id="1501" name="respuesta15">
                    <label class="respuesta15 form-check-label justify-content-center" for="1501"> <img
                            src="{{ asset('imagen/ExamenPAA/P4AA.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="respuesta15 form-check-input" value="B" id="1502" name="respuesta15">
                    <label class="respuesta15 form-check-label justify-content-center" for="1502"> <img
                            src="{{ asset('imagen/ExamenPAA/P4AB.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="form-check-input respuesta15" value="C" id="1503" name="respuesta15">
                    <label class="respuesta15 form-check-label justify-content-center" for="1503"> <img
                            src="{{ asset('imagen/ExamenPAA/P4AC.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="form-check-input respuesta15" value="D" id="1504" name="respuesta15">
                    <label class="respuesta15 form-check-label justify-content-center" for="1504"> <img
                            src="{{ asset('imagen/ExamenPAA/P4AD.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
    <h5>Pregunta B: Escuche el siguiente fragmento melódico y marque la opción correcta (El fragmento sonará tres
        veces).</h5>
    <div class='centrar-content col'>
        <div id="reproductor6" class="centrar-content ">
            <audio>
                <source src="{{ asset('audio/ExamenPAA/P4B.mp3') }}" type="audio/mp3">
            </audio>
            <a href="javascript:reproducir('#reproductor6');"><i class="fa fa-play-circle"
                    style="color:greenyellow;font-size: 33px;" aria-hidden="true"></i></a>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class='pregunta' id='pregunta16'>
            <h3><label>Opciones de respuesta: </label></h3>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="respuesta16 form-check-input" value="A" id="1601" name="respuesta16">
                    <label class="respuesta16 form-check-label justify-content-center" for="1601"> <img
                            src="{{ asset('imagen/ExamenPAA/P4BA.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="respuesta16 form-check-input" value="B" id="1602" name="respuesta16">
                    <label class="respuesta16 form-check-label justify-content-center" for="1602"> <img
                            src="{{ asset('imagen/ExamenPAA/P4BB.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="form-check-input respuesta16" value="C" id="1603" name="respuesta16">
                    <label class="respuesta16 form-check-label justify-content-center" for="1603"> <img
                            src="{{ asset('imagen/ExamenPAA/P4BC.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input type="radio" class="form-check-input respuesta16" value="D" id="1604" name="respuesta16">
                    <label class="respuesta16 form-check-label justify-content-center" for="1604"> <img
                            src="{{ asset('imagen/ExamenPAA/P4BD.png') }}" alt=""
                            style="height:100%; width:100%;"></label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
</form>
<div class="modal fade" id="audioreprod" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
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
                <button class="btn btn-success" data-dismiss="modal" aria-label="Close">Aceptar</button>
            </div>
        </div>
    </div>
</div>
