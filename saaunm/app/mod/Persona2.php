<?php 
require_once('../../../config/config.php');
require_once(MOD.'Persona2.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLPersona2.php');

class Persona2 extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idPersona, $Edo_IDEDOCIVIL, $IDBANCO, $idEdoRegistro, $idGenero, $idEdoCivil, $idIdioma, $idDistritoNac, $idDistritoDir, $idTipoDoc, $idZona, $idVia, $dniPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $numDepPersona, $fecNacPersona, $zonaDomPersona, $desViaDomPersona, $numViaDomPersona, $intDomPersona, $tel1DomPersona, $tel2DomPersona, $refDomPersona, $emaDomPersona) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idPersona, $Edo_IDEDOCIVIL, $IDBANCO, $idEdoRegistro, $idGenero, $idEdoCivil, $idIdioma, $idDistritoNac, $idDistritoDir, $idTipoDoc, $idZona, $idVia, $dniPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $numDepPersona, $fecNacPersona, $zonaDomPersona, $desViaDomPersona, $numViaDomPersona, $intDomPersona, $tel1DomPersona, $tel2DomPersona, $refDomPersona, $emaDomPersona, $id_Persona2);
		if ($resultado1>0 AND $resultado2>0) {
			cambiarTabla2::commitTransaction();
			$objcambiarTabla1->commitTransaction();
			cambiarTabla2::desconectar();
			$objcambiarTabla1->desconectar();
			return true;
		}else{
			cambiarTabla2::rollbackTransaction();
			$objcambiarTabla1->rollbackTransaction();
			cambiarTabla2::desconectar();
			$objcambiarTabla1->desconectar();
			return false;
		}
	}
	function compActualizarcambiarTabla1cambiarTabla2($idPersona, $Edo_IDEDOCIVIL, $IDBANCO, $idEdoRegistro, $idGenero, $idEdoCivil, $idIdioma, $idDistritoNac, $idDistritoDir, $idTipoDoc, $idZona, $idVia, $dniPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $numDepPersona, $fecNacPersona, $zonaDomPersona, $desViaDomPersona, $numViaDomPersona, $intDomPersona, $tel1DomPersona, $tel2DomPersona, $refDomPersona, $emaDomPersona) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idPersona, $Edo_IDEDOCIVIL, $IDBANCO, $idEdoRegistro, $idGenero, $idEdoCivil, $idIdioma, $idDistritoNac, $idDistritoDir, $idTipoDoc, $idZona, $idVia, $dniPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $numDepPersona, $fecNacPersona, $zonaDomPersona, $desViaDomPersona, $numViaDomPersona, $intDomPersona, $tel1DomPersona, $tel2DomPersona, $refDomPersona, $emaDomPersona, $id_Persona2);
		if ($resultado1>0 AND $resultado2>0) {
			cambiarTabla2::commitTransaction();
			$objcambiarTabla1->commitTransaction();
			cambiarTabla2::desconectar();
			$objcambiarTabla1->desconectar();
			return true;
		}else{
			cambiarTabla2::rollbackTransaction();
			$objcambiarTabla1->rollbackTransaction();
			cambiarTabla2::desconectar();
			$objcambiarTabla1->desconectar();
			return false;
		}
	}
	*/ 
	function agregarPersona2($idPersona, $Edo_IDEDOCIVIL, $IDBANCO, $idEdoRegistro, $idGenero, $idEdoCivil, $idIdioma, $idDistritoNac, $idDistritoDir, $idTipoDoc, $idZona, $idVia, $dniPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $numDepPersona, $fecNacPersona, $zonaDomPersona, $desViaDomPersona, $numViaDomPersona, $intDomPersona, $tel1DomPersona, $tel2DomPersona, $refDomPersona, $emaDomPersona) {
$idPersona = parent::prepareParam($idPersona, Query::DATATYPE_INTEGER);
$Edo_IDEDOCIVIL = parent::prepareParam($Edo_IDEDOCIVIL, Query::DATATYPE_INTEGER);
$IDBANCO = parent::prepareParam($IDBANCO, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$idGenero = parent::prepareParam($idGenero, Query::DATATYPE_INTEGER);
$idEdoCivil = parent::prepareParam($idEdoCivil, Query::DATATYPE_INTEGER);
$idIdioma = parent::prepareParam($idIdioma, Query::DATATYPE_INTEGER);
$idDistritoNac = parent::prepareParam($idDistritoNac, Query::DATATYPE_INTEGER);
$idDistritoDir = parent::prepareParam($idDistritoDir, Query::DATATYPE_INTEGER);
$idTipoDoc = parent::prepareParam($idTipoDoc, Query::DATATYPE_INTEGER);
$idZona = parent::prepareParam($idZona, Query::DATATYPE_INTEGER);
$idVia = parent::prepareParam($idVia, Query::DATATYPE_INTEGER);
$dniPersona = parent::prepareParam($dniPersona, Query::DATATYPE_STRING, 0);
$nom1Persona = parent::prepareParam($nom1Persona, Query::DATATYPE_STRING, 0);
$nom2Persona = parent::prepareParam($nom2Persona, Query::DATATYPE_STRING, 0);
$ape1Persona = parent::prepareParam($ape1Persona, Query::DATATYPE_STRING, 0);
$ape2Persona = parent::prepareParam($ape2Persona, Query::DATATYPE_STRING, 0);
$numDepPersona = parent::prepareParam($numDepPersona, Query::DATATYPE_INTEGER);
$zonaDomPersona = parent::prepareParam($zonaDomPersona, Query::DATATYPE_STRING, 0);
$desViaDomPersona = parent::prepareParam($desViaDomPersona, Query::DATATYPE_STRING, 0);
$numViaDomPersona = parent::prepareParam($numViaDomPersona, Query::DATATYPE_STRING, 0);
$intDomPersona = parent::prepareParam($intDomPersona, Query::DATATYPE_STRING, 0);
$tel1DomPersona = parent::prepareParam($tel1DomPersona, Query::DATATYPE_STRING, 0);
$tel2DomPersona = parent::prepareParam($tel2DomPersona, Query::DATATYPE_STRING, 0);
$refDomPersona = parent::prepareParam($refDomPersona, Query::DATATYPE_STRING, 0);
$emaDomPersona = parent::prepareParam($emaDomPersona, Query::DATATYPE_STRING, 0);
		
		$params = array($idPersona, $Edo_IDEDOCIVIL, $IDBANCO, $idEdoRegistro, $idGenero, $idEdoCivil, $idIdioma, $idDistritoNac, $idDistritoDir, $idTipoDoc, $idZona, $idVia, $dniPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $numDepPersona, $fecNacPersona, $zonaDomPersona, $desViaDomPersona, $numViaDomPersona, $intDomPersona, $tel1DomPersona, $tel2DomPersona, $refDomPersona, $emaDomPersona);
		return parent::execute(SQLPersona2::AGREGAR_PERSONA2, $params);
	}

	function actualizarPersona2($idPersona, $Edo_IDEDOCIVIL, $IDBANCO, $idEdoRegistro, $idGenero, $idEdoCivil, $idIdioma, $idDistritoNac, $idDistritoDir, $idTipoDoc, $idZona, $idVia, $dniPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $numDepPersona, $fecNacPersona, $zonaDomPersona, $desViaDomPersona, $numViaDomPersona, $intDomPersona, $tel1DomPersona, $tel2DomPersona, $refDomPersona, $emaDomPersona, $id_Persona2){
		
$idPersona = parent::prepareParam($idPersona, Query::DATATYPE_INTEGER);
$Edo_IDEDOCIVIL = parent::prepareParam($Edo_IDEDOCIVIL, Query::DATATYPE_INTEGER);
$IDBANCO = parent::prepareParam($IDBANCO, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$idGenero = parent::prepareParam($idGenero, Query::DATATYPE_INTEGER);
$idEdoCivil = parent::prepareParam($idEdoCivil, Query::DATATYPE_INTEGER);
$idIdioma = parent::prepareParam($idIdioma, Query::DATATYPE_INTEGER);
$idDistritoNac = parent::prepareParam($idDistritoNac, Query::DATATYPE_INTEGER);
$idDistritoDir = parent::prepareParam($idDistritoDir, Query::DATATYPE_INTEGER);
$idTipoDoc = parent::prepareParam($idTipoDoc, Query::DATATYPE_INTEGER);
$idZona = parent::prepareParam($idZona, Query::DATATYPE_INTEGER);
$idVia = parent::prepareParam($idVia, Query::DATATYPE_INTEGER);
$dniPersona = parent::prepareParam($dniPersona, Query::DATATYPE_STRING, 0);
$nom1Persona = parent::prepareParam($nom1Persona, Query::DATATYPE_STRING, 0);
$nom2Persona = parent::prepareParam($nom2Persona, Query::DATATYPE_STRING, 0);
$ape1Persona = parent::prepareParam($ape1Persona, Query::DATATYPE_STRING, 0);
$ape2Persona = parent::prepareParam($ape2Persona, Query::DATATYPE_STRING, 0);
$numDepPersona = parent::prepareParam($numDepPersona, Query::DATATYPE_INTEGER);
$zonaDomPersona = parent::prepareParam($zonaDomPersona, Query::DATATYPE_STRING, 0);
$desViaDomPersona = parent::prepareParam($desViaDomPersona, Query::DATATYPE_STRING, 0);
$numViaDomPersona = parent::prepareParam($numViaDomPersona, Query::DATATYPE_STRING, 0);
$intDomPersona = parent::prepareParam($intDomPersona, Query::DATATYPE_STRING, 0);
$tel1DomPersona = parent::prepareParam($tel1DomPersona, Query::DATATYPE_STRING, 0);
$tel2DomPersona = parent::prepareParam($tel2DomPersona, Query::DATATYPE_STRING, 0);
$refDomPersona = parent::prepareParam($refDomPersona, Query::DATATYPE_STRING, 0);
$emaDomPersona = parent::prepareParam($emaDomPersona, Query::DATATYPE_STRING, 0);

		
		$params = array($idPersona, $Edo_IDEDOCIVIL, $IDBANCO, $idEdoRegistro, $idGenero, $idEdoCivil, $idIdioma, $idDistritoNac, $idDistritoDir, $idTipoDoc, $idZona, $idVia, $dniPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $numDepPersona, $fecNacPersona, $zonaDomPersona, $desViaDomPersona, $numViaDomPersona, $intDomPersona, $tel1DomPersona, $tel2DomPersona, $refDomPersona, $emaDomPersona, $id_Persona2);
		return parent::execute(SQLPersona2::ACTUALIZAR_PERSONA2, $params);		
	}
	
	
	function consultarPersona2(){	
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2);
	}	
	
	function eliminarPersona2($id_Persona2){
		$params = array($id_Persona2);
		return parent::execute(SQLPersona2::ELIMINAR_PERSONA2, $params);		
	}
	
//------------------------------	
	function consultarPersona2XidPersona($idPersona){	
		$params = array($idPersona);
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDPERSONA, $params);
	}	
	
	function existePersona2XidPersona($idPersona){
		$params = array($idPersona);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2XEdo_IDEDOCIVIL($Edo_IDEDOCIVIL){	
		$params = array($Edo_IDEDOCIVIL);
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_EDO_IDEDOCIVIL, $params);
	}	
	
	function existePersona2XEdo_IDEDOCIVIL($Edo_IDEDOCIVIL){
		$params = array($Edo_IDEDOCIVIL);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_EDO_IDEDOCIVIL, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2XIDBANCO($IDBANCO){	
		$params = array($IDBANCO);
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDBANCO, $params);
	}	
	
	function existePersona2XIDBANCO($IDBANCO){
		$params = array($IDBANCO);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDBANCO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2XidEdoRegistro($idEdoRegistro){	
		$params = array($idEdoRegistro);
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDEDOREGISTRO, $params);
	}	
	
	function existePersona2XidEdoRegistro($idEdoRegistro){
		$params = array($idEdoRegistro);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2XidGenero($idGenero){	
		$params = array($idGenero);
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDGENERO, $params);
	}	
	
	function existePersona2XidGenero($idGenero){
		$params = array($idGenero);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDGENERO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2XidEdoCivil($idEdoCivil){	
		$params = array($idEdoCivil);
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDEDOCIVIL, $params);
	}	
	
	function existePersona2XidEdoCivil($idEdoCivil){
		$params = array($idEdoCivil);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDEDOCIVIL, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2XidIdioma($idIdioma){	
		$params = array($idIdioma);
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDIDIOMA, $params);
	}	
	
	function existePersona2XidIdioma($idIdioma){
		$params = array($idIdioma);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDIDIOMA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2XidDistritoNac($idDistritoNac){	
		$params = array($idDistritoNac);
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDDISTRITONAC, $params);
	}	
	
	function existePersona2XidDistritoNac($idDistritoNac){
		$params = array($idDistritoNac);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDDISTRITONAC, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2XidDistritoDir($idDistritoDir){	
		$params = array($idDistritoDir);
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDDISTRITODIR, $params);
	}	
	
	function existePersona2XidDistritoDir($idDistritoDir){
		$params = array($idDistritoDir);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDDISTRITODIR, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2XidTipoDoc($idTipoDoc){	
		$params = array($idTipoDoc);
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDTIPODOC, $params);
	}	
	
	function existePersona2XidTipoDoc($idTipoDoc){
		$params = array($idTipoDoc);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDTIPODOC, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2XidZona($idZona){	
		$params = array($idZona);
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDZONA, $params);
	}	
	
	function existePersona2XidZona($idZona){
		$params = array($idZona);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDZONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2XidVia($idVia){	
		$params = array($idVia);
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDVIA, $params);
	}	
	
	function existePersona2XidVia($idVia){
		$params = array($idVia);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_IDVIA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2XdniPersona($dniPersona){	
		$params = array("%$dniPersona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_DNIPERSONA, $params);
	}	
	
	function consultarPersona2XdniPersonaAprox($dniPersona){	
		$params = array("%$dniPersona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_DNIPERSONA_APROX, $params);
	}	
	
	function existePersona2XdniPersona($dniPersona){
		$params = array($dniPersona);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_DNIPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2Xnom1Persona($nom1Persona){	
		$params = array("%$nom1Persona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_NOM1PERSONA, $params);
	}	
	
	function consultarPersona2Xnom1PersonaAprox($nom1Persona){	
		$params = array("%$nom1Persona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_NOM1PERSONA_APROX, $params);
	}	
	
	function existePersona2Xnom1Persona($nom1Persona){
		$params = array($nom1Persona);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_NOM1PERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2Xnom2Persona($nom2Persona){	
		$params = array("%$nom2Persona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_NOM2PERSONA, $params);
	}	
	
	function consultarPersona2Xnom2PersonaAprox($nom2Persona){	
		$params = array("%$nom2Persona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_NOM2PERSONA_APROX, $params);
	}	
	
	function existePersona2Xnom2Persona($nom2Persona){
		$params = array($nom2Persona);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_NOM2PERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2Xape1Persona($ape1Persona){	
		$params = array("%$ape1Persona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_APE1PERSONA, $params);
	}	
	
	function consultarPersona2Xape1PersonaAprox($ape1Persona){	
		$params = array("%$ape1Persona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_APE1PERSONA_APROX, $params);
	}	
	
	function existePersona2Xape1Persona($ape1Persona){
		$params = array($ape1Persona);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_APE1PERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2Xape2Persona($ape2Persona){	
		$params = array("%$ape2Persona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_APE2PERSONA, $params);
	}	
	
	function consultarPersona2Xape2PersonaAprox($ape2Persona){	
		$params = array("%$ape2Persona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_APE2PERSONA_APROX, $params);
	}	
	
	function existePersona2Xape2Persona($ape2Persona){
		$params = array($ape2Persona);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_APE2PERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2XnumDepPersona($numDepPersona){	
		$params = array($numDepPersona);
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_NUMDEPPERSONA, $params);
	}	
	
	function existePersona2XnumDepPersona($numDepPersona){
		$params = array($numDepPersona);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_NUMDEPPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2XfecNacPersona($fecNacPersona){	
		$params = array($fecNacPersona);
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_FECNACPERSONA, $params);
	}	
	
	function existePersona2XfecNacPersona($fecNacPersona){
		$params = array($fecNacPersona);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_FECNACPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2XzonaDomPersona($zonaDomPersona){	
		$params = array("%$zonaDomPersona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_ZONADOMPERSONA, $params);
	}	
	
	function consultarPersona2XzonaDomPersonaAprox($zonaDomPersona){	
		$params = array("%$zonaDomPersona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_ZONADOMPERSONA_APROX, $params);
	}	
	
	function existePersona2XzonaDomPersona($zonaDomPersona){
		$params = array($zonaDomPersona);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_ZONADOMPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2XdesViaDomPersona($desViaDomPersona){	
		$params = array("%$desViaDomPersona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_DESVIADOMPERSONA, $params);
	}	
	
	function consultarPersona2XdesViaDomPersonaAprox($desViaDomPersona){	
		$params = array("%$desViaDomPersona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_DESVIADOMPERSONA_APROX, $params);
	}	
	
	function existePersona2XdesViaDomPersona($desViaDomPersona){
		$params = array($desViaDomPersona);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_DESVIADOMPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2XnumViaDomPersona($numViaDomPersona){	
		$params = array("%$numViaDomPersona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_NUMVIADOMPERSONA, $params);
	}	
	
	function consultarPersona2XnumViaDomPersonaAprox($numViaDomPersona){	
		$params = array("%$numViaDomPersona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_NUMVIADOMPERSONA_APROX, $params);
	}	
	
	function existePersona2XnumViaDomPersona($numViaDomPersona){
		$params = array($numViaDomPersona);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_NUMVIADOMPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2XintDomPersona($intDomPersona){	
		$params = array("%$intDomPersona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_INTDOMPERSONA, $params);
	}	
	
	function consultarPersona2XintDomPersonaAprox($intDomPersona){	
		$params = array("%$intDomPersona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_INTDOMPERSONA_APROX, $params);
	}	
	
	function existePersona2XintDomPersona($intDomPersona){
		$params = array($intDomPersona);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_INTDOMPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2Xtel1DomPersona($tel1DomPersona){	
		$params = array("%$tel1DomPersona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_TEL1DOMPERSONA, $params);
	}	
	
	function consultarPersona2Xtel1DomPersonaAprox($tel1DomPersona){	
		$params = array("%$tel1DomPersona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_TEL1DOMPERSONA_APROX, $params);
	}	
	
	function existePersona2Xtel1DomPersona($tel1DomPersona){
		$params = array($tel1DomPersona);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_TEL1DOMPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2Xtel2DomPersona($tel2DomPersona){	
		$params = array("%$tel2DomPersona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_TEL2DOMPERSONA, $params);
	}	
	
	function consultarPersona2Xtel2DomPersonaAprox($tel2DomPersona){	
		$params = array("%$tel2DomPersona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_TEL2DOMPERSONA_APROX, $params);
	}	
	
	function existePersona2Xtel2DomPersona($tel2DomPersona){
		$params = array($tel2DomPersona);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_TEL2DOMPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2XrefDomPersona($refDomPersona){	
		$params = array("%$refDomPersona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_REFDOMPERSONA, $params);
	}	
	
	function consultarPersona2XrefDomPersonaAprox($refDomPersona){	
		$params = array("%$refDomPersona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_REFDOMPERSONA_APROX, $params);
	}	
	
	function existePersona2XrefDomPersona($refDomPersona){
		$params = array($refDomPersona);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_REFDOMPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersona2XemaDomPersona($emaDomPersona){	
		$params = array("%$emaDomPersona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_EMADOMPERSONA, $params);
	}	
	
	function consultarPersona2XemaDomPersonaAprox($emaDomPersona){	
		$params = array("%$emaDomPersona%");
		return parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_EMADOMPERSONA_APROX, $params);
	}	
	
	function existePersona2XemaDomPersona($emaDomPersona){
		$params = array($emaDomPersona);
		$tabla = parent::executeQuery(SQLPersona2::CONSULTAR_PERSONA2_POR_EMADOMPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

//------------------------------	

 //INICIO COMBOS 

 //FIN COMBOS 
}
?>