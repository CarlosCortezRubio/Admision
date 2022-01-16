<?php 
require_once('../../../config/config.php');
require_once(MOD.'Planc9.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLPlanc9.php');

class Planc9 extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($numPlanC9, $ape1PlanC9, $ape2PlanC9, $nom1PlanC9, $nacPlanC9, $dniPlanC9, $fecIngPlanC9, $eraDocPlanC9, $incDespPlanC9, $gdoAcadPlanC9, $mencPlanC9, $univMayGPlanC9, $paisPlanC9, $preGPlanC9, $maePlanC9, $docPlanC9, $sedesClasesPlanC9, $catDocPlanC9, $dedDocPlanC9, $clasesPlanC9, $otrasActPlanC9, $totHorSemPlanC9, $rzaInvPlanC9, $enDinaPlanC9, $perAcadPlanC9, $comPlanC9) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($numPlanC9, $ape1PlanC9, $ape2PlanC9, $nom1PlanC9, $nacPlanC9, $dniPlanC9, $fecIngPlanC9, $eraDocPlanC9, $incDespPlanC9, $gdoAcadPlanC9, $mencPlanC9, $univMayGPlanC9, $paisPlanC9, $preGPlanC9, $maePlanC9, $docPlanC9, $sedesClasesPlanC9, $catDocPlanC9, $dedDocPlanC9, $clasesPlanC9, $otrasActPlanC9, $totHorSemPlanC9, $rzaInvPlanC9, $enDinaPlanC9, $perAcadPlanC9, $comPlanC9, $id_planc9);
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
	function compActualizarcambiarTabla1cambiarTabla2($numPlanC9, $ape1PlanC9, $ape2PlanC9, $nom1PlanC9, $nacPlanC9, $dniPlanC9, $fecIngPlanC9, $eraDocPlanC9, $incDespPlanC9, $gdoAcadPlanC9, $mencPlanC9, $univMayGPlanC9, $paisPlanC9, $preGPlanC9, $maePlanC9, $docPlanC9, $sedesClasesPlanC9, $catDocPlanC9, $dedDocPlanC9, $clasesPlanC9, $otrasActPlanC9, $totHorSemPlanC9, $rzaInvPlanC9, $enDinaPlanC9, $perAcadPlanC9, $comPlanC9) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($numPlanC9, $ape1PlanC9, $ape2PlanC9, $nom1PlanC9, $nacPlanC9, $dniPlanC9, $fecIngPlanC9, $eraDocPlanC9, $incDespPlanC9, $gdoAcadPlanC9, $mencPlanC9, $univMayGPlanC9, $paisPlanC9, $preGPlanC9, $maePlanC9, $docPlanC9, $sedesClasesPlanC9, $catDocPlanC9, $dedDocPlanC9, $clasesPlanC9, $otrasActPlanC9, $totHorSemPlanC9, $rzaInvPlanC9, $enDinaPlanC9, $perAcadPlanC9, $comPlanC9, $id_planc9);
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
	function agregarPlanc9($numPlanC9, $ape1PlanC9, $ape2PlanC9, $nom1PlanC9, $nacPlanC9, $dniPlanC9, $fecIngPlanC9, $eraDocPlanC9, $incDespPlanC9, $gdoAcadPlanC9, $mencPlanC9, $univMayGPlanC9, $paisPlanC9, $preGPlanC9, $maePlanC9, $docPlanC9, $sedesClasesPlanC9, $catDocPlanC9, $dedDocPlanC9, $clasesPlanC9, $otrasActPlanC9, $totHorSemPlanC9, $rzaInvPlanC9, $enDinaPlanC9, $perAcadPlanC9, $comPlanC9) {
$numPlanC9 = parent::prepareParam($numPlanC9, Query::DATATYPE_INTEGER);
$ape1PlanC9 = parent::prepareParam($ape1PlanC9, Query::DATATYPE_STRING, 0);
$ape2PlanC9 = parent::prepareParam($ape2PlanC9, Query::DATATYPE_STRING, 0);
$nom1PlanC9 = parent::prepareParam($nom1PlanC9, Query::DATATYPE_STRING, 0);
$nacPlanC9 = parent::prepareParam($nacPlanC9, Query::DATATYPE_STRING, 0);
$dniPlanC9 = parent::prepareParam($dniPlanC9, Query::DATATYPE_STRING, 0);
$eraDocPlanC9 = parent::prepareParam($eraDocPlanC9, Query::DATATYPE_STRING, 0);
$incDespPlanC9 = parent::prepareParam($incDespPlanC9, Query::DATATYPE_STRING, 0);
$gdoAcadPlanC9 = parent::prepareParam($gdoAcadPlanC9, Query::DATATYPE_STRING, 0);
$mencPlanC9 = parent::prepareParam($mencPlanC9, Query::DATATYPE_STRING, 0);
$univMayGPlanC9 = parent::prepareParam($univMayGPlanC9, Query::DATATYPE_STRING, 0);
$paisPlanC9 = parent::prepareParam($paisPlanC9, Query::DATATYPE_STRING, 0);
$preGPlanC9 = parent::prepareParam($preGPlanC9, Query::DATATYPE_STRING, 0);
$maePlanC9 = parent::prepareParam($maePlanC9, Query::DATATYPE_STRING, 0);
$docPlanC9 = parent::prepareParam($docPlanC9, Query::DATATYPE_STRING, 0);
$sedesClasesPlanC9 = parent::prepareParam($sedesClasesPlanC9, Query::DATATYPE_STRING, 0);
$catDocPlanC9 = parent::prepareParam($catDocPlanC9, Query::DATATYPE_STRING, 0);
$dedDocPlanC9 = parent::prepareParam($dedDocPlanC9, Query::DATATYPE_STRING, 0);
$clasesPlanC9 = parent::prepareParam($clasesPlanC9, Query::DATATYPE_STRING, 0);
$otrasActPlanC9 = parent::prepareParam($otrasActPlanC9, Query::DATATYPE_STRING, 0);
$totHorSemPlanC9 = parent::prepareParam($totHorSemPlanC9, Query::DATATYPE_STRING, 0);
$rzaInvPlanC9 = parent::prepareParam($rzaInvPlanC9, Query::DATATYPE_STRING, 0);
$enDinaPlanC9 = parent::prepareParam($enDinaPlanC9, Query::DATATYPE_STRING, 0);
$perAcadPlanC9 = parent::prepareParam($perAcadPlanC9, Query::DATATYPE_STRING, 0);
$comPlanC9 = parent::prepareParam($comPlanC9, Query::DATATYPE_STRING, 0);
		
		$params = array($numPlanC9, $ape1PlanC9, $ape2PlanC9, $nom1PlanC9, $nacPlanC9, $dniPlanC9, $fecIngPlanC9, $eraDocPlanC9, $incDespPlanC9, $gdoAcadPlanC9, $mencPlanC9, $univMayGPlanC9, $paisPlanC9, $preGPlanC9, $maePlanC9, $docPlanC9, $sedesClasesPlanC9, $catDocPlanC9, $dedDocPlanC9, $clasesPlanC9, $otrasActPlanC9, $totHorSemPlanC9, $rzaInvPlanC9, $enDinaPlanC9, $perAcadPlanC9, $comPlanC9);
		return parent::execute(SQLPlanc9::AGREGAR_PLANC9, $params);
	}

	function actualizarPlanc9($numPlanC9, $ape1PlanC9, $ape2PlanC9, $nom1PlanC9, $nacPlanC9, $dniPlanC9, $fecIngPlanC9, $eraDocPlanC9, $incDespPlanC9, $gdoAcadPlanC9, $mencPlanC9, $univMayGPlanC9, $paisPlanC9, $preGPlanC9, $maePlanC9, $docPlanC9, $sedesClasesPlanC9, $catDocPlanC9, $dedDocPlanC9, $clasesPlanC9, $otrasActPlanC9, $totHorSemPlanC9, $rzaInvPlanC9, $enDinaPlanC9, $perAcadPlanC9, $comPlanC9, $id_planc9){
		
$numPlanC9 = parent::prepareParam($numPlanC9, Query::DATATYPE_INTEGER);
$ape1PlanC9 = parent::prepareParam($ape1PlanC9, Query::DATATYPE_STRING, 0);
$ape2PlanC9 = parent::prepareParam($ape2PlanC9, Query::DATATYPE_STRING, 0);
$nom1PlanC9 = parent::prepareParam($nom1PlanC9, Query::DATATYPE_STRING, 0);
$nacPlanC9 = parent::prepareParam($nacPlanC9, Query::DATATYPE_STRING, 0);
$dniPlanC9 = parent::prepareParam($dniPlanC9, Query::DATATYPE_STRING, 0);
$eraDocPlanC9 = parent::prepareParam($eraDocPlanC9, Query::DATATYPE_STRING, 0);
$incDespPlanC9 = parent::prepareParam($incDespPlanC9, Query::DATATYPE_STRING, 0);
$gdoAcadPlanC9 = parent::prepareParam($gdoAcadPlanC9, Query::DATATYPE_STRING, 0);
$mencPlanC9 = parent::prepareParam($mencPlanC9, Query::DATATYPE_STRING, 0);
$univMayGPlanC9 = parent::prepareParam($univMayGPlanC9, Query::DATATYPE_STRING, 0);
$paisPlanC9 = parent::prepareParam($paisPlanC9, Query::DATATYPE_STRING, 0);
$preGPlanC9 = parent::prepareParam($preGPlanC9, Query::DATATYPE_STRING, 0);
$maePlanC9 = parent::prepareParam($maePlanC9, Query::DATATYPE_STRING, 0);
$docPlanC9 = parent::prepareParam($docPlanC9, Query::DATATYPE_STRING, 0);
$sedesClasesPlanC9 = parent::prepareParam($sedesClasesPlanC9, Query::DATATYPE_STRING, 0);
$catDocPlanC9 = parent::prepareParam($catDocPlanC9, Query::DATATYPE_STRING, 0);
$dedDocPlanC9 = parent::prepareParam($dedDocPlanC9, Query::DATATYPE_STRING, 0);
$clasesPlanC9 = parent::prepareParam($clasesPlanC9, Query::DATATYPE_STRING, 0);
$otrasActPlanC9 = parent::prepareParam($otrasActPlanC9, Query::DATATYPE_STRING, 0);
$totHorSemPlanC9 = parent::prepareParam($totHorSemPlanC9, Query::DATATYPE_STRING, 0);
$rzaInvPlanC9 = parent::prepareParam($rzaInvPlanC9, Query::DATATYPE_STRING, 0);
$enDinaPlanC9 = parent::prepareParam($enDinaPlanC9, Query::DATATYPE_STRING, 0);
$perAcadPlanC9 = parent::prepareParam($perAcadPlanC9, Query::DATATYPE_STRING, 0);
$comPlanC9 = parent::prepareParam($comPlanC9, Query::DATATYPE_STRING, 0);

		
		$params = array($numPlanC9, $ape1PlanC9, $ape2PlanC9, $nom1PlanC9, $nacPlanC9, $dniPlanC9, $fecIngPlanC9, $eraDocPlanC9, $incDespPlanC9, $gdoAcadPlanC9, $mencPlanC9, $univMayGPlanC9, $paisPlanC9, $preGPlanC9, $maePlanC9, $docPlanC9, $sedesClasesPlanC9, $catDocPlanC9, $dedDocPlanC9, $clasesPlanC9, $otrasActPlanC9, $totHorSemPlanC9, $rzaInvPlanC9, $enDinaPlanC9, $perAcadPlanC9, $comPlanC9, $id_planc9);
		return parent::execute(SQLPlanc9::ACTUALIZAR_PLANC9, $params);		
	}
	
	
	function consultarPlanc9(){	
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9);
	}	
	
	function eliminarPlanc9($id_planc9){
		$params = array($id_planc9);
		return parent::execute(SQLPlanc9::ELIMINAR_PLANC9, $params);		
	}
	
//------------------------------	
	function consultarPlanc9XnumPlanC9($numPlanC9){	
		$params = array($numPlanC9);
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_NUMPLANC9, $params);
	}	
	
	function existePlanc9XnumPlanC9($numPlanC9){
		$params = array($numPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_NUMPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9Xape1PlanC9($ape1PlanC9){	
		$params = array("%$ape1PlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_APE1PLANC9, $params);
	}	
	
	function consultarPlanc9Xape1PlanC9Aprox($ape1PlanC9){	
		$params = array("%$ape1PlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_APE1PLANC9_APROX, $params);
	}	
	
	function existePlanc9Xape1PlanC9($ape1PlanC9){
		$params = array($ape1PlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_APE1PLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9Xape2PlanC9($ape2PlanC9){	
		$params = array("%$ape2PlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_APE2PLANC9, $params);
	}	
	
	function consultarPlanc9Xape2PlanC9Aprox($ape2PlanC9){	
		$params = array("%$ape2PlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_APE2PLANC9_APROX, $params);
	}	
	
	function existePlanc9Xape2PlanC9($ape2PlanC9){
		$params = array($ape2PlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_APE2PLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9Xnom1PlanC9($nom1PlanC9){	
		$params = array("%$nom1PlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_NOM1PLANC9, $params);
	}	
	
	function consultarPlanc9Xnom1PlanC9Aprox($nom1PlanC9){	
		$params = array("%$nom1PlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_NOM1PLANC9_APROX, $params);
	}	
	
	function existePlanc9Xnom1PlanC9($nom1PlanC9){
		$params = array($nom1PlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_NOM1PLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XnacPlanC9($nacPlanC9){	
		$params = array("%$nacPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_NACPLANC9, $params);
	}	
	
	function consultarPlanc9XnacPlanC9Aprox($nacPlanC9){	
		$params = array("%$nacPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_NACPLANC9_APROX, $params);
	}	
	
	function existePlanc9XnacPlanC9($nacPlanC9){
		$params = array($nacPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_NACPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XdniPlanC9($dniPlanC9){	
		$params = array("%$dniPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_DNIPLANC9, $params);
	}	
	
	function consultarPlanc9XdniPlanC9Aprox($dniPlanC9){	
		$params = array("%$dniPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_DNIPLANC9_APROX, $params);
	}	
	
	function existePlanc9XdniPlanC9($dniPlanC9){
		$params = array($dniPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_DNIPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XfecIngPlanC9($fecIngPlanC9){	
		$params = array($fecIngPlanC9);
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_FECINGPLANC9, $params);
	}	

	function consultarPlanc9XIDplanc9($idPlanC9){	
		$params = array($idPlanC9);
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_ID, $params);
	}	
	
	function existePlanc9XfecIngPlanC9($fecIngPlanC9){
		$params = array($fecIngPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_FECINGPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XeraDocPlanC9($eraDocPlanC9){	
		$params = array("%$eraDocPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_ERADOCPLANC9, $params);
	}	
	
	function consultarPlanc9XeraDocPlanC9Aprox($eraDocPlanC9){	
		$params = array("%$eraDocPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_ERADOCPLANC9_APROX, $params);
	}	
	
	function existePlanc9XeraDocPlanC9($eraDocPlanC9){
		$params = array($eraDocPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_ERADOCPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XincDespPlanC9($incDespPlanC9){	
		$params = array("%$incDespPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_INCDESPPLANC9, $params);
	}	
	
	function consultarPlanc9XincDespPlanC9Aprox($incDespPlanC9){	
		$params = array("%$incDespPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_INCDESPPLANC9_APROX, $params);
	}	
	
	function existePlanc9XincDespPlanC9($incDespPlanC9){
		$params = array($incDespPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_INCDESPPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XgdoAcadPlanC9($gdoAcadPlanC9){	
		$params = array("%$gdoAcadPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_GDOACADPLANC9, $params);
	}	
	
	function consultarPlanc9XgdoAcadPlanC9Aprox($gdoAcadPlanC9){	
		$params = array("%$gdoAcadPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_GDOACADPLANC9_APROX, $params);
	}	
	
	function existePlanc9XgdoAcadPlanC9($gdoAcadPlanC9){
		$params = array($gdoAcadPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_GDOACADPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XmencPlanC9($mencPlanC9){	
		$params = array("%$mencPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_MENCPLANC9, $params);
	}	
	
	function consultarPlanc9XmencPlanC9Aprox($mencPlanC9){	
		$params = array("%$mencPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_MENCPLANC9_APROX, $params);
	}	
	
	function existePlanc9XmencPlanC9($mencPlanC9){
		$params = array($mencPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_MENCPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XunivMayGPlanC9($univMayGPlanC9){	
		$params = array("%$univMayGPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_UNIVMAYGPLANC9, $params);
	}	
	
	function consultarPlanc9XunivMayGPlanC9Aprox($univMayGPlanC9){	
		$params = array("%$univMayGPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_UNIVMAYGPLANC9_APROX, $params);
	}	
	
	function existePlanc9XunivMayGPlanC9($univMayGPlanC9){
		$params = array($univMayGPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_UNIVMAYGPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XpaisPlanC9($paisPlanC9){	
		$params = array("%$paisPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_PAISPLANC9, $params);
	}	
	
	function consultarPlanc9XpaisPlanC9Aprox($paisPlanC9){	
		$params = array("%$paisPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_PAISPLANC9_APROX, $params);
	}	
	
	function existePlanc9XpaisPlanC9($paisPlanC9){
		$params = array($paisPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_PAISPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XpreGPlanC9($preGPlanC9){	
		$params = array("%$preGPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_PREGPLANC9, $params);
	}	
	
	function consultarPlanc9XpreGPlanC9Aprox($preGPlanC9){	
		$params = array("%$preGPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_PREGPLANC9_APROX, $params);
	}	
	
	function existePlanc9XpreGPlanC9($preGPlanC9){
		$params = array($preGPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_PREGPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XmaePlanC9($maePlanC9){	
		$params = array("%$maePlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_MAEPLANC9, $params);
	}	
	
	function consultarPlanc9XmaePlanC9Aprox($maePlanC9){	
		$params = array("%$maePlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_MAEPLANC9_APROX, $params);
	}	
	
	function existePlanc9XmaePlanC9($maePlanC9){
		$params = array($maePlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_MAEPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XdocPlanC9($docPlanC9){	
		$params = array("%$docPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_DOCPLANC9, $params);
	}	
	
	function consultarPlanc9XdocPlanC9Aprox($docPlanC9){	
		$params = array("%$docPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_DOCPLANC9_APROX, $params);
	}	
	
	function existePlanc9XdocPlanC9($docPlanC9){
		$params = array($docPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_DOCPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XsedesClasesPlanC9($sedesClasesPlanC9){	
		$params = array("%$sedesClasesPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_SEDESCLASESPLANC9, $params);
	}	
	
	function consultarPlanc9XsedesClasesPlanC9Aprox($sedesClasesPlanC9){	
		$params = array("%$sedesClasesPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_SEDESCLASESPLANC9_APROX, $params);
	}	
	
	function existePlanc9XsedesClasesPlanC9($sedesClasesPlanC9){
		$params = array($sedesClasesPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_SEDESCLASESPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XcatDocPlanC9($catDocPlanC9){	
		$params = array("%$catDocPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_CATDOCPLANC9, $params);
	}	
	
	function consultarPlanc9XcatDocPlanC9Aprox($catDocPlanC9){	
		$params = array("%$catDocPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_CATDOCPLANC9_APROX, $params);
	}	
	
	function existePlanc9XcatDocPlanC9($catDocPlanC9){
		$params = array($catDocPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_CATDOCPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XdedDocPlanC9($dedDocPlanC9){	
		$params = array("%$dedDocPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_DEDDOCPLANC9, $params);
	}	
	
	function consultarPlanc9XdedDocPlanC9Aprox($dedDocPlanC9){	
		$params = array("%$dedDocPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_DEDDOCPLANC9_APROX, $params);
	}	
	
	function existePlanc9XdedDocPlanC9($dedDocPlanC9){
		$params = array($dedDocPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_DEDDOCPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XclasesPlanC9($clasesPlanC9){	
		$params = array("%$clasesPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_CLASESPLANC9, $params);
	}	
	
	function consultarPlanc9XclasesPlanC9Aprox($clasesPlanC9){	
		$params = array("%$clasesPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_CLASESPLANC9_APROX, $params);
	}	
	
	function existePlanc9XclasesPlanC9($clasesPlanC9){
		$params = array($clasesPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_CLASESPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XotrasActPlanC9($otrasActPlanC9){	
		$params = array("%$otrasActPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_OTRASACTPLANC9, $params);
	}	
	
	function consultarPlanc9XotrasActPlanC9Aprox($otrasActPlanC9){	
		$params = array("%$otrasActPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_OTRASACTPLANC9_APROX, $params);
	}	
	
	function existePlanc9XotrasActPlanC9($otrasActPlanC9){
		$params = array($otrasActPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_OTRASACTPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XtotHorSemPlanC9($totHorSemPlanC9){	
		$params = array("%$totHorSemPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_TOTHORSEMPLANC9, $params);
	}	
	
	function consultarPlanc9XtotHorSemPlanC9Aprox($totHorSemPlanC9){	
		$params = array("%$totHorSemPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_TOTHORSEMPLANC9_APROX, $params);
	}	
	
	function existePlanc9XtotHorSemPlanC9($totHorSemPlanC9){
		$params = array($totHorSemPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_TOTHORSEMPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XrzaInvPlanC9($rzaInvPlanC9){	
		$params = array("%$rzaInvPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_RZAINVPLANC9, $params);
	}	
	
	function consultarPlanc9XrzaInvPlanC9Aprox($rzaInvPlanC9){	
		$params = array("%$rzaInvPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_RZAINVPLANC9_APROX, $params);
	}	
	
	function existePlanc9XrzaInvPlanC9($rzaInvPlanC9){
		$params = array($rzaInvPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_RZAINVPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XenDinaPlanC9($enDinaPlanC9){	
		$params = array("%$enDinaPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_ENDINAPLANC9, $params);
	}	
	
	function consultarPlanc9XenDinaPlanC9Aprox($enDinaPlanC9){	
		$params = array("%$enDinaPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_ENDINAPLANC9_APROX, $params);
	}	
	
	function existePlanc9XenDinaPlanC9($enDinaPlanC9){
		$params = array($enDinaPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_ENDINAPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XperAcadPlanC9($perAcadPlanC9){	
		$params = array("%$perAcadPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_PERACADPLANC9, $params);
	}	
	
	function consultarPlanc9XperAcadPlanC9Aprox($perAcadPlanC9){	
		$params = array("%$perAcadPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_PERACADPLANC9_APROX, $params);
	}	
	
	function existePlanc9XperAcadPlanC9($perAcadPlanC9){
		$params = array($perAcadPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_PERACADPLANC9, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPlanc9XcomPlanC9($comPlanC9){	
		$params = array("%$comPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_COMPLANC9, $params);
	}	
	
	function consultarPlanc9XcomPlanC9Aprox($comPlanC9){	
		$params = array("%$comPlanC9%");
		return parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_COMPLANC9_APROX, $params);
	}	
	
	function existePlanc9XcomPlanC9($comPlanC9){
		$params = array($comPlanC9);
		$tabla = parent::executeQuery(SQLPlanc9::CONSULTAR_PLANC9_POR_COMPLANC9, $params);
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