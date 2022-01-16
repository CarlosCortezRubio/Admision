<?php 
/** 
 * @file tipopersona.php 
 *  
 * Imprimir de la Tabla TipoPersona 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 16/10/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'TipoPersona.php');
require_once(MOD.'PDF.php');
$alinHoja = 'P'; 
// Instanciando la clase PDF 
$pdf = MYPDF::crearPdf ( $alinHoja );; 
// Encabezado predeterminado; 
$pdf->encabezado_def(60,null,'Tipo Persona');
$pdf->SetFont ( 'helvetica', '', 10 );; 
$pdf->AddPage ();; 
$titulo = 'Reporte de '; 
$aux = $opt; 
		$objTipoPersona = new TipoPersona ();
		$tabla = $objTipoPersona->consultarTipoPersonaXidTipoPersona($aux);
		$objTipoPersona->cerrarConexion();
		if ($tabla > 0) {
			$etiquetas = array('id', 'idEdoRegistro', 'nom', 'desc');
			$campos = array('idTipoPersona', 'idEdoRegistro', 'nomTipoPersona', 'descTipoPersona');
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
	$pdf->Output ( 'TipoPersona.pdf', 'I' );
?>