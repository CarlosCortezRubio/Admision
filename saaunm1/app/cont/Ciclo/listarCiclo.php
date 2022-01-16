<?php 
/** 
 * @file ciclo.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Ciclo 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/11/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'Ciclo.php');
require_once(MOD.'Enumerado.php');
require_once(MOD.'EdoRegistro.php');
class principalCiclo extends Controller {
	private $opt;
	// Atributos de 
// private $idCiclo;
// private $IDEDOREGISTRO;
// private $nomCiclo;
// private $codCiclo;
	function principalCiclo(){
		parent::__construct ();		
		$this->campos = 'idCiclo,IDEDOREGISTRO,nomCiclo,codCiclo';
		$this->modelo = 'Ciclo';
		$this->modulo = 'Ciclo';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'Ciclo' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/Ciclo/imprimir' );
		$this->ver('listarCiclo.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objCiclo = new Ciclo ();
		$tablaResultado = $objCiclo->agregarCiclo($this->idCiclo,$this->IDEDOREGISTRO,$this->nomCiclo,$this->codCiclo);
		$objCiclo->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('Ciclo.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'Ciclo' );
		$opcion = $request ['opcion'];
		$this->inicializarCombos();		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('Ciclo.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objCiclo = new Ciclo ();
		$tablaResultado = $objCiclo->actualizarCiclo($this->idCiclo,$this->IDEDOREGISTRO,$this->nomCiclo,$this->codCiclo,$this->idCiclo);
		$objCiclo->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'Ciclo.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'Ciclo' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
$this->inicializarCombos();		$objCiclo = new Ciclo ();
		$tablaResultado = $objCiclo->consultarCicloXidCiclo($this->id);
		$objCiclo->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verCiclo.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('Ciclo.tpl');
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
		$objCiclo = new Ciclo ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idCiclo) {
			$tablaResultado = $objCiclo->eliminarCiclo($idCiclo);
		}
		$objCiclo->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'Ciclo/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('Ciclo/'.$pagina);
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
		$objCiclo = new Ciclo ();
		$tablaResultado = $objCiclo->consultarCicloXid($this->id);
		$objCiclo->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verCiclo.tpl',TRUE);
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