<?php 
/** 
 * @file nummagist.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla NumMagist 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'NumMagist.php');
require_once(MOD.'Enumerado.php');
class principalNumMagist extends Controller {
	private $opt;
	// Atributos de 
// private $idNumMagist;
// private $codNumMagist;
// private $nomNumMagist;
	function principalNumMagist(){
		parent::__construct ();		
		$this->campos = 'idNumMagist,codNumMagist,nomNumMagist';
		$this->modelo = 'NumMagist';
		$this->modulo = 'NumMagist';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'NumMagist' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/NumMagist/imprimir' );
		$this->ver('listarNumMagist.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objNumMagist = new NumMagist ();
		$tablaResultado = $objNumMagist->agregarNumMagist($this->idNumMagist,$this->codNumMagist,$this->nomNumMagist);
		$objNumMagist->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('NumMagist.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'NumMagist' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('NumMagist.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objNumMagist = new NumMagist ();
		$tablaResultado = $objNumMagist->actualizarNumMagist($this->idNumMagist,$this->codNumMagist,$this->nomNumMagist,$this->idNumMagist);
		$objNumMagist->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'NumMagist.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'NumMagist' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objNumMagist = new NumMagist ();
		$tablaResultado = $objNumMagist->consultarNumMagistXidNumMagist($this->id);
		$objNumMagist->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verNumMagist.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('NumMagist.tpl');
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
		$objNumMagist = new NumMagist ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idNumMagist) {
			$tablaResultado = $objNumMagist->eliminarNumMagist($idNumMagist);
		}
		$objNumMagist->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'NumMagist/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('NumMagist/'.$pagina);
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
		$objNumMagist = new NumMagist ();
		$tablaResultado = $objNumMagist->consultarNumMagistXidNumMagist($this->id);
		$objNumMagist->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verNumMagist.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
}
?>