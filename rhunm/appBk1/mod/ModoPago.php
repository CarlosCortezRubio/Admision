<?php 
require_once('../../../config/config.php');
require_once(MOD.'ModoPago.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLModoPago.php');

class ModoPago extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idModoPago, $codModoPago, $nomModoPago) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idModoPago, $codModoPago, $nomModoPago, $id_ModoPago);
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
	function compActualizarcambiarTabla1cambiarTabla2($idModoPago, $codModoPago, $nomModoPago) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idModoPago, $codModoPago, $nomModoPago, $id_ModoPago);
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
	function agregarModoPago($idModoPago, $codModoPago, $nomModoPago) {
$idModoPago = parent::prepareParam($idModoPago, Query::DATATYPE_INTEGER);
$codModoPago = parent::prepareParam($codModoPago, Query::DATATYPE_STRING, 0);
$nomModoPago = parent::prepareParam($nomModoPago, Query::DATATYPE_STRING, 0);
		
		$params = array($idModoPago, $codModoPago, $nomModoPago);
		return parent::execute(SQLModoPago::AGREGAR_MODOPAGO, $params);
	}

	function actualizarModoPago($idModoPago, $codModoPago, $nomModoPago, $id_ModoPago){
		
$idModoPago = parent::prepareParam($idModoPago, Query::DATATYPE_INTEGER);
$codModoPago = parent::prepareParam($codModoPago, Query::DATATYPE_STRING, 0);
$nomModoPago = parent::prepareParam($nomModoPago, Query::DATATYPE_STRING, 0);

		
		$params = array($idModoPago, $codModoPago, $nomModoPago, $id_ModoPago);
		return parent::execute(SQLModoPago::ACTUALIZAR_MODOPAGO, $params);		
	}
	
	
	function consultarModoPago(){	
		return parent::executeQuery(SQLModoPago::CONSULTAR_MODOPAGO);
	}	
	
	function eliminarModoPago($id_ModoPago){
		$params = array($id_ModoPago);
		return parent::execute(SQLModoPago::ELIMINAR_MODOPAGO, $params);		
	}
	
//------------------------------	
	function consultarModoPagoXidModoPago($idModoPago){	
		$params = array($idModoPago);
		return parent::executeQuery(SQLModoPago::CONSULTAR_MODOPAGO_POR_IDMODOPAGO, $params);
	}	
	
	function existeModoPagoXidModoPago($idModoPago){
		$params = array($idModoPago);
		$tabla = parent::executeQuery(SQLModoPago::CONSULTAR_MODOPAGO_POR_IDMODOPAGO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarModoPagoXcodModoPago($codModoPago){	
		$params = array("%$codModoPago%");
		return parent::executeQuery(SQLModoPago::CONSULTAR_MODOPAGO_POR_CODMODOPAGO, $params);
	}	
	
	function consultarModoPagoXcodModoPagoAprox($codModoPago){	
		$params = array("%$codModoPago%");
		return parent::executeQuery(SQLModoPago::CONSULTAR_MODOPAGO_POR_CODMODOPAGO_APROX, $params);
	}	
	
	function existeModoPagoXcodModoPago($codModoPago){
		$params = array($codModoPago);
		$tabla = parent::executeQuery(SQLModoPago::CONSULTAR_MODOPAGO_POR_CODMODOPAGO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarModoPagoXnomModoPago($nomModoPago){	
		$params = array("%$nomModoPago%");
		return parent::executeQuery(SQLModoPago::CONSULTAR_MODOPAGO_POR_NOMMODOPAGO, $params);
	}	
	
	function consultarModoPagoXnomModoPagoAprox($nomModoPago){	
		$params = array("%$nomModoPago%");
		return parent::executeQuery(SQLModoPago::CONSULTAR_MODOPAGO_POR_NOMMODOPAGO_APROX, $params);
	}	
	
	function existeModoPagoXnomModoPago($nomModoPago){
		$params = array($nomModoPago);
		$tabla = parent::executeQuery(SQLModoPago::CONSULTAR_MODOPAGO_POR_NOMMODOPAGO, $params);
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