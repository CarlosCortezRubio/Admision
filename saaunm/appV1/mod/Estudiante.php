<?php 
require_once('../../../config/config.php');
require_once(MOD.'Estudiante.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLEstudiante.php');

class Estudiante extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idEstudiante, $idEdoRegistro) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idEstudiante, $idEdoRegistro, $id_Estudiante);
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
	function compActualizarcambiarTabla1cambiarTabla2($idEstudiante, $idEdoRegistro) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idEstudiante, $idEdoRegistro, $id_Estudiante);
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
	function agregarEstudiante($idEstudiante, $idEdoRegistro) {
$idEstudiante = parent::prepareParam($idEstudiante, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
		
		$params = array($idEstudiante, $idEdoRegistro);
		return parent::execute(SQLEstudiante::AGREGAR_ESTUDIANTE, $params);
	}

	function actualizarEstudiante($idEstudiante, $idEdoRegistro, $id_Estudiante){
		
$idEstudiante = parent::prepareParam($idEstudiante, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);

		
		$params = array($idEstudiante, $idEdoRegistro, $id_Estudiante);
		return parent::execute(SQLEstudiante::ACTUALIZAR_ESTUDIANTE, $params);		
	}
	
	
	function consultarEstudiante(){	
		return parent::executeQuery(SQLEstudiante::CONSULTAR_ESTUDIANTE);
	}	
	
	function eliminarEstudiante($id_Estudiante){
		$params = array($id_Estudiante);
		return parent::execute(SQLEstudiante::ELIMINAR_ESTUDIANTE, $params);		
	}
	
//------------------------------	
	function consultarEstudianteXidEstudiante($idEstudiante){	
		$params = array($idEstudiante);
		return parent::executeQuery(SQLEstudiante::CONSULTAR_ESTUDIANTE_POR_IDESTUDIANTE, $params);
	}	
	
	function existeEstudianteXidEstudiante($idEstudiante){
		$params = array($idEstudiante);
		$tabla = parent::executeQuery(SQLEstudiante::CONSULTAR_ESTUDIANTE_POR_IDESTUDIANTE, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEstudianteXidEdoRegistro($idEdoRegistro){	
		$params = array($idEdoRegistro);
		return parent::executeQuery(SQLEstudiante::CONSULTAR_ESTUDIANTE_POR_IDEDOREGISTRO, $params);
	}	
	
	function existeEstudianteXidEdoRegistro($idEdoRegistro){
		$params = array($idEdoRegistro);
		$tabla = parent::executeQuery(SQLEstudiante::CONSULTAR_ESTUDIANTE_POR_IDEDOREGISTRO, $params);
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