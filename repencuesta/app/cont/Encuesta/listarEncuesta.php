<?php
/** 
 * @file planpens.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Encuesta 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 07/04/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'Encuesta.php');
require_once (MOD . 'Enumerado.php');

class principalEncuesta extends Controller
{

    private $opt;

    // Atributos de
    function principalEncuesta()
    {
        parent::__construct();
        $this->campos = 'anio,mes,idEncuesta,dniEncuesta,apellidos_y_nombresEncuesta,fecha_de_nacimientoEncuesta,sexoEncuesta,codigo_modularEncuesta,planillaEncuesta,tipo_de_regimenEncuesta,resolucion_de_pension_definitivaEncuesta,a_partir_deEncuesta,bancoEncuesta,cuenta_bancariaEncuesta,fuente_de_financiamientoEncuesta,planilla2Encuesta,total_imponibleEncuesta,total_haberEncuesta,total_descuentosEncuesta,total_liquidoEncuesta,aguinaldoEncuesta,basicaEncuesta,bonif_personalEncuesta,ael25671Encuesta,aeds081Encuesta,tphEncuesta,bonif_familiarEncuesta,du080_04Encuesta,refrig_y_moviEncuesta,du90_96Encuesta,ds19_94_pcmEncuesta,ds21_92_pcmEncuesta,bon_especialEncuesta,reunificadaEncuesta,igvEncuesta,cargsimulEncuesta,art18_dl_20530Encuesta,du073_97Encuesta,du011_99Encuesta,du037_94Encuesta,ds016Encuesta,ds017Encuesta,ds110_2006Encuesta,ds039_2007Encuesta,ds120_2008Encuesta,ds014_2009Encuesta,ds077_2010Encuesta,ds031_2011Encuesta,ds024_2012Encuesta,ds004_2013Encuesta,ds003_2014Encuesta,ds002_2015Encuesta,ds005_2016Encuesta,ds020_2017Encuesta,ds011_2018Encuesta,ds009_2019Encuesta,ds006_2020Encuesta,ipssEncuesta,cafaeEncuesta,prderrmaEncuesta,escolaridadEncuesta,decreto_supermo_20_21Encuesta';
        $this->modelo = 'Encuesta';
        $this->modulo = 'Encuesta';
        $this->setTemplateDir(TEMPLATE);
        $this->asignarConstantes();
        $this->setParameter('MOD', $this->modelo);
        $this->setParameterPath ( 'desactivarOpciones', true );
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
        $this->llamadoXajax('Encuesta');
        $this->setParameter('etiquetaModulo', 'Listar' . ' ' . $this->modulo);
        $this->setParameterPath('urlImp', 'base/Encuesta/imprimir');
        $this->ver('listarEncuesta.tpl');
    }

    function reporte($request, $session)
    {
        $this->inicializarCombos();
        $this->llamadoXajax('Encuesta');
        $opcion = $request['opcion'];
        $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
        $this->setParameterPath('urlImp', '');
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        $this->ver('Encuesta.tpl');
    }

    function actualizar($request, $session)
    {
        $this->inicializarAtributos($request, $this->campos);
        $objEncuesta = new Encuesta();
        $tablaResultado = $objEncuesta->actualizarEncuesta($this->idEncuesta, $this->dniEncuesta, $this->apellidos_y_nombresEncuesta, $this->fecha_de_nacimientoEncuesta, $this->sexoEncuesta, $this->codigo_modularEncuesta, $this->planillaEncuesta, $this->tipo_de_regimenEncuesta, $this->resolucion_de_pension_definitivaEncuesta, $this->a_partir_deEncuesta, $this->bancoEncuesta, $this->cuenta_bancariaEncuesta, $this->fuente_de_financiamientoEncuesta, $this->planilla2Encuesta, $this->total_imponibleEncuesta, $this->total_haberEncuesta, $this->total_descuentosEncuesta, $this->total_liquidoEncuesta, $this->aguinaldoEncuesta, $this->basicaEncuesta, $this->bonif_personalEncuesta, $this->ael25671Encuesta, $this->aeds081Encuesta, $this->tphEncuesta, $this->bonif_familiarEncuesta, $this->du080_04Encuesta, $this->refrig_y_moviEncuesta, $this->du90_96Encuesta, $this->ds19_94_pcmEncuesta, $this->ds21_92_pcmEncuesta, $this->bon_especialEncuesta, $this->reunificadaEncuesta, $this->igvEncuesta, $this->cargsimulEncuesta, $this->art18_dl_20530Encuesta, $this->du073_97Encuesta, $this->du011_99Encuesta, $this->du037_94Encuesta, $this->ds016Encuesta, $this->ds017Encuesta, $this->ds110_2006Encuesta, $this->ds039_2007Encuesta, $this->ds120_2008Encuesta, $this->ds014_2009Encuesta, $this->ds077_2010Encuesta, $this->ds031_2011Encuesta, $this->ds024_2012Encuesta, $this->ds004_2013Encuesta, $this->ds003_2014Encuesta, $this->ds002_2015Encuesta, $this->ds005_2016Encuesta, $this->ds020_2017Encuesta, $this->ds011_2018Encuesta, $this->ds009_2019Encuesta, $this->ds006_2020Encuesta, $this->ipssEncuesta, $this->cafaeEncuesta, $this->prderrmaEncuesta, $this->escolaridadEncuesta, $this->decreto_supermo_20_21Encuesta,$this->anio,$this->mes, $this->idEncuesta);
        $objEncuesta->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_ACTUALIZAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_ACTUALIZAR;
            $this->asignarParametrosError($request, 'm', $this->modelo, 'actualizar', '', $this->campos);
            $this->setParameter('opt', 'mr');
            $this->ver('Encuesta.tpl');
        }
    }

    function verEditar($request, $session, $opcionMod = false)
    {
        $this->llamadoXajax('Encuesta');
        $this->inicializarCombos();
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $objEncuesta = new Encuesta();
        $tablaResultado = $objEncuesta->consultarEncuestaXidEncuesta($this->id);
        $objEncuesta->cerrarConexion();
        if ($tablaResultado) {
            $tablaResultado = $tablaResultado[0];
            if ($opcionMod) {
                $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
                $this->ver('verEncuesta.tpl', true);
            } else {
                $this->asignarParametros($request, 'mr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Editar' . ' ' . $this->modulo);
                $this->ver('Encuesta.tpl');
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
        $objEncuesta = new Encuesta();
        $arreglo_ids = split(',', $ids);
        foreach ($arreglo_ids as $idEncuesta) {
            $tablaResultado = $objEncuesta->eliminarEncuesta($idEncuesta);
        }
        $objEncuesta->cerrarConexion();
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
            $this->setTemplateDir(VISTA . 'Encuesta/');
            $this->goForward($pagina);
        } else {
            $this->visualizar('Encuesta/' . $pagina);
        }
    }

    function imprimir1($request, $session)
    {
        $mod = ucfirst(@$request['sec']);
        $opt = '';
        if (isset($request['id'])) {
            $opt = $request['id'];
        }
        $cad = trim('impRep1.php');
        include $cad;
    }

    function ventanaConsultar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $objEncuesta = new Encuesta();
        $tablaResultado = $objEncuesta->consultarEncuestaXid($this->id);
        $objEncuesta->cerrarConexion();
        if ($tablaResultado) {
            $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
            $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
            $this->ver('verEncuesta.tpl', TRUE);
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
    }
}
?>