<?php 
/** 
 * @file planillapensionado.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla PlanillaPensionado 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 16/10/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'PlanillaPensionado.php');
require_once(MOD.'Conceptos.php');
require_once(MOD.'Enumerado.php');
class principalPlanillaPensionado extends Controller {
	private $opt;
	// Atributos de 
// private $idplanillaPensionado;
// private $idPersona;
// private $idPeriodo;
// private $fecplanillaPensionado;
	function principalPlanillaPensionado(){
		parent::__construct ();		
		$this->campos = 'idplanillaPensionado,idPersona,idPeriodo,fecplanillaPensionado';
		$this->modelo = 'planillaPensionado';
		$this->modulo = 'PlanillaPensionado';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'planillaPensionado' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/planillaPensionado/imprimir' );
		$this->ver('listarplanillaPensionado.tpl');
	}
	function guardar($request,$session){
	    dump($request);
	    
	    foreach ($request as $clave => $valor) {
	        if (strpos($clave,'idConc_')===0) {
	            echo "{$clave} => {$valor} <br>";
	            $matConceptos[] = $clave;
	        }
	    }
	    dump($matConceptos);
	    die();
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objPlanillaPensionado = new PlanillaPensionado ();
		$tablaResultado = $objPlanillaPensionado->agregarPlanillaPensionado($this->idplanillaPensionado,$this->idPersona,$this->idPeriodo,$this->fecplanillaPensionado);
		$objPlanillaPensionado->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('planillaPensionado.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'planillaPensionado' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		
		
		$objConceptos = new Conceptos ();
		$tablaResultado = $objConceptos->consultarConceptosXidEdoRegistro(1);
		$objConceptos->cerrarConexion();
// 		dump($tablaResultado);die();
		if ($tablaResultado > 0) {
		    $this->setParameter ( 'tablaResultado', $tablaResultado );
		}else{
		    $this->setParameter( 'opt', 'mr' );
		}
		
		$this->ver('planillaPensionado.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objPlanillaPensionado = new PlanillaPensionado ();
		$tablaResultado = $objPlanillaPensionado->actualizarPlanillaPensionado($this->idplanillaPensionado,$this->idPersona,$this->idPeriodo,$this->fecplanillaPensionado,$this->idplanillaPensionado);
		$objPlanillaPensionado->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'planillaPensionado.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'planillaPensionado' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objPlanillaPensionado = new PlanillaPensionado ();
		$tablaResultado = $objPlanillaPensionado->consultarPlanillaPensionadoXidplanillaPensionado($this->id);
		$objPlanillaPensionado->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verplanillaPensionado.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('planillaPensionado.tpl');
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
		$objPlanillaPensionado = new PlanillaPensionado ();
		$arreglo_ids = split(',', $ids);
		foreach ($arreglo_ids as $idplanillaPensionado) {
			$tablaResultado = $objPlanillaPensionado->eliminarPlanillaPensionado($idplanillaPensionado);
		}
		$objPlanillaPensionado->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'planillaPensionado/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('planillaPensionado/'.$pagina);
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
		$objPlanillaPensionado = new PlanillaPensionado ();
		$tablaResultado = $objPlanillaPensionado->consultarPlanillaPensionadoXid($this->id);
		$objPlanillaPensionado->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verplanillaPensionado.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
}
?>