<?php 
/** 
 * @file SQLEstudiante.php 
 *  
 * Consultas SQL de la Tabla Estudiante 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/11/2021
 *  
*/ 
class SQLEstudiante 
{ 
  const AGREGAR_ESTUDIANTE = "INSERT INTO Estudiante (idEstudiante, IDPERSONA, idPeriodo, idSede, idProgEstudio) VALUES (?, ?, ?, ?, ?) ";

  const ACTUALIZAR_ESTUDIANTE = "UPDATE Estudiante SET idEstudiante = ?, IDPERSONA = ?, idPeriodo = ?, idSede = ?, idProgEstudio = ? WHERE idEstudiante = ?";

  const ELIMINAR_ESTUDIANTE = "DELETE FROM Estudiante WHERE idEstudiante = ?";

  const CONSULTAR_ESTUDIANTE = "SELECT * FROM Estudiante ORDER BY idEstudiante";

  const CONSULTAR_ESTUDIANTE_POR_IDESTUDIANTE = "SELECT * FROM Estudiante WHERE idEstudiante = ?";

  const CONSULTAR_ESTUDIANTE_POR_IDPERSONA = "SELECT * FROM Estudiante WHERE IDPERSONAEstudiante = ?";

  const CONSULTAR_ESTUDIANTE_POR_IDPERIODO = "SELECT * FROM Estudiante WHERE idPeriodoEstudiante = ?";

  const CONSULTAR_ESTUDIANTE_POR_IDSEDE = "SELECT * FROM Estudiante WHERE idSedeEstudiante = ?";

  const CONSULTAR_ESTUDIANTE_POR_IDPROGESTUDIO = "SELECT * FROM Estudiante WHERE idProgEstudioEstudiante = ?";

}
?>