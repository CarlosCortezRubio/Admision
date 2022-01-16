<?php 
/** 
 * @file tipoasignatura.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla TipoAsignatura 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/11/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'TipoAsignatura.php');
require_once(MOD.'Enumerado.php');
class principalTipoAsignatura extends Controller {
	private $opt;
	// Atributos de 
// private $idTipoAsignatura;
// private $nomTipoAsignatura;
	function principalTipoAsignatura(){
		parent::__construct ();		
		$this->campos = 'idTipoAsignatura,nomTipoAsignatura';
		$this->modelo = 'TipoAsignatura';
		$this->modulo = 'TipoAsignatura';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'TipoAsignatura' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/TipoAsignatura/imprimir' );
		$this->ver('listarTipoAsignatura.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objTipoAsignatura = new TipoAsignatura ();
		$tablaResultado = $objTipoAsignatura->agregarTipoAsignatura($this->idTipoAsignatura,$this->nomTipoAsignatura);
		$objTipoAsignatura->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('TipoAsignatura.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'TipoAsignatura' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('TipoAsignatura.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objTipoAsignatura = new TipoAsignatura ();
		$tablaResultado = $objTipoAsignatura->actualizarTipoAsignatura($this->idTipoAsignatura,$this->nomTipoAsignatura,$this->idTipoAsignatura);
		$objTipoAsignatura->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'TipoAsignatura.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'TipoAsignatura' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objTipoAsignatura = new TipoAsignatura ();
		$tablaResultado = $objTipoAsignatura->consultarTipoAsignaturaXidTipoAsignatura($this->id);
		$objTipoAsignatura->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verTipoAsignatura.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('TipoAsignatura.tpl');
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
		$objTipoAsignatura = new TipoAsignatura ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idTipoAsignatura) {
			$tablaResultado = $objTipoAsignatura->eliminarTipoAsignatura($idTipoAsignatura);
		}
		$objTipoAsignatura->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'TipoAsignatura/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('TipoAsignatura/'.$pagina);
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
		$objTipoAsignatura = new TipoAsignatura ();
		$tablaResultado = $objTipoAsignatura->consultarTipoAsignaturaXid($this->id);
		$objTipoAsignatura->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verTipoAsignatura.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
}
?>