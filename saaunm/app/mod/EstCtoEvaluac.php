<?php 
require_once('../../../config/config.php');
require_once(MOD.'EstCtoEvaluac.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLEstCtoEvaluac.php');

class EstCtoEvaluac extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idEstCtoEvaluac, $idEstudiante, $idCtoEvaluac, $notaEstCtoEvaluac) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idEstCtoEvaluac, $idEstudiante, $idCtoEvaluac, $notaEstCtoEvaluac, $id_EstCtoEvaluac);
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
	function compActualizarcambiarTabla1cambiarTabla2($idEstCtoEvaluac, $idEstudiante, $idCtoEvaluac, $notaEstCtoEvaluac) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idEstCtoEvaluac, $idEstudiante, $idCtoEvaluac, $notaEstCtoEvaluac, $id_EstCtoEvaluac);
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
	function agregarEstCtoEvaluac($idEstCtoEvaluac, $idEstudiante, $idCtoEvaluac, $notaEstCtoEvaluac) {
$idEstCtoEvaluac = parent::prepareParam($idEstCtoEvaluac, Query::DATATYPE_INTEGER);
$idEstudiante = parent::prepareParam($idEstudiante, Query::DATATYPE_INTEGER);
$idCtoEvaluac = parent::prepareParam($idCtoEvaluac, Query::DATATYPE_INTEGER);
$notaEstCtoEvaluac = parent::prepareParam($notaEstCtoEvaluac, Query::DATATYPE_INTEGER);
		
		$params = array($idEstCtoEvaluac, $idEstudiante, $idCtoEvaluac, $notaEstCtoEvaluac);
		return parent::execute(SQLEstCtoEvaluac::AGREGAR_ESTCTOEVALUAC, $params);
	}

	function actualizarEstCtoEvaluac($idEstCtoEvaluac, $idEstudiante, $idCtoEvaluac, $notaEstCtoEvaluac, $id_EstCtoEvaluac){
		
$idEstCtoEvaluac = parent::prepareParam($idEstCtoEvaluac, Query::DATATYPE_INTEGER);
$idEstudiante = parent::prepareParam($idEstudiante, Query::DATATYPE_INTEGER);
$idCtoEvaluac = parent::prepareParam($idCtoEvaluac, Query::DATATYPE_INTEGER);
$notaEstCtoEvaluac = parent::prepareParam($notaEstCtoEvaluac, Query::DATATYPE_INTEGER);

		
		$params = array($idEstCtoEvaluac, $idEstudiante, $idCtoEvaluac, $notaEstCtoEvaluac, $id_EstCtoEvaluac);
		return parent::execute(SQLEstCtoEvaluac::ACTUALIZAR_ESTCTOEVALUAC, $params);		
	}
	
	
	function consultarEstCtoEvaluac(){	
		return parent::executeQuery(SQLEstCtoEvaluac::CONSULTAR_ESTCTOEVALUAC);
	}	
	
	function eliminarEstCtoEvaluac($id_EstCtoEvaluac){
		$params = array($id_EstCtoEvaluac);
		return parent::execute(SQLEstCtoEvaluac::ELIMINAR_ESTCTOEVALUAC, $params);		
	}
	
//------------------------------	
	function consultarEstCtoEvaluacXidEstCtoEvaluac($idEstCtoEvaluac){	
		$params = array($idEstCtoEvaluac);
		return parent::executeQuery(SQLEstCtoEvaluac::CONSULTAR_ESTCTOEVALUAC_POR_IDESTCTOEVALUAC, $params);
	}	
	
	function existeEstCtoEvaluacXidEstCtoEvaluac($idEstCtoEvaluac){
		$params = array($idEstCtoEvaluac);
		$tabla = parent::executeQuery(SQLEstCtoEvaluac::CONSULTAR_ESTCTOEVALUAC_POR_IDESTCTOEVALUAC, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEstCtoEvaluacXidEstudiante($idEstudiante){	
		$params = array($idEstudiante);
		return parent::executeQuery(SQLEstCtoEvaluac::CONSULTAR_ESTCTOEVALUAC_POR_IDESTUDIANTE, $params);
	}	
	
	function existeEstCtoEvaluacXidEstudiante($idEstudiante){
		$params = array($idEstudiante);
		$tabla = parent::executeQuery(SQLEstCtoEvaluac::CONSULTAR_ESTCTOEVALUAC_POR_IDESTUDIANTE, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEstCtoEvaluacXidCtoEvaluac($idCtoEvaluac){	
		$params = array($idCtoEvaluac);
		return parent::executeQuery(SQLEstCtoEvaluac::CONSULTAR_ESTCTOEVALUAC_POR_IDCTOEVALUAC, $params);
	}	
	
	function existeEstCtoEvaluacXidCtoEvaluac($idCtoEvaluac){
		$params = array($idCtoEvaluac);
		$tabla = parent::executeQuery(SQLEstCtoEvaluac::CONSULTAR_ESTCTOEVALUAC_POR_IDCTOEVALUAC, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEstCtoEvaluacXnotaEstCtoEvaluac($notaEstCtoEvaluac){	
		$params = array($notaEstCtoEvaluac);
		return parent::executeQuery(SQLEstCtoEvaluac::CONSULTAR_ESTCTOEVALUAC_POR_NOTAESTCTOEVALUAC, $params);
	}	
	
	function existeEstCtoEvaluacXnotaEstCtoEvaluac($notaEstCtoEvaluac){
		$params = array($notaEstCtoEvaluac);
		$tabla = parent::executeQuery(SQLEstCtoEvaluac::CONSULTAR_ESTCTOEVALUAC_POR_NOTAESTCTOEVALUAC, $params);
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