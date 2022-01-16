<?php 
/** 
 * @file SQLEstCur.php 
 *  
 * Consultas SQL de la Tabla EstCur 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
class SQLEstCur 
{ 
  const AGREGAR_ESTCUR = "INSERT INTO EstCur (idEstCur, idCurso, idEstudiante, notaEstCur, inasistEstCur, obsEstCur) VALUES (?, ?, ?, ?, ?, ?) ";

  const ACTUALIZAR_ESTCUR = "UPDATE EstCur SET idEstCur = ?, idCurso = ?, idEstudiante = ?, notaEstCur = ?, inasistEstCur = ?, obsEstCur = ? WHERE idEstCur = ?";

  const ELIMINAR_ESTCUR = "DELETE FROM EstCur WHERE idEstCur = ?";

  const CONSULTAR_ESTCUR = "SELECT * FROM EstCur ORDER BY idEstCur";

  const CONSULTAR_ESTCUR_POR_IDESTCUR = "SELECT * FROM EstCur WHERE idEstCur = ?";

  const CONSULTAR_ESTCUR_POR_IDCURSO = "SELECT * FROM EstCur WHERE idCursoEstCur = ?";

  const CONSULTAR_ESTCUR_POR_IDESTUDIANTE = "SELECT * FROM EstCur WHERE idEstudianteEstCur = ?";

  const CONSULTAR_ESTCUR_POR_NOTA = "SELECT * FROM EstCur WHERE notaEstCur = ?";

  const CONSULTAR_ESTCUR_POR_INASIST = "SELECT * FROM EstCur WHERE inasistEstCur = ?";

  const CONSULTAR_ESTCUR_POR_OBS = "SELECT * FROM EstCur WHERE UPPER(obsEstCur) = UPPER(?)";

  const CONSULTAR_ESTCUR_POR_OBS_APROX = "SELECT * FROM EstCur WHERE UPPER(obsEstCur) LIKE UPPER(?) ORDER BY obsEstCur";

}
?>