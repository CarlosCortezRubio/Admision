<?php 
/** 
 * @file SQLPais.php 
 *  
 * Consultas SQL de la Tabla Pais 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLPais 
{ 
  const AGREGAR_PAIS = "INSERT INTO pais (idPais, nomPais) VALUES (?, ?) ";

  const ACTUALIZAR_PAIS = "UPDATE pais SET idPais = ?, nomPais = ? WHERE idPais = ?";

  const ELIMINAR_PAIS = "DELETE FROM pais WHERE idPais = ?";

  const CONSULTAR_PAIS = "SELECT * FROM pais ORDER BY idPais";

  const CONSULTAR_PAIS_POR_IDPAIS = "SELECT * FROM pais WHERE idPais = ?";

  const CONSULTAR_PAIS_POR_NOM = "SELECT * FROM pais WHERE UPPER(nomPais) = UPPER(?)";

  const CONSULTAR_PAIS_POR_NOM_APROX = "SELECT * FROM pais WHERE UPPER(nomPais) LIKE UPPER(?) ORDER BY nomPais";

}
?>