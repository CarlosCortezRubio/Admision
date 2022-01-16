<?php 
require_once('../../../config/config.php');
require_once(MOD.'TipoDoc.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLTipoDoc.php');

class TipoDoc extends Query{
function __construct(){
// 		parent::abrirConexion();
		parent::abrirConexionConParam(SERVER_RH,USER_RH,PASSWORDBD_RH,DATABASE_RH);
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idTipoDoc, $nomTipoDoc) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idTipoDoc, $nomTipoDoc, $id_TipoDoc);
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
	function compActualizarcambiarTabla1cambiarTabla2($idTipoDoc, $nomTipoDoc) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idTipoDoc, $nomTipoDoc, $id_TipoDoc);
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
	function agregarTipoDoc($idTipoDoc, $nomTipoDoc) {
$idTipoDoc = parent::prepareParam($idTipoDoc, Query::DATATYPE_INTEGER);
$nomTipoDoc = parent::prepareParam($nomTipoDoc, Query::DATATYPE_STRING, 0);
		
		$params = array($idTipoDoc, $nomTipoDoc);
		return parent::execute(SQLTipoDoc::AGREGAR_TIPODOC, $params);
	}

	function actualizarTipoDoc($idTipoDoc, $nomTipoDoc, $id_TipoDoc){
		
$idTipoDoc = parent::prepareParam($idTipoDoc, Query::DATATYPE_INTEGER);
$nomTipoDoc = parent::prepareParam($nomTipoDoc, Query::DATATYPE_STRING, 0);

		
		$params = array($idTipoDoc, $nomTipoDoc, $id_TipoDoc);
		return parent::execute(SQLTipoDoc::ACTUALIZAR_TIPODOC, $params);		
	}
	
	
	function consultarTipoDoc(){	
		return parent::executeQuery(SQLTipoDoc::CONSULTAR_TIPODOC);
	}	
	
	function eliminarTipoDoc($id_TipoDoc){
		$params = array($id_TipoDoc);
		return parent::execute(SQLTipoDoc::ELIMINAR_TIPODOC, $params);		
	}
	
//------------------------------	
	function consultarTipoDocXidTipoDoc($idTipoDoc){	
		$params = array($idTipoDoc);
		return parent::executeQuery(SQLTipoDoc::CONSULTAR_TIPODOC_POR_IDTIPODOC, $params);
	}	
	
	function existeTipoDocXidTipoDoc($idTipoDoc){
		$params = array($idTipoDoc);
		$tabla = parent::executeQuery(SQLTipoDoc::CONSULTAR_TIPODOC_POR_IDTIPODOC, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarTipoDocXnomTipoDoc($nomTipoDoc){	
		$params = array("%$nomTipoDoc%");
		return parent::executeQuery(SQLTipoDoc::CONSULTAR_TIPODOC_POR_NOMTIPODOC, $params);
	}	
	
	function consultarTipoDocXnomTipoDocAprox($nomTipoDoc){	
		$params = array("%$nomTipoDoc%");
		return parent::executeQuery(SQLTipoDoc::CONSULTAR_TIPODOC_POR_NOMTIPODOC_APROX, $params);
	}	
	
	function existeTipoDocXnomTipoDoc($nomTipoDoc){
		$params = array($nomTipoDoc);
		$tabla = parent::executeQuery(SQLTipoDoc::CONSULTAR_TIPODOC_POR_NOMTIPODOC, $params);
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