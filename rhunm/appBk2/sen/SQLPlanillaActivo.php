<?php 
/** 
 * @file SQLPlanillaPensionado.php 
 *  
 * Consultas SQL de la Tabla planillapensionado 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 18/10/2021
 *  
*/ 
class SQLPlanillaActivo
{ 
      const AGREGAR_PLANILLAPENSIONADO = "INSERT INTO planillapensionado 
            (idEmpleado, 
             idPeriodo, 
             fecplanillaPensionado, 
             totImpplanillaPensionado, 
             totHabplanillaPensionado, 
             totDescplanillaPensionado, 
             totLiqplanillaPensionado, 
             idTipoPlanilla) 
             VALUES (?, ?, ?, ?, ?, ?, ?, ?) ";
    
      const ACTUALIZAR_PLANILLAPENSIONADO = "UPDATE planillapensionado 
            SET idEmpleado = ?, 
                idPeriodo = ?, 
                fecplanillaPensionado = ?, 
                totImpplanillaPensionado = ?, 
                totHabplanillaPensionado = ?, 
                totDescplanillaPensionado = ?, 
                totLiqplanillaPensionado = ? 
            WHERE idplanillaPensionado = ?";
    
      const ELIMINAR_PLANILLAPENSIONADO = "DELETE FROM planillapensionado WHERE idplanillaPensionado = ?";
    
      const CONSULTAR_PLANPENS_CONSOLIDADO_POR_ANIO_Y_MES = "SELECT 
            etiConceptos,
            idplanillaPensionado,
            idConceptos,
            idTipoConcepto, 
            sum(mntConcPlanilla) as sumConcepto,
            COUNT(IF(mntConcPlanilla>0,1,NULL)) AS cantConceptos
            FROM planillapensionado 
                  INNER JOIN periodo USING(idPeriodo) 
                  INNER JOIN concplanilla USING(idplanillaPensionado) 
                  INNER JOIN conceptos USING(idConceptos)
            WHERE anioPeriodo = ? AND mesPeriodo = ? group by idConceptos ORDER BY idTipoConcepto,idConceptos";
      
      const CONSULTAR_PLANILLAPENSIONADO = "SELECT * FROM planillapensionado 
            INNER JOIN persona USING(idEmpleado)  
            INNER JOIN periodo USING(idPeriodo) ORDER BY idplanillaPensionado";
      
      const CONSULTAR_PLANILLAPENSIONADO_POR_ID_TIPO_PLANILLA = "SELECT * FROM planillapensionado INNER JOIN 
            persona USING(idEmpleado)  INNER JOIN 
            periodo USING(idPeriodo) WHERE idTipoPlanilla = ? ORDER BY idplanillaPensionado";
      
      const CONSULTAR_PLANPENS_TOTALES_POR_ANIO_Y_MES = "
            SELECT 
            sum(totImpplanillaPensionado) AS totales_imponiblePlanPens,sum(totHabplanillaPensionado) AS totales_haberPlanPens, 
            sum(totDescplanillaPensionado) AS totales_descuentosPlanPens,
            sum( totLiqplanillaPensionado) AS totales_liquidoPlanPens 
            FROM planillapensionado t, periodo P, (SELECT @rownum:=0) r WHERE anioPeriodo = ? AND mesPeriodo = ? ORDER BY idplanillaPensionado
            ";
    //             (SELECT @rownum:=0) r WHERE edoPlanPens = 1 AND anio = ? AND mes = ? ORDER BY idPlanPens";
      
    //   const CONSULTAR_PLANPENS_POR_ANIO_Y_MES = "SELECT * FROM planillapensionado INNER JOIN 
    //         persona p USING(idEmpleado) INNER JOIN 
    //         periodo peri USING(idPeriodo) WHERE anioPeriodo = ? AND mesPeriodo = ? AND peri.idEdoRegistro = 1 ORDER BY idPlanillaPensionado";
    //   const CONSULTAR_PLANPENS_POR_ANIO_Y_MES = "SELECT * FROM planillapensionado INNER JOIN 
    //         persona USING(idEmpleado) INNER JOIN 
    //         concplanilla USING(idPlanillaPensionado) INNER JOIN 
    //         periodo peri USING(idPeriodo) INNER JOIN
    //         conceptos USING(idConceptos) INNER JOIN 
    //         tipoconcepto USING(idTipoConcepto) WHERE anioPeriodo = ? AND mesPeriodo = ? AND peri.idEdoRegistro = 1 ORDER BY idPlanillaPensionado";
      const CONSULTAR_PLANPENS_POR_ANIO_MES_Y_TIPO = "SELECT * FROM planillapensionado INNER JOIN 
            persona USING(idEmpleado) INNER JOIN 
            periodo peri USING(idPeriodo) WHERE anioPeriodo = ? AND mesPeriodo = ? AND idTipoPlanilla = ? 
            ORDER BY idPlanillaPensionado";
      
      const CONSULTAR_PLANPENS_POR_ANIO_Y_MES = "SELECT * FROM planillapensionado INNER JOIN 
            persona USING(idEmpleado) INNER JOIN 
            periodo peri USING(idPeriodo) WHERE anioPeriodo = ? AND mesPeriodo = ? ORDER BY idPlanillaPensionado";
      
      const CONSULTAR_LISTADO_PLANPENS_POR_ANIO_Y_MES = "SELECT @rownum:=@rownum+1 nro, t.*, P.* FROM planillapensionado t INNER JOIN 
            persona P USING(idEmpleado) INNER JOIN 
            periodo peri USING(idPeriodo) WHERE anioPeriodo = ? AND mesPeriodo = ? ORDER BY idPlanillaPensionado";
      
      const CONSULTAR_LISTADO_PLANPENS_Y_CONC_POR_ANIO_Y_MES = "SELECT @rownum:=@rownum+1 nro, t.*, P.*, c.*, cp.* FROM 
            planillapensionado t INNER JOIN 
            persona P USING(idEmpleado) INNER JOIN 
            periodo peri USING(idPeriodo)  INNER JOIN 
            concplanilla cp USING(idPlanillaPensionado) INNER JOIN 
            conceptos c USING(idConceptos) INNER JOIN 
            tipoconcepto tc USING(idTipoConcepto) 
            WHERE anioPeriodo = ? AND mesPeriodo = ? AND cp.mntConcPlanilla > 0 ORDER BY t.idPlanillaPensionado";
      
      const CONSULTAR_PLANPENS_POR_DNI_POR_PARAMS_Y_TIPO = "SELECT * FROM planillapensionado INNER JOIN 
            persona USING(idEmpleado)  INNER JOIN 
            periodo peri USING(idPeriodo) WHERE anioPeriodo = ? AND mesPeriodo = ? AND UPPER(docPersona) = UPPER(?) 
            AND idTipoPlanilla = ?
            ORDER BY idPlanillaPensionado";
      
      const CONSULTAR_PLANPENS_POR_DNI_POR_PARAMS = "SELECT * FROM planillapensionado INNER JOIN 
            persona USING(idEmpleado)  INNER JOIN 
            periodo peri USING(idPeriodo) WHERE anioPeriodo = ? AND mesPeriodo = ? AND UPPER(docPersona) = UPPER(?) AND peri.idEdoRegistro = 1 ORDER BY idPlanillaPensionado";
      
      const CONSULTAR_PLANPENS_POR_NOM_POR_PARAMS_Y_TIPO = "SELECT * FROM planillapensionado INNER JOIN 
            persona USING(idEmpleado)  INNER JOIN 
            periodo USING(idPeriodo) 
            WHERE anioPeriodo = ? AND mesPeriodo = ? AND UPPER(nom1Persona) LIKE UPPER(?) AND idTipoPlanilla = ?
            ORDER BY idPlanillaPensionado";
      
      const CONSULTAR_PLANPENS_POR_NOM_POR_PARAMS = "SELECT * FROM planillapensionado INNER JOIN 
            persona USING(idEmpleado)  INNER JOIN 
            periodo USING(idPeriodo) 
            WHERE anioPeriodo = ? AND mesPeriodo = ? AND UPPER(nom1Persona) LIKE UPPER(?)";
      
      const CONSULTAR_PLANILLAPENSIONADO_POR_APELLIDOS_Y_NOMBRES_APROX = "SELECT * FROM planillapensionado INNER JOIN 
            persona USING(idEmpleado)  INNER JOIN 
            periodo USING(idPeriodo) 
            WHERE UPPER(nom1Persona) LIKE UPPER(?) AND edoPlanPens = 1 ORDER BY idplanillaPensionado";
      
      const CONSULTAR_PLANILLAPENSIONADO_ULTIMO_ID = "SELECT * FROM planillapensionado ORDER BY idplanillaPensionado DESC";
    
    //   const CONSULTAR_PLANILLAPENSIONADO_POR_IDPLANILLAPENSIONADO = "SELECT cp.mntConceptos as montoConcepto, p.*, c.*, tc.* FROM planillapensionado INNER JOIN 
      const CONSULTAR_PLANILLAPENSIONADO_POR_IDPLANILLAPENSIONADO = "SELECT * FROM planillapensionado INNER JOIN 
            persona p USING(idEmpleado) INNER JOIN 
            concplanilla cp USING(idPlanillaPensionado) INNER JOIN 
            conceptos c USING(idConceptos) INNER JOIN 
            tipoconcepto tc USING(idTipoConcepto) 
            WHERE idplanillaPensionado = ?";
      
      const CONSULTAR_PLANILLAPENSIONADO_POR_IDPLANILLAPENSIONADO_REPORTES = "SELECT * FROM planillapensionado INNER JOIN 
            persona p USING(idEmpleado) INNER JOIN 
            concplanilla cp USING(idPlanillaPensionado) INNER JOIN 
            conceptos c USING(idConceptos) INNER JOIN 
            tipoconcepto tc USING(idTipoConcepto) 
            WHERE idplanillaPensionado = ? AND cp.mntConcPlanilla > 0";
      
      const CONSULTAR_PLANILLAPENSIONADO_Y_CONCEPTOS_POR_IDPLANILLAPENSIONADO = "SELECT * FROM planillapensionado INNER JOIN 
            persona USING(idEmpleado) INNER JOIN 
            concplanilla USING(idPlanillaPensionado) INNER JOIN 
            conceptos USING(idConceptos) INNER JOIN 
            tipoconcepto USING(idTipoConcepto) INNER JOIN 
            banco USING(idBanco)
            WHERE idplanillaPensionado = ? AND concplanilla.mntConcPlanilla > 0";
    
      const CONSULTAR_PLANILLAPENSIONADO_POR_idEmpleado = "SELECT * FROM planillapensionado WHERE idEmpleadoplanillaPensionado = ?";
    
      const CONSULTAR_PLANILLAPENSIONADO_POR_IDPERIODO = "SELECT * FROM planillapensionado WHERE idPeriodoplanillaPensionado = ?";
    
      const CONSULTAR_PLANILLAPENSIONADO_POR_FEC = "SELECT * FROM planillapensionado WHERE fecplanillaPensionado = ?";
    
      const CONSULTAR_PLANILLAPENSIONADO_POR_TOTIMP = "SELECT * FROM planillapensionado WHERE totImpplanillaPensionado = ?";
    
      const CONSULTAR_PLANILLAPENSIONADO_POR_TOTHAB = "SELECT * FROM planillapensionado WHERE totHabplanillaPensionado = ?";
    
      const CONSULTAR_PLANILLAPENSIONADO_POR_TOTDESC = "SELECT * FROM planillapensionado WHERE totDescplanillaPensionado = ?";
    
      const CONSULTAR_PLANILLAPENSIONADO_POR_TOTLIQ = "SELECT * FROM planillapensionado WHERE totLiqplanillaPensionado = ?";
    
    }
    ?>