<?php 
/** 
 * @file tipoconcepto.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla TipoConcepto 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 16/10/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'TipoConcepto.php');
require_once(MOD.'Enumerado.php');
require_once(MOD.'EdoRegistro.php');
class principalTipoConcepto extends Controller {
	private $opt;
	// Atributos de 
// private $idTipoConcepto;
// private $idEdoRegistro;
// private $nomTipoConcepto;
// private $descTipoConcepto;
	function principalTipoConcepto(){
		parent::__construct ();		
		$this->campos = 'idTipoConcepto,idEdoRegistro,nomTipoConcepto,descTipoConcepto';
		$this->modelo = 'TipoConcepto';
		$this->modulo = 'TipoConcepto';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'TipoConcepto' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/TipoConcepto/imprimir' );
		$this->ver('listarTipoConcepto.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objTipoConcepto = new TipoConcepto ();
		$tablaResultado = $objTipoConcepto->agregarTipoConcepto($this->idTipoConcepto,$this->idEdoRegistro,$this->nomTipoConcepto,$this->descTipoConcepto);
		$objTipoConcepto->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('TipoConcepto.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'TipoConcepto' );
		$opcion = $request ['opcion'];
		$this->inicializarCombos();		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('TipoConcepto.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objTipoConcepto = new TipoConcepto ();
		$tablaResultado = $objTipoConcepto->actualizarTipoConcepto($this->idTipoConcepto,$this->idEdoRegistro,$this->nomTipoConcepto,$this->descTipoConcepto,$this->idTipoConcepto);
		$objTipoConcepto->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'TipoConcepto.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'TipoConcepto' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
$this->inicializarCombos();		$objTipoConcepto = new TipoConcepto ();
		$tablaResultado = $objTipoConcepto->consultarTipoConceptoXidTipoConcepto($this->id);
		$objTipoConcepto->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verTipoConcepto.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('TipoConcepto.tpl');
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
		$objTipoConcepto = new TipoConcepto ();
		$arreglo_ids = split(',', $ids);
		foreach ($arreglo_ids as $idTipoConcepto) {
			$tablaResultado = $objTipoConcepto->eliminarTipoConcepto($idTipoConcepto);
		}
		$objTipoConcepto->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'TipoConcepto/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('TipoConcepto/'.$pagina);
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
		$objTipoConcepto = new TipoConcepto ();
		$tablaResultado = $objTipoConcepto->consultarTipoConceptoXid($this->id);
		$objTipoConcepto->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verTipoConcepto.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
function inicializarCombos(){
		$objEdoRegistro = new EdoRegistro;
		$tablaEdoRegistro = Enumerado::tabla2enumerado($objEdoRegistro->consultarEdoRegistro(),'1',0);
		$this->setParameter('tablaEdoRegistro', $tablaEdoRegistro);

		$objEdoRegistro->cerrarConexion();
}
}
?>