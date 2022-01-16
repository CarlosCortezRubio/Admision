<?php 
/** 
 * @file SQLConcPlanilla.php 
 *  
 * Consultas SQL de la Tabla concplanilla 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 22/10/2021
 *  
*/ 
class SQLConcPlanilla 
{ 
  const AGREGAR_CONCPLANILLA = "INSERT INTO concplanilla (idConcPlanilla, idConceptos, idplanillaPensionado, mntConcPlanilla) VALUES (?, ?, ?, ?) ";

  const ACTUALIZAR_CONCPLANILLA = "UPDATE concplanilla SET idConcPlanilla = ?, idConceptos = ?, idplanillaPensionado = ?, mntConcPlanilla = ? WHERE idConcPlanilla = ?";

  const ELIMINAR_CONCPLANILLA = "DELETE FROM concplanilla WHERE idConcPlanilla = ?";

  const ELIMINAR_CONCPLANILLA_POR_ID_PLANILLA_PENSIONADO = "DELETE FROM concplanilla WHERE idplanillaPensionado = ?";

  const CONSULTAR_CONCPLANILLA = "SELECT * FROM concplanilla ORDER BY idConcPlanilla";

  const CONSULTAR_CONCPLANILLA_POR_IDCONCPLANILLA = "SELECT * FROM concplanilla WHERE idConcPlanilla = ?";

  const CONSULTAR_CONCPLANILLA_POR_IDCONCEPTOS = "SELECT * FROM concplanilla WHERE idConceptosConcPlanilla = ?";

  const CONSULTAR_CONCPLANILLA_POR_IDPLANILLAPENSIONADO = "SELECT * FROM concplanilla WHERE idplanillaPensionadoConcPlanilla = ?";

  const CONSULTAR_CONCPLANILLA_POR_MNT = "SELECT * FROM concplanilla WHERE mntConcPlanilla = ?";

}
?>