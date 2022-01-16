<?php 
/** 
 * @file regioncargo.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla RegionCargo 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'RegionCargo.php');
require_once(MOD.'Enumerado.php');
class principalRegionCargo extends Controller {
	private $opt;
	// Atributos de 
// private $idRegionCargo;
// private $codRegionCargo;
// private $nomRegionCargo;
	function principalRegionCargo(){
		parent::__construct ();		
		$this->campos = 'idRegionCargo,codRegionCargo,nomRegionCargo';
		$this->modelo = 'RegionCargo';
		$this->modulo = 'RegionCargo';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'RegionCargo' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/RegionCargo/imprimir' );
		$this->ver('listarRegionCargo.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objRegionCargo = new RegionCargo ();
		$tablaResultado = $objRegionCargo->agregarRegionCargo($this->idRegionCargo,$this->codRegionCargo,$this->nomRegionCargo);
		$objRegionCargo->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('RegionCargo.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'RegionCargo' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('RegionCargo.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objRegionCargo = new RegionCargo ();
		$tablaResultado = $objRegionCargo->actualizarRegionCargo($this->idRegionCargo,$this->codRegionCargo,$this->nomRegionCargo,$this->idRegionCargo);
		$objRegionCargo->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'RegionCargo.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'RegionCargo' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objRegionCargo = new RegionCargo ();
		$tablaResultado = $objRegionCargo->consultarRegionCargoXidRegionCargo($this->id);
		$objRegionCargo->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verRegionCargo.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('RegionCargo.tpl');
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
		$objRegionCargo = new RegionCargo ();
		$arreglo_ids = split(',', $ids);
		foreach ($arreglo_ids as $idRegionCargo) {
			$tablaResultado = $objRegionCargo->eliminarRegionCargo($idRegionCargo);
		}
		$objRegionCargo->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'RegionCargo/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('RegionCargo/'.$pagina);
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
		$objRegionCargo = new RegionCargo ();
		$tablaResultado = $objRegionCargo->consultarRegionCargoXid($this->id);
		$objRegionCargo->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verRegionCargo.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
}
?>