<?php 
/** 
 * @file banco.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Banco 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 15/10/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'Banco.php');
require_once(MOD.'Enumerado.php');
require_once(MOD.'EdoRegistro.php');
class BancoAction extends Action {
	private $opt;
	// Atributos de 
private $idBanco;
private $idEdoRegistro;
private $nomBanco;
private $etiBanco;
	function BancoAction(){
		parent::Action();		
		$this->setTemplateDir(TEMPLATE);
	}
	function inicializarAtributos($request){
$this->idBanco = $this->getParameter('idBanco', $request);
$this->idEdoRegistro = $this->getParameter('idEdoRegistro', $request);
$this->nomBanco = $this->getParameter('nomBanco', $request);
$this->etiBanco = $this->getParameter('etiBanco', $request);
	}
	function asignarParametros($idBanco){
	$this->asignarConstantes();
	$objBanco = new Banco();
	$tabla = $objBanco->consultarBancoXid($idBanco);
	$objBanco->cerrarConexion();
		if (count($tabla) > 0) {
$this->setParameter('idBanco', $tabla[0]['idBanco']);
$this->setParameter('nomBanco', $tabla[0]['nomBanco']);
$this->setParameter('etiBanco', $tabla[0]['etiBanco']);
		}
	}
	function asignarParametrosError(){
$this->setParameter('idBanco', $this->idBanco);
$this->setParameter('idEdoRegistro', $this->idEdoRegistro);
$this->setParameter('nomBanco', $this->nomBanco);
$this->setParameter('etiBanco', $this->etiBanco);
	}
function inicializarCombos(){
		$objEdoRegistro = new EdoRegistro;
		$tablaEdoRegistro = Enumerado::tabla2enumerado($objEdoRegistro->consultarEdoRegistro(),'',0);
		$this->setParameter('tablaEdoRegistro', $tablaEdoRegistro);

		$objEdoRegistro->cerrarConexion();
}
	function formularioValido(){
		return true;
	}
	function ingresar(){
		if ($this->formularioValido()) {
	$objBanco = new Banco();
			$filasAfectadas = $objBanco->agregarBanco($this->idBanco, $this->idEdoRegistro, $this->nomBanco, $this->etiBanco);
			if ($filasAfectadas > 0) {
				$exito = Messages::EXITO_INGRESAR;
				$this->setParameter('exito', $exito);
				$this->setParameter('opt', 'val');
				return;
			}
	    	$objBanco->cerrarConexion();
		}
		$error = Messages::ERROR_INGRESAR;
		$this->setParameter('error', $error);
		$this->asignarParametrosError();
	}
	function actualizar(){
		if ($this->formularioValido()) {
	$objBanco = new Banco();
			$tablaBancoAnt = $objBanco->consultarBancoXid($this->idBanco);
			$filasAfectadas = $objBanco->actualizarBanco($this->idBanco,$this->idEdoRegistro,$this->nomBanco,$this->etiBanco,$this->idBanco);
			if ($filasAfectadas > 0) {
				$exito = Messages::EXITO_ACTUALIZAR;
				$this->setParameter('exito', $exito);	
				$this->setParameter('opt', 'val'); 
				$this->asignarParametros($this->idBanco);
				return;
			}
		$objBanco->cerrarConexion();
		}
		$error = Messages::ERROR_ACTUALIZAR;
		$this->setParameter('error', $error);
		$this->asignarParametros($this->idBanco);
	}
	function cancelar(){
		$this->redirect('listarBanco.php');
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
		$valida = $this->validaUsuario('tipoCta');
		if (!$valida) {
			$this->paginaRestringida();
		}
		$this->opt = $this->getParameter('opt', $request);
		$this->opcion = $this->getParameter('opcion', $request);
		$this->setParameter('opt', $this->opt);
		$this->inicializarCombos(); 
		$accion = $this->obtenerAccion($request);
			if (!empty($accion)) {
				$this->asignarParametros(NULL);
				$this->inicializarAtributos($request);
				switch ($accion) {
					case Action::INGRESAR:
						$this->ingresar();
						$pagEnlace = 'Banco.tpl';
						break;
					case Action::ACTUALIZAR:
						$this->actualizar();
						$pagEnlace = 'Banco.tpl';
						break;
					case Action::CONSULTAR:
						$this->consultar();
						$pagEnlace = 'verBanco.tpl';
						break;
					case Action::CANCELAR:
						$this->cancelar();
						return;
				}
			} else{
				$opt = @$request['opt'];
				$idBanco = @$request['id'];
				if ($opt=='i' OR $opt=='mr'){
					$pagEnlace = 'Banco.tpl';
				}else{
				$pagEnlace = 'verBanco.tpl';
				}
				$this->asignarParametros($idBanco);
			}
		$this->setParameterPath ( 'pagina', VISTA . 'Banco/' .$pagEnlace);
		$this->goForward ( 'template.tpl' );
	}
}
$action = new BancoAction();
$action->main($_REQUEST, $_SESSION);
?>