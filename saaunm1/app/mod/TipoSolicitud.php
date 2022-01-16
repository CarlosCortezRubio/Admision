<?php 
require_once('../../../config/config.php');
require_once(MOD.'TipoSolicitud.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLTipoSolicitud.php');

class TipoSolicitud extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idTipoSolicitud, $solTipoSolicitud, $fecIniTipoSolicitud, $fecFinTipoSolicitud, $segTipoSolicitud) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idTipoSolicitud, $solTipoSolicitud, $fecIniTipoSolicitud, $fecFinTipoSolicitud, $segTipoSolicitud, $id_TipoSolicitud);
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
	function compActualizarcambiarTabla1cambiarTabla2($idTipoSolicitud, $solTipoSolicitud, $fecIniTipoSolicitud, $fecFinTipoSolicitud, $segTipoSolicitud) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idTipoSolicitud, $solTipoSolicitud, $fecIniTipoSolicitud, $fecFinTipoSolicitud, $segTipoSolicitud, $id_TipoSolicitud);
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
	function agregarTipoSolicitud($idTipoSolicitud, $solTipoSolicitud, $fecIniTipoSolicitud, $fecFinTipoSolicitud, $segTipoSolicitud) {
$idTipoSolicitud = parent::prepareParam($idTipoSolicitud, Query::DATATYPE_INTEGER);
$solTipoSolicitud = parent::prepareParam($solTipoSolicitud, Query::DATATYPE_STRING, 0);
$segTipoSolicitud = parent::prepareParam($segTipoSolicitud, Query::DATATYPE_INTEGER);
		
		$params = array($idTipoSolicitud, $solTipoSolicitud, $fecIniTipoSolicitud, $fecFinTipoSolicitud, $segTipoSolicitud);
		return parent::execute(SQLTipoSolicitud::AGREGAR_TIPOSOLICITUD, $params);
	}

	function actualizarTipoSolicitud($idTipoSolicitud, $solTipoSolicitud, $fecIniTipoSolicitud, $fecFinTipoSolicitud, $segTipoSolicitud, $id_TipoSolicitud){
		
$idTipoSolicitud = parent::prepareParam($idTipoSolicitud, Query::DATATYPE_INTEGER);
$solTipoSolicitud = parent::prepareParam($solTipoSolicitud, Query::DATATYPE_STRING, 0);
$segTipoSolicitud = parent::prepareParam($segTipoSolicitud, Query::DATATYPE_INTEGER);

		
		$params = array($idTipoSolicitud, $solTipoSolicitud, $fecIniTipoSolicitud, $fecFinTipoSolicitud, $segTipoSolicitud, $id_TipoSolicitud);
		return parent::execute(SQLTipoSolicitud::ACTUALIZAR_TIPOSOLICITUD, $params);		
	}
	
	
	function consultarTipoSolicitud(){	
		return parent::executeQuery(SQLTipoSolicitud::CONSULTAR_TIPOSOLICITUD);
	}	
	
	function eliminarTipoSolicitud($id_TipoSolicitud){
		$params = array($id_TipoSolicitud);
		return parent::execute(SQLTipoSolicitud::ELIMINAR_TIPOSOLICITUD, $params);		
	}
	
//------------------------------	
	function consultarTipoSolicitudXidTipoSolicitud($idTipoSolicitud){	
		$params = array($idTipoSolicitud);
		return parent::executeQuery(SQLTipoSolicitud::CONSULTAR_TIPOSOLICITUD_POR_IDTIPOSOLICITUD, $params);
	}	
	
	function existeTipoSolicitudXidTipoSolicitud($idTipoSolicitud){
		$params = array($idTipoSolicitud);
		$tabla = parent::executeQuery(SQLTipoSolicitud::CONSULTAR_TIPOSOLICITUD_POR_IDTIPOSOLICITUD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarTipoSolicitudXsolTipoSolicitud($solTipoSolicitud){	
		$params = array("%$solTipoSolicitud%");
		return parent::executeQuery(SQLTipoSolicitud::CONSULTAR_TIPOSOLICITUD_POR_SOLTIPOSOLICITUD, $params);
	}	
	
	function consultarTipoSolicitudXsolTipoSolicitudAprox($solTipoSolicitud){	
		$params = array("%$solTipoSolicitud%");
		return parent::executeQuery(SQLTipoSolicitud::CONSULTAR_TIPOSOLICITUD_POR_SOLTIPOSOLICITUD_APROX, $params);
	}	
	
	function existeTipoSolicitudXsolTipoSolicitud($solTipoSolicitud){
		$params = array($solTipoSolicitud);
		$tabla = parent::executeQuery(SQLTipoSolicitud::CONSULTAR_TIPOSOLICITUD_POR_SOLTIPOSOLICITUD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarTipoSolicitudXfecIniTipoSolicitud($fecIniTipoSolicitud){	
		$params = array($fecIniTipoSolicitud);
		return parent::executeQuery(SQLTipoSolicitud::CONSULTAR_TIPOSOLICITUD_POR_FECINITIPOSOLICITUD, $params);
	}	
	
	function existeTipoSolicitudXfecIniTipoSolicitud($fecIniTipoSolicitud){
		$params = array($fecIniTipoSolicitud);
		$tabla = parent::executeQuery(SQLTipoSolicitud::CONSULTAR_TIPOSOLICITUD_POR_FECINITIPOSOLICITUD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarTipoSolicitudXfecFinTipoSolicitud($fecFinTipoSolicitud){	
		$params = array($fecFinTipoSolicitud);
		return parent::executeQuery(SQLTipoSolicitud::CONSULTAR_TIPOSOLICITUD_POR_FECFINTIPOSOLICITUD, $params);
	}	
	
	function existeTipoSolicitudXfecFinTipoSolicitud($fecFinTipoSolicitud){
		$params = array($fecFinTipoSolicitud);
		$tabla = parent::executeQuery(SQLTipoSolicitud::CONSULTAR_TIPOSOLICITUD_POR_FECFINTIPOSOLICITUD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarTipoSolicitudXsegTipoSolicitud($segTipoSolicitud){	
		$params = array($segTipoSolicitud);
		return parent::executeQuery(SQLTipoSolicitud::CONSULTAR_TIPOSOLICITUD_POR_SEGTIPOSOLICITUD, $params);
	}	
	
	function existeTipoSolicitudXsegTipoSolicitud($segTipoSolicitud){
		$params = array($segTipoSolicitud);
		$tabla = parent::executeQuery(SQLTipoSolicitud::CONSULTAR_TIPOSOLICITUD_POR_SEGTIPOSOLICITUD, $params);
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