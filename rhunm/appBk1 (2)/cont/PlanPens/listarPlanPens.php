<?php
/** 
 * @file planpens.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla PlanPens 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 07/04/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'PlanPens.php');
require_once (MOD . 'Enumerado.php');

class principalPlanPens extends Controller
{

    private $opt;

    // Atributos de
    function principalPlanPens()
    {
        parent::__construct();
        $this->campos = 'anio,mes,idPlanPens,dniPlanPens,apellidos_y_nombresPlanPens,fecha_de_nacimientoPlanPens,sexoPlanPens,codigo_modularPlanPens,planillaPlanPens,tipo_de_regimenPlanPens,resolucion_de_pension_definitivaPlanPens,a_partir_dePlanPens,bancoPlanPens,cuenta_bancariaPlanPens,fuente_de_financiamientoPlanPens,planilla2PlanPens,total_imponiblePlanPens,total_haberPlanPens,total_descuentosPlanPens,total_liquidoPlanPens,aguinaldoPlanPens,basicaPlanPens,bonif_personalPlanPens,ael25671PlanPens,aeds081PlanPens,tphPlanPens,bonif_familiarPlanPens,du080_04PlanPens,refrig_y_moviPlanPens,du90_96PlanPens,ds19_94_pcmPlanPens,ds21_92_pcmPlanPens,bon_especialPlanPens,reunificadaPlanPens,igvPlanPens,cargsimulPlanPens,art18_dl_20530PlanPens,du073_97PlanPens,du011_99PlanPens,du037_94PlanPens,ds016PlanPens,ds017PlanPens,ds110_2006PlanPens,ds039_2007PlanPens,ds120_2008PlanPens,ds014_2009PlanPens,ds077_2010PlanPens,ds031_2011PlanPens,ds024_2012PlanPens,ds004_2013PlanPens,ds003_2014PlanPens,ds002_2015PlanPens,ds005_2016PlanPens,ds020_2017PlanPens,ds011_2018PlanPens,ds009_2019PlanPens,ds006_2020PlanPens,ipssPlanPens,cafaePlanPens,prderrmaPlanPens,escolaridadPlanPens,decreto_supermo_20_21PlanPens';
        $this->modelo = 'PlanPens';
        $this->modulo = 'PlanPens';
        $this->setTemplateDir(TEMPLATE);
        $this->asignarConstantes();
        $this->setParameter('MOD', $this->modelo);
    }

    function listar($request, $session)
    {
//         $_SESSION ['usuarioid'] = 1;
//         $_SESSION ['login'] = 'Admin';
//         $_SESSION ['nombre'] = 'Administrador del Sistema';
//         $_SESSION ['menuUsu'] = 'menuusugeneral';
//         $_SESSION ['ID_PERSONA'] = 1;
//         $_SESSION ['rolId'] = 2;

        $this->inicializarCombos();
        $this->setParameter('idMes', date('m'));
        $this->setParameter('idAnio', date('Y'));
        $this->inicializarAtributos($request, $this->campos);
        $this->llamadoXajax('PlanPens');
        $this->setParameter('etiquetaModulo', 'Listar' . ' ' . $this->modulo);
        $this->setParameterPath('urlImp', 'base/PlanPens/imprimir');
        $this->ver('listarPlanPens.tpl');
    }

    function guardar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, $this->campos);
        $objPlanPens = new PlanPens();
        $tablaResultado = $objPlanPens->agregarPlanPens($this->idPlanPens, $this->dniPlanPens, $this->apellidos_y_nombresPlanPens, $this->fecha_de_nacimientoPlanPens, $this->sexoPlanPens, $this->codigo_modularPlanPens, $this->planillaPlanPens, $this->tipo_de_regimenPlanPens, $this->resolucion_de_pension_definitivaPlanPens, $this->a_partir_dePlanPens, $this->bancoPlanPens, $this->cuenta_bancariaPlanPens, $this->fuente_de_financiamientoPlanPens, $this->planilla2PlanPens, $this->total_imponiblePlanPens, $this->total_haberPlanPens, $this->total_descuentosPlanPens, $this->total_liquidoPlanPens, $this->aguinaldoPlanPens, $this->basicaPlanPens, $this->bonif_personalPlanPens, $this->ael25671PlanPens, $this->aeds081PlanPens, $this->tphPlanPens, $this->bonif_familiarPlanPens, $this->du080_04PlanPens, $this->refrig_y_moviPlanPens, $this->du90_96PlanPens, $this->ds19_94_pcmPlanPens, $this->ds21_92_pcmPlanPens, $this->bon_especialPlanPens, $this->reunificadaPlanPens, $this->igvPlanPens, $this->cargsimulPlanPens, $this->art18_dl_20530PlanPens, $this->du073_97PlanPens, $this->du011_99PlanPens, $this->du037_94PlanPens, $this->ds016PlanPens, $this->ds017PlanPens, $this->ds110_2006PlanPens, $this->ds039_2007PlanPens, $this->ds120_2008PlanPens, $this->ds014_2009PlanPens, $this->ds077_2010PlanPens, $this->ds031_2011PlanPens, $this->ds024_2012PlanPens, $this->ds004_2013PlanPens, $this->ds003_2014PlanPens, $this->ds002_2015PlanPens, $this->ds005_2016PlanPens, $this->ds020_2017PlanPens, $this->ds011_2018PlanPens, $this->ds009_2019PlanPens, $this->ds006_2020PlanPens, $this->ipssPlanPens, $this->cafaePlanPens, $this->prderrmaPlanPens, $this->escolaridadPlanPens, $this->decreto_supermo_20_21PlanPens,$this->anio,$this->mes);
        $objPlanPens->cerrarConexion();
        die();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_INGRESAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_INGRESAR;
            $this->setParameter('error', $error);
            $this->asignarParametrosError($request, 'g', $this->modelo, 'guardar', '', $this->campos);
            $this->ver('PlanPens.tpl');
        }
    }

    function ingresar($request, $session)
    {
        $this->inicializarCombos();
        $this->llamadoXajax('PlanPens');
        $opcion = $request['opcion'];
        $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
        $this->setParameterPath('urlImp', '');
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        $this->ver('PlanPens.tpl');
    }

    function actualizar($request, $session)
    {
        $this->inicializarCombos();
        $this->inicializarAtributos($request, $this->campos);
        $objPlanPens = new PlanPens();
        $tablaResultado = $objPlanPens->actualizarPlanPens($this->idPlanPens, $this->dniPlanPens, $this->apellidos_y_nombresPlanPens, $this->fecha_de_nacimientoPlanPens, $this->sexoPlanPens, $this->codigo_modularPlanPens, $this->planillaPlanPens, $this->tipo_de_regimenPlanPens, $this->resolucion_de_pension_definitivaPlanPens, $this->a_partir_dePlanPens, $this->bancoPlanPens, $this->cuenta_bancariaPlanPens, $this->fuente_de_financiamientoPlanPens, $this->planilla2PlanPens, $this->total_imponiblePlanPens, $this->total_haberPlanPens, $this->total_descuentosPlanPens, $this->total_liquidoPlanPens, $this->aguinaldoPlanPens, $this->basicaPlanPens, $this->bonif_personalPlanPens, $this->ael25671PlanPens, $this->aeds081PlanPens, $this->tphPlanPens, $this->bonif_familiarPlanPens, $this->du080_04PlanPens, $this->refrig_y_moviPlanPens, $this->du90_96PlanPens, $this->ds19_94_pcmPlanPens, $this->ds21_92_pcmPlanPens, $this->bon_especialPlanPens, $this->reunificadaPlanPens, $this->igvPlanPens, $this->cargsimulPlanPens, $this->art18_dl_20530PlanPens, $this->du073_97PlanPens, $this->du011_99PlanPens, $this->du037_94PlanPens, $this->ds016PlanPens, $this->ds017PlanPens, $this->ds110_2006PlanPens, $this->ds039_2007PlanPens, $this->ds120_2008PlanPens, $this->ds014_2009PlanPens, $this->ds077_2010PlanPens, $this->ds031_2011PlanPens, $this->ds024_2012PlanPens, $this->ds004_2013PlanPens, $this->ds003_2014PlanPens, $this->ds002_2015PlanPens, $this->ds005_2016PlanPens, $this->ds020_2017PlanPens, $this->ds011_2018PlanPens, $this->ds009_2019PlanPens, $this->ds006_2020PlanPens, $this->ipssPlanPens, $this->cafaePlanPens, $this->prderrmaPlanPens, $this->escolaridadPlanPens, $this->decreto_supermo_20_21PlanPens,$this->anio,$this->mes, $this->idPlanPens);
        $objPlanPens->cerrarConexion();
//         die();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_ACTUALIZAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_ACTUALIZAR;
            $this->asignarParametrosError($request, 'm', $this->modelo, 'actualizar', '', $this->campos);
            $this->setParameter('opt', 'mr');
            $this->ver('PlanPens.tpl');
        }
    }

    function verEditar($request, $session, $opcionMod = false)
    {
        $this->llamadoXajax('PlanPens');
        $this->inicializarCombos();
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $objPlanPens = new PlanPens();
        $tablaResultado = $objPlanPens->consultarPlanPensXidPlanPens($this->id);
        $objPlanPens->cerrarConexion();
        if ($tablaResultado) {
            $tablaResultado = $tablaResultado[0];
            if ($opcionMod) {
                $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
                $this->ver('verPlanPens.tpl', true);
            } else {
                $this->asignarParametros($request, 'mr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Editar' . ' ' . $this->modulo);
                $this->ver('PlanPens.tpl');
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
//         echo "aca";die();
        $tablaResultado = false;
        $ids = $request['ids'];
        if ($ids == null || $ids == '') {
            return 0;
        }
        $objPlanPens = new PlanPens();
        $arreglo_ids = explode(',', $ids);
        foreach ($arreglo_ids as $idPlanPens) {
//             $tablaResultado = $objPlanPens->eliminarPlanPens($idPlanPens);
            $tablaResultado = $objPlanPens->actEdoPlanPensDesact(0,$idPlanPens);
        }
        $objPlanPens->cerrarConexion();
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
            $this->setTemplateDir(VISTA . 'PlanPens/');
            $this->goForward($pagina);
        } else {
            $this->visualizar('PlanPens/' . $pagina);
        }
    }

    function imprimir2($request, $session)
    {
        $mod = ucfirst(@$request['sec']);
        $opt = '';
        if (isset($request['id'])) {
            $opt = $request['id'];
        }
//         echo "imprimir id = $opt";die();
        $cad = trim('imp' . $mod . '.php');
        include $cad;
    }
    function imprimir($request, $session)
    {
        $mod = ucfirst(@$request['sec']);
        $opt = '';
        if (isset($request['id'])) {
            $opt = $request['id'];
        }
//         echo "imprimir2 id = $opt";die();
        $cad = trim('impBol' . $mod . '.php');
        include $cad;
    }

    function ventanaConsultar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $objPlanPens = new PlanPens();
        $tablaResultado = $objPlanPens->consultarPlanPensXid($this->id);
        $objPlanPens->cerrarConexion();
        if ($tablaResultado) {
            $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
            $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
            $this->ver('verPlanPens.tpl', TRUE);
        } else {
            // $this->visualizar('principal/error.tpl');
        }
    }
    function inicializarCombos()
    {
        $tablaMes = array(
            1 => "Enero",
            2 => "Febrero",
            3 => "Marzo",
            4 => "Abril",
            5 => "Mayo",
            6 => "Junio",
            7 => "Julio",
            8 => "Agosto",
            9 => "Septiembre",
            10 => "Octubre",
            11 => "Noviembre",
            12 => "Diciembre"
        );
        $this->setParameter('tablaMes', $tablaMes);
        
        $anioIni = 2021;
        $anioFin = date('Y');
//         $n = 0;
        for ($i = $anioIni; $i < $anioFin+1; $i++) {
//             echo "$i<br>";
            $tablaAnio[$i] = $i;
        }
        
//         dump($tablaAnio);
//         die();
//         $tablaAnio = array(
//             1 => "Enero",
//             2 => "Febrero",
//             3 => "Marzo",
//             4 => "Abril",
//             5 => "Mayo",
//             6 => "Junio",
//             7 => "Julio",
//             8 => "Agosto",
//             9 => "Septiembre",
//             10 => "Octubre",
//             11 => "Noviembre",
//             12 => "Diciembre"
//         );
        $this->setParameter('tablaAnio', $tablaAnio);
        
        $tablaGenero = array(
            1 => "Masculino",
            2 => "Femenino"
        );
        $this->setParameter('tablaGenero', $tablaGenero);
    }
}
?>