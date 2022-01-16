<?php 
require_once('../../../config/config.php');
require_once(MOD.'Sede.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLSede.php');

class Sede extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idSede, $nomSede) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idSede, $nomSede, $id_Sede);
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
	function compActualizarcambiarTabla1cambiarTabla2($idSede, $nomSede) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idSede, $nomSede, $id_Sede);
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
	function agregarSede($idSede, $nomSede) {
$idSede = parent::prepareParam($idSede, Query::DATATYPE_INTEGER);
$nomSede = parent::prepareParam($nomSede, Query::DATATYPE_STRING, 0);
		
		$params = array($idSede, $nomSede);
		return parent::execute(SQLSede::AGREGAR_SEDE, $params);
	}

	function actualizarSede($idSede, $nomSede, $id_Sede){
		
$idSede = parent::prepareParam($idSede, Query::DATATYPE_INTEGER);
$nomSede = parent::prepareParam($nomSede, Query::DATATYPE_STRING, 0);

		
		$params = array($idSede, $nomSede, $id_Sede);
		return parent::execute(SQLSede::ACTUALIZAR_SEDE, $params);		
	}
	
	
	function consultarSede(){	
		return parent::executeQuery(SQLSede::CONSULTAR_SEDE);
	}	
	
	function eliminarSede($id_Sede){
		$params = array($id_Sede);
		return parent::execute(SQLSede::ELIMINAR_SEDE, $params);		
	}
	
//------------------------------	
	function consultarSedeXidSede($idSede){	
		$params = array($idSede);
		return parent::executeQuery(SQLSede::CONSULTAR_SEDE_POR_IDSEDE, $params);
	}	
	
	function existeSedeXidSede($idSede){
		$params = array($idSede);
		$tabla = parent::executeQuery(SQLSede::CONSULTAR_SEDE_POR_IDSEDE, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarSedeXnomSede($nomSede){	
		$params = array("%$nomSede%");
		return parent::executeQuery(SQLSede::CONSULTAR_SEDE_POR_NOMSEDE, $params);
	}	
	
	function consultarSedeXnomSedeAprox($nomSede){	
		$params = array("%$nomSede%");
		return parent::executeQuery(SQLSede::CONSULTAR_SEDE_POR_NOMSEDE_APROX, $params);
	}	
	
	function existeSedeXnomSede($nomSede){
		$params = array($nomSede);
		$tabla = parent::executeQuery(SQLSede::CONSULTAR_SEDE_POR_NOMSEDE, $params);
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