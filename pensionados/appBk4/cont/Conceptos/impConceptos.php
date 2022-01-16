<?php 
/** 
 * @file conceptos.php 
 *  
 * Imprimir de la Tabla Conceptos 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 16/10/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'Conceptos.php');
require_once(MOD.'PDF.php');
$alinHoja = 'L'; 
// Instanciando la clase PDF 
$pdf = MYPDF::crearPdf ( $alinHoja );; 
// Encabezado predeterminado; 
// $pdf->Encabezado(); 
$pdf->encabezado_def(60,null,'Conceptos');
$pdf->SetFont ( 'helvetica', '', 10 );; 
$pdf->AddPage ();; 
$titulo = 'Reporte de '; 
$aux = $opt; 
		$objConceptos = new Conceptos ();
		$tabla = $objConceptos->consultarConceptosXidConceptos($aux);
		$objConceptos->cerrarConexion();
		if ($tabla > 0) {
			$etiquetas = array('id', 'Tipo Concepto', 'Estado', 'Código', 'Nombre', 'Etiqueta Corta', 'Afecta afp', 'Afecta snp', 'Afecta ipss', 'Es remunerada');
			$campos = array('idConceptos', 'nomTipoConcepto', 'nomEdoRegistro', 'codConceptos', 'nomConceptos', 'etiConceptos', 'afecta_afp', 'afecta_snp', 'afecta_ipss', 'es_remunera');
			$datos = $pdf->procesandoDatos($tabla,$campos);
			$anchoColumnas = array(10,30,20,20,80,40,20,20,20,20);
			$alineacion = array('L','L','L','L','L','L','L','L','L','L');
			$pdf->Cell ( 0, 10, '', 0, 1, 'L' );
			$pdf->llenarTabla($etiquetas,$datos,$campos,$alineacion,$anchoColumnas,true);
			$pdf->Footer();	
		}else{
			$mns = 'Actualmente no se puede presentar el reporte, por favor intentelo nuevamente';
			$pdf->Cell ( 0, 10, $mns, 0, 1, 'C' );
		}
	//Cerrando e imprimiendo documento
	$pdf->Output ( 'Conceptos.pdf', 'I' );
?>