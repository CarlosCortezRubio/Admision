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
	function compAgregarcambiarTabla1cambiarTabla2($idEdoRegistro, $nomEdoRegistro, $descEdoRegistro, $grupoEdoRegistro) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idEdoRegistro, $nomEdoRegistro, $descEdoRegistro, $grupoEdoRegistro, $id_EdoRegistro);
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
	function compActualizarcambiarTabla1cambiarTabla2($idEdoRegistro, $nomEdoRegistro, $descEdoRegistro, $grupoEdoRegistro) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idEdoRegistro, $nomEdoRegistro, $descEdoRegistro, $grupoEdoRegistro, $id_EdoRegistro);
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
	function agregarEdoRegistro($idEdoRegistro, $nomEdoRegistro, $descEdoRegistro, $grupoEdoRegistro) {
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$nomEdoRegistro = parent::prepareParam($nomEdoRegistro, Query::DATATYPE_STRING, 0);
$descEdoRegistro = parent::prepareParam($descEdoRegistro, Query::DATATYPE_STRING, 0);
$grupoEdoRegistro = parent::prepareParam($grupoEdoRegistro, Query::DATATYPE_INTEGER);
		
		$params = array($idEdoRegistro, $nomEdoRegistro, $descEdoRegistro, $grupoEdoRegistro);
		return parent::execute(SQLEdoRegistro::AGREGAR_EDOREGISTRO, $params);
	}

	function actualizarEdoRegistro($idEdoRegistro, $nomEdoRegistro, $descEdoRegistro, $grupoEdoRegistro, $id_EdoRegistro){
		
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$nomEdoRegistro = parent::prepareParam($nomEdoRegistro, Query::DATATYPE_STRING, 0);
$descEdoRegistro = parent::prepareParam($descEdoRegistro, Query::DATATYPE_STRING, 0);
$grupoEdoRegistro = parent::prepareParam($grupoEdoRegistro, Query::DATATYPE_INTEGER);

		
		$params = array($idEdoRegistro, $nomEdoRegistro, $descEdoRegistro, $grupoEdoRegistro, $id_EdoRegistro);
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
	function consultarEdoRegistroXidEdoRegistro($idEdoRegistro){	
		$params = array($idEdoRegistro);
		return parent::executeQuery(SQLEdoRegistro::CONSULTAR_EDOREGISTRO_POR_IDEDOREGISTRO, $params);
	}	
	
	function existeEdoRegistroXidEdoRegistro($idEdoRegistro){
		$params = array($idEdoRegistro);
		$tabla = parent::executeQuery(SQLEdoRegistro::CONSULTAR_EDOREGISTRO_POR_IDEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEdoRegistroXnomEdoRegistro($nomEdoRegistro){	
		$params = array("%$nomEdoRegistro%");
		return parent::executeQuery(SQLEdoRegistro::CONSULTAR_EDOREGISTRO_POR_NOMEDOREGISTRO, $params);
	}	
	
	function consultarEdoRegistroXnomEdoRegistroAprox($nomEdoRegistro){	
		$params = array("%$nomEdoRegistro%");
		return parent::executeQuery(SQLEdoRegistro::CONSULTAR_EDOREGISTRO_POR_NOMEDOREGISTRO_APROX, $params);
	}	
	
	function existeEdoRegistroXnomEdoRegistro($nomEdoRegistro){
		$params = array($nomEdoRegistro);
		$tabla = parent::executeQuery(SQLEdoRegistro::CONSULTAR_EDOREGISTRO_POR_NOMEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEdoRegistroXdescEdoRegistro($descEdoRegistro){	
		$params = array("%$descEdoRegistro%");
		return parent::executeQuery(SQLEdoRegistro::CONSULTAR_EDOREGISTRO_POR_DESCEDOREGISTRO, $params);
	}	
	
	function consultarEdoRegistroXdescEdoRegistroAprox($descEdoRegistro){	
		$params = array("%$descEdoRegistro%");
		return parent::executeQuery(SQLEdoRegistro::CONSULTAR_EDOREGISTRO_POR_DESCEDOREGISTRO_APROX, $params);
	}	
	
	function existeEdoRegistroXdescEdoRegistro($descEdoRegistro){
		$params = array($descEdoRegistro);
		$tabla = parent::executeQuery(SQLEdoRegistro::CONSULTAR_EDOREGISTRO_POR_DESCEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEdoRegistroXgrupoEdoRegistro($grupoEdoRegistro){	
		$params = array($grupoEdoRegistro);
		return parent::executeQuery(SQLEdoRegistro::CONSULTAR_EDOREGISTRO_POR_GRUPOEDOREGISTRO, $params);
	}	
	
	function existeEdoRegistroXgrupoEdoRegistro($grupoEdoRegistro){
		$params = array($grupoEdoRegistro);
		$tabla = parent::executeQuery(SQLEdoRegistro::CONSULTAR_EDOREGISTRO_POR_GRUPOEDOREGISTRO, $params);
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