<?php
// include('dbconect.php');


$idsede = 1;

// $sqlSelect = "SELECT * FROM encuesta WHERE idprofesor = '$idprofesor' AND idcurso = '$idcurso'";
// $result = mysqli_query($con, $sqlSelect);

// echo "[$sqlSelect]";
// var_dump($result);

$tipoReporte = $_POST ["op"];

switch ($tipoReporte) {
    case 1: // Resulatado por profesor
        $idprofesor = $_POST ["idp"];
        $idcurso = $_POST ["idc"];
        $res = totalPorProfesor($idprofesor, $idcurso, $idsede);
    break;
    case 2: // Cantidad de encuestas Por hacer / Realizadas
        $idprofesor = $_POST ["idp"];
        $idcurso = $_POST ["idc"];
        totalEncuestas();
    break;
    case 3:
        $res = porcentajesEncProf();
    break;
    default:
        ;
    break;
}

function totalEncuestas(){
    include('dbconect.php');
    ?>
    <center><h1>Resumen de encuestas</h1></center>
    <table id="tabla_contenido" class="table table-bordered">
        <thead>
        <tr>
            <th class="line">#</th>
            <th class="line">Profesor</th>
            <th class="line">Encuestas Pendientes</th>
            <th class="line">Encuestas Realizadas</th>
            <th class="line">Porcentaje</th>
        </tr>
        </thead>
        <tbody>
    <?php
    $sqlSelect = "SELECT * FROM public.profesor Order by idprofesor";
    //     $result = mysqli_query($con, $sqlSelect);
    $result = pg_query($con, $sqlSelect);
    $cont = 1;
    while ($row = pg_fetch_array($result)) {
        $idProfesor = $row["idprofesor"];
        $nomProfesor = $row["nom1profesor"];
        
        $res1 = cantEncXidProfesor($idProfesor,$con);
        $res2 = cantEncRealizadasXidProfesor($idProfesor,$con);
        $porc = 0;
        if ($res2 > 0) {
            $porc = $res2 * 100 / $res1;
        }
        ?>
            <tr>
                <td class="line"><?php echo $cont?></td>
                <td class="line"><?php echo $nomProfesor?></td>
                <td class="line"><?php echo $res1?></td>
                <td class="line"><?php echo $res2?></td>
                <td class="line"><?php echo $porc.'%'?></td>
            </tr>
        <?php
        $cont++;
    }
    ?>
        </tbody>
    </table>
    
    <?php
}


function totalPorProfesor($idprofesor, $idcurso, $idsede){
    $datos = obtDatos($idprofesor, $idcurso, $idsede);
    
    // echo "aca";die();
    $cantPreg = 24;
    $cont = 1;
    $dd = 0;
    // while ($row = $datos->fetch_assoc()) {
    while ($row = pg_fetch_array($datos)) {
        $tPreg = 0;
        for ($i = 1; $i < $cantPreg; $i++) {
            $val = obtPuntaje($i,$row["resp".$i]);
            $tPreg = $tPreg + $val;
            $tPregMostrar = number_format($tPreg,2);
            $dd = $dd + $val;
            //         echo '-- Resp'.$i. ' = ' .$row["resp".$i] . " val => $val dd => $dd";
            //         echo '<br>';
        }
        echo '++++Puntuación de la encuesta: '. $cont .': ['.$tPregMostrar." pts.]<br>";
        $cont++;
    }
    
    // $respEnc = $dd*20/100;
    $respEnc = 0;
    $respEnc2 = 0;
    $niv = 0;
    $det = 0;
    $cont = $cont - 1;
    
    if ($cont>0) {
        // $respEnc = $dd*20/100;
        $respEnc = number_format($dd,2);
        $respEnc2 = number_format($dd/($cont),2);
        $matEv = rangoEvaluacion($respEnc2);
        $niv = $matEv[0];
        $det = $matEv[1];
    }
    echo '++++Cantidad de encuestas realizadas (n): '.($cont)."<br>";
    echo '++++Total sumatorias de las encuestas: '.$respEnc."<br>";
    echo "++++Total sumatorias/n ($respEnc/($cont)): ".$respEnc2."<br>";
    // echo '++++Total encuestas *20/100: '. $respEnc . "<br>";
    echo '++++Nivel: '. $niv . "<br>";
    echo '++++Detalle: '. $det . "<br>";
}

function porcentajesEncProf(){
    obtDatosEncuesta();
}


function obtDatos($idprofesor,$idcurso,$idsede){
    
    include('dbconect.php');
    $sqlSelect = "SELECT * FROM public.encuesta WHERE idprofesor = '$idprofesor' AND idasignatura = '$idcurso'";
//     $result = mysqli_query($con, $sqlSelect);
    $result = pg_query($con, $sqlSelect);
    
//     echo "[$sqlSelect]";
    return $result;
}
function obtDatosEncuesta(){
    include('dbconect.php');
    
    $matRes = array();
    
    $sqlSelect = "SELECT * FROM public.profesor Order by idprofesor";
    //     $result = mysqli_query($con, $sqlSelect);
    $result = pg_query($con, $sqlSelect);
    $cont = 0;
    while ($row = pg_fetch_array($result)) {
        $idProfesor = $row["idprofesor"];
        $nomProfesor = $row["nom1profesor"];
        echo "++++Profesor : [$idProfesor] [$nomProfesor] <br>";
        
        $sqlAsig = "SELECT * FROM public.prof_cur INNER JOIN public.asignatura USING(idasignatura) where idprofesor = $idProfesor Order by idasignatura";
        $resultAsig = pg_query($con, $sqlAsig);
        
        $numAsig = pg_num_rows($resultAsig);
        echo "numAsig = [$numAsig] <br>";
        if ($numAsig > 0) {
            $contAsig = 0;
            while ($rowAsig = pg_fetch_array($resultAsig)) {
                $idAsignatura = $rowAsig["idasignatura"];
                $nomAsignatura = $rowAsig["nomasignatura"];
                //             $sqlAsig = "SELECT count(*) as cantEnc FROM encuesta where idprofesor = $idProfesor and idasignatura = $idAsignatura";
//                 $sqlAsig = "SELECT count(*) as cantEnc FROM encuesta where idprofesor = $idProfesor and idcurso = $idAsignatura";
//                 $sqlAsig = "SELECT idprofesor as cantEnc FROM encuesta where idprofesor = $idProfesor and idasignatura = $idAsignatura";
                $sqlAsig = "SELECT * FROM public.encuesta where idprofesor = $idProfesor and idasignatura = $idAsignatura";
                $resultEnc = pg_query($con, $sqlAsig);
                
                $numEnc = pg_num_rows($resultEnc);
//                 echo "$sqlAsig <br> cant = [$numEnc] <br>";
                echo "$nomAsignatura  --- numEnc = [$numEnc] <br>";
                if ($numEnc > 1) {
//                     echo "[ $sqlAsig ] <br>";
                    $rowEnc = pg_fetch_array($resultEnc);
//                     $cantEnc = $rowEnc[0]['cantEnc'];
                    $cantEnc = $numEnc;
                }else{
                    $cantEnc = 0;
                }
                $matRes[] = array('idProfesor'=>$idProfesor,'idAsignatura'=>$idAsignatura,'cantEnc'=>$cantEnc);
                
                $contAsig++;
            }
        }
       /* if ($cont>5) {
            break;
        }
        $cont++;*/
    }
    
    //var_dump($matRes);
    
//     echo "[$sqlSelect]";
    return $result;
}
function rangoEvaluacion($valor){
    echo "valor = $valor *********************<br>";
            $nivel = "No definido para $valor";
            $detalle = "No definido para $valor";
    switch($valor) {
        case ($valor < 13):
            $nivel = 'Desempeño deficiente';
            $detalle = 'Indica un desempeño insatisfactorio en las dimensiones e indicadores que se evalúan, afectando significativamente el resultado de aprendizaje de los estudiantes de la Universidad Nacional de Música.';
            break;
        case ($valor >= 13 && $valor < 15):
            $nivel = 'Desempeño bajo';
            $detalle = 'Indica un desempeño que presenta claras debilidades en las dimensiones e indicadores que se evalúan, afectando de algún modo el resultado de aprendizaje de los estudiantes de la Universidad Nacional de Música.';
            break;
        case ($valor >= 15 && $valor < 17):
            $nivel = 'Desempeño regular';
            $detalle = 'Indica un desempeño docente con algunos aspectos de mejora en en las dimensiones e indicadores que se evalúan para el ejercicio de la docencia de la Universidad Nacional de Música.';
            break;
        case ($valor >= 17 && $valor < 19):
            $nivel = 'Desempeño bueno';
            $detalle = 'Indica un desempeño docente que cumple con los requerimientos suficientes en las dimensiones e indicadores que se evalúan para el ejercicio de la docencia de la Universidad Nacional de Música.';
            break;
        case ($valor >= 19 && $valor <= 20):
            $nivel = 'Desempeño óptimo';
            $detalle = 'Indica un desempeño docente que alcanza el nivel óptimo en las dimensiones e indicadores que se evalúan lo que demuestra excelente cumplimiento para el ejercicio de la docencia de la Universidad Nacional de Música.';
            break;
    }
    return array($nivel,$detalle);
}
function cantEncXidProfesor($idprofesor,$con){
//     include('dbconect.php');
    
    $sql = "SELECT idprofesor FROM public.prof_cur
    INNER JOIN public.est_cur USING(idprof_cur)
    WHERE idprofesor = $idprofesor";
    $result = pg_query($con, $sql);
    return pg_num_rows($result);
}
function cantEncRealizadasXidProfesor($idprofesor,$con){
//     include('dbconect.php');
    
    $sql = "SELECT idprofesor FROM public.encuesta
    WHERE idprofesor = $idprofesor";
    $result = pg_query($con, $sql);
    return pg_num_rows($result);
}
function obtPuntaje($num,$valor){
//     echo "Entrando con ($num,$valor)<br>";
    switch($num) {
        case ($num <= 5):
            $valRef = 4;
            $porc = 0.08;
            //             echo "num = [$num] valor = $valor * 20/5 * $porc; <br>";
            //             $valor = $valor * 20/2 * $porc;
            $valor = $valor * $valRef/4 * $porc;
            break;
        case ($num >= 6 && $num <= 7):
            $valRef = 10;
            $porc = 0.10;
//             echo "num = $num valor = $valor * 20/2 * $porc; <br>";
            $valor = $valor * $valRef/4 * $porc;
            break;
        case ($num >= 8 && $num <= 9):
            $valRef = 10;
            $porc = 0.20;
//             echo "*****num = [$num] valor = $valor * 20/2 * $porc; <br>";
            $valor = $valor * $valRef/4 * $porc;
            break;
        case ($num >= 10 && $num <= 11):
            $valRef = 10;
            $porc = 0.15;
            //echo "num = $num valor = $valor * 20/2 * $porc; <br>";
            $valor = $valor * $valRef/4 * $porc;
            break;
        case ($num >= 12 && $num <= 14):
            $valRef = 6.67;
            $porc = 0.10;
            //echo "num = [$num] valor = $valor * 20/2 * $porc; <br>";
            $valor = $valor * $valRef/4 * $porc;
            break;
        case ($num >= 15 && $num <= 16):
            $valRef = 10;
            $porc = 0.10;
            //echo "num = $num valor = $valor * 20/2 * $porc; <br>";
            $valor = $valor * $valRef/4 * $porc;
            break;
        case ($num >= 17 && $num <= 19):
            $valRef = 6.67;
            $porc = 0.15;
            //echo "num = [$num] valor = $valor * 20/2 * $porc; <br>";
            $valor = $valor * $valRef/4 * $porc;
            break;
        case ($num >= 20 && $num <= 23):
            $valRef = 5;
            $porc = 0.12;
            //echo "num = $num valor = $valor * 20/2 * $porc; <br>";
            $valor = $valor * $valRef/4 * $porc;
            break;
    }
    return $valor;
}
// if (mysqli_num_rows($result) > 0)
// {
    
//     echo '<b>Cédula: </b>'.$fila['resp1'].'<br>';
//     echo '<b>Nombres: </b>'.$fila['resp24'].'<br>';
// }else{
//     echo null;
// }
?>