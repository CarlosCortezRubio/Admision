<?php 
require_once('../../../config/config.php');
require_once(MOD.'EdoRegistro.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLEdoRegistro.php');

class EdoRegistro extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($IDEDOREGISTRO, $NOMEDOREGISTRO, $DESCEDOREGISTRO, $GPOEDOREGISTRO) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($IDEDOREGISTRO, $NOMEDOREGISTRO, $DESCEDOREGISTRO, $GPOEDOREGISTRO, $id_EdoRegistro);
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
	function compActualizarcambiarTabla1cambiarTabla2($IDEDOREGISTRO, $NOMEDOREGISTRO, $DESCEDOREGISTRO, $GPOEDOREGISTRO) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($IDEDOREGISTRO, $NOMEDOREGISTRO, $DESCEDOREGISTRO, $GPOEDOREGISTRO, $id_EdoRegistro);
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
	function agregarEdoRegistro($IDEDOREGISTRO, $NOMEDOREGISTRO, $DESCEDOREGISTRO, $GPOEDOREGISTRO) {
$IDEDOREGISTRO = parent::prepareParam($IDEDOREGISTRO, Query::DATATYPE_INTEGER);
$NOMEDOREGISTRO = parent::prepareParam($NOMEDOREGISTRO, Query::DATATYPE_STRING, 0);
$DESCEDOREGISTRO = parent::prepareParam($DESCEDOREGISTRO, Query::DATATYPE_STRING, 0);
$GPOEDOREGISTRO = parent::prepareParam($GPOEDOREGISTRO, Query::DATATYPE_INTEGER);
		
		$params = array($IDEDOREGISTRO, $NOMEDOREGISTRO, $DESCEDOREGISTRO, $GPOEDOREGISTRO);
		return parent::execute(SQLEdoRegistro::AGREGAR_EDOREGISTRO, $params);
	}

	function actualizarEdoRegistro($IDEDOREGISTRO, $NOMEDOREGISTRO, $DESCEDOREGISTRO, $GPOEDOREGISTRO, $id_EdoRegistro){
		
$IDEDOREGISTRO = parent::prepareParam($IDEDOREGISTRO, Query::DATATYPE_INTEGER);
$NOMEDOREGISTRO = parent::prepareParam($NOMEDOREGISTRO, Query::DATATYPE_STRING, 0);
$DESCEDOREGISTRO = parent::prepareParam($DESCEDOREGISTRO, Query::DATATYPE_STRING, 0);
$GPOEDOREGISTRO = parent::prepareParam($GPOEDOREGISTRO, Query::DATATYPE_INTEGER);

		
		$params = array($IDEDOREGISTRO, $NOMEDOREGISTRO, $DESCEDOREGISTRO, $GPOEDOREGISTRO, $id_EdoRegistro);
		return parent::execute(SQLEdoRegistro::ACTUALIZAR_EDOREGISTRO, $params);		
	}
	
	
	function consultarEdoRegistro(){	
		return parent::executeQuery(SQLEdoRegistro::CONSULTAR_EDOREGISTRO);
	}	
	
	function eliminarEdoRegistro($id_EdoRegistro){
		$params = array($id_EdoRegistro);
		return parent::execute(SQLEdoRegistro::ELIMINAR_EDOREGISTRO, $params);		
	}
	
//------------------------------	
	function consultarEdoRegistroXIDEDOREGISTRO($IDEDOREGISTRO){	
		$params = array($IDEDOREGISTRO);
		return parent::executeQuery(SQLEdoRegistro::CONSULTAR_EDOREGISTRO_POR_IDEDOREGISTRO, $params);
	}	
	
	function existeEdoRegistroXIDEDOREGISTRO($IDEDOREGISTRO){
		$params = array($IDEDOREGISTRO);
		$tabla = parent::executeQuery(SQLEdoRegistro::CONSULTAR_EDOREGISTRO_POR_IDEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEdoRegistroXNOMEDOREGISTRO($NOMEDOREGISTRO){	
		$params = array("%$NOMEDOREGISTRO%");
		return parent::executeQuery(SQLEdoRegistro::CONSULTAR_EDOREGISTRO_POR_NOMEDOREGISTRO, $params);
	}	
	
	function consultarEdoRegistroXNOMEDOREGISTROAprox($NOMEDOREGISTRO){	
		$params = array("%$NOMEDOREGISTRO%");
		return parent::executeQuery(SQLEdoRegistro::CONSULTAR_EDOREGISTRO_POR_NOMEDOREGISTRO_APROX, $params);
	}	
	
	function existeEdoRegistroXNOMEDOREGISTRO($NOMEDOREGISTRO){
		$params = array($NOMEDOREGISTRO);
		$tabla = parent::executeQuery(SQLEdoRegistro::CONSULTAR_EDOREGISTRO_POR_NOMEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEdoRegistroXDESCEDOREGISTRO($DESCEDOREGISTRO){	
		$params = array("%$DESCEDOREGISTRO%");
		return parent::executeQuery(SQLEdoRegistro::CONSULTAR_EDOREGISTRO_POR_DESCEDOREGISTRO, $params);
	}	
	
	function consultarEdoRegistroXDESCEDOREGISTROAprox($DESCEDOREGISTRO){	
		$params = array("%$DESCEDOREGISTRO%");
		return parent::executeQuery(SQLEdoRegistro::CONSULTAR_EDOREGISTRO_POR_DESCEDOREGISTRO_APROX, $params);
	}	
	
	function existeEdoRegistroXDESCEDOREGISTRO($DESCEDOREGISTRO){
		$params = array($DESCEDOREGISTRO);
		$tabla = parent::executeQuery(SQLEdoRegistro::CONSULTAR_EDOREGISTRO_POR_DESCEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEdoRegistroXGPOEDOREGISTRO($GPOEDOREGISTRO){	
		$params = array($GPOEDOREGISTRO);
		return parent::executeQuery(SQLEdoRegistro::CONSULTAR_EDOREGISTRO_POR_GPOEDOREGISTRO, $params);
	}	
	
	function existeEdoRegistroXGPOEDOREGISTRO($GPOEDOREGISTRO){
		$params = array($GPOEDOREGISTRO);
		$tabla = parent::executeQuery(SQLEdoRegistro::CONSULTAR_EDOREGISTRO_POR_GPOEDOREGISTRO, $params);
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