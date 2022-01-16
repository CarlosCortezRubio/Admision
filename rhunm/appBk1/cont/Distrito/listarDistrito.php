<?php
/** 
 * @file distrito.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Distrito 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 11/08/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'Distrito.php');
require_once (MOD . 'Enumerado.php');
require_once (MOD . 'Provincia.php');

class principalDistrito extends Controller
{

    private $opt;

    // Atributos de
    // private $idDistrito;
    // private $idProvincia;
    // private $nomDistrito;
    function principalDistrito()
    {
        parent::__construct();
        $this->campos = 'idDistrito,idProvincia,nomDistrito';
        $this->modelo = 'Distrito';
        $this->modulo = 'Distrito';
        $this->setTemplateDir(TEMPLATE);
        $this->asignarConstantes();
        $this->setParameter('MOD', $this->modelo);
    }

    function listar($request, $session)
    {
        $this->llamadoXajax('Distrito');
        $this->setParameter('etiquetaModulo', 'Listar' . ' ' . $this->modulo);
        $this->setParameterPath('urlImp', 'base/Distrito/imprimir');
        $this->ver('listarDistrito.tpl');
    }

    function guardar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, $this->campos);
        $objDistrito = new Distrito();
        $tablaResultado = $objDistrito->agregarDistrito($this->idDistrito, $this->idProvincia, $this->nomDistrito);
        $objDistrito->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_INGRESAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_INGRESAR;
            $this->setParameter('error', $error);
            $this->asignarParametrosError($request, 'g', $this->modelo, 'guardar', '', $this->campos);
            $this->ver('Distrito.tpl');
        }
    }

    function ingresar($request, $session)
    {
        $this->llamadoXajax('Distrito');
        $opcion = $request['opcion'];
        $this->inicializarCombos();
        $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
        $this->setParameterPath('urlImp', '');
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        $this->ver('Distrito.tpl');
    }

    function actualizar($request, $session)
    {
        $this->inicializarAtributos($request, $this->campos);
        $objDistrito = new Distrito();
        $tablaResultado = $objDistrito->actualizarDistrito($this->idDistrito, $this->idProvincia, $this->nomDistrito, $this->idDistrito);
        $objDistrito->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_ACTUALIZAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_ACTUALIZAR;
            $this->asignarParametrosError($request, 'm', $this->modelo, 'actualizar', '', $this->campos);
            $this->setParameter('opt', 'mr');
            $this->ver('Distrito.tpl');
        }
    }

    function verEditar($request, $session, $opcionMod = false)
    {
        $this->llamadoXajax('Distrito');
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $this->inicializarCombos();
        $objDistrito = new Distrito();
        $tablaResultado = $objDistrito->consultarDistritoXidDistrito($this->id);
        $objDistrito->cerrarConexion();
        if ($tablaResultado) {
            $tablaResultado = $tablaResultado[0];
            if ($opcionMod) {
                $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
                $this->ver('verDistrito.tpl', true);
            } else {
                $this->asignarParametros($request, 'mr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Editar' . ' ' . $this->modulo);
                $this->ver('Distrito.tpl');
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
        $objDistrito = new Distrito();
        $arreglo_ids = split(',', $ids);
        foreach ($arreglo_ids as $idDistrito) {
            $tablaResultado = $objDistrito->eliminarDistrito($idDistrito);
        }
        $objDistrito->cerrarConexion();
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
            $this->setTemplateDir(VISTA . 'Distrito/');
            $this->goForward($pagina);
        } else {
            $this->visualizar('Distrito/' . $pagina);
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
        $objDistrito = new Distrito();
        $tablaResultado = $objDistrito->consultarDistritoXid($this->id);
        $objDistrito->cerrarConexion();
        if ($tablaResultado) {
            $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
            $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
            $this->ver('verDistrito.tpl', TRUE);
        } else {
            // $this->visualizar('principal/error.tpl');
        }
    }

    function inicializarCombos()
    {
        $objProvincia = new Provincia();
        $tablaProvincia = Enumerado::tabla2enumerado($objProvincia->consultarProvincia(), '2', 0);
        $this->setParameter('tablaProvincia', $tablaProvincia);
        $objProvincia->cerrarConexion();
    }
}
?>