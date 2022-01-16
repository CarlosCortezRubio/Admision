<?php
require_once ('../../../config/config.php');
require_once (MOD . 'ConcPlanilla.php');
require_once (SENT . 'Query.php');
require_once (SENT . 'SQLConcPlanilla.php');

class ConcPlanilla extends Query
{

    function __construct()
    {
        parent::abrirConexion();
    }

    /**
     * function compAgregarcambiarTabla1cambiarTabla2($idConcPlanilla, $idConceptos, $idplanillaPensionado, $mntConcPlanilla) {
     * $objcambiarTabla1 = new cambiarTabla1();
     * $objcambiarTabla1->beginTransaction();
     * $resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
     * $idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
     * $resultado2 = cambiarTabla2::agregarcambiarTabla2($idConcPlanilla, $idConceptos, $idplanillaPensionado, $mntConcPlanilla, $id_ConcPlanilla);
     * if ($resultado1>0 AND $resultado2>0) {
     * cambiarTabla2::commitTransaction();
     * $objcambiarTabla1->commitTransaction();
     * cambiarTabla2::desconectar();
     * $objcambiarTabla1->desconectar();
     * return true;
     * }else{
     * cambiarTabla2::rollbackTransaction();
     * $objcambiarTabla1->rollbackTransaction();
     * cambiarTabla2::desconectar();
     * $objcambiarTabla1->desconectar();
     * return false;
     * }
     * }
     * function compActualizarcambiarTabla1cambiarTabla2($idConcPlanilla, $idConceptos, $idplanillaPensionado, $mntConcPlanilla) {
     * $objcambiarTabla1 = new cambiarTabla1();
     * $objcambiarTabla1->beginTransaction();
     * $resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
     * $resultado2 = cambiarTabla2::actualizarcambiarTabla2($idConcPlanilla, $idConceptos, $idplanillaPensionado, $mntConcPlanilla, $id_ConcPlanilla);
     * if ($resultado1>0 AND $resultado2>0) {
     * cambiarTabla2::commitTransaction();
     * $objcambiarTabla1->commitTransaction();
     * cambiarTabla2::desconectar();
     * $objcambiarTabla1->desconectar();
     * return true;
     * }else{
     * cambiarTabla2::rollbackTransaction();
     * $objcambiarTabla1->rollbackTransaction();
     * cambiarTabla2::desconectar();
     * $objcambiarTabla1->desconectar();
     * return false;
     * }
     * }
     */
    function agregarConcPlanilla($idConcPlanilla, $idConceptos, $idplanillaPensionado, $mntConcPlanilla)
    {
        $idConcPlanilla = parent::prepareParam($idConcPlanilla, Query::DATATYPE_INTEGER);
        $idConceptos = parent::prepareParam($idConceptos, Query::DATATYPE_INTEGER);
        $idplanillaPensionado = parent::prepareParam($idplanillaPensionado, Query::DATATYPE_INTEGER);
        $mntConcPlanilla = parent::prepareParam($mntConcPlanilla, Query::DATATYPE_DOUBLE);

        $params = array(
            $idConcPlanilla,
            $idConceptos,
            $idplanillaPensionado,
            $mntConcPlanilla
        );
        return parent::execute(SQLConcPlanilla::AGREGAR_CONCPLANILLA, $params);
    }

    function actualizarConcPlanilla($idConcPlanilla, $idConceptos, $idplanillaPensionado, $mntConcPlanilla, $id_ConcPlanilla)
    {
        $idConcPlanilla = parent::prepareParam($idConcPlanilla, Query::DATATYPE_INTEGER);
        $idConceptos = parent::prepareParam($idConceptos, Query::DATATYPE_INTEGER);
        $idplanillaPensionado = parent::prepareParam($idplanillaPensionado, Query::DATATYPE_INTEGER);
        $mntConcPlanilla = parent::prepareParam($mntConcPlanilla, Query::DATATYPE_DOUBLE);

        $params = array(
            $idConcPlanilla,
            $idConceptos,
            $idplanillaPensionado,
            $mntConcPlanilla,
            $id_ConcPlanilla
        );
        return parent::execute(SQLConcPlanilla::ACTUALIZAR_CONCPLANILLA, $params);
    }

    function consultarConcPlanilla()
    {
        return parent::executeQuery(SQLConcPlanilla::CONSULTAR_CONCPLANILLA);
    }

    function eliminarConcPlanilla($id_ConcPlanilla)
    {
        $params = array(
            $id_ConcPlanilla
        );
        return parent::execute(SQLConcPlanilla::ELIMINAR_CONCPLANILLA, $params);
    }
    function eliminarConcPlanillaXidPlanillaPensionado($idplanillaPensionado)
    {
        $params = array(
            $idplanillaPensionado
        );
        return parent::execute(SQLConcPlanilla::ELIMINAR_CONCPLANILLA_POR_ID_PLANILLA_PENSIONADO, $params);
    }

    // ------------------------------
    function consultarConcPlanillaXidConcPlanilla($idConcPlanilla)
    {
        $params = array(
            $idConcPlanilla
        );
        return parent::executeQuery(SQLConcPlanilla::CONSULTAR_CONCPLANILLA_POR_IDCONCPLANILLA, $params);
    }

    function existeConcPlanillaXidConcPlanilla($idConcPlanilla)
    {
        $params = array(
            $idConcPlanilla
        );
        $tabla = parent::executeQuery(SQLConcPlanilla::CONSULTAR_CONCPLANILLA_POR_IDCONCPLANILLA, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcPlanillaXidConceptos($idConceptos)
    {
        $params = array(
            $idConceptos
        );
        return parent::executeQuery(SQLConcPlanilla::CONSULTAR_CONCPLANILLA_POR_IDCONCEPTOS, $params);
    }

    function existeConcPlanillaXidConceptos($idConceptos)
    {
        $params = array(
            $idConceptos
        );
        $tabla = parent::executeQuery(SQLConcPlanilla::CONSULTAR_CONCPLANILLA_POR_IDCONCEPTOS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcPlanillaXidplanillaPensionado($idplanillaPensionado)
    {
        $params = array(
            $idplanillaPensionado
        );
        return parent::executeQuery(SQLConcPlanilla::CONSULTAR_CONCPLANILLA_POR_IDPLANILLAPENSIONADO, $params);
    }

    function existeConcPlanillaXidplanillaPensionado($idplanillaPensionado)
    {
        $params = array(
            $idplanillaPensionado
        );
        $tabla = parent::executeQuery(SQLConcPlanilla::CONSULTAR_CONCPLANILLA_POR_IDPLANILLAPENSIONADO, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcPlanillaXmntConcPlanilla($mntConcPlanilla)
    {
        $params = array(
            $mntConcPlanilla
        );
        return parent::executeQuery(SQLConcPlanilla::CONSULTAR_CONCPLANILLA_POR_MNTCONCPLANILLA, $params);
    }

    function existeConcPlanillaXmntConcPlanilla($mntConcPlanilla)
    {
        $params = array(
            $mntConcPlanilla
        );
        $tabla = parent::executeQuery(SQLConcPlanilla::CONSULTAR_CONCPLANILLA_POR_MNTCONCPLANILLA, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    // ------------------------------

    // INICIO COMBOS

    // FIN COMBOS
}
?>