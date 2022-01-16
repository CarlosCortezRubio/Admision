<?php 
require_once('../../../config/config.php');
require_once(MOD.'Banco.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLBanco.php');

class Banco extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($IDBANCO, $Edo_idEdoRegistro, $NOMBANCO, $ETIBANCO) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($IDBANCO, $Edo_idEdoRegistro, $NOMBANCO, $ETIBANCO, $id_Banco);
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
	function compActualizarcambiarTabla1cambiarTabla2($IDBANCO, $Edo_idEdoRegistro, $NOMBANCO, $ETIBANCO) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($IDBANCO, $Edo_idEdoRegistro, $NOMBANCO, $ETIBANCO, $id_Banco);
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
	function agregarBanco($IDBANCO, $Edo_idEdoRegistro, $NOMBANCO, $ETIBANCO) {
$IDBANCO = parent::prepareParam($IDBANCO, Query::DATATYPE_INTEGER);
$Edo_idEdoRegistro = parent::prepareParam($Edo_idEdoRegistro, Query::DATATYPE_INTEGER);
$NOMBANCO = parent::prepareParam($NOMBANCO, Query::DATATYPE_STRING, 0);
$ETIBANCO = parent::prepareParam($ETIBANCO, Query::DATATYPE_STRING, 0);
		
		$params = array($IDBANCO, $Edo_idEdoRegistro, $NOMBANCO, $ETIBANCO);
		return parent::execute(SQLBanco::AGREGAR_BANCO, $params);
	}

	function actualizarBanco($IDBANCO, $Edo_idEdoRegistro, $NOMBANCO, $ETIBANCO, $id_Banco){
		
$IDBANCO = parent::prepareParam($IDBANCO, Query::DATATYPE_INTEGER);
$Edo_idEdoRegistro = parent::prepareParam($Edo_idEdoRegistro, Query::DATATYPE_INTEGER);
$NOMBANCO = parent::prepareParam($NOMBANCO, Query::DATATYPE_STRING, 0);
$ETIBANCO = parent::prepareParam($ETIBANCO, Query::DATATYPE_STRING, 0);

		
		$params = array($IDBANCO, $Edo_idEdoRegistro, $NOMBANCO, $ETIBANCO, $id_Banco);
		return parent::execute(SQLBanco::ACTUALIZAR_BANCO, $params);		
	}
	
	
	function consultarBanco(){	
		return parent::executeQuery(SQLBanco::CONSULTAR_BANCO);
	}	
	
	function eliminarBanco($id_Banco){
		$params = array($id_Banco);
		return parent::execute(SQLBanco::ELIMINAR_BANCO, $params);		
	}
	
//------------------------------	
	function consultarBancoXIDBANCO($IDBANCO){	
		$params = array($IDBANCO);
		return parent::executeQuery(SQLBanco::CONSULTAR_BANCO_POR_IDBANCO, $params);
	}	
	
	function existeBancoXIDBANCO($IDBANCO){
		$params = array($IDBANCO);
		$tabla = parent::executeQuery(SQLBanco::CONSULTAR_BANCO_POR_IDBANCO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarBancoXEdo_idEdoRegistro($Edo_idEdoRegistro){	
		$params = array($Edo_idEdoRegistro);
		return parent::executeQuery(SQLBanco::CONSULTAR_BANCO_POR_EDO_IDEDOREGISTRO, $params);
	}	
	
	function existeBancoXEdo_idEdoRegistro($Edo_idEdoRegistro){
		$params = array($Edo_idEdoRegistro);
		$tabla = parent::executeQuery(SQLBanco::CONSULTAR_BANCO_POR_EDO_IDEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarBancoXNOMBANCO($NOMBANCO){	
		$params = array("%$NOMBANCO%");
		return parent::executeQuery(SQLBanco::CONSULTAR_BANCO_POR_NOMBANCO, $params);
	}	
	
	function consultarBancoXNOMBANCOAprox($NOMBANCO){	
		$params = array("%$NOMBANCO%");
		return parent::executeQuery(SQLBanco::CONSULTAR_BANCO_POR_NOMBANCO_APROX, $params);
	}	
	
	function existeBancoXNOMBANCO($NOMBANCO){
		$params = array($NOMBANCO);
		$tabla = parent::executeQuery(SQLBanco::CONSULTAR_BANCO_POR_NOMBANCO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarBancoXETIBANCO($ETIBANCO){	
		$params = array("%$ETIBANCO%");
		return parent::executeQuery(SQLBanco::CONSULTAR_BANCO_POR_ETIBANCO, $params);
	}	
	
	function consultarBancoXETIBANCOAprox($ETIBANCO){	
		$params = array("%$ETIBANCO%");
		return parent::executeQuery(SQLBanco::CONSULTAR_BANCO_POR_ETIBANCO_APROX, $params);
	}	
	
	function existeBancoXETIBANCO($ETIBANCO){
		$params = array($ETIBANCO);
		$tabla = parent::executeQuery(SQLBanco::CONSULTAR_BANCO_POR_ETIBANCO, $params);
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