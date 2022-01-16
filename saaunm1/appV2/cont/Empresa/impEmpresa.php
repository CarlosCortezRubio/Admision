<?php 
/** 
 * @file empresa.php 
 *  
 * Imprimir de la Tabla Empresa 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/11/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'Empresa.php');
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
		$objEmpresa = new Empresa ();
		$tabla = $objEmpresa->consultarEmpresaXidEmpresa($aux);
		$objEmpresa->cerrarConexion();
		if ($tabla > 0) {
			$etiquetas = array('id', 'ruc', 'tel', 'dir', 'correo');
			$campos = array('idEmpresa', 'rucEmpresa', 'telEmpresa', 'dirEmpresa', 'correoEmpresa');
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
	$pdf->Output ( 'Empresa.pdf', 'I' );
?>