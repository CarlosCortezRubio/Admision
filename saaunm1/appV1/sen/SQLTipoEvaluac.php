<?php 
/** 
 * @file SQLTipoEvaluac.php 
 *  
 * Consultas SQL de la Tabla TipoEvaluac 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/11/2021
 *  
*/ 
class SQLTipoEvaluac 
{ 
  const AGREGAR_TIPOEVALUAC = "INSERT INTO TipoEvaluac (idTipoEvaluac, nomTipoEvaluac) VALUES (?, ?) ";

  const ACTUALIZAR_TIPOEVALUAC = "UPDATE TipoEvaluac SET idTipoEvaluac = ?, nomTipoEvaluac = ? WHERE idTipoEvaluac = ?";

  const ELIMINAR_TIPOEVALUAC = "DELETE FROM TipoEvaluac WHERE idTipoEvaluac = ?";

  const CONSULTAR_TIPOEVALUAC = "SELECT * FROM TipoEvaluac ORDER BY idTipoEvaluac";

  const CONSULTAR_TIPOEVALUAC_POR_IDTIPOEVALUAC = "SELECT * FROM TipoEvaluac WHERE idTipoEvaluac = ?";

  const CONSULTAR_TIPOEVALUAC_POR_NOM = "SELECT * FROM TipoEvaluac WHERE UPPER(nomTipoEvaluac) = UPPER(?)";

  const CONSULTAR_TIPOEVALUAC_POR_NOM_APROX = "SELECT * FROM TipoEvaluac WHERE UPPER(nomTipoEvaluac) LIKE UPPER(?) ORDER BY nomTipoEvaluac";

}
?>