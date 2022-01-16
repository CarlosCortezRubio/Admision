<?php
/** 
 * @file persona.xajax.php 
 *  
 * Xajax de la Tabla Persona 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 11/08/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD . 'Persona.php');
require_once(MOD . 'Provincia.php');
require_once(MOD . 'Distrito.php');
require_once(MOD . 'Departamento.php');
require_once(MOD .'Enumerado.php');
require_once(MOD .'Pdf.php');
require_once(APP .'comun/grid.php');
$action = new Action ();
$arrayFunciones = Array ("llenarGridPersona", "clickPersona", "vntActClave","addPersona","combo2","combo3","comboListarProvinciaDir","comboDistritoDir");
if (! isset ( $xajax )) {
$action->iniciarXajax ( $arrayFunciones );
} else {
$action->cargarFunciones ( $arrayFunciones,$xajax );
}
function llenarGridPersona($campoBusqueda,$indice){
	global $objResponse;
	$objResponse = new xajaxResponse ();
		$nomPagina = 'Persona'; // EDITABLE
		$resultado = null;
		$numPag = 0;
		$paginas = '';
		try {
			$objPersona = new Persona();
		if ($campoBusqueda != '') {
		$resultado = $objPersona->consultarPersonaXparam ( $campoBusqueda ); // EDITABLE
		} else {
		$resultado = $objPersona->consultarPersonaMulti(); // EDITABLE
		}
$objPersona->cerrarConexion (); // EDITABLE 
/* INICIO PAGINACION */ 
$action = new Action();
$numPag = $action->getPageNumbers($resultado);
if ($resultado != null) {
	$cantReg = count($resultado);
}else{
	$cantReg = 0;
}
if ($numPag > 1) {
	$matRes = $action->paginado ( $objResponse, $numPag, $indice, 'xajax_llenarGridPersona', $campoBusqueda, $paginas, $resultado );
	$paginas = $matRes [0];
	$cad1 = $matRes [1];
	$cad2 = $matRes [2];
	$cad3 = $matRes [3];
	$resultado = $action->getPage ( $resultado, $indice );
	if ($indice == 0) {
	$indice = 1;
	}
	$paginas = "$cad1 $paginas $cad2  $cad3";
$objResponse->assign('paginacion','innerHTML',$paginas,''); //div
$objResponse->assign('paginacion1','innerHTML',$paginas,'');
} else {
	$objResponse->assign('paginacion','innerHTML','','');
	$objResponse->assign('paginacion1','innerHTML','','');
}
/* FIN PAGINACION */ 
			$etiquetas = array('','Imp','Ver','Editar','Id','Genero','Tipo Documento','Dni','Nombres Completos','Fecha Nacimiento');
		if ($resultado!=null) {
			$objResponse->call("document.getElementById('cantReg').innerHTML='$cantReg'");
            $objResponse->assign('cantReg', 'innerHTML', "Cantidad de registros: $cantReg", '');
			$chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
			$img = "<img class='classHand' onclick='xajax_clickPersona(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
			$img1 = crearObjImagen ( $nomPagina, 'edi' );
			$img3 = "<a href='$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
			$campos = array('obj_' . $chk, 'obj_' . $img3,'obj_' . $img, 'obj_' . $img1,'idPersona','nomGenero','nomTipoDoc','dniPersona','obj_cmp_[nom1Persona*nom2Persona*ape1Persona*ape2Persona]','fecNacPersona');
			llenar_grid($objResponse,'gridPersona',$etiquetas,$resultado,$campos,'idPersona',false);
			$msg='';
			
		}
		else
		{
			limpiar_grid ( $objResponse, 'gridPersona', $etiquetas );
			$msg='No se encontraron registros, con las caracteristicas definidas por el usuario';
			$objResponse->call ("ventanaAlerta('$msg','Alerta')");
		}
} catch ( exception $e ) {
	$objResponse->call ( "ventanaAlerta('Error de conexion','Alerta')" );
	return $objResponse;
}
	return $objResponse;
}
function clickPersona($id,$ind){
	global $objResponse;
	$objResponse = new xajaxResponse ();
	switch ($ind) {
		case 1 :
			$objResponse->script ( "vntConsultar('Persona/consultar/$id', 'Consultar Persona');" );
			break;
		case 2 :
		;
		break;
	}
	return $objResponse;
}

function combo2($id_combo2){
	global $objResponse;
	$objResponse = new xajaxResponse();
	$nombreCombo = 'idProvinciaNac';
	$objSql = new Provincia();
	$tabla = $objSql->consultarProvinciaXidDepartamento($id_combo2);
	
	if ($tabla > 0) {
		$objResponse->script("document.getElementById('$nombreCombo').disabled=false;");
		$comboTipo='<select name='.$nombreCombo.' id="idProvinciaNac" class="form-control input-sm"   onChange="xajax_combo3(this.value)" >';  
		$comboTipo=$comboTipo."<option value=''>--seleccionar-- </option>";
		  
		for ($i=0; $i<count($tabla); $i++){
			
			$comboTipo=$comboTipo."<option value=".$tabla [0] ['idProvincia'].">".$tabla [0] ['nomProvincia']."</option>";
		  
			}
		  
			$comboTipo=$comboTipo.'</select>';
			  
		  
			$objResponse->assign('comboProvincia','innerHTML',$comboTipo,'');
		  
			 
	}else{
		$objResponse->script("document.getElementById('$nombreCombo').disabled=true;");
		$objResponse->script("agregarOpcion('$nombreCombo', '0', '', 0, false, true);");
		$objResponse->call("ventanaAlerta('','Alerta')");
	}
	
	return $objResponse;
  }



  function combo3($id_combo2){
	global $objResponse;
	$objResponse = new xajaxResponse();
	$nombreCombo = 'idDistritoNac';
	$objSql = new Distrito();
	$tabla = $objSql->consultarDistritoXidProvincia($id_combo2);
	if ($tabla > 0) {
		$objResponse->script("document.getElementById('$nombreCombo').disabled=false;");
		$comboTipo='<select name="idDistritoNac" id="idDistritoNac" class="form-control input-sm" >';  
		for ($i=0; $i<count($tabla); $i++){
			
			$comboTipo=$comboTipo."<option value=".$tabla [0] ['idDistrito'].">".$tabla [0] ['nomDistrito']."</option>";
		  
			}
		  
			$comboTipo=$comboTipo.'</select>';
			  
		  
			$objResponse->assign('comboDistrito','innerHTML',$comboTipo,'');
		  
			 
	}else{
		$objResponse->script("document.getElementById('$nombreCombo').disabled=true;");
		$objResponse->script("agregarOpcion('$nombreCombo', '0', '', 0, false, true);");
		$objResponse->call("ventanaAlerta('','Alerta')");
	}
	
	return $objResponse;
  }
  
function addPersona($idPersona, $idGenero, $idEdoCivil, $idIdioma, $idDistritoNac,$idDistritoDir, $idTipoDoc, $idZona, $idVia, $dniPersona, $nom1Persona,$nom2Persona, $ape1Persona, $ape2Persona, $numDepPersona, $fecNacPersona,$zonaDomPersona, $desViaDomPersona, $numViaDomPersona, $intDomPersona, $tel1DomPersona, $tel2DomPersona, $refDomPersona, $emaDomPersona){
	global $objResponse;
	$objResponse = new xajaxResponse ();
	
	
	if(empty($idGenero)){
		$objResponse->script("document.getElementById('validar').type = 'visible';");
		
		$objResponse->script ( "document.getElementById('validar').value = 'Ingrese Genero';" );
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
			$objResponse->script ( "cerrarvntPequena();" );
			//$objResponse->script("document.getElementById('agrePersona').reset();");
					
		}else{
			$objResponse->call ( "ventanaAlerta('Error en  Registro','Alerta')" );
		
		}
	
	}
	
		return  $objResponse;
}


function comboListarProvinciaDir($id_combo2){
	global $objResponse;
	$objResponse = new xajaxResponse();
	$nombreCombo = 'idProvinciaDir';
	$objSql = new Provincia();
	$tabla = $objSql->consultarProvinciaXidDepartamento($id_combo2);
	
	if ($tabla > 0) {
		$objResponse->script("document.getElementById('$nombreCombo').disabled=false;");
		$comboTipo='<select name='.$nombreCombo.' id="idProvinciaDir" class="form-control input-sm"   onChange="xajax_comboDistritoDir(this.value)" >';  
		$comboTipo=$comboTipo."<option value=''>--seleccionar-- </option>";
		  
		for ($i=0; $i<count($tabla); $i++){
			
			$comboTipo=$comboTipo."<option value=".$tabla [0] ['idProvincia'].">".$tabla [0] ['nomProvincia']."</option>";
		  
			}
		  
			$comboTipo=$comboTipo.'</select>';
			  
		  
			$objResponse->assign('comboProvinciaDir','innerHTML',$comboTipo,'');
		  
			 
	}else{
		$objResponse->script("document.getElementById('$nombreCombo').disabled=true;");
		$objResponse->script("agregarOpcion('$nombreCombo', '0', '', 0, false, true);");
		$objResponse->call("ventanaAlerta('','Alerta')");
	}
	
	return $objResponse;
  }

  function comboDistritoDir($id_combo2){
	global $objResponse;
	$objResponse = new xajaxResponse();
	$nombreCombo = 'idDistritoDir';
	$objSql = new Distrito();
	$tabla = $objSql->consultarDistritoXidProvincia($id_combo2);
	if ($tabla > 0) {
		$objResponse->script("document.getElementById('$nombreCombo').disabled=false;");
		$comboTipo='<select name='.$nombreCombo.' id='.$nombreCombo.' class="form-control input-sm" >';  
		
		$comboTipo=$comboTipo."<option value=''>--seleccionar-- </option>";
		for ($i=0; $i<count($tabla); $i++){
			
			$comboTipo=$comboTipo."<option value=".$tabla [0] ['idDistrito'].">".$tabla [0] ['nomDistrito']."</option>";
		  
			}
		  
			$comboTipo=$comboTipo.'</select>';
			  
		  
			$objResponse->assign('comboDistritoDir','innerHTML',$comboTipo,'');
		  
			 
	}else{
		$objResponse->script("document.getElementById('$nombreCombo').disabled=true;");
		$objResponse->script("agregarOpcion('$nombreCombo', '0', '', 0, false, true);");
		$objResponse->call("ventanaAlerta('','Alerta')");
	}
	
	return $objResponse;
  }
  
?>
