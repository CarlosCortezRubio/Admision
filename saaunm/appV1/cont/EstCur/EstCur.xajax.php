<?php
/** 
 * @file estcur.xajax.php 
 *  
 * Xajax de la Tabla EstCur 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 29/11/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD . 'EstCur.php');
require_once(MOD .'Enumerado.php');
require_once(MOD .'Pdf.php');
require_once(APP .'comun/grid.php');
$action = new Action ();
$arrayFunciones = Array ("llenarGridEstCur", "clickEstCur", "vntActClave");
if (! isset ( $xajax )) {
$action->iniciarXajax ( $arrayFunciones );
} else {
$action->cargarFunciones ( $arrayFunciones,$xajax );
}
function llenarGridEstCur($campoBusqueda,$indice){
	global $objResponse;
	$objResponse = new xajaxResponse ();
		$nomPagina = 'EstCur'; // EDITABLE
		$resultado = null;
		$numPag = 0;
		$paginas = '';
		try {
			$objEstCur = new EstCur();
		if ($campoBusqueda != '') {
		$resultado = $objEstCur->consultarEstCurX_ESPECIFICAR_METODO ( $campoBusqueda ); // EDITABLE
		} else {
		$resultado = $objEstCur->consultarEstCur (); // EDITABLE
		}
$objEstCur->cerrarConexion (); // EDITABLE 
/* INICIO PAGINACION */ 
$action = new Action();
$numPag = $action->getPageNumbers($resultado);
if ($numPag > 1) {
	$matRes = $action->paginado ( $objResponse, $numPag, $indice, 'xajax_llenarGridEstCur', $campoBusqueda, $paginas, $resultado );
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
// 			$etiquetas = array('','Imp','Ver','Editar','Id','IdCurso','IdEstudiante','Nota','Inasist','Obs');
			$etiquetas = array('','Imp','Ver','Editar','Id','Curso','Estudiante','Calificación','Inasistencias','Observaciones');
		if ($resultado!=null) {
			$chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
			$img = "<img class='classHand' onclick='xajax_clickEstCur(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
			$img1 = crearObjImagen ( $nomPagina, 'edi' );
			$img3 = "<a href='$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
			$campos = array('obj_' . $chk, 'obj_' . $img3,'obj_' . $img, 'obj_' . $img1,'idEstCur','idCurso','idEstudiante','notaEstCur','inasistEstCur','obsEstCur');
			llenar_grid($objResponse,'gridEstCur',$etiquetas,$resultado,$campos,'idEstCur',false);
			$msg='';
		}
		else
		{
			limpiar_grid ( $objResponse, 'gridEstCur', $etiquetas );
			$msg='No se encontraron registros, con las caracteristicas definidas por el usuario';
// 			$objResponse->call ("ventanaAlerta('$msg','Alerta')");
		}
} catch ( exception $e ) {
	$objResponse->call ( "ventanaAlerta('Error de conexion','Alerta')" );
	return $objResponse;
}
	return $objResponse;
}
function clickEstCur($id,$ind){
	global $objResponse;
	$objResponse = new xajaxResponse ();
	switch ($ind) {
		case 1 :
			$objResponse->script ( "vntConsultar('EstCur/consultar/$id', 'Consultar EstCur');" );
			break;
		case 2 :
		;
		break;
	}
	return $objResponse;
}
?>
