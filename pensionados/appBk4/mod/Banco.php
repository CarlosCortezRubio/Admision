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
	function compAgregarcambiarTabla1cambiarTabla2($idBanco, $idEdoRegistro, $nomBanco, $etiBanco) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idBanco, $idEdoRegistro, $nomBanco, $etiBanco, $id_Banco);
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
	function compActualizarcambiarTabla1cambiarTabla2($idBanco, $idEdoRegistro, $nomBanco, $etiBanco) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idBanco, $idEdoRegistro, $nomBanco, $etiBanco, $id_Banco);
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
	function agregarBanco($idBanco, $idEdoRegistro, $nomBanco, $etiBanco) {
$idBanco = parent::prepareParam($idBanco, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$nomBanco = parent::prepareParam($nomBanco, Query::DATATYPE_STRING, 0);
$etiBanco = parent::prepareParam($etiBanco, Query::DATATYPE_STRING, 0);
		
		$params = array($idBanco, $idEdoRegistro, $nomBanco, $etiBanco);
		return parent::execute(SQLBanco::AGREGAR_BANCO, $params);
	}

	function actualizarBanco($idBanco, $idEdoRegistro, $nomBanco, $etiBanco, $id_Banco){
		
$idBanco = parent::prepareParam($idBanco, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$nomBanco = parent::prepareParam($nomBanco, Query::DATATYPE_STRING, 0);
$etiBanco = parent::prepareParam($etiBanco, Query::DATATYPE_STRING, 0);

		
		$params = array($idBanco, $idEdoRegistro, $nomBanco, $etiBanco, $id_Banco);
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
	function consultarBancoXidBanco($idBanco){	
		$params = array($idBanco);
		return parent::executeQuery(SQLBanco::CONSULTAR_BANCO_POR_IDBANCO, $params);
	}	
	
	function existeBancoXidBanco($idBanco){
		$params = array($idBanco);
		$tabla = parent::executeQuery(SQLBanco::CONSULTAR_BANCO_POR_IDBANCO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarBancoXidEdoRegistro($idEdoRegistro){	
		$params = array($idEdoRegistro);
		return parent::executeQuery(SQLBanco::CONSULTAR_BANCO_POR_IDEDOREGISTRO, $params);
	}	
	
	function existeBancoXidEdoRegistro($idEdoRegistro){
		$params = array($idEdoRegistro);
		$tabla = parent::executeQuery(SQLBanco::CONSULTAR_BANCO_POR_IDEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarBancoXnomBanco($nomBanco){	
		$params = array("%$nomBanco%");
		return parent::executeQuery(SQLBanco::CONSULTAR_BANCO_POR_NOMBANCO, $params);
	}	
	
	function consultarBancoXnomBancoAprox($nomBanco){	
		$params = array("%$nomBanco%");
		return parent::executeQuery(SQLBanco::CONSULTAR_BANCO_POR_NOMBANCO_APROX, $params);
	}	
	
	function existeBancoXnomBanco($nomBanco){
		$params = array($nomBanco);
		$tabla = parent::executeQuery(SQLBanco::CONSULTAR_BANCO_POR_NOMBANCO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarBancoXetiBanco($etiBanco){	
		$params = array("%$etiBanco%");
		return parent::executeQuery(SQLBanco::CONSULTAR_BANCO_POR_ETIBANCO, $params);
	}	
	
	function consultarBancoXetiBancoAprox($etiBanco){	
		$params = array("%$etiBanco%");
		return parent::executeQuery(SQLBanco::CONSULTAR_BANCO_POR_ETIBANCO_APROX, $params);
	}	
	
	function existeBancoXetiBanco($etiBanco){
		$params = array($etiBanco);
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