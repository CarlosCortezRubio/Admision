<?php 
/** 
 * @file gporemunerativo.php 
 *  
 * Imprimir de la Tabla GpoRemunerativo 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'GpoRemunerativo.php');
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
		$objGpoRemunerativo = new GpoRemunerativo ();
		$tabla = $objGpoRemunerativo->consultarGpoRemunerativoXidGpoRemunerativo($aux);
		$objGpoRemunerativo->cerrarConexion();
		if ($tabla > 0) {
			$etiquetas = array('id', 'cod', 'nom');
			$campos = array('idGpoRemunerativo', 'codGpoRemunerativo', 'nomGpoRemunerativo');
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
	$pdf->Output ( 'GpoRemunerativo.pdf', 'I' );
?>