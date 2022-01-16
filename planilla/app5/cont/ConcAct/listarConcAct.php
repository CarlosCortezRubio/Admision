<?php
/** 
 * @file concact.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla ConcAct 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 31/05/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'ConcAct.php');
require_once (MOD . 'Enumerado.php');

class principalConcAct extends Controller
{
    private $opt;
    // Atributos de
    // private $idConcAct;
    function principalConcAct()
    {
        parent::__construct();
        $this->campos = 'idConcAct,aguinaldoConcAct,basicaConcAct,bonif_personalConcAct,ael25671ConcAct,aeds081ConcAct,tphConcAct,bonif_familiarConcAct,du080_04ConcAct,refrig_y_moviConcAct,du90_96ConcAct,ds19_94_pcmConcAct,ds21_92_pcmConcAct,bon_especialConcAct,reunificadaConcAct,igvConcAct,cargsimulConcAct,art18_dl_20530ConcAct,du073_97ConcAct,du011_99ConcAct,du037_94ConcAct,ds016ConcAct,ds017ConcAct,ds110_2006ConcAct,ds039_2007ConcAct,ds120_2008ConcAct,ds014_2009ConcAct,ds077_2010ConcAct,ds031_2011ConcAct,ds024_2012ConcAct,ds004_2013ConcAct,ds003_2014ConcAct,ds002_2015ConcAct,ds005_2016ConcAct,ds020_2017ConcAct,ds011_2018ConcAct,ds009_2019ConcAct,ds006_2020ConcAct,ipssConcAct,cafaeConcAct,prderrmaConcAct,p_del20530ConcAct';
        $this->modelo = 'ConcAct';
        $this->modulo = 'ConcAct';
        $this->setTemplateDir(TEMPLATE);
        $this->asignarConstantes();
        $this->setParameter('MOD', $this->modelo);
    }

    function listar($request, $session)
    {
//         $this->llamadoXajax('ConcAct');
//         $this->setParameter('etiquetaModulo', 'Listar' . ' ' . $this->modulo);
//         $this->setParameterPath('urlImp', 'base/ConcAct/imprimir');
//         $this->ver('listarConcAct.tpl');
        $this->setParameterPath ( 'desactivarOpciones', true );
        $this->visualizar('principal/principal.tpl');
    }

    function guardar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, $this->campos);
        $objConcAct = new ConcAct();
        $tablaResultado = $objConcAct->agregarConcAct($this->idConcAct, $this->aguinaldoConcAct, $this->basicaConcAct, $this->bonif_personalConcAct, $this->ael25671ConcAct, $this->aeds081ConcAct, $this->tphConcAct, $this->bonif_familiarConcAct, $this->du080_04ConcAct, $this->refrig_y_moviConcAct, $this->du90_96ConcAct, $this->ds19_94_pcmConcAct, $this->ds21_92_pcmConcAct, $this->bon_especialConcAct, $this->reunificadaConcAct, $this->igvConcAct, $this->cargsimulConcAct, $this->art18_dl_20530ConcAct, $this->du073_97ConcAct, $this->du011_99ConcAct, $this->du037_94ConcAct, $this->ds016ConcAct, $this->ds017ConcAct, $this->ds110_2006ConcAct, $this->ds039_2007ConcAct, $this->ds120_2008ConcAct, $this->ds014_2009ConcAct, $this->ds077_2010ConcAct, $this->ds031_2011ConcAct, $this->ds024_2012ConcAct, $this->ds004_2013ConcAct, $this->ds003_2014ConcAct, $this->ds002_2015ConcAct, $this->ds005_2016ConcAct, $this->ds020_2017ConcAct, $this->ds011_2018ConcAct, $this->ds009_2019ConcAct, $this->ds006_2020ConcAct, $this->ipssConcAct, $this->cafaeConcAct, $this->prderrmaConcAct,$this->p_del20530ConcAct);
        $objConcAct->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_INGRESAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_INGRESAR;
            $this->setParameter('error', $error);
            $this->asignarParametrosError($request, 'g', $this->modelo, 'guardar', '', $this->campos);
            $this->ver('ConcAct.tpl');
        }
    }

    function ingresar($request, $session)
    {
        $this->llamadoXajax('ConcAct');
        $opcion = $request['opcion'];
        $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
        $this->setParameterPath('urlImp', '');
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        $this->ver('ConcAct.tpl');
    }

    function actualizar($request, $session)
    {
//         dump($request);
        $this->inicializarAtributos($request, $this->campos);
        $objConcAct = new ConcAct();
        $tablaResultado = $objConcAct->actualizarConcAct($this->aguinaldoConcAct, $this->basicaConcAct, $this->bonif_personalConcAct, $this->ael25671ConcAct, $this->aeds081ConcAct, $this->tphConcAct, $this->bonif_familiarConcAct, $this->du080_04ConcAct, $this->refrig_y_moviConcAct, $this->du90_96ConcAct, $this->ds19_94_pcmConcAct, $this->ds21_92_pcmConcAct, $this->bon_especialConcAct, $this->reunificadaConcAct, $this->igvConcAct, $this->cargsimulConcAct, $this->art18_dl_20530ConcAct, $this->du073_97ConcAct, $this->du011_99ConcAct, $this->du037_94ConcAct, $this->ds016ConcAct, $this->ds017ConcAct, $this->ds110_2006ConcAct, $this->ds039_2007ConcAct, $this->ds120_2008ConcAct, $this->ds014_2009ConcAct, $this->ds077_2010ConcAct, $this->ds031_2011ConcAct, $this->ds024_2012ConcAct, $this->ds004_2013ConcAct, $this->ds003_2014ConcAct, $this->ds002_2015ConcAct, $this->ds005_2016ConcAct, $this->ds020_2017ConcAct, $this->ds011_2018ConcAct, $this->ds009_2019ConcAct, $this->ds006_2020ConcAct, $this->ipssConcAct, $this->cafaeConcAct, $this->prderrmaConcAct,$this->p_del20530ConcAct, $this->idConcAct);
        $objConcAct->cerrarConexion();
//         die();
        if ($tablaResultado > 0) {
            $this->setParameterPath ( 'desactivarOpciones', true );
            $exito = Messages::EXITO_ACTUALIZAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
//             $this->listar($request, $session);
//             $this->ver('ConcAct.tpl');
            $this->visualizar('principal/principal.tpl');
        } else {
            $error = Messages::ERROR_ACTUALIZAR;
            $this->asignarParametrosError($request, 'm', $this->modelo, 'actualizar', '', $this->campos);
            $this->setParameter('opt', 'mr');
            $this->ver('ConcAct.tpl');
        }
    }

    function verEditar($request, $session, $opcionMod = false)
    {
        $this->llamadoXajax('ConcAct');
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $objConcAct = new ConcAct();
        $tablaResultado = $objConcAct->consultarConcActXidConcAct($this->id);
        $objConcAct->cerrarConexion();
        if ($tablaResultado) {
            $tablaResultado = $tablaResultado[0];
            if ($opcionMod) {
                $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
                $this->ver('verConcAct.tpl', true);
            } else {
                $this->asignarParametros($request, 'mr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Editar' . ' ' . $this->modulo);
                $this->ver('ConcAct.tpl');
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
        $objConcAct = new ConcAct();
        $arreglo_ids = split(',', $ids);
        foreach ($arreglo_ids as $idConcAct) {
            $tablaResultado = $objConcAct->eliminarConcAct($idConcAct);
        }
        $objConcAct->cerrarConexion();
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
//         $this->listar($request, $session);
        $this->setParameterPath ( 'desactivarOpciones', true );
        $this->visualizar('principal/principal.tpl');
    }

    function home($request, $session)
    {
        $this->verEditar('../principal/principal.php');
    }

    function ver($pagina, $formatoImpresion = false)
    {
        if ($formatoImpresion) {
            $this->setTemplateDir(VISTA . 'ConcAct/');
            $this->goForward($pagina);
        } else {
            $this->visualizar('ConcAct/' . $pagina);
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
        $objConcAct = new ConcAct();
        $tablaResultado = $objConcAct->consultarConcActXid($this->id);
        $objConcAct->cerrarConexion();
        if ($tablaResultado) {
            $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
            $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
            $this->ver('verConcAct.tpl', TRUE);
        } else {
            // $this->visualizar('principal/error.tpl');
        }
    }
}
?>