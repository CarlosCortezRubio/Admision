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
  const AGREGAR_TIPODOC = "INSERT INTO tipodoc (idTipoDoc, nomTipoDoc) VALUES (?, ?) ";

  const ACTUALIZAR_TIPODOC = "UPDATE tipodoc SET idTipoDoc = ?, nomTipoDoc = ? WHERE idTipoDoc = ?";

  const ELIMINAR_TIPODOC = "DELETE FROM tipodoc WHERE idTipoDoc = ?";

  const CONSULTAR_TIPODOC = "SELECT * FROM tipodoc ORDER BY idTipoDoc";

  const CONSULTAR_TIPODOC_POR_IDTIPODOC = "SELECT * FROM tipodoc WHERE idTipoDoc = ?";

  const CONSULTAR_TIPODOC_POR_NOM = "SELECT * FROM tipodoc WHERE UPPER(nomTipoDoc) = UPPER(?)";

  const CONSULTAR_TIPODOC_POR_NOM_APROX = "SELECT * FROM tipodoc WHERE UPPER(nomTipoDoc) LIKE UPPER(?) ORDER BY nomTipoDoc";

}
?>