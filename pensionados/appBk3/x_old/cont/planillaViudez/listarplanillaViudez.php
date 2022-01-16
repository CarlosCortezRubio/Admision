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
require_once (MOD . 'PlanillaPensionado.php');
require_once (MOD . 'Conceptos.php');
require_once (MOD . 'Periodo.php');
require_once (MOD . 'Genero.php');
require_once (MOD . 'Banco.php');
require_once (MOD . 'Enumerado.php');

class principalPlanillaViudez extends Controller
{
    private $opt;
    function principalPlanillaViudez()
    {
        parent::__construct();
        $this->campos = 'idTipoPlanilla,idplanillaPensionado,idPersona,idPeriodo,fecplanillaPensionado,totImpplanillaPensionado,totHabplanillaPensionado,totDescplanillaPensionado,totLiqplanillaPensionado,idPersona,idGenero,idEdoCivil,idBanco,idTipoPersona,idEdoRegistro,tipDocPersona,docPersona,nom1Persona,nom2Persona,ape1Persona,ape2Persona,fecNacPersona,tel1DomPersona,tel2DomPersona,emaDomPersona,codModularPersona,planillaPersona,tipRegPersona,resPenDefPersona,fecRes,ctaBancoPersona,fntFinancPersona,planilla2Persona,idBenefactorPersona,idConcPlanilla,idConceptos,idplanillaPensionado,mntConceptos';
        $this->modelo = 'planillaViudez';
        $this->modulo = 'PlanillaViudez';
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
        $this->llamadoXajax('planillaViudez');
        $this->setParameter('etiquetaModulo', 'Listar' . ' ' . $this->modulo);
        $this->setParameterPath('urlImp', 'base/planillaViudez/imprimir');
//         $this->setParameterPath('tipPlanilla', $request['id']);
        $this->ver('listarplanillaViudez.tpl');
    }

    function guardar($request, $session)
    {   
        $idTipoPlanilla = 2;
//         $idTipoPlanilla = $request['tipPlanilla'];
        foreach ($request as $clave => $valor) {
            if (strpos($clave,'idConc_')===0) {
//                 echo "{$clave} => {$valor} <br>";
                $matConceptos[] = array('idConcepto'=>$clave,'valConcepto'=>$valor);
            }
        }
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, $this->campos);
        
        $objPlanillaViudez = new PlanillaPensionado();
        $tablaResultado = $objPlanillaViudez->compAgregarPlanillaPensionado($this->idPersona, $this->idPeriodo, $this->fecplanillaPensionado, 
            $this->totImpplanillaPensionado, $this->totHabplanillaPensionado, $this->totDescplanillaPensionado, $this->totLiqplanillaPensionado,$matConceptos,$idTipoPlanilla);
        $objPlanillaViudez->cerrarConexion();
        
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_INGRESAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_INGRESAR;
            $this->setParameter('error', $error);
            $this->asignarParametrosError($request, 'g', $this->modelo, 'guardar', '', $this->campos);
            $this->ver('planillaViudez.tpl');
        }
    }

    function ingresar($request, $session)
    {
//         dump($request);die();
        $this->inicializarCombos();
        $this->llamadoXajax('planillaViudez');
        $opcion = $request['opcion'];
        $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
        $this->setParameterPath('urlImp', '');
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        
        $objConceptos = new Conceptos ();
            $tablaResultadoIng = $objConceptos->consultarConceptosXidEdoRegistroYtipoConcepto(1,1);
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
            if ($tablaResultado) {
                $msg = "No hay conceptos activos";
                echo "$msg";
            }else{
                $msg = "No hay Periodo activo";
                echo "$msg";
            }
        }
        $this->setParameter('btnPreG', '1');
        $this->ver('planillaViudez.tpl');
    }

    function actualizar($request, $session)
    {
        foreach ($request as $clave => $valor) {
            if (strpos($clave,'idConc_')===0) {
//                 echo "{$clave} => {$valor} <br>";
                $matConceptos[] = array('idConcepto'=>$clave,'valConcepto'=>$valor);
            }
        }
        $this->inicializarAtributos($request, $this->campos);
        $objPlanillaViudez = new PlanillaPensionado();
        $tablaResultado = $objPlanillaViudez->compActualizarPlanillaPensionado ( $this->idPersona, $this->idPeriodo, $this->fecplanillaPensionado, 
            $this->totImpplanillaPensionado, $this->totHabplanillaPensionado, $this->totDescplanillaPensionado, $this->totLiqplanillaPensionado, 
            $matConceptos,$this->idplanillaPensionado);
        $objPlanillaViudez->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_ACTUALIZAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_ACTUALIZAR;
            $this->asignarParametrosError($request, 'm', $this->modelo, 'actualizar', '', $this->campos);
            $this->setParameter('opt', 'mr');
            $this->ver('planillaViudez.tpl');
        }
    }

    function verEditar($request, $session, $opcionMod = false)
    {
        $this->inicializarCombos();
        $this->llamadoXajax('planillaViudez');
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $objPlanillaViudez = new PlanillaPensionado();
        $tablaResultado = $objPlanillaViudez->consultarPlanillaPensionadoXidplanillaPensionado($this->id);
        $objPlanillaViudez->cerrarConexion();
        $tablaResultadoIng = $tablaResultado;
        $tablaResultadoDesc = $tablaResultado;
//         dump($tablaResultado);die();
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
                $nomAgrupado = $tablaResultado['nom1Persona'] .' '. $tablaResultado['nom2Persona'] .' '. $tablaResultado['ape1Persona'] .' '. $tablaResultado['ape2Persona'];
                $this->setParameter ( 'apellidos_y_nombresPersona', $nomAgrupado );
                $this->setParameter ( 'tablaResultadoIng', $tablaResultadoIng );
                $this->setParameter ( 'tablaResultadoDesc', $tablaResultadoDesc );
                
                $this->setParameter ( 'idPeriodo', $tablaResPeriodo['idPeriodo'] );
                $this->setParameter ( 'anio', $tablaResPeriodo['anioPeriodo'] );
                $this->setParameter ( 'mes', $tablaResPeriodo['mesPeriodo'] );
                $this->setParameter ( 'nomPeriodo', $tablaResPeriodo['nomPeriodo'] );
                $this->setParameter ( 'fecplanillaPensionado', date("d-m-Y"));
            }
            if ($opcionMod) {
                $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
                $this->setParameter ( 'fecplanillaPensionado', date("d-m-Y"));
                $this->ver('verplanillaPensionado.tpl', true);
            } else {
                $this->asignarParametros($request, 'mr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Editar' . ' ' . $this->modulo);
                $this->setParameter ( 'fecplanillaPensionado', date("d-m-Y"));
                $this->ver('planillaViudez.tpl');
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
        $objPlanillaViudez = new PlanillaPensionado();
        $arreglo_ids = explode(',', $ids);
        foreach ($arreglo_ids as $idplanillaPensionado) {
            $tablaResultado = $objPlanillaViudez->eliminarPlanillaPensionado($idplanillaPensionado);
        }
        $objPlanillaViudez->cerrarConexion();
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
        dump($request);die();
        $this->listar($request, $session);
    }

    function home($request, $session)
    {
        $this->verEditar('../principal/principal.php');
    }

    function ver($pagina, $formatoImpresion = false)
    {
        if ($formatoImpresion) {
            $this->setTemplateDir(VISTA . 'planillaViudez/');
            $this->goForward($pagina);
        } else {
            $this->visualizar('planillaViudez/' . $pagina);
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
        $objPlanillaViudez = new PlanillaPensionado();
        $tablaResultado = $objPlanillaViudez->consultarPlanillaPensionadoXid($this->id);
        $objPlanillaViudez->cerrarConexion();
        if ($tablaResultado) {
            $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
            $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
            $this->ver('verplanillaViudez.tpl', TRUE);
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