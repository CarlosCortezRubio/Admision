<?php 
/** 
 * @file SQLTipoDoc.php 
 *  
 * Consultas SQL de la Tabla TipoDoc 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLTipoDoc 
{ 
  const AGREGAR_TIPODOC = "INSERT INTO TipoDoc (idTipoDoc, nomTipoDoc) VALUES (?, ?) ";

  const ACTUALIZAR_TIPODOC = "UPDATE TipoDoc SET idTipoDoc = ?, nomTipoDoc = ? WHERE idTipoDoc = ?";

  const ELIMINAR_TIPODOC = "DELETE FROM TipoDoc WHERE idTipoDoc = ?";

  const CONSULTAR_TIPODOC = "SELECT * FROM TipoDoc ORDER BY idTipoDoc";

  const CONSULTAR_TIPODOC_POR_IDTIPODOC = "SELECT * FROM TipoDoc WHERE idTipoDoc = ?";

  const CONSULTAR_TIPODOC_POR_NOM = "SELECT * FROM TipoDoc WHERE UPPER(nomTipoDoc) = UPPER(?)";

  const CONSULTAR_TIPODOC_POR_NOM_APROX = "SELECT * FROM TipoDoc WHERE UPPER(nomTipoDoc) LIKE UPPER(?) ORDER BY nomTipoDoc";

}
?>