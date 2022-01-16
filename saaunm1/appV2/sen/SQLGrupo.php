<?php 
/** 
 * @file SQLGrupo.php 
 *  
 * Consultas SQL de la Tabla Grupo 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/11/2021
 *  
*/ 
class SQLGrupo 
{ 
  const AGREGAR_GRUPO = "INSERT INTO Grupo (idGrupo, idCiclo, idPensum, idPeriodo, idProgEstudio, idEmpleado, idSede, nomGrupo, codGrupo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?) ";

  const ACTUALIZAR_GRUPO = "UPDATE Grupo SET idGrupo = ?, idCiclo = ?, idPensum = ?, idPeriodo = ?, idProgEstudio = ?, idEmpleado = ?, idSede = ?, nomGrupo = ?, codGrupo = ? WHERE idGrupo = ?";

  const ELIMINAR_GRUPO = "DELETE FROM Grupo WHERE idGrupo = ?";

  const CONSULTAR_GRUPO = "SELECT * FROM Grupo ORDER BY idGrupo";

  const CONSULTAR_GRUPO_POR_IDGRUPO = "SELECT * FROM Grupo WHERE idGrupo = ?";

  const CONSULTAR_GRUPO_POR_IDCICLO = "SELECT * FROM Grupo WHERE idCicloGrupo = ?";

  const CONSULTAR_GRUPO_POR_IDPENSUM = "SELECT * FROM Grupo WHERE idPensumGrupo = ?";

  const CONSULTAR_GRUPO_POR_IDPERIODO = "SELECT * FROM Grupo WHERE idPeriodoGrupo = ?";

  const CONSULTAR_GRUPO_POR_IDPROGESTUDIO = "SELECT * FROM Grupo WHERE idProgEstudioGrupo = ?";

  const CONSULTAR_GRUPO_POR_IDEMPLEADO = "SELECT * FROM Grupo WHERE idEmpleadoGrupo = ?";

  const CONSULTAR_GRUPO_POR_IDSEDE = "SELECT * FROM Grupo WHERE idSedeGrupo = ?";

  const CONSULTAR_GRUPO_POR_NOM = "SELECT * FROM Grupo WHERE UPPER(nomGrupo) = UPPER(?)";

  const CONSULTAR_GRUPO_POR_NOM_APROX = "SELECT * FROM Grupo WHERE UPPER(nomGrupo) LIKE UPPER(?) ORDER BY nomGrupo";

  const CONSULTAR_GRUPO_POR_COD = "SELECT * FROM Grupo WHERE UPPER(codGrupo) = UPPER(?)";

  const CONSULTAR_GRUPO_POR_COD_APROX = "SELECT * FROM Grupo WHERE UPPER(codGrupo) LIKE UPPER(?) ORDER BY codGrupo";

}
?>