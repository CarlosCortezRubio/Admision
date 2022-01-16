<?php
require_once ('../../../config/config.php');
require_once (MOD . 'PlanPens.php');
require_once (SENT . 'Query.php');
require_once (SENT . 'SQLPlanPens.php');

class PlanPens extends Query
{

    function __construct()
    {
        parent::abrirConexion();
    }


    function agregarPlanPens($idPlanPens, $dniPlanPens, $apellidos_y_nombresPlanPens, $fecha_de_nacimientoPlanPens, $sexoPlanPens, $codigo_modularPlanPens, $planillaPlanPens, $tipo_de_regimenPlanPens, $resolucion_de_pension_definitivaPlanPens, $a_partir_dePlanPens, $bancoPlanPens, $cuenta_bancariaPlanPens, $fuente_de_financiamientoPlanPens, $planilla2PlanPens, $total_imponiblePlanPens, $total_haberPlanPens, $total_descuentosPlanPens, $total_liquidoPlanPens, $aguinaldoPlanPens, $basicaPlanPens, $bonif_personalPlanPens, $ael25671PlanPens, $aeds081PlanPens, $tphPlanPens, $bonif_familiarPlanPens, $du080_04PlanPens, $refrig_y_moviPlanPens, $du90_96PlanPens, $ds19_94_pcmPlanPens, $ds21_92_pcmPlanPens, $bon_especialPlanPens, $reunificadaPlanPens, $igvPlanPens, $cargsimulPlanPens, $art18_dl_20530PlanPens, $du073_97PlanPens, $du011_99PlanPens, $du037_94PlanPens, $ds016PlanPens, $ds017PlanPens, $ds110_2006PlanPens, $ds039_2007PlanPens, $ds120_2008PlanPens, $ds014_2009PlanPens, $ds077_2010PlanPens, $ds031_2011PlanPens, $ds024_2012PlanPens, $ds004_2013PlanPens, $ds003_2014PlanPens, $ds002_2015PlanPens, $ds005_2016PlanPens, $ds020_2017PlanPens, $ds011_2018PlanPens, $ds009_2019PlanPens, $ds006_2020PlanPens, $ipssPlanPens, $cafaePlanPens, $prderrmaPlanPens, $escolaridadPlanPens, $decreto_supermo_20_21PlanPens)
    {
        $idPlanPens = parent::prepareParam($idPlanPens, Query::DATATYPE_INTEGER);
        $dniPlanPens = parent::prepareParam($dniPlanPens, Query::DATATYPE_STRING, 0);
        $apellidos_y_nombresPlanPens = parent::prepareParam($apellidos_y_nombresPlanPens, Query::DATATYPE_STRING, 0);
        $fecha_de_nacimientoPlanPens = parent::prepareParam($fecha_de_nacimientoPlanPens, Query::DATATYPE_STRING, 0);
        $sexoPlanPens = parent::prepareParam($sexoPlanPens, Query::DATATYPE_STRING, 0);
        $codigo_modularPlanPens = parent::prepareParam($codigo_modularPlanPens, Query::DATATYPE_STRING, 0);
        $planillaPlanPens = parent::prepareParam($planillaPlanPens, Query::DATATYPE_STRING, 0);
        $tipo_de_regimenPlanPens = parent::prepareParam($tipo_de_regimenPlanPens, Query::DATATYPE_STRING, 0);
        $resolucion_de_pension_definitivaPlanPens = parent::prepareParam($resolucion_de_pension_definitivaPlanPens, Query::DATATYPE_STRING, 0);
        $a_partir_dePlanPens = parent::prepareParam($a_partir_dePlanPens, Query::DATATYPE_STRING, 0);
        $bancoPlanPens = parent::prepareParam($bancoPlanPens, Query::DATATYPE_STRING, 0);
        $cuenta_bancariaPlanPens = parent::prepareParam($cuenta_bancariaPlanPens, Query::DATATYPE_STRING, 0);
        $fuente_de_financiamientoPlanPens = parent::prepareParam($fuente_de_financiamientoPlanPens, Query::DATATYPE_STRING, 0);
        $planilla2PlanPens = parent::prepareParam($planilla2PlanPens, Query::DATATYPE_STRING, 0);
        $total_imponiblePlanPens = parent::prepareParam($total_imponiblePlanPens, Query::DATATYPE_STRING, 0);
        $total_haberPlanPens = parent::prepareParam($total_haberPlanPens, Query::DATATYPE_STRING, 0);
        $total_descuentosPlanPens = parent::prepareParam($total_descuentosPlanPens, Query::DATATYPE_STRING, 0);
        $total_liquidoPlanPens = parent::prepareParam($total_liquidoPlanPens, Query::DATATYPE_STRING, 0);
        $aguinaldoPlanPens = parent::prepareParam($aguinaldoPlanPens, Query::DATATYPE_STRING, 0);
        $basicaPlanPens = parent::prepareParam($basicaPlanPens, Query::DATATYPE_STRING, 0);
        $bonif_personalPlanPens = parent::prepareParam($bonif_personalPlanPens, Query::DATATYPE_STRING, 0);
        $ael25671PlanPens = parent::prepareParam($ael25671PlanPens, Query::DATATYPE_STRING, 0);
        $aeds081PlanPens = parent::prepareParam($aeds081PlanPens, Query::DATATYPE_STRING, 0);
        $tphPlanPens = parent::prepareParam($tphPlanPens, Query::DATATYPE_STRING, 0);
        $bonif_familiarPlanPens = parent::prepareParam($bonif_familiarPlanPens, Query::DATATYPE_STRING, 0);
        $du080_04PlanPens = parent::prepareParam($du080_04PlanPens, Query::DATATYPE_STRING, 0);
        $refrig_y_moviPlanPens = parent::prepareParam($refrig_y_moviPlanPens, Query::DATATYPE_STRING, 0);
        $du90_96PlanPens = parent::prepareParam($du90_96PlanPens, Query::DATATYPE_STRING, 0);
        $ds19_94_pcmPlanPens = parent::prepareParam($ds19_94_pcmPlanPens, Query::DATATYPE_STRING, 0);
        $ds21_92_pcmPlanPens = parent::prepareParam($ds21_92_pcmPlanPens, Query::DATATYPE_STRING, 0);
        $bon_especialPlanPens = parent::prepareParam($bon_especialPlanPens, Query::DATATYPE_STRING, 0);
        $reunificadaPlanPens = parent::prepareParam($reunificadaPlanPens, Query::DATATYPE_STRING, 0);
        $igvPlanPens = parent::prepareParam($igvPlanPens, Query::DATATYPE_STRING, 0);
        $cargsimulPlanPens = parent::prepareParam($cargsimulPlanPens, Query::DATATYPE_STRING, 0);
        $art18_dl_20530PlanPens = parent::prepareParam($art18_dl_20530PlanPens, Query::DATATYPE_STRING, 0);
        $du073_97PlanPens = parent::prepareParam($du073_97PlanPens, Query::DATATYPE_STRING, 0);
        $du011_99PlanPens = parent::prepareParam($du011_99PlanPens, Query::DATATYPE_STRING, 0);
        $du037_94PlanPens = parent::prepareParam($du037_94PlanPens, Query::DATATYPE_STRING, 0);
        $ds016PlanPens = parent::prepareParam($ds016PlanPens, Query::DATATYPE_STRING, 0);
        $ds017PlanPens = parent::prepareParam($ds017PlanPens, Query::DATATYPE_STRING, 0);
        $ds110_2006PlanPens = parent::prepareParam($ds110_2006PlanPens, Query::DATATYPE_STRING, 0);
        $ds039_2007PlanPens = parent::prepareParam($ds039_2007PlanPens, Query::DATATYPE_STRING, 0);
        $ds120_2008PlanPens = parent::prepareParam($ds120_2008PlanPens, Query::DATATYPE_STRING, 0);
        $ds014_2009PlanPens = parent::prepareParam($ds014_2009PlanPens, Query::DATATYPE_STRING, 0);
        $ds077_2010PlanPens = parent::prepareParam($ds077_2010PlanPens, Query::DATATYPE_STRING, 0);
        $ds031_2011PlanPens = parent::prepareParam($ds031_2011PlanPens, Query::DATATYPE_STRING, 0);
        $ds024_2012PlanPens = parent::prepareParam($ds024_2012PlanPens, Query::DATATYPE_STRING, 0);
        $ds004_2013PlanPens = parent::prepareParam($ds004_2013PlanPens, Query::DATATYPE_STRING, 0);
        $ds003_2014PlanPens = parent::prepareParam($ds003_2014PlanPens, Query::DATATYPE_STRING, 0);
        $ds002_2015PlanPens = parent::prepareParam($ds002_2015PlanPens, Query::DATATYPE_STRING, 0);
        $ds005_2016PlanPens = parent::prepareParam($ds005_2016PlanPens, Query::DATATYPE_STRING, 0);
        $ds020_2017PlanPens = parent::prepareParam($ds020_2017PlanPens, Query::DATATYPE_STRING, 0);
        $ds011_2018PlanPens = parent::prepareParam($ds011_2018PlanPens, Query::DATATYPE_STRING, 0);
        $ds009_2019PlanPens = parent::prepareParam($ds009_2019PlanPens, Query::DATATYPE_STRING, 0);
        $ds006_2020PlanPens = parent::prepareParam($ds006_2020PlanPens, Query::DATATYPE_STRING, 0);
        $ipssPlanPens = parent::prepareParam($ipssPlanPens, Query::DATATYPE_STRING, 0);
        $cafaePlanPens = parent::prepareParam($cafaePlanPens, Query::DATATYPE_STRING, 0);
        $prderrmaPlanPens = parent::prepareParam($prderrmaPlanPens, Query::DATATYPE_STRING, 0);
        $escolaridadPlanPens = parent::prepareParam($escolaridadPlanPens, Query::DATATYPE_STRING, 0);
        $decreto_supermo_20_21PlanPens = parent::prepareParam($decreto_supermo_20_21PlanPens, Query::DATATYPE_STRING, 0);

        $params = array(
            $dniPlanPens,
            $apellidos_y_nombresPlanPens,
            $fecha_de_nacimientoPlanPens,
            $sexoPlanPens,
            $codigo_modularPlanPens,
            $planillaPlanPens,
            $tipo_de_regimenPlanPens,
            $resolucion_de_pension_definitivaPlanPens,
            $a_partir_dePlanPens,
            $bancoPlanPens,
            $cuenta_bancariaPlanPens,
            $fuente_de_financiamientoPlanPens,
            $planilla2PlanPens,
            $total_imponiblePlanPens,
            $total_haberPlanPens,
            $total_descuentosPlanPens,
            $total_liquidoPlanPens,
            $aguinaldoPlanPens,
            $basicaPlanPens,
            $bonif_personalPlanPens,
            $ael25671PlanPens,
            $aeds081PlanPens,
            $tphPlanPens,
            $bonif_familiarPlanPens,
            $du080_04PlanPens,
            $refrig_y_moviPlanPens,
            $du90_96PlanPens,
            $ds19_94_pcmPlanPens,
            $ds21_92_pcmPlanPens,
            $bon_especialPlanPens,
            $reunificadaPlanPens,
            $igvPlanPens,
            $cargsimulPlanPens,
            $art18_dl_20530PlanPens,
            $du073_97PlanPens,
            $du011_99PlanPens,
            $du037_94PlanPens,
            $ds016PlanPens,
            $ds017PlanPens,
            $ds110_2006PlanPens,
            $ds039_2007PlanPens,
            $ds120_2008PlanPens,
            $ds014_2009PlanPens,
            $ds077_2010PlanPens,
            $ds031_2011PlanPens,
            $ds024_2012PlanPens,
            $ds004_2013PlanPens,
            $ds003_2014PlanPens,
            $ds002_2015PlanPens,
            $ds005_2016PlanPens,
            $ds020_2017PlanPens,
            $ds011_2018PlanPens,
            $ds009_2019PlanPens,
            $ds006_2020PlanPens,
            $ipssPlanPens,
            $cafaePlanPens,
            $prderrmaPlanPens,
            $escolaridadPlanPens,
            $decreto_supermo_20_21PlanPens
        );
        return parent::execute(SQLPlanPens::AGREGAR_PLANPENS, $params);
    }

    function actualizarPlanPens($idPlanPens, $dniPlanPens, $apellidos_y_nombresPlanPens, $fecha_de_nacimientoPlanPens, $sexoPlanPens, $codigo_modularPlanPens, $planillaPlanPens, $tipo_de_regimenPlanPens, $resolucion_de_pension_definitivaPlanPens, $a_partir_dePlanPens, $bancoPlanPens, $cuenta_bancariaPlanPens, $fuente_de_financiamientoPlanPens, $planilla2PlanPens, $total_imponiblePlanPens, $total_haberPlanPens, $total_descuentosPlanPens, $total_liquidoPlanPens, $aguinaldoPlanPens, $basicaPlanPens, $bonif_personalPlanPens, $ael25671PlanPens, $aeds081PlanPens, $tphPlanPens, $bonif_familiarPlanPens, $du080_04PlanPens, $refrig_y_moviPlanPens, $du90_96PlanPens, $ds19_94_pcmPlanPens, $ds21_92_pcmPlanPens, $bon_especialPlanPens, $reunificadaPlanPens, $igvPlanPens, $cargsimulPlanPens, $art18_dl_20530PlanPens, $du073_97PlanPens, $du011_99PlanPens, $du037_94PlanPens, $ds016PlanPens, $ds017PlanPens, $ds110_2006PlanPens, $ds039_2007PlanPens, $ds120_2008PlanPens, $ds014_2009PlanPens, $ds077_2010PlanPens, $ds031_2011PlanPens, $ds024_2012PlanPens, $ds004_2013PlanPens, $ds003_2014PlanPens, $ds002_2015PlanPens, $ds005_2016PlanPens, $ds020_2017PlanPens, $ds011_2018PlanPens, $ds009_2019PlanPens, $ds006_2020PlanPens, $ipssPlanPens, $cafaePlanPens, $prderrmaPlanPens, $escolaridadPlanPens, $decreto_supermo_20_21PlanPens, $id_PlanPens)
    {
        $idPlanPens = parent::prepareParam($idPlanPens, Query::DATATYPE_INTEGER);
        $dniPlanPens = parent::prepareParam($dniPlanPens, Query::DATATYPE_STRING, 0);
        $apellidos_y_nombresPlanPens = parent::prepareParam($apellidos_y_nombresPlanPens, Query::DATATYPE_STRING, 0);
        $fecha_de_nacimientoPlanPens = parent::prepareParam($fecha_de_nacimientoPlanPens, Query::DATATYPE_STRING, 0);
        $sexoPlanPens = parent::prepareParam($sexoPlanPens, Query::DATATYPE_STRING, 0);
        $codigo_modularPlanPens = parent::prepareParam($codigo_modularPlanPens, Query::DATATYPE_STRING, 0);
        $planillaPlanPens = parent::prepareParam($planillaPlanPens, Query::DATATYPE_STRING, 0);
        $tipo_de_regimenPlanPens = parent::prepareParam($tipo_de_regimenPlanPens, Query::DATATYPE_STRING, 0);
        $resolucion_de_pension_definitivaPlanPens = parent::prepareParam($resolucion_de_pension_definitivaPlanPens, Query::DATATYPE_STRING, 0);
        $a_partir_dePlanPens = parent::prepareParam($a_partir_dePlanPens, Query::DATATYPE_STRING, 0);
        $bancoPlanPens = parent::prepareParam($bancoPlanPens, Query::DATATYPE_STRING, 0);
        $cuenta_bancariaPlanPens = parent::prepareParam($cuenta_bancariaPlanPens, Query::DATATYPE_STRING, 0);
        $fuente_de_financiamientoPlanPens = parent::prepareParam($fuente_de_financiamientoPlanPens, Query::DATATYPE_STRING, 0);
        $planilla2PlanPens = parent::prepareParam($planilla2PlanPens, Query::DATATYPE_STRING, 0);
        $total_imponiblePlanPens = parent::prepareParam($total_imponiblePlanPens, Query::DATATYPE_STRING, 0);
        $total_haberPlanPens = parent::prepareParam($total_haberPlanPens, Query::DATATYPE_STRING, 0);
        $total_descuentosPlanPens = parent::prepareParam($total_descuentosPlanPens, Query::DATATYPE_STRING, 0);
        $total_liquidoPlanPens = parent::prepareParam($total_liquidoPlanPens, Query::DATATYPE_STRING, 0);
        $aguinaldoPlanPens = parent::prepareParam($aguinaldoPlanPens, Query::DATATYPE_STRING, 0);
        $basicaPlanPens = parent::prepareParam($basicaPlanPens, Query::DATATYPE_STRING, 0);
        $bonif_personalPlanPens = parent::prepareParam($bonif_personalPlanPens, Query::DATATYPE_STRING, 0);
        $ael25671PlanPens = parent::prepareParam($ael25671PlanPens, Query::DATATYPE_STRING, 0);
        $aeds081PlanPens = parent::prepareParam($aeds081PlanPens, Query::DATATYPE_STRING, 0);
        $tphPlanPens = parent::prepareParam($tphPlanPens, Query::DATATYPE_STRING, 0);
        $bonif_familiarPlanPens = parent::prepareParam($bonif_familiarPlanPens, Query::DATATYPE_STRING, 0);
        $du080_04PlanPens = parent::prepareParam($du080_04PlanPens, Query::DATATYPE_STRING, 0);
        $refrig_y_moviPlanPens = parent::prepareParam($refrig_y_moviPlanPens, Query::DATATYPE_STRING, 0);
        $du90_96PlanPens = parent::prepareParam($du90_96PlanPens, Query::DATATYPE_STRING, 0);
        $ds19_94_pcmPlanPens = parent::prepareParam($ds19_94_pcmPlanPens, Query::DATATYPE_STRING, 0);
        $ds21_92_pcmPlanPens = parent::prepareParam($ds21_92_pcmPlanPens, Query::DATATYPE_STRING, 0);
        $bon_especialPlanPens = parent::prepareParam($bon_especialPlanPens, Query::DATATYPE_STRING, 0);
        $reunificadaPlanPens = parent::prepareParam($reunificadaPlanPens, Query::DATATYPE_STRING, 0);
        $igvPlanPens = parent::prepareParam($igvPlanPens, Query::DATATYPE_STRING, 0);
        $cargsimulPlanPens = parent::prepareParam($cargsimulPlanPens, Query::DATATYPE_STRING, 0);
        $art18_dl_20530PlanPens = parent::prepareParam($art18_dl_20530PlanPens, Query::DATATYPE_STRING, 0);
        $du073_97PlanPens = parent::prepareParam($du073_97PlanPens, Query::DATATYPE_STRING, 0);
        $du011_99PlanPens = parent::prepareParam($du011_99PlanPens, Query::DATATYPE_STRING, 0);
        $du037_94PlanPens = parent::prepareParam($du037_94PlanPens, Query::DATATYPE_STRING, 0);
        $ds016PlanPens = parent::prepareParam($ds016PlanPens, Query::DATATYPE_STRING, 0);
        $ds017PlanPens = parent::prepareParam($ds017PlanPens, Query::DATATYPE_STRING, 0);
        $ds110_2006PlanPens = parent::prepareParam($ds110_2006PlanPens, Query::DATATYPE_STRING, 0);
        $ds039_2007PlanPens = parent::prepareParam($ds039_2007PlanPens, Query::DATATYPE_STRING, 0);
        $ds120_2008PlanPens = parent::prepareParam($ds120_2008PlanPens, Query::DATATYPE_STRING, 0);
        $ds014_2009PlanPens = parent::prepareParam($ds014_2009PlanPens, Query::DATATYPE_STRING, 0);
        $ds077_2010PlanPens = parent::prepareParam($ds077_2010PlanPens, Query::DATATYPE_STRING, 0);
        $ds031_2011PlanPens = parent::prepareParam($ds031_2011PlanPens, Query::DATATYPE_STRING, 0);
        $ds024_2012PlanPens = parent::prepareParam($ds024_2012PlanPens, Query::DATATYPE_STRING, 0);
        $ds004_2013PlanPens = parent::prepareParam($ds004_2013PlanPens, Query::DATATYPE_STRING, 0);
        $ds003_2014PlanPens = parent::prepareParam($ds003_2014PlanPens, Query::DATATYPE_STRING, 0);
        $ds002_2015PlanPens = parent::prepareParam($ds002_2015PlanPens, Query::DATATYPE_STRING, 0);
        $ds005_2016PlanPens = parent::prepareParam($ds005_2016PlanPens, Query::DATATYPE_STRING, 0);
        $ds020_2017PlanPens = parent::prepareParam($ds020_2017PlanPens, Query::DATATYPE_STRING, 0);
        $ds011_2018PlanPens = parent::prepareParam($ds011_2018PlanPens, Query::DATATYPE_STRING, 0);
        $ds009_2019PlanPens = parent::prepareParam($ds009_2019PlanPens, Query::DATATYPE_STRING, 0);
        $ds006_2020PlanPens = parent::prepareParam($ds006_2020PlanPens, Query::DATATYPE_STRING, 0);
        $ipssPlanPens = parent::prepareParam($ipssPlanPens, Query::DATATYPE_STRING, 0);
        $cafaePlanPens = parent::prepareParam($cafaePlanPens, Query::DATATYPE_STRING, 0);
        $prderrmaPlanPens = parent::prepareParam($prderrmaPlanPens, Query::DATATYPE_STRING, 0);
        $escolaridadPlanPens = parent::prepareParam($escolaridadPlanPens, Query::DATATYPE_STRING, 0);
        $decreto_supermo_20_21PlanPens = parent::prepareParam($decreto_supermo_20_21PlanPens, Query::DATATYPE_STRING, 0);

        $params = array(
            $idPlanPens,
            $dniPlanPens,
            $apellidos_y_nombresPlanPens,
            $fecha_de_nacimientoPlanPens,
            $sexoPlanPens,
            $codigo_modularPlanPens,
            $planillaPlanPens,
            $tipo_de_regimenPlanPens,
            $resolucion_de_pension_definitivaPlanPens,
            $a_partir_dePlanPens,
            $bancoPlanPens,
            $cuenta_bancariaPlanPens,
            $fuente_de_financiamientoPlanPens,
            $planilla2PlanPens,
            $total_imponiblePlanPens,
            $total_haberPlanPens,
            $total_descuentosPlanPens,
            $total_liquidoPlanPens,
            $aguinaldoPlanPens,
            $basicaPlanPens,
            $bonif_personalPlanPens,
            $ael25671PlanPens,
            $aeds081PlanPens,
            $tphPlanPens,
            $bonif_familiarPlanPens,
            $du080_04PlanPens,
            $refrig_y_moviPlanPens,
            $du90_96PlanPens,
            $ds19_94_pcmPlanPens,
            $ds21_92_pcmPlanPens,
            $bon_especialPlanPens,
            $reunificadaPlanPens,
            $igvPlanPens,
            $cargsimulPlanPens,
            $art18_dl_20530PlanPens,
            $du073_97PlanPens,
            $du011_99PlanPens,
            $du037_94PlanPens,
            $ds016PlanPens,
            $ds017PlanPens,
            $ds110_2006PlanPens,
            $ds039_2007PlanPens,
            $ds120_2008PlanPens,
            $ds014_2009PlanPens,
            $ds077_2010PlanPens,
            $ds031_2011PlanPens,
            $ds024_2012PlanPens,
            $ds004_2013PlanPens,
            $ds003_2014PlanPens,
            $ds002_2015PlanPens,
            $ds005_2016PlanPens,
            $ds020_2017PlanPens,
            $ds011_2018PlanPens,
            $ds009_2019PlanPens,
            $ds006_2020PlanPens,
            $ipssPlanPens,
            $cafaePlanPens,
            $prderrmaPlanPens,
            $escolaridadPlanPens,
            $decreto_supermo_20_21PlanPens,
            $id_PlanPens
        );
        return parent::execute(SQLPlanPens::ACTUALIZAR_PLANPENS, $params);
    }

    function consultarPlanPens()
    {
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS);
    }
    function consultarPlanPensXidPlanPens($idPlanPens)
    {
        $params = array(
            $idPlanPens
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_IDPLANPENS, $params);
    }
    
    function consultarPlanPensXdniPlanPens($dniPlanPens)
    {
        $params = array(
            "$dniPlanPens"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DNI, $params);
    }
    
    function consultarPlanPensXapellidos_y_nombresPlanPensAprox($apellidos_y_nombresPlanPens)
    {
        $params = array(
            "%$apellidos_y_nombresPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_APELLIDOS_Y_NOMBRES_APROX, $params);
    }

    function eliminarPlanPens($id_PlanPens)
    {
        $params = array(
            $id_PlanPens
        );
        return parent::execute(SQLPlanPens::ELIMINAR_PLANPENS, $params);
    }

    // ------------------------------

    function existePlanPensXidPlanPens($idPlanPens)
    {
        $params = array(
            $idPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_IDPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXdniPlanPensAprox($dniPlanPens)
    {
        $params = array(
            "%$dniPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DNIPLANPENS_APROX, $params);
    }

    function existePlanPensXdniPlanPens($dniPlanPens)
    {
        $params = array(
            $dniPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DNIPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXapellidos_y_nombresPlanPens($apellidos_y_nombresPlanPens)
    {
        $params = array(
            "%$apellidos_y_nombresPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_APELLIDOS_Y_NOMBRESPLANPENS, $params);
    }

    function existePlanPensXapellidos_y_nombresPlanPens($apellidos_y_nombresPlanPens)
    {
        $params = array(
            $apellidos_y_nombresPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_APELLIDOS_Y_NOMBRESPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXfecha_de_nacimientoPlanPens($fecha_de_nacimientoPlanPens)
    {
        $params = array(
            "%$fecha_de_nacimientoPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_FECHA_DE_NACIMIENTOPLANPENS, $params);
    }

    function consultarPlanPensXfecha_de_nacimientoPlanPensAprox($fecha_de_nacimientoPlanPens)
    {
        $params = array(
            "%$fecha_de_nacimientoPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_FECHA_DE_NACIMIENTOPLANPENS_APROX, $params);
    }

    function existePlanPensXfecha_de_nacimientoPlanPens($fecha_de_nacimientoPlanPens)
    {
        $params = array(
            $fecha_de_nacimientoPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_FECHA_DE_NACIMIENTOPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXsexoPlanPens($sexoPlanPens)
    {
        $params = array(
            "%$sexoPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_SEXOPLANPENS, $params);
    }

    function consultarPlanPensXsexoPlanPensAprox($sexoPlanPens)
    {
        $params = array(
            "%$sexoPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_SEXOPLANPENS_APROX, $params);
    }

    function existePlanPensXsexoPlanPens($sexoPlanPens)
    {
        $params = array(
            $sexoPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_SEXOPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXcodigo_modularPlanPens($codigo_modularPlanPens)
    {
        $params = array(
            "%$codigo_modularPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_CODIGO_MODULARPLANPENS, $params);
    }

    function consultarPlanPensXcodigo_modularPlanPensAprox($codigo_modularPlanPens)
    {
        $params = array(
            "%$codigo_modularPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_CODIGO_MODULARPLANPENS_APROX, $params);
    }

    function existePlanPensXcodigo_modularPlanPens($codigo_modularPlanPens)
    {
        $params = array(
            $codigo_modularPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_CODIGO_MODULARPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXplanillaPlanPens($planillaPlanPens)
    {
        $params = array(
            "%$planillaPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_PLANILLAPLANPENS, $params);
    }

    function consultarPlanPensXplanillaPlanPensAprox($planillaPlanPens)
    {
        $params = array(
            "%$planillaPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_PLANILLAPLANPENS_APROX, $params);
    }

    function existePlanPensXplanillaPlanPens($planillaPlanPens)
    {
        $params = array(
            $planillaPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_PLANILLAPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXtipo_de_regimenPlanPens($tipo_de_regimenPlanPens)
    {
        $params = array(
            "%$tipo_de_regimenPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_TIPO_DE_REGIMENPLANPENS, $params);
    }

    function consultarPlanPensXtipo_de_regimenPlanPensAprox($tipo_de_regimenPlanPens)
    {
        $params = array(
            "%$tipo_de_regimenPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_TIPO_DE_REGIMENPLANPENS_APROX, $params);
    }

    function existePlanPensXtipo_de_regimenPlanPens($tipo_de_regimenPlanPens)
    {
        $params = array(
            $tipo_de_regimenPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_TIPO_DE_REGIMENPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXresolucion_de_pension_definitivaPlanPens($resolucion_de_pension_definitivaPlanPens)
    {
        $params = array(
            "%$resolucion_de_pension_definitivaPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_RESOLUCION_DE_PENSION_DEFINITIVAPLANPENS, $params);
    }

    function consultarPlanPensXresolucion_de_pension_definitivaPlanPensAprox($resolucion_de_pension_definitivaPlanPens)
    {
        $params = array(
            "%$resolucion_de_pension_definitivaPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_RESOLUCION_DE_PENSION_DEFINITIVAPLANPENS_APROX, $params);
    }

    function existePlanPensXresolucion_de_pension_definitivaPlanPens($resolucion_de_pension_definitivaPlanPens)
    {
        $params = array(
            $resolucion_de_pension_definitivaPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_RESOLUCION_DE_PENSION_DEFINITIVAPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXa_partir_dePlanPens($a_partir_dePlanPens)
    {
        $params = array(
            "%$a_partir_dePlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_A_PARTIR_DEPLANPENS, $params);
    }

    function consultarPlanPensXa_partir_dePlanPensAprox($a_partir_dePlanPens)
    {
        $params = array(
            "%$a_partir_dePlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_A_PARTIR_DEPLANPENS_APROX, $params);
    }

    function existePlanPensXa_partir_dePlanPens($a_partir_dePlanPens)
    {
        $params = array(
            $a_partir_dePlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_A_PARTIR_DEPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXbancoPlanPens($bancoPlanPens)
    {
        $params = array(
            "%$bancoPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_BANCOPLANPENS, $params);
    }

    function consultarPlanPensXbancoPlanPensAprox($bancoPlanPens)
    {
        $params = array(
            "%$bancoPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_BANCOPLANPENS_APROX, $params);
    }

    function existePlanPensXbancoPlanPens($bancoPlanPens)
    {
        $params = array(
            $bancoPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_BANCOPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXcuenta_bancariaPlanPens($cuenta_bancariaPlanPens)
    {
        $params = array(
            "%$cuenta_bancariaPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_CUENTA_BANCARIAPLANPENS, $params);
    }

    function consultarPlanPensXcuenta_bancariaPlanPensAprox($cuenta_bancariaPlanPens)
    {
        $params = array(
            "%$cuenta_bancariaPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_CUENTA_BANCARIAPLANPENS_APROX, $params);
    }

    function existePlanPensXcuenta_bancariaPlanPens($cuenta_bancariaPlanPens)
    {
        $params = array(
            $cuenta_bancariaPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_CUENTA_BANCARIAPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXfuente_de_financiamientoPlanPens($fuente_de_financiamientoPlanPens)
    {
        $params = array(
            "%$fuente_de_financiamientoPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_FUENTE_DE_FINANCIAMIENTOPLANPENS, $params);
    }

    function consultarPlanPensXfuente_de_financiamientoPlanPensAprox($fuente_de_financiamientoPlanPens)
    {
        $params = array(
            "%$fuente_de_financiamientoPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_FUENTE_DE_FINANCIAMIENTOPLANPENS_APROX, $params);
    }

    function existePlanPensXfuente_de_financiamientoPlanPens($fuente_de_financiamientoPlanPens)
    {
        $params = array(
            $fuente_de_financiamientoPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_FUENTE_DE_FINANCIAMIENTOPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXplanilla2PlanPens($planilla2PlanPens)
    {
        $params = array(
            "%$planilla2PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_PLANILLA2PLANPENS, $params);
    }

    function consultarPlanPensXplanilla2PlanPensAprox($planilla2PlanPens)
    {
        $params = array(
            "%$planilla2PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_PLANILLA2PLANPENS_APROX, $params);
    }

    function existePlanPensXplanilla2PlanPens($planilla2PlanPens)
    {
        $params = array(
            $planilla2PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_PLANILLA2PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXtotal_imponiblePlanPens($total_imponiblePlanPens)
    {
        $params = array(
            "%$total_imponiblePlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_TOTAL_IMPONIBLEPLANPENS, $params);
    }

    function consultarPlanPensXtotal_imponiblePlanPensAprox($total_imponiblePlanPens)
    {
        $params = array(
            "%$total_imponiblePlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_TOTAL_IMPONIBLEPLANPENS_APROX, $params);
    }

    function existePlanPensXtotal_imponiblePlanPens($total_imponiblePlanPens)
    {
        $params = array(
            $total_imponiblePlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_TOTAL_IMPONIBLEPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXtotal_haberPlanPens($total_haberPlanPens)
    {
        $params = array(
            "%$total_haberPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_TOTAL_HABERPLANPENS, $params);
    }

    function consultarPlanPensXtotal_haberPlanPensAprox($total_haberPlanPens)
    {
        $params = array(
            "%$total_haberPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_TOTAL_HABERPLANPENS_APROX, $params);
    }

    function existePlanPensXtotal_haberPlanPens($total_haberPlanPens)
    {
        $params = array(
            $total_haberPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_TOTAL_HABERPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXtotal_descuentosPlanPens($total_descuentosPlanPens)
    {
        $params = array(
            "%$total_descuentosPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_TOTAL_DESCUENTOSPLANPENS, $params);
    }

    function consultarPlanPensXtotal_descuentosPlanPensAprox($total_descuentosPlanPens)
    {
        $params = array(
            "%$total_descuentosPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_TOTAL_DESCUENTOSPLANPENS_APROX, $params);
    }

    function existePlanPensXtotal_descuentosPlanPens($total_descuentosPlanPens)
    {
        $params = array(
            $total_descuentosPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_TOTAL_DESCUENTOSPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXtotal_liquidoPlanPens($total_liquidoPlanPens)
    {
        $params = array(
            "%$total_liquidoPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_TOTAL_LIQUIDOPLANPENS, $params);
    }

    function consultarPlanPensXtotal_liquidoPlanPensAprox($total_liquidoPlanPens)
    {
        $params = array(
            "%$total_liquidoPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_TOTAL_LIQUIDOPLANPENS_APROX, $params);
    }

    function existePlanPensXtotal_liquidoPlanPens($total_liquidoPlanPens)
    {
        $params = array(
            $total_liquidoPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_TOTAL_LIQUIDOPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXaguinaldoPlanPens($aguinaldoPlanPens)
    {
        $params = array(
            "%$aguinaldoPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_AGUINALDOPLANPENS, $params);
    }

    function consultarPlanPensXaguinaldoPlanPensAprox($aguinaldoPlanPens)
    {
        $params = array(
            "%$aguinaldoPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_AGUINALDOPLANPENS_APROX, $params);
    }

    function existePlanPensXaguinaldoPlanPens($aguinaldoPlanPens)
    {
        $params = array(
            $aguinaldoPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_AGUINALDOPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXbasicaPlanPens($basicaPlanPens)
    {
        $params = array(
            "%$basicaPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_BASICAPLANPENS, $params);
    }

    function consultarPlanPensXbasicaPlanPensAprox($basicaPlanPens)
    {
        $params = array(
            "%$basicaPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_BASICAPLANPENS_APROX, $params);
    }

    function existePlanPensXbasicaPlanPens($basicaPlanPens)
    {
        $params = array(
            $basicaPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_BASICAPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXbonif_personalPlanPens($bonif_personalPlanPens)
    {
        $params = array(
            "%$bonif_personalPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_BONIF_PERSONALPLANPENS, $params);
    }

    function consultarPlanPensXbonif_personalPlanPensAprox($bonif_personalPlanPens)
    {
        $params = array(
            "%$bonif_personalPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_BONIF_PERSONALPLANPENS_APROX, $params);
    }

    function existePlanPensXbonif_personalPlanPens($bonif_personalPlanPens)
    {
        $params = array(
            $bonif_personalPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_BONIF_PERSONALPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXael25671PlanPens($ael25671PlanPens)
    {
        $params = array(
            "%$ael25671PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_AEL25671PLANPENS, $params);
    }

    function consultarPlanPensXael25671PlanPensAprox($ael25671PlanPens)
    {
        $params = array(
            "%$ael25671PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_AEL25671PLANPENS_APROX, $params);
    }

    function existePlanPensXael25671PlanPens($ael25671PlanPens)
    {
        $params = array(
            $ael25671PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_AEL25671PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXaeds081PlanPens($aeds081PlanPens)
    {
        $params = array(
            "%$aeds081PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_AEDS081PLANPENS, $params);
    }

    function consultarPlanPensXaeds081PlanPensAprox($aeds081PlanPens)
    {
        $params = array(
            "%$aeds081PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_AEDS081PLANPENS_APROX, $params);
    }

    function existePlanPensXaeds081PlanPens($aeds081PlanPens)
    {
        $params = array(
            $aeds081PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_AEDS081PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXtphPlanPens($tphPlanPens)
    {
        $params = array(
            "%$tphPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_TPHPLANPENS, $params);
    }

    function consultarPlanPensXtphPlanPensAprox($tphPlanPens)
    {
        $params = array(
            "%$tphPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_TPHPLANPENS_APROX, $params);
    }

    function existePlanPensXtphPlanPens($tphPlanPens)
    {
        $params = array(
            $tphPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_TPHPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXbonif_familiarPlanPens($bonif_familiarPlanPens)
    {
        $params = array(
            "%$bonif_familiarPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_BONIF_FAMILIARPLANPENS, $params);
    }

    function consultarPlanPensXbonif_familiarPlanPensAprox($bonif_familiarPlanPens)
    {
        $params = array(
            "%$bonif_familiarPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_BONIF_FAMILIARPLANPENS_APROX, $params);
    }

    function existePlanPensXbonif_familiarPlanPens($bonif_familiarPlanPens)
    {
        $params = array(
            $bonif_familiarPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_BONIF_FAMILIARPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXdu080_04PlanPens($du080_04PlanPens)
    {
        $params = array(
            "%$du080_04PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DU080_04PLANPENS, $params);
    }

    function consultarPlanPensXdu080_04PlanPensAprox($du080_04PlanPens)
    {
        $params = array(
            "%$du080_04PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DU080_04PLANPENS_APROX, $params);
    }

    function existePlanPensXdu080_04PlanPens($du080_04PlanPens)
    {
        $params = array(
            $du080_04PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DU080_04PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXrefrig_y_moviPlanPens($refrig_y_moviPlanPens)
    {
        $params = array(
            "%$refrig_y_moviPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_REFRIG_Y_MOVIPLANPENS, $params);
    }

    function consultarPlanPensXrefrig_y_moviPlanPensAprox($refrig_y_moviPlanPens)
    {
        $params = array(
            "%$refrig_y_moviPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_REFRIG_Y_MOVIPLANPENS_APROX, $params);
    }

    function existePlanPensXrefrig_y_moviPlanPens($refrig_y_moviPlanPens)
    {
        $params = array(
            $refrig_y_moviPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_REFRIG_Y_MOVIPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXdu90_96PlanPens($du90_96PlanPens)
    {
        $params = array(
            "%$du90_96PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DU90_96PLANPENS, $params);
    }

    function consultarPlanPensXdu90_96PlanPensAprox($du90_96PlanPens)
    {
        $params = array(
            "%$du90_96PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DU90_96PLANPENS_APROX, $params);
    }

    function existePlanPensXdu90_96PlanPens($du90_96PlanPens)
    {
        $params = array(
            $du90_96PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DU90_96PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXds19_94_pcmPlanPens($ds19_94_pcmPlanPens)
    {
        $params = array(
            "%$ds19_94_pcmPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS19_94_PCMPLANPENS, $params);
    }

    function consultarPlanPensXds19_94_pcmPlanPensAprox($ds19_94_pcmPlanPens)
    {
        $params = array(
            "%$ds19_94_pcmPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS19_94_PCMPLANPENS_APROX, $params);
    }

    function existePlanPensXds19_94_pcmPlanPens($ds19_94_pcmPlanPens)
    {
        $params = array(
            $ds19_94_pcmPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS19_94_PCMPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXds21_92_pcmPlanPens($ds21_92_pcmPlanPens)
    {
        $params = array(
            "%$ds21_92_pcmPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS21_92_PCMPLANPENS, $params);
    }

    function consultarPlanPensXds21_92_pcmPlanPensAprox($ds21_92_pcmPlanPens)
    {
        $params = array(
            "%$ds21_92_pcmPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS21_92_PCMPLANPENS_APROX, $params);
    }

    function existePlanPensXds21_92_pcmPlanPens($ds21_92_pcmPlanPens)
    {
        $params = array(
            $ds21_92_pcmPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS21_92_PCMPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXbon_especialPlanPens($bon_especialPlanPens)
    {
        $params = array(
            "%$bon_especialPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_BON_ESPECIALPLANPENS, $params);
    }

    function consultarPlanPensXbon_especialPlanPensAprox($bon_especialPlanPens)
    {
        $params = array(
            "%$bon_especialPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_BON_ESPECIALPLANPENS_APROX, $params);
    }

    function existePlanPensXbon_especialPlanPens($bon_especialPlanPens)
    {
        $params = array(
            $bon_especialPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_BON_ESPECIALPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXreunificadaPlanPens($reunificadaPlanPens)
    {
        $params = array(
            "%$reunificadaPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_REUNIFICADAPLANPENS, $params);
    }

    function consultarPlanPensXreunificadaPlanPensAprox($reunificadaPlanPens)
    {
        $params = array(
            "%$reunificadaPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_REUNIFICADAPLANPENS_APROX, $params);
    }

    function existePlanPensXreunificadaPlanPens($reunificadaPlanPens)
    {
        $params = array(
            $reunificadaPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_REUNIFICADAPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXigvPlanPens($igvPlanPens)
    {
        $params = array(
            "%$igvPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_IGVPLANPENS, $params);
    }

    function consultarPlanPensXigvPlanPensAprox($igvPlanPens)
    {
        $params = array(
            "%$igvPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_IGVPLANPENS_APROX, $params);
    }

    function existePlanPensXigvPlanPens($igvPlanPens)
    {
        $params = array(
            $igvPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_IGVPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXcargsimulPlanPens($cargsimulPlanPens)
    {
        $params = array(
            "%$cargsimulPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_CARGSIMULPLANPENS, $params);
    }

    function consultarPlanPensXcargsimulPlanPensAprox($cargsimulPlanPens)
    {
        $params = array(
            "%$cargsimulPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_CARGSIMULPLANPENS_APROX, $params);
    }

    function existePlanPensXcargsimulPlanPens($cargsimulPlanPens)
    {
        $params = array(
            $cargsimulPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_CARGSIMULPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXart18_dl_20530PlanPens($art18_dl_20530PlanPens)
    {
        $params = array(
            "%$art18_dl_20530PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_ART18_DL_20530PLANPENS, $params);
    }

    function consultarPlanPensXart18_dl_20530PlanPensAprox($art18_dl_20530PlanPens)
    {
        $params = array(
            "%$art18_dl_20530PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_ART18_DL_20530PLANPENS_APROX, $params);
    }

    function existePlanPensXart18_dl_20530PlanPens($art18_dl_20530PlanPens)
    {
        $params = array(
            $art18_dl_20530PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_ART18_DL_20530PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXdu073_97PlanPens($du073_97PlanPens)
    {
        $params = array(
            "%$du073_97PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DU073_97PLANPENS, $params);
    }

    function consultarPlanPensXdu073_97PlanPensAprox($du073_97PlanPens)
    {
        $params = array(
            "%$du073_97PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DU073_97PLANPENS_APROX, $params);
    }

    function existePlanPensXdu073_97PlanPens($du073_97PlanPens)
    {
        $params = array(
            $du073_97PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DU073_97PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXdu011_99PlanPens($du011_99PlanPens)
    {
        $params = array(
            "%$du011_99PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DU011_99PLANPENS, $params);
    }

    function consultarPlanPensXdu011_99PlanPensAprox($du011_99PlanPens)
    {
        $params = array(
            "%$du011_99PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DU011_99PLANPENS_APROX, $params);
    }

    function existePlanPensXdu011_99PlanPens($du011_99PlanPens)
    {
        $params = array(
            $du011_99PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DU011_99PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXdu037_94PlanPens($du037_94PlanPens)
    {
        $params = array(
            "%$du037_94PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DU037_94PLANPENS, $params);
    }

    function consultarPlanPensXdu037_94PlanPensAprox($du037_94PlanPens)
    {
        $params = array(
            "%$du037_94PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DU037_94PLANPENS_APROX, $params);
    }

    function existePlanPensXdu037_94PlanPens($du037_94PlanPens)
    {
        $params = array(
            $du037_94PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DU037_94PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXds016PlanPens($ds016PlanPens)
    {
        $params = array(
            "%$ds016PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS016PLANPENS, $params);
    }

    function consultarPlanPensXds016PlanPensAprox($ds016PlanPens)
    {
        $params = array(
            "%$ds016PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS016PLANPENS_APROX, $params);
    }

    function existePlanPensXds016PlanPens($ds016PlanPens)
    {
        $params = array(
            $ds016PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS016PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXds017PlanPens($ds017PlanPens)
    {
        $params = array(
            "%$ds017PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS017PLANPENS, $params);
    }

    function consultarPlanPensXds017PlanPensAprox($ds017PlanPens)
    {
        $params = array(
            "%$ds017PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS017PLANPENS_APROX, $params);
    }

    function existePlanPensXds017PlanPens($ds017PlanPens)
    {
        $params = array(
            $ds017PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS017PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXds110_2006PlanPens($ds110_2006PlanPens)
    {
        $params = array(
            "%$ds110_2006PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS110_2006PLANPENS, $params);
    }

    function consultarPlanPensXds110_2006PlanPensAprox($ds110_2006PlanPens)
    {
        $params = array(
            "%$ds110_2006PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS110_2006PLANPENS_APROX, $params);
    }

    function existePlanPensXds110_2006PlanPens($ds110_2006PlanPens)
    {
        $params = array(
            $ds110_2006PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS110_2006PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXds039_2007PlanPens($ds039_2007PlanPens)
    {
        $params = array(
            "%$ds039_2007PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS039_2007PLANPENS, $params);
    }

    function consultarPlanPensXds039_2007PlanPensAprox($ds039_2007PlanPens)
    {
        $params = array(
            "%$ds039_2007PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS039_2007PLANPENS_APROX, $params);
    }

    function existePlanPensXds039_2007PlanPens($ds039_2007PlanPens)
    {
        $params = array(
            $ds039_2007PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS039_2007PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXds120_2008PlanPens($ds120_2008PlanPens)
    {
        $params = array(
            "%$ds120_2008PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS120_2008PLANPENS, $params);
    }

    function consultarPlanPensXds120_2008PlanPensAprox($ds120_2008PlanPens)
    {
        $params = array(
            "%$ds120_2008PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS120_2008PLANPENS_APROX, $params);
    }

    function existePlanPensXds120_2008PlanPens($ds120_2008PlanPens)
    {
        $params = array(
            $ds120_2008PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS120_2008PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXds014_2009PlanPens($ds014_2009PlanPens)
    {
        $params = array(
            "%$ds014_2009PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS014_2009PLANPENS, $params);
    }

    function consultarPlanPensXds014_2009PlanPensAprox($ds014_2009PlanPens)
    {
        $params = array(
            "%$ds014_2009PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS014_2009PLANPENS_APROX, $params);
    }

    function existePlanPensXds014_2009PlanPens($ds014_2009PlanPens)
    {
        $params = array(
            $ds014_2009PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS014_2009PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXds077_2010PlanPens($ds077_2010PlanPens)
    {
        $params = array(
            "%$ds077_2010PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS077_2010PLANPENS, $params);
    }

    function consultarPlanPensXds077_2010PlanPensAprox($ds077_2010PlanPens)
    {
        $params = array(
            "%$ds077_2010PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS077_2010PLANPENS_APROX, $params);
    }

    function existePlanPensXds077_2010PlanPens($ds077_2010PlanPens)
    {
        $params = array(
            $ds077_2010PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS077_2010PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXds031_2011PlanPens($ds031_2011PlanPens)
    {
        $params = array(
            "%$ds031_2011PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS031_2011PLANPENS, $params);
    }

    function consultarPlanPensXds031_2011PlanPensAprox($ds031_2011PlanPens)
    {
        $params = array(
            "%$ds031_2011PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS031_2011PLANPENS_APROX, $params);
    }

    function existePlanPensXds031_2011PlanPens($ds031_2011PlanPens)
    {
        $params = array(
            $ds031_2011PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS031_2011PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXds024_2012PlanPens($ds024_2012PlanPens)
    {
        $params = array(
            "%$ds024_2012PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS024_2012PLANPENS, $params);
    }

    function consultarPlanPensXds024_2012PlanPensAprox($ds024_2012PlanPens)
    {
        $params = array(
            "%$ds024_2012PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS024_2012PLANPENS_APROX, $params);
    }

    function existePlanPensXds024_2012PlanPens($ds024_2012PlanPens)
    {
        $params = array(
            $ds024_2012PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS024_2012PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXds004_2013PlanPens($ds004_2013PlanPens)
    {
        $params = array(
            "%$ds004_2013PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS004_2013PLANPENS, $params);
    }

    function consultarPlanPensXds004_2013PlanPensAprox($ds004_2013PlanPens)
    {
        $params = array(
            "%$ds004_2013PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS004_2013PLANPENS_APROX, $params);
    }

    function existePlanPensXds004_2013PlanPens($ds004_2013PlanPens)
    {
        $params = array(
            $ds004_2013PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS004_2013PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXds003_2014PlanPens($ds003_2014PlanPens)
    {
        $params = array(
            "%$ds003_2014PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS003_2014PLANPENS, $params);
    }

    function consultarPlanPensXds003_2014PlanPensAprox($ds003_2014PlanPens)
    {
        $params = array(
            "%$ds003_2014PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS003_2014PLANPENS_APROX, $params);
    }

    function existePlanPensXds003_2014PlanPens($ds003_2014PlanPens)
    {
        $params = array(
            $ds003_2014PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS003_2014PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXds002_2015PlanPens($ds002_2015PlanPens)
    {
        $params = array(
            "%$ds002_2015PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS002_2015PLANPENS, $params);
    }

    function consultarPlanPensXds002_2015PlanPensAprox($ds002_2015PlanPens)
    {
        $params = array(
            "%$ds002_2015PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS002_2015PLANPENS_APROX, $params);
    }

    function existePlanPensXds002_2015PlanPens($ds002_2015PlanPens)
    {
        $params = array(
            $ds002_2015PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS002_2015PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXds005_2016PlanPens($ds005_2016PlanPens)
    {
        $params = array(
            "%$ds005_2016PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS005_2016PLANPENS, $params);
    }

    function consultarPlanPensXds005_2016PlanPensAprox($ds005_2016PlanPens)
    {
        $params = array(
            "%$ds005_2016PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS005_2016PLANPENS_APROX, $params);
    }

    function existePlanPensXds005_2016PlanPens($ds005_2016PlanPens)
    {
        $params = array(
            $ds005_2016PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS005_2016PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXds020_2017PlanPens($ds020_2017PlanPens)
    {
        $params = array(
            "%$ds020_2017PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS020_2017PLANPENS, $params);
    }

    function consultarPlanPensXds020_2017PlanPensAprox($ds020_2017PlanPens)
    {
        $params = array(
            "%$ds020_2017PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS020_2017PLANPENS_APROX, $params);
    }

    function existePlanPensXds020_2017PlanPens($ds020_2017PlanPens)
    {
        $params = array(
            $ds020_2017PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS020_2017PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXds011_2018PlanPens($ds011_2018PlanPens)
    {
        $params = array(
            "%$ds011_2018PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS011_2018PLANPENS, $params);
    }

    function consultarPlanPensXds011_2018PlanPensAprox($ds011_2018PlanPens)
    {
        $params = array(
            "%$ds011_2018PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS011_2018PLANPENS_APROX, $params);
    }

    function existePlanPensXds011_2018PlanPens($ds011_2018PlanPens)
    {
        $params = array(
            $ds011_2018PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS011_2018PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXds009_2019PlanPens($ds009_2019PlanPens)
    {
        $params = array(
            "%$ds009_2019PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS009_2019PLANPENS, $params);
    }

    function consultarPlanPensXds009_2019PlanPensAprox($ds009_2019PlanPens)
    {
        $params = array(
            "%$ds009_2019PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS009_2019PLANPENS_APROX, $params);
    }

    function existePlanPensXds009_2019PlanPens($ds009_2019PlanPens)
    {
        $params = array(
            $ds009_2019PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS009_2019PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXds006_2020PlanPens($ds006_2020PlanPens)
    {
        $params = array(
            "%$ds006_2020PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS006_2020PLANPENS, $params);
    }

    function consultarPlanPensXds006_2020PlanPensAprox($ds006_2020PlanPens)
    {
        $params = array(
            "%$ds006_2020PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS006_2020PLANPENS_APROX, $params);
    }

    function existePlanPensXds006_2020PlanPens($ds006_2020PlanPens)
    {
        $params = array(
            $ds006_2020PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DS006_2020PLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXipssPlanPens($ipssPlanPens)
    {
        $params = array(
            "%$ipssPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_IPSSPLANPENS, $params);
    }

    function consultarPlanPensXipssPlanPensAprox($ipssPlanPens)
    {
        $params = array(
            "%$ipssPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_IPSSPLANPENS_APROX, $params);
    }

    function existePlanPensXipssPlanPens($ipssPlanPens)
    {
        $params = array(
            $ipssPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_IPSSPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXcafaePlanPens($cafaePlanPens)
    {
        $params = array(
            "%$cafaePlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_CAFAEPLANPENS, $params);
    }

    function consultarPlanPensXcafaePlanPensAprox($cafaePlanPens)
    {
        $params = array(
            "%$cafaePlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_CAFAEPLANPENS_APROX, $params);
    }

    function existePlanPensXcafaePlanPens($cafaePlanPens)
    {
        $params = array(
            $cafaePlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_CAFAEPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXprderrmaPlanPens($prderrmaPlanPens)
    {
        $params = array(
            "%$prderrmaPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_PRDERRMAPLANPENS, $params);
    }

    function consultarPlanPensXprderrmaPlanPensAprox($prderrmaPlanPens)
    {
        $params = array(
            "%$prderrmaPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_PRDERRMAPLANPENS_APROX, $params);
    }

    function existePlanPensXprderrmaPlanPens($prderrmaPlanPens)
    {
        $params = array(
            $prderrmaPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_PRDERRMAPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXescolaridadPlanPens($escolaridadPlanPens)
    {
        $params = array(
            "%$escolaridadPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_ESCOLARIDADPLANPENS, $params);
    }

    function consultarPlanPensXescolaridadPlanPensAprox($escolaridadPlanPens)
    {
        $params = array(
            "%$escolaridadPlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_ESCOLARIDADPLANPENS_APROX, $params);
    }

    function existePlanPensXescolaridadPlanPens($escolaridadPlanPens)
    {
        $params = array(
            $escolaridadPlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_ESCOLARIDADPLANPENS, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarPlanPensXdecreto_supermo_20_21PlanPens($decreto_supermo_20_21PlanPens)
    {
        $params = array(
            "%$decreto_supermo_20_21PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DECRETO_SUPERMO_20_21PLANPENS, $params);
    }

    function consultarPlanPensXdecreto_supermo_20_21PlanPensAprox($decreto_supermo_20_21PlanPens)
    {
        $params = array(
            "%$decreto_supermo_20_21PlanPens%"
        );
        return parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DECRETO_SUPERMO_20_21PLANPENS_APROX, $params);
    }

    function existePlanPensXdecreto_supermo_20_21PlanPens($decreto_supermo_20_21PlanPens)
    {
        $params = array(
            $decreto_supermo_20_21PlanPens
        );
        $tabla = parent::executeQuery(SQLPlanPens::CONSULTAR_PLANPENS_POR_DECRETO_SUPERMO_20_21PLANPENS, $params);
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