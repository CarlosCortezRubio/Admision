<?php 
/** 
 * @file SQLEstudiante.php 
 *  
 * Consultas SQL de la Tabla Estudiante 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
class SQLEstudiante 
{ 
  const AGREGAR_ESTUDIANTE = "INSERT INTO Estudiante (idEstudiante, idEdoRegistro) VALUES (?, ?) ";

  const ACTUALIZAR_ESTUDIANTE = "UPDATE Estudiante SET idEstudiante = ?, idEdoRegistro = ? WHERE idEstudiante = ?";

  const ELIMINAR_ESTUDIANTE = "DELETE FROM Estudiante WHERE idEstudiante = ?";

  const CONSULTAR_ESTUDIANTE = "SELECT * FROM Estudiante ORDER BY idEstudiante";

  const CONSULTAR_ESTUDIANTE_POR_IDESTUDIANTE = "SELECT * FROM Estudiante WHERE idEstudiante = ?";

  const CONSULTAR_ESTUDIANTE_POR_IDEDOREGISTRO = "SELECT * FROM Estudiante WHERE idEdoRegistroEstudiante = ?";

}
?>