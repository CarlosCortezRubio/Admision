<?php 
require_once('../../../config/config.php');
require_once(MOD.'GpoRemunerativo.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLGpoRemunerativo.php');

class GpoRemunerativo extends Query{
    function __construct(){
        // 		parent::abrirConexion();
        parent::abrirConexionConParam(SERVER_RH,USER_RH,PASSWORDBD_RH,DATABASE_RH);
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idGpoRemunerativo, $codGpoRemunerativo, $nomGpoRemunerativo) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idGpoRemunerativo, $codGpoRemunerativo, $nomGpoRemunerativo, $id_GpoRemunerativo);
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
	function compActualizarcambiarTabla1cambiarTabla2($idGpoRemunerativo, $codGpoRemunerativo, $nomGpoRemunerativo) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idGpoRemunerativo, $codGpoRemunerativo, $nomGpoRemunerativo, $id_GpoRemunerativo);
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
	function agregarGpoRemunerativo($idGpoRemunerativo, $codGpoRemunerativo, $nomGpoRemunerativo) {
$idGpoRemunerativo = parent::prepareParam($idGpoRemunerativo, Query::DATATYPE_INTEGER);
$codGpoRemunerativo = parent::prepareParam($codGpoRemunerativo, Query::DATATYPE_STRING, 0);
$nomGpoRemunerativo = parent::prepareParam($nomGpoRemunerativo, Query::DATATYPE_STRING, 0);
		
		$params = array($idGpoRemunerativo, $codGpoRemunerativo, $nomGpoRemunerativo);
		return parent::execute(SQLGpoRemunerativo::AGREGAR_GPOREMUNERATIVO, $params);
	}

	function actualizarGpoRemunerativo($idGpoRemunerativo, $codGpoRemunerativo, $nomGpoRemunerativo, $id_GpoRemunerativo){
		
$idGpoRemunerativo = parent::prepareParam($idGpoRemunerativo, Query::DATATYPE_INTEGER);
$codGpoRemunerativo = parent::prepareParam($codGpoRemunerativo, Query::DATATYPE_STRING, 0);
$nomGpoRemunerativo = parent::prepareParam($nomGpoRemunerativo, Query::DATATYPE_STRING, 0);

		
		$params = array($idGpoRemunerativo, $codGpoRemunerativo, $nomGpoRemunerativo, $id_GpoRemunerativo);
		return parent::execute(SQLGpoRemunerativo::ACTUALIZAR_GPOREMUNERATIVO, $params);		
	}
	
	
	function consultarGpoRemunerativo(){	
		return parent::executeQuery(SQLGpoRemunerativo::CONSULTAR_GPOREMUNERATIVO);
	}	
	
	function eliminarGpoRemunerativo($id_GpoRemunerativo){
		$params = array($id_GpoRemunerativo);
		return parent::execute(SQLGpoRemunerativo::ELIMINAR_GPOREMUNERATIVO, $params);		
	}
	
//------------------------------	
	function consultarGpoRemunerativoXidGpoRemunerativo($idGpoRemunerativo){	
		$params = array($idGpoRemunerativo);
		return parent::executeQuery(SQLGpoRemunerativo::CONSULTAR_GPOREMUNERATIVO_POR_IDGPOREMUNERATIVO, $params);
	}	
	
	function existeGpoRemunerativoXidGpoRemunerativo($idGpoRemunerativo){
		$params = array($idGpoRemunerativo);
		$tabla = parent::executeQuery(SQLGpoRemunerativo::CONSULTAR_GPOREMUNERATIVO_POR_IDGPOREMUNERATIVO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarGpoRemunerativoXcodGpoRemunerativo($codGpoRemunerativo){	
		$params = array("%$codGpoRemunerativo%");
		return parent::executeQuery(SQLGpoRemunerativo::CONSULTAR_GPOREMUNERATIVO_POR_CODGPOREMUNERATIVO, $params);
	}	
	
	function consultarGpoRemunerativoXcodGpoRemunerativoAprox($codGpoRemunerativo){	
		$params = array("%$codGpoRemunerativo%");
		return parent::executeQuery(SQLGpoRemunerativo::CONSULTAR_GPOREMUNERATIVO_POR_CODGPOREMUNERATIVO_APROX, $params);
	}	
	
	function existeGpoRemunerativoXcodGpoRemunerativo($codGpoRemunerativo){
		$params = array($codGpoRemunerativo);
		$tabla = parent::executeQuery(SQLGpoRemunerativo::CONSULTAR_GPOREMUNERATIVO_POR_CODGPOREMUNERATIVO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarGpoRemunerativoXnomGpoRemunerativo($nomGpoRemunerativo){	
		$params = array("%$nomGpoRemunerativo%");
		return parent::executeQuery(SQLGpoRemunerativo::CONSULTAR_GPOREMUNERATIVO_POR_NOMGPOREMUNERATIVO, $params);
	}	
	
	function consultarGpoRemunerativoXnomGpoRemunerativoAprox($nomGpoRemunerativo){	
		$params = array("%$nomGpoRemunerativo%");
		return parent::executeQuery(SQLGpoRemunerativo::CONSULTAR_GPOREMUNERATIVO_POR_NOMGPOREMUNERATIVO_APROX, $params);
	}	
	
	function existeGpoRemunerativoXnomGpoRemunerativo($nomGpoRemunerativo){
		$params = array($nomGpoRemunerativo);
		$tabla = parent::executeQuery(SQLGpoRemunerativo::CONSULTAR_GPOREMUNERATIVO_POR_NOMGPOREMUNERATIVO, $params);
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