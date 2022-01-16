<?php 
/** 
 * @file gporemunerativo.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla GpoRemunerativo 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'GpoRemunerativo.php');
require_once(MOD.'Enumerado.php');
class principalGpoRemunerativo extends Controller {
	private $opt;
	// Atributos de 
// private $idGpoRemunerativo;
// private $codGpoRemunerativo;
// private $nomGpoRemunerativo;
	function principalGpoRemunerativo(){
		parent::__construct ();		
		$this->campos = 'idGpoRemunerativo,codGpoRemunerativo,nomGpoRemunerativo';
		$this->modelo = 'GpoRemunerativo';
		$this->modulo = 'GpoRemunerativo';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'GpoRemunerativo' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/GpoRemunerativo/imprimir' );
		$this->ver('listarGpoRemunerativo.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objGpoRemunerativo = new GpoRemunerativo ();
		$tablaResultado = $objGpoRemunerativo->agregarGpoRemunerativo($this->idGpoRemunerativo,$this->codGpoRemunerativo,$this->nomGpoRemunerativo);
		$objGpoRemunerativo->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('GpoRemunerativo.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'GpoRemunerativo' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('GpoRemunerativo.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objGpoRemunerativo = new GpoRemunerativo ();
		$tablaResultado = $objGpoRemunerativo->actualizarGpoRemunerativo($this->idGpoRemunerativo,$this->codGpoRemunerativo,$this->nomGpoRemunerativo,$this->idGpoRemunerativo);
		$objGpoRemunerativo->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'GpoRemunerativo.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'GpoRemunerativo' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objGpoRemunerativo = new GpoRemunerativo ();
		$tablaResultado = $objGpoRemunerativo->consultarGpoRemunerativoXidGpoRemunerativo($this->id);
		$objGpoRemunerativo->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verGpoRemunerativo.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('GpoRemunerativo.tpl');
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
		$objGpoRemunerativo = new GpoRemunerativo ();
		$arreglo_ids = split(',', $ids);
		foreach ($arreglo_ids as $idGpoRemunerativo) {
			$tablaResultado = $objGpoRemunerativo->eliminarGpoRemunerativo($idGpoRemunerativo);
		}
		$objGpoRemunerativo->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'GpoRemunerativo/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('GpoRemunerativo/'.$pagina);
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
		$objGpoRemunerativo = new GpoRemunerativo ();
		$tablaResultado = $objGpoRemunerativo->consultarGpoRemunerativoXid($this->id);
		$objGpoRemunerativo->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verGpoRemunerativo.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
}
?>