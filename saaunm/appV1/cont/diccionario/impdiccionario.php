<?php 
/** 
 * @file diccionario.php 
 *  
 * Imprimir de la Tabla Diccionario 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 27/11/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'Diccionario.php');
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
		$objDiccionario = new Diccionario ();
		$tabla = $objDiccionario->consultarDiccionarioXidDiccionario($aux);
		$objDiccionario->cerrarConexion();
		if ($tabla > 0) {
			$etiquetas = array('diccionarioid', 'nombretabla', 'nombremsgtabla', 'generotabla', 'nombrecampo', 'nombrecortocampo', 'descripcioncampo', 'tipocampo', 'tamcampo', 'ordencampo', 'precisioncampo', 'dominio', 'cjtovalores', 'archivosec', 'ncolumnas', 'colenlace', 'campoact', 'sqlgrid', 'camposbusqueda', 'campoconsulta', 'campovalido', 'crearmetodo');
			$campos = array('diccionarioid', 'nombretabla', 'nombremsgtabla', 'generotabla', 'nombrecampo', 'nombrecortocampo', 'descripcioncampo', 'tipocampo', 'tamcampo', 'ordencampo', 'precisioncampo', 'dominio', 'cjtovalores', 'archivosec', 'ncolumnas', 'colenlace', 'campoact', 'sqlgrid', 'camposbusqueda', 'campoconsulta', 'campovalido', 'crearmetodo');
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
	$pdf->Output ( 'Diccionario.pdf', 'I' );
?>