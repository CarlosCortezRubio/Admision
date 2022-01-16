<?php 
/** 
 * @file empleado.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Empleado 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'Empleado.php');
require_once(MOD.'Persona.php');
require_once(MOD.'TipRegistro.php');
require_once(MOD.'Situacion.php');
require_once(MOD.'SegSalud.php');

require_once(MOD.'TipoPlanilla.php');

require_once(MOD.'CodFiscal.php');

require_once(MOD.'CodRegional.php');
require_once(MOD.'Afp.php');
require_once(MOD.'UniEjecutora.php');

require_once(MOD.'NEC.php');
require_once(MOD.'Nivel.php');

require_once(MOD.'Establecimiento.php');

require_once(MOD.'RegLaboral.php');
require_once(MOD.'TipServidor.php');
require_once(MOD.'NumMagist.php');
require_once(MOD.'GpoRemunerativo.php');
require_once(MOD.'HatEmb.php');
require_once(MOD.'CargoOrigen.php');

require_once(MOD.'NivelOrigen.php');
require_once(MOD.'PalMagist.php');
require_once(MOD.'DirEncargo.php');
require_once(MOD.'Enumerado.php');

class principalEmpleado extends Controller {
	private $opt;
	// Atributos de 
// private $idEmpleado;
// private $idPersona;
// private $idSituacion;
// private $idTipRegistro;
// private $idSegSalud;
// private $idTipoPlanilla;
// private $idCodFiscal;
// private $idAfp;
// private $idCodRegional;
// private $idUniEjecutora;
// private $idNEC;
// private $idNivel;
// private $idEstablecimiento;
// private $idRegLaboral;
// private $idTipServidor;
// private $idNumMagist;
// private $idGpoRemunerativo;
// private $idhatEmb;
// private $idCargoOrigen;
// private $idNivelOrigen;
// private $idPalMagist;
// private $idDirEncargo;
// private $codModular;
// private $fecIngAdmPubEmpleado;
// private $fecIngMedEmpleado;
// private $fecCeseEmpleado;
// private $infCompEmpleado;
// private $fecHabEmpleado;
// private $fecDesEmpleado;
// private $fecFallEmpleado;
// private $valPorEmpleado;
// private $fecValEmpleado;
// private $docRefEmpleado;
// private $numSegSaludEmpleado;
// private $eVidaEmpleado;
// private $CUSPPEmpleado;
// private $fecAfiPenEmpleado;
// private $fecDevPenEmpleado;
// private $plazaEmpleado;
// private $tipPlazaEmpleado;
// private $asigInserEmpleado;
// private $diasTrabEmpleado;
// private $numDepEmpleado;
// private $numDecEmpleado;
// private $licDiasEmpleado;
// private $tipServEmpleado;
// private $fecIniLicEmpleado;
// private $insasitEmpleado;
// private $permisosEmpleado;
// private $huelgasEmpleado;
// private $leyMenEmpleado;
// private $leyPerEmpleado;
// private $cadPresupEmpleado;
// private $ctaEmpleado;
	function principalEmpleado(){
		parent::__construct ();		
		$this->campos = 'idEmpleado,idPersona,idSituacion,idTipRegistro,idSegSalud,idTipoPlanilla,idCodFiscal,idAfp,idCodRegional,idUniEjecutora,idNEC,idNivel,idEstablecimiento,idRegLaboral,idTipServidor,idNumMagist,idGpoRemunerativo,idhatEmb,idCargoOrigen,idNivelOrigen,idPalMagist,idDirEncargo,codModular,fecIngAdmPubEmpleado,fecIngMedEmpleado,fecCeseEmpleado,infCompEmpleado,fecHabEmpleado,fecDesEmpleado,fecFallEmpleado,valPorEmpleado,fecValEmpleado,docRefEmpleado,numSegSaludEmpleado,eVidaEmpleado,CUSPPEmpleado,fecAfiPenEmpleado,fecDevPenEmpleado,plazaEmpleado,tipPlazaEmpleado,asigInserEmpleado,diasTrabEmpleado,numDepEmpleado,numDecEmpleado,licDiasEmpleado,tipServEmpleado,fecIniLicEmpleado,insasitEmpleado,permisosEmpleado,huelgasEmpleado,leyMenEmpleado,leyPerEmpleado,cadPresupEmpleado,ctaEmpleado,preG,dniPersona,nom1Persona,ape1Persona';
		$this->modelo = 'Empleado';
		$this->modulo = 'Empleado';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'Empleado' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/Empleado/imprimir' );
		$this->inicializarCombos();
		$this->ver('listarEmpleado.tpl');
	}
	

	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objEmpleado = new Empleado ();
	//	if($tablaResultado2==false){
		$tablaResultado = $objEmpleado->agregarEmpleado($this->idEmpleado,$this->idPersona,$this->idSituacion,$this->idTipRegistro,$this->idSegSalud,$this->idTipoPlanilla,$this->idCodFiscal,$this->idAfp,$this->idCodRegional,$this->idUniEjecutora,$this->idNEC,$this->idNivel,$this->idEstablecimiento,$this->idRegLaboral,$this->idTipServidor,$this->idNumMagist,$this->idGpoRemunerativo,$this->idhatEmb,$this->idCargoOrigen,$this->idNivelOrigen,$this->idPalMagist,$this->idDirEncargo,$this->codModular,$this->fecIngAdmPubEmpleado,$this->fecIngMedEmpleado,$this->fecCeseEmpleado,$this->infCompEmpleado,$this->fecHabEmpleado,$this->fecDesEmpleado,$this->fecFallEmpleado,$this->valPorEmpleado,$this->fecValEmpleado,$this->docRefEmpleado,$this->numSegSaludEmpleado,$this->eVidaEmpleado,$this->CUSPPEmpleado,$this->fecAfiPenEmpleado,$this->fecDevPenEmpleado,$this->plazaEmpleado,$this->tipPlazaEmpleado,$this->asigInserEmpleado,$this->diasTrabEmpleado,$this->numDepEmpleado,$this->numDecEmpleado,$this->licDiasEmpleado,$this->tipServEmpleado,$this->fecIniLicEmpleado,$this->insasitEmpleado,$this->permisosEmpleado,$this->huelgasEmpleado,$this->leyMenEmpleado,$this->leyPerEmpleado,$this->cadPresupEmpleado,$this->ctaEmpleado,$request['preG']);
		
	
	
		
		$objEmpleado->cerrarConexion();
		//$request['preG']
		
		
		if ($tablaResultado ) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('Empleado.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'Empleado' );
		$opcion = $request ['opcion'];
		$this->inicializarCombos();
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter('btnPreG', '1');
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		
		$this->ver('Empleado.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objEmpleado = new Empleado ();
		$tablaResultado = $objEmpleado->actualizarEmpleado($this->idEmpleado,$this->idPersona,$this->idSituacion,$this->idTipRegistro,$this->idSegSalud,$this->idTipoPlanilla,$this->idCodFiscal,$this->idAfp,$this->idCodRegional,$this->idUniEjecutora,$this->idNEC,$this->idNivel,$this->idEstablecimiento,$this->idRegLaboral,$this->idTipServidor,$this->idNumMagist,$this->idGpoRemunerativo,$this->idhatEmb,$this->idCargoOrigen,$this->idNivelOrigen,$this->idPalMagist,$this->idDirEncargo,$this->codModular,$this->fecIngAdmPubEmpleado,$this->fecIngMedEmpleado,$this->fecCeseEmpleado,$this->infCompEmpleado,$this->fecHabEmpleado,$this->fecDesEmpleado,$this->fecFallEmpleado,$this->valPorEmpleado,$this->fecValEmpleado,$this->docRefEmpleado,$this->numSegSaludEmpleado,$this->eVidaEmpleado,$this->CUSPPEmpleado,$this->fecAfiPenEmpleado,$this->fecDevPenEmpleado,$this->plazaEmpleado,$this->tipPlazaEmpleado,$this->asigInserEmpleado,$this->diasTrabEmpleado,$this->numDepEmpleado,$this->numDecEmpleado,$this->licDiasEmpleado,$this->tipServEmpleado,$this->fecIniLicEmpleado,$this->insasitEmpleado,$this->permisosEmpleado,$this->huelgasEmpleado,$this->leyMenEmpleado,$this->leyPerEmpleado,$this->cadPresupEmpleado,$this->ctaEmpleado,$request['preG'],$this->idEmpleado);
		$objEmpleado->cerrarConexion();
		$this->inicializarCombos();
		$this->setParameter('btnPreG', '1');

		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'Empleado.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'Empleado' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		
		$objEmpleado = new Empleado ();
		$tablaResultado = $objEmpleado->consultarEmpleadoXidEmpleadoedi($this->id);
		$objEmpleado->cerrarConexion();
		
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 

			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verEmpleado.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->inicializarCombos();
				$this->setParameter('btnPreA', '1');
				$this->ver('Empleado.tpl');
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
		$objEmpleado = new Empleado ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idEmpleado) {
			$tablaResultado = $objEmpleado->eliminarEmpleado($idEmpleado);
		}
		$objEmpleado->cerrarConexion();
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
		$this->verEditar('../principal/principal.php',false);
	}
function ver($pagina, $formatoImpresion = false){
		if($formatoImpresion) {
			$this->setTemplateDir ( VISTA . 'Empleado/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('Empleado/'.$pagina);
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
		$objEmpleado = new Empleado ();
		$tablaResultado = $objEmpleado->consultarEmpleadoXidEmpleado($this->id);
		$objEmpleado->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verEmpleado.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
	function inicializarCombos()
    {
		//situacion
        $objSituacion= new Situacion();
        $tablaSituacion = Enumerado::tabla2enumerado($objSituacion->consultarSituacion(), '1', 0);
        $this->setParameter('tablaSituacion', $tablaSituacion);
        $objSituacion->cerrarConexion();


		// tipo Registro
		$objTipRegistro= new TipRegistro();
        $tablaTipRegistro = Enumerado::tabla2enumerado($objTipRegistro->consultarTipRegistro(), '1', 0);
        $this->setParameter('tablaTipRegistro', $tablaTipRegistro);
        $objTipRegistro->cerrarConexion();

		//Seguro de Salud
		$objSegSalud= new SegSalud();
        $tablaSegSalud = Enumerado::tabla2enumerado($objSegSalud->consultarSegSalud(), '1', 0);
        $this->setParameter('tablaSegSalud', $tablaSegSalud);
        $objSegSalud->cerrarConexion();

		//Tipo PLanilla
		$objTipoPlanilla= new TipoPlanilla();
        $tablaTipoPlanilla = Enumerado::tabla2enumerado($objTipoPlanilla->consultarTipoPlanilla(), '1', 0);
        $this->setParameter('tablaTipoPlanilla', $tablaTipoPlanilla);
        $objTipoPlanilla->cerrarConexion();

		//Codigo Fiscal --

		$objCodFiscal= new CodFiscal();
        $tablaCodFiscal = Enumerado::tabla2enumerado($objCodFiscal->consultarCodigoFiscal(), '1', 0);
        $this->setParameter('tablaCodFiscal', $tablaCodFiscal);
        $objCodFiscal->cerrarConexion();

		//Afp Empleado  

		$objAfp= new Afp();
        $tablaAfp = Enumerado::tabla2enumerado($objAfp->consultarAfp(), '1', 0);
        $this->setParameter('tablaAfp', $tablaAfp);
        $objAfp->cerrarConexion();


		//Cod Regional  -- 

		$objCodRegional= new CodRegional();
        $tablaCodRegional = Enumerado::tabla2enumerado($objCodRegional->consultarCodigoRegional(), '1', 0);
        $this->setParameter('tablaCodRegional', $tablaCodRegional);
        $objCodRegional->cerrarConexion();

		//Unidad Ejecutora

		$objUniEjecutora= new UniEjecutora();
        $tablaUniEjecutora = Enumerado::tabla2enumerado($objUniEjecutora->consultarUniEjecutora(), '1', 0);
        $this->setParameter('tablaUniEjecutora', $tablaUniEjecutora);
        $objUniEjecutora->cerrarConexion();


		//NEC
		$objNEC= new NEC();
        $tablaNEC = Enumerado::tabla2enumerado($objNEC->consultarNEC(), '1', 0);
        $this->setParameter('tablaNEC', $tablaNEC);
        $objNEC->cerrarConexion();


		//NIVEL
		$objNivel= new Nivel();
        $tablaNivel = Enumerado::tabla2enumerado($objNivel->consultarNivel(), '1', 0);
        $this->setParameter('tablaNivel', $tablaNivel);
        $objNivel->cerrarConexion();

		//Establecimiento
		$objEstablecimiento= new Establecimiento();
        $tablaEstablecimiento = Enumerado::tabla2enumerado($objEstablecimiento->consultarEstablecimiento(), '1', 0);
        $this->setParameter('tablaEstablecimiento', $tablaEstablecimiento);
        $objEstablecimiento->cerrarConexion();


		// REG LABORAL
		$objRegLaboral= new RegLaboral();
        $tablaRegLaboral = Enumerado::tabla2enumerado($objRegLaboral->consultarRegLaboral(), '1', 0);
        $this->setParameter('tablaRegLaboral', $tablaRegLaboral);
        $objRegLaboral->cerrarConexion();

		// Tipo Servidor
		$objTipServidor= new TipServidor();
        $tablaTipServidor = Enumerado::tabla2enumerado($objTipServidor->consultarTipServidor(), '1', 0);
        $this->setParameter('tablaTipServidor', $tablaTipServidor);
        $objTipServidor->cerrarConexion();

		// Num Magis 
		$objNumMagist= new NumMagist();
        $tablaNumMagist = Enumerado::tabla2enumerado($objNumMagist->consultarNumMagist(), '1', 0);
        $this->setParameter('tablaNumMagist', $tablaNumMagist);
        $objNumMagist->cerrarConexion();


		// Grupo Remunerativo  
		$objGpoRemunerativo= new GpoRemunerativo();
        $tablaGpoRemunerativo = Enumerado::tabla2enumerado($objGpoRemunerativo->consultarGpoRemunerativo(), '1', 0);
        $this->setParameter('tablaGpoRemunerativo', $tablaGpoRemunerativo);
        $objGpoRemunerativo->cerrarConexion();

		//Hat EMb
		$objHatEmb= new HatEmb();
        $tablaHatEmb = Enumerado::tabla2enumerado($objHatEmb->consultarHatEmb(), '1', 0);
        $this->setParameter('tablaHatEmb', $tablaHatEmb);
        $objHatEmb->cerrarConexion();

		//Cargo Origen --falta crud

		$objCargoOrigen= new CargoOrigen();
        $tablaCargoOrigen = Enumerado::tabla2enumerado($objCargoOrigen->consultarCargoOrigen(), '1', 0);
        $this->setParameter('tablaCargoOrigen', $tablaCargoOrigen);
        $objCargoOrigen->cerrarConexion();

		//Nivel Origen --

		$objNivelOrigen= new NivelOrigen();
        $tablaNivelOrigen = Enumerado::tabla2enumerado($objNivelOrigen->consultarNivelOrigen(), '1', 0);
        $this->setParameter('tablaNivelOrigen', $tablaNivelOrigen);
        $objNivelOrigen->cerrarConexion();

		//Pal Magist --

		$objPalMagist=  new PalMagist();
        $tablaPalMagist = Enumerado::tabla2enumerado($objPalMagist->consultarPalMagist(), '1', 0);
        $this->setParameter('tablaPalMagist', $tablaPalMagist);
        $objPalMagist->cerrarConexion();

		//Dir Cargo Empleado -falta Crud

		
		$objDirEncargo=  new DirEncargo();
        $tablaDirEncargo = Enumerado::tabla2enumerado($objDirEncargo->consultarDirEncargo(), '1', 0);
        $this->setParameter('tablaDirEncargo', $tablaDirEncargo);
        $objDirEncargo->cerrarConexion();

		


	}
	
}      

?>