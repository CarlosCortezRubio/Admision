<?php 
/** 
 * @file tipregistro.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla TipRegistro 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'TipRegistro.php');
require_once(MOD.'Enumerado.php');
class principalTipRegistro extends Controller {
	private $opt;
	// Atributos de 
// private $idTipRegistro;
// private $nomTipRegistro;
	function principalTipRegistro(){
		parent::__construct ();		
		$this->campos = 'idTipRegistro,nomTipRegistro';
		$this->modelo = 'TipRegistro';
		$this->modulo = 'TipRegistro';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'TipRegistro' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/TipRegistro/imprimir' );
		$this->ver('listarTipRegistro.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objTipRegistro = new TipRegistro ();
		$tablaResultado = $objTipRegistro->agregarTipRegistro($this->idTipRegistro,$this->nomTipRegistro);
		$objTipRegistro->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('TipRegistro.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'TipRegistro' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('TipRegistro.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objTipRegistro = new TipRegistro ();
		$tablaResultado = $objTipRegistro->actualizarTipRegistro($this->idTipRegistro,$this->nomTipRegistro,$this->idTipRegistro);
		$objTipRegistro->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'TipRegistro.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'TipRegistro' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objTipRegistro = new TipRegistro ();
		$tablaResultado = $objTipRegistro->consultarTipRegistroXidTipRegistro($this->id);
		$objTipRegistro->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verTipRegistro.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('TipRegistro.tpl');
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
		$objTipRegistro = new TipRegistro ();
		$arreglo_ids = split(',', $ids);
		foreach ($arreglo_ids as $idTipRegistro) {
			$tablaResultado = $objTipRegistro->eliminarTipRegistro($idTipRegistro);
		}
		$objTipRegistro->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'TipRegistro/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('TipRegistro/'.$pagina);
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
		$objTipRegistro = new TipRegistro ();
		$tablaResultado = $objTipRegistro->consultarTipRegistroXid($this->id);
		$objTipRegistro->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verTipRegistro.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
}
?>