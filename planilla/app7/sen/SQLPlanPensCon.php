<?php

/** 
 * @file SQLPlanPensCon.php 
 *  
 * Consultas SQL de la Tabla PlanPensCon 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 07/04/2021
 *  
 */
class SQLPlanPensCon
{

    const AGREGAR_PLANPENS = "INSERT INTO PlanPensCon (
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
anio, mes, preG,p_del20530PlanPens) VALUES 
(?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?) ";

    const ACTUALIZAR_PLANPENS = "UPDATE PlanPensCon SET dniPlanPens = ?, apellidos_y_nombresPlanPens = ?, fecha_de_nacimientoPlanPens = ?, sexoPlanPens = ?, codigo_modularPlanPens = ?, planillaPlanPens = ?, tipo_de_regimenPlanPens = ?, resolucion_de_pension_definitivaPlanPens = ?, a_partir_dePlanPens = ?, bancoPlanPens = ?, cuenta_bancariaPlanPens = ?, fuente_de_financiamientoPlanPens = ?, planilla2PlanPens = ?, total_imponiblePlanPens = ?, total_haberPlanPens = ?, total_descuentosPlanPens = ?, total_liquidoPlanPens = ?, aguinaldoPlanPens = ?, basicaPlanPens = ?, bonif_personalPlanPens = ?, ael25671PlanPens = ?, aeds081PlanPens = ?, tphPlanPens = ?, bonif_familiarPlanPens = ?, du080_04PlanPens = ?, refrig_y_moviPlanPens = ?, du90_96PlanPens = ?, ds19_94_pcmPlanPens = ?, ds21_92_pcmPlanPens = ?, bon_especialPlanPens = ?, reunificadaPlanPens = ?, igvPlanPens = ?, cargsimulPlanPens = ?, art18_dl_20530PlanPens = ?, du073_97PlanPens = ?, du011_99PlanPens = ?, du037_94PlanPens = ?, ds016PlanPens = ?, ds017PlanPens = ?, ds110_2006PlanPens = ?, ds039_2007PlanPens = ?, ds120_2008PlanPens = ?, ds014_2009PlanPens = ?, ds077_2010PlanPens = ?, ds031_2011PlanPens = ?, ds024_2012PlanPens = ?, ds004_2013PlanPens = ?, ds003_2014PlanPens = ?, ds002_2015PlanPens = ?, ds005_2016PlanPens = ?, ds020_2017PlanPens = ?, ds011_2018PlanPens = ?, ds009_2019PlanPens = ?, ds006_2020PlanPens = ?, ipssPlanPens = ?, cafaePlanPens = ?, prderrmaPlanPens = ?, escolaridadPlanPens = ?, decreto_supermo_20_21PlanPens = ?, anio = ?,mes  = ?, preG = ?, p_del20530PlanPens = ? WHERE idPlanPens = ?";

    const DUPLICAR_PLANILLA = "INSERT INTO PlanPensCon (idPeriodo,dniPlanPens, apellidos_y_nombresPlanPens, fecha_de_nacimientoPlanPens, sexoPlanPens, 
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
anio, mes, preG,p_del20530PlanPens)
select ?,
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
?, ?, preG,p_del20530PlanPens
FROM planpens where idPeriodo = ?";
    
    const ELIMINAR_PLANPENS = "DELETE FROM PlanPensCon WHERE idPlanPens = ?";
    
    const ACTUALIZAR_EDO_PLANPENS = "UPDATE PlanPensCon SET edoPlanPens = ? WHERE idPlanPens = ?";

//     const CONSULTAR_PLANPENS = "SELECT * FROM PlanPensCon WHERE edoPlanPens = 1 ORDER BY idPlanPens";
    const CONSULTAR_PLANPENS_DEF = "SELECT @rownum:=@rownum+1 nro, anio,mes,dniPlanPens,apellidos_y_nombresPlanPens,planillaPlanPens,tipo_de_regimenPlanPens,resolucion_de_pension_definitivaPlanPens,total_imponiblePlanPens,total_haberPlanPens,total_descuentosPlanPens,total_liquidoPlanPens FROM PlanPensCon t, (SELECT @rownum:=0) r WHERE edoPlanPens = 1 ORDER BY idPlanPens";
    
    
    const CONSULTAR_PLANPENS = "SELECT @rownum:=@rownum+1 nro, t.* FROM PlanPensCon t, (SELECT @rownum:=0) r WHERE edoPlanPens = 1 ORDER BY idPlanPens";
    const CONSULTAR_PLANPENS_TOTALES = "SELECT sum(total_imponiblePlanPens) AS totales_imponiblePlanPens,sum(total_haberPlanPens) AS totales_haberPlanPens,sum(total_descuentosPlanPens) AS totales_descuentosPlanPens,sum(total_liquidoPlanPens) AS totales_liquidoPlanPens FROM PlanPensCon t, (SELECT @rownum:=0) r WHERE edoPlanPens = 1 ORDER BY idPlanPens";

    const CONSULTAR_PLANPENS_POR_IDPLANPENS = "SELECT * FROM PlanPensCon WHERE idPlanPens = ?";
    
    const CONSULTAR_PLANPENS_ESTADO_POR_IDPLANPENS = "SELECT * FROM PlanPensCon INNER JOIN Periodo USING(idPeriodo) WHERE idPlanPens = ?";
    
    const CONSULTAR_PLANPENS_CONSOLIDADO_POR_MES = "
select 
SUM(basicaPlanPens) AS sum_basicaPlanPens ,
COUNT(IF(basicaPlanPens>0,1,NULL)) AS cant_basicaPlanPens ,
SUM(bonif_personalPlanPens) AS sum_bonif_personalPlanPens ,
COUNT(IF(bonif_personalPlanPens>0,1,NULL)) AS cant_bonif_personalPlanPens ,
SUM(ael25671PlanPens) AS sum_ael25671PlanPens ,
COUNT(IF(ael25671PlanPens>0,1,NULL)) AS cant_ael25671PlanPens ,
SUM(aeds081PlanPens) AS sum_aeds081PlanPens ,
COUNT(IF(aeds081PlanPens>0,1,NULL)) AS cant_aeds081PlanPens ,
SUM(tphPlanPens) AS sum_tphPlanPens ,
COUNT(IF(tphPlanPens>0,1,NULL)) AS cant_tphPlanPens ,
SUM(bonif_familiarPlanPens) AS sum_bonif_familiarPlanPens ,
COUNT(IF(bonif_familiarPlanPens>0,1,NULL)) AS cant_bonif_familiarPlanPens ,
SUM(du080_04PlanPens) AS sum_du080_04PlanPens ,
COUNT(IF(du080_04PlanPens>0,1,NULL)) AS cant_du080_04PlanPens ,
SUM(refrig_y_moviPlanPens) AS sum_refrig_y_moviPlanPens ,
COUNT(IF(refrig_y_moviPlanPens>0,1,NULL)) AS cant_refrig_y_moviPlanPens ,
SUM(du90_96PlanPens) AS sum_du90_96PlanPens ,
COUNT(IF(du90_96PlanPens>0,1,NULL)) AS cant_du90_96PlanPens ,
SUM(ds19_94_pcmPlanPens) AS sum_ds19_94_pcmPlanPens ,
COUNT(IF(ds19_94_pcmPlanPens>0,1,NULL)) AS cant_ds19_94_pcmPlanPens ,
SUM(ds21_92_pcmPlanPens) AS sum_ds21_92_pcmPlanPens ,
COUNT(IF(ds21_92_pcmPlanPens>0,1,NULL)) AS cant_ds21_92_pcmPlanPens ,
SUM(bon_especialPlanPens) AS sum_bon_especialPlanPens ,
COUNT(IF(bon_especialPlanPens>0,1,NULL)) AS cant_bon_especialPlanPens ,
SUM(reunificadaPlanPens) AS sum_reunificadaPlanPens ,
COUNT(IF(reunificadaPlanPens>0,1,NULL)) AS cant_reunificadaPlanPens ,
SUM(igvPlanPens) AS sum_igvPlanPens ,
COUNT(IF(igvPlanPens>0,1,NULL)) AS cant_igvPlanPens ,
SUM(cargsimulPlanPens) AS sum_cargsimulPlanPens ,
COUNT(IF(cargsimulPlanPens>0,1,NULL)) AS cant_cargsimulPlanPens ,
SUM(art18_dl_20530PlanPens) AS sum_art18_dl_20530PlanPens ,
COUNT(IF(art18_dl_20530PlanPens>0,1,NULL)) AS cant_art18_dl_20530PlanPens ,
SUM(du073_97PlanPens) AS sum_du073_97PlanPens ,
COUNT(IF(du073_97PlanPens>0,1,NULL)) AS cant_du073_97PlanPens ,
SUM(du011_99PlanPens) AS sum_du011_99PlanPens ,
COUNT(IF(du011_99PlanPens>0,1,NULL)) AS cant_du011_99PlanPens ,
SUM(du037_94PlanPens) AS sum_du037_94PlanPens ,
COUNT(IF(du037_94PlanPens>0,1,NULL)) AS cant_du037_94PlanPens ,
SUM(ds016PlanPens) AS sum_ds016PlanPens ,
COUNT(IF(ds016PlanPens>0,1,NULL)) AS cant_ds016PlanPens ,
SUM(ds017PlanPens) AS sum_ds017PlanPens ,
COUNT(IF(ds017PlanPens>0,1,NULL)) AS cant_ds017PlanPens ,
SUM(ds110_2006PlanPens) AS sum_ds110_2006PlanPens ,
COUNT(IF(ds110_2006PlanPens>0,1,NULL)) AS cant_ds110_2006PlanPens ,
SUM(ds039_2007PlanPens) AS sum_ds039_2007PlanPens ,
COUNT(IF(ds039_2007PlanPens>0,1,NULL)) AS cant_ds039_2007PlanPens ,
SUM(ds120_2008PlanPens) AS sum_ds120_2008PlanPens ,
COUNT(IF(ds120_2008PlanPens>0,1,NULL)) AS cant_ds120_2008PlanPens ,
SUM(ds014_2009PlanPens) AS sum_ds014_2009PlanPens ,
COUNT(IF(ds014_2009PlanPens>0,1,NULL)) AS cant_ds014_2009PlanPens ,
SUM(ds077_2010PlanPens) AS sum_ds077_2010PlanPens ,
COUNT(IF(ds077_2010PlanPens>0,1,NULL)) AS cant_ds077_2010PlanPens ,
SUM(ds031_2011PlanPens) AS sum_ds031_2011PlanPens ,
COUNT(IF(ds031_2011PlanPens>0,1,NULL)) AS cant_ds031_2011PlanPens ,
SUM(ds024_2012PlanPens) AS sum_ds024_2012PlanPens ,
COUNT(IF(ds024_2012PlanPens>0,1,NULL)) AS cant_ds024_2012PlanPens ,
SUM(ds004_2013PlanPens) AS sum_ds004_2013PlanPens ,
COUNT(IF(ds004_2013PlanPens>0,1,NULL)) AS cant_ds004_2013PlanPens ,
SUM(ds003_2014PlanPens) AS sum_ds003_2014PlanPens ,
COUNT(IF(ds003_2014PlanPens>0,1,NULL)) AS cant_ds003_2014PlanPens ,
SUM(ds002_2015PlanPens) AS sum_ds002_2015PlanPens ,
COUNT(IF(ds002_2015PlanPens>0,1,NULL)) AS cant_ds002_2015PlanPens ,
SUM(ds005_2016PlanPens) AS sum_ds005_2016PlanPens ,
COUNT(IF(ds005_2016PlanPens>0,1,NULL)) AS cant_ds005_2016PlanPens ,
SUM(ds020_2017PlanPens) AS sum_ds020_2017PlanPens ,
COUNT(IF(ds020_2017PlanPens>0,1,NULL)) AS cant_ds020_2017PlanPens ,
SUM(ds011_2018PlanPens) AS sum_ds011_2018PlanPens ,
COUNT(IF(ds011_2018PlanPens>0,1,NULL)) AS cant_ds011_2018PlanPens ,
SUM(ds009_2019PlanPens) AS sum_ds009_2019PlanPens ,
COUNT(IF(ds009_2019PlanPens>0,1,NULL)) AS cant_ds009_2019PlanPens ,
SUM(ds006_2020PlanPens) AS sum_ds006_2020PlanPens ,
COUNT(IF(ds006_2020PlanPens>0,1,NULL)) AS cant_ds006_2020PlanPens ,
SUM(ipssPlanPens) AS sum_ipssPlanPens ,
COUNT(IF(ipssPlanPens>0,1,NULL)) AS cant_ipssPlanPens ,
SUM(cafaePlanPens) AS sum_cafaePlanPens ,
COUNT(IF(cafaePlanPens>0,1,NULL)) AS cant_cafaePlanPens ,
SUM(prderrmaPlanPens) AS sum_prderrmaPlanPens ,
COUNT(IF(prderrmaPlanPens>0,1,NULL)) AS cant_prderrmaPlanPens ,
SUM(p_del20530PlanPens) AS sum_p_del20530PlanPens ,
COUNT(IF(p_del20530PlanPens>0,1,NULL)) AS cant_p_del20530PlanPens ,
SUM(aguinaldoPlanPens) AS sum_aguinaldoPlanPens ,
COUNT(IF(aguinaldoPlanPens>0,1,NULL)) AS cant_aguinaldoPlanPens 
FROM planpens
WHERE anio = ? AND mes = ?";

    const CONSULTAR_PLANPENS_POR_DNI = "SELECT * FROM PlanPensCon WHERE UPPER(dniPlanPens) = UPPER(?)";
    
    const CONSULTAR_PLANPENS_POR_ANIO_Y_MES = "SELECT * FROM PlanPensCon WHERE anio = ? AND mes = ?";
    
    const CONSULTAR_PLANPENS_POR_DNI_POR_PARAMS = "SELECT * FROM PlanPensCon WHERE mes = ? AND anio = ? AND UPPER(dniPlanPens) = UPPER(?) AND edoPlanPens = 1";

    const CONSULTAR_PLANPENS_POR_NOM_POR_PARAMS = "SELECT * FROM PlanPensCon WHERE mes= ? AND anio = ? AND UPPER(apellidos_y_nombresPlanPens) LIKE UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DNI_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(dniPlanPens) LIKE UPPER(?) ORDER BY dniPlanPens";

    const CONSULTAR_PLANPENS_POR_APELLIDOS_Y_NOMBRES = "SELECT * FROM PlanPensCon WHERE UPPER(apellidos_y_nombresPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_APELLIDOS_Y_NOMBRES_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(apellidos_y_nombresPlanPens) LIKE UPPER(?) AND edoPlanPens = 1 ORDER BY apellidos_y_nombresPlanPens";

    const CONSULTAR_PLANPENS_POR_FECHA_DE_NACIMIENTO = "SELECT * FROM PlanPensCon WHERE UPPER(fecha_de_nacimientoPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_FECHA_DE_NACIMIENTO_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(fecha_de_nacimientoPlanPens) LIKE UPPER(?) ORDER BY fecha_de_nacimientoPlanPens";

    const CONSULTAR_PLANPENS_POR_SEXO = "SELECT * FROM PlanPensCon WHERE UPPER(sexoPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_SEXO_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(sexoPlanPens) LIKE UPPER(?) ORDER BY sexoPlanPens";

    const CONSULTAR_PLANPENS_POR_CODIGO_MODULAR = "SELECT * FROM PlanPensCon WHERE UPPER(codigo_modularPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_CODIGO_MODULAR_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(codigo_modularPlanPens) LIKE UPPER(?) ORDER BY codigo_modularPlanPens";

    const CONSULTAR_PLANPENS_POR_PLANILLA = "SELECT * FROM PlanPensCon WHERE UPPER(planillaPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_PLANILLA_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(planillaPlanPens) LIKE UPPER(?) ORDER BY planillaPlanPens";

    const CONSULTAR_PLANPENS_POR_TIPO_DE_REGIMEN = "SELECT * FROM PlanPensCon WHERE UPPER(tipo_de_regimenPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_TIPO_DE_REGIMEN_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(tipo_de_regimenPlanPens) LIKE UPPER(?) ORDER BY tipo_de_regimenPlanPens";

    const CONSULTAR_PLANPENS_POR_RESOLUCION_DE_PENSION_DEFINITIVA = "SELECT * FROM PlanPensCon WHERE UPPER(resolucion_de_pension_definitivaPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_RESOLUCION_DE_PENSION_DEFINITIVA_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(resolucion_de_pension_definitivaPlanPens) LIKE UPPER(?) ORDER BY resolucion_de_pension_definitivaPlanPens";

    const CONSULTAR_PLANPENS_POR_A_PARTIR_DE = "SELECT * FROM PlanPensCon WHERE UPPER(a_partir_dePlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_A_PARTIR_DE_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(a_partir_dePlanPens) LIKE UPPER(?) ORDER BY a_partir_dePlanPens";

    const CONSULTAR_PLANPENS_POR_BANCO = "SELECT * FROM PlanPensCon WHERE UPPER(bancoPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_BANCO_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(bancoPlanPens) LIKE UPPER(?) ORDER BY bancoPlanPens";

    const CONSULTAR_PLANPENS_POR_CUENTA_BANCARIA = "SELECT * FROM PlanPensCon WHERE UPPER(cuenta_bancariaPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_CUENTA_BANCARIA_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(cuenta_bancariaPlanPens) LIKE UPPER(?) ORDER BY cuenta_bancariaPlanPens";

    const CONSULTAR_PLANPENS_POR_FUENTE_DE_FINANCIAMIENTO = "SELECT * FROM PlanPensCon WHERE UPPER(fuente_de_financiamientoPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_FUENTE_DE_FINANCIAMIENTO_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(fuente_de_financiamientoPlanPens) LIKE UPPER(?) ORDER BY fuente_de_financiamientoPlanPens";

    const CONSULTAR_PLANPENS_POR_PLANILLA2 = "SELECT * FROM PlanPensCon WHERE UPPER(planilla2PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_PLANILLA2_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(planilla2PlanPens) LIKE UPPER(?) ORDER BY planilla2PlanPens";

    const CONSULTAR_PLANPENS_POR_TOTAL_IMPONIBLE = "SELECT * FROM PlanPensCon WHERE UPPER(total_imponiblePlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_TOTAL_IMPONIBLE_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(total_imponiblePlanPens) LIKE UPPER(?) ORDER BY total_imponiblePlanPens";

    const CONSULTAR_PLANPENS_POR_TOTAL_HABER = "SELECT * FROM PlanPensCon WHERE UPPER(total_haberPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_TOTAL_HABER_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(total_haberPlanPens) LIKE UPPER(?) ORDER BY total_haberPlanPens";

    const CONSULTAR_PLANPENS_POR_TOTAL_DESCUENTOS = "SELECT * FROM PlanPensCon WHERE UPPER(total_descuentosPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_TOTAL_DESCUENTOS_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(total_descuentosPlanPens) LIKE UPPER(?) ORDER BY total_descuentosPlanPens";

    const CONSULTAR_PLANPENS_POR_TOTAL_LIQUIDO = "SELECT * FROM PlanPensCon WHERE UPPER(total_liquidoPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_TOTAL_LIQUIDO_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(total_liquidoPlanPens) LIKE UPPER(?) ORDER BY total_liquidoPlanPens";

    const CONSULTAR_PLANPENS_POR_AGUINALDO = "SELECT * FROM PlanPensCon WHERE UPPER(aguinaldoPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_AGUINALDO_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(aguinaldoPlanPens) LIKE UPPER(?) ORDER BY aguinaldoPlanPens";

    const CONSULTAR_PLANPENS_POR_BASICA = "SELECT * FROM PlanPensCon WHERE UPPER(basicaPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_BASICA_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(basicaPlanPens) LIKE UPPER(?) ORDER BY basicaPlanPens";

    const CONSULTAR_PLANPENS_POR_BONIF_PERSONAL = "SELECT * FROM PlanPensCon WHERE UPPER(bonif_personalPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_BONIF_PERSONAL_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(bonif_personalPlanPens) LIKE UPPER(?) ORDER BY bonif_personalPlanPens";

    const CONSULTAR_PLANPENS_POR_AEL25671 = "SELECT * FROM PlanPensCon WHERE UPPER(ael25671PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_AEL25671_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(ael25671PlanPens) LIKE UPPER(?) ORDER BY ael25671PlanPens";

    const CONSULTAR_PLANPENS_POR_AEDS081 = "SELECT * FROM PlanPensCon WHERE UPPER(aeds081PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_AEDS081_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(aeds081PlanPens) LIKE UPPER(?) ORDER BY aeds081PlanPens";

    const CONSULTAR_PLANPENS_POR_TPH = "SELECT * FROM PlanPensCon WHERE UPPER(tphPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_TPH_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(tphPlanPens) LIKE UPPER(?) ORDER BY tphPlanPens";

    const CONSULTAR_PLANPENS_POR_BONIF_FAMILIAR = "SELECT * FROM PlanPensCon WHERE UPPER(bonif_familiarPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_BONIF_FAMILIAR_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(bonif_familiarPlanPens) LIKE UPPER(?) ORDER BY bonif_familiarPlanPens";

    const CONSULTAR_PLANPENS_POR_DU080_04 = "SELECT * FROM PlanPensCon WHERE UPPER(du080_04PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DU080_04_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(du080_04PlanPens) LIKE UPPER(?) ORDER BY du080_04PlanPens";

    const CONSULTAR_PLANPENS_POR_REFRIG_Y_MOVI = "SELECT * FROM PlanPensCon WHERE UPPER(refrig_y_moviPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_REFRIG_Y_MOVI_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(refrig_y_moviPlanPens) LIKE UPPER(?) ORDER BY refrig_y_moviPlanPens";

    const CONSULTAR_PLANPENS_POR_DU90_96 = "SELECT * FROM PlanPensCon WHERE UPPER(du90_96PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DU90_96_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(du90_96PlanPens) LIKE UPPER(?) ORDER BY du90_96PlanPens";

    const CONSULTAR_PLANPENS_POR_DS19_94_PCM = "SELECT * FROM PlanPensCon WHERE UPPER(ds19_94_pcmPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS19_94_PCM_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(ds19_94_pcmPlanPens) LIKE UPPER(?) ORDER BY ds19_94_pcmPlanPens";

    const CONSULTAR_PLANPENS_POR_DS21_92_PCM = "SELECT * FROM PlanPensCon WHERE UPPER(ds21_92_pcmPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS21_92_PCM_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(ds21_92_pcmPlanPens) LIKE UPPER(?) ORDER BY ds21_92_pcmPlanPens";

    const CONSULTAR_PLANPENS_POR_BON_ESPECIAL = "SELECT * FROM PlanPensCon WHERE UPPER(bon_especialPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_BON_ESPECIAL_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(bon_especialPlanPens) LIKE UPPER(?) ORDER BY bon_especialPlanPens";

    const CONSULTAR_PLANPENS_POR_REUNIFICADA = "SELECT * FROM PlanPensCon WHERE UPPER(reunificadaPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_REUNIFICADA_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(reunificadaPlanPens) LIKE UPPER(?) ORDER BY reunificadaPlanPens";

    const CONSULTAR_PLANPENS_POR_IGV = "SELECT * FROM PlanPensCon WHERE UPPER(igvPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_IGV_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(igvPlanPens) LIKE UPPER(?) ORDER BY igvPlanPens";

    const CONSULTAR_PLANPENS_POR_CARGSIMUL = "SELECT * FROM PlanPensCon WHERE UPPER(cargsimulPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_CARGSIMUL_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(cargsimulPlanPens) LIKE UPPER(?) ORDER BY cargsimulPlanPens";

    const CONSULTAR_PLANPENS_POR_ART18_DL_20530 = "SELECT * FROM PlanPensCon WHERE UPPER(art18_dl_20530PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_ART18_DL_20530_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(art18_dl_20530PlanPens) LIKE UPPER(?) ORDER BY art18_dl_20530PlanPens";

    const CONSULTAR_PLANPENS_POR_DU073_97 = "SELECT * FROM PlanPensCon WHERE UPPER(du073_97PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DU073_97_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(du073_97PlanPens) LIKE UPPER(?) ORDER BY du073_97PlanPens";

    const CONSULTAR_PLANPENS_POR_DU011_99 = "SELECT * FROM PlanPensCon WHERE UPPER(du011_99PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DU011_99_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(du011_99PlanPens) LIKE UPPER(?) ORDER BY du011_99PlanPens";

    const CONSULTAR_PLANPENS_POR_DU037_94 = "SELECT * FROM PlanPensCon WHERE UPPER(du037_94PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DU037_94_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(du037_94PlanPens) LIKE UPPER(?) ORDER BY du037_94PlanPens";

    const CONSULTAR_PLANPENS_POR_DS016 = "SELECT * FROM PlanPensCon WHERE UPPER(ds016PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS016_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(ds016PlanPens) LIKE UPPER(?) ORDER BY ds016PlanPens";

    const CONSULTAR_PLANPENS_POR_DS017 = "SELECT * FROM PlanPensCon WHERE UPPER(ds017PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS017_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(ds017PlanPens) LIKE UPPER(?) ORDER BY ds017PlanPens";

    const CONSULTAR_PLANPENS_POR_DS110_2006 = "SELECT * FROM PlanPensCon WHERE UPPER(ds110_2006PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS110_2006_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(ds110_2006PlanPens) LIKE UPPER(?) ORDER BY ds110_2006PlanPens";

    const CONSULTAR_PLANPENS_POR_DS039_2007 = "SELECT * FROM PlanPensCon WHERE UPPER(ds039_2007PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS039_2007_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(ds039_2007PlanPens) LIKE UPPER(?) ORDER BY ds039_2007PlanPens";

    const CONSULTAR_PLANPENS_POR_DS120_2008 = "SELECT * FROM PlanPensCon WHERE UPPER(ds120_2008PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS120_2008_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(ds120_2008PlanPens) LIKE UPPER(?) ORDER BY ds120_2008PlanPens";

    const CONSULTAR_PLANPENS_POR_DS014_2009 = "SELECT * FROM PlanPensCon WHERE UPPER(ds014_2009PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS014_2009_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(ds014_2009PlanPens) LIKE UPPER(?) ORDER BY ds014_2009PlanPens";

    const CONSULTAR_PLANPENS_POR_DS077_2010 = "SELECT * FROM PlanPensCon WHERE UPPER(ds077_2010PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS077_2010_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(ds077_2010PlanPens) LIKE UPPER(?) ORDER BY ds077_2010PlanPens";

    const CONSULTAR_PLANPENS_POR_DS031_2011 = "SELECT * FROM PlanPensCon WHERE UPPER(ds031_2011PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS031_2011_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(ds031_2011PlanPens) LIKE UPPER(?) ORDER BY ds031_2011PlanPens";

    const CONSULTAR_PLANPENS_POR_DS024_2012 = "SELECT * FROM PlanPensCon WHERE UPPER(ds024_2012PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS024_2012_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(ds024_2012PlanPens) LIKE UPPER(?) ORDER BY ds024_2012PlanPens";

    const CONSULTAR_PLANPENS_POR_DS004_2013 = "SELECT * FROM PlanPensCon WHERE UPPER(ds004_2013PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS004_2013_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(ds004_2013PlanPens) LIKE UPPER(?) ORDER BY ds004_2013PlanPens";

    const CONSULTAR_PLANPENS_POR_DS003_2014 = "SELECT * FROM PlanPensCon WHERE UPPER(ds003_2014PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS003_2014_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(ds003_2014PlanPens) LIKE UPPER(?) ORDER BY ds003_2014PlanPens";

    const CONSULTAR_PLANPENS_POR_DS002_2015 = "SELECT * FROM PlanPensCon WHERE UPPER(ds002_2015PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS002_2015_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(ds002_2015PlanPens) LIKE UPPER(?) ORDER BY ds002_2015PlanPens";

    const CONSULTAR_PLANPENS_POR_DS005_2016 = "SELECT * FROM PlanPensCon WHERE UPPER(ds005_2016PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS005_2016_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(ds005_2016PlanPens) LIKE UPPER(?) ORDER BY ds005_2016PlanPens";

    const CONSULTAR_PLANPENS_POR_DS020_2017 = "SELECT * FROM PlanPensCon WHERE UPPER(ds020_2017PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS020_2017_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(ds020_2017PlanPens) LIKE UPPER(?) ORDER BY ds020_2017PlanPens";

    const CONSULTAR_PLANPENS_POR_DS011_2018 = "SELECT * FROM PlanPensCon WHERE UPPER(ds011_2018PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS011_2018_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(ds011_2018PlanPens) LIKE UPPER(?) ORDER BY ds011_2018PlanPens";

    const CONSULTAR_PLANPENS_POR_DS009_2019 = "SELECT * FROM PlanPensCon WHERE UPPER(ds009_2019PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS009_2019_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(ds009_2019PlanPens) LIKE UPPER(?) ORDER BY ds009_2019PlanPens";

    const CONSULTAR_PLANPENS_POR_DS006_2020 = "SELECT * FROM PlanPensCon WHERE UPPER(ds006_2020PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DS006_2020_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(ds006_2020PlanPens) LIKE UPPER(?) ORDER BY ds006_2020PlanPens";

    const CONSULTAR_PLANPENS_POR_IPSS = "SELECT * FROM PlanPensCon WHERE UPPER(ipssPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_IPSS_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(ipssPlanPens) LIKE UPPER(?) ORDER BY ipssPlanPens";

    const CONSULTAR_PLANPENS_POR_CAFAE = "SELECT * FROM PlanPensCon WHERE UPPER(cafaePlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_CAFAE_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(cafaePlanPens) LIKE UPPER(?) ORDER BY cafaePlanPens";

    const CONSULTAR_PLANPENS_POR_PRDERRMA = "SELECT * FROM PlanPensCon WHERE UPPER(prderrmaPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_PRDERRMA_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(prderrmaPlanPens) LIKE UPPER(?) ORDER BY prderrmaPlanPens";

    const CONSULTAR_PLANPENS_POR_ESCOLARIDAD = "SELECT * FROM PlanPensCon WHERE UPPER(escolaridadPlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_ESCOLARIDAD_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(escolaridadPlanPens) LIKE UPPER(?) ORDER BY escolaridadPlanPens";

    const CONSULTAR_PLANPENS_POR_DECRETO_SUPERMO_20_21 = "SELECT * FROM PlanPensCon WHERE UPPER(decreto_supermo_20_21PlanPens) = UPPER(?)";

    const CONSULTAR_PLANPENS_POR_DECRETO_SUPERMO_20_21_APROX = "SELECT * FROM PlanPensCon WHERE UPPER(decreto_supermo_20_21PlanPens) LIKE UPPER(?) ORDER BY decreto_supermo_20_21PlanPens";
}
?>