<?php
// include('dbconect.php');
require_once ('../../../config/config.php');
require_once (SENT . 'Query.php');
require_once (MOD . 'Encuesta.php');

$idsede = 1;

// $sqlSelect = "SELECT * FROM encuesta WHERE idprofesor = '$idprofesor' AND idcurso = '$idcurso'";
// $result = mysqli_query($con, $sqlSelect);

// echo "[$sqlSelect]";
// var_dump($_POST);

$tipoReporte = $_POST ["op"];

switch ($tipoReporte) {
    case 1:
//         $res = totalPorProfesor($idprofesor, $idcurso, $idsede);
        listarProfAsig();
        break;
    case 2: // Cantidad de encuestas Por hacer / Realizadas
//         $idprofesor = $_POST ["idp"];
//         $idcurso = $_POST ["idc"];
        totalEncuestas();

        break;
    case 3: // Resultado por profesor
        $idprofesor = $_POST ["idp"];
        $idcurso = $_POST ["idc"];
        $res = totalPorProfesor($idprofesor, $idcurso, $idsede);
        
        
        
//         $res = porcentajesEncProf();
        break;
    
    default:
        ;
    break;
}

function totalEncuestas(){
    ?>
    <center><h1>Reporte de Total profesor / encuestas</h1></center>
<!--     <table id="tabla_contenido" class="table table-bordered"> -->
    <table id="tabla_contenido" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th class="line">#</th>
            <th class="line">Profesor</th>
            <th class="line">Total Encuestas</th>
            <th class="line">Encuestas Realizadas</th>
            <th class="line">Encuestas Pendientes</th>
            <th class="line">Porcentaje</th>
        </tr>
        </thead>
        <tbody>
    <?php
//     echo "Reporte de Total profesor / encuestas";
    $objEncuesta = new Encuesta();
    $tablaResultado = $objEncuesta->totalProfesores();
    $cont = 1;
    foreach ($tablaResultado as $ite) {
        $idProfesor = $ite["idprofesor"];
        $nomProfesor = $ite["nom1profesor"] .' '. $ite["ape1profesor"];
        $res1 = $objEncuesta->cantEncXidProfesor($idProfesor);
        $res2 = $objEncuesta->cantEncRealizadasXidProfesor($idProfesor);
        $res0 = $res1 - $res2;
        $porc = 0;
        if ($res2 > 0) {
            $porc = $res2 * 100 / $res1;
        }
        $porc = number_format($porc,2);
        ?>
            <tr>
                <td class="line"><?php echo $cont?></td>
                <td class="line"><?php echo $nomProfesor?></td>
                <td class="line"><?php echo $res1?></td>
                <td class="line"><?php echo $res2?></td>
                <td class="line"><?php echo $res0?></td>
                <td class="line"><?php echo $porc.'%'?></td>
            </tr>
        <?php
//         echo "$cont) $nomProfesor [$res1] - [$res2] - [$porc %] <br>";
        $cont++;
    }
    ?>
        </tbody>
    </table>
    <?php
    
    $objEncuesta->cerrarConexion();
}

function listarProfAsig(){
    ?>
    <center><h1>Reporte de Total profesor / encuestas</h1></center>
<!--     <table id="tabla_contenido" class="table table-bordered"> -->
    <table id="tabla_contenido" class="table table-striped table-bordered">
        <thead>
        <tr>
        <th class="line">#</th>
        <th class="line">Profesor</th>
        <th class="line">Asignatura</th>
        <th class="line">Consultar</th>
        </tr>
        </thead>
    	<tbody>
    <?php
    //     echo "Reporte de Total profesor / encuestas";
    $objEncuesta = new Encuesta();
    $tablaResultado = $objEncuesta->totalProfesoresAsignaturas();
    $cont = 1;
    foreach ($tablaResultado as $ite) {
        $idProfesor = $ite["idprofesor"];
        $idAsignatura= $ite["idasignatura"];
        $nomProfesor = $ite["nom1profesor"] .' '. $ite["ape1profesor"];
        $nomAsignatura= $ite["nomasignatura"];
        $res1 = $objEncuesta->cantEncXidProfesor($idProfesor);
        $res2 = $objEncuesta->cantEncRealizadasXidProfesor($idProfesor);
        
        ?>
            <tr>
                <td class="line"><?php echo $cont?></td>
                <td class="line"><?php echo $nomProfesor?></td>
                <!-- <td class="line"><?php echo $idAsignatura .') '.$nomAsignatura?></td> -->
                <td class="line"><?php echo $nomAsignatura?></td>
                <td class="line"><input type="button" value="Buscar" id="botonBuscar" class="btn btn-primary" onclick="buscarRegistro(3,<?php echo $idProfesor;?>,<?php echo $idAsignatura;?>)"></td>
            </tr>
        <?php
//         echo "$cont) $nomProfesor [$res1] - [$res2] - [$porc %] <br>";
        $cont++;
    }
    ?>
        </tbody>
    </table>
    <?php
    
    $objEncuesta->cerrarConexion();
}

function totalPorProfesor($idProfesor, $idAsignatura, $idsede){
//     echo "**********************************   totalPorProfesor --------------------------------<br>";
    $matRes = array();
    // *****************************************************************************
//     $objEncuesta = new Encuesta();
//     $tablaResultado = $objEncuesta->totalProfesoresAsignaturas();
//     $cont = 1;
//     $numAsig = count($tablaResultado);
//     foreach ($tablaResultado as $ite) {
//         $idProfesor = $ite["idprofesor"];
//         $idAsignatura= $ite["idasignatura"];
//         $nomProfesor = $ite["nom1profesor"];
//         $nomAsignatura= $ite["nomasignatura"];
        
//         echo "++++Profesor : [$idProfesor] [$nomProfesor] [$idAsignatura] [$nomAsignatura]<br>";
//         $resultEnc = $objEncuesta->encuestasXprofesorYasignatura($idProfesor,$idAsignatura);
        
//         $numEnc = count($resultEnc);
//         if ($numEnc > 1) {
//             echo "$nomAsignatura  --- numEnc = [$numEnc] <br>";
//             $cantEnc = $numEnc;
//         }else{
//             $cantEnc = 0;
//         }
//         $matRes[] = array('idProfesor'=>$idProfesor,'idAsignatura'=>$idAsignatura,'cantEnc'=>$cantEnc);        
//         $contAsig++;
//         $cont++;
//     }
//     $objEncuesta->cerrarConexion();
    // *****************************************************************************  
    //--------------------------------------------------
    $cantPreg = 23;
    $cont = 1;
    $dd = 0;
    $valA=$valB=$valC=$valD=$valE=$valF=$valG=0;
    $objEncuesta = new Encuesta();
    $tablaResultado = $objEncuesta->encuestasXprofesorYasignatura($idProfesor, $idAsignatura);
    $objEncuesta->cerrarConexion();
    if (is_array($tablaResultado)) {
        $band=count($tablaResultado);
    }else{
        $band = 0;
    }
    if ($band>0) {
        foreach ($tablaResultado as $ite) {
            $tPreg = 0;
            for ($i = 1; $i < $cantPreg; $i++) {
                $val = obtPuntaje($i,$ite["resp".$i]);
                $val = number_format($val,2);
                //             ++++++++++++++++++++++++++++++++++++++++++++++++++
                switch($i) {
                    case ($i <= 5):
                        $valA += $val;
                        break;
                    case ($i >= 6 && $i <= 7):
                        $valB += $val;
                        break;
                    case ($i >= 8 && $i <= 9):
                        $valC += $val;
                        break;
                    case ($i >= 10 && $i <= 11):
                        $valD += $val;
                        break;
                    case ($i >= 12 && $i <= 15):
                        $valE += $val;
                        break;
                    case ($i >= 16 && $i <= 18):
                        $valF += $val;
                        break;
                    case ($i >= 19 && $i <= 22):
                        $valG += $val;
                }
                //             ++++++++++++++++++++++++++++++++++++++++++++++++++
                $tPreg = $tPreg + $val;
                $tPregMostrar = number_format($tPreg,2);
                $dd = $dd + $val;
                //         echo '-- Resp'.$i. ' = ' .$row["resp".$i] . " val => $val dd => $dd";
                //         echo '<br>';
            }
            //         echo '++++Puntuación de la encuesta: '. $cont .': ['.$tPregMostrar." pts.]<br>";
            $cont++;
        }
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
        echo '<b>'.$niv.': </b>'. $det . "<br>";
        echo "<br>";
        echo 'Cantidad de encuestas realizadas (n): <b>'.($cont)."</b><br>";
        echo 'Total sumatoria: <b>'.$respEnc."</b><br>";
        echo "Total sumatoria/n ($respEnc/($cont)): <b>".$respEnc2."</b><br>";
        echo "A=<b>[$valA]</b> - B=<b>[$valB]</b> - C=<b>[$valC]</b> - D=<b>[$valD]</b> - E=<b>[$valE]</b> - F=<b>[$valF]</b> - G=<b>[$valG]</b><br>";
        // echo '++++Total encuestas *20/100: '. $respEnc . "<br>";
        //     echo '++++Nivel: '. $niv . "<br>";
    }else{
        echo "No se encontraron encuestas.";
    }
    
    
    //--------------------------------------------------
}

function porcentajesEncProf(){
    obtDatosEncuesta();
}


function obtDatos($idprofesor,$idcurso,$idsede){
    
    include('dbconect.php');
    $sqlSelect = "SELECT * FROM encuesta WHERE idprofesor = '$idprofesor' AND idasignatura = '$idcurso'";
//     $result = mysqli_query($con, $sqlSelect);
    $result = pg_query($con, $sqlSelect);
    
//     echo "[$sqlSelect]";
    return $result;
}
function obtDatosEncuesta(){    
    $matRes = array();
// *****************************************************************************    
    $objEncuesta = new Encuesta();
    $tablaResultado = $objEncuesta->totalProfesoresAsignaturas();
    $cont = 1;
    $numAsig = count($tablaResultado);
    foreach ($tablaResultado as $ite) {
        $idProfesor = $ite["idprofesor"];
        $idAsignatura= $ite["idasignatura"];
        $nomProfesor = $ite["nom1profesor"] .' '. $ite["ape1profesor"];
        $nomAsignatura= $ite["nomasignatura"];
        
        echo "++++Profesor : [$idProfesor] [$nomProfesor] [$idAsignatura] [$nomAsignatura]<br>";
        $resultEnc = $objEncuesta->encuestasXprofesorYasignatura($idProfesor,$idAsignatura);
        
        $numEnc = count($resultEnc);
//         foreach ($resultEnc as $ite1) {
            //                 echo "$sqlAsig <br> cant = [$numEnc] <br>";
            //                 echo "$nomAsignatura  --- numEnc = [$numEnc] <br>";
            if ($numEnc > 1) {
                echo "$nomAsignatura  --- numEnc = [$numEnc] <br>";
                //                     echo "[ $sqlAsig ] <br>";
//                 $rowEnc = pg_fetch_array($resultEnc);
                //                     $cantEnc = $rowEnc[0]['cantEnc'];
                $cantEnc = $numEnc;
            }else{
                $cantEnc = 0;
            }
            $matRes[] = array('idProfesor'=>$idProfesor,'idAsignatura'=>$idAsignatura,'cantEnc'=>$cantEnc);
            
            $contAsig++;
//         }
        
//         echo "$cont) $nomProfesor [$res1] - [$res2] - [$porc %] <br>";
        $cont++;
    }    
    $objEncuesta->cerrarConexion();
// *****************************************************************************    
    $sqlSelect = "SELECT * FROM public.profesor Order by idprofesor";
    //     $result = mysqli_query($con, $sqlSelect);
    $result = pg_query($con, $sqlSelect);
    $cont = 0;
    while ($row = pg_fetch_array($result)) {
        $idProfesor = $row["idprofesor"];
        $nomProfesor = $row["nom1profesor"];
        echo "++++Profesor : [$idProfesor] [$nomProfesor] <br>";
        
        $sqlAsig = "SELECT * FROM prof_cur INNER JOIN asignatura USING(idasignatura) where idprofesor = $idProfesor Order by idasignatura";
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
                $sqlAsig = "SELECT * FROM encuesta where idprofesor = $idProfesor and idasignatura = $idAsignatura";
                $resultEnc = pg_query($con, $sqlAsig);
                
                $numEnc = pg_num_rows($resultEnc);
//                 echo "$sqlAsig <br> cant = [$numEnc] <br>";
//                 echo "$nomAsignatura  --- numEnc = [$numEnc] <br>";
                if ($numEnc > 1) {
                    echo "$nomAsignatura  --- numEnc = [$numEnc] <br>";
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
        if ($cont>5) {
            break;
        }
        $cont++;
    }
    
//     var_dump($matRes);
    
//     echo "[$sqlSelect]";
    return $result;
}
function rangoEvaluacion($valor){
//     echo "valor = $valor *********************<br>";
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
    
    $sql = "SELECT idprofesor FROM prof_cur
    INNER JOIN est_cur USING(idprof_cur)
    WHERE idprofesor = $idprofesor";
    $result = pg_query($con, $sql);
    return pg_num_rows($result);
}
function cantEncRealizadasXidProfesor($idprofesor,$con){
//     include('dbconect.php');
    
    $sql = "SELECT idprofesor FROM encuesta
    WHERE idprofesor = $idprofesor";
    $result = pg_query($con, $sql);
    return pg_num_rows($result);
}
function obtPuntaje($num,$valor){
//     echo "Entrando con ($num,$valor)<br>";
    switch($num) {
        case ($num <= 5):
            $valRef = 4;
            $porc = 0.10;
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
        case ($num >= 12 && $num <= 15):
            $valRef = 5;
            $porc = 0.15;
            //echo "num = [$num] valor = $valor * 20/2 * $porc; <br>";
            $valor = $valor * $valRef/4 * $porc;
            break;
        case ($num >= 16 && $num <= 18):
            $valRef = 6.67;
            $porc = 0.15;
            //echo "num = $num valor = $valor * 20/2 * $porc; <br>";
            $valor = $valor * $valRef/4 * $porc;
            break;
        case ($num >= 19 && $num <= 22):
            $valRef = 5;
            $porc = 0.15;
            //echo "num = [$num] valor = $valor * 20/2 * $porc; <br>";
            $valor = $valor * $valRef/4 * $porc;
            break;
            //         case ($num >= 20 && $num <= 23):
            //             $valRef = 5;
            //             $porc = 0.12;
            //echo "num = $num valor = $valor * 20/2 * $porc; <br>";
            //             $valor = $valor * $valRef/4 * $porc;
            //             break;
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