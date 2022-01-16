<?php 
/** 
 * @file SQLEstCtoEvaluac.php 
 *  
 * Consultas SQL de la Tabla EstCtoEvaluac 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 27/11/2021
 *  
*/ 
class SQLEstCtoEvaluac 
{ 
  const AGREGAR_ESTCTOEVALUAC = "INSERT INTO EstCtoEvaluac (idEstCtoEvaluac, idEstudiante, idCtoEvaluac, notaEstCtoEvaluac) VALUES (?, ?, ?, ?) ";

  const ACTUALIZAR_ESTCTOEVALUAC = "UPDATE EstCtoEvaluac SET idEstCtoEvaluac = ?, idEstudiante = ?, idCtoEvaluac = ?, notaEstCtoEvaluac = ? WHERE idEstCtoEvaluac = ?";

  const ELIMINAR_ESTCTOEVALUAC = "DELETE FROM EstCtoEvaluac WHERE idEstCtoEvaluac = ?";

  const CONSULTAR_ESTCTOEVALUAC = "SELECT * FROM EstCtoEvaluac ORDER BY idEstCtoEvaluac";

  const CONSULTAR_ESTCTOEVALUAC_POR_IDESTCTOEVALUAC = "SELECT * FROM EstCtoEvaluac WHERE idEstCtoEvaluac = ?";

  const CONSULTAR_ESTCTOEVALUAC_POR_IDESTUDIANTE = "SELECT * FROM EstCtoEvaluac WHERE idEstudianteEstCtoEvaluac = ?";

  const CONSULTAR_ESTCTOEVALUAC_POR_IDCTOEVALUAC = "SELECT * FROM EstCtoEvaluac WHERE idCtoEvaluacEstCtoEvaluac = ?";

  const CONSULTAR_ESTCTOEVALUAC_POR_NOTA = "SELECT * FROM EstCtoEvaluac WHERE notaEstCtoEvaluac = ?";

}
?>