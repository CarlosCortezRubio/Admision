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
require_once(MOD . 'BeneficiarioEmpleado.php');
require_once(MOD .'Enumerado.php');
require_once(MOD .'Pdf.php');
require_once(APP .'comun/grid.php');
$action = new Action ();
$arrayFunciones = Array ("llenarGridBeneficiario", "clickBeneficiario", "searchPersona","buscarEmp","addPersona");
if (! isset ( $xajax )) {
$action->iniciarXajax ( $arrayFunciones );
} else {
	
$action->cargarFunciones ( $arrayFunciones,$xajax );
}
function llenarGridBeneficiario($campoBusqueda,$indice){
	global $objResponse;
	$objResponse = new xajaxResponse ();
		$nomPagina = 'Beneficiario'; // EDITABLE
		$resultado = null;
		$numPag = 0;
		$paginas = '';
		try {
			$objBeneficiario = new Beneficiario();
		if ($campoBusqueda != '') {
		$resultado = $objBeneficiario->consultarBeneficiarioXparam( $campoBusqueda ); // EDITABLE
		} else {
		$resultado = $objBeneficiario->consultarBeneficiarioXMulti(); // EDITABLE
		}
$objBeneficiario->cerrarConexion (); // EDITABLE 
/* INICIO PAGINACION */ 
$action = new Action();
$numPag = $action->getPageNumbers($resultado);
if ($numPag > 1) {
	$matRes = $action->paginado ( $objResponse, $numPag, $indice, 'xajax_llenarGridBeneficiario', $campoBusqueda, $paginas, $resultado );
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
			$etiquetas = array('','Imp','Ver','Editar','ID', 'Parentesto', 'Nombre Completo', 'Fecha Inicio', 'Fecha Fin');
		if ($resultado!=null) {
			$chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
			$img = "<img class='classHand' onclick='xajax_clickBeneficiario(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
			$img1 = crearObjImagen ( $nomPagina, 'edi' );
			$img3 = "<a href='$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
			$campos = array('obj_' . $chk, 'obj_' . $img3,'obj_' . $img, 'obj_' . $img1,'idBeneficiario', 'nomParentesco', 'obj_cmp_[nom1Persona*nom2Persona*ape1Persona*ape2Persona]', 'fecIniBeneficiario', 'fecFinBeneficiario');
			llenar_grid($objResponse,'gridBeneficiario',$etiquetas,$resultado,$campos,'idBeneficiario',false);
			$msg='';
		}
		else
		{
			limpiar_grid ( $objResponse, 'gridBeneficiario', $etiquetas );
			$msg='No se encontraron registros, con las caracteristicas definidas por el usuario';
			$objResponse->call ("ventanaAlerta('$msg','Alerta')");
		}
} catch ( exception $e ) {
	$objResponse->call ( "ventanaAlerta('Error de conexion','Alerta')" );
	return $objResponse;
}
	return $objResponse;
}
function clickBeneficiario($id,$ind){
	global $objResponse;
	$objResponse = new xajaxResponse ();
	switch ($ind) {
		case 1 :
			$objResponse->script ( "vntConsultar('Beneficiario/consultar/$id', 'Consultar Beneficiario');" );
			break;
		case 2 :
			
		;
		break;
	}
	return $objResponse;
}

	function searchPersona($id){
		
		global $objResponse;
		$objResponse = new xajaxResponse ();
		if(empty( $id)){
		$msg = "Por favor ingrese Nº Dni de la Persona.";
		$objResponse->call("ventanaAlerta('$msg','Alerta')");
		}else{
		$rs = new Persona ();
		$tabla = $rs->consultarPersonaXdniPersona ($id);
		$rs->cerrarConexion ();
		
		if ($tabla > 0 ) {
			$objResponse->script("document.getElementById('agrePersona').type = 'hidden';");
			$idPersona = $tabla [0] ['idPersona'];
			$dniPersona =  $tabla [0] ['dniPersona'];
			$nom1Persona =  $tabla [0] ['nom1Persona'];
			$ape1Persona =  $tabla [0] ['ape1Persona'];
				$msg = "Persona Encontrada";
				$objResponse->call ( "ventanaAlerta('$msg','Alerta')" );
				
				$objResponse->script ( "document.getElementById('idPers').value = '$idPersona';" );
				$objResponse->script ( "document.getElementById('dniPers').value = '$dniPersona';" );
				$objResponse->script ( "document.getElementById('nom1Person').value = '$nom1Persona';" );
				$objResponse->script ( "document.getElementById('ape1Person').value = '$ape1Persona';" );
				$objResponse->script ( "cerrarvntPequena();" );	
			}else{
				
				$objResponse->call ( "ventanaAlerta('Persona No Existe, Por Favor Registre.','Alerta')" );
				//$objResponse->script("document.getElementById('agrePersona').type = 'visible';");
				$objResponse->script ( "document.getElementById('idPers').value = '';" );
				$objResponse->script ( "document.getElementById('dniPers').value = '';" );
				$objResponse->script ( "document.getElementById('nom1Person').value = '';" );
				$objResponse->script ( "document.getElementById('ape1Person').value = '';" );
				$objResponse->script ( "cerrarvntPequena();" );
			
			}
		}
			return  $objResponse;
}
function buscarEmp($id){
	global $objResponse;
	$objResponse = new xajaxResponse ();
	
	
	if(empty( $id)){
	
		$msg = "Por favor ingrese Nº Dni del Empleado.";
		$objResponse->call("ventanaAlerta('$msg','Alerta')");
	}else{
			$rs = new Empleado ();
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
					$objResponse->script ( "cerrarvntPequena();" );
				}	else{
				$msg = "Empleado no Existe";
				
					$objResponse->call ( "ventanaAlerta('$msg','Alerta')" );
					$objResponse->script ( "document.getElementById('idEmpleado').value = '';" );
					$objResponse->script ( "cerrarvntPequena();" );
					$objResponse->script ( "document.getElementById('idEmpleado').value = '';" );
					$objResponse->script ( "document.getElementById('nom1Empleado').value = '';" );
					$objResponse->script ( "document.getElementById('ape1Empleado').value = '';" );
					

			}	
		}
			
		return  $objResponse;
}
function addPersona( $idPersona, $idGenero, $idEdoCivil, $idIdioma, $idDistritoNac,$idDistritoDir, $idTipoDoc, $idZona, $idVia, $dniPersona, $nom1Persona,$nom2Persona, $ape1Persona, $ape2Persona, $numDepPersona, $fecNacPersona,$zonaDomPersona,$desViaDomPersona, $numViaDomPersona, $intDomPersona, $tel1DomPersona, $tel2DomPersona, $refDomPersona, $emaDomPersona ){
	global $objResponse;
	$objResponse = new xajaxResponse ();
//	$idPersona = $datosForm ['idPersona'];

//$idEdoCivil = $datosForm ['idEdoCivil'];

//$idGenero = $datosForm ['idGenero'];
//$idEdoCivil = $datosForm ['idEdoCivil'];
//$idIdioma = $datosForm ['idIdioma'];
//$idDistritoNac = $datosForm ['idDistritoNac'];
//$idDistritoDir = $datosForm ['idPersona'];
//$idTipoDoc = $datosForm ['idTipoDoc'];
//$idZona = $datosForm ['idZona'];
//$idVia = $datosForm ['idVia'];
//$dniPersona = $datosForm ['dniPersona'];
//$nom1Persona = $datosForm ['nom1Persona'];
//$nom2Persona = $datosForm ['nom2Persona'];
//$ape1Persona = $datosForm ['ape1Persona'];
//$ape2Persona = $datosForm ['ape2Persona'];
//$numDepPersona = $datosForm ['numDepPersona'];
//$fecNacPersona = $datosForm ['fecNacPersona'];
//$zonaDomPersona = $datosForm ['zonaDomPersona'];
//$desViaDomPersona = $datosForm ['desViaDomPersona'];
//$tel1DomPersona = $datosForm ['tel1DomPersona'];
//$tel2DomPersona = $datosForm ['tel2DomPersona'];
//$refDomPersona = $datosForm ['refDomPersona'];
//$emaDomPersona = $datosForm ['emaDomPersona'];
	
	if(empty($idGenero)){
		$objResponse->script("document.getElementById('validar').type = 'visible';");
		$objResponse->script ( "document.getElementById('validar').value = 'Ingrese Estado civil';" );
		return 	$objResponse;
	}else if (empty($idEdoCivil)){	
		$objResponse->script("document.getElementById('validar').type = 'visible';");
		
		$objResponse->script ( "document.getElementById('validar').value = 'Ingrese Estado civil';" );
		return 	$objResponse;
	}else if (empty($idIdioma)){	
		$objResponse->script("document.getElementById('validar').type = 'visible';");
		
		$objResponse->script ( "document.getElementById('validar').value = 'Ingrese Idioma';" );
		return 	$objResponse;
	}else if (empty($idDistritoNac)){	
		
		$objResponse->script("document.getElementById('validar').type = 'visible';");
		$objResponse->script ( "document.getElementById('validar').value = 'Ingrese Distrito';" );
		return 	$objResponse;
	}else if (empty($idDistritoDir)){	
		$objResponse->script("document.getElementById('validar').type = 'visible';");
		$objResponse->script ( "document.getElementById('validar').value = 'Ingrese Distrito Direcc.';" );
		return 	$objResponse;
	}else{
		
			$rs = new Persona ();
		
		$tabla = $rs->agregarPersona ($idPersona, $idGenero, $idEdoCivil, $idIdioma, $idDistritoNac, $idDistritoDir, $idTipoDoc, $idZona, $idVia, $dniPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $numDepPersona, $fecNacPersona, $zonaDomPersona, $desViaDomPersona, $numViaDomPersona, $intDomPersona, $tel1DomPersona, $tel2DomPersona, $refDomPersona, $emaDomPersona);
		$rs->cerrarConexion ();

		if ($tabla > 0 ) {
		
			$msg = "Persona Registrada";
			$objResponse->script("document.getElementById('agrePersona').type = 'hidden';");
			$objResponse->call ( "ventanaAlerta('$msg','Alerta')" );
			
	
					
		}else{
			$objResponse->call ( "ventanaAlerta('Error en  Registro','Alerta')" );
		
		}
	
	}
	
		return  $objResponse;
}
?>
