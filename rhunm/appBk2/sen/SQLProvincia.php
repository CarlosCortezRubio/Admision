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
  const AGREGAR_PROVINCIA = "INSERT INTO provincia (idProvincia, idDepartamento, nomProvincia) VALUES (?, ?, ?) ";

  const ACTUALIZAR_PROVINCIA = "UPDATE provincia SET idProvincia = ?, idDepartamento = ?, nomProvincia = ? WHERE idProvincia = ?";

  const ELIMINAR_PROVINCIA = "DELETE FROM provincia WHERE idProvincia = ?";

  const CONSULTAR_PROVINCIA = "SELECT * FROM provincia ORDER BY idProvincia";

  const CONSULTAR_PROVINCIA_POR_IDPROVINCIA = "SELECT * FROM provincia WHERE idProvincia = ?";

  const CONSULTAR_PROVINCIA_POR_IDDEPARTAMENTO = "SELECT * FROM provincia WHERE idDepartamento = ?";

  const CONSULTAR_PROVINCIA_POR_NOM = "SELECT * FROM provincia WHERE UPPER(nomProvincia) = UPPER(?)";

  const CONSULTAR_PROVINCIA_POR_NOM_APROX = "SELECT * FROM provincia WHERE UPPER(nomProvincia) LIKE UPPER(?) ORDER BY nomProvincia";

}
?>