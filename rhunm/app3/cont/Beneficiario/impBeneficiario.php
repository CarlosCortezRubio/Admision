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
require_once(MOD.'Beneficiario.php');
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
		$objBeneficiario = new Beneficiario ();
		$tabla = $objBeneficiario->consultarBeneficiarioXMultiXid($aux);
		$objBeneficiario->cerrarConexion();
		if ($tabla > 0) {
			$etiquetas = array('ID', 'Parentesto', 'Primer Nombre','Segundo Nombre','Apellido Paterno','Apellido Materno', 'Fecha Inicio', 'Fecha Fin');
			$campos = array('idBeneficiario', 'nomParentesco', 'nom1Persona','nom2Persona','ape1Persona','ape2Persona', 'fecIniBeneficiario', 'fecFinBeneficiario');
			$datos = $pdf->procesandoDatos($tabla,$campos);
			$anchoColumnas = array(10,25,25,25,25,25,18,18);
			$alineacion = array('C','L','L','L','L','L','C','C');
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