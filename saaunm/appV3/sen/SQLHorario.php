<?php 
/** 
 * @file SQLHorario.php 
 *  
 * Consultas SQL de la Tabla Horario 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
class SQLHorario 
{ 
  const AGREGAR_HORARIO = "INSERT INTO Horario (idHorario, idDia, idAula, idCurso, horIniHorario, horFinHorario) VALUES (?, ?, ?, ?, ?, ?) ";

  const ACTUALIZAR_HORARIO = "UPDATE Horario SET idHorario = ?, idDia = ?, idAula = ?, idCurso = ?, horIniHorario = ?, horFinHorario = ? WHERE idHorario = ?";

  const ELIMINAR_HORARIO = "DELETE FROM Horario WHERE idHorario = ?";

  const CONSULTAR_HORARIO = "SELECT * FROM Horario ORDER BY idHorario";

  const CONSULTAR_HORARIO_POR_IDHORARIO = "SELECT * FROM Horario WHERE idHorario = ?";

  const CONSULTAR_HORARIO_POR_IDDIA = "SELECT * FROM Horario WHERE idDiaHorario = ?";

  const CONSULTAR_HORARIO_POR_IDAULA = "SELECT * FROM Horario WHERE idAulaHorario = ?";

  const CONSULTAR_HORARIO_POR_IDCURSO = "SELECT * FROM Horario WHERE idCursoHorario = ?";

  const CONSULTAR_HORARIO_POR_HORINI = "SELECT * FROM Horario WHERE UPPER(horIniHorario) = UPPER(?)";

  const CONSULTAR_HORARIO_POR_HORINI_APROX = "SELECT * FROM Horario WHERE UPPER(horIniHorario) LIKE UPPER(?) ORDER BY horIniHorario";

  const CONSULTAR_HORARIO_POR_HORFIN = "SELECT * FROM Horario WHERE UPPER(horFinHorario) = UPPER(?)";

  const CONSULTAR_HORARIO_POR_HORFIN_APROX = "SELECT * FROM Horario WHERE UPPER(horFinHorario) LIKE UPPER(?) ORDER BY horFinHorario";

}
?>