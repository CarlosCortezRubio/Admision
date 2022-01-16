<?php 
/** 
 * @file SQLGenero.php 
 *  
 * Consultas SQL de la Tabla Genero 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/11/2021
 *  
*/ 
class SQLGenero 
{ 
  const AGREGAR_GENERO = "INSERT INTO Genero (IDGENERO, NOMGENERO) VALUES (?, ?) ";

  const ACTUALIZAR_GENERO = "UPDATE Genero SET IDGENERO = ?, NOMGENERO = ? WHERE idGenero = ?";

  const ELIMINAR_GENERO = "DELETE FROM Genero WHERE idGenero = ?";

  const CONSULTAR_GENERO = "SELECT * FROM Genero ORDER BY IDGENERO";

  const CONSULTAR_GENERO_POR_IDGENEROGENERO = "SELECT * FROM Genero WHERE IDGENEROGenero = ?";

  const CONSULTAR_GENERO_POR_NOMGENERO = "SELECT * FROM Genero WHERE UPPER(NOMGENEROGenero) = UPPER(?)";

  const CONSULTAR_GENERO_POR_NOMGENERO_APROX = "SELECT * FROM Genero WHERE UPPER(NOMGENEROGenero) LIKE UPPER(?) ORDER BY NOMGENEROGenero";

}
?>