<?php 
require_once('../../../config/config.php');
require_once(MOD.'Curso.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLCurso.php');

class Curso extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idCurso, $idPeriodo, $idProgEstudio, $idEdoRegistro, $idEmpleado, $idPensum, $idAsignatura, $codCurso, $nomCurso, $cupMaxCurso, $fecIniCurso, $fecFinCurso) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idCurso, $idPeriodo, $idProgEstudio, $idEdoRegistro, $idEmpleado, $idPensum, $idAsignatura, $codCurso, $nomCurso, $cupMaxCurso, $fecIniCurso, $fecFinCurso, $id_Curso);
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
	function compActualizarcambiarTabla1cambiarTabla2($idCurso, $idPeriodo, $idProgEstudio, $idEdoRegistro, $idEmpleado, $idPensum, $idAsignatura, $codCurso, $nomCurso, $cupMaxCurso, $fecIniCurso, $fecFinCurso) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idCurso, $idPeriodo, $idProgEstudio, $idEdoRegistro, $idEmpleado, $idPensum, $idAsignatura, $codCurso, $nomCurso, $cupMaxCurso, $fecIniCurso, $fecFinCurso, $id_Curso);
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
	function agregarCurso($idCurso, $idPeriodo, $idProgEstudio, $idEdoRegistro, $idEmpleado, $idPensum, $idAsignatura, $codCurso, $nomCurso, $cupMaxCurso, $fecIniCurso, $fecFinCurso) {
$idCurso = parent::prepareParam($idCurso, Query::DATATYPE_INTEGER);
$idPeriodo = parent::prepareParam($idPeriodo, Query::DATATYPE_INTEGER);
$idProgEstudio = parent::prepareParam($idProgEstudio, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$idEmpleado = parent::prepareParam($idEmpleado, Query::DATATYPE_INTEGER);
$idPensum = parent::prepareParam($idPensum, Query::DATATYPE_INTEGER);
$idAsignatura = parent::prepareParam($idAsignatura, Query::DATATYPE_INTEGER);
$codCurso = parent::prepareParam($codCurso, Query::DATATYPE_STRING, 0);
$nomCurso = parent::prepareParam($nomCurso, Query::DATATYPE_STRING, 0);
$cupMaxCurso = parent::prepareParam($cupMaxCurso, Query::DATATYPE_INTEGER);
		
		$params = array($idCurso, $idPeriodo, $idProgEstudio, $idEdoRegistro, $idEmpleado, $idPensum, $idAsignatura, $codCurso, $nomCurso, $cupMaxCurso, $fecIniCurso, $fecFinCurso);
		return parent::execute(SQLCurso::AGREGAR_CURSO, $params);
	}

	function actualizarCurso($idCurso, $idPeriodo, $idProgEstudio, $idEdoRegistro, $idEmpleado, $idPensum, $idAsignatura, $codCurso, $nomCurso, $cupMaxCurso, $fecIniCurso, $fecFinCurso, $id_Curso){
		
$idCurso = parent::prepareParam($idCurso, Query::DATATYPE_INTEGER);
$idPeriodo = parent::prepareParam($idPeriodo, Query::DATATYPE_INTEGER);
$idProgEstudio = parent::prepareParam($idProgEstudio, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$idEmpleado = parent::prepareParam($idEmpleado, Query::DATATYPE_INTEGER);
$idPensum = parent::prepareParam($idPensum, Query::DATATYPE_INTEGER);
$idAsignatura = parent::prepareParam($idAsignatura, Query::DATATYPE_INTEGER);
$codCurso = parent::prepareParam($codCurso, Query::DATATYPE_STRING, 0);
$nomCurso = parent::prepareParam($nomCurso, Query::DATATYPE_STRING, 0);
$cupMaxCurso = parent::prepareParam($cupMaxCurso, Query::DATATYPE_INTEGER);

		
		$params = array($idCurso, $idPeriodo, $idProgEstudio, $idEdoRegistro, $idEmpleado, $idPensum, $idAsignatura, $codCurso, $nomCurso, $cupMaxCurso, $fecIniCurso, $fecFinCurso, $id_Curso);
		return parent::execute(SQLCurso::ACTUALIZAR_CURSO, $params);		
	}
	
	
	function consultarCurso(){	
		return parent::executeQuery(SQLCurso::CONSULTAR_CURSO);
	}	
	
	function eliminarCurso($id_Curso){
		$params = array($id_Curso);
		return parent::execute(SQLCurso::ELIMINAR_CURSO, $params);		
	}
	
//------------------------------	
	function consultarCursoXidCurso($idCurso){	
		$params = array($idCurso);
		return parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_IDCURSO, $params);
	}	
	
	function existeCursoXidCurso($idCurso){
		$params = array($idCurso);
		$tabla = parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_IDCURSO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarCursoXidPeriodo($idPeriodo){	
		$params = array($idPeriodo);
		return parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_IDPERIODO, $params);
	}	
	
	function existeCursoXidPeriodo($idPeriodo){
		$params = array($idPeriodo);
		$tabla = parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_IDPERIODO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarCursoXidProgEstudio($idProgEstudio){	
		$params = array($idProgEstudio);
		return parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_IDPROGESTUDIO, $params);
	}	
	
	function existeCursoXidProgEstudio($idProgEstudio){
		$params = array($idProgEstudio);
		$tabla = parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_IDPROGESTUDIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarCursoXidEdoRegistro($idEdoRegistro){	
		$params = array($idEdoRegistro);
		return parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_IDEDOREGISTRO, $params);
	}	
	
	function existeCursoXidEdoRegistro($idEdoRegistro){
		$params = array($idEdoRegistro);
		$tabla = parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_IDEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarCursoXidEmpleado($idEmpleado){	
		$params = array($idEmpleado);
		return parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_IDEMPLEADO, $params);
	}	
	
	function existeCursoXidEmpleado($idEmpleado){
		$params = array($idEmpleado);
		$tabla = parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_IDEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarCursoXidPensum($idPensum){	
		$params = array($idPensum);
		return parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_IDPENSUM, $params);
	}	
	
	function existeCursoXidPensum($idPensum){
		$params = array($idPensum);
		$tabla = parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_IDPENSUM, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarCursoXidAsignatura($idAsignatura){	
		$params = array($idAsignatura);
		return parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_IDASIGNATURA, $params);
	}	
	
	function existeCursoXidAsignatura($idAsignatura){
		$params = array($idAsignatura);
		$tabla = parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_IDASIGNATURA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarCursoXcodCurso($codCurso){	
		$params = array("%$codCurso%");
		return parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_CODCURSO, $params);
	}	
	
	function consultarCursoXcodCursoAprox($codCurso){	
		$params = array("%$codCurso%");
		return parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_CODCURSO_APROX, $params);
	}	
	
	function existeCursoXcodCurso($codCurso){
		$params = array($codCurso);
		$tabla = parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_CODCURSO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarCursoXnomCurso($nomCurso){	
		$params = array("%$nomCurso%");
		return parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_NOMCURSO, $params);
	}	
	
	function consultarCursoXnomCursoAprox($nomCurso){	
		$params = array("%$nomCurso%");
		return parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_NOMCURSO_APROX, $params);
	}	
	
	function existeCursoXnomCurso($nomCurso){
		$params = array($nomCurso);
		$tabla = parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_NOMCURSO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarCursoXcupMaxCurso($cupMaxCurso){	
		$params = array($cupMaxCurso);
		return parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_CUPMAXCURSO, $params);
	}	
	
	function existeCursoXcupMaxCurso($cupMaxCurso){
		$params = array($cupMaxCurso);
		$tabla = parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_CUPMAXCURSO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarCursoXfecIniCurso($fecIniCurso){	
		$params = array($fecIniCurso);
		return parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_FECINICURSO, $params);
	}	
	
	function existeCursoXfecIniCurso($fecIniCurso){
		$params = array($fecIniCurso);
		$tabla = parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_FECINICURSO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarCursoXfecFinCurso($fecFinCurso){	
		$params = array($fecFinCurso);
		return parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_FECFINCURSO, $params);
	}	
	
	function existeCursoXfecFinCurso($fecFinCurso){
		$params = array($fecFinCurso);
		$tabla = parent::executeQuery(SQLCurso::CONSULTAR_CURSO_POR_FECFINCURSO, $params);
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