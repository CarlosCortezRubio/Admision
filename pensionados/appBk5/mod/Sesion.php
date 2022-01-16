<?php
//require_once ('../../../config/config.php');
//require_once (SENT . 'Query.php');
//require_once (SENT . 'SQLUsuario.php');
//class Usuario extends Query {
//	function __construct() {
//		parent::abrirConexion ();
//	}
require_once ('../../../config/config.php');
//require_once (SENT . 'QueryApi.php');
require_once (SENT . 'Query.php');
require_once (SENT . 'SQLSesion.php');
//class Sesion extends QueryApi {
class Sesion extends Query {
	function __construct() {
		parent::abrirConexion ();
	}
	/**
	 * Permite consultar un usuario segun el
	 * login, la clave y el estatus
	 *
	 * @param string Login
	 * @param string Clave
	 * @param string Estatus
	 * @return array Arreglo
	 */
	function consultarUsuarioXloginYclaveYestatus($login, $clave, $estatus) {
		//		$params = "email=$login&password=$clave";
		//		echo "aca";
		//		$urlAPI = "login";
		//		$response = parent::executeQuerySesion ( $urlAPI, $params );
		//		if ($err) {
		////			echo "cURL Error #:" . $err;
		//			return $err;
		//		} else {
		//			$response = json_encode ( $response );
		//			$response = json_decode ( $response );
		//		return $response;
		//		var_dump ( $response );
		//		die ();
		//		$myJSON = json_decode ( $cadAux );
		//		echo $myJSON;
		//		}
		$params = array ($login, $clave, $estatus );
		$res = parent::executeQuery ( SQLSesion::CONSULTAR_USUARIO_POR_LOGIN_CLAVE_Y_ESTATUS, $params );
		if ($res==NULL) {
		    return null;
		}else{
		    return $res [0];
		}
	}
	/**
	 * Permite consultar un usuario segun el
	 * login y el password
	 *
	 * @param string Login
	 * @param string Password
	 * @return array Arreglo
	 */
	function consultarUsuarioXloginYpassword($login, $password) {
		//$password = sha1($password);
		$params = array ($login, $password );
		return parent::executeQuery ( SQLSesion::CONSULTAR_USUARIO_POR_LOGIN_Y_PASSWORD, $params );
	}
	/**
	 * Permite consultar un usuario segun el
	 * login, el password y la autorizacion (activo/inactivo)
	 *
	 * @param string Login
	 * @param string Password
	 * @param string Autorizacion
	 * @return array Arreglo
	 */
	function consultarUsuarioXloginYpasswordYautorizacion($login, $password, $autorizado) {
		$query = new Query ();
		$password = sha1 ( $password );
		$params = array ($login, $password, $autorizado );
		return $query->executeQuery ( SQLSesion::CONSULTAR_USUARIO_POR_LOGIN_PASSWORD_Y_AUTORIZADO, $params );
	}
	/**
	 * Permite al usuario, actualizar su password
	 *
	 * @param string $password
	 * @param integer $usuarioid
	 * @return integer Filas afectadas
	 */
	function actualizarclaveUsuario($password, $idusuariocertificado) {
		$idusuariocertificado = parent::prepareParam ( $idusuariocertificado, Query::DATATYPE_INTEGER );
		//$password = sha1($password); // Se esta encriptando en el js
		$params = array ($password, $idusuariocertificado );
		return parent::execute ( SQLSesion::ACTUALIZAR_PASSWORD_USUARIO, $params );
	}
	function consultarUsuarioXcedulayCorreo($cedula, $correoelectronico) {
		$cedula = parent::prepareParam ( $cedula, Query::DATATYPE_STRING, 10 );
		$correoelectronico = parent::prepareParam ( $correoelectronico, Query::DATATYPE_STRING, 60 );
		$params = array ($cedula, $correoelectronico );
		return parent::executeQuery ( SQLSesion::CONSULTAR_USUARIO_POR_CEDULA_Y_CORREO, $params );
	}
	function reiniciarClave($cedula, $correoelectronico) {
		$tabla = $this->consultarUsuarioXcedulayCorreo ( $cedula, $correoelectronico );
		//var_dump($tabla);
		if (count ( $tabla ) > 0) {
			$password = generarClaveAleatoria ();
			$passwordEnc = sha1 ( $password );
			$band = $this->actualizarclaveUsuario ( $passwordEnc, $tabla [0] ['IDUSUARIOCERTIFICADO'] );
			//$band = 1;
			if ($band) {
				return 0;
			} else {
				return 1;
			}
		}
		return 2;
	}
}
//		$login = "josue@gmail.com";
//		$clave = "1234562";
//$cad = new Sesion ();
//$cad->consultarUsuarioXloginYclaveYestatus ( $login, $clave, 1 );
?>