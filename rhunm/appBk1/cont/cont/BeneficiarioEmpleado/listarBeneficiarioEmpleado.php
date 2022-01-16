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
require_once (MOD . 'Beneficiario.php');
require_once (MOD . 'Empleado.php');
require_once (MOD . 'BeneficiarioEmpleado.php');
require_once (MOD . 'Enumerado.php');

class principalBeneficiarioEmpleado extends Controller
{

    
    private $opt;

    function principalBeneficiarioEmpleado()
    {
        parent::__construct();
        $this->campos = 'idBeneficiarioEmpleado,idBeneficiario,idEmpleado,estado,dniBeneficiario,nomBeneficiario,apeBeneficiario,dniEmpleado,apeEmpleado,nomEmpleado';
        $this->modelo = 'BeneficiarioEmpleado';
        $this->modulo = 'BeneficiarioEmpleado ';
        $this->setTemplateDir(TEMPLATE);
        $this->asignarConstantes();
        $this->setParameter('MOD', $this->modelo);
    }

    function listar($request, $session)
    {
        $this->llamadoXajax('BeneficiarioEmpleado');
        $this->setParameter('etiquetaModulo', 'Listar' . ' ' . $this->modulo);
        $this->setParameterPath('urlImp', 'base/BeneficiarioEmpleado/imprimir');
        $this->ver('listarBeneficiarioEmpleado.tpl');
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
  

    function guardar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, $this->campos);
        $objBeneficiarioEmpleado = new BeneficiarioEmpleado();
        $tablaResultado = $objBeneficiarioEmpleado->agregarBeneficiarioEmpleado($this->idBeneficiarioEmpleado,$this->idEmpleado,$this->idBeneficiario,$this->estado);
        $objBeneficiarioEmpleado->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_INGRESAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_INGRESAR;
            $this->setParameter('error', $error);
            $this->asignarParametrosError($request, 'g', $this->modelo, 'guardar', '', $this->campos);
            $this->ver('BeneficiarioEmpleado.tpl');
        }
    }
    

	function eliminar($request,$session){
		$tablaResultado = false;
		$ids = $request['ids'];
		if ($ids == null || $ids == '') {
			return 0;
		}
		$objBeneficiario = new BeneficiarioEmpleado ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idBeneficiario) {
			$tablaResultado = $objBeneficiario->eliminarBeneficiarioEmpleado($idBeneficiario);
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
		$objBeneficiario = new BeneficiarioEmpleado ();
		$tablaResultado = $objBeneficiario->actualizarBeneficiarioEmpleado($this->idBeneficiario,$this->idEmpleado,$this->idBeneficiario,$this->estado,$this->idBeneficiarioEmpleado);
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
    function ingresar($request, $session)
    {
        $this->llamadoXajax('BeneficiarioEmpleado');
        $opcion = $request['opcion'];
        
        $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
        $this->setParameterPath('urlImp', '');
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        $this->ver('BeneficiarioEmpleado.tpl');
    }

    function consultar($request, $session)
    {
        $this->verEditar($request, $session, true);
    }
   
    function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'BeneficiarioEmpleado' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		
		$objBeneficiarioEmpleado = new BeneficiarioEmpleado ();
		$tablaResultado = $objBeneficiarioEmpleado->buscarBeneficiarioEmpleadoMultixId($this->id);
		$objBeneficiarioEmpleado->cerrarConexion();
		
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 

			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verBeneficiarioEmpleado.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->inicializarCombos();
				$this->ver('BeneficiarioEmpleado.tpl');
			}
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}

	

    function cancelar($request, $session)
    {
        $this->listar($request, $session);
    }

    function ver($pagina, $formatoImpresion = false){
		if($formatoImpresion) {
			$this->setTemplateDir ( VISTA . 'BeneficiarioEmpleado/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('BeneficiarioEmpleado/'.$pagina);
		}
	}
	

   
    

    function inicializarCombos()
    {

    }

}
?>