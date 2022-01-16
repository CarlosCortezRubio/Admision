<?php

/** 
 * @file SQLPeriodo.php 
 *  
 * Consultas SQL de la Tabla periodo 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 16/10/2021
 *  
 */
class SQLPeriodo
{

    const AGREGAR_PERIODO = "INSERT INTO periodo (idPeriodo, idEdoRegistro, anioPeriodo, mesPeriodo, nomPeriodo, obsPeriodo) VALUES (?, ?, ?, ?, ?, ?) ";

    const ACTUALIZAR_PERIODO = "UPDATE periodo SET idPeriodo = ?, idEdoRegistro = ?, anioPeriodo = ?, mesPeriodo = ?, nomPeriodo = ?, obsPeriodo = ? WHERE idPeriodo = ?";

    const ELIMINAR_PERIODO = "DELETE FROM periodo WHERE idPeriodo = ?";

    const CONSULTAR_PERIODO = "SELECT * FROM 
        periodo INNER JOIN 
        edoregistro USING(idEdoRegistro) ORDER BY idPeriodo";

    const CONSULTAR_PERIODO_POR_IDPERIODO = "SELECT * FROM 
        periodo INNER JOIN 
        edoregistro USING(idEdoRegistro)
        WHERE idPeriodo = ?";

    const CONSULTAR_PERIODO_POR_EDO = "SELECT * FROM periodo WHERE idEdoRegistro = ?";

    const CONSULTAR_PERIODO_POR_IDEDOREGISTRO = "SELECT * FROM periodo WHERE idEdoRegistro = ?";

    const CONSULTAR_PERIODO_POR_ANIO = "SELECT * FROM periodo WHERE anioPeriodo = ?";

    const CONSULTAR_PERIODO_POR_MES = "SELECT * FROM periodo WHERE mesPeriodo = ?";

    const CONSULTAR_PERIODO_POR_NOM = "SELECT * FROM periodo WHERE UPPER(nomPeriodo) = UPPER(?)";

    const CONSULTAR_PERIODO_POR_NOM_APROX = "SELECT * FROM periodo WHERE UPPER(nomPeriodo) LIKE UPPER(?) ORDER BY nomPeriodo";

    const CONSULTAR_PERIODO_POR_OBS = "SELECT * FROM periodo WHERE UPPER(obsPeriodo) = UPPER(?)";

    const CONSULTAR_PERIODO_POR_OBS_APROX = "SELECT * FROM periodo WHERE UPPER(obsPeriodo) LIKE UPPER(?) ORDER BY obsPeriodo";

    const DUPLICAR_PLANILLA_PLANPENS = "INSERT INTO planillaPensionado (
        `idPersona`, `idPeriodo`, `idTipoPlanilla`, `fecplanillaPensionado`, `totImpplanillaPensionado`, `totHabplanillaPensionado`, `totDescplanillaPensionado`, `totLiqplanillaPensionado`
        )
        select `idPersona`, ?, `idTipoPlanilla`, `fecplanillaPensionado`, `totImpplanillaPensionado`, `totHabplanillaPensionado`, `totDescplanillaPensionado`, `totLiqplanillaPensionado`
        FROM planillaPensionado where idPeriodo = ? AND idTipoPlanilla = ?";
    
    const DUPLICAR_CONCEPTO_PLANILLA = "INSERT INTO concplanilla (
        `idConceptos`, `idplanillaPensionado`, `mntConcPlanilla`
        )
        select `idConceptos`, ?, `mntConcPlanilla`
        FROM concplanilla where idplanillaPensionado = ?";
    
    const CONSULTAR_PLANILLA_POR_IDPERIODO_Y_IDTIPOPLANILLA = "SELECT * FROM planillaPensionado WHERE idPeriodo = ? AND idTipoPlanilla = ?";
}
?>