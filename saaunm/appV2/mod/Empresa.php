<?php 
require_once('../../../config/config.php');
require_once(MOD.'Empresa.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLEmpresa.php');

class Empresa extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idEmpresa, $idEdoRegistro, $rucEmpresa, $telEmpresa, $dirEmpresa, $correoEmpresa) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idEmpresa, $idEdoRegistro, $rucEmpresa, $telEmpresa, $dirEmpresa, $correoEmpresa, $id_Empresa);
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
	function compActualizarcambiarTabla1cambiarTabla2($idEmpresa, $idEdoRegistro, $rucEmpresa, $telEmpresa, $dirEmpresa, $correoEmpresa) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idEmpresa, $idEdoRegistro, $rucEmpresa, $telEmpresa, $dirEmpresa, $correoEmpresa, $id_Empresa);
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
	function agregarEmpresa($idEmpresa, $idEdoRegistro, $rucEmpresa, $telEmpresa, $dirEmpresa, $correoEmpresa) {
$idEmpresa = parent::prepareParam($idEmpresa, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$rucEmpresa = parent::prepareParam($rucEmpresa, Query::DATATYPE_STRING, 0);
$telEmpresa = parent::prepareParam($telEmpresa, Query::DATATYPE_STRING, 0);
$dirEmpresa = parent::prepareParam($dirEmpresa, Query::DATATYPE_STRING, 0);
$correoEmpresa = parent::prepareParam($correoEmpresa, Query::DATATYPE_STRING, 0);
		
		$params = array($idEmpresa, $idEdoRegistro, $rucEmpresa, $telEmpresa, $dirEmpresa, $correoEmpresa);
		return parent::execute(SQLEmpresa::AGREGAR_EMPRESA, $params);
	}

	function actualizarEmpresa($idEmpresa, $idEdoRegistro, $rucEmpresa, $telEmpresa, $dirEmpresa, $correoEmpresa, $id_Empresa){
		
$idEmpresa = parent::prepareParam($idEmpresa, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$rucEmpresa = parent::prepareParam($rucEmpresa, Query::DATATYPE_STRING, 0);
$telEmpresa = parent::prepareParam($telEmpresa, Query::DATATYPE_STRING, 0);
$dirEmpresa = parent::prepareParam($dirEmpresa, Query::DATATYPE_STRING, 0);
$correoEmpresa = parent::prepareParam($correoEmpresa, Query::DATATYPE_STRING, 0);

		
		$params = array($idEmpresa, $idEdoRegistro, $rucEmpresa, $telEmpresa, $dirEmpresa, $correoEmpresa, $id_Empresa);
		return parent::execute(SQLEmpresa::ACTUALIZAR_EMPRESA, $params);		
	}
	
	
	function consultarEmpresa(){	
		return parent::executeQuery(SQLEmpresa::CONSULTAR_EMPRESA);
	}	
	
	function eliminarEmpresa($id_Empresa){
		$params = array($id_Empresa);
		return parent::execute(SQLEmpresa::ELIMINAR_EMPRESA, $params);		
	}
	
//------------------------------	
	function consultarEmpresaXidEmpresa($idEmpresa){	
		$params = array($idEmpresa);
		return parent::executeQuery(SQLEmpresa::CONSULTAR_EMPRESA_POR_IDEMPRESA, $params);
	}	
	
	function existeEmpresaXidEmpresa($idEmpresa){
		$params = array($idEmpresa);
		$tabla = parent::executeQuery(SQLEmpresa::CONSULTAR_EMPRESA_POR_IDEMPRESA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpresaXidEdoRegistro($idEdoRegistro){	
		$params = array($idEdoRegistro);
		return parent::executeQuery(SQLEmpresa::CONSULTAR_EMPRESA_POR_IDEDOREGISTRO, $params);
	}	
	
	function existeEmpresaXidEdoRegistro($idEdoRegistro){
		$params = array($idEdoRegistro);
		$tabla = parent::executeQuery(SQLEmpresa::CONSULTAR_EMPRESA_POR_IDEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpresaXrucEmpresa($rucEmpresa){	
		$params = array("%$rucEmpresa%");
		return parent::executeQuery(SQLEmpresa::CONSULTAR_EMPRESA_POR_RUCEMPRESA, $params);
	}	
	
	function consultarEmpresaXrucEmpresaAprox($rucEmpresa){	
		$params = array("%$rucEmpresa%");
		return parent::executeQuery(SQLEmpresa::CONSULTAR_EMPRESA_POR_RUCEMPRESA_APROX, $params);
	}	
	
	function existeEmpresaXrucEmpresa($rucEmpresa){
		$params = array($rucEmpresa);
		$tabla = parent::executeQuery(SQLEmpresa::CONSULTAR_EMPRESA_POR_RUCEMPRESA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpresaXtelEmpresa($telEmpresa){	
		$params = array("%$telEmpresa%");
		return parent::executeQuery(SQLEmpresa::CONSULTAR_EMPRESA_POR_TELEMPRESA, $params);
	}	
	
	function consultarEmpresaXtelEmpresaAprox($telEmpresa){	
		$params = array("%$telEmpresa%");
		return parent::executeQuery(SQLEmpresa::CONSULTAR_EMPRESA_POR_TELEMPRESA_APROX, $params);
	}	
	
	function existeEmpresaXtelEmpresa($telEmpresa){
		$params = array($telEmpresa);
		$tabla = parent::executeQuery(SQLEmpresa::CONSULTAR_EMPRESA_POR_TELEMPRESA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpresaXdirEmpresa($dirEmpresa){	
		$params = array("%$dirEmpresa%");
		return parent::executeQuery(SQLEmpresa::CONSULTAR_EMPRESA_POR_DIREMPRESA, $params);
	}	
	
	function consultarEmpresaXdirEmpresaAprox($dirEmpresa){	
		$params = array("%$dirEmpresa%");
		return parent::executeQuery(SQLEmpresa::CONSULTAR_EMPRESA_POR_DIREMPRESA_APROX, $params);
	}	
	
	function existeEmpresaXdirEmpresa($dirEmpresa){
		$params = array($dirEmpresa);
		$tabla = parent::executeQuery(SQLEmpresa::CONSULTAR_EMPRESA_POR_DIREMPRESA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpresaXcorreoEmpresa($correoEmpresa){	
		$params = array("%$correoEmpresa%");
		return parent::executeQuery(SQLEmpresa::CONSULTAR_EMPRESA_POR_CORREOEMPRESA, $params);
	}	
	
	function consultarEmpresaXcorreoEmpresaAprox($correoEmpresa){	
		$params = array("%$correoEmpresa%");
		return parent::executeQuery(SQLEmpresa::CONSULTAR_EMPRESA_POR_CORREOEMPRESA_APROX, $params);
	}	
	
	function existeEmpresaXcorreoEmpresa($correoEmpresa){
		$params = array($correoEmpresa);
		$tabla = parent::executeQuery(SQLEmpresa::CONSULTAR_EMPRESA_POR_CORREOEMPRESA, $params);
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