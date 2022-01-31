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
    <h5>El oído absoluto es la facultad de reconocer o reproducir cualquier sonido   sin necesidad de 
        tener una referencia. Les pongo un ejemplo, si escuchamos el ruido producido por la bocina de 
        un automóvil, todo el mundo que haya escuchado antes un sonido similar lo reconocerá como un 
        claxón, pero el poseedor de oído absoluto dirá además que lo que está sonando es un si bemol.  
        En realidad esto es una forma de memoria, puesto que la persona que posee esta habilidad, 
        relaciona automáticamente el sonido que está oyendo con el nombre de la nota  que le hayan 
        enseñado y viceversa, de la misma manera que uno asocia la palabra “azul” con un color 
        específico sin posibilidad de confundirse.<br>
        Acerca de porque algunas personas nacen con este don, los científicos aún no se han puesto 
        de acuerdo, pareciera ser que es hereditario, que no puede ser adquirido, que es más frecuente 
        en los ciegos y que no tiene relación con la capacidad musical de su poseedor.<br>
        Aparentemente los pájaros tienen algo parecido al oído absoluto. En todo caso la altura de 
        sus cantos es siempre la misma, aunque esto podría explicarse también sencillamente por una 
        cuestión muscular, es decir la tensión de sus cuerdas vocales. Un experimento realizado por 
        Sir james Swinburne, puso a prueba esta teoría enseñándole a un loro a repetir melodías de 
        Beethoven, lo cual hacía siempre en el buen tono, hasta que un día lo expuso al sol y el animal 
        comenzó a cantar  absolutamente desafinado. Esto prueba tal vez que en los animales la memoria 
        auditiva forma parte de un todo y que la altura de los sonidos no puede extraerse de un 
        contexto dado.
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
                    <label class="respuesta1 form-check-label" for="0101">a)	El oído absoluto refleja la capacidad musical de su poseedor.</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta1 form-check-input" value="B"
                        id="0102" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0102">b)	Se puede aprender a tener oído absoluto.</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta1 form-check-input" value="C"
                        id="0103" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0103">c)	Los pájaros cantan siempre con los mismos sonidos.</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta1 form-check-input" value="D"
                        id="0104" name="respuesta1">
                    <label class="respuesta1 form-check-label" for="0104">d)	El oído absoluto tiene relación con la memoria.</label>
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
            <h5><label>2.	INHALAR: EXHALAR</label></h5>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta2 form-check-input" value="A"
                        id="0201" name="respuesta2">
                    <label class="form-check-label" for="0201">a) Agarrar: desasir</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta2 form-check-input" value="B"
                        id="0202" name="respuesta2">
                    <label class="form-check-label " for="0202">b) Litigar: abogar</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta2" value="C"
                        id="0203" name="respuesta2">
                    <label class="form-check-label" for="0203">c) Loar: agraviar</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta2" value="D"
                        id="0204" name="respuesta2">
                    <label class="form-check-label" for="0204">d) Cantar: oír</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta2" value="E"
                        id="0205" name="respuesta2">
                    <label class="form-check-label" for="0205">e) Saltar: caer</label>
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
                            <label class="respuesta3 form-check-label" for="0301">a)	Partituras.</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input"
                                value="B" id="0302" name="respuesta3">
                            <label class="respuesta3 form-check-label" for="0302">b)	Libros.</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input"
                                value="C" id="0303" name="respuesta3">
                            <label class="respuesta3 form-check-label" for="0303">c)	Fichas.</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input"
                                value="D" id="0304" name="respuesta3">
                            <label class="respuesta3 form-check-label" for="0304">d)	Biblioteca.</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class="form-check col">
                            <input  type="radio" class="respuesta3 form-check-input"
                                value="E" id="0305" name="respuesta3">
                            <label class="respuesta3 form-check-label" for="0305">e)	Computadoras.</label>
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
            <h5><label>4.	La interpretación musical debe ser refinada.</label></h5>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta4 form-check-input" value="A"
                        id="0401" name="respuesta4">
                    <label class="form-check-label" for="0401">a) Elegante.</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="respuesta4 form-check-input" value="B"
                        id="0402" name="respuesta4">
                    <label class="form-check-label " for="0402">b) Sutil.</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta4" value="C"
                        id="0403" name="respuesta4">
                    <label class="form-check-label" for="0403">c) Limpia.</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta4" value="D"
                        id="0404" name="respuesta4">
                    <label class="form-check-label" for="0404">d) Breve.</label>
                </div>
                <div class='col-1'></div>
            </div>
            <div class='row'>
                <div class='col-1'></div>
                <div class="form-check col">
                    <input  type="radio" class="form-check-input respuesta4" value="E"
                        id="0405" name="respuesta4">
                    <label class="form-check-label" for="0405">e) Vulgar.</label>
                </div>
                <div class='col-1'></div>
            </div>
        </div>
    </div>
</form>
