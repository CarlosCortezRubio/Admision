<?php 
/** 
 * @file periodo.php 
 *  
 * Imprimir de la Tabla Periodo 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 27/11/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'Periodo.php');
require_once(MOD.'PDF.php');
$alinHoja = 'P'; 
// Instanciando la clase PDF 
$pdf = MYPDF::crearPdf ( $alinHoja );; 
// Encabezado predeterminado; 
$pdf->Encabezado(); 
$pdf->SetFont ( 'helvetica', '', 10 );; 
$pdf->AddPage ();; 
$titulo = 'Reporte de '; 
$aux = $opt; 
		$objPeriodo = new Periodo ();
		$tabla = $objPeriodo->consultarPeriodoXidPeriodo($aux);
		$objPeriodo->cerrarConexion();
		if ($tabla > 0) {
			$etiquetas = array('id', 'idEdoRegistro', 'nom', 'fecIni', 'fecFin', 'Ord');
			$campos = array('idPeriodo', 'idEdoRegistro', 'nomPeriodo', 'fecIniPeriodo', 'fecFinPeriodo', 'OrdPeriodo');
			$datos = $pdf->procesandoDatos($tabla,$campos);
			$anchoColumnas = array(20,70,60,40);
			$alineacion = array('L','L','L','L');
			$pdf->Cell ( 0, 10, '', 0, 1, 'L' );
			$pdf->llenarTabla($etiquetas,$datos,$campos,$alineacion,$anchoColumnas,true);
			$pdf->Footer();	
		}else{
			$mns = 'Actualmente no se puede presentar el reporte, por favor intentelo nuevamente';
			$pdf->Cell ( 0, 10, $mns, 0, 1, 'C' );
		}
	//Cerrando e imprimiendo documento
	$pdf->Output ( 'Periodo.pdf', 'I' );
?>