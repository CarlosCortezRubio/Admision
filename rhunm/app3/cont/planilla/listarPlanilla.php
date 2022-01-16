<?php
/** 
 * @file planillapensionado.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla PlanillaPensionado 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 18/10/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'Planilla.php');
require_once (MOD . 'Conceptos.php');
require_once (MOD . 'Periodo.php');
require_once (MOD . 'Genero.php');
require_once (MOD . 'Banco.php');
require_once (MOD . 'Enumerado.php');

class principalPlanilla extends Controller
{
    private $opt;

    function principalPlanilla()
    {
        parent::__construct();
       
        $this->campos = 'idplanillaPensionado,idEmpleado,idPeriodo,idTipoPlanilla,fecplanillaPensionado,totImpplanillaPensionado,totHabplanillaPensionado,totDescplanillaPensionado,totLiqplanillaPensionado';

        $this->modelo = 'planilla';
        $this->modulo = 'Planilla';
        $this->setTemplateDir(TEMPLATE);
        $this->asignarConstantes();
        $this->setParameter('MOD', $this->modelo);
    }

    function listar($request, $session)
    {
        //         dump($request);die();
        $this->inicializarCombos();
        $this->setParameter('idMes', date('m'));
        $this->setParameter('idAnio', date('Y'));
        $this->llamadoXajax('planilla');
        $this->setParameter('etiquetaModulo', 'Listar' . ' ' . $this->modulo);
        $this->setParameterPath('urlImp', 'base/planilla/imprimir');
        //         $this->setParameterPath('tipPlanilla', $request['id']);
        $this->ver('listarplanilla.tpl');
    }

    function guardar($request, $session)
    {   

        $fechaPlanilla= $request['fecplanillaPensionado'];
        $idTipoPlanilla = 1;
       // $idTipoPlanilla = $request['tipPlanilla'];
        foreach ($request as $clave => $valor) {
            if (strpos($clave,'idConc_')===0) {
            //                 echo "{$clave} => {$valor} <br>";
                $matConceptos[] = array('idConcepto'=>$clave,'valConcepto'=>$valor);
            }
        }
        $opcion = $request['opcion'];

        $this->inicializarAtributos($request, $this->campos);
        $objPlanilla = new Planilla();        

        $tablaResultado = $objPlanilla->compAgregarPlanillaPensionado
        ($this->idEmpleado, $this->idPeriodo, $idTipoPlanilla, $this->fecplanillaPensionado, $this->totImpplanillaPensionado, $this->totHabplanillaPensionado, $this->totDescplanillaPensionado, $this->totLiqplanillaPensionado, $matConceptos);


        $objPlanilla->cerrarConexion();

        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_INGRESAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_INGRESAR;
            $this->setParameter('error', $error);
            $this->asignarParametrosError($request, 'g', $this->modelo, 'guardar', '', $this->campos);
            $this->ver('planilla.tpl');
        }
    }

    function ingresar($request, $session)
    {
        $this->inicializarCombos();
        $this->llamadoXajax('planilla');
        $opcion = $request['opcion'];
        $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
        $this->setParameterPath('urlImp', '');
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        
        $objConceptos = new Conceptos ();
            $tablaResultadoIng =  $objConceptos->consultarConceptosXidEdoRegistroYtipoConcepto(1,1);
            $tablaResultadoDesc = $objConceptos->consultarConceptosXidEdoRegistroYtipoConcepto(1,2);
        $objConceptos->cerrarConexion();
        
        
        $objPeriodo = new Periodo ();
        $tablaResPeriodo = $objPeriodo->consultarPeriodoXidEdoRegistro(1);
        $objPeriodo->cerrarConexion();
        if ($tablaResPeriodo==null) {
            $msn = "No hay Periodo abierto";
            $this->setParameter('msnBloqueo', $msn);
            $this->ver('planBloqueada.tpl');
        }
        if ($tablaResultadoIng > 0 AND $tablaResPeriodo > 0) {
            
            $tablaResPeriodo = $tablaResPeriodo[0];
            $this->setParameter ( 'tablaResultadoIng', $tablaResultadoIng );
            $this->setParameter ( 'tablaResultadoDesc', $tablaResultadoDesc );
        
            //             die();
            
            $this->setParameter ( 'idPeriodo', $tablaResPeriodo['idPeriodo'] );
            $this->setParameter ( 'anio', $tablaResPeriodo['anioPeriodo'] );
            $this->setParameter ( 'mes', $tablaResPeriodo['mesPeriodo'] );
            $this->setParameter ( 'nomPeriodo', $tablaResPeriodo['nomPeriodo'] );
            $this->setParameter ( 'fecplanillaPensionado', date("d-m-Y"));
        }else{
            if ($tablaResultadoIng) {
                $msg = "No hay conceptos activos";
                echo "$msg";
            }else{
                $msg = "No hay Periodo activo";
                echo "$msg";
            }
        }
        $this->setParameter('btnPreG', '1');
        $this->ver('planilla.tpl');
    }

    function actualizar($request, $session)
    {

        $idTipoPlanilla = 1;
        foreach ($request as $clave => $valor) {
            if (strpos($clave,'idConc_')===0) {
        //                 echo "{$clave} => {$valor} <br>";
                $matConceptos[] = array('idConcepto'=>$clave,'valConcepto'=>$valor);
            }
        }

        //  var_dump($request);
        //  die('actualizar  aquiiiii');

        $this->inicializarAtributos($request, $this->campos);
        $objPlanillaPensionado = new Planilla();
        $tablaResultado = $objPlanillaPensionado->compActualizarPlanillaPensionado ( 
            $this->idplanillaPensionado,
            $this->idEmpleado,
            $this->idPeriodo, 
            $idTipoPlanilla, 
            $this->fecplanillaPensionado, 
            $this->totImpplanillaPensionado, 
            $this->totHabplanillaPensionado, 
            $this->totDescplanillaPensionado, 
            $this->totLiqplanillaPensionado, 
            $matConceptos);
           


        // $tablaResultado = $objPlanillaPensionado->compAgregarPlanillaPensionado
        //    (
        //        $this->idEmpleado, 
        //        $this->idPeriodo, 
        //        $idTipoPlanilla, 
        //        $this->fecplanillaPensionado, 
        //        $this->totImpplanillaPensionado, 
        //        $this->totHabplanillaPensionado, 
        //        $this->totDescplanillaPensionado, 
        //        $this->totLiqplanillaPensionado, 
        //        $matConceptos
        //     );
    

        $objPlanillaPensionado->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_ACTUALIZAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_ACTUALIZAR;
            $this->asignarParametrosError($request, 'm', $this->modelo, 'actualizar', '', $this->campos);
            $this->setParameter('opt', 'mr');
            $this->ver('planilla.tpl');
        }
    }

    function verEditar($request, $session, $opcionMod = false)
    {
        $this->inicializarCombos();
        $this->llamadoXajax('planilla');
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $objPlanillaPensionado = new Planilla();
        $tablaResultado = $objPlanillaPensionado->consultarPlanillaPensionadoXidplanillaPensionado($this->id);
        $objPlanillaPensionado->cerrarConexion();
        $tablaResultadoIng = $tablaResultado;
        $tablaResultadoDesc = $tablaResultado;
                 //dump($tablaResultado);die('desde listar');
        if ($tablaResultado) {
        //             foreach ($tablaResultado as $ite) {
        //                 $this->setParameter ( 'idConc_'.$ite['idConceptos'], $ite['mntConcPlanilla']);
        //             }
            $tablaResultado = $tablaResultado[0];
            
        //             $objConceptos = new Conceptos ();
        //             $tablaResultadoIng = $objConceptos->consultarConceptosXidEdoRegistroYtipoConcepto(1,1);
        //             $tablaResultadoDesc = $objConceptos->consultarConceptosXidEdoRegistroYtipoConcepto(1,2);
        //             $objConceptos->cerrarConexion();
            
            
            $objPeriodo = new Periodo ();
            $tablaResPeriodo = $objPeriodo->consultarPeriodoXidEdoRegistro(1);
            $objPeriodo->cerrarConexion();
                                   
            if ($tablaResPeriodo==null) {
                $this->setParameter('btnEliminar', 'true');
                $this->setParameter('btnNuevo', 'true');
                $this->setParameter('btnAct', 'true');
                $msn = "No hay Periodo abierto";
                $this->setParameter('msnBloqueo', $msn);
                $this->ver('planBloqueada.tpl');
            }
            if ($tablaResultadoIng > 0 AND $tablaResPeriodo > 0) {
                $tablaResPeriodo = $tablaResPeriodo[0];
                //$nomAgrupado = $tablaResultado['idplanillaPensionadoPrimaria'] .' '. $tablaResultado['idEmpleadoÍndice'] .' '. $tablaResultado['idPeriodoÍndice'] .' '. $tablaResultado['idTipoPlanilla'];
                $nomAgrupado = $tablaResultado['nom1Persona'] .' '. $tablaResultado['ape1Persona'];
               
                $this->setParameter ( 'docPersona', $tablaResultado['dniPersona'] );
                $this->setParameter ( 'apellidos_y_nombresPersona', $nomAgrupado );
                $this->setParameter ( 'fecNacPersona', $tablaResultado['fecNacPersona'] );
                $this->setParameter ( 'tablaResultadoIng', $tablaResultadoIng );
                $this->setParameter ( 'tablaResultadoDesc', $tablaResultadoDesc );
                $this->setParameter ( 'idGenero', $tablaResultado['idGenero'] );
                $this->setParameter ( 'idPeriodo', $tablaResPeriodo['idPeriodo'] );
                $this->setParameter ( 'anio', $tablaResPeriodo['anioPeriodo'] );
                $this->setParameter ( 'mes', $tablaResPeriodo['mesPeriodo'] );
                $this->setParameter ( 'nomPeriodo', $tablaResPeriodo['nomPeriodo'] );
                //$this->setParameter ( 'fecplanillaPensionado', $tablaResultado['fecplanillaPensionado']);
            }
            if ($opcionMod) {
                $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
                //$this->setParameter ( 'fecplanillaPensionado', date("d-m-Y"));
                $this->setParameter ( 'fecplanillaPensionado', $tablaResultado['fecplanillaPensionado']);
                $this->ver('verplanilla.tpl', true);
            } else {
                $this->asignarParametros($request, 'mr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Editar' . ' ' . $this->modulo);
                $this->setParameter ( 'fecplanillaPensionado', $tablaResultado['fecplanillaPensionado']);
                $this->ver('planilla.tpl');
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
        $objPlanillaPensionado = new Planilla();
        $arreglo_ids = explode(',', $ids);
        foreach ($arreglo_ids as $idplanillaPensionado) {
            $tablaResultado = $objPlanillaPensionado->eliminarPlanillaPensionado($idplanillaPensionado);
        }
        $objPlanillaPensionado->cerrarConexion();
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
        //dump($request);die();
        $this->listar($request, $session);
    }

    function home($request, $session)
    {
        $this->verEditar('../principal/principal.php');
    }

    function ver($pagina, $formatoImpresion = false)
    {
        if ($formatoImpresion) {
            $this->setTemplateDir(VISTA . 'planilla/');
            $this->goForward($pagina);
        } else {
            $this->visualizar('planilla/' . $pagina);
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
        $cad = trim('impPlanPens.php');
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
        $cad = trim('impBolPlanPens.php');
        include $cad;
    }

    function ventanaConsultar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $objPlanillaPensionado = new Planilla();
        $tablaResultado = $objPlanillaPensionado->consultarPlanillaPensionadoXidPlanilla($this->id);
        $objPlanillaPensionado->cerrarConexion();
        if ($tablaResultado) {
            $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
            $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
            $this->ver('verplanilla.tpl', TRUE);
        } else {
            // $this->visualizar('principal/error.tpl');
        }
    }

    function inicializarCombos()
    {
        //         $tablaBanco = array(
        //             'BANCO DE CREDITO' => "BANCO DE CREDITO",
        //             'BANCO SCOTIABANK' => "BANCO SCOTIABANK",
        //             'BANCO DE LA NACIÓN' => "BANCO DE LA NACIÓN"
        //         );
        //         $this->setParameter('tablaBanco', $tablaBanco);
        
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
        $this->setParameter('tablaAnio', $tablaAnio);
        
        $objGenero = new Genero();
        $tablaGenero = Enumerado::tabla2enumerado($objGenero->consultarGenero(), '1', 0);
        $this->setParameter('tablaGenero', $tablaGenero);
        $objGenero->cerrarConexion();
        
        $objBanco = new Banco();
        $tablaBanco = Enumerado::tabla2enumerado($objBanco->consultarBanco(), '2', 0);
        $this->setParameter('tablaBanco', $tablaBanco);
        $objBanco->cerrarConexion();
    }
}
?>