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
  const AGREGAR_SITUACION = "INSERT INTO Situacion (idSituacion, codSituacion, nomSituacion) VALUES (?, ?, ?) ";

  const ACTUALIZAR_SITUACION = "UPDATE Situacion SET idSituacion = ?, codSituacion = ?, nomSituacion = ? WHERE idSituacion = ?";

  const ELIMINAR_SITUACION = "DELETE FROM Situacion WHERE idSituacion = ?";

  const CONSULTAR_SITUACION = "SELECT * FROM Situacion ORDER BY idSituacion";

  const CONSULTAR_SITUACION_POR_IDSITUACION = "SELECT * FROM Situacion WHERE idSituacion = ?";

  const CONSULTAR_SITUACION_POR_COD = "SELECT * FROM Situacion WHERE UPPER(codSituacion) = UPPER(?)";

  const CONSULTAR_SITUACION_POR_COD_APROX = "SELECT * FROM Situacion WHERE UPPER(codSituacion) LIKE UPPER(?) ORDER BY codSituacion";

  const CONSULTAR_SITUACION_POR_NOM = "SELECT * FROM Situacion WHERE UPPER(nomSituacion) = UPPER(?)";

  const CONSULTAR_SITUACION_POR_NOM_APROX = "SELECT * FROM Situacion WHERE UPPER(nomSituacion) LIKE UPPER(?) ORDER BY nomSituacion";

}
?>