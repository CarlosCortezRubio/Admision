<?php 
require_once('../../../config/config.php');
require_once(MOD.'Establecimiento.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLEstablecimiento.php');

class Establecimiento extends Query{
    function __construct(){
        // 		parent::abrirConexion();
        parent::abrirConexionConParam(SERVER_RH,USER_RH,PASSWORDBD_RH,DATABASE_RH);
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idEstablecimiento, $codEstablecimiento, $nomEstablecimiento) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idEstablecimiento, $codEstablecimiento, $nomEstablecimiento, $id_Establecimiento);
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
	function compActualizarcambiarTabla1cambiarTabla2($idEstablecimiento, $codEstablecimiento, $nomEstablecimiento) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idEstablecimiento, $codEstablecimiento, $nomEstablecimiento, $id_Establecimiento);
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
	function agregarEstablecimiento($idEstablecimiento, $codEstablecimiento, $nomEstablecimiento) {
$idEstablecimiento = parent::prepareParam($idEstablecimiento, Query::DATATYPE_INTEGER);
$codEstablecimiento = parent::prepareParam($codEstablecimiento, Query::DATATYPE_STRING, 0);
$nomEstablecimiento = parent::prepareParam($nomEstablecimiento, Query::DATATYPE_STRING, 0);
		
		$params = array($idEstablecimiento, $codEstablecimiento, $nomEstablecimiento);
		return parent::execute(SQLEstablecimiento::AGREGAR_ESTABLECIMIENTO, $params);
	}

	function actualizarEstablecimiento($idEstablecimiento, $codEstablecimiento, $nomEstablecimiento, $id_Establecimiento){
		
$idEstablecimiento = parent::prepareParam($idEstablecimiento, Query::DATATYPE_INTEGER);
$codEstablecimiento = parent::prepareParam($codEstablecimiento, Query::DATATYPE_STRING, 0);
$nomEstablecimiento = parent::prepareParam($nomEstablecimiento, Query::DATATYPE_STRING, 0);

		
		$params = array($idEstablecimiento, $codEstablecimiento, $nomEstablecimiento, $id_Establecimiento);
		return parent::execute(SQLEstablecimiento::ACTUALIZAR_ESTABLECIMIENTO, $params);		
	}
	
	
	function consultarEstablecimiento(){	
		return parent::executeQuery(SQLEstablecimiento::CONSULTAR_ESTABLECIMIENTO);
	}	
	
	function eliminarEstablecimiento($id_Establecimiento){
		$params = array($id_Establecimiento);
		return parent::execute(SQLEstablecimiento::ELIMINAR_ESTABLECIMIENTO, $params);		
	}
	
//------------------------------	
	function consultarEstablecimientoXidEstablecimiento($idEstablecimiento){	
		$params = array($idEstablecimiento);
		return parent::executeQuery(SQLEstablecimiento::CONSULTAR_ESTABLECIMIENTO_POR_IDESTABLECIMIENTO, $params);
	}	
	
	function existeEstablecimientoXidEstablecimiento($idEstablecimiento){
		$params = array($idEstablecimiento);
		$tabla = parent::executeQuery(SQLEstablecimiento::CONSULTAR_ESTABLECIMIENTO_POR_IDESTABLECIMIENTO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEstablecimientoXcodEstablecimiento($codEstablecimiento){	
		$params = array("%$codEstablecimiento%");
		return parent::executeQuery(SQLEstablecimiento::CONSULTAR_ESTABLECIMIENTO_POR_CODESTABLECIMIENTO, $params);
	}	
	
	function consultarEstablecimientoXcodEstablecimientoAprox($codEstablecimiento){	
		$params = array("%$codEstablecimiento%");
		return parent::executeQuery(SQLEstablecimiento::CONSULTAR_ESTABLECIMIENTO_POR_CODESTABLECIMIENTO_APROX, $params);
	}	
	
	function existeEstablecimientoXcodEstablecimiento($codEstablecimiento){
		$params = array($codEstablecimiento);
		$tabla = parent::executeQuery(SQLEstablecimiento::CONSULTAR_ESTABLECIMIENTO_POR_CODESTABLECIMIENTO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEstablecimientoXnomEstablecimiento($nomEstablecimiento){	
		$params = array("%$nomEstablecimiento%");
		return parent::executeQuery(SQLEstablecimiento::CONSULTAR_ESTABLECIMIENTO_POR_NOMESTABLECIMIENTO, $params);
	}	
	
	function consultarEstablecimientoXnomEstablecimientoAprox($nomEstablecimiento){	
		$params = array("%$nomEstablecimiento%");
		return parent::executeQuery(SQLEstablecimiento::CONSULTAR_ESTABLECIMIENTO_POR_NOMESTABLECIMIENTO_APROX, $params);
	}	
	
	function existeEstablecimientoXnomEstablecimiento($nomEstablecimiento){
		$params = array($nomEstablecimiento);
		$tabla = parent::executeQuery(SQLEstablecimiento::CONSULTAR_ESTABLECIMIENTO_POR_NOMESTABLECIMIENTO, $params);
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