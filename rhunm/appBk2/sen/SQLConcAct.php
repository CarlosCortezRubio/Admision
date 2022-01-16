<?php 
/** 
 * @file SQLConcAct.php 
 *  
 * Consultas SQL de la Tabla ConcAct 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 31/05/2021
 *  
*/ 
class SQLConcAct 
{ 
  const AGREGAR_CONCACT = "INSERT INTO concact (idConcAct, aguinaldoConcAct, basicaConcAct, bonif_personalConcAct, ael25671ConcAct, aeds081ConcAct, tphConcAct, bonif_familiarConcAct, du080_04ConcAct, refrig_y_moviConcAct, du90_96ConcAct, ds19_94_pcmConcAct, ds21_92_pcmConcAct, bon_especialConcAct, reunificadaConcAct, igvConcAct, cargsimulConcAct, art18_dl_20530ConcAct, du073_97ConcAct, du011_99ConcAct, du037_94ConcAct, ds016ConcAct, ds017ConcAct, ds110_2006ConcAct, ds039_2007ConcAct, ds120_2008ConcAct, ds014_2009ConcAct, ds077_2010ConcAct, ds031_2011ConcAct, ds024_2012ConcAct, ds004_2013ConcAct, ds003_2014ConcAct, ds002_2015ConcAct, ds005_2016ConcAct, ds020_2017ConcAct, ds011_2018ConcAct, ds009_2019ConcAct, ds006_2020ConcAct, ipssConcAct, cafaeConcAct, prderrmaConcAct,p_del20530ConcAct,decreto_supermo_20_21ConcAct) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?) ";

  const ACTUALIZAR_CONCACT = "UPDATE concact SET aguinaldoConcAct = ?, basicaConcAct = ?, bonif_personalConcAct = ?, ael25671ConcAct = ?, aeds081ConcAct = ?, tphConcAct = ?, bonif_familiarConcAct = ?, du080_04ConcAct = ?, refrig_y_moviConcAct = ?, du90_96ConcAct = ?, ds19_94_pcmConcAct = ?, ds21_92_pcmConcAct = ?, bon_especialConcAct = ?, reunificadaConcAct = ?, igvConcAct = ?, cargsimulConcAct = ?, art18_dl_20530ConcAct = ?, du073_97ConcAct = ?, du011_99ConcAct = ?, du037_94ConcAct = ?, ds016ConcAct = ?, ds017ConcAct = ?, ds110_2006ConcAct = ?, ds039_2007ConcAct = ?, ds120_2008ConcAct = ?, ds014_2009ConcAct = ?, ds077_2010ConcAct = ?, ds031_2011ConcAct = ?, ds024_2012ConcAct = ?, ds004_2013ConcAct = ?, ds003_2014ConcAct = ?, ds002_2015ConcAct = ?, ds005_2016ConcAct = ?, ds020_2017ConcAct = ?, ds011_2018ConcAct = ?, ds009_2019ConcAct = ?, ds006_2020ConcAct = ?, ipssConcAct = ?, cafaeConcAct = ?, prderrmaConcAct = ?, p_del20530ConcAct = ?, decreto_supermo_20_21ConcAct = ? WHERE idConcAct = ?";

  const ELIMINAR_CONCACT = "DELETE FROM concact WHERE idConcAct = ?";

  const CONSULTAR_CONCACT = "SELECT * FROM concact ORDER BY idConcAct";

  const CONSULTAR_CONCACT_POR_IDCONCACT = "SELECT * FROM concact WHERE idConcAct = ?";

  const CONSULTAR_CONCACT_POR_AGUINALDO = "SELECT * FROM concact WHERE UPPER(aguinaldoConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_AGUINALDO_APROX = "SELECT * FROM concact WHERE UPPER(aguinaldoConcAct) LIKE UPPER(?) ORDER BY aguinaldoConcAct";

  const CONSULTAR_CONCACT_POR_BASICA = "SELECT * FROM concact WHERE UPPER(basicaConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_BASICA_APROX = "SELECT * FROM concact WHERE UPPER(basicaConcAct) LIKE UPPER(?) ORDER BY basicaConcAct";

  const CONSULTAR_CONCACT_POR_BONIF_PERSONAL = "SELECT * FROM concact WHERE UPPER(bonif_personalConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_BONIF_PERSONAL_APROX = "SELECT * FROM concact WHERE UPPER(bonif_personalConcAct) LIKE UPPER(?) ORDER BY bonif_personalConcAct";

  const CONSULTAR_CONCACT_POR_AEL25671 = "SELECT * FROM concact WHERE UPPER(ael25671ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_AEL25671_APROX = "SELECT * FROM concact WHERE UPPER(ael25671ConcAct) LIKE UPPER(?) ORDER BY ael25671ConcAct";

  const CONSULTAR_CONCACT_POR_AEDS081 = "SELECT * FROM concact WHERE UPPER(aeds081ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_AEDS081_APROX = "SELECT * FROM concact WHERE UPPER(aeds081ConcAct) LIKE UPPER(?) ORDER BY aeds081ConcAct";

  const CONSULTAR_CONCACT_POR_TPH = "SELECT * FROM concact WHERE UPPER(tphConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_TPH_APROX = "SELECT * FROM concact WHERE UPPER(tphConcAct) LIKE UPPER(?) ORDER BY tphConcAct";

  const CONSULTAR_CONCACT_POR_BONIF_FAMILIAR = "SELECT * FROM concact WHERE UPPER(bonif_familiarConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_BONIF_FAMILIAR_APROX = "SELECT * FROM concact WHERE UPPER(bonif_familiarConcAct) LIKE UPPER(?) ORDER BY bonif_familiarConcAct";

  const CONSULTAR_CONCACT_POR_DU080_04 = "SELECT * FROM concact WHERE UPPER(du080_04ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DU080_04_APROX = "SELECT * FROM concact WHERE UPPER(du080_04ConcAct) LIKE UPPER(?) ORDER BY du080_04ConcAct";

  const CONSULTAR_CONCACT_POR_REFRIG_Y_MOVI = "SELECT * FROM concact WHERE UPPER(refrig_y_moviConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_REFRIG_Y_MOVI_APROX = "SELECT * FROM concact WHERE UPPER(refrig_y_moviConcAct) LIKE UPPER(?) ORDER BY refrig_y_moviConcAct";

  const CONSULTAR_CONCACT_POR_DU90_96 = "SELECT * FROM concact WHERE UPPER(du90_96ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DU90_96_APROX = "SELECT * FROM concact WHERE UPPER(du90_96ConcAct) LIKE UPPER(?) ORDER BY du90_96ConcAct";

  const CONSULTAR_CONCACT_POR_DS19_94_PCM = "SELECT * FROM concact WHERE UPPER(ds19_94_pcmConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DS19_94_PCM_APROX = "SELECT * FROM concact WHERE UPPER(ds19_94_pcmConcAct) LIKE UPPER(?) ORDER BY ds19_94_pcmConcAct";

  const CONSULTAR_CONCACT_POR_DS21_92_PCM = "SELECT * FROM concact WHERE UPPER(ds21_92_pcmConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DS21_92_PCM_APROX = "SELECT * FROM concact WHERE UPPER(ds21_92_pcmConcAct) LIKE UPPER(?) ORDER BY ds21_92_pcmConcAct";

  const CONSULTAR_CONCACT_POR_BON_ESPECIAL = "SELECT * FROM concact WHERE UPPER(bon_especialConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_BON_ESPECIAL_APROX = "SELECT * FROM concact WHERE UPPER(bon_especialConcAct) LIKE UPPER(?) ORDER BY bon_especialConcAct";

  const CONSULTAR_CONCACT_POR_REUNIFICADA = "SELECT * FROM concact WHERE UPPER(reunificadaConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_REUNIFICADA_APROX = "SELECT * FROM concact WHERE UPPER(reunificadaConcAct) LIKE UPPER(?) ORDER BY reunificadaConcAct";

  const CONSULTAR_CONCACT_POR_IGV = "SELECT * FROM concact WHERE UPPER(igvConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_IGV_APROX = "SELECT * FROM concact WHERE UPPER(igvConcAct) LIKE UPPER(?) ORDER BY igvConcAct";

  const CONSULTAR_CONCACT_POR_CARGSIMUL = "SELECT * FROM concact WHERE UPPER(cargsimulConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_CARGSIMUL_APROX = "SELECT * FROM concact WHERE UPPER(cargsimulConcAct) LIKE UPPER(?) ORDER BY cargsimulConcAct";

  const CONSULTAR_CONCACT_POR_ART18_DL_20530 = "SELECT * FROM concact WHERE UPPER(art18_dl_20530ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_ART18_DL_20530_APROX = "SELECT * FROM concact WHERE UPPER(art18_dl_20530ConcAct) LIKE UPPER(?) ORDER BY art18_dl_20530ConcAct";

  const CONSULTAR_CONCACT_POR_DU073_97 = "SELECT * FROM concact WHERE UPPER(du073_97ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DU073_97_APROX = "SELECT * FROM concact WHERE UPPER(du073_97ConcAct) LIKE UPPER(?) ORDER BY du073_97ConcAct";

  const CONSULTAR_CONCACT_POR_DU011_99 = "SELECT * FROM concact WHERE UPPER(du011_99ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DU011_99_APROX = "SELECT * FROM concact WHERE UPPER(du011_99ConcAct) LIKE UPPER(?) ORDER BY du011_99ConcAct";

  const CONSULTAR_CONCACT_POR_DU037_94 = "SELECT * FROM concact WHERE UPPER(du037_94ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DU037_94_APROX = "SELECT * FROM concact WHERE UPPER(du037_94ConcAct) LIKE UPPER(?) ORDER BY du037_94ConcAct";

  const CONSULTAR_CONCACT_POR_DS016 = "SELECT * FROM concact WHERE UPPER(ds016ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DS016_APROX = "SELECT * FROM concact WHERE UPPER(ds016ConcAct) LIKE UPPER(?) ORDER BY ds016ConcAct";

  const CONSULTAR_CONCACT_POR_DS017 = "SELECT * FROM concact WHERE UPPER(ds017ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DS017_APROX = "SELECT * FROM concact WHERE UPPER(ds017ConcAct) LIKE UPPER(?) ORDER BY ds017ConcAct";

  const CONSULTAR_CONCACT_POR_DS110_2006 = "SELECT * FROM concact WHERE UPPER(ds110_2006ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DS110_2006_APROX = "SELECT * FROM concact WHERE UPPER(ds110_2006ConcAct) LIKE UPPER(?) ORDER BY ds110_2006ConcAct";

  const CONSULTAR_CONCACT_POR_DS039_2007 = "SELECT * FROM concact WHERE UPPER(ds039_2007ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DS039_2007_APROX = "SELECT * FROM concact WHERE UPPER(ds039_2007ConcAct) LIKE UPPER(?) ORDER BY ds039_2007ConcAct";

  const CONSULTAR_CONCACT_POR_DS120_2008 = "SELECT * FROM concact WHERE UPPER(ds120_2008ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DS120_2008_APROX = "SELECT * FROM concact WHERE UPPER(ds120_2008ConcAct) LIKE UPPER(?) ORDER BY ds120_2008ConcAct";

  const CONSULTAR_CONCACT_POR_DS014_2009 = "SELECT * FROM concact WHERE UPPER(ds014_2009ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DS014_2009_APROX = "SELECT * FROM concact WHERE UPPER(ds014_2009ConcAct) LIKE UPPER(?) ORDER BY ds014_2009ConcAct";

  const CONSULTAR_CONCACT_POR_DS077_2010 = "SELECT * FROM concact WHERE UPPER(ds077_2010ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DS077_2010_APROX = "SELECT * FROM concact WHERE UPPER(ds077_2010ConcAct) LIKE UPPER(?) ORDER BY ds077_2010ConcAct";

  const CONSULTAR_CONCACT_POR_DS031_2011 = "SELECT * FROM concact WHERE UPPER(ds031_2011ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DS031_2011_APROX = "SELECT * FROM concact WHERE UPPER(ds031_2011ConcAct) LIKE UPPER(?) ORDER BY ds031_2011ConcAct";

  const CONSULTAR_CONCACT_POR_DS024_2012 = "SELECT * FROM concact WHERE UPPER(ds024_2012ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DS024_2012_APROX = "SELECT * FROM concact WHERE UPPER(ds024_2012ConcAct) LIKE UPPER(?) ORDER BY ds024_2012ConcAct";

  const CONSULTAR_CONCACT_POR_DS004_2013 = "SELECT * FROM concact WHERE UPPER(ds004_2013ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DS004_2013_APROX = "SELECT * FROM concact WHERE UPPER(ds004_2013ConcAct) LIKE UPPER(?) ORDER BY ds004_2013ConcAct";

  const CONSULTAR_CONCACT_POR_DS003_2014 = "SELECT * FROM concact WHERE UPPER(ds003_2014ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DS003_2014_APROX = "SELECT * FROM concact WHERE UPPER(ds003_2014ConcAct) LIKE UPPER(?) ORDER BY ds003_2014ConcAct";

  const CONSULTAR_CONCACT_POR_DS002_2015 = "SELECT * FROM concact WHERE UPPER(ds002_2015ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DS002_2015_APROX = "SELECT * FROM concact WHERE UPPER(ds002_2015ConcAct) LIKE UPPER(?) ORDER BY ds002_2015ConcAct";

  const CONSULTAR_CONCACT_POR_DS005_2016 = "SELECT * FROM concact WHERE UPPER(ds005_2016ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DS005_2016_APROX = "SELECT * FROM concact WHERE UPPER(ds005_2016ConcAct) LIKE UPPER(?) ORDER BY ds005_2016ConcAct";

  const CONSULTAR_CONCACT_POR_DS020_2017 = "SELECT * FROM concact WHERE UPPER(ds020_2017ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DS020_2017_APROX = "SELECT * FROM concact WHERE UPPER(ds020_2017ConcAct) LIKE UPPER(?) ORDER BY ds020_2017ConcAct";

  const CONSULTAR_CONCACT_POR_DS011_2018 = "SELECT * FROM concact WHERE UPPER(ds011_2018ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DS011_2018_APROX = "SELECT * FROM concact WHERE UPPER(ds011_2018ConcAct) LIKE UPPER(?) ORDER BY ds011_2018ConcAct";

  const CONSULTAR_CONCACT_POR_DS009_2019 = "SELECT * FROM concact WHERE UPPER(ds009_2019ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DS009_2019_APROX = "SELECT * FROM concact WHERE UPPER(ds009_2019ConcAct) LIKE UPPER(?) ORDER BY ds009_2019ConcAct";

  const CONSULTAR_CONCACT_POR_DS006_2020 = "SELECT * FROM concact WHERE UPPER(ds006_2020ConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_DS006_2020_APROX = "SELECT * FROM concact WHERE UPPER(ds006_2020ConcAct) LIKE UPPER(?) ORDER BY ds006_2020ConcAct";

  const CONSULTAR_CONCACT_POR_IPSS = "SELECT * FROM concact WHERE UPPER(ipssConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_IPSS_APROX = "SELECT * FROM concact WHERE UPPER(ipssConcAct) LIKE UPPER(?) ORDER BY ipssConcAct";

  const CONSULTAR_CONCACT_POR_CAFAE = "SELECT * FROM concact WHERE UPPER(cafaeConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_CAFAE_APROX = "SELECT * FROM concact WHERE UPPER(cafaeConcAct) LIKE UPPER(?) ORDER BY cafaeConcAct";

  const CONSULTAR_CONCACT_POR_PRDERRMA = "SELECT * FROM concact WHERE UPPER(prderrmaConcAct) = UPPER(?)";

  const CONSULTAR_CONCACT_POR_PRDERRMA_APROX = "SELECT * FROM concact WHERE UPPER(prderrmaConcAct) LIKE UPPER(?) ORDER BY prderrmaConcAct";

}
?>