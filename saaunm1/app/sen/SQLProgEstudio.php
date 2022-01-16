<?php 
/** 
 * @file SQLProgEstudio.php 
 *  
 * Consultas SQL de la Tabla ProgEstudio 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/11/2021
 *  
*/ 
class SQLProgEstudio 
{ 
  const AGREGAR_PROGESTUDIO = "INSERT INTO ProgEstudio (idProgEstudio, idEmpleado, codProgEstudio, nomProgEstudio, numResProgEstudio, fecResProgEstudio, aplPreinscProgEstudio, aplGrupoProgEstudio, numResRevProgEstudio, fecResRevProgEstudio) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";

  const ACTUALIZAR_PROGESTUDIO = "UPDATE ProgEstudio SET idProgEstudio = ?, idEmpleado = ?, codProgEstudio = ?, nomProgEstudio = ?, numResProgEstudio = ?, fecResProgEstudio = ?, aplPreinscProgEstudio = ?, aplGrupoProgEstudio = ?, numResRevProgEstudio = ?, fecResRevProgEstudio = ? WHERE idProgEstudio = ?";

  const ELIMINAR_PROGESTUDIO = "DELETE FROM ProgEstudio WHERE idProgEstudio = ?";

  const CONSULTAR_PROGESTUDIO = "SELECT * FROM ProgEstudio ORDER BY idProgEstudio";

  const CONSULTAR_PROGESTUDIO_POR_IDPROGESTUDIO = "SELECT * FROM ProgEstudio WHERE idProgEstudio = ?";

  const CONSULTAR_PROGESTUDIO_POR_IDEMPLEADO = "SELECT * FROM ProgEstudio WHERE idEmpleadoProgEstudio = ?";

  const CONSULTAR_PROGESTUDIO_POR_COD = "SELECT * FROM ProgEstudio WHERE UPPER(codProgEstudio) = UPPER(?)";

  const CONSULTAR_PROGESTUDIO_POR_COD_APROX = "SELECT * FROM ProgEstudio WHERE UPPER(codProgEstudio) LIKE UPPER(?) ORDER BY codProgEstudio";

  const CONSULTAR_PROGESTUDIO_POR_NOM = "SELECT * FROM ProgEstudio WHERE UPPER(nomProgEstudio) = UPPER(?)";

  const CONSULTAR_PROGESTUDIO_POR_NOM_APROX = "SELECT * FROM ProgEstudio WHERE UPPER(nomProgEstudio) LIKE UPPER(?) ORDER BY nomProgEstudio";

  const CONSULTAR_PROGESTUDIO_POR_NUMRES = "SELECT * FROM ProgEstudio WHERE UPPER(numResProgEstudio) = UPPER(?)";

  const CONSULTAR_PROGESTUDIO_POR_NUMRES_APROX = "SELECT * FROM ProgEstudio WHERE UPPER(numResProgEstudio) LIKE UPPER(?) ORDER BY numResProgEstudio";

  const CONSULTAR_PROGESTUDIO_POR_FECRES = "SELECT * FROM ProgEstudio WHERE fecResProgEstudio = ?";

  const CONSULTAR_PROGESTUDIO_POR_APLPREINSC = "SELECT * FROM ProgEstudio WHERE aplPreinscProgEstudio = ?";

  const CONSULTAR_PROGESTUDIO_POR_APLGRUPO = "SELECT * FROM ProgEstudio WHERE aplGrupoProgEstudio = ?";

  const CONSULTAR_PROGESTUDIO_POR_NUMRESREV = "SELECT * FROM ProgEstudio WHERE UPPER(numResRevProgEstudio) = UPPER(?)";

  const CONSULTAR_PROGESTUDIO_POR_NUMRESREV_APROX = "SELECT * FROM ProgEstudio WHERE UPPER(numResRevProgEstudio) LIKE UPPER(?) ORDER BY numResRevProgEstudio";

  const CONSULTAR_PROGESTUDIO_POR_FECRESREV = "SELECT * FROM ProgEstudio WHERE fecResRevProgEstudio = ?";

}
?>