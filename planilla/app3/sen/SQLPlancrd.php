<?php

/** 
 * @file SQLPlanCrd.php 
 *  
 * Consultas SQL de la Tabla PlanCrd 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 08/05/2021
 *  
 */
class SQLPlanCrd
{

    const AGREGAR_PLANCRD = "INSERT INTO PlanCrd (idPlanCrd, ape1PlanCrd, ape2PlanCrd, nom1PlanCrd, nacPlanCrd, dniPlanCrd, fecIngPlanCrd, eraDocPlanCrd, incDespPlanCrd, gdoAcadPlanCrd, mencPlanCrd, univMayGPlanCrd, paisPlanCrd, preGPlanCrd, maePlanCrd, docPlanCrd, sedesClasesPlanCrd, catDocPlanCrd, dedDocPlanCrd, clasesPlanCrd, otrasActPlanCrd, totHorSemPlanCrd, rzaInvPlanCrd, enDinaPlanCrd, perAcadPlanCrd, comPlanCrd) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";

    const ACTUALIZAR_PLANCRD = "UPDATE PlanCrd SET idPlanCrd = ?, ape1PlanCrd = ?, ape2PlanCrd = ?, nom1PlanCrd = ?, nacPlanCrd = ?, dniPlanCrd = ?, fecIngPlanCrd = ?, eraDocPlanCrd = ?, incDespPlanCrd = ?, gdoAcadPlanCrd = ?, mencPlanCrd = ?, univMayGPlanCrd = ?, paisPlanCrd = ?, preGPlanCrd = ?, maePlanCrd = ?, docPlanCrd = ?, sedesClasesPlanCrd = ?, catDocPlanCrd = ?, dedDocPlanCrd = ?, clasesPlanCrd = ?, otrasActPlanCrd = ?, totHorSemPlanCrd = ?, rzaInvPlanCrd = ?, enDinaPlanCrd = ?, perAcadPlanCrd = ?, comPlanCrd = ? WHERE idPlanCrd = ?";

    const ELIMINAR_PLANCRD = "DELETE FROM PlanCrd WHERE idPlanCrd = ?";

    const CONSULTAR_PLANCRD = "SELECT * FROM PlanCrd ORDER BY idPlanCrd";

    const CONSULTAR_PLANCRD_POR_IDPLANCRD = "SELECT * FROM PlanCrd WHERE idPlanCrd = ?";

    const CONSULTAR_PLANCRD_POR_APE1 = "SELECT * FROM PlanCrd WHERE UPPER(ape1PlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_APE1_APROX = "SELECT * FROM PlanCrd WHERE UPPER(ape1PlanCrd) LIKE UPPER(?) ORDER BY ape1PlanCrd";

    const CONSULTAR_PLANCRD_POR_APE2 = "SELECT * FROM PlanCrd WHERE UPPER(ape2PlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_APE2_APROX = "SELECT * FROM PlanCrd WHERE UPPER(ape2PlanCrd) LIKE UPPER(?) ORDER BY ape2PlanCrd";

    const CONSULTAR_PLANCRD_POR_NOM1 = "SELECT * FROM PlanCrd WHERE UPPER(nom1PlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_NOM1_APROX = "SELECT * FROM PlanCrd WHERE UPPER(nom1PlanCrd) LIKE UPPER(?) ORDER BY nom1PlanCrd";

    const CONSULTAR_PLANCRD_POR_NAC = "SELECT * FROM PlanCrd WHERE UPPER(nacPlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_NAC_APROX = "SELECT * FROM PlanCrd WHERE UPPER(nacPlanCrd) LIKE UPPER(?) ORDER BY nacPlanCrd";

    const CONSULTAR_PLANCRD_POR_DNI = "SELECT * FROM PlanCrd WHERE UPPER(dniPlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_DNI_APROX = "SELECT * FROM PlanCrd WHERE UPPER(dniPlanCrd) LIKE UPPER(?) ORDER BY dniPlanCrd";

    const CONSULTAR_PLANCRD_POR_FECING = "SELECT * FROM PlanCrd WHERE UPPER(fecIngPlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_FECING_APROX = "SELECT * FROM PlanCrd WHERE UPPER(fecIngPlanCrd) LIKE UPPER(?) ORDER BY fecIngPlanCrd";

    const CONSULTAR_PLANCRD_POR_ERADOC = "SELECT * FROM PlanCrd WHERE UPPER(eraDocPlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_ERADOC_APROX = "SELECT * FROM PlanCrd WHERE UPPER(eraDocPlanCrd) LIKE UPPER(?) ORDER BY eraDocPlanCrd";

    const CONSULTAR_PLANCRD_POR_INCDESP = "SELECT * FROM PlanCrd WHERE UPPER(incDespPlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_INCDESP_APROX = "SELECT * FROM PlanCrd WHERE UPPER(incDespPlanCrd) LIKE UPPER(?) ORDER BY incDespPlanCrd";

    const CONSULTAR_PLANCRD_POR_GDOACAD = "SELECT * FROM PlanCrd WHERE UPPER(gdoAcadPlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_GDOACAD_APROX = "SELECT * FROM PlanCrd WHERE UPPER(gdoAcadPlanCrd) LIKE UPPER(?) ORDER BY gdoAcadPlanCrd";

    const CONSULTAR_PLANCRD_POR_MENC = "SELECT * FROM PlanCrd WHERE UPPER(mencPlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_MENC_APROX = "SELECT * FROM PlanCrd WHERE UPPER(mencPlanCrd) LIKE UPPER(?) ORDER BY mencPlanCrd";

    const CONSULTAR_PLANCRD_POR_UNIVMAYG = "SELECT * FROM PlanCrd WHERE UPPER(univMayGPlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_UNIVMAYG_APROX = "SELECT * FROM PlanCrd WHERE UPPER(univMayGPlanCrd) LIKE UPPER(?) ORDER BY univMayGPlanCrd";

    const CONSULTAR_PLANCRD_POR_PAIS = "SELECT * FROM PlanCrd WHERE UPPER(paisPlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_PAIS_APROX = "SELECT * FROM PlanCrd WHERE UPPER(paisPlanCrd) LIKE UPPER(?) ORDER BY paisPlanCrd";

    const CONSULTAR_PLANCRD_POR_PREG = "SELECT * FROM PlanCrd WHERE UPPER(preGPlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_PREG_APROX = "SELECT * FROM PlanCrd WHERE UPPER(preGPlanCrd) LIKE UPPER(?) ORDER BY preGPlanCrd";

    const CONSULTAR_PLANCRD_POR_MAE = "SELECT * FROM PlanCrd WHERE UPPER(maePlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_MAE_APROX = "SELECT * FROM PlanCrd WHERE UPPER(maePlanCrd) LIKE UPPER(?) ORDER BY maePlanCrd";

    const CONSULTAR_PLANCRD_POR_DOC = "SELECT * FROM PlanCrd WHERE UPPER(docPlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_DOC_APROX = "SELECT * FROM PlanCrd WHERE UPPER(docPlanCrd) LIKE UPPER(?) ORDER BY docPlanCrd";

    const CONSULTAR_PLANCRD_POR_SEDESCLASES = "SELECT * FROM PlanCrd WHERE UPPER(sedesClasesPlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_SEDESCLASES_APROX = "SELECT * FROM PlanCrd WHERE UPPER(sedesClasesPlanCrd) LIKE UPPER(?) ORDER BY sedesClasesPlanCrd";

    const CONSULTAR_PLANCRD_POR_CATDOC = "SELECT * FROM PlanCrd WHERE UPPER(catDocPlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_CATDOC_APROX = "SELECT * FROM PlanCrd WHERE UPPER(catDocPlanCrd) LIKE UPPER(?) ORDER BY catDocPlanCrd";

    const CONSULTAR_PLANCRD_POR_DEDDOC = "SELECT * FROM PlanCrd WHERE UPPER(dedDocPlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_DEDDOC_APROX = "SELECT * FROM PlanCrd WHERE UPPER(dedDocPlanCrd) LIKE UPPER(?) ORDER BY dedDocPlanCrd";

    const CONSULTAR_PLANCRD_POR_CLASES = "SELECT * FROM PlanCrd WHERE UPPER(clasesPlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_CLASES_APROX = "SELECT * FROM PlanCrd WHERE UPPER(clasesPlanCrd) LIKE UPPER(?) ORDER BY clasesPlanCrd";

    const CONSULTAR_PLANCRD_POR_OTRASACT = "SELECT * FROM PlanCrd WHERE UPPER(otrasActPlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_OTRASACT_APROX = "SELECT * FROM PlanCrd WHERE UPPER(otrasActPlanCrd) LIKE UPPER(?) ORDER BY otrasActPlanCrd";

    const CONSULTAR_PLANCRD_POR_TOTHORSEM = "SELECT * FROM PlanCrd WHERE UPPER(totHorSemPlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_TOTHORSEM_APROX = "SELECT * FROM PlanCrd WHERE UPPER(totHorSemPlanCrd) LIKE UPPER(?) ORDER BY totHorSemPlanCrd";

    const CONSULTAR_PLANCRD_POR_RZAINV = "SELECT * FROM PlanCrd WHERE UPPER(rzaInvPlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_RZAINV_APROX = "SELECT * FROM PlanCrd WHERE UPPER(rzaInvPlanCrd) LIKE UPPER(?) ORDER BY rzaInvPlanCrd";

    const CONSULTAR_PLANCRD_POR_ENDINA = "SELECT * FROM PlanCrd WHERE UPPER(enDinaPlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_ENDINA_APROX = "SELECT * FROM PlanCrd WHERE UPPER(enDinaPlanCrd) LIKE UPPER(?) ORDER BY enDinaPlanCrd";

    const CONSULTAR_PLANCRD_POR_PERACAD = "SELECT * FROM PlanCrd WHERE UPPER(perAcadPlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_PERACAD_APROX = "SELECT * FROM PlanCrd WHERE UPPER(perAcadPlanCrd) LIKE UPPER(?) ORDER BY perAcadPlanCrd";

    const CONSULTAR_PLANCRD_POR_COM = "SELECT * FROM PlanCrd WHERE UPPER(comPlanCrd) = UPPER(?)";

    const CONSULTAR_PLANCRD_POR_COM_APROX = "SELECT * FROM PlanCrd WHERE UPPER(comPlanCrd) LIKE UPPER(?) ORDER BY comPlanCrd";

    const CONSULTAR_DICCIONARIO_POR_ERADOCPLANCRD = "SELECT cjtovalores FROM diccionario WHERE diccionarioid = ?";

    const CONSULTAR_DICCIONARIO_POR_INCDESPPLANCRD = "SELECT cjtovalores FROM diccionario WHERE diccionarioid = ?";

    const CONSULTAR_DICCIONARIO_POR_PREGPLANCRD = "SELECT cjtovalores FROM diccionario WHERE diccionarioid = ?";

    const CONSULTAR_DICCIONARIO_POR_MAEPLANCRD = "SELECT cjtovalores FROM diccionario WHERE diccionarioid = ?";

    const CONSULTAR_DICCIONARIO_POR_DOCPLANCRD = "SELECT cjtovalores FROM diccionario WHERE diccionarioid = ?";

    const CONSULTAR_DICCIONARIO_POR_RZAINVPLANCRD = "SELECT cjtovalores FROM diccionario WHERE diccionarioid = ?";

    const CONSULTAR_DICCIONARIO_POR_ENDINAPLANCRD = "SELECT cjtovalores FROM diccionario WHERE diccionarioid = ?";
}
?>