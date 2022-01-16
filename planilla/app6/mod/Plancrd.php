<?php 
require_once('../../../config/config.php');
require_once(MOD.'PlanCrd.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLPlanCrd.php');

class PlanCrd extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idPlanCrd, $ape1PlanCrd, $ape2PlanCrd, $nom1PlanCrd, $nacPlanCrd, $dniPlanCrd, $fecIngPlanCrd, $eraDocPlanCrd, $incDespPlanCrd, $gdoAcadPlanCrd, $mencPlanCrd, $univMayGPlanCrd, $paisPlanCrd, $preGPlanCrd, $maePlanCrd, $docPlanCrd, $sedesClasesPlanCrd, $catDocPlanCrd, $dedDocPlanCrd, $clasesPlanCrd, $otrasActPlanCrd, $totHorSemPlanCrd, $rzaInvPlanCrd, $enDinaPlanCrd, $perAcadPlanCrd, $comPlanCrd) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idPlanCrd, $ape1PlanCrd, $ape2PlanCrd, $nom1PlanCrd, $nacPlanCrd, $dniPlanCrd, $fecIngPlanCrd, $eraDocPlanCrd, $incDespPlanCrd, $gdoAcadPlanCrd, $mencPlanCrd, $univMayGPlanCrd, $paisPlanCrd, $preGPlanCrd, $maePlanCrd, $docPlanCrd, $sedesClasesPlanCrd, $catDocPlanCrd, $dedDocPlanCrd, $clasesPlanCrd, $otrasActPlanCrd, $totHorSemPlanCrd, $rzaInvPlanCrd, $enDinaPlanCrd, $perAcadPlanCrd, $comPlanCrd, $id_PlanCrd);
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
	function compActualizarcambiarTabla1cambiarTabla2($idPlanCrd, $ape1PlanCrd, $ape2PlanCrd, $nom1PlanCrd, $nacPlanCrd, $dniPlanCrd, $fecIngPlanCrd, $eraDocPlanCrd, $incDespPlanCrd, $gdoAcadPlanCrd, $mencPlanCrd, $univMayGPlanCrd, $paisPlanCrd, $preGPlanCrd, $maePlanCrd, $docPlanCrd, $sedesClasesPlanCrd, $catDocPlanCrd, $dedDocPlanCrd, $clasesPlanCrd, $otrasActPlanCrd, $totHorSemPlanCrd, $rzaInvPlanCrd, $enDinaPlanCrd, $perAcadPlanCrd, $comPlanCrd) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idPlanCrd, $ape1PlanCrd, $ape2PlanCrd, $nom1PlanCrd, $nacPlanCrd, $dniPlanCrd, $fecIngPlanCrd, $eraDocPlanCrd, $incDespPlanCrd, $gdoAcadPlanCrd, $mencPlanCrd, $univMayGPlanCrd, $paisPlanCrd, $preGPlanCrd, $maePlanCrd, $docPlanCrd, $sedesClasesPlanCrd, $catDocPlanCrd, $dedDocPlanCrd, $clasesPlanCrd, $otrasActPlanCrd, $totHorSemPlanCrd, $rzaInvPlanCrd, $enDinaPlanCrd, $perAcadPlanCrd, $comPlanCrd, $id_PlanCrd);
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
	function agregarPlanCrd($idPlanCrd, $ape1PlanCrd, $ape2PlanCrd, $nom1PlanCrd, $nacPlanCrd, $dniPlanCrd, $fecIngPlanCrd, $eraDocPlanCrd, $incDespPlanCrd, $gdoAcadPlanCrd, $mencPlanCrd, $univMayGPlanCrd, $paisPlanCrd, $preGPlanCrd, $maePlanCrd, $docPlanCrd, $sedesClasesPlanCrd, $catDocPlanCrd, $dedDocPlanCrd, $clasesPlanCrd, $otrasActPlanCrd, $totHorSemPlanCrd, $rzaInvPlanCrd, $enDinaPlanCrd, $perAcadPlanCrd, $comPlanCrd) {
$idPlanCrd = parent::prepareParam($idPlanCrd, Query::DATATYPE_INTEGER);
$ape1PlanCrd = parent::prepareParam($ape1PlanCrd, Query::DATATYPE_STRING, 0);
$ape2PlanCrd = parent::prepareParam($ape2PlanCrd, Query::DATATYPE_STRING, 0);
$nom1PlanCrd = parent::prepareParam($nom1PlanCrd, Query::DATATYPE_STRING, 0);
$nacPlanCrd = parent::prepareParam($nacPlanCrd, Query::DATATYPE_STRING, 0);
$dniPlanCrd = parent::prepareParam($dniPlanCrd, Query::DATATYPE_STRING, 0);
$fecIngPlanCrd = parent::prepareParam($fecIngPlanCrd, Query::DATATYPE_STRING, 0);
$eraDocPlanCrd = parent::prepareParam($eraDocPlanCrd, Query::DATATYPE_STRING, 0);
$incDespPlanCrd = parent::prepareParam($incDespPlanCrd, Query::DATATYPE_STRING, 0);
$gdoAcadPlanCrd = parent::prepareParam($gdoAcadPlanCrd, Query::DATATYPE_STRING, 0);
$mencPlanCrd = parent::prepareParam($mencPlanCrd, Query::DATATYPE_STRING, 0);
$univMayGPlanCrd = parent::prepareParam($univMayGPlanCrd, Query::DATATYPE_STRING, 0);
$paisPlanCrd = parent::prepareParam($paisPlanCrd, Query::DATATYPE_STRING, 0);
$preGPlanCrd = parent::prepareParam($preGPlanCrd, Query::DATATYPE_STRING, 0);
$maePlanCrd = parent::prepareParam($maePlanCrd, Query::DATATYPE_STRING, 0);
$docPlanCrd = parent::prepareParam($docPlanCrd, Query::DATATYPE_STRING, 0);
$sedesClasesPlanCrd = parent::prepareParam($sedesClasesPlanCrd, Query::DATATYPE_STRING, 0);
$catDocPlanCrd = parent::prepareParam($catDocPlanCrd, Query::DATATYPE_STRING, 0);
$dedDocPlanCrd = parent::prepareParam($dedDocPlanCrd, Query::DATATYPE_STRING, 0);
$clasesPlanCrd = parent::prepareParam($clasesPlanCrd, Query::DATATYPE_STRING, 0);
$otrasActPlanCrd = parent::prepareParam($otrasActPlanCrd, Query::DATATYPE_STRING, 0);
$totHorSemPlanCrd = parent::prepareParam($totHorSemPlanCrd, Query::DATATYPE_STRING, 0);
$rzaInvPlanCrd = parent::prepareParam($rzaInvPlanCrd, Query::DATATYPE_STRING, 0);
$enDinaPlanCrd = parent::prepareParam($enDinaPlanCrd, Query::DATATYPE_STRING, 0);
$perAcadPlanCrd = parent::prepareParam($perAcadPlanCrd, Query::DATATYPE_STRING, 0);
$comPlanCrd = parent::prepareParam($comPlanCrd, Query::DATATYPE_STRING, 0);
		
		$params = array($idPlanCrd, $ape1PlanCrd, $ape2PlanCrd, $nom1PlanCrd, $nacPlanCrd, $dniPlanCrd, $fecIngPlanCrd, $eraDocPlanCrd, $incDespPlanCrd, $gdoAcadPlanCrd, $mencPlanCrd, $univMayGPlanCrd, $paisPlanCrd, $preGPlanCrd, $maePlanCrd, $docPlanCrd, $sedesClasesPlanCrd, $catDocPlanCrd, $dedDocPlanCrd, $clasesPlanCrd, $otrasActPlanCrd, $totHorSemPlanCrd, $rzaInvPlanCrd, $enDinaPlanCrd, $perAcadPlanCrd, $comPlanCrd);
		return parent::execute(SQLPlanCrd::AGREGAR_PLANCRD, $params);
	}

	function actualizarPlanCrd($idPlanCrd, $ape1PlanCrd, $ape2PlanCrd, $nom1PlanCrd, $nacPlanCrd, $dniPlanCrd, $fecIngPlanCrd, $eraDocPlanCrd, $incDespPlanCrd, $gdoAcadPlanCrd, $mencPlanCrd, $univMayGPlanCrd, $paisPlanCrd, $preGPlanCrd, $maePlanCrd, $docPlanCrd, $sedesClasesPlanCrd, $catDocPlanCrd, $dedDocPlanCrd, $clasesPlanCrd, $otrasActPlanCrd, $totHorSemPlanCrd, $rzaInvPlanCrd, $enDinaPlanCrd, $perAcadPlanCrd, $comPlanCrd, $id_PlanCrd){
		
$idPlanCrd = parent::prepareParam($idPlanCrd, Query::DATATYPE_INTEGER);
$ape1PlanCrd = parent::prepareParam($ape1PlanCrd, Query::DATATYPE_STRING, 0);
$ape2PlanCrd = parent::prepareParam($ape2PlanCrd, Query::DATATYPE_STRING, 0);
$nom1PlanCrd = parent::prepareParam($nom1PlanCrd, Query::DATATYPE_STRING, 0);
$nacPlanCrd = parent::prepareParam($nacPlanCrd, Query::DATATYPE_STRING, 0);
$dniPlanCrd = parent::prepareParam($dniPlanCrd, Query::DATATYPE_STRING, 0);
$fecIngPlanCrd = parent::prepareParam($fecIngPlanCrd, Query::DATATYPE_STRING, 0);
$eraDocPlanCrd = parent::prepareParam($eraDocPlanCrd, Query::DATATYPE_STRING, 0);
$incDespPlanCrd = parent::prepareParam($incDespPlanCrd, Query::DATATYPE_STRING, 0);
$gdoAcadPlanCrd = parent::prepareParam($gdoAcadPlanCrd, Query::DATATYPE_STRING, 0);
$mencPlanCrd = parent::prepareParam($mencPlanCrd, Query::DATATYPE_STRING, 0);
$univMayGPlanCrd = parent::prepareParam($univMayGPlanCrd, Query::DATATYPE_STRING, 0);
$paisPlanCrd = parent::prepareParam($paisPlanCrd, Query::DATATYPE_STRING, 0);
$preGPlanCrd = parent::prepareParam($preGPlanCrd, Query::DATATYPE_STRING, 0);
$maePlanCrd = parent::prepareParam($maePlanCrd, Query::DATATYPE_STRING, 0);
$docPlanCrd = parent::prepareParam($docPlanCrd, Query::DATATYPE_STRING, 0);
$sedesClasesPlanCrd = parent::prepareParam($sedesClasesPlanCrd, Query::DATATYPE_STRING, 0);
$catDocPlanCrd = parent::prepareParam($catDocPlanCrd, Query::DATATYPE_STRING, 0);
$dedDocPlanCrd = parent::prepareParam($dedDocPlanCrd, Query::DATATYPE_STRING, 0);
$clasesPlanCrd = parent::prepareParam($clasesPlanCrd, Query::DATATYPE_STRING, 0);
$otrasActPlanCrd = parent::prepareParam($otrasActPlanCrd, Query::DATATYPE_STRING, 0);
$totHorSemPlanCrd = parent::prepareParam($totHorSemPlanCrd, Query::DATATYPE_STRING, 0);
$rzaInvPlanCrd = parent::prepareParam($rzaInvPlanCrd, Query::DATATYPE_STRING, 0);
$enDinaPlanCrd = parent::prepareParam($enDinaPlanCrd, Query::DATATYPE_STRING, 0);
$perAcadPlanCrd = parent::prepareParam($perAcadPlanCrd, Query::DATATYPE_STRING, 0);
$comPlanCrd = parent::prepareParam($comPlanCrd, Query::DATATYPE_STRING, 0);

		
		$params = array($idPlanCrd, $ape1PlanCrd, $ape2PlanCrd, $nom1PlanCrd, $nacPlanCrd, $dniPlanCrd, $fecIngPlanCrd, $eraDocPlanCrd, $incDespPlanCrd, $gdoAcadPlanCrd, $mencPlanCrd, $univMayGPlanCrd, $paisPlanCrd, $preGPlanCrd, $maePlanCrd, $docPlanCrd, $sedesClasesPlanCrd, $catDocPlanCrd, $dedDocPlanCrd, $clasesPlanCrd, $otrasActPlanCrd, $totHorSemPlanCrd, $rzaInvPlanCrd, $enDinaPlanCrd, $perAcadPlanCrd, $comPlanCrd, $id_PlanCrd);
		return parent::execute(SQLPlanCrd::ACTUALIZAR_PLANCRD, $params);		
	}
	
	
	function consultarPlanCrd(){	
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD);
	}	
	
	function eliminarPlanCrd($id_PlanCrd){
		$params = array($id_PlanCrd);
		return parent::execute(SQLPlanCrd::ELIMINAR_PLANCRD, $params);		
	}
	
//------------------------------	
	function consultarPlanCrdXidPlanCrd($idPlanCrd){	
		$params = array($idPlanCrd);
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_IDPLANCRD, $params);
	}	
	
	function existePlanCrdXidPlanCrd($idPlanCrd){
		$params = array($idPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_IDPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXape1PlanCrd($ape1PlanCrd){	
		$params = array("%$ape1PlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_APE1PLANCRD, $params);
	}	
	
	function consultarPlanCrdXape1PlanCrdAprox($ape1PlanCrd){	
		$params = array("%$ape1PlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_APE1PLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXape1PlanCrd($ape1PlanCrd){
		$params = array($ape1PlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_APE1PLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXape2PlanCrd($ape2PlanCrd){	
		$params = array("%$ape2PlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_APE2PLANCRD, $params);
	}	
	
	function consultarPlanCrdXape2PlanCrdAprox($ape2PlanCrd){	
		$params = array("%$ape2PlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_APE2PLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXape2PlanCrd($ape2PlanCrd){
		$params = array($ape2PlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_APE2PLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXnom1PlanCrd($nom1PlanCrd){	
		$params = array("%$nom1PlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_NOM1PLANCRD, $params);
	}	
	
	function consultarPlanCrdXnom1PlanCrdAprox($nom1PlanCrd){	
		$params = array("%$nom1PlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_NOM1PLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXnom1PlanCrd($nom1PlanCrd){
		$params = array($nom1PlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_NOM1PLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXnacPlanCrd($nacPlanCrd){	
		$params = array("%$nacPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_NACPLANCRD, $params);
	}	
	
	function consultarPlanCrdXnacPlanCrdAprox($nacPlanCrd){	
		$params = array("%$nacPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_NACPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXnacPlanCrd($nacPlanCrd){
		$params = array($nacPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_NACPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXdniPlanCrd($dniPlanCrd){	
		$params = array("%$dniPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_DNIPLANCRD, $params);
	}	
	
	function consultarPlanCrdXdniPlanCrdAprox($dniPlanCrd){	
		$params = array("%$dniPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_DNIPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXdniPlanCrd($dniPlanCrd){
		$params = array($dniPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_DNIPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXfecIngPlanCrd($fecIngPlanCrd){	
		$params = array("%$fecIngPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_FECINGPLANCRD, $params);
	}	
	
	function consultarPlanCrdXfecIngPlanCrdAprox($fecIngPlanCrd){	
		$params = array("%$fecIngPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_FECINGPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXfecIngPlanCrd($fecIngPlanCrd){
		$params = array($fecIngPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_FECINGPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXeraDocPlanCrd($eraDocPlanCrd){	
		$params = array("%$eraDocPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_ERADOCPLANCRD, $params);
	}	
	
	function consultarPlanCrdXeraDocPlanCrdAprox($eraDocPlanCrd){	
		$params = array("%$eraDocPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_ERADOCPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXeraDocPlanCrd($eraDocPlanCrd){
		$params = array($eraDocPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_ERADOCPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXincDespPlanCrd($incDespPlanCrd){	
		$params = array("%$incDespPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_INCDESPPLANCRD, $params);
	}	
	
	function consultarPlanCrdXincDespPlanCrdAprox($incDespPlanCrd){	
		$params = array("%$incDespPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_INCDESPPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXincDespPlanCrd($incDespPlanCrd){
		$params = array($incDespPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_INCDESPPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXgdoAcadPlanCrd($gdoAcadPlanCrd){	
		$params = array("%$gdoAcadPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_GDOACADPLANCRD, $params);
	}	
	
	function consultarPlanCrdXgdoAcadPlanCrdAprox($gdoAcadPlanCrd){	
		$params = array("%$gdoAcadPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_GDOACADPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXgdoAcadPlanCrd($gdoAcadPlanCrd){
		$params = array($gdoAcadPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_GDOACADPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXmencPlanCrd($mencPlanCrd){	
		$params = array("%$mencPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_MENCPLANCRD, $params);
	}	
	
	function consultarPlanCrdXmencPlanCrdAprox($mencPlanCrd){	
		$params = array("%$mencPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_MENCPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXmencPlanCrd($mencPlanCrd){
		$params = array($mencPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_MENCPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXunivMayGPlanCrd($univMayGPlanCrd){	
		$params = array("%$univMayGPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_UNIVMAYGPLANCRD, $params);
	}	
	
	function consultarPlanCrdXunivMayGPlanCrdAprox($univMayGPlanCrd){	
		$params = array("%$univMayGPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_UNIVMAYGPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXunivMayGPlanCrd($univMayGPlanCrd){
		$params = array($univMayGPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_UNIVMAYGPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXpaisPlanCrd($paisPlanCrd){	
		$params = array("%$paisPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_PAISPLANCRD, $params);
	}	
	
	function consultarPlanCrdXpaisPlanCrdAprox($paisPlanCrd){	
		$params = array("%$paisPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_PAISPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXpaisPlanCrd($paisPlanCrd){
		$params = array($paisPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_PAISPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXpreGPlanCrd($preGPlanCrd){	
		$params = array("%$preGPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_PREGPLANCRD, $params);
	}	
	
	function consultarPlanCrdXpreGPlanCrdAprox($preGPlanCrd){	
		$params = array("%$preGPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_PREGPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXpreGPlanCrd($preGPlanCrd){
		$params = array($preGPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_PREGPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXmaePlanCrd($maePlanCrd){	
		$params = array("%$maePlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_MAEPLANCRD, $params);
	}	
	
	function consultarPlanCrdXmaePlanCrdAprox($maePlanCrd){	
		$params = array("%$maePlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_MAEPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXmaePlanCrd($maePlanCrd){
		$params = array($maePlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_MAEPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXdocPlanCrd($docPlanCrd){	
		$params = array("%$docPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_DOCPLANCRD, $params);
	}	
	
	function consultarPlanCrdXdocPlanCrdAprox($docPlanCrd){	
		$params = array("%$docPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_DOCPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXdocPlanCrd($docPlanCrd){
		$params = array($docPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_DOCPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXsedesClasesPlanCrd($sedesClasesPlanCrd){	
		$params = array("%$sedesClasesPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_SEDESCLASESPLANCRD, $params);
	}	
	
	function consultarPlanCrdXsedesClasesPlanCrdAprox($sedesClasesPlanCrd){	
		$params = array("%$sedesClasesPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_SEDESCLASESPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXsedesClasesPlanCrd($sedesClasesPlanCrd){
		$params = array($sedesClasesPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_SEDESCLASESPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXcatDocPlanCrd($catDocPlanCrd){	
		$params = array("%$catDocPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_CATDOCPLANCRD, $params);
	}	
	
	function consultarPlanCrdXcatDocPlanCrdAprox($catDocPlanCrd){	
		$params = array("%$catDocPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_CATDOCPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXcatDocPlanCrd($catDocPlanCrd){
		$params = array($catDocPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_CATDOCPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXdedDocPlanCrd($dedDocPlanCrd){	
		$params = array("%$dedDocPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_DEDDOCPLANCRD, $params);
	}	
	
	function consultarPlanCrdXdedDocPlanCrdAprox($dedDocPlanCrd){	
		$params = array("%$dedDocPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_DEDDOCPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXdedDocPlanCrd($dedDocPlanCrd){
		$params = array($dedDocPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_DEDDOCPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXclasesPlanCrd($clasesPlanCrd){	
		$params = array("%$clasesPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_CLASESPLANCRD, $params);
	}	
	
	function consultarPlanCrdXclasesPlanCrdAprox($clasesPlanCrd){	
		$params = array("%$clasesPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_CLASESPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXclasesPlanCrd($clasesPlanCrd){
		$params = array($clasesPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_CLASESPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXotrasActPlanCrd($otrasActPlanCrd){	
		$params = array("%$otrasActPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_OTRASACTPLANCRD, $params);
	}	
	
	function consultarPlanCrdXotrasActPlanCrdAprox($otrasActPlanCrd){	
		$params = array("%$otrasActPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_OTRASACTPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXotrasActPlanCrd($otrasActPlanCrd){
		$params = array($otrasActPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_OTRASACTPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXtotHorSemPlanCrd($totHorSemPlanCrd){	
		$params = array("%$totHorSemPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_TOTHORSEMPLANCRD, $params);
	}	
	
	function consultarPlanCrdXtotHorSemPlanCrdAprox($totHorSemPlanCrd){	
		$params = array("%$totHorSemPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_TOTHORSEMPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXtotHorSemPlanCrd($totHorSemPlanCrd){
		$params = array($totHorSemPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_TOTHORSEMPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXrzaInvPlanCrd($rzaInvPlanCrd){	
		$params = array("%$rzaInvPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_RZAINVPLANCRD, $params);
	}	
	
	function consultarPlanCrdXrzaInvPlanCrdAprox($rzaInvPlanCrd){	
		$params = array("%$rzaInvPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_RZAINVPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXrzaInvPlanCrd($rzaInvPlanCrd){
		$params = array($rzaInvPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_RZAINVPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXenDinaPlanCrd($enDinaPlanCrd){	
		$params = array("%$enDinaPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_ENDINAPLANCRD, $params);
	}	
	
	function consultarPlanCrdXenDinaPlanCrdAprox($enDinaPlanCrd){	
		$params = array("%$enDinaPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_ENDINAPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXenDinaPlanCrd($enDinaPlanCrd){
		$params = array($enDinaPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_ENDINAPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXperAcadPlanCrd($perAcadPlanCrd){	
		$params = array("%$perAcadPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_PERACADPLANCRD, $params);
	}	
	
	function consultarPlanCrdXperAcadPlanCrdAprox($perAcadPlanCrd){	
		$params = array("%$perAcadPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_PERACADPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXperAcadPlanCrd($perAcadPlanCrd){
		$params = array($perAcadPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_PERACADPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanCrdXcomPlanCrd($comPlanCrd){	
		$params = array("%$comPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_COMPLANCRD, $params);
	}	
	
	function consultarPlanCrdXcomPlanCrdAprox($comPlanCrd){	
		$params = array("%$comPlanCrd%");
		return parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_COMPLANCRD_APROX, $params);
	}	
	
	function existePlanCrdXcomPlanCrd($comPlanCrd){
		$params = array($comPlanCrd);
		$tabla = parent::executeQuery(SQLPlanCrd::CONSULTAR_PLANCRD_POR_COMPLANCRD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

//------------------------------	

 //INICIO COMBOS 
	function consultarEraDocPlanCrd($diccionarioid){	
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
	function consultarIncDespPlanCrd($diccionarioid){	
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
	function consultarPreGPlanCrd($diccionarioid){	
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
	function consultarMaePlanCrd($diccionarioid){	
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
	function consultarDocPlanCrd($diccionarioid){	
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
	function consultarRzaInvPlanCrd($diccionarioid){	
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
	function consultarEnDinaPlanCrd($diccionarioid){	
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