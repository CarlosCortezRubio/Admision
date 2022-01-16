<?php 
require_once('../../../config/config.php');
require_once(MOD.'TipRegistro.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLTipRegistro.php');

class TipRegistro extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idTipRegistro, $nomTipRegistro) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idTipRegistro, $nomTipRegistro, $id_TipRegistro);
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
	function compActualizarcambiarTabla1cambiarTabla2($idTipRegistro, $nomTipRegistro) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idTipRegistro, $nomTipRegistro, $id_TipRegistro);
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
	function agregarTipRegistro($idTipRegistro, $nomTipRegistro) {
$idTipRegistro = parent::prepareParam($idTipRegistro, Query::DATATYPE_INTEGER);
$nomTipRegistro = parent::prepareParam($nomTipRegistro, Query::DATATYPE_STRING, 0);
		
		$params = array($idTipRegistro, $nomTipRegistro);
		return parent::execute(SQLTipRegistro::AGREGAR_TIPREGISTRO, $params);
	}

	function actualizarTipRegistro($idTipRegistro, $nomTipRegistro, $id_TipRegistro){
		
$idTipRegistro = parent::prepareParam($idTipRegistro, Query::DATATYPE_INTEGER);
$nomTipRegistro = parent::prepareParam($nomTipRegistro, Query::DATATYPE_STRING, 0);

		
		$params = array($idTipRegistro, $nomTipRegistro, $id_TipRegistro);
		return parent::execute(SQLTipRegistro::ACTUALIZAR_TIPREGISTRO, $params);		
	}
	
	
	function consultarTipRegistro(){	
		return parent::executeQuery(SQLTipRegistro::CONSULTAR_TIPREGISTRO);
	}	
	
	function eliminarTipRegistro($id_TipRegistro){
		$params = array($id_TipRegistro);
		return parent::execute(SQLTipRegistro::ELIMINAR_TIPREGISTRO, $params);		
	}
	
//------------------------------	
	function consultarTipRegistroXidTipRegistro($idTipRegistro){	
		$params = array($idTipRegistro);
		return parent::executeQuery(SQLTipRegistro::CONSULTAR_TIPREGISTRO_POR_IDTIPREGISTRO, $params);
	}	
	
	function existeTipRegistroXidTipRegistro($idTipRegistro){
		$params = array($idTipRegistro);
		$tabla = parent::executeQuery(SQLTipRegistro::CONSULTAR_TIPREGISTRO_POR_IDTIPREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarTipRegistroXnomTipRegistro($nomTipRegistro){	
		$params = array("%$nomTipRegistro%");
		return parent::executeQuery(SQLTipRegistro::CONSULTAR_TIPREGISTRO_POR_NOMTIPREGISTRO, $params);
	}	
	
	function consultarTipRegistroXnomTipRegistroAprox($nomTipRegistro){	
		$params = array("%$nomTipRegistro%");
		return parent::executeQuery(SQLTipRegistro::CONSULTAR_TIPREGISTRO_POR_NOMTIPREGISTRO_APROX, $params);
	}	
	
	function existeTipRegistroXnomTipRegistro($nomTipRegistro){
		$params = array($nomTipRegistro);
		$tabla = parent::executeQuery(SQLTipRegistro::CONSULTAR_TIPREGISTRO_POR_NOMTIPREGISTRO, $params);
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