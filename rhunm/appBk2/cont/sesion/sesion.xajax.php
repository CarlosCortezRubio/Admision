<?php
require_once ('../../../config/config.php');
require_once (LIB . 'xajax05/xajax_core/xajax.inc.php');
require_once (LIB . 'securimage/securimage.php');
require_once (MOD . 'Sesion.php');
require_once (MOD . 'Usuario.php');
//require_once (MOD . 'DatosTrabajador.php');
//$xajax->setFlag("debug", true);
$xajax = new xajax ();
$xajax->configure ( 'debug', true );
$xajax->setCharEncoding ( CHARSET );
$xajax->registerFunction ( "iniciarSesion" );
//$xajax->registerFunction("modificarPassword");
$xajax->registerFunction ( "solicitarClave" );
$xajax->registerFunction ( "validarConstancia" );
$xajax->registerFunction ( "registrarNuevoUsuario" );
$xajax->registerFunction ( "consultarCorreoUla" );
$xajax->registerFunction ( "consultarNombre" );
$xajax->processRequest ();
function iniciarSesion($login, $clave, $captchacode) {
	global $objResponse;
	$objResponse = new xajaxResponse ();
	//	$objResponse->alert( "formData: " . print_r( $formData, true ) );	
	$tablaUsuario = '';
	//	$pagInicio = URLSIST . 'base/principal';
	//	$objResponse->script ( "window.location = '$pagInicio'" );
	//	if (DESARROLLO) {
	//		$_SESSION ['usuarioid'] = 1;
	//		$_SESSION [NOMSIST . 'Id'] = 1;
	//		$_SESSION ['nombre'] = 'Usuario Test';
	//		$_SESSION ['rolId'] = 1;
	//		$menu = 'menuadmin';
	//		$_SESSION ['menuUsu'] = $menu;
	//		$pagInicio = URLSIST . 'base/principal';
	//		$objResponse->script ( "window.location = '$pagInicio'" );
	//		return $objResponse;
	//	}
	$img = new securimage ();
	$valido_captcha = $img->check ( $captchacode );
	$valido_captcha = true;
	if ($valido_captcha) {
		$bandCaptcha = true;
		$msg1 = '';
	} else {
		$bandCaptcha = false;
		$msg1 = '(Valor del código inválido)';
	}
	$rs = new Sesion ();
	$autorizado = 1;
	$clave = str_replace ( '"', '', $clave );
	//	$t	ablaUsuario = $rs->consultarUsuarioXloginYclaveYestatus ( $login, $clave, $autorizado );
	//	$tablaUsuario = $rs->consultarUsuarioXloginYclave ( $login, $clave );
	$tablaUsuario = $rs->consultarUsuarioXloginYclaveYestatus ( $login, $clave, $autorizado );
	//	$rs->cerrarConexion ();
	//			dump($tablaUsuario);
// 				dump($tablaUsuario);die();
	$bandCaptcha = true;
//	$estatus = $tablaUsuario ['edoUsuario'];
// 	$estatus = $tablaUsuario ['idEdoRegistro'];
//	if (count ( $tablaUsuario ) > 0 and $bandCaptcha) {
	if ( $tablaUsuario and $bandCaptcha) {
	    $estatus = $tablaUsuario ['idEdoRegistro'];
		//	if ($estatus == 200 and $bandCaptcha) {
		//		echo "entre al if";
		//				dump($tablaUsuario);die();
		$_SESSION [NOMSIST . 'Id'] = 1;
		//		echo 'antes de -'.$_SESSION ['usuarioid'];
		$_SESSION ['usuarioid'] = $tablaUsuario ['idUsuario'];
		//		echo 'despues de -'.$_SESSION ['usuarioid'];
// 		$_SESSION ['login'] = $tablaUsuario ['correoPersona'];
		$_SESSION ['login'] = $tablaUsuario ['cuentaUsuario'];
		$_SESSION ['nombre'] = utf8_encode ( $tablaUsuario ['nomPersona1'] .' '. $tablaUsuario ['apePersona1']  );
		//		$_SESSION ['cedula'] = $tablaUsuario ['user'] ['dni_persona'];
		//		$_SESSION ['token'] = $tablaUsuario ['user'] ['token'];
						$_SESSION ['ID_PERSONA'] = $tablaUsuario ['idPersona'];
		//				$_SESSION ['ID_CLINICA'] = $tablaUsuario ['user'] ['id_clinica'];
		//		$_SESSION ['NOM_CLINICA'] = $tablaUsuario ['user'] ['nom_clinica'];
		//		$_SESSION ['COD_IPRESS_CLINICA'] = $tablaUsuario ['user'] ['cod_ipress_clinica'];
		//		$_SESSION ['LOGO_CLINICA'] = 'bannerImp_'.$tablaUsuario ['user'] ['logo_clinica'].'.png';
		//		$_SESSION ['LOGO_CLINICA_RECETA'] = 'bannerImp_'.$tablaUsuario ['user'] ['logo_clinica'].'_receta.png';
		//		$_SESSION ['SELLO_CLINICA'] = 'sello_'.$tablaUsuario ['user'] ['logo_clinica'];
		$_SESSION ['rolId'] = $tablaUsuario ['idRol'];
		//		$_SESSION ['rolId'] = 1;
		//		$_SESSION ['profile'] = $tablaUsuario ['user'] ['profile'];
		//		$_SESSION ['nombre'] = utf8_encode ( $tablaUsuario ['user'] ['full_name'] );
		//		$_SESSION ['nombre'] = utf8_encode ( 
		//			$tablaUsuario ['user'] ['nom_persona'] . ' ' . 
		//			$tablaUsuario ['user'] ['nom_persona2'] . ' ' . 
		//			$tablaUsuario ['user'] ['ape_persona'] . ' ' .
		//			$tablaUsuario ['user'] ['ape_persona2']
		//		);
		$menu = 'menuadmin';
		$_SESSION ['menuUsu'] = $menu;
		$_SESSION ['perfil'] = "---";
		$pagInicio = URLSIST . 'base/principal';
		if ($_SESSION ['rolId'] == 1) {
			$menu = 'menuadmin';
			$_SESSION ['menuUsu'] = $menu;
			$_SESSION ['perfil'] = "---";
			$pagInicio = URLSIST . 'base/principal';
		} else {
			switch ($_SESSION ['rolId']) {
				case 2 :
					$menu = 'menuusugeneral';
					break;
				case 3 :
					$menu = 'menuanalista';
					break;
				case 4 :
					$menu = 'secretaria';
					break;
				default :
					$menu = 'menuusugeneral';
			}
			$_SESSION ['menuUsu'] = $menu;
			$_SESSION ['perfil'] = "---";
			$pagInicio = URLSIST . 'base/principal';
		}
		//		echo $pagInicio; die();
		//		echo '-'.$_SESSION ['usuarioid'].'-';die();
		$objResponse->script ( "window.location = '$pagInicio'" );
	} else {
		$msg = "Datos no válidos $msg1";
		$objResponse->script ( "mostrarMensajeError('$msg')" );
		$objResponse->script ( "reloadCaptcha()" );
		
// 		$_SESSION ['menuUsu'] = 'menuusugeneral';
// 		$pagInicio = URLSIST . 'base/principal';
// 		$objResponse->script ( "window.location = '$pagInicio'" );
				$objResponse->script ( "document.getElementById('clave').value = '';" );		
	}
	return $objResponse;
}
//function modificarPassword($id, $clave) {	
//	global $objResponse;
//	$objResponse=new xajaxResponse();
//	$clave = str_replace ( '"', '', $clave );
//	$rs = new Sesion ();
//	$tabla = $rs->actualizarclaveUsuario ( $clave, $id );
//	$rs->cerrarConexion ();
//	$tabla = 1;
//	if ($tabla) {
//		$objResponse->script ( "cerrarvntPequena();" );
//		$msg = 'Clave actualizada';
//	} else {
//		$msg = 'Error al intentar modificar la clave, por favor intentelo de nuevo';
//	}
//	$objResponse->call ( "ventanaAlerta('$msg','Alerta')" );
//	return $objResponse;
//}
function solicitarClave($cedula, $correoElectronico) {
	global $objResponse;
	$objResponse = new xajaxResponse ();
	$rs = new Sesion ();
	$tabla = $rs->reiniciarClave ( $cedula, $correoElectronico );
	$rs->cerrarConexion ();
	switch ($tabla) {
		case 0 :
			$msg = 'La nueva clave fue enviada a su correo electrónico';
			break;
		case 1 :
			$msg = 'Error al Actualizar, si el error persiste por favor contactar al administrador';
			break;
		case 2 :
			$msg = 'Usuario no encontrado, por favor verifique la Cédula y el Correo Electrónico';
			break;
		case 3 :
			break;
	}
	$objResponse->call ( "ventanaAlerta('$msg','Alerta')" );
	$objResponse->script ( "document.getElementById('divLogin').className = 'visible';" );
	$objResponse->script ( "document.getElementById('divRecuperar').className = 'invisible';" );
	return $objResponse;
}
function validarConstancia($id, $clave) {
	global $objResponse;
	$objResponse = new xajaxResponse ();
	$clave = str_replace ( '"', '', $clave );
	$rs = new Sesion ();
	$tabla = $rs->actualizarclaveUsuario ( $clave, $id );
	$rs->cerrarConexion ();
	$tabla = 1;
	if ($tabla) {
		$objResponse->script ( "cerrarvntPequena();" );
		$msg = 'Clave actualizada';
	} else {
		$msg = 'Error al intentar modificar la clave, por favor intentelo de nuevo';
	}
	$objResponse->call ( "ventanaAlerta('$msg','Alerta')" );
	return $objResponse;
}
function validarUsuario($cedula, $fechaIngreso) {
}
//function registrarNuevoUsuario($cedula,$numCtaNomina,$correoelectronico,$correoelectronicoalt,$contrasena) {
function registrarNuevoUsuario($cedula, $numCtaNomina, $correoelectronico, $correoelectronicoalt, $contrasena, $pregsecreta, $resppreguntasecreta) {
	global $objResponse;
	$objResponse = new xajaxResponse ();
	$rs = new DatosTrabajador ();
	$tabla = $rs->consultarDatosTrabajadorXcedula ( $cedula );
	$rs->cerrarConexion ();
	//	$cedula = $tabla [0] ['CED_PERSONA'];
	//	$rif = $tabla [0] ['rif_personal'];
	$nombre = $tabla [0] ['NOM_PERSONA'];
	//	$denominacion = $tabla [0] ['denominacion'];
	//	$fechaIngreso = european2iso ( $fechaIngreso );
	//	$cuenta = $correoelectronico;
	$ced_persona = $cedula;
	$nom_persona = $nombre;
	$ape_persona = '';
	$telefono_persona = '';
	$movil_persona = '';
	$correo_persona = '';
	$correo_alt_persona = $correoelectronicoalt;
	$id_rol = 2;
	$cuenta = $cedula;
	$contrasena = str_replace ( '"', '', $contrasena );
	$fechacreacion = date ( 'Y-m-d' );
	$estadousuario = 1;
	$preguntasecreta = $pregsecreta;
	$respuestapreguntasecreta = $resppreguntasecreta;
	//	$objResponse->call ( "ventanaAlerta('($cedula, $fechaIngreso, $correoelectronico, $contrasena)','Alerta')" );
	$objResponse->call ( "ventanaAlerta('($cedula, $numCtaNomina, $correoelectronico, $contrasena)','Alerta')" );
	$rs = new Usuario ();
	//	if (count ( $rs->consultarUsuarioXcedulaYfechaIngreso ( $cedula, $fechaIngreso ) )) {
	if (count ( $rs->consultarUsuarioXcedulaYnroCuenta ( $cedula, $numCtaNomina ) )) {
		if (! $rs->existeUsuarioXcedula ( $cedula )) {
			$rs1 = new DatosTrabajador ();
			$tabla = $rs1->compAgregarUsuario ( $ced_persona, $nom_persona, $ape_persona, $telefono_persona, $movil_persona, $correo_persona, $correo_alt_persona, $id_rol, $cuenta, $contrasena, $fechacreacion, $estadousuario, $preguntasecreta, $respuestapreguntasecreta );
			//			$tabla = $rs->agregarUsuario ($id_rol,$id_persona,$cuenta,$contrasena,$fechacreacion,$estadousuario,$preguntasecreta,$respuestapreguntasecreta)
			//			$tabla = $rs->agregarUsuario ( $cedula,    $cuenta,$contrasena,$fechacreacion,$estadousuario,$correoelectronico,$correoelectronicoalt );
			if (count ( $tabla ) > 0) {
				$msg = "Registro satisfactorio";
				$objResponse->call ( "cancelarRecuperar()" );
			}
		} else {
			$msg = "Usted ya se encuentra registrado como usuario";
		}
	} else {
		$msg = "La cédula y su número de cuenta no coinciden";
	}
	$rs->cerrarConexion ();
	$objResponse->call ( "ventanaAlerta('$msg','Alerta')" );
	return $objResponse;
}
function consultarCorreoUla($cedula) {
	global $objResponse;
	$objResponse = new xajaxResponse ();
	//	$objResponse->call ( "ventanaAlerta('$cedula','Alerta')" );
	//	return $objResponse;
	$rs = new DatosTrabajador ();
	$tabla = $rs->consultarDatosTrabajadorXcedula ( $cedula );
	$rs->cerrarConexion ();
	//	dump($tabla);	
	if (count ( $tabla )) {
		$correo = $tabla [0] ['CORREO_ULA'];
		//		si usted no posee correo ULA, por favor diríjase a este enlace: <a href=http://atencion.ula.ve/correo/apertura.php>Apertura</a>
		if ($correo == null or $correo == ' ') {
			//			$rs = new DatosTrabajador ();
			//			$tabla = $rs->contadorCorreoUla($cedula);
			//			$rs->cerrarConexion ();				
			$msg = "Para poder registrarse en el sistema usted debe poseer una cuenta de correo ULA, 
			si usted ya posee correo ULA y no puede registrarse por favor diríjase a la Dirección de Personal, 
			si usted no posee correo ULA, por favor pulse en (Aperturar Correo ULA) 
			para obtener más información o comuniquese por el número 2401125";
			$objResponse->call ( "ventanaAlerta('$msg','Alerta')" );
		} else {
			$objResponse->script ( "document.getElementById('emailNuevo').value = '$correo';" );
		}
	}
	//	$objResponse->call ( "ventanaAlerta('$msg','Alerta')" );
	return $objResponse;
}
function consultarNombre($cedula) {
	global $objResponse;
	$objResponse = new xajaxResponse ();
	//	return $objResponse;
	$objResponse->script ( "document.getElementById('nomPersona').value = '';" );
	$rs = new DatosTrabajador ();
	$tabla = $rs->consultarDatosTrabajadorXcedula ( $cedula );
	$rs->cerrarConexion ();
	//	dump($tabla);	
	if (count ( $tabla )) {
		$nomPersona = $tabla [0] ['NOM_PERSONA'];
		if ($nomPersona == null or $nomPersona == ' ') {
			$msg = "Información no disponible, por favor verifique su número de Cédula de Identidad e intente nuevamente, de persistir este mensaje comuníquese con YYYY.";
			$objResponse->call ( "ventanaAlerta('$msg','Alerta')" );
		} else {
			$objResponse->script ( "document.getElementById('nomPersona').value = '$nomPersona';" );
			//			$objResponse->call ( "ventanaAlerta('else','Alerta')" );
		}
	} else {
		$msg = "Número de Cédula de Identidad no encontrada, por favor verifique el valor e intente nuevamente.";
		$objResponse->call ( "ventanaAlerta('$msg','Alerta')" );
	}
	//	$objResponse->call ( "ventanaAlerta('$msg','Alerta')" );
	return $objResponse;
}
?>