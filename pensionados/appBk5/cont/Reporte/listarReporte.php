<?php
/** 
 * @file planpens.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Reporte 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 07/04/2021
 *  
 */
require_once ('../../../config/config.php');
// require_once (MOD . 'Reporte.php');
require_once (MOD . 'PlanillaPensionado.php');
require_once (MOD . 'Enumerado.php');
require_once (MOD . 'Genero.php');

class principalReporte extends Controller
{
    private $opt;
    // Atributos de
    function principalReporte()
    {
        parent::__construct();
        $this->campos = 'anio,mes,idReporte,dniReporte,apellidos_y_nombresReporte,fecha_de_nacimientoReporte,sexoReporte,codigo_modularReporte,planillaReporte,tipo_de_regimenReporte,resolucion_de_pension_definitivaReporte,a_partir_deReporte,bancoReporte,cuenta_bancariaReporte,fuente_de_financiamientoReporte,planilla2Reporte,total_imponibleReporte,total_haberReporte,total_descuentosReporte,total_liquidoReporte,aguinaldoReporte,basicaReporte,bonif_personalReporte,ael25671Reporte,aeds081Reporte,tphReporte,bonif_familiarReporte,du080_04Reporte,refrig_y_moviReporte,du90_96Reporte,ds19_94_pcmReporte,ds21_92_pcmReporte,bon_especialReporte,reunificadaReporte,igvReporte,cargsimulReporte,art18_dl_20530Reporte,du073_97Reporte,du011_99Reporte,du037_94Reporte,ds016Reporte,ds017Reporte,ds110_2006Reporte,ds039_2007Reporte,ds120_2008Reporte,ds014_2009Reporte,ds077_2010Reporte,ds031_2011Reporte,ds024_2012Reporte,ds004_2013Reporte,ds003_2014Reporte,ds002_2015Reporte,ds005_2016Reporte,ds020_2017Reporte,ds011_2018Reporte,ds009_2019Reporte,ds006_2020Reporte,ipssReporte,cafaeReporte,prderrmaReporte,escolaridadReporte,decreto_supermo_20_21Reporte,p_del20530Reporte';
        $this->modelo = 'Reporte';
        $this->modulo = 'Reporte';
        $this->setTemplateDir(TEMPLATE);
        $this->asignarConstantes();
        $this->setParameter('MOD', $this->modelo);
        $this->setParameterPath('desactivarOpciones', true);
    }
    
    
    function pensTxt1($request, $session)
    {
//         echo "aca";
//         dump($request);die();
        // $anio = 2021;
        // $mes = 8;
        // $objPlanPens = new PlanPens();
        // $tablaResultado = $objPlanPens->consultarPlanPensConsolidadoXmes($anio,$mes);
        // $objPlanPens->cerrarConexion();
        // dump($tablaResultado);
        $matId = explode(':', $request['id']);
        $anio = $matId[0];
        $mes = $matId[1];
        $tipo = $matId[2];
//         $tipo = 1;
        $cad = trim('txt1.php');
        include $cad;
    }

    function pensConsolidado($request, $session)
    {
//         dump($request, $session);
        // echo "aca";
        $matId = explode(':', $request['id']);
        $anio = $matId[0];
        $mes = $matId[1];
        $tipo = $matId[2];
//         $tipo = 1;
        // $objPlanPens = new PlanPens();
        // $tablaResultado = $objPlanPens->consultarPlanPensConsolidadoXmes($anio,$mes);
        // $objPlanPens->cerrarConexion();
        // dump($tablaResultado);

        $cad = trim('impPensConsolidado.php');
        include $cad;
    }

    function reporte1($request, $session)
    {
        // echo "aca";
        // $anio = 2021;
        // $mes = 8;
        // $objPlanPens = new PlanPens();
        // $tablaResultado = $objPlanPens->consultarPlanPensConsolidadoXmes($anio,$mes);
        // $objPlanPens->cerrarConexion();
        // dump($tablaResultado);
        $matId = explode(':', $request['id']);
        $anio = $matId[0];
        $mes = $matId[1];
        $tipo = $matId[2];
        $cad = trim('reporte1.php');
        include $cad;
    }

    function reporte1Excel($request, $session)
    {
        $matId = explode(':', $request['id']);
        $anio = $matId[0];
        $mes = $matId[1];
        $tipo = $matId[2];
        // echo "aca Excel";die();
        $obj = new PlanillaPensionado();
        // $data = $obj->consultarPlanPensDefXanioYmes($anio, $mes);
//         $data = $obj->consultarPlanPensXanioYmes($anio, $mes);
//         $dataTotales = $obj->consultarPlanPensTotalesXanioYmes($anio, $mes);
        $data = $obj->consultarListadoPlanillaPensionadoXanioYmesYtipo($anio, $mes,$tipo);
        $dataTotales = $obj->consultarPlanillaPensionadoTotalesXanioYmesYtipo($anio, $mes,$tipo);
        $obj->cerrarConexion();
        $dataTotales = $dataTotales[0];

        // dump($data);
        // echo "**************************<br>";
        // dump($dataTotales);die();

        header("Content-Type: application/vnd.ms-excel");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("content-disposition: attachment;filename=Excel.xls");
        $html = "<!DOCTYPE html>";
        $html .= "<html>";
        $html .= "<head>";
        $html .= "<title>Excel.clt</title>";
        $html .= "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
        $html .= "</head>";
        $html .= "<body>";
        $html .= "<table border='1'>";
        $html .= "<caption>";
        $html .= "PLANILLAS DE PENSIONADOS";
        $html .= "</caption>";
        $html .= "<tr>";
        for ($k = 0; $k < count($data[0]); $k ++) {
            $row = (isset($data[0])) ? array_keys($data[0]) : '';
            if (! is_integer($row[$k])) {
                $html .= "<td>" . $row[$k] . "</td>";
            }
        }
        $html .= "</tr>";
        for ($i = 0; $i < count($data); $i ++) {
            $html .= "<tr>";
            for ($j = 0; $j < count($data[$i]); $j ++) {
                $row = (isset($data[$i][$j])) ? $data[$i][$j] : '';
                $html .= "<td>" . $row . "</td>";
            }
            $html .= "</tr>";
        }

        $html .= "<tr>";
        $html .= "<td></td>";
        $html .= "<td></td>";
        $html .= "<td></td>";
        $html .= "<td></td>";
        $html .= "<td></td>";
        $html .= "<td></td>";
        $html .= "<td></td>";
        $html .= "<td text-align='center'><b>Totales</b></td>";
        $html .= "<td><b>" . $dataTotales['totales_imponiblePlanPens'] . "</b></td>";
        $html .= "<td><b>" . $dataTotales['totales_haberPlanPens'] . "</b></td>";
        $html .= "<td><b>" . $dataTotales['totales_descuentosPlanPens'] . "</b></td>";
        $html .= "<td><b>" . $dataTotales['totales_liquidoPlanPens'] . "</b></td>";
        $html .= "</tr>";

        $html .= "</table>";
        $html .= "</body>";
        $html .= "</html>";
        echo $html;
        exit();
    }

    function listadoBoletas($request, $session)
    {
        $matId = explode(':', $request['id']);
        $anio = $matId[0];
        $mes = $matId[1];
        $tipo = $matId[2];
        // echo "aca";
        // $anio = 2021;
        // $mes = 8;
        // $objPlanPens = new PlanPens();
        // $tablaResultado = $objPlanPens->consultarPlanPensConsolidadoXmes($anio,$mes);
        // $objPlanPens->cerrarConexion();
        // dump($tablaResultado);

        $cad = trim('listadoBoletas.php');
        // $cad = trim('listadoBoletasV2.php');
        include $cad;
    }
    // ****************************************************************** VIUDEZ ****************************************************************** 
    function pensConsolidadoCon($request, $session)
    {
        // dump($request, $session);
        // echo "aca";
        $matId = explode(':', $request['id']);
        $anio = $matId[0];
        $mes = $matId[1];
        $tipo = 2;
        // $objPlanPens = new PlanPens();
        // $tablaResultado = $objPlanPens->consultarPlanPensConsolidadoXmes($anio,$mes);
        // $objPlanPens->cerrarConexion();
        // dump($tablaResultado);

        $cad = trim('impPensConsolidado.php');
        include $cad;
    }

    function reporte1Con($request, $session)
    {
        // echo "aca";
        // $anio = 2021;
        // $mes = 8;
        // $objPlanPens = new PlanPens();
        // $tablaResultado = $objPlanPens->consultarPlanPensConsolidadoXmes($anio,$mes);
        // $objPlanPens->cerrarConexion();
        // dump($tablaResultado);
        $matId = explode(':', $request['id']);
        $anio = $matId[0];
        $mes = $matId[1];
        $tipo = 2;
        $cad = trim('reporte1.php');
        include $cad;
    }

    function reporte1ExcelCon($request, $session)
    {
        $matId = explode(':', $request['id']);
        $anio = $matId[0];
        $mes = $matId[1];
        // echo "aca Excel";die();
        $obj = new PlanPens();
        // $data = $obj->consultarPlanPensDefXanioYmes($anio, $mes);
        $data = $obj->consultarPlanPensXanioYmes($anio, $mes);
        $dataTotales = $obj->consultarPlanPensTotalesXanioYmes($anio, $mes);
        $obj->cerrarConexion();
        $dataTotales = $dataTotales[0];

        // dump($data);
        // echo "**************************<br>";
        // dump($dataTotales);die();

        header("Content-Type: application/vnd.ms-excel");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("content-disposition: attachment;filename=Excel.xls");
        $html = "<!DOCTYPE html>";
        $html .= "<html>";
        $html .= "<head>";
        $html .= "<title>Excel.clt</title>";
        $html .= "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
        $html .= "</head>";
        $html .= "<body>";
        $html .= "<table border='1'>";
        $html .= "<caption>";
        $html .= "PLANILLAS DE PENSIONADOS";
        $html .= "</caption>";
        $html .= "<tr>";
        for ($k = 0; $k < count($data[0]); $k ++) {
            $row = (isset($data[0])) ? array_keys($data[0]) : '';
            if (! is_integer($row[$k])) {
                $html .= "<td>" . $row[$k] . "</td>";
            }
        }
        $html .= "</tr>";
        for ($i = 0; $i < count($data); $i ++) {
            $html .= "<tr>";
            for ($j = 0; $j < count($data[$i]); $j ++) {
                $row = (isset($data[$i][$j])) ? $data[$i][$j] : '';
                $html .= "<td>" . $row . "</td>";
            }
            $html .= "</tr>";
        }

        $html .= "<tr>";
        $html .= "<td></td>";
        $html .= "<td></td>";
        $html .= "<td></td>";
        $html .= "<td></td>";
        $html .= "<td></td>";
        $html .= "<td></td>";
        $html .= "<td></td>";
        $html .= "<td text-align='center'><b>Totales</b></td>";
        $html .= "<td><b>" . $dataTotales['totales_imponiblePlanPens'] . "</b></td>";
        $html .= "<td><b>" . $dataTotales['totales_haberPlanPens'] . "</b></td>";
        $html .= "<td><b>" . $dataTotales['totales_descuentosPlanPens'] . "</b></td>";
        $html .= "<td><b>" . $dataTotales['totales_liquidoPlanPens'] . "</b></td>";
        $html .= "</tr>";

        $html .= "</table>";
        $html .= "</body>";
        $html .= "</html>";
        echo $html;
        exit();
    }

    function listadoBoletasCon($request, $session)
    {
        $matId = explode(':', $request['id']);
        $anio = $matId[0];
        $mes = $matId[1];
        $tipo = 2;
        // echo "aca";
        // $anio = 2021;
        // $mes = 8;
        // $objPlanPens = new PlanPens();
        // $tablaResultado = $objPlanPens->consultarPlanPensConsolidadoXmes($anio,$mes);
        // $objPlanPens->cerrarConexion();
        // dump($tablaResultado);

        $cad = trim('listadoBoletas.php');
        // $cad = trim('listadoBoletasV2.php');
        include $cad;
    }

    function listar($request, $session)
    {
        // $_SESSION ['usuarioid'] = 1;
        // $_SESSION ['login'] = 'Admin';
        // $_SESSION ['nombre'] = 'Administrador del Sistema';
        // $_SESSION ['menuUsu'] = 'menuusugeneral';
        // $_SESSION ['ID_PERSONA'] = 1;
        // $_SESSION ['rolId'] = 2;
        $this->inicializarCombos();
        $this->setParameter('idMes', date('m'));
        $this->setParameter('idAnio', date('Y'));
        $this->inicializarAtributos($request, $this->campos);
        $this->llamadoXajax('Reporte');
        $this->setParameter('etiquetaModulo', 'Listar' . ' ' . $this->modulo);
        $this->setParameterPath('urlImp', 'base/Reporte/imprimir');
        $this->ver('listarReporte.tpl');
    }

    function guardar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, $this->campos);
        $objReporte = new Reporte();
        $tablaResultado = $objReporte->agregarReporte($this->idReporte, $this->dniReporte, $this->apellidos_y_nombresReporte, $this->fecha_de_nacimientoReporte, $this->sexoReporte, $this->codigo_modularReporte, $this->planillaReporte, $this->tipo_de_regimenReporte, $this->resolucion_de_pension_definitivaReporte, $this->a_partir_deReporte, $this->bancoReporte, $this->cuenta_bancariaReporte, $this->fuente_de_financiamientoReporte, $this->planilla2Reporte, $this->total_imponibleReporte, $this->total_haberReporte, $this->total_descuentosReporte, $this->total_liquidoReporte, $this->aguinaldoReporte, $this->basicaReporte, $this->bonif_personalReporte, $this->ael25671Reporte, $this->aeds081Reporte, $this->tphReporte, $this->bonif_familiarReporte, $this->du080_04Reporte, $this->refrig_y_moviReporte, $this->du90_96Reporte, $this->ds19_94_pcmReporte, $this->ds21_92_pcmReporte, $this->bon_especialReporte, $this->reunificadaReporte, $this->igvReporte, $this->cargsimulReporte, $this->art18_dl_20530Reporte, $this->du073_97Reporte, $this->du011_99Reporte, $this->du037_94Reporte, $this->ds016Reporte, $this->ds017Reporte, $this->ds110_2006Reporte, $this->ds039_2007Reporte, $this->ds120_2008Reporte, $this->ds014_2009Reporte, $this->ds077_2010Reporte, $this->ds031_2011Reporte, $this->ds024_2012Reporte, $this->ds004_2013Reporte, $this->ds003_2014Reporte, $this->ds002_2015Reporte, $this->ds005_2016Reporte, $this->ds020_2017Reporte, $this->ds011_2018Reporte, $this->ds009_2019Reporte, $this->ds006_2020Reporte, $this->ipssReporte, $this->cafaeReporte, $this->prderrmaReporte, $this->escolaridadReporte, $this->decreto_supermo_20_21Reporte, $this->anio, $this->mes, $request['preG'], $this->p_del20530Reporte);
        $objReporte->cerrarConexion();
        // die();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_INGRESAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_INGRESAR;
            $this->setParameter('error', $error);
            $this->asignarParametrosError($request, 'g', $this->modelo, 'guardar', '', $this->campos);
            $this->ver('Reporte.tpl');
        }
    }

    function ingresar($request, $session)
    {
        $this->inicializarCombos();
        $this->llamadoXajax('Reporte');
        $opcion = $request['opcion'];
        $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
        $this->setParameterPath('urlImp', '');
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        $this->setParameter('btnPreG', '1');
        $this->ver('Reporte.tpl');
    }

    function actualizar($request, $session)
    {
        // echo "------".$request['preG'].'<br>';
        // dump($request);
        // echo "En Pre guardar";die();
        $this->inicializarCombos();
        $this->inicializarAtributos($request, $this->campos);
        $objReporte = new Reporte();
        $tablaResultado = $objReporte->actualizarReporte($this->idReporte, $this->dniReporte, $this->apellidos_y_nombresReporte, $this->fecha_de_nacimientoReporte, $this->sexoReporte, $this->codigo_modularReporte, $this->planillaReporte, $this->tipo_de_regimenReporte, $this->resolucion_de_pension_definitivaReporte, $this->a_partir_deReporte, $this->bancoReporte, $this->cuenta_bancariaReporte, $this->fuente_de_financiamientoReporte, $this->planilla2Reporte, $this->total_imponibleReporte, $this->total_haberReporte, $this->total_descuentosReporte, $this->total_liquidoReporte, $this->aguinaldoReporte, $this->basicaReporte, $this->bonif_personalReporte, $this->ael25671Reporte, $this->aeds081Reporte, $this->tphReporte, $this->bonif_familiarReporte, $this->du080_04Reporte, $this->refrig_y_moviReporte, $this->du90_96Reporte, $this->ds19_94_pcmReporte, $this->ds21_92_pcmReporte, $this->bon_especialReporte, $this->reunificadaReporte, $this->igvReporte, $this->cargsimulReporte, $this->art18_dl_20530Reporte, $this->du073_97Reporte, $this->du011_99Reporte, $this->du037_94Reporte, $this->ds016Reporte, $this->ds017Reporte, $this->ds110_2006Reporte, $this->ds039_2007Reporte, $this->ds120_2008Reporte, $this->ds014_2009Reporte, $this->ds077_2010Reporte, $this->ds031_2011Reporte, $this->ds024_2012Reporte, $this->ds004_2013Reporte, $this->ds003_2014Reporte, $this->ds002_2015Reporte, $this->ds005_2016Reporte, $this->ds020_2017Reporte, $this->ds011_2018Reporte, $this->ds009_2019Reporte, $this->ds006_2020Reporte, $this->ipssReporte, $this->cafaeReporte, $this->prderrmaReporte, $this->escolaridadReporte, $this->decreto_supermo_20_21Reporte, $this->anio, $this->mes, $request['preG'], $this->p_del20530Reporte, $this->idReporte);
        $objReporte->cerrarConexion();
        // die();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_ACTUALIZAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_ACTUALIZAR;
            $this->asignarParametrosError($request, 'm', $this->modelo, 'actualizar', '', $this->campos);
            $this->setParameter('opt', 'mr');
            $this->ver('Reporte.tpl');
        }
    }

    function verEditar($request, $session, $opcionMod = false)
    {
        $this->llamadoXajax('Reporte');
        $this->inicializarCombos();
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $objReporte = new Reporte();
        $tablaResultado = $objReporte->consultarReporteXidReporte($this->id);
        $objReporte->cerrarConexion();
        if ($tablaResultado) {
            $tablaResultado = $tablaResultado[0];
            if ($opcionMod) {
                $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
                $this->ver('verReporte.tpl', true);
            } else {
                $this->setParameter('btnPreA', '1');
                $this->asignarParametros($request, 'mr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Editar' . ' ' . $this->modulo);
                $this->ver('Reporte.tpl');
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
        // echo "aca";die();
        $tablaResultado = false;
        $ids = $request['ids'];
        if ($ids == null || $ids == '') {
            return 0;
        }
        $objReporte = new Reporte();
        $arreglo_ids = explode(',', $ids);
        foreach ($arreglo_ids as $idReporte) {
            // $tablaResultado = $objReporte->eliminarReporte($idReporte);
            $tablaResultado = $objReporte->actEdoReporteDesact(0, $idReporte);
        }
        $objReporte->cerrarConexion();
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
            $this->setTemplateDir(VISTA . 'Reporte/');
            $this->goForward($pagina);
        } else {
            $this->visualizar('Reporte/' . $pagina);
        }
    }

    function imprimir2($request, $session)
    {
        $mod = ucfirst(@$request['sec']);
        $opt = '';
        if (isset($request['id'])) {
            $opt = $request['id'];
        }
        // echo "imprimir id = $opt";die();
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
        // echo "imprimir2 id = $opt";die();
        $cad = trim('impBol' . $mod . '.php');
        include $cad;
    }

    function ventanaConsultar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $objReporte = new Reporte();
        $tablaResultado = $objReporte->consultarReporteXid($this->id);
        $objReporte->cerrarConexion();
        if ($tablaResultado) {
            $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
            $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
            $this->ver('verReporte.tpl', TRUE);
        } else {
            // $this->visualizar('principal/error.tpl');
        }
    }

    function inicializarCombos()
    {
        $tablaBanco = array(
            'BANCO DE CREDITO' => "BANCO DE CREDITO",
            'BANCO SCOTIABANK' => "BANCO SCOTIABANK",
            'BANCO DE LA NACIÓN' => "BANCO DE LA NACIÓN"
        );
        $this->setParameter('tablaBanco', $tablaBanco);

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
        // $n = 0;
        for ($i = $anioIni; $i < $anioFin + 1; $i ++) {
            // echo "$i<br>";
            $tablaAnio[$i] = $i;
        }
        // dump($tablaAnio);
        // die();
        // $tablaAnio = array(
        // 1 => "Enero",
        // 2 => "Febrero",
        // 3 => "Marzo",
        // 4 => "Abril",
        // 5 => "Mayo",
        // 6 => "Junio",
        // 7 => "Julio",
        // 8 => "Agosto",
        // 9 => "Septiembre",
        // 10 => "Octubre",
        // 11 => "Noviembre",
        // 12 => "Diciembre"
        // );
        $this->setParameter('tablaAnio', $tablaAnio);

        $objGenero = new Genero();
        $tablaGenero = Enumerado::tabla2enumerado($objGenero->consultarGenero(), '1', 0);
        $this->setParameter('tablaGenero', $tablaGenero);
        $objGenero->cerrarConexion();
    }
}
?>