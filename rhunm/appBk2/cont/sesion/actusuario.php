<?php 
/**
 * @file usuario.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Usuario 
 * 
 * @author Cooperativa SOLINT 2556 RL 
 * @version V 0.1 
 * @date 15/11/2009
 *  
*/ 
require_once ('../../../config/config.php');
require_once(MOD.'Usuario.php');
require_once(MOD.'Enumerado.php');
class UsuarioAction extends Action {
	private $opt;
	// Atributos de
	private $usuarioid;
	private $nombreusuario;
	private $apellidousuario;
	private $loginusuario;
	private $claveusuario;
	private $rolid;
	function UsuarioAction(){
		parent::Action();
		$this->setTemplateDir ( TEMPLATE );
	}
	function validaSesion($session){
		if (isset($session['usuarioid'])) {
			return true;
		}
		return false;
	}
	function asignarParametros($usuarioid){
		//$this->asignarConstantes();
		$tabla = Usuario::consultarUsuarioXid($usuarioid);
		var_dump($tabla);
		if (count($tabla) > 0) {
			$this->setParameter('usuarioid', $tabla[0]['usuarioid']);
			$this->setParameter('nombreusuario', $tabla[0]['nombreusuario']);
			$this->setParameter('claveusuario', $tabla[0]['claveusuario']);
			$this->setParameter('rolid', $tabla[0]['rolid']);
						
			$this->setParameter('nombrepersona', $tabla[0]['nombrepersona']);
			$this->setParameter('apellidopersona', $tabla[0]['apellidopersona']);
			$img = PUB_URL . 'img/iconos/editar.png';
			$this->setParameter('imagen',$img);
		}
//		$this->setParameterPath ( 'CHARSET', CHARSET );
//		$this->setParameterPath ( 'PATH_CSS', PATH_CSS );
//		$this->setParameterPath ( 'PATH_TEMPLATE', TEMPLATE_URL );
//		$this->setParameterPath ( 'PATH_JS', PATH_JS );
//		$this->setParameterPath ( 'PATH_JS_XAJAX', PATH_JS_XAJAX );
//		$this->setParameterPath ( 'PATH_MENU', PATH_MENU );
//		$this->setParameterPath ( 'NOMBRE_USUARIO', $_SESSION ['nombre'] );
	}
	function cancelar(){
		$this->redirect('consultarusuario.php');
	}
	function obtenerAccion($request){
		$opcion = null;
		if (isset($request['opcion'])) {
			$opcion = $request['opcion'];
		}
		switch ($opcion){
			case 'ingresar':
				return Action::INGRESAR;
			case 'actualizar':
				return Action::ACTUALIZAR;
			case 'cancelar':
				return Action::CANCELAR;
		}
	}
	function main($request, $session){
		$valida = $this->validaUsuario('sesion');
		if (!$valida) {
			$this->paginaRestringida();
		}
		
		$this->opt = $this->getParameter('opt', $request);
		$this->setParameter('opt', $this->opt);

		$accion = $this->obtenerAccion($request);
		if ($this->validaSesion($session)) {
				if (isset($session['usuarioid'])) {
					$usuarioid = $session['usuarioid'];
				}else{
					$usuarioid = @$request['id'];
				}
				$this->asignarParametros($usuarioid);
		} else {
			$this->redirect('../../../index.php');
			return;
		}
		$this->setParameterPath ( 'pagina', VISTA . 'sesion/actusuario.tpl' );
		$this->goForward ( 'template.tpl' );
	}
}
$action = new UsuarioAction();
$action->main($_REQUEST, $_SESSION);
?>