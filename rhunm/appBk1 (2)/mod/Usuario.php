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
	function compAgregarcambiarTabla1cambiarTabla2($idUsuario, $idRol, $idPersona, $idEdoRegistro, $cuentaUsuario, $contrasenaUsuario, $fecCreacion, $pregSecreta, $respPregSecreta) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idUsuario, $idRol, $idPersona, $idEdoRegistro, $cuentaUsuario, $contrasenaUsuario, $fecCreacion, $pregSecreta, $respPregSecreta, $id_Usuario);
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
	function compActualizarcambiarTabla1cambiarTabla2($idUsuario, $idRol, $idPersona, $idEdoRegistro, $cuentaUsuario, $contrasenaUsuario, $fecCreacion, $pregSecreta, $respPregSecreta) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idUsuario, $idRol, $idPersona, $idEdoRegistro, $cuentaUsuario, $contrasenaUsuario, $fecCreacion, $pregSecreta, $respPregSecreta, $id_Usuario);
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
	function agregarUsuario($idUsuario, $idRol, $idPersona, $idEdoRegistro, $cuentaUsuario, $contrasenaUsuario, $fecCreacion, $pregSecreta, $respPregSecreta) {
$idUsuario = parent::prepareParam($idUsuario, Query::DATATYPE_INTEGER);
$idRol = parent::prepareParam($idRol, Query::DATATYPE_INTEGER);
$idPersona = parent::prepareParam($idPersona, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$cuentaUsuario = parent::prepareParam($cuentaUsuario, Query::DATATYPE_STRING, 0);
$contrasenaUsuario = parent::prepareParam($contrasenaUsuario, Query::DATATYPE_STRING, 0);
$pregSecreta = parent::prepareParam($pregSecreta, Query::DATATYPE_STRING, 0);
$respPregSecreta = parent::prepareParam($respPregSecreta, Query::DATATYPE_STRING, 0);
		
		$params = array($idUsuario, $idRol, $idPersona, $idEdoRegistro, $cuentaUsuario, $contrasenaUsuario, $fecCreacion, $pregSecreta, $respPregSecreta);
		return parent::execute(SQLUsuario::AGREGAR_USUARIO, $params);
	}

	function actualizarUsuario($idUsuario, $idRol, $idPersona, $idEdoRegistro, $cuentaUsuario, $contrasenaUsuario, $fecCreacion, $pregSecreta, $respPregSecreta, $id_Usuario){
		
$idUsuario = parent::prepareParam($idUsuario, Query::DATATYPE_INTEGER);
$idRol = parent::prepareParam($idRol, Query::DATATYPE_INTEGER);
$idPersona = parent::prepareParam($idPersona, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$cuentaUsuario = parent::prepareParam($cuentaUsuario, Query::DATATYPE_STRING, 0);
$contrasenaUsuario = parent::prepareParam($contrasenaUsuario, Query::DATATYPE_STRING, 0);
$pregSecreta = parent::prepareParam($pregSecreta, Query::DATATYPE_STRING, 0);
$respPregSecreta = parent::prepareParam($respPregSecreta, Query::DATATYPE_STRING, 0);

		
		$params = array($idUsuario, $idRol, $idPersona, $idEdoRegistro, $cuentaUsuario, $contrasenaUsuario, $fecCreacion, $pregSecreta, $respPregSecreta, $id_Usuario);
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
	function consultarUsuarioXidUsuario($idUsuario){	
		$params = array($idUsuario);
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_IDUSUARIO, $params);
	}	
	
	function existeUsuarioXidUsuario($idUsuario){
		$params = array($idUsuario);
		$tabla = parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_IDUSUARIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarUsuarioXidRol($idRol){	
		$params = array($idRol);
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_IDROL, $params);
	}	
	
	function existeUsuarioXidRol($idRol){
		$params = array($idRol);
		$tabla = parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_IDROL, $params);
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

	function consultarUsuarioXidEdoRegistro($idEdoRegistro){	
		$params = array($idEdoRegistro);
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_IDEDOREGISTRO, $params);
	}	
	
	function existeUsuarioXidEdoRegistro($idEdoRegistro){
		$params = array($idEdoRegistro);
		$tabla = parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_IDEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarUsuarioXcuentaUsuario($cuentaUsuario){	
		$params = array("%$cuentaUsuario%");
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_CUENTAUSUARIO, $params);
	}	
	
	function consultarUsuarioXcuentaUsuarioAprox($cuentaUsuario){	
		$params = array("%$cuentaUsuario%");
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_CUENTAUSUARIO_APROX, $params);
	}	
	
	function existeUsuarioXcuentaUsuario($cuentaUsuario){
		$params = array($cuentaUsuario);
		$tabla = parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_CUENTAUSUARIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarUsuarioXcontrasenaUsuario($contrasenaUsuario){	
		$params = array("%$contrasenaUsuario%");
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_CONTRASENAUSUARIO, $params);
	}	
	
	function consultarUsuarioXcontrasenaUsuarioAprox($contrasenaUsuario){	
		$params = array("%$contrasenaUsuario%");
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_CONTRASENAUSUARIO_APROX, $params);
	}	
	
	function existeUsuarioXcontrasenaUsuario($contrasenaUsuario){
		$params = array($contrasenaUsuario);
		$tabla = parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_CONTRASENAUSUARIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarUsuarioXfecCreacion($fecCreacion){	
		$params = array($fecCreacion);
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_FECCREACION, $params);
	}	
	
	function existeUsuarioXfecCreacion($fecCreacion){
		$params = array($fecCreacion);
		$tabla = parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_FECCREACION, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarUsuarioXpregSecreta($pregSecreta){	
		$params = array("%$pregSecreta%");
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_PREGSECRETA, $params);
	}	
	
	function consultarUsuarioXpregSecretaAprox($pregSecreta){	
		$params = array("%$pregSecreta%");
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_PREGSECRETA_APROX, $params);
	}	
	
	function existeUsuarioXpregSecreta($pregSecreta){
		$params = array($pregSecreta);
		$tabla = parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_PREGSECRETA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarUsuarioXrespPregSecreta($respPregSecreta){	
		$params = array("%$respPregSecreta%");
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_RESPPREGSECRETA, $params);
	}	
	
	function consultarUsuarioXrespPregSecretaAprox($respPregSecreta){	
		$params = array("%$respPregSecreta%");
		return parent::executeQuery(SQLUsuario::CONSULTAR_USUARIO_POR_RESPPREGSECRETA_APROX, $params);
	}	
	
	function existeUsuarioXrespPregSecreta($respPregSecreta){
		$params = array($respPregSecreta);
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