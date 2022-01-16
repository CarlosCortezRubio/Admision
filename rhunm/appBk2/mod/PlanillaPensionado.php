<?php
require_once ('../../../config/config.php');
require_once (MOD . 'PlanillaPensionado.php');
require_once (MOD . 'ConcPlanilla.php');
require_once (SENT . 'Query.php');
require_once (SENT . 'SQLPlanillaPensionado.php');

class PlanillaPensionado extends Query
{

    function __construct()
    {
        parent::abrirConexion();
    }

    function compAgregarPlanillaPensionado($idEmpleado, $idPeriodo, $idTipoPlanilla, $fecplanillaPensionado, $totImpplanillaPensionado, $totHabplanillaPensionado, $totDescplanillaPensionado, $totLiqplanillaPensionado, $matConceptos)
    {

        //$parametros[] = array($idEmpleado, $idPeriodo, $idTipoPlanilla, $fecplanillaPensionado, $totImpplanillaPensionado, $totHabplanillaPensionado, $totDescplanillaPensionado, $totLiqplanillaPensionado, $matConceptos);
       // var_dump($fecplanillaPensionado);
       // die('los parametros');

        $resultado1 = $this->agregarPlanillaPensionado($idEmpleado, $idPeriodo, $idTipoPlanilla, $fecplanillaPensionado, $totImpplanillaPensionado, $totHabplanillaPensionado, $totDescplanillaPensionado, $totLiqplanillaPensionado);

        $idPlanillaPensionado = $this->consultarPlanillaPensionadoUltimoId();
        // var_dump($idPlanillaPensionado);
        // die('la agrego');

        $objConcPlanilla = new ConcPlanilla();
        foreach ($matConceptos as $ite) {
            $idConcPlanilla = NULL;
            $idConceptos = $ite['idConcepto'];
            $idConceptos = str_replace('idConc_', '', $idConceptos);
            $mntConceptos = $ite['valConcepto'];

            $resultado2 = $objConcPlanilla->agregarConcPlanilla($idConcPlanilla, $idConceptos, $idPlanillaPensionado, $mntConceptos);
        }

        if ($resultado1 > 0 and $resultado2 > 0) {
        //             ConcPlanilla::commitTransaction();
        //             $objPlanillaPensionado->commitTransaction();
        //             ConcPlanilla::desconectar();
        //             $objPlanillaPensionado->desconectar();
            return true;
        } else {
        //             ConcPlanilla::rollbackTransaction();
        //             $objPlanillaPensionado->rollbackTransaction();
        //             ConcPlanilla::desconectar();
        //             $objPlanillaPensionado->desconectar();
            return false;
        }
    }


    function compActualizarPlanillaPensionado(
        $idplanillaPensionado,
        $idEmpleado,
        $idPeriodo,
        $idTipoPlanilla,
        $fecplanillaPensionado,
        $totImpplanillaPensionado,
        $totHabplanillaPensionado,
        $totDescplanillaPensionado,
        $totLiqplanillaPensionado,
        $matConceptos
        )
    {
            $resultado1 = $this->actualizarPlanillaPensionado(
            $idplanillaPensionado,
            $idEmpleado,
            $idPeriodo,
            $idTipoPlanilla,
            $fecplanillaPensionado,
            $totImpplanillaPensionado,
            $totHabplanillaPensionado,
            $totDescplanillaPensionado,
            $totLiqplanillaPensionado
            );
//         $idPlanillaPensionado = $this->consultarPlanillaPensionadoUltimoId();

        $objConcPlanilla = new ConcPlanilla();
        $objConcPlanilla->eliminarConcPlanillaXidPlanillaPensionado($idplanillaPensionado);
//         dump($matConceptos);
        foreach ($matConceptos as $ite) {
            $idConcPlanilla = NULL;
            $idConceptos = $ite['idConcepto'];
            $idConceptos = str_replace('idConc_', '', $idConceptos);
            $mntConceptos = $ite['valConcepto'];

            $resultado2 = $objConcPlanilla->agregarConcPlanilla($idConcPlanilla, $idConceptos, $idplanillaPensionado, $mntConceptos);
        }
        if ($resultado1 > 0 and $resultado2 > 0) {
            //             ConcPlanilla::commitTransaction();
            //             $objPlanillaPensionado->commitTransaction();
            //             ConcPlanilla::desconectar();
            //             $objPlanillaPensionado->desconectar();
            return true;
        } else {
            //             ConcPlanilla::rollbackTransaction();
            //             $objPlanillaPensionado->rollbackTransaction();
            //             ConcPlanilla::desconectar();
            //             $objPlanillaPensionado->desconectar();
            return false;
        }
    }
    /*
     * function compActualizarcambiarTabla1cambiarTabla2($idplanillaPensionado, $idPersona, $idPeriodo, $fecplanillaPensionado, $totImpplanillaPensionado, $totHabplanillaPensionado, $totDescplanillaPensionado, $totLiqplanillaPensionado) {
     * $objcambiarTabla1 = new cambiarTabla1();
     * $objcambiarTabla1->beginTransaction();
     * $resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
     * $resultado2 = cambiarTabla2::actualizarcambiarTabla2($idplanillaPensionado, $idPersona, $idPeriodo, $fecplanillaPensionado, $totImpplanillaPensionado, $totHabplanillaPensionado, $totDescplanillaPensionado, $totLiqplanillaPensionado, $id_planillaPensionado);
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

    function agregarPlanillaPensionado($idPersona, $idPeriodo, $idTipoPlanilla, $fecplanillaPensionado, $totImpplanillaPensionado, $totHabplanillaPensionado, $totDescplanillaPensionado, $totLiqplanillaPensionado)
    // function agregarPlanillaPensionado($idPersona,
    //     $idPeriodo,
    //     $fecplanillaPensionado,
    //     $totImpplanillaPensionado,
    //     $totHabplanillaPensionado,
    //     $totDescplanillaPensionado,
    //     $totLiqplanillaPensionado,
    //     $idTipoPlanilla)
    {
        //$idplanillaPensionado = parent::prepareParam($idplanillaPensionado, Query::DATATYPE_INTEGER);
        $idPersona = parent::prepareParam($idPersona, Query::DATATYPE_INTEGER);
        $idPeriodo = parent::prepareParam($idPeriodo, Query::DATATYPE_INTEGER);
        $idTipoPlanilla = parent::prepareParam($idTipoPlanilla, Query::DATATYPE_INTEGER);
        //$fecplanillaPensionado = parent::prepareParam($fecplanillaPensionado, Query::DATATYPE_STRING, 0);
        $totImpplanillaPensionado = parent::prepareParam($totImpplanillaPensionado, Query::DATATYPE_INTEGER);
        $totHabplanillaPensionado = parent::prepareParam($totHabplanillaPensionado, Query::DATATYPE_INTEGER);
        $totDescplanillaPensionado = parent::prepareParam($totDescplanillaPensionado, Query::DATATYPE_INTEGER);
        $totLiqplanillaPensionado = parent::prepareParam($totLiqplanillaPensionado, Query::DATATYPE_INTEGER);

        $params = array(
            $idPersona,
            $idPeriodo,
            $idTipoPlanilla,
            $totImpplanillaPensionado,
            $totHabplanillaPensionado,
            $totDescplanillaPensionado,
            $totLiqplanillaPensionado
        );
        //var_dump($params);
        //die('que es esto');
        return parent::execute(SQLPlanillaPensionado::AGREGAR_PLANILLAPENSIONADO, $params);
    }

    function actualizarPlanillaPensionado(
        $idplanillaPensionado,
        $idEmpleado,
        $idPeriodo,
        $idTipoPlanilla,
        $fecplanillaPensionado,
        $totImpplanillaPensionado,
        $totHabplanillaPensionado,
        $totDescplanillaPensionado,
        $totLiqplanillaPensionado
        )
        {
           // var_dump($idEmpleado);
           // die('desde actualizarPla');


        $idplanillaPensionado = parent::prepareParam($idplanillaPensionado, Query::DATATYPE_INTEGER);
        $idPeriodo = parent::prepareParam($idPeriodo, Query::DATATYPE_INTEGER);
        $fecplanillaPensionado = parent::prepareParam($fecplanillaPensionado, Query::DATATYPE_STRING, 0);

        $params = array(
            $idEmpleado,
            $idPeriodo,
            $idTipoPlanilla,
            $fecplanillaPensionado,
            $totImpplanillaPensionado,
            $totHabplanillaPensionado,
            $totDescplanillaPensionado,
            $totLiqplanillaPensionado,
            $idplanillaPensionado
        );
        return parent::execute(SQLPlanillaPensionado::ACTUALIZAR_PLANILLAPENSIONADO, $params);
    }

    function consultarPlanillaPensionado()
    {
        return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO);
    }


    function consultarPlanPensConsolidadoXidTipoPlanilla($idTipoPlanilla)
    {
        $params = array(
            $idTipoPlanilla
        );
        return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO_POR_ID_TIPO_PLANILLA, $params);
    }



    function consultarPlanPensConsolidadoXanioYmes($anio,$mes)
    {
        $params = array(
            $anio,$mes
        );
        return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANPENS_CONSOLIDADO_POR_ANIO_Y_MES, $params);
    }
    function consultarPlanillaPensionadoTotalesXanioYmes($anio,$mes)
    {
        $params = array(
            $anio,$mes
        );
        return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANPENS_TOTALES_POR_ANIO_Y_MES,$params);
    }

    function consultarPlanillaPensionadoXanioYmes($anio,$mes){
        $params = array($anio,$mes);
        return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANPENS_POR_ANIO_Y_MES, $params);
    }
    function consultarListadoPlanillaPensionadoXanioYmes($anio,$mes){
        $params = array($anio,$mes);
        return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_LISTADO_PLANPENS_POR_ANIO_Y_MES, $params);
    }
    function consultarListadoPlanillaPensionadoYconcXanioYmes($anio,$mes){
        $params = array($anio,$mes);
        return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_LISTADO_PLANPENS_Y_CONC_POR_ANIO_Y_MES, $params);
    }

    function consultarPlanillaPensionadoXparam($campBusq,$tipoPensionado)
    {
       
        $matCampBusq = explode(':', $campBusq);


        if ($matCampBusq[3]=='') {
            $params = array(
                $matCampBusq[1],
                $matCampBusq[2]
                // $tipoPensionado
            );           
            $res=parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANPENS_POR_ANIO_MES_Y_TIPO, $params);
        
            return $res;
        }

        if ($matCampBusq[0]==1) {

            $params = array(              
                $matCampBusq[3]
                // $tipoPensionado
            );


            $respuesta = parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANPENS_POR_DNI_POR_PARAMS_Y_TIPO, $params);

            if ($respuesta){
                return $respuesta;
            }else{
                var_dump($respuesta);
                die('que sale');

            }

        }else{
            $params = array(
                $matCampBusq[1],
                $matCampBusq[2],
                '%'.$matCampBusq[3].'%',
                $tipoPensionado
            );
            return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANPENS_POR_NOM_POR_PARAMS_Y_TIPO, $params);
        }
      
    }


    function consultarPlanillaPensionadoXnombresAprox($apellidos_y_nombresPlanillaPensionado)
    {
        $params = array(
            "%$apellidos_y_nombresPlanillaPensionado%"
        );
        return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO);
    }






    function consultarPlanillaPensionadoUltimoId(){

        $tabla = parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO_ULTIMO_ID);

        return $tabla[0]['idplanillaPensionado'];
    }



    function eliminarPlanillaPensionado($id_planillaPensionado)
    {
        $params = array(
            $id_planillaPensionado
        );
        return parent::execute(SQLPlanillaPensionado::ELIMINAR_PLANILLAPENSIONADO, $params);
    }

    // ------------------------------
    function consultarPlanillaPensionadoXidplanillaPensionado($idplanillaPensionado)
    {
        $params = array(
            $idplanillaPensionado
        );
        return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO_POR_IDPLANILLAPENSIONADO, $params);
    }
    function consultarPlanillaPensionadoXidplanillaPensionadoReportes($idplanillaPensionado)
    {
        $params = array(
            $idplanillaPensionado
        );
        return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO_POR_IDPLANILLAPENSIONADO_REPORTES, $params);
    }

    function consultarPlanillaPensionadoYconceptosXidplanillaPensionado($idplanillaPensionado)
    {
        $params = array(
            $idplanillaPensionado
        );
        return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO_Y_CONCEPTOS_POR_IDPLANILLAPENSIONADO, $params);
    }

    function existePlanillaPensionadoXidplanillaPensionado($idplanillaPensionado)
    {
        $params = array(
            $idplanillaPensionado
        );
        $tabla = parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO_POR_IDPLANILLAPENSIONADO, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanillaPensionadoXidPlanilla($idEmpleado)
    {
        $params = array(
            $idEmpleado
        );
        return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO_POR_ID_PLANILLAPENSIONADO, $params);
    }

    function consultarPlanillaPensionadoXidPersona($idEmpleado)
    {
        $params = array(
            $idPersona
        );
        return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO_POR_IDPERSONA, $params);
    }


    function existePlanillaPensionadoXidPersona($idPersona)
    {
        $params = array(
            $idPersona
        );
        $tabla = parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO_POR_IDPERSONA, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanillaPensionadoXidPeriodo($idPeriodo)
    {
        $params = array(
            $idPeriodo
        );
        return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO_POR_IDPERIODO, $params);
    }

    function existePlanillaPensionadoXidPeriodo($idPeriodo)
    {
        $params = array(
            $idPeriodo
        );
        $tabla = parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO_POR_IDPERIODO, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanillaPensionadoXfecplanillaPensionado($fecplanillaPensionado)
    {
        $params = array(
            $fecplanillaPensionado
        );
        return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO_POR_FECPLANILLAPENSIONADO, $params);
    }

    function existePlanillaPensionadoXfecplanillaPensionado($fecplanillaPensionado)
    {
        $params = array(
            $fecplanillaPensionado
        );
        $tabla = parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO_POR_FECPLANILLAPENSIONADO, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanillaPensionadoXtotImpplanillaPensionado($totImpplanillaPensionado)
    {
        $params = array(
            $totImpplanillaPensionado
        );
        return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO_POR_TOTIMPPLANILLAPENSIONADO, $params);
    }

    function existePlanillaPensionadoXtotImpplanillaPensionado($totImpplanillaPensionado)
    {
        $params = array(
            $totImpplanillaPensionado
        );
        $tabla = parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO_POR_TOTIMPPLANILLAPENSIONADO, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanillaPensionadoXtotHabplanillaPensionado($totHabplanillaPensionado)
    {
        $params = array(
            $totHabplanillaPensionado
        );
        return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO_POR_TOTHABPLANILLAPENSIONADO, $params);
    }

    function existePlanillaPensionadoXtotHabplanillaPensionado($totHabplanillaPensionado)
    {
        $params = array(
            $totHabplanillaPensionado
        );
        $tabla = parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO_POR_TOTHABPLANILLAPENSIONADO, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanillaPensionadoXtotDescplanillaPensionado($totDescplanillaPensionado)
    {
        $params = array(
            $totDescplanillaPensionado
        );
        return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO_POR_TOTDESCPLANILLAPENSIONADO, $params);
    }

    function existePlanillaPensionadoXtotDescplanillaPensionado($totDescplanillaPensionado)
    {
        $params = array(
            $totDescplanillaPensionado
        );
        $tabla = parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO_POR_TOTDESCPLANILLAPENSIONADO, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanillaPensionadoXtotLiqplanillaPensionado($totLiqplanillaPensionado)
    {
        $params = array(
            $totLiqplanillaPensionado
        );
        return parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO_POR_TOTLIQPLANILLAPENSIONADO, $params);
    }

    function existePlanillaPensionadoXtotLiqplanillaPensionado($totLiqplanillaPensionado)
    {
        $params = array(
            $totLiqplanillaPensionado
        );
        $tabla = parent::executeQuery(SQLPlanillaPensionado::CONSULTAR_PLANILLAPENSIONADO_POR_TOTLIQPLANILLAPENSIONADO, $params);
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