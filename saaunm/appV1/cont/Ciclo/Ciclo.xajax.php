<?php
/** 
 * @file ciclo.xajax.php 
 *  
 * Xajax de la Tabla Ciclo 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/11/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD . 'Ciclo.php');
require_once(MOD .'Enumerado.php');
require_once(MOD .'Pdf.php');
require_once(APP .'comun/grid.php');
$action = new Action ();
$arrayFunciones = Array ("llenarGridCiclo", "clickCiclo", "vntActClave");
if (! isset ( $xajax )) {
$action->iniciarXajax ( $arrayFunciones );
} else {
$action->cargarFunciones ( $arrayFunciones,$xajax );
}
function llenarGridCiclo($campoBusqueda,$indice){
	global $objResponse;
	$objResponse = new xajaxResponse ();
		$nomPagina = 'Ciclo'; // EDITABLE
		$resultado = null;
		$numPag = 0;
		$paginas = '';
		try {
			$objCiclo = new Ciclo();
		if ($campoBusqueda != '') {
		$resultado = $objCiclo->consultarCicloX_ESPECIFICAR_METODO ( $campoBusqueda ); // EDITABLE
		} else {
		$resultado = $objCiclo->consultarCiclo (); // EDITABLE
		}
$objCiclo->cerrarConexion (); // EDITABLE 
/* INICIO PAGINACION */ 
$action = new Action();
$numPag = $action->getPageNumbers($resultado);
if ($numPag > 1) {
	$matRes = $action->paginado ( $objResponse, $numPag, $indice, 'xajax_llenarGridCiclo', $campoBusqueda, $paginas, $resultado );
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
// 			$etiquetas = array('','Imp','Ver','Editar','Id','IdEdoRegistro','Nom','Cod');
			$etiquetas = array('','Imp','Ver','Editar','Id','Estado','Nombre','Código');
		if ($resultado!=null) {
			$chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
			$img = "<img class='classHand' onclick='xajax_clickCiclo(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
			$img1 = crearObjImagen ( $nomPagina, 'edi' );
			$img3 = "<a href='$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
			$campos = array('obj_' . $chk, 'obj_' . $img3,'obj_' . $img, 'obj_' . $img1,'idCiclo','idEdoRegistro','nomCiclo','codCiclo');
			llenar_grid($objResponse,'gridCiclo',$etiquetas,$resultado,$campos,'idCiclo',false);
			$msg='';
		}
		else
		{
			limpiar_grid ( $objResponse, 'gridCiclo', $etiquetas );
			$msg='No se encontraron registros, con las caracteristicas definidas por el usuario';
// 			$objResponse->call ("ventanaAlerta('$msg','Alerta')");
		}
} catch ( exception $e ) {
	$objResponse->call ( "ventanaAlerta('Error de conexion','Alerta')" );
	return $objResponse;
}
	return $objResponse;
}
function clickCiclo($id,$ind){
	global $objResponse;
	$objResponse = new xajaxResponse ();
	switch ($ind) {
		case 1 :
			$objResponse->script ( "vntConsultar('Ciclo/consultar/$id', 'Consultar Ciclo');" );
			break;
		case 2 :
		;
		break;
	}
	return $objResponse;
}
?>
