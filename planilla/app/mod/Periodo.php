<?php 
require_once('../../../config/config.php');
require_once(MOD.'Periodo.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLPeriodo.php');

class Periodo extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idPeriodo, $anioPeriodo, $mesPeriodo, $nomPeriodo, $edoPeriodo, $obsPeriodo) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idPeriodo, $anioPeriodo, $mesPeriodo, $nomPeriodo, $edoPeriodo, $obsPeriodo, $id_Periodo);
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
	function compActualizarcambiarTabla1cambiarTabla2($idPeriodo, $anioPeriodo, $mesPeriodo, $nomPeriodo, $edoPeriodo, $obsPeriodo) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idPeriodo, $anioPeriodo, $mesPeriodo, $nomPeriodo, $edoPeriodo, $obsPeriodo, $id_Periodo);
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
	function agregarPeriodo($idPeriodo, $anioPeriodo, $mesPeriodo, $nomPeriodo, $edoPeriodo, $obsPeriodo) {
$idPeriodo = parent::prepareParam($idPeriodo, Query::DATATYPE_INTEGER);
$anioPeriodo = parent::prepareParam($anioPeriodo, Query::DATATYPE_INTEGER);
$mesPeriodo = parent::prepareParam($mesPeriodo, Query::DATATYPE_INTEGER);
$nomPeriodo = parent::prepareParam($nomPeriodo, Query::DATATYPE_STRING, 0);
$edoPeriodo = parent::prepareParam($edoPeriodo, Query::DATATYPE_INTEGER);
$obsPeriodo = parent::prepareParam($obsPeriodo, Query::DATATYPE_STRING, 0);
		
		$params = array($idPeriodo, $anioPeriodo, $mesPeriodo, $nomPeriodo, $edoPeriodo, $obsPeriodo);
		return parent::execute(SQLPeriodo::AGREGAR_PERIODO, $params);
	}

	function actualizarPeriodo($idPeriodo, $anioPeriodo, $mesPeriodo, $nomPeriodo, $edoPeriodo, $obsPeriodo, $id_Periodo){
		
$idPeriodo = parent::prepareParam($idPeriodo, Query::DATATYPE_INTEGER);
$anioPeriodo = parent::prepareParam($anioPeriodo, Query::DATATYPE_INTEGER);
$mesPeriodo = parent::prepareParam($mesPeriodo, Query::DATATYPE_INTEGER);
$nomPeriodo = parent::prepareParam($nomPeriodo, Query::DATATYPE_STRING, 0);
$edoPeriodo = parent::prepareParam($edoPeriodo, Query::DATATYPE_INTEGER);
$obsPeriodo = parent::prepareParam($obsPeriodo, Query::DATATYPE_STRING, 0);

		
		$params = array($idPeriodo, $anioPeriodo, $mesPeriodo, $nomPeriodo, $edoPeriodo, $obsPeriodo, $id_Periodo);
		return parent::execute(SQLPeriodo::ACTUALIZAR_PERIODO, $params);		
	}
	
	
	function consultarPeriodo(){	
		return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO);
	}	
	
	function eliminarPeriodo($id_Periodo){
		$params = array($id_Periodo);
		return parent::execute(SQLPeriodo::ELIMINAR_PERIODO, $params);		
	}
	
//------------------------------	
	function consultarPeriodoXidPeriodo($idPeriodo){	
		$params = array($idPeriodo);
		return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_IDPERIODO, $params);
	}	
	
	function existePeriodoXidPeriodo($idPeriodo){
		$params = array($idPeriodo);
		$tabla = parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_IDPERIODO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPeriodoXanioPeriodo($anioPeriodo){	
		$params = array($anioPeriodo);
		return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_ANIOPERIODO, $params);
	}	
	
	function existePeriodoXanioPeriodo($anioPeriodo){
		$params = array($anioPeriodo);
		$tabla = parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_ANIOPERIODO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPeriodoXmesPeriodo($mesPeriodo){	
		$params = array($mesPeriodo);
		return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_MESPERIODO, $params);
	}	
	
	function existePeriodoXmesPeriodo($mesPeriodo){
		$params = array($mesPeriodo);
		$tabla = parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_MESPERIODO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPeriodoXnomPeriodo($nomPeriodo){	
		$params = array("%$nomPeriodo%");
		return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_NOMPERIODO, $params);
	}	
	
	function consultarPeriodoXnomPeriodoAprox($nomPeriodo){	
		$params = array("%$nomPeriodo%");
		return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_NOMPERIODO_APROX, $params);
	}	
	
	function existePeriodoXnomPeriodo($nomPeriodo){
		$params = array($nomPeriodo);
		$tabla = parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_NOMPERIODO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPeriodoXedoPeriodo($edoPeriodo){	
		$params = array($edoPeriodo);
		return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_EDO, $params);
	}	
	
	function existePeriodoXedoPeriodo($edoPeriodo){
		$params = array($edoPeriodo);
		$tabla = parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_EDO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPeriodoXobsPeriodo($obsPeriodo){	
		$params = array("%$obsPeriodo%");
		return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_OBSPERIODO, $params);
	}	
	
	function consultarPeriodoXobsPeriodoAprox($obsPeriodo){	
		$params = array("%$obsPeriodo%");
		return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_OBSPERIODO_APROX, $params);
	}	
	
	function existePeriodoXobsPeriodo($obsPeriodo){
		$params = array($obsPeriodo);
		$tabla = parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_OBSPERIODO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

//------------------------------	

 //INICIO COMBOS 
	function consultarAnioPeriodo($diccionarioid){	
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
	function consultarMesPeriodo($diccionarioid){	
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
	function consultarEdoPeriodo($diccionarioid){	
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