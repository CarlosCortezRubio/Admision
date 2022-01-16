<?php 
/** 
 * @file persona2.php 
 *  
 * Imprimir de la Tabla Persona2 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 27/11/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'Persona2.php');
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
		$objPersona2 = new Persona2 ();
		$tabla = $objPersona2->consultarPersona2XidPersona2($aux);
		$objPersona2->cerrarConexion();
		if ($tabla > 0) {
			$etiquetas = array('idPersona', 'Edo_IDEDOCIVIL', 'IDBANCO', 'idEdoRegistro', 'idGenero', 'idEdoCivil', 'idIdioma', 'idDistritoNac', 'idDistritoDir', 'idTipoDoc', 'idZona', 'idVia', 'dniPersona', 'nom1Persona', 'nom2Persona', 'ape1Persona', 'ape2Persona', 'numDepPersona', 'fecNacPersona', 'zonaDomPersona', 'desViaDomPersona', 'numViaDomPersona', 'intDomPersona', 'tel1DomPersona', 'tel2DomPersona', 'refDomPersona', 'emaDomPersona');
			$campos = array('idPersona', 'Edo_IDEDOCIVIL', 'IDBANCO', 'idEdoRegistro', 'idGenero', 'idEdoCivil', 'idIdioma', 'idDistritoNac', 'idDistritoDir', 'idTipoDoc', 'idZona', 'idVia', 'dniPersona', 'nom1Persona', 'nom2Persona', 'ape1Persona', 'ape2Persona', 'numDepPersona', 'fecNacPersona', 'zonaDomPersona', 'desViaDomPersona', 'numViaDomPersona', 'intDomPersona', 'tel1DomPersona', 'tel2DomPersona', 'refDomPersona', 'emaDomPersona');
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
	$pdf->Output ( 'Persona2.pdf', 'I' );
?>