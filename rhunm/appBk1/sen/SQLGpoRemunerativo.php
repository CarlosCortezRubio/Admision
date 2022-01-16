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
  const AGREGAR_GPOREMUNERATIVO = "INSERT INTO GpoRemunerativo (idGpoRemunerativo, codGpoRemunerativo, nomGpoRemunerativo) VALUES (?, ?, ?) ";

  const ACTUALIZAR_GPOREMUNERATIVO = "UPDATE GpoRemunerativo SET idGpoRemunerativo = ?, codGpoRemunerativo = ?, nomGpoRemunerativo = ? WHERE idGpoRemunerativo = ?";

  const ELIMINAR_GPOREMUNERATIVO = "DELETE FROM GpoRemunerativo WHERE idGpoRemunerativo = ?";

  const CONSULTAR_GPOREMUNERATIVO = "SELECT * FROM GpoRemunerativo ORDER BY idGpoRemunerativo";

  const CONSULTAR_GPOREMUNERATIVO_POR_IDGPOREMUNERATIVO = "SELECT * FROM GpoRemunerativo WHERE idGpoRemunerativo = ?";

  const CONSULTAR_GPOREMUNERATIVO_POR_COD = "SELECT * FROM GpoRemunerativo WHERE UPPER(codGpoRemunerativo) = UPPER(?)";

  const CONSULTAR_GPOREMUNERATIVO_POR_COD_APROX = "SELECT * FROM GpoRemunerativo WHERE UPPER(codGpoRemunerativo) LIKE UPPER(?) ORDER BY codGpoRemunerativo";

  const CONSULTAR_GPOREMUNERATIVO_POR_NOM = "SELECT * FROM GpoRemunerativo WHERE UPPER(nomGpoRemunerativo) = UPPER(?)";

  const CONSULTAR_GPOREMUNERATIVO_POR_NOM_APROX = "SELECT * FROM GpoRemunerativo WHERE UPPER(nomGpoRemunerativo) LIKE UPPER(?) ORDER BY nomGpoRemunerativo";

}
?>