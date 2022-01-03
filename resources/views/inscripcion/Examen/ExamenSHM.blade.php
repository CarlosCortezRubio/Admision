<div class="container col-10 card card-primary card-outline elevation-2">
    <div id='title'>
        <hr width="100%" size="5" noshade>
        <h2>Universidad Nacional de Música</h2>
        <h3>Sección de Estudios Superiores</h3>
        <h4>Admisión 2022</h4>
        <h4>Examen Tipo de Apreciación Histórico Musical</h4>
    </div>
    <hr width="100%" size="5" noshade>
    <form action="/ExamenTipo/PHP/VISTA/Controller/Superior/ExamenHM.php" method="post">
        <h5>1. Elija las alternativas correctas respecto a la audición, puede marcar más de una por categoría:</h5>
     

        <div class='centrar-content col'>
            <audio controls>
                <source src="/ExamenTipo/AUDIO/ExamenSHM/P1.mp3" type="audio/mp3">

                <object type="application/x-shockwave-flash" data="player.swf?miArchivo=mi-archivo-de-audio.mp3">
                    <param name="movie" value="player.swf?miArchivo=mi-archivo-de-audio.mp3">
                    <a href="mi-archivo-de-audio.mp3">Descárgate aquí mi archivo de audio</a>
                </object>
            </audio>
        </div>
        <br>
        <div class="row">
            <div class="col form-group">
                <div class='pregunta' id='pregunta1'>
                    <h3><label>Género</label></h3>
                </div>
                <div class='container'>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check  col">
                            <input required  type="radio" class="respuesta1 form-check-input" value="A" id="0101" name="respuesta1">
                            <label class="respuesta1 form-check-label justify-content-center" for="0101">Ópera</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required  type="radio" class="respuesta1 form-check-input" value="B" id="0102" name="respuesta1">
                            <label class="respuesta1 form-check-label justify-content-center" for="0102">Ballet</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required  type="radio" class="respuesta1 form-check-input" value="C" id="0103" name="respuesta1">
                            <label class="respuesta1 form-check-label justify-content-center" for="0103">Programático</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required type="radio" class="respuesta1 form-check-input" value="D" id="0104" name="respuesta1">
                            <label class="respuesta1 form-check-label justify-content-center" for="0104">Solista instrumental o vocal</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required  type="radio" class="respuesta1 form-check-input" value="E" id="0105" name="respuesta1">
                            <label class="respuesta1 form-check-label justify-content-center" for="0105">Poema sinfónico</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required  type="radio" class="respuesta1 form-check-input" value="F" id="0106" name="respuesta1">
                            <label class="respuesta1 form-check-label justify-content-center" for="0106">Concierto</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required  type="radio" class="respuesta1 form-check-input" value="G" id="0107" name="respuesta1">
                            <label class="respuesta1 form-check-label justify-content-center" for="0107">Cantata</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required  type="radio" class="respuesta1 form-check-input" value="H" id="0108" name="respuesta1">
                            <label class="respuesta1 form-check-label justify-content-center" for="0108">Coral</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required  type="radio" class="respuesta1 form-check-input" value="I" id="0109" name="respuesta1">
                            <label class="respuesta1 form-check-label justify-content-center" for="0109">Oratorio</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                </div>
            </div>

            <div class="col form-group">
                <div class='pregunta' id='pregunta2'>
                    <h3><label>Tipo de conjunto o agrupación instrumental</label></h3>
                </div>
                <div class='container'>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required  type="radio" class="respuesta2 form-check-input" value="A" id="0201" name="respuesta2">
                            <label class="respuesta2 form-check-label justify-content-center" for="0201">Orquesta de cámara</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required  type="radio" class="respuesta2 form-check-input" value="B" id="0202" name="respuesta2">
                            <label class="respuesta2 form-check-label justify-content-center" for="0202">Orquesta sinfónica</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required type="radio" class="form-check-input respuesta2" value="C" id="0203" name="respuesta2">
                            <label class="respuesta2 form-check-label justify-content-center" for="0203">Conjunto coral – instrumental</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required  type="radio" class="form-check-input respuesta2" value="D" id="0204" name="respuesta2">
                            <label class="respuesta2 form-check-label justify-content-center" for="0204">Conjunto de cuerdas</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required  type="radio" class="form-check-input respuesta2" value="E" id="0205" name="respuesta2">
                            <label class="respuesta2 form-check-label justify-content-center" for="0205">Conjunto de maderas</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required  type="radio" class="form-check-input respuesta2" value="F" id="0206" name="respuesta2">
                            <label class="respuesta2 form-check-label justify-content-center" for="0206">Cuarteto de cuerdas</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required  type="radio" class="form-check-input respuesta2" value="G" id="0207" name="respuesta2">
                            <label class="respuesta2 form-check-label justify-content-center" for="0207">Instrumento o voz solista</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required  type="radio" class="form-check-input respuesta2" value="H" id="0208" name="respuesta2">
                            <label class="respuesta2 form-check-label justify-content-center" for="0208">Conjunto de metales</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required type="radio" class="form-check-input respuesta2" value="I" id="0209" name="respuesta2">
                            <label class="respuesta2 form-check-label justify-content-center" for="0209">Banda sinfónica</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required type="radio" class="form-check-input respuesta2" value="J" id="0210" name="respuesta2">
                            <label class="respuesta2 form-check-label justify-content-center" for="0210">Sinfónico-coral</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                </div>
            </div>
        </div>


        <hr width="100%" size="5" noshade>
        <h5>2. Elija las alternativas correctas respecto a la audición, puede marcar más de una por categoría:</h5>
    

        <div class='centrar-content col'>
            <audio controls>
                <source src="/ExamenTipo/AUDIO/ExamenSHM/P2.mp3" type="audio/mp3">

                <object type="application/x-shockwave-flash" data="player.swf?miArchivo=mi-archivo-de-audio.mp3">
                    <param name="movie" value="player.swf?miArchivo=mi-archivo-de-audio.mp3">
                    <a href="mi-archivo-de-audio.mp3">Descárgate aquí mi archivo de audio</a>
                </object>
            </audio>
        </div>
        <br>
        <div class="row">
            <div class="col form-group">
                <div class='pregunta'  id='pregunta3'>
                    <h3><label>Género</label></h3>
                </div>
                <div class='container'>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check  col">
                            <input required type="radio" class="respuesta3 form-check-input" value="A" id="0301" name="respuesta3">
                            <label class="respuesta3 form-check-label justify-content-center" for="0301">Ópera</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required  type="radio" class="respuesta3 form-check-input" value="B" id="0302" name="respuesta3">
                            <label class="respuesta3 form-check-label justify-content-center" for="0302">Ballet</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required  type="radio" class="respuesta3 form-check-input" value="C" id="0303" name="respuesta3">
                            <label class="respuesta3 form-check-label justify-content-center" for="0303">Programático</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required  type="radio" class="respuesta3 form-check-input" value="D" id="0304" name="respuesta3">
                            <label class="respuesta3 form-check-label justify-content-center" for="0304">Solista instrumental o vocal</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required type="radio" class="respuesta3 form-check-input" value="E" id="0305" name="respuesta3">
                            <label class="respuesta3 form-check-label justify-content-center" for="0305">Poema sinfónico</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required type="radio" class="respuesta3 form-check-input" value="F" id="0306" name="respuesta3">
                            <label class="respuesta3 form-check-label justify-content-center" for="0306">Concierto</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required  type="radio" class="respuesta3 form-check-input" value="G" id="0307" name="respuesta3">
                            <label class="respuesta3 form-check-label justify-content-center" for="0307">Cantata</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required  type="radio" class="respuesta3 form-check-input" value="H" id="0308" name="respuesta3">
                            <label class="respuesta3 form-check-label justify-content-center" for="0308">Coral</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required type="radio" class="respuesta3 form-check-input" value="I" id="0309" name="respuesta3">
                            <label class="respuesta3 form-check-label justify-content-center" for="0309">Oratorio</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                </div>
            </div>

            <div class="col form-group">
                <div class='pregunta'  id='pregunta4'>
                    <h3><label>Tipo de conjunto o agrupación instrumental</label></h3>
                </div>
                <div class='container'>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required  type="radio" class="respuesta4 form-check-input" value="A" id="0401" name="respuesta4">
                            <label class="respuesta4 form-check-label justify-content-center" for="0401">Orquesta de cámara</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required type="radio" class="respuesta4 form-check-input" value="B" id="0402" name="respuesta4">
                            <label class="respuesta4 form-check-label justify-content-center" for="0402">Orquesta sinfónica</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required type="radio" class="form-check-input respuesta4" value="C" id="0403" name="respuesta4">
                            <label class="respuesta4 form-check-label justify-content-center" for="0403">Conjunto coral – instrumental</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required type="radio" class="form-check-input respuesta4" value="D" id="0404" name="respuesta4">
                            <label class="respuesta4 form-check-label justify-content-center" for="0404">Conjunto de cuerdas</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required type="radio" class="form-check-input respuesta4" value="E" id="0405" name="respuesta4">
                            <label class="respuesta4 form-check-label justify-content-center" for="0405">Conjunto de maderas</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required type="radio" class="form-check-input respuesta4" value="F" id="0406" name="respuesta4">
                            <label class="respuesta4 form-check-label justify-content-center" for="0406">Cuarteto de cuerdas</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required type="radio" class="form-check-input respuesta4" value="G" id="0407" name="respuesta4">
                            <label class="respuesta4 form-check-label justify-content-center" for="0407">Instrumento o voz solista</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required type="radio" class="form-check-input respuesta4" value="H" id="0408" name="respuesta4">
                            <label class="respuesta4 form-check-label justify-content-center" for="0408">Conjunto de metales</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required type="radio" class="form-check-input respuesta4" value="I" id="0409" name="respuesta4">
                            <label class="respuesta4 form-check-label justify-content-center" for="0409">Banda sinfónica</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input required type="radio" class="form-check-input respuesta4" value="J" id="0410" name="respuesta4">
                            <label class="respuesta4 form-check-label justify-content-center" for="0410">Sinfónico-coral</label>
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
            <div class='col-1 pregunta centrar-content'  id='pregunta5'>
                <h5><label style="text-align: center;">Época Clásica</label></h5>
            </div>
            <div class="col">
                <div class='row'>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check  col" style="height: 100%;">  
                            <input  type="checkbox" class="respuesta5 form-check-input" value="A" id="0501" name="respuesta5[]">
                            <label class="respuesta5 form-check-label justify-content-center" for="0501">9na Sinfonía Beethoven</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input   type="checkbox" class="respuesta5 form-check-input" value="B" id="0502" name="respuesta5[]">
                            <label class="respuesta5 form-check-label justify-content-center" for="0502">Joseph Haydn</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input  type="checkbox" class="respuesta5 form-check-input" value="C" id="0503" name="respuesta5[]">
                            <label class="respuesta5 form-check-label justify-content-center" for="0503">Víctor Hugo</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input  type="checkbox" class="respuesta5 form-check-input" value="D" id="0504" name="respuesta5[]">
                            <label class="respuesta5 form-check-label justify-content-center" for="0504">Giga</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input  type="checkbox" class="respuesta5 form-check-input" value="E" id="0505" name="respuesta5[]">
                            <label class="respuesta5 form-check-label justify-content-center" for="0505">Tonalidades distanciadas</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                </div>
                <div class="row">
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input  type="checkbox" class="respuesta5 form-check-input" value="F" id="0506" name="respuesta5[]">
                            <label class="respuesta5 form-check-label justify-content-center" for="0506">Don Giovanni</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input  type="checkbox" class="respuesta5 form-check-input" value="G" id="0507" name="respuesta5[]">
                            <label class="respuesta5 form-check-label justify-content-center" for="0507">Música programática</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input  type="checkbox" class="respuesta5 form-check-input" value="H" id="0508" name="respuesta5[]">
                            <label class="respuesta5 form-check-label justify-content-center" for="0508">Revolución francesa</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input  type="checkbox" class="respuesta5 form-check-input" value="I" id="0509" name="respuesta5[]">
                            <label class="respuesta5 form-check-label justify-content-center" for="0509">Abraham Valdelomar</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class="form-check " style="height: 100%;">
                            <input  type="checkbox" class="respuesta5 form-check-input" value="J" id="0510" name="respuesta5[]">
                            <label class="respuesta5 form-check-label justify-content-center" for="0510">Forma sonata</label>
                        </div>
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
            <div class='col-1 pregunta centrar-content' id='pregunta6'>
                <h5><label style="text-align: center;">Época Renacentista</label></h5>
            </div>
            <div class="col">
                <div class='row'>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check  col" style="height: 100%;">  
                            <input  type="checkbox" class="respuesta6 form-check-input" value="A" id="0601" name="respuesta6[]">
                            <label class="respuesta6 form-check-label justify-content-center" for="0601">Madrigal</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input  type="checkbox" class="respuesta6 form-check-input" value="B" id="0602" name="respuesta6[]">
                            <label class="respuesta6 form-check-label justify-content-center" for="0602">Canto gregoriano</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input  type="checkbox" class="respuesta6 form-check-input" value="C" id="0603" name="respuesta6[]">
                            <label class="respuesta6 form-check-label justify-content-center" for="0603">Shakespeare</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input  type="checkbox" class="respuesta6 form-check-input" value="D" id="0604" name="respuesta6[]">
                            <label class="respuesta6 form-check-label justify-content-center" for="0604">Las Cruzadas</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input  type="checkbox" class="respuesta6 form-check-input" value="E" id="0605" name="respuesta6[]">
                            <label class="respuesta6 form-check-label justify-content-center" for="0605">Ars Nova</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                </div>
                <div class="row">
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input  type="checkbox" class="respuesta6 form-check-input" value="F" id="0606" name="respuesta6[]">
                            <label class="respuesta6 form-check-label justify-content-center" for="0606">Imperio Incaico</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input  type="checkbox" class="respuesta6 form-check-input" value="G" id="0607" name="respuesta6[]">
                            <label class="respuesta6 form-check-label justify-content-center" for="0607">Palestrina</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input  type="checkbox" class="respuesta6 form-check-input" value="H" id="0608" name="respuesta6[]">
                            <label class="respuesta6 form-check-label justify-content-center" for="0608">J.S Bach</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class='col-1'></div>
                        <div class="form-check col" style="height: 100%;">
                            <input  type="checkbox" class="respuesta6 form-check-input" value="I" id="0609" name="respuesta6[]">
                            <label class="respuesta6 form-check-label justify-content-center" for="0609">El Concilio de Trento</label>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <div class='col'>
                        <div class="form-check " style="height: 100%;">
                            <input type="checkbox" class="respuesta6 form-check-input" value="J" id="0610" name="respuesta6[]">
                            <label class="respuesta6 form-check-label justify-content-center" for="0610">Robin Hood</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
        
            <div class='centrar-content'>
                <button type="submit" class="btn btn-success">Grabar</button>
            </div>
        
    </form>
</div>