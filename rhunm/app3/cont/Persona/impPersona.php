<?php 
/** 
 * @file persona.php 
 *  
 * Imprimir de la Tabla Persona 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'Persona.php');
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
		$objPersona = new Persona ();
		$tabla = $objPersona->consultarPersonaMultiXid($aux);
		$objPersona->cerrarConexion();
		if ($tabla > 0) {
			$etiquetas = array('Genero','Tipo Documento','Dni','Primer Nombre','Segundo Nombre','Apellido Paterno','Apellido Materno','Fecha Nacimiento');
			$campos = array('nomGenero','nomTipoDoc','dniPersona','nom1Persona','nom2Persona','ape1Persona','ape2Persona','fecNacPersona');
			$datos = $pdf->procesandoDatos($tabla,$campos);
			$anchoColumnas = array(20,23,20,25,25,25,25,25);
			$alineacion = array('L','L','L','L','L','L','L','L');
			$pdf->Cell ( 0, 10, '', 0, 1, 'L' );
			$pdf->llenarTabla($etiquetas,$datos,$campos,$alineacion,$anchoColumnas,true);
			$pdf->Footer();	
		}else{
			$mns = 'Actualmente no se puede presentar el reporte, por favor intentelo nuevamente';
			$pdf->Cell ( 0, 10, $mns, 0, 1, 'C' );
		}
	//Cerrando e imprimiendo documento
	$pdf->Output ( 'Persona.pdf', 'I' );
?>