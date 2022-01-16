<?php
/** 
 * @file persona2.xajax.php 
 *  
 * Xajax de la Tabla Persona2 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 27/11/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD . 'Persona2.php');
require_once(MOD .'Enumerado.php');
require_once(MOD .'Pdf.php');
require_once(APP .'comun/grid.php');
$action = new Action ();
$arrayFunciones = Array ("llenarGridPersona2", "clickPersona2", "vntActClave");
if (! isset ( $xajax )) {
$action->iniciarXajax ( $arrayFunciones );
} else {
$action->cargarFunciones ( $arrayFunciones,$xajax );
}
function llenarGridPersona2($campoBusqueda,$indice){
	global $objResponse;
	$objResponse = new xajaxResponse ();
		$nomPagina = 'Persona2'; // EDITABLE
		$resultado = null;
		$numPag = 0;
		$paginas = '';
		try {
			$objPersona2 = new Persona2();
		if ($campoBusqueda != '') {
		$resultado = $objPersona2->consultarPersona2X_ESPECIFICAR_METODO ( $campoBusqueda ); // EDITABLE
		} else {
		$resultado = $objPersona2->consultarPersona2 (); // EDITABLE
		}
$objPersona2->cerrarConexion (); // EDITABLE 
/* INICIO PAGINACION */ 
$action = new Action();
$numPag = $action->getPageNumbers($resultado);
if ($numPag > 1) {
	$matRes = $action->paginado ( $objResponse, $numPag, $indice, 'xajax_llenarGridPersona2', $campoBusqueda, $paginas, $resultado );
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
			$etiquetas = array('','Imp','Ver','Editar','IdPersona','Edo_IDEDOCIVIL','IDBANCO','IdEdoRegistro','IdGenero','IdEdoCivil','IdIdioma','IdDistritoNac','IdDistritoDir','IdTipoDoc','IdZona','IdVia','DniPersona','Nom1Persona','Nom2Persona','Ape1Persona','Ape2Persona','NumDepPersona','FecNacPersona','ZonaDomPersona','DesViaDomPersona','NumViaDomPersona','IntDomPersona','Tel1DomPersona','Tel2DomPersona','RefDomPersona','EmaDomPersona');
		if ($resultado!=null) {
			$chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
			$img = "<img class='classHand' onclick='xajax_clickPersona2(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
			$img1 = crearObjImagen ( $nomPagina, 'edi' );
			$img3 = "<a href='$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
			$campos = array('obj_' . $chk, 'obj_' . $img3,'obj_' . $img, 'obj_' . $img1,'idPersona','Edo_IDEDOCIVIL','IDBANCO','idEdoRegistro','idGenero','idEdoCivil','idIdioma','idDistritoNac','idDistritoDir','idTipoDoc','idZona','idVia','dniPersona','nom1Persona','nom2Persona','ape1Persona','ape2Persona','numDepPersona','fecNacPersona','zonaDomPersona','desViaDomPersona','numViaDomPersona','intDomPersona','tel1DomPersona','tel2DomPersona','refDomPersona','emaDomPersona');
			llenar_grid($objResponse,'gridPersona2',$etiquetas,$resultado,$campos,'idPersona2',false);
			$msg='';
		}
		else
		{
			limpiar_grid ( $objResponse, 'gridPersona2', $etiquetas );
			$msg='No se encontraron registros, con las caracteristicas definidas por el usuario';
			$objResponse->call ("ventanaAlerta('$msg','Alerta')");
		}
} catch ( exception $e ) {
	$objResponse->call ( "ventanaAlerta('Error de conexion','Alerta')" );
	return $objResponse;
}
	return $objResponse;
}
function clickPersona2($id,$ind){
	global $objResponse;
	$objResponse = new xajaxResponse ();
	switch ($ind) {
		case 1 :
			$objResponse->script ( "vntConsultar('Persona2/consultar/$id', 'Consultar Persona2');" );
			break;
		case 2 :
		;
		break;
	}
	return $objResponse;
}
?>
