<?php
/** 
 * @file curso.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Curso 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'Curso.php');
require_once (MOD . 'Enumerado.php');
require_once (MOD . 'Periodo.php');
require_once (MOD . 'ProgEstudio.php');
require_once (MOD . 'EdoRegistro.php');
require_once (MOD . 'Empleado.php');
require_once (MOD . 'Pensum.php');
require_once (MOD . 'Asignatura.php');

class principalCurso extends Controller
{

    private $opt;

    // Atributos de
    // private $idCurso;
    // private $idPeriodo;
    // private $idProgEstudio;
    // private $idEdoRegistro;
    // private $idEmpleado;
    // private $idPensum;
    // private $idAsignatura;
    // private $codCurso;
    // private $nomCurso;
    // private $cupMaxCurso;
    // private $fecIniCurso;
    // private $fecFinCurso;
    function principalCurso()
    {
        parent::__construct();
        $this->campos = 'idCurso,idPeriodo,idProgEstudio,idEdoRegistro,idEmpleado,idPensum,idAsignatura,codCurso,nomCurso,cupMaxCurso,fecIniCurso,fecFinCurso';
        $this->modelo = 'Curso';
        $this->modulo = 'Curso';
        $this->setTemplateDir(TEMPLATE);
        $this->asignarConstantes();
        $this->setParameter('MOD', $this->modelo);
    }

    function listar($request, $session)
    {
        $this->llamadoXajax('Curso');
        $this->setParameter('etiquetaModulo', 'Listar' . ' ' . $this->modulo);
        $this->setParameterPath('urlImp', 'base/Curso/imprimir');
        $this->ver('listarCurso.tpl');
    }

    function guardar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, $this->campos);
        $objCurso = new Curso();
        $tablaResultado = $objCurso->agregarCurso($this->idCurso, $this->idPeriodo, $this->idProgEstudio, $this->idEdoRegistro, $this->idEmpleado, $this->idPensum, $this->idAsignatura, $this->codCurso, $this->nomCurso, $this->cupMaxCurso, $this->fecIniCurso, $this->fecFinCurso);
        $objCurso->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_INGRESAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_INGRESAR;
            $this->setParameter('error', $error);
            $this->asignarParametrosError($request, 'g', $this->modelo, 'guardar', '', $this->campos);
            $this->ver('Curso.tpl');
        }
    }

    function ingresar($request, $session)
    {
        $this->llamadoXajax('Curso');
        $opcion = $request['opcion'];
        $this->inicializarCombos();
        $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
        $this->setParameterPath('urlImp', '');
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        $this->ver('Curso.tpl');
    }

    function actualizar($request, $session)
    {
        $this->inicializarAtributos($request, $this->campos);
        $objCurso = new Curso();
        $tablaResultado = $objCurso->actualizarCurso($this->idCurso, $this->idPeriodo, $this->idProgEstudio, $this->idEdoRegistro, $this->idEmpleado, $this->idPensum, $this->idAsignatura, $this->codCurso, $this->nomCurso, $this->cupMaxCurso, $this->fecIniCurso, $this->fecFinCurso, $this->idCurso);
        $objCurso->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_ACTUALIZAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_ACTUALIZAR;
            $this->asignarParametrosError($request, 'm', $this->modelo, 'actualizar', '', $this->campos);
            $this->setParameter('opt', 'mr');
            $this->ver('Curso.tpl');
        }
    }

    function verEditar($request, $session, $opcionMod = false)
    {
        $this->llamadoXajax('Curso');
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $this->inicializarCombos();
        $objCurso = new Curso();
        $tablaResultado = $objCurso->consultarCursoXidCurso($this->id);
        $objCurso->cerrarConexion();
        if ($tablaResultado) {
            $tablaResultado = $tablaResultado[0];
            if ($opcionMod) {
                $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
                $this->ver('verCurso.tpl', true);
            } else {
                $this->asignarParametros($request, 'mr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Editar' . ' ' . $this->modulo);
                $this->ver('Curso.tpl');
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
        $objCurso = new Curso();
        $arreglo_ids = explode(',', $ids);
        foreach ($arreglo_ids as $idCurso) {
            $tablaResultado = $objCurso->eliminarCurso($idCurso);
        }
        $objCurso->cerrarConexion();
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
            $this->setTemplateDir(VISTA . 'Curso/');
            $this->goForward($pagina);
        } else {
            $this->visualizar('Curso/' . $pagina);
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
        $objCurso = new Curso();
        $tablaResultado = $objCurso->consultarCursoXid($this->id);
        $objCurso->cerrarConexion();
        if ($tablaResultado) {
            $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
            $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
            $this->ver('verCurso.tpl', TRUE);
        } else {
            // $this->visualizar('principal/error.tpl');
        }
    }

    function datosTabla($request, $session)
    {
        $encabezado = "<center><h1>Reporte de Total EdoRegistro / encuestas</h1></center>";
        $modulo = "Curso";
        $titModulo = "Curso";
        $campoClave = "idCurso";
        $etiquetas = array(
            "#",
            "Imp",
            "Ver",
            "Editar",
            "Id Curso",
            "Periodo",
            "Programa de Estudio",
            "Estado",
            "Docente",
            "Pensum",
            "Asignatura",
            "Código",
            "Nombre",
            "Cupo Máximo",
            "Fecha de Inicio",
            "Fecha de Culminación"
        );
        $imgImp = "<a href='$modulo/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
        $vntUrl = '\"' . $modulo . '/consultar/\$campoClave\"';
        $vntTitulo = '\"Consultar ' . $titModulo . '\"';
        $imgVer = "<img class='classHand' onclick='vntConsultar($vntUrl,$vntTitulo)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
        $imgEdi = "<a href='" . URLSIST . "base/" . "$modulo/verEditar/\$campoClave' target='_self'><img src='" . PUB_URL . "img/grid/editar.png' title='Editar' border='0px'/></a>";

        $campos = array(
            "obj_num",
            "obj_" . $imgImp,
            "obj_" . $imgVer,
            "obj_" . $imgEdi,
            "idCurso",
            "idPeriodo",
            "idProgEstudio",
            "idEdoRegistro",
            "idEmpleado",
            "idPensum",
            "idAsignatura",
            "codCurso",
            "nomCurso",
            "cupMaxCurso",
            "fecIniCurso",
            "fecFinCurso"
        );
        // echo "$encabezado"; // Permite imprimir un titulo al grid
        // Imprime la cabecera de la tabla
        echo cabeceraDataTable($etiquetas);

        $objCurso = new Curso();
        $tablaResultado = $objCurso->consultarCurso(); // EDITABLE
        $objCurso->cerrarConexion();

        // Imprime el contenido de la tabla
        echo contenidoDataTable($campos, $tablaResultado, $campoClave);
    }

    function inicializarCombos()
    {
        $objPeriodo = new Periodo();
        $tablaPeriodo = Enumerado::tabla2enumerado($objPeriodo->consultarPeriodoXidEdoRegistro(1), '2', 0);
        $this->setParameter('tablaPeriodo', $tablaPeriodo);
        $objPeriodo->cerrarConexion();
        
        $objProgEstudio = new ProgEstudio();
        $tablaProgEstudio = Enumerado::tabla2enumerado($objProgEstudio->consultarProgEstudio(), '2', 0);
        $this->setParameter('tablaProgEstudio', $tablaProgEstudio);
        $objProgEstudio->cerrarConexion();
        
        $objEdoRegistro = new EdoRegistro();
        $tablaEdoRegistro = Enumerado::tabla2enumerado($objEdoRegistro->consultarEdoRegistro(), '1', 0);
        $this->setParameter('tablaEdoRegistro', $tablaEdoRegistro);
        $objEdoRegistro->cerrarConexion();
        
        $objEmpleado = new Empleado();
        $tablaEmpleado = Enumerado::tabla2enumerado($objEmpleado->consultarEmpleado(), '1', 0);
        $this->setParameter('tablaEmpleado', $tablaEmpleado);
        $objEmpleado->cerrarConexion();
        
        $objPensum = new Pensum();
        $tablaPensum = Enumerado::tabla2enumerado($objPensum->consultarPensum(), '2', 0);
        $this->setParameter('tablaPensum', $tablaPensum);
        $objPensum->cerrarConexion();
        
        $objAsignatura = new Asignatura();
        $tablaAsignatura = Enumerado::tabla2enumerado($objAsignatura->consultarAsignatura(), '5', 0);
        $this->setParameter('tablaAsignatura', $tablaAsignatura);
        $objAsignatura->cerrarConexion();
        
        $this->setParameter('tablaEmpleado', array(
            'Ana Quintero',
            'Luis Villegas',
            'Maria Perez',
            'Pedro Rojas')
            );
    }
    function PreInscripcion($request, $session){
        $this->setParameterPath ( 'desactivarOpciones', true );
        $this->ver('preInscripcion.tpl');
    }
    function MisCursos($request, $session){
        //         $this->setParameterPath ( 'desactivarOpciones', true );
        $this->setParameterPath ( 'btnNuevo', '1' );
        $this->setParameterPath ( 'btnEliminar', '1' );
        $this->setParameterPath ( 'btnVolverPrincipal', '10' );
        $this->setParameterPath ( 'btnVolver', '10' );
        $this->ver('misCursos.tpl');
    }
    function MiHorario($request, $session){
        $this->setParameterPath ( 'desactivarOpciones', true );
        $this->ver('miHorario.tpl');
    }
    function pagar($request, $session){
        $this->setParameterPath ( 'desactivarOpciones', true );
        $this->ver('pagar.tpl');
    }
}
?>