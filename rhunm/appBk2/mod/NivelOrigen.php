<?php 
require_once('../../../config/config.php');
require_once(MOD.'NivelOrigen.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLNivelOrigen.php');

class NivelOrigen extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idNivelOrigen, $codNivelOrigen, $nomNivelOrigen) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idNivelOrigen, $codNivelOrigen, $nomNivelOrigen, $id_NivelOrigen);
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
	function compActualizarcambiarTabla1cambiarTabla2($idNivelOrigen, $codNivelOrigen, $nomNivelOrigen) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idNivelOrigen, $codNivelOrigen, $nomNivelOrigen, $id_NivelOrigen);
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
	function agregarNivelOrigen($idNivelOrigen, $codNivelOrigen, $nomNivelOrigen) {
$idNivelOrigen = parent::prepareParam($idNivelOrigen, Query::DATATYPE_INTEGER);
$codNivelOrigen = parent::prepareParam($codNivelOrigen, Query::DATATYPE_STRING, 0);
$nomNivelOrigen = parent::prepareParam($nomNivelOrigen, Query::DATATYPE_STRING, 0);
		
		$params = array($idNivelOrigen, $codNivelOrigen, $nomNivelOrigen);
		return parent::execute(SQLNivelOrigen::AGREGAR_NIVELORIGEN, $params);
	}

	function actualizarNivelOrigen($idNivelOrigen, $codNivelOrigen, $nomNivelOrigen, $id_NivelOrigen){
		
$idNivelOrigen = parent::prepareParam($idNivelOrigen, Query::DATATYPE_INTEGER);
$codNivelOrigen = parent::prepareParam($codNivelOrigen, Query::DATATYPE_STRING, 0);
$nomNivelOrigen = parent::prepareParam($nomNivelOrigen, Query::DATATYPE_STRING, 0);

		
		$params = array($idNivelOrigen, $codNivelOrigen, $nomNivelOrigen, $id_NivelOrigen);
		return parent::execute(SQLNivelOrigen::ACTUALIZAR_NIVELORIGEN, $params);		
	}
	
	
	function consultarNivelOrigen(){	
		return parent::executeQuery(SQLNivelOrigen::CONSULTAR_NIVELORIGEN);
	}	
	
	function eliminarNivelOrigen($id_NivelOrigen){
		$params = array($id_NivelOrigen);
		return parent::execute(SQLNivelOrigen::ELIMINAR_NIVELORIGEN, $params);		
	}
	
//------------------------------	
	function consultarNivelOrigenXidNivelOrigen($idNivelOrigen){	
		$params = array($idNivelOrigen);
		return parent::executeQuery(SQLNivelOrigen::CONSULTAR_NIVELORIGEN_POR_IDNIVELORIGEN, $params);
	}	
	
	function existeNivelOrigenXidNivelOrigen($idNivelOrigen){
		$params = array($idNivelOrigen);
		$tabla = parent::executeQuery(SQLNivelOrigen::CONSULTAR_NIVELORIGEN_POR_IDNIVELORIGEN, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarNivelOrigenXcodNivelOrigen($codNivelOrigen){	
		$params = array("%$codNivelOrigen%");
		return parent::executeQuery(SQLNivelOrigen::CONSULTAR_NIVELORIGEN_POR_CODNIVELORIGEN, $params);
	}	
	
	function consultarNivelOrigenXcodNivelOrigenAprox($codNivelOrigen){	
		$params = array("%$codNivelOrigen%");
		return parent::executeQuery(SQLNivelOrigen::CONSULTAR_NIVELORIGEN_POR_CODNIVELORIGEN_APROX, $params);
	}	
	
	function existeNivelOrigenXcodNivelOrigen($codNivelOrigen){
		$params = array($codNivelOrigen);
		$tabla = parent::executeQuery(SQLNivelOrigen::CONSULTAR_NIVELORIGEN_POR_CODNIVELORIGEN, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarNivelOrigenXnomNivelOrigen($nomNivelOrigen){	
		$params = array("%$nomNivelOrigen%");
		return parent::executeQuery(SQLNivelOrigen::CONSULTAR_NIVELORIGEN_POR_NOMNIVELORIGEN, $params);
	}	
	
	function consultarNivelOrigenXnomNivelOrigenAprox($nomNivelOrigen){	
		$params = array("%$nomNivelOrigen%");
		return parent::executeQuery(SQLNivelOrigen::CONSULTAR_NIVELORIGEN_POR_NOMNIVELORIGEN_APROX, $params);
	}	
	
	function existeNivelOrigenXnomNivelOrigen($nomNivelOrigen){
		$params = array($nomNivelOrigen);
		$tabla = parent::executeQuery(SQLNivelOrigen::CONSULTAR_NIVELORIGEN_POR_NOMNIVELORIGEN, $params);
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