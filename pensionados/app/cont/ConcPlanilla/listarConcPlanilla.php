<?php 
/** 
 * @file concplanilla.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla ConcPlanilla 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 22/10/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'ConcPlanilla.php');
require_once(MOD.'Enumerado.php');
class principalConcPlanilla extends Controller {
	private $opt;
	// Atributos de 
// private $idConcPlanilla;
// private $idConceptos;
// private $idplanillaPensionado;
// private $mntConcPlanilla;
	function principalConcPlanilla(){
		parent::__construct ();		
		$this->campos = 'idConcPlanilla,idConceptos,idplanillaPensionado,mntConcPlanilla';
		$this->modelo = 'ConcPlanilla';
		$this->modulo = 'ConcPlanilla';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'ConcPlanilla' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/ConcPlanilla/imprimir' );
		$this->ver('listarConcPlanilla.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objConcPlanilla = new ConcPlanilla ();
		$tablaResultado = $objConcPlanilla->agregarConcPlanilla($this->idConcPlanilla,$this->idConceptos,$this->idplanillaPensionado,$this->mntConcPlanilla);
		$objConcPlanilla->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('ConcPlanilla.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'ConcPlanilla' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('ConcPlanilla.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objConcPlanilla = new ConcPlanilla ();
		$tablaResultado = $objConcPlanilla->actualizarConcPlanilla($this->idConcPlanilla,$this->idConceptos,$this->idplanillaPensionado,$this->mntConcPlanilla,$this->idConcPlanilla);
		$objConcPlanilla->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'ConcPlanilla.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'ConcPlanilla' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objConcPlanilla = new ConcPlanilla ();
		$tablaResultado = $objConcPlanilla->consultarConcPlanillaXidConcPlanilla($this->id);
		$objConcPlanilla->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verConcPlanilla.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('ConcPlanilla.tpl');
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
		$objConcPlanilla = new ConcPlanilla ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idConcPlanilla) {
			$tablaResultado = $objConcPlanilla->eliminarConcPlanilla($idConcPlanilla);
		}
		$objConcPlanilla->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'ConcPlanilla/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('ConcPlanilla/'.$pagina);
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
		$objConcPlanilla = new ConcPlanilla ();
		$tablaResultado = $objConcPlanilla->consultarConcPlanillaXid($this->id);
		$objConcPlanilla->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verConcPlanilla.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
}
?>