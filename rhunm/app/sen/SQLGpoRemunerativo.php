<?php 
/** 
 * @file SQLGpoRemunerativo.php 
 *  
 * Consultas SQL de la Tabla GpoRemunerativo 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLGpoRemunerativo 
{ 
  const AGREGAR_GPOREMUNERATIVO = "INSERT INTO gporemunerativo (idGpoRemunerativo, codGpoRemunerativo, nomGpoRemunerativo) VALUES (?, ?, ?) ";

  const ACTUALIZAR_GPOREMUNERATIVO = "UPDATE gporemunerativo SET idGpoRemunerativo = ?, codGpoRemunerativo = ?, nomGpoRemunerativo = ? WHERE idGpoRemunerativo = ?";

  const ELIMINAR_GPOREMUNERATIVO = "DELETE FROM gporemunerativo WHERE idGpoRemunerativo = ?";

  const CONSULTAR_GPOREMUNERATIVO = "SELECT * FROM gporemunerativo ORDER BY idGpoRemunerativo";

  const CONSULTAR_GPOREMUNERATIVO_POR_IDGPOREMUNERATIVO = "SELECT * FROM gporemunerativo WHERE idGpoRemunerativo = ?";

  const CONSULTAR_GPOREMUNERATIVO_POR_COD = "SELECT * FROM gporemunerativo WHERE UPPER(codGpoRemunerativo) = UPPER(?)";

  const CONSULTAR_GPOREMUNERATIVO_POR_COD_APROX = "SELECT * FROM gporemunerativo WHERE UPPER(codGpoRemunerativo) LIKE UPPER(?) ORDER BY codGpoRemunerativo";

  const CONSULTAR_GPOREMUNERATIVO_POR_NOM = "SELECT * FROM gporemunerativo WHERE UPPER(nomGpoRemunerativo) = UPPER(?)";

  const CONSULTAR_GPOREMUNERATIVO_POR_NOM_APROX = "SELECT * FROM gporemunerativo WHERE UPPER(nomGpoRemunerativo) LIKE UPPER(?) ORDER BY nomGpoRemunerativo";

}
?>