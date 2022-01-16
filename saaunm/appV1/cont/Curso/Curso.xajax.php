<?php
/** 
 * @file curso.xajax.php 
 *  
 * Xajax de la Tabla Curso 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/11/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD . 'Curso.php');
require_once(MOD .'Enumerado.php');
require_once(MOD .'Pdf.php');
require_once(APP .'comun/grid.php');
$action = new Action ();
$arrayFunciones = Array ("llenarGridCurso", "clickCurso", "vntActClave");
if (! isset ( $xajax )) {
$action->iniciarXajax ( $arrayFunciones );
} else {
$action->cargarFunciones ( $arrayFunciones,$xajax );
}
function llenarGridCurso($campoBusqueda,$indice){
	global $objResponse;
	$objResponse = new xajaxResponse ();
		$nomPagina = 'Curso'; // EDITABLE
		$resultado = null;
		$numPag = 0;
		$paginas = '';
		try {
			$objCurso = new Curso();
		if ($campoBusqueda != '') {
		$resultado = $objCurso->consultarCursoX_ESPECIFICAR_METODO ( $campoBusqueda ); // EDITABLE
		} else {
		$resultado = $objCurso->consultarCurso (); // EDITABLE
		}
$objCurso->cerrarConexion (); // EDITABLE 
/* INICIO PAGINACION */ 
$action = new Action();
$numPag = $action->getPageNumbers($resultado);
if ($numPag > 1) {
	$matRes = $action->paginado ( $objResponse, $numPag, $indice, 'xajax_llenarGridCurso', $campoBusqueda, $paginas, $resultado );
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
// 			$etiquetas = array('','Imp','Ver','Editar','Id','IdPeriodo','IdProgEstudio','IdEdoRegistro','IdEmpleado','IdPensum','IdAsignatura','Cod','Nom','CupMax','FecIni','FecFin');
			$etiquetas = array('','Imp','Ver','Editar','Id','Código','Nombre','CupMax','Fecha Ini','Fecha Fin');
		if ($resultado!=null) {
			$chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
			$img = "<img class='classHand' onclick='xajax_clickCurso(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
			$img1 = crearObjImagen ( $nomPagina, 'edi' );
			$img3 = "<a href='$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
			$campos = array('obj_' . $chk, 'obj_' . $img3,'obj_' . $img, 'obj_' . $img1,'idCurso','idPeriodo','idProgEstudio','idEdoRegistro','idEmpleado','idPensum','idAsignatura','codCurso','nomCurso','cupMaxCurso','fecIniCurso','fecFinCurso');
			llenar_grid($objResponse,'gridCurso',$etiquetas,$resultado,$campos,'idCurso',false);
			$msg='';
		}
		else
		{
			limpiar_grid ( $objResponse, 'gridCurso', $etiquetas );
			$msg='No se encontraron registros, con las caracteristicas definidas por el usuario';
// 			$objResponse->call ("ventanaAlerta('$msg','Alerta')");
		}
} catch ( exception $e ) {
	$objResponse->call ( "ventanaAlerta('Error de conexion','Alerta')" );
	return $objResponse;
}
	return $objResponse;
}
function clickCurso($id,$ind){
	global $objResponse;
	$objResponse = new xajaxResponse ();
	switch ($ind) {
		case 1 :
			$objResponse->script ( "vntConsultar('Curso/consultar/$id', 'Consultar Curso');" );
			break;
		case 2 :
		;
		break;
	}
	return $objResponse;
}
?>
