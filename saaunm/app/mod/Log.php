<?php 
require_once('../../../config/config.php');
require_once(MOD.'Log.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLLog.php');

class Log extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($IDLOG, $IDUSUARIO, $FECHALOG, $IPLOG, $ACCIONLOG) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($IDLOG, $IDUSUARIO, $FECHALOG, $IPLOG, $ACCIONLOG, $id_log);
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
	function compActualizarcambiarTabla1cambiarTabla2($IDLOG, $IDUSUARIO, $FECHALOG, $IPLOG, $ACCIONLOG) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($IDLOG, $IDUSUARIO, $FECHALOG, $IPLOG, $ACCIONLOG, $id_log);
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
	function agregarLog($IDLOG, $IDUSUARIO, $FECHALOG, $IPLOG, $ACCIONLOG) {
$IDLOG = parent::prepareParam($IDLOG, Query::DATATYPE_INTEGER);
$IDUSUARIO = parent::prepareParam($IDUSUARIO, Query::DATATYPE_INTEGER);
$IPLOG = parent::prepareParam($IPLOG, Query::DATATYPE_STRING, 0);
$ACCIONLOG = parent::prepareParam($ACCIONLOG, Query::DATATYPE_STRING, 0);
		
		$params = array($IDLOG, $IDUSUARIO, $FECHALOG, $IPLOG, $ACCIONLOG);
		return parent::execute(SQLLog::AGREGAR_LOG, $params);
	}

	function actualizarLog($IDLOG, $IDUSUARIO, $FECHALOG, $IPLOG, $ACCIONLOG, $id_log){
		
$IDLOG = parent::prepareParam($IDLOG, Query::DATATYPE_INTEGER);
$IDUSUARIO = parent::prepareParam($IDUSUARIO, Query::DATATYPE_INTEGER);
$IPLOG = parent::prepareParam($IPLOG, Query::DATATYPE_STRING, 0);
$ACCIONLOG = parent::prepareParam($ACCIONLOG, Query::DATATYPE_STRING, 0);

		
		$params = array($IDLOG, $IDUSUARIO, $FECHALOG, $IPLOG, $ACCIONLOG, $id_log);
		return parent::execute(SQLLog::ACTUALIZAR_LOG, $params);		
	}
	
	
	function consultarLog(){	
		return parent::executeQuery(SQLLog::CONSULTAR_LOG);
	}	
	
	function eliminarLog($id_log){
		$params = array($id_log);
		return parent::execute(SQLLog::ELIMINAR_LOG, $params);		
	}
	
//------------------------------	
	function consultarLogXIDLOG($IDLOG){	
		$params = array($IDLOG);
		return parent::executeQuery(SQLLog::CONSULTAR_LOG_POR_IDLOG, $params);
	}	
	
	function existeLogXIDLOG($IDLOG){
		$params = array($IDLOG);
		$tabla = parent::executeQuery(SQLLog::CONSULTAR_LOG_POR_IDLOG, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarLogXIDUSUARIO($IDUSUARIO){	
		$params = array($IDUSUARIO);
		return parent::executeQuery(SQLLog::CONSULTAR_LOG_POR_IDUSUARIO, $params);
	}	
	
	function existeLogXIDUSUARIO($IDUSUARIO){
		$params = array($IDUSUARIO);
		$tabla = parent::executeQuery(SQLLog::CONSULTAR_LOG_POR_IDUSUARIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarLogXFECHALOG($FECHALOG){	
		$params = array($FECHALOG);
		return parent::executeQuery(SQLLog::CONSULTAR_LOG_POR_FECHALOG, $params);
	}	
	
	function existeLogXFECHALOG($FECHALOG){
		$params = array($FECHALOG);
		$tabla = parent::executeQuery(SQLLog::CONSULTAR_LOG_POR_FECHALOG, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarLogXIPLOG($IPLOG){	
		$params = array("%$IPLOG%");
		return parent::executeQuery(SQLLog::CONSULTAR_LOG_POR_IPLOG, $params);
	}	
	
	function consultarLogXIPLOGAprox($IPLOG){	
		$params = array("%$IPLOG%");
		return parent::executeQuery(SQLLog::CONSULTAR_LOG_POR_IPLOG_APROX, $params);
	}	
	
	function existeLogXIPLOG($IPLOG){
		$params = array($IPLOG);
		$tabla = parent::executeQuery(SQLLog::CONSULTAR_LOG_POR_IPLOG, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarLogXACCIONLOG($ACCIONLOG){	
		$params = array("%$ACCIONLOG%");
		return parent::executeQuery(SQLLog::CONSULTAR_LOG_POR_ACCIONLOG, $params);
	}	
	
	function consultarLogXACCIONLOGAprox($ACCIONLOG){	
		$params = array("%$ACCIONLOG%");
		return parent::executeQuery(SQLLog::CONSULTAR_LOG_POR_ACCIONLOG_APROX, $params);
	}	
	
	function existeLogXACCIONLOG($ACCIONLOG){
		$params = array($ACCIONLOG);
		$tabla = parent::executeQuery(SQLLog::CONSULTAR_LOG_POR_ACCIONLOG, $params);
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