<div id='title'>
    <h2>Universidad Nacional de Música</h2>
    <h3>Sección de Estudios Superiores</h3>
    <h4>Admisión 2022</h4>
    <h4>Examen de Cultura General</h4>
</div>
<hr width="100%" size="5" noshade>
<form action="{{ route('evaluar', ['id_postulante' => $id_postulante,'cod_examen' => session('examen')]) }}" id="formevaluar" method="post">
    @csrf
    <h4>Lee atentamente las preguntas y marca la alternativa que corresponde.</h4>
    <div class="form-group">
        <div class='pregunta' id='pregunta1'>
            <h5><label>1.	¿Qué elementos radioactivos descubrieron Marie y Pierre Curie?</label></h5>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check  col">
                    <input  type="radio" class="respuesta1 form-check-input" value="A"
                        id="0101" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0101">a) Curio y Radón</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta1 form-check-input" value="B"
                        id="0102" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0102">b) Actinio y Torio</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta1 form-check-input" value="C"
                        id="0103" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0103">c) Plutonio y Francio</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta1 form-check-input" value="D"
                        id="0104" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0104">d) Radio y Polonio</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta1 form-check-input" value="E"
                        id="0105" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0105">e) Astato y Fermio</label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>

    <hr width="100%" size="5" noshade>

    <div class="form-group">
        <div class='pregunta' id='pregunta2'>
            <h5><label>2.	¿Quién escribió España, aparta de mí este cáliz?</label></h5>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta2 form-check-input" value="A"
                        id="0201" name="respuesta2">
                    <label class="form-check-label" for="0201">a) Abraham Valdelomar</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta2 form-check-input" value="B"
                        id="0202" name="respuesta2">
                    <label class="form-check-label " for="0202">b) José Santos Chocano</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta2" value="C"
                        id="0203" name="respuesta2">
                    <label class="form-check-label" for="0203">c) Blanca Varela</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta2" value="D"
                        id="0204" name="respuesta2">
                    <label class="form-check-label" for="0204">d) Javier Heraud</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta2" value="E"
                        id="0205" name="respuesta2">
                    <label class="form-check-label" for="0205">e) César Vallejo</label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
    <hr width="100%" size="5" noshade>
    <div class="form-group">
        <div class='pregunta' id='pregunta3'>
            <h5><label>3. ¿En qué año comenzó la Segunda guerra mundial?</label></h5>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col'>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input"
                                value="A" id="0301" name="respuesta3">
                            <label class="respuesta3 form-check-label" for="0301">a) 1935</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input"
                                value="B" id="0302" name="respuesta3">
                            <label class="respuesta3 form-check-label" for="0302">b) 1936</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input"
                                value="C" id="0303" name="respuesta3">
                            <label class="respuesta3 form-check-label" for="0303">c) 1937</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input"
                                value="D" id="0304" name="respuesta3">
                            <label class="respuesta3 form-check-label" for="0304">d) 1938</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input"
                                value="E" id="0305" name="respuesta3">
                            <label class="respuesta3 form-check-label" for="0305">e) 1947</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr width="100%" size="5" noshade>
    <div class="form-group">
        <div class='pregunta' id='pregunta4'>
            <h5><label>4. ¿Quién pintó El grito?</label></h5>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta4 form-check-input" value="A"
                        id="0401" name="respuesta4">
                    <label class="form-check-label" for="0401">a) Pablo Picasso</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta4 form-check-input" value="B"
                        id="0402" name="respuesta4">
                    <label class="form-check-label " for="0402">b) Edvard Munch</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta4" value="C"
                        id="0403" name="respuesta4">
                    <label class="form-check-label" for="0403">c) Henri Matisse</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta4" value="D"
                        id="0404" name="respuesta4">
                    <label class="form-check-label" for="0404">d) Paul Gauguin</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta4" value="E"
                        id="0405" name="respuesta4">
                    <label class="form-check-label" for="0405">e) Vincent van Gogh</label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
</form>
