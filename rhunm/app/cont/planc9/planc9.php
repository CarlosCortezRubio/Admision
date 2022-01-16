<?php 
/** 
 * @file planc9.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Planc9 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 07/05/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'Planc9.php');
require_once(MOD.'Enumerado.php');
class Planc9Action extends Action {
	private $opt;
	// Atributos de 
private $numPlanC9;
private $ape1PlanC9;
private $ape2PlanC9;
private $nom1PlanC9;
private $nacPlanC9;
private $dniPlanC9;
private $fecIngPlanC9;
private $eraDocPlanC9;
private $incDespPlanC9;
private $gdoAcadPlanC9;
private $mencPlanC9;
private $univMayGPlanC9;
private $paisPlanC9;
private $preGPlanC9;
private $maePlanC9;
private $docPlanC9;
private $sedesClasesPlanC9;
private $catDocPlanC9;
private $dedDocPlanC9;
private $clasesPlanC9;
private $otrasActPlanC9;
private $totHorSemPlanC9;
private $rzaInvPlanC9;
private $enDinaPlanC9;
private $perAcadPlanC9;
private $comPlanC9;
	function Planc9Action(){
		parent::Action();		
		$this->setTemplateDir(TEMPLATE);
	}
	function inicializarAtributos($request){
$this->numPlanC9 = $this->getParameter('numPlanC9', $request);
$this->ape1PlanC9 = $this->getParameter('ape1PlanC9', $request);
$this->ape2PlanC9 = $this->getParameter('ape2PlanC9', $request);
$this->nom1PlanC9 = $this->getParameter('nom1PlanC9', $request);
$this->nacPlanC9 = $this->getParameter('nacPlanC9', $request);
$this->dniPlanC9 = $this->getParameter('dniPlanC9', $request);
$this->fecIngPlanC9 = $this->getParameter('fecIngPlanC9', $request);
$this->eraDocPlanC9 = $this->getParameter('eraDocPlanC9', $request);
$this->incDespPlanC9 = $this->getParameter('incDespPlanC9', $request);
$this->gdoAcadPlanC9 = $this->getParameter('gdoAcadPlanC9', $request);
$this->mencPlanC9 = $this->getParameter('mencPlanC9', $request);
$this->univMayGPlanC9 = $this->getParameter('univMayGPlanC9', $request);
$this->paisPlanC9 = $this->getParameter('paisPlanC9', $request);
$this->preGPlanC9 = $this->getParameter('preGPlanC9', $request);
$this->maePlanC9 = $this->getParameter('maePlanC9', $request);
$this->docPlanC9 = $this->getParameter('docPlanC9', $request);
$this->sedesClasesPlanC9 = $this->getParameter('sedesClasesPlanC9', $request);
$this->catDocPlanC9 = $this->getParameter('catDocPlanC9', $request);
$this->dedDocPlanC9 = $this->getParameter('dedDocPlanC9', $request);
$this->clasesPlanC9 = $this->getParameter('clasesPlanC9', $request);
$this->otrasActPlanC9 = $this->getParameter('otrasActPlanC9', $request);
$this->totHorSemPlanC9 = $this->getParameter('totHorSemPlanC9', $request);
$this->rzaInvPlanC9 = $this->getParameter('rzaInvPlanC9', $request);
$this->enDinaPlanC9 = $this->getParameter('enDinaPlanC9', $request);
$this->perAcadPlanC9 = $this->getParameter('perAcadPlanC9', $request);
$this->comPlanC9 = $this->getParameter('comPlanC9', $request);
	}
	function asignarParametros($idplanc9){
	$this->asignarConstantes();
	$objPlanc9 = new Planc9();
	$tabla = $objPlanc9->consultarPlanc9Xid($idplanc9);
	$objPlanc9->cerrarConexion();
		if (count($tabla) > 0) {
$this->setParameter('numPlanC9', $tabla[0]['numPlanC9']);
$this->setParameter('ape1PlanC9', $tabla[0]['ape1PlanC9']);
$this->setParameter('ape2PlanC9', $tabla[0]['ape2PlanC9']);
$this->setParameter('nom1PlanC9', $tabla[0]['nom1PlanC9']);
$this->setParameter('nacPlanC9', $tabla[0]['nacPlanC9']);
$this->setParameter('dniPlanC9', $tabla[0]['dniPlanC9']);
$this->setParameter('fecIngPlanC9', $tabla[0]['fecIngPlanC9']);
$this->setParameter('eraDocPlanC9', $tabla[0]['eraDocPlanC9']);
$this->setParameter('incDespPlanC9', $tabla[0]['incDespPlanC9']);
$this->setParameter('gdoAcadPlanC9', $tabla[0]['gdoAcadPlanC9']);
$this->setParameter('mencPlanC9', $tabla[0]['mencPlanC9']);
$this->setParameter('univMayGPlanC9', $tabla[0]['univMayGPlanC9']);
$this->setParameter('paisPlanC9', $tabla[0]['paisPlanC9']);
$this->setParameter('preGPlanC9', $tabla[0]['preGPlanC9']);
$this->setParameter('maePlanC9', $tabla[0]['maePlanC9']);
$this->setParameter('docPlanC9', $tabla[0]['docPlanC9']);
$this->setParameter('sedesClasesPlanC9', $tabla[0]['sedesClasesPlanC9']);
$this->setParameter('catDocPlanC9', $tabla[0]['catDocPlanC9']);
$this->setParameter('dedDocPlanC9', $tabla[0]['dedDocPlanC9']);
$this->setParameter('clasesPlanC9', $tabla[0]['clasesPlanC9']);
$this->setParameter('otrasActPlanC9', $tabla[0]['otrasActPlanC9']);
$this->setParameter('totHorSemPlanC9', $tabla[0]['totHorSemPlanC9']);
$this->setParameter('rzaInvPlanC9', $tabla[0]['rzaInvPlanC9']);
$this->setParameter('enDinaPlanC9', $tabla[0]['enDinaPlanC9']);
$this->setParameter('perAcadPlanC9', $tabla[0]['perAcadPlanC9']);
$this->setParameter('comPlanC9', $tabla[0]['comPlanC9']);
		}
	}
	function asignarParametrosError(){
$this->setParameter('numPlanC9', $this->numPlanC9);
$this->setParameter('ape1PlanC9', $this->ape1PlanC9);
$this->setParameter('ape2PlanC9', $this->ape2PlanC9);
$this->setParameter('nom1PlanC9', $this->nom1PlanC9);
$this->setParameter('nacPlanC9', $this->nacPlanC9);
$this->setParameter('dniPlanC9', $this->dniPlanC9);
$this->setParameter('fecIngPlanC9', $this->fecIngPlanC9);
$this->setParameter('eraDocPlanC9', $this->eraDocPlanC9);
$this->setParameter('incDespPlanC9', $this->incDespPlanC9);
$this->setParameter('gdoAcadPlanC9', $this->gdoAcadPlanC9);
$this->setParameter('mencPlanC9', $this->mencPlanC9);
$this->setParameter('univMayGPlanC9', $this->univMayGPlanC9);
$this->setParameter('paisPlanC9', $this->paisPlanC9);
$this->setParameter('preGPlanC9', $this->preGPlanC9);
$this->setParameter('maePlanC9', $this->maePlanC9);
$this->setParameter('docPlanC9', $this->docPlanC9);
$this->setParameter('sedesClasesPlanC9', $this->sedesClasesPlanC9);
$this->setParameter('catDocPlanC9', $this->catDocPlanC9);
$this->setParameter('dedDocPlanC9', $this->dedDocPlanC9);
$this->setParameter('clasesPlanC9', $this->clasesPlanC9);
$this->setParameter('otrasActPlanC9', $this->otrasActPlanC9);
$this->setParameter('totHorSemPlanC9', $this->totHorSemPlanC9);
$this->setParameter('rzaInvPlanC9', $this->rzaInvPlanC9);
$this->setParameter('enDinaPlanC9', $this->enDinaPlanC9);
$this->setParameter('perAcadPlanC9', $this->perAcadPlanC9);
$this->setParameter('comPlanC9', $this->comPlanC9);
	}
	function formularioValido(){
		return true;
	}
	function ingresar(){
		if ($this->formularioValido()) {
	$objPlanc9 = new Planc9();
			$filasAfectadas = $objPlanc9->agregarPlanc9($this->numPlanC9, $this->ape1PlanC9, $this->ape2PlanC9, $this->nom1PlanC9, $this->nacPlanC9, $this->dniPlanC9, $this->fecIngPlanC9, $this->eraDocPlanC9, $this->incDespPlanC9, $this->gdoAcadPlanC9, $this->mencPlanC9, $this->univMayGPlanC9, $this->paisPlanC9, $this->preGPlanC9, $this->maePlanC9, $this->docPlanC9, $this->sedesClasesPlanC9, $this->catDocPlanC9, $this->dedDocPlanC9, $this->clasesPlanC9, $this->otrasActPlanC9, $this->totHorSemPlanC9, $this->rzaInvPlanC9, $this->enDinaPlanC9, $this->perAcadPlanC9, $this->comPlanC9);
			if ($filasAfectadas > 0) {
				$exito = Messages::EXITO_INGRESAR;
				$this->setParameter('exito', $exito);
				$this->setParameter('opt', 'val');
				return;
			}
	    	$objPlanc9->cerrarConexion();
		}
		$error = Messages::ERROR_INGRESAR;
		$this->setParameter('error', $error);
		$this->asignarParametrosError();
	}
	function actualizar(){
		if ($this->formularioValido()) {
	$objPlanc9 = new Planc9();
			$tablaPlanc9Ant = $objPlanc9->consultarPlanc9Xid($this->idplanc9);
			$filasAfectadas = $objPlanc9->actualizarPlanc9($this->numPlanC9,$this->ape1PlanC9,$this->ape2PlanC9,$this->nom1PlanC9,$this->nacPlanC9,$this->dniPlanC9,$this->fecIngPlanC9,$this->eraDocPlanC9,$this->incDespPlanC9,$this->gdoAcadPlanC9,$this->mencPlanC9,$this->univMayGPlanC9,$this->paisPlanC9,$this->preGPlanC9,$this->maePlanC9,$this->docPlanC9,$this->sedesClasesPlanC9,$this->catDocPlanC9,$this->dedDocPlanC9,$this->clasesPlanC9,$this->otrasActPlanC9,$this->totHorSemPlanC9,$this->rzaInvPlanC9,$this->enDinaPlanC9,$this->perAcadPlanC9,$this->comPlanC9,$this->idplanc9);
			if ($filasAfectadas > 0) {
				$exito = Messages::EXITO_ACTUALIZAR;
				$this->setParameter('exito', $exito);	
				$this->setParameter('opt', 'val'); 
				$this->asignarParametros($this->idplanc9);
				return;
			}
		$objPlanc9->cerrarConexion();
		}
		$error = Messages::ERROR_ACTUALIZAR;
		$this->setParameter('error', $error);
		$this->asignarParametros($this->idplanc9);
	}
	function cancelar(){
		$this->redirect('listarplanc9.php');
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
		 
		$accion = $this->obtenerAccion($request);
			if (!empty($accion)) {
				$this->asignarParametros(NULL);
				$this->inicializarAtributos($request);
				switch ($accion) {
					case Action::INGRESAR:
						$this->ingresar();
						$pagEnlace = 'planc9.tpl';
						break;
					case Action::ACTUALIZAR:
						$this->actualizar();
						$pagEnlace = 'planc9.tpl';
						break;
					case Action::CONSULTAR:
						$this->consultar();
						$pagEnlace = 'verplanc9.tpl';
						break;
					case Action::CANCELAR:
						$this->cancelar();
						return;
				}
			} else{
				$opt = @$request['opt'];
				$idplanc9 = @$request['id'];
				if ($opt=='i' OR $opt=='mr'){
					$pagEnlace = 'planc9.tpl';
				}else{
				$pagEnlace = 'verplanc9.tpl';
				}
				$this->asignarParametros($idplanc9);
			}
		$this->setParameterPath ( 'pagina', VISTA . 'planc9/' .$pagEnlace);
		$this->goForward ( 'template.tpl' );
	}
}
$action = new Planc9Action();
$action->main($_REQUEST, $_SESSION);
?>