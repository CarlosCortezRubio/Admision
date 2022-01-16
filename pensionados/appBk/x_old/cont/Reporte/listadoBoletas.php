<?php
require_once ('../../../config/config.php');
require_once (MOD . 'PlanillaPensionado.php');
require_once(MOD . 'ConcPlanilla.php');
require_once (MOD . 'Pdf.php');

// $alinHoja = 'L';
$alinHoja = 'P';
// Instanciando la clase PDF
$pdf = MYPDF::crearPdf ( $alinHoja );
// Encabezado predeterminado
//$pdf->Encabezado();
// $pdf->encabezado_def(60);
$titulo = "BOLETA DE PAGO";
$pdf->encabezado_def(60,null,$titulo,obtenerMes($mes) . " - $anio ");
// set font
$pdf->SetFont ( 'helvetica', '', 10 );
// add a page
$pdf->AddPage ();
// $etiquetaTitulo = '---';


//$comunicacionid = $_REQUEST['id'];
//$aux = $_REQUEST['opt'];
// $aux = $_GET['opt'];
// $aux = $opt;
$aux = '';

//$n = count($res);
$n = 1;
// $objPlanillaPensionado = new PlanillaPensionado();
// $tabla = $objPlanillaPensionado->consultarPlanillaPensionado();
// $objPlanillaPensionado->cerrarConexion();

    $objPlanillaPensionado = new PlanillaPensionado();
    //         $tablaConceptos = $objPlanillaPensionado->consultarPlanillaPensionadoXanioYmes($anio, $mes);
    $tablaConceptos = $objPlanillaPensionado->consultarListadoPlanillaPensionadoXanioYmesYtipo($anio, $mes, $tipo);
    //         $tablaConceptos = $objPlanillaPensionado->consultarListadoPlanillaPensionadoYconcXanioYmes($anio, $mes);
    $objPlanillaPensionado->cerrarConexion();
switch ($tipo) {
    case 1:
        $titulo = 'PLANILLAS DE PENSIONADOS';
        break;
    case 2:
        $titulo = 'PLANILLAS DE VIUDEZ';
        break;
    case 3:
        //         $objPlanillaPensionado = new PlanillaPensionado();
        //         $tabla = $objPlanillaPensionado->consultarPlanillaPensionadoConsolidadoXmes($anio,$mes);
        //         $objPlanillaPensionado->cerrarConexion();
                $titulo = 'PLANILLAS DE ORFANDAD';
        break;
}
// $objPlanillaPensionado = new PlanillaPensionado();
// $tablaConceptos = $objPlanillaPensionado->consultarPlanillaPensionadoXanioYmes($anio, $mes);
// $objPlanillaPensionado->cerrarConexion();
// dump($tabla);
//$tabla = null;
if ( is_array( $tablaConceptos ) ) {
    if (count ( $tablaConceptos ) > 0) {
        //         return true;
    }
} else {
    $tablaConceptos = array();
}
// dump($tablaConceptos);die();

$tablaDatos = $tablaConceptos;

// dump($tabla);
//$tabla = null;
if ( is_array( $tablaDatos ) ) {
    if (count ( $tablaDatos ) > 0) {
        //         return true;
    }
} else {
    $tablaDatos = array();
}
if (count($tablaDatos) > 0) {
//     $tablaDatos = $tablaDatos[0];
//     dump($tablaDatos);die();
    $objPlanillaPensionado = new PlanillaPensionado();
    $cont = 1;
    foreach ($tablaDatos as $tabla) {
        
        
        $idPlanillaPensionado = $tabla['idplanillaPensionado'];
        $dniPlanillaPensionado = $tabla['docPersona'];
        $apellidos_y_nombresPlanillaPensionado = $tabla['nom1Persona'].' '.$tabla['nom2Persona'].' '.$tabla['ape1Persona'].' '.$tabla['ape2Persona'];
        $fecha_de_nacimientoPlanillaPensionado = $tabla['fecNacPersona'];
        $sexoPlanillaPensionado = $tabla['idGenero'];
        if ($sexoPlanillaPensionado==1) {
            $sexoPlanillaPensionado = 'Masculino';
        }else{
            $sexoPlanillaPensionado = 'Femenino';
        }
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
        
        $datosReporte = datosReporte($dniPlanillaPensionado, $apellidos_y_nombresPlanillaPensionado, $fecha_de_nacimientoPlanillaPensionado, $sexoPlanillaPensionado, $codigo_modularPlanillaPensionado, $planillaPlanillaPensionado, $tipo_de_regimenPlanillaPensionado, $resolucion_de_pension_definitivaPlanillaPensionado, $a_partir_dePlanillaPensionado, $bancoPlanillaPensionado, $cuenta_bancariaPlanillaPensionado, $ruc,$razonSocial,$periodo);
        
//         if (count($tablaConceptos) > 0) {
//             $tablaConceptos = $tablaConceptos[0];
//             $res = detallePlanilla($tablaConceptos,$datosReporte);
//         $tablaDatos = consultarPlanillaPensionadoXidplanillaPensionado
//         $tablaDatosConceptos = $objPlanillaPensionado->consultarPlanillaPensionadoXidplanillaPensionado($idPlanillaPensionado);
        $tablaDatosConceptos = $objPlanillaPensionado->consultarPlanillaPensionadoXidplanillaPensionadoReportes($idPlanillaPensionado);
//         $tablaDatosConceptos = $tablaDatosConceptos[0];
        
        $res = detallePlanilla($tablaDatosConceptos,$datosReporte,$anio, $mes);
            $pdf->SetFont ( 'helvetica', '', 5 );
            $pdf->writeHTML($res);
//         }
        $cont++;
        if ($cont==5) {
            $cont = 1;
            $pdf->AddPage ();
        }
    }
    $objPlanillaPensionado->cerrarConexion();
    $pdf->SetFont ( 'helvetica', '', 5 );
    $pdf->Cell ( 0, 0, '', 0, 1, 'L' );

} else {
    $mns = "Actualmente no se puede presentar el reporte, por favor intentelo nuevamente";
    // 	$mns = 'test';
    $pdf->Cell ( 0, 10, $mns, 0, 1, 'C' );
}

function datosReporte($dniPlanillaPensionado, $apellidos_y_nombresPlanillaPensionado, $fecha_de_nacimientoPlanillaPensionado, $sexoPlanillaPensionado, $codigo_modularPlanillaPensionado, $planillaPlanillaPensionado, $tipo_de_regimenPlanillaPensionado, $resolucion_de_pension_definitivaPlanillaPensionado, $a_partir_dePlanillaPensionado, $bancoPlanillaPensionado, $cuenta_bancariaPlanillaPensionado, $ruc,$razonSocial,$periodo){
    $fechaEmision = date('d-m-Y');
    // 	echo "aca con [$numFacturaMovimiento]";
    $dni = 'XXXXX';
    $cad = estilos();
    $cad .= '
            <table border="0" cellpadding="0">
            	<tr>
            		<td class="texto1C">
            			<span class=""><b>'.$ruc.'</b></span>
            		</td>
            		<td class="texto1C">
            			<span class=""><b>'.$razonSocial.'</b></span>
            		</td>
            		<td class="texto1C">
            			<span class=""><b>'.$periodo.'</b></span>
            		</td>
            	</tr>
            </table>

            <table border="0" cellpadding="2">
            	<tr>
            		<td class="titulo2C" colspan="3">
            			<span class="">'.$apellidos_y_nombresPlanillaPensionado .'</span>
            		</td>
            	</tr>
            	<tr>
            		<td class="titulo2C">
            			<span class="">'.$dniPlanillaPensionado.'</span>
            		</td>
            		<td class="titulo2C">
            			<span class="">'.$fecha_de_nacimientoPlanillaPensionado .'</span>
            		</td>
            		<td class="titulo2C">
            			<span class="">'.$sexoPlanillaPensionado .'</span>
            		</td>
            	</tr>
            	<tr>
            		<td class="titulo2C">
            			<span class="">'.$codigo_modularPlanillaPensionado .'</span>
            		</td>
            		<td class="titulo2C">
            			<span class="">'.$tipo_de_regimenPlanillaPensionado .'</span>
            		</td>
            		<td class="titulo2C">
            			<span class="">'.$a_partir_dePlanillaPensionado .'</span>
            		</td>
            		<td class="titulo2C">
            			<span class="">'.$resolucion_de_pension_definitivaPlanillaPensionado .'</span>
            		</td>
            	</tr>
            	<tr>
            		<td class="titulo2C" colspan="3">
            			<span class="">'.$bancoPlanillaPensionado .'</span>
            		</td>
            	</tr>
            	<tr>
            		<td class="titulo2C" colspan="3">
            			<span class="">'.$cuenta_bancariaPlanillaPensionado.'</span>
            		</td>
            	</tr>
            </table>
';
    return $cad;
}
// function recibo($idPlanillaPensionado, $dniPlanillaPensionado, $apellidos_y_nombresPlanillaPensionado, $fecha_de_nacimientoPlanillaPensionado, $sexoPlanillaPensionado, $codigo_modularPlanillaPensionado, $planillaPlanillaPensionado, $tipo_de_regimenPlanillaPensionado, $resolucion_de_pension_definitivaPlanillaPensionado, $a_partir_dePlanillaPensionado, $bancoPlanillaPensionado, $cuenta_bancariaPlanillaPensionado, $fuente_de_financiamientoPlanillaPensionado, $planilla2PlanillaPensionado, $total_imponiblePlanillaPensionado, $total_haberPlanillaPensionado, $total_descuentosPlanillaPensionado, $total_liquidoPlanillaPensionado, $aguinaldoPlanillaPensionado, $basicaPlanillaPensionado, $bonif_personalPlanillaPensionado, $ael25671PlanillaPensionado, $aeds081PlanillaPensionado, $tphPlanillaPensionado, $bonif_familiarPlanillaPensionado, $du080_04PlanillaPensionado, $refrig_y_moviPlanillaPensionado, $du90_96PlanillaPensionado, $ds19_94_pcmPlanillaPensionado, $ds21_92_pcmPlanillaPensionado, $bon_especialPlanillaPensionado, $reunificadaPlanillaPensionado, $igvPlanillaPensionado, $cargsimulPlanillaPensionado, $art18_dl_20530PlanillaPensionado, $du073_97PlanillaPensionado, $du011_99PlanillaPensionado, $du037_94PlanillaPensionado, $ds016PlanillaPensionado, $ds017PlanillaPensionado, $ds110_2006PlanillaPensionado, $ds039_2007PlanillaPensionado, $ds120_2008PlanillaPensionado, $ds014_2009PlanillaPensionado, $ds077_2010PlanillaPensionado, $ds031_2011PlanillaPensionado, $ds024_2012PlanillaPensionado, $ds004_2013PlanillaPensionado, $ds003_2014PlanillaPensionado, $ds002_2015PlanillaPensionado, $ds005_2016PlanillaPensionado, $ds020_2017PlanillaPensionado, $ds011_2018PlanillaPensionado, $ds009_2019PlanillaPensionado, $ds006_2020PlanillaPensionado, $ipssPlanillaPensionado, $cafaePlanillaPensionado, $prderrmaPlanillaPensionado, $escolaridadPlanillaPensionado, $decreto_supermo_20_21PlanillaPensionado,$ruc,$razonSocial,$periodo){

function detallePlanilla($detalleConceptos,$datosReporte,$anio, $mes){
//         dump($detalleConceptos);
    
//         dump($detalleConceptos);
    $n = count($detalleConceptos);
//     echo "n = $n";die();
//     dump($datosReporte);
//     $detalleConceptos = $detalleConceptos[0];
    $edocuentaHTML = '';
    // DETALLE DE CONCEPTOS
    $edocuentaHTML.=estilos();
    $edocuentaHTML.='<table border="1" cellpadding="0" width="450">';
        $edocuentaHTML.='<tr>';
            $edocuentaHTML.='<td width="120" class="titulo2" align="center" colspan="0"><b>Datos personales</b></td>';
            $edocuentaHTML.='<td width="170" class="titulo2" align="center" colspan="2"><b>Ingresos</b></td>';
            $edocuentaHTML.='<td width="85" class="titulo2" align="center"><b>Egresos</b></td>';
            $edocuentaHTML.='<td width="135" class="titulo2" align="center"><b>Totales</b></td>';
//             $edocuentaHTML.='<td width="255" class="titulo2" align="center"><b>Egresos</b></td>';
        $edocuentaHTML.='</tr>';
        $edocuentaHTML.='<tr>';
            $edocuentaHTML.='<td width="120" cellpadding="0">'.$datosReporte;
//             $edocuentaHTML.='<td width="120">*******************************';
            $edocuentaHTML.='</td>';
            $edocuentaHTML.='<td width="85">';
                $edocuentaHTML.='<table border="1" cellpadding="2">';
                
                $cont = 1;
                for ($i = 0; $i < $n/2-1; $i++) {
                    if ($detalleConceptos[$i]['idTipoConcepto']==1) {
                        $edocuentaHTML.='<tr>';
                        $edocuentaHTML.='<td class="texto3" width="55">'.str_replace('ConcAct', '', utf8_encode($detalleConceptos[$i]['etiConceptos'])).'</td>';
                        $edocuentaHTML.='<td class="texto3" align="right" width="30">';
                        $edocuentaHTML.= $detalleConceptos[$i]['mntConcPlanilla'];
                        $edocuentaHTML.='</td>';
                        $edocuentaHTML.='</tr>';
                        $cont++;
                    }
                }    
                
                $edocuentaHTML.='</table>';
    
            $edocuentaHTML.='</td>';
            $edocuentaHTML.='<td width="85">';
    
                $edocuentaHTML.='<table border="1" cellpadding="2">';       
                for ($i = $n/2; $i < $n; $i++) {
                    //                         if ($res[$detalleConceptos[$i]]['idTipoConcepto']==1 and $detalleConceptos[str_replace('ConcAct', 'PlanillaPensionado', $matCampoIng[$i])]>0) {
                    if ($detalleConceptos[$i]['idTipoConcepto']==1) {
                        $edocuentaHTML.='<tr>';
                        $edocuentaHTML.='<td class="texto3" width="55">'.str_replace('ConcAct', '', utf8_encode($detalleConceptos[$i]['etiConceptos'])).'</td>';
                        $edocuentaHTML.='<td class="texto3" align="right" width="30">';
                        $edocuentaHTML.= $detalleConceptos[$i]['mntConcPlanilla'];
                        $edocuentaHTML.='</td>';
                        $edocuentaHTML.='</tr>';
                        $cont++;
                    }
                }    
                $edocuentaHTML.='</table>';
        
            $edocuentaHTML.='</td>';
            $edocuentaHTML.='<td  width="85">';

        $edocuentaHTML.='<table border="1" cellpadding="2">';
        for ($i = 0; $i < $n; $i++) {
            //                         if ($res[$detalleConceptos[$i]]['idTipoConcepto']==1 and $detalleConceptos[str_replace('ConcAct', 'PlanillaPensionado', $matCampoIng[$i])]>0) {
            if ($detalleConceptos[$i]['idTipoConcepto']==2) {
                $edocuentaHTML.='<tr>';
                $edocuentaHTML.='<td class="texto3R" width="55">'.str_replace('ConcAct', '', utf8_encode($detalleConceptos[$i]['etiConceptos'])).'</td>';
                $edocuentaHTML.='<td class="texto3R" align="right" width="30">';
                $edocuentaHTML.= $detalleConceptos[$i]['mntConcPlanilla'];
                $edocuentaHTML.='</td>';
                $edocuentaHTML.='</tr>';
                $cont++;
            }
        }    
        $edocuentaHTML.='</table>';
            
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='<td width="135">';

    $edocuentaHTML.='<table border="1" cellpadding="2">';
    $edocuentaHTML.='<tr>';
    $edocuentaHTML.='<td width="100" class="texto3">Monto Bruto:</td>';
    $edocuentaHTML.='<td align="right" width="35" class="texto3">';
    $edocuentaHTML.= $detalleConceptos[0]['totHabplanillaPensionado'];
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='</tr>';
    $edocuentaHTML.='<tr>';
    $edocuentaHTML.='<td width="100" class="texto3">Total Descuentos:</td>';
    $edocuentaHTML.='<td align="right" width="35" class="texto3">';
    $edocuentaHTML.= $detalleConceptos[0]['totDescplanillaPensionado'];
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='</tr>';
    $edocuentaHTML.='<tr>';
    $edocuentaHTML.='<td width="100" class="texto3">Monto Lquidido:</td>';
    $edocuentaHTML.='<td align="right" width="35" class="texto3">';
    $edocuentaHTML.= $detalleConceptos[0]['totLiqplanillaPensionado'];
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='</tr>';
    $edocuentaHTML.='<tr>';$edocuentaHTML.='<td width="135" class="texto3"><br><br><br></td>';$edocuentaHTML.='</tr>';
    $edocuentaHTML.='<tr>';
    $edocuentaHTML.='<td width="135" class="texto3">CONTRIBUCIÓN DEL EMPLEADOR:</td>';
    $edocuentaHTML.='</tr>';
    $edocuentaHTML.='<tr>';
    $edocuentaHTML.='<td width="100" class="texto3">Essalud</td>';
    $edocuentaHTML.='<td align="right" width="35" class="texto3">';
    $edocuentaHTML.= number_format($detalleConceptos[0]['totImpplanillaPensionado']*4/100,2,",",".");
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='</tr>';
    $edocuentaHTML.='</table>';
            
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='</tr>';
    $edocuentaHTML.='</table>';
    
    
    return $edocuentaHTML;
    
}
function centrarContenido($contenido){
    $cad = '<table border="0" width="225">
<tr>
<td style="width:18%"></td>
<td style="width:50%">'.$contenido.'</td>
<td style="width:15%"></td>
</tr>
</table>';
    return $cad;
}
function estilos(){
    $cad = '
    <style>
    .logo{
        height:100px;
        width:150px;
        text-align:left;
    }
    .logo1{
        width:40px;
    }
    .dosCol1{
        width:330px;
    }
    .dosCol2{
        width:180px;
    }
    .encabezado{
        width:355px;
        padding:20px;
        text-align:center;
    }
    .firma{
        width:50%;
        text-align:center;
    }
    .pie{
        font-size:8px;
        text-align:center;
    }
    .textoNota{
        text-align:center;
        font-size:10px;
    }
    .titulo1{
        font-size:10px;
        padding-left:10px;
        padding-top:10px;
        background-color:#f8f9fa;
        text-align:center;
    }
    .titulo2{
        font-size:8px;
        padding-left:10px;
        padding-top:10px;
        background-color:#f8f9fa;
        text-align:center;
    }
    .titulo3{
        /*font-size:8px;
         padding-left:10px;
         padding-top:10px;
         background-color:#f8f9fa;*/
        text-align:center;
    }
    .titulo5{
        font-size:6px;
        padding-left:5px;
        padding-top:10px;
        text-align:left;
    }
    .texto1{
        font-size:7px;
        padding-left:10px;
        padding-top:5px;
        padding-bottom:5px;
    }
    .texto1C{
        font-size:7px;
        padding-left:10px;
        padding-top:5px;
        padding-bottom:5px;
        text-align:center;
    }
    .texto3{
        font-size:4.5px;
        padding-left:15px;
        padding-top:5px;
        padding-bottom:5px;
        text-align:left;
    }
    .texto3R{
        font-size:4.5px;
        padding-left:15px;
        padding-top:5px;
        padding-bottom:5px;
        text-align:left;
        color:red;
    }
    </style>
    ';
    return $cad;
}
//&nbsp;&nbsp;&nbsp;
//Cerrando e imprimiendo documento
$pdf->Output ( "pais.pdf", 'I' );
?>