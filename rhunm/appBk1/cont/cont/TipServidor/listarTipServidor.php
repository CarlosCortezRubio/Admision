<?php 
/** 
 * @file tipservidor.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla TipServidor 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'TipServidor.php');
require_once(MOD.'Enumerado.php');
class principalTipServidor extends Controller {
	private $opt;
	// Atributos de 
// private $idTipServidor;
// private $codTipServidor;
// private $nomTipServidor;
	function principalTipServidor(){
		parent::__construct ();		
		$this->campos = 'idTipServidor,codTipServidor,nomTipServidor';
		$this->modelo = 'TipServidor';
		$this->modulo = 'TipServidor';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'TipServidor' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/TipServidor/imprimir' );
		$this->ver('listarTipServidor.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objTipServidor = new TipServidor ();
		$tablaResultado = $objTipServidor->agregarTipServidor($this->idTipServidor,$this->codTipServidor,$this->nomTipServidor);
		$objTipServidor->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('TipServidor.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'TipServidor' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('TipServidor.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objTipServidor = new TipServidor ();
		$tablaResultado = $objTipServidor->actualizarTipServidor($this->idTipServidor,$this->codTipServidor,$this->nomTipServidor,$this->idTipServidor);
		$objTipServidor->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'TipServidor.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'TipServidor' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objTipServidor = new TipServidor ();
		$tablaResultado = $objTipServidor->consultarTipServidorXidTipServidor($this->id);
		$objTipServidor->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verTipServidor.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('TipServidor.tpl');
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
		$objTipServidor = new TipServidor ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idTipServidor) {
			$tablaResultado = $objTipServidor->eliminarTipServidor($idTipServidor);
		}
		$objTipServidor->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'TipServidor/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('TipServidor/'.$pagina);
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
		$objTipServidor = new TipServidor ();
		$tablaResultado = $objTipServidor->consultarTipServidorXidTipServidor($this->id);
		$objTipServidor->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verTipServidor.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
}
?>