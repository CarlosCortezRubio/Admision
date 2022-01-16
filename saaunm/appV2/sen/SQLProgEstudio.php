<?php 
/** 
 * @file SQLProgEstudio.php 
 *  
 * Consultas SQL de la Tabla ProgEstudio 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
class SQLProgEstudio 
{ 
  const AGREGAR_PROGESTUDIO = "INSERT INTO ProgEstudio (idProgEstudio, codProgEstudio, nomProgEstudio, nomCortoProgEstudio, numResAutoProgEstudio, fecResAutoProgEstudio, preInscProgEstudio, gpoProgEstudio, numResRevaProgEstudio, fecResRevaProgEstudio) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";

  const ACTUALIZAR_PROGESTUDIO = "UPDATE ProgEstudio SET idProgEstudio = ?, codProgEstudio = ?, nomProgEstudio = ?, nomCortoProgEstudio = ?, numResAutoProgEstudio = ?, fecResAutoProgEstudio = ?, preInscProgEstudio = ?, gpoProgEstudio = ?, numResRevaProgEstudio = ?, fecResRevaProgEstudio = ? WHERE idProgEstudio = ?";

  const ELIMINAR_PROGESTUDIO = "DELETE FROM ProgEstudio WHERE idProgEstudio = ?";

  const CONSULTAR_PROGESTUDIO = "SELECT * FROM ProgEstudio ORDER BY idProgEstudio";

  const CONSULTAR_PROGESTUDIO_POR_IDPROGESTUDIO = "SELECT * FROM ProgEstudio WHERE idProgEstudio = ?";

  const CONSULTAR_PROGESTUDIO_POR_COD = "SELECT * FROM ProgEstudio WHERE UPPER(codProgEstudio) = UPPER(?)";

  const CONSULTAR_PROGESTUDIO_POR_COD_APROX = "SELECT * FROM ProgEstudio WHERE UPPER(codProgEstudio) LIKE UPPER(?) ORDER BY codProgEstudio";

  const CONSULTAR_PROGESTUDIO_POR_NOM = "SELECT * FROM ProgEstudio WHERE UPPER(nomProgEstudio) = UPPER(?)";

  const CONSULTAR_PROGESTUDIO_POR_NOM_APROX = "SELECT * FROM ProgEstudio WHERE UPPER(nomProgEstudio) LIKE UPPER(?) ORDER BY nomProgEstudio";

  const CONSULTAR_PROGESTUDIO_POR_NOMCORTO = "SELECT * FROM ProgEstudio WHERE UPPER(nomCortoProgEstudio) = UPPER(?)";

  const CONSULTAR_PROGESTUDIO_POR_NOMCORTO_APROX = "SELECT * FROM ProgEstudio WHERE UPPER(nomCortoProgEstudio) LIKE UPPER(?) ORDER BY nomCortoProgEstudio";

  const CONSULTAR_PROGESTUDIO_POR_NUMRESAUTO = "SELECT * FROM ProgEstudio WHERE UPPER(numResAutoProgEstudio) = UPPER(?)";

  const CONSULTAR_PROGESTUDIO_POR_NUMRESAUTO_APROX = "SELECT * FROM ProgEstudio WHERE UPPER(numResAutoProgEstudio) LIKE UPPER(?) ORDER BY numResAutoProgEstudio";

  const CONSULTAR_PROGESTUDIO_POR_FECRESAUTO = "SELECT * FROM ProgEstudio WHERE fecResAutoProgEstudio = ?";

  const CONSULTAR_PROGESTUDIO_POR_PREINSC = "SELECT * FROM ProgEstudio WHERE preInscProgEstudio = ?";

  const CONSULTAR_PROGESTUDIO_POR_GPO = "SELECT * FROM ProgEstudio WHERE gpoProgEstudio = ?";

  const CONSULTAR_PROGESTUDIO_POR_NUMRESREVA = "SELECT * FROM ProgEstudio WHERE UPPER(numResRevaProgEstudio) = UPPER(?)";

  const CONSULTAR_PROGESTUDIO_POR_NUMRESREVA_APROX = "SELECT * FROM ProgEstudio WHERE UPPER(numResRevaProgEstudio) LIKE UPPER(?) ORDER BY numResRevaProgEstudio";

  const CONSULTAR_PROGESTUDIO_POR_FECRESREVA = "SELECT * FROM ProgEstudio WHERE fecResRevaProgEstudio = ?";

}
?>