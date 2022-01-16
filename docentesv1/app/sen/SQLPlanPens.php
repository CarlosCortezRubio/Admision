<?php

/** 
 * @file SQLPlanPens.php 
 *  
 * Consultas SQL de la Tabla PlanPens 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 07/04/2021
 *  
 */
class SQLPlanPens
{

    const AGREGAR_PLANPENS = "INSERT INTO PlanPens (
        dniPlanPens, apellidos_y_nombresPlanPens, fecha_de_nacimientoPlanPens, sexoPlanPens, 
        codigo_modularPlanPens, planillaPlanPens, tipo_de_regimenPlanPens, resolucion_de_pension_definitivaPlanPens, a_partir_dePlanPens, 
bancoPlanPens, cuenta_bancariaPlanPens, fuente_de_financiamientoPlanPens, planilla2PlanPens, total_imponiblePlanPens, 
total_haberPlanPens, total_descuentosPlanPens, total_liquidoPlanPens, aguinaldoPlanPens, basicaPlanPens, 
bonif_personalPlanPens, ael25671PlanPens, aeds081PlanPens, tphPlanPens, bonif_familiarPlanPens, 
du080_04PlanPens, refrig_y_moviPlanPens, du90_96PlanPens, ds19_94_pcmPlanPens, ds21_92_pcmPlanPens, 
bon_especialPlanPens, reunificadaPlanPens, igvPlanPens, cargsimulPlanPens, art18_dl_20530PlanPens, 
du073_97PlanPens, du011_99PlanPens, du037_94PlanPens, ds016PlanPens, ds017PlanPens, 
ds110_2006PlanPens, ds039_2007PlanPens, ds120_2008PlanPens, ds014_2009PlanPens, ds077_2010PlanPens, 
ds031_2011PlanPens, ds024_2012PlanPens, ds004_2013PlanPens, ds003_2014PlanPens, ds002_2015PlanPens, 
ds005_2016PlanPens, ds020_2017PlanPens, ds011_2018PlanPens, ds009_2019PlanPens, ds006_2020PlanPens, 
ipssPlanPens, cafaePlanPens, prderrmaPlanPens, escolaridadPlanPens, decreto_supermo_20_21PlanPens, 
anio, mes) VALUES 
(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";

    const ACTUALIZAR_PLANPENS = "UPDATE PlanPens SET idPlanPens = ?, dniPlanPens = ?, apellidos_y_nombresPlanPens = ?, fecha_de_nacimientoPlanPens = ?, sexoPlanPens = ?, codigo_modularPlanPens = ?, planillaPlanPens = ?, tipo_de_regimenPlanPens = ?, resolucion_de_pension_definitivaPlanPens = ?, a_partir_dePlanPens = ?, bancoPlanPens = ?, cuenta_bancariaPlanPens = ?, fuente_de_financiamientoPlanPens = ?, planilla2PlanPens = ?, total_imponiblePlanPens = ?, total_haberPlanPens = ?, total_descuentosPlanPens = ?, total_liquidoPlanPens = ?, aguinaldoPlanPens = ?, basicaPlanPens = ?, bonif_personalPlanPens = ?, ael25671PlanPens = ?, aeds081PlanPens = ?, tphPlanPens = ?, bonif_familiarPlanPens = ?, du080_04PlanPens = ?, refrig_y_moviPlanPens = ?, du90_96PlanPens = ?, ds19_94_pcmPlanPens = ?, ds21_92_pcmPlanPens = ?, bon_especialPlanPens = ?, reunificadaPlanPens = ?, igvPlanPens = ?, cargsimulPlanPens = ?, art18_dl_20530PlanPens = ?, du073_97PlanPens = ?, du011_99PlanPens = ?, du037_94PlanPens = ?, ds016PlanPens = ?, ds017PlanPens = ?, ds110_2006PlanPens = ?, ds039_2007PlanPens = ?, ds120_2008PlanPens = ?, ds014_2009PlanPens = ?, ds077_2010PlanPens = ?, ds031_2011PlanPens = ?, ds024_2012PlanPens = ?, ds004_2013PlanPens = ?, ds003_2014PlanPens = ?, ds002_2015PlanPens = ?, ds005_2016PlanPens = ?, ds020_2017PlanPens = ?, ds011_2018PlanPens = ?, ds009_2019PlanPens = ?, ds006_2020PlanPens = ?, ipssPlanPens = ?, cafaePlanPens = ?, prderrmaPlanPens = ?, escolaridadPlanPens = ?, decreto_supermo_20_21PlanPens = ?, anio = ?,mes  = ? WHERE idPlanPens = ?";

    const ELIMINAR_PLANPENS = "DELETE FROM PlanPens WHERE idPlanPens = ?";

    const CONSULTAR_PLANPENS = "SELECT * FROM PlanPens ORDER BY idPlanPens";

    const CONSULTAR_PLANPENS_POR_IDPLANPENS = "SELECT * FROM PlanPens WHERE idPlanPens = ?";

    const CONSULTAR_PLANPENS_POR_DNI = "SELECT * FROM PlanPens WHERE UPPER(dniPlanPens) = UPPER(?)";
    
    const CONSULTAR_PLANPENS_POR_DNI_POR_PARAMS = "SELECT * FROM PlanPens WHERE mes = ? AND anio = ? AND UPPER(dniPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_NOM_POR_PARAMS = "SELECT * FROM PlanPens WHERE mes= ? AND anio = ? AND UPPER(apellidos_y_nombresPlanPens) LIKE UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DNI_APROX = "SELECT * FROM PlanPens WHERE UPPER(dniPlanPens) LIKE UPPER(?) ORDER BY dniPlanPens";

    const CONSULTAR_PLANPENS_POR_APELLIDOS_Y_NOMBRES = "SELECT * FROM PlanPens WHERE UPPER(apellidos_y_nombresPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_APELLIDOS_Y_NOMBRES_APROX = "SELECT * FROM PlanPens WHERE UPPER(apellidos_y_nombresPlanPens) LIKE UPPER(?) ORDER BY apellidos_y_nombresPlanPens";

    const CONSULTAR_PLANPENS_POR_FECHA_DE_NACIMIENTO = "SELECT * FROM PlanPens WHERE UPPER(fecha_de_nacimientoPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_FECHA_DE_NACIMIENTO_APROX = "SELECT * FROM PlanPens WHERE UPPER(fecha_de_nacimientoPlanPens) LIKE UPPER(?) ORDER BY fecha_de_nacimientoPlanPens";

    const CONSULTAR_PLANPENS_POR_SEXO = "SELECT * FROM PlanPens WHERE UPPER(sexoPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_SEXO_APROX = "SELECT * FROM PlanPens WHERE UPPER(sexoPlanPens) LIKE UPPER(?) ORDER BY sexoPlanPens";

    const CONSULTAR_PLANPENS_POR_CODIGO_MODULAR = "SELECT * FROM PlanPens WHERE UPPER(codigo_modularPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_CODIGO_MODULAR_APROX = "SELECT * FROM PlanPens WHERE UPPER(codigo_modularPlanPens) LIKE UPPER(?) ORDER BY codigo_modularPlanPens";

    const CONSULTAR_PLANPENS_POR_PLANILLA = "SELECT * FROM PlanPens WHERE UPPER(planillaPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_PLANILLA_APROX = "SELECT * FROM PlanPens WHERE UPPER(planillaPlanPens) LIKE UPPER(?) ORDER BY planillaPlanPens";

    const CONSULTAR_PLANPENS_POR_TIPO_DE_REGIMEN = "SELECT * FROM PlanPens WHERE UPPER(tipo_de_regimenPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_TIPO_DE_REGIMEN_APROX = "SELECT * FROM PlanPens WHERE UPPER(tipo_de_regimenPlanPens) LIKE UPPER(?) ORDER BY tipo_de_regimenPlanPens";

    const CONSULTAR_PLANPENS_POR_RESOLUCION_DE_PENSION_DEFINITIVA = "SELECT * FROM PlanPens WHERE UPPER(resolucion_de_pension_definitivaPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_RESOLUCION_DE_PENSION_DEFINITIVA_APROX = "SELECT * FROM PlanPens WHERE UPPER(resolucion_de_pension_definitivaPlanPens) LIKE UPPER(?) ORDER BY resolucion_de_pension_definitivaPlanPens";

    const CONSULTAR_PLANPENS_POR_A_PARTIR_DE = "SELECT * FROM PlanPens WHERE UPPER(a_partir_dePlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_A_PARTIR_DE_APROX = "SELECT * FROM PlanPens WHERE UPPER(a_partir_dePlanPens) LIKE UPPER(?) ORDER BY a_partir_dePlanPens";

    const CONSULTAR_PLANPENS_POR_BANCO = "SELECT * FROM PlanPens WHERE UPPER(bancoPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_BANCO_APROX = "SELECT * FROM PlanPens WHERE UPPER(bancoPlanPens) LIKE UPPER(?) ORDER BY bancoPlanPens";

    const CONSULTAR_PLANPENS_POR_CUENTA_BANCARIA = "SELECT * FROM PlanPens WHERE UPPER(cuenta_bancariaPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_CUENTA_BANCARIA_APROX = "SELECT * FROM PlanPens WHERE UPPER(cuenta_bancariaPlanPens) LIKE UPPER(?) ORDER BY cuenta_bancariaPlanPens";

    const CONSULTAR_PLANPENS_POR_FUENTE_DE_FINANCIAMIENTO = "SELECT * FROM PlanPens WHERE UPPER(fuente_de_financiamientoPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_FUENTE_DE_FINANCIAMIENTO_APROX = "SELECT * FROM PlanPens WHERE UPPER(fuente_de_financiamientoPlanPens) LIKE UPPER(?) ORDER BY fuente_de_financiamientoPlanPens";

    const CONSULTAR_PLANPENS_POR_PLANILLA2 = "SELECT * FROM PlanPens WHERE UPPER(planilla2PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_PLANILLA2_APROX = "SELECT * FROM PlanPens WHERE UPPER(planilla2PlanPens) LIKE UPPER(?) ORDER BY planilla2PlanPens";

    const CONSULTAR_PLANPENS_POR_TOTAL_IMPONIBLE = "SELECT * FROM PlanPens WHERE UPPER(total_imponiblePlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_TOTAL_IMPONIBLE_APROX = "SELECT * FROM PlanPens WHERE UPPER(total_imponiblePlanPens) LIKE UPPER(?) ORDER BY total_imponiblePlanPens";

    const CONSULTAR_PLANPENS_POR_TOTAL_HABER = "SELECT * FROM PlanPens WHERE UPPER(total_haberPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_TOTAL_HABER_APROX = "SELECT * FROM PlanPens WHERE UPPER(total_haberPlanPens) LIKE UPPER(?) ORDER BY total_haberPlanPens";

    const CONSULTAR_PLANPENS_POR_TOTAL_DESCUENTOS = "SELECT * FROM PlanPens WHERE UPPER(total_descuentosPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_TOTAL_DESCUENTOS_APROX = "SELECT * FROM PlanPens WHERE UPPER(total_descuentosPlanPens) LIKE UPPER(?) ORDER BY total_descuentosPlanPens";

    const CONSULTAR_PLANPENS_POR_TOTAL_LIQUIDO = "SELECT * FROM PlanPens WHERE UPPER(total_liquidoPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_TOTAL_LIQUIDO_APROX = "SELECT * FROM PlanPens WHERE UPPER(total_liquidoPlanPens) LIKE UPPER(?) ORDER BY total_liquidoPlanPens";

    const CONSULTAR_PLANPENS_POR_AGUINALDO = "SELECT * FROM PlanPens WHERE UPPER(aguinaldoPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_AGUINALDO_APROX = "SELECT * FROM PlanPens WHERE UPPER(aguinaldoPlanPens) LIKE UPPER(?) ORDER BY aguinaldoPlanPens";

    const CONSULTAR_PLANPENS_POR_BASICA = "SELECT * FROM PlanPens WHERE UPPER(basicaPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_BASICA_APROX = "SELECT * FROM PlanPens WHERE UPPER(basicaPlanPens) LIKE UPPER(?) ORDER BY basicaPlanPens";

    const CONSULTAR_PLANPENS_POR_BONIF_PERSONAL = "SELECT * FROM PlanPens WHERE UPPER(bonif_personalPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_BONIF_PERSONAL_APROX = "SELECT * FROM PlanPens WHERE UPPER(bonif_personalPlanPens) LIKE UPPER(?) ORDER BY bonif_personalPlanPens";

    const CONSULTAR_PLANPENS_POR_AEL25671 = "SELECT * FROM PlanPens WHERE UPPER(ael25671PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_AEL25671_APROX = "SELECT * FROM PlanPens WHERE UPPER(ael25671PlanPens) LIKE UPPER(?) ORDER BY ael25671PlanPens";

    const CONSULTAR_PLANPENS_POR_AEDS081 = "SELECT * FROM PlanPens WHERE UPPER(aeds081PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_AEDS081_APROX = "SELECT * FROM PlanPens WHERE UPPER(aeds081PlanPens) LIKE UPPER(?) ORDER BY aeds081PlanPens";

    const CONSULTAR_PLANPENS_POR_TPH = "SELECT * FROM PlanPens WHERE UPPER(tphPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_TPH_APROX = "SELECT * FROM PlanPens WHERE UPPER(tphPlanPens) LIKE UPPER(?) ORDER BY tphPlanPens";

    const CONSULTAR_PLANPENS_POR_BONIF_FAMILIAR = "SELECT * FROM PlanPens WHERE UPPER(bonif_familiarPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_BONIF_FAMILIAR_APROX = "SELECT * FROM PlanPens WHERE UPPER(bonif_familiarPlanPens) LIKE UPPER(?) ORDER BY bonif_familiarPlanPens";

    const CONSULTAR_PLANPENS_POR_DU080_04 = "SELECT * FROM PlanPens WHERE UPPER(du080_04PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DU080_04_APROX = "SELECT * FROM PlanPens WHERE UPPER(du080_04PlanPens) LIKE UPPER(?) ORDER BY du080_04PlanPens";

    const CONSULTAR_PLANPENS_POR_REFRIG_Y_MOVI = "SELECT * FROM PlanPens WHERE UPPER(refrig_y_moviPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_REFRIG_Y_MOVI_APROX = "SELECT * FROM PlanPens WHERE UPPER(refrig_y_moviPlanPens) LIKE UPPER(?) ORDER BY refrig_y_moviPlanPens";

    const CONSULTAR_PLANPENS_POR_DU90_96 = "SELECT * FROM PlanPens WHERE UPPER(du90_96PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DU90_96_APROX = "SELECT * FROM PlanPens WHERE UPPER(du90_96PlanPens) LIKE UPPER(?) ORDER BY du90_96PlanPens";

    const CONSULTAR_PLANPENS_POR_DS19_94_PCM = "SELECT * FROM PlanPens WHERE UPPER(ds19_94_pcmPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS19_94_PCM_APROX = "SELECT * FROM PlanPens WHERE UPPER(ds19_94_pcmPlanPens) LIKE UPPER(?) ORDER BY ds19_94_pcmPlanPens";

    const CONSULTAR_PLANPENS_POR_DS21_92_PCM = "SELECT * FROM PlanPens WHERE UPPER(ds21_92_pcmPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS21_92_PCM_APROX = "SELECT * FROM PlanPens WHERE UPPER(ds21_92_pcmPlanPens) LIKE UPPER(?) ORDER BY ds21_92_pcmPlanPens";

    const CONSULTAR_PLANPENS_POR_BON_ESPECIAL = "SELECT * FROM PlanPens WHERE UPPER(bon_especialPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_BON_ESPECIAL_APROX = "SELECT * FROM PlanPens WHERE UPPER(bon_especialPlanPens) LIKE UPPER(?) ORDER BY bon_especialPlanPens";

    const CONSULTAR_PLANPENS_POR_REUNIFICADA = "SELECT * FROM PlanPens WHERE UPPER(reunificadaPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_REUNIFICADA_APROX = "SELECT * FROM PlanPens WHERE UPPER(reunificadaPlanPens) LIKE UPPER(?) ORDER BY reunificadaPlanPens";

    const CONSULTAR_PLANPENS_POR_IGV = "SELECT * FROM PlanPens WHERE UPPER(igvPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_IGV_APROX = "SELECT * FROM PlanPens WHERE UPPER(igvPlanPens) LIKE UPPER(?) ORDER BY igvPlanPens";

    const CONSULTAR_PLANPENS_POR_CARGSIMUL = "SELECT * FROM PlanPens WHERE UPPER(cargsimulPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_CARGSIMUL_APROX = "SELECT * FROM PlanPens WHERE UPPER(cargsimulPlanPens) LIKE UPPER(?) ORDER BY cargsimulPlanPens";

    const CONSULTAR_PLANPENS_POR_ART18_DL_20530 = "SELECT * FROM PlanPens WHERE UPPER(art18_dl_20530PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_ART18_DL_20530_APROX = "SELECT * FROM PlanPens WHERE UPPER(art18_dl_20530PlanPens) LIKE UPPER(?) ORDER BY art18_dl_20530PlanPens";

    const CONSULTAR_PLANPENS_POR_DU073_97 = "SELECT * FROM PlanPens WHERE UPPER(du073_97PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DU073_97_APROX = "SELECT * FROM PlanPens WHERE UPPER(du073_97PlanPens) LIKE UPPER(?) ORDER BY du073_97PlanPens";

    const CONSULTAR_PLANPENS_POR_DU011_99 = "SELECT * FROM PlanPens WHERE UPPER(du011_99PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DU011_99_APROX = "SELECT * FROM PlanPens WHERE UPPER(du011_99PlanPens) LIKE UPPER(?) ORDER BY du011_99PlanPens";

    const CONSULTAR_PLANPENS_POR_DU037_94 = "SELECT * FROM PlanPens WHERE UPPER(du037_94PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DU037_94_APROX = "SELECT * FROM PlanPens WHERE UPPER(du037_94PlanPens) LIKE UPPER(?) ORDER BY du037_94PlanPens";

    const CONSULTAR_PLANPENS_POR_DS016 = "SELECT * FROM PlanPens WHERE UPPER(ds016PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS016_APROX = "SELECT * FROM PlanPens WHERE UPPER(ds016PlanPens) LIKE UPPER(?) ORDER BY ds016PlanPens";

    const CONSULTAR_PLANPENS_POR_DS017 = "SELECT * FROM PlanPens WHERE UPPER(ds017PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS017_APROX = "SELECT * FROM PlanPens WHERE UPPER(ds017PlanPens) LIKE UPPER(?) ORDER BY ds017PlanPens";

    const CONSULTAR_PLANPENS_POR_DS110_2006 = "SELECT * FROM PlanPens WHERE UPPER(ds110_2006PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS110_2006_APROX = "SELECT * FROM PlanPens WHERE UPPER(ds110_2006PlanPens) LIKE UPPER(?) ORDER BY ds110_2006PlanPens";

    const CONSULTAR_PLANPENS_POR_DS039_2007 = "SELECT * FROM PlanPens WHERE UPPER(ds039_2007PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS039_2007_APROX = "SELECT * FROM PlanPens WHERE UPPER(ds039_2007PlanPens) LIKE UPPER(?) ORDER BY ds039_2007PlanPens";

    const CONSULTAR_PLANPENS_POR_DS120_2008 = "SELECT * FROM PlanPens WHERE UPPER(ds120_2008PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS120_2008_APROX = "SELECT * FROM PlanPens WHERE UPPER(ds120_2008PlanPens) LIKE UPPER(?) ORDER BY ds120_2008PlanPens";

    const CONSULTAR_PLANPENS_POR_DS014_2009 = "SELECT * FROM PlanPens WHERE UPPER(ds014_2009PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS014_2009_APROX = "SELECT * FROM PlanPens WHERE UPPER(ds014_2009PlanPens) LIKE UPPER(?) ORDER BY ds014_2009PlanPens";

    const CONSULTAR_PLANPENS_POR_DS077_2010 = "SELECT * FROM PlanPens WHERE UPPER(ds077_2010PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS077_2010_APROX = "SELECT * FROM PlanPens WHERE UPPER(ds077_2010PlanPens) LIKE UPPER(?) ORDER BY ds077_2010PlanPens";

    const CONSULTAR_PLANPENS_POR_DS031_2011 = "SELECT * FROM PlanPens WHERE UPPER(ds031_2011PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS031_2011_APROX = "SELECT * FROM PlanPens WHERE UPPER(ds031_2011PlanPens) LIKE UPPER(?) ORDER BY ds031_2011PlanPens";

    const CONSULTAR_PLANPENS_POR_DS024_2012 = "SELECT * FROM PlanPens WHERE UPPER(ds024_2012PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS024_2012_APROX = "SELECT * FROM PlanPens WHERE UPPER(ds024_2012PlanPens) LIKE UPPER(?) ORDER BY ds024_2012PlanPens";

    const CONSULTAR_PLANPENS_POR_DS004_2013 = "SELECT * FROM PlanPens WHERE UPPER(ds004_2013PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS004_2013_APROX = "SELECT * FROM PlanPens WHERE UPPER(ds004_2013PlanPens) LIKE UPPER(?) ORDER BY ds004_2013PlanPens";

    const CONSULTAR_PLANPENS_POR_DS003_2014 = "SELECT * FROM PlanPens WHERE UPPER(ds003_2014PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS003_2014_APROX = "SELECT * FROM PlanPens WHERE UPPER(ds003_2014PlanPens) LIKE UPPER(?) ORDER BY ds003_2014PlanPens";

    const CONSULTAR_PLANPENS_POR_DS002_2015 = "SELECT * FROM PlanPens WHERE UPPER(ds002_2015PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS002_2015_APROX = "SELECT * FROM PlanPens WHERE UPPER(ds002_2015PlanPens) LIKE UPPER(?) ORDER BY ds002_2015PlanPens";

    const CONSULTAR_PLANPENS_POR_DS005_2016 = "SELECT * FROM PlanPens WHERE UPPER(ds005_2016PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS005_2016_APROX = "SELECT * FROM PlanPens WHERE UPPER(ds005_2016PlanPens) LIKE UPPER(?) ORDER BY ds005_2016PlanPens";

    const CONSULTAR_PLANPENS_POR_DS020_2017 = "SELECT * FROM PlanPens WHERE UPPER(ds020_2017PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS020_2017_APROX = "SELECT * FROM PlanPens WHERE UPPER(ds020_2017PlanPens) LIKE UPPER(?) ORDER BY ds020_2017PlanPens";

    const CONSULTAR_PLANPENS_POR_DS011_2018 = "SELECT * FROM PlanPens WHERE UPPER(ds011_2018PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS011_2018_APROX = "SELECT * FROM PlanPens WHERE UPPER(ds011_2018PlanPens) LIKE UPPER(?) ORDER BY ds011_2018PlanPens";

    const CONSULTAR_PLANPENS_POR_DS009_2019 = "SELECT * FROM PlanPens WHERE UPPER(ds009_2019PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS009_2019_APROX = "SELECT * FROM PlanPens WHERE UPPER(ds009_2019PlanPens) LIKE UPPER(?) ORDER BY ds009_2019PlanPens";

    const CONSULTAR_PLANPENS_POR_DS006_2020 = "SELECT * FROM PlanPens WHERE UPPER(ds006_2020PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS006_2020_APROX = "SELECT * FROM PlanPens WHERE UPPER(ds006_2020PlanPens) LIKE UPPER(?) ORDER BY ds006_2020PlanPens";

    const CONSULTAR_PLANPENS_POR_IPSS = "SELECT * FROM PlanPens WHERE UPPER(ipssPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_IPSS_APROX = "SELECT * FROM PlanPens WHERE UPPER(ipssPlanPens) LIKE UPPER(?) ORDER BY ipssPlanPens";

    const CONSULTAR_PLANPENS_POR_CAFAE = "SELECT * FROM PlanPens WHERE UPPER(cafaePlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_CAFAE_APROX = "SELECT * FROM PlanPens WHERE UPPER(cafaePlanPens) LIKE UPPER(?) ORDER BY cafaePlanPens";

    const CONSULTAR_PLANPENS_POR_PRDERRMA = "SELECT * FROM PlanPens WHERE UPPER(prderrmaPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_PRDERRMA_APROX = "SELECT * FROM PlanPens WHERE UPPER(prderrmaPlanPens) LIKE UPPER(?) ORDER BY prderrmaPlanPens";

    const CONSULTAR_PLANPENS_POR_ESCOLARIDAD = "SELECT * FROM PlanPens WHERE UPPER(escolaridadPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_ESCOLARIDAD_APROX = "SELECT * FROM PlanPens WHERE UPPER(escolaridadPlanPens) LIKE UPPER(?) ORDER BY escolaridadPlanPens";

    const CONSULTAR_PLANPENS_POR_DECRETO_SUPERMO_20_21 = "SELECT * FROM PlanPens WHERE UPPER(decreto_supermo_20_21PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DECRETO_SUPERMO_20_21_APROX = "SELECT * FROM PlanPens WHERE UPPER(decreto_supermo_20_21PlanPens) LIKE UPPER(?) ORDER BY decreto_supermo_20_21PlanPens";
}
?>