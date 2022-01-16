<?php 
/** 
 * @file tiposolicitud.php 
 *  
 * Imprimir de la Tabla TipoSolicitud 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/11/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'TipoSolicitud.php');
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
		$objTipoSolicitud = new TipoSolicitud ();
		$tabla = $objTipoSolicitud->consultarTipoSolicitudXidTipoSolicitud($aux);
		$objTipoSolicitud->cerrarConexion();
		if ($tabla > 0) {
			$etiquetas = array('id', 'sol', 'fecIni', 'fecFin', 'seg');
			$campos = array('idTipoSolicitud', 'solTipoSolicitud', 'fecIniTipoSolicitud', 'fecFinTipoSolicitud', 'segTipoSolicitud');
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
	$pdf->Output ( 'TipoSolicitud.pdf', 'I' );
?>