<?php 
require_once('../../../config/config.php');
require_once(MOD.'Persona.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLPersona.php');

class Persona extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idPersona, $idGenero, $idEdoCivil, $idBanco, $idTipoPersona, $idEdoRegistro, $tipDocPersona, $docPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $fecNacPersona, $tel1DomPersona, $tel2DomPersona, $emaDomPersona, $codModularPersona, $planillaPersona, $tipRegPersona, $resPenDefPersona, $fecRes, $ctaBancoPersona, $fntFinancPersona, $planilla2Persona, $idBenefactorPersona) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idPersona, $idGenero, $idEdoCivil, $idBanco, $idTipoPersona, $idEdoRegistro, $tipDocPersona, $docPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $fecNacPersona, $tel1DomPersona, $tel2DomPersona, $emaDomPersona, $codModularPersona, $planillaPersona, $tipRegPersona, $resPenDefPersona, $fecRes, $ctaBancoPersona, $fntFinancPersona, $planilla2Persona, $idBenefactorPersona, $id_Persona);
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
	function compActualizarcambiarTabla1cambiarTabla2($idPersona, $idGenero, $idEdoCivil, $idBanco, $idTipoPersona, $idEdoRegistro, $tipDocPersona, $docPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $fecNacPersona, $tel1DomPersona, $tel2DomPersona, $emaDomPersona, $codModularPersona, $planillaPersona, $tipRegPersona, $resPenDefPersona, $fecRes, $ctaBancoPersona, $fntFinancPersona, $planilla2Persona, $idBenefactorPersona) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idPersona, $idGenero, $idEdoCivil, $idBanco, $idTipoPersona, $idEdoRegistro, $tipDocPersona, $docPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $fecNacPersona, $tel1DomPersona, $tel2DomPersona, $emaDomPersona, $codModularPersona, $planillaPersona, $tipRegPersona, $resPenDefPersona, $fecRes, $ctaBancoPersona, $fntFinancPersona, $planilla2Persona, $idBenefactorPersona, $id_Persona);
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
	function agregarPersona($idPersona, $idGenero, $idEdoCivil, $idBanco, $idTipoPersona, $idEdoRegistro, $tipDocPersona, $docPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $fecNacPersona, $tel1DomPersona, $tel2DomPersona, $emaDomPersona, $codModularPersona, $planillaPersona, $tipRegPersona, $resPenDefPersona, $fecRes, $ctaBancoPersona, $fntFinancPersona, $planilla2Persona, $idBenefactorPersona) {
$idPersona = parent::prepareParam($idPersona, Query::DATATYPE_INTEGER);
$idGenero = parent::prepareParam($idGenero, Query::DATATYPE_INTEGER);
$idEdoCivil = parent::prepareParam($idEdoCivil, Query::DATATYPE_INTEGER);
$idBanco = parent::prepareParam($idBanco, Query::DATATYPE_INTEGER);
$idTipoPersona = parent::prepareParam($idTipoPersona, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$tipDocPersona = parent::prepareParam($tipDocPersona, Query::DATATYPE_INTEGER);
$docPersona = parent::prepareParam($docPersona, Query::DATATYPE_STRING, 0);
$nom1Persona = parent::prepareParam($nom1Persona, Query::DATATYPE_STRING, 0);
$nom2Persona = parent::prepareParam($nom2Persona, Query::DATATYPE_STRING, 0);
$ape1Persona = parent::prepareParam($ape1Persona, Query::DATATYPE_STRING, 0);
$ape2Persona = parent::prepareParam($ape2Persona, Query::DATATYPE_STRING, 0);
$tel1DomPersona = parent::prepareParam($tel1DomPersona, Query::DATATYPE_STRING, 0);
$tel2DomPersona = parent::prepareParam($tel2DomPersona, Query::DATATYPE_STRING, 0);
$emaDomPersona = parent::prepareParam($emaDomPersona, Query::DATATYPE_STRING, 0);
$codModularPersona = parent::prepareParam($codModularPersona, Query::DATATYPE_STRING, 0);
$planillaPersona = parent::prepareParam($planillaPersona, Query::DATATYPE_STRING, 0);
$tipRegPersona = parent::prepareParam($tipRegPersona, Query::DATATYPE_STRING, 0);
$resPenDefPersona = parent::prepareParam($resPenDefPersona, Query::DATATYPE_STRING, 0);
$ctaBancoPersona = parent::prepareParam($ctaBancoPersona, Query::DATATYPE_INTEGER);
$fntFinancPersona = parent::prepareParam($fntFinancPersona, Query::DATATYPE_STRING, 0);
$planilla2Persona = parent::prepareParam($planilla2Persona, Query::DATATYPE_STRING, 0);
$idBenefactorPersona = parent::prepareParam($idBenefactorPersona, Query::DATATYPE_INTEGER);
		
		$params = array($idPersona, $idGenero, $idEdoCivil, $idBanco, $idTipoPersona, $idEdoRegistro, $tipDocPersona, $docPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $fecNacPersona, $tel1DomPersona, $tel2DomPersona, $emaDomPersona, $codModularPersona, $planillaPersona, $tipRegPersona, $resPenDefPersona, $fecRes, $ctaBancoPersona, $fntFinancPersona, $planilla2Persona, $idBenefactorPersona);
		return parent::execute(SQLPersona::AGREGAR_PERSONA, $params);
	}

	function actualizarPersona($idPersona, $idGenero, $idEdoCivil, $idBanco, $idTipoPersona, $idEdoRegistro, $tipDocPersona, $docPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $fecNacPersona, $tel1DomPersona, $tel2DomPersona, $emaDomPersona, $codModularPersona, $planillaPersona, $tipRegPersona, $resPenDefPersona, $fecRes, $ctaBancoPersona, $fntFinancPersona, $planilla2Persona, $idBenefactorPersona, $id_Persona){
		
$idPersona = parent::prepareParam($idPersona, Query::DATATYPE_INTEGER);
$idGenero = parent::prepareParam($idGenero, Query::DATATYPE_INTEGER);
$idEdoCivil = parent::prepareParam($idEdoCivil, Query::DATATYPE_INTEGER);
$idBanco = parent::prepareParam($idBanco, Query::DATATYPE_INTEGER);
$idTipoPersona = parent::prepareParam($idTipoPersona, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$tipDocPersona = parent::prepareParam($tipDocPersona, Query::DATATYPE_INTEGER);
$docPersona = parent::prepareParam($docPersona, Query::DATATYPE_STRING, 0);
$nom1Persona = parent::prepareParam($nom1Persona, Query::DATATYPE_STRING, 0);
$nom2Persona = parent::prepareParam($nom2Persona, Query::DATATYPE_STRING, 0);
$ape1Persona = parent::prepareParam($ape1Persona, Query::DATATYPE_STRING, 0);
$ape2Persona = parent::prepareParam($ape2Persona, Query::DATATYPE_STRING, 0);
$tel1DomPersona = parent::prepareParam($tel1DomPersona, Query::DATATYPE_STRING, 0);
$tel2DomPersona = parent::prepareParam($tel2DomPersona, Query::DATATYPE_STRING, 0);
$emaDomPersona = parent::prepareParam($emaDomPersona, Query::DATATYPE_STRING, 0);
$codModularPersona = parent::prepareParam($codModularPersona, Query::DATATYPE_STRING, 0);
$planillaPersona = parent::prepareParam($planillaPersona, Query::DATATYPE_STRING, 0);
$tipRegPersona = parent::prepareParam($tipRegPersona, Query::DATATYPE_STRING, 0);
$resPenDefPersona = parent::prepareParam($resPenDefPersona, Query::DATATYPE_STRING, 0);
$ctaBancoPersona = parent::prepareParam($ctaBancoPersona, Query::DATATYPE_INTEGER);
$fntFinancPersona = parent::prepareParam($fntFinancPersona, Query::DATATYPE_STRING, 0);
$planilla2Persona = parent::prepareParam($planilla2Persona, Query::DATATYPE_STRING, 0);
$idBenefactorPersona = parent::prepareParam($idBenefactorPersona, Query::DATATYPE_INTEGER);

		
		$params = array($idPersona, $idGenero, $idEdoCivil, $idBanco, $idTipoPersona, $idEdoRegistro, $tipDocPersona, $docPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $fecNacPersona, $tel1DomPersona, $tel2DomPersona, $emaDomPersona, $codModularPersona, $planillaPersona, $tipRegPersona, $resPenDefPersona, $fecRes, $ctaBancoPersona, $fntFinancPersona, $planilla2Persona, $idBenefactorPersona, $id_Persona);
		return parent::execute(SQLPersona::ACTUALIZAR_PERSONA, $params);		
	}
	
	
	function consultarPersona(){	
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA);
	}	
	
	function eliminarPersona($id_Persona){
		$params = array($id_Persona);
		return parent::execute(SQLPersona::ELIMINAR_PERSONA, $params);		
	}
	
//------------------------------	
	function consultarPersonaXidPersona($idPersona){	
		$params = array($idPersona);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDPERSONA, $params);
	}	
	
	function existePersonaXidPersona($idPersona){
		$params = array($idPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXidGenero($idGenero){	
		$params = array($idGenero);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDGENERO, $params);
	}	
	
	function existePersonaXidGenero($idGenero){
		$params = array($idGenero);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDGENERO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXidEdoCivil($idEdoCivil){	
		$params = array($idEdoCivil);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDEDOCIVIL, $params);
	}	
	
	function existePersonaXidEdoCivil($idEdoCivil){
		$params = array($idEdoCivil);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDEDOCIVIL, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXidBanco($idBanco){	
		$params = array($idBanco);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDBANCO, $params);
	}	
	
	function existePersonaXidBanco($idBanco){
		$params = array($idBanco);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDBANCO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXidTipoPersona($idTipoPersona){	
		$params = array($idTipoPersona);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDTIPOPERSONA, $params);
	}	
	
	function existePersonaXidTipoPersona($idTipoPersona){
		$params = array($idTipoPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDTIPOPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXidEdoRegistro($idEdoRegistro){	
		$params = array($idEdoRegistro);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDEDOREGISTRO, $params);
	}	
	
	function existePersonaXidEdoRegistro($idEdoRegistro){
		$params = array($idEdoRegistro);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXtipDocPersona($tipDocPersona){	
		$params = array($tipDocPersona);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_TIPDOCPERSONA, $params);
	}	
	
	function existePersonaXtipDocPersona($tipDocPersona){
		$params = array($tipDocPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_TIPDOCPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXdocPersona($docPersona){	
		$params = array($docPersona);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_DOC, $params);
	}	
	
	function consultarPersonaXdocPersonaAprox($docPersona){	
		$params = array("%$docPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_DOCPERSONA_APROX, $params);
	}	
	
	function existePersonaXdocPersona($docPersona){
		$params = array($docPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_DOC, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXnom1Persona($nom1Persona){	
		$params = array("%$nom1Persona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NOM1PERSONA, $params);
	}	
	
	function consultarPersonaXnom1PersonaAprox($nom1Persona){	
		$params = array("%$nom1Persona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NOM1PERSONA_APROX, $params);
	}	
	
	function existePersonaXnom1Persona($nom1Persona){
		$params = array($nom1Persona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NOM1PERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXnom2Persona($nom2Persona){	
		$params = array("%$nom2Persona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NOM2PERSONA, $params);
	}	
	
	function consultarPersonaXnom2PersonaAprox($nom2Persona){	
		$params = array("%$nom2Persona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NOM2PERSONA_APROX, $params);
	}	
	
	function existePersonaXnom2Persona($nom2Persona){
		$params = array($nom2Persona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NOM2PERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXape1Persona($ape1Persona){	
		$params = array("%$ape1Persona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_APE1PERSONA, $params);
	}	
	
	function consultarPersonaXape1PersonaAprox($ape1Persona){	
		$params = array("%$ape1Persona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_APE1PERSONA_APROX, $params);
	}	
	
	function existePersonaXape1Persona($ape1Persona){
		$params = array($ape1Persona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_APE1PERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXape2Persona($ape2Persona){	
		$params = array("%$ape2Persona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_APE2PERSONA, $params);
	}	
	
	function consultarPersonaXape2PersonaAprox($ape2Persona){	
		$params = array("%$ape2Persona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_APE2PERSONA_APROX, $params);
	}	
	
	function existePersonaXape2Persona($ape2Persona){
		$params = array($ape2Persona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_APE2PERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXfecNacPersona($fecNacPersona){	
		$params = array($fecNacPersona);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_FECNACPERSONA, $params);
	}	
	
	function existePersonaXfecNacPersona($fecNacPersona){
		$params = array($fecNacPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_FECNACPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXtel1DomPersona($tel1DomPersona){	
		$params = array("%$tel1DomPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_TEL1DOMPERSONA, $params);
	}	
	
	function consultarPersonaXtel1DomPersonaAprox($tel1DomPersona){	
		$params = array("%$tel1DomPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_TEL1DOMPERSONA_APROX, $params);
	}	
	
	function existePersonaXtel1DomPersona($tel1DomPersona){
		$params = array($tel1DomPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_TEL1DOMPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXtel2DomPersona($tel2DomPersona){	
		$params = array("%$tel2DomPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_TEL2DOMPERSONA, $params);
	}	
	
	function consultarPersonaXtel2DomPersonaAprox($tel2DomPersona){	
		$params = array("%$tel2DomPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_TEL2DOMPERSONA_APROX, $params);
	}	
	
	function existePersonaXtel2DomPersona($tel2DomPersona){
		$params = array($tel2DomPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_TEL2DOMPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXemaDomPersona($emaDomPersona){	
		$params = array("%$emaDomPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_EMADOMPERSONA, $params);
	}	
	
	function consultarPersonaXemaDomPersonaAprox($emaDomPersona){	
		$params = array("%$emaDomPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_EMADOMPERSONA_APROX, $params);
	}	
	
	function existePersonaXemaDomPersona($emaDomPersona){
		$params = array($emaDomPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_EMADOMPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXcodModularPersona($codModularPersona){	
		$params = array("%$codModularPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_CODMODULARPERSONA, $params);
	}	
	
	function consultarPersonaXcodModularPersonaAprox($codModularPersona){	
		$params = array("%$codModularPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_CODMODULARPERSONA_APROX, $params);
	}	
	
	function existePersonaXcodModularPersona($codModularPersona){
		$params = array($codModularPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_CODMODULARPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXplanillaPersona($planillaPersona){	
		$params = array("%$planillaPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_PLANILLAPERSONA, $params);
	}	
	
	function consultarPersonaXplanillaPersonaAprox($planillaPersona){	
		$params = array("%$planillaPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_PLANILLAPERSONA_APROX, $params);
	}	
	
	function existePersonaXplanillaPersona($planillaPersona){
		$params = array($planillaPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_PLANILLAPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXtipRegPersona($tipRegPersona){	
		$params = array("%$tipRegPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_TIPREGPERSONA, $params);
	}	
	
	function consultarPersonaXtipRegPersonaAprox($tipRegPersona){	
		$params = array("%$tipRegPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_TIPREGPERSONA_APROX, $params);
	}	
	
	function existePersonaXtipRegPersona($tipRegPersona){
		$params = array($tipRegPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_TIPREGPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXresPenDefPersona($resPenDefPersona){	
		$params = array("%$resPenDefPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_RESPENDEFPERSONA, $params);
	}	
	
	function consultarPersonaXresPenDefPersonaAprox($resPenDefPersona){	
		$params = array("%$resPenDefPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_RESPENDEFPERSONA_APROX, $params);
	}	
	
	function existePersonaXresPenDefPersona($resPenDefPersona){
		$params = array($resPenDefPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_RESPENDEFPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXfecRes($fecRes){	
		$params = array($fecRes);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_FECRES, $params);
	}	
	
	function existePersonaXfecRes($fecRes){
		$params = array($fecRes);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_FECRES, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXctaBancoPersona($ctaBancoPersona){	
		$params = array($ctaBancoPersona);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_CTABANCOPERSONA, $params);
	}	
	
	function existePersonaXctaBancoPersona($ctaBancoPersona){
		$params = array($ctaBancoPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_CTABANCOPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXfntFinancPersona($fntFinancPersona){	
		$params = array("%$fntFinancPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_FNTFINANCPERSONA, $params);
	}	
	
	function consultarPersonaXfntFinancPersonaAprox($fntFinancPersona){	
		$params = array("%$fntFinancPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_FNTFINANCPERSONA_APROX, $params);
	}	
	
	function existePersonaXfntFinancPersona($fntFinancPersona){
		$params = array($fntFinancPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_FNTFINANCPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXplanilla2Persona($planilla2Persona){	
		$params = array("%$planilla2Persona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_PLANILLA2PERSONA, $params);
	}	
	
	function consultarPersonaXplanilla2PersonaAprox($planilla2Persona){	
		$params = array("%$planilla2Persona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_PLANILLA2PERSONA_APROX, $params);
	}	
	
	function existePersonaXplanilla2Persona($planilla2Persona){
		$params = array($planilla2Persona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_PLANILLA2PERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXidBenefactorPersona($idBenefactorPersona){	
		$params = array($idBenefactorPersona);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDBENEFACTORPERSONA, $params);
	}	
	
	function existePersonaXidBenefactorPersona($idBenefactorPersona){
		$params = array($idBenefactorPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDBENEFACTORPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

//------------------------------	

 //INICIO COMBOS 
	function consultarTipDocPersona($diccionarioid){	
		$query = new Query();
		$params = array($diccionarioid);
		$res = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_ID,$params);
		$res1 = $res[0]['cjtovalores'];
		$tabla11 = split(',',$res1);
		$cad1 = array();
		foreach ($tabla11 as $ite) {;
  		$cad1[] = $ite;
		};
		return $cad1;
} 

 //FIN COMBOS 
}
?>