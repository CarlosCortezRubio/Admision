<?php

/** 
 * @file SQLPeriodo.php 
 *  
 * Consultas SQL de la Tabla Periodo 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 16/10/2021
 *  
 */
class SQLPeriodo
{

    const AGREGAR_PERIODO = "INSERT INTO Periodo (idPeriodo, idEdoRegistro, anioPeriodo, mesPeriodo, nomPeriodo, obsPeriodo) VALUES (?, ?, ?, ?, ?, ?) ";

    const ACTUALIZAR_PERIODO = "UPDATE Periodo SET idPeriodo = ?, idEdoRegistro = ?, anioPeriodo = ?, mesPeriodo = ?, nomPeriodo = ?, obsPeriodo = ? WHERE idPeriodo = ?";

    const ELIMINAR_PERIODO = "DELETE FROM Periodo WHERE idPeriodo = ?";

    const CONSULTAR_PERIODO = "SELECT * FROM 
        Periodo INNER JOIN 
        EdoRegistro USING(idEdoRegistro) ORDER BY idPeriodo";

    const CONSULTAR_PERIODO_POR_IDPERIODO = "SELECT * FROM 
        Periodo INNER JOIN 
        EdoRegistro USING(idEdoRegistro)
        WHERE idPeriodo = ?";

    const CONSULTAR_PERIODO_POR_EDO = "SELECT * FROM Periodo WHERE idEdoRegistro = ?";

    const CONSULTAR_PERIODO_POR_IDEDOREGISTRO = "SELECT * FROM Periodo WHERE idEdoRegistro = ?";

    const CONSULTAR_PERIODO_POR_ANIO = "SELECT * FROM Periodo WHERE anioPeriodo = ?";

    const CONSULTAR_PERIODO_POR_MES = "SELECT * FROM Periodo WHERE mesPeriodo = ?";

    const CONSULTAR_PERIODO_POR_NOM = "SELECT * FROM Periodo WHERE UPPER(nomPeriodo) = UPPER(?)";

    const CONSULTAR_PERIODO_POR_NOM_APROX = "SELECT * FROM Periodo WHERE UPPER(nomPeriodo) LIKE UPPER(?) ORDER BY nomPeriodo";

    const CONSULTAR_PERIODO_POR_OBS = "SELECT * FROM Periodo WHERE UPPER(obsPeriodo) = UPPER(?)";

    const CONSULTAR_PERIODO_POR_OBS_APROX = "SELECT * FROM Periodo WHERE UPPER(obsPeriodo) LIKE UPPER(?) ORDER BY obsPeriodo";

    const DUPLICAR_PLANILLA_PLANPENS = "INSERT INTO planillaPensionado (
        `idPersona`, `idPeriodo`, `idTipoPlanilla`, `fecplanillaPensionado`, `totImpplanillaPensionado`, `totHabplanillaPensionado`, `totDescplanillaPensionado`, `totLiqplanillaPensionado`
        )
        select `idPersona`, ?, `idTipoPlanilla`, `fecplanillaPensionado`, `totImpplanillaPensionado`, `totHabplanillaPensionado`, `totDescplanillaPensionado`, `totLiqplanillaPensionado`
        FROM planillaPensionado where idPeriodo = ? AND idTipoPlanilla = ?";
    
    const DUPLICAR_CONCEPTO_PLANILLA = "INSERT INTO ConcPlanilla (
        `idConceptos`, `idplanillaPensionado`, `mntConcPlanilla`
        )
        select `idConceptos`, ?, `mntConcPlanilla`
        FROM ConcPlanilla where idplanillaPensionado = ?";
    
    const CONSULTAR_PLANILLA_POR_IDPERIODO_Y_IDTIPOPLANILLA = "SELECT * FROM planillaPensionado WHERE idPeriodo = ? AND idTipoPlanilla = ?";
}
?>