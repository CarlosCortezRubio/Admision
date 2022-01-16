<?php 
require_once('../../../config/config.php');
require_once(MOD.'Via.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLVia.php');

class Via extends Query{
function __construct(){
// 		parent::abrirConexion();
		parent::abrirConexionConParam(SERVER_RH,USER_RH,PASSWORDBD_RH,DATABASE_RH);
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idVia, $nomVia) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idVia, $nomVia, $id_Via);
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
	function compActualizarcambiarTabla1cambiarTabla2($idVia, $nomVia) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idVia, $nomVia, $id_Via);
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
	function agregarVia($idVia, $nomVia) {
$idVia = parent::prepareParam($idVia, Query::DATATYPE_INTEGER);
$nomVia = parent::prepareParam($nomVia, Query::DATATYPE_STRING, 0);
		
		$params = array($idVia, $nomVia);
		return parent::execute(SQLVia::AGREGAR_VIA, $params);
	}

	function actualizarVia($idVia, $nomVia, $id_Via){
		
$idVia = parent::prepareParam($idVia, Query::DATATYPE_INTEGER);
$nomVia = parent::prepareParam($nomVia, Query::DATATYPE_STRING, 0);

		
		$params = array($idVia, $nomVia, $id_Via);
		return parent::execute(SQLVia::ACTUALIZAR_VIA, $params);		
	}
	
	
	function consultarVia(){	
		return parent::executeQuery(SQLVia::CONSULTAR_VIA);
	}	
	
	function eliminarVia($id_Via){
		$params = array($id_Via);
		return parent::execute(SQLVia::ELIMINAR_VIA, $params);		
	}
	
//------------------------------	
	function consultarViaXidVia($idVia){	
		$params = array($idVia);
		return parent::executeQuery(SQLVia::CONSULTAR_VIA_POR_IDVIA, $params);
	}	
	
	function existeViaXidVia($idVia){
		$params = array($idVia);
		$tabla = parent::executeQuery(SQLVia::CONSULTAR_VIA_POR_IDVIA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarViaXnomVia($nomVia){	
		$params = array("%$nomVia%");
		return parent::executeQuery(SQLVia::CONSULTAR_VIA_POR_NOMVIA, $params);
	}	
	
	function consultarViaXnomViaAprox($nomVia){	
		$params = array("%$nomVia%");
		return parent::executeQuery(SQLVia::CONSULTAR_VIA_POR_NOMVIA_APROX, $params);
	}	
	
	function existeViaXnomVia($nomVia){
		$params = array($nomVia);
		$tabla = parent::executeQuery(SQLVia::CONSULTAR_VIA_POR_NOMVIA, $params);
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