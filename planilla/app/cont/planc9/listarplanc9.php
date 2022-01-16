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
class principalPlanc9 extends Controller {
	private $opt;
	// Atributos de 
// private $numPlanC9;
// private $ape1PlanC9;
// private $ape2PlanC9;
// private $nom1PlanC9;
// private $nacPlanC9;
// private $dniPlanC9;
// private $fecIngPlanC9;
// private $eraDocPlanC9;
// private $incDespPlanC9;
// private $gdoAcadPlanC9;
// private $mencPlanC9;
// private $univMayGPlanC9;
// private $paisPlanC9;
// private $preGPlanC9;
// private $maePlanC9;
// private $docPlanC9;
// private $sedesClasesPlanC9;
// private $catDocPlanC9;
// private $dedDocPlanC9;
// private $clasesPlanC9;
// private $otrasActPlanC9;
// private $totHorSemPlanC9;
// private $rzaInvPlanC9;
// private $enDinaPlanC9;
// private $perAcadPlanC9;
// private $comPlanC9;
	function principalPlanc9(){
		parent::__construct ();		
		$this->campos = 'numPlanC9,ape1PlanC9,ape2PlanC9,nom1PlanC9,nacPlanC9,dniPlanC9,fecIngPlanC9,eraDocPlanC9,incDespPlanC9,gdoAcadPlanC9,mencPlanC9,univMayGPlanC9,paisPlanC9,preGPlanC9,maePlanC9,docPlanC9,sedesClasesPlanC9,catDocPlanC9,dedDocPlanC9,clasesPlanC9,otrasActPlanC9,totHorSemPlanC9,rzaInvPlanC9,enDinaPlanC9,perAcadPlanC9,comPlanC9';
		$this->modelo = 'planc9';
		$this->modulo = 'Planc9';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'planc9' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/planc9/imprimir' );
		$this->ver('listarplanc9.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objPlanc9 = new Planc9 ();
		$tablaResultado = $objPlanc9->agregarPlanc9($this->numPlanC9,$this->ape1PlanC9,$this->ape2PlanC9,$this->nom1PlanC9,$this->nacPlanC9,$this->dniPlanC9,$this->fecIngPlanC9,$this->eraDocPlanC9,$this->incDespPlanC9,$this->gdoAcadPlanC9,$this->mencPlanC9,$this->univMayGPlanC9,$this->paisPlanC9,$this->preGPlanC9,$this->maePlanC9,$this->docPlanC9,$this->sedesClasesPlanC9,$this->catDocPlanC9,$this->dedDocPlanC9,$this->clasesPlanC9,$this->otrasActPlanC9,$this->totHorSemPlanC9,$this->rzaInvPlanC9,$this->enDinaPlanC9,$this->perAcadPlanC9,$this->comPlanC9);
		$objPlanc9->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('planc9.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'planc9' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('planc9.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objPlanc9 = new Planc9 ();
		$tablaResultado = $objPlanc9->actualizarPlanc9($this->numPlanC9,$this->ape1PlanC9,$this->ape2PlanC9,$this->nom1PlanC9,$this->nacPlanC9,$this->dniPlanC9,$this->fecIngPlanC9,$this->eraDocPlanC9,$this->incDespPlanC9,$this->gdoAcadPlanC9,$this->mencPlanC9,$this->univMayGPlanC9,$this->paisPlanC9,$this->preGPlanC9,$this->maePlanC9,$this->docPlanC9,$this->sedesClasesPlanC9,$this->catDocPlanC9,$this->dedDocPlanC9,$this->clasesPlanC9,$this->otrasActPlanC9,$this->totHorSemPlanC9,$this->rzaInvPlanC9,$this->enDinaPlanC9,$this->perAcadPlanC9,$this->comPlanC9,$this->idplanc9);
		$objPlanc9->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'planc9.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'planc9' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objPlanc9 = new Planc9 ();
		$tablaResultado = $objPlanc9->consultarPlanc9Xidplanc9($this->id);
		$objPlanc9->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verplanc9.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('planc9.tpl');
			}
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
	function consultar($request,$session){
		$this->verEditar($request,$session,true);
	}
	function eliminar($request,$session){
		$tablaResultado = false;
		$ids = $request['ids'];
		if ($ids == null || $ids == '') {
			return 0;
		}
		$objPlanc9 = new Planc9 ();
		$arreglo_ids = split(',', $ids);
		foreach ($arreglo_ids as $idplanc9) {
			$tablaResultado = $objPlanc9->eliminarPlanc9($idplanc9);
		}
		$objPlanc9->cerrarConexion();
		if ($tablaResultado) {
			$exito = Messages::EXITO_ELIMINAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ELIMINAR;
			$this->setParameter ( 'error', $error );
			$this->listar($request,$session);
		}
	}
	function cancelar($request,$session){
		$this->listar($request,$session);
	}
	function home($request,$session){
		$this->verEditar('../principal/principal.php');
	}
function ver($pagina, $formatoImpresion = false){
		if($formatoImpresion) {
			$this->setTemplateDir ( VISTA . 'planc9/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('planc9/'.$pagina);
		}
	}
	function imprimir($request,$session){
		$mod = ucfirst ( @$request ['sec'] );
		$opt = '';
		if (isset ( $request ['id'] )) {
			$opt = $request ['id'];
		}
		$cad = trim ( 'imp' . $mod . '.php' );
		include $cad;
	}
	function ventanaConsultar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objPlanc9 = new Planc9 ();
		$tablaResultado = $objPlanc9->consultarPlanc9Xid($this->id);
		$objPlanc9->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verplanc9.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
}
?>