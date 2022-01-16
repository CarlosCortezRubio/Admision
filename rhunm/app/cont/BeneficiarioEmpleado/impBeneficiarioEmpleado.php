<?php 
/** 
 * @file empleado.php 
 *  
 * Imprimir de la Tabla Empleado 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'BeneficiarioEmpleado.php');
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
		$objBeneficiario = new BeneficiarioEmpleado ();
		$tabla = $objBeneficiario->consultarBeneficiarioEmpleadoMulti($aux);
		$objBeneficiario->cerrarConexion();
		if ($tabla > 0) {
			$etiquetas = array('Dni del Beneficiario','Nombre del Beneficiario','Apellido del Beneficiario', 'Dni del Empleado','Nombre del Empleado','Apellido del Empleado');
			$campos = array('dniBeneficiario', 'nomBeneficiario','apeBeneficiario','dniEmpleado','nomEmpleado','apeEmpleado');
			$datos = $pdf->procesandoDatos($tabla,$campos);
			$anchoColumnas = array(25,30,30,20,20,18);
			$alineacion = array('C','L','L','L','L','C');
			$pdf->Cell ( 0, 10, '', 0, 1, 'L' );
			$pdf->llenarTabla($etiquetas,$datos,$campos,$alineacion,$anchoColumnas,true);
			$pdf->Footer();	
		}else{
			$mns = 'Actualmente no se puede presentar el reporte, por favor intentelo nuevamente';
			$pdf->Cell ( 0, 10, $mns, 0, 1, 'C' );
		}
	//Cerrando e imprimiendo documento
	$pdf->Output ( 'Empleado.pdf', 'I' );
?>