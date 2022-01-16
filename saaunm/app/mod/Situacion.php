<?php 
require_once('../../../config/config.php');
require_once(MOD.'Situacion.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLSituacion.php');

class Situacion extends Query{
    function __construct(){
        // 		parent::abrirConexion();
        parent::abrirConexionConParam(SERVER_RH,USER_RH,PASSWORDBD_RH,DATABASE_RH);
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idSituacion, $codSituacion, $nomSituacion) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idSituacion, $codSituacion, $nomSituacion, $id_Situacion);
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
	function compActualizarcambiarTabla1cambiarTabla2($idSituacion, $codSituacion, $nomSituacion) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idSituacion, $codSituacion, $nomSituacion, $id_Situacion);
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
	function agregarSituacion($idSituacion, $codSituacion, $nomSituacion) {
$idSituacion = parent::prepareParam($idSituacion, Query::DATATYPE_INTEGER);
$codSituacion = parent::prepareParam($codSituacion, Query::DATATYPE_STRING, 0);
$nomSituacion = parent::prepareParam($nomSituacion, Query::DATATYPE_STRING, 0);
		
		$params = array($idSituacion, $codSituacion, $nomSituacion);
		return parent::execute(SQLSituacion::AGREGAR_SITUACION, $params);
	}

	function actualizarSituacion($idSituacion, $codSituacion, $nomSituacion, $id_Situacion){
		
$idSituacion = parent::prepareParam($idSituacion, Query::DATATYPE_INTEGER);
$codSituacion = parent::prepareParam($codSituacion, Query::DATATYPE_STRING, 0);
$nomSituacion = parent::prepareParam($nomSituacion, Query::DATATYPE_STRING, 0);

		
		$params = array($idSituacion, $codSituacion, $nomSituacion, $id_Situacion);
		return parent::execute(SQLSituacion::ACTUALIZAR_SITUACION, $params);		
	}
	
	
	function consultarSituacion(){	
		return parent::executeQuery(SQLSituacion::CONSULTAR_SITUACION);
	}	
	
	function eliminarSituacion($id_Situacion){
		$params = array($id_Situacion);
		return parent::execute(SQLSituacion::ELIMINAR_SITUACION, $params);		
	}
	
//------------------------------	
	function consultarSituacionXidSituacion($idSituacion){	
		$params = array($idSituacion);
		return parent::executeQuery(SQLSituacion::CONSULTAR_SITUACION_POR_IDSITUACION, $params);
	}	
	
	function existeSituacionXidSituacion($idSituacion){
		$params = array($idSituacion);
		$tabla = parent::executeQuery(SQLSituacion::CONSULTAR_SITUACION_POR_IDSITUACION, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarSituacionXcodSituacion($codSituacion){	
		$params = array("%$codSituacion%");
		return parent::executeQuery(SQLSituacion::CONSULTAR_SITUACION_POR_CODSITUACION, $params);
	}	
	
	function consultarSituacionXcodSituacionAprox($codSituacion){	
		$params = array("%$codSituacion%");
		return parent::executeQuery(SQLSituacion::CONSULTAR_SITUACION_POR_CODSITUACION_APROX, $params);
	}	
	
	function existeSituacionXcodSituacion($codSituacion){
		$params = array($codSituacion);
		$tabla = parent::executeQuery(SQLSituacion::CONSULTAR_SITUACION_POR_CODSITUACION, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarSituacionXnomSituacion($nomSituacion){	
		$params = array("%$nomSituacion%");
		return parent::executeQuery(SQLSituacion::CONSULTAR_SITUACION_POR_NOMSITUACION, $params);
	}	
	
	function consultarSituacionXnomSituacionAprox($nomSituacion){	
		$params = array("%$nomSituacion%");
		return parent::executeQuery(SQLSituacion::CONSULTAR_SITUACION_POR_NOMSITUACION_APROX, $params);
	}	
	
	function existeSituacionXnomSituacion($nomSituacion){
		$params = array($nomSituacion);
		$tabla = parent::executeQuery(SQLSituacion::CONSULTAR_SITUACION_POR_NOMSITUACION, $params);
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