<?php 
require_once('../../../config/config.php');
require_once(MOD.'TipoPlanilla.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLTipoPlanilla.php');

class TipoPlanilla extends Query{
    function __construct(){
        // 		parent::abrirConexion();
        parent::abrirConexionConParam(SERVER_RH,USER_RH,PASSWORDBD_RH,DATABASE_RH);
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idTipoPlanilla, $nomTipoPlanilla) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idTipoPlanilla, $nomTipoPlanilla, $id_TipoPlanilla);
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
	function compActualizarcambiarTabla1cambiarTabla2($idTipoPlanilla, $nomTipoPlanilla) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idTipoPlanilla, $nomTipoPlanilla, $id_TipoPlanilla);
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
	function agregarTipoPlanilla($idTipoPlanilla, $nomTipoPlanilla) {
$idTipoPlanilla = parent::prepareParam($idTipoPlanilla, Query::DATATYPE_INTEGER);
$nomTipoPlanilla = parent::prepareParam($nomTipoPlanilla, Query::DATATYPE_STRING, 0);
		
		$params = array($idTipoPlanilla, $nomTipoPlanilla);
		return parent::execute(SQLTipoPlanilla::AGREGAR_TIPOPLANILLA, $params);
	}

	function actualizarTipoPlanilla($idTipoPlanilla, $nomTipoPlanilla, $id_TipoPlanilla){
		
$idTipoPlanilla = parent::prepareParam($idTipoPlanilla, Query::DATATYPE_INTEGER);
$nomTipoPlanilla = parent::prepareParam($nomTipoPlanilla, Query::DATATYPE_STRING, 0);

		
		$params = array($idTipoPlanilla, $nomTipoPlanilla, $id_TipoPlanilla);
		return parent::execute(SQLTipoPlanilla::ACTUALIZAR_TIPOPLANILLA, $params);		
	}
	
	
	function consultarTipoPlanilla(){	
		return parent::executeQuery(SQLTipoPlanilla::CONSULTAR_TIPOPLANILLA);
	}	
	
	function eliminarTipoPlanilla($id_TipoPlanilla){
		$params = array($id_TipoPlanilla);
		return parent::execute(SQLTipoPlanilla::ELIMINAR_TIPOPLANILLA, $params);		
	}
	
//------------------------------	
	function consultarTipoPlanillaXidTipoPlanilla($idTipoPlanilla){	
		$params = array($idTipoPlanilla);
		return parent::executeQuery(SQLTipoPlanilla::CONSULTAR_TIPOPLANILLA_POR_IDTIPOPLANILLA, $params);
	}	
	
	function existeTipoPlanillaXidTipoPlanilla($idTipoPlanilla){
		$params = array($idTipoPlanilla);
		$tabla = parent::executeQuery(SQLTipoPlanilla::CONSULTAR_TIPOPLANILLA_POR_IDTIPOPLANILLA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarTipoPlanillaXnomTipoPlanilla($nomTipoPlanilla){	
		$params = array("%$nomTipoPlanilla%");
		return parent::executeQuery(SQLTipoPlanilla::CONSULTAR_TIPOPLANILLA_POR_NOMTIPOPLANILLA, $params);
	}	
	
	function consultarTipoPlanillaXnomTipoPlanillaAprox($nomTipoPlanilla){	
		$params = array("%$nomTipoPlanilla%");
		return parent::executeQuery(SQLTipoPlanilla::CONSULTAR_TIPOPLANILLA_POR_NOMTIPOPLANILLA_APROX, $params);
	}	
	
	function existeTipoPlanillaXnomTipoPlanilla($nomTipoPlanilla){
		$params = array($nomTipoPlanilla);
		$tabla = parent::executeQuery(SQLTipoPlanilla::CONSULTAR_TIPOPLANILLA_POR_NOMTIPOPLANILLA, $params);
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