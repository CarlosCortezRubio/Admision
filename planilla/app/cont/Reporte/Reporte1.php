<?php
require_once ('../../../config/config.php');
require_once (MOD . 'PlanPens.php');
require_once (MOD . 'PlanPensCon.php');
require_once (MOD . 'Pdf.php');

//echo "toy";
$alinHoja = 'P';
// Instanciando la clase PDF
$pdf = MYPDF::crearPdf ( $alinHoja );
// Encabezado predeterminado
// $pdf->Encabezado();


switch ($tipo) {
    case 1:
        $objPlanPens = new PlanPens();
        $tabla = $objPlanPens->consultarPlanPensXanioYmes($anio,$mes);
        $tablaTotales = $objPlanPens->consultarPlanPensTotalesXanioYmes($anio,$mes);
        $objPlanPens->cerrarConexion();
        $titulo = 'PLANILLAS DE PENSIONADOS';
        break;
    case 2:
        $objPlanPens = new PlanPensCon();
        $tabla = $objPlanPens->consultarPlanPensXanioYmes($anio,$mes);
        $tablaTotales = $objPlanPens->consultarPlanPensTotalesXanioYmes($anio,$mes);
        $objPlanPens->cerrarConexion();
        $titulo = 'PLANILLAS DE VIUDEZ';
        break;
    case 3:
        //         $objPlanPens = new PlanPens();
        //         $tabla = $objPlanPens->consultarPlanPensConsolidadoXmes($anio,$mes);
        //         $objPlanPens->cerrarConexion();
        //         $titulo = 'PLANILLAS DE ORFANDAD';
        break;
}
// dump($tabla);
// dump($tablaTotales);

// $pdf->encabezado_def(60,null,'PLANILLAS DE PENSIONADOS','2021');
$pdf->encabezado_def(60,null,$titulo," para $mes / $anio ");
// set font
$pdf->SetFont ( 'helvetica', '', 10 );
// add a page
$pdf->AddPage ();
$etiquetaTitulo = '---';

// $titulo = "Reporte de los PlanPenses";

//$comunicacionid = $_REQUEST['id'];
//$aux = $_REQUEST['opt'];
//$aux = $_GET['opt'];
// $aux = $opt;
$aux = '';

//$n = count($res);
$n = 1;
//$comunicacionid = 25;
//$tabla = Comunicacion::consultarComunicacionXid ( $comunicacionid );
// $objPlanPens = new PlanPens();
if($aux==""){
//     $tabla = $objPlanPens->consultarPlanPens();
//     $tablaTotales = $objPlanPens->consultarPlanPensTotales();
//     $tabla = $objPlanPens->consultarPlanPensXanioYmes($anio,$mes);
//     $tablaTotales = $objPlanPens->consultarPlanPensTotalesXanioYmes($anio,$mes);
}else{
//     $tabla = $objPlanPens->consultarPlanPensXcedulaOcuenta($aux);
}
//$tabla = $objPlanPens->consultarPlanPens();
// $objPlanPens->desconectar();
// dump($tabla);
//$tabla = null;
if (count($tabla) > 0) {
//     $etiquetas = array('Cédula','Nombres y Apellidos','Nombre PlanPens','Fecha de Creación');
    $etiquetas = array('N°','Dni','Apellidos y nombres','T imp','T haber','T desc.','T liquido');
//     $campos = array('CEDULA','APENOMTRAB','CUENTA','FECHACREACION');
    $campos = array('nro','dniPlanPens','apellidos_y_nombresPlanPens','total_imponiblePlanPens','total_haberPlanPens','total_descuentosPlanPens','total_liquidoPlanPens');
    //	$campos = array('CUENTA','CUENTA','CUENTA','CUENTA');
    $datos = $pdf->procesandoDatos($tabla,$campos);
    $anchoColumnas = array(10,20,70,20,20,20,20);
    $alineacion = array('C','L','L','C','C','C','C');
    
    
    $pdf->Cell ( 0, 10, '', 0, 1, 'L' );
    $pdf->llenarTablaConTotales($etiquetas,$datos,$campos,$alineacion,$anchoColumnas,true);
    $totales = totales($tablaTotales);
//     echo $totales;
    $pdf->writeHTML($totales);
//     $pdf->Footer();
} else {
    $mns = "Actualmente no se puede presentar el reporte, por favor intentelo nuevamente";
    $mns = 'test';
    $pdf->Cell ( 0, 10, $mns, 0, 1, 'C' );
}
function totales($tablaTotales){
//     dump($tablaTotales);
    $tablaTotales = $tablaTotales[0];
    $cad = '<br><br><table border="1" cellpadding="2">';
    $cad .= '<tr>';
    $cad .= '<td width="283px" class="titulo2" align="center" ><b>TOTALES</b></td>';
    $cad .= '<td width="57" class="titulo2" align="center" ><b>'.$tablaTotales['totales_imponiblePlanPens'].'</b></td>';
    $cad .= '<td width="57" class="titulo2" align="center" ><b>'.$tablaTotales['totales_haberPlanPens'].'</b></td>';
    $cad .= '<td width="57" class="titulo2" align="center" ><b>'.$tablaTotales['totales_descuentosPlanPens'].'</b></td>';
    $cad .= '<td width="57" class="titulo2" align="center" ><b>'.$tablaTotales['totales_liquidoPlanPens'].'</b></td>';
    $cad .= '</tr>';
    $cad .= '</table>';
//     echo "$cad";
    return $cad;
}
//Cerrando e imprimiendo documento
$pdf->Output ( "pais.pdf", 'I' );
?>