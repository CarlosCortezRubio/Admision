<?php 
require_once('../../../config/config.php');
require_once(MOD.'PrelaAsig.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLPrelaAsig.php');

class PrelaAsig extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idPenAsig, $idAsignatura, $idPrelaAsig) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idPenAsig, $idAsignatura, $idPrelaAsig, $id_PrelaAsig);
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
	function compActualizarcambiarTabla1cambiarTabla2($idPenAsig, $idAsignatura, $idPrelaAsig) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idPenAsig, $idAsignatura, $idPrelaAsig, $id_PrelaAsig);
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
	function agregarPrelaAsig($idPenAsig, $idAsignatura, $idPrelaAsig) {
$idPenAsig = parent::prepareParam($idPenAsig, Query::DATATYPE_INTEGER);
$idAsignatura = parent::prepareParam($idAsignatura, Query::DATATYPE_INTEGER);
$idPrelaAsig = parent::prepareParam($idPrelaAsig, Query::DATATYPE_INTEGER);
		
		$params = array($idPenAsig, $idAsignatura, $idPrelaAsig);
		return parent::execute(SQLPrelaAsig::AGREGAR_PRELAASIG, $params);
	}

	function actualizarPrelaAsig($idPenAsig, $idAsignatura, $idPrelaAsig, $id_PrelaAsig){
		
$idPenAsig = parent::prepareParam($idPenAsig, Query::DATATYPE_INTEGER);
$idAsignatura = parent::prepareParam($idAsignatura, Query::DATATYPE_INTEGER);
$idPrelaAsig = parent::prepareParam($idPrelaAsig, Query::DATATYPE_INTEGER);

		
		$params = array($idPenAsig, $idAsignatura, $idPrelaAsig, $id_PrelaAsig);
		return parent::execute(SQLPrelaAsig::ACTUALIZAR_PRELAASIG, $params);		
	}
	
	
	function consultarPrelaAsig(){	
		return parent::executeQuery(SQLPrelaAsig::CONSULTAR_PRELAASIG);
	}	
	
	function eliminarPrelaAsig($id_PrelaAsig){
		$params = array($id_PrelaAsig);
		return parent::execute(SQLPrelaAsig::ELIMINAR_PRELAASIG, $params);		
	}
	
//------------------------------	
	function consultarPrelaAsigXidPenAsig($idPenAsig){	
		$params = array($idPenAsig);
		return parent::executeQuery(SQLPrelaAsig::CONSULTAR_PRELAASIG_POR_IDPENASIG, $params);
	}	
	
	function existePrelaAsigXidPenAsig($idPenAsig){
		$params = array($idPenAsig);
		$tabla = parent::executeQuery(SQLPrelaAsig::CONSULTAR_PRELAASIG_POR_IDPENASIG, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPrelaAsigXidAsignatura($idAsignatura){	
		$params = array($idAsignatura);
		return parent::executeQuery(SQLPrelaAsig::CONSULTAR_PRELAASIG_POR_IDASIGNATURA, $params);
	}	
	
	function existePrelaAsigXidAsignatura($idAsignatura){
		$params = array($idAsignatura);
		$tabla = parent::executeQuery(SQLPrelaAsig::CONSULTAR_PRELAASIG_POR_IDASIGNATURA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPrelaAsigXidPrelaAsig($idPrelaAsig){	
		$params = array($idPrelaAsig);
		return parent::executeQuery(SQLPrelaAsig::CONSULTAR_PRELAASIG_POR_IDPRELAASIG, $params);
	}	
	
	function existePrelaAsigXidPrelaAsig($idPrelaAsig){
		$params = array($idPrelaAsig);
		$tabla = parent::executeQuery(SQLPrelaAsig::CONSULTAR_PRELAASIG_POR_IDPRELAASIG, $params);
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