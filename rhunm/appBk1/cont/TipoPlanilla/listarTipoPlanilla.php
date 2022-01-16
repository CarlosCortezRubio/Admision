<?php 
/** 
 * @file tipoplanilla.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla TipoPlanilla 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'TipoPlanilla.php');
require_once(MOD.'Enumerado.php');
class principalTipoPlanilla extends Controller {
	private $opt;
	// Atributos de 
// private $idTipoPlanilla;
// private $nomTipoPlanilla;
	function principalTipoPlanilla(){
		parent::__construct ();		
		$this->campos = 'idTipoPlanilla,nomTipoPlanilla';
		$this->modelo = 'TipoPlanilla';
		$this->modulo = 'TipoPlanilla';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'TipoPlanilla' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/TipoPlanilla/imprimir' );
		$this->ver('listarTipoPlanilla.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objTipoPlanilla = new TipoPlanilla ();
		$tablaResultado = $objTipoPlanilla->agregarTipoPlanilla($this->idTipoPlanilla,$this->nomTipoPlanilla);
		$objTipoPlanilla->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('TipoPlanilla.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'TipoPlanilla' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('TipoPlanilla.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objTipoPlanilla = new TipoPlanilla ();
		$tablaResultado = $objTipoPlanilla->actualizarTipoPlanilla($this->idTipoPlanilla,$this->nomTipoPlanilla,$this->idTipoPlanilla);
		$objTipoPlanilla->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'TipoPlanilla.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'TipoPlanilla' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objTipoPlanilla = new TipoPlanilla ();
		$tablaResultado = $objTipoPlanilla->consultarTipoPlanillaXidTipoPlanilla($this->id);
		$objTipoPlanilla->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verTipoPlanilla.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('TipoPlanilla.tpl');
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
		$objTipoPlanilla = new TipoPlanilla ();
		$arreglo_ids = split(',', $ids);
		foreach ($arreglo_ids as $idTipoPlanilla) {
			$tablaResultado = $objTipoPlanilla->eliminarTipoPlanilla($idTipoPlanilla);
		}
		$objTipoPlanilla->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'TipoPlanilla/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('TipoPlanilla/'.$pagina);
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
		$objTipoPlanilla = new TipoPlanilla ();
		$tablaResultado = $objTipoPlanilla->consultarTipoPlanillaXid($this->id);
		$objTipoPlanilla->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verTipoPlanilla.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
}
?>