<?php 
require_once('../../../config/config.php');
require_once(MOD.'Usuario.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLUsuario.php');

class Usuario extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($IDUSUARIO, $IDROL, $Edo_idEdoRegistro, $idPersona, $CUENTAUSUARIO, $CONTRASENAUSUARIO, $FECCREACION, $PREGSECRETA, $RESPPREGSECRETA) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($IDUSUARIO, $IDROL, $Edo_idEdoRegistro, $idPersona, $CUENTAUSUARIO, $CONTRASENAUSUARIO, $FECCREACION, $PREGSECRETA, $RESPPREGSECRETA, $id_Usuario);
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
	function compActualizarcambiarTabla1cambiarTabla2($IDUSUARIO, $IDROL, $Edo_idEdoRegistro, $idPersona, $CUENTAUSUARIO, $CONTRASENAUSUARIO, $FECCREACION, $PREGSECRETA, $RESPPREGSECRETA) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($IDUSUARIO, $IDROL, $Edo_idEdoRegistro, $idPersona, $CUENTAUSUARIO, $CONTRASENAUSUARIO, $FECCREACION, $PREGSECRETA, $RESPPREGSECRETA, $id_Usuario);
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
	function agregarUsuario($IDUSUARIO, $IDROL, $Edo_idEdoRegistro, $idPersona, $CUENTAUSUARIO, $CONTRASENAUSUARIO, $FECCREACION, $PREGSECRETA, $RESPPREGSECRETA) {
$IDUSUARIO = parent::prepareParam($IDUSUARIO, Query::DATATYPE_INTEGER);
$IDROL = parent::prepareParam($IDROL, Query::DATATYPE_INTEGER);
$Edo_idEdoRegistro = parent::prepareParam($Edo_idEdoRegistro, Query::DATATYPE_INTEGER);
$idPersona = parent::prepareParam($idPersona, Query::DATATYPE_INTEGER);
$CUENTAUSUARIO = parent::prepareParam($CUENTAUSUARIO, Query::DATATYPE_STRING, 0);
$CONTRASENAUSUARIO = parent::prepareParam($CONTRASENAUSUARIO, Query::DATATYPE_STRING, 0);
$PREGSECRETA = parent::prepareParam($PREGSECRETA, Query::DATATYPE_STRING, 0);
$RESPPREGSECRETA = parent::prepareParam($RESPPREGSECRETA, Query::DATATYPE_STRING, 0);
		
		$params = array($IDUSUARIO, $IDROL, $Edo_idEdoRegistro, $idPersona, $CUENTAUSUARIO, $CONTRASENAUSUARIO, $FECCREACION, $PREGSECRETA, $RESPPREGSECRETA);
		return parent::execute(SQLUsuario::AGREGAR_USUARIO, $params);
	}

	function actualizarUsuario($IDUSUARIO, $IDROL, $Edo_idEdoRegistro, $idPersona, $CUENTAUSUARIO, $CONTRASENAUSUARIO, $FECCREACION, $PREGSECRETA, $RESPPREGSECRETA, $id_Usuario){
		
$IDUSUARIO = parent::prepareParam($IDUSUARIO, Query::DATATYPE_INTEGER);
$IDROL = parent::prepareParam($IDROL, Query::DATATYPE_INTEGER);
$Edo_idEdoRegistro = parent::prepareParam($Edo_idEdoRegistro, Query::DATATYPE_INTEGER);
$idPersona = parent::prepareParam($idPersona, Query::DATATYPE_INTEGER);
$CUENTAUSUARIO = parent::prepareParam($CUENTAUSUARIO, Query::DATATYPE_STRING, 0);
$CONTRASENAUSUARIO = parent::prepareParam($CONTRASENAUSUARIO, Query::DATATYPE_STRING, 0);
$PREGSECRETA = parent::prepareParam($PREGSECRETA, Query::DATATYPE_STRING, 0);
$RESPPREGSECRETA = parent::prepareParam($RESPPREGSECRETA, Query::DATATYPE_STRING, 0);

		
		$params = array($IDUSUARIO, $IDROL, $Edo_idEdoRegistro, $idPersona, $CUENTAUSUARIO, $CONTRASENAUSUARIO, $FECCREACION, $PREGSECRETA, $RESPPREGSECRETA, $id_Usuario);
		return parent::execute(SQLUsuario::ACTUALIZAR_USUARIO, $params);		
	}
	
	
	function consultarUsuario(){	
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO);
	}	
	
	function eliminarUsuario($id_Usuario){
		$params = array($id_Usuario);
		return parent::execute(SQLUsuario::ELIMINAR_USUARIO, $params);		
	}
	
//------------------------------	
	function consultarUsuarioXIDUSUARIO($IDUSUARIO){	
		$params = array($IDUSUARIO);
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_IDUSUARIO, $params);
	}	
	
	function existeUsuarioXIDUSUARIO($IDUSUARIO){
		$params = array($IDUSUARIO);
		$tabla = parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_IDUSUARIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarUsuarioXIDROL($IDROL){	
		$params = array($IDROL);
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_IDROL, $params);
	}	
	
	function existeUsuarioXIDROL($IDROL){
		$params = array($IDROL);
		$tabla = parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_IDROL, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarUsuarioXEdo_idEdoRegistro($Edo_idEdoRegistro){	
		$params = array($Edo_idEdoRegistro);
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_EDO_IDEDOREGISTRO, $params);
	}	
	
	function existeUsuarioXEdo_idEdoRegistro($Edo_idEdoRegistro){
		$params = array($Edo_idEdoRegistro);
		$tabla = parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_EDO_IDEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarUsuarioXidPersona($idPersona){	
		$params = array($idPersona);
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_IDPERSONA, $params);
	}	
	
	function existeUsuarioXidPersona($idPersona){
		$params = array($idPersona);
		$tabla = parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_IDPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarUsuarioXCUENTAUSUARIO($CUENTAUSUARIO){	
		$params = array("%$CUENTAUSUARIO%");
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_CUENTAUSUARIO, $params);
	}	
	
	function consultarUsuarioXCUENTAUSUARIOAprox($CUENTAUSUARIO){	
		$params = array("%$CUENTAUSUARIO%");
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_CUENTAUSUARIO_APROX, $params);
	}	
	
	function existeUsuarioXCUENTAUSUARIO($CUENTAUSUARIO){
		$params = array($CUENTAUSUARIO);
		$tabla = parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_CUENTAUSUARIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarUsuarioXCONTRASENAUSUARIO($CONTRASENAUSUARIO){	
		$params = array("%$CONTRASENAUSUARIO%");
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_CONTRASENAUSUARIO, $params);
	}	
	
	function consultarUsuarioXCONTRASENAUSUARIOAprox($CONTRASENAUSUARIO){	
		$params = array("%$CONTRASENAUSUARIO%");
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_CONTRASENAUSUARIO_APROX, $params);
	}	
	
	function existeUsuarioXCONTRASENAUSUARIO($CONTRASENAUSUARIO){
		$params = array($CONTRASENAUSUARIO);
		$tabla = parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_CONTRASENAUSUARIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarUsuarioXFECCREACION($FECCREACION){	
		$params = array($FECCREACION);
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_FECCREACION, $params);
	}	
	
	function existeUsuarioXFECCREACION($FECCREACION){
		$params = array($FECCREACION);
		$tabla = parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_FECCREACION, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarUsuarioXPREGSECRETA($PREGSECRETA){	
		$params = array("%$PREGSECRETA%");
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_PREGSECRETA, $params);
	}	
	
	function consultarUsuarioXPREGSECRETAAprox($PREGSECRETA){	
		$params = array("%$PREGSECRETA%");
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_PREGSECRETA_APROX, $params);
	}	
	
	function existeUsuarioXPREGSECRETA($PREGSECRETA){
		$params = array($PREGSECRETA);
		$tabla = parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_PREGSECRETA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarUsuarioXRESPPREGSECRETA($RESPPREGSECRETA){	
		$params = array("%$RESPPREGSECRETA%");
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_RESPPREGSECRETA, $params);
	}	
	
	function consultarUsuarioXRESPPREGSECRETAAprox($RESPPREGSECRETA){	
		$params = array("%$RESPPREGSECRETA%");
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_RESPPREGSECRETA_APROX, $params);
	}	
	
	function existeUsuarioXRESPPREGSECRETA($RESPPREGSECRETA){
		$params = array($RESPPREGSECRETA);
		$tabla = parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_RESPPREGSECRETA, $params);
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