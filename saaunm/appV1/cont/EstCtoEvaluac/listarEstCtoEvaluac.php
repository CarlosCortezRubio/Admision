<?php 
/** 
 * @file estctoevaluac.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla EstCtoEvaluac 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 27/11/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'EstCtoEvaluac.php');
require_once(MOD.'Enumerado.php');
class principalEstCtoEvaluac extends Controller {
	private $opt;
	// Atributos de 
// private $idEstCtoEvaluac;
// private $idEstudiante;
// private $idCtoEvaluac;
// private $notaEstCtoEvaluac;
	function principalEstCtoEvaluac(){
		parent::__construct ();		
		$this->campos = 'idEstCtoEvaluac,idEstudiante,idCtoEvaluac,notaEstCtoEvaluac';
		$this->modelo = 'EstCtoEvaluac';
		$this->modulo = 'EstCtoEvaluac';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'EstCtoEvaluac' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/EstCtoEvaluac/imprimir' );
		$this->ver('listarEstCtoEvaluac.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objEstCtoEvaluac = new EstCtoEvaluac ();
		$tablaResultado = $objEstCtoEvaluac->agregarEstCtoEvaluac($this->idEstCtoEvaluac,$this->idEstudiante,$this->idCtoEvaluac,$this->notaEstCtoEvaluac);
		$objEstCtoEvaluac->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('EstCtoEvaluac.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'EstCtoEvaluac' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('EstCtoEvaluac.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objEstCtoEvaluac = new EstCtoEvaluac ();
		$tablaResultado = $objEstCtoEvaluac->actualizarEstCtoEvaluac($this->idEstCtoEvaluac,$this->idEstudiante,$this->idCtoEvaluac,$this->notaEstCtoEvaluac,$this->idEstCtoEvaluac);
		$objEstCtoEvaluac->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'EstCtoEvaluac.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'EstCtoEvaluac' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objEstCtoEvaluac = new EstCtoEvaluac ();
		$tablaResultado = $objEstCtoEvaluac->consultarEstCtoEvaluacXidEstCtoEvaluac($this->id);
		$objEstCtoEvaluac->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verEstCtoEvaluac.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('EstCtoEvaluac.tpl');
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
		$objEstCtoEvaluac = new EstCtoEvaluac ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idEstCtoEvaluac) {
			$tablaResultado = $objEstCtoEvaluac->eliminarEstCtoEvaluac($idEstCtoEvaluac);
		}
		$objEstCtoEvaluac->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'EstCtoEvaluac/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('EstCtoEvaluac/'.$pagina);
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
		$objEstCtoEvaluac = new EstCtoEvaluac ();
		$tablaResultado = $objEstCtoEvaluac->consultarEstCtoEvaluacXid($this->id);
		$objEstCtoEvaluac->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verEstCtoEvaluac.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
}
?>