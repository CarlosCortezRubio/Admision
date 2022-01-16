<?php
/** 
 * @file persona.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Persona 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 18/10/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'Persona.php');
require_once (MOD . 'Enumerado.php');
require_once (MOD . 'Genero.php');
require_once (MOD . 'EdoCivil.php');
require_once (MOD . 'Banco.php');
require_once (MOD . 'TipoPersona.php');
require_once (MOD . 'EdoRegistro.php');

class principalPersona extends Controller
{
    private $opt;
    function principalPersona()
    {
        parent::__construct();
        $this->campos = 'idPersona,idGenero,idEdoCivil,idBanco,idTipoPersona,idEdoRegistro,tipDocPersona,docPersona,nom1Persona,nom2Persona,ape1Persona,ape2Persona,fecNacPersona,tel1DomPersona,tel2DomPersona,emaDomPersona,codModularPersona,planillaPersona,tipRegPersona,resPenDefPersona,fecRes,ctaBancoPersona,fntFinancPersona,planilla2Persona,idBenefactorPersona';
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
        $tablaResultado = $objPersona->agregarPersona($this->idPersona, $this->idGenero, $this->idEdoCivil, $this->idBanco, $this->idTipoPersona, $this->idEdoRegistro, $this->tipDocPersona, $this->docPersona, $this->nom1Persona, $this->nom2Persona, $this->ape1Persona, $this->ape2Persona, $this->fecNacPersona, $this->tel1DomPersona, $this->tel2DomPersona, $this->emaDomPersona, $this->codModularPersona, $this->planillaPersona, $this->tipRegPersona, $this->resPenDefPersona, $this->fecRes, $this->ctaBancoPersona, $this->fntFinancPersona, $this->planilla2Persona, $this->idBenefactorPersona);
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
        $this->inicializarCombos();
        $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
        $this->setParameterPath('urlImp', '');
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        $this->ver('Persona.tpl');
    }

    function actualizar($request, $session)
    {
        $this->inicializarAtributos($request, $this->campos);
        $objPersona = new Persona();
        $tablaResultado = $objPersona->actualizarPersona($this->idPersona, $this->idGenero, $this->idEdoCivil, $this->idBanco, $this->idTipoPersona, $this->idEdoRegistro, $this->tipDocPersona, $this->docPersona, $this->nom1Persona, $this->nom2Persona, $this->ape1Persona, $this->ape2Persona, $this->fecNacPersona, $this->tel1DomPersona, $this->tel2DomPersona, $this->emaDomPersona, $this->codModularPersona, $this->planillaPersona, $this->tipRegPersona, $this->resPenDefPersona, $this->fecRes, $this->ctaBancoPersona, $this->fntFinancPersona, $this->planilla2Persona, $this->idBenefactorPersona, $this->idPersona);
        $objPersona->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_ACTUALIZAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
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
        $this->inicializarCombos();
        $objPersona = new Persona();
        $tablaResultado = $objPersona->consultarPersonaXidPersona($this->id);
        $objPersona->cerrarConexion();
        if ($tablaResultado) {
//             dump($tablaResultado);
            $tablaResultado = $tablaResultado[0];
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
        $arreglo_ids = explode(',', $ids);
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

    function inicializarCombos()
    {
        $objGenero = new Genero();
        $tablaGenero = Enumerado::tabla2enumerado($objGenero->consultarGenero(), '1', 0);
        $this->setParameter('tablaGenero', $tablaGenero);
        $objGenero->cerrarConexion();
        
        $objEdoCivil = new EdoCivil();
        $tablaEdoCivil = Enumerado::tabla2enumerado($objEdoCivil->consultarEdoCivil(), '1', 0);
        $this->setParameter('tablaEdoCivil', $tablaEdoCivil);
        $objEdoCivil->cerrarConexion();
        
        $objBanco = new Banco();
        $tablaBanco = Enumerado::tabla2enumerado($objBanco->consultarBanco(), '2', 1);
        $this->setParameter('tablaBanco', $tablaBanco);
//         dump($objBanco->consultarBanco());die();
        $objBanco->cerrarConexion();
        
        
        
        $objTipoPersona = new TipoPersona();
        $tablaTipoPersona = Enumerado::tabla2enumerado($objTipoPersona->consultarTipoPersona(), '2', 0);
        $this->setParameter('tablaTipoPersona', $tablaTipoPersona);
        $objTipoPersona->cerrarConexion();
        
        $objEdoRegistro = new EdoRegistro();
        $tablaEdoRegistro = Enumerado::tabla2enumerado($objEdoRegistro->consultarEdoRegistro(), '1', 0);
        $this->setParameter('tablaEdoRegistro', $tablaEdoRegistro);
        $objEdoRegistro->cerrarConexion();
        
        $tablaTipDocPersona = array(
            1 => "aaa",
            2 => "Subsuelo",
            3 => "Subsuelo"
        );
        $this->setParameter('tablaTipDocPersona', $tablaTipDocPersona);
    }
}
?>