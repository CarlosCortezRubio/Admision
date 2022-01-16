<?php
require_once ('../../../config/config.php');
require_once (MOD . 'PlanillaPensionado.php');
require_once(MOD . 'ConcPlanilla.php');
require_once(MOD . 'Archivo.php');

// $aux = $opt;
$n = 1;

$objPlanillaPensionado = new PlanillaPensionado();
// $tablaDatos = $objPlanillaPensionado->consultarPlanillaPensionadoYconceptosXidplanillaPensionado($opt);
// $tablaDatos = $objPlanillaPensionado->consultarPlanillaPensionadoXanioYmes($anio,$mes); // EDITABLE
// $tablaDatos = $objPlanillaPensionado->consultarListadoPlanillaPensionadoYconcXanioYmes($anio,$mes); // EDITABLE
$tablaDatos = $objPlanillaPensionado->consultarListadoPlanillaPensionadoYconcXanioYmesYtipo($anio,$mes,$tipo); // EDITABLE
$objPlanillaPensionado->cerrarConexion();

// dump($tablaDatos);die();
if ( is_array( $tablaDatos ) ) {
    if (count ( $tablaDatos ) > 0) {
        //         return true;
    }
} else {
    $tablaDatos = array();
}
if (count($tablaDatos) > 0) {
    //     echo "---".count($tabla)."<br>";
    $tabla = $tablaDatos[0];
    
    $idPlanillaPensionado = $tabla['idplanillaPensionado'];
    $dniPlanillaPensionado = $tabla['docPersona'];
    $apellidos_y_nombresPlanillaPensionado = $tabla['nom1Persona'].' '.$tabla['nom2Persona'].' '.$tabla['ape1Persona'].' '.$tabla['ape2Persona'];
    $fecha_de_nacimientoPlanillaPensionado = $tabla['fecNacPersona'];
    $sexoPlanillaPensionado = $tabla['idGenero'];
    $codigo_modularPlanillaPensionado = $tabla['codModularPersona'];
    $planillaPlanillaPensionado = $tabla['planillaPersona'];
    $tipo_de_regimenPlanillaPensionado = $tabla['tipRegPersona'];
    $resolucion_de_pension_definitivaPlanillaPensionado = $tabla['resPenDefPersona'];
    $a_partir_dePlanillaPensionado = $tabla['fecRes'];
    $bancoPlanillaPensionado = $tabla['nomBanco'];
    $cuenta_bancariaPlanillaPensionado = $tabla['ctaBancoPersona'];
    $fuente_de_financiamientoPlanillaPensionado = $tabla['fntFinancPersona'];
    $planilla2PlanillaPensionado = $tabla['planilla2Persona'];
    $total_imponiblePlanillaPensionado = $tabla['totImpplanillaPensionado'];
    $total_haberPlanillaPensionado = $tabla['totHabplanillaPensionado'];
    $total_descuentosPlanillaPensionado = $tabla['totDescplanillaPensionado'];
    $total_liquidoPlanillaPensionado = $tabla['totLiqplanillaPensionado'];
    
    $ruc = $tabla['docPersona'];
    $razonSocial = $tabla['docPersona'];
    $periodo = $tabla['docPersona'];
    
    $objArchivo = new Archivo();
    $ruta = PUBSIST.'doc/';
    $nomArchivo = $anio.'_'.$mes."_Arc_INTERMEF.txt";
    $nomArchivoRuta = $ruta. $nomArchivo;
    
    $existeArchivo = $objArchivo->existeArchivo($nomArchivo);
    if ($existeArchivo) {
        $oldFile = 'bk_'.date('YmdH_m').$nomArchivo;
        $resArchivo = $objArchivo->renombrarArchivo($nomArchivo,$oldFile,$ruta);
    }
    $resArchivo = $objArchivo->crearArchivo($nomArchivoRuta);
    $res = detallePlanilla($objArchivo,$resArchivo,$tablaDatos,$tabla);
    
    $mns = "Archivo creado";
    
    $tipo = 1; // pensionados
    
//     $path2019 = PUBSIST.'doc/'.$tipo.'/'.$anio.'/'.$mes.'/';
    $path2019 = PUBSIST.'doc/';
    $objArchivo = new Archivo();
    $res2019 = $objArchivo->listarArchivos($path2019);
    $objArchivo->abrirConexion();
    asort($res2019);
//     $this->setParameter ( 'archivos2019', $res2019 );
//     dump($res2019);
    echo "$mns <br><br>";
    
    foreach ($res2019 as $ite) {
        //* <a href="{$PUB_URLSIST}pdf/Relacion/{$noticia}" download="{$noticia}">{$noticia}</a>
        echo "* <a href=" . PUB_URLSIST . 'doc/' .$ite." download=".$ite.">".$ite."</a> <br>";
    }
    
    
} else {
    $mns = "Actualmente no se puede presentar el reporte, por favor intentelo nuevamente";
    echo "$mns";
    // 	$mns = 'test';
//     $pdf->Cell ( 0, 10, $mns, 0, 1, 'C' );
}
// function recibo($fecEdoMovimiento,$propietario,$monto,$concepto,$numCasaPersona,$nomBanco,$refMovimiento){

// function detallePlanilla($detalleConceptos){
function detallePlanilla($objArchivo,$resArchivo,$detalleConceptos,$datosReporte){
//     dump($detalleConceptos);die();
//     dump($detalleConceptos);
    $n = count($detalleConceptos);    
    
    // 000075(unidad ejecutora);2020(año actual);11(mes actual);01(tipo de planilla);
    // 01(clase de planillas);0001(correlativo de planilla);191(cantidad de registros);
//     501986.90(cantidad ingresos);
//     6640.57(descuentos);0.00(aportes);0.00(reintegros);0.00(encargaturas);16792.96(Otros Ingresos)
    // 01;06194430(dni);00(fuente de financiacion);1(tipo de concepto);0001;;16.47
    
    
    $cantIng = 0;
    $cantEgr = 0;
    $cantApo = 0;
    $cantReint = 0;
    $cantEncarg = 0;
    
    $mntIng = 0;
    $mntEgr = 0;
    $mntApo = 0;
    $mntReint = 0;
    $mntEncarg = 0;
    $otrosIng = 0;
    
    foreach ($detalleConceptos as $ite) {
        $idTipoConcepto = $ite['idTipoConcepto'];
        $mntConcPlanilla = $ite['mntConcPlanilla'];
        
//         echo "[$idTipoConcepto]-[$mntConcPlanilla]<br>";
        switch ($idTipoConcepto) {
            case 1:
//                 echo "TipoConcepto 1: $cantIng - $mntIng - $mntConcPlanilla<br>"; 
                $cantIng++;
                $mntIng = $mntIng + $mntConcPlanilla;
            break;
            case 2:
//                 echo "TipoConcepto 2: $cantEgr - $mntEgr - $mntConcPlanilla<br>";
                $cantEgr++;
                $mntEgr = $mntEgr+ $mntConcPlanilla;
            break;
            case 3:
//                 echo "TipoConcepto 3: $cantApo - $mntApo - $mntConcPlanilla<br>";
                $cantApo++;
       -         $mntApo = $mntApo + $mntConcPlanilla;
            break;
            case 4:
//                 echo "TipoConcepto 4: $cantReint - $mntReint - $mntConcPlanilla<br>";
                $cantReint++;
                $mntReint = $mntReint + $mntConcPlanilla;
            break;
            case 5:
//                 echo "TipoConcepto 5: $cantEncarg - $mntEncarg - $mntConcPlanilla<br>";
                $cantEncarg++;
                $mntEncarg = $mntEncarg + $mntConcPlanilla;
            break;
            default:
//                 echo "6: $cantIng - $mntIng - $mntConcPlanilla<br>";
                $otrosIng = $otrosIng + $mntConcPlanilla;
        }
    }
    
//     echo "[$idTipoConcepto]-[$mntIng]-[$mntEgr]<br>";
    // 000075(unidad ejecutora);2020(año actual);11(mes actual);01(tipo de planilla);
    // 01(clase de planillas);0001(correlativo de planilla);191(cantidad de registros);
    //     501986.90(cantidad ingresos);
    //     6640.57(descuentos);0.00(aportes);0.00(reintegros);0.00(encargaturas);16792.96(Otros Ingresos)
    // 01;06194430(dni);00(fuente de financiacion);1(tipo de concepto);0001;;16.47
    
    $uniEjecutora = '001706'.';';
    $anioActual = date('Y').';';
    $mesActual = date('m').';';
    $tipPlanilla = '01'.';';
    $clasePlanilla = '01'.';';
    $correlativo = '0001'.';';
    $cantReg = count($detalleConceptos).';';
    $mntIng = number_format($mntIng,2).';';
    $mntEgr = number_format($mntEgr,2).';';
    $mntApo = number_format($mntApo,2).';';
    $mntReint = number_format($mntReint,2).';';
    $mntEncarg = number_format($mntEncarg,2).';';
    $otrosIng = number_format($otrosIng,2).';';
    
//     echo "Totalizando [$uniEjecutora.$anioActual.$mesActual.$tipPlanilla.$clasePlanilla.$correlativo.$cantReg.[$mntIng].[$mntEgr].$mntApo.$mntReint.$mntEncarg.$otrosIng] <br><br>";
    
//     echo "[$idTipoConcepto]-[$mntIng]-[$mntEgr]<br>";
    
    $objArchivo->escribirArchivo($resArchivo, $uniEjecutora.$anioActual.$mesActual.$tipPlanilla.$clasePlanilla.$correlativo.$cantReg.$mntIng.$mntEgr.$mntApo.$mntReint.$mntEncarg.$otrosIng);
    $cont = 1;
    $sumConceptos = 0;
    $mntIng = 0;
    $mntEgr = 0;
    $mntApo = 0;
    $mntReint = 0;
    $mntEncarg = 0;
    $otrosIng = 0;
    for ($i = 0; $i < $n; $i++) {
//         if ($detalleConceptos[$i]['idTipoConcepto']==1) {
        if (1) {
            $mntConcPlanilla = $detalleConceptos[$i]['mntConcPlanilla'];
            $idTipoConcepto =  $detalleConceptos[$i]['idTipoConcepto'];
            $docPersona =  $detalleConceptos[$i]['docPersona'];
            $etiConceptos =  $detalleConceptos[$i]['etiConceptos'];
            
            if ($i==0) {
                $docPersonaAnt =  $docPersona;
            }else{
                $docPersona =  $docPersona;
            }
            switch ($idTipoConcepto) {
                case 2:
                    $cod6 = $etiConceptos.';';
                    $sumConceptos = $sumConceptos - $mntConcPlanilla;
//                     echo "----- Restando TipoConcepto 2:  $sumConceptos - $mntConcPlanilla<br>";
//                     $cantEgr++;
                    break;
                default:
                    $cod6 = ';';
                    $sumConceptos = $sumConceptos + $mntConcPlanilla;
//                     echo "+++++ Sumando TipoConcepto 2: $sumConceptos - $mntConcPlanilla<br>";
            }
            $cod1 = '01'.';';
            $cod3 = '00'.';';
            $cod4 = $idTipoConcepto.';';
            $cod5 = $detalleConceptos[$i]['codConceptos'].';';            
            $cod7 = $mntConcPlanilla.';';
                        
            if ($docPersona != $docPersonaAnt) {
                $cod44 = '9'.';';
                $cod55 = '9999'.';';
                $cod77 = $sumConceptos - $mntConcPlanilla;
                
//                 echo "$i) Escribiendo Total [$cod1.$docPersonaAnt.$cod3.$cod44.$cod55.$cod6.$cod77]<br>";
                $objArchivo->escribirArchivo($resArchivo, $cod1.$docPersonaAnt.';'.$cod3.$cod44.$cod55.$cod6.$cod77.';');
                $sumConceptos = $mntConcPlanilla;
                $docPersonaAnt = $docPersona;
            }
            
//             echo "$i) Escribiendo [$cod1.$docPersonaAnt.$cod3.$cod4.$cod5.$cod6.$cod7]<br>";
            $objArchivo->escribirArchivo($resArchivo, $cod1.$docPersonaAnt.';'.$cod3.$cod4.$cod5.$cod6.$cod7);
            
        }
    }
    $cod4 = '9'.';';
    $cod5 = '9999'.';';
    $cod6 = ''.';';
    $cod7 = $sumConceptos.';';
//     echo "$i) Escribiendo Total [$cod1.$docPersona.$cod3.$cod4.$cod5.$cod6.$cod7]<br>";
    $objArchivo->escribirArchivo($resArchivo, $cod1.$docPersona.';'.$cod3.$cod4.$cod5.$cod6.$cod7);
  
      
//     return $edocuentaHTML;    
}
?>