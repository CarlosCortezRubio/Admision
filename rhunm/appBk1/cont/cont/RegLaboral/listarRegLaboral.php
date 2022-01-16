<?php 
/** 
 * @file reglaboral.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla RegLaboral 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'RegLaboral.php');
require_once(MOD.'Enumerado.php');
class principalRegLaboral extends Controller {
	private $opt;
	// Atributos de 
// private $idRegLaboral;
// private $codRegLaboral;
// private $nomRegLaboral;
	function principalRegLaboral(){
		parent::__construct ();		
		$this->campos = 'idRegLaboral,codRegLaboral,nomRegLaboral';
		$this->modelo = 'RegLaboral';
		$this->modulo = 'RegLaboral';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'RegLaboral' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/RegLaboral/imprimir' );
		$this->ver('listarRegLaboral.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objRegLaboral = new RegLaboral ();
		$tablaResultado = $objRegLaboral->agregarRegLaboral($this->idRegLaboral,$this->codRegLaboral,$this->nomRegLaboral);
		$objRegLaboral->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('RegLaboral.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'RegLaboral' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('RegLaboral.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objRegLaboral = new RegLaboral ();
		$tablaResultado = $objRegLaboral->actualizarRegLaboral($this->idRegLaboral,$this->codRegLaboral,$this->nomRegLaboral,$this->idRegLaboral);
		$objRegLaboral->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'RegLaboral.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'RegLaboral' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objRegLaboral = new RegLaboral ();
		$tablaResultado = $objRegLaboral->consultarRegLaboralXidRegLaboral($this->id);
		$objRegLaboral->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verRegLaboral.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('RegLaboral.tpl');
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
		$objRegLaboral = new RegLaboral ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idRegLaboral) {
			$tablaResultado = $objRegLaboral->eliminarRegLaboral($idRegLaboral);
		}
		$objRegLaboral->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'RegLaboral/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('RegLaboral/'.$pagina);
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
		$objRegLaboral = new RegLaboral ();
		$tablaResultado = $objRegLaboral->consultarRegLaboralXidRegLaboral($this->id);
		$objRegLaboral->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verRegLaboral.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
}
?>