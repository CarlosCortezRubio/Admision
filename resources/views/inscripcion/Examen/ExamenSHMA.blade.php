    <div id='title'>
        <br>
        <h2>Universidad Nacional de Música</h2>
        <h3>Sección de Estudios Superiores</h3>
        <h4>Admisión 2022</h4>
        <h4>Examen de Apreciación Histórico Musical</h4>
    </div>
    <hr width="100%" size="5" noshade>
    <form action="{{ route('evaluar', ['id_postulante' => $id_postulante]) }}" id="formevaluar" method="post">
        @csrf
        <h5>1. 1.Elija las alternativas correctas respecto a la audición, puede marcar más de una por categoría:</h5>


        <div class='centrar-content col'>
            <div id="reproductor1" class="centrar-content ">
                <audio>
                    <source src="{{ asset('audio/ExamenSHMA/P1.mp3') }}" type="audio/mp3">
                </audio>
                <a href="javascript:reproducir('#reproductor1');"><i class="fa fa-play-circle"
                    style="color:greenyellow;font-size: 33px;" aria-hidden="true"></i></a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col form-group">
                <div class='pregunta' id='pregunta1'>
                    <h4><label>Género</label></h4>
                </div>
                <div class='container'>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check  col">
                            <input type="radio" class="respuesta1 form-check-input" value="A" id="0101"
                                name="respuesta1">
                            <label class="respuesta1 form-check-label justify-content-center" for="0101">Ópera</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta1 form-check-input" value="B" id="0102"
                                name="respuesta1">
                            <label class="respuesta1 form-check-label justify-content-center" for="0102">Ballet</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta1 form-check-input" value="C" id="0103"
                                name="respuesta1">
                            <label class="respuesta1 form-check-label justify-content-center"
                                for="0103">Sinfónico</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta1 form-check-input" value="D" id="0104"
                                name="respuesta1">
                            <label class="respuesta1 form-check-label justify-content-center"
                                for="0104">Programático</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta1 form-check-input" value="E" id="0105"
                                name="respuesta1">
                            <label class="respuesta1 form-check-label justify-content-center" for="0105">Solista :
                                Instrumental o vocal</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta1 form-check-input" value="F" id="0106"
                                name="respuesta1">
                            <label class="respuesta1 form-check-label justify-content-center" for="0106">Poema
                                sinfónico</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta1 form-check-input" value="G" id="0107"
                                name="respuesta1">
                            <label class="respuesta1 form-check-label justify-content-center"
                                for="0107">Concierto</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta1 form-check-input" value="H" id="0108"
                                name="respuesta1">
                            <label class="respuesta1 form-check-label justify-content-center" for="0108">Cantata</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta1 form-check-input" value="I" id="0109"
                                name="respuesta1">
                            <label class="respuesta1 form-check-label justify-content-center" for="0109">Coral</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta1 form-check-input" value="J" id="0110"
                                name="respuesta1">
                            <label class="respuesta1 form-check-label justify-content-center"
                                for="0110">Oratorio</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta1 form-check-input" value="K" id="0111"
                                name="respuesta1">
                            <label class="respuesta1 form-check-label justify-content-center" for="0111">Misa</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                </div>
            </div>
            <div class="col form-group">
                <div class='pregunta' id='pregunta2'>
                    <h4><label>Tipo de conjunto o agrupación instrumental</label></h4>
                </div>
                <div class='container'>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta2 form-check-input" value="A" id="0201"
                                name="respuesta2">
                            <label class="respuesta2 form-check-label justify-content-center" for="0201">Orquesta de
                                cámara</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta2 form-check-input" value="B" id="0202"
                                name="respuesta2">
                            <label class="respuesta2 form-check-label justify-content-center" for="0202">Orquesta
                                sinfónica</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta2" value="C" id="0203"
                                name="respuesta2">
                            <label class="respuesta2 form-check-label justify-content-center" for="0203">Conjunto coral
                                – instrumental</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta2" value="D" id="0204"
                                name="respuesta2">
                            <label class="respuesta2 form-check-label justify-content-center" for="0204">Conjunto de
                                cuerdas</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta2" value="E" id="0205"
                                name="respuesta2">
                            <label class="respuesta2 form-check-label justify-content-center" for="0205">Conjunto de
                                maderas</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta2" value="F" id="0206"
                                name="respuesta2">
                            <label class="respuesta2 form-check-label justify-content-center" for="0206">Cuarteto de
                                cuerdas</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta2" value="G" id="0207"
                                name="respuesta2">
                            <label class="respuesta2 form-check-label justify-content-center" for="0207">Instrumento o
                                voz solista</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta2" value="H" id="0208"
                                name="respuesta2">
                            <label class="respuesta2 form-check-label justify-content-center" for="0208">Conjunto de
                                metales</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta2" value="I" id="0209"
                                name="respuesta2">
                            <label class="respuesta2 form-check-label justify-content-center" for="0209">Banda
                                sinfónica</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta2" value="J" id="0210"
                                name="respuesta2">
                            <label class="respuesta2 form-check-label justify-content-center"
                                for="0210">Sinfónico-coral</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta2" value="J" id="0211"
                                name="respuesta2">
                            <label class="respuesta2 form-check-label justify-content-center" for="0211">Banda
                                militar</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                </div>
            </div>
            <div class="col form-group">
                <div class='pregunta' id='pregunta3'>
                    <h4><label>Periodo</label></h4>
                </div>
                <div class='container'>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta3 form-check-input" value="A" id="0301"
                                name="respuesta3">
                            <label class="respuesta3 form-check-label justify-content-center" for="0301">Edad
                                Media</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta3 form-check-input" value="B" id="0302"
                                name="respuesta3">
                            <label class="respuesta3 form-check-label justify-content-center"
                                for="0302">Renacimiento</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta3" value="C" id="0303"
                                name="respuesta3">
                            <label class="respuesta3 form-check-label justify-content-center" for="0303">Barroco</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta3" value="D" id="0304"
                                name="respuesta3">
                            <label class="respuesta3 form-check-label justify-content-center"
                                for="0304">Clasicismo</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta3" value="E" id="0305"
                                name="respuesta3">
                            <label class="respuesta3 form-check-label justify-content-center"
                                for="0305">Romanticismo</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta3" value="F" id="0306"
                                name="respuesta3">
                            <label class="respuesta3 form-check-label justify-content-center"
                                for="0306">Impresionismo</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta3" value="G" id="0307"
                                name="respuesta3">
                            <label class="respuesta3 form-check-label justify-content-center"
                                for="0307">Contemporáneo</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                </div>
            </div>
        </div>


        <hr width="100%" size="5" noshade>
        <h5>2. Elija las alternativas correctas respecto a la audición, puede marcar más de una por categoría:</h5>


        <div class='centrar-content col'>

            <div id="reproductor2" class="centrar-content ">
                <audio>
                    <source src="{{ asset('audio/ExamenSHMA/P2.mp3') }}" type="audio/mp3">
                </audio>
                <a href="javascript:reproducir('#reproductor2');"><i class="fa fa-play-circle"
                        style="color:greenyellow;font-size: 33px;" aria-hidden="true"></i></a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col form-group">
                <div class='pregunta' id='pregunta4'>
                    <h4><label>Género</label></h4>
                </div>
                <div class='container'>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check  col">
                            <input type="radio" class="respuesta4 form-check-input" value="A" id="0401"
                                name="respuesta4">
                            <label class="respuesta4 form-check-label justify-content-center" for="0401">Ópera</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta4 form-check-input" value="B" id="0402"
                                name="respuesta4">
                            <label class="respuesta4 form-check-label justify-content-center" for="0402">Ballet</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta4 form-check-input" value="C" id="0403"
                                name="respuesta4">
                            <label class="respuesta4 form-check-label justify-content-center"
                                for="0403">Sinfónico</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta4 form-check-input" value="D" id="0404"
                                name="respuesta4">
                            <label class="respuesta4 form-check-label justify-content-center" for="0404">Programático</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta4 form-check-input" value="E" id="0405"
                                name="respuesta4">
                            <label class="respuesta4 form-check-label justify-content-center" for="0405">Solista instrumental o vocal</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta4 form-check-input" value="F" id="0406"
                                name="respuesta4">
                            <label class="respuesta4 form-check-label justify-content-center"
                                for="0406">Poema sinfónico</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta4 form-check-input" value="G" id="0407"
                                name="respuesta4">
                            <label class="respuesta4 form-check-label justify-content-center"
                                for="0407">Concierto</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta4 form-check-input" value="H" id="0408"
                                name="respuesta4">
                            <label class="respuesta4 form-check-label justify-content-center" for="0408">Cantata</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta4 form-check-input" value="I" id="0409"
                                name="respuesta4">
                            <label class="respuesta4 form-check-label justify-content-center"
                                for="0409">Coral</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta4 form-check-input" value="J" id="0410"
                                name="respuesta4">
                            <label class="respuesta4 form-check-label justify-content-center"
                                for="0410">Oratorio</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta4 form-check-input" value="K" id="0411"
                                name="respuesta4">
                            <label class="respuesta4 form-check-label justify-content-center"
                                for="0411">Misa</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                </div>
            </div>
            <div class="col form-group">
                <div class='pregunta' id='pregunta5'>
                    <h4><label>Tipo de conjunto o agrupación instrumental</label></h4>
                </div>
                <div class='container'>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta5 form-check-input" value="A" id="0501"
                                name="respuesta5">
                            <label class="respuesta5 form-check-label justify-content-center" for="0501">Orquesta de
                                cámara</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta5 form-check-input" value="B" id="0502"
                                name="respuesta5">
                            <label class="respuesta5 form-check-label justify-content-center" for="0502">Orquesta
                                sinfónica</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta5" value="C" id="0503"
                                name="respuesta5">
                            <label class="respuesta5 form-check-label justify-content-center" for="0503">Conjunto coral
                                – instrumental</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta5" value="D" id="0504"
                                name="respuesta5">
                            <label class="respuesta5 form-check-label justify-content-center" for="0504">Conjunto de
                                cuerdas</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta5" value="E" id="0505"
                                name="respuesta5">
                            <label class="respuesta5 form-check-label justify-content-center" for="0505">Conjunto de
                                maderas</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta5" value="F" id="0506"
                                name="respuesta5">
                            <label class="respuesta5 form-check-label justify-content-center" for="0506">Cuarteto de
                                cuerdas</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta5" value="G" id="0507"
                                name="respuesta5">
                            <label class="respuesta5 form-check-label justify-content-center" for="0507">Instrumento o
                                voz solista</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta5" value="H" id="0508"
                                name="respuesta5">
                            <label class="respuesta5 form-check-label justify-content-center" for="0508">Conjunto de
                                metales</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta5" value="I" id="0509"
                                name="respuesta5">
                            <label class="respuesta5 form-check-label justify-content-center" for="0509">Banda
                                sinfónica</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta5" value="J" id="0510"
                                name="respuesta5">
                            <label class="respuesta5 form-check-label justify-content-center"
                                for="0510">Sinfónico-coral</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta5" value="K" id="0511"
                                name="respuesta5">
                            <label class="respuesta5 form-check-label justify-content-center"
                                for="0511">Banda militar</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                </div>
            </div>
            <div class="col form-group">
                <div class='pregunta' id='pregunta6'>
                    <h4><label>Periodo</label></h4>
                </div>
                <div class='container'>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta6 form-check-input" value="A" id="0601"
                                name="respuesta6">
                            <label class="respuesta6 form-check-label justify-content-center" for="0601">Edad media</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta6 form-check-input" value="B" id="0602"
                                name="respuesta6">
                            <label class="respuesta6 form-check-label justify-content-center" for="0602">Renacimiento</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta6" value="C" id="0603"
                                name="respuesta6">
                            <label class="respuesta6 form-check-label justify-content-center" for="0603">Barroco</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta6" value="D" id="0604"
                                name="respuesta6">
                            <label class="respuesta6 form-check-label justify-content-center" for="0604">Clasicismo</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta6" value="E" id="0605"
                                name="respuesta6">
                            <label class="respuesta6 form-check-label justify-content-center" for="0605">Romanticismo</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta6" value="F" id="0606"
                                name="respuesta6">
                            <label class="respuesta6 form-check-label justify-content-center" for="0606">Impresionismo</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input type="radio" class="form-check-input respuesta6" value="G" id="0607"
                                name="respuesta6">
                            <label class="respuesta6 form-check-label justify-content-center" for="0607">Contemporáneo</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                </div>
            </div>
        </div>
        <hr width="100%" size="5" noshade>
        <h5>3. Marque las características correctas en relación a la época que se menciona</h5>

        <div class="row form-group">
            <div class="col-1"></div>
            <div class='col-1 pregunta centrar-content' id='pregunta7'>
                <h5><label style="text-align: center;">Edad Media</label></h5>
            </div>
            <div class="col">
                <div class='row'>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check  col" style="height: 100%;">
                            <input type="checkbox" class="respuesta7 form-check-input" value="A" id="0701"
                                name="respuesta7[]">
                            <label class="respuesta7 form-check-label justify-content-center" for="0701">Monodia</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input type="checkbox" class="respuesta7 form-check-input" value="B" id="0702"
                                name="respuesta7[]">
                            <label class="respuesta7 form-check-label justify-content-center" for="0702">Palestrina</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input type="checkbox" class="respuesta7 form-check-input" value="C" id="0703"
                                name="respuesta7[]">
                            <label class="respuesta7 form-check-label justify-content-center" for="0703">Canto gregoriano</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input type="checkbox" class="respuesta7 form-check-input" value="D" id="0704"
                                name="respuesta7[]">
                            <label class="respuesta7 form-check-label justify-content-center" for="0704">Armonía</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                </div>
                <div class="row">
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input type="checkbox" class="respuesta7 form-check-input" value="F" id="0705"
                                name="respuesta7[]">
                            <label class="respuesta7 form-check-label justify-content-center" for="0705">Pianoforte</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input type="checkbox" class="respuesta7 form-check-input" value="G" id="0706"
                                name="respuesta7[]">
                            <label class="respuesta7 form-check-label justify-content-center" for="0706">Las cruzadas</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input type="checkbox" class="respuesta7 form-check-input" value="H" id="0707"
                                name="respuesta7[]">
                            <label class="respuesta7 form-check-label justify-content-center" for="0707">Descubrimiento de América</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input type="checkbox" class="respuesta7 form-check-input" value="I" id="0708"
                                name="respuesta7[]">
                            <label class="respuesta7 form-check-label justify-content-center" for="0708">Idioma latín</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>


        <!------------------------------------------------------>
        <hr width="100%" size="5" noshade>
        <h5>4. Marque las características correctas en relación a la época que se menciona</h5>

        <div class="row form-group">
            <div class="col-1"></div>
            <div class='col-1 pregunta centrar-content' id='pregunta8'>
                <h5><label style="text-align: center;">Clásico</label></h5>
            </div>
            <div class="col">
                <div class='row'>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check  col" style="height: 100%;">
                            <input type="checkbox" class="respuesta8 form-check-input" value="A" id="0801"
                                name="respuesta8[]">
                            <label class="respuesta8 form-check-label justify-content-center"
                                for="0801">Sistema modal</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input type="checkbox" class="respuesta8 form-check-input" value="B" id="0802"
                                name="respuesta8[]">
                            <label class="respuesta8 form-check-label justify-content-center" for="0802">Poema Sinfónico</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input type="checkbox" class="respuesta8 form-check-input" value="C" id="0803"
                                name="respuesta8[]">
                            <label class="respuesta8 form-check-label justify-content-center"
                                for="0803">J. Haydn</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input type="checkbox" class="respuesta8 form-check-input" value="D" id="0804"
                                name="respuesta8[]">
                            <label class="respuesta8 form-check-label justify-content-center" for="0804">Lied</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                </div>
                <div class="row">
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input type="checkbox" class="respuesta8 form-check-input" value="F" id="0805"
                                name="respuesta8[]">
                            <label class="respuesta8 form-check-label justify-content-center" for="0805">Forma sonata</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input type="checkbox" class="respuesta8 form-check-input" value="G" id="0806"
                                name="respuesta8[]">
                            <label class="respuesta8 form-check-label justify-content-center"
                                for="0806">Cuarteto de cuerdas</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input type="checkbox" class="respuesta8 form-check-input" value="H" id="0807"
                                name="respuesta8[]">
                            <label class="respuesta8 form-check-label justify-content-center" for="0807">Opera La flauta mágica</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input type="checkbox" class="respuesta8 form-check-input" value="I" id="0808"
                                name="respuesta8[]">
                            <label class="respuesta8 form-check-label justify-content-center" for="0808">F. Chopin</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </form>
    <div class="modal fade" id="audioreprod" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title">Editar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="text-align: center">
                    <h4>Los audios mostrados en este examen se reproduciran solamente una ves.</h4>
                </div>
                <div class="modal-footer centrar-content">
                    <button type="submit" class="btn btn-success" form="formularioupd">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
