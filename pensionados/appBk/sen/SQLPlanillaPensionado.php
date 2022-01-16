<?php 
/** 
 * @file SQLPlanillaPensionado.php 
 *  
 * Consultas SQL de la Tabla PlanillaPensionado 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 18/10/2021
 *  
*/ 
class SQLPlanillaPensionado 
{ 
  const AGREGAR_PLANILLAPENSIONADO = "INSERT INTO planillaPensionado (idPersona, idPeriodo, fecplanillaPensionado, totImpplanillaPensionado, 
        totHabplanillaPensionado, totDescplanillaPensionado, totLiqplanillaPensionado, idTipoPlanilla) VALUES (?, ?, ?, ?, ?, ?, ?, ?) ";

  const ACTUALIZAR_PLANILLAPENSIONADO = "UPDATE planillaPensionado SET idPersona = ?, idPeriodo = ?, fecplanillaPensionado = ?, totImpplanillaPensionado = ?, totHabplanillaPensionado = ?, totDescplanillaPensionado = ?, totLiqplanillaPensionado = ? WHERE idplanillaPensionado = ?";

  const ELIMINAR_PLANILLAPENSIONADO = "DELETE FROM planillaPensionado WHERE idplanillaPensionado = ?";

  const CONSULTAR_PLANPENS_CONSOLIDADO_POR_ANIO_Y_MES = "
            SELECT etiConceptos,idplanillaPensionado,idConceptos,idTipoConcepto, sum(mntConcPlanilla) as sumConcepto,
            COUNT(IF(mntConcPlanilla>0,1,NULL)) AS cantConceptos
            FROM planillaPensionado INNER JOIN 
            Periodo USING(idPeriodo) INNER JOIN
            ConcPlanilla USING(idplanillaPensionado) INNER JOIN
            Conceptos USING(idConceptos)
            WHERE anioPeriodo = ? AND mesPeriodo = ? group by idConceptos ORDER BY idTipoConcepto,idConceptos";
  const CONSULTAR_PLANPENS_CONSOLIDADO_POR_ANIO_MES_Y_TIPO = "
            SELECT etiConceptos,idplanillaPensionado,idConceptos,idTipoConcepto, sum(mntConcPlanilla) as sumConcepto,
            COUNT(IF(mntConcPlanilla>0,1,NULL)) AS cantConceptos
            FROM planillaPensionado INNER JOIN 
            Periodo USING(idPeriodo) INNER JOIN
            ConcPlanilla USING(idplanillaPensionado) INNER JOIN
            Conceptos USING(idConceptos)
            WHERE anioPeriodo = ? AND mesPeriodo = ? AND idTipoPlanilla = ? group by idConceptos ORDER BY idTipoConcepto,idConceptos";
  
  const CONSULTAR_PLANILLAPENSIONADO = "SELECT * FROM planillaPensionado INNER JOIN 
        Persona USING(idPersona)  INNER JOIN 
        Periodo USING(idPeriodo) ORDER BY idplanillaPensionado";
  
  const CONSULTAR_PLANILLAPENSIONADO_POR_ID_TIPO_PLANILLA = "SELECT * FROM planillaPensionado INNER JOIN 
        Persona USING(idPersona)  INNER JOIN 
        Periodo USING(idPeriodo) WHERE idTipoPlanilla = ? ORDER BY idplanillaPensionado";
  
  const CONSULTAR_PLANPENS_TOTALES_POR_ANIO_Y_MES = "
        SELECT 
        sum(totImpplanillaPensionado) AS totales_imponiblePlanPens,sum(totHabplanillaPensionado) AS totales_haberPlanPens, 
        sum(totDescplanillaPensionado) AS totales_descuentosPlanPens,
        sum( totLiqplanillaPensionado) AS totales_liquidoPlanPens 
        FROM planillaPensionado t, Periodo P, (SELECT @rownum:=0) r WHERE anioPeriodo = ? AND mesPeriodo = ? ORDER BY idplanillaPensionado
        ";
  const CONSULTAR_PLANPENS_TOTALES_POR_ANIO_Y_MES_Y_TIPO = "
        SELECT 
        sum(totImpplanillaPensionado) AS totales_imponiblePlanPens,sum(totHabplanillaPensionado) AS totales_haberPlanPens, 
        sum(totDescplanillaPensionado) AS totales_descuentosPlanPens,
        sum( totLiqplanillaPensionado) AS totales_liquidoPlanPens 
        FROM planillaPensionado t, Periodo P, (SELECT @rownum:=0) r WHERE anioPeriodo = ? AND mesPeriodo = ? AND idTipoPlanilla = ? ORDER BY idplanillaPensionado
        ";
//             (SELECT @rownum:=0) r WHERE edoPlanPens = 1 AND anio = ? AND mes = ? ORDER BY idPlanPens";
  
//   const CONSULTAR_PLANPENS_POR_ANIO_Y_MES = "SELECT * FROM planillaPensionado INNER JOIN 
//         Persona p USING(idPersona) INNER JOIN 
//         Periodo peri USING(idPeriodo) WHERE anioPeriodo = ? AND mesPeriodo = ? AND peri.idEdoRegistro = 1 ORDER BY idPlanillaPensionado";
//   const CONSULTAR_PLANPENS_POR_ANIO_Y_MES = "SELECT * FROM planillaPensionado INNER JOIN 
//         Persona USING(idPersona) INNER JOIN 
//         ConcPlanilla USING(idPlanillaPensionado) INNER JOIN 
//         Periodo peri USING(idPeriodo) INNER JOIN
//         Conceptos USING(idConceptos) INNER JOIN 
//         TipoConcepto USING(idTipoConcepto) WHERE anioPeriodo = ? AND mesPeriodo = ? AND peri.idEdoRegistro = 1 ORDER BY idPlanillaPensionado";
  const CONSULTAR_PLANPENS_POR_ANIO_MES_Y_TIPO = "SELECT * FROM planillaPensionado INNER JOIN 
        Persona USING(idPersona) INNER JOIN 
        Periodo peri USING(idPeriodo) WHERE anioPeriodo = ? AND mesPeriodo = ? AND idTipoPlanilla = ? 
        ORDER BY idPlanillaPensionado";
  
  const CONSULTAR_PLANPENS_POR_ANIO_Y_MES = "SELECT * FROM planillaPensionado INNER JOIN 
        Persona USING(idPersona) INNER JOIN 
        Periodo peri USING(idPeriodo) WHERE anioPeriodo = ? AND mesPeriodo = ? ORDER BY idPlanillaPensionado";
  
  const CONSULTAR_LISTADO_PLANPENS_POR_ANIO_Y_MES = "SELECT @rownum:=@rownum+1 nro, t.*, P.* FROM planillaPensionado t INNER JOIN 
        Persona P USING(idPersona) INNER JOIN 
        Periodo peri USING(idPeriodo) WHERE anioPeriodo = ? AND mesPeriodo = ? ORDER BY idPlanillaPensionado";
  const CONSULTAR_LISTADO_PLANPENS_POR_ANIO_MES_Y_TIPO = "SELECT @rownum:=@rownum+1 nro, t.*, P.* FROM planillaPensionado t INNER JOIN 
        Persona P USING(idPersona) INNER JOIN 
        Periodo peri USING(idPeriodo) WHERE anioPeriodo = ? AND mesPeriodo = ? AND idTipoPlanilla = ? ORDER BY idPlanillaPensionado";
  
  const CONSULTAR_LISTADO_PLANPENS_Y_CONC_POR_ANIO_Y_MES = "SELECT @rownum:=@rownum+1 nro, t.*, P.*, c.*, cp.* FROM 
        planillaPensionado t INNER JOIN 
        Persona P USING(idPersona) INNER JOIN 
        Periodo peri USING(idPeriodo)  INNER JOIN 
        ConcPlanilla cp USING(idPlanillaPensionado) INNER JOIN 
        Conceptos c USING(idConceptos) INNER JOIN 
        TipoConcepto tc USING(idTipoConcepto) 
        WHERE anioPeriodo = ? AND mesPeriodo = ? AND cp.mntConcPlanilla > 0 ORDER BY t.idPlanillaPensionado";
  
  const CONSULTAR_LISTADO_PLANPENS_Y_CONC_POR_ANIO_MES_Y_TIPO = "SELECT @rownum:=@rownum+1 nro, t.*, P.*, c.*, cp.* FROM 
        planillaPensionado t INNER JOIN 
        Persona P USING(idPersona) INNER JOIN 
        Periodo peri USING(idPeriodo)  INNER JOIN 
        ConcPlanilla cp USING(idPlanillaPensionado) INNER JOIN 
        Conceptos c USING(idConceptos) INNER JOIN 
        TipoConcepto tc USING(idTipoConcepto) 
        WHERE anioPeriodo = ? AND mesPeriodo = ? AND t.idTipoPlanilla = ? ORDER BY t.idPlanillaPensionado";
  
  const CONSULTAR_PLANPENS_POR_DNI_POR_PARAMS_Y_TIPO = "SELECT * FROM planillaPensionado INNER JOIN 
        Persona USING(idPersona)  INNER JOIN 
        Periodo peri USING(idPeriodo) WHERE anioPeriodo = ? AND mesPeriodo = ? AND UPPER(docPersona) = UPPER(?) 
        AND idTipoPlanilla = ?
        ORDER BY idPlanillaPensionado";
  
  const CONSULTAR_PLANPENS_POR_DNI_POR_PARAMS = "SELECT * FROM planillaPensionado INNER JOIN 
        Persona USING(idPersona)  INNER JOIN 
        Periodo peri USING(idPeriodo) WHERE anioPeriodo = ? AND mesPeriodo = ? AND UPPER(docPersona) = UPPER(?) AND peri.idEdoRegistro = 1 ORDER BY idPlanillaPensionado";
  
  const CONSULTAR_PLANPENS_POR_NOM_POR_PARAMS_Y_TIPO = "SELECT * FROM planillaPensionado INNER JOIN 
        Persona USING(idPersona)  INNER JOIN 
        Periodo USING(idPeriodo) 
        WHERE anioPeriodo = ? AND mesPeriodo = ? AND UPPER(nom1Persona) LIKE UPPER(?) AND idTipoPlanilla = ?
        ORDER BY idPlanillaPensionado";
  
  const CONSULTAR_PLANPENS_POR_NOM_POR_PARAMS = "SELECT * FROM planillaPensionado INNER JOIN 
        Persona USING(idPersona)  INNER JOIN 
        Periodo USING(idPeriodo) 
        WHERE anioPeriodo = ? AND mesPeriodo = ? AND UPPER(nom1Persona) LIKE UPPER(?)";
  
  const CONSULTAR_PLANILLAPENSIONADO_POR_APELLIDOS_Y_NOMBRES_APROX = "SELECT * FROM planillaPensionado INNER JOIN 
        Persona USING(idPersona)  INNER JOIN 
        Periodo USING(idPeriodo) 
        WHERE UPPER(nom1Persona) LIKE UPPER(?) AND edoPlanPens = 1 ORDER BY idplanillaPensionado";
  
  const CONSULTAR_PLANILLAPENSIONADO_ULTIMO_ID = "SELECT * FROM planillaPensionado ORDER BY idplanillaPensionado DESC";

//   const CONSULTAR_PLANILLAPENSIONADO_POR_IDPLANILLAPENSIONADO = "SELECT cp.mntConceptos as montoConcepto, p.*, c.*, tc.* FROM planillaPensionado INNER JOIN 
  const CONSULTAR_PLANILLAPENSIONADO_POR_IDPLANILLAPENSIONADO = "SELECT * FROM planillaPensionado INNER JOIN 
        Persona p USING(idPersona) INNER JOIN 
        ConcPlanilla cp USING(idPlanillaPensionado) INNER JOIN 
        Conceptos c USING(idConceptos) INNER JOIN 
        TipoConcepto tc USING(idTipoConcepto) INNER JOIN 
        Banco bc USING(idBanco)
        WHERE idplanillaPensionado = ?";
  
  const CONSULTAR_PLANILLAPENSIONADO_POR_IDPLANILLAPENSIONADO_REPORTES = "SELECT * FROM planillaPensionado INNER JOIN 
        Persona p USING(idPersona) INNER JOIN 
        ConcPlanilla cp USING(idPlanillaPensionado) INNER JOIN 
        Conceptos c USING(idConceptos) INNER JOIN 
        TipoConcepto tc USING(idTipoConcepto) 
        WHERE idplanillaPensionado = ? AND cp.mntConcPlanilla > 0";
  
  const CONSULTAR_PLANILLAPENSIONADO_Y_CONCEPTOS_POR_IDPLANILLAPENSIONADO = "SELECT * FROM planillaPensionado INNER JOIN 
        Persona USING(idPersona) INNER JOIN 
        ConcPlanilla USING(idPlanillaPensionado) INNER JOIN 
        Conceptos USING(idConceptos) INNER JOIN 
        TipoConcepto USING(idTipoConcepto) INNER JOIN 
        Banco USING(idBanco)
        WHERE idplanillaPensionado = ? AND ConcPlanilla.mntConcPlanilla > 0";

  const CONSULTAR_PLANILLAPENSIONADO_POR_IDPERSONA = "SELECT * FROM planillaPensionado WHERE idPersonaplanillaPensionado = ?";

  const CONSULTAR_PLANILLAPENSIONADO_POR_IDPERIODO = "SELECT * FROM planillaPensionado WHERE idPeriodoplanillaPensionado = ?";

  const CONSULTAR_PLANILLAPENSIONADO_POR_FEC = "SELECT * FROM planillaPensionado WHERE fecplanillaPensionado = ?";

  const CONSULTAR_PLANILLAPENSIONADO_POR_TOTIMP = "SELECT * FROM planillaPensionado WHERE totImpplanillaPensionado = ?";

  const CONSULTAR_PLANILLAPENSIONADO_POR_TOTHAB = "SELECT * FROM planillaPensionado WHERE totHabplanillaPensionado = ?";

  const CONSULTAR_PLANILLAPENSIONADO_POR_TOTDESC = "SELECT * FROM planillaPensionado WHERE totDescplanillaPensionado = ?";

  const CONSULTAR_PLANILLAPENSIONADO_POR_TOTLIQ = "SELECT * FROM planillaPensionado WHERE totLiqplanillaPensionado = ?";

}
?>