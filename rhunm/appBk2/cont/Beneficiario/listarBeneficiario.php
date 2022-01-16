<?php
/** 
 * @file persona.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Persona 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 11/08/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'Persona.php');
require_once (MOD . 'Beneficiario.php');

require_once (MOD . 'Empleado.php');
require_once (MOD . 'TipoCalcJud.php');
require_once (MOD . 'ModoPago.php');
require_once (MOD . 'Parentesco.php');
require_once (MOD . 'BeneficiarioEmpleado.php');
require_once (MOD . 'Enumerado.php');
class principalBeneficiario extends Controller
{

    private $opt;

    function principalBeneficiario()
    {
        parent::__construct();
        $this->campos = 'idBeneficiario,idTipoCalcJud,idModoPago,idParentesco,idPersona,CESSaludBeneficiario,tPensBeneficiario,plazaBeneficiario,leyendaBeneficiario,ctaDepBeneficiario,regJudicialBeneficiario,fecIniBeneficiario,fecFinBeneficiario,edoBeneficiario,nom1Persona,ape1Persona,dniPersona,nom1Empleado,dniEmpleado';
        $this->modelo = 'Beneficiario';
        $this->modulo = 'Beneficiario';
        $this->setTemplateDir(TEMPLATE);
        $this->asignarConstantes();
        $this->setParameter('MOD', $this->modelo);
    }

    function listar($request, $session)
    {
        $this->llamadoXajax('Beneficiario');
        $this->setParameter('etiquetaModulo', 'Listar' . ' ' . $this->modulo);
        $this->setParameterPath('urlImp', 'base/Beneficiario/imprimir');
        $this->ver('listarBeneficiario.tpl');
    }

    function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'Beneficiario' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		
		$objBeneficiario = new Beneficiario ();
		$tablaResultado = $objBeneficiario->consultarBeneficiarioXid($this->id);
		
        $objBeneficiario->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 

			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verBeneficiario.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
                $this->setParameter ( 'ocultar', '10');
				
				$this->inicializarCombos();
				$this->ver('Beneficiario.tpl');
			}
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}

	
	

    function guardar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, $this->campos);
        $objBeneficiario = new Beneficiario();
        $objBeneficiarioEmpleado= new BeneficiarioEmpleado();
        $tablaResultado = $objBeneficiario->agregarBeneficiario($this->idBeneficiario,$this->idTipoCalcJud,$this->idModoPago,$this->idParentesco,$this->idPersona,$this->CESSaludBeneficiario,$this->tPensBeneficiario,$this->plazaBeneficiario,$this->leyendaBeneficiario,$this->ctaDepBeneficiario,$this->regJudicialBeneficiario,$this->fecIniBeneficiario,$this->fecFinBeneficiario,$this->edoBeneficiario);
       //$request['preG']
        
        
        $utimoIdBeneficiario=$objBeneficiario->consultarUltimoIDsBeneficiario();
        $objBeneficiario->cerrarConexion();
        
        if($request['idEmpleado']>0){
            $tablaRsultado2 = $objBeneficiarioEmpleado->agregarBeneficiarioEmpleado('',$request['idEmpleado'],$utimoIdBeneficiario,'1');
             $objBeneficiarioEmpleado->cerrarConexion();
        }
       

        if ($tablaResultado > 0 &&  $tablaRsultado2>0) {
            $exito = Messages::EXITO_INGRESAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_INGRESAR;
            $this->setParameter('error', $error);
            $this->asignarParametrosError($request, 'g', $this->modelo, 'guardar', '', $this->campos);
            $this->ver('Beneficiario.tpl');
        }
    }
    function consultar($request, $session)
    {
        $this->verEditar($request, $session, true);
    }
    
    function agregarPersona() {
        //    dump($request);die();
            //    $this->llamadoXajax();
            $this->llamadoXajax ( 'Persona' );
            $this->ver ( '../Persona/Persona.tpl' );
          }

	function eliminar($request,$session){
		$tablaResultado = false;
		$ids = $request['ids'];
		if ($ids == null || $ids == '') {
			return 0;
		}
		$objBeneficiario = new Beneficiario ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idBeneficiario) {
			$tablaResultado = $objBeneficiario->eliminarBeneficiario($idBeneficiario);
		}
		$objBeneficiario->cerrarConexion();
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
    
    function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objBeneficiario = new Beneficiario ();
		$tablaResultado = $objBeneficiario->actualizarBeneficiario($this->idBeneficiario,$this->idTipoCalcJud,$this->idModoPago,$this->idParentesco,$this->idPersona,$this->CESSaludBeneficiario,$this->tPensBeneficiario,$this->plazaBeneficiario,$this->leyendaBeneficiario,$this->ctaDepBeneficiario,$this->regJudicialBeneficiario,$this->fecIniBeneficiario,$this->fecFinBeneficiario,$this->edoBeneficiario,$this->idBeneficiario);
		$objBeneficiario->cerrarConexion();
		$this->inicializarCombos();
		
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'Beneficiario.tpl' );
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
    function ingresar($request, $session)
    {
        $this->llamadoXajax('Beneficiario');
        $opcion = $request['opcion'];
        $this->inicializarCombos();
        $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
        
        $this->setParameterPath('urlImp', '');
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        $this->ver('Beneficiario.tpl');
    }

    
   
   

    function cancelar($request, $session)
    {
        $this->listar($request, $session);
    }

    function ver($pagina, $formatoImpresion = false){
		if($formatoImpresion) {
			$this->setTemplateDir ( VISTA . 'Beneficiario/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('Beneficiario/'.$pagina);
		}
	}
	

   
    

    function inicializarCombos()
    {
        $objTipoCalcJud= new TipoCalcJud();
        $tablaTipoCalcJud= Enumerado::tabla2enumerado($objTipoCalcJud->consultarTipoCalcJud(), '1', 0);
        $this->setParameter('tablaTipoCalcJud', $tablaTipoCalcJud);
        $objTipoCalcJud->cerrarConexion();
        
        
        $objModoPago = new ModoPago();
        $tablaModoPago = Enumerado::tabla2enumerado($objModoPago->consultarModoPago(), '1', 0);
        $this->setParameter('tablaModoPago', $tablaModoPago);
        $objModoPago->cerrarConexion();
       

        $objParentesco = new Parentesco();
        $tablaParentesco= Enumerado::tabla2enumerado($objParentesco->consultarParentesco(), '1', 0);
        $this->setParameter('tablaParentesco', $tablaParentesco);
        $objParentesco->cerrarConexion();

        


    }

}

?>