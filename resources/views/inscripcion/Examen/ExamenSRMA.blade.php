<div id='title'>
    <h2>Universidad Nacional de Música</h2>
    <h3>Sección de Estudios Superiores</h3>
    <h4>Admisión 2022</h4>
    <h4>Examen de Razonamiento matemático</h4>
</div>
<hr width="100%" size="5" noshade>
<form action="{{ route('evaluar', ['id_postulante' => $id_postulante,'cod_examen' => session('examen')]) }}" id="formevaluar" method="post">
    @csrf
    <h4>Lee atentamente las preguntas y marca la alternativa que corresponde.</h4>
    <div class="form-group">
        <div class='pregunta' id='pregunta1'>
            <h5><label>1.	¿Cuántos rectángulos puedes ver en la siguiente figura?</label></h5>
        </div>
        <div class='centrar-content col'>
            <label><img src="{{ asset('imagen/ExamenSRMA/P1.png') }}" alt="" style="height:100%; width:100%;"></label>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check  col">
                    <input  type="radio" class="respuesta1 form-check-input" value="A"
                        id="0101" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0101">a)	8</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta1 form-check-input" value="B"
                        id="0102" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0102">b)	6</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta1 form-check-input" value="C"
                        id="0103" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0103">c)	9</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta1 form-check-input" value="D"
                        id="0104" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0104">d)	7</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta1 form-check-input" value="E"
                        id="0105" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0105">e)	Ninguna de las anteriores.</label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
    <hr width="100%" size="5" noshade>
    <div class="form-group">
        <div class='pregunta' id='pregunta2'>
            <h5><label>2.	Hallar X en la siguiente sucesión numérica:</label></h5>
        </div>
        <div class='centrar-content col'>
            <label> 1 ; 2 ; 4 ; 7 ; 11 ; X </label>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta2 form-check-input" value="A"
                        id="0201" name="respuesta2">
                    <label class="form-check-label" for="0201">a)	16</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta2 form-check-input" value="B"
                        id="0202" name="respuesta2">
                    <label class="form-check-label " for="0202">b)	13</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta2" value="C"
                        id="0203" name="respuesta2">
                    <label class="form-check-label" for="0203">c)	5</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta2" value="D"
                        id="0204" name="respuesta2">
                    <label class="form-check-label" for="0204">d)	55</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta2" value="E"
                        id="0205" name="respuesta2">
                    <label class="form-check-label" for="0205">e)	Ninguna de las anteriores.</label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
    <hr width="100%" size="5" noshade>
    <div class="form-group">
        <div class='pregunta' id='pregunta3'>
            <h5><label>3.	Dentro de 12 años la edad de tu hermano será el cuádruple de su edad 
                actual. ¿Qué edad tiene tu hermano?</label></h5>
        </div>
        
        <div class='container'>
            <div class='row'>
                <div class='col'>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input"
                                value="A" id="0301" name="respuesta3">
                            <label class="respuesta3 form-check-label" for="0301">a)	6</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input"
                                value="B" id="0302" name="respuesta3">
                            <label class="respuesta3 form-check-label" for="0302">b)	12</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input"
                                value="C" id="0303" name="respuesta3">
                            <label class="respuesta3 form-check-label" for="0303">c)	3</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input"
                                value="D" id="0304" name="respuesta3">
                            <label class="respuesta3 form-check-label" for="0304">d)	4</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input"
                                value="E" id="0305" name="respuesta3">
                            <label class="respuesta3 form-check-label" for="0305">e)	Ninguna de las anteriores.</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr width="100%" size="5" noshade>
    <div class="form-group">
        <div class='pregunta' id='pregunta4'>
            <h5><label>4.	Resolver la siguiente ecuación:</label></h5>
        </div>
        <div class='centrar-content col'>
            <label><img src="{{ asset('imagen/ExamenSRMA/P4.png') }}" alt="" style="height:100%; width:100%;"></label>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta4 form-check-input" value="A"
                        id="0401" name="respuesta4">
                    <label class="form-check-label" for="0401">a)	15</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta4 form-check-input" value="B"
                        id="0402" name="respuesta4">
                    <label class="form-check-label " for="0402">b)	10</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta4" value="C"
                        id="0403" name="respuesta4">
                    <label class="form-check-label" for="0403">c)	9</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta4" value="D"
                        id="0404" name="respuesta4">
                    <label class="form-check-label" for="0404">d)	4</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta4" value="E"
                        id="0405" name="respuesta4">
                    <label class="form-check-label" for="0405">e)	Ninguna de las anteriores.</label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
    <hr width="100%" size="5" noshade>
    <div class="form-group">
        <div class='pregunta' id='pregunta5'>
            <h5><label>5.	Preguntando a un alumno por la nota de su examen responde “si cuadruplico mi 
                nota y resto cuarenta tendría como resultado lo que me hace falta para obtener 20”. ¿Qué 
                nota tiene el alumno?</label></h5>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta5 form-check-input" value="A"
                        id="0501" name="respuesta5">
                    <label class="form-check-label" for="0501">a)	15</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta5 form-check-input" value="B"
                        id="0502" name="respuesta5">
                    <label class="form-check-label " for="0502">b)	12</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta5" value="C"
                        id="0503" name="respuesta5">
                    <label class="form-check-label" for="0503">c)	20</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta5" value="D"
                        id="0504" name="respuesta5">
                    <label class="form-check-label" for="0504">d)	10</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta5" value="E"
                        id="0505" name="respuesta5">
                    <label class="form-check-label" for="0505">e)	Ninguna de las anteriores.</label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
</form>
