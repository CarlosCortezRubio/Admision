<?php 
require_once('../../../config/config.php');
require_once(MOD.'RegLaboral.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLRegLaboral.php');

class RegLaboral extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idRegLaboral, $codRegLaboral, $nomRegLaboral) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idRegLaboral, $codRegLaboral, $nomRegLaboral, $id_RegLaboral);
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
	function compActualizarcambiarTabla1cambiarTabla2($idRegLaboral, $codRegLaboral, $nomRegLaboral) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idRegLaboral, $codRegLaboral, $nomRegLaboral, $id_RegLaboral);
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
	function agregarRegLaboral($idRegLaboral, $codRegLaboral, $nomRegLaboral) {
$idRegLaboral = parent::prepareParam($idRegLaboral, Query::DATATYPE_INTEGER);
$codRegLaboral = parent::prepareParam($codRegLaboral, Query::DATATYPE_STRING, 0);
$nomRegLaboral = parent::prepareParam($nomRegLaboral, Query::DATATYPE_STRING, 0);
		
		$params = array($idRegLaboral, $codRegLaboral, $nomRegLaboral);
		return parent::execute(SQLRegLaboral::AGREGAR_REGLABORAL, $params);
	}

	function actualizarRegLaboral($idRegLaboral, $codRegLaboral, $nomRegLaboral, $id_RegLaboral){
		
$idRegLaboral = parent::prepareParam($idRegLaboral, Query::DATATYPE_INTEGER);
$codRegLaboral = parent::prepareParam($codRegLaboral, Query::DATATYPE_STRING, 0);
$nomRegLaboral = parent::prepareParam($nomRegLaboral, Query::DATATYPE_STRING, 0);

		
		$params = array($idRegLaboral, $codRegLaboral, $nomRegLaboral, $id_RegLaboral);
		return parent::execute(SQLRegLaboral::ACTUALIZAR_REGLABORAL, $params);		
	}
	
	
	function consultarRegLaboral(){	
		return parent::executeQuery(SQLRegLaboral::CONSULTAR_REGLABORAL);
	}	
	
	function eliminarRegLaboral($id_RegLaboral){
		$params = array($id_RegLaboral);
		return parent::execute(SQLRegLaboral::ELIMINAR_REGLABORAL, $params);		
	}
	
//------------------------------	
	function consultarRegLaboralXidRegLaboral($idRegLaboral){	
		$params = array($idRegLaboral);
		return parent::executeQuery(SQLRegLaboral::CONSULTAR_REGLABORAL_POR_IDREGLABORAL, $params);
	}	
	
	function existeRegLaboralXidRegLaboral($idRegLaboral){
		$params = array($idRegLaboral);
		$tabla = parent::executeQuery(SQLRegLaboral::CONSULTAR_REGLABORAL_POR_IDREGLABORAL, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarRegLaboralXcodRegLaboral($codRegLaboral){	
		$params = array("%$codRegLaboral%");
		return parent::executeQuery(SQLRegLaboral::CONSULTAR_REGLABORAL_POR_CODREGLABORAL, $params);
	}	
	
	function consultarRegLaboralXcodRegLaboralAprox($codRegLaboral){	
		$params = array("%$codRegLaboral%");
		return parent::executeQuery(SQLRegLaboral::CONSULTAR_REGLABORAL_POR_CODREGLABORAL_APROX, $params);
	}	
	
	function existeRegLaboralXcodRegLaboral($codRegLaboral){
		$params = array($codRegLaboral);
		$tabla = parent::executeQuery(SQLRegLaboral::CONSULTAR_REGLABORAL_POR_CODREGLABORAL, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarRegLaboralXnomRegLaboral($nomRegLaboral){	
		$params = array("%$nomRegLaboral%");
		return parent::executeQuery(SQLRegLaboral::CONSULTAR_REGLABORAL_POR_NOMREGLABORAL, $params);
	}	
	
	function consultarRegLaboralXnomRegLaboralAprox($nomRegLaboral){	
		$params = array("%$nomRegLaboral%");
		return parent::executeQuery(SQLRegLaboral::CONSULTAR_REGLABORAL_POR_NOMREGLABORAL_APROX, $params);
	}	
	
	function existeRegLaboralXnomRegLaboral($nomRegLaboral){
		$params = array($nomRegLaboral);
		$tabla = parent::executeQuery(SQLRegLaboral::CONSULTAR_REGLABORAL_POR_NOMREGLABORAL, $params);
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