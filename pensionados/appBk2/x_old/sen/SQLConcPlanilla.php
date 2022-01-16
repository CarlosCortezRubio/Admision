<?php 
/** 
 * @file SQLConcPlanilla.php 
 *  
 * Consultas SQL de la Tabla ConcPlanilla 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 22/10/2021
 *  
*/ 
class SQLConcPlanilla 
{ 
  const AGREGAR_CONCPLANILLA = "INSERT INTO ConcPlanilla (idConcPlanilla, idConceptos, idplanillaPensionado, mntConcPlanilla) VALUES (?, ?, ?, ?) ";

  const ACTUALIZAR_CONCPLANILLA = "UPDATE ConcPlanilla SET idConcPlanilla = ?, idConceptos = ?, idplanillaPensionado = ?, mntConcPlanilla = ? WHERE idConcPlanilla = ?";

  const ELIMINAR_CONCPLANILLA = "DELETE FROM ConcPlanilla WHERE idConcPlanilla = ?";

  const ELIMINAR_CONCPLANILLA_POR_ID_PLANILLA_PENSIONADO = "DELETE FROM ConcPlanilla WHERE idplanillaPensionado = ?";

  const CONSULTAR_CONCPLANILLA = "SELECT * FROM ConcPlanilla ORDER BY idConcPlanilla";

  const CONSULTAR_CONCPLANILLA_POR_IDCONCPLANILLA = "SELECT * FROM ConcPlanilla WHERE idConcPlanilla = ?";

  const CONSULTAR_CONCPLANILLA_POR_IDCONCEPTOS = "SELECT * FROM ConcPlanilla WHERE idConceptosConcPlanilla = ?";

  const CONSULTAR_CONCPLANILLA_POR_IDPLANILLAPENSIONADO = "SELECT * FROM ConcPlanilla WHERE idplanillaPensionadoConcPlanilla = ?";

  const CONSULTAR_CONCPLANILLA_POR_MNT = "SELECT * FROM ConcPlanilla WHERE mntConcPlanilla = ?";

}
?>