<?php 
/** 
 * @file idioma.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Idioma 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'Idioma.php');
require_once(MOD.'Enumerado.php');
class principalIdioma extends Controller {
	private $opt;
	// Atributos de 
// private $idIdioma;
// private $nomIdioma;
	function principalIdioma(){
		parent::__construct ();		
		$this->campos = 'idIdioma,nomIdioma';
		$this->modelo = 'Idioma';
		$this->modulo = 'Idioma';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'Idioma' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/Idioma/imprimir' );
		$this->ver('listarIdioma.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objIdioma = new Idioma ();
		$tablaResultado = $objIdioma->agregarIdioma($this->idIdioma,$this->nomIdioma);
		$objIdioma->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('Idioma.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'Idioma' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('Idioma.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objIdioma = new Idioma ();
		$tablaResultado = $objIdioma->actualizarIdioma($this->idIdioma,$this->nomIdioma,$this->idIdioma);
		$objIdioma->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'Idioma.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'Idioma' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objIdioma = new Idioma ();
		$tablaResultado = $objIdioma->consultarIdiomaXidIdioma($this->id);
		$objIdioma->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verIdioma.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('Idioma.tpl');
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
		$objIdioma = new Idioma ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idIdioma) {
			$tablaResultado = $objIdioma->eliminarIdioma($idIdioma);
		}
		$objIdioma->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'Idioma/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('Idioma/'.$pagina);
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
		$objIdioma = new Idioma (); 
		$tablaResultado = $objIdioma->consultarIdiomaxIdIdioma($this->id);
		$objIdioma->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verIdioma.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
}
?>