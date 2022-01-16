<?php 
/** 
 * @file SQLTipServidor.php 
 *  
 * Consultas SQL de la Tabla TipServidor 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLTipServidor 
{ 
  const AGREGAR_TIPSERVIDOR = "INSERT INTO TipServidor (idTipServidor, codTipServidor, nomTipServidor) VALUES (?, ?, ?) ";

  const ACTUALIZAR_TIPSERVIDOR = "UPDATE TipServidor SET idTipServidor = ?, codTipServidor = ?, nomTipServidor = ? WHERE idTipServidor = ?";

  const ELIMINAR_TIPSERVIDOR = "DELETE FROM TipServidor WHERE idTipServidor = ?";

  const CONSULTAR_TIPSERVIDOR = "SELECT * FROM TipServidor ORDER BY idTipServidor";

  const CONSULTAR_TIPSERVIDOR_POR_IDTIPSERVIDOR = "SELECT * FROM TipServidor WHERE idTipServidor = ?";

  const CONSULTAR_TIPSERVIDOR_POR_COD = "SELECT * FROM TipServidor WHERE UPPER(codTipServidor) = UPPER(?)";

  const CONSULTAR_TIPSERVIDOR_POR_COD_APROX = "SELECT * FROM TipServidor WHERE UPPER(codTipServidor) LIKE UPPER(?) ORDER BY codTipServidor";

  const CONSULTAR_TIPSERVIDOR_POR_NOM = "SELECT * FROM TipServidor WHERE UPPER(nomTipServidor) = UPPER(?)";

  const CONSULTAR_TIPSERVIDOR_POR_NOM_APROX = "SELECT * FROM TipServidor WHERE UPPER(nomTipServidor) LIKE UPPER(?) ORDER BY nomTipServidor";

}
?>