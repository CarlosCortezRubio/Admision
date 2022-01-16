<?php 
/** 
 * @file SQLPrelaAsig.php 
 *  
 * Consultas SQL de la Tabla PrelaAsig 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 27/11/2021
 *  
*/ 
class SQLPrelaAsig 
{ 
  const AGREGAR_PRELAASIG = "INSERT INTO PrelaAsig (idPenAsig, idAsignatura, idPrelaAsig) VALUES (?, ?, ?) ";

  const ACTUALIZAR_PRELAASIG = "UPDATE PrelaAsig SET idPenAsig = ?, idAsignatura = ?, idPrelaAsig = ? WHERE idPrelaAsig = ?";

  const ELIMINAR_PRELAASIG = "DELETE FROM PrelaAsig WHERE idPrelaAsig = ?";

  const CONSULTAR_PRELAASIG = "SELECT * FROM PrelaAsig ORDER BY idPenAsig";

  const CONSULTAR_PRELAASIG_POR_IDPENASIGPRELAASIG = "SELECT * FROM PrelaAsig WHERE idPenAsigPrelaAsig = ?";

  const CONSULTAR_PRELAASIG_POR_IDASIGNATURA = "SELECT * FROM PrelaAsig WHERE idAsignaturaPrelaAsig = ?";

  const CONSULTAR_PRELAASIG_POR_ID = "SELECT * FROM PrelaAsig WHERE idPrelaAsig = ?";

}
?>