<?php
/** 
 * @file provincia.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Provincia 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 11/08/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'Provincia.php');
require_once (MOD . 'Enumerado.php');
require_once (MOD . 'Departamento.php');

class principalProvincia extends Controller
{

    private $opt;

    // Atributos de
    // private $idProvincia;
    // private $idDepartamento;
    // private $nomProvincia;
    function principalProvincia()
    {
        parent::__construct();
        $this->campos = 'idProvincia,idDepartamento,nomProvincia';
        $this->modelo = 'Provincia';
        $this->modulo = 'Provincia';
        $this->setTemplateDir(TEMPLATE);
        $this->asignarConstantes();
        $this->setParameter('MOD', $this->modelo);
    }

    function listar($request, $session)
    {
        $this->llamadoXajax('Provincia');
        $this->setParameter('etiquetaModulo', 'Listar' . ' ' . $this->modulo);
        $this->setParameterPath('urlImp', 'base/Provincia/imprimir');
        $this->ver('listarProvincia.tpl');
    }

    function guardar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, $this->campos);
        $objProvincia = new Provincia();
        $tablaResultado = $objProvincia->agregarProvincia($this->idProvincia, $this->idDepartamento, $this->nomProvincia);
        $objProvincia->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_INGRESAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_INGRESAR;
            $this->setParameter('error', $error);
            $this->asignarParametrosError($request, 'g', $this->modelo, 'guardar', '', $this->campos);
            $this->ver('Provincia.tpl');
        }
    }

    function ingresar($request, $session)
    {
        $this->llamadoXajax('Provincia');
        $opcion = $request['opcion'];
        $this->inicializarCombos();
        $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
        $this->setParameterPath('urlImp', '');
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        $this->ver('Provincia.tpl');
    }

    function actualizar($request, $session)
    {
        $this->inicializarAtributos($request, $this->campos);
        $objProvincia = new Provincia();
        $tablaResultado = $objProvincia->actualizarProvincia($this->idProvincia, $this->idDepartamento, $this->nomProvincia, $this->idProvincia);
        $objProvincia->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_ACTUALIZAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_ACTUALIZAR;
            $this->asignarParametrosError($request, 'm', $this->modelo, 'actualizar', '', $this->campos);
            $this->setParameter('opt', 'mr');
            $this->ver('Provincia.tpl');
        }
    }

    function verEditar($request, $session, $opcionMod = false)
    {
        $this->llamadoXajax('Provincia');
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $this->inicializarCombos();
        $objProvincia = new Provincia();
        $tablaResultado = $objProvincia->consultarProvinciaXidProvincia($this->id);
        $objProvincia->cerrarConexion();
        if ($tablaResultado) {
            $tablaResultado = $tablaResultado[0];
            if ($opcionMod) {
                $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
                $this->ver('verProvincia.tpl', true);
            } else {
                $this->asignarParametros($request, 'mr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Editar' . ' ' . $this->modulo);
                $this->ver('Provincia.tpl');
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
        $objProvincia = new Provincia();
        $arreglo_ids = explode(',', $ids);
        foreach ($arreglo_ids as $idProvincia) {
            $tablaResultado = $objProvincia->eliminarProvincia($idProvincia);
        }
        $objProvincia->cerrarConexion();
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
            $this->setTemplateDir(VISTA . 'Provincia/');
            $this->goForward($pagina);
        } else {
            $this->visualizar('Provincia/' . $pagina);
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
        $objProvincia = new Provincia();
        $tablaResultado = $objProvincia->consultarProvinciaxIdProvincia($this->id);
        $objProvincia->cerrarConexion();
        if ($tablaResultado) {
            $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
            $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
            $this->ver('verProvincia.tpl', TRUE);
        } else {
            // $this->visualizar('principal/error.tpl');
        }
    }

    function inicializarCombos()
    {
        $objDepartamento = new Departamento();
        $tablaDepartamento = Enumerado::tabla2enumerado($objDepartamento->consultarDepartamento(), '2', 0);
        $this->setParameter('tablaDepartamento', $tablaDepartamento);
        $objDepartamento->cerrarConexion();
    }
}
?>