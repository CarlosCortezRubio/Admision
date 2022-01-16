<?php 
require_once('../../../config/config.php');
require_once(MOD.'NumMagist.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLNumMagist.php');

class NumMagist extends Query{
    function __construct(){
        // 		parent::abrirConexion();
        parent::abrirConexionConParam(SERVER_RH,USER_RH,PASSWORDBD_RH,DATABASE_RH);
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idNumMagist, $codNumMagist, $nomNumMagist) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idNumMagist, $codNumMagist, $nomNumMagist, $id_NumMagist);
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
	function compActualizarcambiarTabla1cambiarTabla2($idNumMagist, $codNumMagist, $nomNumMagist) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idNumMagist, $codNumMagist, $nomNumMagist, $id_NumMagist);
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
	function agregarNumMagist($idNumMagist, $codNumMagist, $nomNumMagist) {
$idNumMagist = parent::prepareParam($idNumMagist, Query::DATATYPE_INTEGER);
$codNumMagist = parent::prepareParam($codNumMagist, Query::DATATYPE_STRING, 0);
$nomNumMagist = parent::prepareParam($nomNumMagist, Query::DATATYPE_STRING, 0);
		
		$params = array($idNumMagist, $codNumMagist, $nomNumMagist);
		return parent::execute(SQLNumMagist::AGREGAR_NUMMAGIST, $params);
	}

	function actualizarNumMagist($idNumMagist, $codNumMagist, $nomNumMagist, $id_NumMagist){
		
$idNumMagist = parent::prepareParam($idNumMagist, Query::DATATYPE_INTEGER);
$codNumMagist = parent::prepareParam($codNumMagist, Query::DATATYPE_STRING, 0);
$nomNumMagist = parent::prepareParam($nomNumMagist, Query::DATATYPE_STRING, 0);

		
		$params = array($idNumMagist, $codNumMagist, $nomNumMagist, $id_NumMagist);
		return parent::execute(SQLNumMagist::ACTUALIZAR_NUMMAGIST, $params);		
	}
	
	
	function consultarNumMagist(){	
		return parent::executeQuery(SQLNumMagist::CONSULTAR_NUMMAGIST);
	}	
	
	function eliminarNumMagist($id_NumMagist){
		$params = array($id_NumMagist);
		return parent::execute(SQLNumMagist::ELIMINAR_NUMMAGIST, $params);		
	}
	
//------------------------------	
	function consultarNumMagistXidNumMagist($idNumMagist){	
		$params = array($idNumMagist);
		return parent::executeQuery(SQLNumMagist::CONSULTAR_NUMMAGIST_POR_IDNUMMAGIST, $params);
	}	
	
	function existeNumMagistXidNumMagist($idNumMagist){
		$params = array($idNumMagist);
		$tabla = parent::executeQuery(SQLNumMagist::CONSULTAR_NUMMAGIST_POR_IDNUMMAGIST, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarNumMagistXcodNumMagist($codNumMagist){	
		$params = array("%$codNumMagist%");
		return parent::executeQuery(SQLNumMagist::CONSULTAR_NUMMAGIST_POR_CODNUMMAGIST, $params);
	}	
	
	function consultarNumMagistXcodNumMagistAprox($codNumMagist){	
		$params = array("%$codNumMagist%");
		return parent::executeQuery(SQLNumMagist::CONSULTAR_NUMMAGIST_POR_CODNUMMAGIST_APROX, $params);
	}	
	
	function existeNumMagistXcodNumMagist($codNumMagist){
		$params = array($codNumMagist);
		$tabla = parent::executeQuery(SQLNumMagist::CONSULTAR_NUMMAGIST_POR_CODNUMMAGIST, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarNumMagistXnomNumMagist($nomNumMagist){	
		$params = array("%$nomNumMagist%");
		return parent::executeQuery(SQLNumMagist::CONSULTAR_NUMMAGIST_POR_NOMNUMMAGIST, $params);
	}	
	
	function consultarNumMagistXnomNumMagistAprox($nomNumMagist){	
		$params = array("%$nomNumMagist%");
		return parent::executeQuery(SQLNumMagist::CONSULTAR_NUMMAGIST_POR_NOMNUMMAGIST_APROX, $params);
	}	
	
	function existeNumMagistXnomNumMagist($nomNumMagist){
		$params = array($nomNumMagist);
		$tabla = parent::executeQuery(SQLNumMagist::CONSULTAR_NUMMAGIST_POR_NOMNUMMAGIST, $params);
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