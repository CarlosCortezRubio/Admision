<?php 
require_once('../../../config/config.php');
require_once(MOD.'Rol.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLRol.php');

class Rol extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($IDROL, $Edo_idEdoRegistro, $NOMROL, $DESCROL) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($IDROL, $Edo_idEdoRegistro, $NOMROL, $DESCROL, $id_Rol);
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
	function compActualizarcambiarTabla1cambiarTabla2($IDROL, $Edo_idEdoRegistro, $NOMROL, $DESCROL) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($IDROL, $Edo_idEdoRegistro, $NOMROL, $DESCROL, $id_Rol);
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
	function agregarRol($IDROL, $Edo_idEdoRegistro, $NOMROL, $DESCROL) {
$IDROL = parent::prepareParam($IDROL, Query::DATATYPE_INTEGER);
$Edo_idEdoRegistro = parent::prepareParam($Edo_idEdoRegistro, Query::DATATYPE_INTEGER);
$NOMROL = parent::prepareParam($NOMROL, Query::DATATYPE_STRING, 0);
$DESCROL = parent::prepareParam($DESCROL, Query::DATATYPE_STRING, 0);
		
		$params = array($IDROL, $Edo_idEdoRegistro, $NOMROL, $DESCROL);
		return parent::execute(SQLRol::AGREGAR_ROL, $params);
	}

	function actualizarRol($IDROL, $Edo_idEdoRegistro, $NOMROL, $DESCROL, $id_Rol){
		
$IDROL = parent::prepareParam($IDROL, Query::DATATYPE_INTEGER);
$Edo_idEdoRegistro = parent::prepareParam($Edo_idEdoRegistro, Query::DATATYPE_INTEGER);
$NOMROL = parent::prepareParam($NOMROL, Query::DATATYPE_STRING, 0);
$DESCROL = parent::prepareParam($DESCROL, Query::DATATYPE_STRING, 0);

		
		$params = array($IDROL, $Edo_idEdoRegistro, $NOMROL, $DESCROL, $id_Rol);
		return parent::execute(SQLRol::ACTUALIZAR_ROL, $params);		
	}
	
	
	function consultarRol(){	
		return parent::executeQuery(SQLRol::CONSULTAR_ROL);
	}	
	
	function eliminarRol($id_Rol){
		$params = array($id_Rol);
		return parent::execute(SQLRol::ELIMINAR_ROL, $params);		
	}
	
//------------------------------	
	function consultarRolXIDROL($IDROL){	
		$params = array($IDROL);
		return parent::executeQuery(SQLRol::CONSULTAR_ROL_POR_IDROL, $params);
	}	
	
	function existeRolXIDROL($IDROL){
		$params = array($IDROL);
		$tabla = parent::executeQuery(SQLRol::CONSULTAR_ROL_POR_IDROL, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarRolXEdo_idEdoRegistro($Edo_idEdoRegistro){	
		$params = array($Edo_idEdoRegistro);
		return parent::executeQuery(SQLRol::CONSULTAR_ROL_POR_EDO_IDEDOREGISTRO, $params);
	}	
	
	function existeRolXEdo_idEdoRegistro($Edo_idEdoRegistro){
		$params = array($Edo_idEdoRegistro);
		$tabla = parent::executeQuery(SQLRol::CONSULTAR_ROL_POR_EDO_IDEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarRolXNOMROL($NOMROL){	
		$params = array("%$NOMROL%");
		return parent::executeQuery(SQLRol::CONSULTAR_ROL_POR_NOMROL, $params);
	}	
	
	function consultarRolXNOMROLAprox($NOMROL){	
		$params = array("%$NOMROL%");
		return parent::executeQuery(SQLRol::CONSULTAR_ROL_POR_NOMROL_APROX, $params);
	}	
	
	function existeRolXNOMROL($NOMROL){
		$params = array($NOMROL);
		$tabla = parent::executeQuery(SQLRol::CONSULTAR_ROL_POR_NOMROL, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarRolXDESCROL($DESCROL){	
		$params = array("%$DESCROL%");
		return parent::executeQuery(SQLRol::CONSULTAR_ROL_POR_DESCROL, $params);
	}	
	
	function consultarRolXDESCROLAprox($DESCROL){	
		$params = array("%$DESCROL%");
		return parent::executeQuery(SQLRol::CONSULTAR_ROL_POR_DESCROL_APROX, $params);
	}	
	
	function existeRolXDESCROL($DESCROL){
		$params = array($DESCROL);
		$tabla = parent::executeQuery(SQLRol::CONSULTAR_ROL_POR_DESCROL, $params);
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