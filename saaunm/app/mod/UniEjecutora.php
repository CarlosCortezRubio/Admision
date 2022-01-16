<?php 
require_once('../../../config/config.php');
require_once(MOD.'UniEjecutora.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLUniEjecutora.php');

class UniEjecutora extends Query{
    function __construct(){
        // 		parent::abrirConexion();
        parent::abrirConexionConParam(SERVER_RH,USER_RH,PASSWORDBD_RH,DATABASE_RH);
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idUniEjecutora, $codUniEjecutora, $nomUniEjecutora) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idUniEjecutora, $codUniEjecutora, $nomUniEjecutora, $id_UniEjecutora);
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
	function compActualizarcambiarTabla1cambiarTabla2($idUniEjecutora, $codUniEjecutora, $nomUniEjecutora) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idUniEjecutora, $codUniEjecutora, $nomUniEjecutora, $id_UniEjecutora);
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
	function agregarUniEjecutora($idUniEjecutora, $codUniEjecutora, $nomUniEjecutora) {
$idUniEjecutora = parent::prepareParam($idUniEjecutora, Query::DATATYPE_INTEGER);
$codUniEjecutora = parent::prepareParam($codUniEjecutora, Query::DATATYPE_STRING, 0);
$nomUniEjecutora = parent::prepareParam($nomUniEjecutora, Query::DATATYPE_STRING, 0);
		
		$params = array($idUniEjecutora, $codUniEjecutora, $nomUniEjecutora);
		return parent::execute(SQLUniEjecutora::AGREGAR_UNIEJECUTORA, $params);
	}

	function actualizarUniEjecutora($idUniEjecutora, $codUniEjecutora, $nomUniEjecutora, $id_UniEjecutora){
		
$idUniEjecutora = parent::prepareParam($idUniEjecutora, Query::DATATYPE_INTEGER);
$codUniEjecutora = parent::prepareParam($codUniEjecutora, Query::DATATYPE_STRING, 0);
$nomUniEjecutora = parent::prepareParam($nomUniEjecutora, Query::DATATYPE_STRING, 0);

		
		$params = array($idUniEjecutora, $codUniEjecutora, $nomUniEjecutora, $id_UniEjecutora);
		return parent::execute(SQLUniEjecutora::ACTUALIZAR_UNIEJECUTORA, $params);		
	}
	
	
	function consultarUniEjecutora(){	
		return parent::executeQuery(SQLUniEjecutora::CONSULTAR_UNIEJECUTORA);
	}	
	
	function eliminarUniEjecutora($id_UniEjecutora){
		$params = array($id_UniEjecutora);
		return parent::execute(SQLUniEjecutora::ELIMINAR_UNIEJECUTORA, $params);		
	}
	
//------------------------------	
	function consultarUniEjecutoraXidUniEjecutora($idUniEjecutora){	
		$params = array($idUniEjecutora);
		return parent::executeQuery(SQLUniEjecutora::CONSULTAR_UNIEJECUTORA_POR_IDUNIEJECUTORA, $params);
	}	
	
	function existeUniEjecutoraXidUniEjecutora($idUniEjecutora){
		$params = array($idUniEjecutora);
		$tabla = parent::executeQuery(SQLUniEjecutora::CONSULTAR_UNIEJECUTORA_POR_IDUNIEJECUTORA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarUniEjecutoraXcodUniEjecutora($codUniEjecutora){	
		$params = array("%$codUniEjecutora%");
		return parent::executeQuery(SQLUniEjecutora::CONSULTAR_UNIEJECUTORA_POR_CODUNIEJECUTORA, $params);
	}	
	
	function consultarUniEjecutoraXcodUniEjecutoraAprox($codUniEjecutora){	
		$params = array("%$codUniEjecutora%");
		return parent::executeQuery(SQLUniEjecutora::CONSULTAR_UNIEJECUTORA_POR_CODUNIEJECUTORA_APROX, $params);
	}	
	
	function existeUniEjecutoraXcodUniEjecutora($codUniEjecutora){
		$params = array($codUniEjecutora);
		$tabla = parent::executeQuery(SQLUniEjecutora::CONSULTAR_UNIEJECUTORA_POR_CODUNIEJECUTORA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarUniEjecutoraXnomUniEjecutora($nomUniEjecutora){	
		$params = array("%$nomUniEjecutora%");
		return parent::executeQuery(SQLUniEjecutora::CONSULTAR_UNIEJECUTORA_POR_NOMUNIEJECUTORA, $params);
	}	
	
	function consultarUniEjecutoraXnomUniEjecutoraAprox($nomUniEjecutora){	
		$params = array("%$nomUniEjecutora%");
		return parent::executeQuery(SQLUniEjecutora::CONSULTAR_UNIEJECUTORA_POR_NOMUNIEJECUTORA_APROX, $params);
	}	
	
	function existeUniEjecutoraXnomUniEjecutora($nomUniEjecutora){
		$params = array($nomUniEjecutora);
		$tabla = parent::executeQuery(SQLUniEjecutora::CONSULTAR_UNIEJECUTORA_POR_NOMUNIEJECUTORA, $params);
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