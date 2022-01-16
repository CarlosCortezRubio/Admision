<?php 
/** 
 * @file SQLDistrito.php 
 *  
 * Consultas SQL de la Tabla Distrito 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 11/08/2021
 *  
*/ 
class SQLDistrito 
{ 
  const AGREGAR_DISTRITO = "INSERT INTO Distrito (idDistrito, idProvincia, nomDistrito) VALUES (?, ?, ?) ";

  const ACTUALIZAR_DISTRITO = "UPDATE Distrito SET idDistrito = ?, idProvincia = ?, nomDistrito = ? WHERE idDistrito = ?";

  const ELIMINAR_DISTRITO = "DELETE FROM Distrito WHERE idDistrito = ?";

  const CONSULTAR_DISTRITO = "SELECT * FROM Distrito ORDER BY idDistrito";

  const CONSULTAR_DISTRITO_POR_IDDISTRITO = "SELECT * FROM Distrito WHERE idDistrito = ?";

  const CONSULTAR_DISTRITO_POR_IDPROVINCIA = "SELECT * FROM Distrito WHERE idProvincia = ?";

  const CONSULTAR_DISTRITO_POR_NOM = "SELECT * FROM Distrito WHERE UPPER(nomDistrito) = UPPER(?)";

  const CONSULTAR_DISTRITO_POR_NOM_APROX = "SELECT * FROM Distrito WHERE UPPER(nomDistrito) LIKE UPPER(?) ORDER BY nomDistrito";

}
?>