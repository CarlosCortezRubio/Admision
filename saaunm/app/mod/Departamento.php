<?php 
require_once('../../../config/config.php');
require_once(MOD.'Departamento.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLDepartamento.php');

class Departamento extends Query{
function __construct(){
// 		parent::abrirConexion();
		parent::abrirConexionConParam(SERVER_RH,USER_RH,PASSWORDBD_RH,DATABASE_RH);
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idDepartamento, $idPais, $nomDepartamento) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idDepartamento, $idPais, $nomDepartamento, $id_Departamento);
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
	function compActualizarcambiarTabla1cambiarTabla2($idDepartamento, $idPais, $nomDepartamento) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idDepartamento, $idPais, $nomDepartamento, $id_Departamento);
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
	function agregarDepartamento($idDepartamento, $idPais, $nomDepartamento) {
$idDepartamento = parent::prepareParam($idDepartamento, Query::DATATYPE_INTEGER);
$idPais = parent::prepareParam($idPais, Query::DATATYPE_INTEGER);
$nomDepartamento = parent::prepareParam($nomDepartamento, Query::DATATYPE_STRING, 0);
		
		$params = array($idDepartamento, $idPais, $nomDepartamento);
		return parent::execute(SQLDepartamento::AGREGAR_DEPARTAMENTO, $params);
	}

	function actualizarDepartamento($idDepartamento, $idPais, $nomDepartamento, $id_Departamento){
		
$idDepartamento = parent::prepareParam($idDepartamento, Query::DATATYPE_INTEGER);
$idPais = parent::prepareParam($idPais, Query::DATATYPE_INTEGER);
$nomDepartamento = parent::prepareParam($nomDepartamento, Query::DATATYPE_STRING, 0);

		
		$params = array($idDepartamento, $idPais, $nomDepartamento, $id_Departamento);
		return parent::execute(SQLDepartamento::ACTUALIZAR_DEPARTAMENTO, $params);		
	}
	
	
	function consultarDepartamento(){	
		return parent::executeQuery(SQLDepartamento::CONSULTAR_DEPARTAMENTO);
	}	
	
	function eliminarDepartamento($id_Departamento){
		$params = array($id_Departamento);
		return parent::execute(SQLDepartamento::ELIMINAR_DEPARTAMENTO, $params);		
	}
	
//------------------------------	
	function consultarDepartamentoXidDepartamento($idDepartamento){	
		$params = array($idDepartamento);
		return parent::executeQuery(SQLDepartamento::CONSULTAR_DEPARTAMENTO_POR_IDDEPARTAMENTO, $params);
	}	
	
	function existeDepartamentoXidDepartamento($idDepartamento){
		$params = array($idDepartamento);
		$tabla = parent::executeQuery(SQLDepartamento::CONSULTAR_DEPARTAMENTO_POR_IDDEPARTAMENTO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDepartamentoXidPais($idPais){	
		$params = array($idPais);
		return parent::executeQuery(SQLDepartamento::CONSULTAR_DEPARTAMENTO_POR_IDPAIS, $params);
	}	
	
	function existeDepartamentoXidPais($idPais){
		$params = array($idPais);
		$tabla = parent::executeQuery(SQLDepartamento::CONSULTAR_DEPARTAMENTO_POR_IDPAIS, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDepartamentoXnomDepartamento($nomDepartamento){	
		$params = array("%$nomDepartamento%");
		return parent::executeQuery(SQLDepartamento::CONSULTAR_DEPARTAMENTO_POR_NOMDEPARTAMENTO, $params);
	}	
	
	function consultarDepartamentoXnomDepartamentoAprox($nomDepartamento){	
		$params = array("%$nomDepartamento%");
		return parent::executeQuery(SQLDepartamento::CONSULTAR_DEPARTAMENTO_POR_NOMDEPARTAMENTO_APROX, $params);
	}	
	
	function existeDepartamentoXnomDepartamento($nomDepartamento){
		$params = array($nomDepartamento);
		$tabla = parent::executeQuery(SQLDepartamento::CONSULTAR_DEPARTAMENTO_POR_NOMDEPARTAMENTO, $params);
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