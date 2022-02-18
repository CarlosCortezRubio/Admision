<div id='title'>
    <h2>Universidad Nacional de Música</h2>
    <h3>Sección de Estudios Superiores</h3>
    <h4>Admisión 2022</h4>
    <h4>Examen de Historia del Perú</h4>
</div>
<hr width="100%" size="5" noshade>
<form action="{{ route('evaluar', ['id_postulante' => $id_postulante,'cod_examen' => session('examen')]) }}" id="formevaluar" method="post">
    @csrf
    <h4>Lee atentamente las preguntas y marca la alternativa que corresponde.</h4>
    <div class="form-group">
        <div class='pregunta' id='pregunta1'>
            <h5><label>1.	El 8 de setiembre del año 1820 se produjo el desembarco de la expedición 
                libertadora al mando del Libertador Don José de San Martín. Y esto se produjo en la 
                Bahía de Paracas, que queda en:</label></h5>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check  col">
                    <input  type="radio" class="respuesta1 form-check-input" value="A"
                        id="0101" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0101">a) En el Departamento de Lima</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta1 form-check-input" value="B"
                        id="0102" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0102">b) En el Puerto del Callao.</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta1 form-check-input" value="C"
                        id="0103" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0103">c) En el departamento de Ica</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta1 form-check-input" value="D"
                        id="0104" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0104">d) En Pisco.</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta1 form-check-input" value="E"
                        id="0105" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0105">e) En Paracas.</label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
    <hr width="100%" size="5" noshade>
    <div class="form-group">
        <div class='pregunta' id='pregunta2'>
            <h5><label>2.	El 28 de julio de 1821 Don José de San Martín, proclama y jura la 
                independencia del Perú en la Plaza Mayor de Lima. ¿Quiénes acompañaron a San 
                Martín en este hecho Histórico?</label></h5>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta2 form-check-input" value="A"
                        id="0201" name="respuesta2">
                    <label class="form-check-label" for="0201">a) La Junta de vecinos de Lima</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta2 form-check-input" value="B"
                        id="0202" name="respuesta2">
                    <label class="form-check-label " for="0202">b) Los delegados de todas las regiones.</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta2" value="C"
                        id="0203" name="respuesta2">
                    <label class="form-check-label" for="0203">c) El pueblo de Lima</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta2" value="D"
                        id="0204" name="respuesta2">
                    <label class="form-check-label" for="0204">d) El Cabildo Abierto junto al pueblo de Lima</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta2" value="E"
                        id="0205" name="respuesta2">
                    <label class="form-check-label" for="0205">e) El Cabildo Abierto y la Confederación vecinal de Lima.</label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
    <hr width="100%" size="5" noshade>
    <div class="form-group">
        <div class='pregunta' id='pregunta3'>
            <h5><label>3.	El Primer Militarismo y el de los primeros caudillos del Perú independiente 
                se dio entre los años 1827 al 1836, señale dos de ellos que no pertenecen a esta 
                etapa.</label></h5>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col'>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="checkbox" class="respuesta3 form-check-input"
                                value="A" id="0301" name="respuesta3[]">
                            <label class="respuesta3 form-check-label" for="0301">a) José de la Mar.</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="checkbox" class="respuesta3 form-check-input"
                                value="B" id="0302" name="respuesta3[]">
                            <label class="respuesta3 form-check-label" for="0302">b) Agustín Gamarra.</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="checkbox" class="respuesta3 form-check-input"
                                value="C" id="0303" name="respuesta3[]">
                            <label class="respuesta3 form-check-label" for="0303">c) Juan Velasco Alvarado</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="checkbox" class="respuesta3 form-check-input"
                                value="D" id="0304" name="respuesta3[]">
                            <label class="respuesta3 form-check-label" for="0304">d) Luis José de Orbegoso</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="checkbox" class="respuesta3 form-check-input"
                                value="E" id="0305" name="respuesta3[]">
                            <label class="respuesta3 form-check-label" for="0305">e) Francisco Morales Bermúdez.</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr width="100%" size="5" noshade>
    <div class="form-group">
        <div class='pregunta' id='pregunta4'>
            <h5><label>4.   Tras la creación de tres estados: Nor Peruano, Sur Peruano y El Estado 
                Boliviano, el general Santa Cruz, convocó a un Congreso para la creación de la 
                Confederación Perú Boliviana el 28 de octubre de 1836. ¿En qué ciudad se realizó 
                dicho congreso?</label></h5>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta4 form-check-input" value="A"
                        id="0401" name="respuesta4">
                    <label class="form-check-label" for="0401">a) Chuquisaca (actual Sucre)</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta4 form-check-input" value="B"
                        id="0402" name="respuesta4">
                    <label class="form-check-label " for="0402">b) La Paz.</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta4" value="C"
                        id="0403" name="respuesta4">
                    <label class="form-check-label" for="0403">c) Lima</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta4" value="D"
                        id="0404" name="respuesta4">
                    <label class="form-check-label" for="0404">d) Puno.</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta4" value="E"
                        id="0405" name="respuesta4">
                    <label class="form-check-label" for="0405">e) Tacna.</label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
    <hr width="100%" size="5" noshade>
    <div class="form-group">
        <div class='pregunta' id='pregunta5'>
            <h5><label>5.   En el aspecto económico en las primeras décadas de la República la actividad 
                de mayor rentabilidad fue la explotación del Guano a raíz del descubrimiento de sus 
                propiedades por Alexander Von Humboldt. Señale cual ha sido esa característica del 
                guano que convirtió al Perú en el primer país del mundo de dicha explotación</label></h5>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta5 form-check-input" value="A"
                        id="0501" name="respuesta5">
                    <label class="form-check-label" for="0501">a) Fertilizante para la agricultura.</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta5 form-check-input" value="B"
                        id="0502" name="respuesta5">
                    <label class="form-check-label " for="0502">b) Para el uso en el crecimiento de la pesca.</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta5" value="C"
                        id="0503" name="respuesta5">
                    <label class="form-check-label" for="0503">c) Fertilizante para la ganadería.</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta5" value="D"
                        id="0504" name="respuesta5">
                    <label class="form-check-label" for="0504">d) Fortalecía las embarcaciones marinas.</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta5" value="E"
                        id="0505" name="respuesta5">
                    <label class="form-check-label" for="0505">e) Fertilizante para el petróleo.</label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
</form>
