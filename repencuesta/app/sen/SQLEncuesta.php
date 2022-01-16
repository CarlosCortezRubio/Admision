<?php

/** 
 * @file SQLEncuesta.php 
 *  
 * Consultas SQL de la Tabla Encuesta 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 07/04/2021
 *  
 */
class SQLEncuesta
{

    const AGREGAR_PLANPENS = "INSERT INTO Encuesta (
        dniEncuesta, apellidos_y_nombresEncuesta, fecha_de_nacimientoEncuesta, sexoEncuesta, 
        codigo_modularEncuesta, planillaEncuesta, tipo_de_regimenEncuesta, resolucion_de_pension_definitivaEncuesta, a_partir_deEncuesta, 
bancoEncuesta, cuenta_bancariaEncuesta, fuente_de_financiamientoEncuesta, planilla2Encuesta, total_imponibleEncuesta, 
total_haberEncuesta, total_descuentosEncuesta, total_liquidoEncuesta, aguinaldoEncuesta, basicaEncuesta, 
bonif_personalEncuesta, ael25671Encuesta, aeds081Encuesta, tphEncuesta, bonif_familiarEncuesta, 
du080_04Encuesta, refrig_y_moviEncuesta, du90_96Encuesta, ds19_94_pcmEncuesta, ds21_92_pcmEncuesta, 
bon_especialEncuesta, reunificadaEncuesta, igvEncuesta, cargsimulEncuesta, art18_dl_20530Encuesta, 
du073_97Encuesta, du011_99Encuesta, du037_94Encuesta, ds016Encuesta, ds017Encuesta, 
ds110_2006Encuesta, ds039_2007Encuesta, ds120_2008Encuesta, ds014_2009Encuesta, ds077_2010Encuesta, 
ds031_2011Encuesta, ds024_2012Encuesta, ds004_2013Encuesta, ds003_2014Encuesta, ds002_2015Encuesta, 
ds005_2016Encuesta, ds020_2017Encuesta, ds011_2018Encuesta, ds009_2019Encuesta, ds006_2020Encuesta, 
ipssEncuesta, cafaeEncuesta, prderrmaEncuesta, escolaridadEncuesta, decreto_supermo_20_21Encuesta, 
anio, mes) VALUES 
(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";

    const ACTUALIZAR_PLANPENS = "UPDATE Encuesta SET idEncuesta = ?, dniEncuesta = ?, apellidos_y_nombresEncuesta = ?, fecha_de_nacimientoEncuesta = ?, sexoEncuesta = ?, codigo_modularEncuesta = ?, planillaEncuesta = ?, tipo_de_regimenEncuesta = ?, resolucion_de_pension_definitivaEncuesta = ?, a_partir_deEncuesta = ?, bancoEncuesta = ?, cuenta_bancariaEncuesta = ?, fuente_de_financiamientoEncuesta = ?, planilla2Encuesta = ?, total_imponibleEncuesta = ?, total_haberEncuesta = ?, total_descuentosEncuesta = ?, total_liquidoEncuesta = ?, aguinaldoEncuesta = ?, basicaEncuesta = ?, bonif_personalEncuesta = ?, ael25671Encuesta = ?, aeds081Encuesta = ?, tphEncuesta = ?, bonif_familiarEncuesta = ?, du080_04Encuesta = ?, refrig_y_moviEncuesta = ?, du90_96Encuesta = ?, ds19_94_pcmEncuesta = ?, ds21_92_pcmEncuesta = ?, bon_especialEncuesta = ?, reunificadaEncuesta = ?, igvEncuesta = ?, cargsimulEncuesta = ?, art18_dl_20530Encuesta = ?, du073_97Encuesta = ?, du011_99Encuesta = ?, du037_94Encuesta = ?, ds016Encuesta = ?, ds017Encuesta = ?, ds110_2006Encuesta = ?, ds039_2007Encuesta = ?, ds120_2008Encuesta = ?, ds014_2009Encuesta = ?, ds077_2010Encuesta = ?, ds031_2011Encuesta = ?, ds024_2012Encuesta = ?, ds004_2013Encuesta = ?, ds003_2014Encuesta = ?, ds002_2015Encuesta = ?, ds005_2016Encuesta = ?, ds020_2017Encuesta = ?, ds011_2018Encuesta = ?, ds009_2019Encuesta = ?, ds006_2020Encuesta = ?, ipssEncuesta = ?, cafaeEncuesta = ?, prderrmaEncuesta = ?, escolaridadEncuesta = ?, decreto_supermo_20_21Encuesta = ?, anio = ?,mes  = ? WHERE idEncuesta = ?";

    const ELIMINAR_PLANPENS = "DELETE FROM Encuesta WHERE idEncuesta = ?";

    const CONSULTAR_PLANPENS = "SELECT * FROM Encuesta ORDER BY idEncuesta";

    const CONSULTAR_PLANPENS_POR_IDPLANPENS = "SELECT * FROM Encuesta WHERE idEncuesta = ?";

    const CONSULTAR_PLANPENS_POR_DNI = "SELECT * FROM Encuesta WHERE UPPER(dniEncuesta) = UPPER(?)";
    
    const CONSULTAR_PLANPENS_POR_DNI_POR_PARAMS = "SELECT * FROM Encuesta WHERE mes = ? AND anio = ? AND UPPER(dniEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_NOM_POR_PARAMS = "SELECT * FROM Encuesta WHERE mes= ? AND anio = ? AND UPPER(apellidos_y_nombresEncuesta) LIKE UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DNI_APROX = "SELECT * FROM Encuesta WHERE UPPER(dniEncuesta) LIKE UPPER(?) ORDER BY dniEncuesta";

    const CONSULTAR_PLANPENS_POR_APELLIDOS_Y_NOMBRES = "SELECT * FROM Encuesta WHERE UPPER(apellidos_y_nombresEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_APELLIDOS_Y_NOMBRES_APROX = "SELECT * FROM Encuesta WHERE UPPER(apellidos_y_nombresEncuesta) LIKE UPPER(?) ORDER BY apellidos_y_nombresEncuesta";

    const CONSULTAR_PLANPENS_POR_FECHA_DE_NACIMIENTO = "SELECT * FROM Encuesta WHERE UPPER(fecha_de_nacimientoEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_FECHA_DE_NACIMIENTO_APROX = "SELECT * FROM Encuesta WHERE UPPER(fecha_de_nacimientoEncuesta) LIKE UPPER(?) ORDER BY fecha_de_nacimientoEncuesta";

    const CONSULTAR_PLANPENS_POR_SEXO = "SELECT * FROM Encuesta WHERE UPPER(sexoEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_SEXO_APROX = "SELECT * FROM Encuesta WHERE UPPER(sexoEncuesta) LIKE UPPER(?) ORDER BY sexoEncuesta";

    const CONSULTAR_PLANPENS_POR_CODIGO_MODULAR = "SELECT * FROM Encuesta WHERE UPPER(codigo_modularEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_CODIGO_MODULAR_APROX = "SELECT * FROM Encuesta WHERE UPPER(codigo_modularEncuesta) LIKE UPPER(?) ORDER BY codigo_modularEncuesta";

    const CONSULTAR_PLANPENS_POR_PLANILLA = "SELECT * FROM Encuesta WHERE UPPER(planillaEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_PLANILLA_APROX = "SELECT * FROM Encuesta WHERE UPPER(planillaEncuesta) LIKE UPPER(?) ORDER BY planillaEncuesta";

    const CONSULTAR_PLANPENS_POR_TIPO_DE_REGIMEN = "SELECT * FROM Encuesta WHERE UPPER(tipo_de_regimenEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_TIPO_DE_REGIMEN_APROX = "SELECT * FROM Encuesta WHERE UPPER(tipo_de_regimenEncuesta) LIKE UPPER(?) ORDER BY tipo_de_regimenEncuesta";

    const CONSULTAR_PLANPENS_POR_RESOLUCION_DE_PENSION_DEFINITIVA = "SELECT * FROM Encuesta WHERE UPPER(resolucion_de_pension_definitivaEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_RESOLUCION_DE_PENSION_DEFINITIVA_APROX = "SELECT * FROM Encuesta WHERE UPPER(resolucion_de_pension_definitivaEncuesta) LIKE UPPER(?) ORDER BY resolucion_de_pension_definitivaEncuesta";

    const CONSULTAR_PLANPENS_POR_A_PARTIR_DE = "SELECT * FROM Encuesta WHERE UPPER(a_partir_deEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_A_PARTIR_DE_APROX = "SELECT * FROM Encuesta WHERE UPPER(a_partir_deEncuesta) LIKE UPPER(?) ORDER BY a_partir_deEncuesta";

    const CONSULTAR_PLANPENS_POR_BANCO = "SELECT * FROM Encuesta WHERE UPPER(bancoEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_BANCO_APROX = "SELECT * FROM Encuesta WHERE UPPER(bancoEncuesta) LIKE UPPER(?) ORDER BY bancoEncuesta";

    const CONSULTAR_PLANPENS_POR_CUENTA_BANCARIA = "SELECT * FROM Encuesta WHERE UPPER(cuenta_bancariaEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_CUENTA_BANCARIA_APROX = "SELECT * FROM Encuesta WHERE UPPER(cuenta_bancariaEncuesta) LIKE UPPER(?) ORDER BY cuenta_bancariaEncuesta";

    const CONSULTAR_PLANPENS_POR_FUENTE_DE_FINANCIAMIENTO = "SELECT * FROM Encuesta WHERE UPPER(fuente_de_financiamientoEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_FUENTE_DE_FINANCIAMIENTO_APROX = "SELECT * FROM Encuesta WHERE UPPER(fuente_de_financiamientoEncuesta) LIKE UPPER(?) ORDER BY fuente_de_financiamientoEncuesta";

    const CONSULTAR_PLANPENS_POR_PLANILLA2 = "SELECT * FROM Encuesta WHERE UPPER(planilla2Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_PLANILLA2_APROX = "SELECT * FROM Encuesta WHERE UPPER(planilla2Encuesta) LIKE UPPER(?) ORDER BY planilla2Encuesta";

    const CONSULTAR_PLANPENS_POR_TOTAL_IMPONIBLE = "SELECT * FROM Encuesta WHERE UPPER(total_imponibleEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_TOTAL_IMPONIBLE_APROX = "SELECT * FROM Encuesta WHERE UPPER(total_imponibleEncuesta) LIKE UPPER(?) ORDER BY total_imponibleEncuesta";

    const CONSULTAR_PLANPENS_POR_TOTAL_HABER = "SELECT * FROM Encuesta WHERE UPPER(total_haberEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_TOTAL_HABER_APROX = "SELECT * FROM Encuesta WHERE UPPER(total_haberEncuesta) LIKE UPPER(?) ORDER BY total_haberEncuesta";

    const CONSULTAR_PLANPENS_POR_TOTAL_DESCUENTOS = "SELECT * FROM Encuesta WHERE UPPER(total_descuentosEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_TOTAL_DESCUENTOS_APROX = "SELECT * FROM Encuesta WHERE UPPER(total_descuentosEncuesta) LIKE UPPER(?) ORDER BY total_descuentosEncuesta";

    const CONSULTAR_PLANPENS_POR_TOTAL_LIQUIDO = "SELECT * FROM Encuesta WHERE UPPER(total_liquidoEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_TOTAL_LIQUIDO_APROX = "SELECT * FROM Encuesta WHERE UPPER(total_liquidoEncuesta) LIKE UPPER(?) ORDER BY total_liquidoEncuesta";

    const CONSULTAR_PLANPENS_POR_AGUINALDO = "SELECT * FROM Encuesta WHERE UPPER(aguinaldoEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_AGUINALDO_APROX = "SELECT * FROM Encuesta WHERE UPPER(aguinaldoEncuesta) LIKE UPPER(?) ORDER BY aguinaldoEncuesta";

    const CONSULTAR_PLANPENS_POR_BASICA = "SELECT * FROM Encuesta WHERE UPPER(basicaEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_BASICA_APROX = "SELECT * FROM Encuesta WHERE UPPER(basicaEncuesta) LIKE UPPER(?) ORDER BY basicaEncuesta";

    const CONSULTAR_PLANPENS_POR_BONIF_PERSONAL = "SELECT * FROM Encuesta WHERE UPPER(bonif_personalEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_BONIF_PERSONAL_APROX = "SELECT * FROM Encuesta WHERE UPPER(bonif_personalEncuesta) LIKE UPPER(?) ORDER BY bonif_personalEncuesta";

    const CONSULTAR_PLANPENS_POR_AEL25671 = "SELECT * FROM Encuesta WHERE UPPER(ael25671Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_AEL25671_APROX = "SELECT * FROM Encuesta WHERE UPPER(ael25671Encuesta) LIKE UPPER(?) ORDER BY ael25671Encuesta";

    const CONSULTAR_PLANPENS_POR_AEDS081 = "SELECT * FROM Encuesta WHERE UPPER(aeds081Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_AEDS081_APROX = "SELECT * FROM Encuesta WHERE UPPER(aeds081Encuesta) LIKE UPPER(?) ORDER BY aeds081Encuesta";

    const CONSULTAR_PLANPENS_POR_TPH = "SELECT * FROM Encuesta WHERE UPPER(tphEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_TPH_APROX = "SELECT * FROM Encuesta WHERE UPPER(tphEncuesta) LIKE UPPER(?) ORDER BY tphEncuesta";

    const CONSULTAR_PLANPENS_POR_BONIF_FAMILIAR = "SELECT * FROM Encuesta WHERE UPPER(bonif_familiarEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_BONIF_FAMILIAR_APROX = "SELECT * FROM Encuesta WHERE UPPER(bonif_familiarEncuesta) LIKE UPPER(?) ORDER BY bonif_familiarEncuesta";

    const CONSULTAR_PLANPENS_POR_DU080_04 = "SELECT * FROM Encuesta WHERE UPPER(du080_04Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DU080_04_APROX = "SELECT * FROM Encuesta WHERE UPPER(du080_04Encuesta) LIKE UPPER(?) ORDER BY du080_04Encuesta";

    const CONSULTAR_PLANPENS_POR_REFRIG_Y_MOVI = "SELECT * FROM Encuesta WHERE UPPER(refrig_y_moviEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_REFRIG_Y_MOVI_APROX = "SELECT * FROM Encuesta WHERE UPPER(refrig_y_moviEncuesta) LIKE UPPER(?) ORDER BY refrig_y_moviEncuesta";

    const CONSULTAR_PLANPENS_POR_DU90_96 = "SELECT * FROM Encuesta WHERE UPPER(du90_96Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DU90_96_APROX = "SELECT * FROM Encuesta WHERE UPPER(du90_96Encuesta) LIKE UPPER(?) ORDER BY du90_96Encuesta";

    const CONSULTAR_PLANPENS_POR_DS19_94_PCM = "SELECT * FROM Encuesta WHERE UPPER(ds19_94_pcmEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS19_94_PCM_APROX = "SELECT * FROM Encuesta WHERE UPPER(ds19_94_pcmEncuesta) LIKE UPPER(?) ORDER BY ds19_94_pcmEncuesta";

    const CONSULTAR_PLANPENS_POR_DS21_92_PCM = "SELECT * FROM Encuesta WHERE UPPER(ds21_92_pcmEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS21_92_PCM_APROX = "SELECT * FROM Encuesta WHERE UPPER(ds21_92_pcmEncuesta) LIKE UPPER(?) ORDER BY ds21_92_pcmEncuesta";

    const CONSULTAR_PLANPENS_POR_BON_ESPECIAL = "SELECT * FROM Encuesta WHERE UPPER(bon_especialEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_BON_ESPECIAL_APROX = "SELECT * FROM Encuesta WHERE UPPER(bon_especialEncuesta) LIKE UPPER(?) ORDER BY bon_especialEncuesta";

    const CONSULTAR_PLANPENS_POR_REUNIFICADA = "SELECT * FROM Encuesta WHERE UPPER(reunificadaEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_REUNIFICADA_APROX = "SELECT * FROM Encuesta WHERE UPPER(reunificadaEncuesta) LIKE UPPER(?) ORDER BY reunificadaEncuesta";

    const CONSULTAR_PLANPENS_POR_IGV = "SELECT * FROM Encuesta WHERE UPPER(igvEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_IGV_APROX = "SELECT * FROM Encuesta WHERE UPPER(igvEncuesta) LIKE UPPER(?) ORDER BY igvEncuesta";

    const CONSULTAR_PLANPENS_POR_CARGSIMUL = "SELECT * FROM Encuesta WHERE UPPER(cargsimulEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_CARGSIMUL_APROX = "SELECT * FROM Encuesta WHERE UPPER(cargsimulEncuesta) LIKE UPPER(?) ORDER BY cargsimulEncuesta";

    const CONSULTAR_PLANPENS_POR_ART18_DL_20530 = "SELECT * FROM Encuesta WHERE UPPER(art18_dl_20530Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_ART18_DL_20530_APROX = "SELECT * FROM Encuesta WHERE UPPER(art18_dl_20530Encuesta) LIKE UPPER(?) ORDER BY art18_dl_20530Encuesta";

    const CONSULTAR_PLANPENS_POR_DU073_97 = "SELECT * FROM Encuesta WHERE UPPER(du073_97Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DU073_97_APROX = "SELECT * FROM Encuesta WHERE UPPER(du073_97Encuesta) LIKE UPPER(?) ORDER BY du073_97Encuesta";

    const CONSULTAR_PLANPENS_POR_DU011_99 = "SELECT * FROM Encuesta WHERE UPPER(du011_99Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DU011_99_APROX = "SELECT * FROM Encuesta WHERE UPPER(du011_99Encuesta) LIKE UPPER(?) ORDER BY du011_99Encuesta";

    const CONSULTAR_PLANPENS_POR_DU037_94 = "SELECT * FROM Encuesta WHERE UPPER(du037_94Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DU037_94_APROX = "SELECT * FROM Encuesta WHERE UPPER(du037_94Encuesta) LIKE UPPER(?) ORDER BY du037_94Encuesta";

    const CONSULTAR_PLANPENS_POR_DS016 = "SELECT * FROM Encuesta WHERE UPPER(ds016Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS016_APROX = "SELECT * FROM Encuesta WHERE UPPER(ds016Encuesta) LIKE UPPER(?) ORDER BY ds016Encuesta";

    const CONSULTAR_PLANPENS_POR_DS017 = "SELECT * FROM Encuesta WHERE UPPER(ds017Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS017_APROX = "SELECT * FROM Encuesta WHERE UPPER(ds017Encuesta) LIKE UPPER(?) ORDER BY ds017Encuesta";

    const CONSULTAR_PLANPENS_POR_DS110_2006 = "SELECT * FROM Encuesta WHERE UPPER(ds110_2006Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS110_2006_APROX = "SELECT * FROM Encuesta WHERE UPPER(ds110_2006Encuesta) LIKE UPPER(?) ORDER BY ds110_2006Encuesta";

    const CONSULTAR_PLANPENS_POR_DS039_2007 = "SELECT * FROM Encuesta WHERE UPPER(ds039_2007Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS039_2007_APROX = "SELECT * FROM Encuesta WHERE UPPER(ds039_2007Encuesta) LIKE UPPER(?) ORDER BY ds039_2007Encuesta";

    const CONSULTAR_PLANPENS_POR_DS120_2008 = "SELECT * FROM Encuesta WHERE UPPER(ds120_2008Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS120_2008_APROX = "SELECT * FROM Encuesta WHERE UPPER(ds120_2008Encuesta) LIKE UPPER(?) ORDER BY ds120_2008Encuesta";

    const CONSULTAR_PLANPENS_POR_DS014_2009 = "SELECT * FROM Encuesta WHERE UPPER(ds014_2009Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS014_2009_APROX = "SELECT * FROM Encuesta WHERE UPPER(ds014_2009Encuesta) LIKE UPPER(?) ORDER BY ds014_2009Encuesta";

    const CONSULTAR_PLANPENS_POR_DS077_2010 = "SELECT * FROM Encuesta WHERE UPPER(ds077_2010Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS077_2010_APROX = "SELECT * FROM Encuesta WHERE UPPER(ds077_2010Encuesta) LIKE UPPER(?) ORDER BY ds077_2010Encuesta";

    const CONSULTAR_PLANPENS_POR_DS031_2011 = "SELECT * FROM Encuesta WHERE UPPER(ds031_2011Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS031_2011_APROX = "SELECT * FROM Encuesta WHERE UPPER(ds031_2011Encuesta) LIKE UPPER(?) ORDER BY ds031_2011Encuesta";

    const CONSULTAR_PLANPENS_POR_DS024_2012 = "SELECT * FROM Encuesta WHERE UPPER(ds024_2012Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS024_2012_APROX = "SELECT * FROM Encuesta WHERE UPPER(ds024_2012Encuesta) LIKE UPPER(?) ORDER BY ds024_2012Encuesta";

    const CONSULTAR_PLANPENS_POR_DS004_2013 = "SELECT * FROM Encuesta WHERE UPPER(ds004_2013Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS004_2013_APROX = "SELECT * FROM Encuesta WHERE UPPER(ds004_2013Encuesta) LIKE UPPER(?) ORDER BY ds004_2013Encuesta";

    const CONSULTAR_PLANPENS_POR_DS003_2014 = "SELECT * FROM Encuesta WHERE UPPER(ds003_2014Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS003_2014_APROX = "SELECT * FROM Encuesta WHERE UPPER(ds003_2014Encuesta) LIKE UPPER(?) ORDER BY ds003_2014Encuesta";

    const CONSULTAR_PLANPENS_POR_DS002_2015 = "SELECT * FROM Encuesta WHERE UPPER(ds002_2015Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS002_2015_APROX = "SELECT * FROM Encuesta WHERE UPPER(ds002_2015Encuesta) LIKE UPPER(?) ORDER BY ds002_2015Encuesta";

    const CONSULTAR_PLANPENS_POR_DS005_2016 = "SELECT * FROM Encuesta WHERE UPPER(ds005_2016Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS005_2016_APROX = "SELECT * FROM Encuesta WHERE UPPER(ds005_2016Encuesta) LIKE UPPER(?) ORDER BY ds005_2016Encuesta";

    const CONSULTAR_PLANPENS_POR_DS020_2017 = "SELECT * FROM Encuesta WHERE UPPER(ds020_2017Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS020_2017_APROX = "SELECT * FROM Encuesta WHERE UPPER(ds020_2017Encuesta) LIKE UPPER(?) ORDER BY ds020_2017Encuesta";

    const CONSULTAR_PLANPENS_POR_DS011_2018 = "SELECT * FROM Encuesta WHERE UPPER(ds011_2018Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS011_2018_APROX = "SELECT * FROM Encuesta WHERE UPPER(ds011_2018Encuesta) LIKE UPPER(?) ORDER BY ds011_2018Encuesta";

    const CONSULTAR_PLANPENS_POR_DS009_2019 = "SELECT * FROM Encuesta WHERE UPPER(ds009_2019Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS009_2019_APROX = "SELECT * FROM Encuesta WHERE UPPER(ds009_2019Encuesta) LIKE UPPER(?) ORDER BY ds009_2019Encuesta";

    const CONSULTAR_PLANPENS_POR_DS006_2020 = "SELECT * FROM Encuesta WHERE UPPER(ds006_2020Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS006_2020_APROX = "SELECT * FROM Encuesta WHERE UPPER(ds006_2020Encuesta) LIKE UPPER(?) ORDER BY ds006_2020Encuesta";

    const CONSULTAR_PLANPENS_POR_IPSS = "SELECT * FROM Encuesta WHERE UPPER(ipssEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_IPSS_APROX = "SELECT * FROM Encuesta WHERE UPPER(ipssEncuesta) LIKE UPPER(?) ORDER BY ipssEncuesta";

    const CONSULTAR_PLANPENS_POR_CAFAE = "SELECT * FROM Encuesta WHERE UPPER(cafaeEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_CAFAE_APROX = "SELECT * FROM Encuesta WHERE UPPER(cafaeEncuesta) LIKE UPPER(?) ORDER BY cafaeEncuesta";

    const CONSULTAR_PLANPENS_POR_PRDERRMA = "SELECT * FROM Encuesta WHERE UPPER(prderrmaEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_PRDERRMA_APROX = "SELECT * FROM Encuesta WHERE UPPER(prderrmaEncuesta) LIKE UPPER(?) ORDER BY prderrmaEncuesta";

    const CONSULTAR_PLANPENS_POR_ESCOLARIDAD = "SELECT * FROM Encuesta WHERE UPPER(escolaridadEncuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_ESCOLARIDAD_APROX = "SELECT * FROM Encuesta WHERE UPPER(escolaridadEncuesta) LIKE UPPER(?) ORDER BY escolaridadEncuesta";

    const CONSULTAR_PLANPENS_POR_DECRETO_SUPERMO_20_21 = "SELECT * FROM Encuesta WHERE UPPER(decreto_supermo_20_21Encuesta) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DECRETO_SUPERMO_20_21_APROX = "SELECT * FROM Encuesta WHERE UPPER(decreto_supermo_20_21Encuesta) LIKE UPPER(?) ORDER BY decreto_supermo_20_21Encuesta";
}
?>