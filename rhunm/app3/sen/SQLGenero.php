<?php 
/** 
 * @file SQLGenero.php 
 *  
 * Consultas SQL de la Tabla Genero 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLGenero 
{ 
  const AGREGAR_GENERO = "INSERT INTO genero (idGenero, nomGenero) VALUES (?, ?) ";

  const ACTUALIZAR_GENERO = "UPDATE genero SET idGenero = ?, nomGenero = ? WHERE idGenero = ?";

  const ELIMINAR_GENERO = "DELETE FROM genero WHERE idGenero = ?";

  const CONSULTAR_GENERO = "SELECT * FROM genero ORDER BY idGenero";

  const CONSULTAR_GENERO_POR_IDGENERO = "SELECT * FROM genero WHERE idGenero = ?";

  const CONSULTAR_GENERO_POR_NOM = "SELECT * FROM genero WHERE UPPER(nomGenero) = UPPER(?)";

  const CONSULTAR_GENERO_POR_NOM_APROX = "SELECT * FROM genero WHERE UPPER(nomGenero) LIKE UPPER(?) ORDER BY nomGenero";

}
?>