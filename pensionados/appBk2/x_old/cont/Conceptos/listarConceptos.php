<?php
/** 
 * @file conceptos.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Conceptos 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 17/10/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'Conceptos.php');
require_once (MOD . 'Enumerado.php');
require_once (MOD . 'TipoConcepto.php');
require_once (MOD . 'EdoRegistro.php');

class principalConceptos extends Controller
{

    private $opt;
    function principalConceptos()
    {
        parent::__construct();
        $this->campos = 'idConceptos,idTipoConcepto,idEdoRegistro,codConceptos,nomConceptos,etiConceptos,mntConceptos,formConceptos,ordConceptos,afecta_afp,afecta_snp,afecta_ipss,es_remunera,grpConceptos';
        $this->modelo = 'Conceptos';
        $this->modulo = 'Conceptos';
        $this->setTemplateDir(TEMPLATE);
        $this->asignarConstantes();
        $this->setParameter('MOD', $this->modelo);
    }

    function listar($request, $session)
    {
        $this->llamadoXajax('Conceptos');
        $this->inicializarCombos();
        $this->setParameter('etiquetaModulo', 'Listar' . ' ' . $this->modulo);
        $this->setParameterPath('urlImp', 'base/Conceptos/imprimir');
        $this->setParameterPath('idEdoRegistro', 1);
        $this->setParameterPath('grpConceptos', 1);
        $this->ver('listarConceptos.tpl');
    }

    function guardar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, $this->campos);
        $objConceptos = new Conceptos();
        $tablaResultado = $objConceptos->agregarConceptos($this->idConceptos, $this->idTipoConcepto, $this->idEdoRegistro, $this->codConceptos, $this->nomConceptos, $this->etiConceptos, $this->mntConceptos, $this->formConceptos, $this->ordConceptos, $this->afecta_afp, $this->afecta_snp, $this->afecta_ipss, $this->es_remunera, $this->grpConceptos);
        $objConceptos->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_INGRESAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_INGRESAR;
            $this->setParameter('error', $error);
            $this->asignarParametrosError($request, 'g', $this->modelo, 'guardar', '', $this->campos);
            $this->ver('Conceptos.tpl');
        }
    }

    function ingresar($request, $session)
    {
        $this->llamadoXajax('Conceptos');
        $opcion = $request['opcion'];
        $this->inicializarCombos();
        $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
        $this->setParameterPath('urlImp', '');
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        $this->ver('Conceptos.tpl');
    }

    function actualizar($request, $session)
    {
        $this->inicializarAtributos($request, $this->campos);
        $objConceptos = new Conceptos();
        $tablaResultado = $objConceptos->actualizarConceptos($this->idConceptos, $this->idTipoConcepto, $this->idEdoRegistro, $this->codConceptos, $this->nomConceptos, $this->etiConceptos, $this->mntConceptos, $this->formConceptos, $this->ordConceptos, $this->afecta_afp, $this->afecta_snp, $this->afecta_ipss, $this->es_remunera, $this->grpConceptos, $this->idConceptos);
        $objConceptos->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_ACTUALIZAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_ACTUALIZAR;
            $this->asignarParametrosError($request, 'm', $this->modelo, 'actualizar', '', $this->campos);
            $this->setParameter('opt', 'mr');
            $this->ver('Conceptos.tpl');
        }
    }

    function verEditar($request, $session, $opcionMod = false)
    {
        $this->llamadoXajax('Conceptos');
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $this->inicializarCombos();
        $objConceptos = new Conceptos();
        $tablaResultado = $objConceptos->consultarConceptosXidConceptos($this->id);
        $objConceptos->cerrarConexion();
        if ($tablaResultado) {
            $tablaResultado = $tablaResultado[0];
            if ($opcionMod) {
                $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
                $this->ver('verConceptos.tpl', true);
            } else {
                $this->asignarParametros($request, 'mr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Editar' . ' ' . $this->modulo);
                $this->ver('Conceptos.tpl');
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
        $objConceptos = new Conceptos();
        $arreglo_ids = explode(',', $ids);
        foreach ($arreglo_ids as $idConceptos) {
            $tablaResultado = $objConceptos->eliminarConceptos($idConceptos);
        }
        $objConceptos->cerrarConexion();
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
            $this->setTemplateDir(VISTA . 'Conceptos/');
            $this->goForward($pagina);
        } else {
            $this->visualizar('Conceptos/' . $pagina);
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
        $objConceptos = new Conceptos();
        $tablaResultado = $objConceptos->consultarConceptosXid($this->id);
        $objConceptos->cerrarConexion();
        if ($tablaResultado) {
            $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
            $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
            $this->ver('verConceptos.tpl', TRUE);
        } else {
            // $this->visualizar('principal/error.tpl');
        }
    }

    function inicializarCombos()
    {
        $objTipoConcepto = new TipoConcepto();
        $tablaTipoConcepto = Enumerado::tabla2enumerado($objTipoConcepto->consultarTipoConcepto(), '2', 0);
        $this->setParameter('tablaTipoConcepto', $tablaTipoConcepto);
        $objTipoConcepto->cerrarConexion();
        
        $objEdoRegistro = new EdoRegistro();
        $tablaEdoRegistro = Enumerado::tabla2enumerado($objEdoRegistro->consultarEdoRegistro(), '1', 0);
        $this->setParameter('tablaEdoRegistro', $tablaEdoRegistro);
        $objEdoRegistro->cerrarConexion();
        
        $tablaGrpConceptos = array(
            1 => "Pensionistas"
        );
        $this->setParameter('tablaGrpConceptos', $tablaGrpConceptos);
    }
}
?>