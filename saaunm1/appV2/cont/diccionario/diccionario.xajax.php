<?php
/** 
 * @file diccionario.xajax.php 
 *  
 * Xajax de la Tabla Diccionario 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/11/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD . 'Diccionario.php');
require_once(MOD .'Enumerado.php');
require_once(MOD .'Pdf.php');
require_once(APP .'comun/grid.php');
$action = new Action ();
$arrayFunciones = Array ("llenarGridDiccionario", "clickDiccionario", "vntActClave");
if (! isset ( $xajax )) {
$action->iniciarXajax ( $arrayFunciones );
} else {
$action->cargarFunciones ( $arrayFunciones,$xajax );
}
function llenarGridDiccionario($campoBusqueda,$indice){
	global $objResponse;
	$objResponse = new xajaxResponse ();
		$nomPagina = 'diccionario'; // EDITABLE
		$resultado = null;
		$numPag = 0;
		$paginas = '';
		try {
			$objDiccionario = new Diccionario();
		if ($campoBusqueda != '') {
		$resultado = $objDiccionario->consultarDiccionarioX_ESPECIFICAR_METODO ( $campoBusqueda ); // EDITABLE
		} else {
		$resultado = $objDiccionario->consultarDiccionario (); // EDITABLE
		}
$objDiccionario->cerrarConexion (); // EDITABLE 
/* INICIO PAGINACION */ 
$action = new Action();
$numPag = $action->getPageNumbers($resultado);
if ($numPag > 1) {
	$matRes = $action->paginado ( $objResponse, $numPag, $indice, 'xajax_llenarGridDiccionario', $campoBusqueda, $paginas, $resultado );
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
			$etiquetas = array('','Imp','Ver','Editar','Id','Nombretabla','Nombremsgtabla','Generotabla','Nombrecampo','Nombrecortocampo','Descripcioncampo','Tipocampo','Tamcampo','Ordencampo','Precisioncampo','Dominio','Cjtovalores','Archivosec','Ncolumnas','Colenlace','Campoact','Sqlgrid','Camposbusqueda','Campoconsulta','Campovalido','Crearmetodo');
		if ($resultado!=null) {
			$chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
			$img = "<img class='classHand' onclick='xajax_clickDiccionario(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
			$img1 = crearObjImagen ( $nomPagina, 'edi' );
			$img3 = "<a href='$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
			$campos = array('obj_' . $chk, 'obj_' . $img3,'obj_' . $img, 'obj_' . $img1,'diccionarioid','nombretabla','nombremsgtabla','generotabla','nombrecampo','nombrecortocampo','descripcioncampo','tipocampo','tamcampo','ordencampo','precisioncampo','dominio','cjtovalores','archivosec','ncolumnas','colenlace','campoact','sqlgrid','camposbusqueda','campoconsulta','campovalido','crearmetodo');
			llenar_grid($objResponse,'gridDiccionario',$etiquetas,$resultado,$campos,'idDiccionario',false);
			$msg='';
		}
		else
		{
			limpiar_grid ( $objResponse, 'gridDiccionario', $etiquetas );
			$msg='No se encontraron registros, con las caracteristicas definidas por el usuario';
			$objResponse->call ("ventanaAlerta('$msg','Alerta')");
		}
} catch ( exception $e ) {
	$objResponse->call ( "ventanaAlerta('Error de conexion','Alerta')" );
	return $objResponse;
}
	return $objResponse;
}
function clickDiccionario($id,$ind){
	global $objResponse;
	$objResponse = new xajaxResponse ();
	switch ($ind) {
		case 1 :
			$objResponse->script ( "vntConsultar('diccionario/consultar/$id', 'Consultar Diccionario');" );
			break;
		case 2 :
		;
		break;
	}
	return $objResponse;
}
?>
