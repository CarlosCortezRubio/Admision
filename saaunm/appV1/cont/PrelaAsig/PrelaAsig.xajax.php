<?php
/** 
 * @file prelaasig.xajax.php 
 *  
 * Xajax de la Tabla PrelaAsig 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 27/11/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD . 'PrelaAsig.php');
require_once(MOD .'Enumerado.php');
require_once(MOD .'Pdf.php');
require_once(APP .'comun/grid.php');
$action = new Action ();
$arrayFunciones = Array ("llenarGridPrelaAsig", "clickPrelaAsig", "vntActClave");
if (! isset ( $xajax )) {
$action->iniciarXajax ( $arrayFunciones );
} else {
$action->cargarFunciones ( $arrayFunciones,$xajax );
}
function llenarGridPrelaAsig($campoBusqueda,$indice){
	global $objResponse;
	$objResponse = new xajaxResponse ();
		$nomPagina = 'PrelaAsig'; // EDITABLE
		$resultado = null;
		$numPag = 0;
		$paginas = '';
		try {
			$objPrelaAsig = new PrelaAsig();
		if ($campoBusqueda != '') {
		$resultado = $objPrelaAsig->consultarPrelaAsigX_ESPECIFICAR_METODO ( $campoBusqueda ); // EDITABLE
		} else {
		$resultado = $objPrelaAsig->consultarPrelaAsig (); // EDITABLE
		}
$objPrelaAsig->cerrarConexion (); // EDITABLE 
/* INICIO PAGINACION */ 
$action = new Action();
$numPag = $action->getPageNumbers($resultado);
if ($numPag > 1) {
	$matRes = $action->paginado ( $objResponse, $numPag, $indice, 'xajax_llenarGridPrelaAsig', $campoBusqueda, $paginas, $resultado );
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
			$etiquetas = array('','Imp','Ver','Editar','IdPenAsig','IdAsignatura','Id');
		if ($resultado!=null) {
			$chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
			$img = "<img class='classHand' onclick='xajax_clickPrelaAsig(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
			$img1 = crearObjImagen ( $nomPagina, 'edi' );
			$img3 = "<a href='$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
			$campos = array('obj_' . $chk, 'obj_' . $img3,'obj_' . $img, 'obj_' . $img1,'idPenAsig','idAsignatura','idPrelaAsig');
			llenar_grid($objResponse,'gridPrelaAsig',$etiquetas,$resultado,$campos,'idPrelaAsig',false);
			$msg='';
		}
		else
		{
			limpiar_grid ( $objResponse, 'gridPrelaAsig', $etiquetas );
			$msg='No se encontraron registros, con las caracteristicas definidas por el usuario';
			$objResponse->call ("ventanaAlerta('$msg','Alerta')");
		}
} catch ( exception $e ) {
	$objResponse->call ( "ventanaAlerta('Error de conexion','Alerta')" );
	return $objResponse;
}
	return $objResponse;
}
function clickPrelaAsig($id,$ind){
	global $objResponse;
	$objResponse = new xajaxResponse ();
	switch ($ind) {
		case 1 :
			$objResponse->script ( "vntConsultar('PrelaAsig/consultar/$id', 'Consultar PrelaAsig');" );
			break;
		case 2 :
		;
		break;
	}
	return $objResponse;
}
?>
