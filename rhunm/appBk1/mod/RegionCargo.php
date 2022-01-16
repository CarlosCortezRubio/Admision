<?php 
require_once('../../../config/config.php');
require_once(MOD.'RegionCargo.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLRegionCargo.php');

class RegionCargo extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idRegionCargo, $codRegionCargo, $nomRegionCargo) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idRegionCargo, $codRegionCargo, $nomRegionCargo, $id_RegionCargo);
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
	function compActualizarcambiarTabla1cambiarTabla2($idRegionCargo, $codRegionCargo, $nomRegionCargo) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idRegionCargo, $codRegionCargo, $nomRegionCargo, $id_RegionCargo);
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
	function agregarRegionCargo($idRegionCargo, $codRegionCargo, $nomRegionCargo) {
$idRegionCargo = parent::prepareParam($idRegionCargo, Query::DATATYPE_INTEGER);
$codRegionCargo = parent::prepareParam($codRegionCargo, Query::DATATYPE_STRING, 0);
$nomRegionCargo = parent::prepareParam($nomRegionCargo, Query::DATATYPE_STRING, 0);
		
		$params = array($idRegionCargo, $codRegionCargo, $nomRegionCargo);
		return parent::execute(SQLRegionCargo::AGREGAR_REGIONCARGO, $params);
	}

	function actualizarRegionCargo($idRegionCargo, $codRegionCargo, $nomRegionCargo, $id_RegionCargo){
		
$idRegionCargo = parent::prepareParam($idRegionCargo, Query::DATATYPE_INTEGER);
$codRegionCargo = parent::prepareParam($codRegionCargo, Query::DATATYPE_STRING, 0);
$nomRegionCargo = parent::prepareParam($nomRegionCargo, Query::DATATYPE_STRING, 0);

		
		$params = array($idRegionCargo, $codRegionCargo, $nomRegionCargo, $id_RegionCargo);
		return parent::execute(SQLRegionCargo::ACTUALIZAR_REGIONCARGO, $params);		
	}
	
	
	function consultarRegionCargo(){	
		return parent::executeQuery(SQLRegionCargo::CONSULTAR_REGIONCARGO);
	}	
	
	function eliminarRegionCargo($id_RegionCargo){
		$params = array($id_RegionCargo);
		return parent::execute(SQLRegionCargo::ELIMINAR_REGIONCARGO, $params);		
	}
	
//------------------------------	
	function consultarRegionCargoXidRegionCargo($idRegionCargo){	
		$params = array($idRegionCargo);
		return parent::executeQuery(SQLRegionCargo::CONSULTAR_REGIONCARGO_POR_IDREGIONCARGO, $params);
	}	
	
	function existeRegionCargoXidRegionCargo($idRegionCargo){
		$params = array($idRegionCargo);
		$tabla = parent::executeQuery(SQLRegionCargo::CONSULTAR_REGIONCARGO_POR_IDREGIONCARGO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarRegionCargoXcodRegionCargo($codRegionCargo){	
		$params = array("%$codRegionCargo%");
		return parent::executeQuery(SQLRegionCargo::CONSULTAR_REGIONCARGO_POR_CODREGIONCARGO, $params);
	}	
	
	function consultarRegionCargoXcodRegionCargoAprox($codRegionCargo){	
		$params = array("%$codRegionCargo%");
		return parent::executeQuery(SQLRegionCargo::CONSULTAR_REGIONCARGO_POR_CODREGIONCARGO_APROX, $params);
	}	
	
	function existeRegionCargoXcodRegionCargo($codRegionCargo){
		$params = array($codRegionCargo);
		$tabla = parent::executeQuery(SQLRegionCargo::CONSULTAR_REGIONCARGO_POR_CODREGIONCARGO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarRegionCargoXnomRegionCargo($nomRegionCargo){	
		$params = array("%$nomRegionCargo%");
		return parent::executeQuery(SQLRegionCargo::CONSULTAR_REGIONCARGO_POR_NOMREGIONCARGO, $params);
	}	
	
	function consultarRegionCargoXnomRegionCargoAprox($nomRegionCargo){	
		$params = array("%$nomRegionCargo%");
		return parent::executeQuery(SQLRegionCargo::CONSULTAR_REGIONCARGO_POR_NOMREGIONCARGO_APROX, $params);
	}	
	
	function existeRegionCargoXnomRegionCargo($nomRegionCargo){
		$params = array($nomRegionCargo);
		$tabla = parent::executeQuery(SQLRegionCargo::CONSULTAR_REGIONCARGO_POR_NOMREGIONCARGO, $params);
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