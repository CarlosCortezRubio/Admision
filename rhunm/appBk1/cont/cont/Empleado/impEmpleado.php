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
require_once(MOD.'Empleado.php');
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
		$objEmpleado = new Empleado ();
		$tabla = $objEmpleado->consultarEmpleadoGridXid($aux);
		$objEmpleado->cerrarConexion();
		if ($tabla > 0) {
			$etiquetas = array('Id','Documento','Primer Nombre','Segundo Nombre','Apellido Paterno','Apellido Materno','Fecha Nacimiento');
			$campos = array('idEmpleado','dniPersona','nom1Persona','nom2Persona','ape1Persona','ape2Persona','fecNacPersona');
			$datos = $pdf->procesandoDatos($tabla,$campos);
			$anchoColumnas = array(20,20,25,25,25,25,30);
			$alineacion = array('L','L','L','L','L','L','L');
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