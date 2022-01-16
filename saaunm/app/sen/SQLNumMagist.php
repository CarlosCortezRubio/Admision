<?php 
/** 
 * @file SQLNumMagist.php 
 *  
 * Consultas SQL de la Tabla NumMagist 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLNumMagist 
{ 
  const AGREGAR_NUMMAGIST = "INSERT INTO nummagist (idNumMagist, codNumMagist, nomNumMagist) VALUES (?, ?, ?) ";

  const ACTUALIZAR_NUMMAGIST = "UPDATE nummagist SET idNumMagist = ?, codNumMagist = ?, nomNumMagist = ? WHERE idNumMagist = ?";

  const ELIMINAR_NUMMAGIST = "DELETE FROM nummagist WHERE idNumMagist = ?";

  const CONSULTAR_NUMMAGIST = "SELECT * FROM nummagist ORDER BY idNumMagist";

  const CONSULTAR_NUMMAGIST_POR_IDNUMMAGIST = "SELECT * FROM nummagist WHERE idNumMagist = ?";

  const CONSULTAR_NUMMAGIST_POR_COD = "SELECT * FROM nummagist WHERE UPPER(codNumMagist) = UPPER(?)";

  const CONSULTAR_NUMMAGIST_POR_COD_APROX = "SELECT * FROM nummagist WHERE UPPER(codNumMagist) LIKE UPPER(?) ORDER BY codNumMagist";

  const CONSULTAR_NUMMAGIST_POR_NOM = "SELECT * FROM nummagist WHERE UPPER(nomNumMagist) = UPPER(?)";

  const CONSULTAR_NUMMAGIST_POR_NOM_APROX = "SELECT * FROM nummagist WHERE UPPER(nomNumMagist) LIKE UPPER(?) ORDER BY nomNumMagist";

}
?>