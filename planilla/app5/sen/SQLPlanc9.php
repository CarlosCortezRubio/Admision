<?php 
/** 
 * @file SQLPlanc9.php 
 *  
 * Consultas SQL de la Tabla Planc9 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 07/05/2021
 *  
*/ 
class SQLPlanc9 
{ 
  const AGREGAR_PLANC9 = "INSERT INTO planc9 (numPlanC9, ape1PlanC9, ape2PlanC9, nom1PlanC9, nacPlanC9, dniPlanC9, fecIngPlanC9, eraDocPlanC9, incDespPlanC9, gdoAcadPlanC9, mencPlanC9, univMayGPlanC9, paisPlanC9, preGPlanC9, maePlanC9, docPlanC9, sedesClasesPlanC9, catDocPlanC9, dedDocPlanC9, clasesPlanC9, otrasActPlanC9, totHorSemPlanC9, rzaInvPlanC9, enDinaPlanC9, perAcadPlanC9, comPlanC9) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";

  const ACTUALIZAR_PLANC9 = "UPDATE planc9 SET numPlanC9 = ?, ape1PlanC9 = ?, ape2PlanC9 = ?, nom1PlanC9 = ?, nacPlanC9 = ?, dniPlanC9 = ?, fecIngPlanC9 = ?, eraDocPlanC9 = ?, incDespPlanC9 = ?, gdoAcadPlanC9 = ?, mencPlanC9 = ?, univMayGPlanC9 = ?, paisPlanC9 = ?, preGPlanC9 = ?, maePlanC9 = ?, docPlanC9 = ?, sedesClasesPlanC9 = ?, catDocPlanC9 = ?, dedDocPlanC9 = ?, clasesPlanC9 = ?, otrasActPlanC9 = ?, totHorSemPlanC9 = ?, rzaInvPlanC9 = ?, enDinaPlanC9 = ?, perAcadPlanC9 = ?, comPlanC9 = ? WHERE idplanc9 = ?";

  const ELIMINAR_PLANC9 = "DELETE FROM planc9 WHERE idplanc9 = ?";

  const CONSULTAR_PLANC9 = "SELECT * FROM planc9 ORDER BY numPlanC9";

  const CONSULTAR_PLANC9_POR_NUMPLANC9PLANC9 = "SELECT * FROM planc9 WHERE numPlanC9planc9 = ?";

  const CONSULTAR_PLANC9_POR_APE1PLANC9 = "SELECT * FROM planc9 WHERE UPPER(ape1PlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_APE1PLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(ape1PlanC9planc9) LIKE UPPER(?) ORDER BY ape1PlanC9planc9";

  const CONSULTAR_PLANC9_POR_APE2PLANC9 = "SELECT * FROM planc9 WHERE UPPER(ape2PlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_APE2PLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(ape2PlanC9planc9) LIKE UPPER(?) ORDER BY ape2PlanC9planc9";

  const CONSULTAR_PLANC9_POR_NOM1PLANC9 = "SELECT * FROM planc9 WHERE UPPER(nom1PlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_NOM1PLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(nom1PlanC9planc9) LIKE UPPER(?) ORDER BY nom1PlanC9planc9";

  const CONSULTAR_PLANC9_POR_NACPLANC9 = "SELECT * FROM planc9 WHERE UPPER(nacPlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_NACPLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(nacPlanC9planc9) LIKE UPPER(?) ORDER BY nacPlanC9planc9";

  const CONSULTAR_PLANC9_POR_DNIPLANC9 = "SELECT * FROM planc9 WHERE UPPER(dniPlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_DNIPLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(dniPlanC9planc9) LIKE UPPER(?) ORDER BY dniPlanC9planc9";

  const CONSULTAR_PLANC9_POR_FECINGPLANC9 = "SELECT * FROM planc9 WHERE fecIngPlanC9planc9 = ?";

  const CONSULTAR_PLANC9_POR_ERADOCPLANC9 = "SELECT * FROM planc9 WHERE UPPER(eraDocPlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_ERADOCPLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(eraDocPlanC9planc9) LIKE UPPER(?) ORDER BY eraDocPlanC9planc9";

  const CONSULTAR_PLANC9_POR_INCDESPPLANC9 = "SELECT * FROM planc9 WHERE UPPER(incDespPlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_INCDESPPLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(incDespPlanC9planc9) LIKE UPPER(?) ORDER BY incDespPlanC9planc9";

  const CONSULTAR_PLANC9_POR_GDOACADPLANC9 = "SELECT * FROM planc9 WHERE UPPER(gdoAcadPlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_GDOACADPLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(gdoAcadPlanC9planc9) LIKE UPPER(?) ORDER BY gdoAcadPlanC9planc9";

  const CONSULTAR_PLANC9_POR_MENCPLANC9 = "SELECT * FROM planc9 WHERE UPPER(mencPlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_MENCPLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(mencPlanC9planc9) LIKE UPPER(?) ORDER BY mencPlanC9planc9";

  const CONSULTAR_PLANC9_POR_UNIVMAYGPLANC9 = "SELECT * FROM planc9 WHERE UPPER(univMayGPlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_UNIVMAYGPLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(univMayGPlanC9planc9) LIKE UPPER(?) ORDER BY univMayGPlanC9planc9";

  const CONSULTAR_PLANC9_POR_PAISPLANC9 = "SELECT * FROM planc9 WHERE UPPER(paisPlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_PAISPLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(paisPlanC9planc9) LIKE UPPER(?) ORDER BY paisPlanC9planc9";

  const CONSULTAR_PLANC9_POR_PREGPLANC9 = "SELECT * FROM planc9 WHERE UPPER(preGPlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_PREGPLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(preGPlanC9planc9) LIKE UPPER(?) ORDER BY preGPlanC9planc9";

  const CONSULTAR_PLANC9_POR_MAEPLANC9 = "SELECT * FROM planc9 WHERE UPPER(maePlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_MAEPLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(maePlanC9planc9) LIKE UPPER(?) ORDER BY maePlanC9planc9";

  const CONSULTAR_PLANC9_POR_DOCPLANC9 = "SELECT * FROM planc9 WHERE UPPER(docPlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_DOCPLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(docPlanC9planc9) LIKE UPPER(?) ORDER BY docPlanC9planc9";

  const CONSULTAR_PLANC9_POR_SEDESCLASESPLANC9 = "SELECT * FROM planc9 WHERE UPPER(sedesClasesPlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_SEDESCLASESPLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(sedesClasesPlanC9planc9) LIKE UPPER(?) ORDER BY sedesClasesPlanC9planc9";

  const CONSULTAR_PLANC9_POR_CATDOCPLANC9 = "SELECT * FROM planc9 WHERE UPPER(catDocPlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_CATDOCPLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(catDocPlanC9planc9) LIKE UPPER(?) ORDER BY catDocPlanC9planc9";

  const CONSULTAR_PLANC9_POR_DEDDOCPLANC9 = "SELECT * FROM planc9 WHERE UPPER(dedDocPlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_DEDDOCPLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(dedDocPlanC9planc9) LIKE UPPER(?) ORDER BY dedDocPlanC9planc9";

  const CONSULTAR_PLANC9_POR_CLASESPLANC9 = "SELECT * FROM planc9 WHERE UPPER(clasesPlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_CLASESPLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(clasesPlanC9planc9) LIKE UPPER(?) ORDER BY clasesPlanC9planc9";

  const CONSULTAR_PLANC9_POR_OTRASACTPLANC9 = "SELECT * FROM planc9 WHERE UPPER(otrasActPlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_OTRASACTPLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(otrasActPlanC9planc9) LIKE UPPER(?) ORDER BY otrasActPlanC9planc9";

  const CONSULTAR_PLANC9_POR_TOTHORSEMPLANC9 = "SELECT * FROM planc9 WHERE UPPER(totHorSemPlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_TOTHORSEMPLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(totHorSemPlanC9planc9) LIKE UPPER(?) ORDER BY totHorSemPlanC9planc9";

  const CONSULTAR_PLANC9_POR_RZAINVPLANC9 = "SELECT * FROM planc9 WHERE UPPER(rzaInvPlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_RZAINVPLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(rzaInvPlanC9planc9) LIKE UPPER(?) ORDER BY rzaInvPlanC9planc9";

  const CONSULTAR_PLANC9_POR_ENDINAPLANC9 = "SELECT * FROM planc9 WHERE UPPER(enDinaPlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_ENDINAPLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(enDinaPlanC9planc9) LIKE UPPER(?) ORDER BY enDinaPlanC9planc9";

  const CONSULTAR_PLANC9_POR_PERACADPLANC9 = "SELECT * FROM planc9 WHERE UPPER(perAcadPlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_PERACADPLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(perAcadPlanC9planc9) LIKE UPPER(?) ORDER BY perAcadPlanC9planc9";

  const CONSULTAR_PLANC9_POR_COMPLANC9 = "SELECT * FROM planc9 WHERE UPPER(comPlanC9planc9) = UPPER(?)";

  const CONSULTAR_PLANC9_POR_COMPLANC9_APROX = "SELECT * FROM planc9 WHERE UPPER(comPlanC9planc9) LIKE UPPER(?) ORDER BY comPlanC9planc9";

}
?>