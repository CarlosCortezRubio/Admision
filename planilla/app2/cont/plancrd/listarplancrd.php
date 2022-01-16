<?php
/** 
 * @file plancrd.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla PlanCrd 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 08/05/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'PlanCrd.php');
require_once (MOD . 'Enumerado.php');

class principalPlanCrd extends Controller
{

    private $opt;

    // Atributos de
    // private $idPlanCrd;
    // private $ape1PlanCrd;
    // private $ape2PlanCrd;
    // private $nom1PlanCrd;
    // private $nacPlanCrd;
    // private $dniPlanCrd;
    // private $fecIngPlanCrd;
    // private $eraDocPlanCrd;
    // private $incDespPlanCrd;
    // private $gdoAcadPlanCrd;
    // private $mencPlanCrd;
    // private $univMayGPlanCrd;
    // private $paisPlanCrd;
    // private $preGPlanCrd;
    // private $maePlanCrd;
    // private $docPlanCrd;
    // private $sedesClasesPlanCrd;
    // private $catDocPlanCrd;
    // private $dedDocPlanCrd;
    // private $clasesPlanCrd;
    // private $otrasActPlanCrd;
    // private $totHorSemPlanCrd;
    // private $rzaInvPlanCrd;
    // private $enDinaPlanCrd;
    // private $perAcadPlanCrd;
    // private $comPlanCrd;
    function principalPlanCrd()
    {
        parent::__construct();
        $this->campos = 'idPlanCrd,ape1PlanCrd,ape2PlanCrd,nom1PlanCrd,nacPlanCrd,dniPlanCrd,fecIngPlanCrd,eraDocPlanCrd,incDespPlanCrd,gdoAcadPlanCrd,mencPlanCrd,univMayGPlanCrd,paisPlanCrd,preGPlanCrd,maePlanCrd,docPlanCrd,sedesClasesPlanCrd,catDocPlanCrd,dedDocPlanCrd,clasesPlanCrd,otrasActPlanCrd,totHorSemPlanCrd,rzaInvPlanCrd,enDinaPlanCrd,perAcadPlanCrd,comPlanCrd';
        $this->modelo = 'PlanCrd';
        $this->modulo = 'PlanCrd';
        $this->setTemplateDir(TEMPLATE);
        $this->asignarConstantes();
        $this->setParameter('MOD', $this->modelo);
    }

    function listar($request, $session)
    {
        $this->llamadoXajax('PlanCrd');
        $this->setParameter('etiquetaModulo', 'Listar' . ' ' . $this->modulo);
        $this->setParameterPath('urlImp', 'base/PlanCrd/imprimir');
        $this->ver('listarPlanCrd.tpl');
    }

    function guardar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, $this->campos);
        $objPlanCrd = new PlanCrd();
        $tablaResultado = $objPlanCrd->agregarPlanCrd($this->idPlanCrd, $this->ape1PlanCrd, $this->ape2PlanCrd, $this->nom1PlanCrd, $this->nacPlanCrd, $this->dniPlanCrd, $this->fecIngPlanCrd, $this->eraDocPlanCrd, $this->incDespPlanCrd, $this->gdoAcadPlanCrd, $this->mencPlanCrd, $this->univMayGPlanCrd, $this->paisPlanCrd, $this->preGPlanCrd, $this->maePlanCrd, $this->docPlanCrd, $this->sedesClasesPlanCrd, $this->catDocPlanCrd, $this->dedDocPlanCrd, $this->clasesPlanCrd, $this->otrasActPlanCrd, $this->totHorSemPlanCrd, $this->rzaInvPlanCrd, $this->enDinaPlanCrd, $this->perAcadPlanCrd, $this->comPlanCrd);
        $objPlanCrd->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_INGRESAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_INGRESAR;
            $this->setParameter('error', $error);
            $this->asignarParametrosError($request, 'g', $this->modelo, 'guardar', '', $this->campos);
            $this->ver('PlanCrd.tpl');
        }
    }

    function ingresar($request, $session)
    {
        $this->llamadoXajax('PlanCrd');
        $opcion = $request['opcion'];
        $this->inicializarCombos();
        $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
        $this->setParameterPath('urlImp', '');
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        $this->ver('PlanCrd.tpl');
    }

    function actualizar($request, $session)
    {
        $this->inicializarAtributos($request, $this->campos);
        $objPlanCrd = new PlanCrd();
        $tablaResultado = $objPlanCrd->actualizarPlanCrd($this->idPlanCrd, $this->ape1PlanCrd, $this->ape2PlanCrd, $this->nom1PlanCrd, $this->nacPlanCrd, $this->dniPlanCrd, $this->fecIngPlanCrd, $this->eraDocPlanCrd, $this->incDespPlanCrd, $this->gdoAcadPlanCrd, $this->mencPlanCrd, $this->univMayGPlanCrd, $this->paisPlanCrd, $this->preGPlanCrd, $this->maePlanCrd, $this->docPlanCrd, $this->sedesClasesPlanCrd, $this->catDocPlanCrd, $this->dedDocPlanCrd, $this->clasesPlanCrd, $this->otrasActPlanCrd, $this->totHorSemPlanCrd, $this->rzaInvPlanCrd, $this->enDinaPlanCrd, $this->perAcadPlanCrd, $this->comPlanCrd, $this->idPlanCrd);
        $objPlanCrd->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_ACTUALIZAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_ACTUALIZAR;
            $this->asignarParametrosError($request, 'm', $this->modelo, 'actualizar', '', $this->campos);
            $this->setParameter('opt', 'mr');
            $this->ver('PlanCrd.tpl');
        }
    }

    function verEditar($request, $session, $opcionMod = false)
    {
        $this->llamadoXajax('PlanCrd');
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $this->inicializarCombos();
        $objPlanCrd = new PlanCrd();
        $tablaResultado = $objPlanCrd->consultarPlanCrdXidPlanCrd($this->id);
        $objPlanCrd->cerrarConexion();
        if ($tablaResultado) {
            $tablaResultado = $tablaResultado[0];
            if ($opcionMod) {
                $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
                $this->ver('verPlanCrd.tpl', true);
            } else {
                $this->asignarParametros($request, 'mr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Editar' . ' ' . $this->modulo);
                $this->ver('PlanCrd.tpl');
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
        $objPlanCrd = new PlanCrd();
        $arreglo_ids = split(',', $ids);
        foreach ($arreglo_ids as $idPlanCrd) {
            $tablaResultado = $objPlanCrd->eliminarPlanCrd($idPlanCrd);
        }
        $objPlanCrd->cerrarConexion();
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
            $this->setTemplateDir(VISTA . 'PlanCrd/');
            $this->goForward($pagina);
        } else {
            $this->visualizar('PlanCrd/' . $pagina);
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
        $objPlanCrd = new PlanCrd();
        $tablaResultado = $objPlanCrd->consultarPlanCrdXid($this->id);
        $objPlanCrd->cerrarConexion();
        if ($tablaResultado) {
            $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
            $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
            $this->ver('verPlanCrd.tpl', TRUE);
        } else {
            // $this->visualizar('principal/error.tpl');
        }
    }

    function inicializarCombos()
    {
        $tablaEraDocPlanCrd = array(
            1 => "Sí",
            2 => "No"
        );
        $this->setParameter('tablaEraDocPlanCrd', $tablaEraDocPlanCrd);

        $tablaIncDespPlanCrd = array(
            1 => "Sí",
            2 => "No"
        );
        $this->setParameter('tablaIncDespPlanCrd', $tablaIncDespPlanCrd);

        $tablaPreGPlanCrd = array(
            1 => "Sí",
            2 => "No"
        );
        $this->setParameter('tablaPreGPlanCrd', $tablaPreGPlanCrd);

        $tablaMaePlanCrd = array(
            1 => "Sí",
            2 => "No"
        );
        $this->setParameter('tablaMaePlanCrd', $tablaMaePlanCrd);

        $tablaDocPlanCrd = array(
            1 => "Sí",
            2 => "No"
        );
        $this->setParameter('tablaDocPlanCrd', $tablaDocPlanCrd);

        $tablaRzaInvPlanCrd = array(
            1 => "Sí",
            2 => "No"
        );
        $this->setParameter('tablaRzaInvPlanCrd', $tablaRzaInvPlanCrd);

        $tablaEnDinaPlanCrd = array(
            1 => "Sí",
            2 => "No"
        );
        $this->setParameter('tablaEnDinaPlanCrd', $tablaEnDinaPlanCrd);
        
        $tablaDni = array(
            1 => "DNI",
            2 => "Carnét de Estranjería"
        );
        $this->setParameter('tablaDni', $tablaDni);
        
        $tablaGrado = array(
            1 => "Doctor",
            2 => "Maestro",
            3 => "Bachiller",
            4 => "Sin Grado Académico"
        );
        $this->setParameter('tablaGrado', $tablaGrado);
        
        $tablaCat = array(
            1 => "Ordinario Principal",
            2 => "Ordinario Asociado",
            3 => "Ordinario Auxiliar",
            4 => "Extraordinario",
            5 => "Contratado"
        );
        $this->setParameter('tablaCat', $tablaCat);
        
        $tablaDed = array(
            1 => "Tiempo Completo",
            2 => "Tiempo Parcial",
            3 => "Dedicación Exclusiva"
        );
        $this->setParameter('tablaDed', $tablaDed);
    }
}
?>