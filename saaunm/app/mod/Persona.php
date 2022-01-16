<?php 
require_once('../../../config/config.php');
require_once(MOD.'Persona.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLPersona.php');

class Persona extends Query{
function __construct(){
// 		parent::abrirConexion();
    parent::abrirConexionConParam(SERVER_RH,USER_RH,PASSWORDBD_RH,DATABASE_RH);
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idPersona, $idGenero, $idEdoCivil, $idIdioma, $idDistritoNac, $idDistritoDir, $idTipoDoc, $idZona, $idVia, $dniPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $numDepPersona, $fecNacPersona, $zonaDomPersona, $desViaDomPersona, $numViaDomPersona, $intDomPersona, $tel1DomPersona, $tel2DomPersona, $refDomPersona, $emaDomPersona) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idPersona, $idGenero, $idEdoCivil, $idIdioma, $idDistritoNac, $idDistritoDir, $idTipoDoc, $idZona, $idVia, $dniPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $numDepPersona, $fecNacPersona, $zonaDomPersona, $desViaDomPersona, $numViaDomPersona, $intDomPersona, $tel1DomPersona, $tel2DomPersona, $refDomPersona, $emaDomPersona, $id_Persona);
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
	function compActualizarcambiarTabla1cambiarTabla2($idPersona, $idGenero, $idEdoCivil, $idIdioma, $idDistritoNac, $idDistritoDir, $idTipoDoc, $idZona, $idVia, $dniPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $numDepPersona, $fecNacPersona, $zonaDomPersona, $desViaDomPersona, $numViaDomPersona, $intDomPersona, $tel1DomPersona, $tel2DomPersona, $refDomPersona, $emaDomPersona) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idPersona, $idGenero, $idEdoCivil, $idIdioma, $idDistritoNac, $idDistritoDir, $idTipoDoc, $idZona, $idVia, $dniPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $numDepPersona, $fecNacPersona, $zonaDomPersona, $desViaDomPersona, $numViaDomPersona, $intDomPersona, $tel1DomPersona, $tel2DomPersona, $refDomPersona, $emaDomPersona, $id_Persona);
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
	function agregarPersona($idPersona, $idGenero, $idEdoCivil, $idIdioma, $idDistritoNac, $idDistritoDir, $idTipoDoc, $idZona, $idVia, $dniPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $numDepPersona, $fecNacPersona, $zonaDomPersona, $desViaDomPersona, $numViaDomPersona, $intDomPersona, $tel1DomPersona, $tel2DomPersona, $refDomPersona, $emaDomPersona) {
		$idPersona = parent::prepareParam($idPersona, Query::DATATYPE_INTEGER);
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
		
		$params = array($idPersona, $idGenero, $idEdoCivil, $idIdioma, $idDistritoNac, $idDistritoDir, $idTipoDoc, $idZona, $idVia, $dniPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $numDepPersona, $fecNacPersona, $zonaDomPersona, $desViaDomPersona, $numViaDomPersona, $intDomPersona, $tel1DomPersona, $tel2DomPersona, $refDomPersona, $emaDomPersona);
		return parent::execute(SQLPersona::AGREGAR_PERSONA, $params);
	}

function actualizarPersona($idPersona, $idGenero, $idEdoCivil, $idIdioma, $idDistritoNac, $idDistritoDir, $idTipoDoc, $idZona, $idVia, $dniPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $numDepPersona, $fecNacPersona, $zonaDomPersona, $desViaDomPersona, $numViaDomPersona, $intDomPersona, $tel1DomPersona, $tel2DomPersona, $refDomPersona, $emaDomPersona, $id_Persona){
		
		$idPersona = parent::prepareParam($idPersona, Query::DATATYPE_INTEGER);
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

		
		$params = array($idPersona, $idGenero, $idEdoCivil, $idIdioma, $idDistritoNac, $idDistritoDir, $idTipoDoc, $idZona, $idVia, $dniPersona, $nom1Persona, $nom2Persona, $ape1Persona, $ape2Persona, $numDepPersona, $fecNacPersona, $zonaDomPersona, $desViaDomPersona, $numViaDomPersona, $intDomPersona, $tel1DomPersona, $tel2DomPersona, $refDomPersona, $emaDomPersona, $id_Persona);
		return parent::execute(SQLPersona::ACTUALIZAR_PERSONA, $params);		
	}
	
	
	function consultarPersona(){	
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA);
	}	
	
	function consultarPersonaMulti(){	
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_MULTI);
	}	
	function consultarPersonaMultiXid($idPersona){
		$params = array($idPersona);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_MULTI_X_ID,$params);
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

	function consultarPersonaXidIdioma($idIdioma){	
		$params = array($idIdioma);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDIDIOMA, $params);
	}	
	
	function existePersonaXidIdioma($idIdioma){
		$params = array($idIdioma);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDIDIOMA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXidDistritoNac($idDistritoNac){	
		$params = array($idDistritoNac);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDDISTRITONAC, $params);
	}	
	
	function existePersonaXidDistritoNac($idDistritoNac){
		$params = array($idDistritoNac);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDDISTRITONAC, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXidDistritoDir($idDistritoDir){	
		$params = array($idDistritoDir);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDDISTRITODIR, $params);
	}	
	
	function existePersonaXidDistritoDir($idDistritoDir){
		$params = array($idDistritoDir);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDDISTRITODIR, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXidTipoDoc($idTipoDoc){	
		$params = array($idTipoDoc);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDTIPODOC, $params);
	}	
	
	function existePersonaXidTipoDoc($idTipoDoc){
		$params = array($idTipoDoc);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDTIPODOC, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXidZona($idZona){	
		$params = array($idZona);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDZONA, $params);
	}	
	
	function existePersonaXidZona($idZona){
		$params = array($idZona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDZONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXidVia($idVia){	
		$params = array($idVia);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDVIA, $params);
	}	
	
	function existePersonaXidVia($idVia){
		$params = array($idVia);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDVIA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXdniPersona($dniPersona){	
		$params = array($dniPersona);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_DNI, $params);
	}	
	
	function consultarPersonaXdniPersonaAprox($dniPersona){	
		$params = array("%$dniPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_DNIPERSONA_APROX, $params);
	}	

	function consultarPersonaXparam($campBusq)
    {
        //         echo "[$campBusq]";
        $matCampBusq = explode(':', $campBusq);
         
        if ($matCampBusq[0]==1) {
            $params = array(
               '%'.$matCampBusq[1].'%'
            );
            //             return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANPENS);
            return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_DNI_MUTI, $params);
        }
		if($matCampBusq[0]==2){
			$params = array(
				'%'.$matCampBusq[2].'%',
				'%'.$matCampBusq[2].'%',
				'%'.$matCampBusq[2].'%',
				'%'.$matCampBusq[2].'%'

			 );
			return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_NOMBRE_MUTI, $params);

		}

        //  
        //         return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANPENS_POR_DNI, $params);
    }
	
	function existePersonaXdniPersona($dniPersona){
		$params = array($dniPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_DNIPERSONA, $params);
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

	function consultarPersonaXnumDepPersona($numDepPersona){	
		$params = array($numDepPersona);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NUMDEPPERSONA, $params);
	}	
	
	function existePersonaXnumDepPersona($numDepPersona){
		$params = array($numDepPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NUMDEPPERSONA, $params);
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

	function consultarPersonaXzonaDomPersona($zonaDomPersona){	
		$params = array("%$zonaDomPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_ZONADOMPERSONA, $params);
	}	
	
	function consultarPersonaXzonaDomPersonaAprox($zonaDomPersona){	
		$params = array("%$zonaDomPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_ZONADOMPERSONA_APROX, $params);
	}	
	
	function existePersonaXzonaDomPersona($zonaDomPersona){
		$params = array($zonaDomPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_ZONADOMPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXdesViaDomPersona($desViaDomPersona){	
		$params = array("%$desViaDomPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_DESVIADOMPERSONA, $params);
	}	
	
	function consultarPersonaXdesViaDomPersonaAprox($desViaDomPersona){	
		$params = array("%$desViaDomPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_DESVIADOMPERSONA_APROX, $params);
	}	
	
	function existePersonaXdesViaDomPersona($desViaDomPersona){
		$params = array($desViaDomPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_DESVIADOMPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXnumViaDomPersona($numViaDomPersona){	
		$params = array("%$numViaDomPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NUMVIADOMPERSONA, $params);
	}	
	
	function consultarPersonaXnumViaDomPersonaAprox($numViaDomPersona){	
		$params = array("%$numViaDomPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NUMVIADOMPERSONA_APROX, $params);
	}	
	
	function existePersonaXnumViaDomPersona($numViaDomPersona){
		$params = array($numViaDomPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_NUMVIADOMPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXintDomPersona($intDomPersona){	
		$params = array("%$intDomPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_INTDOMPERSONA, $params);
	}	
	
	function consultarPersonaXintDomPersonaAprox($intDomPersona){	
		$params = array("%$intDomPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_INTDOMPERSONA_APROX, $params);
	}	
	
	function existePersonaXintDomPersona($intDomPersona){
		$params = array($intDomPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_INTDOMPERSONA, $params);
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

	function consultarPersonaXrefDomPersona($refDomPersona){	
		$params = array("%$refDomPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_REFDOMPERSONA, $params);
	}	
	
	function consultarPersonaXrefDomPersonaAprox($refDomPersona){	
		$params = array("%$refDomPersona%");
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_REFDOMPERSONA_APROX, $params);
	}	
	
	function existePersonaXrefDomPersona($refDomPersona){
		$params = array($refDomPersona);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_REFDOMPERSONA, $params);
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

//------------------------------	

 //INICIO COMBOS 

 //FIN COMBOS 
}
?>