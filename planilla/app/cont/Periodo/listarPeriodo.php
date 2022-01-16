<?php
/** 
 * @file periodo.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Periodo 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 19/09/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'Periodo.php');
require_once (MOD . 'Enumerado.php');

class principalPeriodo extends Controller
{

    private $opt;

    // Atributos de
    // private $idPeriodo;
    // private $anioPeriodo;
    // private $mesPeriodo;
    // private $nomPeriodo;
    // private $edoPeriodo;
    // private $obsPeriodo;
    function principalPeriodo()
    {
        parent::__construct();
        $this->campos = 'idPeriodo,anioPeriodo,mesPeriodo,nomPeriodo,edoPeriodo,obsPeriodo';
        $this->modelo = 'Periodo';
        $this->modulo = 'Periodo';
        $this->setTemplateDir(TEMPLATE);
        $this->asignarConstantes();
        $this->setParameter('MOD', $this->modelo);
    }

    function listar($request, $session)
    {
        $this->llamadoXajax('Periodo');
        $this->setParameter('etiquetaModulo', 'Listar' . ' ' . $this->modulo);
        $this->setParameterPath('urlImp', 'base/Periodo/imprimir');
        $this->ver('listarPeriodo.tpl');
    }

    function guardar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, $this->campos);
        $objPeriodo = new Periodo();
        $tablaResultado = $objPeriodo->agregarPeriodo($this->idPeriodo, $this->anioPeriodo, $this->mesPeriodo, $this->nomPeriodo, $this->edoPeriodo, $this->obsPeriodo);
        $objPeriodo->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_INGRESAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_INGRESAR;
            $this->setParameter('error', $error);
            $this->asignarParametrosError($request, 'g', $this->modelo, 'guardar', '', $this->campos);
            $this->ver('Periodo.tpl');
        }
    }

    function ingresar($request, $session)
    {
        $this->llamadoXajax('Periodo');
        $opcion = $request['opcion'];
        $this->inicializarCombos();
        $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
        $this->setParameterPath('urlImp', '');
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        $this->ver('Periodo.tpl');
    }
    function duplicar($request, $session)
    {
        $this->setParameterPath ( 'btnNuevo', true );
        $objPeriodo = new Periodo();
        $tablaPeriodo = $objPeriodo->consultarPeriodoXedoPeriodo(1);
        $objPeriodo->cerrarConexion();
//         dump($tablaPeriodo);die();
//         if (count($tablaPeriodo>0)) {
        if ($tablaPeriodo != null) {
            $tablaPeriodo = $tablaPeriodo[0];
            $this->setParameter('idPeriodo', $tablaPeriodo['idPeriodo']);
            $this->setParameter('anioPeriodo', $tablaPeriodo['anioPeriodo']);
            $this->setParameter('mesPeriodo', $tablaPeriodo['mesPeriodo']);
            $this->setParameter('nomPeriodo', $tablaPeriodo['nomPeriodo']);
            
            $this->llamadoXajax('Periodo');
            $opcion = $request['opcion'];
            $this->inicializarCombos();
            $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
            $this->setParameterPath('urlImp', '');
            
            
        }else{
            $this->setParameterPath('band', 'true');
        }
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        $this->ver('Duplicar.tpl');
    }

    function actualizar($request, $session)
    {
        $this->inicializarAtributos($request, $this->campos);
        $objPeriodo = new Periodo();
        $tablaResultado = $objPeriodo->actualizarPeriodo($this->idPeriodo, $this->anioPeriodo, $this->mesPeriodo, $this->nomPeriodo, $this->edoPeriodo, $this->obsPeriodo, $this->idPeriodo);
        $objPeriodo->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_ACTUALIZAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_ACTUALIZAR;
            $this->asignarParametrosError($request, 'm', $this->modelo, 'actualizar', '', $this->campos);
            $this->setParameter('opt', 'mr');
            $this->ver('Periodo.tpl');
        }
    }

    function verEditar($request, $session, $opcionMod = false)
    {
        $this->llamadoXajax('Periodo');
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $this->inicializarCombos();
        $objPeriodo = new Periodo();
        $tablaResultado = $objPeriodo->consultarPeriodoXidPeriodo($this->id);
        $objPeriodo->cerrarConexion();
        if ($tablaResultado) {
            $tablaResultado = $tablaResultado[0];
            if ($opcionMod) {
                $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
                $this->ver('verPeriodo.tpl', true);
            } else {
                $this->asignarParametros($request, 'mr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Editar' . ' ' . $this->modulo);
                $this->ver('Periodo.tpl');
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
        $objPeriodo = new Periodo();
        $arreglo_ids = split(',', $ids);
        foreach ($arreglo_ids as $idPeriodo) {
            $tablaResultado = $objPeriodo->eliminarPeriodo($idPeriodo);
        }
        $objPeriodo->cerrarConexion();
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
            $this->setTemplateDir(VISTA . 'Periodo/');
            $this->goForward($pagina);
        } else {
            $this->visualizar('Periodo/' . $pagina);
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
        $objPeriodo = new Periodo();
        $tablaResultado = $objPeriodo->consultarPeriodoXid($this->id);
        $objPeriodo->cerrarConexion();
        if ($tablaResultado) {
            $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
            $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
            $this->ver('verPeriodo.tpl', TRUE);
        } else {
            // $this->visualizar('principal/error.tpl');
        }
    }

    function inicializarCombos()
    {
        $anioIni = 2021;
        $anioFin = date('Y');
        // $n = 0;
        for ($i = $anioIni; $i < $anioFin + 1; $i ++) {
            // echo "$i<br>";
            $tablaAnioPeriodo[$i] = $i;
        }
        $this->setParameter('tablaAnioPeriodo', $tablaAnioPeriodo);

        $tablaMesPeriodo = array(
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
        $this->setParameter('tablaMesPeriodo', $tablaMesPeriodo);

        $tablaTipoPlanilla = array(
            1 => "Pensionista",
            2 => "Viudez",
            3 => "Orfandad"
        );
        $this->setParameter('tablaTipoPlanilla', $tablaTipoPlanilla);
        
        $tablaEdoPeriodo = array(
            1 => "Abierto",
            2 => "Cerrado"
        );
        $this->setParameter('tablaEdoPeriodo', $tablaEdoPeriodo);
        
        $objPeriodo = new Periodo();
        $tablaPeriodo = Enumerado::tabla2enumerado($objPeriodo->consultarPeriodo(), '3', 0);
        $this->setParameter('tablaPeriodo', $tablaPeriodo);
        $objPeriodo->cerrarConexion();
    }
}
?>