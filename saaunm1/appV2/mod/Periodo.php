<?php 
require_once('../../../config/config.php');
require_once(MOD.'Periodo.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLPeriodo.php');

class Periodo extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idPeriodo, $IDEDOREGISTRO, $nomPeriodo, $fecIniPeriodo, $fecFinPeriodo, $OrdPeriodo) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idPeriodo, $IDEDOREGISTRO, $nomPeriodo, $fecIniPeriodo, $fecFinPeriodo, $OrdPeriodo, $id_Periodo);
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
	function compActualizarcambiarTabla1cambiarTabla2($idPeriodo, $IDEDOREGISTRO, $nomPeriodo, $fecIniPeriodo, $fecFinPeriodo, $OrdPeriodo) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idPeriodo, $IDEDOREGISTRO, $nomPeriodo, $fecIniPeriodo, $fecFinPeriodo, $OrdPeriodo, $id_Periodo);
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
	function agregarPeriodo($idPeriodo, $IDEDOREGISTRO, $nomPeriodo, $fecIniPeriodo, $fecFinPeriodo, $OrdPeriodo) {
$idPeriodo = parent::prepareParam($idPeriodo, Query::DATATYPE_INTEGER);
$IDEDOREGISTRO = parent::prepareParam($IDEDOREGISTRO, Query::DATATYPE_INTEGER);
$nomPeriodo = parent::prepareParam($nomPeriodo, Query::DATATYPE_STRING, 0);
$OrdPeriodo = parent::prepareParam($OrdPeriodo, Query::DATATYPE_INTEGER);
		
		$params = array($idPeriodo, $IDEDOREGISTRO, $nomPeriodo, $fecIniPeriodo, $fecFinPeriodo, $OrdPeriodo);
		return parent::execute(SQLPeriodo::AGREGAR_PERIODO, $params);
	}

	function actualizarPeriodo($idPeriodo, $IDEDOREGISTRO, $nomPeriodo, $fecIniPeriodo, $fecFinPeriodo, $OrdPeriodo, $id_Periodo){
		
$idPeriodo = parent::prepareParam($idPeriodo, Query::DATATYPE_INTEGER);
$IDEDOREGISTRO = parent::prepareParam($IDEDOREGISTRO, Query::DATATYPE_INTEGER);
$nomPeriodo = parent::prepareParam($nomPeriodo, Query::DATATYPE_STRING, 0);
$OrdPeriodo = parent::prepareParam($OrdPeriodo, Query::DATATYPE_INTEGER);

		
		$params = array($idPeriodo, $IDEDOREGISTRO, $nomPeriodo, $fecIniPeriodo, $fecFinPeriodo, $OrdPeriodo, $id_Periodo);
		return parent::execute(SQLPeriodo::ACTUALIZAR_PERIODO, $params);		
	}
	
	
	function consultarPeriodo(){	
		return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO);
	}	
	
	function eliminarPeriodo($id_Periodo){
		$params = array($id_Periodo);
		return parent::execute(SQLPeriodo::ELIMINAR_PERIODO, $params);		
	}
	
//------------------------------	
	function consultarPeriodoXidPeriodo($idPeriodo){	
		$params = array($idPeriodo);
		return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_IDPERIODO, $params);
	}	
	
	function existePeriodoXidPeriodo($idPeriodo){
		$params = array($idPeriodo);
		$tabla = parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_IDPERIODO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPeriodoXIDEDOREGISTRO($IDEDOREGISTRO){	
		$params = array($IDEDOREGISTRO);
		return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_IDEDOREGISTRO, $params);
	}	
	
	function existePeriodoXIDEDOREGISTRO($IDEDOREGISTRO){
		$params = array($IDEDOREGISTRO);
		$tabla = parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_IDEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPeriodoXnomPeriodo($nomPeriodo){	
		$params = array("%$nomPeriodo%");
		return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_NOMPERIODO, $params);
	}	
	
	function consultarPeriodoXnomPeriodoAprox($nomPeriodo){	
		$params = array("%$nomPeriodo%");
		return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_NOMPERIODO_APROX, $params);
	}	
	
	function existePeriodoXnomPeriodo($nomPeriodo){
		$params = array($nomPeriodo);
		$tabla = parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_NOMPERIODO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPeriodoXfecIniPeriodo($fecIniPeriodo){	
		$params = array($fecIniPeriodo);
		return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_FECINIPERIODO, $params);
	}	
	
	function existePeriodoXfecIniPeriodo($fecIniPeriodo){
		$params = array($fecIniPeriodo);
		$tabla = parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_FECINIPERIODO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPeriodoXfecFinPeriodo($fecFinPeriodo){	
		$params = array($fecFinPeriodo);
		return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_FECFINPERIODO, $params);
	}	
	
	function existePeriodoXfecFinPeriodo($fecFinPeriodo){
		$params = array($fecFinPeriodo);
		$tabla = parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_FECFINPERIODO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPeriodoXOrdPeriodo($OrdPeriodo){	
		$params = array($OrdPeriodo);
		return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_ORDPERIODO, $params);
	}	
	
	function existePeriodoXOrdPeriodo($OrdPeriodo){
		$params = array($OrdPeriodo);
		$tabla = parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_ORDPERIODO, $params);
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