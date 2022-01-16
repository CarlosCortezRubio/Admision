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
require_once (MOD . 'Afp.php');
class principalAfp extends Controller
{

    private $opt;

    function principalAfp()
    {
        parent::__construct();
        $this->campos = 'idAfp,codAfp,nomAfp';
        $this->modelo = 'Afp';
        $this->modulo = 'Afp';
        $this->setTemplateDir(TEMPLATE);
        $this->asignarConstantes();
        $this->setParameter('MOD', $this->modelo);
    }

    function listar($request, $session)
    {
        $this->llamadoXajax('Afp');
        $this->setParameter('etiquetaModulo', 'Listar' . ' ' . $this->modulo);
        $this->setParameterPath('urlImp', 'base/Afp/imprimir');
        $this->ver('listarAfp.tpl');
    }

    function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'Afp' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		
		$objAfp = new Afp ();
		$tablaResultado = $objAfp->consultarCodigoXIdAfp($this->id);
		$objAfp->cerrarConexion();


		
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 

			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verAfp.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
		
				$this->ver('Afp.tpl');
			}
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}

	
	

    function guardar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, $this->campos);
        $objAfp = new Afp();
        
        $tablaResultado = $objAfp->agregarAfp($this->idAfp,$this->codAfp,$this->nomAfp);
        $objAfp->cerrarConexion();
        
       

        if ($tablaResultado >0 ) {
            $exito = Messages::EXITO_INGRESAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_INGRESAR;
            $this->setParameter('error', $error);
            $this->asignarParametrosError($request, 'g', $this->modelo, 'guardar', '', $this->campos);
            $this->ver('Afp.tpl');
        }
    }
    function consultar($request, $session)
    {
        $this->verEditar($request, $session, true);
    }
    
    function agregarAfp() {
        //    dump($request);die();
            //    $this->llamadoXajax();
            $this->llamadoXajax ( 'Afp' );
            $this->ver ( '../Afp/Afp.tpl' );
          }

	function eliminar($request,$session){
		$tablaResultado = false;
		$ids = $request['ids'];
		if ($ids == null || $ids == '') {
			return 0;
		}
		$objCodFical = new Afp ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idAfp) {
			$tablaResultado = $objCodFical->eliminarAfp($idAfp);
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
		$objAfp = new Afp();
		$tablaResultado = $objAfp->actualizarAfp($this->idAfp,$this->codAfp,$this->nomAfp,$this->idAfp);
		$objAfp->cerrarConexion();
		
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'Afp.tpl' );
        }
    }
    function ingresar($request, $session)
    {
        $this->llamadoXajax('Afp');
        $opcion = $request['opcion'];
        $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
        
        $this->setParameterPath('urlImp', '');
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        $this->ver('Afp.tpl');
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
   
   

    function cancelar($request, $session)
    {
        $this->listar($request, $session);
    }

    function ver($pagina, $formatoImpresion = false){
		if($formatoImpresion) {
			$this->setTemplateDir ( VISTA . 'Afp/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('Afp/'.$pagina);
		}
	}
	

   
    



}

?>