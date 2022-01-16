<?php 
require_once('../../../config/config.php');
require_once(MOD.'Asignatura.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLAsignatura.php');

class Asignatura extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idAsignatura, $idTipoEvaluac, $idTipoAsignatura, $idEdoRegistro, $codAsignatura, $nomAsignatura, $nomCortoAsignatura, $pracLabAsignatura) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idAsignatura, $idTipoEvaluac, $idTipoAsignatura, $idEdoRegistro, $codAsignatura, $nomAsignatura, $nomCortoAsignatura, $pracLabAsignatura, $id_Asignatura);
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
	function compActualizarcambiarTabla1cambiarTabla2($idAsignatura, $idTipoEvaluac, $idTipoAsignatura, $idEdoRegistro, $codAsignatura, $nomAsignatura, $nomCortoAsignatura, $pracLabAsignatura) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idAsignatura, $idTipoEvaluac, $idTipoAsignatura, $idEdoRegistro, $codAsignatura, $nomAsignatura, $nomCortoAsignatura, $pracLabAsignatura, $id_Asignatura);
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
	function agregarAsignatura($idAsignatura, $idTipoEvaluac, $idTipoAsignatura, $idEdoRegistro, $codAsignatura, $nomAsignatura, $nomCortoAsignatura, $pracLabAsignatura) {
$idAsignatura = parent::prepareParam($idAsignatura, Query::DATATYPE_INTEGER);
$idTipoEvaluac = parent::prepareParam($idTipoEvaluac, Query::DATATYPE_INTEGER);
$idTipoAsignatura = parent::prepareParam($idTipoAsignatura, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$codAsignatura = parent::prepareParam($codAsignatura, Query::DATATYPE_STRING, 0);
$nomAsignatura = parent::prepareParam($nomAsignatura, Query::DATATYPE_STRING, 0);
$nomCortoAsignatura = parent::prepareParam($nomCortoAsignatura, Query::DATATYPE_STRING, 0);
$pracLabAsignatura = parent::prepareParam($pracLabAsignatura, Query::DATATYPE_INTEGER);
		
		$params = array($idAsignatura, $idTipoEvaluac, $idTipoAsignatura, $idEdoRegistro, $codAsignatura, $nomAsignatura, $nomCortoAsignatura, $pracLabAsignatura);
		return parent::execute(SQLAsignatura::AGREGAR_ASIGNATURA, $params);
	}

	function actualizarAsignatura($idAsignatura, $idTipoEvaluac, $idTipoAsignatura, $idEdoRegistro, $codAsignatura, $nomAsignatura, $nomCortoAsignatura, $pracLabAsignatura, $id_Asignatura){
		
$idAsignatura = parent::prepareParam($idAsignatura, Query::DATATYPE_INTEGER);
$idTipoEvaluac = parent::prepareParam($idTipoEvaluac, Query::DATATYPE_INTEGER);
$idTipoAsignatura = parent::prepareParam($idTipoAsignatura, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$codAsignatura = parent::prepareParam($codAsignatura, Query::DATATYPE_STRING, 0);
$nomAsignatura = parent::prepareParam($nomAsignatura, Query::DATATYPE_STRING, 0);
$nomCortoAsignatura = parent::prepareParam($nomCortoAsignatura, Query::DATATYPE_STRING, 0);
$pracLabAsignatura = parent::prepareParam($pracLabAsignatura, Query::DATATYPE_INTEGER);

		
		$params = array($idAsignatura, $idTipoEvaluac, $idTipoAsignatura, $idEdoRegistro, $codAsignatura, $nomAsignatura, $nomCortoAsignatura, $pracLabAsignatura, $id_Asignatura);
		return parent::execute(SQLAsignatura::ACTUALIZAR_ASIGNATURA, $params);		
	}
	
	
	function consultarAsignatura(){	
		return parent::executeQuery(SQLAsignatura::CONSULTAR_ASIGNATURA);
	}	
	
	function eliminarAsignatura($id_Asignatura){
		$params = array($id_Asignatura);
		return parent::execute(SQLAsignatura::ELIMINAR_ASIGNATURA, $params);		
	}
	
//------------------------------	
	function consultarAsignaturaXidAsignatura($idAsignatura){	
		$params = array($idAsignatura);
		return parent::executeQuery(SQLAsignatura::CONSULTAR_ASIGNATURA_POR_IDASIGNATURA, $params);
	}	
	
	function existeAsignaturaXidAsignatura($idAsignatura){
		$params = array($idAsignatura);
		$tabla = parent::executeQuery(SQLAsignatura::CONSULTAR_ASIGNATURA_POR_IDASIGNATURA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarAsignaturaXidTipoEvaluac($idTipoEvaluac){	
		$params = array($idTipoEvaluac);
		return parent::executeQuery(SQLAsignatura::CONSULTAR_ASIGNATURA_POR_IDTIPOEVALUAC, $params);
	}	
	
	function existeAsignaturaXidTipoEvaluac($idTipoEvaluac){
		$params = array($idTipoEvaluac);
		$tabla = parent::executeQuery(SQLAsignatura::CONSULTAR_ASIGNATURA_POR_IDTIPOEVALUAC, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarAsignaturaXidTipoAsignatura($idTipoAsignatura){	
		$params = array($idTipoAsignatura);
		return parent::executeQuery(SQLAsignatura::CONSULTAR_ASIGNATURA_POR_IDTIPOASIGNATURA, $params);
	}	
	
	function existeAsignaturaXidTipoAsignatura($idTipoAsignatura){
		$params = array($idTipoAsignatura);
		$tabla = parent::executeQuery(SQLAsignatura::CONSULTAR_ASIGNATURA_POR_IDTIPOASIGNATURA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarAsignaturaXidEdoRegistro($idEdoRegistro){	
		$params = array($idEdoRegistro);
		return parent::executeQuery(SQLAsignatura::CONSULTAR_ASIGNATURA_POR_IDEDOREGISTRO, $params);
	}	
	
	function existeAsignaturaXidEdoRegistro($idEdoRegistro){
		$params = array($idEdoRegistro);
		$tabla = parent::executeQuery(SQLAsignatura::CONSULTAR_ASIGNATURA_POR_IDEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarAsignaturaXcodAsignatura($codAsignatura){	
		$params = array("%$codAsignatura%");
		return parent::executeQuery(SQLAsignatura::CONSULTAR_ASIGNATURA_POR_CODASIGNATURA, $params);
	}	
	
	function consultarAsignaturaXcodAsignaturaAprox($codAsignatura){	
		$params = array("%$codAsignatura%");
		return parent::executeQuery(SQLAsignatura::CONSULTAR_ASIGNATURA_POR_CODASIGNATURA_APROX, $params);
	}	
	
	function existeAsignaturaXcodAsignatura($codAsignatura){
		$params = array($codAsignatura);
		$tabla = parent::executeQuery(SQLAsignatura::CONSULTAR_ASIGNATURA_POR_CODASIGNATURA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarAsignaturaXnomAsignatura($nomAsignatura){	
		$params = array("%$nomAsignatura%");
		return parent::executeQuery(SQLAsignatura::CONSULTAR_ASIGNATURA_POR_NOMASIGNATURA, $params);
	}	
	
	function consultarAsignaturaXnomAsignaturaAprox($nomAsignatura){	
		$params = array("%$nomAsignatura%");
		return parent::executeQuery(SQLAsignatura::CONSULTAR_ASIGNATURA_POR_NOMASIGNATURA_APROX, $params);
	}	
	
	function existeAsignaturaXnomAsignatura($nomAsignatura){
		$params = array($nomAsignatura);
		$tabla = parent::executeQuery(SQLAsignatura::CONSULTAR_ASIGNATURA_POR_NOMASIGNATURA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarAsignaturaXnomCortoAsignatura($nomCortoAsignatura){	
		$params = array("%$nomCortoAsignatura%");
		return parent::executeQuery(SQLAsignatura::CONSULTAR_ASIGNATURA_POR_NOMCORTOASIGNATURA, $params);
	}	
	
	function consultarAsignaturaXnomCortoAsignaturaAprox($nomCortoAsignatura){	
		$params = array("%$nomCortoAsignatura%");
		return parent::executeQuery(SQLAsignatura::CONSULTAR_ASIGNATURA_POR_NOMCORTOASIGNATURA_APROX, $params);
	}	
	
	function existeAsignaturaXnomCortoAsignatura($nomCortoAsignatura){
		$params = array($nomCortoAsignatura);
		$tabla = parent::executeQuery(SQLAsignatura::CONSULTAR_ASIGNATURA_POR_NOMCORTOASIGNATURA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarAsignaturaXpracLabAsignatura($pracLabAsignatura){	
		$params = array($pracLabAsignatura);
		return parent::executeQuery(SQLAsignatura::CONSULTAR_ASIGNATURA_POR_PRACLABASIGNATURA, $params);
	}	
	
	function existeAsignaturaXpracLabAsignatura($pracLabAsignatura){
		$params = array($pracLabAsignatura);
		$tabla = parent::executeQuery(SQLAsignatura::CONSULTAR_ASIGNATURA_POR_PRACLABASIGNATURA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

//------------------------------	

 //INICIO COMBOS 
	function consultarPracLabAsignatura($diccionarioid){	
		$query = new Query();
		$params = array($diccionarioid);
		$res = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_ID,$params);
		$res1 = $res[0]['cjtovalores'];
		$tabla11 = split(',',$res1);
		$cad1 = array();
		foreach ($tabla11 as $ite) {;
  		$cad1[] = $ite;
		};
		return $cad1;
} 

 //FIN COMBOS 
}
?>