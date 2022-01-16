<?php 
require_once('../../../config/config.php');
require_once(MOD.'SegSalud.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLSegSalud.php');

class SegSalud extends Query{
    function __construct(){
        // 		parent::abrirConexion();
        parent::abrirConexionConParam(SERVER_RH,USER_RH,PASSWORDBD_RH,DATABASE_RH);
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idSegSalud, $nomSegSalud) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idSegSalud, $nomSegSalud, $id_SegSalud);
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
	function compActualizarcambiarTabla1cambiarTabla2($idSegSalud, $nomSegSalud) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idSegSalud, $nomSegSalud, $id_SegSalud);
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
	function agregarSegSalud($idSegSalud, $nomSegSalud) {
$idSegSalud = parent::prepareParam($idSegSalud, Query::DATATYPE_INTEGER);
$nomSegSalud = parent::prepareParam($nomSegSalud, Query::DATATYPE_STRING, 0);
		
		$params = array($idSegSalud, $nomSegSalud);
		return parent::execute(SQLSegSalud::AGREGAR_SEGSALUD, $params);
	}

	function actualizarSegSalud($idSegSalud, $nomSegSalud, $id_SegSalud){
		
$idSegSalud = parent::prepareParam($idSegSalud, Query::DATATYPE_INTEGER);
$nomSegSalud = parent::prepareParam($nomSegSalud, Query::DATATYPE_STRING, 0);

		
		$params = array($idSegSalud, $nomSegSalud, $id_SegSalud);
		return parent::execute(SQLSegSalud::ACTUALIZAR_SEGSALUD, $params);		
	}
	
	
	function consultarSegSalud(){	
		return parent::executeQuery(SQLSegSalud::CONSULTAR_SEGSALUD);
	}	
	
	function eliminarSegSalud($id_SegSalud){
		$params = array($id_SegSalud);
		return parent::execute(SQLSegSalud::ELIMINAR_SEGSALUD, $params);		
	}
	
//------------------------------	
	function consultarSegSaludXidSegSalud($idSegSalud){	
		$params = array($idSegSalud);
		return parent::executeQuery(SQLSegSalud::CONSULTAR_SEGSALUD_POR_IDSEGSALUD, $params);
	}	
	
	function existeSegSaludXidSegSalud($idSegSalud){
		$params = array($idSegSalud);
		$tabla = parent::executeQuery(SQLSegSalud::CONSULTAR_SEGSALUD_POR_IDSEGSALUD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarSegSaludXnomSegSalud($nomSegSalud){	
		$params = array("%$nomSegSalud%");
		return parent::executeQuery(SQLSegSalud::CONSULTAR_SEGSALUD_POR_NOMSEGSALUD, $params);
	}	
	
	function consultarSegSaludXnomSegSaludAprox($nomSegSalud){	
		$params = array("%$nomSegSalud%");
		return parent::executeQuery(SQLSegSalud::CONSULTAR_SEGSALUD_POR_NOMSEGSALUD_APROX, $params);
	}	
	
	function existeSegSaludXnomSegSalud($nomSegSalud){
		$params = array($nomSegSalud);
		$tabla = parent::executeQuery(SQLSegSalud::CONSULTAR_SEGSALUD_POR_NOMSEGSALUD, $params);
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