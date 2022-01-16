<?php
session_unset ();
if (isset ( $_SESSION ['rolId'] )) {
//	echo "dentro del if del isset";
	session_destroy ();
}
//echo "aca con rol [".$_SESSION ['rolId'].']';
session_destroy();
session_unset();  
//echo "aca desp require";
	private $login;
	private $password;
	//	function InicioAction() {
		//		echo "aca";
		$this->setTemplateDir ( TEMPLATE );
	}
	function validaSesion($session) {
		if (isset ( $session ['usuarioid'] ) && isset ( $session ['rolid'] )) {
			return true;
		}
		return true;
	}
	//	function inicializarAtributos($request) {
		$this->asignarConstantes ();
		$this->setParameter ( 'login', $this->login );
	}
	function inicializarCombos() {
		// $tablaInventario = Enumerado::tabla2enumerado(Inventario::consultarInventario());
	function formularioValido() {
		if (! $this->issetAttribute ( $this->login ) || ! $this->issetAttribute ( $this->password )) {
			return false;
		}
		return true;
	}
	function ingresar() {
		if ($this->formularioValido ()) {
			$tablaUsuario = Usuario::consultarUsuarioXloginYpassword ( $this->login, $this->password );
			if (count ( $tablaUsuario ) > 0) {
				$idusuario = $tablaUsuario [0] ['usuarioid'];
				$autorizado = $tablaUsuario [0] ['autorizado'];
				$tablaautorizado = Usuario::consultarUsuariosXIdxYautorizado ( $idusuario, 'true' );
				if (count ( $tablaautorizado ) > 0) {
					@session_start ();
					$_SESSION ['usuarioid'] = $tablaUsuario [0] ['usuarioid'];
					$_SESSION ['login'] = $tablaUsuario [0] ['login'];
					$_SESSION ['nombre'] = $tablaUsuario [0] ['nombre'];
					$_SESSION ['rolid'] = $tablaUsuario [0] ['rolid'];
					$_SESSION ['autorizado'] = $tablaUsuario [0] ['autorizado'];
					if (isset ( $_SESSION ['usuarioid'] )) {
						$this->registro = 'inicio.tpl';
						return;
					}
					$error = Messages::ERROR_INICIOSESION;
					$this->setParameter ( 'error', $error );
					$this->asignarParametrosError ();
				} else {
					$this->registro = 'registro.tpl';
					$error = Messages::ERROR_NOAUTORIZADO;
					$this->setParameter ( 'error', $error );
					$this->asignarParametrosError ();
				}
			} else {
				$this->registro = 'sesion.tpl';
				$error = Messages::ERROR_LOGINPASS;
				$this->asignarParametrosError ();
				$this->setParameter ( 'error', $error );
			}
		}
	}
	function obtenerAccion($request) {
		if (isset ( $request ['registrar'] )) {
			return Action::REGISTRAR;
		}
		return null;
	}
	//	function llamadoXajax(){
		//		 		echo "aca";
		$this->inicializarCombos ();
		$accion = $this->obtenerAccion ( $request );
		if ($this->validaSesion ( $session )) {
			if (! empty ( $accion )) {
				if (Action::REGISTRAR) {
					$this->inicializarAtributos ( $request );
					$this->ingresar ();
					$registro = 'inicio.tpl';
				}
			}
		} else {
			$this->redirect ( 'registro.php' );
			$registro = 'registro.tpl';
			return;
		}
		if (isset ( $this->registro )) {
			$this->goForward ( $this->registro );
		} else {
			$this->asignarConstantes ();
			$this->setParameterPath ( 'LIB', LIB_URL );
			$this->setParameterPath ( 'desactivar', 'true' );
			$this->setParameterPath ( 'desactivarOpciones', true );
			$this->setParameterPath ( 'pagina', VISTA . 'sesion/sesion.tpl' );
			$this->goForward ( 'templateSimple.tpl' );
		}
	}
}
//echo "aca1";
$action->main ( $_REQUEST, $_SESSION );
//echo "aca2";