<?php 
/** 
 * @file prelaasig.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla PrelaAsig 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 27/11/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'PrelaAsig.php');
require_once(MOD.'Enumerado.php');
class principalPrelaAsig extends Controller {
	private $opt;
	// Atributos de 
// private $idPenAsig;
// private $idAsignatura;
// private $idPrelaAsig;
	function principalPrelaAsig(){
		parent::__construct ();		
		$this->campos = 'idPenAsig,idAsignatura,idPrelaAsig';
		$this->modelo = 'PrelaAsig';
		$this->modulo = 'PrelaAsig';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'PrelaAsig' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/PrelaAsig/imprimir' );
		$this->ver('listarPrelaAsig.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objPrelaAsig = new PrelaAsig ();
		$tablaResultado = $objPrelaAsig->agregarPrelaAsig($this->idPenAsig,$this->idAsignatura,$this->idPrelaAsig);
		$objPrelaAsig->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('PrelaAsig.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'PrelaAsig' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('PrelaAsig.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objPrelaAsig = new PrelaAsig ();
		$tablaResultado = $objPrelaAsig->actualizarPrelaAsig($this->idPenAsig,$this->idAsignatura,$this->idPrelaAsig,$this->idPrelaAsig);
		$objPrelaAsig->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'PrelaAsig.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'PrelaAsig' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objPrelaAsig = new PrelaAsig ();
		$tablaResultado = $objPrelaAsig->consultarPrelaAsigXidPrelaAsig($this->id);
		$objPrelaAsig->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verPrelaAsig.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('PrelaAsig.tpl');
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
		$objPrelaAsig = new PrelaAsig ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idPrelaAsig) {
			$tablaResultado = $objPrelaAsig->eliminarPrelaAsig($idPrelaAsig);
		}
		$objPrelaAsig->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'PrelaAsig/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('PrelaAsig/'.$pagina);
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
		$objPrelaAsig = new PrelaAsig ();
		$tablaResultado = $objPrelaAsig->consultarPrelaAsigXid($this->id);
		$objPrelaAsig->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verPrelaAsig.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
}
?>