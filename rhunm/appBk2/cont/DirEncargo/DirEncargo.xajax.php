<?php
/** 
 * @file empleado.xajax.php 
 *  
 * Xajax de la Tabla Empleado 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD . 'DirEncargo.php');
require_once(MOD .'Pdf.php');
require_once(APP .'comun/grid.php');
$action = new Action ();
$arrayFunciones = Array ("llenarGridDirEncargo", "clickDirEncargo");
if (! isset ( $xajax )) {
$action->iniciarXajax ( $arrayFunciones );
} else {
	
$action->cargarFunciones ( $arrayFunciones,$xajax );
}
function llenarGridDirEncargo($campoBusqueda,$indice){
	global $objResponse;
	$objResponse = new xajaxResponse ();
		$nomPagina = 'DirEncargo'; // EDITABLE
		$resultado = null;
		$numPag = 0;
		$paginas = '';
		try {
			$objDirEncargo = new DirEncargo();
		if ($campoBusqueda != '') {

		} else {
		$resultado = $objDirEncargo->consultarDirEncargo(); // EDITABLE
		}
$objDirEncargo->cerrarConexion (); // EDITABLE 
/* INICIO PAGINACION */ 
$action = new Action();
$numPag = $action->getPageNumbers($resultado);
if ($numPag > 1) {
	$matRes = $action->paginado ( $objResponse, $numPag, $indice, 'xajax_llenarGridDirEncargo', $campoBusqueda, $paginas, $resultado );
	$paginas = $matRes [0];
	$cad1 = $matRes [1];
	$cad2 = $matRes [2];
	$cad3 = $matRes [3];
	$resultado = $action->getPage ( $resultado, $indice );
	if ($indice == 0) {
	$indice = 1;
	}
	$paginas = "$cad1 $paginas $cad2  $cad3";
$objResponse->assign('paginacion','innerHTML',$paginas,'');
$objResponse->assign('paginacion1','innerHTML',$paginas,'');
} else {
	$objResponse->assign('paginacion','innerHTML','','');
	$objResponse->assign('paginacion1','innerHTML','','');
}
/* FIN PAGINACION */ 
			$etiquetas = array('','Imp','Ver','Editar','Id', 'Código Dir. Encargo', 'Nombre Dir. Encargo');
		if ($resultado!=null) {
			$chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
			$img = "<img class='classHand' onclick='xajax_clickDirEncargo(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
			$img1 = crearObjImagen ( $nomPagina, 'edi' );
			$img3 = "<a href='$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
			$campos = array('obj_' . $chk, 'obj_' . $img3,'obj_' . $img, 'obj_' . $img1,'idDirEncargo', 'codDirEncargo', 'nomDirEncargo' );
			llenar_grid($objResponse,'gridDirEncargo',$etiquetas,$resultado,$campos,'idDirEncargo',false);
			$msg='';
		}
		else
		{
			limpiar_grid ( $objResponse, 'gridDirEncargo', $etiquetas );
			$msg='No se encontraron registros, con las caracteristicas definidas por el usuario';
			$objResponse->call ("ventanaAlerta('$msg','Alerta')");
		}
} catch ( exception $e ) {
	$objResponse->call ( "ventanaAlerta('Error de conexion','Alerta')" );
	return $objResponse;
}
	return $objResponse;
}
function clickDirEncargo($id,$ind){
	global $objResponse;
	$objResponse = new xajaxResponse ();
	switch ($ind) {
		case 1 :
			$objResponse->script ( "vntConsultar('DirEncargo/consultar/$id', 'Consultar DirEncargo');" );
			break;
		case 2 :
			
		;
		break;
	}
	return $objResponse;
}

?>
