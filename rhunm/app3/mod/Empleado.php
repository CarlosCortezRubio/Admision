<?php 
require_once('../../../config/config.php');
require_once(MOD.'Empleado.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLEmpleado.php');

class Empleado extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	// function compAgregarcambiarTabla1cambiarTabla2($idEmpleado, $idPersona, $idSituacion, $idTipRegistro, $idSegSalud, $idTipoPlanilla, $idCodFiscal, $idAfp, $idCodRegional, $idUniEjecutora, $idNEC, $idNivel, $idEstablecimiento, $idRegLaboral, $idTipServidor, $idNumMagist, $idGpoRemunerativo, $idhatEmb, $idCargoOrigen, $idNivelOrigen, $idPalMagist, $idDirEncargo, $codModular, $fecIngAdmPubEmpleado, $fecIngMedEmpleado, $fecCeseEmpleado, $infCompEmpleado, $fecHabEmpleado, $fecDesEmpleado, $fecFallEmpleado, $valPorEmpleado, $fecValEmpleado, $docRefEmpleado, $numSegSaludEmpleado, $eVidaEmpleado, $CUSPPEmpleado, $fecAfiPenEmpleado, $fecDevPenEmpleado, $plazaEmpleado, $tipPlazaEmpleado, $asigInserEmpleado, $diasTrabEmpleado, $numDepEmpleado, $numDecEmpleado, $licDiasEmpleado, $tipServEmpleado, $fecIniLicEmpleado, $insasitEmpleado, $permisosEmpleado, $huelgasEmpleado, $leyMenEmpleado, $leyPerEmpleado, $cadPresupEmpleado, $ctaEmpleado) {
	// 	$objcambiarTabla1 = new cambiarTabla1();
	// 	$objcambiarTabla1->beginTransaction();
	// 	$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
	// 	$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
	// 	$resultado2 = cambiarTabla2::agregarcambiarTabla2($idEmpleado, $idPersona, $idSituacion, $idTipRegistro, $idSegSalud, $idTipoPlanilla, $idCodFiscal, $idAfp, $idCodRegional, $idUniEjecutora, $idNEC, $idNivel, $idEstablecimiento, $idRegLaboral, $idTipServidor, $idNumMagist, $idGpoRemunerativo, $idhatEmb, $idCargoOrigen, $idNivelOrigen, $idPalMagist, $idDirEncargo, $codModular, $fecIngAdmPubEmpleado, $fecIngMedEmpleado, $fecCeseEmpleado, $infCompEmpleado, $fecHabEmpleado, $fecDesEmpleado, $fecFallEmpleado, $valPorEmpleado, $fecValEmpleado, $docRefEmpleado, $numSegSaludEmpleado, $eVidaEmpleado, $CUSPPEmpleado, $fecAfiPenEmpleado, $fecDevPenEmpleado, $plazaEmpleado, $tipPlazaEmpleado, $asigInserEmpleado, $diasTrabEmpleado, $numDepEmpleado, $numDecEmpleado, $licDiasEmpleado, $tipServEmpleado, $fecIniLicEmpleado, $insasitEmpleado, $permisosEmpleado, $huelgasEmpleado, $leyMenEmpleado, $leyPerEmpleado, $cadPresupEmpleado, $ctaEmpleado, $id_Empleado);
	// 	if ($resultado1>0 AND $resultado2>0) {
	// 		cambiarTabla2::commitTransaction();
	// 		$objcambiarTabla1->commitTransaction();
	// 		cambiarTabla2::desconectar();
	// 		$objcambiarTabla1->desconectar();
	// 		return true;
	// 	}else{
	// 		cambiarTabla2::rollbackTransaction();
	// 		$objcambiarTabla1->rollbackTransaction();
	// 		cambiarTabla2::desconectar();
	// 		$objcambiarTabla1->desconectar();
	// 		return false;
	// 	}
	// }
	// function compActualizarcambiarTabla1cambiarTabla2($idEmpleado, $idPersona, $idSituacion, $idTipRegistro, $idSegSalud, $idTipoPlanilla, $idCodFiscal, $idAfp, $idCodRegional, $idUniEjecutora, $idNEC, $idNivel, $idEstablecimiento, $idRegLaboral, $idTipServidor, $idNumMagist, $idGpoRemunerativo, $idhatEmb, $idCargoOrigen, $idNivelOrigen, $idPalMagist, $idDirEncargo, $codModular, $fecIngAdmPubEmpleado, $fecIngMedEmpleado, $fecCeseEmpleado, $infCompEmpleado, $fecHabEmpleado, $fecDesEmpleado, $fecFallEmpleado, $valPorEmpleado, $fecValEmpleado, $docRefEmpleado, $numSegSaludEmpleado, $eVidaEmpleado, $CUSPPEmpleado, $fecAfiPenEmpleado, $fecDevPenEmpleado, $plazaEmpleado, $tipPlazaEmpleado, $asigInserEmpleado, $diasTrabEmpleado, $numDepEmpleado, $numDecEmpleado, $licDiasEmpleado, $tipServEmpleado, $fecIniLicEmpleado, $insasitEmpleado, $permisosEmpleado, $huelgasEmpleado, $leyMenEmpleado, $leyPerEmpleado, $cadPresupEmpleado, $ctaEmpleado) {
	// 	$objcambiarTabla1 = new cambiarTabla1();
	// 	$objcambiarTabla1->beginTransaction();
	// 	$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
	// 	$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idEmpleado, $idPersona, $idSituacion, $idTipRegistro, $idSegSalud, $idTipoPlanilla, $idCodFiscal, $idAfp, $idCodRegional, $idUniEjecutora, $idNEC, $idNivel, $idEstablecimiento, $idRegLaboral, $idTipServidor, $idNumMagist, $idGpoRemunerativo, $idhatEmb, $idCargoOrigen, $idNivelOrigen, $idPalMagist, $idDirEncargo, $codModular, $fecIngAdmPubEmpleado, $fecIngMedEmpleado, $fecCeseEmpleado, $infCompEmpleado, $fecHabEmpleado, $fecDesEmpleado, $fecFallEmpleado, $valPorEmpleado, $fecValEmpleado, $docRefEmpleado, $numSegSaludEmpleado, $eVidaEmpleado, $CUSPPEmpleado, $fecAfiPenEmpleado, $fecDevPenEmpleado, $plazaEmpleado, $tipPlazaEmpleado, $asigInserEmpleado, $diasTrabEmpleado, $numDepEmpleado, $numDecEmpleado, $licDiasEmpleado, $tipServEmpleado, $fecIniLicEmpleado, $insasitEmpleado, $permisosEmpleado, $huelgasEmpleado, $leyMenEmpleado, $leyPerEmpleado, $cadPresupEmpleado, $ctaEmpleado, $id_Empleado);
	// 	if ($resultado1>0 AND $resultado2>0) {
	// 		cambiarTabla2::commitTransaction();
	// 		$objcambiarTabla1->commitTransaction();
	// 		cambiarTabla2::desconectar();
	// 		$objcambiarTabla1->desconectar();
	// 		return true;
	// 	}else{
	// 		cambiarTabla2::rollbackTransaction();
	// 		$objcambiarTabla1->rollbackTransaction();
	// 		cambiarTabla2::desconectar();
	// 		$objcambiarTabla1->desconectar();
	// 		return false;
	// 	}
	// }
	*/ 
	function agregarEmpleado($idEmpleado, $idPersona, $idSituacion, $idTipRegistro, $idSegSalud, $idTipoPlanilla, $idCodFiscal, $idAfp, $idCodRegional, $idUniEjecutora, $idNEC, $idNivel, $idEstablecimiento, $idRegLaboral, $idTipServidor, $idNumMagist, $idGpoRemunerativo, $idhatEmb, $idCargoOrigen, $idNivelOrigen, $idPalMagist, $idDirEncargo, $codModular, $fecIngAdmPubEmpleado, $fecIngMedEmpleado, $fecCeseEmpleado, $infCompEmpleado, $fecHabEmpleado, $fecDesEmpleado, $fecFallEmpleado, $valPorEmpleado, $fecValEmpleado, $docRefEmpleado, $numSegSaludEmpleado, $eVidaEmpleado, $CUSPPEmpleado, $fecAfiPenEmpleado, $fecDevPenEmpleado, $plazaEmpleado, $tipPlazaEmpleado, $asigInserEmpleado, $diasTrabEmpleado, $numDepEmpleado, $numDecEmpleado, $licDiasEmpleado, $tipServEmpleado, $fecIniLicEmpleado, $insasitEmpleado, $permisosEmpleado, $huelgasEmpleado, $leyMenEmpleado, $leyPerEmpleado, $cadPresupEmpleado, $ctaEmpleado,$preG) {
		$idEmpleado = parent::prepareParam($idEmpleado, Query::DATATYPE_INTEGER);
		$idPersona = parent::prepareParam($idPersona, Query::DATATYPE_INTEGER);
		$idSituacion = parent::prepareParam($idSituacion, Query::DATATYPE_INTEGER);
		$idTipRegistro = parent::prepareParam($idTipRegistro, Query::DATATYPE_INTEGER);
		$idSegSalud = parent::prepareParam($idSegSalud, Query::DATATYPE_INTEGER);
		$idTipoPlanilla = parent::prepareParam($idTipoPlanilla, Query::DATATYPE_INTEGER);
		$idCodFiscal = parent::prepareParam($idCodFiscal, Query::DATATYPE_INTEGER);
		$idAfp = parent::prepareParam($idAfp, Query::DATATYPE_INTEGER);
		$idCodRegional = parent::prepareParam($idCodRegional, Query::DATATYPE_INTEGER);
		$idUniEjecutora = parent::prepareParam($idUniEjecutora, Query::DATATYPE_INTEGER);
		$idNEC = parent::prepareParam($idNEC, Query::DATATYPE_INTEGER);
		$idNivel = parent::prepareParam($idNivel, Query::DATATYPE_INTEGER);
		$idEstablecimiento = parent::prepareParam($idEstablecimiento, Query::DATATYPE_INTEGER);
		$idRegLaboral = parent::prepareParam($idRegLaboral, Query::DATATYPE_INTEGER);
		$idTipServidor = parent::prepareParam($idTipServidor, Query::DATATYPE_INTEGER);
		$idNumMagist = parent::prepareParam($idNumMagist, Query::DATATYPE_INTEGER);
		$idGpoRemunerativo = parent::prepareParam($idGpoRemunerativo, Query::DATATYPE_INTEGER);
		$idhatEmb = parent::prepareParam($idhatEmb, Query::DATATYPE_INTEGER);
		$idCargoOrigen = parent::prepareParam($idCargoOrigen, Query::DATATYPE_INTEGER);
		$idNivelOrigen = parent::prepareParam($idNivelOrigen, Query::DATATYPE_INTEGER);
		$idPalMagist = parent::prepareParam($idPalMagist, Query::DATATYPE_INTEGER);
		$idDirEncargo = parent::prepareParam($idDirEncargo, Query::DATATYPE_INTEGER);
		$codModular = parent::prepareParam($codModular, Query::DATATYPE_STRING, 0);
		$infCompEmpleado = parent::prepareParam($infCompEmpleado, Query::DATATYPE_STRING, 0);
		$valPorEmpleado = parent::prepareParam($valPorEmpleado, Query::DATATYPE_INTEGER);
		$docRefEmpleado = parent::prepareParam($docRefEmpleado, Query::DATATYPE_STRING, 0);
		$numSegSaludEmpleado = parent::prepareParam($numSegSaludEmpleado, Query::DATATYPE_STRING, 0);
		$eVidaEmpleado = parent::prepareParam($eVidaEmpleado, Query::DATATYPE_STRING, 0);
		$CUSPPEmpleado = parent::prepareParam($CUSPPEmpleado, Query::DATATYPE_STRING, 0);
		$plazaEmpleado = parent::prepareParam($plazaEmpleado, Query::DATATYPE_STRING, 0);
		$tipPlazaEmpleado = parent::prepareParam($tipPlazaEmpleado, Query::DATATYPE_STRING, 0);
		$asigInserEmpleado = parent::prepareParam($asigInserEmpleado, Query::DATATYPE_INTEGER);
		$diasTrabEmpleado = parent::prepareParam($diasTrabEmpleado, Query::DATATYPE_INTEGER);
		$numDepEmpleado = parent::prepareParam($numDepEmpleado, Query::DATATYPE_INTEGER);
		$numDecEmpleado = parent::prepareParam($numDecEmpleado, Query::DATATYPE_INTEGER);
		$licDiasEmpleado = parent::prepareParam($licDiasEmpleado, Query::DATATYPE_INTEGER);
		$tipServEmpleado = parent::prepareParam($tipServEmpleado, Query::DATATYPE_INTEGER);
		$insasitEmpleado = parent::prepareParam($insasitEmpleado, Query::DATATYPE_STRING, 0);
		$permisosEmpleado = parent::prepareParam($permisosEmpleado, Query::DATATYPE_STRING, 0);
		$huelgasEmpleado = parent::prepareParam($huelgasEmpleado, Query::DATATYPE_INTEGER);
		$leyMenEmpleado = parent::prepareParam($leyMenEmpleado, Query::DATATYPE_STRING, 0);
		$leyPerEmpleado = parent::prepareParam($leyPerEmpleado, Query::DATATYPE_STRING, 0);
		$cadPresupEmpleado = parent::prepareParam($cadPresupEmpleado, Query::DATATYPE_STRING, 0);
		$ctaEmpleado = parent::prepareParam($ctaEmpleado, Query::DATATYPE_STRING, 0);
		$preG=	parent::prepareParam($preG, Query::DATATYPE_INTEGER);
		$params = array($idEmpleado, $idPersona, $idSituacion, $idTipRegistro, $idSegSalud, $idTipoPlanilla, $idCodFiscal, $idAfp, $idCodRegional, $idUniEjecutora, $idNEC, $idNivel, $idEstablecimiento, $idRegLaboral, $idTipServidor, $idNumMagist, $idGpoRemunerativo, $idhatEmb, $idCargoOrigen, $idNivelOrigen, $idPalMagist, $idDirEncargo, $codModular, $fecIngAdmPubEmpleado, $fecIngMedEmpleado, $fecCeseEmpleado, $infCompEmpleado, $fecHabEmpleado, $fecDesEmpleado, $fecFallEmpleado, $valPorEmpleado, $fecValEmpleado, $docRefEmpleado, $numSegSaludEmpleado, $eVidaEmpleado, $CUSPPEmpleado, $fecAfiPenEmpleado, $fecDevPenEmpleado, $plazaEmpleado, $tipPlazaEmpleado, $asigInserEmpleado, $diasTrabEmpleado, $numDepEmpleado, $numDecEmpleado, $licDiasEmpleado, $tipServEmpleado, $fecIniLicEmpleado, $insasitEmpleado, $permisosEmpleado, $huelgasEmpleado, $leyMenEmpleado, $leyPerEmpleado, $cadPresupEmpleado, $ctaEmpleado,$preG);
		return parent::execute(SQLEmpleado::AGREGAR_EMPLEADO, $params);
	}

	function actualizarEmpleado($idEmpleado, $idPersona, $idSituacion, $idTipRegistro, $idSegSalud, $idTipoPlanilla, $idCodFiscal, $idAfp, $idCodRegional, $idUniEjecutora, $idNEC, $idNivel, $idEstablecimiento, $idRegLaboral, $idTipServidor, $idNumMagist, $idGpoRemunerativo, $idhatEmb, $idCargoOrigen, $idNivelOrigen, $idPalMagist, $idDirEncargo, $codModular, $fecIngAdmPubEmpleado, $fecIngMedEmpleado, $fecCeseEmpleado, $infCompEmpleado, $fecHabEmpleado, $fecDesEmpleado, $fecFallEmpleado, $valPorEmpleado, $fecValEmpleado, $docRefEmpleado, $numSegSaludEmpleado, $eVidaEmpleado, $CUSPPEmpleado, $fecAfiPenEmpleado, $fecDevPenEmpleado, $plazaEmpleado, $tipPlazaEmpleado, $asigInserEmpleado, $diasTrabEmpleado, $numDepEmpleado, $numDecEmpleado, $licDiasEmpleado, $tipServEmpleado, $fecIniLicEmpleado, $insasitEmpleado, $permisosEmpleado, $huelgasEmpleado, $leyMenEmpleado, $leyPerEmpleado, $cadPresupEmpleado, $ctaEmpleado,$preG, $id_Empleado)
	{		
		$idEmpleado = parent::prepareParam($idEmpleado, Query::DATATYPE_INTEGER);
		$idPersona = parent::prepareParam($idPersona, Query::DATATYPE_INTEGER);
		$idSituacion = parent::prepareParam($idSituacion, Query::DATATYPE_INTEGER);
		$idTipRegistro = parent::prepareParam($idTipRegistro, Query::DATATYPE_INTEGER);
		$idSegSalud = parent::prepareParam($idSegSalud, Query::DATATYPE_INTEGER);
		$idTipoPlanilla = parent::prepareParam($idTipoPlanilla, Query::DATATYPE_INTEGER);
		$idCodFiscal = parent::prepareParam($idCodFiscal, Query::DATATYPE_INTEGER);
		$idAfp = parent::prepareParam($idAfp, Query::DATATYPE_INTEGER);
		$idCodRegional = parent::prepareParam($idCodRegional, Query::DATATYPE_INTEGER);
		$idUniEjecutora = parent::prepareParam($idUniEjecutora, Query::DATATYPE_INTEGER);
		$idNEC = parent::prepareParam($idNEC, Query::DATATYPE_INTEGER);
		$idNivel = parent::prepareParam($idNivel, Query::DATATYPE_INTEGER);
		$idEstablecimiento = parent::prepareParam($idEstablecimiento, Query::DATATYPE_INTEGER);
		$idRegLaboral = parent::prepareParam($idRegLaboral, Query::DATATYPE_INTEGER);
		$idTipServidor = parent::prepareParam($idTipServidor, Query::DATATYPE_INTEGER);
		$idNumMagist = parent::prepareParam($idNumMagist, Query::DATATYPE_INTEGER);
		$idGpoRemunerativo = parent::prepareParam($idGpoRemunerativo, Query::DATATYPE_INTEGER);
		$idhatEmb = parent::prepareParam($idhatEmb, Query::DATATYPE_INTEGER);
		$idCargoOrigen = parent::prepareParam($idCargoOrigen, Query::DATATYPE_INTEGER);
		$idNivelOrigen = parent::prepareParam($idNivelOrigen, Query::DATATYPE_INTEGER);
		$idPalMagist = parent::prepareParam($idPalMagist, Query::DATATYPE_INTEGER);
		$idDirEncargo = parent::prepareParam($idDirEncargo, Query::DATATYPE_INTEGER);
		$codModular = parent::prepareParam($codModular, Query::DATATYPE_STRING, 0);
		$infCompEmpleado = parent::prepareParam($infCompEmpleado, Query::DATATYPE_STRING, 0);
		$valPorEmpleado = parent::prepareParam($valPorEmpleado, Query::DATATYPE_INTEGER);
		$docRefEmpleado = parent::prepareParam($docRefEmpleado, Query::DATATYPE_STRING, 0);
		$numSegSaludEmpleado = parent::prepareParam($numSegSaludEmpleado, Query::DATATYPE_STRING, 0);
		$eVidaEmpleado = parent::prepareParam($eVidaEmpleado, Query::DATATYPE_STRING, 0);
		$CUSPPEmpleado = parent::prepareParam($CUSPPEmpleado, Query::DATATYPE_STRING, 0);
		$plazaEmpleado = parent::prepareParam($plazaEmpleado, Query::DATATYPE_STRING, 0);
		$tipPlazaEmpleado = parent::prepareParam($tipPlazaEmpleado, Query::DATATYPE_STRING, 0);
		$asigInserEmpleado = parent::prepareParam($asigInserEmpleado, Query::DATATYPE_INTEGER);
		$diasTrabEmpleado = parent::prepareParam($diasTrabEmpleado, Query::DATATYPE_INTEGER);
		$numDepEmpleado = parent::prepareParam($numDepEmpleado, Query::DATATYPE_INTEGER);
		$numDecEmpleado = parent::prepareParam($numDecEmpleado, Query::DATATYPE_INTEGER);
		$licDiasEmpleado = parent::prepareParam($licDiasEmpleado, Query::DATATYPE_INTEGER);
		$tipServEmpleado = parent::prepareParam($tipServEmpleado, Query::DATATYPE_INTEGER);
		$insasitEmpleado = parent::prepareParam($insasitEmpleado, Query::DATATYPE_STRING, 0);
		$permisosEmpleado = parent::prepareParam($permisosEmpleado, Query::DATATYPE_STRING, 0);
		$huelgasEmpleado = parent::prepareParam($huelgasEmpleado, Query::DATATYPE_INTEGER);
		$leyMenEmpleado = parent::prepareParam($leyMenEmpleado, Query::DATATYPE_STRING, 0);
		$leyPerEmpleado = parent::prepareParam($leyPerEmpleado, Query::DATATYPE_STRING, 0);
		$cadPresupEmpleado = parent::prepareParam($cadPresupEmpleado, Query::DATATYPE_STRING, 0);
		$ctaEmpleado = parent::prepareParam($ctaEmpleado, Query::DATATYPE_STRING, 0);
		$preG=	parent::prepareParam($preG, Query::DATATYPE_INTEGER);
		
		$params = array($idEmpleado, $idPersona, $idSituacion, $idTipRegistro, $idSegSalud, $idTipoPlanilla, $idCodFiscal, $idAfp, $idCodRegional, $idUniEjecutora, $idNEC, $idNivel, $idEstablecimiento, $idRegLaboral, $idTipServidor, $idNumMagist, $idGpoRemunerativo, $idhatEmb, $idCargoOrigen, $idNivelOrigen, $idPalMagist, $idDirEncargo, $codModular, $fecIngAdmPubEmpleado, $fecIngMedEmpleado, $fecCeseEmpleado, $infCompEmpleado, $fecHabEmpleado, $fecDesEmpleado, $fecFallEmpleado, $valPorEmpleado, $fecValEmpleado, $docRefEmpleado, $numSegSaludEmpleado, $eVidaEmpleado, $CUSPPEmpleado, $fecAfiPenEmpleado, $fecDevPenEmpleado, $plazaEmpleado, $tipPlazaEmpleado, $asigInserEmpleado, $diasTrabEmpleado, $numDepEmpleado, $numDecEmpleado, $licDiasEmpleado, $tipServEmpleado, $fecIniLicEmpleado, $insasitEmpleado, $permisosEmpleado, $huelgasEmpleado, $leyMenEmpleado, $leyPerEmpleado, $cadPresupEmpleado, $ctaEmpleado,$preG, $id_Empleado);
		return parent::execute(SQLEmpleado::ACTUALIZAR_EMPLEADO, $params);		
	}

	function actualizarcodModularEmpleado($codModular,$idEmpleado){
		
		$idEmpleado = parent::prepareParam($idEmpleado, Query::DATATYPE_INTEGER);
		$codModular = parent::prepareParam($codModular, Query::DATATYPE_STRING);
		$params = array($codModular,$idEmpleado  );
		return parent::execute(SQLEmpleado::ACTUALIZAR_EMPLEADO_CODMODULAR, $params);		
	
	}
	
	function consultarEmpleado(){	
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO);
	}	
	function consultarEmpleadoGrid(){	
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_GRID);
	}
	function consultarEmpleadoGridXid($idEmpleado){	
		$params = array($idEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_GRID_X_ID,$params);
	}	
	function eliminarEmpleado($id_Empleado){
		$params = array($id_Empleado);
		return parent::execute(SQLEmpleado::ELIMINAR_EMPLEADO, $params);		
	}
	
	//------------------------------	
	function consultarEmpleadoXidEmpleado($idEmpleado){	
		$params = array($idEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDEMPLEADO, $params);
	}
	function consultarEmpleadoXidEmpleadoedi($idEmpleado){	
		$params = array($idEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_GRID_X_ID, $params);
	}		

	function consultarEmpleadoXidEmpleadoUltimoId(){	
		
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_GRID_X_ID_TOP);
	}	
	
	function existeEmpleadoXidEmpleado($idEmpleado){
		$params = array($idEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDEMPLEADO, $params);
		if ($tabla >0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidPersona($idPersona){	
		$params = array($idPersona);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDPERSONA, $params);
	}	
	
	function existeEmpleadoXidPersona($idPersona){
		$params = array($idPersona);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidSituacion($idSituacion){	
		$params = array($idSituacion);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDSITUACION, $params);
	}	
	
	function consultarEmpleadoXDni($dniPersona){	
		$params = array($dniPersona);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_DNI, $params);
	}	
	function existeEmpleadoXidSituacion($idSituacion){
		$params = array($idSituacion);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDSITUACION, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidTipRegistro($idTipRegistro){	
		$params = array($idTipRegistro);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDTIPREGISTRO, $params);
	}	
	
	function existeEmpleadoXidTipRegistro($idTipRegistro){
		$params = array($idTipRegistro);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDTIPREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidSegSalud($idSegSalud){	
		$params = array($idSegSalud);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDSEGSALUD, $params);
	}	
	
	function existeEmpleadoXidSegSalud($idSegSalud){
		$params = array($idSegSalud);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDSEGSALUD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidTipoPlanilla($idTipoPlanilla){	
		$params = array($idTipoPlanilla);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDTIPOPLANILLA, $params);
	}	
	
	function existeEmpleadoXidTipoPlanilla($idTipoPlanilla){
		$params = array($idTipoPlanilla);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDTIPOPLANILLA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidCodFiscal($idCodFiscal){	
		$params = array($idCodFiscal);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDCODFISCAL, $params);
	}	
	
	function existeEmpleadoXidCodFiscal($idCodFiscal){
		$params = array($idCodFiscal);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDCODFISCAL, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidAfp($idAfp){	
		$params = array($idAfp);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDAFP, $params);
	}	
	
	function existeEmpleadoXidAfp($idAfp){
		$params = array($idAfp);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDAFP, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidCodRegional($idCodRegional){	
		$params = array($idCodRegional);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDCODREGIONAL, $params);
	}	
	
	function existeEmpleadoXidCodRegional($idCodRegional){
		$params = array($idCodRegional);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDCODREGIONAL, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidUniEjecutora($idUniEjecutora){	
		$params = array($idUniEjecutora);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDUNIEJECUTORA, $params);
	}	
	
	function existeEmpleadoXidUniEjecutora($idUniEjecutora){
		$params = array($idUniEjecutora);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDUNIEJECUTORA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidNEC($idNEC){	
		$params = array($idNEC);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDNEC, $params);
	}	
	
	function existeEmpleadoXidNEC($idNEC){
		$params = array($idNEC);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDNEC, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidNivel($idNivel){	
		$params = array($idNivel);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDNIVEL, $params);
	}	
	
	function existeEmpleadoXidNivel($idNivel){
		$params = array($idNivel);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDNIVEL, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidEstablecimiento($idEstablecimiento){	
		$params = array($idEstablecimiento);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDESTABLECIMIENTO, $params);
	}	
	
	function existeEmpleadoXidEstablecimiento($idEstablecimiento){
		$params = array($idEstablecimiento);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDESTABLECIMIENTO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidRegLaboral($idRegLaboral){	
		$params = array($idRegLaboral);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDREGLABORAL, $params);
	}	
	
	function existeEmpleadoXidRegLaboral($idRegLaboral){
		$params = array($idRegLaboral);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDREGLABORAL, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidTipServidor($idTipServidor){	
		$params = array($idTipServidor);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDTIPSERVIDOR, $params);
	}	
	
	function existeEmpleadoXidTipServidor($idTipServidor){
		$params = array($idTipServidor);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDTIPSERVIDOR, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidNumMagist($idNumMagist){	
		$params = array($idNumMagist);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDNUMMAGIST, $params);
	}	
	
	function existeEmpleadoXidNumMagist($idNumMagist){
		$params = array($idNumMagist);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDNUMMAGIST, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidGpoRemunerativo($idGpoRemunerativo){	
		$params = array($idGpoRemunerativo);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDGPOREMUNERATIVO, $params);
	}	
	
	function existeEmpleadoXidGpoRemunerativo($idGpoRemunerativo){
		$params = array($idGpoRemunerativo);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDGPOREMUNERATIVO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidhatEmb($idhatEmb){	
		$params = array($idhatEmb);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDHATEMB, $params);
	}	
	
	function existeEmpleadoXidhatEmb($idhatEmb){
		$params = array($idhatEmb);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDHATEMB, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidCargoOrigen($idCargoOrigen){	
		$params = array($idCargoOrigen);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDCARGOORIGEN, $params);
	}	
	
	function existeEmpleadoXidCargoOrigen($idCargoOrigen){
		$params = array($idCargoOrigen);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDCARGOORIGEN, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidNivelOrigen($idNivelOrigen){	
		$params = array($idNivelOrigen);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDNIVELORIGEN, $params);
	}	
	
	function existeEmpleadoXidNivelOrigen($idNivelOrigen){
		$params = array($idNivelOrigen);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDNIVELORIGEN, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidPalMagist($idPalMagist){	
		$params = array($idPalMagist);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDPALMAGIST, $params);
	}	
	
	function existeEmpleadoXidPalMagist($idPalMagist){
		$params = array($idPalMagist);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDPALMAGIST, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidDirEncargo($idDirEncargo){	
		$params = array($idDirEncargo);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDDIRENCARGO, $params);
	}	
	
	function existeEmpleadoXidDirEncargo($idDirEncargo){
		$params = array($idDirEncargo);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDDIRENCARGO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXcodModular($codModular){	
		$params = array("%$codModular%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_CODMODULAR, $params);
	}	
	
	function consultarEmpleadoXcodModularAprox($codModular){	
		$params = array("%$codModular%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_CODMODULAR_APROX, $params);
	}	
	
	function existeEmpleadoXcodModular($codModular){
		$params = array($codModular);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_CODMODULAR, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXfecIngAdmPubEmpleado($fecIngAdmPubEmpleado){	
		$params = array($fecIngAdmPubEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_FECINGADMPUBEMPLEADO, $params);
	}	
	
	function existeEmpleadoXfecIngAdmPubEmpleado($fecIngAdmPubEmpleado){
		$params = array($fecIngAdmPubEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_FECINGADMPUBEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXfecIngMedEmpleado($fecIngMedEmpleado){	
		$params = array($fecIngMedEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_FECINGMEDEMPLEADO, $params);
	}	
	
	function existeEmpleadoXfecIngMedEmpleado($fecIngMedEmpleado){
		$params = array($fecIngMedEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_FECINGMEDEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXfecCeseEmpleado($fecCeseEmpleado){	
		$params = array($fecCeseEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_FECCESEEMPLEADO, $params);
	}	
	
	function existeEmpleadoXfecCeseEmpleado($fecCeseEmpleado){
		$params = array($fecCeseEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_FECCESEEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXinfCompEmpleado($infCompEmpleado){	
		$params = array("%$infCompEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_INFCOMPEMPLEADO, $params);
	}	
	
	function consultarEmpleadoXinfCompEmpleadoAprox($infCompEmpleado){	
		$params = array("%$infCompEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_INFCOMPEMPLEADO_APROX, $params);
	}	
	
	function existeEmpleadoXinfCompEmpleado($infCompEmpleado){
		$params = array($infCompEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_INFCOMPEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXfecHabEmpleado($fecHabEmpleado){	
		$params = array($fecHabEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_FECHABEMPLEADO, $params);
	}	
	
	function existeEmpleadoXfecHabEmpleado($fecHabEmpleado){
		$params = array($fecHabEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_FECHABEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXfecDesEmpleado($fecDesEmpleado){	
		$params = array($fecDesEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_FECDESEMPLEADO, $params);
	}	
	
	function existeEmpleadoXfecDesEmpleado($fecDesEmpleado){
		$params = array($fecDesEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_FECDESEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXfecFallEmpleado($fecFallEmpleado){	
		$params = array($fecFallEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_FECFALLEMPLEADO, $params);
	}	
	
	function existeEmpleadoXfecFallEmpleado($fecFallEmpleado){
		$params = array($fecFallEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_FECFALLEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXvalPorEmpleado($valPorEmpleado){	
		$params = array($valPorEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_VALPOREMPLEADO, $params);
	}	
	
	function existeEmpleadoXvalPorEmpleado($valPorEmpleado){
		$params = array($valPorEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_VALPOREMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXfecValEmpleado($fecValEmpleado){	
		$params = array($fecValEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_FECVALEMPLEADO, $params);
	}	
	
	function existeEmpleadoXfecValEmpleado($fecValEmpleado){
		$params = array($fecValEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_FECVALEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXdocRefEmpleado($docRefEmpleado){	
		$params = array("%$docRefEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_DOCREFEMPLEADO, $params);
	}	
	
	function consultarEmpleadoXdocRefEmpleadoAprox($docRefEmpleado){	
		$params = array("%$docRefEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_DOCREFEMPLEADO_APROX, $params);
	}	
	
	function existeEmpleadoXdocRefEmpleado($docRefEmpleado){
		$params = array($docRefEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_DOCREFEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXnumSegSaludEmpleado($numSegSaludEmpleado){	
		$params = array("%$numSegSaludEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_NUMSEGSALUDEMPLEADO, $params);
	}	
	
	function consultarEmpleadoXnumSegSaludEmpleadoAprox($numSegSaludEmpleado){	
		$params = array("%$numSegSaludEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_NUMSEGSALUDEMPLEADO_APROX, $params);
	}	
	
	function existeEmpleadoXnumSegSaludEmpleado($numSegSaludEmpleado){
		$params = array($numSegSaludEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_NUMSEGSALUDEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXeVidaEmpleado($eVidaEmpleado){	
		$params = array("%$eVidaEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_EVIDAEMPLEADO, $params);
	}	
	
	function consultarEmpleadoXeVidaEmpleadoAprox($eVidaEmpleado){	
		$params = array("%$eVidaEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_EVIDAEMPLEADO_APROX, $params);
	}	
	
	function existeEmpleadoXeVidaEmpleado($eVidaEmpleado){
		$params = array($eVidaEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_EVIDAEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXCUSPPEmpleado($CUSPPEmpleado){	
		$params = array("%$CUSPPEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_CUSPPEMPLEADO, $params);
	}	
	
	function consultarEmpleadoXCUSPPEmpleadoAprox($CUSPPEmpleado){	
		$params = array("%$CUSPPEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_CUSPPEMPLEADO_APROX, $params);
	}	
	
	function existeEmpleadoXCUSPPEmpleado($CUSPPEmpleado){
		$params = array($CUSPPEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_CUSPPEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXfecAfiPenEmpleado($fecAfiPenEmpleado){	
		$params = array($fecAfiPenEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_FECAFIPENEMPLEADO, $params);
	}	
	
	function existeEmpleadoXfecAfiPenEmpleado($fecAfiPenEmpleado){
		$params = array($fecAfiPenEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_FECAFIPENEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXfecDevPenEmpleado($fecDevPenEmpleado){	
		$params = array($fecDevPenEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_FECDEVPENEMPLEADO, $params);
	}	
	
	function existeEmpleadoXfecDevPenEmpleado($fecDevPenEmpleado){
		$params = array($fecDevPenEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_FECDEVPENEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXplazaEmpleado($plazaEmpleado){	
		$params = array("%$plazaEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_PLAZAEMPLEADO, $params);
	}	
	
	function consultarEmpleadoXplazaEmpleadoAprox($plazaEmpleado){	
		$params = array("%$plazaEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_PLAZAEMPLEADO_APROX, $params);
	}	
	
	function existeEmpleadoXplazaEmpleado($plazaEmpleado){
		$params = array($plazaEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_PLAZAEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXtipPlazaEmpleado($tipPlazaEmpleado){	
		$params = array("%$tipPlazaEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_TIPPLAZAEMPLEADO, $params);
	}	
	
	function consultarEmpleadoXtipPlazaEmpleadoAprox($tipPlazaEmpleado){	
		$params = array("%$tipPlazaEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_TIPPLAZAEMPLEADO_APROX, $params);
	}	
	
	function existeEmpleadoXtipPlazaEmpleado($tipPlazaEmpleado){
		$params = array($tipPlazaEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_TIPPLAZAEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXasigInserEmpleado($asigInserEmpleado){	
		$params = array($asigInserEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_ASIGINSEREMPLEADO, $params);
	}	
	
	function existeEmpleadoXasigInserEmpleado($asigInserEmpleado){
		$params = array($asigInserEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_ASIGINSEREMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXdiasTrabEmpleado($diasTrabEmpleado){	
		$params = array($diasTrabEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_DIASTRABEMPLEADO, $params);
	}	
	
	function existeEmpleadoXdiasTrabEmpleado($diasTrabEmpleado){
		$params = array($diasTrabEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_DIASTRABEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXnumDepEmpleado($numDepEmpleado){	
		$params = array($numDepEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_NUMDEPEMPLEADO, $params);
	}	
	
	function existeEmpleadoXnumDepEmpleado($numDepEmpleado){
		$params = array($numDepEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_NUMDEPEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXnumDecEmpleado($numDecEmpleado){	
		$params = array($numDecEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_NUMDECEMPLEADO, $params);
	}	
	
	function existeEmpleadoXnumDecEmpleado($numDecEmpleado){
		$params = array($numDecEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_NUMDECEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXlicDiasEmpleado($licDiasEmpleado){	
		$params = array($licDiasEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_LICDIASEMPLEADO, $params);
	}	
	
	function existeEmpleadoXlicDiasEmpleado($licDiasEmpleado){
		$params = array($licDiasEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_LICDIASEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXtipServEmpleado($tipServEmpleado){	
		$params = array($tipServEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_TIPSERVEMPLEADO, $params);
	}	
	
	function existeEmpleadoXtipServEmpleado($tipServEmpleado){
		$params = array($tipServEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_TIPSERVEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXfecIniLicEmpleado($fecIniLicEmpleado){	
		$params = array($fecIniLicEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_FECINILICEMPLEADO, $params);
	}	
	
	function existeEmpleadoXfecIniLicEmpleado($fecIniLicEmpleado){
		$params = array($fecIniLicEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_FECINILICEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXinsasitEmpleado($insasitEmpleado){	
		$params = array("%$insasitEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_INSASITEMPLEADO, $params);
	}	
	
	function consultarEmpleadoXinsasitEmpleadoAprox($insasitEmpleado){	
		$params = array("%$insasitEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_INSASITEMPLEADO_APROX, $params);
	}	
	
	function existeEmpleadoXinsasitEmpleado($insasitEmpleado){
		$params = array($insasitEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_INSASITEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXpermisosEmpleado($permisosEmpleado){	
		$params = array("%$permisosEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_PERMISOSEMPLEADO, $params);
	}	
	
	function consultarEmpleadoXpermisosEmpleadoAprox($permisosEmpleado){	
		$params = array("%$permisosEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_PERMISOSEMPLEADO_APROX, $params);
	}	
	
	function existeEmpleadoXpermisosEmpleado($permisosEmpleado){
		$params = array($permisosEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_PERMISOSEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXhuelgasEmpleado($huelgasEmpleado){	
		$params = array($huelgasEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_HUELGASEMPLEADO, $params);
	}	
	
	function existeEmpleadoXhuelgasEmpleado($huelgasEmpleado){
		$params = array($huelgasEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_HUELGASEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXleyMenEmpleado($leyMenEmpleado){	
		$params = array("%$leyMenEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_LEYMENEMPLEADO, $params);
	}	
	
	function consultarEmpleadoXleyMenEmpleadoAprox($leyMenEmpleado){	
		$params = array("%$leyMenEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_LEYMENEMPLEADO_APROX, $params);
	}	
	
	function existeEmpleadoXleyMenEmpleado($leyMenEmpleado){
		$params = array($leyMenEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_LEYMENEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXleyPerEmpleado($leyPerEmpleado){	
		$params = array("%$leyPerEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_LEYPEREMPLEADO, $params);
	}	
	
	function consultarEmpleadoXleyPerEmpleadoAprox($leyPerEmpleado){	
		$params = array("%$leyPerEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_LEYPEREMPLEADO_APROX, $params);
	}	
	
	function existeEmpleadoXleyPerEmpleado($leyPerEmpleado){
		$params = array($leyPerEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_LEYPEREMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXcadPresupEmpleado($cadPresupEmpleado){	
		$params = array("%$cadPresupEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_CADPRESUPEMPLEADO, $params);
	}	
	
	function consultarEmpleadoXcadPresupEmpleadoAprox($cadPresupEmpleado){	
		$params = array("%$cadPresupEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_CADPRESUPEMPLEADO_APROX, $params);
	}	
	
	function existeEmpleadoXcadPresupEmpleado($cadPresupEmpleado){
		$params = array($cadPresupEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_CADPRESUPEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXctaEmpleado($ctaEmpleado){	
		$params = array("%$ctaEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_CTAEMPLEADO, $params);
	}	
	
	function consultarEmpleadoXctaEmpleadoAprox($ctaEmpleado){	
		$params = array("%$ctaEmpleado%");
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_CTAEMPLEADO_APROX, $params);
	}	
	
	function existeEmpleadoXctaEmpleado($ctaEmpleado){
		$params = array($ctaEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_CTAEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	


	function consultarEmpleadoXparam($campBusq)
    {
        //         echo "[$campBusq]";
        $matCampBusq = explode(':', $campBusq);
         
        if ($matCampBusq[0]==1) {
            $params = array(
               '%'.$matCampBusq[1].'%'
            );
            
            return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_GRID_DNI, $params);
        }
		if($matCampBusq[0]==2){
			$params = array(
				'%'.$matCampBusq[2].'%',
				'%'.$matCampBusq[2].'%',
				'%'.$matCampBusq[2].'%',
				'%'.$matCampBusq[2].'%'

			 );
			return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_GRID_NOMBRE, $params);

		}

		if($matCampBusq[0]==3){
			$params = array(
				$matCampBusq[3]

			 );
			return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_GRID_SITUACION, $params);

		}
        //  
        //         return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANPENS_POR_DNI, $params);
    }
//------------------------------	

 //INICIO COMBOS 

 //FIN COMBOS 
}
?>