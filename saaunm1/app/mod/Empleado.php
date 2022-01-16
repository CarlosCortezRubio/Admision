<?php 
require_once('../../../config/config.php');
require_once(MOD.'Empleado.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLEmpleado.php');

class Empleado extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idEmpleado, $idPersona) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idEmpleado, $idPersona, $id_Empleado);
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
	function compActualizarcambiarTabla1cambiarTabla2($idEmpleado, $idPersona) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idEmpleado, $idPersona, $id_Empleado);
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
	function agregarEmpleado($idEmpleado, $idPersona) {
$idEmpleado = parent::prepareParam($idEmpleado, Query::DATATYPE_INTEGER);
$idPersona = parent::prepareParam($idPersona, Query::DATATYPE_INTEGER);
		
		$params = array($idEmpleado, $idPersona);
		return parent::execute(SQLEmpleado::AGREGAR_EMPLEADO, $params);
	}

	function actualizarEmpleado($idEmpleado, $idPersona, $id_Empleado){
		
$idEmpleado = parent::prepareParam($idEmpleado, Query::DATATYPE_INTEGER);
$idPersona = parent::prepareParam($idPersona, Query::DATATYPE_INTEGER);

		
		$params = array($idEmpleado, $idPersona, $id_Empleado);
		return parent::execute(SQLEmpleado::ACTUALIZAR_EMPLEADO, $params);		
	}
	
	
	function consultarEmpleado(){	
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO);
	}	
	
	function eliminarEmpleado($id_Empleado){
		$params = array($id_Empleado);
		return parent::execute(SQLEmpleado::ELIMINAR_EMPLEADO, $params);		
	}
	
//------------------------------	
	function consultarEmpleadoXidEmpleado($idEmpleado){	
		$params = array($idEmpleado);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDEMPLEADO, $params);
	}	
	
	function existeEmpleadoXidEmpleado($idEmpleado){
		$params = array($idEmpleado);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarEmpleadoXidPersona($idPersona){	
		$params = array($idPersona);
		return parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDPERSONA, $params);
	}	
	
	function existeEmpleadoXidPersona($idPersona){
		$params = array($idPersona);
		$tabla = parent::executeQuery(SQLEmpleado::CONSULTAR_EMPLEADO_POR_IDPERSONA, $params);
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