<?php 
/** 
 * @file grupo.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Grupo 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 27/11/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'Grupo.php');
require_once(MOD.'Enumerado.php');
class principalGrupo extends Controller {
	private $opt;
	// Atributos de 
// private $idGrupo;
// private $idCiclo;
// private $idPensum;
// private $idPeriodo;
// private $idProgEstudio;
// private $idEmpleado;
// private $idSede;
// private $nomGrupo;
// private $codGrupo;
	function principalGrupo(){
		parent::__construct ();		
		$this->campos = 'idGrupo,idCiclo,idPensum,idPeriodo,idProgEstudio,idEmpleado,idSede,nomGrupo,codGrupo';
		$this->modelo = 'Grupo';
		$this->modulo = 'Grupo';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'Grupo' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/Grupo/imprimir' );
		$this->ver('listarGrupo.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objGrupo = new Grupo ();
		$tablaResultado = $objGrupo->agregarGrupo($this->idGrupo,$this->idCiclo,$this->idPensum,$this->idPeriodo,$this->idProgEstudio,$this->idEmpleado,$this->idSede,$this->nomGrupo,$this->codGrupo);
		$objGrupo->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('Grupo.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'Grupo' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('Grupo.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objGrupo = new Grupo ();
		$tablaResultado = $objGrupo->actualizarGrupo($this->idGrupo,$this->idCiclo,$this->idPensum,$this->idPeriodo,$this->idProgEstudio,$this->idEmpleado,$this->idSede,$this->nomGrupo,$this->codGrupo,$this->idGrupo);
		$objGrupo->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'Grupo.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'Grupo' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objGrupo = new Grupo ();
		$tablaResultado = $objGrupo->consultarGrupoXidGrupo($this->id);
		$objGrupo->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verGrupo.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('Grupo.tpl');
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
		$objGrupo = new Grupo ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idGrupo) {
			$tablaResultado = $objGrupo->eliminarGrupo($idGrupo);
		}
		$objGrupo->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'Grupo/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('Grupo/'.$pagina);
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
		$objGrupo = new Grupo ();
		$tablaResultado = $objGrupo->consultarGrupoXid($this->id);
		$objGrupo->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verGrupo.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
}
?>