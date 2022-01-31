<div id='title'>
    <h2>Universidad Nacional de Música</h2>
    <h3>Sección de Estudios Superiores</h3>
    <h4>Admisión 2022</h4>
    <h4>Examen de Razonamiento verbal</h4>
</div>
<hr width="100%" size="5" noshade>
<form action="{{ route('evaluar', ['id_postulante' => $id_postulante]) }}" id="formevaluar" method="post">
    @csrf
    <h4>Lee atentamente las preguntas y marca la alternativa que corresponde.</h4>
    <br>
    <h4>INTERPRETACIÓN DE LECTURA</h4>
    <h5>Vivimos en un mundo que funciona por modas, la ropa, los peinados, los autos y hasta las 
        manifestaciones culturales son efímeros, lo que hoy causa furor y es imprescindible poseer 
        o escuchar, mañana pasa al olvido y pierde toda la importancia que pudo tener.<br>
        Sin embargo cuando nos percatamos que los maestros del barroco o el clásico compusieron  
        hace siglos, en otro continente, para otra gente y que a pesar del tiempo transcurrido 
        siguen estando vigentes, que son parte de la cultura de todos los países, que una gran mayoría 
        de personas puede al menos tararear el tema del Himno a la Alegría cuando son incapaces de 
        recordar que se bailaba hace 5 años, y su música es apreciada por un público en lugares que ni 
        siquiera estaban en el mapa cuando estas obras fueron compuestas, nos preguntamos ¿por qué?
       La respuesta como siempre es simple y compleja a la vez, por una parte se puede decir que lo 
       bueno perdura, que la calidad no pasa de moda o hasta que es bonita, pero no debemos quedarnos 
       ahí, hay motivos más profundos que convierten a la música clásica en atemporal. El ser humano 
       necesita elementos en su vida cotidiana que vayan más allá de sus necesidades culturales básicas, 
       la gran música transmite una serie de ideas y de emociones que van directamente a lo más hondo del 
       corazón y a su vez de la inteligencia, y pienso que esto es lo que hace a la música clásica 
       trascendental, este poder  llegar a todas las partes que conforman nuestra sensibilidad, porque 
       a la vez podemos sentir alegría, melancolía, tristeza, espíritu de lucha o hasta ganas de bailar 
       y al mismo tiempo apreciamos la maravilla  de la forma, la riqueza de la orquestación, la perfecta 
       estructura que hace que las grandes obras no pierdan la capacidad de abolir el tiempo y la 
       distancia.
       </h5>
    <div class="form-group">
        <div class='pregunta' id='pregunta1'>
            <h5><label>1.	¿Cuál es la alternativa correcta según la lectura?</label></h5>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check  col">
                    <input  type="radio" class="respuesta1 form-check-input" value="A"
                        id="0101" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0101">a)	La moda sobrevive en el tiempo.</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta1 form-check-input" value="B"
                        id="0102" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0102">b)	La música clásica tiene relación con las emociones y el intelecto.</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta1 form-check-input" value="C"
                        id="0103" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0103">c)	La música clásica es solo para un grupo específico de personas.</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta1 form-check-input" value="D"
                        id="0104" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0104">d)	Toda manifestación cultural es efímera por naturaleza.</label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
    <hr width="100%" size="5" noshade>
    <h4>RELACIONES ANALÓGICAS</h4>
    <h5>Marca la alternativa que cumpla con la relación establecida en las palabras base.</h5>
    <div class="form-group">
        <div class='pregunta' id='pregunta2'>
            <h5><label>2.	PINTURA: COLOR</label></h5>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta2 form-check-input" value="A"
                        id="0201" name="respuesta2">
                    <label class="form-check-label" for="0201">a) Arte: creación</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta2 form-check-input" value="B"
                        id="0202" name="respuesta2">
                    <label class="form-check-label " for="0202">b) Agua: oxígeno</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta2" value="C"
                        id="0203" name="respuesta2">
                    <label class="form-check-label" for="0203">c) Música: nota</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta2" value="D"
                        id="0204" name="respuesta2">
                    <label class="form-check-label" for="0204">d) Poesía: rima</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta2" value="E"
                        id="0205" name="respuesta2">
                    <label class="form-check-label" for="0205">e) Trabajo: resultado</label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
    <hr width="100%" size="5" noshade>
    <h4>TÉRMINOS INCLUIDOS</h4>
    <div class="form-group">
        <div class='pregunta' id='pregunta3'>
            <h5><label>3.	¿Qué opción incluye conceptualmente al resto?</label></h5>
        </div>
        
        <div class='container'>
            <div class='row'>
                <div class='col'>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input"
                                value="A" id="0301" name="respuesta3">
                            <label class="respuesta3 form-check-label" for="0301">a)	Muebles</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input"
                                value="B" id="0302" name="respuesta3">
                            <label class="respuesta3 form-check-label" for="0302">b)	Pisos</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input"
                                value="C" id="0303" name="respuesta3">
                            <label class="respuesta3 form-check-label" for="0303">c)	Casa</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input"
                                value="D" id="0304" name="respuesta3">
                            <label class="respuesta3 form-check-label" for="0304">d)	Habitantes </label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input"
                                value="E" id="0305" name="respuesta3">
                            <label class="respuesta3 form-check-label" for="0305">e)	Terreno</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr width="100%" size="5" noshade>
    <h4>ANTÓNIMOS EN CONTEXTO</h4>
    <h5>Marca la alternativa correcta que corresponda al antónimo de la palabra subrayada.</h5>
    <div class="form-group">
        <div class='pregunta' id='pregunta4'>
            <h5><label>4.	Para estudiar correctamente hay que reflexionar.</label></h5>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta4 form-check-input" value="A"
                        id="0401" name="respuesta4">
                    <label class="form-check-label" for="0401">a) Descuidar</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta4 form-check-input" value="B"
                        id="0402" name="respuesta4">
                    <label class="form-check-label " for="0402">b) Pensar</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta4" value="C"
                        id="0403" name="respuesta4">
                    <label class="form-check-label" for="0403">c) Contemplar</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta4" value="D"
                        id="0404" name="respuesta4">
                    <label class="form-check-label" for="0404">d) Discurrir</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta4" value="E"
                        id="0405" name="respuesta4">
                    <label class="form-check-label" for="0405">e) Cavilar</label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
</form>
