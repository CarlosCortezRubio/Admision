<?php
require_once ('../../../config/config.php');
require_once (MOD . 'Periodo.php');
require_once (SENT . 'Query.php');
require_once (SENT . 'SQLPeriodo.php');

class Periodo extends Query
{

    function __construct()
    {
        parent::abrirConexion();
    }

    /**
     * function compAgregarcambiarTabla1cambiarTabla2($idPeriodo, $idEdoRegistro, $anioPeriodo, $mesPeriodo, $nomPeriodo, $obsPeriodo) {
     * $objcambiarTabla1 = new cambiarTabla1();
     * $objcambiarTabla1->beginTransaction();
     * $resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
     * $idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
     * $resultado2 = cambiarTabla2::agregarcambiarTabla2($idPeriodo, $idEdoRegistro, $anioPeriodo, $mesPeriodo, $nomPeriodo, $obsPeriodo, $id_Periodo);
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
     * function compActualizarcambiarTabla1cambiarTabla2($idPeriodo, $idEdoRegistro, $anioPeriodo, $mesPeriodo, $nomPeriodo, $obsPeriodo) {
     * $objcambiarTabla1 = new cambiarTabla1();
     * $objcambiarTabla1->beginTransaction();
     * $resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
     * $resultado2 = cambiarTabla2::actualizarcambiarTabla2($idPeriodo, $idEdoRegistro, $anioPeriodo, $mesPeriodo, $nomPeriodo, $obsPeriodo, $id_Periodo);
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
    function agregarPeriodo($idPeriodo, $idEdoRegistro, $anioPeriodo, $mesPeriodo, $nomPeriodo, $obsPeriodo)
    {
        $idPeriodo = parent::prepareParam($idPeriodo, Query::DATATYPE_INTEGER);
        $idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
        $anioPeriodo = parent::prepareParam($anioPeriodo, Query::DATATYPE_INTEGER);
        $mesPeriodo = parent::prepareParam($mesPeriodo, Query::DATATYPE_INTEGER);
        $nomPeriodo = parent::prepareParam($nomPeriodo, Query::DATATYPE_STRING, 0);
        $obsPeriodo = parent::prepareParam($obsPeriodo, Query::DATATYPE_STRING, 0);

        $params = array(
            $idPeriodo,
            $idEdoRegistro,
            $anioPeriodo,
            $mesPeriodo,
            $nomPeriodo,
            $obsPeriodo
        );
        return parent::execute(SQLPeriodo::AGREGAR_PERIODO, $params);
    }

    function actualizarPeriodo($idPeriodo, $idEdoRegistro, $anioPeriodo, $mesPeriodo, $nomPeriodo, $obsPeriodo, $id_Periodo)
    {
        $idPeriodo = parent::prepareParam($idPeriodo, Query::DATATYPE_INTEGER);
        $idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
        $anioPeriodo = parent::prepareParam($anioPeriodo, Query::DATATYPE_INTEGER);
        $mesPeriodo = parent::prepareParam($mesPeriodo, Query::DATATYPE_INTEGER);
        $nomPeriodo = parent::prepareParam($nomPeriodo, Query::DATATYPE_STRING, 0);
        $obsPeriodo = parent::prepareParam($obsPeriodo, Query::DATATYPE_STRING, 0);

        $params = array(
            $idPeriodo,
            $idEdoRegistro,
            $anioPeriodo,
            $mesPeriodo,
            $nomPeriodo,
            $obsPeriodo,
            $id_Periodo
        );
        return parent::execute(SQLPeriodo::ACTUALIZAR_PERIODO, $params);
    }

    function consultarPeriodo()
    {
        return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO);
    }

    function eliminarPeriodo($id_Periodo)
    {
        $params = array(
            $id_Periodo
        );
        return parent::execute(SQLPeriodo::ELIMINAR_PERIODO, $params);
    }
    
//     function duplicarPlanilla($idTipoPlanilla,$origen,$destino,$anioDestino,$mesDestino){
    function duplicarPlanilla($idTipoPlanilla,$idPeriodoOrigen,$idPeriodoDestino, $anioDestino, $mesDestino){
//         echo "en duplicarPlanilla con ($idTipoPlanilla,$idPeriodoOrigen,$idPeriodoDestino, $anioDestino, $mesDestino)";die();
        $params1 = array(
            $idPeriodoDestino,$idPeriodoOrigen,$idTipoPlanilla
        );
        switch ($idTipoPlanilla) {
            case 1:
                $planilla = 'PlanPens';
//                 $res1 = parent::execute(SQLPeriodo::DUPLICAR_PLANILLA_PLANPENS, $params1);
//                 $res2 = parent::execute(SQLPeriodo::DUPLICAR_CONCEPTO_PLANILLA, $params2);
                break;
            case 2:
                $planilla = 'PlanPensCon';
//                 $res1 = parent::execute(SQLPeriodo::DUPLICAR_PLANILLA_PLANPENS_CON, $params);
//                 $res2 = parent::execute(SQLPeriodo::DUPLICAR_PLANILLA_PLANPENS_CON, $params);
                break;
            case 3:
                $planilla = 'PlanPensOrf';
//                 return parent::execute(SQLPeriodo::DUPLICAR_PLANILLA_PLANPENS_ORF, $params);
                break;
        }
        $res1 = parent::execute(SQLPeriodo::DUPLICAR_PLANILLA_PLANPENS, $params1);
//         $res2 = $this->consultarPlanillaXidPeriodoYidTipoPlanilla($idPeriodoDestino,$idTipoPlanilla);
        $res21 = $this->consultarPlanillaXidPeriodoYidTipoPlanilla($idPeriodoOrigen,$idTipoPlanilla);
        $res22 = $this->consultarPlanillaXidPeriodoYidTipoPlanilla($idPeriodoDestino,$idTipoPlanilla);
        
        
        $n1 = count($res21);
        $n2 = count($res22);
//         echo "[$n1=$n2]<br>";
//         die();
        if ($n1==$n2) {
            for ($i = 0; $i < $n1; $i++) {
                $idplanillaPensionadoOrigen = $res21[$i]['idplanillaPensionado'];
                $idplanillaPensionadoDestino = $res22[$i]['idplanillaPensionado'];
//                 echo "$idplanillaPensionadoOrigen = $idplanillaPensionadoDestino <br>";
                
                $params2 = array($idplanillaPensionadoDestino,$idplanillaPensionadoOrigen);
                $res3 = parent::execute(SQLPeriodo::DUPLICAR_CONCEPTO_PLANILLA, $params2);
            }
        }
//         die();
//         foreach ($res2 as $ite) {
//             $idplanillaPensionado = $ite['idplanillaPensionado'];
//             echo "$idPeriodoDestino,$idPeriodoOrigen,$idTipoPlanilla  --- [$idplanillaPensionado]<br>";
//             $params2 = array($idplanillaPensionado,$idplanillaPensionado);
//             $res3 = parent::execute(SQLPeriodo::DUPLICAR_CONCEPTO_PLANILLA, $params2);
//         }
        
        
        //         $params = array(
        //             $planilla,$destino,$anioDestino,$mesDestino,$planilla,$origen
        //         );
        //         return parent::execute(SQLPeriodo::DUPLICAR_PLANILLA, $params);
    }
    // ------------------------------
    function consultarPlanillaXidPeriodoYidTipoPlanilla($idPeriodo,$idTipoPlanilla)
    {
        $params = array(
            $idPeriodo,$idTipoPlanilla
        );
        return parent::executeQuery(SQLPeriodo::CONSULTAR_PLANILLA_POR_IDPERIODO_Y_IDTIPOPLANILLA, $params);
    }
    
    function consultarPeriodoXidPeriodo($idPeriodo)
    {
        $params = array(
            $idPeriodo
        );
        return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_IDPERIODO, $params);
    }
    
    function consultarPeriodoXedoPeriodo($edoPeriodo){
        $params = array($edoPeriodo);
        return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_EDO, $params);
    }	
    function existePeriodoXidPeriodo($idPeriodo)
    {
        $params = array(
            $idPeriodo
        );
        $tabla = parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_IDPERIODO, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPeriodoXidEdoRegistro($idEdoRegistro)
    {
        $params = array(
            $idEdoRegistro
        );
        return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_IDEDOREGISTRO, $params);
    }

    function existePeriodoXidEdoRegistro($idEdoRegistro)
    {
        $params = array(
            $idEdoRegistro
        );
        $tabla = parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_IDEDOREGISTRO, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPeriodoXanioPeriodo($anioPeriodo)
    {
        $params = array(
            $anioPeriodo
        );
        return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_ANIOPERIODO, $params);
    }

    function existePeriodoXanioPeriodo($anioPeriodo)
    {
        $params = array(
            $anioPeriodo
        );
        $tabla = parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_ANIOPERIODO, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPeriodoXmesPeriodo($mesPeriodo)
    {
        $params = array(
            $mesPeriodo
        );
        return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_MESPERIODO, $params);
    }

    function existePeriodoXmesPeriodo($mesPeriodo)
    {
        $params = array(
            $mesPeriodo
        );
        $tabla = parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_MESPERIODO, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPeriodoXnomPeriodo($nomPeriodo)
    {
        $params = array(
            "%$nomPeriodo%"
        );
        return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_NOMPERIODO, $params);
    }

    function consultarPeriodoXnomPeriodoAprox($nomPeriodo)
    {
        $params = array(
            "%$nomPeriodo%"
        );
        return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_NOMPERIODO_APROX, $params);
    }

    function existePeriodoXnomPeriodo($nomPeriodo)
    {
        $params = array(
            $nomPeriodo
        );
        $tabla = parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_NOMPERIODO, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPeriodoXobsPeriodo($obsPeriodo)
    {
        $params = array(
            "%$obsPeriodo%"
        );
        return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_OBSPERIODO, $params);
    }

    function consultarPeriodoXobsPeriodoAprox($obsPeriodo)
    {
        $params = array(
            "%$obsPeriodo%"
        );
        return parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_OBSPERIODO_APROX, $params);
    }

    function existePeriodoXobsPeriodo($obsPeriodo)
    {
        $params = array(
            $obsPeriodo
        );
        $tabla = parent::executeQuery(SQLPeriodo::CONSULTAR_PERIODO_POR_OBSPERIODO, $params);
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