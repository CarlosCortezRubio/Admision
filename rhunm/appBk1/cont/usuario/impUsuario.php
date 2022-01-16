<?php 
/** 
 * @file usuario.php 
 *  
 * Imprimir de la Tabla Usuario 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'Usuario.php');
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
		$objUsuario = new Usuario ();
		$tabla = $objUsuario->consultarUsuarioXidUsuario($aux);
		$objUsuario->cerrarConexion();
		if ($tabla > 0) {
			$etiquetas = array('id', 'idPersona', 'idRol', 'idEdoRegistro', 'cuenta', 'contrasena', 'fecCreacion', 'pregSecreta', 'respPregSecreta');
			$campos = array('idUsuario', 'idPersona', 'idRol', 'idEdoRegistro', 'cuentaUsuario', 'contrasenaUsuario', 'fecCreacion', 'pregSecreta', 'respPregSecreta');
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
	$pdf->Output ( 'Usuario.pdf', 'I' );
?>