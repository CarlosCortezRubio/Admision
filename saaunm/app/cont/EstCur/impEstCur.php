<?php 
/** 
 * @file estcur.php 
 *  
 * Imprimir de la Tabla EstCur 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'EstCur.php');
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
		$objEstCur = new EstCur ();
		$tabla = $objEstCur->consultarEstCurXidEstCur($aux);
		$objEstCur->cerrarConexion();
		if ($tabla > 0) {
			$etiquetas = array('id', 'idCurso', 'idEstudiante', 'nota', 'inasist', 'obs');
			$campos = array('idEstCur', 'idCurso', 'idEstudiante', 'notaEstCur', 'inasistEstCur', 'obsEstCur');
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
	$pdf->Output ( 'EstCur.pdf', 'I' );
?>