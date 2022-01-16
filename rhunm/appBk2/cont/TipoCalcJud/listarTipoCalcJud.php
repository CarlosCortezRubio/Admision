<?php 
/** 
 * @file tipocalcjud.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla TipoCalcJud 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'TipoCalcJud.php');
require_once(MOD.'Enumerado.php');
class principalTipoCalcJud extends Controller {
	private $opt;
	// Atributos de 
// private $idTipoCalcJud;
// private $codTipoCalcJud;
// private $nomTipoCalcJud;
	function principalTipoCalcJud(){
		parent::__construct ();		
		$this->campos = 'idTipoCalcJud,codTipoCalcJud,nomTipoCalcJud';
		$this->modelo = 'TipoCalcJud';
		$this->modulo = 'TipoCalcJud';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'TipoCalcJud' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/TipoCalcJud/imprimir' );
		$this->ver('listarTipoCalcJud.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objTipoCalcJud = new TipoCalcJud ();
		$tablaResultado = $objTipoCalcJud->agregarTipoCalcJud($this->idTipoCalcJud,$this->codTipoCalcJud,$this->nomTipoCalcJud);
		$objTipoCalcJud->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('TipoCalcJud.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'TipoCalcJud' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('TipoCalcJud.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objTipoCalcJud = new TipoCalcJud ();
		$tablaResultado = $objTipoCalcJud->actualizarTipoCalcJud($this->idTipoCalcJud,$this->codTipoCalcJud,$this->nomTipoCalcJud,$this->idTipoCalcJud);
		$objTipoCalcJud->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'TipoCalcJud.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'TipoCalcJud' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objTipoCalcJud = new TipoCalcJud ();
		$tablaResultado = $objTipoCalcJud->consultarTipoCalcJudXidTipoCalcJud($this->id);
		$objTipoCalcJud->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verTipoCalcJud.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('TipoCalcJud.tpl');
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
		$objTipoCalcJud = new TipoCalcJud ();
		$arreglo_ids = split(',', $ids);
		foreach ($arreglo_ids as $idTipoCalcJud) {
			$tablaResultado = $objTipoCalcJud->eliminarTipoCalcJud($idTipoCalcJud);
		}
		$objTipoCalcJud->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'TipoCalcJud/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('TipoCalcJud/'.$pagina);
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
		$objTipoCalcJud = new TipoCalcJud ();
		$tablaResultado = $objTipoCalcJud->consultarTipoCalcJudXid($this->id);
		$objTipoCalcJud->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verTipoCalcJud.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
}
?>