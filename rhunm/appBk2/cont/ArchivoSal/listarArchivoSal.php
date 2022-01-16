<?php
/** 
 * @file ArchivoSal.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla ArchivoSal 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 07/04/2021
 *  
 */
require_once ('../../../config/config.php');
// require_once (MOD . 'ArchivoSal.php');
require_once (MOD . 'PlanPens.php');
require_once (MOD . 'Archivo.php');
require_once (MOD . 'Enumerado.php');
require_once (MOD . 'Genero.php');

class principalArchivoSal extends Controller
{
    private $opt;
    // Atributos de
    function principalArchivoSal()
    {
        parent::__construct();
        $this->campos = 'anio,mes,idArchivoSal,dniArchivoSal,apellidos_y_nombresArchivoSal,fecha_de_nacimientoArchivoSal,sexoArchivoSal,codigo_modularArchivoSal,planillaArchivoSal,tipo_de_regimenArchivoSal,resolucion_de_pension_definitivaArchivoSal,a_partir_deArchivoSal,bancoArchivoSal,cuenta_bancariaArchivoSal,fuente_de_financiamientoArchivoSal,planilla2ArchivoSal,total_imponibleArchivoSal,total_haberArchivoSal,total_descuentosArchivoSal,total_liquidoArchivoSal,aguinaldoArchivoSal,basicaArchivoSal,bonif_personalArchivoSal,ael25671ArchivoSal,aeds081ArchivoSal,tphArchivoSal,bonif_familiarArchivoSal,du080_04ArchivoSal,refrig_y_moviArchivoSal,du90_96ArchivoSal,ds19_94_pcmArchivoSal,ds21_92_pcmArchivoSal,bon_especialArchivoSal,reunificadaArchivoSal,igvArchivoSal,cargsimulArchivoSal,art18_dl_20530ArchivoSal,du073_97ArchivoSal,du011_99ArchivoSal,du037_94ArchivoSal,ds016ArchivoSal,ds017ArchivoSal,ds110_2006ArchivoSal,ds039_2007ArchivoSal,ds120_2008ArchivoSal,ds014_2009ArchivoSal,ds077_2010ArchivoSal,ds031_2011ArchivoSal,ds024_2012ArchivoSal,ds004_2013ArchivoSal,ds003_2014ArchivoSal,ds002_2015ArchivoSal,ds005_2016ArchivoSal,ds020_2017ArchivoSal,ds011_2018ArchivoSal,ds009_2019ArchivoSal,ds006_2020ArchivoSal,ipssArchivoSal,cafaeArchivoSal,prderrmaArchivoSal,escolaridadArchivoSal,decreto_supermo_20_21ArchivoSal,p_del20530ArchivoSal';
        $this->modelo = 'ArchivoSal';
        $this->modulo = 'ArchivoSal';
        $this->setTemplateDir(TEMPLATE);
        $this->asignarConstantes();
        $this->setParameter('MOD', $this->modelo);
        $this->setParameterPath('desactivarOpciones', true);
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
        $tipo = 1;
        
        $obj = new PlanPens();
        // $data = $obj->consultarPlanPensDefXanioYmes($anio, $mes);
        $data = $obj->consultarPlanPensXanioYmes($anio, $mes);
//         $dataTotales = $obj->consultarPlanPensTotalesXanioYmes($anio, $mes);
        $obj->cerrarConexion();
//         dump($data);
        $nomArchivo = PUBSIST.'doc/'. $anio.$mes."archivoJosue.txt";
        echo "archivo = $nomArchivo";
        if (count($data) > 0) {
            
echo "************";
            $objArchivo = new Archivo();
            $resArchivo = $objArchivo->crearArchivo($nomArchivo);
            
            
            foreach ($data as $ite) {
                $cod1 = '01'.';';
                $dniPlanPens = $ite['dniPlanPens'].';';
                $cod3 = '00'.';';
                $cod4 = '1'.';';
                $cod5 = 'codSIAF'.';';
                $cod6 = ''.';';
//                 $dniPlanPens = $ite[];
//                 $dniPlanPens = $ite[];
//                 dump($ite);
//                 echo $ite['dniPlanPens']."<br>";
//                 $objArchivo->escribirArchivo($resArchivo, $cod1.$dniPlanPens.$cod3.$cod4.$cod5.$cod6);
//                 break;
            }
            $objArchivo->cerrarConexion();

            $cad = trim('txt1.php');
            // $cad = trim('listadoBoletasV2.php');
            include $cad;
            
            //     $pdf->Footer();
        } else {
            $mns = "Actualmente no se puede presentar el reporte, por favor intentelo nuevamente";
            $mns = 'test';
            $pdf->Cell ( 0, 10, $mns, 0, 1, 'C' );
        }
    }

    function reporte1Excel($request, $session)
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

    function listadoBoletas($request, $session)
    {
        $matId = explode(':', $request['id']);
        $anio = $matId[0];
        $mes = $matId[1];
        $tipo = 1;
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
        $this->llamadoXajax('ArchivoSal');
        $this->setParameter('etiquetaModulo', 'Listar' . ' ' . $this->modulo);
        $this->setParameterPath('urlImp', 'base/ArchivoSal/imprimir');
        $this->ver('listarArchivoSal.tpl');
    }

    function guardar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, $this->campos);
        $objArchivoSal = new ArchivoSal();
        $tablaResultado = $objArchivoSal->agregarArchivoSal($this->idArchivoSal, $this->dniArchivoSal, $this->apellidos_y_nombresArchivoSal, $this->fecha_de_nacimientoArchivoSal, $this->sexoArchivoSal, $this->codigo_modularArchivoSal, $this->planillaArchivoSal, $this->tipo_de_regimenArchivoSal, $this->resolucion_de_pension_definitivaArchivoSal, $this->a_partir_deArchivoSal, $this->bancoArchivoSal, $this->cuenta_bancariaArchivoSal, $this->fuente_de_financiamientoArchivoSal, $this->planilla2ArchivoSal, $this->total_imponibleArchivoSal, $this->total_haberArchivoSal, $this->total_descuentosArchivoSal, $this->total_liquidoArchivoSal, $this->aguinaldoArchivoSal, $this->basicaArchivoSal, $this->bonif_personalArchivoSal, $this->ael25671ArchivoSal, $this->aeds081ArchivoSal, $this->tphArchivoSal, $this->bonif_familiarArchivoSal, $this->du080_04ArchivoSal, $this->refrig_y_moviArchivoSal, $this->du90_96ArchivoSal, $this->ds19_94_pcmArchivoSal, $this->ds21_92_pcmArchivoSal, $this->bon_especialArchivoSal, $this->reunificadaArchivoSal, $this->igvArchivoSal, $this->cargsimulArchivoSal, $this->art18_dl_20530ArchivoSal, $this->du073_97ArchivoSal, $this->du011_99ArchivoSal, $this->du037_94ArchivoSal, $this->ds016ArchivoSal, $this->ds017ArchivoSal, $this->ds110_2006ArchivoSal, $this->ds039_2007ArchivoSal, $this->ds120_2008ArchivoSal, $this->ds014_2009ArchivoSal, $this->ds077_2010ArchivoSal, $this->ds031_2011ArchivoSal, $this->ds024_2012ArchivoSal, $this->ds004_2013ArchivoSal, $this->ds003_2014ArchivoSal, $this->ds002_2015ArchivoSal, $this->ds005_2016ArchivoSal, $this->ds020_2017ArchivoSal, $this->ds011_2018ArchivoSal, $this->ds009_2019ArchivoSal, $this->ds006_2020ArchivoSal, $this->ipssArchivoSal, $this->cafaeArchivoSal, $this->prderrmaArchivoSal, $this->escolaridadArchivoSal, $this->decreto_supermo_20_21ArchivoSal, $this->anio, $this->mes, $request['preG'], $this->p_del20530ArchivoSal);
        $objArchivoSal->cerrarConexion();
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
            $this->ver('ArchivoSal.tpl');
        }
    }

    function ingresar($request, $session)
    {
        $this->inicializarCombos();
        $this->llamadoXajax('ArchivoSal');
        $opcion = $request['opcion'];
        $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
        $this->setParameterPath('urlImp', '');
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        $this->setParameter('btnPreG', '1');
        $this->ver('ArchivoSal.tpl');
    }

    function actualizar($request, $session)
    {
        // echo "------".$request['preG'].'<br>';
        // dump($request);
        // echo "En Pre guardar";die();
        $this->inicializarCombos();
        $this->inicializarAtributos($request, $this->campos);
        $objArchivoSal = new ArchivoSal();
        $tablaResultado = $objArchivoSal->actualizarArchivoSal($this->idArchivoSal, $this->dniArchivoSal, $this->apellidos_y_nombresArchivoSal, $this->fecha_de_nacimientoArchivoSal, $this->sexoArchivoSal, $this->codigo_modularArchivoSal, $this->planillaArchivoSal, $this->tipo_de_regimenArchivoSal, $this->resolucion_de_pension_definitivaArchivoSal, $this->a_partir_deArchivoSal, $this->bancoArchivoSal, $this->cuenta_bancariaArchivoSal, $this->fuente_de_financiamientoArchivoSal, $this->planilla2ArchivoSal, $this->total_imponibleArchivoSal, $this->total_haberArchivoSal, $this->total_descuentosArchivoSal, $this->total_liquidoArchivoSal, $this->aguinaldoArchivoSal, $this->basicaArchivoSal, $this->bonif_personalArchivoSal, $this->ael25671ArchivoSal, $this->aeds081ArchivoSal, $this->tphArchivoSal, $this->bonif_familiarArchivoSal, $this->du080_04ArchivoSal, $this->refrig_y_moviArchivoSal, $this->du90_96ArchivoSal, $this->ds19_94_pcmArchivoSal, $this->ds21_92_pcmArchivoSal, $this->bon_especialArchivoSal, $this->reunificadaArchivoSal, $this->igvArchivoSal, $this->cargsimulArchivoSal, $this->art18_dl_20530ArchivoSal, $this->du073_97ArchivoSal, $this->du011_99ArchivoSal, $this->du037_94ArchivoSal, $this->ds016ArchivoSal, $this->ds017ArchivoSal, $this->ds110_2006ArchivoSal, $this->ds039_2007ArchivoSal, $this->ds120_2008ArchivoSal, $this->ds014_2009ArchivoSal, $this->ds077_2010ArchivoSal, $this->ds031_2011ArchivoSal, $this->ds024_2012ArchivoSal, $this->ds004_2013ArchivoSal, $this->ds003_2014ArchivoSal, $this->ds002_2015ArchivoSal, $this->ds005_2016ArchivoSal, $this->ds020_2017ArchivoSal, $this->ds011_2018ArchivoSal, $this->ds009_2019ArchivoSal, $this->ds006_2020ArchivoSal, $this->ipssArchivoSal, $this->cafaeArchivoSal, $this->prderrmaArchivoSal, $this->escolaridadArchivoSal, $this->decreto_supermo_20_21ArchivoSal, $this->anio, $this->mes, $request['preG'], $this->p_del20530ArchivoSal, $this->idArchivoSal);
        $objArchivoSal->cerrarConexion();
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
            $this->ver('ArchivoSal.tpl');
        }
    }

    function verEditar($request, $session, $opcionMod = false)
    {
        $this->llamadoXajax('ArchivoSal');
        $this->inicializarCombos();
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $objArchivoSal = new ArchivoSal();
        $tablaResultado = $objArchivoSal->consultarArchivoSalXidArchivoSal($this->id);
        $objArchivoSal->cerrarConexion();
        if ($tablaResultado) {
            $tablaResultado = $tablaResultado[0];
            if ($opcionMod) {
                $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
                $this->ver('verArchivoSal.tpl', true);
            } else {
                $this->setParameter('btnPreA', '1');
                $this->asignarParametros($request, 'mr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Editar' . ' ' . $this->modulo);
                $this->ver('ArchivoSal.tpl');
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
        $objArchivoSal = new ArchivoSal();
        $arreglo_ids = explode(',', $ids);
        foreach ($arreglo_ids as $idArchivoSal) {
            // $tablaResultado = $objArchivoSal->eliminarArchivoSal($idArchivoSal);
            $tablaResultado = $objArchivoSal->actEdoArchivoSalDesact(0, $idArchivoSal);
        }
        $objArchivoSal->cerrarConexion();
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
            $this->setTemplateDir(VISTA . 'ArchivoSal/');
            $this->goForward($pagina);
        } else {
            $this->visualizar('ArchivoSal/' . $pagina);
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
        $objArchivoSal = new ArchivoSal();
        $tablaResultado = $objArchivoSal->consultarArchivoSalXid($this->id);
        $objArchivoSal->cerrarConexion();
        if ($tablaResultado) {
            $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
            $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
            $this->ver('verArchivoSal.tpl', TRUE);
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