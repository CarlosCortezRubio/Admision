<?php 
/** 
 * @file SQLNivelOrigen.php 
 *  
 * Consultas SQL de la Tabla NivelOrigen 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLNivelOrigen 
{ 
  const AGREGAR_NIVELORIGEN = "INSERT INTO NivelOrigen (idNivelOrigen, codNivelOrigen, nomNivelOrigen) VALUES (?, ?, ?) ";

  const ACTUALIZAR_NIVELORIGEN = "UPDATE NivelOrigen SET idNivelOrigen = ?, codNivelOrigen = ?, nomNivelOrigen = ? WHERE idNivelOrigen = ?";

  const ELIMINAR_NIVELORIGEN = "DELETE FROM NivelOrigen WHERE idNivelOrigen = ?";

  const CONSULTAR_NIVELORIGEN = "SELECT * FROM NivelOrigen ORDER BY idNivelOrigen";

  const CONSULTAR_NIVELORIGEN_POR_IDNIVELORIGEN = "SELECT * FROM NivelOrigen WHERE idNivelOrigen = ?";

  const CONSULTAR_NIVELORIGEN_POR_COD = "SELECT * FROM NivelOrigen WHERE UPPER(codNivelOrigen) = UPPER(?)";

  const CONSULTAR_NIVELORIGEN_POR_COD_APROX = "SELECT * FROM NivelOrigen WHERE UPPER(codNivelOrigen) LIKE UPPER(?) ORDER BY codNivelOrigen";

  const CONSULTAR_NIVELORIGEN_POR_NOM = "SELECT * FROM NivelOrigen WHERE UPPER(nomNivelOrigen) = UPPER(?)";

  const CONSULTAR_NIVELORIGEN_POR_NOM_APROX = "SELECT * FROM NivelOrigen WHERE UPPER(nomNivelOrigen) LIKE UPPER(?) ORDER BY nomNivelOrigen";

}
?>