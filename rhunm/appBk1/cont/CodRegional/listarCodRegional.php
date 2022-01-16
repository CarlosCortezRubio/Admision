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
require_once (MOD . 'CodRegional.php');
class principalCodRegional extends Controller
{

    private $opt;

    function principalCodRegional()
    {
        parent::__construct();
        $this->campos = 'idCodRegional,codCodRegional,nomCodRegional';
        $this->modelo = 'CodRegional';
        $this->modulo = 'CodRegional';
        $this->setTemplateDir(TEMPLATE);
        $this->asignarConstantes();
        $this->setParameter('MOD', $this->modelo);
    }

    function listar($request, $session)
    {
        $this->llamadoXajax('CodRegional');
        $this->setParameter('etiquetaModulo', 'Listar' . ' ' . $this->modulo);
        $this->setParameterPath('urlImp', 'base/CodRegional/imprimir');
        $this->ver('listarCodRegional.tpl');
    }

    function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'CodRegional' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		
		$objCodRegional = new CodRegional ();
		$tablaResultado = $objCodRegional->consultarCodigoXIdRegional($this->id);
		$objCodRegional->cerrarConexion();


		
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 

			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verCodRegional.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
		
				$this->ver('CodRegional.tpl');
			}
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}

	
	

    function guardar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, $this->campos);
        $objCodRegional = new CodRegional();
        
        $tablaResultado = $objCodRegional->agregarCodRegional($this->idCodRegional,$this->codCodRegional,$this->nomCodRegional);
        $objCodRegional->cerrarConexion();
        

        if ($tablaResultado >0 ) {
            $exito = Messages::EXITO_INGRESAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_INGRESAR;
            $this->setParameter('error', $error);
            $this->asignarParametrosError($request, 'g', $this->modelo, 'guardar', '', $this->campos);
            $this->ver('CodRegional.tpl');
        }
    }
    function consultar($request, $session)
    {
        $this->verEditar($request, $session, true);
    }
    
    function agregarCodRegional() {
        //    dump($request);die();
            //    $this->llamadoXajax();
            $this->llamadoXajax ( 'CodRegional' );
            $this->ver ( '../CodRegional/CodRegional.tpl' );
          }

	function eliminar($request,$session){
		$tablaResultado = false;
		$ids = $request['ids'];
		if ($ids == null || $ids == '') {
			return 0;
		}
		$objCodFical = new CodRegional ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idCodRegional) {
			$tablaResultado = $objCodFical->eliminarCodRegional($idCodRegional);
		}
		$objCodFical->cerrarConexion();
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
		$objCodRegional = new CodRegional ();
		$tablaResultado = $objCodRegional->actualizarCodRegional($this->idCodRegional,$this->codCodRegional,$this->nomCodRegional,$this->idCodRegional);
		
        $objCodRegional->cerrarConexion();
        
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'CodRegional.tpl' );
        }
    }
    function ingresar($request, $session)
    {
        $this->llamadoXajax('CodRegional');
        $opcion = $request['opcion'];
        $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
        
        $this->setParameterPath('urlImp', '');
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        $this->ver('CodRegional.tpl');
    }

    
   
   

    function cancelar($request, $session)
    {
        $this->listar($request, $session);
    }

    function ver($pagina, $formatoImpresion = false){
		if($formatoImpresion) {
			$this->setTemplateDir ( VISTA . 'CodRegional/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('CodRegional/'.$pagina);
		}
	}
	

   
    



}

?>