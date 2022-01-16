<?php 
require_once('../../../config/config.php');
require_once(MOD.'Zona.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLZona.php');

class Zona extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idZona, $nomZona) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idZona, $nomZona, $id_Zona);
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
	function compActualizarcambiarTabla1cambiarTabla2($idZona, $nomZona) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idZona, $nomZona, $id_Zona);
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
	function agregarZona($idZona, $nomZona) {
$idZona = parent::prepareParam($idZona, Query::DATATYPE_INTEGER);
$nomZona = parent::prepareParam($nomZona, Query::DATATYPE_STRING, 0);
		
		$params = array($idZona, $nomZona);
		return parent::execute(SQLZona::AGREGAR_ZONA, $params);
	}

	function actualizarZona($idZona, $nomZona, $id_Zona){
		
$idZona = parent::prepareParam($idZona, Query::DATATYPE_INTEGER);
$nomZona = parent::prepareParam($nomZona, Query::DATATYPE_STRING, 0);

		
		$params = array($idZona, $nomZona, $id_Zona);
		return parent::execute(SQLZona::ACTUALIZAR_ZONA, $params);		
	}
	
	
	function consultarZona(){	
		return parent::executeQuery(SQLZona::CONSULTAR_ZONA);
	}	
	
	function eliminarZona($id_Zona){
		$params = array($id_Zona);
		return parent::execute(SQLZona::ELIMINAR_ZONA, $params);		
	}
	
//------------------------------	
	function consultarZonaXidZona($idZona){	
		$params = array($idZona);
		return parent::executeQuery(SQLZona::CONSULTAR_ZONA_POR_IDZONA, $params);
	}	
	
	function existeZonaXidZona($idZona){
		$params = array($idZona);
		$tabla = parent::executeQuery(SQLZona::CONSULTAR_ZONA_POR_IDZONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarZonaXnomZona($nomZona){	
		$params = array("%$nomZona%");
		return parent::executeQuery(SQLZona::CONSULTAR_ZONA_POR_NOMZONA, $params);
	}	
	
	function consultarZonaXnomZonaAprox($nomZona){	
		$params = array("%$nomZona%");
		return parent::executeQuery(SQLZona::CONSULTAR_ZONA_POR_NOMZONA_APROX, $params);
	}	
	
	function existeZonaXnomZona($nomZona){
		$params = array($nomZona);
		$tabla = parent::executeQuery(SQLZona::CONSULTAR_ZONA_POR_NOMZONA, $params);
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