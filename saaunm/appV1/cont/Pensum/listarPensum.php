<?php 
/** 
 * @file pensum.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Pensum 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/11/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'Pensum.php');
require_once(MOD.'Enumerado.php');
require_once(MOD.'EdoRegistro.php');
class principalPensum extends Controller {
	private $opt;
	// Atributos de 
// private $idPensum;
// private $idEdoRegistro;
// private $nomPensum;
	function principalPensum(){
		parent::__construct ();		
		$this->campos = 'idPensum,idEdoRegistro,nomPensum';
		$this->modelo = 'Pensum';
		$this->modulo = 'Pensum';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'Pensum' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/Pensum/imprimir' );
		$this->ver('listarPensum.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objPensum = new Pensum ();
		$tablaResultado = $objPensum->agregarPensum($this->idPensum,$this->idEdoRegistro,$this->nomPensum);
		$objPensum->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('Pensum.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'Pensum' );
		$opcion = $request ['opcion'];
		$this->inicializarCombos();		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('Pensum.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objPensum = new Pensum ();
		$tablaResultado = $objPensum->actualizarPensum($this->idPensum,$this->idEdoRegistro,$this->nomPensum,$this->idPensum);
		$objPensum->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'Pensum.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'Pensum' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
$this->inicializarCombos();		$objPensum = new Pensum ();
		$tablaResultado = $objPensum->consultarPensumXidPensum($this->id);
		$objPensum->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verPensum.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('Pensum.tpl');
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
		$objPensum = new Pensum ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idPensum) {
			$tablaResultado = $objPensum->eliminarPensum($idPensum);
		}
		$objPensum->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'Pensum/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('Pensum/'.$pagina);
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
		$objPensum = new Pensum ();
		$tablaResultado = $objPensum->consultarPensumXid($this->id);
		$objPensum->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verPensum.tpl',TRUE);
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