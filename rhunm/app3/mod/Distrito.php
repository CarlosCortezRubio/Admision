<?php 
require_once('../../../config/config.php');
require_once(MOD.'Distrito.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLDistrito.php');

class Distrito extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idDistrito, $idProvincia, $nomDistrito) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idDistrito, $idProvincia, $nomDistrito, $id_Distrito);
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
	function compActualizarcambiarTabla1cambiarTabla2($idDistrito, $idProvincia, $nomDistrito) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idDistrito, $idProvincia, $nomDistrito, $id_Distrito);
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
	function agregarDistrito($idDistrito, $idProvincia, $nomDistrito) {
$idDistrito = parent::prepareParam($idDistrito, Query::DATATYPE_INTEGER);
$idProvincia = parent::prepareParam($idProvincia, Query::DATATYPE_INTEGER);
$nomDistrito = parent::prepareParam($nomDistrito, Query::DATATYPE_STRING, 0);
		
		$params = array($idDistrito, $idProvincia, $nomDistrito);
		return parent::execute(SQLDistrito::AGREGAR_DISTRITO, $params);
	}

	function actualizarDistrito($idDistrito, $idProvincia, $nomDistrito, $id_Distrito){
		
$idDistrito = parent::prepareParam($idDistrito, Query::DATATYPE_INTEGER);
$idProvincia = parent::prepareParam($idProvincia, Query::DATATYPE_INTEGER);
$nomDistrito = parent::prepareParam($nomDistrito, Query::DATATYPE_STRING, 0);

		
		$params = array($idDistrito, $idProvincia, $nomDistrito, $id_Distrito);
		return parent::execute(SQLDistrito::ACTUALIZAR_DISTRITO, $params);		
	}
	
	
	function consultarDistrito(){	
		return parent::executeQuery(SQLDistrito::CONSULTAR_DISTRITO);
	}	
	
	function eliminarDistrito($id_Distrito){
		$params = array($id_Distrito);
		return parent::execute(SQLDistrito::ELIMINAR_DISTRITO, $params);		
	}
	
//------------------------------	
	function consultarDistritoXidDistrito($idDistrito){	
		$params = array($idDistrito);
		return parent::executeQuery(SQLDistrito::CONSULTAR_DISTRITO_POR_IDDISTRITO, $params);
	}	
	
	function existeDistritoXidDistrito($idDistrito){
		$params = array($idDistrito);
		$tabla = parent::executeQuery(SQLDistrito::CONSULTAR_DISTRITO_POR_IDDISTRITO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDistritoXidProvincia($idProvincia){	
		$params = array($idProvincia);
		return parent::executeQuery(SQLDistrito::CONSULTAR_DISTRITO_POR_IDPROVINCIA, $params);
	}	
	
	function existeDistritoXidProvincia($idProvincia){
		$params = array($idProvincia);
		$tabla = parent::executeQuery(SQLDistrito::CONSULTAR_DISTRITO_POR_IDPROVINCIA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDistritoXnomDistrito($nomDistrito){	
		$params = array("%$nomDistrito%");
		return parent::executeQuery(SQLDistrito::CONSULTAR_DISTRITO_POR_NOMDISTRITO, $params);
	}	
	
	function consultarDistritoXnomDistritoAprox($nomDistrito){	
		$params = array("%$nomDistrito%");
		return parent::executeQuery(SQLDistrito::CONSULTAR_DISTRITO_POR_NOMDISTRITO_APROX, $params);
	}	
	
	function existeDistritoXnomDistrito($nomDistrito){
		$params = array($nomDistrito);
		$tabla = parent::executeQuery(SQLDistrito::CONSULTAR_DISTRITO_POR_NOMDISTRITO, $params);
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