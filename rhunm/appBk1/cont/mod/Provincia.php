<?php 
require_once('../../../config/config.php');
require_once(MOD.'Provincia.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLProvincia.php');

class Provincia extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idProvincia, $idDepartamento, $nomProvincia) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idProvincia, $idDepartamento, $nomProvincia, $id_Provincia);
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
	function compActualizarcambiarTabla1cambiarTabla2($idProvincia, $idDepartamento, $nomProvincia) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idProvincia, $idDepartamento, $nomProvincia, $id_Provincia);
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
	function agregarProvincia($idProvincia, $idDepartamento, $nomProvincia) {
$idProvincia = parent::prepareParam($idProvincia, Query::DATATYPE_INTEGER);
$idDepartamento = parent::prepareParam($idDepartamento, Query::DATATYPE_INTEGER);
$nomProvincia = parent::prepareParam($nomProvincia, Query::DATATYPE_STRING, 0);
		
		$params = array($idProvincia, $idDepartamento, $nomProvincia);
		return parent::execute(SQLProvincia::AGREGAR_PROVINCIA, $params);
	}

	function actualizarProvincia($idProvincia, $idDepartamento, $nomProvincia, $id_Provincia){
		
$idProvincia = parent::prepareParam($idProvincia, Query::DATATYPE_INTEGER);
$idDepartamento = parent::prepareParam($idDepartamento, Query::DATATYPE_INTEGER);
$nomProvincia = parent::prepareParam($nomProvincia, Query::DATATYPE_STRING, 0);

		
		$params = array($idProvincia, $idDepartamento, $nomProvincia, $id_Provincia);
		return parent::execute(SQLProvincia::ACTUALIZAR_PROVINCIA, $params);		
	}
	
	
	function consultarProvincia(){	
		return parent::executeQuery(SQLProvincia::CONSULTAR_PROVINCIA);
	}	
	
	function eliminarProvincia($id_Provincia){
		$params = array($id_Provincia);
		return parent::execute(SQLProvincia::ELIMINAR_PROVINCIA, $params);		
	}
	
//------------------------------	
	function consultarProvinciaXidProvincia($idProvincia){	
		$params = array($idProvincia);
		return parent::executeQuery(SQLProvincia::CONSULTAR_PROVINCIA_POR_IDPROVINCIA, $params);
	}	
	
	function existeProvinciaXidProvincia($idProvincia){
		$params = array($idProvincia);
		$tabla = parent::executeQuery(SQLProvincia::CONSULTAR_PROVINCIA_POR_IDPROVINCIA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarProvinciaXidDepartamento($idDepartamento){	
		$params = array($idDepartamento);
		return parent::executeQuery(SQLProvincia::CONSULTAR_PROVINCIA_POR_IDDEPARTAMENTO, $params);
	}	
	
	function existeProvinciaXidDepartamento($idDepartamento){
		$params = array($idDepartamento);
		$tabla = parent::executeQuery(SQLProvincia::CONSULTAR_PROVINCIA_POR_IDDEPARTAMENTO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarProvinciaXnomProvincia($nomProvincia){	
		$params = array("%$nomProvincia%");
		return parent::executeQuery(SQLProvincia::CONSULTAR_PROVINCIA_POR_NOMPROVINCIA, $params);
	}	
	
	function consultarProvinciaXnomProvinciaAprox($nomProvincia){	
		$params = array("%$nomProvincia%");
		return parent::executeQuery(SQLProvincia::CONSULTAR_PROVINCIA_POR_NOMPROVINCIA_APROX, $params);
	}	
	
	function existeProvinciaXnomProvincia($nomProvincia){
		$params = array($nomProvincia);
		$tabla = parent::executeQuery(SQLProvincia::CONSULTAR_PROVINCIA_POR_NOMPROVINCIA, $params);
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