<?php 
/** 
 * @file log.php 
 *  
 * Imprimir de la Tabla Log 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 16/10/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'Log.php');
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
		$objLog = new Log ();
		$tabla = $objLog->consultarLogXidLog($aux);
		$objLog->cerrarConexion();
		if ($tabla > 0) {
			$etiquetas = array('idlog', 'idUsuario', 'fechalog', 'iplog', 'accionlog');
			$campos = array('idlog', 'idUsuario', 'fechalog', 'iplog', 'accionlog');
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
	$pdf->Output ( 'Log.pdf', 'I' );
?>