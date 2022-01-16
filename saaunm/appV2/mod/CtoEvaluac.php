<?php 
require_once('../../../config/config.php');
require_once(MOD.'CtoEvaluac.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLCtoEvaluac.php');

class CtoEvaluac extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idCtoEvaluac, $idCurso, $nomCtoEvaluac, $descCtoEvaluac, $numEvaCtoEvaluac) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idCtoEvaluac, $idCurso, $nomCtoEvaluac, $descCtoEvaluac, $numEvaCtoEvaluac, $id_CtoEvaluac);
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
	function compActualizarcambiarTabla1cambiarTabla2($idCtoEvaluac, $idCurso, $nomCtoEvaluac, $descCtoEvaluac, $numEvaCtoEvaluac) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idCtoEvaluac, $idCurso, $nomCtoEvaluac, $descCtoEvaluac, $numEvaCtoEvaluac, $id_CtoEvaluac);
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
	function agregarCtoEvaluac($idCtoEvaluac, $idCurso, $nomCtoEvaluac, $descCtoEvaluac, $numEvaCtoEvaluac) {
$idCtoEvaluac = parent::prepareParam($idCtoEvaluac, Query::DATATYPE_INTEGER);
$idCurso = parent::prepareParam($idCurso, Query::DATATYPE_INTEGER);
$nomCtoEvaluac = parent::prepareParam($nomCtoEvaluac, Query::DATATYPE_STRING, 0);
$descCtoEvaluac = parent::prepareParam($descCtoEvaluac, Query::DATATYPE_STRING, 0);
$numEvaCtoEvaluac = parent::prepareParam($numEvaCtoEvaluac, Query::DATATYPE_INTEGER);
		
		$params = array($idCtoEvaluac, $idCurso, $nomCtoEvaluac, $descCtoEvaluac, $numEvaCtoEvaluac);
		return parent::execute(SQLCtoEvaluac::AGREGAR_CTOEVALUAC, $params);
	}

	function actualizarCtoEvaluac($idCtoEvaluac, $idCurso, $nomCtoEvaluac, $descCtoEvaluac, $numEvaCtoEvaluac, $id_CtoEvaluac){
		
$idCtoEvaluac = parent::prepareParam($idCtoEvaluac, Query::DATATYPE_INTEGER);
$idCurso = parent::prepareParam($idCurso, Query::DATATYPE_INTEGER);
$nomCtoEvaluac = parent::prepareParam($nomCtoEvaluac, Query::DATATYPE_STRING, 0);
$descCtoEvaluac = parent::prepareParam($descCtoEvaluac, Query::DATATYPE_STRING, 0);
$numEvaCtoEvaluac = parent::prepareParam($numEvaCtoEvaluac, Query::DATATYPE_INTEGER);

		
		$params = array($idCtoEvaluac, $idCurso, $nomCtoEvaluac, $descCtoEvaluac, $numEvaCtoEvaluac, $id_CtoEvaluac);
		return parent::execute(SQLCtoEvaluac::ACTUALIZAR_CTOEVALUAC, $params);		
	}
	
	
	function consultarCtoEvaluac(){	
		return parent::executeQuery(SQLCtoEvaluac::CONSULTAR_CTOEVALUAC);
	}	
	
	function eliminarCtoEvaluac($id_CtoEvaluac){
		$params = array($id_CtoEvaluac);
		return parent::execute(SQLCtoEvaluac::ELIMINAR_CTOEVALUAC, $params);		
	}
	
//------------------------------	
	function consultarCtoEvaluacXidCtoEvaluac($idCtoEvaluac){	
		$params = array($idCtoEvaluac);
		return parent::executeQuery(SQLCtoEvaluac::CONSULTAR_CTOEVALUAC_POR_IDCTOEVALUAC, $params);
	}	
	
	function existeCtoEvaluacXidCtoEvaluac($idCtoEvaluac){
		$params = array($idCtoEvaluac);
		$tabla = parent::executeQuery(SQLCtoEvaluac::CONSULTAR_CTOEVALUAC_POR_IDCTOEVALUAC, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarCtoEvaluacXidCurso($idCurso){	
		$params = array($idCurso);
		return parent::executeQuery(SQLCtoEvaluac::CONSULTAR_CTOEVALUAC_POR_IDCURSO, $params);
	}	
	
	function existeCtoEvaluacXidCurso($idCurso){
		$params = array($idCurso);
		$tabla = parent::executeQuery(SQLCtoEvaluac::CONSULTAR_CTOEVALUAC_POR_IDCURSO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarCtoEvaluacXnomCtoEvaluac($nomCtoEvaluac){	
		$params = array("%$nomCtoEvaluac%");
		return parent::executeQuery(SQLCtoEvaluac::CONSULTAR_CTOEVALUAC_POR_NOMCTOEVALUAC, $params);
	}	
	
	function consultarCtoEvaluacXnomCtoEvaluacAprox($nomCtoEvaluac){	
		$params = array("%$nomCtoEvaluac%");
		return parent::executeQuery(SQLCtoEvaluac::CONSULTAR_CTOEVALUAC_POR_NOMCTOEVALUAC_APROX, $params);
	}	
	
	function existeCtoEvaluacXnomCtoEvaluac($nomCtoEvaluac){
		$params = array($nomCtoEvaluac);
		$tabla = parent::executeQuery(SQLCtoEvaluac::CONSULTAR_CTOEVALUAC_POR_NOMCTOEVALUAC, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarCtoEvaluacXdescCtoEvaluac($descCtoEvaluac){	
		$params = array("%$descCtoEvaluac%");
		return parent::executeQuery(SQLCtoEvaluac::CONSULTAR_CTOEVALUAC_POR_DESCCTOEVALUAC, $params);
	}	
	
	function consultarCtoEvaluacXdescCtoEvaluacAprox($descCtoEvaluac){	
		$params = array("%$descCtoEvaluac%");
		return parent::executeQuery(SQLCtoEvaluac::CONSULTAR_CTOEVALUAC_POR_DESCCTOEVALUAC_APROX, $params);
	}	
	
	function existeCtoEvaluacXdescCtoEvaluac($descCtoEvaluac){
		$params = array($descCtoEvaluac);
		$tabla = parent::executeQuery(SQLCtoEvaluac::CONSULTAR_CTOEVALUAC_POR_DESCCTOEVALUAC, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarCtoEvaluacXnumEvaCtoEvaluac($numEvaCtoEvaluac){	
		$params = array($numEvaCtoEvaluac);
		return parent::executeQuery(SQLCtoEvaluac::CONSULTAR_CTOEVALUAC_POR_NUMEVACTOEVALUAC, $params);
	}	
	
	function existeCtoEvaluacXnumEvaCtoEvaluac($numEvaCtoEvaluac){
		$params = array($numEvaCtoEvaluac);
		$tabla = parent::executeQuery(SQLCtoEvaluac::CONSULTAR_CTOEVALUAC_POR_NUMEVACTOEVALUAC, $params);
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