<?php 
require_once('../../../config/config.php');
require_once(MOD.'Horario.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLHorario.php');

class Horario extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idHorario, $idDia, $idAula, $idCurso, $horIniHorario, $horFinHorario) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idHorario, $idDia, $idAula, $idCurso, $horIniHorario, $horFinHorario, $id_Horario);
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
	function compActualizarcambiarTabla1cambiarTabla2($idHorario, $idDia, $idAula, $idCurso, $horIniHorario, $horFinHorario) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idHorario, $idDia, $idAula, $idCurso, $horIniHorario, $horFinHorario, $id_Horario);
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
	function agregarHorario($idHorario, $idDia, $idAula, $idCurso, $horIniHorario, $horFinHorario) {
$idHorario = parent::prepareParam($idHorario, Query::DATATYPE_INTEGER);
$idDia = parent::prepareParam($idDia, Query::DATATYPE_INTEGER);
$idAula = parent::prepareParam($idAula, Query::DATATYPE_INTEGER);
$idCurso = parent::prepareParam($idCurso, Query::DATATYPE_INTEGER);
$horIniHorario = parent::prepareParam($horIniHorario, Query::DATATYPE_STRING, 0);
$horFinHorario = parent::prepareParam($horFinHorario, Query::DATATYPE_STRING, 0);
		
		$params = array($idHorario, $idDia, $idAula, $idCurso, $horIniHorario, $horFinHorario);
		return parent::execute(SQLHorario::AGREGAR_HORARIO, $params);
	}

	function actualizarHorario($idHorario, $idDia, $idAula, $idCurso, $horIniHorario, $horFinHorario, $id_Horario){
		
$idHorario = parent::prepareParam($idHorario, Query::DATATYPE_INTEGER);
$idDia = parent::prepareParam($idDia, Query::DATATYPE_INTEGER);
$idAula = parent::prepareParam($idAula, Query::DATATYPE_INTEGER);
$idCurso = parent::prepareParam($idCurso, Query::DATATYPE_INTEGER);
$horIniHorario = parent::prepareParam($horIniHorario, Query::DATATYPE_STRING, 0);
$horFinHorario = parent::prepareParam($horFinHorario, Query::DATATYPE_STRING, 0);

		
		$params = array($idHorario, $idDia, $idAula, $idCurso, $horIniHorario, $horFinHorario, $id_Horario);
		return parent::execute(SQLHorario::ACTUALIZAR_HORARIO, $params);		
	}
	
	
	function consultarHorario(){	
		return parent::executeQuery(SQLHorario::CONSULTAR_HORARIO);
	}	
	
	function eliminarHorario($id_Horario){
		$params = array($id_Horario);
		return parent::execute(SQLHorario::ELIMINAR_HORARIO, $params);		
	}
	
//------------------------------	
	function consultarHorarioXidHorario($idHorario){	
		$params = array($idHorario);
		return parent::executeQuery(SQLHorario::CONSULTAR_HORARIO_POR_IDHORARIO, $params);
	}	
	
	function existeHorarioXidHorario($idHorario){
		$params = array($idHorario);
		$tabla = parent::executeQuery(SQLHorario::CONSULTAR_HORARIO_POR_IDHORARIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarHorarioXidDia($idDia){	
		$params = array($idDia);
		return parent::executeQuery(SQLHorario::CONSULTAR_HORARIO_POR_IDDIA, $params);
	}	
	
	function existeHorarioXidDia($idDia){
		$params = array($idDia);
		$tabla = parent::executeQuery(SQLHorario::CONSULTAR_HORARIO_POR_IDDIA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarHorarioXidAula($idAula){	
		$params = array($idAula);
		return parent::executeQuery(SQLHorario::CONSULTAR_HORARIO_POR_IDAULA, $params);
	}	
	
	function existeHorarioXidAula($idAula){
		$params = array($idAula);
		$tabla = parent::executeQuery(SQLHorario::CONSULTAR_HORARIO_POR_IDAULA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarHorarioXidCurso($idCurso){	
		$params = array($idCurso);
		return parent::executeQuery(SQLHorario::CONSULTAR_HORARIO_POR_IDCURSO, $params);
	}	
	
	function existeHorarioXidCurso($idCurso){
		$params = array($idCurso);
		$tabla = parent::executeQuery(SQLHorario::CONSULTAR_HORARIO_POR_IDCURSO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarHorarioXhorIniHorario($horIniHorario){	
		$params = array("%$horIniHorario%");
		return parent::executeQuery(SQLHorario::CONSULTAR_HORARIO_POR_HORINIHORARIO, $params);
	}	
	
	function consultarHorarioXhorIniHorarioAprox($horIniHorario){	
		$params = array("%$horIniHorario%");
		return parent::executeQuery(SQLHorario::CONSULTAR_HORARIO_POR_HORINIHORARIO_APROX, $params);
	}	
	
	function existeHorarioXhorIniHorario($horIniHorario){
		$params = array($horIniHorario);
		$tabla = parent::executeQuery(SQLHorario::CONSULTAR_HORARIO_POR_HORINIHORARIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarHorarioXhorFinHorario($horFinHorario){	
		$params = array("%$horFinHorario%");
		return parent::executeQuery(SQLHorario::CONSULTAR_HORARIO_POR_HORFINHORARIO, $params);
	}	
	
	function consultarHorarioXhorFinHorarioAprox($horFinHorario){	
		$params = array("%$horFinHorario%");
		return parent::executeQuery(SQLHorario::CONSULTAR_HORARIO_POR_HORFINHORARIO_APROX, $params);
	}	
	
	function existeHorarioXhorFinHorario($horFinHorario){
		$params = array($horFinHorario);
		$tabla = parent::executeQuery(SQLHorario::CONSULTAR_HORARIO_POR_HORFINHORARIO, $params);
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