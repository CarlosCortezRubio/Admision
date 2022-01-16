<?php
/** 
 * @file concact.xajax.php 
 *  
 * Xajax de la Tabla ConcAct 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 31/05/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD . 'ConcAct.php');
require_once(MOD .'Enumerado.php');
require_once(MOD .'Pdf.php');
require_once(APP .'comun/grid.php');
$action = new Action ();
$arrayFunciones = Array ("llenarGridConcAct", "clickConcAct", "vntActClave");
if (! isset ( $xajax )) {
$action->iniciarXajax ( $arrayFunciones );
} else {
$action->cargarFunciones ( $arrayFunciones,$xajax );
}
function llenarGridConcAct($campoBusqueda,$indice){
	global $objResponse;
	$objResponse = new xajaxResponse ();
		$nomPagina = 'ConcAct'; // EDITABLE
		$resultado = null;
		$numPag = 0;
		$paginas = '';
		try {
			$objConcAct = new ConcAct();
		if ($campoBusqueda != '') {
		$resultado = $objConcAct->consultarConcActX_ESPECIFICAR_METODO ( $campoBusqueda ); // EDITABLE
		} else {
		$resultado = $objConcAct->consultarConcAct (); // EDITABLE
		}
$objConcAct->cerrarConexion (); // EDITABLE 
/* INICIO PAGINACION */ 
$action = new Action();
$numPag = $action->getPageNumbers($resultado);
if ($numPag > 1) {
	$matRes = $action->paginado ( $objResponse, $numPag, $indice, 'xajax_llenarGridConcAct', $campoBusqueda, $paginas, $resultado );
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
			$etiquetas = array('','Imp','Ver','Editar','Id','Aguinaldo','Basica','Bonif_personal','Ael25671','Aeds081','Tph','Bonif_familiar','Du080_04','Refrig_y_movi','Du90_96','Ds19_94_pcm','Ds21_92_pcm','Bon_especial','Reunificada','Igv','Cargsimul','Art18_dl_20530','Du073_97','Du011_99','Du037_94','Ds016','Ds017','Ds110_2006','Ds039_2007','Ds120_2008','Ds014_2009','Ds077_2010','Ds031_2011','Ds024_2012','Ds004_2013','Ds003_2014','Ds002_2015','Ds005_2016','Ds020_2017','Ds011_2018','Ds009_2019','Ds006_2020','Ipss','Cafae','Prderrma');
		if ($resultado!=null) {
			$chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
			$img = "<img class='classHand' onclick='xajax_clickConcAct(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
			$img1 = crearObjImagen ( $nomPagina, 'edi' );
			$img3 = "<a href='$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
			$campos = array('obj_' . $chk, 'obj_' . $img3,'obj_' . $img, 'obj_' . $img1,'idConcAct','aguinaldoConcAct','basicaConcAct','bonif_personalConcAct','ael25671ConcAct','aeds081ConcAct','tphConcAct','bonif_familiarConcAct','du080_04ConcAct','refrig_y_moviConcAct','du90_96ConcAct','ds19_94_pcmConcAct','ds21_92_pcmConcAct','bon_especialConcAct','reunificadaConcAct','igvConcAct','cargsimulConcAct','art18_dl_20530ConcAct','du073_97ConcAct','du011_99ConcAct','du037_94ConcAct','ds016ConcAct','ds017ConcAct','ds110_2006ConcAct','ds039_2007ConcAct','ds120_2008ConcAct','ds014_2009ConcAct','ds077_2010ConcAct','ds031_2011ConcAct','ds024_2012ConcAct','ds004_2013ConcAct','ds003_2014ConcAct','ds002_2015ConcAct','ds005_2016ConcAct','ds020_2017ConcAct','ds011_2018ConcAct','ds009_2019ConcAct','ds006_2020ConcAct','ipssConcAct','cafaeConcAct','prderrmaConcAct');
			llenar_grid($objResponse,'gridConcAct',$etiquetas,$resultado,$campos,'idConcAct',false);
			$msg='';
		}
		else
		{
			limpiar_grid ( $objResponse, 'gridConcAct', $etiquetas );
			$msg='No se encontraron registros, con las caracteristicas definidas por el usuario';
			$objResponse->call ("ventanaAlerta('$msg','Alerta')");
		}
} catch ( exception $e ) {
	$objResponse->call ( "ventanaAlerta('Error de conexion','Alerta')" );
	return $objResponse;
}
	return $objResponse;
}
function clickConcAct($id,$ind){
	global $objResponse;
	$objResponse = new xajaxResponse ();
	switch ($ind) {
		case 1 :
			$objResponse->script ( "vntConsultar('ConcAct/consultar/$id', 'Consultar ConcAct');" );
			break;
		case 2 :
		;
		break;
	}
	return $objResponse;
}
?>
