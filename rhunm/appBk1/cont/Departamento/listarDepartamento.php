<?php
/** 
 * @file departamento.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Departamento 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 11/08/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'Departamento.php');
require_once (MOD . 'Enumerado.php');
require_once (MOD . 'Pais.php');

class principalDepartamento extends Controller
{

    private $opt;

    // Atributos de
    // private $idDepartamento;
    // private $idPais;
    // private $nomDepartamento;
    function principalDepartamento()
    {
        parent::__construct();
        $this->campos = 'idDepartamento,idPais,nomDepartamento';
        $this->modelo = 'Departamento';
        $this->modulo = 'Departamento';
        $this->setTemplateDir(TEMPLATE);
        $this->asignarConstantes();
        $this->setParameter('MOD', $this->modelo);
    }

    function listar($request, $session)
    {
        $this->llamadoXajax('Departamento');
        $this->setParameter('etiquetaModulo', 'Listar' . ' ' . $this->modulo);
        $this->setParameterPath('urlImp', 'base/Departamento/imprimir');
        $this->ver('listarDepartamento.tpl');
    }

    function guardar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, $this->campos);
        $objDepartamento = new Departamento();
        $tablaResultado = $objDepartamento->agregarDepartamento($this->idDepartamento, $this->idPais, $this->nomDepartamento);
        $objDepartamento->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_INGRESAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_INGRESAR;
            $this->setParameter('error', $error);
            $this->asignarParametrosError($request, 'g', $this->modelo, 'guardar', '', $this->campos);
            $this->ver('Departamento.tpl');
        }
    }

    function ingresar($request, $session)
    {
        $this->llamadoXajax('Departamento');
        $opcion = $request['opcion'];
        $this->inicializarCombos();
        $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
        $this->setParameterPath('urlImp', '');
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        $this->ver('Departamento.tpl');
    }

    function actualizar($request, $session)
    {
        $this->inicializarAtributos($request, $this->campos);
        $objDepartamento = new Departamento();
        $tablaResultado = $objDepartamento->actualizarDepartamento($this->idDepartamento, $this->idPais, $this->nomDepartamento, $this->idDepartamento);
        $objDepartamento->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_ACTUALIZAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_ACTUALIZAR;
            $this->asignarParametrosError($request, 'm', $this->modelo, 'actualizar', '', $this->campos);
            $this->setParameter('opt', 'mr');
            $this->ver('Departamento.tpl');
        }
    }

    function verEditar($request, $session, $opcionMod = false)
    {
        $this->llamadoXajax('Departamento');
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $this->inicializarCombos();
        $objDepartamento = new Departamento();
        $tablaResultado = $objDepartamento->consultarDepartamentoXidDepartamento($this->id);
        $objDepartamento->cerrarConexion();
        if ($tablaResultado) {
            $tablaResultado = $tablaResultado[0];
            if ($opcionMod) {
                $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
                $this->ver('verDepartamento.tpl', true);
            } else {
                $this->asignarParametros($request, 'mr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Editar' . ' ' . $this->modulo);
                $this->ver('Departamento.tpl');
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
        $objDepartamento = new Departamento();
        $arreglo_ids = split(',', $ids);
        foreach ($arreglo_ids as $idDepartamento) {
            $tablaResultado = $objDepartamento->eliminarDepartamento($idDepartamento);
        }
        $objDepartamento->cerrarConexion();
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
            $this->setTemplateDir(VISTA . 'Departamento/');
            $this->goForward($pagina);
        } else {
            $this->visualizar('Departamento/' . $pagina);
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
        $objDepartamento = new Departamento();
        $tablaResultado = $objDepartamento->consultarDepartamentoXid($this->id);
        $objDepartamento->cerrarConexion();
        if ($tablaResultado) {
            $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
            $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
            $this->ver('verDepartamento.tpl', TRUE);
        } else {
            // $this->visualizar('principal/error.tpl');
        }
    }

    function inicializarCombos()
    {
        $objPais = new Pais();
        $tablaPais = Enumerado::tabla2enumerado($objPais->consultarPais(), '1', 0);
        $this->setParameter('tablaPais', $tablaPais);
        $objPais->cerrarConexion();
    }
}
?>