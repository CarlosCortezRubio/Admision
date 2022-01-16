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
require_once(MOD . 'Empleado.php');
require_once(MOD . 'Persona.php');
require_once(MOD . 'Beneficiario.php');
require_once(MOD .'Enumerado.php');
require_once(MOD .'Pdf.php');
require_once(APP .'comun/grid.php');
$action = new Action ();
$arrayFunciones = Array ("llenarGridBeneficiarioEmpleado", "clickBeneficiarioEmpleado", "buscarEmpleado","buscarB");
if (! isset ( $xajax )) {
$action->iniciarXajax ( $arrayFunciones );
} else {
	
$action->cargarFunciones ( $arrayFunciones,$xajax );
}
function llenarGridBeneficiarioEmpleado($campoBusqueda,$indice){
	global $objResponse;
	$objResponse = new xajaxResponse ();
		$nomPagina = 'BeneficiarioEmpleado'; // EDITABLE
		$resultado = null;
		$numPag = 0;
		$paginas = '';
		try {
			$objBeneficiarioEmpleado = new BeneficiarioEmpleado();
		if ($campoBusqueda != '') {
		$resultado = $objBeneficiarioEmpleado->consultarBeneficiarioEmpleadoXparam ( $campoBusqueda ); // EDITABLE
		} else {
		$resultado = $objBeneficiarioEmpleado->consultarBeneficiarioEmpleadoMulti(); // EDITABLE
		}
$objBeneficiarioEmpleado->cerrarConexion (); // EDITABLE 
/* INICIO PAGINACION */ 
$action = new Action();
$numPag = $action->getPageNumbers($resultado);
if ($numPag > 1) {
	$matRes = $action->paginado ( $objResponse, $numPag, $indice, 'xajax_llenarGridBeneficiarioEmpleado', $campoBusqueda, $paginas, $resultado );
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
			$etiquetas = array('','Imp','Ver','Editar','ID', 'Dni Beneficiario','Nombre del Beneficiario', 'Dni Empleado','Nombre del Empleado');
		if ($resultado!=null) {
			$chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
			$img = "<img class='classHand' onclick='xajax_clickBeneficiarioEmpleado(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
			$img1 = crearObjImagen ( $nomPagina, 'edi' );
			$img3 = "<a href='$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
			$campos = array('obj_' . $chk, 'obj_' . $img3,'obj_' . $img, 'obj_' . $img1,'idBeneficiarioEmpleado', 'dniBeneficiario', 'obj_cmp_[nomBeneficiario*nom2Beneficiario*apeBeneficiario*ape2Beneficiario]','dniEmpleado','obj_cmp_[nomEmpleado*nom2Empleado*apeEmpleado*ape2Empleado]');
			llenar_grid($objResponse,'gridBeneficiarioEmpleado',$etiquetas,$resultado,$campos,'idBeneficiarioEmpleado',false);
			$msg='';
			
			
		}
		else
		{
			limpiar_grid ( $objResponse, 'gridBeneficiarioEmpleado', $etiquetas );
			$msg='No se encontraron registros, con las caracteristicas definidas por el usuario';
			$objResponse->call ("ventanaAlerta('$msg','Alerta')");
		}
} catch ( exception $e ) {
	$objResponse->call ( "ventanaAlerta('Error de conexion','Alerta')" );
	return $objResponse;
}
	return $objResponse;
}
function clickBeneficiarioEmpleado($id,$ind){
	global $objResponse;
	$objResponse = new xajaxResponse ();
	switch ($ind) {
		case 1 :
			$objResponse->script ( "vntConsultar('BeneficiarioEmpleado/consultar/$id', 'Consultar Beneficiario Empleado');" );
			break;
		case 2 :
			
		;
		break;
	}
	return $objResponse;
}

	function buscarEmpleado($id){
		global $objResponse;
		$objResponse = new xajaxResponse ();
		
		$rs = new Empleado ();
		
		if(empty( $id)){
	
			$msg = "Por favor ingrese Nº Dni del Empleado.";
			$objResponse->call("ventanaAlerta('$msg','Alerta')");
		}else{
			$tabla = $rs-> consultarEmpleadoXDni($id);
			$rs->cerrarConexion ();
		
		if ($tabla > 0 ) {
			$idEmpleado = $tabla [0] ['idEmpleado'];
			$nomEmpleado = $tabla [0] ['nom1Persona'];
			$apeEmpleado = $tabla [0] ['ape1Persona'];
				$msg = "Empleado Encontrado";
				$objResponse->call ( "ventanaAlerta('$msg','Alerta')" );
			
				$objResponse->script ( "document.getElementById('idEmpleado').value = '$idEmpleado';" );
				$objResponse->script ( "document.getElementById('nom1Empleado').value = '$nomEmpleado';" );
				$objResponse->script ( "document.getElementById('ape1Empleado').value = '$apeEmpleado';" );
				
			}else{
				$objResponse->call ( "ventanaAlerta('Persona No Existe','Alerta')" );
				$objResponse->script ( "document.getElementById('idEmpleado').value = '';" );
				$objResponse->script ( "document.getElementById('nom1Empleado').value = '';" );
				$objResponse->script ( "document.getElementById('ape1Empleado').value = '';" );
			}
			}
			return  $objResponse;
}
function buscarB($id){
	global $objResponse;
	$objResponse = new xajaxResponse ();
	
	$rs = new Beneficiario();
	$tabla = $rs-> consultarBeneficiarioXDni($id);
	$rs->cerrarConexion ();
	if(empty( $id)){
	
		$msg = "Por favor ingrese Nº Dni del Beneficiario.";
		$objResponse->call("ventanaAlerta('$msg','Alerta')");
	}else{
	if ($tabla > 0 ) {
		
			$msg = "Beneficiario Encontrado";
			
			$objResponse->call ( "ventanaAlerta('$msg','Alerta')" );
			$idBeneficiario = $tabla [0] ['idBeneficiario'];
			$nomBeneficiario = $tabla [0] ['nom1Persona'];
			$apeBeneficiario = $tabla [0] ['ape1Persona'];

			$objResponse->script ( "document.getElementById('idBeneficiario').value = '$idBeneficiario';" );
			$objResponse->script ( "document.getElementById('nom1Beneficiario').value = '$nomBeneficiario';" );
			$objResponse->script ( "document.getElementById('ape1Beneficiario').value = '$apeBeneficiario';" );
			
			
		}else{
			$objResponse->call ( "ventanaAlerta('Persona No Existe','Alerta')" );
			$objResponse->script ( "document.getElementById('idBeneficiario').value = '';" );
			$objResponse->script ( "document.getElementById('nom1Beneficiario').value = '';" );
			$objResponse->script ( "document.getElementById('ape1Beneficiario').value = '';" );
			
		}}
		return  $objResponse;
}

?>
