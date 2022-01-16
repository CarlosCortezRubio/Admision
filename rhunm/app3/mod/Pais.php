<?php 
require_once('../../../config/config.php');
require_once(MOD.'Pais.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLPais.php');

class Pais extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idPais, $nomPais) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idPais, $nomPais, $id_Pais);
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
	function compActualizarcambiarTabla1cambiarTabla2($idPais, $nomPais) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idPais, $nomPais, $id_Pais);
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
	function agregarPais($idPais, $nomPais) {
$idPais = parent::prepareParam($idPais, Query::DATATYPE_INTEGER);
$nomPais = parent::prepareParam($nomPais, Query::DATATYPE_STRING, 0);
		
		$params = array($idPais, $nomPais);
		return parent::execute(SQLPais::AGREGAR_PAIS, $params);
	}

	function actualizarPais($idPais, $nomPais, $id_Pais){
		
$idPais = parent::prepareParam($idPais, Query::DATATYPE_INTEGER);
$nomPais = parent::prepareParam($nomPais, Query::DATATYPE_STRING, 0);

		
		$params = array($idPais, $nomPais, $id_Pais);
		return parent::execute(SQLPais::ACTUALIZAR_PAIS, $params);		
	}
	
	
	function consultarPais(){	
		return parent::executeQuery(SQLPais::CONSULTAR_PAIS);
	}	
	
	function eliminarPais($id_Pais){
		$params = array($id_Pais);
		return parent::execute(SQLPais::ELIMINAR_PAIS, $params);		
	}
	
//------------------------------	
	function consultarPaisXidPais($idPais){	
		$params = array($idPais);
		return parent::executeQuery(SQLPais::CONSULTAR_PAIS_POR_IDPAIS, $params);
	}	
	
	function existePaisXidPais($idPais){
		$params = array($idPais);
		$tabla = parent::executeQuery(SQLPais::CONSULTAR_PAIS_POR_IDPAIS, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPaisXnomPais($nomPais){	
		$params = array("%$nomPais%");
		return parent::executeQuery(SQLPais::CONSULTAR_PAIS_POR_NOMPAIS, $params);
	}	
	
	function consultarPaisXnomPaisAprox($nomPais){	
		$params = array("%$nomPais%");
		return parent::executeQuery(SQLPais::CONSULTAR_PAIS_POR_NOMPAIS_APROX, $params);
	}	
	
	function existePaisXnomPais($nomPais){
		$params = array($nomPais);
		$tabla = parent::executeQuery(SQLPais::CONSULTAR_PAIS_POR_NOMPAIS, $params);
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