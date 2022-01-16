<?php 
/** 
 * @file establecimiento.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Establecimiento 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'Establecimiento.php');
require_once(MOD.'Enumerado.php');
class principalEstablecimiento extends Controller {
	private $opt;
	// Atributos de 
// private $idEstablecimiento;
// private $codEstablecimiento;
// private $nomEstablecimiento;
	function principalEstablecimiento(){
		parent::__construct ();		
		$this->campos = 'idEstablecimiento,codEstablecimiento,nomEstablecimiento';
		$this->modelo = 'Establecimiento';
		$this->modulo = 'Establecimiento';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'Establecimiento' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/Establecimiento/imprimir' );
		$this->ver('listarEstablecimiento.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objEstablecimiento = new Establecimiento ();
		$tablaResultado = $objEstablecimiento->agregarEstablecimiento($this->idEstablecimiento,$this->codEstablecimiento,$this->nomEstablecimiento);
		$objEstablecimiento->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('Establecimiento.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'Establecimiento' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('Establecimiento.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objEstablecimiento = new Establecimiento ();
		$tablaResultado = $objEstablecimiento->actualizarEstablecimiento($this->idEstablecimiento,$this->codEstablecimiento,$this->nomEstablecimiento,$this->idEstablecimiento);
		$objEstablecimiento->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'Establecimiento.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'Establecimiento' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objEstablecimiento = new Establecimiento ();
		$tablaResultado = $objEstablecimiento->consultarEstablecimientoXidEstablecimiento($this->id);
		$objEstablecimiento->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verEstablecimiento.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('Establecimiento.tpl');
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
		$objEstablecimiento = new Establecimiento ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idEstablecimiento) {
			$tablaResultado = $objEstablecimiento->eliminarEstablecimiento($idEstablecimiento);
		}
		$objEstablecimiento->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'Establecimiento/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('Establecimiento/'.$pagina);
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
		$objEstablecimiento = new Establecimiento ();
		$tablaResultado = $objEstablecimiento->consultarEstablecimientoXidEstablecimiento($this->id);
		$objEstablecimiento->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verEstablecimiento.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
}
?>