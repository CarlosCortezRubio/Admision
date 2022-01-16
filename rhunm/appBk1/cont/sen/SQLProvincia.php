<?php 
/** 
 * @file SQLProvincia.php 
 *  
 * Consultas SQL de la Tabla Provincia 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 11/08/2021
 *  
*/ 
class SQLProvincia 
{ 
  const AGREGAR_PROVINCIA = "INSERT INTO Provincia (idProvincia, idDepartamento, nomProvincia) VALUES (?, ?, ?) ";

  const ACTUALIZAR_PROVINCIA = "UPDATE Provincia SET idProvincia = ?, idDepartamento = ?, nomProvincia = ? WHERE idProvincia = ?";

  const ELIMINAR_PROVINCIA = "DELETE FROM Provincia WHERE idProvincia = ?";

  const CONSULTAR_PROVINCIA = "SELECT * FROM Provincia ORDER BY idProvincia";

  const CONSULTAR_PROVINCIA_POR_IDPROVINCIA = "SELECT * FROM Provincia WHERE idProvincia = ?";

  const CONSULTAR_PROVINCIA_POR_IDDEPARTAMENTO = "SELECT * FROM Provincia WHERE idDepartamento = ?";

  const CONSULTAR_PROVINCIA_POR_NOM = "SELECT * FROM Provincia WHERE UPPER(nomProvincia) = UPPER(?)";

  const CONSULTAR_PROVINCIA_POR_NOM_APROX = "SELECT * FROM Provincia WHERE UPPER(nomProvincia) LIKE UPPER(?) ORDER BY nomProvincia";

}
?>