<?php
require_once ('../../../config/config.php');
require_once (MOD . 'ConcAct.php');
require_once (SENT . 'Query.php');
require_once (SENT . 'SQLConcAct.php');

class ConcAct extends Query
{

    function __construct()
    {
        parent::abrirConexion();
    }

    /**
     * function compAgregarcambiarTabla1cambiarTabla2($idConcAct, $aguinaldoConcAct, $basicaConcAct, $bonif_personalConcAct, $ael25671ConcAct, $aeds081ConcAct, $tphConcAct, $bonif_familiarConcAct, $du080_04ConcAct, $refrig_y_moviConcAct, $du90_96ConcAct, $ds19_94_pcmConcAct, $ds21_92_pcmConcAct, $bon_especialConcAct, $reunificadaConcAct, $igvConcAct, $cargsimulConcAct, $art18_dl_20530ConcAct, $du073_97ConcAct, $du011_99ConcAct, $du037_94ConcAct, $ds016ConcAct, $ds017ConcAct, $ds110_2006ConcAct, $ds039_2007ConcAct, $ds120_2008ConcAct, $ds014_2009ConcAct, $ds077_2010ConcAct, $ds031_2011ConcAct, $ds024_2012ConcAct, $ds004_2013ConcAct, $ds003_2014ConcAct, $ds002_2015ConcAct, $ds005_2016ConcAct, $ds020_2017ConcAct, $ds011_2018ConcAct, $ds009_2019ConcAct, $ds006_2020ConcAct, $ipssConcAct, $cafaeConcAct, $prderrmaConcAct) {
     * $objcambiarTabla1 = new cambiarTabla1();
     * $objcambiarTabla1->beginTransaction();
     * $resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
     * $idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
     * $resultado2 = cambiarTabla2::agregarcambiarTabla2($idConcAct, $aguinaldoConcAct, $basicaConcAct, $bonif_personalConcAct, $ael25671ConcAct, $aeds081ConcAct, $tphConcAct, $bonif_familiarConcAct, $du080_04ConcAct, $refrig_y_moviConcAct, $du90_96ConcAct, $ds19_94_pcmConcAct, $ds21_92_pcmConcAct, $bon_especialConcAct, $reunificadaConcAct, $igvConcAct, $cargsimulConcAct, $art18_dl_20530ConcAct, $du073_97ConcAct, $du011_99ConcAct, $du037_94ConcAct, $ds016ConcAct, $ds017ConcAct, $ds110_2006ConcAct, $ds039_2007ConcAct, $ds120_2008ConcAct, $ds014_2009ConcAct, $ds077_2010ConcAct, $ds031_2011ConcAct, $ds024_2012ConcAct, $ds004_2013ConcAct, $ds003_2014ConcAct, $ds002_2015ConcAct, $ds005_2016ConcAct, $ds020_2017ConcAct, $ds011_2018ConcAct, $ds009_2019ConcAct, $ds006_2020ConcAct, $ipssConcAct, $cafaeConcAct, $prderrmaConcAct, $id_ConcAct);
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
     * function compActualizarcambiarTabla1cambiarTabla2($idConcAct, $aguinaldoConcAct, $basicaConcAct, $bonif_personalConcAct, $ael25671ConcAct, $aeds081ConcAct, $tphConcAct, $bonif_familiarConcAct, $du080_04ConcAct, $refrig_y_moviConcAct, $du90_96ConcAct, $ds19_94_pcmConcAct, $ds21_92_pcmConcAct, $bon_especialConcAct, $reunificadaConcAct, $igvConcAct, $cargsimulConcAct, $art18_dl_20530ConcAct, $du073_97ConcAct, $du011_99ConcAct, $du037_94ConcAct, $ds016ConcAct, $ds017ConcAct, $ds110_2006ConcAct, $ds039_2007ConcAct, $ds120_2008ConcAct, $ds014_2009ConcAct, $ds077_2010ConcAct, $ds031_2011ConcAct, $ds024_2012ConcAct, $ds004_2013ConcAct, $ds003_2014ConcAct, $ds002_2015ConcAct, $ds005_2016ConcAct, $ds020_2017ConcAct, $ds011_2018ConcAct, $ds009_2019ConcAct, $ds006_2020ConcAct, $ipssConcAct, $cafaeConcAct, $prderrmaConcAct) {
     * $objcambiarTabla1 = new cambiarTabla1();
     * $objcambiarTabla1->beginTransaction();
     * $resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
     * $resultado2 = cambiarTabla2::actualizarcambiarTabla2($idConcAct, $aguinaldoConcAct, $basicaConcAct, $bonif_personalConcAct, $ael25671ConcAct, $aeds081ConcAct, $tphConcAct, $bonif_familiarConcAct, $du080_04ConcAct, $refrig_y_moviConcAct, $du90_96ConcAct, $ds19_94_pcmConcAct, $ds21_92_pcmConcAct, $bon_especialConcAct, $reunificadaConcAct, $igvConcAct, $cargsimulConcAct, $art18_dl_20530ConcAct, $du073_97ConcAct, $du011_99ConcAct, $du037_94ConcAct, $ds016ConcAct, $ds017ConcAct, $ds110_2006ConcAct, $ds039_2007ConcAct, $ds120_2008ConcAct, $ds014_2009ConcAct, $ds077_2010ConcAct, $ds031_2011ConcAct, $ds024_2012ConcAct, $ds004_2013ConcAct, $ds003_2014ConcAct, $ds002_2015ConcAct, $ds005_2016ConcAct, $ds020_2017ConcAct, $ds011_2018ConcAct, $ds009_2019ConcAct, $ds006_2020ConcAct, $ipssConcAct, $cafaeConcAct, $prderrmaConcAct, $id_ConcAct);
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
    function agregarConcAct($idConcAct, $aguinaldoConcAct, $basicaConcAct, $bonif_personalConcAct, $ael25671ConcAct, $aeds081ConcAct, $tphConcAct, $bonif_familiarConcAct, $du080_04ConcAct, $refrig_y_moviConcAct, $du90_96ConcAct, $ds19_94_pcmConcAct, $ds21_92_pcmConcAct, $bon_especialConcAct, $reunificadaConcAct, $igvConcAct, $cargsimulConcAct, $art18_dl_20530ConcAct, $du073_97ConcAct, $du011_99ConcAct, $du037_94ConcAct, $ds016ConcAct, $ds017ConcAct, $ds110_2006ConcAct, $ds039_2007ConcAct, $ds120_2008ConcAct, $ds014_2009ConcAct, $ds077_2010ConcAct, $ds031_2011ConcAct, $ds024_2012ConcAct, $ds004_2013ConcAct, $ds003_2014ConcAct, $ds002_2015ConcAct, $ds005_2016ConcAct, $ds020_2017ConcAct, $ds011_2018ConcAct, $ds009_2019ConcAct, $ds006_2020ConcAct, $ipssConcAct, $cafaeConcAct, $prderrmaConcAct)
    {
        $idConcAct = parent::prepareParam($idConcAct, Query::DATATYPE_INTEGER);
        $aguinaldoConcAct = parent::prepareParam($aguinaldoConcAct, Query::DATATYPE_STRING, 0);
        $basicaConcAct = parent::prepareParam($basicaConcAct, Query::DATATYPE_STRING, 0);
        $bonif_personalConcAct = parent::prepareParam($bonif_personalConcAct, Query::DATATYPE_STRING, 0);
        $ael25671ConcAct = parent::prepareParam($ael25671ConcAct, Query::DATATYPE_STRING, 0);
        $aeds081ConcAct = parent::prepareParam($aeds081ConcAct, Query::DATATYPE_STRING, 0);
        $tphConcAct = parent::prepareParam($tphConcAct, Query::DATATYPE_STRING, 0);
        $bonif_familiarConcAct = parent::prepareParam($bonif_familiarConcAct, Query::DATATYPE_STRING, 0);
        $du080_04ConcAct = parent::prepareParam($du080_04ConcAct, Query::DATATYPE_STRING, 0);
        $refrig_y_moviConcAct = parent::prepareParam($refrig_y_moviConcAct, Query::DATATYPE_STRING, 0);
        $du90_96ConcAct = parent::prepareParam($du90_96ConcAct, Query::DATATYPE_STRING, 0);
        $ds19_94_pcmConcAct = parent::prepareParam($ds19_94_pcmConcAct, Query::DATATYPE_STRING, 0);
        $ds21_92_pcmConcAct = parent::prepareParam($ds21_92_pcmConcAct, Query::DATATYPE_STRING, 0);
        $bon_especialConcAct = parent::prepareParam($bon_especialConcAct, Query::DATATYPE_STRING, 0);
        $reunificadaConcAct = parent::prepareParam($reunificadaConcAct, Query::DATATYPE_STRING, 0);
        $igvConcAct = parent::prepareParam($igvConcAct, Query::DATATYPE_STRING, 0);
        $cargsimulConcAct = parent::prepareParam($cargsimulConcAct, Query::DATATYPE_STRING, 0);
        $art18_dl_20530ConcAct = parent::prepareParam($art18_dl_20530ConcAct, Query::DATATYPE_STRING, 0);
        $du073_97ConcAct = parent::prepareParam($du073_97ConcAct, Query::DATATYPE_STRING, 0);
        $du011_99ConcAct = parent::prepareParam($du011_99ConcAct, Query::DATATYPE_STRING, 0);
        $du037_94ConcAct = parent::prepareParam($du037_94ConcAct, Query::DATATYPE_STRING, 0);
        $ds016ConcAct = parent::prepareParam($ds016ConcAct, Query::DATATYPE_STRING, 0);
        $ds017ConcAct = parent::prepareParam($ds017ConcAct, Query::DATATYPE_STRING, 0);
        $ds110_2006ConcAct = parent::prepareParam($ds110_2006ConcAct, Query::DATATYPE_STRING, 0);
        $ds039_2007ConcAct = parent::prepareParam($ds039_2007ConcAct, Query::DATATYPE_STRING, 0);
        $ds120_2008ConcAct = parent::prepareParam($ds120_2008ConcAct, Query::DATATYPE_STRING, 0);
        $ds014_2009ConcAct = parent::prepareParam($ds014_2009ConcAct, Query::DATATYPE_STRING, 0);
        $ds077_2010ConcAct = parent::prepareParam($ds077_2010ConcAct, Query::DATATYPE_STRING, 0);
        $ds031_2011ConcAct = parent::prepareParam($ds031_2011ConcAct, Query::DATATYPE_STRING, 0);
        $ds024_2012ConcAct = parent::prepareParam($ds024_2012ConcAct, Query::DATATYPE_STRING, 0);
        $ds004_2013ConcAct = parent::prepareParam($ds004_2013ConcAct, Query::DATATYPE_STRING, 0);
        $ds003_2014ConcAct = parent::prepareParam($ds003_2014ConcAct, Query::DATATYPE_STRING, 0);
        $ds002_2015ConcAct = parent::prepareParam($ds002_2015ConcAct, Query::DATATYPE_STRING, 0);
        $ds005_2016ConcAct = parent::prepareParam($ds005_2016ConcAct, Query::DATATYPE_STRING, 0);
        $ds020_2017ConcAct = parent::prepareParam($ds020_2017ConcAct, Query::DATATYPE_STRING, 0);
        $ds011_2018ConcAct = parent::prepareParam($ds011_2018ConcAct, Query::DATATYPE_STRING, 0);
        $ds009_2019ConcAct = parent::prepareParam($ds009_2019ConcAct, Query::DATATYPE_STRING, 0);
        $ds006_2020ConcAct = parent::prepareParam($ds006_2020ConcAct, Query::DATATYPE_STRING, 0);
        $ipssConcAct = parent::prepareParam($ipssConcAct, Query::DATATYPE_STRING, 0);
        $cafaeConcAct = parent::prepareParam($cafaeConcAct, Query::DATATYPE_STRING, 0);
        $prderrmaConcAct = parent::prepareParam($prderrmaConcAct, Query::DATATYPE_STRING, 0);

        $params = array(
            $idConcAct,
            $aguinaldoConcAct,
            $basicaConcAct,
            $bonif_personalConcAct,
            $ael25671ConcAct,
            $aeds081ConcAct,
            $tphConcAct,
            $bonif_familiarConcAct,
            $du080_04ConcAct,
            $refrig_y_moviConcAct,
            $du90_96ConcAct,
            $ds19_94_pcmConcAct,
            $ds21_92_pcmConcAct,
            $bon_especialConcAct,
            $reunificadaConcAct,
            $igvConcAct,
            $cargsimulConcAct,
            $art18_dl_20530ConcAct,
            $du073_97ConcAct,
            $du011_99ConcAct,
            $du037_94ConcAct,
            $ds016ConcAct,
            $ds017ConcAct,
            $ds110_2006ConcAct,
            $ds039_2007ConcAct,
            $ds120_2008ConcAct,
            $ds014_2009ConcAct,
            $ds077_2010ConcAct,
            $ds031_2011ConcAct,
            $ds024_2012ConcAct,
            $ds004_2013ConcAct,
            $ds003_2014ConcAct,
            $ds002_2015ConcAct,
            $ds005_2016ConcAct,
            $ds020_2017ConcAct,
            $ds011_2018ConcAct,
            $ds009_2019ConcAct,
            $ds006_2020ConcAct,
            $ipssConcAct,
            $cafaeConcAct,
            $prderrmaConcAct
        );
        return parent::execute(SQLConcAct::AGREGAR_CONCACT, $params);
    }

    function actualizarConcAct($aguinaldoConcAct, $basicaConcAct, $bonif_personalConcAct, $ael25671ConcAct, $aeds081ConcAct, $tphConcAct, $bonif_familiarConcAct, $du080_04ConcAct, $refrig_y_moviConcAct, $du90_96ConcAct, $ds19_94_pcmConcAct, $ds21_92_pcmConcAct, $bon_especialConcAct, $reunificadaConcAct, $igvConcAct, $cargsimulConcAct, $art18_dl_20530ConcAct, $du073_97ConcAct, $du011_99ConcAct, $du037_94ConcAct, $ds016ConcAct, $ds017ConcAct, $ds110_2006ConcAct, $ds039_2007ConcAct, $ds120_2008ConcAct, $ds014_2009ConcAct, $ds077_2010ConcAct, $ds031_2011ConcAct, $ds024_2012ConcAct, $ds004_2013ConcAct, $ds003_2014ConcAct, $ds002_2015ConcAct, $ds005_2016ConcAct, $ds020_2017ConcAct, $ds011_2018ConcAct, $ds009_2019ConcAct, $ds006_2020ConcAct, $ipssConcAct, $cafaeConcAct, $prderrmaConcAct, $idConcAct)
    {
        // echo "[($aguinaldoConcAct, $basicaConcAct, $bonif_personalConcAct, $ael25671ConcAct, $aeds081ConcAct, $tphConcAct, $bonif_familiarConcAct, $du080_04ConcAct, $refrig_y_moviConcAct, $du90_96ConcAct, $ds19_94_pcmConcAct, $ds21_92_pcmConcAct, $bon_especialConcAct, $reunificadaConcAct, $igvConcAct, $cargsimulConcAct, $art18_dl_20530ConcAct, $du073_97ConcAct, $du011_99ConcAct, $du037_94ConcAct, $ds016ConcAct, $ds017ConcAct, $ds110_2006ConcAct, $ds039_2007ConcAct, $ds120_2008ConcAct, $ds014_2009ConcAct, $ds077_2010ConcAct, $ds031_2011ConcAct, $ds024_2012ConcAct, $ds004_2013ConcAct, $ds003_2014ConcAct, $ds002_2015ConcAct, $ds005_2016ConcAct, $ds020_2017ConcAct, $ds011_2018ConcAct, $ds009_2019ConcAct, $ds006_2020ConcAct, $ipssConcAct, $cafaeConcAct, $prderrmaConcAct, $idConcAct)]";
        $idConcAct = parent::prepareParam($idConcAct, Query::DATATYPE_INTEGER);
        $aguinaldoConcAct = parent::prepareParam($aguinaldoConcAct, Query::DATATYPE_INTEGER);
        $basicaConcAct = parent::prepareParam($basicaConcAct, Query::DATATYPE_INTEGER);
        $bonif_personalConcAct = parent::prepareParam($bonif_personalConcAct, Query::DATATYPE_INTEGER);
        $ael25671ConcAct = parent::prepareParam($ael25671ConcAct, Query::DATATYPE_STRING, 0);
        $aeds081ConcAct = parent::prepareParam($aeds081ConcAct, Query::DATATYPE_STRING, 0);
        $tphConcAct = parent::prepareParam($tphConcAct, Query::DATATYPE_STRING, 0);
        $bonif_familiarConcAct = parent::prepareParam($bonif_familiarConcAct, Query::DATATYPE_STRING, 0);
        $du080_04ConcAct = parent::prepareParam($du080_04ConcAct, Query::DATATYPE_STRING, 0);
        $refrig_y_moviConcAct = parent::prepareParam($refrig_y_moviConcAct, Query::DATATYPE_STRING, 0);
        $du90_96ConcAct = parent::prepareParam($du90_96ConcAct, Query::DATATYPE_STRING, 0);
        $ds19_94_pcmConcAct = parent::prepareParam($ds19_94_pcmConcAct, Query::DATATYPE_STRING, 0);
        $ds21_92_pcmConcAct = parent::prepareParam($ds21_92_pcmConcAct, Query::DATATYPE_STRING, 0);
        $bon_especialConcAct = parent::prepareParam($bon_especialConcAct, Query::DATATYPE_STRING, 0);
        $reunificadaConcAct = parent::prepareParam($reunificadaConcAct, Query::DATATYPE_STRING, 0);
        $igvConcAct = parent::prepareParam($igvConcAct, Query::DATATYPE_STRING, 0);
        $cargsimulConcAct = parent::prepareParam($cargsimulConcAct, Query::DATATYPE_STRING, 0);
        $art18_dl_20530ConcAct = parent::prepareParam($art18_dl_20530ConcAct, Query::DATATYPE_STRING, 0);
        $du073_97ConcAct = parent::prepareParam($du073_97ConcAct, Query::DATATYPE_STRING, 0);
        $du011_99ConcAct = parent::prepareParam($du011_99ConcAct, Query::DATATYPE_STRING, 0);
        $du037_94ConcAct = parent::prepareParam($du037_94ConcAct, Query::DATATYPE_STRING, 0);
        $ds016ConcAct = parent::prepareParam($ds016ConcAct, Query::DATATYPE_STRING, 0);
        $ds017ConcAct = parent::prepareParam($ds017ConcAct, Query::DATATYPE_STRING, 0);
        $ds110_2006ConcAct = parent::prepareParam($ds110_2006ConcAct, Query::DATATYPE_STRING, 0);
        $ds039_2007ConcAct = parent::prepareParam($ds039_2007ConcAct, Query::DATATYPE_STRING, 0);
        $ds120_2008ConcAct = parent::prepareParam($ds120_2008ConcAct, Query::DATATYPE_STRING, 0);
        $ds014_2009ConcAct = parent::prepareParam($ds014_2009ConcAct, Query::DATATYPE_STRING, 0);
        $ds077_2010ConcAct = parent::prepareParam($ds077_2010ConcAct, Query::DATATYPE_STRING, 0);
        $ds031_2011ConcAct = parent::prepareParam($ds031_2011ConcAct, Query::DATATYPE_STRING, 0);
        $ds024_2012ConcAct = parent::prepareParam($ds024_2012ConcAct, Query::DATATYPE_STRING, 0);
        $ds004_2013ConcAct = parent::prepareParam($ds004_2013ConcAct, Query::DATATYPE_STRING, 0);
        $ds003_2014ConcAct = parent::prepareParam($ds003_2014ConcAct, Query::DATATYPE_STRING, 0);
        $ds002_2015ConcAct = parent::prepareParam($ds002_2015ConcAct, Query::DATATYPE_STRING, 0);
        $ds005_2016ConcAct = parent::prepareParam($ds005_2016ConcAct, Query::DATATYPE_STRING, 0);
        $ds020_2017ConcAct = parent::prepareParam($ds020_2017ConcAct, Query::DATATYPE_STRING, 0);
        $ds011_2018ConcAct = parent::prepareParam($ds011_2018ConcAct, Query::DATATYPE_STRING, 0);
        $ds009_2019ConcAct = parent::prepareParam($ds009_2019ConcAct, Query::DATATYPE_STRING, 0);
        $ds006_2020ConcAct = parent::prepareParam($ds006_2020ConcAct, Query::DATATYPE_STRING, 0);
        $ipssConcAct = parent::prepareParam($ipssConcAct, Query::DATATYPE_STRING, 0);
        $cafaeConcAct = parent::prepareParam($cafaeConcAct, Query::DATATYPE_STRING, 0);
        $prderrmaConcAct = parent::prepareParam($prderrmaConcAct, Query::DATATYPE_STRING, 0);

        $params = array(
            $aguinaldoConcAct,
            $basicaConcAct,
            $bonif_personalConcAct,
            $ael25671ConcAct,
            $aeds081ConcAct,
            $tphConcAct,
            $bonif_familiarConcAct,
            $du080_04ConcAct,
            $refrig_y_moviConcAct,
            $du90_96ConcAct,
            $ds19_94_pcmConcAct,
            $ds21_92_pcmConcAct,
            $bon_especialConcAct,
            $reunificadaConcAct,
            $igvConcAct,
            $cargsimulConcAct,
            $art18_dl_20530ConcAct,
            $du073_97ConcAct,
            $du011_99ConcAct,
            $du037_94ConcAct,
            $ds016ConcAct,
            $ds017ConcAct,
            $ds110_2006ConcAct,
            $ds039_2007ConcAct,
            $ds120_2008ConcAct,
            $ds014_2009ConcAct,
            $ds077_2010ConcAct,
            $ds031_2011ConcAct,
            $ds024_2012ConcAct,
            $ds004_2013ConcAct,
            $ds003_2014ConcAct,
            $ds002_2015ConcAct,
            $ds005_2016ConcAct,
            $ds020_2017ConcAct,
            $ds011_2018ConcAct,
            $ds009_2019ConcAct,
            $ds006_2020ConcAct,
            $ipssConcAct,
            $cafaeConcAct,
            $prderrmaConcAct,
            $idConcAct
        );
        return parent::execute(SQLConcAct::ACTUALIZAR_CONCACT, $params);
    }

    function consultarConcAct()
    {
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT);
    }

    function eliminarConcAct($id_ConcAct)
    {
        $params = array(
            $id_ConcAct
        );
        return parent::execute(SQLConcAct::ELIMINAR_CONCACT, $params);
    }

    // ------------------------------
    function consultarConcActXidConcAct($idConcAct)
    {
        $params = array(
            $idConcAct
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_IDCONCACT, $params);
    }

    function existeConcActXidConcAct($idConcAct)
    {
        $params = array(
            $idConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_IDCONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXaguinaldoConcAct($aguinaldoConcAct)
    {
        $params = array(
            "%$aguinaldoConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_AGUINALDOCONCACT, $params);
    }

    function consultarConcActXaguinaldoConcActAprox($aguinaldoConcAct)
    {
        $params = array(
            "%$aguinaldoConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_AGUINALDOCONCACT_APROX, $params);
    }

    function existeConcActXaguinaldoConcAct($aguinaldoConcAct)
    {
        $params = array(
            $aguinaldoConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_AGUINALDOCONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXbasicaConcAct($basicaConcAct)
    {
        $params = array(
            "%$basicaConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_BASICACONCACT, $params);
    }

    function consultarConcActXbasicaConcActAprox($basicaConcAct)
    {
        $params = array(
            "%$basicaConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_BASICACONCACT_APROX, $params);
    }

    function existeConcActXbasicaConcAct($basicaConcAct)
    {
        $params = array(
            $basicaConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_BASICACONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXbonif_personalConcAct($bonif_personalConcAct)
    {
        $params = array(
            "%$bonif_personalConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_BONIF_PERSONALCONCACT, $params);
    }

    function consultarConcActXbonif_personalConcActAprox($bonif_personalConcAct)
    {
        $params = array(
            "%$bonif_personalConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_BONIF_PERSONALCONCACT_APROX, $params);
    }

    function existeConcActXbonif_personalConcAct($bonif_personalConcAct)
    {
        $params = array(
            $bonif_personalConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_BONIF_PERSONALCONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXael25671ConcAct($ael25671ConcAct)
    {
        $params = array(
            "%$ael25671ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_AEL25671CONCACT, $params);
    }

    function consultarConcActXael25671ConcActAprox($ael25671ConcAct)
    {
        $params = array(
            "%$ael25671ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_AEL25671CONCACT_APROX, $params);
    }

    function existeConcActXael25671ConcAct($ael25671ConcAct)
    {
        $params = array(
            $ael25671ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_AEL25671CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXaeds081ConcAct($aeds081ConcAct)
    {
        $params = array(
            "%$aeds081ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_AEDS081CONCACT, $params);
    }

    function consultarConcActXaeds081ConcActAprox($aeds081ConcAct)
    {
        $params = array(
            "%$aeds081ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_AEDS081CONCACT_APROX, $params);
    }

    function existeConcActXaeds081ConcAct($aeds081ConcAct)
    {
        $params = array(
            $aeds081ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_AEDS081CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXtphConcAct($tphConcAct)
    {
        $params = array(
            "%$tphConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_TPHCONCACT, $params);
    }

    function consultarConcActXtphConcActAprox($tphConcAct)
    {
        $params = array(
            "%$tphConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_TPHCONCACT_APROX, $params);
    }

    function existeConcActXtphConcAct($tphConcAct)
    {
        $params = array(
            $tphConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_TPHCONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXbonif_familiarConcAct($bonif_familiarConcAct)
    {
        $params = array(
            "%$bonif_familiarConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_BONIF_FAMILIARCONCACT, $params);
    }

    function consultarConcActXbonif_familiarConcActAprox($bonif_familiarConcAct)
    {
        $params = array(
            "%$bonif_familiarConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_BONIF_FAMILIARCONCACT_APROX, $params);
    }

    function existeConcActXbonif_familiarConcAct($bonif_familiarConcAct)
    {
        $params = array(
            $bonif_familiarConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_BONIF_FAMILIARCONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXdu080_04ConcAct($du080_04ConcAct)
    {
        $params = array(
            "%$du080_04ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DU080_04CONCACT, $params);
    }

    function consultarConcActXdu080_04ConcActAprox($du080_04ConcAct)
    {
        $params = array(
            "%$du080_04ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DU080_04CONCACT_APROX, $params);
    }

    function existeConcActXdu080_04ConcAct($du080_04ConcAct)
    {
        $params = array(
            $du080_04ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DU080_04CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXrefrig_y_moviConcAct($refrig_y_moviConcAct)
    {
        $params = array(
            "%$refrig_y_moviConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_REFRIG_Y_MOVICONCACT, $params);
    }

    function consultarConcActXrefrig_y_moviConcActAprox($refrig_y_moviConcAct)
    {
        $params = array(
            "%$refrig_y_moviConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_REFRIG_Y_MOVICONCACT_APROX, $params);
    }

    function existeConcActXrefrig_y_moviConcAct($refrig_y_moviConcAct)
    {
        $params = array(
            $refrig_y_moviConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_REFRIG_Y_MOVICONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXdu90_96ConcAct($du90_96ConcAct)
    {
        $params = array(
            "%$du90_96ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DU90_96CONCACT, $params);
    }

    function consultarConcActXdu90_96ConcActAprox($du90_96ConcAct)
    {
        $params = array(
            "%$du90_96ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DU90_96CONCACT_APROX, $params);
    }

    function existeConcActXdu90_96ConcAct($du90_96ConcAct)
    {
        $params = array(
            $du90_96ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DU90_96CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXds19_94_pcmConcAct($ds19_94_pcmConcAct)
    {
        $params = array(
            "%$ds19_94_pcmConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS19_94_PCMCONCACT, $params);
    }

    function consultarConcActXds19_94_pcmConcActAprox($ds19_94_pcmConcAct)
    {
        $params = array(
            "%$ds19_94_pcmConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS19_94_PCMCONCACT_APROX, $params);
    }

    function existeConcActXds19_94_pcmConcAct($ds19_94_pcmConcAct)
    {
        $params = array(
            $ds19_94_pcmConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS19_94_PCMCONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXds21_92_pcmConcAct($ds21_92_pcmConcAct)
    {
        $params = array(
            "%$ds21_92_pcmConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS21_92_PCMCONCACT, $params);
    }

    function consultarConcActXds21_92_pcmConcActAprox($ds21_92_pcmConcAct)
    {
        $params = array(
            "%$ds21_92_pcmConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS21_92_PCMCONCACT_APROX, $params);
    }

    function existeConcActXds21_92_pcmConcAct($ds21_92_pcmConcAct)
    {
        $params = array(
            $ds21_92_pcmConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS21_92_PCMCONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXbon_especialConcAct($bon_especialConcAct)
    {
        $params = array(
            "%$bon_especialConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_BON_ESPECIALCONCACT, $params);
    }

    function consultarConcActXbon_especialConcActAprox($bon_especialConcAct)
    {
        $params = array(
            "%$bon_especialConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_BON_ESPECIALCONCACT_APROX, $params);
    }

    function existeConcActXbon_especialConcAct($bon_especialConcAct)
    {
        $params = array(
            $bon_especialConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_BON_ESPECIALCONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXreunificadaConcAct($reunificadaConcAct)
    {
        $params = array(
            "%$reunificadaConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_REUNIFICADACONCACT, $params);
    }

    function consultarConcActXreunificadaConcActAprox($reunificadaConcAct)
    {
        $params = array(
            "%$reunificadaConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_REUNIFICADACONCACT_APROX, $params);
    }

    function existeConcActXreunificadaConcAct($reunificadaConcAct)
    {
        $params = array(
            $reunificadaConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_REUNIFICADACONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXigvConcAct($igvConcAct)
    {
        $params = array(
            "%$igvConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_IGVCONCACT, $params);
    }

    function consultarConcActXigvConcActAprox($igvConcAct)
    {
        $params = array(
            "%$igvConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_IGVCONCACT_APROX, $params);
    }

    function existeConcActXigvConcAct($igvConcAct)
    {
        $params = array(
            $igvConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_IGVCONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXcargsimulConcAct($cargsimulConcAct)
    {
        $params = array(
            "%$cargsimulConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_CARGSIMULCONCACT, $params);
    }

    function consultarConcActXcargsimulConcActAprox($cargsimulConcAct)
    {
        $params = array(
            "%$cargsimulConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_CARGSIMULCONCACT_APROX, $params);
    }

    function existeConcActXcargsimulConcAct($cargsimulConcAct)
    {
        $params = array(
            $cargsimulConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_CARGSIMULCONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXart18_dl_20530ConcAct($art18_dl_20530ConcAct)
    {
        $params = array(
            "%$art18_dl_20530ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_ART18_DL_20530CONCACT, $params);
    }

    function consultarConcActXart18_dl_20530ConcActAprox($art18_dl_20530ConcAct)
    {
        $params = array(
            "%$art18_dl_20530ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_ART18_DL_20530CONCACT_APROX, $params);
    }

    function existeConcActXart18_dl_20530ConcAct($art18_dl_20530ConcAct)
    {
        $params = array(
            $art18_dl_20530ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_ART18_DL_20530CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXdu073_97ConcAct($du073_97ConcAct)
    {
        $params = array(
            "%$du073_97ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DU073_97CONCACT, $params);
    }

    function consultarConcActXdu073_97ConcActAprox($du073_97ConcAct)
    {
        $params = array(
            "%$du073_97ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DU073_97CONCACT_APROX, $params);
    }

    function existeConcActXdu073_97ConcAct($du073_97ConcAct)
    {
        $params = array(
            $du073_97ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DU073_97CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXdu011_99ConcAct($du011_99ConcAct)
    {
        $params = array(
            "%$du011_99ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DU011_99CONCACT, $params);
    }

    function consultarConcActXdu011_99ConcActAprox($du011_99ConcAct)
    {
        $params = array(
            "%$du011_99ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DU011_99CONCACT_APROX, $params);
    }

    function existeConcActXdu011_99ConcAct($du011_99ConcAct)
    {
        $params = array(
            $du011_99ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DU011_99CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXdu037_94ConcAct($du037_94ConcAct)
    {
        $params = array(
            "%$du037_94ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DU037_94CONCACT, $params);
    }

    function consultarConcActXdu037_94ConcActAprox($du037_94ConcAct)
    {
        $params = array(
            "%$du037_94ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DU037_94CONCACT_APROX, $params);
    }

    function existeConcActXdu037_94ConcAct($du037_94ConcAct)
    {
        $params = array(
            $du037_94ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DU037_94CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXds016ConcAct($ds016ConcAct)
    {
        $params = array(
            "%$ds016ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS016CONCACT, $params);
    }

    function consultarConcActXds016ConcActAprox($ds016ConcAct)
    {
        $params = array(
            "%$ds016ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS016CONCACT_APROX, $params);
    }

    function existeConcActXds016ConcAct($ds016ConcAct)
    {
        $params = array(
            $ds016ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS016CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXds017ConcAct($ds017ConcAct)
    {
        $params = array(
            "%$ds017ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS017CONCACT, $params);
    }

    function consultarConcActXds017ConcActAprox($ds017ConcAct)
    {
        $params = array(
            "%$ds017ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS017CONCACT_APROX, $params);
    }

    function existeConcActXds017ConcAct($ds017ConcAct)
    {
        $params = array(
            $ds017ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS017CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXds110_2006ConcAct($ds110_2006ConcAct)
    {
        $params = array(
            "%$ds110_2006ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS110_2006CONCACT, $params);
    }

    function consultarConcActXds110_2006ConcActAprox($ds110_2006ConcAct)
    {
        $params = array(
            "%$ds110_2006ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS110_2006CONCACT_APROX, $params);
    }

    function existeConcActXds110_2006ConcAct($ds110_2006ConcAct)
    {
        $params = array(
            $ds110_2006ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS110_2006CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXds039_2007ConcAct($ds039_2007ConcAct)
    {
        $params = array(
            "%$ds039_2007ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS039_2007CONCACT, $params);
    }

    function consultarConcActXds039_2007ConcActAprox($ds039_2007ConcAct)
    {
        $params = array(
            "%$ds039_2007ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS039_2007CONCACT_APROX, $params);
    }

    function existeConcActXds039_2007ConcAct($ds039_2007ConcAct)
    {
        $params = array(
            $ds039_2007ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS039_2007CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXds120_2008ConcAct($ds120_2008ConcAct)
    {
        $params = array(
            "%$ds120_2008ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS120_2008CONCACT, $params);
    }

    function consultarConcActXds120_2008ConcActAprox($ds120_2008ConcAct)
    {
        $params = array(
            "%$ds120_2008ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS120_2008CONCACT_APROX, $params);
    }

    function existeConcActXds120_2008ConcAct($ds120_2008ConcAct)
    {
        $params = array(
            $ds120_2008ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS120_2008CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXds014_2009ConcAct($ds014_2009ConcAct)
    {
        $params = array(
            "%$ds014_2009ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS014_2009CONCACT, $params);
    }

    function consultarConcActXds014_2009ConcActAprox($ds014_2009ConcAct)
    {
        $params = array(
            "%$ds014_2009ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS014_2009CONCACT_APROX, $params);
    }

    function existeConcActXds014_2009ConcAct($ds014_2009ConcAct)
    {
        $params = array(
            $ds014_2009ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS014_2009CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXds077_2010ConcAct($ds077_2010ConcAct)
    {
        $params = array(
            "%$ds077_2010ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS077_2010CONCACT, $params);
    }

    function consultarConcActXds077_2010ConcActAprox($ds077_2010ConcAct)
    {
        $params = array(
            "%$ds077_2010ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS077_2010CONCACT_APROX, $params);
    }

    function existeConcActXds077_2010ConcAct($ds077_2010ConcAct)
    {
        $params = array(
            $ds077_2010ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS077_2010CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXds031_2011ConcAct($ds031_2011ConcAct)
    {
        $params = array(
            "%$ds031_2011ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS031_2011CONCACT, $params);
    }

    function consultarConcActXds031_2011ConcActAprox($ds031_2011ConcAct)
    {
        $params = array(
            "%$ds031_2011ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS031_2011CONCACT_APROX, $params);
    }

    function existeConcActXds031_2011ConcAct($ds031_2011ConcAct)
    {
        $params = array(
            $ds031_2011ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS031_2011CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXds024_2012ConcAct($ds024_2012ConcAct)
    {
        $params = array(
            "%$ds024_2012ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS024_2012CONCACT, $params);
    }

    function consultarConcActXds024_2012ConcActAprox($ds024_2012ConcAct)
    {
        $params = array(
            "%$ds024_2012ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS024_2012CONCACT_APROX, $params);
    }

    function existeConcActXds024_2012ConcAct($ds024_2012ConcAct)
    {
        $params = array(
            $ds024_2012ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS024_2012CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXds004_2013ConcAct($ds004_2013ConcAct)
    {
        $params = array(
            "%$ds004_2013ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS004_2013CONCACT, $params);
    }

    function consultarConcActXds004_2013ConcActAprox($ds004_2013ConcAct)
    {
        $params = array(
            "%$ds004_2013ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS004_2013CONCACT_APROX, $params);
    }

    function existeConcActXds004_2013ConcAct($ds004_2013ConcAct)
    {
        $params = array(
            $ds004_2013ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS004_2013CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXds003_2014ConcAct($ds003_2014ConcAct)
    {
        $params = array(
            "%$ds003_2014ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS003_2014CONCACT, $params);
    }

    function consultarConcActXds003_2014ConcActAprox($ds003_2014ConcAct)
    {
        $params = array(
            "%$ds003_2014ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS003_2014CONCACT_APROX, $params);
    }

    function existeConcActXds003_2014ConcAct($ds003_2014ConcAct)
    {
        $params = array(
            $ds003_2014ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS003_2014CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXds002_2015ConcAct($ds002_2015ConcAct)
    {
        $params = array(
            "%$ds002_2015ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS002_2015CONCACT, $params);
    }

    function consultarConcActXds002_2015ConcActAprox($ds002_2015ConcAct)
    {
        $params = array(
            "%$ds002_2015ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS002_2015CONCACT_APROX, $params);
    }

    function existeConcActXds002_2015ConcAct($ds002_2015ConcAct)
    {
        $params = array(
            $ds002_2015ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS002_2015CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXds005_2016ConcAct($ds005_2016ConcAct)
    {
        $params = array(
            "%$ds005_2016ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS005_2016CONCACT, $params);
    }

    function consultarConcActXds005_2016ConcActAprox($ds005_2016ConcAct)
    {
        $params = array(
            "%$ds005_2016ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS005_2016CONCACT_APROX, $params);
    }

    function existeConcActXds005_2016ConcAct($ds005_2016ConcAct)
    {
        $params = array(
            $ds005_2016ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS005_2016CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXds020_2017ConcAct($ds020_2017ConcAct)
    {
        $params = array(
            "%$ds020_2017ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS020_2017CONCACT, $params);
    }

    function consultarConcActXds020_2017ConcActAprox($ds020_2017ConcAct)
    {
        $params = array(
            "%$ds020_2017ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS020_2017CONCACT_APROX, $params);
    }

    function existeConcActXds020_2017ConcAct($ds020_2017ConcAct)
    {
        $params = array(
            $ds020_2017ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS020_2017CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXds011_2018ConcAct($ds011_2018ConcAct)
    {
        $params = array(
            "%$ds011_2018ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS011_2018CONCACT, $params);
    }

    function consultarConcActXds011_2018ConcActAprox($ds011_2018ConcAct)
    {
        $params = array(
            "%$ds011_2018ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS011_2018CONCACT_APROX, $params);
    }

    function existeConcActXds011_2018ConcAct($ds011_2018ConcAct)
    {
        $params = array(
            $ds011_2018ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS011_2018CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXds009_2019ConcAct($ds009_2019ConcAct)
    {
        $params = array(
            "%$ds009_2019ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS009_2019CONCACT, $params);
    }

    function consultarConcActXds009_2019ConcActAprox($ds009_2019ConcAct)
    {
        $params = array(
            "%$ds009_2019ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS009_2019CONCACT_APROX, $params);
    }

    function existeConcActXds009_2019ConcAct($ds009_2019ConcAct)
    {
        $params = array(
            $ds009_2019ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS009_2019CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXds006_2020ConcAct($ds006_2020ConcAct)
    {
        $params = array(
            "%$ds006_2020ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS006_2020CONCACT, $params);
    }

    function consultarConcActXds006_2020ConcActAprox($ds006_2020ConcAct)
    {
        $params = array(
            "%$ds006_2020ConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS006_2020CONCACT_APROX, $params);
    }

    function existeConcActXds006_2020ConcAct($ds006_2020ConcAct)
    {
        $params = array(
            $ds006_2020ConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_DS006_2020CONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXipssConcAct($ipssConcAct)
    {
        $params = array(
            "%$ipssConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_IPSSCONCACT, $params);
    }

    function consultarConcActXipssConcActAprox($ipssConcAct)
    {
        $params = array(
            "%$ipssConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_IPSSCONCACT_APROX, $params);
    }

    function existeConcActXipssConcAct($ipssConcAct)
    {
        $params = array(
            $ipssConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_IPSSCONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXcafaeConcAct($cafaeConcAct)
    {
        $params = array(
            "%$cafaeConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_CAFAECONCACT, $params);
    }

    function consultarConcActXcafaeConcActAprox($cafaeConcAct)
    {
        $params = array(
            "%$cafaeConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_CAFAECONCACT_APROX, $params);
    }

    function existeConcActXcafaeConcAct($cafaeConcAct)
    {
        $params = array(
            $cafaeConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_CAFAECONCACT, $params);
        if (count($tabla) > 0) {
            return true;
        }
        return false;
    }

    function consultarConcActXprderrmaConcAct($prderrmaConcAct)
    {
        $params = array(
            "%$prderrmaConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_PRDERRMACONCACT, $params);
    }

    function consultarConcActXprderrmaConcActAprox($prderrmaConcAct)
    {
        $params = array(
            "%$prderrmaConcAct%"
        );
        return parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_PRDERRMACONCACT_APROX, $params);
    }

    function existeConcActXprderrmaConcAct($prderrmaConcAct)
    {
        $params = array(
            $prderrmaConcAct
        );
        $tabla = parent::executeQuery(SQLConcAct::CONSULTAR_CONCACT_POR_PRDERRMACONCACT, $params);
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