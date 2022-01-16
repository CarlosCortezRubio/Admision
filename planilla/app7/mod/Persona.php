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
	function compAgregarcambiarTabla1cambiarTabla2($idPersona, $idGenero, $idEdoCivil, $idGradoInst, $nomPersona1, $nomPersona2, $apePersona1, $apePersona2, $cedPersona, $nacPersona, $rifPersona, $fecNacPersona, $movPersona, $telPersona, $emailPersona, $fotPersona, $fecIngAdmPub, $dirPersona, $numHijosPersona, $numHijosCobranPersona, $numHijosEspPersona, $fecFallecimientoPersona, $idConyuguePersona) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idPersona, $idGenero, $idEdoCivil, $idGradoInst, $nomPersona1, $nomPersona2, $apePersona1, $apePersona2, $cedPersona, $nacPersona, $rifPersona, $fecNacPersona, $movPersona, $telPersona, $emailPersona, $fotPersona, $fecIngAdmPub, $dirPersona, $numHijosPersona, $numHijosCobranPersona, $numHijosEspPersona, $fecFallecimientoPersona, $idConyuguePersona, $id_Persona);
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
	function compActualizarcambiarTabla1cambiarTabla2($idPersona, $idGenero, $idEdoCivil, $idGradoInst, $nomPersona1, $nomPersona2, $apePersona1, $apePersona2, $cedPersona, $nacPersona, $rifPersona, $fecNacPersona, $movPersona, $telPersona, $emailPersona, $fotPersona, $fecIngAdmPub, $dirPersona, $numHijosPersona, $numHijosCobranPersona, $numHijosEspPersona, $fecFallecimientoPersona, $idConyuguePersona) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idPersona, $idGenero, $idEdoCivil, $idGradoInst, $nomPersona1, $nomPersona2, $apePersona1, $apePersona2, $cedPersona, $nacPersona, $rifPersona, $fecNacPersona, $movPersona, $telPersona, $emailPersona, $fotPersona, $fecIngAdmPub, $dirPersona, $numHijosPersona, $numHijosCobranPersona, $numHijosEspPersona, $fecFallecimientoPersona, $idConyuguePersona, $id_Persona);
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
	function agregarPersona($idPersona, $idGenero, $idEdoCivil, $idGradoInst, $nomPersona1, $nomPersona2, $apePersona1, $apePersona2, $cedPersona, $nacPersona, $rifPersona, $fecNacPersona, $movPersona, $telPersona, $emailPersona, $fotPersona, $fecIngAdmPub, $dirPersona, $numHijosPersona, $numHijosCobranPersona, $numHijosEspPersona, $fecFallecimientoPersona, $idConyuguePersona) {
$idPersona = parent::prepareParam($idPersona, Query::DATATYPE_INTEGER);
$idGenero = parent::prepareParam($idGenero, Query::DATATYPE_INTEGER);
$idEdoCivil = parent::prepareParam($idEdoCivil, Query::DATATYPE_INTEGER);
$idGradoInst = parent::prepareParam($idGradoInst, Query::DATATYPE_INTEGER);
$nomPersona1 = parent::prepareParam($nomPersona1, Query::DATATYPE_STRING, 0);
$nomPersona2 = parent::prepareParam($nomPersona2, Query::DATATYPE_STRING, 0);
$apePersona1 = parent::prepareParam($apePersona1, Query::DATATYPE_STRING, 0);
$apePersona2 = parent::prepareParam($apePersona2, Query::DATATYPE_STRING, 0);
$cedPersona = parent::prepareParam($cedPersona, Query::DATATYPE_STRING, 0);
$nacPersona = parent::prepareParam($nacPersona, Query::DATATYPE_STRING, 0);
$rifPersona = parent::prepareParam($rifPersona, Query::DATATYPE_STRING, 0);
$movPersona = parent::prepareParam($movPersona, Query::DATATYPE_STRING, 0);
$telPersona = parent::prepareParam($telPersona, Query::DATATYPE_STRING, 0);
$emailPersona = parent::prepareParam($emailPersona, Query::DATATYPE_STRING, 0);
$fotPersona = parent::prepareParam($fotPersona, Query::DATATYPE_STRING, 0);
$dirPersona = parent::prepareParam($dirPersona, Query::DATATYPE_STRING, 0);
$numHijosPersona = parent::prepareParam($numHijosPersona, Query::DATATYPE_INTEGER);
$numHijosCobranPersona = parent::prepareParam($numHijosCobranPersona, Query::DATATYPE_INTEGER);
$numHijosEspPersona = parent::prepareParam($numHijosEspPersona, Query::DATATYPE_INTEGER);
$idConyuguePersona = parent::prepareParam($idConyuguePersona, Query::DATATYPE_INTEGER);
		
		$params = array($idPersona, $idGenero, $idEdoCivil, $idGradoInst, $nomPersona1, $nomPersona2, $apePersona1, $apePersona2, $cedPersona, $nacPersona, $rifPersona, $fecNacPersona, $movPersona, $telPersona, $emailPersona, $fotPersona, $fecIngAdmPub, $dirPersona, $numHijosPersona, $numHijosCobranPersona, $numHijosEspPersona, $fecFallecimientoPersona, $idConyuguePersona);
		return parent::execute(SQLPersona::AGREGAR_PERSONA, $params);
	}

	function actualizarPersona($idPersona, $idGenero, $idEdoCivil, $idGradoInst, $nomPersona1, $nomPersona2, $apePersona1, $apePersona2, $cedPersona, $nacPersona, $rifPersona, $fecNacPersona, $movPersona, $telPersona, $emailPersona, $fotPersona, $fecIngAdmPub, $dirPersona, $numHijosPersona, $numHijosCobranPersona, $numHijosEspPersona, $fecFallecimientoPersona, $idConyuguePersona, $id_Persona){
		
$idPersona = parent::prepareParam($idPersona, Query::DATATYPE_INTEGER);
$idGenero = parent::prepareParam($idGenero, Query::DATATYPE_INTEGER);
$idEdoCivil = parent::prepareParam($idEdoCivil, Query::DATATYPE_INTEGER);
$idGradoInst = parent::prepareParam($idGradoInst, Query::DATATYPE_INTEGER);
$nomPersona1 = parent::prepareParam($nomPersona1, Query::DATATYPE_STRING, 0);
$nomPersona2 = parent::prepareParam($nomPersona2, Query::DATATYPE_STRING, 0);
$apePersona1 = parent::prepareParam($apePersona1, Query::DATATYPE_STRING, 0);
$apePersona2 = parent::prepareParam($apePersona2, Query::DATATYPE_STRING, 0);
$cedPersona = parent::prepareParam($cedPersona, Query::DATATYPE_STRING, 0);
$nacPersona = parent::prepareParam($nacPersona, Query::DATATYPE_STRING, 0);
$rifPersona = parent::prepareParam($rifPersona, Query::DATATYPE_STRING, 0);
$movPersona = parent::prepareParam($movPersona, Query::DATATYPE_STRING, 0);
$telPersona = parent::prepareParam($telPersona, Query::DATATYPE_STRING, 0);
$emailPersona = parent::prepareParam($emailPersona, Query::DATATYPE_STRING, 0);
$fotPersona = parent::prepareParam($fotPersona, Query::DATATYPE_STRING, 0);
$dirPersona = parent::prepareParam($dirPersona, Query::DATATYPE_STRING, 0);
$numHijosPersona = parent::prepareParam($numHijosPersona, Query::DATATYPE_INTEGER);
$numHijosCobranPersona = parent::prepareParam($numHijosCobranPersona, Query::DATATYPE_INTEGER);
$numHijosEspPersona = parent::prepareParam($numHijosEspPersona, Query::DATATYPE_INTEGER);
$idConyuguePersona = parent::prepareParam($idConyuguePersona, Query::DATATYPE_INTEGER);

		
		$params = array($idPersona, $idGenero, $idEdoCivil, $idGradoInst, $nomPersona1, $nomPersona2, $apePersona1, $apePersona2, $cedPersona, $nacPersona, $rifPersona, $fecNacPersona, $movPersona, $telPersona, $emailPersona, $fotPersona, $fecIngAdmPub, $dirPersona, $numHijosPersona, $numHijosCobranPersona, $numHijosEspPersona, $fecFallecimientoPersona, $idConyuguePersona, $id_Persona);
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

	function consultarPersonaXidGradoInst($idGradoInst){	
		$params = array($idGradoInst);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDGRADOINST, $params);
	}	
	
	function existePersonaXidGradoInst($idGradoInst){
		$params = array($idGradoInst);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDGRADOINST, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXnomPersona1($nomPersona1){	
		$params = array("%$nomPersona1%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NOMPERSONA1, $params);
	}	
	
	function consultarPersonaXnomPersona1Aprox($nomPersona1){	
		$params = array("%$nomPersona1%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NOMPERSONA1_APROX, $params);
	}	
	
	function existePersonaXnomPersona1($nomPersona1){
		$params = array($nomPersona1);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NOMPERSONA1, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXnomPersona2($nomPersona2){	
		$params = array("%$nomPersona2%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NOMPERSONA2, $params);
	}	
	
	function consultarPersonaXnomPersona2Aprox($nomPersona2){	
		$params = array("%$nomPersona2%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NOMPERSONA2_APROX, $params);
	}	
	
	function existePersonaXnomPersona2($nomPersona2){
		$params = array($nomPersona2);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NOMPERSONA2, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXapePersona1($apePersona1){	
		$params = array("%$apePersona1%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_APEPERSONA1, $params);
	}	
	
	function consultarPersonaXapePersona1Aprox($apePersona1){	
		$params = array("%$apePersona1%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_APEPERSONA1_APROX, $params);
	}	
	
	function existePersonaXapePersona1($apePersona1){
		$params = array($apePersona1);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_APEPERSONA1, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXapePersona2($apePersona2){	
		$params = array("%$apePersona2%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_APEPERSONA2, $params);
	}	
	
	function consultarPersonaXapePersona2Aprox($apePersona2){	
		$params = array("%$apePersona2%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_APEPERSONA2_APROX, $params);
	}	
	
	function existePersonaXapePersona2($apePersona2){
		$params = array($apePersona2);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_APEPERSONA2, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXcedPersona($cedPersona){	
		$params = array("%$cedPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_CEDPERSONA, $params);
	}	
	
	function consultarPersonaXcedPersonaAprox($cedPersona){	
		$params = array("%$cedPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_CEDPERSONA_APROX, $params);
	}	
	
	function existePersonaXcedPersona($cedPersona){
		$params = array($cedPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_CEDPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXnacPersona($nacPersona){	
		$params = array("%$nacPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NACPERSONA, $params);
	}	
	
	function consultarPersonaXnacPersonaAprox($nacPersona){	
		$params = array("%$nacPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NACPERSONA_APROX, $params);
	}	
	
	function existePersonaXnacPersona($nacPersona){
		$params = array($nacPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NACPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXrifPersona($rifPersona){	
		$params = array("%$rifPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_RIFPERSONA, $params);
	}	
	
	function consultarPersonaXrifPersonaAprox($rifPersona){	
		$params = array("%$rifPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_RIFPERSONA_APROX, $params);
	}	
	
	function existePersonaXrifPersona($rifPersona){
		$params = array($rifPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_RIFPERSONA, $params);
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

	function consultarPersonaXmovPersona($movPersona){	
		$params = array("%$movPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_MOVPERSONA, $params);
	}	
	
	function consultarPersonaXmovPersonaAprox($movPersona){	
		$params = array("%$movPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_MOVPERSONA_APROX, $params);
	}	
	
	function existePersonaXmovPersona($movPersona){
		$params = array($movPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_MOVPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXtelPersona($telPersona){	
		$params = array("%$telPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_TELPERSONA, $params);
	}	
	
	function consultarPersonaXtelPersonaAprox($telPersona){	
		$params = array("%$telPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_TELPERSONA_APROX, $params);
	}	
	
	function existePersonaXtelPersona($telPersona){
		$params = array($telPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_TELPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXemailPersona($emailPersona){	
		$params = array("%$emailPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_EMAILPERSONA, $params);
	}	
	
	function consultarPersonaXemailPersonaAprox($emailPersona){	
		$params = array("%$emailPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_EMAILPERSONA_APROX, $params);
	}	
	
	function existePersonaXemailPersona($emailPersona){
		$params = array($emailPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_EMAILPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXfotPersona($fotPersona){	
		$params = array("%$fotPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_FOTPERSONA, $params);
	}	
	
	function consultarPersonaXfotPersonaAprox($fotPersona){	
		$params = array("%$fotPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_FOTPERSONA_APROX, $params);
	}	
	
	function existePersonaXfotPersona($fotPersona){
		$params = array($fotPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_FOTPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXfecIngAdmPub($fecIngAdmPub){	
		$params = array($fecIngAdmPub);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_FECINGADMPUB, $params);
	}	
	
	function existePersonaXfecIngAdmPub($fecIngAdmPub){
		$params = array($fecIngAdmPub);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_FECINGADMPUB, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXdirPersona($dirPersona){	
		$params = array("%$dirPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_DIRPERSONA, $params);
	}	
	
	function consultarPersonaXdirPersonaAprox($dirPersona){	
		$params = array("%$dirPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_DIRPERSONA_APROX, $params);
	}	
	
	function existePersonaXdirPersona($dirPersona){
		$params = array($dirPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_DIRPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXnumHijosPersona($numHijosPersona){	
		$params = array($numHijosPersona);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NUMHIJOSPERSONA, $params);
	}	
	
	function existePersonaXnumHijosPersona($numHijosPersona){
		$params = array($numHijosPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NUMHIJOSPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXnumHijosCobranPersona($numHijosCobranPersona){	
		$params = array($numHijosCobranPersona);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NUMHIJOSCOBRANPERSONA, $params);
	}	
	
	function existePersonaXnumHijosCobranPersona($numHijosCobranPersona){
		$params = array($numHijosCobranPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NUMHIJOSCOBRANPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXnumHijosEspPersona($numHijosEspPersona){	
		$params = array($numHijosEspPersona);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NUMHIJOSESPPERSONA, $params);
	}	
	
	function existePersonaXnumHijosEspPersona($numHijosEspPersona){
		$params = array($numHijosEspPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NUMHIJOSESPPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXfecFallecimientoPersona($fecFallecimientoPersona){	
		$params = array($fecFallecimientoPersona);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_FECFALLECIMIENTOPERSONA, $params);
	}	
	
	function existePersonaXfecFallecimientoPersona($fecFallecimientoPersona){
		$params = array($fecFallecimientoPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_FECFALLECIMIENTOPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXidConyuguePersona($idConyuguePersona){	
		$params = array($idConyuguePersona);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDCONYUGUEPERSONA, $params);
	}	
	
	function existePersonaXidConyuguePersona($idConyuguePersona){
		$params = array($idConyuguePersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDCONYUGUEPERSONA, $params);
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