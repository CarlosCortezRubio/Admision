<?php 
/** 
 * @file progestudio.php 
 *  
 * Imprimir de la Tabla ProgEstudio 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'ProgEstudio.php');
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
		$objProgEstudio = new ProgEstudio ();
		$tabla = $objProgEstudio->consultarProgEstudioXidProgEstudio($aux);
		$objProgEstudio->cerrarConexion();
		if ($tabla > 0) {
			$etiquetas = array('id', 'cod', 'nom', 'nomCorto', 'numResAuto', 'fecResAuto', 'preInsc', 'gpo', 'numResReva', 'fecResReva');
			$campos = array('idProgEstudio', 'codProgEstudio', 'nomProgEstudio', 'nomCortoProgEstudio', 'numResAutoProgEstudio', 'fecResAutoProgEstudio', 'preInscProgEstudio', 'gpoProgEstudio', 'numResRevaProgEstudio', 'fecResRevaProgEstudio');
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
	$pdf->Output ( 'ProgEstudio.pdf', 'I' );
?>