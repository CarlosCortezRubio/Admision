<?php 
require_once('../../../config/config.php');
require_once(MOD.'TipoAsignatura.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLTipoAsignatura.php');

class TipoAsignatura extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idTipoAsignatura, $nomTipoAsignatura) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idTipoAsignatura, $nomTipoAsignatura, $id_TipoAsignatura);
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
	function compActualizarcambiarTabla1cambiarTabla2($idTipoAsignatura, $nomTipoAsignatura) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idTipoAsignatura, $nomTipoAsignatura, $id_TipoAsignatura);
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
	function agregarTipoAsignatura($idTipoAsignatura, $nomTipoAsignatura) {
$idTipoAsignatura = parent::prepareParam($idTipoAsignatura, Query::DATATYPE_INTEGER);
$nomTipoAsignatura = parent::prepareParam($nomTipoAsignatura, Query::DATATYPE_STRING, 0);
		
		$params = array($idTipoAsignatura, $nomTipoAsignatura);
		return parent::execute(SQLTipoAsignatura::AGREGAR_TIPOASIGNATURA, $params);
	}

	function actualizarTipoAsignatura($idTipoAsignatura, $nomTipoAsignatura, $id_TipoAsignatura){
		
$idTipoAsignatura = parent::prepareParam($idTipoAsignatura, Query::DATATYPE_INTEGER);
$nomTipoAsignatura = parent::prepareParam($nomTipoAsignatura, Query::DATATYPE_STRING, 0);

		
		$params = array($idTipoAsignatura, $nomTipoAsignatura, $id_TipoAsignatura);
		return parent::execute(SQLTipoAsignatura::ACTUALIZAR_TIPOASIGNATURA, $params);		
	}
	
	
	function consultarTipoAsignatura(){	
		return parent::executeQuery(SQLTipoAsignatura::CONSULTAR_TIPOASIGNATURA);
	}	
	
	function eliminarTipoAsignatura($id_TipoAsignatura){
		$params = array($id_TipoAsignatura);
		return parent::execute(SQLTipoAsignatura::ELIMINAR_TIPOASIGNATURA, $params);		
	}
	
//------------------------------	
	function consultarTipoAsignaturaXidTipoAsignatura($idTipoAsignatura){	
		$params = array($idTipoAsignatura);
		return parent::executeQuery(SQLTipoAsignatura::CONSULTAR_TIPOASIGNATURA_POR_IDTIPOASIGNATURA, $params);
	}	
	
	function existeTipoAsignaturaXidTipoAsignatura($idTipoAsignatura){
		$params = array($idTipoAsignatura);
		$tabla = parent::executeQuery(SQLTipoAsignatura::CONSULTAR_TIPOASIGNATURA_POR_IDTIPOASIGNATURA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarTipoAsignaturaXnomTipoAsignatura($nomTipoAsignatura){	
		$params = array("%$nomTipoAsignatura%");
		return parent::executeQuery(SQLTipoAsignatura::CONSULTAR_TIPOASIGNATURA_POR_NOMTIPOASIGNATURA, $params);
	}	
	
	function consultarTipoAsignaturaXnomTipoAsignaturaAprox($nomTipoAsignatura){	
		$params = array("%$nomTipoAsignatura%");
		return parent::executeQuery(SQLTipoAsignatura::CONSULTAR_TIPOASIGNATURA_POR_NOMTIPOASIGNATURA_APROX, $params);
	}	
	
	function existeTipoAsignaturaXnomTipoAsignatura($nomTipoAsignatura){
		$params = array($nomTipoAsignatura);
		$tabla = parent::executeQuery(SQLTipoAsignatura::CONSULTAR_TIPOASIGNATURA_POR_NOMTIPOASIGNATURA, $params);
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