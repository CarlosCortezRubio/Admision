<?php 
/** 
 * @file persona2.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Persona2 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 27/11/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'Persona2.php');
require_once(MOD.'Enumerado.php');
class principalPersona2 extends Controller {
	private $opt;
	// Atributos de 
// private $idPersona;
// private $Edo_IDEDOCIVIL;
// private $IDBANCO;
// private $idEdoRegistro;
// private $idGenero;
// private $idEdoCivil;
// private $idIdioma;
// private $idDistritoNac;
// private $idDistritoDir;
// private $idTipoDoc;
// private $idZona;
// private $idVia;
// private $dniPersona;
// private $nom1Persona;
// private $nom2Persona;
// private $ape1Persona;
// private $ape2Persona;
// private $numDepPersona;
// private $fecNacPersona;
// private $zonaDomPersona;
// private $desViaDomPersona;
// private $numViaDomPersona;
// private $intDomPersona;
// private $tel1DomPersona;
// private $tel2DomPersona;
// private $refDomPersona;
// private $emaDomPersona;
	function principalPersona2(){
		parent::__construct ();		
		$this->campos = 'idPersona,Edo_IDEDOCIVIL,IDBANCO,idEdoRegistro,idGenero,idEdoCivil,idIdioma,idDistritoNac,idDistritoDir,idTipoDoc,idZona,idVia,dniPersona,nom1Persona,nom2Persona,ape1Persona,ape2Persona,numDepPersona,fecNacPersona,zonaDomPersona,desViaDomPersona,numViaDomPersona,intDomPersona,tel1DomPersona,tel2DomPersona,refDomPersona,emaDomPersona';
		$this->modelo = 'Persona2';
		$this->modulo = 'Persona2';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'Persona2' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/Persona2/imprimir' );
		$this->ver('listarPersona2.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objPersona2 = new Persona2 ();
		$tablaResultado = $objPersona2->agregarPersona2($this->idPersona,$this->Edo_IDEDOCIVIL,$this->IDBANCO,$this->idEdoRegistro,$this->idGenero,$this->idEdoCivil,$this->idIdioma,$this->idDistritoNac,$this->idDistritoDir,$this->idTipoDoc,$this->idZona,$this->idVia,$this->dniPersona,$this->nom1Persona,$this->nom2Persona,$this->ape1Persona,$this->ape2Persona,$this->numDepPersona,$this->fecNacPersona,$this->zonaDomPersona,$this->desViaDomPersona,$this->numViaDomPersona,$this->intDomPersona,$this->tel1DomPersona,$this->tel2DomPersona,$this->refDomPersona,$this->emaDomPersona);
		$objPersona2->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('Persona2.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'Persona2' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('Persona2.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objPersona2 = new Persona2 ();
		$tablaResultado = $objPersona2->actualizarPersona2($this->idPersona,$this->Edo_IDEDOCIVIL,$this->IDBANCO,$this->idEdoRegistro,$this->idGenero,$this->idEdoCivil,$this->idIdioma,$this->idDistritoNac,$this->idDistritoDir,$this->idTipoDoc,$this->idZona,$this->idVia,$this->dniPersona,$this->nom1Persona,$this->nom2Persona,$this->ape1Persona,$this->ape2Persona,$this->numDepPersona,$this->fecNacPersona,$this->zonaDomPersona,$this->desViaDomPersona,$this->numViaDomPersona,$this->intDomPersona,$this->tel1DomPersona,$this->tel2DomPersona,$this->refDomPersona,$this->emaDomPersona,$this->idPersona2);
		$objPersona2->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'Persona2.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'Persona2' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objPersona2 = new Persona2 ();
		$tablaResultado = $objPersona2->consultarPersona2XidPersona2($this->id);
		$objPersona2->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verPersona2.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('Persona2.tpl');
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
		$objPersona2 = new Persona2 ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idPersona2) {
			$tablaResultado = $objPersona2->eliminarPersona2($idPersona2);
		}
		$objPersona2->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'Persona2/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('Persona2/'.$pagina);
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
		$objPersona2 = new Persona2 ();
		$tablaResultado = $objPersona2->consultarPersona2Xid($this->id);
		$objPersona2->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verPersona2.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
}
?>