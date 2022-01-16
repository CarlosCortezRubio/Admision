<?php 
/** 
 * @file SQLAsignatura.php 
 *  
 * Consultas SQL de la Tabla Asignatura 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
class SQLAsignatura 
{ 
  const AGREGAR_ASIGNATURA = "INSERT INTO Asignatura (idAsignatura, idTipoEvaluac, idTipoAsignatura, idEdoRegistro, codAsignatura, nomAsignatura, nomCortoAsignatura, pracLabAsignatura) VALUES (?, ?, ?, ?, ?, ?, ?, ?) ";

  const ACTUALIZAR_ASIGNATURA = "UPDATE Asignatura SET idAsignatura = ?, idTipoEvaluac = ?, idTipoAsignatura = ?, idEdoRegistro = ?, codAsignatura = ?, nomAsignatura = ?, nomCortoAsignatura = ?, pracLabAsignatura = ? WHERE idAsignatura = ?";

  const ELIMINAR_ASIGNATURA = "DELETE FROM Asignatura WHERE idAsignatura = ?";

  const CONSULTAR_ASIGNATURA = "SELECT * FROM Asignatura ORDER BY idAsignatura";

  const CONSULTAR_ASIGNATURA_POR_IDASIGNATURA = "SELECT * FROM Asignatura WHERE idAsignatura = ?";

  const CONSULTAR_ASIGNATURA_POR_IDTIPOEVALUAC = "SELECT * FROM Asignatura WHERE idTipoEvaluacAsignatura = ?";

  const CONSULTAR_ASIGNATURA_POR_IDTIPO = "SELECT * FROM Asignatura WHERE idTipoAsignatura = ?";

  const CONSULTAR_ASIGNATURA_POR_IDEDOREGISTRO = "SELECT * FROM Asignatura WHERE idEdoRegistroAsignatura = ?";

  const CONSULTAR_ASIGNATURA_POR_COD = "SELECT * FROM Asignatura WHERE UPPER(codAsignatura) = UPPER(?)";

  const CONSULTAR_ASIGNATURA_POR_COD_APROX = "SELECT * FROM Asignatura WHERE UPPER(codAsignatura) LIKE UPPER(?) ORDER BY codAsignatura";

  const CONSULTAR_ASIGNATURA_POR_NOM = "SELECT * FROM Asignatura WHERE UPPER(nomAsignatura) = UPPER(?)";

  const CONSULTAR_ASIGNATURA_POR_NOM_APROX = "SELECT * FROM Asignatura WHERE UPPER(nomAsignatura) LIKE UPPER(?) ORDER BY nomAsignatura";

  const CONSULTAR_ASIGNATURA_POR_NOMCORTO = "SELECT * FROM Asignatura WHERE UPPER(nomCortoAsignatura) = UPPER(?)";

  const CONSULTAR_ASIGNATURA_POR_NOMCORTO_APROX = "SELECT * FROM Asignatura WHERE UPPER(nomCortoAsignatura) LIKE UPPER(?) ORDER BY nomCortoAsignatura";

  const CONSULTAR_ASIGNATURA_POR_PRACLAB = "SELECT * FROM Asignatura WHERE pracLabAsignatura = ?";

  const CONSULTAR_DICCIONARIO_POR_PRACLABASIGNATURA = "SELECT cjtovalores FROM diccionario WHERE diccionarioid = ?";

}
?>