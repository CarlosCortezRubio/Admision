<?php 
/** 
 * @file SQLSituacion.php 
 *  
 * Consultas SQL de la Tabla Situacion 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLSituacion 
{ 
  const AGREGAR_SITUACION = "INSERT INTO situacion (idSituacion, codSituacion, nomSituacion) VALUES (?, ?, ?) ";

  const ACTUALIZAR_SITUACION = "UPDATE situacion SET idSituacion = ?, codSituacion = ?, nomSituacion = ? WHERE idSituacion = ?";

  const ELIMINAR_SITUACION = "DELETE FROM situacion WHERE idSituacion = ?";

  const CONSULTAR_SITUACION = "SELECT * FROM situacion ORDER BY idSituacion";

  const CONSULTAR_SITUACION_POR_IDSITUACION = "SELECT * FROM situacion WHERE idSituacion = ?";

  const CONSULTAR_SITUACION_POR_COD = "SELECT * FROM situacion WHERE UPPER(codSituacion) = UPPER(?)";

  const CONSULTAR_SITUACION_POR_COD_APROX = "SELECT * FROM situacion WHERE UPPER(codSituacion) LIKE UPPER(?) ORDER BY codSituacion";

  const CONSULTAR_SITUACION_POR_NOM = "SELECT * FROM situacion WHERE UPPER(nomSituacion) = UPPER(?)";

  const CONSULTAR_SITUACION_POR_NOM_APROX = "SELECT * FROM situacion WHERE UPPER(nomSituacion) LIKE UPPER(?) ORDER BY nomSituacion";

}
?>