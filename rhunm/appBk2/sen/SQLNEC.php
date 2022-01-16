<?php 
/** 
 * @file SQLNEC.php 
 *  
 * Consultas SQL de la Tabla NEC 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLNEC 
{ 
  const AGREGAR_NEC = "INSERT INTO nec (idNEC, codNEC, nomNEC) VALUES (?, ?, ?) ";

  const ACTUALIZAR_NEC = "UPDATE nec SET idNEC = ?, codNEC = ?, nomNEC = ? WHERE idNEC = ?";

  const ELIMINAR_NEC = "DELETE FROM nec WHERE idNEC = ?";

  const CONSULTAR_NEC = "SELECT * FROM nec ORDER BY idNEC";

  const CONSULTAR_NEC_POR_IDNEC = "SELECT * FROM nec WHERE idNEC = ?";

  const CONSULTAR_NEC_POR_COD = "SELECT * FROM nec WHERE UPPER(codNEC) = UPPER(?)";

  const CONSULTAR_NEC_POR_COD_APROX = "SELECT * FROM nec WHERE UPPER(codNEC) LIKE UPPER(?) ORDER BY codNEC";

  const CONSULTAR_NEC_POR_NOM = "SELECT * FROM nec WHERE UPPER(nomNEC) = UPPER(?)";

  const CONSULTAR_NEC_POR_NOM_APROX = "SELECT * FROM nec WHERE UPPER(nomNEC) LIKE UPPER(?) ORDER BY nomNEC";

}
?>