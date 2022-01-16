<?php 
require_once('../../../config/config.php');
require_once(MOD.'Rol.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLRol.php');

class Rol extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idRol, $nomRol, $descRol) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idRol, $nomRol, $descRol, $id_Rol);
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
	function compActualizarcambiarTabla1cambiarTabla2($idRol, $nomRol, $descRol) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idRol, $nomRol, $descRol, $id_Rol);
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
	function agregarRol($idRol, $nomRol, $descRol) {
$idRol = parent::prepareParam($idRol, Query::DATATYPE_INTEGER);
$nomRol = parent::prepareParam($nomRol, Query::DATATYPE_STRING, 0);
$descRol = parent::prepareParam($descRol, Query::DATATYPE_STRING, 0);
		
		$params = array($idRol, $nomRol, $descRol);
		return parent::execute(SQLRol::AGREGAR_ROL, $params);
	}

	function actualizarRol($idRol, $nomRol, $descRol, $id_Rol){
		
$idRol = parent::prepareParam($idRol, Query::DATATYPE_INTEGER);
$nomRol = parent::prepareParam($nomRol, Query::DATATYPE_STRING, 0);
$descRol = parent::prepareParam($descRol, Query::DATATYPE_STRING, 0);

		
		$params = array($idRol, $nomRol, $descRol, $id_Rol);
		return parent::execute(SQLRol::ACTUALIZAR_ROL, $params);		
	}
	
	
	function consultarRol(){	
		return parent::executeQuery(SQLRol::CONSULTAR_ROL);
	}	
	
	function eliminarRol($id_Rol){
		$params = array($id_Rol);
		return parent::execute(SQLRol::ELIMINAR_ROL, $params);		
	}
	
//------------------------------	
	function consultarRolXidRol($idRol){	
		$params = array($idRol);
		return parent::executeQuery(SQLRol::CONSULTAR_ROL_POR_IDROL, $params);
	}	
	
	function existeRolXidRol($idRol){
		$params = array($idRol);
		$tabla = parent::executeQuery(SQLRol::CONSULTAR_ROL_POR_IDROL, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarRolXnomRol($nomRol){	
		$params = array("%$nomRol%");
		return parent::executeQuery(SQLRol::CONSULTAR_ROL_POR_NOMROL, $params);
	}	
	
	function consultarRolXnomRolAprox($nomRol){	
		$params = array("%$nomRol%");
		return parent::executeQuery(SQLRol::CONSULTAR_ROL_POR_NOMROL_APROX, $params);
	}	
	
	function existeRolXnomRol($nomRol){
		$params = array($nomRol);
		$tabla = parent::executeQuery(SQLRol::CONSULTAR_ROL_POR_NOMROL, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarRolXdescRol($descRol){	
		$params = array("%$descRol%");
		return parent::executeQuery(SQLRol::CONSULTAR_ROL_POR_DESCROL, $params);
	}	
	
	function consultarRolXdescRolAprox($descRol){	
		$params = array("%$descRol%");
		return parent::executeQuery(SQLRol::CONSULTAR_ROL_POR_DESCROL_APROX, $params);
	}	
	
	function existeRolXdescRol($descRol){
		$params = array($descRol);
		$tabla = parent::executeQuery(SQLRol::CONSULTAR_ROL_POR_DESCROL, $params);
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