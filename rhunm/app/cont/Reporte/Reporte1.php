<?php
require_once ('../../../config/config.php');
require_once (MOD . 'PlanillaPensionado.php');
// require_once (MOD . 'PlanillaPensionadoCon.php');
require_once (MOD . 'Pdf.php');

//echo "toy";
$alinHoja = 'P';
// Instanciando la clase PDF
$pdf = MYPDF::crearPdf ( $alinHoja );
// Encabezado predeterminado
// $pdf->Encabezado();
$tipo=1;
$objPlanillaPensionado = new PlanillaPensionado();
//         $tabla = $objPlanillaPensionado->consultarPlanillaPensionadoXanioYmes($anio,$mes);
//         $tabla = $objPlanillaPensionado->consultarListadoPlanillaPensionadoXanioYmes($anio,$mes);
$tabla = $objPlanillaPensionado->consultarListadoPlanillaPensionadoXanioYmesYtipo($anio,$mes,$tipo);
$tablaTotales = $objPlanillaPensionado->consultarPlanillaPensionadoTotalesXanioYmesYtipo($anio,$mes,$tipo);
$objPlanillaPensionado->cerrarConexion();

switch ($tipo) {
    case 1:
        $titulo = 'PLANILLAS';
        break;
    case 2:
        $titulo = 'PLANILLAS DE VIUDEZ';
        break;
    case 3:
        $titulo = 'PLANILLAS DE ORFANDAD';
        break;
}

//var_dump($tablaTotales);
//var_dump($tabla);
//die('dentro de reporte');


// $pdf->encabezado_def(60,null,'PLANILLAS DE PENSIONADOS','2021');
// $pdf->encabezado_def(60,null,$titulo," para $mes / $anio ");
$pdf->encabezado_def(60,null,$titulo,obtenerMes($mes) . " - $anio ");
// $pdf->encabezado_def(60,null,$titulo,'( CONSOLIDADO )' . " ".obtenerMes($mes) . " - $anio ");
// set font
$pdf->SetFont ( 'helvetica', '', 10 );
// add a page
$pdf->AddPage ();
$etiquetaTitulo = '---';

// $titulo = "Reporte de los PlanillaPensionadoes";

//$comunicacionid = $_REQUEST['id'];
//$aux = $_REQUEST['opt'];
//$aux = $_GET['opt'];
// $aux = $opt;
$aux = '';

//$n = count($res);
$n = 1;
//$comunicacionid = 25;
//$tabla = Comunicacion::consultarComunicacionXid ( $comunicacionid );
// $objPlanillaPensionado = new PlanillaPensionado();
if($aux==""){
//     $tabla = $objPlanillaPensionado->consultarPlanillaPensionado();
//     $tablaTotales = $objPlanillaPensionado->consultarPlanillaPensionadoTotales();
//     $tabla = $objPlanillaPensionado->consultarPlanillaPensionadoXanioYmes($anio,$mes);
//     $tablaTotales = $objPlanillaPensionado->consultarPlanillaPensionadoTotalesXanioYmes($anio,$mes);
}else{
//     $tabla = $objPlanillaPensionado->consultarPlanillaPensionadoXcedulaOcuenta($aux);
}
//$tabla = $objPlanillaPensionado->consultarPlanillaPensionado();
// $objPlanillaPensionado->desconectar();
// dump($tabla);
//$tabla = null;
if ( is_array( $tabla ) ) {
    if (count ( $tabla ) > 0) {
        //         return true;
    }
} else {
    $tabla = array();
}
if (count($tabla) > 0) {
//     $etiquetas = array('Cédula','Nombres y Apellidos','Nombre PlanillaPensionado','Fecha de Creación');
    $etiquetas = array('N°','Dni','Apellidos y nombres','T imp','T haber','T desc.','T liquido');
//     $campos = array('CEDULA','APENOMTRAB','CUENTA','FECHACREACION');
    $campos = array('nro','dniPersona','nom1Persona','totImpplanillaPensionado','totHabplanillaPensionado','totDescplanillaPensionado','totLiqplanillaPensionado');
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
//     $mns = 'test';
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