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
  const AGREGAR_GENERO = "INSERT INTO Genero (idGenero, nomGenero) VALUES (?, ?) ";

  const ACTUALIZAR_GENERO = "UPDATE Genero SET idGenero = ?, nomGenero = ? WHERE idGenero = ?";

  const ELIMINAR_GENERO = "DELETE FROM Genero WHERE idGenero = ?";

  const CONSULTAR_GENERO = "SELECT * FROM Genero ORDER BY idGenero";

  const CONSULTAR_GENERO_POR_IDGENERO = "SELECT * FROM Genero WHERE idGenero = ?";

  const CONSULTAR_GENERO_POR_NOM = "SELECT * FROM Genero WHERE UPPER(nomGenero) = UPPER(?)";

  const CONSULTAR_GENERO_POR_NOM_APROX = "SELECT * FROM Genero WHERE UPPER(nomGenero) LIKE UPPER(?) ORDER BY nomGenero";

}
?>