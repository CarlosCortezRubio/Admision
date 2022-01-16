<?php 
require_once('../../../config/config.php');
require_once(MOD.'EstCur.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLEstCur.php');

class EstCur extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idEstCur, $idCurso, $idEstudiante, $notaEstCur, $inasistEstCur, $obsEstCur) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idEstCur, $idCurso, $idEstudiante, $notaEstCur, $inasistEstCur, $obsEstCur, $id_EstCur);
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
	function compActualizarcambiarTabla1cambiarTabla2($idEstCur, $idCurso, $idEstudiante, $notaEstCur, $inasistEstCur, $obsEstCur) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idEstCur, $idCurso, $idEstudiante, $notaEstCur, $inasistEstCur, $obsEstCur, $id_EstCur);
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
	function agregarEstCur($idEstCur, $idCurso, $idEstudiante, $notaEstCur, $inasistEstCur, $obsEstCur) {
$idEstCur = parent::prepareParam($idEstCur, Query::DATATYPE_INTEGER);
$idCurso = parent::prepareParam($idCurso, Query::DATATYPE_INTEGER);
$idEstudiante = parent::prepareParam($idEstudiante, Query::DATATYPE_INTEGER);
$notaEstCur = parent::prepareParam($notaEstCur, Query::DATATYPE_INTEGER);
$inasistEstCur = parent::prepareParam($inasistEstCur, Query::DATATYPE_INTEGER);
$obsEstCur = parent::prepareParam($obsEstCur, Query::DATATYPE_STRING, 0);
		
		$params = array($idEstCur, $idCurso, $idEstudiante, $notaEstCur, $inasistEstCur, $obsEstCur);
		return parent::execute(SQLEstCur::AGREGAR_ESTCUR, $params);
	}

	function actualizarEstCur($idEstCur, $idCurso, $idEstudiante, $notaEstCur, $inasistEstCur, $obsEstCur, $id_EstCur){
		
$idEstCur = parent::prepareParam($idEstCur, Query::DATATYPE_INTEGER);
$idCurso = parent::prepareParam($idCurso, Query::DATATYPE_INTEGER);
$idEstudiante = parent::prepareParam($idEstudiante, Query::DATATYPE_INTEGER);
$notaEstCur = parent::prepareParam($notaEstCur, Query::DATATYPE_INTEGER);
$inasistEstCur = parent::prepareParam($inasistEstCur, Query::DATATYPE_INTEGER);
$obsEstCur = parent::prepareParam($obsEstCur, Query::DATATYPE_STRING, 0);

		
		$params = array($idEstCur, $idCurso, $idEstudiante, $notaEstCur, $inasistEstCur, $obsEstCur, $id_EstCur);
		return parent::execute(SQLEstCur::ACTUALIZAR_ESTCUR, $params);		
	}
	
	
	function consultarEstCur(){	
		return parent::executeQuery(SQLEstCur::CONSULTAR_ESTCUR);
	}	
	
	function eliminarEstCur($id_EstCur){
		$params = array($id_EstCur);
		return parent::execute(SQLEstCur::ELIMINAR_ESTCUR, $params);		
	}
	
//------------------------------	
	function consultarEstCurXidEstCur($idEstCur){	
		$params = array($idEstCur);
		return parent::executeQuery(SQLEstCur::CONSULTAR_ESTCUR_POR_IDESTCUR, $params);
	}	
	
	function existeEstCurXidEstCur($idEstCur){
		$params = array($idEstCur);
		$tabla = parent::executeQuery(SQLEstCur::CONSULTAR_ESTCUR_POR_IDESTCUR, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEstCurXidCurso($idCurso){	
		$params = array($idCurso);
		return parent::executeQuery(SQLEstCur::CONSULTAR_ESTCUR_POR_IDCURSO, $params);
	}	
	
	function existeEstCurXidCurso($idCurso){
		$params = array($idCurso);
		$tabla = parent::executeQuery(SQLEstCur::CONSULTAR_ESTCUR_POR_IDCURSO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEstCurXidEstudiante($idEstudiante){	
		$params = array($idEstudiante);
		return parent::executeQuery(SQLEstCur::CONSULTAR_ESTCUR_POR_IDESTUDIANTE, $params);
	}	
	
	function existeEstCurXidEstudiante($idEstudiante){
		$params = array($idEstudiante);
		$tabla = parent::executeQuery(SQLEstCur::CONSULTAR_ESTCUR_POR_IDESTUDIANTE, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEstCurXnotaEstCur($notaEstCur){	
		$params = array($notaEstCur);
		return parent::executeQuery(SQLEstCur::CONSULTAR_ESTCUR_POR_NOTAESTCUR, $params);
	}	
	
	function existeEstCurXnotaEstCur($notaEstCur){
		$params = array($notaEstCur);
		$tabla = parent::executeQuery(SQLEstCur::CONSULTAR_ESTCUR_POR_NOTAESTCUR, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEstCurXinasistEstCur($inasistEstCur){	
		$params = array($inasistEstCur);
		return parent::executeQuery(SQLEstCur::CONSULTAR_ESTCUR_POR_INASISTESTCUR, $params);
	}	
	
	function existeEstCurXinasistEstCur($inasistEstCur){
		$params = array($inasistEstCur);
		$tabla = parent::executeQuery(SQLEstCur::CONSULTAR_ESTCUR_POR_INASISTESTCUR, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEstCurXobsEstCur($obsEstCur){	
		$params = array("%$obsEstCur%");
		return parent::executeQuery(SQLEstCur::CONSULTAR_ESTCUR_POR_OBSESTCUR, $params);
	}	
	
	function consultarEstCurXobsEstCurAprox($obsEstCur){	
		$params = array("%$obsEstCur%");
		return parent::executeQuery(SQLEstCur::CONSULTAR_ESTCUR_POR_OBSESTCUR_APROX, $params);
	}	
	
	function existeEstCurXobsEstCur($obsEstCur){
		$params = array($obsEstCur);
		$tabla = parent::executeQuery(SQLEstCur::CONSULTAR_ESTCUR_POR_OBSESTCUR, $params);
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