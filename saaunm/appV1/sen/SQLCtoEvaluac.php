<?php 
/** 
 * @file SQLCtoEvaluac.php 
 *  
 * Consultas SQL de la Tabla CtoEvaluac 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 27/11/2021
 *  
*/ 
class SQLCtoEvaluac 
{ 
  const AGREGAR_CTOEVALUAC = "INSERT INTO CtoEvaluac (idCtoEvaluac, idCurso, nomCtoEvaluac, descCtoEvaluac, numEvaCtoEvaluac) VALUES (?, ?, ?, ?, ?) ";

  const ACTUALIZAR_CTOEVALUAC = "UPDATE CtoEvaluac SET idCtoEvaluac = ?, idCurso = ?, nomCtoEvaluac = ?, descCtoEvaluac = ?, numEvaCtoEvaluac = ? WHERE idCtoEvaluac = ?";

  const ELIMINAR_CTOEVALUAC = "DELETE FROM CtoEvaluac WHERE idCtoEvaluac = ?";

  const CONSULTAR_CTOEVALUAC = "SELECT * FROM CtoEvaluac ORDER BY idCtoEvaluac";

  const CONSULTAR_CTOEVALUAC_POR_IDCTOEVALUAC = "SELECT * FROM CtoEvaluac WHERE idCtoEvaluac = ?";

  const CONSULTAR_CTOEVALUAC_POR_IDCURSO = "SELECT * FROM CtoEvaluac WHERE idCursoCtoEvaluac = ?";

  const CONSULTAR_CTOEVALUAC_POR_NOM = "SELECT * FROM CtoEvaluac WHERE UPPER(nomCtoEvaluac) = UPPER(?)";

  const CONSULTAR_CTOEVALUAC_POR_NOM_APROX = "SELECT * FROM CtoEvaluac WHERE UPPER(nomCtoEvaluac) LIKE UPPER(?) ORDER BY nomCtoEvaluac";

  const CONSULTAR_CTOEVALUAC_POR_DESC = "SELECT * FROM CtoEvaluac WHERE UPPER(descCtoEvaluac) = UPPER(?)";

  const CONSULTAR_CTOEVALUAC_POR_DESC_APROX = "SELECT * FROM CtoEvaluac WHERE UPPER(descCtoEvaluac) LIKE UPPER(?) ORDER BY descCtoEvaluac";

  const CONSULTAR_CTOEVALUAC_POR_NUMEVA = "SELECT * FROM CtoEvaluac WHERE numEvaCtoEvaluac = ?";

}
?>