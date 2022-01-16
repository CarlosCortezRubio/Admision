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
  const AGREGAR_NUMMAGIST = "INSERT INTO NumMagist (idNumMagist, codNumMagist, nomNumMagist) VALUES (?, ?, ?) ";

  const ACTUALIZAR_NUMMAGIST = "UPDATE NumMagist SET idNumMagist = ?, codNumMagist = ?, nomNumMagist = ? WHERE idNumMagist = ?";

  const ELIMINAR_NUMMAGIST = "DELETE FROM NumMagist WHERE idNumMagist = ?";

  const CONSULTAR_NUMMAGIST = "SELECT * FROM NumMagist ORDER BY idNumMagist";

  const CONSULTAR_NUMMAGIST_POR_IDNUMMAGIST = "SELECT * FROM NumMagist WHERE idNumMagist = ?";

  const CONSULTAR_NUMMAGIST_POR_COD = "SELECT * FROM NumMagist WHERE UPPER(codNumMagist) = UPPER(?)";

  const CONSULTAR_NUMMAGIST_POR_COD_APROX = "SELECT * FROM NumMagist WHERE UPPER(codNumMagist) LIKE UPPER(?) ORDER BY codNumMagist";

  const CONSULTAR_NUMMAGIST_POR_NOM = "SELECT * FROM NumMagist WHERE UPPER(nomNumMagist) = UPPER(?)";

  const CONSULTAR_NUMMAGIST_POR_NOM_APROX = "SELECT * FROM NumMagist WHERE UPPER(nomNumMagist) LIKE UPPER(?) ORDER BY nomNumMagist";

}
?>