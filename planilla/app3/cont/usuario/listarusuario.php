<?php 
/** 
 * @file usuario.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Usuario 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 12/03/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'Usuario.php');
require_once(MOD.'Enumerado.php');
class principalUsuario extends Controller {
	private $opt;
	// Atributos de 
// private $idUsuario;
// private $idRol;
// private $idPersona;
// private $idEdoRegistro;
// private $cuentaUsuario;
// private $contrasenaUsuario;
// private $fecCreacion;
// private $pregSecreta;
// private $respPregSecreta;
	function principalUsuario(){
		parent::__construct ();		
		$this->campos = 'idUsuario,idRol,idPersona,idEdoRegistro,cuentaUsuario,contrasenaUsuario,fecCreacion,pregSecreta,respPregSecreta';
		$this->modelo = 'Usuario';
		$this->modulo = 'Usuario';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'Usuario' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/Usuario/imprimir' );
		$this->ver('listarUsuario.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objUsuario = new Usuario ();
		$tablaResultado = $objUsuario->agregarUsuario($this->idUsuario,$this->idRol,$this->idPersona,$this->idEdoRegistro,$this->cuentaUsuario,$this->contrasenaUsuario,$this->fecCreacion,$this->pregSecreta,$this->respPregSecreta);
		$objUsuario->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('Usuario.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'Usuario' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('Usuario.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objUsuario = new Usuario ();
		$tablaResultado = $objUsuario->actualizarUsuario($this->idUsuario,$this->idRol,$this->idPersona,$this->idEdoRegistro,$this->cuentaUsuario,$this->contrasenaUsuario,$this->fecCreacion,$this->pregSecreta,$this->respPregSecreta,$this->idUsuario);
		$objUsuario->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'Usuario.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'Usuario' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objUsuario = new Usuario ();
		$tablaResultado = $objUsuario->consultarUsuarioXidUsuario($this->id);
		$objUsuario->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verUsuario.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('Usuario.tpl');
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
		$objUsuario = new Usuario ();
		$arreglo_ids = split(',', $ids);
		foreach ($arreglo_ids as $idUsuario) {
			$tablaResultado = $objUsuario->eliminarUsuario($idUsuario);
		}
		$objUsuario->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'Usuario/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('Usuario/'.$pagina);
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
		$objUsuario = new Usuario ();
		$tablaResultado = $objUsuario->consultarUsuarioXid($this->id);
		$objUsuario->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verUsuario.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
}
?>