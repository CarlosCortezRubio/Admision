<?php
/** 
 * @file actclave.php 
 * 
 * Controlador Actualizar clave en la Tabla Usuario 
 * 
 * @author Gianny Josué Villarreal Bustos
 * @version V 0.1 
 * @date 03/07/2014
 * 
 */
require_once ('../../../config/config.php');
//require_once (LIB . 'xajax05/xajax_core/xajax.inc.php');require_once (MOD . 'Usuario.php');
class principalsesion extends Action {
	function principalsesion() {
		parent::__construct ();
	}
	//	function llamadoXajax(){	//		include_once 'sesion.xajax.php';	//		//$this->assign('xajax_javascript',$xajax->printJavascript(PUB_URL . 'js/xajax05/'));	//		$this->assign('xajax_javascript',$xajax->printJavascript());	//	}			function listar($request, $session) {
//		dump($request);die();
		//		$this->llamadoXajax();		$this->llamadoXajax ( 'usuario' );
		$this->ver ( 'tblActClave.tpl' );
	}
	function ver($pagina) {
		$this->setTemplateDir ( VISTA . 'sesion/' );
		$this->goForward ( $pagina );
	}
}
$action = new principalsesion ();
$action->listar ( $_REQUEST, $_SESSION );
?>