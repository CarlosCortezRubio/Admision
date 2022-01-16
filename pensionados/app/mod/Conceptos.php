<?php 
require_once('../../../config/config.php');
require_once(MOD.'Conceptos.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLConceptos.php');

class Conceptos extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idConceptos, $idTipoConcepto, $idEdoRegistro, $codConceptos, $nomConceptos, $etiConceptos, $mntConceptos, $formConceptos, $ordConceptos, $afecta_afp, $afecta_snp, $afecta_ipss, $es_remunera, $grpConceptos) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idConceptos, $idTipoConcepto, $idEdoRegistro, $codConceptos, $nomConceptos, $etiConceptos, $mntConceptos, $formConceptos, $ordConceptos, $afecta_afp, $afecta_snp, $afecta_ipss, $es_remunera, $grpConceptos, $id_Conceptos);
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
	function compActualizarcambiarTabla1cambiarTabla2($idConceptos, $idTipoConcepto, $idEdoRegistro, $codConceptos, $nomConceptos, $etiConceptos, $mntConceptos, $formConceptos, $ordConceptos, $afecta_afp, $afecta_snp, $afecta_ipss, $es_remunera, $grpConceptos) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idConceptos, $idTipoConcepto, $idEdoRegistro, $codConceptos, $nomConceptos, $etiConceptos, $mntConceptos, $formConceptos, $ordConceptos, $afecta_afp, $afecta_snp, $afecta_ipss, $es_remunera, $grpConceptos, $id_Conceptos);
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
	function agregarConceptos($idConceptos, $idTipoConcepto, $idEdoRegistro, $codConceptos, $nomConceptos, $etiConceptos, $mntConceptos, $formConceptos, $ordConceptos, $afecta_afp, $afecta_snp, $afecta_ipss, $es_remunera, $grpConceptos) {
$idConceptos = parent::prepareParam($idConceptos, Query::DATATYPE_INTEGER);
$idTipoConcepto = parent::prepareParam($idTipoConcepto, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$codConceptos = parent::prepareParam($codConceptos, Query::DATATYPE_STRING, 0);
$nomConceptos = parent::prepareParam($nomConceptos, Query::DATATYPE_STRING, 0);
$etiConceptos = parent::prepareParam($etiConceptos, Query::DATATYPE_STRING, 0);
$mntConceptos = parent::prepareParam($mntConceptos, Query::DATATYPE_STRING, 0);
$formConceptos = parent::prepareParam($formConceptos, Query::DATATYPE_STRING, 0);
$ordConceptos = parent::prepareParam($ordConceptos, Query::DATATYPE_INTEGER);
$afecta_afp = parent::prepareParam($afecta_afp, Query::DATATYPE_INTEGER);
$afecta_snp = parent::prepareParam($afecta_snp, Query::DATATYPE_INTEGER);
$afecta_ipss = parent::prepareParam($afecta_ipss, Query::DATATYPE_INTEGER);
$es_remunera = parent::prepareParam($es_remunera, Query::DATATYPE_STRING, 0);
$grpConceptos = parent::prepareParam($grpConceptos, Query::DATATYPE_INTEGER);
		
		$params = array($idConceptos, $idTipoConcepto, $idEdoRegistro, $codConceptos, $nomConceptos, $etiConceptos, $mntConceptos, $formConceptos, $ordConceptos, $afecta_afp, $afecta_snp, $afecta_ipss, $es_remunera, $grpConceptos);
		return parent::execute(SQLConceptos::AGREGAR_CONCEPTOS, $params);
	}

	function actualizarConceptos($idConceptos, $idTipoConcepto, $idEdoRegistro, $codConceptos, $nomConceptos, $etiConceptos, $mntConceptos, $formConceptos, $ordConceptos, $afecta_afp, $afecta_snp, $afecta_ipss, $es_remunera, $grpConceptos, $id_Conceptos){
		
$idConceptos = parent::prepareParam($idConceptos, Query::DATATYPE_INTEGER);
$idTipoConcepto = parent::prepareParam($idTipoConcepto, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$codConceptos = parent::prepareParam($codConceptos, Query::DATATYPE_STRING, 0);
$nomConceptos = parent::prepareParam($nomConceptos, Query::DATATYPE_STRING, 0);
$etiConceptos = parent::prepareParam($etiConceptos, Query::DATATYPE_STRING, 0);
$mntConceptos = parent::prepareParam($mntConceptos, Query::DATATYPE_STRING, 0);
$formConceptos = parent::prepareParam($formConceptos, Query::DATATYPE_STRING, 0);
$ordConceptos = parent::prepareParam($ordConceptos, Query::DATATYPE_INTEGER);
$afecta_afp = parent::prepareParam($afecta_afp, Query::DATATYPE_INTEGER);
$afecta_snp = parent::prepareParam($afecta_snp, Query::DATATYPE_INTEGER);
$afecta_ipss = parent::prepareParam($afecta_ipss, Query::DATATYPE_INTEGER);
$es_remunera = parent::prepareParam($es_remunera, Query::DATATYPE_STRING, 0);
$grpConceptos = parent::prepareParam($grpConceptos, Query::DATATYPE_INTEGER);

		
		$params = array($idConceptos, $idTipoConcepto, $idEdoRegistro, $codConceptos, $nomConceptos, $etiConceptos, $mntConceptos, $formConceptos, $ordConceptos, $afecta_afp, $afecta_snp, $afecta_ipss, $es_remunera, $grpConceptos, $id_Conceptos);
		return parent::execute(SQLConceptos::ACTUALIZAR_CONCEPTOS, $params);		
	}
	
	
	function consultarConceptos(){	
		return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS);
	}	
	
	function eliminarConceptos($id_Conceptos){
		$params = array($id_Conceptos);
		return parent::execute(SQLConceptos::ELIMINAR_CONCEPTOS, $params);		
	}
	
//------------------------------	
	function consultarConceptosXidConceptos($idConceptos){	
		$params = array($idConceptos);
		return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_IDCONCEPTOS, $params);
	}	
	
	function existeConceptosXidConceptos($idConceptos){
		$params = array($idConceptos);
		$tabla = parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_IDCONCEPTOS, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarConceptosXidTipoConcepto($idTipoConcepto){	
		$params = array($idTipoConcepto);
		return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_IDTIPOCONCEPTO, $params);
	}	
	
	function existeConceptosXidTipoConcepto($idTipoConcepto){
		$params = array($idTipoConcepto);
		$tabla = parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_IDTIPOCONCEPTO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarConceptosXidEdoRegistro($idEdoRegistro){	
		$params = array($idEdoRegistro);
		return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_IDEDOREGISTRO, $params);
	}	
	
	function consultarConceptosXidEdoRegistroYtipoConcepto($idEdoRegistro,$tipoPeriodo){	
	    $params = array($idEdoRegistro,$tipoPeriodo);
	    return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_IDEDOREGISTRO_Y_TIPO_CONCEPTO, $params);
	}	
	
	function consultarConceptosXidEdoRegistroYtipoConceptoNeg($idEdoRegistro,$tipoPeriodo){	
	    $params = array($idEdoRegistro,$tipoPeriodo);
	    return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_IDEDOREGISTRO_Y_TIPO_CONCEPTO_NEG, $params);
	}	
	
	function existeConceptosXidEdoRegistro($idEdoRegistro){
		$params = array($idEdoRegistro);
		$tabla = parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_IDEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarConceptosXcodConceptos($codConceptos){	
		$params = array("$codConceptos");
		return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_CODCONCEPTOS, $params);
	}	
	
	function consultarConceptosXcodConceptosAprox($codConceptos){	
		$params = array("%$codConceptos%");
		return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_CODCONCEPTOS_APROX, $params);
	}	
	
	function existeConceptosXcodConceptos($codConceptos){
		$params = array($codConceptos);
		$tabla = parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_CODCONCEPTOS, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarConceptosXnomConceptos($nomConceptos){	
		$params = array("%$nomConceptos%");
		return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_NOMCONCEPTOS, $params);
	}	
	
	function consultarConceptosXnomConceptosAprox($nomConceptos){	
		$params = array("%$nomConceptos%");
		return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_NOM_APROX, $params);
	}	
	
	function existeConceptosXnomConceptos($nomConceptos){
		$params = array($nomConceptos);
		$tabla = parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_NOMCONCEPTOS, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarConceptosXetiConceptos($etiConceptos){	
		$params = array("%$etiConceptos%");
		return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_ETICONCEPTOS, $params);
	}	
	
	function consultarConceptosXetiConceptosAprox($etiConceptos){	
		$params = array("%$etiConceptos%");
		return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_ETICONCEPTOS_APROX, $params);
	}	
	
	function existeConceptosXetiConceptos($etiConceptos){
		$params = array($etiConceptos);
		$tabla = parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_ETICONCEPTOS, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarConceptosXmntConceptos($mntConceptos){	
		$params = array("%$mntConceptos%");
		return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_MNTCONCEPTOS, $params);
	}	
	
	function consultarConceptosXmntConceptosAprox($mntConceptos){	
		$params = array("%$mntConceptos%");
		return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_MNTCONCEPTOS_APROX, $params);
	}	
	
	function existeConceptosXmntConceptos($mntConceptos){
		$params = array($mntConceptos);
		$tabla = parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_MNTCONCEPTOS, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarConceptosXformConceptos($formConceptos){	
		$params = array("%$formConceptos%");
		return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_FORMCONCEPTOS, $params);
	}	
	
	function consultarConceptosXformConceptosAprox($formConceptos){	
		$params = array("%$formConceptos%");
		return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_FORMCONCEPTOS_APROX, $params);
	}	
	
	function existeConceptosXformConceptos($formConceptos){
		$params = array($formConceptos);
		$tabla = parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_FORMCONCEPTOS, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarConceptosXordConceptos($ordConceptos){	
		$params = array($ordConceptos);
		return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_ORDCONCEPTOS, $params);
	}	
	
	function existeConceptosXordConceptos($ordConceptos){
		$params = array($ordConceptos);
		$tabla = parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_ORDCONCEPTOS, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarConceptosXafecta_afp($afecta_afp){	
		$params = array($afecta_afp);
		return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_AFECTA_AFP, $params);
	}	
	
	function existeConceptosXafecta_afp($afecta_afp){
		$params = array($afecta_afp);
		$tabla = parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_AFECTA_AFP, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarConceptosXafecta_snp($afecta_snp){	
		$params = array($afecta_snp);
		return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_AFECTA_SNP, $params);
	}	
	
	function existeConceptosXafecta_snp($afecta_snp){
		$params = array($afecta_snp);
		$tabla = parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_AFECTA_SNP, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarConceptosXafecta_ipss($afecta_ipss){	
		$params = array($afecta_ipss);
		return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_AFECTA_IPSS, $params);
	}	
	
	function existeConceptosXafecta_ipss($afecta_ipss){
		$params = array($afecta_ipss);
		$tabla = parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_AFECTA_IPSS, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarConceptosXes_remunera($es_remunera){	
		$params = array("%$es_remunera%");
		return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_ES_REMUNERA, $params);
	}	
	
	function consultarConceptosXes_remuneraAprox($es_remunera){	
		$params = array("%$es_remunera%");
		return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_ES_REMUNERA_APROX, $params);
	}	
	
	function existeConceptosXes_remunera($es_remunera){
		$params = array($es_remunera);
		$tabla = parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_ES_REMUNERA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarConceptosXgrpConceptos($grpConceptos){	
		$params = array($grpConceptos);
		return parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_GRPCONCEPTOS, $params);
	}	
	
	function existeConceptosXgrpConceptos($grpConceptos){
		$params = array($grpConceptos);
		$tabla = parent::executeQuery(SQLConceptos::CONSULTAR_CONCEPTOS_POR_GRPCONCEPTOS, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

//------------------------------	

 //INICIO COMBOS 
	function consultarGrpConceptos($diccionarioid){	
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