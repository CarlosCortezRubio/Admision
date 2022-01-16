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
  const AGREGAR_DISTRITO = "INSERT INTO distrito (idDistrito, idProvincia, nomDistrito) VALUES (?, ?, ?) ";

  const ACTUALIZAR_DISTRITO = "UPDATE distrito SET idDistrito = ?, idProvincia = ?, nomDistrito = ? WHERE idDistrito = ?";

  const ELIMINAR_DISTRITO = "DELETE FROM distrito WHERE idDistrito = ?";

  const CONSULTAR_DISTRITO = "SELECT * FROM distrito ORDER BY idDistrito";

  const CONSULTAR_DISTRITO_POR_IDDISTRITO = "SELECT * FROM distrito WHERE idDistrito = ?";

  const CONSULTAR_DISTRITO_POR_IDPROVINCIA = "SELECT * FROM distrito WHERE idProvincia = ?";

  const CONSULTAR_DISTRITO_POR_NOM = "SELECT * FROM distrito WHERE UPPER(nomDistrito) = UPPER(?)";

  const CONSULTAR_DISTRITO_POR_NOM_APROX = "SELECT * FROM distrito WHERE UPPER(nomDistrito) LIKE UPPER(?) ORDER BY nomDistrito";

}
?>