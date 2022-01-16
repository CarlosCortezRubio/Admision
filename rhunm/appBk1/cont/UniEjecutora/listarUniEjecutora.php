<?php 
/** 
 * @file uniejecutora.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla UniEjecutora 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'UniEjecutora.php');
require_once(MOD.'Enumerado.php');
class principalUniEjecutora extends Controller {
	private $opt;
	// Atributos de 
// private $idUniEjecutora;
// private $codUniEjecutora;
// private $nomUniEjecutora;
	function principalUniEjecutora(){
		parent::__construct ();		
		$this->campos = 'idUniEjecutora,codUniEjecutora,nomUniEjecutora';
		$this->modelo = 'UniEjecutora';
		$this->modulo = 'UniEjecutora';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'UniEjecutora' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/UniEjecutora/imprimir' );
		$this->ver('listarUniEjecutora.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objUniEjecutora = new UniEjecutora ();
		$tablaResultado = $objUniEjecutora->agregarUniEjecutora($this->idUniEjecutora,$this->codUniEjecutora,$this->nomUniEjecutora);
		$objUniEjecutora->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('UniEjecutora.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'UniEjecutora' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('UniEjecutora.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objUniEjecutora = new UniEjecutora ();
		$tablaResultado = $objUniEjecutora->actualizarUniEjecutora($this->idUniEjecutora,$this->codUniEjecutora,$this->nomUniEjecutora,$this->idUniEjecutora);
		$objUniEjecutora->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'UniEjecutora.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'UniEjecutora' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objUniEjecutora = new UniEjecutora ();
		$tablaResultado = $objUniEjecutora->consultarUniEjecutoraXidUniEjecutora($this->id);
		$objUniEjecutora->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verUniEjecutora.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('UniEjecutora.tpl');
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
		$objUniEjecutora = new UniEjecutora ();
		$arreglo_ids = split(',', $ids);
		foreach ($arreglo_ids as $idUniEjecutora) {
			$tablaResultado = $objUniEjecutora->eliminarUniEjecutora($idUniEjecutora);
		}
		$objUniEjecutora->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'UniEjecutora/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('UniEjecutora/'.$pagina);
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
		$objUniEjecutora = new UniEjecutora ();
		$tablaResultado = $objUniEjecutora->consultarUniEjecutoraXid($this->id);
		$objUniEjecutora->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verUniEjecutora.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
}
?>