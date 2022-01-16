<?php 
require_once('../../../config/config.php');
require_once(MOD.'Persona.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLPersona.php');

class Persona extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($IDPERSONA, $IDGENERO, $IDEDOCIVIL, $IDEDOREGISTRO) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($IDPERSONA, $IDGENERO, $IDEDOCIVIL, $IDEDOREGISTRO, $id_Persona);
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
	function compActualizarcambiarTabla1cambiarTabla2($IDPERSONA, $IDGENERO, $IDEDOCIVIL, $IDEDOREGISTRO) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($IDPERSONA, $IDGENERO, $IDEDOCIVIL, $IDEDOREGISTRO, $id_Persona);
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
	function agregarPersona($IDPERSONA, $IDGENERO, $IDEDOCIVIL, $IDEDOREGISTRO) {
$IDPERSONA = parent::prepareParam($IDPERSONA, Query::DATATYPE_INTEGER);
$IDGENERO = parent::prepareParam($IDGENERO, Query::DATATYPE_INTEGER);
$IDEDOCIVIL = parent::prepareParam($IDEDOCIVIL, Query::DATATYPE_INTEGER);
$IDEDOREGISTRO = parent::prepareParam($IDEDOREGISTRO, Query::DATATYPE_INTEGER);
		
		$params = array($IDPERSONA, $IDGENERO, $IDEDOCIVIL, $IDEDOREGISTRO);
		return parent::execute(SQLPersona::AGREGAR_PERSONA, $params);
	}

	function actualizarPersona($IDPERSONA, $IDGENERO, $IDEDOCIVIL, $IDEDOREGISTRO, $id_Persona){
		
$IDPERSONA = parent::prepareParam($IDPERSONA, Query::DATATYPE_INTEGER);
$IDGENERO = parent::prepareParam($IDGENERO, Query::DATATYPE_INTEGER);
$IDEDOCIVIL = parent::prepareParam($IDEDOCIVIL, Query::DATATYPE_INTEGER);
$IDEDOREGISTRO = parent::prepareParam($IDEDOREGISTRO, Query::DATATYPE_INTEGER);

		
		$params = array($IDPERSONA, $IDGENERO, $IDEDOCIVIL, $IDEDOREGISTRO, $id_Persona);
		return parent::execute(SQLPersona::ACTUALIZAR_PERSONA, $params);		
	}
	
	
	function consultarPersona(){	
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA);
	}	
	
	function eliminarPersona($id_Persona){
		$params = array($id_Persona);
		return parent::execute(SQLPersona::ELIMINAR_PERSONA, $params);		
	}
	
//------------------------------	
	function consultarPersonaXIDPERSONA($IDPERSONA){	
		$params = array($IDPERSONA);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDPERSONA, $params);
	}	
	
	function existePersonaXIDPERSONA($IDPERSONA){
		$params = array($IDPERSONA);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXIDGENERO($IDGENERO){	
		$params = array($IDGENERO);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDGENERO, $params);
	}	
	
	function existePersonaXIDGENERO($IDGENERO){
		$params = array($IDGENERO);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDGENERO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXIDEDOCIVIL($IDEDOCIVIL){	
		$params = array($IDEDOCIVIL);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDEDOCIVIL, $params);
	}	
	
	function existePersonaXIDEDOCIVIL($IDEDOCIVIL){
		$params = array($IDEDOCIVIL);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDEDOCIVIL, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPersonaXIDEDOREGISTRO($IDEDOREGISTRO){	
		$params = array($IDEDOREGISTRO);
		return parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDEDOREGISTRO, $params);
	}	
	
	function existePersonaXIDEDOREGISTRO($IDEDOREGISTRO){
		$params = array($IDEDOREGISTRO);
		$tabla = parent::executeQuery(SQLPersona::CONSULTAR_PERSONA_POR_IDEDOREGISTRO, $params);
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