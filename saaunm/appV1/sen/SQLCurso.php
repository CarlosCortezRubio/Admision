<?php 
/** 
 * @file SQLCurso.php 
 *  
 * Consultas SQL de la Tabla Curso 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/11/2021
 *  
*/ 
class SQLCurso 
{ 
  const AGREGAR_CURSO = "INSERT INTO Curso (idCurso, idPeriodo, idProgEstudio, idEdoRegistro, idEmpleado, idPensum, idAsignatura, codCurso, nomCurso, cupMaxCurso, fecIniCurso, fecFinCurso) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";

  const ACTUALIZAR_CURSO = "UPDATE Curso SET idCurso = ?, idPeriodo = ?, idProgEstudio = ?, idEdoRegistro = ?, idEmpleado = ?, idPensum = ?, idAsignatura = ?, codCurso = ?, nomCurso = ?, cupMaxCurso = ?, fecIniCurso = ?, fecFinCurso = ? WHERE idCurso = ?";

  const ELIMINAR_CURSO = "DELETE FROM Curso WHERE idCurso = ?";

  const CONSULTAR_CURSO = "SELECT * FROM Curso ORDER BY idCurso";

  const CONSULTAR_CURSO_POR_IDCURSO = "SELECT * FROM Curso WHERE idCurso = ?";

  const CONSULTAR_CURSO_POR_IDPERIODO = "SELECT * FROM Curso WHERE idPeriodoCurso = ?";

  const CONSULTAR_CURSO_POR_IDPROGESTUDIO = "SELECT * FROM Curso WHERE idProgEstudioCurso = ?";

  const CONSULTAR_CURSO_POR_IDEDOREGISTRO = "SELECT * FROM Curso WHERE idEdoRegistroCurso = ?";

  const CONSULTAR_CURSO_POR_IDEMPLEADO = "SELECT * FROM Curso WHERE idEmpleadoCurso = ?";

  const CONSULTAR_CURSO_POR_IDPENSUM = "SELECT * FROM Curso WHERE idPensumCurso = ?";

  const CONSULTAR_CURSO_POR_IDASIGNATURA = "SELECT * FROM Curso WHERE idAsignaturaCurso = ?";

  const CONSULTAR_CURSO_POR_COD = "SELECT * FROM Curso WHERE UPPER(codCurso) = UPPER(?)";

  const CONSULTAR_CURSO_POR_COD_APROX = "SELECT * FROM Curso WHERE UPPER(codCurso) LIKE UPPER(?) ORDER BY codCurso";

  const CONSULTAR_CURSO_POR_NOM = "SELECT * FROM Curso WHERE UPPER(nomCurso) = UPPER(?)";

  const CONSULTAR_CURSO_POR_NOM_APROX = "SELECT * FROM Curso WHERE UPPER(nomCurso) LIKE UPPER(?) ORDER BY nomCurso";

  const CONSULTAR_CURSO_POR_CUPMAX = "SELECT * FROM Curso WHERE cupMaxCurso = ?";

  const CONSULTAR_CURSO_POR_FECINI = "SELECT * FROM Curso WHERE fecIniCurso = ?";

  const CONSULTAR_CURSO_POR_FECFIN = "SELECT * FROM Curso WHERE fecFinCurso = ?";

}
?>