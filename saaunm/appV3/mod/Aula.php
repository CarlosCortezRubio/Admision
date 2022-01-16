<?php 
require_once('../../../config/config.php');
require_once(MOD.'Aula.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLAula.php');

class Aula extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idAula, $idSede, $codAula, $nomAula, $descAula) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idAula, $idSede, $codAula, $nomAula, $descAula, $id_Aula);
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
	function compActualizarcambiarTabla1cambiarTabla2($idAula, $idSede, $codAula, $nomAula, $descAula) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idAula, $idSede, $codAula, $nomAula, $descAula, $id_Aula);
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
	function agregarAula($idAula, $idSede, $codAula, $nomAula, $descAula) {
$idAula = parent::prepareParam($idAula, Query::DATATYPE_INTEGER);
$idSede = parent::prepareParam($idSede, Query::DATATYPE_INTEGER);
$codAula = parent::prepareParam($codAula, Query::DATATYPE_STRING, 0);
$nomAula = parent::prepareParam($nomAula, Query::DATATYPE_STRING, 0);
$descAula = parent::prepareParam($descAula, Query::DATATYPE_STRING, 0);
		
		$params = array($idAula, $idSede, $codAula, $nomAula, $descAula);
		return parent::execute(SQLAula::AGREGAR_AULA, $params);
	}

	function actualizarAula($idAula, $idSede, $codAula, $nomAula, $descAula, $id_Aula){
		
$idAula = parent::prepareParam($idAula, Query::DATATYPE_INTEGER);
$idSede = parent::prepareParam($idSede, Query::DATATYPE_INTEGER);
$codAula = parent::prepareParam($codAula, Query::DATATYPE_STRING, 0);
$nomAula = parent::prepareParam($nomAula, Query::DATATYPE_STRING, 0);
$descAula = parent::prepareParam($descAula, Query::DATATYPE_STRING, 0);

		
		$params = array($idAula, $idSede, $codAula, $nomAula, $descAula, $id_Aula);
		return parent::execute(SQLAula::ACTUALIZAR_AULA, $params);		
	}
	
	
	function consultarAula(){	
		return parent::executeQuery(SQLAula::CONSULTAR_AULA);
	}	
	
	function eliminarAula($id_Aula){
		$params = array($id_Aula);
		return parent::execute(SQLAula::ELIMINAR_AULA, $params);		
	}
	
//------------------------------	
	function consultarAulaXidAula($idAula){	
		$params = array($idAula);
		return parent::executeQuery(SQLAula::CONSULTAR_AULA_POR_IDAULA, $params);
	}	
	
	function existeAulaXidAula($idAula){
		$params = array($idAula);
		$tabla = parent::executeQuery(SQLAula::CONSULTAR_AULA_POR_IDAULA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarAulaXidSede($idSede){	
		$params = array($idSede);
		return parent::executeQuery(SQLAula::CONSULTAR_AULA_POR_IDSEDE, $params);
	}	
	
	function existeAulaXidSede($idSede){
		$params = array($idSede);
		$tabla = parent::executeQuery(SQLAula::CONSULTAR_AULA_POR_IDSEDE, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarAulaXcodAula($codAula){	
		$params = array("%$codAula%");
		return parent::executeQuery(SQLAula::CONSULTAR_AULA_POR_CODAULA, $params);
	}	
	
	function consultarAulaXcodAulaAprox($codAula){	
		$params = array("%$codAula%");
		return parent::executeQuery(SQLAula::CONSULTAR_AULA_POR_CODAULA_APROX, $params);
	}	
	
	function existeAulaXcodAula($codAula){
		$params = array($codAula);
		$tabla = parent::executeQuery(SQLAula::CONSULTAR_AULA_POR_CODAULA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarAulaXnomAula($nomAula){	
		$params = array("%$nomAula%");
		return parent::executeQuery(SQLAula::CONSULTAR_AULA_POR_NOMAULA, $params);
	}	
	
	function consultarAulaXnomAulaAprox($nomAula){	
		$params = array("%$nomAula%");
		return parent::executeQuery(SQLAula::CONSULTAR_AULA_POR_NOMAULA_APROX, $params);
	}	
	
	function existeAulaXnomAula($nomAula){
		$params = array($nomAula);
		$tabla = parent::executeQuery(SQLAula::CONSULTAR_AULA_POR_NOMAULA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarAulaXdescAula($descAula){	
		$params = array("%$descAula%");
		return parent::executeQuery(SQLAula::CONSULTAR_AULA_POR_DESCAULA, $params);
	}	
	
	function consultarAulaXdescAulaAprox($descAula){	
		$params = array("%$descAula%");
		return parent::executeQuery(SQLAula::CONSULTAR_AULA_POR_DESCAULA_APROX, $params);
	}	
	
	function existeAulaXdescAula($descAula){
		$params = array($descAula);
		$tabla = parent::executeQuery(SQLAula::CONSULTAR_AULA_POR_DESCAULA, $params);
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