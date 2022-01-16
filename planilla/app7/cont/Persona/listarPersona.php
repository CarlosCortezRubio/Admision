<?php
/** 
 * @file persona.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Persona 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 12/03/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'Persona.php');
require_once (MOD . 'EdoCivil.php');
require_once (MOD . 'Genero.php');
require_once (MOD . 'GradoInst.php');
require_once (MOD . 'Enumerado.php');

class principalPersona extends Controller
{
    private $opt;
    function principalPersona()
    {
        parent::__construct();
        $this->campos = 'idPersona,idGenero,idEdoCivil,idGradoInst,nomPersona1,nomPersona2,apePersona1,apePersona2,cedPersona,nacPersona,rifPersona,fecNacPersona,movPersona,telPersona,emailPersona,fotPersona,fecIngAdmPub,dirPersona,numHijosPersona,numHijosCobranPersona,numHijosEspPersona,fecFallecimientoPersona,idConyuguePersona';
        $this->modelo = 'Persona';
        $this->modulo = 'Persona';
        $this->setTemplateDir(TEMPLATE);
        $this->asignarConstantes();
        $this->setParameter('MOD', $this->modelo);
    }

    function listar($request, $session)
    {
        $this->llamadoXajax('Persona');
        $this->setParameter('etiquetaModulo', 'Listar' . ' ' . $this->modulo);
        $this->setParameterPath('urlImp', 'base/Persona/imprimir');
        $this->ver('listarPersona.tpl');
    }

    function guardar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, $this->campos);
        $objPersona = new Persona();
        $tablaResultado = $objPersona->agregarPersona($this->idPersona, $this->idGenero, $this->idEdoCivil, $this->idGradoInst, $this->nomPersona1, $this->nomPersona2, $this->apePersona1, $this->apePersona2, $this->cedPersona, $this->nacPersona, $this->rifPersona, $this->fecNacPersona, $this->movPersona, $this->telPersona, $this->emailPersona, $this->fotPersona, $this->fecIngAdmPub, $this->dirPersona, $this->numHijosPersona, $this->numHijosCobranPersona, $this->numHijosEspPersona, $this->fecFallecimientoPersona, $this->idConyuguePersona);
        $objPersona->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_INGRESAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_INGRESAR;
            $this->setParameter('error', $error);
            $this->asignarParametrosError($request, 'g', $this->modelo, 'guardar', '', $this->campos);
            $this->ver('Persona.tpl');
        }
    }

    function ingresar($request, $session)
    {
        $this->llamadoXajax('Persona');
        $opcion = $request['opcion'];
        $this->inicializarCombos ();
        $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
        $this->setParameterPath('urlImp', '');
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        $this->ver('Persona.tpl');
    }

    function actualizar($request, $session)
    {
        $this->inicializarAtributos($request, $this->campos);
        $objPersona = new Persona();
        $tablaResultado = $objPersona->actualizarPersona($this->idPersona, $this->idGenero, $this->idEdoCivil, $this->idGradoInst, $this->nomPersona1, $this->nomPersona2, $this->apePersona1, $this->apePersona2, $this->cedPersona, $this->nacPersona, $this->rifPersona, $this->fecNacPersona, $this->movPersona, $this->telPersona, $this->emailPersona, $this->fotPersona, $this->fecIngAdmPub, $this->dirPersona, $this->numHijosPersona, $this->numHijosCobranPersona, $this->numHijosEspPersona, $this->fecFallecimientoPersona, $this->idConyuguePersona, $this->idPersona);
        $objPersona->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_ACTUALIZAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $this->inicializarCombos ();
            $error = Messages::ERROR_ACTUALIZAR;
            $this->asignarParametrosError($request, 'm', $this->modelo, 'actualizar', '', $this->campos);
            $this->setParameter('opt', 'mr');
            $this->ver('Persona.tpl');
        }
    }

    function verEditar($request, $session, $opcionMod = false)
    {
        $this->llamadoXajax('Persona');
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $objPersona = new Persona();
        $tablaResultado = $objPersona->consultarPersonaXidPersona($this->id);
        $objPersona->cerrarConexion();
        if ($tablaResultado) {
            $tablaResultado = $tablaResultado[0];
            $this->inicializarCombos ();
            if ($opcionMod) {
                $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
                $this->ver('verPersona.tpl', true);
            } else {
                $this->asignarParametros($request, 'mr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Editar' . ' ' . $this->modulo);
                $this->ver('Persona.tpl');
            }
        } else {
            // $this->visualizar('principal/error.tpl');
        }
    }

    function consultar($request, $session)
    {
        $this->verEditar($request, $session, true);
    }

    function eliminar($request, $session)
    {
        $tablaResultado = false;
        $ids = $request['ids'];
        if ($ids == null || $ids == '') {
            return 0;
        }
        $objPersona = new Persona();
        $arreglo_ids = split(',', $ids);
        foreach ($arreglo_ids as $idPersona) {
            $tablaResultado = $objPersona->eliminarPersona($idPersona);
        }
        $objPersona->cerrarConexion();
        if ($tablaResultado) {
            $exito = Messages::EXITO_ELIMINAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_ELIMINAR;
            $this->setParameter('error', $error);
            $this->listar($request, $session);
        }
    }

    function cancelar($request, $session)
    {
        $this->listar($request, $session);
    }

    function home($request, $session)
    {
        $this->verEditar('../principal/principal.php');
    }

    function ver($pagina, $formatoImpresion = false)
    {
        if ($formatoImpresion) {
            $this->setTemplateDir(VISTA . 'Persona/');
            $this->goForward($pagina);
        } else {
            $this->visualizar('Persona/' . $pagina);
        }
    }

    function imprimir($request, $session)
    {
        $mod = ucfirst(@$request['sec']);
        $opt = '';
        if (isset($request['id'])) {
            $opt = $request['id'];
        }
        $cad = trim('imp' . $mod . '.php');
        include $cad;
    }

    function ventanaConsultar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $objPersona = new Persona();
        $tablaResultado = $objPersona->consultarPersonaXid($this->id);
        $objPersona->cerrarConexion();
        if ($tablaResultado) {
            $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
            $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
            $this->ver('verPersona.tpl', TRUE);
        } else {
            // $this->visualizar('principal/error.tpl');
        }
    }
    function inicializarCombos() {
        $objEdocivil = new Edocivil ();
        $tablaEdocivil = Enumerado::tabla2enumerado ( $objEdocivil->consultarEdocivil (), 'nomEdoCivil', 0 );
        $objEdocivil->cerrarConexion ();
        $this->setParameter ( 'tablaEdocivil', $tablaEdocivil );
//         dump($tablaEdocivil);die();
        $objGenero = new Genero ();
        $tablaGenero = Enumerado::tabla2enumerado ( $objGenero->consultarGenero (), 'nomGenero', 0 );
        $this->setParameter ( 'tablaGenero', $tablaGenero );
        $objGenero->cerrarConexion ();
        
        $objGradoInst = new GradoInst ();
        $tablaGradoInst = Enumerado::tabla2enumerado ( $objGradoInst->consultarGradoInst (), 'nomGradoInst', 0 );
        $this->setParameter ( 'tablaGradoInst', $tablaGradoInst );
        $objGradoInst->cerrarConexion ();
    }
}
?>