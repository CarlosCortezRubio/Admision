<?php 
require_once('../../../config/config.php');
require_once(MOD.'EdoCivil.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLEdoCivil.php');

class EdoCivil extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($IDEDOCIVIL, $NOMEDOCIVIL) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($IDEDOCIVIL, $NOMEDOCIVIL, $id_EdoCivil);
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
	function compActualizarcambiarTabla1cambiarTabla2($IDEDOCIVIL, $NOMEDOCIVIL) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($IDEDOCIVIL, $NOMEDOCIVIL, $id_EdoCivil);
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
	function agregarEdoCivil($IDEDOCIVIL, $NOMEDOCIVIL) {
$IDEDOCIVIL = parent::prepareParam($IDEDOCIVIL, Query::DATATYPE_INTEGER);
$NOMEDOCIVIL = parent::prepareParam($NOMEDOCIVIL, Query::DATATYPE_STRING, 0);
		
		$params = array($IDEDOCIVIL, $NOMEDOCIVIL);
		return parent::execute(SQLEdoCivil::AGREGAR_EDOCIVIL, $params);
	}

	function actualizarEdoCivil($IDEDOCIVIL, $NOMEDOCIVIL, $id_EdoCivil){
		
$IDEDOCIVIL = parent::prepareParam($IDEDOCIVIL, Query::DATATYPE_INTEGER);
$NOMEDOCIVIL = parent::prepareParam($NOMEDOCIVIL, Query::DATATYPE_STRING, 0);

		
		$params = array($IDEDOCIVIL, $NOMEDOCIVIL, $id_EdoCivil);
		return parent::execute(SQLEdoCivil::ACTUALIZAR_EDOCIVIL, $params);		
	}
	
	
	function consultarEdoCivil(){	
		return parent::executeQuery(SQLEdoCivil::CONSULTAR_EDOCIVIL);
	}	
	
	function eliminarEdoCivil($id_EdoCivil){
		$params = array($id_EdoCivil);
		return parent::execute(SQLEdoCivil::ELIMINAR_EDOCIVIL, $params);		
	}
	
//------------------------------	
	function consultarEdoCivilXIDEDOCIVIL($IDEDOCIVIL){	
		$params = array($IDEDOCIVIL);
		return parent::executeQuery(SQLEdoCivil::CONSULTAR_EDOCIVIL_POR_IDEDOCIVIL, $params);
	}	
	
	function existeEdoCivilXIDEDOCIVIL($IDEDOCIVIL){
		$params = array($IDEDOCIVIL);
		$tabla = parent::executeQuery(SQLEdoCivil::CONSULTAR_EDOCIVIL_POR_IDEDOCIVIL, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEdoCivilXNOMEDOCIVIL($NOMEDOCIVIL){	
		$params = array("%$NOMEDOCIVIL%");
		return parent::executeQuery(SQLEdoCivil::CONSULTAR_EDOCIVIL_POR_NOMEDOCIVIL, $params);
	}	
	
	function consultarEdoCivilXNOMEDOCIVILAprox($NOMEDOCIVIL){	
		$params = array("%$NOMEDOCIVIL%");
		return parent::executeQuery(SQLEdoCivil::CONSULTAR_EDOCIVIL_POR_NOMEDOCIVIL_APROX, $params);
	}	
	
	function existeEdoCivilXNOMEDOCIVIL($NOMEDOCIVIL){
		$params = array($NOMEDOCIVIL);
		$tabla = parent::executeQuery(SQLEdoCivil::CONSULTAR_EDOCIVIL_POR_NOMEDOCIVIL, $params);
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