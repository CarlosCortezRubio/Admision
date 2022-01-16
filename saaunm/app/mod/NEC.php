<?php 
require_once('../../../config/config.php');
require_once(MOD.'NEC.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLNEC.php');

class NEC extends Query{
    function __construct(){
        // 		parent::abrirConexion();
        parent::abrirConexionConParam(SERVER_RH,USER_RH,PASSWORDBD_RH,DATABASE_RH);
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idNEC, $codNEC, $nomNEC) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idNEC, $codNEC, $nomNEC, $id_NEC);
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
	function compActualizarcambiarTabla1cambiarTabla2($idNEC, $codNEC, $nomNEC) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idNEC, $codNEC, $nomNEC, $id_NEC);
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
	function agregarNEC($idNEC, $codNEC, $nomNEC) {
$idNEC = parent::prepareParam($idNEC, Query::DATATYPE_INTEGER);
$codNEC = parent::prepareParam($codNEC, Query::DATATYPE_STRING, 0);
$nomNEC = parent::prepareParam($nomNEC, Query::DATATYPE_STRING, 0);
		
		$params = array($idNEC, $codNEC, $nomNEC);
		return parent::execute(SQLNEC::AGREGAR_NEC, $params);
	}

	function actualizarNEC($idNEC, $codNEC, $nomNEC, $id_NEC){
		
$idNEC = parent::prepareParam($idNEC, Query::DATATYPE_INTEGER);
$codNEC = parent::prepareParam($codNEC, Query::DATATYPE_STRING, 0);
$nomNEC = parent::prepareParam($nomNEC, Query::DATATYPE_STRING, 0);

		
		$params = array($idNEC, $codNEC, $nomNEC, $id_NEC);
		return parent::execute(SQLNEC::ACTUALIZAR_NEC, $params);		
	}
	
	
	function consultarNEC(){	
		return parent::executeQuery(SQLNEC::CONSULTAR_NEC);
	}	
	
	function eliminarNEC($id_NEC){
		$params = array($id_NEC);
		return parent::execute(SQLNEC::ELIMINAR_NEC, $params);		
	}
	
//------------------------------	
	function consultarNECXidNEC($idNEC){	
		$params = array($idNEC);
		return parent::executeQuery(SQLNEC::CONSULTAR_NEC_POR_IDNEC, $params);
	}	
	
	function existeNECXidNEC($idNEC){
		$params = array($idNEC);
		$tabla = parent::executeQuery(SQLNEC::CONSULTAR_NEC_POR_IDNEC, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarNECXcodNEC($codNEC){	
		$params = array("%$codNEC%");
		return parent::executeQuery(SQLNEC::CONSULTAR_NEC_POR_CODNEC, $params);
	}	
	
	function consultarNECXcodNECAprox($codNEC){	
		$params = array("%$codNEC%");
		return parent::executeQuery(SQLNEC::CONSULTAR_NEC_POR_CODNEC_APROX, $params);
	}	
	
	function existeNECXcodNEC($codNEC){
		$params = array($codNEC);
		$tabla = parent::executeQuery(SQLNEC::CONSULTAR_NEC_POR_CODNEC, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarNECXnomNEC($nomNEC){	
		$params = array("%$nomNEC%");
		return parent::executeQuery(SQLNEC::CONSULTAR_NEC_POR_NOMNEC, $params);
	}	
	
	function consultarNECXnomNECAprox($nomNEC){	
		$params = array("%$nomNEC%");
		return parent::executeQuery(SQLNEC::CONSULTAR_NEC_POR_NOMNEC_APROX, $params);
	}	
	
	function existeNECXnomNEC($nomNEC){
		$params = array($nomNEC);
		$tabla = parent::executeQuery(SQLNEC::CONSULTAR_NEC_POR_NOMNEC, $params);
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