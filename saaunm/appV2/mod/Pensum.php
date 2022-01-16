<?php 
require_once('../../../config/config.php');
require_once(MOD.'Pensum.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLPensum.php');

class Pensum extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idPensum, $idEdoRegistro, $nomPensum) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idPensum, $idEdoRegistro, $nomPensum, $id_Pensum);
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
	function compActualizarcambiarTabla1cambiarTabla2($idPensum, $idEdoRegistro, $nomPensum) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idPensum, $idEdoRegistro, $nomPensum, $id_Pensum);
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
	function agregarPensum($idPensum, $idEdoRegistro, $nomPensum) {
$idPensum = parent::prepareParam($idPensum, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$nomPensum = parent::prepareParam($nomPensum, Query::DATATYPE_STRING, 0);
		
		$params = array($idPensum, $idEdoRegistro, $nomPensum);
		return parent::execute(SQLPensum::AGREGAR_PENSUM, $params);
	}

	function actualizarPensum($idPensum, $idEdoRegistro, $nomPensum, $id_Pensum){
		
$idPensum = parent::prepareParam($idPensum, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$nomPensum = parent::prepareParam($nomPensum, Query::DATATYPE_STRING, 0);

		
		$params = array($idPensum, $idEdoRegistro, $nomPensum, $id_Pensum);
		return parent::execute(SQLPensum::ACTUALIZAR_PENSUM, $params);		
	}
	
	
	function consultarPensum(){	
		return parent::executeQuery(SQLPensum::CONSULTAR_PENSUM);
	}	
	
	function eliminarPensum($id_Pensum){
		$params = array($id_Pensum);
		return parent::execute(SQLPensum::ELIMINAR_PENSUM, $params);		
	}
	
//------------------------------	
	function consultarPensumXidPensum($idPensum){	
		$params = array($idPensum);
		return parent::executeQuery(SQLPensum::CONSULTAR_PENSUM_POR_IDPENSUM, $params);
	}	
	
	function existePensumXidPensum($idPensum){
		$params = array($idPensum);
		$tabla = parent::executeQuery(SQLPensum::CONSULTAR_PENSUM_POR_IDPENSUM, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPensumXidEdoRegistro($idEdoRegistro){	
		$params = array($idEdoRegistro);
		return parent::executeQuery(SQLPensum::CONSULTAR_PENSUM_POR_IDEDOREGISTRO, $params);
	}	
	
	function existePensumXidEdoRegistro($idEdoRegistro){
		$params = array($idEdoRegistro);
		$tabla = parent::executeQuery(SQLPensum::CONSULTAR_PENSUM_POR_IDEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPensumXnomPensum($nomPensum){	
		$params = array("%$nomPensum%");
		return parent::executeQuery(SQLPensum::CONSULTAR_PENSUM_POR_NOMPENSUM, $params);
	}	
	
	function consultarPensumXnomPensumAprox($nomPensum){	
		$params = array("%$nomPensum%");
		return parent::executeQuery(SQLPensum::CONSULTAR_PENSUM_POR_NOMPENSUM_APROX, $params);
	}	
	
	function existePensumXnomPensum($nomPensum){
		$params = array($nomPensum);
		$tabla = parent::executeQuery(SQLPensum::CONSULTAR_PENSUM_POR_NOMPENSUM, $params);
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