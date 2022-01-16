<?php 
require_once('../../../config/config.php');
require_once(MOD.'TipServidor.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLTipServidor.php');

class TipServidor extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idTipServidor, $codTipServidor, $nomTipServidor) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idTipServidor, $codTipServidor, $nomTipServidor, $id_TipServidor);
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
	function compActualizarcambiarTabla1cambiarTabla2($idTipServidor, $codTipServidor, $nomTipServidor) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idTipServidor, $codTipServidor, $nomTipServidor, $id_TipServidor);
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
	function agregarTipServidor($idTipServidor, $codTipServidor, $nomTipServidor) {
$idTipServidor = parent::prepareParam($idTipServidor, Query::DATATYPE_INTEGER);
$codTipServidor = parent::prepareParam($codTipServidor, Query::DATATYPE_STRING, 0);
$nomTipServidor = parent::prepareParam($nomTipServidor, Query::DATATYPE_STRING, 0);
		
		$params = array($idTipServidor, $codTipServidor, $nomTipServidor);
		return parent::execute(SQLTipServidor::AGREGAR_TIPSERVIDOR, $params);
	}

	function actualizarTipServidor($idTipServidor, $codTipServidor, $nomTipServidor, $id_TipServidor){
		
$idTipServidor = parent::prepareParam($idTipServidor, Query::DATATYPE_INTEGER);
$codTipServidor = parent::prepareParam($codTipServidor, Query::DATATYPE_STRING, 0);
$nomTipServidor = parent::prepareParam($nomTipServidor, Query::DATATYPE_STRING, 0);

		
		$params = array($idTipServidor, $codTipServidor, $nomTipServidor, $id_TipServidor);
		return parent::execute(SQLTipServidor::ACTUALIZAR_TIPSERVIDOR, $params);		
	}
	
	
	function consultarTipServidor(){	
		return parent::executeQuery(SQLTipServidor::CONSULTAR_TIPSERVIDOR);
	}	
	
	function eliminarTipServidor($id_TipServidor){
		$params = array($id_TipServidor);
		return parent::execute(SQLTipServidor::ELIMINAR_TIPSERVIDOR, $params);		
	}
	
//------------------------------	
	function consultarTipServidorXidTipServidor($idTipServidor){	
		$params = array($idTipServidor);
		return parent::executeQuery(SQLTipServidor::CONSULTAR_TIPSERVIDOR_POR_IDTIPSERVIDOR, $params);
	}	
	
	function existeTipServidorXidTipServidor($idTipServidor){
		$params = array($idTipServidor);
		$tabla = parent::executeQuery(SQLTipServidor::CONSULTAR_TIPSERVIDOR_POR_IDTIPSERVIDOR, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarTipServidorXcodTipServidor($codTipServidor){	
		$params = array("%$codTipServidor%");
		return parent::executeQuery(SQLTipServidor::CONSULTAR_TIPSERVIDOR_POR_CODTIPSERVIDOR, $params);
	}	
	
	function consultarTipServidorXcodTipServidorAprox($codTipServidor){	
		$params = array("%$codTipServidor%");
		return parent::executeQuery(SQLTipServidor::CONSULTAR_TIPSERVIDOR_POR_CODTIPSERVIDOR_APROX, $params);
	}	
	
	function existeTipServidorXcodTipServidor($codTipServidor){
		$params = array($codTipServidor);
		$tabla = parent::executeQuery(SQLTipServidor::CONSULTAR_TIPSERVIDOR_POR_CODTIPSERVIDOR, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarTipServidorXnomTipServidor($nomTipServidor){	
		$params = array("%$nomTipServidor%");
		return parent::executeQuery(SQLTipServidor::CONSULTAR_TIPSERVIDOR_POR_NOMTIPSERVIDOR, $params);
	}	
	
	function consultarTipServidorXnomTipServidorAprox($nomTipServidor){	
		$params = array("%$nomTipServidor%");
		return parent::executeQuery(SQLTipServidor::CONSULTAR_TIPSERVIDOR_POR_NOMTIPSERVIDOR_APROX, $params);
	}	
	
	function existeTipServidorXnomTipServidor($nomTipServidor){
		$params = array($nomTipServidor);
		$tabla = parent::executeQuery(SQLTipServidor::CONSULTAR_TIPSERVIDOR_POR_NOMTIPSERVIDOR, $params);
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