<?php 
/** 
 * @file progestudio.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla ProgEstudio 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/11/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'ProgEstudio.php');
require_once(MOD.'Enumerado.php');
require_once(MOD.'Empleado.php');
class principalProgEstudio extends Controller {
	private $opt;
	// Atributos de 
// private $idProgEstudio;
// private $idEmpleado;
// private $codProgEstudio;
// private $nomProgEstudio;
// private $numResProgEstudio;
// private $fecResProgEstudio;
// private $aplPreinscProgEstudio;
// private $aplGrupoProgEstudio;
// private $numResRevProgEstudio;
// private $fecResRevProgEstudio;
	function principalProgEstudio(){
		parent::__construct ();		
		$this->campos = 'idProgEstudio,idEmpleado,codProgEstudio,nomProgEstudio,numResProgEstudio,fecResProgEstudio,aplPreinscProgEstudio,aplGrupoProgEstudio,numResRevProgEstudio,fecResRevProgEstudio';
		$this->modelo = 'ProgEstudio';
		$this->modulo = 'ProgEstudio';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'ProgEstudio' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/ProgEstudio/imprimir' );
		$this->ver('listarProgEstudio.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objProgEstudio = new ProgEstudio ();
		$tablaResultado = $objProgEstudio->agregarProgEstudio($this->idProgEstudio,$this->idEmpleado,$this->codProgEstudio,$this->nomProgEstudio,$this->numResProgEstudio,$this->fecResProgEstudio,$this->aplPreinscProgEstudio,$this->aplGrupoProgEstudio,$this->numResRevProgEstudio,$this->fecResRevProgEstudio);
		$objProgEstudio->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('ProgEstudio.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'ProgEstudio' );
		$opcion = $request ['opcion'];
		$this->inicializarCombos();		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('ProgEstudio.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objProgEstudio = new ProgEstudio ();
		$tablaResultado = $objProgEstudio->actualizarProgEstudio($this->idProgEstudio,$this->idEmpleado,$this->codProgEstudio,$this->nomProgEstudio,$this->numResProgEstudio,$this->fecResProgEstudio,$this->aplPreinscProgEstudio,$this->aplGrupoProgEstudio,$this->numResRevProgEstudio,$this->fecResRevProgEstudio,$this->idProgEstudio);
		$objProgEstudio->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'ProgEstudio.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'ProgEstudio' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
$this->inicializarCombos();		$objProgEstudio = new ProgEstudio ();
		$tablaResultado = $objProgEstudio->consultarProgEstudioXidProgEstudio($this->id);
		$objProgEstudio->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verProgEstudio.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('ProgEstudio.tpl');
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
		$objProgEstudio = new ProgEstudio ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idProgEstudio) {
			$tablaResultado = $objProgEstudio->eliminarProgEstudio($idProgEstudio);
		}
		$objProgEstudio->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'ProgEstudio/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('ProgEstudio/'.$pagina);
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
		$objProgEstudio = new ProgEstudio ();
		$tablaResultado = $objProgEstudio->consultarProgEstudioXid($this->id);
		$objProgEstudio->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verProgEstudio.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
function inicializarCombos(){
		$objEmpleado = new Empleado;
		$tablaEmpleado = Enumerado::tabla2enumerado($objEmpleado->consultarEmpleado(),'1',0);
		$this->setParameter('tablaEmpleado', $tablaEmpleado);

		$objEmpleado->cerrarConexion();
}
}
?>